
<?php
include_once("utils.php");
 require_once '../header.php'?>
  <body>
    <?php require_once '../nav.php'?>
    <div class="center w">
		<h4>查询结果</h4>
      <?php 
        check_access("querytrain");
        querytrain();
        ret_botton();
      ?>
    </div>    
    <?php require_once '../footer.php'?>
  </body>
</html>


<?php


function querytrain()
{
	$trainno = $_POST['trainno'];
	$day = $_POST['day'];
	$conn = mypg_connect();
	$sql = "
    
	";


}

?>