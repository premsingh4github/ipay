/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

tinyMCE.init({
        // General options
        
        relative_urls : false,
        remove_script_host : false,
        convert_urls : true,
        mode : "exact",
        elements : "pages_content",
        theme : "advanced",
        skin : "o2k7",
        height : "480",
        plugins : "lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});




$(document).ready(function(){
            
            var webHeight = $(document).height();
            var webWidth = $(document).width();
            
            $('.overlay').css('height',webHeight+'px');
            
            var offset_top = (parseInt(webHeight) - 300 ) / 2;  
            var offset_left = ( parseInt(webWidth) - 600 ) / 2;
            $('.box_popup').css('left', offset_left);
            $('.box_popup').css('top', offset_top);
            
            $('#image_btn_chooser').click(function(){
               var target = $(this).attr('data-target');
               
               var scrolltop = $(document).scrollTop();
               
               $('.box_popup').css('top', offset_top + scrolltop/2) ;
               
               var webHeight = $(document).height();
               $('.overlay').css('height',webHeight+'px');
               
               
               $('#target_box').val(target);
               $('.overlay').css('display', 'block');
               $('#'+target+'_box').slideDown('slow');
               
               $('#'+target+ '_box > header').css('display', 'block');
               $.ajax({
                    type : 'GET',
                    url : $('#base_url').val()+'index.php/media/popup_media',
                    dataType : 'html',
                    data: {
                            id:2
                    },
                    
                    success : function(data){
                            $('#'+target+ '_box > article').html(data);
                           $('#'+target+ '_box > header').css('display', 'none');
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                            
                        //alert('error23');
                    }
                }); 
               
               return false;
            });
            $('#image_btn_chooser_icon').click(function(){
               var target = $(this).attr('data-target');
               
               var scrolltop = $(document).scrollTop();
               
               $('.box_popup').css('top', offset_top + scrolltop/2) ;
               
               var webHeight = $(document).height();
               $('.overlay').css('height',webHeight+'px');
               
               
               $('#target_box').val(target);
               $('.overlay').css('display', 'block');
               $('#'+target+'_box').slideDown('slow');
               
               $('#'+target+ '_box > header').css('display', 'block');
               $.ajax({
                    type : 'GET',
                    url : $('#base_url').val()+'index.php/media/popup_media',
                    dataType : 'html',
                    data: {
                            id:2
                    },
                    
                    success : function(data){
                            $('#'+target+ '_box > article').html(data);
                           $('#'+target+ '_box > header').css('display', 'none');
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                            
                        //alert('error23');
                    }
                }); 
               
               return false;
            });
            $('#image_btn_chooser1').click(function(){
               var target = $(this).attr('data-target');
               
               var scrolltop = $(document).scrollTop();
               
               $('.box_popup').css('top', offset_top + scrolltop ) ;
               
               var webHeight = $(document).height();
               $('.overlay').css('height',webHeight+'px');
               
               
               $('#target_box').val(target);
               $('.overlay').css('display', 'block');
               $('#'+target+'_box').slideDown('slow');
               
               $('#'+target+ '_box > header').css('display', 'block');
               $.ajax({
                    type : 'GET',
                    url : $('#base_url').val()+'index.php/media/popup_media1',
                    dataType : 'html',
                    data: {
                            id:2
                    },
                    
                    success : function(data){
                            $('#'+target+ '_box > article').html(data);
                           $('#'+target+ '_box > header').css('display', 'none');
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                           
                            
                        alert('error223');
                    }
                });
               return false;
            });
            
           $('#done_file').click(function(){
               $.ajax({
                    type : 'GET',
                    url : $('#base_url').val()+'index.php/media/post_media',
                    dataType : 'html',
                    data: $('#form10').serialize(),
                    
                    success : function(data){
                        //alert(data);
                         document.getElementById('banner_image_box').style.display = 'none';
                         document.getElementById('overlay').style.display = 'none';
                         document.getElementById('file_box').innerHTML = data;
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                           
                            
                        alert('error23');
                    }
                });
               $(this).parent().parent().slideUp('slow');
               $('.overlay').css('display', 'none');
               return false;
            });
            $('#menu_department').change(function(){
                
               if(document.getElementById('menu_department').value > 0){
                   document.getElementById('parent').style.display = 'none';
                   document.getElementById('wait').style.display = 'block';
                   $.ajax({
                        type :'POST',
                        url : $('#base_url').val()+'index.php/menu/department_menu',
                        dataType : 'html',
                        data: $('#menu_form').serialize(),

                        success : function(data){
                           
                             
                             document.getElementById('parent').innerHTML = data;
                             document.getElementById('wait').style.display = 'none';
                             document.getElementById('parent').style.display = 'block';
                             
                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown) {
                            alert('AJAX');
                        }
                   });
               }
            });
            $('#video_btn_chooser_icon').click(function(){
               var target = $(this).attr('data-target');
               
               var scrolltop = $(document).scrollTop();
               
               $('.box_popup').css('top', offset_top + scrolltop ) ;
               
               var webHeight = $(document).height();
               $('.overlay').css('height',webHeight+'px');
               
               
               $('#target_box').val(target);
               $('.overlay').css('display', 'block');
               $('#'+target+'_box').slideDown('slow');
               
               $('#'+target+ '_box > header').css('display', 'block');
               $.ajax({
                    type : 'GET',
                    url : $('#base_url').val()+'index.php/media/popup_media',
                    dataType : 'html',
                    data: {
                            id:2
                    },
                    
                    success : function(data){
                            $('#'+target+ '_box > article').html(data);
                           $('#'+target+ '_box > header').css('display', 'none');
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                           
                            
                        alert('error223');
                    }
                });
               return false;
            });
            
            $('.closeme').click(function(){
               $(this).parent().parent().slideUp('slow');
               $('.overlay').css('display', 'none');
               return false;
            });
            $('#banner_end_date1').focusout(function(){
              document.getElementById('check_time').style.display = 'block';
//              document.getElementById('save_banner').style.display = 'none';
             $.ajax({
                    type : 'POST',
                    url : $('#base_url').val()+'index.php/banner/time_check',
                    dataType : 'html',
                    data: $('#banner_form').serialize(),
                    
                    success : function(data){
                       document.getElementById('feedback').innerHTML = data;
                       document.getElementById('feedback').style.display = 'block';
                       document.getElementById('check_time').style.display = 'none';
//                         document.getElementById('save_banner').style.display = 'block';
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                           
                            
                        alert('error23');
                    }
                });               
            });
            
        });
        
        
        function add_links(file, type){
            var target_link = $('#target_box').val();
            if(type == 'thumb'){
                var urls = $('#base_url').val() + 'uploads/thumbs/' + file;
            } else {
                var urls = $('#base_url').val() + 'uploads/' + file;
            }
            $('#'+target_link).val(urls);
           // $('#director_product_image').val("prem");
            $('#'+target_link+'_box').slideUp('slow');
            $('.overlay').css('display', 'none');
            $('#'+target+ '_box > article').html('');
        }
        function list_file(file, type){
            var target_link = $('#target_box').val();
            if(type == 'thumb'){
                var urls = $('#base_url').val() + 'uploads/thumbs/' + file;
            } else {
                var urls = $('#base_url').val() + 'uploads/' + file;
            }
            $('#'+target_link).val(urls);
           // $('#director_product_image').val("prem");
            $('#'+target_link+'_box').slideUp('slow');
            $('.overlay').css('display', 'none');
            $('#'+target+ '_box > article').html('');
        }
       