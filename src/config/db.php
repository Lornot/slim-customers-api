<?php

    class db {

        private $dbhost = 'localhost';
        private $dbuser = 'root';
        private $dbpass = '';
        private $dbname = 'slim-api';

        // Connect
        public function connect(){
            $dns = 'mysql:host='.$this->dbhost.';dbname='.$this -> dbname;
            $dbconnection = new PDO($dns, $this -> dbuser, $this -> dbpass);
            $dbconnection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbconnection;
        }


    }