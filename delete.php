<?php 
    require_once 'includes/auth_check.php';
    require_once 'db/db_con.php';
    if(!$_GET['id']){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        // Get id values
        $id = $_GET['id'];
        // Call delete function
        $result = $crud->deleteAttendee($id);
        // Redirect to list
        if($result)
        {
             header("Location: viewrecords.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
?>