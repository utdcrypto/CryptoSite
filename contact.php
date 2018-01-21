<?php

// define variables and set to empty values

//company email
$company_email = "utd.bcso@gmail.com";
//The Error Messages
$nameErr = $emailErr = "";

//The actual Inputs
$name = $phone = $email = $comment = "";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comment = $_POST['comment'];

    //Checking the name input
    if (empty($name))
      {
        $nameErr = "Name is required";
      }

    else
    {
        $name = test_input($name);

        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $nameErr = "Only letters and white space allowed";
        }
    }


    //Checking the phone input
    if (empty($phone))
      {

      }

    else
    {
        $phone = test_input($phone);

        // check if name only contains letters and whitespace
        if (!preg_match("/^[1-9][0-9]{0,15}$/",$phone))
        {
            $phoneErr = "Enter valid phone number";
        }
    }


    //Checking the Email Input

    if (empty($email))
    {
      $emailErr = "Email is required";
    }

    else
    {
      $email = test_input($email);

      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $emailErr = "Invalid email format";
      }
    }

  //Checking the Message Input
  if (empty($comment))
  {
    $comment = "";
  }

  else
  {
    $comment = test_input($comment);
  }



    //Actually sends the mail
    $subject_line ="Name: $name Phone: $phone Email:$email";

    mail($company_email,$subject_line, $comment);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
