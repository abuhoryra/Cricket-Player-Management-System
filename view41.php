<?php

include_once("connect.php");


$results="SELECT F.matchid,F.matchdate
          FROM matches2 F";


$result = mysqli_query($conn,$results);

$result1 = mysqli_query($conn,$results);

      
$rom="SELECT  B.venueid
          FROM venue2 B";


$rim = mysqli_query($conn,$rom);



$add="SELECT P.playerid,P.totwick,P.totrun,P.performance
          FROM player2 P";


$top = mysqli_query($conn,$add);






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
   		 
   		<th>Match ID</th>

      <th>Venue ID</th>
   	
      <th>Match Date</th>
      <th>Player ID</th>
      <th>Total Wickets</th>
      <th>Total Runs</th>
      <th>Performance</th>
   		
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($result)and$res1 = mysqli_fetch_array($rim)and$res2 = mysqli_fetch_array($result1)and
        $res3= mysqli_fetch_array($top)) {

             ?>

              <tr>

             
             
              <td><?php echo $res['matchid']; ?></td>
              <td><?php echo $res1['venueid']; ?></td>
              <td><?php echo $res2['matchdate']; ?></td>

              <td><?php echo $res3['playerid']; ?></td>
              <td><?php echo $res3['totwick']; ?></td>
              <td><?php echo $res3['totrun']; ?></td>
              <td><?php echo $res3['performance']; ?></td>
            
               
              </tr>


             <?php


      }


    ?>

   
  
 </div>
 </div>


</body>
</html>