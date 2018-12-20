 <?php
    class DB{
        private $servername = "localhost";
        private $username = "root";
        private $password = "admin";
        private $conn = null;
        public function __construct(){
            try {
                $this->conn = new PDO("mysql:host=$this->servername;dbname=db_news", $this->username, $this->password);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        
        public function close() {
            $this->conn = null;
        }
        public function num_rows($sql){
            $result = $this->conn->prepare($sql);
            $result->execute();
            if($result->rowCount() > 0){
                return $result->rowCount();
            }
        }
        public function insert($sql){
            if($this->conn){
                $this->conn->exec($sql);
            }
        }
        public function update($sql){
            if($this->conn){
                $this->conn->exec($sql);
            }
        } 
         public function delete($sql){
            if($this->conn){
                $this->conn->exec($sql);
            }
        }        
        public function select($sql){
            if($this->num_rows($sql) > 0){
                $result = $this->conn->prepare($sql);                
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result->execute();
                return $result->fetchAll();
                
                
            }            
        }     
       
    }
?> 