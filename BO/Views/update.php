<?php
    require '../Controller/evenementController.php';
    $evenementController = new evenementController();
    $id = $_GET['id_e'];
    $event = $evenementController->getEventById($id);
    if(isset($_POST['update_event'])) {
        $newTitre=$_POST['titre_e'];
        $newIMAGE = $_POST['image_e'];
        $newDesc=$_POST['description_e'];
        $newDate=$_POST['date_e'];
        $evenementController->updateEvent($id, $newTitre, $newIMAGE, $newDesc, $newDate);
        header("location: affichage.php");
    }
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Event</title>
</head>
<body>
<div class="container mt-5">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Update Event 
                    <a href="affichage.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">

                    <div class="mb-3">
                        <label>Titre</label>
                        <input type="text" name="titre_e" value="<?=$event->titre_e?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image_e" value="<?=$event->image_e?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="text" name="description_e" value="<?=$event->description_e?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Date</label>
                        <input type="date" name="date_e" value="<?=$event->date_e?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="update_event" class="btn btn-primary">Update Event</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>