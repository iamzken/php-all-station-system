<?php
/**
* @version $Id: weblink_category_table.menu.html.php,v 1.1 2005/07/22 01:53:12 eddieajau Exp $
* @package Mambo
* @subpackage Menus
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

/**
* Writes the edit form for new and existing content item
*
* A new record is defined when <var>$row</var> is passed with the <var>id</var>
* property set to 0.
* @package Mambo
* @subpackage Menus
*/
class weblink_category_table_menu_html {

	function editCategory( &$menu, &$lists, &$params, $option ) {
		global $mosConfig_live_site, $adminLanguage;
		?>
		<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			if ( pressbutton == 'cancel' ) {
				submitform( pressbutton );
				return;
			}
			var form = document.adminForm;
			<?php
			if ( !$menu->id ) {
				?>
				if ( getSelectedValue( 'adminForm', 'componentid' ) < 1 ) {
					alert( '<?php echo $adminLanguage->A_COMP_MENUS_CMP_CCT_CATEG; ?>' );
					return;
				}
				cat = getSelectedText( 'adminForm', 'componentid' );

				form.link.value = "index.php?option=com_weblinks&catid=" + form.componentid.value;
				if ( form.name.value == '' ) {
					form.name.value = cat;
				}
				submitform( pressbutton );
				<?php
			} else {
				?>
				if ( form.name.value == '' ) {
					alert( '<?php echo $adminLanguage->A_COMP_MENUS_CMP_CCT_TITLE; ?>' );
				} else {
					submitform( pressbutton );
				}
				<?php
			}
			?>
		}
		</script>
		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th>
			<?php echo $menu->id ? $adminLanguage->A_EDIT : $adminLanguage->A_COMP_ADD;?> <?php echo $adminLanguage->A_COMP_MENUS_MENU_ITEM;?> :: <?php echo $adminLanguage->A_COMP_MENUS_TABLE;?> - <?php echo $adminLanguage->A_COMP_MENUS_WEBLINK_CAT;?>
			</th>
		</tr>
		</table>

		<table width="100%">
		<tr valign="top">
			<td width="60%">
				<table class="adminform">
				<tr>
					<th colspan="2">
					<?php echo $adminLanguage->A_DETAILS; ?>
					</th>
				</tr>

				<tr>
					<td width="15%" align="right" valign="top">
					<?php echo $adminLanguage->A_COMP_NAME;?>
					<?php
					if ( !$menu->id ) {
						echo mosToolTip( $adminLanguage->A_COMP_MENUS_CMP_CCT_BLANK );
					}
					?>:
					</td>
					<td width="200px">
					<input type="text" name="name" size="50" maxlength="100" class="inputbox" value="<?php echo $menu->name; ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
					<?php echo $adminLanguage->A_COMP_MENUS_SEFPATH;?><?php	echo mosToolTip( $adminLanguage->A_COMP_MENUS_SEFPATH_TIP );?>:
					</td>
					<td>
					<input type="text" name="sefpath" size="50" maxlength="255" class="inputbox" value="<?php echo $menu->sefpath; ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
					<?php echo $adminLanguage->A_COMP_CATEG;?>:
					</td>
					<td>
					<?php echo $lists['componentid']; ?>
					</td>
				</tr>
				<tr>
					<td align="right">
					<?php echo $adminLanguage->A_COMP_ADMIN_URL;?>:
					</td>
					<td>
					<?php echo $lists['link']; ?>
					</td>
				</tr>
				<tr>
					<td align="right">
					<?php echo $adminLanguage->A_COMP_MENUS_CIL_PARENT;?>:
					</td>
					<td>
					<?php echo $lists['parent'];?>
					</td>
				</tr>
				<tr>
					<td align="right">
					<?php echo $adminLanguage->A_COMP_ORDERING;?>:
					</td>
					<td>
					<?php echo $lists['ordering']; ?>
					</td>
				</tr>
				<tr>
					<td align="right">
					<?php echo $adminLanguage->A_COMP_ACCESS_LEVEL;?>:
					</td>
					<td>
					<?php echo $lists['access']; ?>
					</td>
				</tr>
				<tr>
					<td align="right">
					<?php echo $adminLanguage->A_COMP_PUBLISHED;?>:
					</td>
					<td>
					<?php echo $lists['published']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				</table>
			</td>
			<td width="40%">
				<table class="adminform">
				<tr>
					<th>
					<?php echo $adminLanguage->A_COMP_CONT_PARAMETERS;?>
					</th>
				</tr>
				<tr>
					<td>
					<?php echo $params->render();?>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="id" value="<?php echo $menu->id; ?>" />
		<input type="hidden" name="menutype" value="<?php echo $menu->menutype; ?>" />
		<input type="hidden" name="type" value="<?php echo $menu->type; ?>" />
		<input type="hidden" name="link" value="<?php echo $menu->link; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<script language="Javascript" src="<?php echo $mosConfig_live_site;?>/includes/js/overlib_mini.js"></script>
		<?php
	}
}
?>