<?php
$menu_D = $this->department_model->find_by('slug',$this->uri->segment(3));
if($menu_P = $this->menu_model->find_by('id',$this->uri->segment(4))){   
}
?>
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
                    $menus = $this->menu_model->find_all_by(array('status' => 1, 'department_ID' => $menu_D->ID, 'parent_ID' => 0));
                    if ($this->menu_model->count_by(array('status' => 1, 'department_ID' => $menu_D->ID, 'parent_ID' => 0)) > 0) {
                        $i = 0;
                        foreach ($menus as $menu) {
                       
                            ?>
                            <li class=" <?php if ($this->menu_model->count_by(array('parent_ID' => $menu->id, 'status' => 1, 'department_ID' => $menu_D->ID)) > 0) {
                        echo 'parent ';
                    } if ($menu->id == $this->uri->segment(4) || (getCurrentUrl() == $menu->url) ) {
                        echo 'active';
                        } $i++; ?>" ><a  <?php if(!is_numeric($menu->url)){ echo "target='blank_'" ;} ?> href="<?php echo (is_numeric($menu->url))? base_url().'index.php/department/index/'.$this->uri->segment(3).'/'.$menu->id : $menu->url; ?>#jump-page"><?php echo $menu->name; ?></a>
                                <!-- Sub memu -->

                                <!--<li class="arrow"></li>-->
                                <?php
                                $submenus = $this->menu_model->find_all_by(array('parent_ID' => $menu->id, 'status' => 1, 'department_ID' => $menu_D->ID));
                                if ($this->menu_model->count_by(array('parent_ID' => $menu->id, 'status' => 1, 'department_ID' => $menu_D->ID)) > 0) {
                                    echo ' <ul class="sub-menu">';
                                    foreach ($submenus as $submenu) {
                                        ?>

                                    <li><a href="<?php echo $submenu->url; ?>"><?php echo $submenu->name ; ?></a></li>

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
