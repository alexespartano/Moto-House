<?php
/*Desarrollado por Alejandro Romero Aldrete*/
   $details  = json_decode( getenv( "Db2-moto-house" ), true );
    $dsn      = $details [ "user-provided" ][0][ "credentials" ][ "dsn" ];
    $driver = "DRIVER={IBM DB2 ODBC DRIVER};";
    //$dsn="DATABASE=BLUDB;HOSTNAME=dashdb-txn-sbox-yp-dal09-04.services.dal.bluemix.net;PORT=50000;PROTOCOL=TCPIP;UID=pls29547;PWD=g62rfp0@w28mn659;";
    $conn_string = $driver . $dsn;     # Non-SSL
    $db2 = db2_pconnect( $conn_string, "", "" );
?>