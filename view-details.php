<?php
    // including the database connection file
    include_once("classes/Crud.php");
    $crud = new Crud();
    //getting id from url
    $id = $crud->escape_string($_GET['id']);
    //selecting data associated with this particular id
    $result = $crud->getData("SELECT * FROM MyGuests WHERE id=$id");
    $data = array(
        'fullname' => $result[0]['firstname'].' '.$result[0]['lastname'],
        'email' => $result[0]['email']
    );
    $response = array('status'=>100,'data'=>$data);
    echo json_encode($response);
?>