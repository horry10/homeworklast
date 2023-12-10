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
$subscription_status = mysqli_real_escape_string($connect, $_POST['subscription_status']);
$subscription_date = mysqli_real_escape_string($connect, $_POST['subscription_date']);

// 쿼리 작성
$sql = "UPDATE 구독 SET 
        구독여부 = '$subscription_status', 
        구독일자 = '$subscription_date' 
        WHERE 회원_id = '$user_id' AND 제품_id = '$product_id'";

// 쿼리 실행
$result = mysqli_query($connect, $sql);

// 업데이트 결과 확인
if ($result) {
    echo "구독 정보 업데이트 성공!";
} else {
    echo "구독 정보 업데이트 실패: " . mysqli_error($connect);
}

// 연결 닫기
mysqli_close($connect);
?>
