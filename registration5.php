

      
      
      
              <?php
include_once("connect.php");

if(isset($_POST['Submit'])){

     $clubid = $_POST['clubid'];
     $formdate = $_POST['formdate'];
     $eventid = $_POST['eventid'];
     $leaderid = $_POST['leaderid'];
     $leadername = $_POST['leadername'];
     $coachid = $_POST['coachid'];
     $coachname = $_POST['coachname'];
    
     $playerid = $_POST['playerid'];
     $pname = $_POST['pname'];

      
    
    
    
     
     $reg1 = "INSERT INTO club4(playerid,clubid)
                     VALUES('$playerid','$clubid')";



     $res1 = mysqli_query($conn,$reg1);
     
     $reg2 =  "INSERT INTO team4(playerid,leaderid,leadername,formdate)
                     VALUES('$playerid','$leaderid','$leadername','$formdate')";



     $res2 = mysqli_query($conn,$reg2);
    
    $reg3 =  "INSERT INTO event4(playerid,eventid)
                     VALUES('$playerid','$eventid')";



     $res3 = mysqli_query($conn,$reg3);
    
    $reg4 =  "INSERT INTO coach4(playerid,coachid,coachname)
                     VALUES('$playerid','$coachid','$coachname')";

     $res4 = mysqli_query($conn,$reg4);

   $reg5 =  "INSERT INTO player4(playerid,pname)
                     VALUES('$playerid','$pname')";

     $res5 = mysqli_query($conn,$reg5);

    echo "Added";




}


?>

      