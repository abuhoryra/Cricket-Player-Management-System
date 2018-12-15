 <?php
include_once("connect.php");

if(isset($_POST['Submit'])){

     $clubname = $_POST['clubname'];
     $dateofest = $_POST['dateofest'];
     
    
    
     $chouseno = $_POST['chouseno'];
     $clocation = $_POST['clocation'];
     $cvillage = $_POST['cvillage'];
     $cthana = $_POST['cthana'];
     $cdistrict = $_POST['cdistrict'];
     $cpostcode = $_POST['cpostcode'];
    
    
    
    
    
     $presidentname = $_POST['presidentname'];
    

     $clubreg = "INSERT INTO club2(clubname,dateofest,chouseno,clocation,cvillage,cthana,cdistrict,cpostcode,presidentname)
                     VALUES('$clubname','$dateofest','$chouseno','$clocation','$cvillage','$cthana','$cdistrict','$cpostcode','$presidentname')";



     $res = mysqli_query($conn,$clubreg);
     
    
    echo "Added";




}


?>

      