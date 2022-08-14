<?php
$title = 'Success';
require_once 'includes/header.php';
require_once 'db/conn.php';//this needs to connect to conn, not crud.php. Be careful.

if(isset($_POST['submit'])) {

    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['inputEmail'];
    $dob=$_POST['dateOfBirth'];   
    $contact=$_POST['contactNumber'];

    $isSuccess = $crud->insert($fname, $lname, $email, $dob,  $contact);

    if($isSuccess) {
        echo "<h2 class='text-center text-success'>The user below has been added </h2>";
    } else {
        echo "<h2 class='text-center text-success'>There was an error in processing</h2>";
    };
};
?>
<!-- Users get sent here after submitting the form -->



<div class="card" style="width: 18rem;">
    <img src="images/orangeBalloon.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            <?php
            echo $_POST['firstname'] . ' ' . $_POST['lastname'];
            
            ?>
        </h5>
    </div>
    <img src="images/fireworks.jpg" class="card-img-top" alt="...">
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php';
?>