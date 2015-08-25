<!-- Main Header  -->

<div class="main-header affix" id="jump-page">
    <div class="container ">

        <!-- logo  -->
        <div id="logo">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>themes/ipay/images/logo-ipay.png" alt="iPay" class="img-responsive"></a>
        </div>
        <div class="page-navigator clearfix"><?php echo $records->name; ?></div>

        <div id="sb-search" class="sb-search" style="display: none;">
            <form>
                <input class="sb-search-input" placeholder="Search" type="text" name="search" id="search">
                <input class="sb-search-submit" type="submit" value="">
                <span class="sb-icon-search"></span>
            </form>
        </div>
        <!-- send money -->

        <div class="main-send-money-now">
            <a href="#" class="btn-send-money">Send Money Now!</a>
        </div> 

    </div>

</div>
             
            <?php echo Modules::run('menu/index');  ?>
            
<!-- header -->

<!-- Banner -->
<?php
if(!($menu_P = $this->menu_model->find_by('id',$this->uri->segment(4)))){
    echo Modules::run('department/banner');  ?>
    <!-- On-counter and online -tabs -->
    <?php echo Modules::run('tab/index');  ?>
    <!-- Our Rate-->

    <?php  echo Modules::run('forex/index');  
    
} 
else if($page = $this->pages_model->find_by('id',$menu_P->url)){
    
    if($page->slug == 'contact-us'){
       echo Modules::run('department/contact');
//       echo $menu_P->url ; 
    }
    else if($page->slug == 'partner'){
//        echo Modules::run('department/contact');
    }
    else{
        ?>
     <div class="contact newsection">
            <div class="container"> 
                <div class="row">
<!--                    <div class="col-md-6 col-sm-6">-->
                        <section class="tabs text-left newsection ui-tabs ui-widget ui-widget-content ui-corner-all"></section><br>
    <?php 
    
         echo $page->body;
          ?>
                        <br>
                    </section>
                    <!--</div>-->
                </div>
            </div>
     </div>
  
    <?php 
    }
           
}
else{
    redirect();
}
?>     

<!-- Footer -->
 <?php echo Modules::run('department/footer');  ?>