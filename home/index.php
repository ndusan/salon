HOME

<form action="/" method="post">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token'] = md5(uniqid(rand(), TRUE)); ?>" />
    <p>
        Symbol: <input type="text" name="name" class="required2"/><br />
        Shares: <input type="text" name="email" class="required2"/><br />
                <input type="submit" value="Send" />
    </p>
</form>

<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js#appId=109028209203479&amp;xfbml=1"></script>
<fb:like href="http://salonlepote.co.rs" send="false" layout="box_count" width="30" show_faces="false" font="arial"></fb:like>


<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:send href="http://salonlepote.co.rs" font="arial"></fb:send>