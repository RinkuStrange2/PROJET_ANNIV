<?php

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('./Controleur/controleur_accueil.php');
}

else
{
    if ($_GET['section'] == 'aventure1')
	{  
			include_once('Controleur/controleur_aventure1.php');
	}
	if ($_GET['section'] == 'aventure2')
	{  
			include_once('Controleur/controleur_aventure2.php');
	}
	if ($_GET['section'] == 'aventure3')
	{  
			include_once('Controleur/controleur_aventure3.php');
	}
	if ($_GET['section'] == 'aventure4')
	{  
			include_once('Controleur/controleur_aventure4.php');
	}
}

?>