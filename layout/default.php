<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Salon lepote u ulici Jelisavete Načić (bivša Pavla Papa) broj 1, Beograd. Epilacija šećernom penom, nešto sasvim novo kod nas. Alexandria Professional.">
            <meta name="keywords" content="salon lepote, epilacija, šećerna pena, Beograd, Jelisavete Načić (bivša Pavla Papa) broj 1, Lan Team, pedikir, manikir">
                <title>Salon lepote - Lan Team<?php echo $params['folder'] ? ' | ' . $_t[$route['folder'] . '.link'] : ''; ?></title>
                <link href="/public/css/default.css" rel="stylesheet" type="text/css" />
                <script type="text/javascript" src="/public/js/jquery-1.6.2.min.js"></script> 
                <script type="text/javascript" src="/public/js/jquery.bxSlider.min.js"></script> 
                <script type="text/javascript" src="/public/js/slides.min.jquery.js"></script> 
                <script type="text/javascript" src="/public/js/default.js"></script>
                <script type="text/javascript">

                    var _gaq = _gaq || [];
                    _gaq.push(['_setAccount', 'UA-25499393-1']);
                    _gaq.push(['_trackPageview']);

                    (function() {
                        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                    })();

                </script>
                <link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
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
                        <ul class="bottom">
                            <?php foreach ($routes as $route): ?>
                            <li>
                                <a href="<?php echo $route['url']; ?>"><?php echo $_t[$route['folder'] . '.link']; ?></a>
                                <?php if($route['folder'] == 'products'):?>
                                <ul>
                                    <li><a href="<?php echo $route['url']; ?>#SALTSPRING-PRODUCT">SALTSPRING™</a></li>
                                    <li><a href="<?php echo $route['url']; ?>#MUD-PUDDLE-PRODUCT">MUD PUDDLE™</a></li>
                                    <li><a href="<?php echo $route['url']; ?>#DERMAWEAR-PRODUCT">DERMAWEAR™</a></li>
                                    <li><a href="<?php echo $route['url']; ?>#PHENOMEN-ALL-PRODUCT">PHENOMEN-ALL™</a></li>
                                </ul>
                                <?php elseif($route['folder'] == 'service'):?>
                                <ul>
                                    <li><a href="<?php echo $route['url']; ?>#EPILACIJA-TELA">epilacija tela</a></li>
                                    <li><a href="<?php echo $route['url']; ?>#ŠEĆERNI-PROIZVOD">šećerni proizvod</a></li>
                                    <li><a href="<?php echo $route['url']; ?>#ALEXANDRIA-STRUČNJACI">ALEXANDRIA stručnjaci</a></li>
                                    <li><a href="<?php echo $route['url']; ?>#TRETMANI">tretmani</a></li>
                                    <li><a href="<?php echo $route['url']; ?>#PRIPREMA-ZA-TRETMAN">priprema za tretman</a></li>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="footer">
                            <span class="fr">
                                Copyright &COPY; 2011 salonlepote.co.rs. Sva prava zadržana.
                            </span>
                            <ul>
                                <li><h4>Salon lepote - Lan Team</h4></li>
                                <li>ul. Jelisavete Načić (bivša Pavla Papa) 1, Beograd</li>
                                <li>tel: +381 (11) 337 - 00 - 25</li>
                                <li>mob: +381 (64) 1515 - 895</li>
                            </ul>
                        </div>
                    </body>
                    </html>

