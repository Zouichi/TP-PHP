<?php
function isset_decla()
{
    if (isset($_POST['declaration'])) {
	;
}
	else {
		echo "Merci d'indiquer si la déclaration concerne une ou deux personnes <br />";
	}
}
?>