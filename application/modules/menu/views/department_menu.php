
<label class="control-label" for="menu_parent_ID">
    Parent
    <span class="required">*</span>
</label>
<div class="controls">
    <select id="menu_parent_ID" name="menu_parent_ID">
        <option value="0">root</option>
        <?php 
        if(count($menus) > 0){
            foreach ($menus as $menu) {
               
                
            }
           $this->general_model->menu('',$_POST['menu_department']);
        }
        ?>
    </select>
</div>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

