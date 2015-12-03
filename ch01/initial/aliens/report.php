 <title>Aliens Abducted Me - Report an abduction</title>
</head>
<body>
 <h2>Aliens Abducted Me - Report an Abduction </h2>



<?php
  
 $when_it_happend = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $aliendescription = $_POST['aliendescription'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $name = $_POST['firstname'].''. $name = $_POST['firstname'];
  $how_many = $_POST['howmany'];
  $what_they_did = $_POST['whattheydid'];
  $other = $_POST['other'];

  $to = 'khk06131125@gmail.com';
  $subject ='Aliens Abducte Me - Abduction Report';
  $msg = "$name was abducted $when_it_happened and was gone for $how_long.\n".
        "Number of aliens: $how_many\n".
        "Alien description : $alien_description\n".
        "What they did : $what_they_did\n".
        "Fang spotted : $fang_spotted\n".
        "Other comments : $other";
  
  mail($to , $subject , $msg , 'From:'.$email);


  echo 'Thanks for submitting the form.<br/>';
  echo 'You were abducted' .$when_it_happend;
  echo 'and were gone for' .$how_long . '<br/>';
  echo 'Describe them"'.$aliendescription . '<br/>';
  echo 'Your email address is' .$email . '<br/>';
  echo 'Number of aliens:'.$how_many.'<br/>';
  echo 'The aliens did this'.$what_they_did .' <br/>';
  echo 'Other comments' .$other .'<br/>';
  echo 'Your email adress is' .$email;
?>
</body>
</html>
