<!-- Main Header  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC_an0SktJPaCeXaXctAPITqBvciBHwqY&sensor=false"></script>
<script type="text/javascript" src="http://www.map-generator.org/map/iframejs/1033462c-df66-46f8-9f87-7467faa4662a?key=AIzaSyAC_an0SktJPaCeXaXctAPITqBvciBHwqY&width=600px&height=500px"></script>
       
            <div class="main-header affix">

                <div class="container ">

                    <!-- logo  -->
                    <div id="logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>themes/ipay/images/logo-ipay.png" alt="iPay" class="img-responsive"></a>
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
        
        <section class="sub-banner newsection">
            <div class="container">
                <h2 class="title">Contact</h2>
                
            </div>
        </section>
        <div class="contact newsection">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <br>
                        <h2 class="title">Get in Touch with Us</h2>

                        <form id="contactform" action="sendMail.php" method="post">

                            <div class="response">&nbsp;</div>

                            <p><label for="contactname">Name<span>*</span></label>
                                <input type="text" class="textflied" placeholder="Name" name="contactname" value="" id="contactname">
                                <i class="icon fa fa-user"></i></p>

                            <p><label for="email">Email<span>*</span></label>
                                <input type="text" class="textflied" placeholder="Email Address" name="email" value="" id="email">
                                <i class="icon fa fa-envelope"></i></p>

                            <p><label for="subject">SUBJECT<span>*</span></label>
                                <input type="text" class="textflied" placeholder="Your Subject" name="subject" value="" id="subject">
                                <i class="icon fa fa-edit  "></i></p>

                            <p><label for="message">COMMENT<span>*</span></label>
                                <textarea class="texttextarea" rows="8" placeholder="Your Message" name="message" id="message"></textarea>
                                <i class="icon fa fa-comments"></i></p>
                            <p>
                                <button class="btn btn-disabled" title="Click here to submit your message!" id="submitButton" name="submit" type="submit">SEND message</button>
                            </p>
                        </form>
                        <br>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <!-- Map -->
                       <div class="map-container">
                            <br>
                            <h2 class="title">Location Map</h2>
