<?php
/*

Plugin Name: Convert Temperature
Plugin URI: http://www.devilhunter.net/
Description: Go to Appearance > Widgets, and drag 'Convert Temperature' in sidebar or footer or in any widgetized area. This PlugIn will automatically match your theme's color. No need to use any short-code or to edit settings.
Version: 1.0
Author: Tawhidur Rahman Dear
Author URI: http://www.facebook.com/tawhidurrahmandear/ 
License: GPLv2 or later 

	Tawhidur Rahman Dear
    Mailing Address: 
	House - 304, Road - 10 Rupnagar Tinshed,
    Pallabi, Mirpur,
    Dhaka - 1216
    BANGLADESH
    tawhidurrahmandear@gmail.com
    +8801716816283, (also in Viber, DUO, WhatsApp, IMO)
    Skype & Google Hangout: tawhidurrahmandear
    Facebook: http://www.facebook.com/tawhidurrahmandear/ 
    Google Plus: http://plus.google.com/+tawhidurrahmandear/about
	Personal Blog: http://tawhidurrahmandear.blogspot.com 
 
 */


namespace dearten\dear\wordpress;

{require_once(__DIR__ . "/pluginfiles/widget.php");}

  class S extends Widget {
    static $widgetTitle = "dearten_converttemperature";

    public function __construct() {
      parent::__construct(null, "Convert Temperature");
    }


    public function widgetContent($args, $instance)
    {
      ?>
<FORM>
<INPUT TYPE="hidden" NAME="C_expr" VALUE="(Math.round((100/(212-32) * (F.value - 32))*100))/100">
<INPUT TYPE="hidden" NAME="F_expr" VALUE="(Math.round(((212-32)/100 * C.value + 32)*100))/100;">
<div align="left">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
<tr>
<td width="100%">
<INPUT TYPE="button" NAME="Find" VALUE="Convert Temperature"></td>
</tr>
<tr>
<td width="100%">
<INPUT TYPE="text" NAME="F" VALUE="" SIZE="6" MAXLENGTH="6" onChange="eval('C.value = ' + this.form.C_expr.value)">
Fahrenheit</td>
</tr>
<tr>
<td width="100%"><INPUT TYPE="text" NAME="C" VALUE="" SIZE="6" MAXLENGTH="6" onChange="eval('F.value = ' + this.form.F_expr.value)">
Celsius</td>
</tr>
</table>
</div>
</FORM>
      <?php
    
    }
  }

  S::register("dearten_converttemperature");


