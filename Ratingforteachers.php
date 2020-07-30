<?php 

$id = isset($_GET['ID']) ? $_GET['ID'] : '0'; 

$db="dbtrs";
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password,$db);
?>
<html>
<head>
    <title>detail</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/imagesss.css" rel="stylesheet" />
    <link href="css/product_detail.css" rel="stylesheet" />
    <link href="css/popover.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" >
    <div id="container">
     <nav class="navbar navbar-default navbar-fixed-top">
       <div class="container-fluid">
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
  <div id="wraper">
    <div id="content">
     <div id="comments-section">
   <hr>
   <h2>SHARE YOUR THOUGHTS</h2>
     <div class="enter_comment">
        <fieldset class="fieldset">
             
            <div class="text-center">
  <?php  
$sql="SELECT * FROM teachers WHERE id=".$id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo "<img src=".$row["photo"]." height=300 width=200 >";
echo"<br>";
echo $row["Name"];
echo"<br>";
echo $row["qua"];
echo"<br>";
?>

<form action="ratingupdate.php" method="GET" class="rating">
<input type="hidden" value="<?php echo $id ?>" id="i" name="id">
Rate:
1<input type="radio" value="1" id="r1" class="a" name="r"> 
2<input type="radio" value="2" id="r2" name="r" class="a"> 
3<input type="radio" value="3" id="r3" name="r" class="a"> 
4<input type="radio" value="4" id="r4"name="r" class="a"> 
5<input type="radio" value="5" id="r5" name="r" class="a">

<br>
<br>
<p class="pcomment">Comment:</p>
<input type="text" class="field smid" placeholder="Enter your comments here" name="c" >
<br>
<input type="submit" value="Submit" id="s">

</form>
</div>
<!-- Footer -->
<footer class="text-center">
<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
  <span class="glyphicon glyphicon-chevron-up"></span>
</a><br><br>
<p>Uday Soni</p> 
</footer>
</div>
</body>
</html>