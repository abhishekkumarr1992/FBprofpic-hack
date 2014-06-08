
<?php
if($_POST["user"]==NULL)
{
	echo "enter the username";
}
else {
	$a=htmlspecialchars($_POST['user']) or die("enter a valid username"); 
	$b="https://m.facebook.com/".$a;
$html = @file_get_contents($b)or die("unable to open");
$dom= new DOMDocument;
@$dom->loadHTML($html);
$dom->preserveWhiteSpace = false;
$images = $dom->getElementsByTagName('img');
foreach ($images as $image) {
  $x[]= $image->getAttribute('src');
	
	$y= str_replace('s320x320', 's720x720', @$x[1]);
	$y= str_replace('s200x200', 's720x720', @$x[1]);
	$y= str_replace('s480x480', 's720x720', @$x[1]);
	
	
	
}

echo "<center><img src=$y  ></center>";
}
?>

