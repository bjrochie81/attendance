<?php 
    require_once 'db/db_con.php'; 
    //Get values from post execution
    if(isset($_POST['submit'])){
        // extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        //Call crud function
        $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty);
         //Redirect to indext.php
         if($result){
             header("Location: viewrecords.php");
         }
         else{
            include 'includes/errormessage.php';
         }

    }
    else{
        include 'includes/errormessage.php';
    }

    









?>