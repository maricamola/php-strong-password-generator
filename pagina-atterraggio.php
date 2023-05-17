<?php

session_start();

$password = $_SESSION['new_password'];

// if (isset($_SESSION['new_password'])) {
//   $password = $_SESSION['new_password'];
// } else {
//   header('Location: ./index.php');
// }


require_once __DIR__ . '/partials/head.php';
?>

<body>
  <?php
  require_once __DIR__ . '/partials/header.php';
  ?>

  <div class="container my-5">
    <p class="text-center"> La tua password è: <?php echo $password ?></p>
  </div>



  <?php
  require_once __DIR__ . '/partials/footer.php';
  ?>


</body>

</html>