<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="<?= url("/theme/style.css");?>">
</head>
<body>
    <nav class="main_nav">
    <?php if($v->section("sidebar"))://se tiver uma section side-bar então eu vou utilizar
        echo $v->section("sidebar");
    else:
    ?>
    <a title="" href="<?= url();?>">Home</a>
    <a title="" href="<?= url("contacto");?>">Contacto</a>
    <a title="" href="<?= url("teste");?>">Teste</a>
    <?php
    endif;?>
    </nav>

    <main class="main_content">
        <?= $v->section("content");?>
    </main>

    <footer class="main_footer">
       <p><?= SITE;?> Todos direitos reservados &copy; 2021</p> 
    </footer>
<!--https://code.jquery.com/jquery-3.6.0.slim.js-->
<script src="<?= url()?>/theme/jquery.js"></script>
<?= $v->section("script")?>
</body>
</html>