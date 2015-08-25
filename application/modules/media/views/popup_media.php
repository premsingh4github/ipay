<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
 <script type="text/javascript" src="<?php echo Template::theme_url('js/jquery-1.10.1.min.js'); ?>"></script>  
 <script type="text/javascript" src="<?php echo Template::theme_url('js/admin_custom.js'); ?>"></script> 
 <script type="style" src="<?php echo Template::theme_url('js/admin_custom.js'); ?>"></script>
 <link href="<?php echo Template::theme_url('css/admin_custom.css'); ?>" type="text/css" rel="stylesheet" />
 
<table class="table table-striped">
                                                    
<?php
if( ! empty( $media_list ) ) foreach($media_list as $ml){
    
    $extension  = splitExtension( $ml -> file );
    
    if(in_array($extension[1], array('docx', 'doc', 'pdf')) ){
        ?>
        <tr>
            <td class="span3"><?php echo $extension[1];?></td>
            <td class="span7"><?php echo '../' . $ml -> file; ?></td>
            <td class="span2"><a href="#insert" onclick="return add_links('<?php echo $ml -> file; ?>','file')" class="btn btn-primary">FILE</a></td>
        </tr>
        <?php
    } else {
    
    ?>
    <tr>
        <td class="span3"><img src="<?php echo base_url() . 'uploads/thumbs/' . $ml -> file; ?>" width="100" title="<?php echo $ml -> title; ?>" /></td>
        <td class="span7"><?php echo '..thumbs/' . $ml -> file; ?></td>
        <td class="span2">
           <a href="#insert" onclick="return add_links('<?php echo $ml -> file; ?>','file')" class="btn btn-primary">FILE</a>
            <a href="#insert" onclick="return add_links('<?php echo $ml -> file; ?>','thumb')" class="btn btn-primary">THUMB</a></td>
    </tr>
<?php
    }
}
?>
</table>