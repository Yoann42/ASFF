<?php

// Petit "hack" Poona par Jérôme :-)
// Maj par Etienne
// Maj par Yoann

require_once('simple_html_dom.php');

/*

Formulaire Poona au 07/09/2013 :
(exemple pour la licence 06638740)

<form method="post" name="classement" action="http://poona.ffbad.org/page.php?P=fo/menu/public/accueil/classement">
<input type="hidden" name="Action" value="consultation_joueur_rechercher" />
<input type="text" name="recherche_text_licence" value= "06638740">
<input type="submit">
</form>

Formulaire Poona au 19/09/2015 :
<form method="post" action="http://poona.ffbad.org/page.php?P=fo/menu/public/accueil/classement_hebdo" name="formRechercher"  class="form-horizontal">
<input type="hidden" name="IXNET_TOKEN" value="55fd82fd90630" />
<input type="hidden" name="Action" value="consultation_joueur_rechercher" />
<input type="hidden" name="requestForm" value="formRechercher" />
<input type="text" name="recherche_text_licence" value="" maxlength="8" />
<button onclick="javascript:$('form[name=formRechercher]').submit(); return false;" disableDblClick="1"><img src="http://poona.ffbad.org/public/images/icones/png/valider.png" alt="valider" /><span>Valider</span></button>
</form>

*/



class PoonaJoueur {
	public $licence;
	// eb 20/09/15 supp prenom
	// public $prenom;
	public $nom;
	public $simple;
	public $double;
	public $mixte;
}


function getPoonaJoueur($licence) {
	$result = new PoonaJoueur();
	// 1) Requete Poona
	$url = 'http://poona.ffbad.org/page.php?P=fo/menu/public/accueil/classement_hebdo';
	// eb debut 19/09/15
	// $data = "Action=consultation_joueur_rechercher&recherche_text_licence=$licence";
	$data = "IXNET_TOKEN=55fd82fd90630&requestForm=formRechercher&Action=consultation_joueur_rechercher&recherche_text_licence=$licence";
	// eb fin 19/09/15

	$data = array(
    'Action' => 'consultation_joueur_rechercher',
    'recherche_text_licence' => $licence,
    'IXNET_TOKEN' => '55fd82fd90630',
    'requestForm' => 'formRechercher');

	$response = postit($url,$data);
		
	// 2) Parsing (N.B. : adapté à la page Poona au 07/09/2013 !)
	$html = str_get_html($response);
	// Nom ?
	// Modif 
	$count = 0;

	foreach ($html->find('div[class=titre]') as $classements)
	{
		if ($count == 2)
		{
			$classements = $classements->plaintext;
			$classements = explode('/',$classements);
			$result->simple = trim($classements[0]);
			$result->double = trim($classements[1]);
			$result->mixte = trim($classements[2]);

			return $result;
		}
		
		$count = $count + 1;
	}

	$result->simple = 'NC';
	$result->double = 'NC';
	$result->mixte = 'NC';

	return $result;
}



function postit($url,$data) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}


?>