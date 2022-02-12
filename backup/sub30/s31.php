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

$TUID = getSingleValue("select UID from ezTable_root_board02 order by UID desc limit 0,1");
header("Location:/ezboard.php?GID=root&BID=board02&mode=view&UID=$TUID");
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
                    <td><table width="956" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="370" align="center" valign="top">
                        <table width="80%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td height="40"></td>
                                                      </tr>
                                                      <tr>
                                                        <td height="40"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                          <tr>
                                                            <td height="2" colspan="2" align="center" bgcolor="#C5CEBE" class="txt_board"></td>
                                                          </tr>
                                                          <tr>
                                                            <td colspan="2" align="center" class="txt_board"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                              <tr>
                                                                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                  <tr>
                                                                    <td width="74%" height="24" align="left" class="txtBlueBold">페이스북도 `공짜 통화`…통신社 "나 떨고있니" </td>
                                                                    <td width="11%" align="left" class="content11_grey">2010/11/21</td>
                                                                    <td width="15%" align="right" class="content11_grey"><table width="112" cellspacing="0" cellpadding="0">
                                                                      <tr>
                                                                        <td width="24"><img src="../01_img/board/sns_01.png" width="24" height="23" /></td>
                                                                        <td width="24"><img src="../01_img/board/sns_02.png" width="24" height="23" /></td>
                                                                        <td width="25"><img src="../01_img/board/sns_03.png" width="25" height="23" /></td>
                                                                        <td width="24"><img src="../01_img/board/sns_04.png" width="24" height="23" /></td>
                                                                        <td width="15">&nbsp;</td>
                                                                      </tr>
                                                                    </table></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="2" colspan="3" bgcolor="#D7DF21"></td>
                                                                  </tr>
                                                                </table></td>
                                                              </tr>
                                                              <tr align="center" bgcolor="#ECECEC">
                                                                <td height="1" colspan="5"></td>
                                                              </tr>
                                                            </table></td>
                                                          </tr>
                                                          <tr>
                                                            <td height="26" colspan="2" align="left" bgcolor="#FFFFFF" class="txt_board" style="padding:10">가나다라마바사아자차카타파아아아아아아아<br>
                                                              나<br>
                                                              다<br>
                                                              라<br>
                                                              마<br>
                                                              바<br>
                                                              사<br>
                                                              나<br>
                                                              다<br>
                                                              라<br>
                                                              마<br>
                                                              바<br>
                                                              사<br>
                                                              마<br>
                                                              바<br>
                                                              사<br>
                                                              나<br>
                                                              다<br>
                                                              라<br>
                                                              마<br>
                                                              바<br>
                                                              사<br>
                                                            아</td>
                                                          </tr>
                                                          <tr align="center" bgcolor="#ECECEC">
                                                            <td height="1" colspan="5"></td>
                                                          </tr>
                                                          <tr>
                                                            <td width="12%" height="26" align="center" bgcolor="#F9FCF7" class="txt_board">이전글</td>
                                                            <td width="88%" height="26" align="left" style="padding-left:10">이전글이 없습니다. </td>
                                                          </tr>
                                                          <tr align="center" bgcolor="#ECECEC">
                                                            <td height="1" colspan="5"></td>
                                                          </tr>
                                                          <tr>
                                                            <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">다음글</td>
                                                            <td height="26" align="left" style="padding-left:10">다음글이 없습니다. </td>
                                                          </tr>
                                                          <tr>
                                                            <td height="5" colspan="2"></td>
                                                          </tr>
                                                          <tr align="center" bgcolor="#ECECEC">
                                                            <td height="1" colspan="5"></td>
                                                          </tr>
                                                          <tr>
                                                            <td height="40" colspan="2" align="right"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                              <tr>
                                                                <td width="5%"><img src="../01_img/board/list_btnlist_btn.gif" width="65" height="25" /></td>
                                                                <td width="75%">&nbsp;</td>
                                                                <td width="5%"><img src="../01_img/board/del_btn.gif" width="65" height="25" /></td>
                                                                <td width="2%">&nbsp;</td>
                                                                <td width="7%"><img src="../01_img/board/modify_btn.gif" width="65" height="25" /></td>
                                                                <td width="6%"><img src="../01_img/board/reply_btn.gif" width="65" height="25" /></td>
                                                              </tr>
                                                            </table></td>
                                                          </tr>
                                                          <tr>
                                                            <td height="26" colspan="2" align="left"><img src="../01_img/board/list_btnlist_btn.gif" width="65" height="25" /><img src="../01_img/board/cancel_btn.gif" width="65" height="25" /><img src="../01_img/board/del_btn.gif" width="65" height="25" /><img src="../01_img/board/modify_btn.gif" width="65" height="25" /><img src="../01_img/board/reply_btn.gif" width="65" height="25" /><img src="../01_img/board/save_btn.gif" width="65" height="25" /><img src="../01_img/board/search_btn.gif" width="65" height="25" /><img src="../01_img/board/write_btn.gif" width="65" height="25" /><img src="../01_img/board/write0_btn.gif" width="65" height="25" /></td>
                                                          </tr>
                                                        </table></td>
                                                      </tr>
                                                      <tr>
                            <td height="40"></td>
                            </tr>
                          <tr>
                            <td><!--리스트시작
 -->
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="2" bgcolor="#C5CEBE"></td>
                                  </tr>
                                <tr>
                                  <td height="2" bgcolor="#F9FCF7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td height="24" align="left" class="txtBlueBold">Y.Bros' 다른글 보기</td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                <tr>
                                  <td height="2" bgcolor="#D7DF21"></td>
                                  </tr>
                                <tr>
                                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="9%" height="26" align="center">1</td>
                                      <td width="76%" height="26" align="left" style="padding-left:10">페이스북도 `공짜 통화`…통신社 "나 떨고있니" </td>
                                      <td width="15%" height="26" align="center">2010.11.11</td>
                                      </tr>
                                    <tr align="center" bgcolor="#ECECEC">
                                      <td height="1" colspan="3"></td>
                                      </tr>
                                    <tr>
                                      <td height="26" align="center">2</td>
                                      <td width="76%" height="26" align="left" style="padding-left:10">페이스북도 `공짜 통화`…통신社 "나 떨고있니" </td>
                                      <td height="26" align="center">2010.11.11</td>
                                      </tr>
                                    <tr align="center" bgcolor="#ECECEC">
                                      <td height="1" colspan="3"></td>
                                      </tr>
                                    <tr>
                                      <td height="26" align="center">3</td>
                                      <td width="76%" height="26" align="left" style="padding-left:10">페이스북도 `공짜 통화`…통신社 "나 떨고있니" </td>
                                      <td height="26" align="center">2010.11.11</td>
                                      </tr>
                                    <tr bgcolor="#ECECEC">
                                      <td height="1" colspan="3"></td>
                                      </tr>
                                    <tr>
                                      <td width="9%" height="26" align="center">4</td>
                                      <td width="76%" height="26" align="left" style="padding-left:10">페이스북도 `공짜 통화`…통신社 "나 떨고있니" </td>
                                      <td width="15%" height="26" align="center">2010.11.11</td>
                                      </tr>
                                    
                                    <tr align="center" bgcolor="#ECECEC">
                                      <td height="1" colspan="3"></td>
                                      </tr>
                                    <tr>
                                      <td width="9%" height="26" align="center">5</td>
                                      <td width="76%" height="26" align="left" style="padding-left:10">페이스북도 `공짜 통화`…통신社 "나 떨고있니" </td>
                                      <td width="15%" height="26" align="center">2010.11.11</td>
                                      </tr>
                                    <tr align="center" bgcolor="#ECECEC">
                                      <td height="1" colspan="3"></td>
                                      </tr>
                                    <tr align="center" bgcolor="#ECECEC">
                                      <td height="1" colspan="3"></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                <tr>
                                  <td height="40" align="center"><table width="150" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="22" align="center" valign="middle"><a href="#"><img src="../01_img/board/btn_left.gif" width="4" height="7" /></a></td>
                                      <td height="20" align="center" valign="middle"><span class="txt_bold01">1</span> 2 3 4 5 </td>
                                      <td width="22" align="center" valign="middle"><a href="#"><img src="../01_img/board/btn_right.gif" width="4" height="7" /></a></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                <tr>
                                  <td height="1" align="center" bgcolor="#C5CEBE"></td>
                                  </tr>
                                <tr>
                                  <td height="34" align="right" bgcolor="#F9FCF7" style="padding-right:10"><table width="210" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="41"><select name="select" class="Botton">
                                        <option>제목</option>
                                        <option>내용</option>
                                        <option>이름</option>
                                        </select>
                                        </td>
                                      <td width="84">&nbsp;</td>
                                      <td width="24"><input name="textfield" type="text" class="Box" size="18" maxlength="16" /></td>
                                      <td width="24">&nbsp;</td>
                                      <td width="27"><img src="../01_img/board/search_btn.gif" width="65" height="25" /></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                <tr>
                                  <td height="1" bgcolor="#C5CEBE"></td>
                                  </tr>
                                <tr>
                                  <td height="40" align="right" style="padding:10"><img src="../01_img/board/write_btn.gif" width="65" height="25" /></td>
                                  </tr>
                                </table>
                              <!--리스트 끝 --></td>
                            </tr>
                          <tr>
                            <td height="30"></td>
                            </tr>
                          <tr>
                            <td valign="top"><!--글쓰기시작 -->
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="2" colspan="2" align="center" bgcolor="#C5CEBE" class="txt_board"></td>
                                  </tr>
                                <tr>
                                  <td height="5" colspan="2" align="center" class="txt_board"></td>
                                  </tr>
                                <tr>
                                  <td width="15%" height="26" align="center" bgcolor="#F9FCF7" class="txt_board">이름</td>
                                  <td width="85%" height="26" align="left" style="padding-left:10"><input name="textfield2" type="text" class="Box" size="30" /></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">이메일</td>
                                  <td height="26" align="left" style="padding-left:10"><input name="textfield2" type="text" class="Box" size="30" /></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">제목</td>
                                  <td height="26" align="left" style="padding-left:10"><input name="textfield2" type="text" class="Box" size="50" /></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">옵션</td>
                                  <td height="26" style="padding-left:10"><input name="checkbox" type="checkbox" class="Botton" value="checkbox" />
                                    비밀게시물</td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">내용</td>
                                  <td height="26" align="left" style="padding-left:10"><textarea name="textarea" cols="60" rows="20" class="Box"></textarea></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">첨부</td>
                                  <td height="26" align="left" style="padding-left:10"><input name="file2" type="file" class="Box" /></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">첨부</td>
                                  <td height="26" align="left" style="padding-left:10"><input name="file" type="file" class="Box" /></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">첨부</td>
                                  <td height="26" align="left" style="padding-left:10"><input name="file3" type="file" class="Box" /></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">첨부</td>
                                  <td height="26" align="left" style="padding-left:10"><input name="file4" type="file" class="Box" /></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="26" align="center" bgcolor="#F9FCF7" class="txt_board">비밀번호</td>
                                  <td height="26" align="left" style="padding-left:10"><input name="textfield2" type="text" class="Box" size="30" />
                                    &nbsp;글 수정/삭제시 필요합니다. </td>
                                  </tr>
                                <tr>
                                  <td height="5" colspan="2"></td>
                                  </tr>
                                <tr align="center" bgcolor="#ECECEC">
                                  <td height="1" colspan="5"></td>
                                  </tr>
                                <tr>
                                  <td height="40" colspan="2" align="right"><img src="../01_img/board/save_btn.gif" width="65" height="25" />&nbsp;<img src="../01_img/board/cancel_btn.gif" width="65" height="25" /></td>
                                  </tr>
                                <tr>
                                  <td height="26" colspan="2">&nbsp;</td>
                                  </tr>
                                </table>
                              <!--글쓰기끝 --></td>
                            </tr>
                          <tr>
                            <td></td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td><!--view시작 -->
                              
                              <!--view끝 --></td>
                            </tr>
                          <tr>
                            <td height="40">&nbsp;</td>
                            </tr>
                            </table>
                        </td>
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
