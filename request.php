<?php
//Response
$output = array('error'=>true,'msg'=>'required_fields');

//If there is post request
if(!empty($_POST)){
    
    //Required
    $reqFields = array('name', 'email');
    $allOk = true;
    foreach($reqFields as $filed){
        if(empty($_POST[$filed])){
            $allOk = false;
        }
    }
    
    if(!$allOk){
        echo json_encode($output);
        return;
    }
    
    //Work on form only if tocken if verified
    if(!empty($_POST['token']) && !empty($_SESSION['token']) && $_SESSION['token'] === $_POST['token']){
        
        
        include_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
        //Include swiftmailer
        include_once $_SERVER['DOCUMENT_ROOT'].'/lib/swiftmailer/swift_required.php';

        //Create the Transport
        try{
        
            //Subject
            $subject = (isset($_POST['subject']) ? trim($_POST['subject']) : SUBJECT);
        
            //Create body
            $body = "Ime i prezime: ". $_POST['name']."\n";
            $body.= "El.adresa: ". $_POST['email']."\n";
            $body.= "Pitanje: ". $_POST['question']."\n";
            
            mail(TO, $subject, $body, "From: ".FROM);
            
        }catch(Exception $e){
            echo $e->getMessage();
        }
        $output = array('error'=>false, 'msg'=>'email_sent');
    }else{
        $output = array('error'=>true, 'msg'=>'token_missing');
    }
}

echo json_encode($output);