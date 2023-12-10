<!DOCTYPE html>
<html>
    <head>

    <meta charset="UTF-8">
</head>

<form name="mem_form" method="post" action="delete/회원delete.php">
    <input type="hidden" name="title" value="회원가입 양식">

    <table border="1" width="640" cellspacing="1" cellpadiing="4">
    <caption>회원테이블</caption>


<tr>
    <td align="right"> 삭제할 회원 아이디 번호 </td>
    <td><input type="text" size="15" maxlength="12" name="realid" value="1"></td>
</tr>

</table>
<br>
<table border="0" width="640">
    <tr><td align="center">
        <input type="submit" value="확인">
        <input type="reset" value="다시작성"></td>
</tr>
</table>
</form>


<form name="mem_form" method="post" action="delete/관리자delete.php">
    <input type="hidden" name="title" value="회원가입 양식">

    <table border="1" width="640" cellspacing="1" cellpadiing="4">
    <caption>관리자테이블</caption>


<tr>
    <td align="right"> 삭제할 회원 관리자 번호 </td>
    <td><input type="text" size="15" maxlength="12" name="realid" value="1"></td>
</tr>

</table>
<br>
<table border="0" width="640">
    <tr><td align="center">
        <input type="submit" value="확인">
        <input type="reset" value="다시작성"></td>
</tr>
</table>
</form>


<form name="mem_form" method="post" action="delete/화장품delete.php">
    <input type="hidden" name="title" value="회원가입 양식">

    <table border="1" width="640" cellspacing="1" cellpadiing="4">
    <caption>화장품 테이블</caption>


<tr>
    <td align="right"> 삭제할 화장품 번호 </td>
    <td><input type="text" size="15" maxlength="12" name="realid" value="1"></td>
</tr>

</table>
<br>
<table border="0" width="640">
    <tr><td align="center">
        <input type="submit" value="확인">
        <input type="reset" value="다시작성"></td>
</tr>
</table>
</form>


<form name="mem_form" method="post" action="delete/댓글delete.php">
    <input type="hidden" name="title" value="회원가입 양식">

    <table border="1" width="640" cellspacing="1" cellpadiing="4">
    <caption>댓글 테이블</caption>


<tr>
    <td align="right"> 삭제할 댓글 번호 </td>
    <td><input type="text" size="15" maxlength="12" name="realid" value="1"></td>
</tr>

</table>
<br>
<table border="0" width="640">
    <tr><td align="center">
        <input type="submit" value="확인">
        <input type="reset" value="다시작성"></td>
</tr>
</table>
</form>


<form name="mem_form" method="post" action="delete/구독delete.php">
    <input type="hidden" name="title" value="회원가입 양식">

    <table border="1" width="640" cellspacing="1" cellpadiing="4">
    <caption>구독테이블</caption>


<tr>
    <td align="right"> 삭제할 구독 번호 </td>
    <tr>
            <td align="right"> 회원_id: </td>
            <td><input type="text" size="15" maxlength="12" name="user_id" value="1"></td>
        </tr>
        <tr>
            <td align="right"> 제품_id : </td>
            <td> <input type="text" size="15" maxlength="12" name="product_id" value="1"></td>
        </tr></tr>

</table>
<br>
<table border="0" width="640">
    <tr><td align="center">
        <input type="submit" value="확인">
        <input type="reset" value="다시작성"></td>
</tr>
</table>
</form>




</body>
</html>