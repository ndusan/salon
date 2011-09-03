HOME



<!-- Like button -->
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:like href="http://salonlepote.co.rs" send="false" layout="button_count" show-faces="false" width="20" font="arial" colorscheme="light" />


<!-- Send to friend button -->
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:send href="http://salonlepote.co.rs" font="arial"></fb:send>





<!--Facepile of people who liked salonlepote.co.rs -->
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:facepile href="http://salonlepote.co.rs" size="large" width="200" max_rows="10"></fb:facepile>




<? include_once __DIR__.'/../public/news.php';?>
<?php if(!empty($_news)):?>
<!-- News -->
<ul id="news">
  <?php foreach($_news as $n): ?>
  <li>
      <h3><?php echo $n['naslov']; ?></h3>
      <span><?php echo $n['datum']; ?></span>
      <p><?php echo $n['tekst']; ?></p>
  </li>
  <?php endforeach; ?>
</ul>
<?php endif;?>



