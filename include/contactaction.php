<?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
if ($_POST['destinataire'] == 'contact') {
	$destinataire = 'contact@novus-studio.fr';
}

elseif ($_POST['destinataire'] == 'dylan') {
	$destinataire = 'gueltond@novus-studio.fr';
}

elseif ($_POST['destinataire'] == 'amelie') {
	$destinataire = 'martinsa@novus-studio.fr';
}

elseif ($_POST['destinataire'] == 'thibault') {
	$destinataire = 'brunt@novus-studio.fr';
}

else {
	$destinataire = 'contact@novus-studio.fr';
}
 
// copie ? (envoie une copie au visiteur)
$copie = 'oui'; // 'oui' ou 'non'

$form="false";
 
 
/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/
 


	/*
	 * cette fonction sert à nettoyer et enregistrer un texte
	 */
	function Rec($text)
	{
		$text = htmlspecialchars(trim($text), ENT_QUOTES);
		if (1 === get_magic_quotes_gpc())
		{
			$text = stripslashes($text);
		}
 
		$text = nl2br($text);
		return $text;
	};
 
	/*
	 * Cette fonction sert à vérifier la syntaxe d'un email
	 */
	function IsEmail($email)
	{
		$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
		return (($value === 0) || ($value === false)) ? false : true;
	}
 
	// formulaire envoyé, on récupère tous les champs.
	$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
	$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
	$objet   = 'CONTACT VIA LE SITE';
	$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
	$prenom = (isset($_POST['prenom'])) ? Rec($_POST['prenom']) : '';
	$tel = (isset($_POST['tel'])) ? Rec($_POST['tel']) : '';

	
 
	// On va vérifier les variables et l'email ...
	$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
 
	if (($nom != '') && ($email != '') && ($prenom != '') && ($tel != '') && ($message != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:'.$prenom.' '.$nom.' <'.$email.'>' . "\r\n" .
				'Reply-To:'.$email. "\r\n" .
				'Content-Type: text/html; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
				'Content-Disposition: inline'. "\r\n" .
				'Content-Transfer-Encoding: 7bit'." \r\n" .
				'X-Mailer:PHP/'.phpversion();
	
		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.','.$email;
		}
		else
		{
			$cible = $destinataire;
		};
 
		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('<br />','',$message);
		$message = str_replace("&lt;","<",$message);
		$message = str_replace("&gt;",">",$message);
		$message = str_replace("&amp;","&",$message);

		$message = '<div><strong>Nom :</strong> ' .$nom. '</br><strong>Prénom :</strong> ' .$prenom. '</br><strong>Téléphone :</strong> ' .$tel. '</br><strong>Message :</strong></br><p>' .$message. '</p>';

		
 
		// Envoi du mail
		if (mail($cible, $objet, $message, $headers))
		{
			?>
				
				<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Votre message a bien été envoyé.</div>
			<?php
		}
		else
		{
			?>
				<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Erreur.</strong> Votre message n'a pas été envoyé.</div>
			<?php
		};
	}
	else
	{
		// une des 3 variables (ou plus) est vide ...
		$form = "true";
		?>
				<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Formulaire invalide.</strong> Veillez à bien remplire tous les champs et à ce que l'email soit valide.</div>
		<?php
	};

?>
