<?php

include "./conn.php";
if($_GET){

	$user =$_GET['username'];
	$pass =$_GET['password'];

	$query =mysqli_connect($db_conn,"select*from tb_login where username ='$user' and password ='$pass' ");
    $user = mysqli_fetch_assoc($query);
    $id_account = "".$user['nik'];
    $nik_user = "".$user['username'];
    $rule = "".$user['password'];

    if ($sql) {
        $response["error"] = false;
        $response["error_msg"] = "Berhasil Login";
        $response["id"] = $id_account;
        $response["username"] = $nik_user;
        $response["rule"] = $rule;
        echo json_encode($response);
    } else{
        $response["error"] = false;
        $response["error_msg"] = "Gagal Mengirim";
        echo json_encode($response);
    }

} else {
    $response["error"] = true;
    $response["error_msg"] = "404";

    echo json_encode($response);
}

}