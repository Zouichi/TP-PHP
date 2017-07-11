<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
    <link href="styles.css" rel="stylesheet" media="all" type="text/css" />
    <title>Vérifications</title>
</head>
<body id="php">
<div id="php">
<?php 

require ('fonctions.php');

$error=0;
$error_mess=null;

if(isset($_POST['bilan']))
{
    $bilan=$_POST['bilan'];
}
else
{
    $bilan=null;
}

if(verification("texte",$_POST['nom']))
{
    $nom=$_POST['nom'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur le nom <br/>';
}

if(verification("texte",$_POST['prenom']))
{
    $prenom=$_POST['prenom'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur le prenom <br/>';
}

if(verification("nombre",$_POST['age']))
{
    $age=$_POST['age'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur l\'âge <br/>';
}

if(verification("texte",$_POST['date_naissance']))
{
    $date_naissance=$_POST['date_naissance'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur la date de naissance <br/>';
}

if(isset($_POST['fr_lux_1']))
{
    $fr_lux_1=$_POST['fr_lux_1'];
}
else
{
    $fr_lux_1=null;
}

if(verification("texte",$_POST['residence_fiscale']))
{
    $residence_fiscale=$_POST['residence_fiscale'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur l\'adresse de la résidence fiscale <br/>';
}

if(verification("nombre",$_POST['cp']))
{
    $cp=$_POST['cp'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur le code postal <br/>';
}

if(verification("mail",$_POST['mail']))
{
    $mail=$_POST['mail'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur l\'adresse mail <br/>';
}

if(verification("texte",$_POST['ville']))
{
    $ville=$_POST['ville'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur l\'adresse de la résidence fiscale <br/>';
}

if(isset($_POST['telephone']))
{
    $telephone=$_POST['telephone'];
}
else
{
    $telephone=null;
}

if(isset($_POST['gsm']))
{
    $gsm=$_POST['gsm'];
}
else
{
    $gsm=null;
}

if(verification("texte",$_POST['profession']))
{
    $profession=$_POST['profession'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur la profesion <br/>';
}

if(verification("nombre",$_POST['revenus']))
{
    $revenus=$_POST['revenus'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur les revenus <br/>';
}

if(verification("texte",$_POST['situation']))
{
    $situation=$_POST['situation'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur la situation <br/>';
}

if(isset($_POST['prenom_conjoint']))
{
    $prenom_conjoint=$_POST['prenom_conjoint'];
}
else
{
    $prenom_conjoint=null;
}

if(isset($_POST['age_conjoint']))
{
    $age_conjoint=$_POST['age_conjoint'];
}
else
{
    $age_conjoint=null;
}

if(isset($_POST['date_naissance_conjoint']))
{
    $date_naissance_conjoint=$_POST['date_naissance_conjoint'];
}
else
{
    $date_naissance_conjoint=null;
}

if(isset($_POST['fr_lux_2']))
{
    $fr_lux_2=$_POST['fr_lux_2'];
}
else
{
    $fr_lux_2=null;
}

if(verification("texte",$_POST['profession_conjoint']))
{
    $profession_conjoint=$_POST['profession_conjoint'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur la profession du conjoint <br/>';
}

if(verification("nombre",$_POST['revenus_conjoint']))
{
    $revenus_conjoint=$_POST['revenus_conjoint'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur les revenus du conjoint <br/>';
}

if(isset($_POST['enfants']))
{
    $enfants=$_POST['enfants'];
}
else
{
    $enfants=null;
}

if(verification("texte",$_POST['nom_enfant_1']))
{
    $nom_enfant_1=$_POST['nom_enfant_1'];
}
Else
{
    $error=1;
    $error_mess.='Erreur sur le nom du premier enfant <br/>';
}

if($error==0)
{
    $resultat['bilan']=$bilan;
    $resultat['nom']=$nom;
    $resultat['prenom']=$prenom;
    $resultat['age']=$age;
    $resultat['date_naissance']=$date_naissance;
    $resultat['fr_lux_1']=$fr_lux_1;
    $resultat['residence_fiscale']=$residence_fiscale;
    $resultat['cp']=$cp;
    $resultat['mail']=$mail;
    $resultat['ville']=$ville;
    $resultat['telephone']=$telephone;
    $resultat['gsm']=$gsm;
    $resultat['profession']=$profession;
    $resultat['revenus']=$revenus;
    $resultat['situation']=$situation;
    $resultat['prenom_conjoint']=$prenom_conjoint;
    $resultat['age_conjoint']=$age_conjoint;
    $resultat['date_naissance_conjoint']=$date_naissance_conjoint;
    $resultat['fr_lux_2']=$fr_lux_2;
    $resultat['profession_conjoint']=$profession_conjoint;
    $resultat['revenus_conjoint']=$revenus_conjoint;
    $resultat['enfants']=$enfants;
    $resultat['nom_enfant_1']=$nom_enfant_1;
}
Else
{
    echo $error_mess;
}

$fr_lux_1 = $_POST['fr_lux_1'];
$nom_1 = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom_1 = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;

if ($_POST['fr_lux_1'] == "francaise") {
	
	$array_client_france = array( 
	"Nationalité" => $fr_lux_1,
	"Nom" => $nom_1,
	"Prénom" => $prenom_1,
	);
echo "<pre>";
echo "Tableau client français : ";
print_r($array_client_france);
echo "<pre>";
"<br />";
}
elseif ($_POST['fr_lux_1'] == "luxembourgeoise") {

	$array_client_luxembourg = array( 
	"Nationalité" => $fr_lux_1,
	"Nom" => $nom_1,
	"Prénom" => $prenom_1,
	);
echo "<pre>";
echo "Tableau client luxembourgeois : ";
print_r($array_client_luxembourg);
echo "<pre>";
"<br />";
 	 } 

?>
</div>
</body>
</html>