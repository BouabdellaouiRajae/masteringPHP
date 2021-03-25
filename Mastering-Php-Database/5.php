<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho
*/
echo(floor(0.60) . "<br>");
/*
	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho
	*/

	print "Hello world!";
	/*
	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));


?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>