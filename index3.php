<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="style3.css">
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
       <img class="img-responsive" src="tiger.png">
        <div class="container">
        
        <div class="jumbotron">
            <p class="p1">Club Registration Form</p>
            <hr>
            <form method="post" action="registration3.php">
                <div class="divag">
                <div class="form-group row form-inline">
                   
                    <label class="l16">Name of the Club :</label> <input class="form-control f1 input-sm" type="text" name="clubname" placeholder="Enter Name of the Club" autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l17">Date of Establishment :</label> <input class="form-control f2 input-sm" type="text" name="dateofest" placeholder="DD/MM/YYYY" autocomplete="off">
                </div><br>
                
                
                <div class="form-group row form-inline">
                          <label style="font-size: 20px; color:  #1a8cff;">Address :-</label><br><br>
                    <label class="l18">House No :</label> <input class="form-control f6 input-sm" type="text" name="chouseno" placeholder="Enter House No" autocomplete="off">
                </div>
                
                <div class="form-group row form-inline">

                    <label class="l19">Location :</label> <input class="form-control f7 input-sm" type="text" name="clocation" placeholder="Enter Location" autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l20">Village/Street :</label> <input class="form-control f8 input-sm" type="text" name="cvillage" placeholder="Enter Village/Street " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l21">Thana  :</label> <input class="form-control f9 input-sm" type="text" name="cthana" placeholder="Enter Thana " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l22">District :</label> <input class="form-control f10 input-sm" type="text" name="cdistrict" placeholder="Enter District " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l23">Post code  :</label> <input class="form-control f10 input-sm" type="text" name="cpostcode" placeholder="Enter Post code  " autocomplete="off">
                </div><br><br>
                
                
                
                
                
                
                
                <div class="form-group row form-inline">
                         
                    <label class="l24">Name of the President :</label> <input class="form-control f6 input-sm" type="text" name="presidentname" placeholder="Enter Name of the President" autocomplete="off">
                </div>
                
               
 
                <div class="bom">
                <input type="submit" class="btn btn-primary" value="Register" name="Submit">
                </div>

            </form>
        </div>
    </div>
      
      
       
    </body>
</html>