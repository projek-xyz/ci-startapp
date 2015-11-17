<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Skeleton_install extends APP_Migration
{
    private $session_table = [
        self::FLAG_AUTOTIMESTAMP => false,
        self::FLAG_DESTRUCTIVE => true,
        self::DB_SCHEMAS => [
            'id'         => ['type' => 'varchar', 'constraint' => 40, 'key' => true],
            'ip_address' => ['type' => 'varchar', 'constraint' => 45],
            'timestamp'  => ['type' => 'int', 'constraint' => 10, 'unsigned' => true, 'default' => '0', 'key' => 'ci_sessions_timestamp'],
            'data'       => ['type' => 'blob'],
        ],
    ];

    private $settings_table = [
        self::FLAG_AUTOTIMESTAMP => false,
        self::DB_SCHEMAS => [
            'id'        => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true, 'key' => true],
            'belong_to' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'default' => 0, 'key' => 'user_id'],
            'path'      => ['type' => 'varchar', 'constraint' => 100, 'default' => ''],
            'name'      => ['type' => 'varchar', 'constraint' => 100],
            'value'     => ['type' => 'longtext', 'null' => true],
        ],
        self::DB_DATA => [
            ['belong_to' => 0, 'path' => '', 'name' => 'email_protocol',        'value' => '0'],
            ['belong_to' => 0, 'path' => '', 'name' => 'email_mailpath',        'value' => NULL],
            ['belong_to' => 0, 'path' => '', 'name' => 'email_smtp_host',       'value' => NULL],
            ['belong_to' => 0, 'path' => '', 'name' => 'email_smtp_user',       'value' => NULL],
            ['belong_to' => 0, 'path' => '', 'name' => 'email_smtp_pass',       'value' => NULL],
            ['belong_to' => 0, 'path' => '', 'name' => 'email_smtp_port',       'value' => NULL],
            ['belong_to' => 0, 'path' => '', 'name' => 'email_smtp_timeout',    'value' => '30'],
            ['belong_to' => 0, 'path' => '', 'name' => 'recaptcha_public_key',  'value' => NULL],
            ['belong_to' => 0, 'path' => '', 'name' => 'recaptcha_private_key', 'value' => NULL],
        ],
    ];

    public function tables()
    {
        $tables = ['settings' => $this->settings_table];
        $session = config_item('sess_save_path');

        if (config_item('sess_driver') == 'database' && $session !== NULL) {
            $tables[$session] = $this->session_table;
        }

        return $tables;
    }
}
