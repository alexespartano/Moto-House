<?php
class LoginModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function auth($username,$password){
        $flag=false;
        // insertar
        $fh = fopen(dirname(__DIR__).'/db/user_pass.txt','r'); #linux
        #$fh = fopen(dirname(__DIR__).'\\db\\user_pass.txt','r'); #windows
        while ($line = fgets($fh)) {
            $aline = explode(",",$line); 
            if(preg_replace('/\s+/', '',$aline[0])==$username){
                if(preg_replace('/\s+/', '',$aline[1])==sha1($password)){
                fclose($fh);           
               $flag=true;
                break;
                }
            }
        }
        return $flag;
    }
}
?>