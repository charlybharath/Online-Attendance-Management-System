<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>
<?php include 'php/node_class.php'; ?>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Performance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
 
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
   
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<br>
<a class="navbar-brand" href="index.php" style="font-size:28px;">MVJ College of Engineering</a><br />
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
			<a href="../teacher.php">Dashboard</a></li>
			<li><a href="../profile.php">Profile</a></li>
			<li class="active"><a href="../student.php">Students</a></li>
           	<li><a href="../statistics.php">Statistics</a></li>
			<li><a href="../about.php">About</a></li>
            	<li><a href="../contact.php">Contact</a></li>
			<li><a href="../description.php">Description</a></li>
			<li><a href="../logout.php">Logout</a>
		</li>
          </ul>
        </div>
      </div>
    </nav></br></br></br></br>
  </div>
<br><br>

<h3><div>
      <dl class="dl-horizontal">
        <dd><h1><strong><b>MVJ College of Engineering</b></strong></h1></dd>

<dd><h3>
<strong><i>No Student Present with USN</i><br><br><b style="color:red;"><u>3/CS/17</u></b></strong><br></h3>
<br></dd>
<br><hr>
    </div>
  </h3>

</body>
</html>
