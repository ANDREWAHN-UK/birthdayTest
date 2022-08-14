<?php
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';

$results = $crud->getList();

?>


<h3 class="text-center">The people below are the registered birthday people</h3>
<table class="table table-success table-striped table-hover">
    <thead>
        <tr>

            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>

        </tr>
    </thead>
    <tbody>
        <?php
        while ($r = $results->fetch(PDO::FETCH_ASSOC)) {

            ?>

            <tr>

                <td> <?php echo $r['firstname'] ?> </td>
                <td> <?php echo $r['lastname'] ?> </td>
            </tr>
    </tbody>

<?php } ?>
</table>

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php';
?>