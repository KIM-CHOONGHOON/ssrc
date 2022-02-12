<?
header("Location:/ezboard.php?GID=root&BID=board03");
exit;
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

<script language="javascript">

	function fnTxtClick()
	{
		var txtBox = document.all.textfield1;
		if(txtBox.value == "이름")
		{
			txtBox.style.color = "000"; 
			txtBox.value = "";
		}
	}
	
</script>

<link href="../02_common/css/common.css" rel="stylesheet" type="text/css" />
<link href="../02_common/css/sub.css" rel="stylesheet" type="text/css" />
<body>

<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><table width="998" cellspacing="0" cellpadding="0">
      <tr>
        <td height="100"></td>
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
                        <td width="350" valign="top"><img src="../01_img/sub10/img_08.jpg" width="350" height="360" /></td>
                        <td width="600" valign="top"><table width="100%" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="40"></td>
                          </tr>
                          <tr>
                            <td>
                            <table width="93%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="2" colspan="4" align="center" bgcolor="#C5CEBE" class="txt_board"></td>
                                  </tr>
                                                                  <tr>
                                  <td height="10" colspan="4" align="center"></td>
                                  </tr>
                                <tr>
                                  <td height="17" align="left" bgcolor="#F9FCF7"><span style="padding-left:10">
                                    <input name="textfield1" type="text" class="border01" value="이름" style="color:#999" onclick="fnTxtClick();" size="10" />
                                  </span></td>
                                  <td width="2%" rowspan="2" align="right" style="padding-left:10">&nbsp;</td>
                                  <td width="42%" rowspan="2" align="left" style="padding-left:10"><textarea name="textarea" cols="57" rows="4" class="border02"></textarea></td>
                                  <td width="43%" rowspan="2" align="center" style="padding-left:10"><img src="../01_img/board/del_btn_d.gif" width="45" height="40" /></td>
                                </tr>
                                <tr>
                                  <td width="13%" height="17" align="left" bgcolor="#F9FCF7"><span style="padding-left:10">
                                    <input name="textfield2" type="text" class="border01" value="비밀번호" style="color:#999" onclick="fnTxtClick();" size="10" />
                                  </span></td>
                                  </tr>
                                                                                                    <tr>
                                  <td height="10" colspan="4" align="center"></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="7"></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="7"></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="7"></td>
                                  </tr>
                                <tr>
                                  <td height="26" colspan="4">&nbsp;</td>
                                  </tr>
                                </table>
                            </td>
                          </tr>
                          <tr>
                            <td height="30">
                            
                            
                            
                            </td>
                          </tr>
                          <tr>
                            <td>
                            <table width="93%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="2" colspan="2" align="center" bgcolor="#C5CEBE" class="txt_board"></td>
                                  </tr>
                                <tr>
                                  <td height="5" colspan="2" align="center" class="txt_board"></td>
                                  </tr>
                                <tr>
                                  <td colspan="2" align="center" class="txt_board"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="17%" height="26" align="center" bgcolor="#F9FCF7" class="txt_board">관리자</td>
                                      <td width="27%" height="26" align="left" bgcolor="#FAFAFA" class="txtGleyLeft10">( 2011.05.02 23:19 )</td>
                                      <td width="56%" height="26" align="left" bgcolor="#F9FCF7"><img src="../01_img/board/btn_23.gif" width="32" height="18" /></td>
                                      </tr>
                                    <tr align="center" bgcolor="#ECECEC">
                                      <td height="1" colspan="4"></td>
                                      </tr>
                                    <tr align="center" bgcolor="#ECECEC">
                                      <td height="1" colspan="4"></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                <tr>
                                  <td height="50" colspan="2" align="left" bgcolor="#FFFFFF" class="txtGleyLeft10">안녕하세요 안녕하세요 안녕하세요</td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>

                                <tr>
                                  <td height="5" colspan="2"></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="25" colspan="2" align="right"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    
                                    </table></td>
                                  </tr>
                                <tr>
                                  <td height="26" colspan="2"><table width="100%" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="388"><span style="padding-left:10">
                                        <textarea name="textarea2" cols="71" rows="2" class="Box"></textarea>
                                      </span></td>
                                      <td width="10">&nbsp;</td>
                                      <td width="30"><img src="../01_img/board/_ok.gif" width="30" height="30" /></td>
                                    </tr>
                                  </table></td>
                                  </tr>
                                </table>
                            </td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </table></td>
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
