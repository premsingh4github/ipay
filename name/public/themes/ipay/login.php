<?php echo theme_view('_header'); ?>




    <?php
        echo isset($content) ? $content : Template::content();
    ?>

<?php echo theme_view('_footer', array('show' => false)); ?>