<ul>
    <?php foreach($routes as $route):?>
    <li><a href="<?php echo $route['url'];?>"><?php echo $_t[$route['folder'].'.link'];?></a></li>
    <?php endforeach; ?>
</ul>


<?php require_once $params['folder'].'/'.$params['file']; ?>