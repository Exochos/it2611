<?php 
  include('includes/header.php')


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
checkForm();
            ?>
?>
                </p>
            </div>
        </div>
    </div>
    </main>

<?php include('includes/footer.php'); ?>