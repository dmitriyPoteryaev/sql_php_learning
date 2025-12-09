<?php
declare(strict_types=1);

function sum(int $a, int $b): int {
    return $a + $b;
}

?>
<!DOCTYPE html>
<html>
<body>
  <h1>Varible typing</h1>
  <?php echo sum("5", 3);?>
</body>
</html>
