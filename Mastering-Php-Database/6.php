
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 
 <!--Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global)-->

<form action="6.php" method="post">
<input type="text" name="firstname" id=""><br>
<input type="text" name="lastname" id=""><br>
<input type="submit" name="enter" value="enter">
</form>
	
<?php
if(isset($_POST["enter"])){
	echo $_POST["firstname"]."<br>".$_POST["lastname"];
}
?>
	


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>