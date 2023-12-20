<?php
$div = $_GET["div"];
$branch = $_GET["branch"];
setcookie('div', $div, time() + (86400 * 30 * 2), "/");
setcookie('branch', $branch, time() + (86400 * 30 * 2), "/");
echo "<script>location.replace('index.php');</script>";
?>