<?php


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


//Lets add in the user functions from the user file
require_once $_SERVER['DOCUMENT_ROOT']."/core/user.php";

if (userExists($_POST['user'])) {
	if(checkSalt($_POST['user'],$_POST['pass'])) {
		echo "pass correct";
	} else {
		echo "user does not exist or pass incorrect";
	}
} else {
	echo "user does not exist or pass incorrect";
}

?>

<html>
<body>
	<!--
	<script type="text/javascript">
		window.location.href=<?php echo $COOKIE["page"]; setcookie("page","",time()-36000);?>
	</script>
	-->
</body>
</html>