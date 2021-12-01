<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <?php foreach($users as $user) { ?>
    <?php echo $user["id"]; ?> -
    <?php echo $user["name"]; ?> -
    <?php echo $user["email"]; ?> -
    <?php echo $user["avatar"]; ?>
    <hr/>
  <?php } ?>
</body>
</html>
