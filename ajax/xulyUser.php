<?php
require "../dbCon.php";

$username = $_POST["username"];
$password = md5($_POST["password"]);
$hoten    = $_POST["hoten"];
$mail     = $_POST["mail"];

$qr = "INSERT INTO users VALUES(
    null,
    '$username',
    '$password',
    '$hoten',
    '$mail'
)";

if( mysqli_query($con, $qr) ){
    $k = new KQ(1);
}else{
    $k = new KQ(0);
}

echo json_encode($k);

//Thêm
class KQ{
    public $ketqua;
    function __construct($n){
        $this->ketqua = $n;
    }
}


?>