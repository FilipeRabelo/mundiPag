<?php  

  include_once("conexao.php");

  // $dados = $_FILES["chargeback"];
  // var_dump($dados);

  if(!empty($_FILES["chargeback"] ["tmp_name"])) {
    $chargeback = new DOMDocument();
    $chargeback->load($_FILES["chargeback"]["tmp_name"]);
    // var_dump($chargeback);
  }

  $linhas = $chargeback->getElementsByTagName("Row");
  // var_dump($linhas);



  $primeira_linha = true;

  foreach($linhas as $linha){

    if($primeira_linha == false){

      // $id = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
      // echo "id: $id <br>";
      // echo "<hr>";

      $stoneCode = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
      echo "StoneCode: $stoneCode <br>";
      echo "<hr>";

      $nomeFantasia = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
      echo "NomeFantasia: $nomeFantasia <br>";
      echo "<hr>";

      $stoneId = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
      echo "StoneId: $stoneId <br>";
      echo "<hr>";

      $bandeira = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
      echo "Bandeira: $bandeira <br>";
      echo "<hr>";

      $tipoTransacao = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
      echo "TipoTransacao: $tipoTransacao <br>";
      echo "<hr>";

      $d_c  = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
      echo "D/C: $d_c <br>";
      echo "<hr>";

      $dataTransacao = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
      echo "dataTransacao: $dataTransacao <br>";
      echo "<hr>";

      $authorizationCode = $linha->getElementsByTagName("Data")->item(7)->nodeValue;
      echo "AuthorizationCode: $authorizationCode <br>";
      echo "<hr>";

      $valorTotalTransacao = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
      echo "ValorTotalTransacao: $valorTotalTransacao <br>";
      echo "<hr>";

      $numeroDeParcelas = $linha->getElementsByTagName("Data")->item(9)->nodeValue;
      echo "NumeroDeParcelas: $numeroDeParcelas <br>";
      echo "<hr>";

      $valorParcela = $linha->getElementsByTagName("Data")->item(10)->nodeValue;
      echo "ValorParcela: $valorParcela <br>";
      echo "<hr>";

      $parcela = $linha->getElementsByTagName("Data")->item(11)->nodeValue;
      echo "Parcela: $parcela <br>";
      echo "<hr>";

      $panMascarado = $linha->getElementsByTagName("Data")->item(12)->nodeValue;
      echo "PanMascarado: $panMascarado <br>";
      echo "<hr>";

      $dataCBK = $linha->getElementsByTagName("Data")->item(13)->nodeValue;
      echo "DataCBK: $dataCBK <br>";
      echo "<hr>";

      $tipoChargeback = $linha->getElementsByTagName("Data")->item(14)->nodeValue;
      echo "TipoChargeback: $tipoChargeback <br>";
      echo "<hr>";

      $arn = $linha->getElementsByTagName("Data")->item(15)->nodeValue;
      echo "ARN: $arn <br>";
      echo "<hr>";

      $mensagemEmissor = $linha->getElementsByTagName("Data")->item(16)->nodeValue;
      echo "MensagemEmissor: $mensagemEmissor <br>";
      echo "<hr>";

      $reasonCode = $linha->getElementsByTagName("Data")->item(17)->nodeValue;
      echo "ReasonCode: $reasonCode <br>";
      echo "<hr>";

      $posEntryMode = $linha->getElementsByTagName("Data")->item(18)->nodeValue;
      echo "PosEntryMode: $posEntryMode <br>";
      echo "<hr>";

      $emissor = $linha->getElementsByTagName("Data")->item(19)->nodeValue;
      echo "Emissor: $emissor <br>";
      echo "<hr>";

      $comercio = $linha->getElementsByTagName("Data")->item(20)->nodeValue;
      echo "Comercio: $comercio <br>";
      echo "<hr>";

      $status = $linha->getElementsByTagName("Data")->item(21)->nodeValue;
      echo "Status: $status <br>";
      echo "<hr>";

      $grupo = $linha->getElementsByTagName("Data")->item(22)->nodeValue;
      echo "Grupo: $grupo <br>";
      echo "<hr>";

      $descrição = $linha->getElementsByTagName("Data")->item(23)->nodeValue;
      echo "Descrição: $descrição <br>";
      echo "<hr>";

      $itk = $linha->getElementsByTagName("Data")->item(24)->nodeValue;
      echo "ITK: $itk <br>";
      echo "<hr>";

      $valordoChargeback = $linha->getElementsByTagName("Data")->item(25)->nodeValue;
      echo "Valor do Chargeback: $valordoChargeback <br>";
      echo "<hr>";

      $pagoOuNao = $linha->getElementsByTagName("Data")->item(26)->nodeValue;
      echo "Pago Ou Nao: $pagoOuNao <br>";
      echo "<hr>";

      $mes = $linha->getElementsByTagName("Data")->item(27)->nodeValue;
      echo "Mês: $mes <br>";
      echo "<hr>";

      //Inserir o usuario no BD
      $result_chargeBack = "INSERT INTO chargeback (stoneCode, nomeFantasia, stoneId, bandeira, tipoTransacao, d_c,
      dataTransacao, authorizationCode, valorTotalTransacao, numeroDeParcelas, valorParcela, parcela, panMascarado, dataCBK,
      tipoChargeback, arn, mensagemEmissor, reasonCode, posEntryMode, emissor, comercio, status, grupo, descrição, itk, valordoChargeback, pagoOuNao, mes ) 
      VALUES ('$stoneCode', '$nomeFantasia', '$stoneId', '$bandeira', '$tipoTransacao', '$d_c', '$dataTransacao',
      '$authorizationCode', '$valorTotalTransacao', '$numeroDeParcelas', '$valorParcela', '$parcela', '$panMascarado', '$dataCBK',
      '$tipoChargeback', '$arn', '$mensagemEmissor', '$reasonCode', '$posEntryMode', '$emissor', '$comercio', '$status', '$grupo', '$descrição',
      '$itk', '$valordoChargeback', '$pagoOuNao', '$mes' )";

      $resultado_chargeBack = mysqli_query($conn, $result_chargeBack);

    }

    $primeira_linha == false;

  }

?>