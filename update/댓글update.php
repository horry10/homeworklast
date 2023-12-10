<?php
echo "<script>document.location.replace('../ex11_4_print.php')</script>";

$connect = mysqli_connect("localhost", "root", "123456789", "homework");

// 연결 확인
if (mysqli_connect_errno()) {
    die("연결 실패: " . mysqli_connect_error());
}

// POST 데이터 받아오기
$realid = mysqli_real_escape_string($connect, $_POST['realid']);
$user_id = mysqli_real_escape_string($connect, $_POST['user_id']);
$product_id = mysqli_real_escape_string($connect, $_POST['product_id']);
$comment = mysqli_real_escape_string($connect, $_POST['comment']);
$upload_date = mysqli_real_escape_string($connect, $_POST['upload_date']);

// 쿼리 작성
$sql = "UPDATE 댓글 SET 
        댓글내용 = '$comment', 
        업로드날짜 = '$upload_date',
        회원_id = '$user_id',
        제품_id = '$product_id'
        Where 댓글_ID='$realid'";

// 쿼리 실행
$result = mysqli_query($connect, $sql);

// 업데이트 결과 확인
if ($result) {
    echo "댓글 업데이트 성공!";
} else {
    echo "댓글 업데이트 실패: " . mysqli_error($connect);
}

// 연결 닫기
mysqli_close($connect);
?>
