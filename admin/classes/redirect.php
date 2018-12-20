<?php
    class Redirect{
        public function __construct($url) {
            if($url){
                if($url){
                    echo '<script>location.href="'.$url.'";</script>';
                }
            }
        }
    }
?>