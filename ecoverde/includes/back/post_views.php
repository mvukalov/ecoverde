<?php
function post_views($post_ID) {
 

 $count_key = 'post_views_count'; 
 $count = get_post_meta($post_ID, $count_key, true);
 
 if($count == ''){
     $count = 0; 

     delete_post_meta($post_ID, $count_key);
     add_post_meta($post_ID, $count_key, '0');
     return $count ;

 }else{
     $count++; 
  
     update_post_meta($post_ID, $count_key, $count);

     if($count == '1'){
     return $count ;
     }
     else {
     return $count;
     }
 }
}
?>