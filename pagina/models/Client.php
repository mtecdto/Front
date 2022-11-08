<?php

    require_once ("./configuration/connect.php");

    class ClientModel extends Connect{
        
        private $table;

        function __construct(){
            parent::__construct();
            $this->table = "general_keys";
        }

        public function getAll(){
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }

        public function search($data,$view=null){
            if($view == 'index')
            {
                $sqlSelect = $this->connection->query("SELECT * FROM $this->table WHERE idkey = '$data' or keycontent LIKE '%$data%' or serialcontent LIKE '%$data%' or keystate LIKE '%$data% ' or bancada LIKE '%$data%'");
            }
            else
            {
                $sqlSelect = $this->connection->query("SELECT * FROM $this->table WHERE idkey = $data");
            }
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }

        public function new($data){
            $sqlUpdate = "INSERT INTO $this->table (keycontent,serialcontent,keystate) VALUES (:keycontent, :serialcontent, :keystate)";
            $resultQuery = $this->connection->prepare($sqlUpdate)->execute(['keycontent'=>$data['keycontent'],'serialcontent'=>$data['serialcontent'],'keystate'=>$data['keystate']]);
            return $this->verifyReturn($resultQuery);
            
        }

        public function edit($data){
            if(strlen($data['']) <= 11)
            {
                $sqlUpdate = "UPDATE $this->table SET keycontent = :keycontent, serialcontent = :serialcontent, keystate = :keystate WHERE idkey = :idkey";
                $resultQuery = $this->connection->prepare($sqlUpdate)->execute(['idkey'=>$data["idkey"],'keycontent'=>$data["keycontent"],'serialcontent'=>$data["serialcontent"],'keystate'=>$data["keystate"]]);
                return $this->verifyReturn($resultQuery);
            }
            return false;
        }

        public function delete($id){ 
            if(!$this->search($id))
            {
                return false;
            }
            $sqlDelete = "DELETE FROM $this->table WHERE idkey = :idkey";
            $resultQuery = $this->connection->prepare($sqlDelete)->execute(['idkey'=>$id]);
            return $this->verifyReturn($resultQuery);
        }

        public function verifyReturn($result){
            if($result == 1)
            {
                return true;
            }
            return false;
        }
    }

?>
