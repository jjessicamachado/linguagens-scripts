<?php
$db = mysql_connect('localhost','root','usbw');
if(!$db) {
    die('Could not connect: '.mysql_error());
}
$cod = $_GET['codigo'];
$connection_string = mysql_select_db('lapasta',$db);
$selectSQL = 'SELECT * FROM clientes WHERE cod_cliente='$cod'';
$queryset = mysql_query($selectSQL);
$num = mysql_num_rows($queryset);
if(0==$num) {
    echo "No record";
    exit;
} else {
    while($row=mysql_fetch_assoc($queryset)) {
        echo($row['cod_cliente']);
    }
}

?>
