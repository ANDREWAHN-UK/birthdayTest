<?php 
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';

?>


<h3 class="text-center
">The people below are the registered birthday people</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
   
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry </td>
      <td>the Bird</td>
    </tr>
  </tbody>
</table>

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php';
?>