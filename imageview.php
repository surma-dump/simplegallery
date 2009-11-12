<?
	include("config.php") ;
?>

<html>
<body bgcolor="<?=$bgcolor;?>">
<a href="imageview.php?id=<?=($_GET["id"]-1);?>">&lt;&lt;</a><br>
<a href="imageview.php?id=<?=($_GET["id"]+1);?>">&gt;&gt;</a><br>
<a href="gallery.php">Zur&uuml;ck</a>
<center>
<?
	$dir = opendir($path) ;
	$i = 0 ;
	while(($file = readdir($dir))) {
		if(preg_match("/\.jpg/i",$file) > 0) {
			if ($i == $_GET["id"]) {
			echo "<img src=\"thumb.php?url=".$file."&big=1\">\n" ;
			}
			$i++ ;
		}
	}
?>
</center>
</body>
</html>
