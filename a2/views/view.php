<!DOCTYPE html>
  <html>
  <head>
    <title>Model View Controller</title>
  </head>
  <body>
    <h1>Hello From My View!</h1>
    <?php
      echo "<ul>";
        echo "<li>User ID: " . $userID . "</li>";
        echo "<li>First Name: " . $first . "</li>";
        echo "<li>Last Name: " . $last . "</li>";
        echo "<li>Email: " . $email . "</li>";
        echo "<li>Role: " . $role . "</li>";
      echo "</ul>"
    ?>
  </body>
  </html>
