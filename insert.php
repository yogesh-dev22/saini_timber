<?php

include 'connection.php';

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $contact = mysqli_real_escape_string($con,$_POST['contact']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $op1 = mysqli_real_escape_string($con,$_POST['op1']);
  $op2 = mysqli_real_escape_string($con,$_POST['op2']);
  $op = $op1.'.'.$op2;
  $feet = "feet";
  $length = $op.'-'. $feet;
  $qty = mysqli_real_escape_string($con,$_POST['qty']);
  $amount = mysqli_real_escape_string($con,$_POST['amount']);

  $total = $amount;
  $recived =  mysqli_real_escape_string($con,$_POST['recived']);
  $pending = $amount - $recived;

  if($recived==0){
    $pending == $amount;
  }
   //$date = mysqli_real_escape_string($con,$_POST['date']);
    $date_value = date('d-M-Y');
   // $result=explode('-', $date);

   // $d = $result[2];
   // $m = $result[1];
   // $y = $result[0];

   // echo $newdate=$d.'-'.$m.'-'.$y;
   
   $duedate =  date('d-M-Y', strtotime($date_value. ' + 10 days')); 
   
//    if( $duedate == $date_value){
//     echo date('Y-m-d', strtotime($duedate. ' + 10 days')); 
//    }
   
    
  $comment = mysqli_real_escape_string($con,$_POST['comment']);


 $email = $_POST['email'];
   $emailquery = "select * from tb_updatemodal where email = '$email' ";

   $checkemailquery = mysqli_query($con,$emailquery);

   $emailcount = mysqli_num_rows($checkemailquery);
   
   if ($emailcount >0) {
     ?>
       <script>alert("Already Exsist.");</script>
       <?php
   

  
      }else{
              $insertquery = "insert into tb_updatemodal(name,contact,email,blength,qty,amount,recived,pending,date,duedate,comment)values('$name','$contact','$email','$length','$qty','$amount', '$recived', '$pending','$date_value','$duedate', '$comment')";


  $result = mysqli_query($con,$insertquery);

  if ($result) {
       
       ?>
       <script>
        alert("Data Inserted Properly.");
        location.replace("index.php");
       </script>
       <?php
  }else{
     ?>
     <script>
      alert("Data Not Inserted.");
     </script>
     <?php
  }
   
      }

   }






?>