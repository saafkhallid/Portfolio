<?php 

    if(isset($_POST['add']))
    {

  


    
       $firstname = $_POST['firstname'];
       $subject = $_POST['subject'];
       $Email = $_POST['Email'];
       $Msg = $_POST['Message'];

       if(empty($firstname) || empty($subject)  ||  empty($Email) || empty($Msg) )
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "khaliid.saaf@gmail.com";

           if(mail($to,$subject,$Msg,$Email))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>