<?php
  ob_start();
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopUniVerso</title>
    <link rel="shortcut icon" href="./img/icon.ico" type="image/png+xml">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/carrinho.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="preload" href="./assets/images/hero-banner.png" as="image">

</head>

<body id="top">

    <!-- 
        - #HEADER
    -->

    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="/scr/Index.html" class="logo">
                <img src="./img/logoMarca.png" width="160" height="50" alt="Footcap logo">
            </a>
            <a href="/scr/Index.html">
                <i class="fa-solid fa-house" style="color: #000000;"></i>
            </a>

        </div>

        <section class="departamento">
        </section>

    </header>
</body>
    <?php
    //ARRAY MULTIDIMENCIONAL
    $itens = array([
      'image' => 'img-hardware/memoriaXpg.png',
      'nome' => 'Memória DDR4 XPG Spectrix D50, 16GB (2x8GB), 3600Mhz, 3200Mhz, RGB, Gray-ST50',
      'preco' => 419.99,
      'desconto' => null,
      'badge' => null,
      ],
      [
      'image' => 'img-hardware/PlacaMãeAorus.png',
      'nome' => 'Placa Mãe Gigabyte B660 Aorus Elite, Intel, ATX, DDR4 - B660 AORUS ELITE DDR4',
      'preco' => 1299.99,
      'desconto' => 1764.69,
      'badge' => '-27%',
      ],
      [
        'image' => 'img-hardware/PlacaMãeAorus.png',
        'nome' => 'Placa Mãe Gigabyte B660 Aorus Elite, Intel, ATX, DDR4 - B660 AORUS ELITE DDR4',
        'preco' => 1299.99,
        'desconto' => 1764.69,
        'badge' => '-27%',
        ],
        [
      'image' => 'img-hardware/PlacaMãeAorus.png',
      'nome' => 'Placa Mãe Gigabyte B660 Aorus Elite, Intel, ATX, DDR4 - B660 AORUS ELITE DDR4',
      'preco' => 1299.99,
      'desconto' => 1764.69,
      'badge' => '-27%',
      ],
      [
        'image' => 'img-hardware/PlacaMãeAorus.png',
        'nome' => 'Placa Mãe Gigabyte B660 Aorus Elite, Intel, ATX, DDR4 - B660 AORUS ELITE DDR4',
        'preco' => 1299.99,
        'desconto' => 1764.69,
        'badge' => '-27%',
        ],
        [
            'image' => 'img-hardware/PlacaMãeAorus.png',
            'nome' => 'Placa Mãe Gigabyte B660 Aorus Elite, Intel, ATX, DDR4 - B660 AORUS ELITE DDR4',
            'preco' => 1299.99,
            'desconto' => 1764.69,
            'badge' => '-27%',
            ],
      [
      'image' => 'img-hardware/fonteSuperFlower.png',
      'nome' => 'Fonte Super Flower LEADEX III 750W, 80 Plus Gold, PFC Ativo, Full Modular',
      'preco' => 599.99,
      'desconto' => null,
      'badge' => 'Novo',
      ],
      [
      'image' => 'img-hardware/ssdSataWD.png',
      'nome' => 'SSD 240 GB WD Green, SATA, Leitura: 545MB/s e Gravação: 465MB/s',
      'preco' => 129.75,
      'desconto' => null,
      'badge' => null,
      ],
      [
      'image' => 'img-hardware/pcGamer.png',
      'nome' => 'PC Gamer Enifler Completo, Intel Core I7, 16GB, GTX 1050TI 4GB, SSD 480GB, Windows 10 + Monitor 21.5 + Kit Gamer Teclado, Mouse E Headset, Hayom',
      'preco' => 4095.75,
      'desconto' => 4710.11,
      'badge' => '-15%',
      ],
      [
      'image' => 'img-hardware/Threadripper.png',
      'nome' => 'Processador AMD Ryzen Threadripper 3970X 3.7GHz (4.5GHz Max Turbo) 32-Core 64-Thread, 144MB sTRX4',
      'preco' => 11234.65,
      'desconto' => null,
      'badge' => '-33%',
      ],
      [
      'image' => 'img-hardware/WaterForce.png',
      'nome' => 'Water Cooler Gigabyte Aorus WATERFORCE X 360 AIO, ARGB, 360mm',
      'preco' => 1499.90,
      'desconto' => null,
      'badge' => null,
       ],
    );
    
    foreach ($itens as $key => $value) {
      ?>
      <!-- <div class="produto">
          <img src="<?php echo $value['image'] ?>" />
          <a href="?adicionar=<?php echo $key ?>">Add ao carrinho</a>
          <p><?php echo $value['nome'] ?></p>
          <p2>R$ <?php echo $value['preco'] ?></p2>
      </div> -->

      <section class="section product">
        <div class="container">
          <li class="product-item">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="<?php echo $value['image'] ?>" width="312" height="350" loading="lazy"
                    alt="Placa Mãe B660 Aorus atx DDR4" class="image-contain">

                    <div class="card-badge">-27%</div>

                  <ul class="card-action-list">

                  <li class="card-action-item">
                                    <form method="post" action="?adicionar=<?php echo $key ?>">
                                        <button type="submit" class="card-action-btn" aria-labelledby="card-label-<?php echo $key ?>">
                                            <ion-icon name="cart-outline"></ion-icon>
                                        </button>
                                    </form>
                                    <div class="card-action-tooltip" id="card-label-<?php echo $key ?>">Adicionar ao Carrinho</div>
                                </li>
                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Adicionar aos Favoritos</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Pré-Visualização</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Comparar</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                  <!-- <p><?php echo $value['nome'] ?></p> -->
                    <a> <?php echo $value['nome'] ?></a>
                  </h3>

                  <p2>R$ <?php echo $value['preco'] ?></p2>

                </div>

              </div>
            </li>
        </div>
    </div>
    </section>

   <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <?php
  }
  ?>
  
  <?php
    // Adicionar ao carrinho
    if (isset($_GET['adicionar'])) {
        $idProduto = (int)$_GET['adicionar'];
        if (isset($itens[$idProduto])) {
            if (isset($_SESSION['carrinho'][$idProduto])) {
                $_SESSION['carrinho'][$idProduto]['quantidade']++;
            } else {
                $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $itens[$idProduto]['nome'], 'preco' => $itens[$idProduto]['preco']);
            }
            echo '<script>alert("O item foi adicionado ao carrinho.");</script>';
            header("Location: carrinho.php");
            exit();
        }
    }
    ?>
    
  <div class="carrinho">  
    <div class="ti-carrinho">
      <h2>Nova compra</h2>
      <p>
        <?php 
        //QUANTIDADE DE ITENS NO CARRINHO
           $qt_itens = 0;
                 foreach ($_SESSION['carrinho'] as $key => $value) {
                    $qt_itens += $value['quantidade'];
                 }
                echo $qt_itens; 
        ?>
       itens no carrinho<p>
    </div>
      <div class="produtos">
        <?php   
          //LISTANDO OS ITENS ADICIONADOS
          foreach ($_SESSION['carrinho'] as $key => $value) {
        ?> 
          <div class="itens">
            <a href="?remover=<?php echo $key ?>"><img src="img-carrinho/lixo.png"/></a>
                <div class="nome_preco">
                  <h2><?php echo $value['nome']?></h2>

                  <?php $preco = $value['preco']*$value['quantidade']; ?>
                  <p>R$ <?php echo number_format($preco,2,',','.'); ?></p>
                  
                </div>
              <p2><?php echo $value['quantidade']?></p2>
              <hr>
          </div>
        <?php
          }
        ?> 

