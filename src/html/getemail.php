<?php

$msg = "";
$msg2 = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['subject']) && empty($_POST['message'])){
  
    $msg2 = 'please fill the required fields'; 
    $msg = "";
   
}else{
    $name =htmlentities($_POST['name']);
    $emailFrom =htmlentities($_POST['email']);
    $subject =htmlentities($_POST['subject']);
    $message =htmlentities($_POST['message']);
    if(filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
      
        $sdesign = 'samik@sdesign.dx.am';
        $header = 'From: '.$emailFrom;
        $txt = "Name: ".$name."\n"."Email: ".$emailFrom."\n"."Message: "."\n".$message;

        mail($sdesign,$subject,$txt,$header);

        if(@mail($sdesign,$subject,$txt,$header))
{
  $msg = "Mail Sent Successfully";
  $msg2 = "";
}else{
  $msg2 =  "Mail Not Sent";
  $msg = "";
}
        
        
    }else{
        $msg2 = "please write a valid email";
        $msg = "";
    }
}

}


?>
