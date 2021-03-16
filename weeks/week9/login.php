<?php


include('server.php');






?>
<h1>
    Login
</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

<fieldset>
    <label>
        Username
    </label>
    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']);?>">
    <label>
        Password
    </label>
    <input type="password" name="passwordlogin">
    <?php
        include('includes/errors.php');
    ?>

    <button type="submit" class="button" name="login_user"> Login </button>
    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> Reset</button>
</fieldset>
</form>
<p class="center">
    Haven't registered yet? <a href="register.php"> Register Here! </a>
</p>
</p>