<?php
// REMOVER DO CARRINHO
if (isset($_GET['remover'])) {
    $idProduto = (int)$_GET['remover'];
    if (isset($_SESSION['carrinho'][$idProduto])) {
        unset($_SESSION['carrinho'][$idProduto]);
    }

    header("Location: carrinho.php");
    exit();
}

// ESVAZIAR CARRINHO
if (isset($_GET['finalizar'])) {
    unset($_SESSION['carrinho']);
}
?>

  
<div class="total">
    <h2>Subtotal<p>R$
            <?php
            // SUBTOTAL DA COMPRA
            $sub = 0;
            if (isset($_SESSION['carrinho'])) {
                foreach ($_SESSION['carrinho'] as $key => $value) {
                    $sub += $value['preco'] * $value['quantidade'];
                }
            }
            echo number_format($sub, 2, ',', '.');
            ?></p></h2>

    <h2>Total<p1>R$
            <?php
            // TOTAL DA COMPRA
            $total = 0;
            if (isset($_SESSION['carrinho'])) {
                foreach ($_SESSION['carrinho'] as $key => $value) {
                    $total += $value['preco'] * $value['quantidade'];
                }
            }
            echo number_format($total, 2, ',', '.');
            ?></p1></h2>

    <a href="?finalizar"><button class="Finalizar">Finalizar</button></a>
</div>
   <!-- 
        - #FOOTER
    -->

    <footer class="underFooter">

        <div class="footer-top section">
            <div class="container">
                <div class="footer-brand">
                    <a href="#" class="logo">
                        <img src="./img/logoMarca.png" width="160" height="50" alt="Footcap logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    &copy; 2023 <a href="#" class="copyright-link">ShopUniVerso</a>
                    . Todos os direitos reservados. ShopUniVerso é o seu destino confiável para as últimas novidades em
                    hardware.
                    Oferecemos uma ampla gama de produtos, desde componentes de computador até dispositivos eletrônicos
                    de última geração.
                    Este site e seu conteúdo são protegidos por leis de direitos autorais e marcas registradas. Nenhuma
                    parte deste site pode ser reproduzida,
                    armazenada em um sistema de recuperação ou transmitida de qualquer forma ou por qualquer meio,
                    eletrônico, mecânico, fotocópia, gravação ou outro,
                    sem permissão prévia por escrito da ShopUniVerso. Todas as marcas registradas são propriedade de
                    seus respectivos proprietários.
                </p>

            </div>
        </div>
    </footer>
  </body>
</html>
