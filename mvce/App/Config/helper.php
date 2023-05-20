<?php 
class helper{

    static function redirect($url){
        if($url){
            if(!headers_sent()){
                header("Location:".$url);
            }else{
                echo '<script>location.href='.$url.'</script>';
            }
        }
    }
    static function clean($text){
        
        $blacklist = ["union", "select", "*", "from", "insert", "into", "drop"];
        $text = str_replace($blacklist, "", $text);
        $text = strip_tags($text);
        $text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
        $text = trim($text);
      
        return $text;
    }           
}