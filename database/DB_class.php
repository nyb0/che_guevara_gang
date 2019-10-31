<?php

    Class Database {
        
        private $link;

        public function __construct()
        {
            $this->connect();
        }

        private function connect()
        {
            $config = require_once 'config_db.php';
            $dsn = "{$config['db_type']}:host = {$config['server_name']};dbname = {$config['db_name']};charset={$config['charset']}";
            $this->link = new PDO($dsn , $config['db_user'], $config['db_pass'], $config['options']);
            $this->link->exec('USE log_users;');
            return $this;
        }

        public function execute($sql)
        {
            $sth = $this->link->prepare($sql);
            return $sth->execute();
        }

        public function query($sql)
        {
            $exe = $this->link->prepare($sql);
            $exe->execute();
            $result = $exe->fetchAll(PDO:: FETCH_ASSOC);

            if ($result === false){
                return [];
            }

            return $result;
        }
    }


?>