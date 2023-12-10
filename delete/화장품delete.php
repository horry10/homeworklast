<?php
echo "<script>document.location.replace('../ex11_4_print.php')</script>";

$connect = mysqli_connect("localhost", "root", "123456789", "homework");

// 연결 확인
if (mysqli_connect_errno()) {
    die("연결 실패: " . mysqli_connect_error());
}

// POST 데이터 받아오기
$realid = mysqli_real_escape_string($connect, $_POST['realid']);

// 쿼리 작성
$sql = "DELETE FROM 화장품 WHERE 제품_id = '$realid'";

// 쿼리 실행
$result = mysqli_query($connect, $sql);

// 삭제 결과 확인
if ($result) {
    echo "화장품 정보 삭제 성공!";
} else {
    echo "화장품 정보 삭제 실패: " . mysqli_error($connect);
}

// 연결 닫기
mysqli_close($connect);
?>
