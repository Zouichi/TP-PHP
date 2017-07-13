<!-- Projet réalisé par Sarah Henry, Marie-Sophie Mayor, Daniel Girard et Rémi Boiteux -->
<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
    <link href="styles.css" rel="stylesheet" media="all" type="text/css" />
    <title>Vérifications</title>
</head>
<body id="php">
	<div id="corps">
		<?php 
			//initialisation variable direbonjour TP2
			$direBonjour=false;
			$contenuFile='';

			if(isset($_POST['submit']) && $_POST['submit']=='Envoyer')
			{
				require ('fonctions.php'); /*Appel du fichier regroupant les fonctions*/

				$error=0; /*Initialisation du compteur d'erreur*/
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
				else
				{
					$error=1;
					$error_mess.='Erreur sur le nom <br/>';
				}

				if(verification("texte",$_POST['prenom']))
				{
					$prenom=$_POST['prenom'];
				}
				else
				{
					$error=1;
					$error_mess.='Erreur sur le prenom <br/>';
				}

				if(verification("nombre",$_POST['age']))
				{
					$age=$_POST['age'];
				}
				else
				{
					$error=1;
					$error_mess.='Erreur sur l\'âge <br/>';
				}

				if(verification("date",$_POST['date_naissance']))
				{
					$date_naissance=$_POST['date_naissance'];
				}
				else
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
				else
				{
					$error=1;
					$error_mess.='Erreur sur l\'adresse de la résidence fiscale <br/>';
				}

				if(verification("nombre",$_POST['cp']))
				{
					$cp=$_POST['cp'];
				}
				else
				{
					$error=1;
					$error_mess.='Erreur sur le code postal <br/>';
				}

				if(verification("mail",$_POST['mail']))
				{
					$mail=$_POST['mail'];
				}
				else
				{
					$error=1;
					$error_mess.='Erreur sur l\'adresse mail <br/>';
				}

				if(verification("texte",$_POST['ville']))
				{
					$ville=$_POST['ville'];
				}
				else
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
				else
				{
					$error=1;
					$error_mess.='Erreur sur la profesion <br/>';
				}

				if(verification("nombre",$_POST['revenus']))
				{
					$revenus=$_POST['revenus'];
				}
				else
				{
					$error=1;
					$error_mess.='Erreur sur les revenus <br/>';
				}

				if(verification("texte",$_POST['situation']))
				{
					$situation=$_POST['situation'];
				}
				else
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

				if(isset($_POST['profession_conjoint']))
				{
					$profession_conjoint=$_POST['profession_conjoint'];
				}
				else
				{
					$$profession_conjoint=null;
				}

				if(isset($_POST['revenus_conjoint']))
				{
					$revenus_conjoint=$_POST['revenus_conjoint'];
				}
				else
				{
					$revenus_conjoint=null;
				}

				if(isset($_POST['enfants']))
				{
					$enfants=$_POST['enfants'];
				}
				else
				{
					$enfants=null;
				}

				if($enfants!=null)
				{
					if(isset($_POST['nom_enfant_1']))
					{
						$nom_enfant_1=$_POST['nom_enfant_1'];
					}
					else
					{
						$nom_enfant_1=null;
					}

					if(isset($_POST['nom_enfant_2']))
					{
						$nom_enfant_2=$_POST['nom_enfant_2'];
					}
					else
					{
						$nom_enfant_2=null;
					}

					if(isset($_POST['nom_enfant_3']))
					{
						$nom_enfant_3=$_POST['nom_enfant_3'];
					}
					else
					{
						$nom_enfant_3=null;
					}

					if(isset($_POST['date_naissance_enfant_1']))
					{
						$date_naissance_enfant_1=$_POST['date_naissance_enfant_1'];
					}
					else
					{
						$date_naissance_enfant_1=null;
					}

					if(isset($_POST['date_naissance_enfant_2']))
					{
						$date_naissance_enfant_2=$_POST['date_naissance_enfant_2'];
					}
					else
					{
						$date_naissance_enfant_2=null;
					}

					if(isset($_POST['date_naissance_enfant_3']))
					{
						$date_naissance_enfant_3=$_POST['date_naissance_enfant_3'];
					}
					else
					{
						$date_naissance_enfant_3=null;
					}
				}


				if(isset($_POST['declaration_impots_1']))
				{
					$declaration_impots_1=$_POST['declaration_impots_1'];
				}
				else
				{
					$declaration_impots_1=null;
				}

				if(isset($_POST['faire_declaration_impots_1']))
				{
					$faire_declaration_impots_1=$_POST['faire_declaration_impots_1'];
				}
				else
				{
					$faire_declaration_impots_1=null;
				}

				if(verification("nombre",$_POST['montant_impots_1']))
				{
					$montant_impots_1=$_POST['montant_impots_1'];
				}
				else
				{
					$error=1;
					$error_mess.='Erreur sur le montant des impôts de la carte principale <br/>';
				}

				if(isset($_POST['declaration_impots_2']))
				{
					$declaration_impots_2=$_POST['declaration_impots_2'];
				}
				else
				{
					$declaration_impots_2=null;
				}

				if(isset($_POST['faire_declaration_impots_2']))
				{
					$faire_declaration_impots_2=$_POST['faire_declaration_impots_2'];
				}
				else
				{
					$faire_declaration_impots_2=null;
				}

				if(isset($_POST['montant_impots_2']))
				{
					$montant_impots_2=$_POST['montant_impots_2'];
				}
				else
				{
					$montant_impots_2=null;
				}

				if(isset($_POST['emprunt_1']))
				{
					$emprunt_1=$_POST['emprunt_1'];
				}
				else
				{
					$emprunt_1=null;
				}

				if(isset($_POST['nature_emprunt_1']))
				{
					$nature_emprunt_1=$_POST['nature_emprunt_1'];
				}
				else
				{
					$nature_emprunt_1=null;
				}

				if(isset($_POST['montant_mensualites_1']))
				{
					$montant_mensualites_1=$_POST['montant_mensualites_1'];
				}
				else
				{
					$montant_mensualites_1=null;
				}

				if(isset($_POST['date_fin_remboursement_1']))
				{
					$date_fin_remboursement_1=$_POST['date_fin_remboursement_1'];
				}
				else
				{
					$date_fin_remboursement_1=null;
				}

				if(isset($_POST['taux_credit_1']))
				{
					$taux_credit_1=$_POST['taux_credit_1'];
				}
				else
				{
					$taux_credit_1=null;
				}

				if(isset($_POST['capital_restant_du_1']))
				{
					$capital_restant_du_1=$_POST['capital_restant_du_1'];
				}
				else
				{
					$capital_restant_du_1=null;
				}

				if(isset($_POST['capital_emprunte_1']))
				{
					$capital_emprunte_1=$_POST['capital_emprunte_1'];
				}
				else
				{
					$capital_emprunte_1=null;
				}

				if(isset($_POST['nature_emprunt_2']))
				{
					$nature_emprunt_2=$_POST['nature_emprunt_2'];
				}
				else
				{
					$nature_emprunt_2=null;
				}

				if(isset($_POST['montant_mensualites_2']))
				{
					$montant_mensualites_2=$_POST['montant_mensualites_2'];
				}
				else
				{
					$montant_mensualites_2=null;
				}

				if(isset($_POST['date_fin_remboursement_2']))
				{
					$date_fin_remboursement_2=$_POST['date_fin_remboursement_2'];
				}
				else
				{
					$date_fin_remboursement_2=null;
				}

				if(isset($_POST['taux_credit_2']))
				{
					$taux_credit_2=$_POST['taux_credit_2'];
				}
				else
				{
					$taux_credit_2=null;
				}

				if(isset($_POST['capital_restant_du_2']))
				{
					$capital_restant_du_2=$_POST['capital_restant_du_2'];
				}
				else
				{
					$capital_restant_du_2=null;
				}

				if(isset($_POST['capital_emprunte_2']))
				{
					$capital_emprunte_2=$_POST['capital_emprunte_2'];
				}
				else
				{
					$capital_emprunte_2=null;
				}

				if(isset($_POST['nature_emprunt_3']))
				{
					$nature_emprunt_3=$_POST['nature_emprunt_3'];
				}
				else
				{
					$nature_emprunt_3=null;
				}

				if(isset($_POST['montant_mensualites_3']))
				{
					$montant_mensualites_3=$_POST['montant_mensualites_3'];
				}
				else
				{
					$montant_mensualites_3=null;
				}

				if(isset($_POST['date_fin_remboursement_3']))
				{
					$date_fin_remboursement_3=$_POST['date_fin_remboursement_3'];
				}
				else
				{
					$date_fin_remboursement_3=null;
				}

				if(isset($_POST['taux_credit_3']))
				{
					$taux_credit_3=$_POST['taux_credit_3'];
				}
				else
				{
					$taux_credit_3=null;
				}

				if(isset($_POST['capital_restant_du_3']))
				{
					$capital_restant_du_3=$_POST['capital_restant_du_3'];
				}
				else
				{
					$capital_restant_du_3=null;
				}

				if(isset($_POST['capital_emprunte_3']))
				{
					$capital_emprunte_3=$_POST['capital_emprunte_3'];
				}
				else
				{
					$capital_emprunte_3=null;
				}

				if(isset($_POST['nature_emprunt_4']))
				{
					$nature_emprunt_4=$_POST['nature_emprunt_4'];
				}
				else
				{
					$nature_emprunt_4=null;
				}

				if(isset($_POST['montant_mensualites_4']))
				{
					$montant_mensualites_4=$_POST['montant_mensualites_4'];
				}
				else
				{
					$montant_mensualites_4=null;
				}

				if(isset($_POST['date_fin_remboursement_4']))
				{
					$date_fin_remboursement_4=$_POST['date_fin_remboursement_4'];
				}
				else
				{
					$date_fin_remboursement_4=null;
				}

				if(isset($_POST['taux_credit_4']))
				{
					$taux_credit_4=$_POST['taux_credit_4'];
				}
				else
				{
					$taux_credit_4=null;
				}

				if(isset($_POST['capital_restant_du_4']))
				{
					$capital_restant_du_4=$_POST['capital_restant_du_4'];
				}
				else
				{
					$capital_restant_du_4=null;
				}

				if(isset($_POST['capital_emprunte_4']))
				{
					$capital_emprunte_4=$_POST['capital_emprunte_4'];
				}
				else
				{
					$capital_emprunte_4=null;
				}

				if(isset($_POST['nature_emprunt_5']))
				{
					$nature_emprunt_5=$_POST['nature_emprunt_5'];
				}
				else
				{
					$nature_emprunt_5=null;
				}

				if(isset($_POST['montant_mensualites_5']))
				{
					$montant_mensualites_5=$_POST['montant_mensualites_5'];
				}
				else
				{
					$montant_mensualites_5=null;
				}

				if(isset($_POST['date_fin_remboursement_5']))
				{
					$date_fin_remboursement_5=$_POST['date_fin_remboursement_5'];
				}
				else
				{
					$date_fin_remboursement_5=null;
				}

				if(isset($_POST['taux_credit_5']))
				{
					$taux_credit_5=$_POST['taux_credit_5'];
				}
				else
				{
					$taux_credit_5=null;
				}

				if(isset($_POST['capital_restant_du_5']))
				{
					$capital_restant_du_5=$_POST['capital_restant_du_5'];
				}
				else
				{
					$capital_restant_du_5=null;
				}

				if(isset($_POST['capital_emprunte_5']))
				{
					$capital_emprunte_5=$_POST['capital_emprunte_5'];
				}
				else
				{
					$capital_emprunte_5=null;
				}

				if($error==0) /*Affichage des résultats des vérifications*/
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
					$resultat['nom_enfant_2']=$nom_enfant_2;
					$resultat['nom_enfant_3']=$nom_enfant_3;
					$resultat['date_naissance_enfant_1']=$date_naissance_enfant_1;
					$resultat['date_naissance_enfant_2']=$date_naissance_enfant_2;
					$resultat['date_naissance_enfant_3']=$date_naissance_enfant_3;
					$resultat['declaration_impots_1']=$declaration_impots_1;
					$resultat['faire_declaration_impots_1']=$faire_declaration_impots_1;
					$resultat['montant_impots_1']=$montant_impots_1;
					$resultat['declaration_impots_2']=$declaration_impots_2;
					$resultat['faire_declaration_impots_2']=$faire_declaration_impots_2;
					$resultat['montant_impots_2']=$montant_impots_2;
					$resultat['emprunt_1']=$emprunt_1;
					$resultat['nature_emprunt_1']=$nature_emprunt_1;
					$resultat['montant_mensualites_1']=$montant_mensualites_1;
					$resultat['date_fin_remboursement_1']=$date_fin_remboursement_1;
					$resultat['taux_credit_1']=$taux_credit_1;
					$resultat['capital_restant_du_1']=$capital_restant_du_1;
					$resultat['capital_emprunte_1']=$capital_emprunte_1;
					$resultat['nature_emprunt_2']=$nature_emprunt_2;
					$resultat['montant_mensualites_2']=$montant_mensualites_2;
					$resultat['date_fin_remboursement_2']=$date_fin_remboursement_2;
					$resultat['taux_credit_2']=$taux_credit_2;
					$resultat['capital_restant_du_2']=$capital_restant_du_2;
					$resultat['capital_emprunte_2']=$capital_emprunte_2;
					$resultat['nature_emprunt_3']=$nature_emprunt_3;
					$resultat['montant_mensualites_3']=$montant_mensualites_3;
					$resultat['date_fin_remboursement_3']=$date_fin_remboursement_3;
					$resultat['taux_credit_3']=$taux_credit_3;
					$resultat['capital_restant_du_3']=$capital_restant_du_3;
					$resultat['capital_emprunte_3']=$capital_emprunte_3;
					$resultat['nature_emprunt_4']=$nature_emprunt_4;
					$resultat['montant_mensualites_4']=$montant_mensualites_4;
					$resultat['date_fin_remboursement_4']=$date_fin_remboursement_4;
					$resultat['taux_credit_4']=$taux_credit_4;
					$resultat['capital_restant_du_4']=$capital_restant_du_4;
					$resultat['capital_emprunte_4']=$capital_emprunte_4;
					$resultat['nature_emprunt_5']=$nature_emprunt_5;
					$resultat['montant_mensualites_5']=$montant_mensualites_5;
					$resultat['date_fin_remboursement_5']=$date_fin_remboursement_5;
					$resultat['taux_credit_5']=$taux_credit_5;
					$resultat['capital_restant_du_5']=$capital_restant_du_5;
					$resultat['capital_emprunte_5']=$capital_emprunte_5;
					
					/* test contenu resultat
					echo '<pre>';
					print_r($resultat);
					echo '</pre>';*/
					
					/* Partie TP2 accès fichier */
					$monfichier = fopen('client.inc', 'r+');
					fseek($monfichier, 0);

					$contenuFile="<?php \r\n";

					foreach ($resultat as $key => $value) 
					{
						$contenuFile.='$resultat["'.$key.'"]="'.$value."\"; \r\n";
					}

					$contenuFile.='?>';
					fputs($monfichier, $contenuFile); 

					fclose($monfichier);

					require_once('client.inc');

					setcookie('nom', $resultat['nom'], time() + 365*24*3600, null, null, false, true);
					setcookie('prenom', $resultat['prenom'], time() + 365*24*3600, null, null, false, true);

				}
				else
				{
					echo $error_mess;
				}

				/*Tableau listant les nationalités, noms et prénoms des clients en fonction de leur nationalité*/
				$fr_lux_1 = $_POST['fr_lux_1'];
				$nom_1 = isset($_POST['nom']) ? $_POST['nom'] : NULL;
				$prenom_1 = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;

				if ($_POST['fr_lux_1'] == "francaise") 
				{

					$array_client_france = array( 
						"Nationalité" => $fr_lux_1,
						"Nom" => $nom_1,
						"Prénom" => $prenom_1,
					);
					echo "<pre>";
					echo "Tableau client français : ";
					print_r($array_client_france);
					echo "<pre>";
					echo "<br />";
				}
				elseif ($_POST['fr_lux_1'] == "luxembourgeoise") 
				{

					$array_client_luxembourg = array( 
						"Nationalité" => $fr_lux_1,
						"Nom" => $nom_1,
						"Prénom" => $prenom_1,
					);
					echo "<pre>";
					echo "Tableau client luxembourgeois : ";
					print_r($array_client_luxembourg);
					echo "<pre>";
					echo "<br />";
				} 
				
				
			}
			else
			{
				echo '<header><h1>TP PHP</h1></header>';
				echo '<p>Bienvenue sur le projet réalisé par Sarah Henry, Marie-Sophie Mayor, Daniel Girard et Rémi Boiteux</p>';
				echo 'Pour accéder au formulaire c\'est par ici : <a href="formulaire.php">Formulaire</a>';
				
				
			}
		
			// Partie TP2 Accès fichier
			if (isset($_COOKIE['nom']) && isset($_COOKIE['prenom'])) 
			{
				$direBonjour = true;
			}

			if ($direBonjour) 
			{
					echo "<p>Bonjour " . $_COOKIE['nom'] . " ".$_COOKIE['prenom']."</p>";
			}

		?>
</div>
</body>
</html>