<?php
function verif_decla()
{
    if (isset($_POST['bilan'])) {
	;
}
	else {
		echo "Merci d'indiquer si le bilan concerne une ou deux personnes <br />";
	}
}

function verif_nom()
{
	if (isset($_POST['nom']) AND is_string($_POST['nom'])) {
	;
}
	else {
		echo "Merci de rentrer un nom <br />";
	}
}

function verif_prenom()
{
	if (isset($_POST['prenom']) AND is_string($_POST['prenom'])) {
		;
}
	else {
		echo "Merci de rentrer un prénom <br />";
	}
}

function verif_age()
{
if ((isset($_POST['age'])) AND ($_POST['age'] = (int) $_POST['age']) AND (($_POST['age'] > 18) AND ($_POST['age'] <= 150)))
{
	;
}
	else {
		echo "Merci de rentrer un âge, sans virgule, et compris entre 1 et 150 <br />";
	}
}

function verif_date_naissance()
{
	if (isset($_POST['date_naissance'])) {
	;
}
	else {
		echo "Merci de rentrer une date de naissance <br />";
	}
}

function verif_fr_lux_1()
{
	if (isset($_POST['fr_lux_1'])) {
	;
}
	else {
		echo "Merci d'indiquer une nationalité <br />";
	}
}

function verif_residence_fiscale()
{
	if (isset($_POST['residence_fiscale']) AND is_string($_POST['residence_fiscale'])) {
	;
}
	else {
		echo "Merci de rentrer l'adresse de la résidence fiscale <br />";
	}
}

function verif_cp()
{
	if ((isset($_POST['cp'])) AND is_string($_POST['cp'])) {
	;
}
//is_string car les codes postaux luxembourgeois contiennent également des lettres
	else {
		echo "Merci de rentrer un code postal, sans espace <br />";
	}
}

function verif_ville()
{
	if (isset($_POST['ville']) AND is_string($_POST['ville'])) {
	;
}
	else {
		echo "Merci de rentrer la ville de la résidence fiscale <br />";
	}
}

function verif_mail()
{
	if (isset($_POST['mail']) AND is_string($_POST['mail'])) {
	;
}
	else {
		echo "Merci de rentrer une adreese mail <br />";
	}
}

function verif_telephone()
{
	if (isset($_POST['telephone']) AND is_numeric($_POST['telephone'])) {
	;
}
	else {
		echo "Merci de rentrer une numéro de téléphone fixe, sans points ni espaces<br />";
	}
}

function verif_gsm()
{
	if (isset($_POST['gsm']) AND is_numeric($_POST['gsm'])) {
	;
}
	else {
		echo "Merci de rentrer un numéro de téléphone portable, sans points ni espaces<br />";
	}
}

function verif_profession()
{
	if (isset($_POST['profession']) AND is_string($_POST['profession'])) {
	;
}
	else {
		echo "Merci de rentrer une profession <br />";
	}
}

function verif_revenus()
{
	if (isset($_POST['revenus']) AND is_numeric($_POST['revenus'])) {
	;
}
	else {
		echo "Merci d'indiquer un revenu <br />";
	}
}

function verif_situation()
{
	if (isset($_POST['situation']) AND is_string($_POST['situation'])) {
	;
}
	else {
		echo "Merci de rentrer une situation familiale <br />";
	}
}

function verif_prenom_conjoint()
{
	if (isset($_POST['prenom_conjoint']) AND is_string($_POST['prenom_conjoint'])) {
	;
}
	else {
		echo "Merci de rentrer le prénom du conjoint <br />";
	}
}

function verif_age_conjoint()
{
	if (isset($_POST['age_conjoint']) AND ($_POST['age_conjoint'] !== is_int($_POST['age_conjoint'] )) AND (($_POST['age_conjoint'] < 18 AND $_POST['age_conjoint'] >= 150))) {
		echo "Merci de rentrer l'âge du conjoint, sans virgule, et compris entre 1 et 150 <br />";	
}
	else {
		;
	}
}

