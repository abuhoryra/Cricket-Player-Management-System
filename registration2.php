  
      
      
              <?php
include_once("connect.php");

if(isset($_POST['Submit'])){

     $clubid = $_POST['clubid'];
     $clubname = $_POST['clubname'];

     $firstname = $_POST['firstname'];
     $middlename = $_POST['middlename'];
     $lastname = $_POST['lastname'];
     $playerid = $_POST['playerid'];

     $pfirstname = $_POST['pfirstname'];
     $pmiddlename = $_POST['pmiddlename'];
     $plastname = $_POST['plastname'];
     $pdesignation = $_POST['pdesignation'];
    
    
     $startdate = $_POST['startdate'];
     $enddate = $_POST['enddate'];
     $camount = $_POST['camount'];

     $serialno = $_POST['serialno'];
     $duedate = $_POST['duedate'];
     $paydate = $_POST['paydate'];
     $amount = $_POST['amount'];

     $witness1 = $_POST['witness1'];
     $witness2 = $_POST['witness2'];
     
   

     $pranto = "INSERT INTO club1(playerid,clubid,clubname,pfirstname,pmiddlename,plastname,pdesignation)
                     VALUES('$playerid','$clubid','$clubname','$pfirstname','$pmiddlename','$plastname','$pdesignation')";



     $res = mysqli_query($conn,$pranto);
     
     $pre =  "INSERT INTO player1(playerid,firstname,middlename,lastname)
                     VALUES('$playerid','$firstname','$middlename','$lastname')";



     $rock = mysqli_query($conn,$pre);
    
    $pro =  "INSERT INTO contract1(playerid,startdate,enddate,camount,witness1,witness2)
                     VALUES('$playerid','$startdate','$enddate','$camount','$witness1','$witness2')";



     $roc = mysqli_query($conn,$pro);
    
    $pri =  "INSERT INTO payment1(playerid,serialno,duedate,paydate,amount)
                     VALUES('$playerid','$serialno','$duedate','$paydate','$amount')";



     $ron = mysqli_query($conn,$pri);
    
    
    echo "Added";




}


?>

      