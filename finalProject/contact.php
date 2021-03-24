<?php 
  include('includes/header.php')


?>


    <!-- Begin page content -->
    <main role="main" class="container">
      <p>
        <h1 class="mt-5">Contact Us!</h1>
        <div class="row">
            <div class="col-sm-8">
                <div class="form group">
                <form method="post">
                <fieldset>
                <!-- name -->
                <label><b>First Name</b>
                <input class="form-control" type="text" name="firstname" value="<?php if (isset($_POST['firstname'])) echo htmlspecialchars($_POST['firstname']);?>"><br>
                </label><br>
                <label ><b>Last Name</b>
                <input class="form-control" type="text" name="lastname" value="<?php if (isset($_POST['lastname'])) echo htmlspecialchars($_POST['lastname']);?>"><br>
                </label><br>
                <!-- email -->
                <label><b>Email</b>
                    <input class="form-control" type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>"><br>
                </label><br>
                <!-- Phone number -->
                <label><b>Phone Number</b>
                    <input class="form-control" type="phone" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>"><br>
                </label><br><br>

                <!-- Radio buttons -->
                <b>Select your favorite house!</b><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="houseR" id="houseR" value="house1" <?php if (isset($_POST['houseR']) && $_POST['houseR'] == 'house1') echo 'checked'; ?>>
                        <label class="form-check-label" for="houseR">House 1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="houseR" id="houseR" value="house2" <?php if (isset($_POST['houseR']) && $_POST['houseR'] == 'house2') echo 'checked'; ?>>
                        <label class="form-check-label" for="houseR">House 2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="houseR" id="houseR" value="house3" <?php if (isset($_POST['houseR']) && $_POST['houseR'] == 'house3') echo 'checked'; ?>>
                        <label class="form-check-label" for="GoldenR">House 3</label>
                    </div><br>
                    <!-- begin checkbox -->
                    <b>Please Select all of your favorite kinds of Houses!</b><br>
                    <div class="form-check">
                        <label class="form-check-label" for="houseC">
                        <input class="form-check-input" type="checkbox" id="houseC" name="houseC" value="houseA" <?php if (isset($_POST['houseC']) && $_POST['houseC'] == 'houseA') echo 'checked="checked"'; ?>>
                            House Boat
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="houseC">
                        <input class="form-check-input" type="checkbox" id="houseC" name="houseC" value="houseB" <?php if (isset($_POST['houseC']) && $_POST['houseC'] == 'houseB') echo 'checked="checked"'; ?>>
                            Forest House
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="houseC">
                        <input class="form-check-input" type="checkbox" id="houseC" name="houseC" value="houseC" <?php if (isset($_POST['houseC']) && $_POST['houseC'] == 'houseC') echo 'checked="checked"'; ?>>
                            City House
                        </label>
                    </div><br>


                    <div class="formgroup">
                    <label><b>Select your favorite house!:</b></label><br>
                    <select name="fdoggo">
                    <option value="NULL">Select One</option>
                    <option value="golden" <?php if (isset($_POST['fdoggo']) && $_POST['fdoggo'] == 'golden') echo 'selected'; ?>>Golden</option>
                    <?php 
                    
                    ?><br>
                    </select><br></div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Submit">&nbsp;
                    <a href="" class="btn btn-primary">Reset me</a><br><br><br>
                   
                        </fieldset><br><br>
            </div></div>
            <div class="col-sm-4">
                <h3>Contact form aside</h3>
                <p> 
                     <!-- Parse the data and email -->
                     <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['dogRadio'], $_POST['dogCheck'], $_POST['fdoggo']))  {
    $name = $_POST['firstname'] . " " . $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dogR = $_POST['dogRadio'];
    $dogC = $_POST['dogCheck'];
    $fdoggo = $_POST['fdoggo'];
    $to = 'exochos@gmail.com';
    $subject = 'Doggo Quiz email for my contact page ' .date('m/d/y') .'';
    $body  = 'Hello '. $name . ', thanks for taking our quiz' . "\n";
    $body .= 'your email address is:'.$email."\n";
    $body .= 'Your Phone Number is: ' . $phone . "\n";
    $body .= 'Your doggo Radio selection is: '.$dogR."\n";
    $body .= 'Your dog checkbox selection is: '.$dogC ."\n";

    mail($to, $subject, $body);
    header('Location:thx.php');
}//end if
}// end more if
else {
  if (empty($_POST['firstname'])) {
      echo '<div style="color:red;">Please fill out your First Name</div>';
  } // Endif
  if (empty($_POST['lastname'])) {
      echo '<div style="color:red;">Please fill out your Last Name</div>';
  } // Endif
  if (empty($_POST['email'])) {
    echo '<div style="color:red;">Please enter your email address</div>'; 
  } // Endif
   } // End Else Block
  if (empty($_POST['phone'])) { echo '<div style="color:red;">Please enter your phone number</div>'; 
  }
    // this is magic //
  elseif (!(preg_match('/(\+?\(?[0-9]{2,3}\)?)([ -]?[0-9]{2,4}){3}/', $_POST['phone']))) {
    echo "please enter a valid phone number";    
  }
  if (empty($_POST['houseR'])) {
    echo '<div style="color:red;">Please select your favorite house!</div><br>';
    }
  if (empty($_POST['dogCheck'])) {
    echo '<div style="color:red;">Please select all of your favorite doggies!</div>';
  }
  if (empty($_POST['fdoggo'])) {
    echo '<div style="color:red;">Please select a fdoggo</div>';
    }
?>
                </p>
            </div>
        </div>
    </div>
      </p>
    </main>

<?php include('includes/footer.php'); ?>