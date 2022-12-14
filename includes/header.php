<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="css/style.css" rel="stylesheet" />
    <title>Birthday <?php echo $title ?></title>
</head>

<body>

    <!-- Content that is to be displayed on every page header goes here -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="index.php">Birthday People</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="viewrecords.php">View Birthday List</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="row birthday-header">


        </div>
        <div class="birthday-h1">
            <h1 class="text-center ">Let us plan your birthdays</h1>
        </div>