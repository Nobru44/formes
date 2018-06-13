<?php
include "bootstrap.php";


$canvas1 = new Canvas();

print_r($canvas1);


$rectangle1 = new Rectangle(100, 200);
$rectangle1->setColor('red');
$rectangle1->setPosition(200, 300);

$ellipse1 = new Ellipse(80, 70);
$ellipse1->setPosition(350, 300);
$ellipse1->setColor('green');



$cercle1 = new Cercle(120, 200, 10);
$cercle1->setPosition(200, 600);
$cercle1->setColor('yellow');


$point2 = new Point(250, 190);
$point3 = new Point(190, 20);

$triangle1 =  new Triangle($point2, $point3);
$triangle1->setPosition(160,210);
$triangle1->setColor('blue');

$point4 = new Point(250, 210);
$point5 = new Point(200, 30);
$triangle2 =  new Triangle($point4, $point5);
$triangle2->setColor('black');
$triangle2->setOpacity(0.5);

$carre1 = new Carre(300, 300);
$carre1->setPosition(150, 500);
$carre1->setColor('tomato');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Les formes</title>
	<meta charset="utf-8">
</head>
<body>
	<header>
		<h1>Les formes</h1>
	</header>
	<main>
		<svg width="1000" height="1000">

<?= $rectangle1->Draw();?>
<?= $ellipse1->Draw(); ?>
<?=	$cercle1->Draw(); ?>


<?= $triangle1->Draw();?>
<?= $triangle2->Draw();?>
<?= $carre1->Draw();?>



		</svg>
	</main>
</body>
</html>


