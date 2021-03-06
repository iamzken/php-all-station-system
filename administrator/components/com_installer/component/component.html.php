<?php
/**
* @version $Id: component.html.php,v 1.1 2005/07/22 01:52:30 eddieajau Exp $
* @package Mambo
* @subpackage Installer
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

/**
* @package Mambo
* @subpackage Installer
*/
class HTML_component {
/**
* @param array An array of records
* @param string The URL option
*/
	function showInstalledComponents( $rows, $option ) {
		global $adminLanguage;
		if (count( $rows )) {
			?>
			<form action="index2.php" method="post" name="adminForm">
			<table class="adminheading">
			<tr>
				<th class="install">
				<?php echo $adminLanguage->A_INSTALL_COMP_INSTALLED; ?>
				</th>
			</tr>
			</table>
	
			<table class="adminlist">
			<tr>
				<th width="20%" class="title">
				<?php echo $adminLanguage->A_INSTALL_COMP_CURRENT; ?>
				</th>
				<th width="20%" class="title">
				<?php echo $adminLanguage->A_INSTALL_COMP_MENU; ?>
				</th>
				<th width="10%" align="left">
				<?php echo $adminLanguage->A_INSTALL_COMP_AUTHOR; ?>
				</th>
				<th width="5%" align="center">
				<?php echo $adminLanguage->A_INSTALL_COMP_VERSION; ?>
				</th>
				<th width="10%" align="center">
				<?php echo $adminLanguage->A_INSTALL_COMP_DATE; ?>
				</th>
				<th width="15%" align="left">
				<?php echo $adminLanguage->A_INSTALL_COMP_AUTH_MAIL; ?>
				</th>
				<th width="15%" align="left">
				<?php echo $adminLanguage->A_INSTALL_COMP_AUTH_URL; ?>
				</th>
			</tr>
			<?php
			$rc = 0;
			for ($i = 0, $n = count( $rows ); $i < $n; $i++) {
			    $row =& $rows[$i];
				?>
				<tr class="<?php echo "row$rc"; ?>">
					<td align="left">
					<input type="radio" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $row->id; ?>" onclick="isChecked(this.checked);">
					<span class="bold">
					<?php echo tr($row->name); ?>
					</span>
					</td>
					<td align="left">
					<?php echo @$row->link != "" ? $row->link : "&nbsp;"; ?>
					</td>
					<td align="left">
					<?php echo @$row->author != "" ? $row->author : "&nbsp;"; ?>
					</td>
					<td align="center">
					<?php echo @$row->version != "" ? $row->version : "&nbsp;"; ?>
					</td>
					<td align="center">
					<?php echo @$row->creationdate != "" ? $row->creationdate : "&nbsp;"; ?>
					</td>
					<td>
					<?php echo @$row->authorEmail != "" ? $row->authorEmail : "&nbsp;"; ?>
					</td>
					<td>
					<?php echo @$row->authorUrl != "" ? "<a href=\"" .(substr( $row->authorUrl, 0, 7) == 'http://' ? $row->authorUrl : 'http://'.$row->authorUrl). "\" target=\"_blank\">$row->authorUrl</a>" : "&nbsp;";?>
					</td>
				</tr>
				<?php
	    		$rc = 1 - $rc;
			}
		} else {
			?>
			<td class="small">
			<?php echo $adminLanguage->A_INSTALL_COMP_NONE; ?>
			</td>
			<?php
		}
		?>
		</table>
	
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="option" value="com_installer" />
		<input type="hidden" name="element" value="component" />
		</form>
		<?php
	}
}
?>
