<!doctype html>
<html lang="pt-br">
  <head>
    <title>Aula 16/04</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php
  if(isset($_POST["button"]) == "POST"){

    $texto = $_POST['t_texto'];
    $funcao = $_POST['r_funcao'];
    $tamanho = $_POST['n_tamanho'];
    $inicio = $_POST['t_inicio'];
    $troca = $_POST['t_troca'];
    $novo = $_POST['t_novo'];
    $busca = $_POST['t_busca'];
    $padTam = $_POST['t_padTamanho'];
    $caracter = $_POST['t_caracter'];
    $lado = $_POST['s_lado'];
    $quant = $_POST['t_quant'];

    if(empty($texto)){
      $erro = "Texto não informado";
    }else if(empty($funcao)){
      $erro = "Função não escolhida";
    }
      switch($funcao){
        case "strtoupper":
          $resultado = strtoupper($texto);
        break;
        case "strtolower":
          $resultado = strtolower($texto);
        break;
        case "substr":
          if(!empty($inicio) && !empty($tamanho)){
            $resultado = substr($texto, $inicio, $tamanho);
          } else{
            $erro = "Inicio ou Tamanho não foi preenchido";
          }
        break;
        case "strlen":
          $resultado = strlen($texto);
        break;
        case "str_replace":
          if(!empty($novo) || !empty($troca)){
            $resultado = str_replace($troca,$novo,$texto);
          }else{
            $erro = "Trocar ou Nova Palavra não foi preenchido";
          }
        break;
        case "strpos":
          if(!empty($busca)){
            $resultado = strpos($texto,$busca);
          }else{
            $erro = "Palavra de busca não foi preenchida";
          }
        break;
        case "str_pad":
          if(!empty($padTam) || !empty($caracter) || !empty($lado)){
            $resultado = str_pad($texto,$padTam,$caracter,$lado);
          }else{
            $erro = "Um dos dados não foi preenchido";
          }
        break;
        case "str_repeat":
          if(!empty($quant)){
            $resultado = str_repeat($texto,$quant);
          }else{
            $erro = "Preencha a quantidade";
          }
        break;
      }
    
    
  }
  ?>


  <form action="index.php" method="post" style="width: fit-content; margin:0 auto;">
    <p>Informe a palavra ou texto</p>
    <input type="text" name="t_texto" placeholder="Digite aqui...">
    <br><p>Selecione a função desejada:</p>
    <ul class="form-check" style="list-style-type: none;">
      <li><input class="form-check-input" name="r_funcao" type="radio" value="strtoupper">strtoupper</li>
      <li><input class="form-check-input" name="r_funcao" type="radio" value="strtolower">strtolower</li>
      <li><input class="form-check-input" name="r_funcao" type="radio" value="substr" style="margin-right: 10px;">substr:
      <input type="number" name="t_inicio" placeholder="Posição" style="width: 100px;">
      <input type="number" name="n_tamanho" placeholder="Tamanho" style="width: 100px;"></li>
      <li><input class="form-check-input" name="r_funcao" type="radio" value="strlen">strlen</li>
      <li><input class="form-check-input" name="r_funcao" type="radio" value="str_replace">str_replace
      <input type="text" name="t_troca" placeholder="Trocar" style="width: 100px;"> por
      <input type="text" name="t_novo" placeholder="Nova Palavra" style="width: 100px;"></li>
      <li><input class="form-check-input" name="r_funcao" type="radio" value="strpos">strpos
      <input type="text" name="t_busca" placeholder="Buscar Palavra" style="width: 100px;"></li>
      <li><input class="form-check-input" name="r_funcao" type="radio" value="str_pad">str_pad
      <input type="text" name="t_padTamanho" placeholder="Tamanho" style="width: 100px;">
      <input type="text" name="t_caracter" placeholder="Caracter" style="width: 100px;">
      <select name="s_lado" id="">
        <option value="0">Esquerda</option>
        <option value="1">Direita</option>
        <option value="2">Ambos</option>
      </select></li>
      <li><input class="form-check-input" name="r_funcao" type="radio" value="str_repeat">str_repeat
      <input type="text" name="t_quant" placeholder="Quantidade" style="width: 100px;"></li>
      
      
    </ul>
    <input class="btn btn-primary" type="submit" name="button">
    <h3><?php echo "Resultado: $resultado";?></h3>
    <p style="color: red;"><?php echo $erro;?></p>
  </form>

  

  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>