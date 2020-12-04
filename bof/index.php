<?php

include("header.php");

$array = array(
	"customer","customerdetail","customeredit","customerdelete","customeradd",
	"production","productiondetail","productionadd","productionedit","productiondelete",
	"type","typeedit","typeadd","typedetail","typedelete",
	"invoice","invoicedetail");
if (in_array(@$_GET['page'], $array))
{
	include($_GET['page'].".php");
}
else{echo"none";}

include("footer.php");
?>