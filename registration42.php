  
      
      
              <?php
include_once("connect.php");

if(isset($_POST['Submit'])){

     $eventid = $_POST['eventid'];
     $venueid = $_POST['venueid'];
     $matchdate = $_POST['matchdate'];

     $matchid = $_POST['matchid'];
     $manmatch = $_POST['manmatch'];
     $umpire = $_POST['umpire'];
    
     
   

     $pranto = "INSERT INTO event3(matchid,eventid)
                     VALUES('$matchid','$eventid')";



     $res = mysqli_query($conn,$pranto);
     
     $pre =  "INSERT INTO venue3(matchid,venueid)
                     VALUES('$matchid','$venueid')";



     $rock = mysqli_query($conn,$pre);
    
    $pro =  "INSERT INTO matches3(matchid,matchdate,manmatch,umpire)
                     VALUES('$matchid','$matchdate','$manmatch','$umpire')";



     $roc = mysqli_query($conn,$pro);
    
    
    echo "Added";




}


?>

      