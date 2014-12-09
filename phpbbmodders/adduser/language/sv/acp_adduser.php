<?php
/**
*
* @copyright (c) 2014 Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translated into Swedish by Holger (http://www.maskinisten.net)
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_ACCOUNT_ADDED'			=> 'Medlemskontot har skapats. Medlemmen kan nu logga in med anv�ndarnamnet och l�senordet som har skickats till e-postadressen som du har angivit.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Medlemskontot har skapats. Foruminst�llningarna kr�ver dock att medlemmen sj�lv aktiverar kontot.<br />En aktiveringsnyckel har skickats till e-postadressen som du har angivit.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Medlemskontot har skapats. Foruminst�llningarna kr�ver dock att en administrat�r aktiverar kontot.<br />Ett e-postmeddelande har skickats till administrat�rerna och medlemmen kommer att informeras n�r kontot har aktiverats.',
	'ACP_ADD_USER'				=> 'Medlemskonto via ACP',
	'ACP_ADMIN_ACTIVATE'		=> 'Ett e-postmeddelande kommer att skickas till en administrat�r r�rande aktivering av kontot, alternativ kan du markera f�ltet f�r omedelbar aktivering av kontot nedan. Medlemmen kommer att f� ett e-postmeddelande med login-information.',
	'ACP_EMAIL_ACTIVATE'		=> 'N�r medlemskontot har skapats f�r medlemmen ett e-postmeddelande med en aktiveringsl�nk.',
	'ACP_INSTANT_ACTIVATE'		=> 'Medlemskontot kommer att aktiveras omedelbart. Medlemmen kommer att f� ett e-postmeddelande med login-information.',

	'ADD_USER'					=> 'Skapa medlemskonto',
	'ADD_USER_EXPLAIN'			=> 'Skapa ett nytt medlemskonto. Om %saktiveringsinst�llningarna%s �r inst�llda till Aktivering genom admin s� kan du aktivera kontot omedelbart.',
	'MOD_VERSION'				=> 'Version %s',
	'ADMIN_ACTIVATE'			=> 'Aktivera omedelbart',
	'CONFIRM_PASSWORD'			=> 'Bekr�fta l�senordet',
	'EDIT_USER_GROUPS'			=> '%sKlicka h�r f�r att st�lla in medlemmens medlemsgrupper%s',
	'GROUP_ADD'					=> 'V�lj grupp(er) som medlemmen ska l�ggas till ut�ver gruppen Registrerade medlemmar',

	'CONTINUE_EDIT_USER'		=> '%1$sKlicka h�r f�r att hantera %2$s’s profil%3$s', // e.g.: Click here to edit Joe's profile.
	'PASSWORD'					=> 'L�senord',
	'PASSWORD_EXPLAIN'			=> 'Ange ett l�senord om l�senordet ej ska genereras automatiskt.',
));
