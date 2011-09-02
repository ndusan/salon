<?php

//If there is post request
if(!empty($_POST)){
    
    //Work on form only if tocken if verified
    if(!empty($_POST['token']) && !empty($_SESSION['token']) && $_SESSION['token'] === $_POST['token']){
    
        print_r($_POST);
    }
}