<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of general_model
 *
 * @author jazy
 */
class general_model extends CI_Model{
    //put your code here
    public $menu_html='';
    function __construct() {
        parent::__construct();
    }
   function tbl_recur_array_builder($table, $parent=0, $parent_child=true,$self=''){
        //echo $self;
        $this -> db -> where('parent_ID', $parent);
        
        if($table == 'category'){
            
           // if($type !='')
              //  $this -> db -> where( 'type', $type );
        }
        $Q = $this -> db -> get($table);
       
        $arr='';
        if($Q -> num_rows()> 0 ){ 
            foreach($Q -> result() as $r){  
                if($r -> ID == $self){
                    continue;
                }
                $arr[] = array(
                        'ID'       => $r -> ID, 
                        'name'     => $r -> name, 
                        'slug'     => $r -> slug, 
                        "child" =>  ($parent_child)?$this -> tbl_recur_array_builder($table, $r -> ID, true,$self):''
                );
            }
        }
        //print_r($arr);
        return $arr;
        
    } 
    var $child = '';
    function category_select($menu, $child_text='', $val='', $first)
    {
         global $child;
         if($first)$child .= $child_text; else $child='';
        //$this -> menu_html .= '<ul>';
         //echo $child;
         if($menu !='')
            foreach ($menu as $key => $item)
            {
                    // Here we check to see if the item we are looking at
                    // is simply another array. In other words, if the item
                    // has children.
                    if (is_array(@$item['child']))
                    {
                            // if it does, then call this function again, passing
                            // the item with children as a parameter.
                            $this -> menu_html .= "<option ";
                            if($val == $item['ID']) $this -> menu_html .= " selected='selected' ";
                            $this -> menu_html .= " value='{$item['ID']}'>";
                            $this -> menu_html .= $child . $item['name'];
                            $this -> menu_html .= "</option>";
                            $this -> category_select($item['child'], '--- ', $val, true);
                            $child ='';
                    }
                    else
                    {
                            // Here you would construct the menu item in HTML code
                            $this -> menu_html .= "<option ";
                            if($val == $item['ID']) $this -> menu_html .= " selected='selected' ";
                            $this -> menu_html .= " value='{$item['ID']}'>";
                            $this -> menu_html .=  $child .$item['name'];
                            $this -> menu_html .= "</option>";
                            
                    }
                    //$child ='';
            }
            //$this -> menu_html .= '</ul>';
    }
  
    public function create_slug($table,$title,$t=''){
      
                   $slug= strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-',$title))); 
                   $title1= $slug.$t;
                   $this -> db -> get($table);
                   $this->db->where('slug',$title1);
                   //$this->db->count_all_results($table);
                   //if(!$this->discuss_model->is_unique($this->db->dbprefix.$table,'slug',$title1)){
                   if($this->db->count_all_results($table)>0){
                       
                            $c=$t+1;                           
                            $title1 =  $this->create_slug($table,$slug,$c);
                            
                   }
                       return $title1;
        } 
        function set_notification($msg, $type='error', $page=''){
            $noti = array(
                'is' => 'true',
                'type' => $type,
                'msg' => $msg,
                'page' => $page
            );
            $this -> session -> set_userdata('notification', $noti);
        }
        // $table = table name
        // $field = database field name
        // $value = value of field , returns all matched data
public function find_all_by($table,$field,$value){
   
        $array= array($field=> $value);
        $query= $this->db->get_where($table,$array);
        if($query->num_rows() > 0){
        return $query->result();
    }else {
        return false;
    }
}
public function find_by($table,$return,$by,$value){   
    $sql = "select * from {$table} where `{$by}` = {$value}" ;
    
    $query = mysql_query($sql);
    $result = mysql_fetch_array($query);   
    return $result[$return];
}
public function search_all_by($data){
    print_r($_GET);
}
public function menu($S = '' ,$D = '',$pi = 0, $p = 0){
    
    $array= ($D!='')? array("parent_ID"=> $pi,'department_ID'=>$D) : array("parent_ID"=> $pi) ;
    
    $query= $this->db->get_where("bf_menu",$array);
    $menus = $query->result();
     foreach ($menus as $menu) {
         $slash = '';
         //$ch[]
         for($c=0;$c<$p;$c++){
            $slash = $slash."--"; 
         }
         ?>
       <option <?php if($S == $menu->id){echo 'selected' ;} ?> value='<?php echo $menu->id ;?>'><?php echo $slash.$menu->name ;?></option>;
       <?php
       $this->menu($S,$D,$menu->id,$p+1);
     }
    
}
  
    
}
