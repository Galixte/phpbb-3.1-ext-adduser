<?php
/**
*
* Add User extension for the phpBB Forum Software package.
* French translation by ForumsFaciles (http://www.forumsfaciles.fr) & Galixte (http://www.galixte.com)
*
* @copyright (c) 2017 RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org <https://phpbbmodders.net>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	// ACP Module
	'ACP_ADD_USER'				=> 'Créer un nouvel utilisateur',
	'DIR_NOT_EXIST'				=> 'La langue % n’a pas les fichiers nécessaires pour cette extension. Afin d’utiliser cette extension, veuillez traduire les fichiers nécessaires et les envoyer dans le répertoire % de cette extension.',
	'ACP_ACCOUNT_ADDED'			=> 'Le compte utilisateur a été créé. L’utilisateur peut désormais se connecter avec le pseudo et le mot de passe envoyés à l’adresse e-mail que vous avez indiquée.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Le compte utilisateur a été créé. Cependant, les paramètres du forum exigent que l’utilisateur active son compte.<br />À cet effet, une clef d’activation a été envoyée à l’adresse email que vous avez indiquée pour l’utilisateur.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Le compte utilisateur a été créé. Cependant, les paramètres du forum exigent que le compte soit activé par un administrateur.<br />Un e-mail a été envoyé aux administrateurs et l’utilisateur sera informé lorsque son compte aura été activé',
	'ACP_ADMIN_ACTIVATE'		=> 'Un e-mail sera envoyé à un administrateur pour l’activation du compte. Cependant vous pouvez également cocher la case ci-dessous « Activer le compte utilisateur » pour activer le compte immédiatement une fois qu’il a été créé. L’utilisateur recevra un e-mail contenant les identifiants de connexion.',
	'ACP_EMAIL_ACTIVATE'		=> 'Une fois le compte créé, l’utilisateur recevra un e-mail contenant un lien pour activer son compte.',
	'ACP_INSTANT_ACTIVATE'		=> 'Le compte sera activé immédiatement. L’utilisateur recevra un e-mail contenant ses identifiants de connexion.',

	'ADD_USER'					=> 'Créer un nouvel utilisateur',
	'ADD_USER_EXPLAIN'			=> 'Créer un nouveau compte utilisateur. Vous aurez la possibilité d’activer l’utilisateur instantanément, seulement si vos paramètres d’activation sont configurés sur : « Par l’administrateur ».',
	'MOD_VERSION'				=> 'version %s',
	'ADMIN_ACTIVATE'			=> 'Activer le compte utilisateur',
	'CONFIRM_PASSWORD'			=> 'Confirmer le mot de passe',
	'EDIT_USER_GROUPS'			=> '%sCliquer ici pour modifier les groupes de cet utilisateur%s',
	'GROUP_ADD'					=> 'Ici vous pouvez sélectionner un groupe supplémentaire auquel l’utilisateur sera ajouté, bien qu’il appartiendra au groupe des utilisateurs enregistrés.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'Cochez cette case pour définir le groupe sélectionné ci-dessus comme étant le groupe par défaut des utilisateurs.',
	'CONTINUE_EDIT_USER'		=> '%1$sCliquer ici pour gérer le profil de %2$s%3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD_EXPLAIN'			=> 'Laissez ce champs vide pour générer un mot de passe automatiquement.',
	'ENABLE_NEWUSER'			=> 'Ajouter au groupe des nouveaux utilisateurs',
	'ENABLE_NEWUSER_EXPLAIN'	=> 'Permet d’ajouter l’utilisateur au groupe des « Nouveaux utilisateurs enregistrés ».',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>Nouvel utilisateur créé</strong><br />» %s',
));
