
    <table>
        <tr>
            <?php 
            foreach ($file as $value) {
                $media_list = $this -> media_model-> find_by('ID',$value);
                $extension  = splitExtension( $media_list -> file );
            ?>
            <th><input type="checkbox" value="<?php echo $media_list->ID ; ?>" name="file[]" checked="" /></th>
             <?php if(in_array($extension[1], array('docx', 'doc', 'pdf')) ){ 
                ?>
                <th ><img src="<?php echo base_url() . 'uploads/thumbs/pdf.jpg' ; ?>" width="100" title="<?php echo $media_list -> title; ?>" /></th>
                <?php
            }
            else{ ?>
                <th ><img src="<?php echo base_url() . 'uploads/thumbs/' . $media_list -> file; ?>" width="100" title="<?php echo $media_list -> title; ?>" /></th>
                <?php
            }
            ?> 
            <?php 
            }
            ?>
        </tr>
    </table>