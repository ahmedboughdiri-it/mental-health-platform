<?php
include $_SERVER['DOCUMENT_ROOT']."/web/config.php";
include $_SERVER['DOCUMENT_ROOT']."/web/BO/Model/evenement.php";

class evenementController {

    function getAllEvenet() {
        $conn = config::getConnection();
        $sql = "SELECT * FROM evenement";
        $request = $conn->prepare($sql);
        $request->execute();
        $result = $request->fetchAll(); //trajaa tableau fiih les entites el kol 
        return array_map("evenement::convertRawToEvent", $result);
    }

    function getEventById($id)
    {
        $conn = config::getConnection();
        $sql = "SELECT * FROM evenement where id_e=:id";
        $request = $conn->prepare($sql);
        $request->execute(array("id" => $id));
        $result = $request->fetch();
        return evenement::convertRawToEvent($result);
    } 

    function getEventByIdf($id)
    {
        $conn = config::getConnection();
        $sql = "SELECT * FROM evenement where id_e=:id";
        $request = $conn->prepare($sql);
        $request->execute(array("id" => $id));
        $result = $request->fetch();
        return evenement::convertRawToEventf($result);
    }

    function updateEvent($id, $titre_e,$image_e, $description_e, $date_e) {
        $conn = config::getConnection();
        $sql = "UPDATE evenement set titre_e=:titre_e,image_e=:image_e, description_e=:description_e, date_e=:date_e where id_e=:id";
        $request = $conn->prepare($sql);
        $request->execute(array("id" => $id, "titre_e" => $titre_e,"image_e" => $image_e, "description_e" => $description_e, "date_e" => $date_e));
    }


    function insertEvent($titre_e,$image_e, $description_e, $date_e) {
        $conn = config::getConnection();
        $sql = "INSERT INTO evenement(titre_e,image_e, description_e, date_e) values (:titre_e,:image_e, :description_e, :date_e)";
        $request = $conn->prepare($sql);
        $request->execute(array("titre_e" => $titre_e,"image_e"=>$image_e, "description_e" => $description_e, "date_e" => $date_e));
    }

    function deleteById($id) {
        $conn = config::getConnection();
        $sql = "DELETE FROM evenement where id_e=:id";
        $request = $conn->prepare($sql);
        $request->execute(array("id" => $id));
    }
}