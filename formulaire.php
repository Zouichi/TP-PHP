<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
    <link href="styles.css" rel="stylesheet" media="all" type="text/css" />
    <title>TP PHP DU 04/07/2017</title>
</head>
<body>
<div id="time">
<?php
echo 'Aujourd\'hui, nous sommes le '. date("d/m/Y") .'.';
?>
</div>
<form method="post" action="index.php">
    <fieldset>
        <p>Ce bilan concerne-t-il une ou deux personnes ?</p>
        <input type="radio" name="bilan" value="une_personne" id="bilan" required />Une personne
        <input type="radio" name="bilan" value="deux_personnes" id="bilan" />Deux personnes
        <legend>Etat civil</legend>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" autofocus required />
        <br />
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required />
        <br />
        <label for="age">Âge :</label>
        <input type="text" id="age" name="age" required />
        <br />
        <label for="date_naissance">Date de naissance :</label>
        <input type="text" id="date_naissance" name="date_naissance" required />
        <br />
        <p>Nationalité :</p>
        <input type="radio" name="fr_lux_1" value="francaise" id="fr_lux_1" required />française
        <input type="radio" name="fr_lux_1" value="luxembourgeoise" id="fr_lux_1" />luxembourgeoise
        <br />
        <label for="residence_fiscale">Adresse de la résidence fiscale :</label>
        <input type="text" name="residence_fiscale" id="residence_fiscale" required />
        <br />
        <label for="cp">Code postal :</label>
        <input type="text" name="cp" id="cp" required />
        <br />
        <label for="mail">Adresse e-mail :</label>
        <input type="text" name="mail" id="mail" required />
        <br />
        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville" required />
        <br />
        <label for="telephone">Téléphone (fixe) :</label>
        <input type="text" name="telephone" id="telephone" />
        <br />
        <label for="gsm">Téléphone portable :</label>
        <input type="text" name="gsm" id="gsm" required />
        <br />
        <label for="profession">Profession :</label>
        <input type="text" name="profession" id="profession" required />
        <br />
        <label for="revenus">Revenus :</label>
        <input type="text" name="revenus" id="revenus" required />
        <br />
        <label for="situation">Situation de famille :</label>
        <input type="text" name="situation" id="situation" required />
        <br />
        <label for="prenom_conjoint">Prénom du conjoint :</label>
        <input type="text" name="prenom_conjoint" id="prenom_conjoint" />
        <br />
        <label for="age_conjoint">Âge du conjoint :</label>
        <input type="text" name="age_conjoint" id="age_conjoint" />
        <br />
        <label for="date_naissance_conjoint">Date de naissance du conjoint :</label>
        <input type="text" name="date_naissance_conjoint" id="date_naissance_conjoint" />
        <br />
        <p>Nationalité :</p>
        <input type="radio" name="fr_lux_2" value="fr" id="fr_lux_2" />française
        <input type="radio" name="fr_lux_2" value="lux" id="fr_lux_2" />luxembourgeoise
        <br />
        <label for="profession_conjoint">Profession du conjoint :</label>
        <input type="text" name="profession_conjoint" id="profession_conjoint" />
        <br />
        <label for="revenus_conjoint">Revenus du conjoint :</label>
        <input type="text" name="revenus_conjoint" id="revenus_conjoint" />
        <br />
        <p>Avez-vous des enfants ?</p>
        <input type="radio" name="enfants" value="oui" id="enfants" required />Oui
        <input type="radio" name="enfants" value="oui" id="enfants" />Non
        <br />
        <label for="nom_enfant_1">Nom du premier enfant :</label>
        <input type="text" name="nom_enfant_1" id="nom_enfant_1" />
        <br />
        <label for="nom_enfant_2">Nom du deuxième enfant :</label>
        <input type="text" name="nom_enfant_2" id="nom_enfant_2" />
        <br />
        <label for="nom_enfant_3">Nom du troisième enfant :</label>
        <input type="text" name="nom_enfant_3" id="nom_enfant_3" />
        <br />
        <label for="date_naissance_enfant_1">Date de naissance du premier enfant :</label>
        <input type="text" name="date_naissance_enfant_1" id="date_naissance_enfant_1" />
        <br />
        <label for="date_naissance_enfant_2">Date de naissance du deuxième enfant :</label>
        <input type="text" name="date_naissance_enfant_2" id="date_naissance_enfant_2" />
        <br />
        <label for="date_naissance_enfant_3">Date de naissance du troisième enfant :</label>
        <input type="text" name="date_naissance_enfant_3" id="date_naissance_enfant_3" />
        <br />
    </fieldset>
    <fieldset>
        <legend>Etat fiscal</legend>
        <p>Pour la carte principale, faites-vous votre déclaration d'impôts ?</p>
        <input type="radio" name="declaration_impots_1" value="oui" id="declaration_impots_1" required />Oui
        <p>Si oui, déduisez-vous ?</p>
        <input type="checkbox" name="el_1" id="el_1" />EL
        <input type="checkbox" name="a110_1" id="a110_1" />A110
        <input type="checkbox" name="a111_1" id="a111_1" />A111
        <input type="checkbox" name="111b_1" id="111b_1" />111B
        <input type="checkbox" name="srd_1" id="srd_1" />SRD
        <input type="checkbox" name="aucun_1" id="aucun_1" />Aucun
        <br />
        <input type="radio" name="declaration_impots_1" value="non" id="declaration_impots_1" />Non
        <p>Si non, êtes-vous intéressé pour le faire ?</p>
        <input type="radio" name="faire_declaration_impots_1" value="oui" id="faire_declaration_impots_1" />Oui
        <input type="radio" name="faire_declaration_impots_1" value="non" id="faire_declaration_impots_1" />Non
        <br />
        <label for="montant_impots_1">Montant des impôts payé :</label>
        <input type="text" name="montant_impots_1" id="montant_impots_1" required />
        <br /><br />
        <p>Pour la carte additionnelle, faites-vous votre déclaration d'impôts ?</p>
        <input type="radio" name="declaration_impots_2" value="oui" id="declaration_impots_2" />Oui
        <br />
        <p>Si oui, déduisez-vous ?</p>
        <input type="checkbox" name="el_2" id="el_2" />EL
        <input type="checkbox" name="a1102_" id="a110_2" />A110
        <input type="checkbox" name="a111_2" id="a111_2" />A111
        <input type="checkbox" name="111b_2" id="111b_2" />111B
        <input type="checkbox" name="srd_2" id="srd_2" />SRD
        <input type="checkbox" name="aucun_2" id="aucun_2" />Aucun
        <br />
        <input type="radio" name="declaration_impots_2" value="non" id="declaration_impots_2" />Non
        <br />
        <p>Si non, êtes-vous intéressé pour le faire ?</p>
        <input type="radio" name="faire_declaration_impots_2" value="oui" id="faire_declaration_impots_2" />Oui
        <input type="radio" name="faire_declaration_impots_2" value="non" id="faire_declaration_impots_2" />Non
        <br />
        <label for="montant_impots_2">Montant des impôts payé :</label>
        <input type="text" name="montant_impots_2" id="montant_impots_2" />
        <br />
    </fieldset>
    <fieldset>
        <legend>Crédits</legend>
        <br />
        <p>Avez-vous un ou des emprunts en cours ?</p>
        <input type="radio" name="emprunt_1" value="oui" id="emprunt_1" required />Oui
        <input type="radio" name="emprunt_1" value="non" id="emprunt_1" />Non
        <br />
        <p>Si oui, merci de rentrer les données suivantes :</p>
        <label for="nature_emprunt_1">Nature de l'emprunt :</label>
        <input type="text" name="nature_emprunt_1" id="nature_emprunt_1" />
        <br />
        <label for="montant_mensualites_1">Montant des mensualités :</label>
        <input type="text" name="montant_mensualites_1" id="montant_mensualites_1" />
        <br />
        <label for="date_fin_remboursement_1">Date de fin de remboursement :</label>
        <input type="text" name="date_fin_remboursement_1" id="date_fin_remboursement_1" />
        <br />
        <label for="taux_credit_1">Taux du crédit :</label>
        <input type="text" name="taux_credit_1" id="taux_credit_1" />
        <br />
        <label for="capital_restant_du_1">Capital restant dû :</label>
        <input type="text" name="capital_restant_du_1" id="capital_restant_du_1" />
        <br />
        <label for="capital_emprunte_1">Capital emprunté :</label>
        <input type="text" name="capital_emprunte_1" id="capital_emprunte_1" />
        <br />
        <br />
        <label for="nature_emprunt_2">Nature de l'emprunt :</label>
        <input type="text" name="nature_emprunt_2" id="nature_emprunt_2" />
        <br />
        <label for="montant_mensualites_2">Montant des mensualités :</label>
        <input type="text" name="montant_mensualites_2" id="montant_mensualites_2" />
        <br />
        <label for="date_fin_remboursement_2">Date de fin de remboursement :</label>
        <input type="text" name="date_fin_remboursement_2" id="date_fin_remboursement_2" />
        <br />
        <label for="taux_credit_2">Taux du crédit :</label>
        <input type="text" name="taux_credit_2" id="taux_credit_2" />
        <br />
        <label for="capital_restant_du_2">Capital restant dû :</label>
        <input type="text" name="capital_restant_du_2" id="capital_restant_du_2" />
        <br />
        <label for="capital_emprunte_2">Capital emprunté :</label>
        <input type="text" name="capital_emprunte_2" id="capital_emprunte_2" />
        <br />
        <br />
        <label for="nature_emprunt_3">Nature de l'emprunt :</label>
        <input type="text" name="nature_emprunt_3" id="nature_emprunt_3" />
        <br />
        <label for="montant_mensualites_3">Montant des mensualités :</label>
        <input type="text" name="montant_mensualites_3" id="montant_mensualites_3" />
        <br />
        <label for="date_fin_remboursement_3">Date de fin de remboursement :</label>
        <input type="text" name="date_fin_remboursement_3" id="date_fin_remboursement_3" />
        <br />
        <label for="taux_credit_3">Taux du crédit :</label>
        <input type="text" name="taux_credit_3" id="taux_credit_3" />
        <br />
        <label for="capital_restant_du_3">Capital restant dû :</label>
        <input type="text" name="capital_restant_du_3" id="capital_restant_du_3" />
        <br />
        <label for="capital_emprunte_3">Capital emprunté :</label>
        <input type="text" name="capital_emprunte_3" id="capital_emprunte_3" />
        <br />
        <br />
        <label for="nature_emprunt_4">Nature de l'emprunt :</label>
        <input type="text" name="nature_emprunt_4" id="nature_emprunt_4" />
        <br />
        <label for="montant_mensualites_4">Montant des mensualités :</label>
        <input type="text" name="montant_mensualites_4" id="montant_mensualites_4" />
        <br />
        <label for="date_fin_remboursement_4">Date de fin de remboursement :</label>
        <input type="text" name="date_fin_remboursement_4" id="date_fin_remboursement_4" />
        <br />
        <label for="taux_credit_4">Taux du crédit :</label>
        <input type="text" name="taux_credit_4" id="taux_credit_4" />
        <br />
        <label for="capital_restant_du_4">Capital restant dû :</label>
        <input type="text" name="capital_restant_du_4" id="capital_restant_du_4" />
        <br />
        <label for="capital_emprunte_4">Capital emprunté :</label>
        <input type="text" name="capital_emprunte_4" id="capital_emprunte_4" />
        <br />
        <br />
        <label for="nature_emprunt_5">Nature de l'emprunt :</label>
        <input type="text" name="nature_emprunt_5" id="nature_emprunt_5" />
        <br />
        <label for="montant_mensualites_5">Montant des mensualités :</label>
        <input type="text" name="montant_mensualites_5" id="montant_mensualites_5" />
        <br />
        <label for="date_fin_remboursement_5">Date de fin de remboursement :</label>
        <input type="text" name="date_fin_remboursement_5" id="date_fin_remboursement_5" />
        <br />
        <label for="taux_credit_5">Taux du crédit :</label>
        <input type="text" name="taux_credit_5" id="taux_credit_5" />
        <br />
        <label for="capital_restant_du_5">Capital restant dû :</label>
        <input type="text" name="capital_restant_du_5" id="capital_restant_du_5" />
        <br />
        <label for="capital_emprunte_5">Capital emprunté :</label>
        <input type="text" name="capital_emprunte_5" id="capital_emprunte_5" />
        <br />
        <br />
        <input type="submit" id="submit" value="Envoyer" />
    </fieldset>
</form>
</body>

</html>
