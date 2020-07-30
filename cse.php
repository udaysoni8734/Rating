<?php 
$db="dbtrs";
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password,$db);

?>
<html lang="en">
<head>
    <title>Professor's Rating System</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- <link href="css/imagesss.css" rel="stylesheet" /> -->
    <link href="css/phpwala.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" onload="Username()">
    <div id="container">
     <nav class="navbar navbar-default navbar-fixed-top">
       <div class="container-fluid">
         <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>                        
         </button>
         <a class="navbar-brand" href="#myPage">Professor's Rating System</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Mainpage.html">Home</a></li>
            <li><a href="Mainpage.html#Deans">Deans</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="usermore" >Department
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="cse.php"  >CSE    </a></li>
                      <li><a href="ece.php"  >ECE    </a></li> 
                      <li><a href="mec.php"  >MECH   </a></li> 
                      <li><a href="mte.php"  >M.TECH </a></li> 
                      <li><a href="mat.php"  >MATH   </a></li> 
                      <li><a href="bba.php"  >BBA    </a></li> 
        
                    </ul>
                  </li>
                  <li><a href="#search"><span class="glyphicon glyphicon-search"></span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="con">

    <?php
    for($i=1;$i<40;$i++)
    {
    echo '<div class="abc1">';    
                $sql="SELECT * FROM teachers WHERE ID=$i ";
                $result = mysqli_query($conn, $sql);
               
                
                        $row = mysqli_fetch_assoc($result);
                        echo '<button onclick="load('.$i.')" >';
                        echo "<img src=".$row["photo"].">";
                        echo"<br>";
                        echo $row["Name"];
                        echo"<br>";
                        echo $row["qua"];
                
              
               echo' <br>';
                
        echo'</div>';
    }
        ?>
        
        

  </div>   
  <script>
    var $i;
    function load($i){
                    var xhttp=new XMLHttpRequest();  
                    var f="Ratingforteachers.php?ID=";
                    var s=$i;
                    var u=f.concat(s);
                    xhttp.open("GET",u,true);
                    xhttp.send();
                    window.location.href=u;
    } 
  </script>  
</body>
</html>
