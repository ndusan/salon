

<link href="/public/css/default.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="/public/js/jquery-1.6.2.min.js"></script> 
  <script type="text/javascript" src="/public/js/default.js"></script> 


<ul>
    <?php foreach($routes as $route):?>
    <li><a href="<?php echo $route['url'];?>"><?php echo $_t[$route['folder'].'.link'];?></a></li>
    <?php endforeach; ?>
</ul>




<?php require_once $params['folder'].'/'.$params['file']; ?>