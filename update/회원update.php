<?php
echo "<script>document.location.replace('../ex11_4_print.php')</script>";

$connect = mysqli_connect("localhost", "root", "123456789", "homework");

// 연결 확인
if (mysqli_connect_errno()) {
    die("연결 실패: " . mysqli_connect_error());
}

// POST 데이터 받아오기
$realid = mysqli_real_escape_string($connect, $_POST['realid']);
$name = mysqli_real_escape_string($connect, $_POST['name']);
$age = mysqli_real_escape_string($connect, $_POST['age']);
$id = mysqli_real_escape_string($connect, $_POST['id']);
$passwd = mysqli_real_escape_string($connect, $_POST['passwd']); // 보안을 위해 해시화 사용

// UPDATE 쿼리 작성
$sql = "UPDATE 회원 SET 
        이름='$name', 
        나이='$age', 
        비밀번호='$passwd',
        회원아이디='$id'
        WHERE 회원_id='$realid'";

// UPDATE 쿼리 실행
$result = mysqli_query($connect, $sql);

// 업데이트 결과 확인
if ($result) {
    echo "회원 정보 업데이트 성공!";
} else {
    echo "회원 정보 업데이트 실패: " . mysqli_error($connect);
}

// 연결 닫기
mysqli_close($connect);
?>
