
<div class="main-header" style="border-bottom: 1px solid #85abb3;">
    <div class="container clearfix">
        <!-- logo  -->
        <div id="logo">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>themes/ipay/images/logo-ipay.png" alt="iPay" class="img-responsive"></a>
        </div>
        <div class="top-social pull-right">
            <?php
            if ($this->social_link_model->count_by(array('status' => 1)) > 0) {
                foreach ($social_links as $social_link) {
                    ?>
                    <a target="_blank" href="<?php echo $social_link->url; ?>"><img src="<?php echo $social_link->icon; ?>" alt="<?php echo $social_link->alt; ?>" /></a> 
                    <?php
                }
            }
            ?>

        </div>
        <div class="pull-right">
            <div class="top-telephone"><?php echo $this->general_model->find_by('bf_info', 'info_value', 'info_key', "'admin_number'"); ?></div>
        </div> 
    </div>
</div>
<div class="clearfix"></div>
<div class="banner">
    <div class="container">
        <br><br>
        <div class="row wrap">
            <div class="col-md-6">
                <h2><?php echo $banners->title ?></h2>
                <p style="font-weight: 300; font-size: 24px; padding-top: 10px;"><?php echo $banners->subtitle ?></p>
                <div class="form-components clearfix">
                    <form class="left-right send-money-form">
                        <div class="form-input">
                            <button class="btn btn-pri" style="background:  #5a9aa8 url(<?php echo $banners->button_icon ?>) no-repeat right; "><?php echo $banners->button_text ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 text-center"  >
                <img src="<?php echo $banners->image ?>" alt="<?php echo $banners->alt; ?>" />
            </div>


        </div>  
        <br>
        <br>  
    </div>
</div>

<!--On-counter and online -tabs--> 
<section class="tabs-section text-left clearfix">
    <div class="container">
        <div class="row">
            <?php
            if (isset($departments)) {
                foreach ($departments as $department) {  //                          displayArr($department); 
                    ?>

                    <div class="col-md-3 clearfix">
                        <br>
                        <a href="<?php echo base_url('index.php/department/index/' . $department->slug); ?>">
                            <div class="tabs-contents">
                                <img src="<?php echo $department->logo; ?>" alt=""/>
                            </div>
                            <h2><?php echo $department->name; ?></h2>
                        </a>
                    </div> <?php
                }
            }
            ?>

        </div>
    </div>
</section>