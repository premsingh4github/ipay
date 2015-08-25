<!-- Main Header  -->

            <div class="main-header affix">

                <div class="container ">

                    <!-- logo  -->
                    <div id="logo">
                        <a href="index.html"><img src="<?php echo base_url(); ?>themes/ipay/images/logo-ipay.png" alt="iPay" class="img-responsive"></a>
                    </div>
                    <div class="page-navigator clearfix"><?php echo $records->name; ?></div>

                    <div id="sb-search" class="sb-search">
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
            <div class="main-header main-nav affix">
                <div class="container">
                    <!-- Moblie Nav Wrapper  -->
                    <div class="mobile-nav-wrapper">
                         <!-- mobile-menu-icon -->

                         <div class="mobile-menu-icon">
                             <i class="fa fa-bars"></i>
                         </div> 
                         <!-- Nav --> 
                         
                         <nav class="mobile-menu">

                            <ul class="clearfix">
                                <?php
//                                    $this->db->order_by('position asc,added desc');
                                    $this->db->order_by('position asc,added desc');
                                    $menus = $this->menu_model->find_all_by(array('status'=>1,'department_ID'=>$records->ID,'parent_ID'=>0));
                                    if($this->menu_model->count_by(array('status'=>1,'department_ID'=>$records->ID,'parent_ID'=>0)) > 0){
                                        $i = 0;
                                        foreach($menus as $menu){
                                            
                                            ?>
                                <li class=" <?php if($this->menu_model->count_by(array('parent_ID'=>$menu->id,'status'=>1,'department_ID'=>$records->ID)) > 0){ echo 'parent ';} if($i == 0){echo 'active';} $i++; ?>" ><a href="<?php echo $menu->url; ?>"><?php echo $menu->name; ?></a>
                                    <!-- Sub memu -->
                                   
                                        <!--<li class="arrow"></li>-->
                                        <?php 
                                        $submenus = $this->menu_model->find_all_by(array('parent_ID'=>$menu->id,'status'=>1,'department_ID'=>$records->ID));
                                        if($this->menu_model->count_by(array('parent_ID'=>$menu->id,'status'=>1,'department_ID'=>$records->ID)) > 0){
                                            echo ' <ul class="sub-menu">';
                                            foreach($submenus as $submenu){
                                                ?>
                                        
                                                <li><a href="<?php echo $submenu->url; ?>"><?php echo $submenu->name.$this->menu_model->count_by(array('parent_ID'=>$menu->id,'status'=>1,'department_ID'=>$records->ID)); ?></a></li>
                                        
                                                <?php
                                            }
                                            echo '</ul>';  
                                        } 
                                        ?>
                                    
                                </li>

                                
                                        <?php
                                            
                                        }
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        
        <!-- header -->  
        <!-- Banner -->
        <div class="find-agents">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <section class="agents clearfix">

                            <h1>Our Partners</h1>

                            <?php
                            if($this->partner_model->count_by(array('status'=>'1'))> 0){
                                foreach($partners as $partner){
                                    ?>
                            <article class="one-fourth">
                                <figure><a title="<?php echo $partner->name; ?>" href="<?php echo $partner->url; ?>"><img width="270" height="152" alt="<?php echo $partner->alt; ?>" src="<?php echo $partner->logo; ?>"></a></figure>
<!--                                <div class="details">
                                    <h4>Agent Name</h4>
                                    <h5>Address</h5>
                                    <h5>+2-234-567-9876</h5>
                                    <a class="gradient-button" title="Explore our deals" href="#">more info</a>
                                </div>-->
                            </article>
                                    <?php
                                }
                            }
                            
                            ?>
                            
                            <!--//column-->
                            <!--column-->
                           
                            <!--//column-->


                        </section>
                    </div>
                </div>
            </div>     
        </div>
       
        <!-- Footer -->
        
            <div  class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <h2 class="title">Contact Us
                                <span class="border"></span></h2>
                            <span class="address"> <?php echo $this->general_model->find_by('bf_info','info_value','info_key',"'address'"); ?></span><br>
                            <span class="location"><?php echo $this->general_model->find_by('bf_info','info_value','info_key',"'postal'"); ?></span><br>
                            <span class="telephone"><?php echo $this->general_model->find_by('bf_info','info_value','info_key',"'admin_number'"); ?></span>
                            <a href="mailto:info@yourmain.com" class="email"><?php echo $this->general_model->find_by('bf_info','info_value','info_key',"'admin_email'"); ?></a>
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
                                <?php $departments = $this->department_model->find_all_by('status',1);
                                if(count($departments)> 0){
                                foreach($departments as $department){
                                    $this->db->order_by('position asc,added desc');
                                    $menus = $this->menu_model->find_all_by(array('status'=>1,'department_ID'=>$department->ID,'parent_ID'=>0));                                    
                                    if($this->menu_model->count_by(array('status'=>1,'department_ID'=>$department->ID,'parent_ID'=>0)) > 0){
                                        
                                    ?>
                                <div class="col-md-3">
                                    <h2 class="title"><?php echo $department->name; ?>
                                        <span class="border"></span></h2>
                                    <ul class="fa-ul">
                                        <?php
                                        
                                        foreach($menus as $menu){
                                           ?>
                                        <li><a href="<?php echo $menu->url ; ?>"><?php echo $menu->name ; ?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                  <?php 
                                    }
                                    else{
                                        
                                    }
                                }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>