<!--                            <div style="height:500px; width: 100%;">
                                <div id="map-canvas" >prem</div>
                            </div>-->
                            <!--<div class="map" id="contact-map" style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;" class="gm-style"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; position: absolute; left: -38px; top: 37px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 218px; top: 37px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -38px; top: -219px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -38px; top: 293px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 218px; top: -219px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 218px; top: 293px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -294px; top: 37px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 474px; top: 37px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -294px; top: -219px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -294px; top: 293px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 474px; top: -219px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 474px; top: 293px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -38px; top: 37px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 218px; top: 37px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -38px; top: -219px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -38px; top: 293px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 218px; top: -219px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 218px; top: 293px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -294px; top: 37px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 474px; top: 37px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -294px; top: -219px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -294px; top: 293px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 474px; top: -219px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 474px; top: 293px;"></div></div></div><div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: 263px; top: 76px; z-index: 116;"><img style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt.googleapis.com/vt/icon/name=icons/spotlight/spotlight-poi.png&amp;scale=1" draggable="false"></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 555px; height: 240px;"><img style="width: 547px; height: 232px;" src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i3874&amp;2i2775&amp;2e1&amp;3u5&amp;4m2&amp;1u555&amp;2u240&amp;5m5&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=55919"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; position: absolute; left: -294px; top: -219px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i5!2i14!3i10!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: -294px; top: 293px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i5!2i14!3i12!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: -294px; top: 37px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i5!2i14!3i11!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: 218px; top: 37px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i5!2i16!3i11!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: -38px; top: 37px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i5!2i15!3i11!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: -38px; top: -219px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i5!2i15!3i10!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: 474px; top: -219px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i5!2i17!3i10!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: -38px; top: 293px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i5!2i15!3i12!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: 218px; top: -219px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i5!2i16!3i10!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: 218px; top: 293px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i5!2i16!3i12!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: 474px; top: 293px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i5!2i17!3i12!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div><div style="width: 256px; height: 256px; position: absolute; left: 474px; top: 37px; opacity: 1; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i5!2i17!3i11!2m3!1e0!2sm!3i271000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div style="width: 22px; height: 40px; overflow: hidden; position: absolute; opacity: 0.01; left: 263px; top: 76px; z-index: 116;" class="gmnoprint"><img style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://mt.googleapis.com/vt/icon/name=icons/spotlight/spotlight-poi.png&amp;scale=1" draggable="false" usemap="#gmimap0"><map name="gmimap0" id="gmimap0"><area log="miw" coords="8,0,5,1,4,2,3,3,2,4,2,5,1,6,1,7,0,8,0,14,1,15,1,16,2,17,2,18,3,19,3,20,4,21,5,22,5,23,6,24,7,25,7,27,8,28,8,29,9,30,9,33,10,34,10,40,11,40,11,34,12,33,12,30,13,29,13,28,14,27,14,25,15,24,16,23,16,22,17,21,18,20,18,19,19,18,19,17,20,16,20,15,21,14,21,8,20,7,20,6,19,5,19,4,18,3,17,2,16,1,14,1,13,0,8,0" shape="poly" title="" style="cursor: pointer;"></map></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" href="http://maps.google.com/maps?ll=46.578498,2.457275&amp;z=5&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps"><div style="width: 62px; height: 26px; cursor: pointer;"><img style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false"></div></a></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 167px; bottom: 0px; width: 55px;"><div draggable="false" style="-moz-user-select: none;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer;">Map Data</a><span style="display: none;">Map data &copy;2014 Basarsoft, GeoBasis-DE/BKG (&copy;2009), Google, basado en BCN IGN España</span></div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 124px; top: 26px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data &copy;2014 Basarsoft, GeoBasis-DE/BKG (&copy;2009), Google, basado en BCN IGN España</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false"></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data &copy;2014 Basarsoft, GeoBasis-DE/BKG (&copy;2009), Google, basado en BCN IGN España</div></div><div class="gmnoprint gm-style-cc" style="z-index: 1000001; position: absolute; -moz-user-select: none; right: 96px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="http://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank">Terms of Use</a></div></div><div draggable="false" style="-moz-user-select: none; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Report errors in the road map or imagery to Google" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="http://maps.google.com/maps?ll=46.578498,2.457275&amp;z=5&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3&amp;skstate=action:mps_dialog$apiref:1&amp;output=classic">Report a map error</a></div></div><div class="gmnoprint" style="margin: 5px; -moz-user-select: none; position: absolute; left: 0px; top: 0px;" draggable="false" controlwidth="32" controlheight="84"><div style="cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; position: absolute; left: 0px; top: 0px;" controlwidth="32" controlheight="40"><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false"></div></div><div class="gmnoprint" style="opacity: 0.6; display: none; position: absolute;" controlwidth="0" controlheight="0"><div style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;" title="Rotate map 90 degrees"><img style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false"></div></div><div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 6px; top: 45px;"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false"></div><div style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;" title="Zoom in"></div><div style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;" title="Zoom out"></div></div></div><div id="maptype" class="gmnoprint" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; right: 0px; top: 0px;"><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.15); box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); min-width: 24px; font-weight: 500;" draggable="false" title="Show street map">Map</div><div style="background-color: white; z-index: -1; padding-top: 2px; background-clip: padding-box; border-width: 0px 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15); -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; left: 0px; top: 20px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show street map with terrain"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 68px; height: 67px;" src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; border-width: 1px 1px 1px 0px; border-style: solid solid solid none; border-color: rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) -moz-use-text-color; -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); min-width: 42px;" draggable="false" title="Show satellite imagery">Satellite</div><div style="background-color: white; z-index: -1; padding-top: 2px; background-clip: padding-box; border-width: 0px 1px 1px; border-style: none solid solid; border-color: -moz-use-text-color rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15); -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; right: 0px; top: 20px; text-align: left; display: none;"><div style="color: rgb(184, 184, 184); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none;" draggable="false" title="Zoom in to show 45 degree view"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(241, 241, 241); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 68px; height: 67px;" src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show imagery with street names"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 68px; height: 67px;" src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div>-->
                            <!--<img src="http://maps.googleapis.com/maps/api/staticmap?center=Continental+Center+Uttar+Dhoka+Sadak,+Kathmandu,+Nepal&zoom=13&scale=false&size=600x300&maptype=roadmap&sensor=false&format=gif&visual_refresh=true&markers=size:mid%7Ccolor:0xff8080%7Clabel:%7CContinental+Center+Uttar+Dhoka+Sadak,+Kathmandu,+Nepal" alt="Google Map of Continental Center Uttar Dhoka Sadak, Kathmandu, Nepal">-->
<div id ="mapid-1033462c-df66-46f8-9f87-7467faa4662a"></div>
<br />
<a href="http://www.map-generator.org/1033462c-df66-46f8-9f87-7467faa4662a/large-map.aspx">Enlarge Map</a>                            
<br>
                        </div>

                        <!-- Contact Info -->
<!--                        <div class="contactinfo">
                            <h2 class="title">Contact Info</h2>
                            <ul class="clearfix">
                                <li class="clearfix">
                                    <span class="titles">Address :</span> <span class="content">City State<br> Code</span>
                                </li>
                                <li class="clearfix">
                                    <span class="titles">Phone :</span> <span class="content">+00 555 55 55</span>
                                </li>
                                <li class="clearfix">
                                    <span class="titles">Fax :</span> <span class="content">+00 777 77 77</span>
                                </li>
                                <li class="clearfix">
                                    <span class="titles">Email: </span> <span class="content"><a href="#">info@example.com</a></span>
                                </li>
                                <li class="clearfix">
                                    <span class="titles">Support: </span> <span class="content"><a href="#">support@example.com</a></span>
                                </li>
                            </ul>

                        </div>  -->
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
                            <span class="address"><?php echo $this->general_model->find_by('bf_info','info_value','info_key',"'address'"); ?></span><br>
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