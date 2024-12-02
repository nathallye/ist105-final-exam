<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $gift_indices = escapeshellarg($_POST['gift_indices']);

    $command = "python3 gift_selector.py $gift_indices";
    $result = shell_exec($command);

    echo $result;
  }
?>
