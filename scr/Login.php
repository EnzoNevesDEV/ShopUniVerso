<!DOCTYPE html>
<html>
<head>
    <title>Produtos à Venda</title>
</head>
<body>
    <h1>Produtos à Venda</h1>

    <?php
    // Simulação de uma lista de produtos (normalmente, isso seria recuperado de um banco de dados)
    $products = [
        [
            'nome' => 'Produto 1',
            'descricao' => 'Esta é a descrição do Produto 1.',
            'preco' => 19.99,
        ],
        [
            'nome' => 'Produto 2',
            'descricao' => 'Esta é a descrição do Produto 2.',
            'preco' => 29.99,
        ],
        [
            'nome' => 'Produto 3',
            'descricao' => 'Esta é a descrição do Produto 3.',
            'preco' => 39.99,
        ],
    ];

    // Loop através dos produtos e exibi-los
    foreach ($products as $product) {
        echo '<div class="product">';
        echo '<h2>' . $product['nome'] . '</h2>';
        echo '<p>' . $product['descricao'] . '</p>';
        echo '<p>Preço: R$ ' . number_format($product['preco'], 2) . '</p>';
        echo '<button>Adicionar ao Carrinho</button>';
        echo '</div>';
    }
    ?>

</body>
</html>