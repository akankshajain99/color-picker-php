<?php 
if (isset($_POST['btn_submit'])) {
	
	$text = $_POST['text'];
	$color = $_POST['color'];
}

?>

<h1 style="color:<?=$color?>"><?=$text;?></h1>