<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ILCT 受験者ポータル｜ダッシュボード</title>
</head>
<body>

<h2>ようこそ、<?php echo $_SESSION['name']; ?> さん</h2>
<p>受験者ID：ILCT-2026-<?php echo $_SESSION['user_id']; ?></p>

<!-- ここにダッシュボードのHTMLを入れる -->

</body>
</html>
