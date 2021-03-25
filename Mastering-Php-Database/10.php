<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	 
	    //Étape 1: Créez une classe appelée Chien
	class chien {
		//Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure
		public $lexemple;
		public $yeux;
		public $color;
		public $nez;
       //Étape 4: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés
		function AfficherTout()
		{
			$result='';
			$result.=$this->lexemple .'and' .$this->yeux;
			$result.=$this->color .'and' .$this->nez;
			return $result;
		}
	}
//Étape 5: Instanciez la classe / créez l'objet et appelez-le pitbull
$pitbull =new  chien();
	

	$pitbull->lexemple= 'azerty';
	$pitbull->yeux= 'noir';
	$pitbull->color= 'gray';
	$pitbull->nez= 'abcd';

// Étape 6: Appelez la méthode AfficherTout
	echo '<pre>';
	echo var_dump( $pitbull);
	echo '</pre>';

	?>

</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>