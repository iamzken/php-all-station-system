<?php defined( "_VALID_MOS" ) or die( "Direct Access to this location is not allowed." );$iso = split( '=', _ISO );echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;><?php echo _ISO; ?>" />
<?php mosShowHead(); ?>
<?php if ( $my->id ) { initEditor(); } ?>

<link href="<?php echo $mosConfig_live_site;?>/templates/box_memories_cn/css/template_css.css" rel="stylesheet" type="text/css" />

<script language='JavaScript'>
function bluring(){
if(event.srcElement.tagName=="A"||event.srcElement.tagName=="IMG") document.body.focus();
}
document.onfocusin=bluring;
</script>
</head>

  <body class="bg_main">
<a name="top"></a> 
<div align="center">
  <table width="842" border="0" align="center" cellpadding="0" cellspacing="0" class="out_container">
    <tbody>
      <tr> 
        <td colspan="4"><div id="header"></div></td>
      </tr>
      <tr> 
        <td width="9" height="75">&nbsp;</td>
        <td width="740" align="left" valign="bottom"><img src="templates/<?php echo $GLOBALS['cur_template']; ?>/images/logo.gif" hspace="15" /><img src="templates/<?php echo $GLOBALS['cur_template']; ?>/images/girl.gif" hspace="20" /></td>
        <td width="84" align="right"><table width="84" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr> 
                <td height="22" align="center" bgcolor="#9A907A"><a href="<?php echo $mosConfig_live_site;?>"><img src="templates/<?php echo $GLOBALS['cur_template']; ?>/images/icon_home.gif" width="10" height="8" hspace="10" border="0" /></a><a href="<?php echo $mosConfig_live_site;?>/index.php?option=com_contact&Itemid=3"><img src="templates/<?php echo $GLOBALS['cur_template']; ?>/images/icon_mail.gif" width="9" height="8" hspace="10" border="0" /></a></td>
              </tr>
              <tr> 
                <td height="8"></td>
              </tr>
              <tr> 
                <td height="22" align="center" bgcolor="#CDBFA2"><table border="0" cellpadding="0" cellspacing="0">
                    <form action="index.php" method="post">
                      <tbody>
                        <tr> 
                          <td align="right"><input class="searchbox" type="text" name="searchword" size="12" value="<?php echo _SEARCH_BOX; ?>"  onblur="if(this.value=='') this.value='<?php echo _SEARCH_BOX; ?>';" onfocus="if(this.value=='<?php echo _SEARCH_BOX; ?>') this.value='';" /> 
                            <input type="hidden" name="option" value="search" /> 
                          </td>
                        </tr>
                      </tbody>
                    </form>
                  </table></td>
              </tr>
            <tbody>
          </table></td>
        <td width="9">&nbsp;</td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td colspan="2" align="center"><div id="can_pathway"> 
            <?php mosPathWay(); ?>
          </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td colspan="2" align="center" style="padding-top:7px;"> 
          <table width="814" border="0" align="center" cellpadding="0" cellspacing="0" class="main_container">
            <tbody>
              <tr valign="top"> 
                <td width="169" align="right" background="templates/<?php echo $GLOBALS['cur_template']; ?>/images/bg_left.gif" style="padding:4px 0px 4px 0px;background-position:right;background-repeat:repeat-y"> 
                  <div id="leftside"> 
                    <div id="randompic"></div>
                    <div id="clr"></div>
                    <div align="center"> 
                      <div id="leftmain"> 
                        <?php mosLoadModules ( "left" ); ?>
                      </div>
                    </div>
                  </div></td>
                <td align="center" style="padding:4px 0px 0px 0px"> 
				<div align="center"> 
                    <div id="main_body"> 
                      <?php	if ( mosCountModules( 'banner' ) ) { ?>
                      <div id="newsflash"> 
                        <?php mosLoadModules ( 'banner' ); ?>
                      </div>
                      <?php
				}
				?>
                      <?php	if ( mosCountModules( 'top' ) ) { ?>
                      <div align="center"> 
                        <div id="newsflash"> 
                          <?php mosLoadModules ( 'top' ); ?>
                        </div>
                      </div>
                      <?php
				}
				?>
                      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:5px">
                        <tbody>
                          <tr> 
                            <td width="50%" bgcolor="#F4E8CF"><div id="blocks"> 
                                <?php mosLoadModules ( "user1" ); ?>
                              </div></td>
                            <td width="50%" bgcolor="#F4E8CF"><div id="blocks"> 
                                <?php mosLoadModules ( "user2" ); ?>
                              </div></td>
                          </tr>
                        </tbody>
                      </table>
                      <div id="clr"></div>
                      <div align="center"> 
                        <div id="main_area"> 
                          <?php mosMainBody(); ?>
                        </div>
                      </div>
                    </div>
                  </div></td>
                <?php	if ( mosCountModules( 'right' ) ) { ?>
                <td width="169" align="center" background="templates/<?php echo $GLOBALS['cur_template']; ?>/images/bg_right.gif" style="padding:4px 4px 0px 0px;background-position:right;background-repeat:repeat-y"> 
                  <div id="rightside"> 
                    <div align="center"> 
                      <div id="rightmain"> 
                        <?php mosLoadModules ( "right" ); ?>
                      </div>
                    </div>
                  </div></td>
                <?php
				}
				?>
              </tr>
            </tbody>
          </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td colspan="2" align="center""> 
          <table width="806" border="0" cellspacing="0" cellpadding="0">
            <tr> 
              <td width="60"><img src="templates/<?php echo $GLOBALS['cur_template']; ?>/images/bottom1.gif" width="60" height="63" /></td>
              <td><div id="footer">Copyright 2004-2005 Mambo Dancing All rights 
                  reserved.<br />
                  Designed by <a href="mailto:mambo.dancing@gmail.com">Magicbox</a> 
                  from <a href="http://www.mambochina.net" target="_blank">MamboChina</a><br />
			  <?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?>
			  </div></td>
              <td width="149" align="right" valign="top" background="templates/<?php echo $GLOBALS['cur_template']; ?>/images/bottom2.gif"><a href="#top"><img src="templates/<?php echo $GLOBALS['cur_template']; ?>/images/top.gif" width="25" height="9" hspace="30" vspace="8" border="0" /></a></td>
            </tr>
          </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr align="center"> 
        <td colspan="4"><div id="bottom"></div></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
