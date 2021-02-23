<!-- includes -->
<?php include('includes/config.php'); ?>
<?php include('includes/header.php'); ?>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-8">
                <h3> My new contact form </h3>
                <form method="post">
                <fieldset>

                <!-- name -->
                <label><b>First Name</b>
                <input type="text" name="firstname" value="<?php if (isset($_POST['firstname'])) echo htmlspecialchars($_POST['firstname']);?>"><br>
                <?php 
                    if (empty($_POST['firstname'])) {
                        echo '<div style="color:red;">Please fill out your First Name</div>';
                    }?>
                </label><br>
                <label><b>Last Name</b>
                <input type="text" name="lastname" value="<?php if (isset($_POST['lastname'])) echo htmlspecialchars($_POST['lastname']);?>"><br>
                <?php 
                    if (empty($_POST['lastname'])) {
                    echo '<div style="color:red;">Please fill out your Last Name</div>';
                    }?></label><br>
                <label><b>Email</b>
                    <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>"><br>
                    <?php 
                        if (empty($_POST['email'])) {
                            echo '<div style="color:red;">Please enter your email address</div>'; }
                    ?>
                </label><br>
                <label><b>Phone Number</b>
                    <input type="phone" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>"><br>
                    <?php if (empty($_POST['phone'])) { echo '<div style="color:red;">Please enter your phone number</div>'; }?>
                </label><br><br>


                <ul>
                    <li><b>Select your favorite dog!</b></li>
                    <li><input type="radio" name="doggos" value="" <?php if (isset($_POST['doggos']) && $_POST['doggos'] == 'golden') echo 'checked="checked"'; ?>>Golden</li>
                    <li><input type="radio" name="doggos" value="" <?php if (isset($_POST['doggos']) && $_POST['doggos'] == 'lab') echo 'checked="checked"'; ?>>Lab</li>
                    <li><input type="radio" name="doggos" value="" <?php if (isset($_POST['doggos']) && $_POST['doggos'] == 'doodle') echo 'checked="checked"'; ?>>Doodle</li>
                    <?php 
                        if (empty($_POST['doggos'])) {
                        echo '<div style="color:red;">Please select your favorite doggos</div><br>';
                        }
                    ?></ul>

                        <label><b></b></label>
                        <ul>
                        <li><input type="checkbox" name="dogs" value="Golden" <?php if (isset($_POST['dogs']) && $_POST['dogs'] == 'Golden') echo 'checked="checked"'; ?>> Golden</li>
                        <li><input type="checkbox" name="dogs[]" value="Doodle" <?php if (isset($_POST['dogs']) && $_POST['dogs'] == 'Doodle') echo 'checked="checked"'; ?>>> Doodles</li>
                        <li><input type="checkbox" name="dogs[]" value="Lab" <?php if (isset($_POST['dogs']) && $_POST['dogs'] == 'Lab') echo 'checked="checked"'; ?>>></li>
                        <li><input type="checkbox" name="dogs[]" value="Corgie" <?php if (isset($_POST['dogs']) && $_POST['dogs'] == 'Corgie') echo 'checked="checked"'; ?>>></li>
                        <li><input type="checkbox" name="dogs[]" value="Dalmation" <?php if (isset($_POST['dogs']) && $_POST['dogs'] == 'Dalmation') echo 'checked="checked"'; ?>>></li>
                        </ul><br>
                        <?php 
                        if (empty($_POST['dogs'])) {
                        echo '<div style="color:red;">Please select all of your favorite doggies!</div>';
                        }
                        ?><br>
                <label><b>Select a Region:</b></label><br>
                    <select name="region">
                    <option value="NULL">Select One</option>
                    <option value="nw" <?php if (isset($_POST['region']) && $_POST['region'] == 'nw') echo 'selected'; ?>>Northwest</option>
                    <option value="sw" <?php if (isset($_POST['region']) && $_POST['region'] == 'sw') echo 'selected'; ?>>Southwest</option>
                    <option value="mw" <?php if (isset($_POST['region']) && $_POST['region'] == 'mw') echo 'selected'; ?>>Midwest</option>
                    <option value="ne" <?php if (isset($_POST['region']) && $_POST['region'] == 'ne') echo 'selected'; ?>>Northeast</option>
                    <option value="south" <?php if (isset($_POST['region']) && $_POST['region'] == 'south') echo 'selected'; ?>>South</option><br>
                    <?php 
                    if (empty($_POST['region'])) {
                    echo '<div style="color:red;">Please select a region</div>';
                    }
                    ?><br>
                    </select><br><br>

                    <label><b>Comments</b><br>
                    <textarea name="comments"></textarea>
                    </label><br>    <?php 
                    if (empty($_POST['comments'])) {
                    echo '<div style="color:red;">Please Enter a comment</div><br>';
                    }?><br>

                    <label>
                    <input type="radio" name="agree" value="agree"> Please Press to Accept the privacy policy
                    </label><br>
                    <?php 
                    if (empty($_POST['agree'])) {
                        echo '<div style="color:red;">Please Agree</div><br>';
                    }
                    ?>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <a href="" class="btn btn-primary">Reset me</a><br><br><br>

                    <?php

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['doggos'], $_POST['dogs'], $_POST['region'], $_POST['comments'], $_POST['agree']))  {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $doggos = $_POST['doggos'];

                    $to = 'exochos@gmail.com';
                    $subject = 'Test email for my form 1 '.date('m/d/y').'';
                    $body  = 'Hello'.$fname. ' ' . $lname.'';
                    $body .= 'your email is:'.$email.'';
                    $body .= 'Your doggos is: '.$doggos.'';
                    $body .= 'Favorite Region: '.$region.'';

                    mail($to, $subject, $body);
                    header('Location:thx.php');

                    }//end if
                    }// end more if

                    ?>
                        </fieldset><br><br>
            </div>
            <div class="col-sm-4">
                <h3>Contact form</h3>
            </div>
        </div>
    </div>

<!-- Include -- Footer -->        
<?php include('includes/footer.php'); ?>