<?php 
session_start();
function generate_csrf(){
    if(!isset($_SESSION["csrf_token"])) {
        $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
    }
}