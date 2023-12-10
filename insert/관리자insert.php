<?php
echo "<script>document.location.replace('../ex11_4_print.php')</script>";

$connect = mysqli_connect("localhost", "root", "123456789", "homework");
// 연결 확인
if (mysqli_connect_errno()) {
    die("연결 실패: " . mysqli_connect_error());
}

// POST 데이터 받아오기
$name = mysqli_real_escape_string($connect, $_POST['name']);
$id = mysqli_real_escape_string($connect, $_POST['id']);
$passwd = mysqli_real_escape_string($connect,$_POST['passwd']); // 보안을 위해 해시화 사용

// 쿼리 작성
$sql = "INSERT INTO 관리자 (관리자이름,관리자아이디,비밀번호) VALUES ('$name', '$id', '$passwd')";

// 쿼리 실행
$result = mysqli_query($connect, $sql);

// 삽입 결과 확인
if ($result) {
    echo "회원가입 성공!";
} else {
    echo "회원가입 실패: " . mysqli_error($connect);
}

// 연결 닫기
mysqli_close($connect);
?>