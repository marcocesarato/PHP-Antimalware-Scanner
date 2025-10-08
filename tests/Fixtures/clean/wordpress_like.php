<?php

/**
 * Clean WordPress-like file for testing.
 */
function get_user_data($user_id)
{
    // Safe database query simulation
    $safe_user_id = intval($user_id);

    return [
        'id' => $safe_user_id,
        'name' => 'Test User',
        'email' => 'test@example.com',
    ];
}

$user = get_user_data(123);
print_r($user);
