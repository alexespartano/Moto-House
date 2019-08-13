<?php
class IndexModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function catalogo(){
        $resp= array();
        require_once(dirname(__DIR__)."/libs/connectsys.php");
        $query = "SELECT * FROM PLS29547.CATALOGO ORDER BY ID";
        $stmt = db2_prepare($db2, $query);
        if($stmt){
           $result = db2_execute($stmt);
           if (!$result) {
                echo "exec errormsg: " .db2_stmt_errormsg($stmt);
                exit;
           }
         while($row = db2_fetch_array($stmt)){
  
               array_push($resp,$row);
          }   

         }
         db2_close($db2);
         return $resp;
    }

    public function get_item($num_item){
        $resp= array();
        require_once(dirname(__DIR__)."/libs/connectsys.php");
        $query = "SELECT * FROM PLS29547.CATALOGO WHERE ID=".$num_item[0].";";
        $stmt = db2_prepare($db2, $query);
        if($stmt){
           $result = db2_execute($stmt);
           if (!$result) {
                echo "exec errormsg: " .db2_stmt_errormsg($stmt);
                exit;
           }
         while($row = db2_fetch_array($stmt)){
                array_push($resp,$row);
          }   

         }
         db2_close($db2);
         return $resp;
    }

    public function set_item($linea,$marca,$modelo,$costo,$descrip,$identy){
     require_once(dirname(__DIR__)."/libs/connectsys.php");
     $query = "UPDATE PLS29547.CATALOGO SET NOMBRE='".$linea."', MARCA='".$marca."', MODELO='".$modelo."', PRECIO='".$costo."', DESCRIP='".$descrip."' WHERE ID=".$identy.";";
     $stmt = db2_prepare($db2, $query);
     if($stmt){
          $result = db2_execute($stmt);
          if (!$result) {
            echo "exec errormsg: " .db2_stmt_errormsg($stmt);
            exit;
            }
        }
      db2_close($db2);
      return $resp;
    }
    public function del_item($item){
     require_once(dirname(__DIR__)."/libs/connectsys.php");
     $query = "DELETE FROM PLS29547.CATALOGO WHERE ID=".$item[0].";";
     $stmt = db2_prepare($db2, $query);
     if($stmt){
          $result = db2_execute($stmt);
          if (!$result) {
            echo "exec errormsg: " .db2_stmt_errormsg($stmt);
            exit;
            }
        }
      db2_close($db2);
      return $resp;
    }
    public function last(){
         $IDEN=0;
     require_once(dirname(__DIR__)."/libs/connectsys.php");
     $query = "SELECT * FROM PLS29547.CATALOGO;";
     $stmt = db2_prepare($db2, $query);
     if($stmt){
        $result = db2_execute($stmt);
        if (!$result) {
             echo "exec errormsg: " .db2_stmt_errormsg($stmt);
             exit;
        }
      while($row = db2_fetch_array($stmt)){
             $IDEN=$row[5];
       }   

      }
      db2_close($db2);
      return $IDEN;
    }

    public function add_item($linea,$marca,$modelo,$costo,$descrip){
     require_once(dirname(__DIR__)."/libs/connectsys.php");
     $query = "INSERT INTO PLS29547.CATALOGO (NOMBRE, MARCA, MODELO, PRECIO, DESCRIP) VALUES('".$linea."','".$marca."','".$modelo."','".$costo."','".$descrip."');";
     $stmt = db2_prepare($db2, $query);
     if($stmt){
          $result = db2_execute($stmt);
          if (!$result) {
            echo "exec errormsg: " .db2_stmt_errormsg($stmt);
            exit;
            }
        }
      db2_close($db2);
      return $resp;
    }


}
?>