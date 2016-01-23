

<div id="container">
    
    <h1><?php echo $h1_content; ?></h1>

    <?php if (isset($first)) { ?>
        <h1><?php echo $first; ?></h1>
    <?php } ?>

    <?php if (isset($second)) { ?>
        <h1><?php echo $second; ?></h1>
    <?php } ?>
        
    <?php if (isset($isLogged)) { ?>
        <h1><?php echo $isLogged; ?></h1>
    <?php } ?>

    <div id="body">
        <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

        <p><h2 style="color:blue;">Editar Tabela <?php echo $first; ?></h2></p>
        <p>
            <?php if (isset($array_session)) { ?>
                <?php echo $array_session; ?>
            <?php } ?>
        </p>
    
        <p><a href="<?php echo base_url(); ?>tables/show">Show</a></p>
        <p>&nbsp;</p>
        <p><a href="<?php echo base_url(); ?>tables/clean-session">Limpar sessão</a></p>
    </div>
        
</div>