<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="Style.css">
</head>

<body>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$contact = $_POST['contact'];
$formcontent="Name: $name \n Message: $contact";
$recipient = "contact@trinitycoyle.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: Message Sent.html");
?>
<script src="jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script> 
$(document).ready(function(){
 $("#email").val('');
  $("#comments").val('');
});
</script>

</body>
</html>