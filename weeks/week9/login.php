<?php


include('server.php');






?>
<head>
<style>
        .wrapper {
            height: 100%;
            width: 100%;
            margin: 0 auto;
        }
        form {

            width: 600px;
            margin: 0 auto;
            align-self: center;
            background: lightblue;

        }
        ul li  {
            margin: 4px;
            list-style-type: none;
            font-size: 1.2em;
        }
        input {
            font-size: 1.2em;
        }
        .button {
            margin-top: 10px;
            background: green;
            color: white;
            font-size: 1.6em;
        }
        .error {
            margin-top: 10px;
            text-decoration: underline;
            padding-left: 10px;
            color: red;
            font-weight: bolder;
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div id="wrapper" class="wrapper">
    <h1> Login </h1>

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
    <button type="button" class="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> Reset</button>

</fieldset>
</form>
<p class="center">
    Haven't registered yet? <a href="register.php"> Register Here! </a>
</p>
</p>
</div>
</body>
