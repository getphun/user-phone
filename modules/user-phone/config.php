<?php
/**
 * user-phone config file
 * @package user-phone
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'user-phone',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/user-phone',
    '__files' => [
        'modules/user-phone' => [
            'install',
            'remove',
            'update'
        ]
    ],
    '__dependencies' => [
        'user'
    ],
    '_services' => [],
    '_autoload' => [
        'classes' => [
            'UserPhone\\Model\\UserPhone' => 'modules/user-phone/model/UserPhone.php'
        ],
        'files' => []
    ]
];