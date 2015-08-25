
<section class="tabs text-left newsection">
    <div class="container">
        <section class="switch-tabs newsection">

            <div id="switch-tabs">    
                <ul class="tab-tools-ul resp-tabs-list clearfix">
                    <?php
                    if (count($tabs) > 0 ) {
                        foreach ($tabs as $tab) {
                            if ($D_tab = $this->tab_model->find_all_by(array('ID' => $tab->tab_ID, 'status' => '1'))) {
                                foreach ($D_tab as $value) {
                                    echo"<li>" . $value->name . "</li>";
                                }
                            }
                        }
                    }
                    ?>
                </ul>
                <div class="resp-tabs-container">     

                    <?php
                        foreach ($tabs as $tab) {
                            if ($D_tab = $this->tab_model->find_all_by(array('ID' => $tab->tab_ID, 'status' => '1'))) {
                                foreach ($D_tab as $value) {
                                    ?>
                                    <div>
                                        <div class="tab-toolss">
                                            <div class="tab-tools clearfix">

                                                <div class="row">

                                                    <?php
                                                    if ($value->information != '') {
                                                        // echo $value->information; 
                                                    }
                                                    // for step
                                                    $this->db->order_by('order asc');
                                                    if ($steps = $this->steps_model->find_all_by(array('department' => $value->ID, 'status' => '1'))) {
                                                        if ($this->steps_model->count_by('department', $value->ID) > 0) {
                                                            ?>


                                                            <div class="col-md-6">
                                                                <h2><?php echo count($steps); ?> easy steps</h2><br><br>
                                                                <form id="commentForm">
                                                                    <div id="rootwizard" class="col-md-12">
                                                                        <div class="form-wizard-steps">
                                                                            <ul class="wizard-steps">
                                                                                <?php $i = 0;

                                                                                foreach ($steps as $step) {
                                                                                    ?>
                                                                                    <li class="<?php if ($i == 0) {
                                                            echo 'active';
                                                        } $i++; ?>" data-target="#step<?php echo $step->ID; ?>"> <a href="#tab<?php echo $step->ID; ?>" data-toggle="tab"> <span class="step"><?php echo $i; ?></span> <span class="title"><?php echo $step->step_title; ?></span> </a> </li>        

                                                                                <?php }
                                                                                ?>
                                                                            </ul>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <div class="tab-content transparent">
                                                                            <?php
                                                                            $i = 0;
                                                                            foreach ($steps as $step) {
                                                                                ?>
                                                                                <div class="tab-pane <?php if ($i == 0) {
                                                        echo 'active';
                                                    } $i++; ?>" id="tab<?php echo $step->ID; ?>"> <br>
                                                                                    <h4 class="semi-bold">Step <?php echo $i; ?> - <span class="light"><?php echo $step->step_title; ?></span></h4>
                                                                                    <br>
                                                                                    <ul>
                                                                                        <?php echo $step->information; ?>
                                                                                        <?php
                                                                                        if ($value->information != '') {
                                                                                            echo $value->information;
                                                                                        }
                                                                                        ?>
                                                                                    </ul>
                                                                                </div>   
                                                                                <?php
                                                                            }
                                                                            ?>




                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <div class="col-md-6">
                                                            <h2></h2>
                                                            <form id="commentForm">
                                                                <div id="rootwizard" class="col-md-12">
                                                                    <div class="form-wizard-steps">

                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <div class="tab-content transparent">

                                                                        <div class="tab-pane active" id="tab1">

                                                                            <ul>
                                                                                <?php
                                                                                if ($value->information != '') {
                                                                                    echo $value->information;
                                                                                }
                                                                                ?>
                                                                            </ul>
                                                                        </div>   





                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>


                                                        <?php
                                                    }
                                                    // for video
                                                    if ($value->video != '') {
                                                        ?>
                                                        <div class="col-md-6 text-right clearfix">
                                                            <video id="our-video" width="476" height="312" controls class="video-ads">
                                                                <source src="<?php echo $value->video; ?>" type="video/mp4">
                                                                <source src="<?php echo $value->video; ?>" type="video/mp4">
                                                            </video>
                                                        </div> <!-- /video -->
                                                    <?php }
                                                    ?>



                                                </div>

                                            </div>

                                        </div> 
                                    </div>


                                    <?php
                                }
                            }
                        }
                    
                    ?>
                </div> 
            </div>   

        </section>
    </div>
</section>
