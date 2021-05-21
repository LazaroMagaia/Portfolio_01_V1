<?php $v->layout("theme");?>

<div class="contact">
    <h1>Fale conosco</h1>

    <form action="<?= url("contacto");?>" method="post" enctype="multipart/form-data">
        <input type="text" name="nome" placeholder="Seu nome">
        <input type="email" name="email" placeholder="Seu email">
        <textarea name="mensagem" id="" cols="30" rows="10"></textarea>
        <button>Enviar Mensagem</button>
    </form>
</div>
<?php $v->start("script"); ?>
<script>
    $(function(){
        $("button").after('<button type="reset">Limpar</button>');
    });
</script>

<?php $v->end(); ?>