<?php
include "header.php";

$nbLignes = 2;
$nbColonnes = 2;

if(!empty($_GET['nbLignes']))$nbLignes=$_GET['nbLignes'];
if(!empty($_GET['nbColonnes']))$nbColonnes=$_GET['nbColonnes'];

?>

<h2><a href="ex4.php?nbLignes=2&nbColonnes=2">Créer un tableau 2*2</a></h2>
<h2><a href="ex4.php?nbLignes=5&nbColonnes=5">Créer un tableau 5*5</a></h2>
<h2><a href="ex4.php?nbLignes=10&nbColonnes=8">Créer un tableau 10*8</a></h2>

<p>
	<?php if(!empty($_GET)) {

		echo '<table border="1"><tbody>';

		for($L=0;$L<$nbLignes;$L++){ //Boucle lignes

			echo ($L%2==0) ? '<tr>' : '<tr style="font-weight:bold">'; //Une ligne sur deux en gras

			for($C=0;$C<$nbColonnes;$C++){ //Boucle colonnes

				echo ($C%2==0) ? '<td>'.$L.'-'.$C.'</td>' : '<td style="background-color:#FF0000">'.$L.'-'.$C.'</td>'; //Une colonne sur deux en rouge

			}

			echo'<tr>';
		}
		echo'</tbody></table>';
	} ?>
</p>



<form method="GET">

	<label for="size">Nombre de lignes : </label>
	<input type="number" value="5" name="nbLignes" id="nbLignes">

	<label for="size">Nombre de colonnes : </label>
	<input type="number" value="5" name="nbColonnes" id="nbColonnes">

	<input type="submit" value="Valider">
</form>

<?php
include "footer.php";
?> 