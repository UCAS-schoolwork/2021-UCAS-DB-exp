
<?php
include_once("utils.php");
 require_once '../header.php'?>
  <body>
    <?php require_once '../nav.php'?>
    <?php require_once '../checkadmin.php'?>
    <div class="center w">
      <?php 
        if(isset($_POST['openbuy'])) openbuy();
        if(isset($_POST['buyday'])) buyday();
        ret_botton();
      ?>
    </div>    
    <?php require_once '../footer.php'?>
  </body>
</html>

<?php

function buyday()
{
  $conn = mypg_connect();
	$sql = "select * from runday order by r_day;";
	$ret = mypg_query($conn,$sql);
  echo "<table class=\"default-table\"border=\"1\"><tr><th>所有开放购票日期</th></tr>";
  while($row = pg_fetch_row($ret)){
    echo "<tr><td>$row[0]</td></tr>";
  }
  echo "</table>";
}

function openbuy()
{
  $fromday = ($_POST['fromday']);
  $conn = mypg_connect();
	$sql = "insert into runday values('$fromday');";
	$ret = pg_query($conn,$sql);
  if(!$ret) echo "<script>alert('日期已存在');history.go(-1);</script>";
  else echo "<script>alert('{$fromday}购票已开放');history.go(-1);</script>";
  exit();
}


?>