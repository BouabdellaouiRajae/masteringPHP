<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* 
		Étape 1: Créez 2 variables appelées number1 et number2 et affecté au number1 la valeur 10 et le deuxième la valeur 20
           */
		    $number1=10;
			$number2=20;
			
/*
		Étape 2: Ajoutez les deux variables et affichez la somme avec écho:
*/      $somme = $number1 + $number2;
        echo $somme
		/*
		Étape 3: Créez 2 tableaux avec les mêmes valeurs, l'un régulier et l'autre associatif*/
		$cars = array("Volvo", "BMW", "Toyota"); 
		echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

		 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		echo "Peter is " . $age['Peter'] . " years old.";
		/*
		Étape 4: Créez une constante et définissez-la sur la valeur de PHP. et utilisez un écho pour l'afficher
*/
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
		

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>