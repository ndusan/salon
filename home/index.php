HOME

<form action="/" method="post">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token'] = md5(uniqid(rand(), TRUE)); ?>" />
    <p>
        Symbol: <input type="text" name="name" class="required2"/><br />
        Shares: <input type="text" name="email" class="required2"/><br />
                <input type="submit" value="Send" />
    </p>
</form>