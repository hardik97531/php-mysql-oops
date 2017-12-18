<?php
	//including the database connection file
    include_once("classes/Crud.php");
    include_once("classes/Validation.php");
    $crud = new Crud();
    $validation = new Validation();
    if(isset($_POST['Submit'])) {    
        $firstname = $crud->escape_string($_POST['firstname']);
        $lastname = $crud->escape_string($_POST['lastname']);
        $email = $crud->escape_string($_POST['email']);
        $reg_date = date('Y-m-d H:i:s');
        $msg = $validation->check_empty($_POST, array('firstname', 'lastname', 'email'));
        //$check_age = $validation->is_age_valid($_POST['age']);
        $check_email = $validation->is_email_valid($_POST['email']);
        // checking empty fields
        if($msg != null){
            echo $msg;
            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } /*elseif (!$check_age) {
            echo 'Please provide proper age.';
        } */elseif (!$check_email) {
            echo 'Please provide proper email.';
        }else{ 
            // if all the fields are filled (not empty) 
            //insert data to database    
            $result = $crud->execute("INSERT INTO `MyGuests`(`firstname`, `lastname`, `email`, `reg_date`) VALUES ('$firstname','$lastname','$email','$reg_date')");
            //display success message
            echo "<font color='green'>Data added successfully.</font><br/><a href='index.php'>View Result</a>";
        }
    }
?>