<?php
error_reporting(0);
include 'init.php';


$p=0;
$a=1;
$q=0;
$c=0;

$result="SELECT date1,posted_by ,question.q_id as id, LEFT(answer, 190) as answer FROM question INNER JOIN answer ON question.q_id=answer.q_id";
$sql = mysql_query($result, $connection) or die(mysql_error());



$result1="SELECT question FROM question";
$sql1 = mysql_query($result1, $connection) or die(mysql_error());
while($row1 = mysql_fetch_array($sql1))
{
  $final[]=$row1['question'];
  $c++;
} 
$p=1;
while($row = mysql_fetch_array($sql))
{
  if($row['id']==$p)
  {
    $date2[]=$row['date1'];
  $posted[]=$row['posted_by'];
  $p++;
}

  
}


?>
<?php
if(empty($_SESSION['username'])=== true)
{
	header("location:index.php");
exit();
}
?>
<html>
<head>

<title>Forum</title>


 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>     

 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        

    
      
 <link rel="stylesheet" href="css/forum.css" type="text/css">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/modal.css" type="text/css">
<link rel="stylesheet" href="css/update.css" type="text/css">

</head>

   
<body>

            <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ACM-JUIT Forum</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="question.php"><span class="glyphicon glyphicon-pencil"></span>Ask Question</a></li><li><a class="btn btn-link-1 launch-modal "><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $_SESSION['username']; ?> </a></li>
      <li><a href='logout.php' ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
           <div class="margin">

</div>

 
        <div class="container">
  <?php



  
  $var1=<<< EOD

          <div class="col-sm-1">
          </div>
        <div class="container col-sm-10" id="box1">



<div class="panel panel-primary">
  <div class="panel-heading"><p id="question">
EOD;

$var2=<<< EOD
</p></div>
  <div class="panel-body">
    <div id="info">
 <i>Not answered yet!!</i> <br>
Be the first one to answer this question!
 </div>
EOD;



$var4=<<< EOD
 </div>
</div>


          </div>
EOD;

$vara=<<< EOD

          <div class="col-sm-1">
          </div>
        <div class="container col-sm-10" id="box1">



<div class="panel panel-primary">
  <div class="panel-heading"><p id="question">
EOD;
$varb=<<< EOD
</p></div>
  <div class="panel-body">
    <p><b>Answered By:</b>
EOD;
$varc=<<< EOD
</p><p> <b>Dated:</b>
EOD;
$vard=<<< EOD
</p>
EOD;
$vare=<<< EOD
 </div>
</div>
</div>
EOD;

?>
<?php 

for ($x = 0; $x < $c; $x++) {
echo "<a href=\"answer.php?id=$a\">"; 

$cn="SELECT a_id FROM answer where q_id=$x+1";
$ct = mysql_query($cn, $connection) or die(mysql_error());
$count=mysql_num_rows($ct);
 
if($count==0)
{
echo $var1;
mysql_data_seek( $sql, 0 );
echo "Q";
echo $x+1;
echo ". ";
echo $final[$q++];
echo $var2;
echo " ";
echo $var5;
}
else
{
 
  echo $vara;
mysql_data_seek( $sql, 0 );
echo "Q";
echo $x+1;
echo ". ";
echo $final[$q++];
echo $varb;
echo " ";
print_r($posted[$x]);
echo $varc;
print_r($date2[$x]);

echo $vard;
}
if(empty($row)===false)
  {
    echo "Answer this question";
  }
  else
  {
while($row = mysql_fetch_array($sql))
{
  
  if((int)$row['id']=== $a)
  {
    echo $row['answer'];
    

  }
  
}
}
if($count!=0)
echo "...";

$a++;
echo $vare;
echo "</a>";

}

?>
 


 </div>


      
       

</body>


</html>


