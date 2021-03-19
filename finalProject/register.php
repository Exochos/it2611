<?php 
  session_start();                  // We want session vars
  ob_start();                       // Prevents header errors.
  define('DEBUG', 'TRUE');          // we want to see errors.
  include('server.php');            // server is how we going to process this data
  include('includes/config.php');   // config is general code
  include('includes/header.php');   // header gives us our nav bar
  ?>


    <!-- Begin page content -->
    <main role="main" class="container">
    <div class="bg"></div>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                            <h3 class="text-center text-dark">Register</h3>
                            <div class="form-group">
                                <label for="firstname" class="text-dark">First Name</label>
                                    <input type="text" class="form-control" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']);?>"></input>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="text-dark">Last Name</label>
                                <input type="text" class="form-control" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']);?>"></input>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-dark">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>"></input>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Username:</label><br>
                                <input type="text" name="userName" id="username" class="form-control" value="<?php if(isset($_POST['userName'])) echo htmlspecialchars($_POST['userName']);?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Password Confirm:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-dark"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-light btn-lg" value="register">
                                <button type="button" class="btn btn-light btn-lg" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">reset</button>
                            </div>
                            <div class="form-group">
                                <?php include('includes/errors.php'); ?>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="login.php" class="text-dark">Already a Member? Click here!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

<?php include('includes/footer.php'); ?>