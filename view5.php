<?php

include_once("connect.php");


$result1="SELECT D.playerid,D.clubid
          FROM club4 D";


$result1 = mysqli_query($conn,$result1);



      
$rom="SELECT  B.playerid,B.leaderid,B.leadername,B.formdate
          FROM team4 B";


$rim = mysqli_query($conn,$rom);



$add="SELECT P.playerid,P.eventid
          FROM event4 P";


$top = mysqli_query($conn,$add);



$edu="SELECT E.playerid,E.coachid,E.coachname   
           FROM coach4 E";


$std = mysqli_query($conn,$edu);

$edu1="SELECT A.playerid,A.pname   
           FROM player4 A";


$std1 = mysqli_query($conn,$edu1);






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
  <link rel="stylesheet" href="home.css">
  <title>Student Record View</title>


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
   		
   		<th>Club ID</th>
   		<th>Date of Formation</th>
      <th>Event Name/Event id</th>
   		<th>Leader ID</th>
   		<th>Leader Name</th>
   		 <th>Coach ID</th>
      <th>Coach Name</th>
      <th>Player ID</th>
      <th>Name</th>
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($result1)and $res1 = mysqli_fetch_array($rim)and$res2 = mysqli_fetch_array($top)
       and $res3 = mysqli_fetch_array($std)and$res4 = mysqli_fetch_array($std1)) {

             ?>

              <tr>

              <td><?php echo $res['clubid']; ?></td>
              <td><?php echo $res1['formdate']; ?></td>
              <td><?php echo $res2['eventid']; ?></td>
              <td><?php echo $res1['leaderid']; ?></td>
              <td><?php echo $res1['leadername']; ?></td>
              <td><?php echo $res3['coachid']; ?></td>
              <td><?php echo $res3['coachname']; ?></td>
              <td><?php echo $res4['playerid']; ?></td>
              <td><?php echo $res4['pname']; ?></td>
             

              </tr>


             <?php


      }


    ?>
    
   



   </table>
   
  
 </div>
 </div>


</body>
</html>
