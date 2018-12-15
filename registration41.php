  
      
      
              <?php
include_once("connect.php");

if(isset($_POST['Submit'])){

     $matchid = $_POST['matchid'];
     $venueid = $_POST['venueid'];
     $matchdate = $_POST['matchdate'];

     $playerid = $_POST['playerid'];
     $totwick = $_POST['totwick']; 
     $totrun = $_POST['totrun'];
     $performance = $_POST['performance'];
     
   

     $pranto = "INSERT INTO matches2(playerid,matchid,matchdate)
                     VALUES('$playerid','$matchid','$matchdate')";



     $res = mysqli_query($conn,$pranto);
     
     $pre =  "INSERT INTO venue2(playerid,venueid)
                     VALUES('$playerid','$venueid')";



     $rock = mysqli_query($conn,$pre);
    
    $pro =  "INSERT INTO player2(playerid,totwick,totrun,performance)
                     VALUES('$playerid','$totwick','$totrun','$performance')";



     $roc = mysqli_query($conn,$pro);
    
    
    echo "Added";




}


?>

      