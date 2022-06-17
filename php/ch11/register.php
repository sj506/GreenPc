<?php
session_start();

$_SESSION['var1'] = "v1";
$_SESSION['var2'] = "v2";

// unset($_SESSION['var2']);
// session_unset()
// session_destroy();


echo $_SESSION['var1'] , "<br>";
echo $_SESSION['var2'];
?>
<a href="session_destroy.php">디스트로이</a>

<!-- unset은 바로 죽이고 destroy는 다음 페이지부터 섹션이 없어짐 -->