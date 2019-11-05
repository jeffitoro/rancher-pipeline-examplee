
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pipeline POC</title>
</head>
<body>
  <h1>Pipeline POC</h1>
  <h5>This is host: <i><?php echo getenv('HOSTNAME'); ?></i></h5>
  <h5>Last commit: <i><?php echo getenv('GIT_COMMIT'); ?></i></h5>
</body>
</html>