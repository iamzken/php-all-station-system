<?php
/**
* @version $Id: content_blog_category.menu.php,v 1.1 2005/07/22 01:52:51 eddieajau Exp $
* @package Mambo
* @subpackage Menus
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

mosAdminMenus::menuItem( $type );

switch ($task) {
	case 'content_blog_category':
		// this is the new item, ie, the same name as the menu `type`
		content_blog_category::edit( 0, $menutype, $option );
		break;

	case 'edit':
		content_blog_category::edit( $cid[0], $menutype, $option );
		break;

	case 'save':
	case 'apply':
		content_blog_category::saveMenu( $option, $task );
		break;
}
?>
