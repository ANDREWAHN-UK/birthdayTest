
<?php 
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';

?>
<!-- Content for the index page goes here -->

<div class="container">
<form method="post" action="success.php">

<p class="text-center">Add someone to the birthday register below:</p>
    <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname">   
  </div>

  <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname">    
  </div>

  <div class="mb-3">
    <label for="InputEmail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="InputEmail" name="inputEmail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share emails with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="dateOfBirth" class="form-label">Date of Birth</label>
    <input type="text" class="form-control" id="dateOfBirth" name="dateOfBirth">
  </div>

  <div class="mb-3">
    <label for="contactNumber" class="form-label">Contact Number</label>
    <input type="number" class="form-control" id="contactNumber" name="contactNumber" aria-describedby="emailHelp">
    <div id="phoneHelp" class="form-text">We'll never share this with anyone else.</div>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
</div>




<?php require_once 'includes/footer.php';
?>


   