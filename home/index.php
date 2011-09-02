HOME

<form action="/" method="post">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token'] = md5(uniqid(rand(), TRUE)); ?>" />
    <p>
        Symbol: <input type="text" name="symbol" /><br />
        Shares: <input type="text" name="shares" /><br />
                <input type="submit" value="Buy" />
    </p>
</form>