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
  <link rel="stylesheet" href="style.css">
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
            <p class="p1">Player Registration Form</p>
            <hr>
            <form method="post" action="registration.php">
                <div class="divag">
                  <div class="form-group row form-inline">
                   
                    <label class="l1">Player ID :</label> <input class="form-control f1 input-sm" type="text" name="playerid" placeholder="Enter Player ID" autocomplete="off">
                </div>
                <div class="form-group row form-inline">
                   
                    <label class="l1">First Name :</label> <input class="form-control f1 input-sm" type="text" name="firstname" placeholder="Enter Your First Name" autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l2">Middle Name :</label> <input class="form-control f2 input-sm" type="text" name="middlename" placeholder="Enter Your Middle Name" autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l3">Last Name :</label> <input class="form-control f3 input-sm" type="text" name="lastname" placeholder="Enter Your Last Name" autocomplete="off">
                </div>
                
                <div class="form-group row form-inline">
                    
                    <label class="l4">Father's Name :</label> <input class="form-control f4 input-sm" type="text" name="fname" placeholder="Enter Your Father's Name " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l5">Mother's Name :</label> <input class="form-control f5 input-sm" type="text" name="mname" placeholder="Enter Your Mother's Name" autocomplete="off">
                </div><br><br>
                
                
                <div class="form-group row form-inline">
                          <label style="font-size: 20px; color:  #1a8cff;">Present Address :-</label><br><br>
                    <label class="l6">House No :</label> <input class="form-control f6 input-sm" type="text" name="phouse" placeholder="Enter Your House No" autocomplete="off">
                </div>
                
                <div class="form-group row form-inline">

                    <label class="l7">Location :</label> <input class="form-control f7 input-sm" type="text" name="ploaction" placeholder="Enter Your Location" autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l8">Village/Street :</label> <input class="form-control f8 input-sm" type="text" name="pvillage" placeholder="Enter Your Village/Street " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l9">Thana  :</label> <input class="form-control f9 input-sm" type="text" name="pthana" placeholder="Enter Your Thana " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l10">District :</label> <input class="form-control f10 input-sm" type="text" name="pdistrict" placeholder="Enter Your District " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l11">Post code  :</label> <input class="form-control f10 input-sm" type="text" name="ppostcode" placeholder="Enter Your Post code  " autocomplete="off">
                </div>
                
                
                
                
                
                
                
                <div class="form-group row form-inline">
                          <label style="font-size: 20px; color:  #1a8cff;">Permanent Address :-</label><br><br>
                    <label class="l6">House No :</label> <input class="form-control f6 input-sm" type="text" name="house" placeholder="Enter Your House No" autocomplete="off">
                </div>
                
                <div class="form-group row form-inline">

                    <label class="l7">Location :</label> <input class="form-control f7 input-sm" type="text" name="loaction" placeholder="Enter Your Location" autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l8">Village/Street :</label> <input class="form-control f8 input-sm" type="text" name="village" placeholder="Enter Your Village/Street " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l9">Thana  :</label> <input class="form-control f9 input-sm" type="text" name="thana" placeholder="Enter Your Thana " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l10">District :</label> <input class="form-control f10 input-sm" type="text" name="district" placeholder="Enter Your District " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l11">Post code  :</label> <input class="form-control f10 input-sm" type="text" name="postcode" placeholder="Enter Your Post code  " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l12">Date of Birth  :</label> <input class="form-control f10 input-sm" type="text" name="birth" placeholder="Enter Your Date of Birth (DD-MM-YYYY)" autocomplete="off">
                </div>

               

                </div>
                <br><br>
                <label style="font-size: 20px; color:  #ff6600;">Previous History :-</label><br><br> 
                 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Club Name</th>
        <th>From</th>
        <th>To</th>
        <th>Total Runs</th>
        <th>Total Wickets</th>
        <th>Team leader (Y/N)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" class="inp" autocomplete="off" name="cname"></td>
        <td><input type="text" class="inp" autocomplete="off" name="fro"></td>
        <td><input type="text" class="inp" autocomplete="off" name="tot"></td>
        <td><input type="text" class="inp" autocomplete="off" name="totruns"></td>
        <td><input type="text" class="inp" autocomplete="off" name="totwck"></td>
        <td><input type="text" class="inp" autocomplete="off" name="tlead"></td>
      </tr>
      
    </tbody>
  </table><br><br><br>
<label style="font-size: 20px; color:  #ff6600;">Best Performance :-</label><br><br> 
                 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Club Name</th>
        <th>Opponent club name</th>
        <th>Event Id</th>
        <th>Match Id</th>
        <th>Runs</th>
        <th>Wickets</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" class="inp" autocomplete="off" name="bclub"></td>
        <td><input type="text" class="inp" autocomplete="off" name="oppname"></td>
        <td><input type="text" class="inp" autocomplete="off" name="eventid"></td>
        <td><input type="text" class="inp" autocomplete="off" name="matchid"></td>
        <td><input type="text" class="inp" autocomplete="off" name="bruns"></td>
        <td><input type="text" class="inp" autocomplete="off" name="bwck"></td>
      </tr>
      
    </tbody>
  </table>
  
  
  
  <br><br><br>
<label style="font-size: 20px; color:  #ff6600;">Educational Qualifications :-</label><br><br> 
                 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name of degree</th>
        <th>Institute/Department</th>
        <th>Board/University</th>
        <th>Year</th>
        <th>Result </th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" class="inp" autocomplete="off" name="degree"></td>
        <td><input type="text" class="inp" autocomplete="off" name="institute"></td>
        <td><input type="text" class="inp" autocomplete="off" name="boardname"></td>
        <td><input type="text" class="inp" autocomplete="off" name="year"></td>
        <td><input type="text" class="inp" autocomplete="off" name="result"></td>
        
      </tr>
      
      
    </tbody>
  </table>
  <br><br>
  <label style="font-size: 20px; color:  #ff6600;">Membership  :-</label><br>
  <div class="radio">
      <label style="color: #009999; font-weight: bold;"><input type="radio" name="radio" value="ICCB">ICCB</label>
    </div>
    <div class="radio">
      <label style="color: #009999; font-weight: bold;"><input type="radio" name="radio" value="BCCB">BCCB</label>
    </div>
    <div class="radio">
      <label style="color: #009999; font-weight: bold;"><input type="radio" name="radio" value="ACCB">ACCB</label>
    </div>
    <div class="radio">
      <label style="color: #009999; font-weight: bold;"><input type="radio" name="radio" value="No Accrediated Membership"onclick="myFunction()">Others </label>
    </div>
    
    <br>
    
  <div class="form-group row form-inline"  id="otn">

                    <label class="l7">If others, Name of the organization :</label> <input class="form-control f7 input-sm" type="text" name="othname"autocomplete="off">
                </div>
                
                <br>
    
  <div class="form-group row form-inline">

                    <label class="l7">Signature of the Player :</label> <input class="form-control f7 input-sm" type="text" name="sign"autocomplete="off">
                </div>
                
                
                
                <br>
    
  <div class="form-group row form-inline">

                    <label class="l7">Date :</label> <input class="form-control f7 input-sm" type="text" name="dat"autocomplete="off">
                </div>
                <div class="bom">
                <input type="submit" class="btn btn-primary" value="Register" name="Submit">
                </div>

            </form>
        </div>
    </div>

    <style>
        #otn{
            display: none;
        }
        
        </style>
      
      <script>
        
          function myFunction() {
            
    document.getElementById("otn").style.display = "inline-block";
             
             
}
          
          
          
        
        </script>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       
    </body>
</html>