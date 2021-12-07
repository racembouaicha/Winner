<?php 
include './inc/cnx.php';

  $firstName =  $_POST['firstName'] ?? '';
  $lastName =   $_POST['lastName'] ?? ''; 
  $email=       $_POST['email'] ?? '';
  
  $errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
 ];

  
if(isset($_POST['submit'])){
    
    if(empty($firstName)){
        $errors['firstNameError'] = 'First Name Empty !';
    }
    if(empty($lastName)){
        $errors['lastNameError'] = 'Last Name Empty !';
    } 
    if(empty($email)){
        $errors['emailError'] = 'E-mail Empty !';
    }
    if(!filter_var($email ,FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'Please enter a correct email !';
    } 
    
    if(!array_filter($errors)){
        $firstName =  mysqli_real_escape_string($cnx ,$_POST['firstName']) ;
        $lastName = mysqli_real_escape_string($cnx ,$_POST['lastName']) ; 
        $email= mysqli_real_escape_string($cnx ,$_POST['email']);
        
        
        $sql = "INSERT INTO users(firstName ,lastName ,email) 
                VALUES ('$firstName', '$lastName', '$email')";

        if(mysqli_query($cnx , $sql))
        {
          header('Location: '.$_SERVER['PHP_SELF'] );
        }else{
          echo 'Error :' . mysqli_error($cnx);
        }        
    }          
}