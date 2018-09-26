
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
</head>
<body>
<?php
require 'personne2.php';
require 'form2.php';
$Form = new Form('post');
$pers = new personne("Andrieu","William","wiwi@gmai.com","19");
$pers->getNom();



 ?>	
 <form method="post">
 	<?php 
 		$Form->input('Nom');
        $Form->input('Prenom');
        $Form->input('Adresse');
        $Form->input('Age');
        $Form->input('Tel');
       
		$tab = array('HTML' => 'THOMAS','PHP'=>'Francois','MySql' =>'unpeuFrancois');
?>
  <div>
	<select>
		<p>
		<?php  
		foreach ($tab as $key => $value) {
		  echo "<option value=".$key.">".$value."</option>";
		}
		?>
		</p>
	</select>

	<select>
		
		<?php  
		foreach ($tab as $key => $value) {
		  echo "<option value=".$value.">".$key."</option>";
		}
		?>

	</select>

  </div>
  <div>
	<label for="place">Cergy</label>
	<input type="radio" name="place">

	<label for="place">Champeret</label>
	<input type="radio" name="place">


  </div>

       <?php
          $Form->submit();
       ?>

 	 

















</form>
</body>
</html>