<?php

echo $_POST['name'];
$v1= $_POST['designation'];
$v2= $_POST['company'];
$v3= $_POST['address'];
$v4= $_POST['city'];
$v5= $_POST['country'];
$v6= $_POST['areacode'];
$v7= $_POST['mobilenumber'];
$v9= $_POST['message'];
$v8= $_POST['email'];



$v = "<br  / > designation - ". $v1  . "<br  / > Company -  " .$v2. "<br /> address -  " .$v3. "<br /> city -  " .$v4. "<br /> country - " .$v5. "<br />  areacode -" .$v6. "<br /> email -" .$v8. "<br /> mobilenumber - ".$v7. "<br /> Message - " .$v9;
echo $v;
  ?>