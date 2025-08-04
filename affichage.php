<?php
    session_start();
    include $_SERVER['DOCUMENT_ROOT']."/web/BO/Controller/evenementController.php";
    $evenementController = new evenementController();
    $events = $evenementController->getAllEvenet();
    $eventTable = "";
    foreach($events as $event) {
        $eventTable .= $event->formatRow();
    }
?>
<!DOCTYPE html>
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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Event Liste 
                <a href="add.php" class="btn btn-danger float-end">Ajout Event</a>

                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Titre </th>
                            <th> Image </th>
                            <th> Description </th>
                            <th> Date  </th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                            <?php echo $eventTable;?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

