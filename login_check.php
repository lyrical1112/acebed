<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 확인</title>
</head>
<body>
    <?php
        include "connect2.php"; //다른 파일을 연결 할때 사용 (include)
        //아이디 비교와 비밀번호 비교가 필요한 시점이다.
        // 1차로 DB에서 비밀번호를 가져온다 
        // 평문의 비밀번호와 암호화된 비밀번호를 비교해서 검증한다.

        $name = $_POST['name'];
        $pw = $_POST['pw'];

        // DB 정보 가져오기 
        $sql = "SELECT * from acebed_join WHERE id = '{$name}'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result);

        $hashedPassword = $row['passward'];

        // foreach($row as $key => $r){
        //     echo "{$key} : {$r} <br>";
        // }
        // echo $row['id'];
        // DB 정보를 가져왔으니 
        // 비밀번호 검증 로직을 실행하면 된다.
        // $password = password_hash($pw, PASSWORD_DEFAULT);
        $passwordResult = password_verify($pw, $hashedPassword);
        echo "로그인 PW : ".$pw;
        echo "<br>";
        echo "DB PW : ".$hashedPassword;
        echo "<br>";
        if ($passwordResult === true) {
            // 로그인 성공
            // 세션에 id 저장
            $_SESSION['name'] = $_POST["name"];
            print_r($_SESSION);
            echo $_SESSION['name'];
    ?>
        <script>
            alert("로그인에 성공하였습니다.")
            location.href = "index.php";
        </script>
    <?php
        } else {
            // 로그인 실패 
    ?>
        <script>
            alert("로그인에 실패하였습니다");
        </script>
    <?php
        }
    ?>
</body>
</html>