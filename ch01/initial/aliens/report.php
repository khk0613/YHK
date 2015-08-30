<html>
<head>
 <title>Aliens Abducted Me - Report an abduction</title>
</head>
<body>
 <h2>Aliens Abducted Me - Report an Abduction </h2>
<?php>
 $when_it_happend = $_POST['whenithappened'];
 $how_long = $_POST['howlong'];
 $alien_description = $_POST['aliendescription'];
 $fang_spotted = $_POST['fangspotted'];
 $email = $_POST['email'];


echo 'Thanks for submitting the form.<br/>';
echo 'You were abducted' .$when_it_happend;
echo 'and were gone for' .$how_long.'<br/>';
echo 'Describe them:'.$alien_description . '<br/>';
echo 'Your email address is ' .$email;

?>



</body>

