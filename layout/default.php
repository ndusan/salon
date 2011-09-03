<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Salon lepote u ulici Jelisavete Načić (bivša Pavla Papa) broj 1, Beograd. Epilacija šećernom penom, nešto sasvim novo kod nas. Alexandria Professional.">
        <meta name="keywords" content="salon lepote, epilacija, šećerna pena, Beograd, Jelisavete Načić (bivša Pavla Papa) broj 1, Lan Team, pedikir, manikir">

        <link href="/public/css/default.css" rel="stylesheet" type="text/css" />
        <link href="/public/css/default.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/public/js/jquery-1.6.2.min.js"></script> 
        <script type="text/javascript" src="/public/js/jquery.bxSlider.min.js"></script> 
        <script type="text/javascript" src="/public/js/default.js"></script>
    </head>
    <body>
    <div class="main">
        <div class="sidebar">
            <a href="#" class="logo">
                <img src="../public/images/logo.png" width="160" height="45" alt="salon lepote" />
            </a>
            <ul class="mainNav">
                <?php foreach ($routes as $route): ?>
                    <li><a href="<?php echo $route['url']; ?>" <?php echo ($route['folder'] == $params['folder'] ? 'class="active"' : ''); ?>><?php echo $_t[$route['folder'] . '.link']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="content">
            <?php require_once $params['folder'] . '/' . $params['file']; ?>
        </div>
    </div>
    <div class="footer">
        <span class="fr">
            Copyright &COPY; 2011 salonlepote.co.rs. Sva prava zadržana.
        </span>
        <ul>
            <li><h4>Salon lepote - Lan Team</h4></li>
            <li>ul. Dalmatinska 75, Beograd</li>
            <li>tel: +381 (11) 3292 - 261</li>
            <li>mob: +381 (64) 1515 - 895</li>
        </ul>
    </div>
    </body>
</html>

