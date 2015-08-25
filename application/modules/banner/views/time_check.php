<?PHP 

if( $_POST['banner_from'] == '' || $_POST['banner_end_date'] == '' ||  !(date('m/d/Y',  strtotime($_POST['banner_from'])) < date('m/d/Y',  strtotime($_POST['banner_end_date']))) ){
    $feedback ="Invalid date";
    $time = $test = 0;
    
}
else{
    
    $time = check_date($records ,$_POST['banner_from'],$_POST['banner_end_date']);    
    $feedback = ($time == 1)? "Your Banner is granted" : " Banner Bord is unavailable for your Time";
    $test = 1;
}
?>

    <div><?php echo $feedback; ?></div>
   <?php if( $time){
      ?>
    <div class="form-actions" id="save_banner">
        <input id="save" type="submit" name="save" class="btn btn-primary" value="<?php echo lang('banner_action_create'); ?>"  />
        <?php echo lang('bf_or'); ?>
        <?php echo anchor(SITE_AREA . '/content/banner', lang('banner_cancel'), 'class="btn btn-warning"'); ?>

    </div>    
    <?php       
   }
    else{
        echo "Plz try for another date!";
    }
   ?>
