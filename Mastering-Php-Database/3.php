<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"
*/
$t = "10";

if ($t < "10") {
  echo "I love greenchip";
}
elseif ($t == "10")
{
	echo "I  dont love greenchip";	
}
else{
echo "i hate greenship"
}
/*
Étape 2: Créez un forloop qui affiche 10 nombres
*/

for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
  }
/*
Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>