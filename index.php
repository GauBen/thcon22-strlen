<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>strlen()</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body class="container is-max-desktop p-5">
  <h1 class="block title is-1">strlen()</h1>
  <?php
  $flag = trim(file_get_contents('flag.txt'));

  if (isset($_POST['flag'])) {
    if (strlen($_POST['flag']) != strlen($flag)) {
      echo '<p class="block notification is-danger">The lengths do not match.</p>';
    } elseif ($_POST['flag'] != $flag) {
      echo '<p class="block notification is-danger">Wrong answer.</p>';
    } else {
      echo '<p class="block notification is-success">Well done!</p>';
    }
  }
  ?>
  <form method="POST" class="block">
    <p class="field control">
      <label class="label">
        Flag <input type="text" name="flag" class="input">
      </label>
    </p>
    <p class="field is-grouped is-grouped-centered">
      <button class="button is-link">Send</button>
    </p>
  </form>
  <p class="block"><a href="?source">View source</a> / <a href="?version">View PHP version</a></p>
  <?php
  if (isset($_GET['source'])) {
    echo '<pre class="block">' . highlight_file(__FILE__, true) . '</pre>';
  } elseif (isset($_GET['version'])) {
    var_dump(phpversion());
  }
  ?>
</body>

</html>
