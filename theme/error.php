<?php $v->layout("theme")?>

<div class="error">
    <h2>Ooooooop erro <?= $Error?>!</h2>
</div>
<?php $v->start("sidebar")?>
<!--quando der erro quero colocar o conteudo novo em cima-->
    <a href="<?= url();?>" title="Voltar ao inicio">Voltar a pagina inicial</a>
<?php $v->end();?>