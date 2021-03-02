<?php include('includes/config.php'); ?>
<?php include('includes/header.php'); ?>
<?php


$gallery = array (
    
    array("doggo1","Havanese","Havanese is the national dog of Cuba. The Havanese is small in size and sturdy in structure.", "dog01"),
    array("doggo2","American Lab"," Labrador, is a breed of retriever-gun dog from the United Kingdom that was developed from imported Canadian fishing dogs.", "dog02"),
    array("doggo3","Italian Greyhound","The Greyhound is a breed of dog, a sighthound which has been bred for coursing game and greyhound racing.", "dog03"),
    array("doggo4","King Charles Cavilier","The Cavalier King Charles Spaniel is a small breed of spaniel classed in the toy group of The Kennel Club.", "dog04"),
    array("doggo5","Golden Retriever","The Golden Retriever is a medium-large gun dog that was bred to retrieve shot waterfowl.", "dog05"),
    array("doggo6","Bernese Mountain Dog","The Bernese Mountain Dog is a giant dog breed. These dogs have roots in the Roman mastiffs.", "dog06"),
    array("doggo7","Dachshund","The dachshund also known as the wiener dog, badger dog, or sausage dog, is a short-legged, long-bodied, hound-type dog breed.", "dog07")
);

?>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8">
    <h1> Extra credit - add 4th column as a different image</h1>
    <table>
    <?php 

        for($i = 0; $i < count($gallery); $i++) {
            echo '<tr>';
            echo '<td>';
            echo '<img src="images/'. $gallery[$i][0] . '.jpg" alt='.$gallery[$i][1].'></td>';
            echo '<td><p><b>' . $gallery[$i][1] . '</b></p></td>';
            echo '<td><p>' . $gallery[$i][2] . '</p></td>';
            echo '<td>';
            echo '<img src="images/'. $gallery[$i][3] . '.jpg" alt='.$gallery[$i][1].'></td>';
            echo "</tr>";
        }

    ?>
    <br><br><br><br>
    </table><br><br>
    </div></div><div></div></div>
</body>
</html>
<!-- Include -- Footer -->        
<?php include('includes/footer.php'); ?>