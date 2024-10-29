<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIMOCELL.STORE</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('Produto 5.jpg');
            background-size: cover;
            background-position: center;
        }
        header {
            background: rgba(51, 51, 51, 0.8);
            color: #28a745;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .product {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 30px 0;
            padding: 15px;
            text-align: center;
            transition: transform 0.2s;
        }
        .product:hover {
            transform: scale(1.02);
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.3s;
        }
        .product img:hover {
            transform: scale(1.05);
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        button:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
        .footer {
            text-align: center;
            padding: 10px;
            background: #333;
            color: #28a745;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .social-links {
            margin: 20px 0;
            text-align: center;
        }
        .social-links a {
            color: #28a745;
            text-decoration: none;
            margin: 0 15px;
            font-size: 24px;
        }
        .social-links a:hover {
            color: #218838;
        }
        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Bem-vindo à LimoCell! Sua Loja De Confiança!</h1>
</header>

<div class="container">
    <h2>Produtos em Destaque</h2>

    <div class="product">
        <h3>REDMI 14C</h3>
        <img src="Produto 1 (1).jpeg" alt="REDMI 14C">
        <p>O Redmi 14C é um smartphone da Xiaomi que oferece excelente custo-benefício. 📱</p>
        <p>Preço: R$ 999,90</p>
        <button onclick="window.location.href='https://wa.me/5521995414133?text=Oi,%20gostaria%20de%20comprar%20o%20REDMI%2014C'">Comprar</button>
    </div>

    <div class="product">
        <h3>PARTY BOX 120</h3>
        <img src="Produto 4 (1).jpg" alt="Party Box 120">
        <p>JBL Party box club 120, som poderoso com show de luzes futurista.</p>
        <p>Preço: R$ 2.199,00</p>
        <button onclick="window.location.href='https://wa.me/5521995414133?text=Oi,%20gostaria%20de%20comprar%20o%20Party%20Box%20120'">Comprar</button>
    </div>

    <div class="product">
        <h3>REDMI NOTE 13 PLUS 5G</h3>
        <img src="Produto 2 (1).jpg" alt="Redmi Note 13 Pro Plus 5G">
        <p>Aparelho insano chamado Redmi Note 13 Pro Plus 5G, com câmera de 200MP.</p>
        <p>Preço: R$ 1.349,00</p>
        <button onclick="window.location.href='https://wa.me/5521995414133?text=Oi,%20gostaria%20de%20comprar%20o%20Redmi%20Note%2013%20Pro%20Plus%205G'">Comprar</button>
    </div>

    <div class="product">
        <h3>IPHONE 14 PLUS 128GB</h3>
        <img src="Produto 6 (4).jpeg" alt="Iphone 14 Plus 128GB">
        <p>Descubra o iPhone 14 Plus com tela Super Retina XDR de 6,7” 🌟, câmeras duplas de 12 MP 📸 e chip A15 Bionic ⚡. Com 128 GB, você terá espaço de sobra! ❤️</p>
        <p>Preço: R$ 3.799,00</p>
        <button onclick="window.location.href='https://wa.me/5521995414133?text=Oi,%20gostaria%20de%20comprar%20o%20Iphone%2014%20Plus%20128GB'">Comprar</button>
    </div>

    <div class="product">
        <h3>IPHONE 13 128GB</h3>
        <img src="Produto 6 (2).jpeg" alt="IPHONE 13 128GB">
        <p>Conheça o iPhone 13 com tela Super Retina XDR de 6,1” 🌈 e câmeras duplas de 12 MP 📸. Um smartphone que combina estilo e inovação.</p>
        <p>Preço: R$ 2.599,00</p>
        <button onclick="window.location.href='https://wa.me/5521995414133?text=Oi,%20gostaria%20de%20comprar%20o%20Iphone%2013%20128GB'">Comprar</button>
    </div>

    <div class="product">
        <h3>IPHONE 11 64GB</h3>
        <img src="Produto 6 (5).jpeg" alt="IPHONE 11 64GB">
        <p>Descubra o iPhone 11 com tela Liquid Retina de 6,1” 🌟 e câmeras duplas de 12 MP 📸. O smartphone ideal para quem busca qualidade!</p>
        <p>Preço: R$ 1.499,00</p>
        <button onclick="window.location.href='https://wa.me/5521995414133?text=Oi,%20gostaria%20de%20comprar%20o%20Iphone%2011%2064GB'">Comprar</button>
    </div>

    <div class="product">
        <h3>IPHONE 12 128GB</h3>
        <img src="Produto 6 (3).jpeg" alt="Iphone 12 128GB">
        <p>Descubra o iPhone 12 com tela Super Retina XDR de 6,1” 🌟, câmeras duplas de 12 MP 📸 e chip A14 Bionic ⚡. O smartphone perfeito para quem quer o melhor em tecnologia!</p>
        <p>Preço: R$ 2.399,00</p>
        <button onclick="window.location.href='https://wa.me/5521995414133?text=Oi,%20gostaria%20de%20comprar%20o%20Iphone%2012%20128GB'">Comprar</button>
    </div>

    <div class="social-links">
        <h3>Nos siga nas redes sociais!</h3>
        <a href="https://www.instagram.com/limocell.store/profilecard/?igsh=MXE5cnhxbWJ2MzI3Mg==" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.facebook.com/profile.php?id=61565022367456&mibextid=ZbWKwL" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
    </div>

</div>

<footer class="footer">
    <p>© 2024 Limocell Store. Todos os direitos reservados.</p>
</footer