<? 
	include("config.php") ;
?>
<html>
<head>
<style type="text/css">
a { border: 0px; }
img { border: 0px; }
</style>
</head>
<body bgcolor="<?=$bgcolor;?>">
<center>
<table border="0">
<tr>
<?
	$dir = opendir($path) ;
	$i = 0 ;
	while(($file = readdir($dir))) {
		if(preg_match("/\.jpg/i",$file) > 0) {
			echo "<td><center><a href=\"imageview.php?id=".$i."\"><img src=\"thumb.php?url=".$file."\" target=\"_blank\"></a></center></td>\n" ;
			$i += 1 ;
			if($i%$ipl==0) {
				echo "</tr><tr>" ;
			}
		}
	}
?>
</tr>
</table>
</center>
</body>
</html>

