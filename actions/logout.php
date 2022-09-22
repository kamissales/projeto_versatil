<?php
require_once __DIR__ . "/../app/autoloader.php";

$userService = new UserService;
$userService->logout();

/* echo <<< HTMLA
<script>
    alert('Logout efetuado com sucesso");
    window.location.href = "../index.php";
</script>
HTMLA; */

echo '<table align="center"><tr><td align="center"><img src="../actions/logout.gif"></td>
      </tr></table>';


echo '<script>setTimeout(function() {
      window.location.href = "../index.php";
}, 5000);</script>';

exit;
?>
