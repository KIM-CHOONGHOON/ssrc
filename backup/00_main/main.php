<?
include_once "../config/db_info.php";
include_once "../config/db_connect.php";
include_once "../config/admin_info.php";
include_once "../config/skin_info.php";
include_once "../config/shopDisplay_info.php";
include_once "../config/membercheck_info.php";
include_once "../config/cart_info.php";
include_once "../function/const_array.php";
include_once "../function/kerrigancap_lib.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>::: ybros :::</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>



<link href="../02_common/css/common.css" rel="stylesheet" type="text/css" />
<link href="../02_common/css/sub.css" rel="stylesheet" type="text/css" />
<body>
<?
include "../function/popup.php";// popup module
?>
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><table width="998" cellspacing="0" cellpadding="0">
      <tr>
        <td height="100" align="right" valign="bottom"></td>
      </tr>
      <tr>
        <td><table width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td><?php include("../03_include/inc_menu.php"); ?></td>
          </tr>
          <tr>
            <td><table width="998" cellspacing="0" cellpadding="0" bgcolor="#FAF8F7">
              <tr>
                <td width="21" background="../01_img/common/con_bg_left.gif"></td>
                <td width="956"><table width="100%" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="100%" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="450"><img src="../01_img/sub10/img_05.jpg" width="450" height="353" /></td>
                        <td width="78"></td>
                        <td width="428"><img src="../01_img/main/main.gif" width="428" height="353" /></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
                <td width="21" background="../01_img/common/con_bg_right.gif"></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><?php include("../03_include/inc_footer.php"); ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="125"></td>
      </tr>
    </table></td>
  </tr>
</table>



<map name="menu" id="menu">
  <area shape="rect" coords="17,2,66,24" href="#" />
  <area shape="rect" coords="70,-2,135,24" href="#" />
  <area shape="rect" coords="140,-3,182,24" href="#" />
  <area shape="rect" coords="188,0,237,24" href="#" />
  <area shape="rect" coords="907,-5,983,23" href="#" />
</map>

<map name="footer_contactus" id="footer_contactus">
  <area shape="circle" coords="499,26,23" href="#" />
</map>
</body>
</html>
