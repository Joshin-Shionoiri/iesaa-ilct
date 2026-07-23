<?php
session_start();

// ▼ データベース接続
$conn = new mysqli("localhost", "root", "password", "ilct");

// ▼ エラー処理
if ($conn->connect_error) {
    die("データベース接続に失敗しました: " . $conn->connect_error);
}

// ▼ フォームから受け取る
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];
$school   = $_POST['school'];
$grade    = $_POST['grade'];

// ▼ パスワードをハッシュ化（教育機関の標準）
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// ▼ メール重複チェック
$check = $conn->query("SELECT id FROM users WHERE email='$email'");
if ($check->num_rows > 0) {
    echo "このメールアドレスは既に登録されています。";
    exit();
}

// ▼ データベースに登録
$sql = "INSERT INTO users (name, email, password, school, grade, created_at)
        VALUES ('$name', '$email', '$hashed_password', '$school', '$grade', NOW())";

if ($conn->query($sql) === TRUE) {

    // ▼ 登録したユーザー情報を取得
    $user_id = $conn->insert_id;

    // ▼ セッションに保存（ログイン状態にする）
    $_SESSION['user_id'] = $user_id;
    $_SESSION['name']    = $name;

    // ▼ ダッシュボードへ移動
    header("Location: dashboard.php");
    exit();

} else {
    echo "登録に失敗しました。";
}

$conn->close();
?>
