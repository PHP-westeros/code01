

<div id="container">
    <h1><?php echo $h1_content; ?></h1>

    <div id="body">
        <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
        <p>
            <?php if (isset($array_session)) { ?>
                <?php echo $array_session; ?>
            <?php } ?>
        </p>
        
    

        <p><a href="<?php echo base_url(); ?>tables/edit/configs/145">Editar NCM Bebidas</a></p>
        <p>&nbsp;</p>
        <p><a href="<?php echo base_url(); ?>tables/show">Show</a></p>
    </div>

</div>