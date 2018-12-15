<?php

include_once("connect.php");


$result="SELECT F.playerid,F.firstname,F.middlename,F.lastname,F.fathersname,F.mothersname,F.phouseno,F.plocation,F.pvillage,F.pthana,F.pdistrict,F.ppostcode,F.houseno,F.location,F.village,F.thana,F.district,F.postcode,F.dateofbirth
          FROM generalinfo F";


$result = mysqli_query($conn,$result);



      
$rom="SELECT  B.playerid,B.clubname,B.fom,B.ta,B.totalruns,B.totalwickets,B.teamleader
          FROM prevhis B";


$rim = mysqli_query($conn,$rom);



$add="SELECT P.playerid,P.bclub,P.oponame,P.eventid,P.matchid,P.runs,P.wickets
          FROM best P";


$top = mysqli_query($conn,$add);



$edu="SELECT E.playerid,E.degreename,E.institute,E.board,E.year,E.result       FROM edu E";


$std = mysqli_query($conn,$edu);




$mem="SELECT M.playerid,M.membership,M.otherorg,M.signature,M.date       FROM member M";


$otg = mysqli_query($conn,$mem);



?>




<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Student Record View</title>
  <link rel="stylesheet" href="home.css">


<style>


table{
  margin-top: 60px;
}

   th{
     border: 2px solid black;
     padding: 10px 10px;

   }
   td{
     border: 2px solid black;
     padding: 5px 5px;
   }

</style>
</head>
<body>




<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fliud">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#btndata" data-toggle="collapse" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

                <a class="navbar-brand" href="index.html">Student Info</a>
            </div>
            <div class="collapse navbar-collapse" id="btndata">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                   
                   
                         <li class="dropdown" style="font-size: 16px;" ><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;" >Record Input <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index1.php">General Information</a></li>
          <li><a href="index2.php">Contact Information</a></li>
          <li><a href="index3.php">Club Information</a></li>
          <li><a href="index41.php">Players Performance Information</a></li>
          <li><a href="index42.php"> Match Information</a></li>
          <li><a href="index5.php"> Team Information</a></li>
        </ul>
      </li>
                   
                   
                   
                   
                   
                   
                   
                   
                    <li class="dropdown" style="font-size: 16px;"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">View <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="view.php">General Information View</a></li>
          <li><a href="view2.php">Contact Information View</a></li>
          <li><a href="view3.php">Club Information View</a></li>
          <li><a href="view41.php">Players Performance Information View</a></li>
          <li><a href="view42.php"> Match Information View</a></li>
          <li><a href="view5.php"> Team Information View</a></li>
        </ul>
      </li>

                </ul>

            </div>
        </div>

    </nav>



<div class="container-fluid">
  <div class="col-xl-12">

   <table class="table">


   	<tr>
   		<th>Player ID</th>
   		<th>First Name</th>
   		<th>Middle Name</th>
      <th>Last Name</th>
   		<th>Father's Name</th>
   		<th>Mother's Name</th>
   		 <th>Present House No</th>
      <th>Present Location</th>
   		<th>Present Village/Street</th>
   		<th>Present Thana</th>
      <th>Present District</th>
   		<th>Present Postal Code</th>
      <th>Permanent House No</th>
      <th>Permanent Location</th>
   		<th>Permanent Village/Street</th>
   		<th>Permanent Thana</th>
      <th>Permanent District</th>
   		<th>Permanent Postal Code</th>
   		<th>Date Of Birth</th>
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($result)) {

             ?>

              <tr>

              <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['firstname']; ?></td>
              <td><?php echo $res['middlename']; ?></td>
              <td><?php echo $res['lastname']; ?></td>
              <td><?php echo $res['fathersname']; ?></td>
              <td><?php echo $res['mothersname']; ?></td>
              <td><?php echo $res['phouseno']; ?></td>
              <td><?php echo $res['plocation']; ?></td>
              <td><?php echo $res['pvillage']; ?></td>
              
              <td><?php echo $res['pthana']; ?></td>
              <td><?php echo $res['pdistrict']; ?></td>
              <td><?php echo $res['ppostcode']; ?></td>
              <td><?php echo $res['houseno']; ?></td>
              <td><?php echo $res['location']; ?></td>
              <td><?php echo $res['village']; ?></td>
              <td><?php echo $res['thana']; ?></td>
              <td><?php echo $res['district']; ?></td>
              <td><?php echo $res['postcode']; ?></td>
              <td><?php echo $res['dateofbirth']; ?></td>

              </tr>


             <?php


      }


    ?>




   </table>
   <br>
   <br>
   <table>


   	<tr>
   		<th>Player ID</th>
   		<th>Club Name</th>
   		<th>From</th>
      <th>To</th>
   		<th>Total Runs</th>
   		<th>Total Wickets</th>
   		 <th>Team Leader</th>
     
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($rim)) {

             ?>

              <tr>
              
              <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['clubname']; ?></td>
              <td><?php echo $res['fom']; ?></td>
              <td><?php echo $res['ta']; ?></td>
              <td><?php echo $res['totalruns']; ?></td>
              <td><?php echo $res['totalwickets']; ?></td>
              <td><?php echo $res['teamleader']; ?></td>
              

              </tr>
              
   


             <?php


      }


    ?>




   </table>
   <table>


   	<tr>
   		<th>Player ID</th>
   		<th>Club Name</th>
   		<th>Opponent club name</th>
      <th>Event Id</th>
   		<th>Match Id</th>
   		<th>Runs</th>
   		 <th>Wickets</th>
     
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($top)) {

             ?>

              <tr>

             <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['bclub']; ?></td>
              <td><?php echo $res['oponame']; ?></td>
              <td><?php echo $res['eventid']; ?></td>
              <td><?php echo $res['matchid']; ?></td>
              <td><?php echo $res['runs']; ?></td>
              <td><?php echo $res['wickets']; ?></td>
              

              </tr>
              
   


             <?php


      }


    ?>




   </table>
   <table>


   	<tr>
   		<th>Player ID</th>
   		<th>Name of degree</th>
   		<th>Institute/Department</th>
      <th>Board/University</th>
   		<th>Year</th>
   		<th>Result</th>
   		
     
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($std)) {

             ?>

              <tr>

              <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['degreename']; ?></td>
              <td><?php echo $res['institute']; ?></td>
              <td><?php echo $res['board']; ?></td>
              <td><?php echo $res['year']; ?></td>
              <td><?php echo $res['result']; ?></td>
              

              </tr>
              
   


             <?php


      }


    ?>




   </table>
    <table>


   	<tr>
   		<th>Player ID</th>
   		<th>Member Ship</th>
   		<th>Other Membership</th>
      <th>Signature</th>
   		<th>Date</th>
   		
   		
     
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($otg)) {

             ?>

              <tr>
              <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['membership']; ?></td>
              <td><?php echo $res['otherorg']; ?></td>
              <td><?php echo $res['signature']; ?></td>
              <td><?php echo $res['date']; ?></td>
              
              

              </tr>
              
   


             <?php


      }


    ?>




   </table>
 </div>
 </div>


</body>
</html>
