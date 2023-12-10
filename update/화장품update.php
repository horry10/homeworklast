<?php
echo "<script>document.location.replace('../ex11_4_print.php')</script>";

$connect = mysqli_connect("localhost", "root", "123456789", "homework");

// 연결 확인
if (mysqli_connect_errno()) {
    die("연결 실패: " . mysqli_connect_error());
}

// POST 데이터 받아오기
$realid = mysqli_real_escape_string($connect, $_POST['realid']);
$admin_id = mysqli_real_escape_string($connect, $_POST['admin_id']);
$ingredient = mysqli_real_escape_string($connect, $_POST['ingredient']);
$price = mysqli_real_escape_string($connect, $_POST['price']);
$product_name = mysqli_real_escape_string($connect, $_POST['product_name']);
$recommendation = mysqli_real_escape_string($connect, $_POST['recommendation']);
$recommendation_date = mysqli_real_escape_string($connect, $_POST['recommendation_date']);

// 쿼리 작성
$sql = "UPDATE 화장품 SET 
        제품성분 = '$ingredient', 
        제품단가 = '$price', 
        제품명 = '$product_name', 
        추천이유 = '$recommendation', 
        추천일자 = '$recommendation_date',
        관리자_id = '$admin_id'
        WHERE 제품_id = '$realid'";

// 쿼리 실행
$result = mysqli_query($connect, $sql);

// 업데이트 결과 확인
if ($result) {
    echo "화장품 정보 업데이트 성공!";
} else {
    echo "화장품 정보 업데이트 실패: " . mysqli_error($connect);
}

// 연결 닫기
mysqli_close($connect);
?>
