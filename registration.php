

      
      
      
              <?php
include_once("connect.php");

if(isset($_POST['Submit'])){
    

     $playerid = $_POST['playerid'];
     $firstname = $_POST['firstname'];
     $middlename = $_POST['middlename'];
     $lastname = $_POST['lastname'];
     $fathersname = $_POST['fname'];
     $mothersname = $_POST['mname'];
    
    
    
     $phouse = $_POST['phouse'];
     $plocation = $_POST['ploaction'];
     $pvillage = $_POST['pvillage'];
     $pthana = $_POST['pthana'];
     $pdistrict = $_POST['pdistrict'];
     $ppostcode = $_POST['ppostcode'];
    
    
    
    
    
     $house = $_POST['house'];
     $location = $_POST['loaction'];
     $village = $_POST['village'];
     $thana = $_POST['thana'];
     $district = $_POST['district'];
     $postcode = $_POST['postcode'];
     $dateofbirth = $_POST['birth'];
     $clubname = $_POST['cname'];
     $from = $_POST['fro'];
     $to = $_POST['tot'];
     $totrun = $_POST['totruns'];
     $totwck = $_POST['totwck'];
     $teamleader = $_POST['tlead'];
     $bclubname = $_POST['bclub'];
     $oppname = $_POST['oppname'];
     $eventid = $_POST['eventid'];
     $matchid = $_POST['matchid'];
     $runs = $_POST['bruns'];
     $wickets = $_POST['bwck'];
     $degname = $_POST['degree'];
     $institute = $_POST['institute'];
     $board = $_POST['boardname'];
     $year = $_POST['year'];
     $result = $_POST['result'];
     $membership = $_POST['radio'];
     $otherorg = $_POST['othname'];
     $signature = $_POST['sign'];
     $date = $_POST['dat'];
     
   

     $pranto = "INSERT INTO generalinfo(playerid,firstname,middlename,lastname,fathersname,mothersname,phouseno,plocation,pvillage,pthana,pdistrict,ppostcode,houseno,location,village,thana,district,postcode,dateofbirth)
                     VALUES('$playerid','$firstname','$middlename','$lastname','$fathersname','$mothersname','$phouse','$plocation','$pvillage','$pthana','$pdistrict','$ppostcode','$house','$location','$village','$thana','$district','$postcode','$dateofbirth')";



     $res = mysqli_query($conn,$pranto);
     
     $pre =  "INSERT INTO prevhis(playerid,clubname,fom,ta,totalruns,totalwickets,teamleader)
                     VALUES('$playerid','$clubname','$from','$to','$totrun','$totwck','$teamleader')";



     $rock = mysqli_query($conn,$pre);
    
    $pro =  "INSERT INTO best(playerid,bclub,oponame,eventid,matchid,runs,wickets)
                     VALUES('$playerid','$bclubname','$oppname','$eventid','$matchid','$runs','$wickets')";



     $roc = mysqli_query($conn,$pro);
    
    $pri =  "INSERT INTO edu(playerid,degreename,institute,board,year,result)
                     VALUES('$playerid','$degname','$institute','$board','$year','$result')";



     $ron = mysqli_query($conn,$pri);
    
    $pom =  "INSERT INTO member(playerid,membership,otherorg,signature,date)
                     VALUES('$playerid','$membership','$otherorg','$signature','$date')";



     $rom = mysqli_query($conn,$pom);
    echo "Added";




}


?>

      