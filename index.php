<?php
// Logica:
// Importo i 'componenti' head,header,footer in index
// Creo un form con un compo input e un buttone per generare la password
// Faccio un controllo if per verificare che il numero inserito sia compreso tra 8-15;
// Se è corretto, stampo la password
// Se non è corretto, stampo messaggio di errore 

// -------------------------------------------------------

// La tua password deve essere lunga 8-20 caratteri, contenere una lettera maiuscola, una lettera minuscola,
// numeri, caratteri speciali e emoji.

// if (isset($_GET['length'])) {
//   var_dump($_GET['length']);
// }

require_once __DIR__ . '/partials/functions.php';

$error_msg = '';
$password = '';

if (isset($_GET['length']) && is_numeric($_GET['length']) && $_GET['length'] >= 8 && $_GET['length'] <= 15) {
  $length = $_GET['length'];
  $password = generatePassword($length);
  $password_msg = 'La password generata è:';
} else if (isset($_GET['length'])) {
  $error_msg = 'Inserire un numero compreso tra 8-15';
}

?>

<?php
require_once __DIR__ . '/partials/head.php';
?>

<body>
  <?php
  require_once __DIR__ . '/partials/header.php';
  ?>

  <div class="container my-5 text-center">
    <form class="form-inline justify-content-center">
      <div class="form-group mx-sm-3 mb-2">
        <label for="inputLength" class="mr-2">Inserisci la lunghezza della tua Password:</label>
        <input class="form-control mt-3" type="text" id="inputLength" name="length" placeholder=""
          aria-label="default input example">
        <p class="text-danger"><?php echo $error_msg ?></p>
        <button type="submit" class="btn btn-primary my-3">Genera Password</button>
        <p class="text"><?php echo $password_msg ?? '' ?> <?php echo $password ?></p>
    </form>
  </div>


  <?php
  require_once __DIR__ . '/partials/footer.php';
  ?>
</body>

</html>