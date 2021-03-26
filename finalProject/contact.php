<?php 
  session_start();
  include('includes/config.php');
  include('includes/header.php');


?>


    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="form group">
                <h2>Subscribe to the Newletter</h2>
                <form method="post"><fieldset>
                <!-- name -->
                <label><b>First Name</b>
                <input class="form-control" type="text" name="firstname" value="<?php if (isset($_POST['firstname'])) echo htmlspecialchars($_POST['firstname']);?>"><br>
                </label><br>
                <!-- name -->
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
                </label><br>

                <!-- Radio buttons -->
                <b>Select your Age:</b><br>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="age" value="a" <?php if (isset($_POST['age']) && $_POST['age'] == 'a') echo 'checked'; ?>>
                      <label class="form-check-label" for="age">18-32</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="age" value="b" <?php if (isset($_POST['age']) && $_POST['age'] == 'b') echo 'checked'; ?>>
                        <label class="form-check-label" for="age">32-60</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="age" id="houseR" value="c" <?php if (isset($_POST['age']) && $_POST['age'] == 'c') echo 'checked'; ?>>
                        <label class="form-check-label" for="age">60+</label>
                    </div><br>
                    <!-- End Radio -->

                    <!-- begin checkbox -->
                    <b>Please Select all of your favorite kinds of Houses!</b><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="house" value="houseA" <?php if (isset($_POST['house']) && $_POST['house'] == 'houseA') echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="house">House Boat</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="house">
                        <input class="form-check-input" type="checkbox" name="house" value="houseB" <?php if (isset($_POST['house']) && $_POST['house'] == 'houseB') echo 'checked="checked"'; ?>>
                            Forest Home
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="house">
                        <input class="form-check-input" type="checkbox" name="house" value="houseC" <?php if (isset($_POST['house']) && $_POST['house'] == 'houseC') echo 'checked="checked"'; ?>>
                            City House
                        </label>
                    </div><br>
                    <div class="formgroup">
                    <label><b>Select your income level</b></label><br>
                    <select name="income">
                    <option value="NULL">Select One</option>
                    <option value="0" <?php if (isset($_POST['income']) && $_POST['income'] == '0') echo 'selected'; ?>>$0-$30k</option>
                    <option value="3" <?php if (isset($_POST['income']) && $_POST['income'] == '3') echo 'selected'; ?>>$30k-$60k</option>
                    <option value="6" <?php if (isset($_POST['income']) && $_POST['income'] == '6') echo 'selected'; ?>>$60k-$120k</option>
                    <option value="12" <?php if (isset($_POST['income']) && $_POST['income'] == '12') echo 'selected'; ?>>$120k+</option>
                    </select><br>
                    </div><br>
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
          if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['age'], $_POST['house'], $_POST['income']))  {
            $name = $_POST['firstname'] . " " . $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $age = $_POST['$age'];
            $house = $_POST['house'];
            $income = $_POST['income'];
            $to = 'szemeo@mystudentswa.com';
            $subject = 'Thanks for visiting Seattles Best Houses ' .date('m/d/y') .'';
            $body  = 'Hello '. $name . ', thanks for joining our newsletter.' . "\n";
            $body .= 'your email address is:'.$email."\n";
            $body .= 'Your Phone Number is: ' . $phone . "\n";
            $body .= 'Your age range is: '.$age.'';
            $body .= 'Your income selection is: '.$income ."\n";

            mail($to, $subject, $body);
            header('Location:about.php');
          }//end if
        }// end if post

if (empty($_POST['firstname'])) {
  echo '<div style="color:red;">Please fill out your First Name</div>';
} // Endif
if (empty($_POST['lastname'])) {
  echo '<div style="color:red;">Please fill out your Last Name</div>';
} // Endif
if (empty($_POST['email'])) {
  echo '<div style="color:red;">Please enter your email address</div>'; 
} // Endif
if (empty($_POST['age'])) {
    echo '<div style="color:red;">Please select your age range.</div>';
}
if (empty($_POST['house'])) {
  echo '<div style="color:red;">Please select you favorite kind of houses.</div>';
}
if ($_POST['income'] === NULL) {
  echo '<div style="color:red;">Please select an income level</div>';
}
if (empty($_POST['phone'])) { 
  echo '<div style="color:red;">Please enter your phone number</div>'; 
}
  elseif (!(preg_match('/(\+?\(?[0-9]{2,3}\)?)([ -]?[0-9]{2,4}){3}/', $_POST['phone']))) { // this is magic //
    echo "please enter a valid phone number";    
  }
            ?>
                </p>
            </div>
        </div>
    </div>
    </main>

<?php include('includes/footer.php'); ?>