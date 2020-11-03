<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo self::titulo; ?></title>
    <link href="http://localhost/PHP/projeto1/Views/pages/css/header.css" rel="stylesheet" type="text/css">
    <link href="fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
    <link href="http://localhost/PHP/projeto1/Views/pages/css/contato.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Pimenta's Company</h2>
            </div>
            <nav class="menu">
                <a href="http://localhost/PHP/projeto1/home">Home</a>
                <a href="http://localhost/PHP/projeto1/loja">Loja</a>
                <a id="contato" href="http://localhost/PHP/projeto1/contato">Contato</a>
            </nav>
        </div> 
    </header>
    <section class="section-contato">
        <div class="linha-contato">
            <div class="center">
                <h2>Entre em contato com a gente!</h2>
            </div><!--center-->
        </div><!--linha-contato-->
        <section class="contato-online">
            <div class="center">
                <div class="w50 email">
                    <h2>E-mail</h2>
                    <form method="POST">
                        <input type="text" name="nome" placeholder="Seu nome">
                        <input type="email" name="email" placeholder="Seu E-mail">
                        <textarea name="mensagem" placeholder="Sua mensagem"></textarea>
                        <input type="submit" name="acao" value="Enviar">
                    </form>
                </div><!--email-->
                <div class="w50 redes-sociais">
                    <h2>Siga a gente nas redes sociais!</h2>
                    <a href=""><i class="fab fa-twitter"></i>Twitter</a>
                    <a href=""><i class="fab fa-facebook-f"></i>Facebook</a>
                    <a href=""><i class="fab fa-instagram"></i>Instagram</a>
                    <a href=""><i class="fab fa-whatsapp"></i>Whatsapp</a>
                    <a href=""><i class="fas fa-phone-alt"></i>Telefone</a>
                </div><!--redes-sociais-->
            </div><!--center-->
        </section><!--contato-online-->
    </section><!--section-contato-->
    <section class="loja-fisica">
        <div class="center">
            <div class="linha-loja-fisica">
                <h2>Ou vá até nossa unidade física</h2>
            </div><!--linha-loja-fisica-->
        </div><!--center-->
        <div class="parallax">
            <div class="parallax-layer"></div>
            <div class="center">
                <h2>Conheça nossa loja física!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut facilisis urna at nulla hendrerit, et luctus lorem commodo. Proin ornare venenatis egestas. Phasellus lacinia non lectus nec venenatis. Praesent blandit blandit quam, quis hendrerit leo sodales a. In eget fermentum metus. Duis pharetra mi vitae aliquet maximus. Pellentesque ultrices tincidunt pulvinar.

                    Duis ut eleifend justo. Sed in tempus ante, fringilla vestibulum velit. Aliquam rutrum libero non nisl sagittis molestie. Pellentesque egestas non sapien vitae rutrum. Donec feugiat, nulla id malesuada tincidunt, ex enim feugiat justo, sed commodo risus magna a nisi. Donec volutpat diam non urna ultricies, id egestas sem dictum. Nullam diam tellus, gravida eu viverra ac, egestas dignissim nunc. Proin eros sem, faucibus ac elit vel, volutpat iaculis purus. Duis arcu ipsum, posuere sit amet ipsum sed, pulvinar bibendum nibh. Morbi venenatis lectus at ultrices ullamcorper. Aenean eleifend purus ut odio viverra tempor. Phasellus at rutrum orci, eget vulputate nunc. Nunc venenatis eros at sollicitudin accumsan.</p>
            </div><!--center-->
        </div><!--parallax-->
    </section><!--loja-fisica-->
    <footer class="footer">
        <h2>Developed by Alex Davi</h2>
    </footer>
    <script src="http://localhost/PHP/projeto1/Views/pages/js/jquery.js"></script>
    <script src="http://localhost/PHP/projeto1/Views/pages/js/geral.js"></script>
</body>
</html>