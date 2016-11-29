<?php
$title = "Thank You";
include('includes/header.php');

?> 

<?php

/* $error = NULL;

if(isset($_POST['url']) && $_POST['url'] == ''){

 // FIRST NAME - Check & Set 

 if (!empty($_POST['fname']) {  

  if (filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING) != '') {

   $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);

  } 

  else {

   $fname = NULL;

   $error = 'Please enter a valid First Name <br />';

   echo $error;

  }

 } 

 else {

  $fname = NULL;

  $error = 'Please enter a First Name <br />';

  echo $error;

 }

 // LAST NAME - Check & Set 

 if ($_POST['lname'] != '') {  

  if (filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING) != '') {

   $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);

  } 

  else {

   $lname = NULL;

   $error = 'Please enter a valid Last Name <br />';

   echo $error;

  }

 } 

 else {

  $lname = NULL;

  $error = 'Please enter a Last Name <br />';

  echo $error;

 }

 // EMAIL - Check & Set 

 if ($_POST['email'] != '') {  

  if (filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING) != '') {

   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $email = NULL;

    $error = 'Please enter a valid Email Address <br />';

    echo $error;

   } 

  } 

  else {

   $email = NULL;

   $error = 'Please enter a valid Email Address <br />';

   echo $error;

  }

 } 

 else {

  $email = NULL;

  $error = 'Please enter an Email Address <br />';

  echo $error;

 }

 // Phone - Check & Set 

 if ($_POST['phone'] != '') {  

  if (filter_input(INPUT_POST,'phone',FILTER_SANITIZE_NUMBER_INT) != '') {

   $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);

  } 

  else {

   $phone = NULL;

  }

 } 

 else {

  $phone = NULL;

 }

 // MESSAGE - Check & Set 

 if ($_POST['message'] != '') {  

  if (filter_input(INPUT_POST,'message',FILTER_SANITIZE_STRING) != '') {

   $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

  } 

  else {

   $message = NULL;

  }

 } 

 else {

  $message = NULL;

 }

 

 if (!$error) {

  // Lead Email

  $recipient = 'dobrzanski.andrew@gmail.com';

  $subject = 'Website - Contact Us Form';
  $headers = 'From: ' . $fname . ' ' . $lname . '<dobrzanski.andrew@gmail.com>' . "\r\n" .
     'Reply-To: ' . $email . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
  
  $body = "Andrew, 

  You have received a new message from a visitor on your site!
 

  First Name: $fname

  Last Name: $lname

  Email Address: $email

  Phone Number: $phone


  Message: $message";


  mail($recipient, $subject, $body, $headers);

  // Confirmation Email

  $subject = "Thank you for contacting us!";

  $message = "Dear $fname,

 

  Your Inquiry Has Been Submitted!

  

  Thank you for contacting us! We will get back to you as soon as we can.

 

  Sincerely,

  Andrew Dobrzanski

 

  ------------------------

  This is an automated response, please do not reply!

  ------------------------";

 

 mail($email, $subject, $message, "From: Andrew Dobrzanski<noreply@example.com>\nX-Mailer: PHP/" . phpversion()); 

 } 

} */

?>

<?php

// wait 2 seconds and redirect
echo "<meta http-equiv=\"refresh\" content=\"2;url=http://50.139.13.193/index.php\"/>";

?>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 center">
			<div class="page-header jumbotron">
				<div class="thank-you container">
					<h1>Thank you!</h1>
					<h2>Your new account has been created</h2>
				</div>
			</div>
		</div>
	</div>
</div>
   
<?php include 'includes/footer.php'; 

?>
