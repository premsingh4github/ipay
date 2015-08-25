
<div  class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <h2 class="title">Contact Us
                    <span class="border"></span></h2>
                <span class="address"> <?php echo $this->general_model->find_by('bf_info', 'info_value', 'info_key', "'address'"); ?></span><br>
                <span class="location"><?php echo $this->general_model->find_by('bf_info', 'info_value', 'info_key', "'postal'"); ?></span><br>
                <span class="telephone"><?php echo $this->general_model->find_by('bf_info', 'info_value', 'info_key', "'admin_number'"); ?></span>
                <a href="mailto:info@yourmain.com" class="email"><?php echo $this->general_model->find_by('bf_info', 'info_value', 'info_key', "'admin_email'"); ?></a>
                <div class="social">
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-facebook-24.png" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-twitter-24.png" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-googleplus-24.png" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-linkedin-24.png" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url(); ?>themes/ipay/img/icon-youtube-24.png" alt=""/></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-9">
                <div class="row">
                    <?php
                    $departments = $this->department_model->find_all_by('status', 1);
                    if (count($departments) > 0) {
                        foreach ($departments as $department) {
                            $this->db->order_by('position asc,added desc');
                            $menus = $this->menu_model->find_all_by(array('status' => 1, 'department_ID' => $department->ID, 'parent_ID' => 0));
                            if ($this->menu_model->count_by(array('status' => 1, 'department_ID' => $department->ID, 'parent_ID' => 0)) > 0) {
                                ?>
                                <div class="col-md-3">
                                    <h2 class="title"><?php echo $department->name; ?>
                                        <span class="border"></span></h2>
                                    <ul class="fa-ul">
                                        <?php
                                        foreach ($menus as $menu) {
                                            ?>
                                            <li><a href="<?php echo $menu->url; ?>"><?php echo $menu->name; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php
                            } else {

                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>