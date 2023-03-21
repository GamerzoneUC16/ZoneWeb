<?php
include 'conn/connect.php';
$idGet = $_GET['id'];
$ProdutoGet = $conn->query("select * from produtos where id = $idGet");
$rowProd = $ProdutoGet->fetch_assoc();
$numRows = $ProdutoGet->num_rows;

 $ImagesGet = $conn->query("select * from images where principal_img = 1");
 $rowImage = $ImagesGet->fetch_assoc();
 $numRowsImg = $ImagesGet->num_rows;


$ListaImg = $conn->query("select * from images where produto_id = $idGet");
$rowListaImg = $ListaImg->fetch_all();
$numRows = $ListaImg->num_rows;

$debito = $rowProd['preco'] + 900;

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">

  <title><?php echo $rowProd['titulo'] ?></title>
</head>
<style>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: calc(100vh - 85px);
    gap: 100px;
  }

  .left-side {
    display: flex;
    flex-direction: column;
    width: 100%;
  }

  .items {
    align-self: flex-end;
  }

  .select-image {
    max-width: 400px;
  }

  .select-image img {
    width: 100%;
  }

  .thumbnails {
    display: flex;
    justify-content: space-evenly;
    max-width: 400px;
    gap: 10px;
  }

  .thumbnail img {
    width: 100%;
    border-radius: 10px;
  }

  .right-side {
    width: 100%;
    display: flex;
    flex-direction: column;
  }
.content{
  max-width: 400px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  background-color: #FEEFDD;
}
.prices{
  display: flex;
  flex-direction: column;
}
  .right-side h1 {
    color: #003459;
  }

  .right-side p {
    color: #0b212d;
    font-size: 14px;
  }

  .price {
    font-size: 16px;
    font-weight: 700;
  }

  .off {
    font-size: 12px;
    color: #ccc;
  }

  .options {
    display: flex;
    gap: 20px;
  }

  .amount {
    display: flex;
    align-items: center;
    gap: 30px;
    background-color: #FEEFDD;
    width: fit-content;
    padding: 10px 10px;
    border-radius: 10px;
  }

  .amount span {
    font-weight: 700;
    font-size: 12px;
  }

  .minus,
  .plus {
    cursor: pointer;
  }

  .button {
    display: inline-block;
    text-decoration: none;
    color: #FEEFDD;
    background-color: #003459;
    width: fit-content;
    padding: 10px 35px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 12;
    font-weight: 700
  }
  @media screen and (max-width: 582px){
    .container{
      flex-wrap: wrap
    }
  }
  .fundofixo{
  background: url('images/Fundo/Fundo.jpg') no-repeat fixed;
  -webkit-background-size: cover;
  background-size: cover;
 }
</style>
<?php include 'menu.php' ?>

<body class="fundofixo">
  <main>
    <section>
      <div class="container">
        <div class="left-side">
          <div class="items">
            <div class="select-image">
              <?php do {?>
              <?php if($rowImage['produto_id'] == $idGet) {?>
                <img src="images/Produtos/<?php echo $rowImage['caminho']; ?>">
              <?php }?>
               <?php } while ($rowImage = $ImagesGet->fetch_assoc())?>
            </div>
            <div class="thumbnails">
              <?php foreach ($rowListaImg as $img) {
                if ($img['3'] = $idGet) { ?>
                  <div class="thumbnail">
                    <img src="images/Produtos/<?php echo $img['1']; ?>">
                  </div>
                <?php } ?>
              <?php } ?>
            </div>
          </div>
        </div>

        <div class="right-side">
          <div class="content">
            <h1><?php echo $rowProd['titulo']; ?></h1>
            <p><?php echo mb_strimwidth($rowProd['descricao'], 0, 100, '.'); ?></p>
            <div class="prices">
            <span class="price"><?php echo "R$" . number_format($rowProd['preco'], 2, ',', '.'); ?></span>
            <span class="off"><?php echo "R$" . number_format($debito, 2, ',', '.'); ?></span>
            </div>
            <div class="options">
              <div class="amount">
                <div class="minus">
                  <span>-</span>
                </div>
                <span>0</span>
                <div class="plus">
                  <span>+</span>
                </div>
              </div>
              <a href="" class="button"><span class="bi bi-cart fs-4"></span>Adicionar ao carinho</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="panel-footer">
    <?php include 'rodape.php' ?>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>