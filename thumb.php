<?
include("config.php") ;
if(isset($_GET["big"])) {
	$width = $bigwidth ; 
}
$root = imagecreatefromjpeg ($path."/".$_GET["url"]) ;
$rootx = imagesx ($root) ;
$rooty = imagesy ($root) ;
$height = $rooty * $width / $rootx ;

$im = ImageCreateTrueColor ($width, $height) ;
header ("content-type: image/jpeg") ;
ImageCopyResized ($im, $root, 0, 0, 0, 0, $width,  $height, $rootx, $rooty) ;
ImageJPEG ($im, false, $quality) ;
?>
