<?php

include_once("connect.php");


$results="SELECT F.playerid,F.clubid,F.clubname,F.pfirstname,F.pmiddlename,F.plastname,F.pdesignation
          FROM club1 F";


$result = mysqli_query($conn,$results);

$result1 = mysqli_query($conn,$results);

      
$rom="SELECT B.playerid,B.playerid,B.firstname,B.middlename,B.lastname
          FROM player1 B";


$rim = mysqli_query($conn,$rom);



$add="SELECT P.playerid,P.startdate,P.enddate,P.camount,P.witness1,P.witness2
          FROM contract1 P";


$top = mysqli_query($conn,$add);

$top1 = mysqli_query($conn,$add);


$edu="SELECT E.playerid,E.serialno,E.duedate,E.paydate,E.amount      
          FROM payment1 E";


$std = mysqli_query($conn,$edu);







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
   		<th>Club ID</th>
   		<th>Club Name</th>
      
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($result)) {

             ?>

              <tr>
              <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['clubid']; ?></td>
              <td><?php echo $res['clubname']; ?></td>
              
              </tr>


             <?php


      }


    ?>




   </table>
   <br>
   <br>
   <table>


   	<tr>
   		
   		<th>First Name</th>
   		<th>Middle Name</th>
      <th>Last Name</th>
   		<th>Player ID</th>
   		
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($rim)) {

             ?>

              <tr>

              <td><?php echo $res['firstname']; ?></td>
              <td><?php echo $res['middlename']; ?></td>
              <td><?php echo $res['lastname']; ?></td>
              <td><?php echo $res['playerid']; ?></td>
             
              

              </tr>
              
   


             <?php


      }


    ?>




   </table>
   <table>


   	<tr>
   		<th>Player ID</th>
   		<th>First Name</th>
   		<th>Middle Name</th>
      <th>Last Name</th>
   		<th>Designation</th>
   		
     
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($result1)) {

             ?>

              <tr>

              <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['pfirstname']; ?></td>
              <td><?php echo $res['pmiddlename']; ?></td>
              <td><?php echo $res['plastname']; ?></td>
              <td><?php echo $res['pdesignation']; ?></td>
             

              </tr>
              
   


             <?php


      }


    ?>




   </table>
   <table>


   	<tr>
   		<th>Player ID</th>
   		<th>Start Date</th>
   		<th>End Date</th>
      <th>Amount</th>
   		
   		
     
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($top)) {

             ?>

              <tr>

              <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['startdate']; ?></td>
              <td><?php echo $res['enddate']; ?></td>
              <td><?php echo $res['camount']; ?></td>
              
              

              </tr>
              
   


             <?php


      }


    ?>




   </table>
    <table>


   	<tr>
   		<th>Player ID</th>
   		<th>Serial Number</th>
   		<th>Due Date</th>
      <th>Payment Date</th>
   		<th>Amount</th>
   		
     
   		
   	</tr>

    <?php

      while ($res = mysqli_fetch_array($std)) {

             ?>

              <tr>

              <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['serialno']; ?></td>
              <td><?php echo $res['duedate']; ?></td>
              <td><?php echo $res['paydate']; ?></td>
              <td><?php echo $res['amount']; ?></td>
              
              

              </tr>
              
   


             <?php


      }


    ?>

</table>
    <table>


    <tr>
      
      <th>Player ID</th>
      <th>Witness 1</th>
      <th>Witness 2</th>
      
     
      
    </tr>

    <?php

      while ($res = mysqli_fetch_array($top1)) {

             ?>

              <tr>

              <td><?php echo $res['playerid']; ?></td>
              <td><?php echo $res['witness1']; ?></td>
              <td><?php echo $res['witness2']; ?></td>
              
              
              

              </tr>
              
   


             <?php


      }


    ?>


   </table>
 </div>
 </div>


</body>
</html>
