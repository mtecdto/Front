<?php
    define('HOST', '172.16.108.49');
    define('DBNAME', 'dto_keys');
    define('USER', 'dtoadm');
    define('PASSWORD', 'dtoAdmin2022$lab');

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

        private function connectDatabase(){
            try 
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);
            } 
            catch (PDOException $e) 
            {
                echo "Error to connect with Database!".$e->getMessage();
                die();
            }
        } 

    }
?>
