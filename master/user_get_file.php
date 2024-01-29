<?php
ob_start();
session_start();
include("../config/database.php") ;
include("../functions.php") ;
check_admin_logged_in($pdo);
$userIp = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) ;
if(find_blocked_ip($pdo , $userIp) > "0"){
    header("location: ".BASE_URL."notforyou");
}
if(isset($_POST['submit'])){
    $zipFile = filter_var($_POST['zipfile'], FILTER_SANITIZE_STRING) ;
    $filname = '../zipfiles/'.$zipFile ;
    $zipId = getzipid_by_zipfile($pdo,$zipFile) ;
    if (headers_sent()) {
        echo 'HTTP header already sent';
    } else {
        if (!is_file($filname)) {
            header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');
            echo 'File not found';
        } else if (!is_readable($filname)) {
            header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
            echo 'File not readable';
        } else {
            header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: Binary");
            header("Content-Length: ".filesize($filname));
            header("Content-Disposition: attachment; filename=\"".basename($filname)."\"");
            readfile($filname);
            exit;
        }
    }
}

?>