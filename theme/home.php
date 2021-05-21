<?php $v->layout("theme");?>
<div class="users">
<?php
    if($users):
        foreach( $users as $user):
?>
    <article class="users_user">
        <h3><?php echo $user->first_name," ",$user->last_name;?></h3>
    </article>
<?php
    endforeach;
else:
?>
<h4>Não existe usuário cadastrados</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima</p>
<?php
    endif;
?>
</div>