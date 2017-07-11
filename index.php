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

// if (isset($_POST['bilan'])) {
// 	;
// }
// 	else {
// 		echo "Merci d'indiquer si le bilan concerne une ou deux personnes <br />";
// 	}

// if (isset($_POST['nom']) AND is_string($_POST['nom']))
// {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer un nom <br />";
// 	}

// if (isset($_POST['prenom']) AND is_string($_POST['prenom']))
// {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer un prénom <br />";
// 	}

// if ((isset($_POST['age'])) AND ($_POST['age'] = (int) $_POST['age']) AND (($_POST['age'] > 18) AND ($_POST['age'] <= 150)))
// {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer un âge, sans virgule, et compris entre 1 et 150 <br />";
// 	}

// if (isset($_POST['date_naissance'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer une date de naissance <br />";
// 	}

// if (isset($_POST['fr_lux_1'])) {
// 	;
// }
// 	else {
// 		echo "Merci d'indiquer une nationalité <br />";
// 	}

// if (isset($_POST['residence_fiscale']) AND is_string($_POST['residence_fiscale'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer l'adresse de la résidence fiscale <br />";
// 	}

// if ((isset($_POST['cp'])) AND is_string($_POST['cp'])) {
// 	;
// }
// //is_string car les codes postaux luxembourgeois contiennent également des lettres
// 	else {
// 		echo "Merci de rentrer un code postal, sans espace <br />";
// 	}

// if (isset($_POST['ville']) AND is_string($_POST['ville'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer la ville de la résidence fiscale <br />";
// 	}

// if (isset($_POST['mail']) AND is_string($_POST['mail'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer une adreese mail <br />";
// 	}

// if (isset($_POST['telephone']) AND is_numeric($_POST['telephone'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer une numéro de téléphone fixe, sans points ni espaces<br />";
// 	}

// if (isset($_POST['gsm']) AND is_numeric($_POST['gsm'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer un numéro de téléphone portable, sans points ni espaces<br />";
// 	}

// if (isset($_POST['profession']) AND is_string($_POST['profession'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer une profession <br />";
// 	}

// if (isset($_POST['revenus']) AND is_numeric($_POST['revenus'])) {
// 	;
// }
// 	else {
// 		echo "Merci d'indiquer un revenu <br />";
// 	}

// if (isset($_POST['situation']) AND is_string($_POST['situation'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer une situation familiale <br />";
// 	}

// if (isset($_POST['prenom_conjoint']) AND is_string($_POST['prenom_conjoint'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer le prénom du conjoint <br />";
// 	}

// if (isset($_POST['age_conjoint']) AND ($_POST['age_conjoint'] !== is_int($_POST['age_conjoint'] )) AND (($_POST['age_conjoint'] < 18 AND $_POST['age_conjoint'] >= 150))) {
// 		echo "Merci de rentrer l'âge du conjoint, sans virgule, et compris entre 1 et 150 <br />";	
// }
// 	else {
// 		;
// 	}

// if (isset($_POST['date_naissance_conjoint'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer la date de naissance du conjoint <br />";
// 	}

// if (isset($_POST['fr_lux_2'])) {
// 	;
// }
// 	else {
// 		echo "Merci d'indiquier la nationalité du conjoint <br />";
// 	}

// if (isset($_POST['profession_conjoint']) AND is_string($_POST['profession_conjoint'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer la profession du conjoint <br />";
// 	}

// if (isset($_POST['revenus_conjoint']) AND is_numeric($_POST['revenus_conjoint'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer les revenus du conjoint <br />";
// 	}

// if (isset($_POST['nom_enfant_1']) AND is_string($_POST['nom_enfant_1'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer le prénom du premier enfant <br />";
// 	}

// if (isset($_POST['nom_enfant_2']) AND is_string($_POST['nom_enfant_2'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer le prénom du deuxième enfant <br />";
// 	}

// if (isset($_POST['nom_enfant_3']) AND is_string($_POST['nom_enfant_3'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer le prénom du troisième enfant <br />";
// 	}

// if (isset($_POST['date_naissance_enfant_1'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer la date de naissance du premier enfant <br />";
// 	}

// if (isset($_POST['date_naissance_enfant_2'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer la date de naissance du deuxième enfant <br />";
// 	}

// if (isset($_POST['date_naissance_enfant_3'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer la date de naissance du troisième enfant <br />";
// 	}

// if (isset($_POST['declaration_impots_1'])) {
// 	;
// }
// 	else {
// 		echo "Merci d'indiquer si vous faites votre déclaration d'impôts ou non <br />";
// 	}

// if (isset($_POST['montant_impots_1']) AND is_numeric($_POST['montant_impots_1'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer le montant des impôts <br />";
// 	}

// if (isset($_POST['declaration_impots_2'])) {
// 	;
// }
// 	else {
// 		echo "Merci d'indiquer si vous faites votre déclaration d'impôts ou non <br />";
// 	}

// if (isset($_POST['montant_impots_2']) AND is_numeric($_POST['montant_impots_2'])) {
// 	;
// }
// 	else {
// 		echo "Merci de rentrer le montant des impôts <br />";
// 	}

// if (isset($_POST['emprunt_1'])) {
// 	;
// }
// 	else {
// 		echo "Merci d'indiquer si vous avez un ou des emprunts en cours <br />";
// 	}

// if (isset($_POST['emprunt_1'])=='Non' AND (empty($_POST['nature_emprunt_1'])) AND (empty($_POST['montant_mensualites_1'])) AND (empty($_POST['date_fin_remboursement_1'])) AND (empty($_POST['taux_credit_1'])) AND (empty($_POST['capital_restant_du_1'])) AND (empty($_POST['capital_emprunte_1']))) {
	
// }
// 	else {
// 		echo "Merci d'indiquer les données de votre emprunt actuel <br />";
// 	}


// $fr_lux_1 = $_POST['fr_lux_1'];
// $nom_1 = isset($_POST['nom']) ? $_POST['nom'] : NULL;
// $prenom_1 = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;

// if ($_POST['fr_lux_1'] == "francaise") {
	
// 	$array_client_france = array( 
// 	"Nationalité" => $fr_lux_1,
// 	"Nom" => $nom_1,
// 	"Prénom" => $prenom_1,
// 	);
// echo "<pre>";
// echo "Tableau client français : ";
// print_r($array_client_france);
// echo "<pre>";
// "<br />";
// }
// elseif ($_POST['fr_lux_1'] == "luxembourgeoise") {

// 	$array_client_luxembourg = array( 
// 	"Nationalité" => $fr_lux_1,
// 	"Nom" => $nom_1,
// 	"Prénom" => $prenom_1,
// 	);
// echo "<pre>";
// echo "Tableau client luxembourgeois : ";
// print_r($array_client_luxembourg);
// echo "<pre>";
// "<br />";
//  	 } 

?>
</div>
</body>
</html>