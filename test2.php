
<?php
if(isset($_POST['user']))
{
$a=htmlspecialchars($_POST['user']) 
$a="https://m.facebook.com/".$a;
$html = @file_get_contents($a)or die("unable to open");
$dom= new DOMDocument;
@$dom->loadHTML($html);
$dom->preserveWhiteSpace = false;
$images = $dom->getElementsByTagName('img');
foreach ($images as $image) {
  $x[]= $image->getAttribute('src');
	
	
	$y= str_replace(array( 's320x320', 's480x480', 's200x200'), 's720x720', @$x[1]) ;
	
	
	
	
}

echo "<center><img src=$y  ></center>";
}
?>

