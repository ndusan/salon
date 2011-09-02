<?php

//If there is post request
if(!empty($_POST)){
    
    //Required
    $reqFields = array('name', 'email');
    $allOk = true;
    foreach($reqFields as $filed){
        if(empty($_POST[$filed])) $allOk = false;
    }
    
    if(!$allOk) return false;
    
    //Work on form only if tocken if verified
    if(!empty($_POST['token']) && !empty($_SESSION['token']) && $_SESSION['token'] === $_POST['token']){
        
        //Create the Mailer using your created Transport
        $mailer = Swift_Mailer::newInstance($transport);

        //To
        $to = (isset($_POST['to']) ? trim($_POST['to']) : SWT_TO);
        
        //Subject
        $subject = (isset($_POST) ? trim($_POST) : SWT_SUBJECT);
        
        //Create body
        $body = "";
        
        //Include swiftmailer
        require_once '/lib/swiftmailer/swift_required.php';
        
        //Create the Transport
        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com')
          ->setPort(465)
          ->setEncryption('ssl')
          ->setUsername(SWT_USERNAME)
          ->setPassword(SWT_PASSWORD);
          
        $mailer = Swift_Mailer::newInstance($transport);
        
        $message = Swift_Message::newInstance()
          ->setSubject($subject)
          ->setFrom(array(SWT_FROM => 'Salon lepote LanTeam'))
          ->setTo(array($to))
          ->setBody($body, 'text/html');
        
        $numSent = $mailer->send($message);
                  
    }
}