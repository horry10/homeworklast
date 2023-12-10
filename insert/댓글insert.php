<?php
echo "<script>document.location.replace('../ex11_4_print.php')</script>";

$connect = mysqli_connect("localhost", "root", "123456789", "homework");

// 연결 확인
if (mysqli_connect_errno()) {
    die("연결 실패: " . mysqli_connect_error());
}

// POST 데이터 받아오기
$user_id = mysqli_real_escape_string($connect, $_POST['user_id']);
$product_id = mysqli_real_escape_string($connect, $_POST['product_id']);
$comment = mysqli_real_escape_string($connect, $_POST['comment']);
$upload_date = mysqli_real_escape_string($connect, $_POST['upload_date']);

// 쿼리 작성
$sql = "INSERT INTO 댓글 (회원_id, 제품_id, 댓글내용, 업로드날짜) VALUES ('$user_id', '$product_id', '$comment', '$upload_date')";

// 쿼리 실행
$result = mysqli_query($connect, $sql);

// 삽입 결과 확인
if ($result) {
    echo "댓글 등록 성공!";
} else {
    echo "댓글 등록 실패: " . mysqli_error($connect);
}

// 연결 닫기
mysqli_close($connect);
?>