function verif_date_naissance_conjoint()
{
	if (isset($_POST['date_naissance_conjoint'])) {
	;
}
	else {
		echo "Merci de rentrer la date de naissance du conjoint <br />";
	}
}

function verif_fr_lux_2()
{
	if (isset($_POST['fr_lux_2'])) {
	;
}
	else {
		echo "Merci d'indiquier la nationalité du conjoint <br />";
	}
}

function verif_profession_conjoint()
{
	if (isset($_POST['profession_conjoint']) AND is_string($_POST['profession_conjoint'])) {
	;
}
	else {
		echo "Merci de rentrer la profession du conjoint <br />";
	}

}

function verif_revenus_conjoint()
{
	if (isset($_POST['revenus_conjoint']) AND is_numeric($_POST['revenus_conjoint'])) {
	;
}
	else {
		echo "Merci de rentrer les revenus du conjoint <br />";
	}
}

function verif_nom_enfant_1()
{
	if (isset($_POST['nom_enfant_1']) AND is_string($_POST['nom_enfant_1'])) {
	;
}
	else {
		echo "Merci de rentrer le prénom du premier enfant <br />";
	}
}

function verif_nom_enfant_2()
{
	if (isset($_POST['nom_enfant_2']) AND is_string($_POST['nom_enfant_2'])) {
	;
}
	else {
		echo "Merci de rentrer le prénom du deuxième enfant <br />";
	}
}

function verif_nom_enfant_3()
{
	if (isset($_POST['nom_enfant_3']) AND is_string($_POST['nom_enfant_3'])) {
	;
}
	else {
		echo "Merci de rentrer le prénom du troisième enfant <br />";
	}
}

function verif_date_naissance_enfant_1()
{
	if (isset($_POST['date_naissance_enfant_1'])) {
	;
}
	else {
		echo "Merci de rentrer la date de naissance du premier enfant <br />";
	}
}

function verif_date_naissance_enfant_2()
{
	if (isset($_POST['date_naissance_enfant_2'])) {
	;
}
	else {
		echo "Merci de rentrer la date de naissance du deuxième enfant <br />";
	}
}

function verif_date_naissance_enfant_3()
{
	if (isset($_POST['date_naissance_enfant_3'])) {
	;
}
	else {
		echo "Merci de rentrer la date de naissance du troisième enfant <br />";
	}
}

function verif_declaration_impots_1()
{
	if (isset($_POST['declaration_impots_1'])) {
	;
}
	else {
		echo "Merci d'indiquer si vous faites votre déclaration d'impôts ou non <br />";
	}
}

function verif_montant_impots_1()
{
	if (isset($_POST['montant_impots_1']) AND is_numeric($_POST['montant_impots_1'])) {
	;
}
	else {
		echo "Merci de rentrer le montant des impôts <br />";
	}
}

function verif_declaration_impots_2()
{
	if (isset($_POST['declaration_impots_2'])) {
	;
}
	else {
		echo "Merci d'indiquer si vous faites votre déclaration d'impôts ou non <br />";
	}
}

function verif_montant_impots_2()
{
	if (isset($_POST['montant_impots_2']) AND is_numeric($_POST['montant_impots_2'])) {
	;
}
	else {
		echo "Merci de rentrer le montant des impôts <br />";
	}
}

function verif_emprunt_1()
{
	if (isset($_POST['emprunt_1'])) {
	;
}
	else {
		echo "Merci d'indiquer si vous avez un ou des emprunts en cours <br />";
	}
}

function verif_data_emprunt_1()
{
	if (isset($_POST['emprunt_1'])=='Non' AND (empty($_POST['nature_emprunt_1'])) AND (empty($_POST['montant_mensualites_1'])) AND (empty($_POST['date_fin_remboursement_1'])) AND (empty($_POST['taux_credit_1'])) AND (empty($_POST['capital_restant_du_1'])) AND (empty($_POST['capital_emprunte_1']))) {
	
}
	else {
		echo "Merci d'indiquer les données de votre emprunt actuel <br />";
	}
}
?>