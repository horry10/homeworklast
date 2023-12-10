<?php
$connect = mysqli_connect("localhost", "root", "123456789", "homework");

// 회원 정보 출력
$sql_member = "SELECT * FROM 회원";
$result_member = mysqli_query($connect, $sql_member);
$fields_member = mysqli_num_fields($result_member);

echo "<h2>회원 테이블</h2>";
echo "<table width=800 border=1 cellpadding=10>
        <tr>
            <td bgcolor=lightblue align=center>회원_id </td>
            <td bgcolor=lightblue align=center>이름 </td>
            <td bgcolor=lightblue align=center>나이 </td>
            <td bgcolor=lightblue align=center>회원아이디 </td>
            <td bgcolor=lightblue align=center>비밀번호 </td>
        </tr>";

while ($row_member = mysqli_fetch_row($result_member)) {
    echo("<tr>");
    for ($i = 0; $i < $fields_member; $i++) {
        echo("<td> $row_member[$i] </td>");
    }
    echo("</tr>");
}

echo "</table>";

// 화장품 정보 출력
$sql_cosmetic = "SELECT * FROM 화장품";
$result_cosmetic = mysqli_query($connect, $sql_cosmetic);
$fields_cosmetic = mysqli_num_fields($result_cosmetic);

echo "<h2>화장품 테이블</h2>";
echo "<table width=800 border=1 cellpadding=10>
        <tr>
            <td bgcolor=lightblue align=center>제품_id </td>
            <td bgcolor=lightblue align=center>관리자_id </td>
            <td bgcolor=lightblue align=center>제품성분 </td>
            <td bgcolor=lightblue align=center>제품단가 </td>
            <td bgcolor=lightblue align=center>제품명 </td>
            <td bgcolor=lightblue align=center>추천이유 </td>
            <td bgcolor=lightblue align=center>추천일자 </td>
        </tr>";

while ($row_cosmetic = mysqli_fetch_row($result_cosmetic)) {
    echo("<tr>");
    for ($i = 0; $i < $fields_cosmetic; $i++) {
        echo("<td> $row_cosmetic[$i] </td>");
    }
    echo("</tr>");
}

echo "</table>";

// 댓글 정보 출력
$sql_comment = "SELECT * FROM 댓글";
$result_comment = mysqli_query($connect, $sql_comment);
$fields_comment = mysqli_num_fields($result_comment);

echo "<h2>댓글 테이블</h2>";
echo "<table width=800 border=1 cellpadding=10>
        <tr>
            <td bgcolor=lightblue align=center>댓글_id </td>
            <td bgcolor=lightblue align=center>회원_id </td>
            <td bgcolor=lightblue align=center>제품_id </td>
            <td bgcolor=lightblue align=center>댓글내용 </td>
            <td bgcolor=lightblue align=center>업로드날짜 </td>
        </tr>";

while ($row_comment = mysqli_fetch_row($result_comment)) {
    echo("<tr>");
    for ($i = 0; $i < $fields_comment; $i++) {
        echo("<td> $row_comment[$i] </td>");
    }
    echo("</tr>");
}

echo "</table>";

// 구독 정보 출력
$sql_subscription = "SELECT * FROM 구독";
$result_subscription = mysqli_query($connect, $sql_subscription);
$fields_subscription = mysqli_num_fields($result_subscription);

echo "<h2>구독 테이블</h2>";
echo "<table width=800 border=1 cellpadding=10>
        <tr>
            <td bgcolor=lightblue align=center>구독_id </td>
            <td bgcolor=lightblue align=center>회원_id </td>
            <td bgcolor=lightblue align=center>제품_id </td>
            <td bgcolor=lightblue align=center>구독여부 </td>
            <td bgcolor=lightblue align=center>구독일자 </td>
        </tr>";

while ($row_subscription = mysqli_fetch_row($result_subscription)) {
    echo("<tr>");
    for ($i = 0; $i < $fields_subscription; $i++) {
        echo("<td> $row_subscription[$i] </td>");
    }
    echo("</tr>");
}

echo "</table>";

// 관리자 정보 출력
$sql_admin = "SELECT * FROM 관리자";
$result_admin = mysqli_query($connect, $sql_admin);
$fields_admin = mysqli_num_fields($result_admin);

echo "<h2>관리자 테이블</h2>";
echo "<table width=800 border=1 cellpadding=10>
        <tr>
            <td bgcolor=lightblue align=center>관리자_id </td>
            <td bgcolor=lightblue align=center>관리자이름 </td>
            <td bgcolor=lightblue align=center>관리자아이디 </td>
            <td bgcolor=lightblue align=center>비밀번호 </td>
        </tr>";

while ($row_admin = mysqli_fetch_row($result_admin)) {
    echo("<tr>");
    for ($i = 0; $i < $fields_admin; $i++) {
        echo("<td> $row_admin[$i] </td>");
    }
    echo("</tr>");
}

echo "</table>";

mysqli_close($connect);
?>
