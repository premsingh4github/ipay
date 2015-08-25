
 <form method="post" id="form10" >
    <table>
        <tr>
            <th></th>
            <th>S.N.</th>
            <th>File</th>
            <th>Name</th>
        </tr>
        <?php 
        $s=1;
        if( ! empty( $media_list ) ) foreach($media_list as $ml){ 
             $extension  = splitExtension( $ml -> file );
            ?>
        <tr>
            <td align="center"><input type="checkbox" value="<?php echo $ml->ID ; ?>" name="file[]" /></td>
            <td align="center"><?php echo $s; $s++; ?></td>
            <?php if(in_array($extension[1], array('docx', 'doc', 'pdf')) ){ 
                ?>
                <td align="center"><img src="<?php echo base_url() . 'uploads/thumbs/pdf.jpg' ; ?>" width="100" title="<?php echo $ml -> title; ?>" /></td>
                <?php
            }
            else{ ?>
                <td align="center"><img src="<?php echo base_url() . 'uploads/thumbs/' . $ml -> file; ?>" width="100" title="<?php echo $ml -> title; ?>" /></td>
                <?php
            }
            ?>
            
            <td align="center"><?php echo $ml->file ; ?></td>
        </tr>
           
         <?php } ?>
        
    </table>
   
</form>
