<?php
echo "<script>document.location.replace('../ex11_4_print.php')</script>";

$connect = mysqli_connect("localhost", "root", "123456789", "homework");

// 연결 확인
if (mysqli_connect_errno()) {
    die("연결 실패: " . mysqli_connect_error());
}

// POST 데이터 받아오기
$admin_id = mysqli_real_escape_string($connect, $_POST['admin_id']);
$ingredient = mysqli_real_escape_string($connect, $_POST['ingredient']);
$price = mysqli_real_escape_string($connect, $_POST['price']);
$product_name = mysqli_real_escape_string($connect, $_POST['product_name']);
$recommendation = mysqli_real_escape_string($connect, $_POST['recommendation']);
$recommendation_date = mysqli_real_escape_string($connect, $_POST['recommendation_date']);

// 쿼리 작성
$sql = "INSERT INTO 화장품 (관리자_id, 제품성분, 제품단가, 제품명, 추천이유, 추천일자) VALUES ('$admin_id', '$ingredient', '$price', '$product_name', '$recommendation', '$recommendation_date')";

// 쿼리 실행
$result = mysqli_query($connect, $sql);

// 삽입 결과 확인
if ($result) {
    echo "화장품 등록 성공!";
} else {
    echo "화장품 등록 실패: " . mysqli_error($connect);
}

// 연결 닫기
mysqli_close($connect);
?>
