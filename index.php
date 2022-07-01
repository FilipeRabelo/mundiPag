<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>MundiPag</title>
</head>
<body>

  <h1>UpLoad Excel MundiPag</h1>

  <form action="processa.php" method="POST" enctype="multipart/form-data">
    <label for="">Arquivo</label>
    <input type="file" name="chargeback">
    <br> <br>
    <input type="submit" value="Enviar">
  </form>
  
</body>
</html>