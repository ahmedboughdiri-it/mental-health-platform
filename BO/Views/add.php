<?php
    require '../Controller/evenementController.php';
    $evenement = new evenementController();
    if(isset($_POST['save_event'])) {
      $titre_e = $_POST['titre_e'];
      $image_e = $_POST['image_e'];
      $description_e = $_POST['description_e'];
      $date_e = $_POST['date_e'];
      $evenement->insertEvent($titre_e, $image_e, $description_e, $date_e);
    header('location: affichage.php');
    }
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Client</title>
</head>
<body>
<div class="container mt-5">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Event 
                    <a href="Affichage.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">

                    <div class="mb-3">
                        <label>Titre</label>
                        <input type="text" name="titre_e" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image_e" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="text" name="description_e" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Date</label>
                        <input type="date" name="date_e" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="save_event" class="btn btn-primary">Save Event</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>




