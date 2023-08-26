<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login facebook</title>
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

    <section class="main">
        <div class="all">
            <div class="align">
        <div class="sl">
            <h1>facebook</h1>
            <h2>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h2>
            </div>
            <div>
                <div class="">
            <form action="" class="form">
                <div>
                <input type="email" name="email" id="email" placeholder="Email ou telefone">
                </div>
                <div>
                <input type="password" name="pass" id="pass" placeholder="Senha">
                </div>
                <input type="submit" value="Entrar">
                <a href="#"><p>Esqueceu seu senha?</p></a>
                <input type="submit" value="Criar nova conta">
            </form>
            <h4><span>Criar uma Página</span> para uma celebridade, uma marca ou uma <br> empresa.</h4>
            </div>
            </div>
        </div>  
    </section>



    <section class="linguas">
        <div class="center1">
            <?php $ling = array("Português","Inglês","Espanhol","Francês","Alemão","Italiano","Japonês","Chinês","Russo","Árabe","Hindi","Coreano","Holandês","Sueco","Turco"
); 
            foreach($ling as $lingv){
?>
            <a href="#" class="sl-lin"><?php echo $lingv ?></a>
            <?php } ?>
            <i class="bi bi-plus edd"></i>
        </div><!--center-->
        <div class="center">
            <?php $palavrasFacebook = array(
    "rede social", "amigos", "compartilhar", "curtir", "publicações",
    "perfil", "notificações", "mensagens", "fotos", "vídeos",
    "postagens", "feed", "amizade", "seguidores", "página",
    "grupos", "evento", "marcar", "timeline", "comentários",
    "emojis", "reagir", "privacidade", "configurações", "perfil público",
    "bloquear"
);
            foreach($palavrasFacebook as $txt){ ?>
            <a href="#" type="teste"><?php print $txt ?></a>
        <?php } ?> 
        </div><!--center-->
    </section><!--linguas-->
    <script src="js/script.js"></script>
</body>
</html>