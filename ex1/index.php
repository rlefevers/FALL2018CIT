<?php include '_includes/config.php';
?>

<?php include ABSOLUTE_PATH . '_includes/header.inc.php'; ?>

<?php
  $myArray = array('Rebecca' , 'Blue' , 'Interstellar' , 'The Hobbit' , 'Reddit');
  echo '<h1>My Name is ' . $myArray[0]. '</h1>';

  function my_function($myArray){
    unset($myArray[0]);
    foreach ($myArray as $item) {
      echo '<ul>' . $item . '</ul>';
    }
  }
  my_function($myArray);


  ?>


<?php include ABSOLUTE_PATH . '_includes/footer.inc.php'; ?>
