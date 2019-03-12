<?php
pc_base::load_sys_class('model', '', 0);
class mooc_model extends model {
    public function __construct() {
        $this->db_config = pc_base::load_config('database');
        $this->db_setting = 'default';
        $this->table_name = 'course';
        parent::__construct();
    }
}