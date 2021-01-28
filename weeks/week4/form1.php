<?php
// Form part 1

if(isset($_POST['name'])) {
    $name = $_POST['name'];
    echo $name;
}
else {
    echo '
    <form action="" method="post">
        <label>Name</label>
        <input type="" name="name">
        <input type="submit" value="Send it">
    </form>
    ';
}