<!DOCTYPE html>
<html>
    <head>

    <meta charset="UTF-8">
</head>

<form name="mem_form" method="post" action="insert/회원insert.php">
    <input type="hidden" name="title" value="회원가입 양식">

    <table border="1" width="640" cellspacing="1" cellpadiing="4">
    <caption>회원테이블</caption>


<tr>
    <td align="right"> 이름 : </td>
    <td><input type="text" size="15" maxlength="12" name="name" value="김대철"></td>
</tr>
<tr>
    <td align="right"> 나이 : </td>
	<td> <input type="text" size="15" maxlength="12" name="age" value="30"></td>
</tr>
<tr>
	<td align="right">회원아이디 : </td>
	<td> <input type="text" size="15" maxlength="12" name="id" value="horry7"></td>
</tr>
<tr>
    <td align="right"> 비밀번호 : </td>
    <td><input type="password" size="15" maxlength="10" name="passwd" value="password"> </td>
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



<form name="mem_form" method="post" action="insert/관리자insert.php">
    <input type="hidden" name="title" value="회원가입 양식">

    <table border="1" width="640" cellspacing="1" cellpadiing="4">
    <caption>관리자테이블</caption>


<tr>
    <td align="right"> 관리자 이름 : </td>
    <td><input type="text" size="15" maxlength="12" name="name" value="관리자1"></td>
</tr>
<tr>
    <td align="right"> 나이 : </td>
	<td> <input type="text" size="15" maxlength="12" name="id" value="admin"></td>
</tr>
<tr>
    <td align="right"> 비밀번호 : </td>
    <td><input type="password" size="15" maxlength="10" name="passwd" value="admin"> </td>
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

<form name="mem_form" method="post" action="insert/화장품insert.php">
    <input type="hidden" name="title" value="화장품 등록 양식">

    <table border="1" width="640" cellspacing="1" cellpadding="4">
        <caption>화장품 테이블</caption>

        <tr>
            <td align="right"> 관리자_id: </td>
            <td><input type="text" size="15" maxlength="12" name="admin_id" value="1"></td>
        </tr>
        <tr>
            <td align="right"> 제품성분 : </td>
            <td> <input type="text" size="15" maxlength="12" name="ingredient" value="엄청난화장품"></td>
        </tr>
        <tr>
            <td align="right"> 제품단가 : </td>
            <td><input type="text" size="15" maxlength="10" name="price" value="25.11"> </td>
        </tr>
        <tr>
            <td align="right"> 제품명 : </td>
            <td><input type="text" size="15" maxlength="10" name="product_name" value="화장품"> </td>
        </tr>
        <tr>
            <td align="right"> 추천이유 : </td>
            <td><input type="text" size="15" maxlength="10" name="recommendation" value="좋아여"> </td>
        </tr>
        <tr>
            <td align="right"> 추천일자 : </td>
            <td><input type="date" name="recommendation_date" value="2023-11-01"></td>
        </tr>

    </table>
    <br>
    <table border="0" width="640">
        <tr>
            <td align="center">
                <input type="submit" value="확인">
                <input type="reset" value="다시작성">
            </td>
        </tr>
    </table>
</form>

<form name="mem_form" method="post" action="insert/댓글insert.php">
    <input type="hidden" name="title" value="댓글 등록 양식">

    <table border="1" width="640" cellspacing="1" cellpadding="4">
        <caption>댓글 테이블</caption>

        <tr>
            <td align="right"> 회원_id: </td>
            <td><input type="text" size="15" maxlength="12" name="user_id" value="1"></td>
        </tr>
        <tr>
            <td align="right"> 제품_id : </td>
            <td> <input type="text" size="15" maxlength="12" name="product_id" value="1"></td>
        </tr>
        <tr>
            <td align="right"> 댓글내용 : </td>
            <td><input type="text" size="15" maxlength="10" name="comment" value="이 제품 정말 좋아요!"> </td>
        </tr>
        <tr>
            <td align="right"> 업로드날짜 : </td>
            <td><input type="date" name="upload_date" value="2023-11-01"></td>
        </tr>

    </table>
    <br>
    <table border="0" width="640">
        <tr>
            <td align="center">
                <input type="submit" value="확인">
                <input type="reset" value="다시작성">
            </td>
        </tr>
    </table>
</form>

<form name="mem_form" method="post" action="insert/구독insert.php">
    <input type="hidden" name="title" value="구독 양식">

    <table border="1" width="640" cellspacing="1" cellpadding="4">
        <caption>구독 테이블</caption>

        <tr>
            <td align="right"> 회원_id: </td>
            <td><input type="text" size="15" maxlength="12" name="user_id" value="1"></td>
        </tr>
        <tr>
            <td align="right"> 제품_id : </td>
            <td> <input type="text" size="15" maxlength="12" name="product_id" value="1"></td>
        </tr>
        <tr>
            <td align="right"> 구독여부 : </td>
            <td><input type="text" size="15" maxlength="10" name="subscription_status" value="1"> </td>
        </tr>
        <tr>
            <td align="right"> 구독일자 : </td>
            <td><input type="date" name="subscription_date" value="2023-11-01"></td>
        </tr>

    </table>
    <br>
    <table border="0" width="640">
        <tr>
            <td align="center">
                <input type="submit" value="확인">
                <input type="reset" value="다시작성">
            </td>
        </tr>
    </table>
</form>





</body>
</html>