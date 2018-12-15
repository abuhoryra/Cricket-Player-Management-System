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
  <link rel="stylesheet" href="style2.css">
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
            <p class="p1">Contract Form</p>
            <hr>
            <form method="post" action="registration2.php">
                <div class="divag">
                <div class="form-group row form-inline">
                   
                    <label class="l16">Club ID :</label> <input class="form-control f1 input-sm" type="text" name="clubid" placeholder="Enter Club ID" autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l17">Club Name :</label> <input class="form-control f2 input-sm" type="text" name="clubname" placeholder="Enter Club Name" autocomplete="off">
                </div>
                <div class="form-group row form-inline">
                         <label style="font-size: 20px; color:  #1a8cff;">First Party :-</label><br><br>

                          <label style="font-size: 20px; color:  #e69500;">Name of the Player :-</label><br><br>
                    <label class="l18">First Name :</label> <input class="form-control f3 input-sm" type="text" name="firstname" placeholder="Enter First Name" autocomplete="off">
                </div>
                
                <div class="form-group row form-inline">
                    
                    <label class="l19">Middle Name :</label> <input class="form-control f4 input-sm" type="text" name="middlename" placeholder="Enter Middle Name " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l20">Last Name :</label> <input class="form-control f5 input-sm" type="text" name="lastname" placeholder="Enter Last Name" autocomplete="off">
                </div>
                
                
                <div class="form-group row form-inline">
                          
                    <label class="l21">Player ID :</label> <input class="form-control f6 input-sm" type="text" name="playerid" placeholder="Enter Player ID" autocomplete="off">
                </div>
                
                <div class="form-group row form-inline">
                            <label style="font-size: 20px; color:  #1a8cff;">Second Party :-</label><br><br>

                          <label style="font-size: 20px; color:  #e69500;">Authorized Person :-</label><br><br>
                    <label class="l22">First Name :</label> <input class="form-control f7 input-sm" type="text" name="pfirstname" placeholder="Enter First Name" autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l23">Middle Name :</label> <input class="form-control f8 input-sm" type="text" name="pmiddlename" placeholder="Enter Middle Name " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l24">Last Name  :</label> <input class="form-control f9 input-sm" type="text" name="plastname" placeholder="Enter Last Name " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                    <label class="l25">Designation :</label> <input class="form-control f10 input-sm" type="text" name="pdesignation" placeholder="Enter Designation " autocomplete="off">
                </div>
                <div class="form-group row form-inline">

                      <label style="font-size: 20px; color:  #1a8cff;">Contract Period :-</label><br><br>
                    <label class="l26">Start Date  :</label> <input class="form-control f10 input-sm" type="text" name="startdate" placeholder="(DD-MM-YYYY)  " autocomplete="off">
                </div>
                
                
                <div class="form-group row form-inline">
                          
                    <label class="l27">End Date :</label> <input class="form-control f6 input-sm" type="text" name="enddate" placeholder="(DD-MM-YYYY) " autocomplete="off">
                </div>
                
                <div class="form-group row form-inline">

                    <label class="l28">Contract Amount :</label> <input class="form-control f7 input-sm" type="text" name="camount" placeholder="Enter Contract Amount" autocomplete="off">
                </div>
                

               

                </div>
                <br><br>
                <label style="font-size: 20px; color:  #ff6600;">Payment Schedule :-</label><br><br> 
                 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Serial Number</th>
        <th>Due Date</th>
        <th>Payment Date</th>
        <th>Amount</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" class="inp" autocomplete="off" name="serialno"></td>
        <td><input type="text" class="inp" autocomplete="off" name="duedate"></td>
        <td><input type="text" class="inp" autocomplete="off" name="paydate"></td>
        <td><input type="text" class="inp" autocomplete="off" name="amount"></td>
        
      </tr>
      
    </tbody>
  </table><br><br><br>

 <div class="form-group row form-inline">

                    <label class="l29">Witness 1 :</label> <input class="form-control f7 input-sm" type="text" name="witness1" placeholder="" autocomplete="off">
                </div>
  <div class="form-group row form-inline">

                    <label class="l30">Witness 2 :</label> <input class="form-control f7 input-sm" type="text" name="witness2" placeholder="" autocomplete="off">
                </div>
    
  
                
                
                
                <br>
    
  
                <div class="bom">
                <input type="submit" class="btn btn-primary" value="Register" name="Submit">
                </div>

            </form>
        </div>
    </div>

   
      
      
      
      
      
      
      
      
      
      
      
      
      
       
    </body>
</html>