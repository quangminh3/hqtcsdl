<?php
    class Session{
        //session start function
        public function start(){
            session_start();
            
        }
        //set session
        public function set($id, $username){
            $_SESSION['id'] = $id;
            $_SESSION['user']= $username;
            
          
        }
        //get session info
        public function get(){
            if(isset($_SESSION['user'])){
                $user = $_SESSION['user'];
            }
            else{
                $user = null;
            }
            return $user;
                
        }
        //Destroy the session
        public function destroy(){
            session_destroy();
        }
        
    }

?>