<?php
function track_db_connect($track_db) {
    static $track_conn;
    if(!isset($track_conn)) {
        $username = 'USERNAME';
        $password = 'PASSWORD';
        $track_dbname = $track_db;
        $track_conn = mysqli_connect('SERVERADDR',$username,$password,$track_dbname);
    }
    if($track_conn === false) {
        return mysqli_connect_error(); 
    }
    return $track_conn;
}

function track_db_query($track_db,$query) {
    $track_conn = track_db_connect($track_db);
    $result = mysqli_query($track_conn,$query);
    if($result === false) {
        return false;
    }
    return $result;
}

function track_db_error($track_db) {
    $track_conn = track_db_connect($track_db);
    return mysqli_error($track_conn);
}

$track_db='analytics';
$track_conn = track_db_connect($track_db);
date_default_timezone_set('Australia/Sydney');
if(isset($_SERVER['PHP_SELF'])){$PHP_SELF=mysqli_real_escape_string($track_conn,$_SERVER['PHP_SELF']);}else{$PHP_SELF='NONE';}
if(isset($_SERVER['GATEWAY_INTERFACE'])){$GATEWAY_INTERFACE=mysqli_real_escape_string($track_conn,$_SERVER['GATEWAY_INTERFACE']);}else{$GATEWAY_INTERFACE='NONE';}
if(isset($_SERVER['SERVER_ADDR'])){$SERVER_ADDR=mysqli_real_escape_string($track_conn,$_SERVER['SERVER_ADDR']);}else{$SERVER_ADDR='NONE';}
if(isset($_SERVER['SERVER_NAME'])){$SERVER_NAME=mysqli_real_escape_string($track_conn,$_SERVER['SERVER_NAME']);}else{$SERVER_NAME='NONE';}
if(isset($_SERVER['SERVER_SOFTWARE'])){$SERVER_SOFTWARE=mysqli_real_escape_string($track_conn,$_SERVER['SERVER_SOFTWARE']);}else{$SERVER_SOFTWARE='NONE';}
if(isset($_SERVER['SERVER_PROTOCOL'])){$SERVER_PROTOCOL=mysqli_real_escape_string($track_conn,$_SERVER['SERVER_PROTOCOL']);}else{$SERVER_PROTOCOL='NONE';}
if(isset($_SERVER['REQUEST_METHOD'])){$REQUEST_METHOD=mysqli_real_escape_string($track_conn,$_SERVER['REQUEST_METHOD']);}else{$REQUEST_METHOD='NONE';}
if(isset($_SERVER['REQUEST_TIME'])){$REQUEST_TIME=mysqli_real_escape_string($track_conn,$_SERVER['REQUEST_TIME']);}else{$REQUEST_TIME='NONE';}
if(isset($_SERVER['QUERY_STRING'])){$QUERY_STRING=mysqli_real_escape_string($track_conn,$_SERVER['QUERY_STRING']);}else{$QUERY_STRING='NONE';}
if(isset($_SERVER['DOCUMENT_ROOT'])){$DOCUMENT_ROOT=mysqli_real_escape_string($track_conn,$_SERVER['DOCUMENT_ROOT']);}else{$DOCUMENT_ROOT='NONE';}
if(isset($_SERVER['HTTP_ACCEPT'])){$HTTP_ACCEPT=mysqli_real_escape_string($track_conn,$_SERVER['HTTP_ACCEPT']);}else{$HTTP_ACCEPT='NONE';}
if(isset($_SERVER['HTTP_ACCEPT_CHARSET'])) {$HTTP_ACCEPT_CHARSET=mysqli_real_escape_string($track_conn,$_SERVER['HTTP_ACCEPT_CHARSET']);}else{$HTTP_ACCEPT_CHARSET='NONE';}
if(isset($_SERVER['HTTP_ACCEPT_ENCODING'])){$HTTP_ACCEPT_ENCODING=mysqli_real_escape_string($track_conn,$_SERVER['HTTP_ACCEPT_ENCODING']);}else{$HTTP_ACCEPT_ENCODING='NONE';}
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){$HTTP_ACCEPT_LANGUAGE=mysqli_real_escape_string($track_conn,$_SERVER['HTTP_ACCEPT_LANGUAGE']);}else{$HTTP_ACCEPT_LANGUAGE='NONE';}
if(isset($_SERVER['HTTP_CONNECTION'])){$HTTP_CONNECTION=mysqli_real_escape_string($track_conn,$_SERVER['HTTP_CONNECTION']);}else{$HTTP_CONNECTION='NONE';}
if(isset($_SERVER['HTTP_HOST'])){$HTTP_HOST=mysqli_real_escape_string($track_conn,$_SERVER['HTTP_HOST']);}else{$HTTP_HOST='NONE';}
if(isset($_SERVER['HTTP_REFERER'])) {$HTTP_REFERER=mysqli_real_escape_string($track_conn,$_SERVER['HTTP_REFERER']);}else{$HTTP_REFERER='NONE';}
if(isset($_SERVER['HTTP_USER_AGENT'])){$HTTP_USER_AGENT=mysqli_real_escape_string($track_conn,$_SERVER['HTTP_USER_AGENT']);}else{$HTTP_USER_AGENT='NONE';}
if(isset($_SERVER['HTTPS'])) {$HTTPS=mysqli_real_escape_string($track_conn,$_SERVER['HTTPS']);}else{$HTTPS = 'NONE';}
if(isset($_SERVER['REMOTE_ADDR'])){$REMOTE_ADDR=mysqli_real_escape_string($track_conn,$_SERVER['REMOTE_ADDR']);}else{$REMOTE_ADDR='NONE';}
if(isset($_SERVER['REMOTE_HOST'])) {$REMOTE_HOST=mysqli_real_escape_string($track_conn,$_SERVER['REMOTE_HOST']);}else{$REMOTE_HOST='NONE';}
if(isset($_SERVER['REMOTE_PORT'])){$REMOTE_PORT=mysqli_real_escape_string($track_conn,$_SERVER['REMOTE_PORT']);}else{$REMOTE_PORT='NONE';}
if(isset($_SERVER['REMOTE_USER'])){$REMOTE_USER=mysqli_real_escape_string($track_conn,$_SERVER['REMOTE_USER']);}else{$REMOTE_USER='NONE';}
if(isset($_SERVER['REDIRECT_REMOTE_USER'])){$REDIRECT_REMOTE_USER=mysqli_real_escape_string($track_conn,$_SERVER['REDIRECT_REMOTE_USER']);}else{$REDIRECT_REMOTE_USER='NONE';}
if(isset($_SERVER['SCRIPT_FILENAME'])){$SCRIPT_FILENAME=mysqli_real_escape_string($track_conn,$_SERVER['SCRIPT_FILENAME']);}else{$SCRIPT_FILENAME='NONE';}
if(isset($_SERVER['SERVER_ADMIN'])){$SERVER_ADMIN=mysqli_real_escape_string($track_conn,$_SERVER['SERVER_ADMIN']);}else{$SERVER_ADMIN='NONE';}
if(isset($_SERVER['SERVER_PORT'])){$SERVER_PORT=mysqli_real_escape_string($track_conn,$_SERVER['SERVER_PORT']);}else{$SERVER_PORT='NONE';}
if(isset($_SERVER['SERVER_SIGNATURE'])&&$_SERVER['SERVER_SIGNATURE']!==null&&$_SERVER['SERVER_SIGNATURE']!=="") {$SERVER_SIGNATURE=mysqli_real_escape_string($track_conn,$_SERVER['SERVER_SIGNATURE']);}else{$SERVER_SIGNATURE='NONE';}
if(isset($_SERVER['PATH_TRANSLATED'])) {$PATH_TRANSLATED=mysqli_real_escape_string($track_conn,$_SERVER['PATH_TRANSLATED']);}else{$PATH_TRANSLATED='NONE';}
if(isset($_SERVER['SCRIPT_NAME'])){$SCRIPT_NAME=mysqli_real_escape_string($track_conn,$_SERVER['SCRIPT_NAME']);}else{$SCRIPT_NAME='NONE';}
if(isset($_SERVER['SCRIPT_URI'])) {$SCRIPT_URI=mysqli_real_escape_string($track_conn,$_SERVER['SCRIPT_URI']);}else{$SCRIPT_URI='NONE';}
if(isset($_SERVER['PHP_AUTH_DIGEST'])){$PHP_AUTH_DIGEST=mysqli_real_escape_string($track_conn,$_SERVER['PHP_AUTH_DIGEST']);}else{$PHP_AUTH_DIGEST='NONE';}
if(isset($_SERVER['PHP_AUTH_USER'])){$PHP_AUTH_USER=mysqli_real_escape_string($track_conn,$_SERVER['PHP_AUTH_USER']);}else{$PHP_AUTH_USER='NONE';}
if(isset($_SERVER['PHP_AUTH_PW'])){$PHP_AUTH_PW=mysqli_real_escape_string($track_conn,$_SERVER['PHP_AUTH_PW']);}else{$PHP_AUTH_PW='NONE';}
if(isset($_SERVER['AUTH_TYPE'])){$AUTH_TYPE=mysqli_real_escape_string($track_conn,$_SERVER['AUTH_TYPE']);}else{$AUTH_TYPE='NONE';}
if(isset($_SERVER['PATH_INFO'])){$PATH_INFO=mysqli_real_escape_string($track_conn,$_SERVER['PATH_INFO']);}else{$PATH_INFO='NONE';}
if(isset($_SERVER['ORIG_PATH_INFO'])){$ORIG_PATH_INFO=$_SERVER['ORIG_PATH_INFO'];}else{$ORIG_PATH_INFO='NONE';}
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])&&$_SERVER["HTTP_CF_CONNECTING_IP"]!=NULL){
    $CONNECTING_IP=mysqli_real_escape_string($track_conn,$_SERVER["HTTP_CF_CONNECTING_IP"]);
    $ip_Decode = json_decode(file_get_contents('http://freegeoip.net/json/'.$CONNECTING_IP));
    $country_code= mysqli_real_escape_string($track_conn,$ip_Decode->country_code);
    $country_name= mysqli_real_escape_string($track_conn,$ip_Decode->country_name);
    $region_code= mysqli_real_escape_string($track_conn,$ip_Decode->region_code);
    $region_name= mysqli_real_escape_string($track_conn,$ip_Decode->region_name);
    $city= mysqli_real_escape_string($track_conn,$ip_Decode->city);
    $zip_code= mysqli_real_escape_string($track_conn,$ip_Decode->zip_code);
    $time_zone= mysqli_real_escape_string($track_conn,$ip_Decode->time_zone);
}else{
    $CONNECTING_IP="NULL";
    $country_code="NULL";
    $country_name="NULL";
    $region_code="NULL";
    $region_name="NULL";
    $city="NULL";
    $zip_code="NULL";
    $time_zone="NULL";
}
$YEAR=date("Y");
$MONTH=date("Y").'/'.date("F");
$DAY=date("Y").'/'.date("F").'/'.date("d");
$HOUR=date("Y").'/'.date("F").'/'.date("d").':'.date("G");

$track_sql="INSERT INTO `traffic`(`PHP_SELF`, `GATEWAY_INTERFACE`, `SERVER_ADDR`, `SERVER_NAME`, `SERVER_SOFTWARE`, `SERVER_PROTOCOL`, `REQUEST_METHOD`, `REQUEST_TIME`, `QUERY_STRING`, `DOCUMENT_ROOT`, `HTTP_ACCEPT`, `HTTP_ACCEPT_CHARSET`, `HTTP_ACCEPT_ENCODING`, `HTTP_ACCEPT_LANGUAGE`, `HTTP_CONNECTION`, `HTTP_HOST`, `HTTP_REFERER`, `HTTP_USER_AGENT`, `HTTPS`, `REMOTE_ADDR`, `REMOTE_HOST`, `REMOTE_PORT`, `REMOTE_USER`, `REDIRECT_REMOTE_USER`, `SCRIPT_FILENAME`, `SERVER_ADMIN`, `SERVER_PORT`, `SERVER_SIGNATURE`, `PATH_TRANSLATED`, `SCRIPT_NAME`, `SCRIPT_URI`, `PHP_AUTH_DIGEST`, `PHP_AUTH_USER`, `PHP_AUTH_PW`, `AUTH_TYPE`, `PATH_INFO`, `ORIG_PATH_INFO`, `YEAR`, `MONTH`, `DAY`, `HOUR`, `CONNECTING_IP`, `country_code`, `country_name`, `region_code`, `region_name`, `city`, `zip_code`, `time_zone`)
VALUES ('$PHP_SELF', '$GATEWAY_INTERFACE', '$SERVER_ADDR', '$SERVER_NAME', '$SERVER_SOFTWARE', '$SERVER_PROTOCOL', '$REQUEST_METHOD', '$REQUEST_TIME', '$QUERY_STRING', '$DOCUMENT_ROOT', '$HTTP_ACCEPT', '$HTTP_ACCEPT_CHARSET', '$HTTP_ACCEPT_ENCODING', '$HTTP_ACCEPT_LANGUAGE', '$HTTP_CONNECTION', '$HTTP_HOST', '$HTTP_REFERER', '$HTTP_USER_AGENT', '$HTTPS', '$REMOTE_ADDR', '$REMOTE_HOST', '$REMOTE_PORT', '$REMOTE_USER', '$REDIRECT_REMOTE_USER', '$SCRIPT_FILENAME', '$SERVER_ADMIN', '$SERVER_PORT', '$SERVER_SIGNATURE', '$PATH_TRANSLATED', '$SCRIPT_NAME', '$SCRIPT_URI', '$PHP_AUTH_DIGEST', '$PHP_AUTH_USER', '$PHP_AUTH_PW', '$AUTH_TYPE', '$PATH_INFO', '$ORIG_PATH_INFO', '$YEAR', '$MONTH', '$DAY', '$HOUR', '$CONNECTING_IP', '$country_code', '$country_name', '$region_code', '$region_name', '$city', '$zip_code', '$time_zone')";
track_db_query('analytics',$track_sql);
mysqli_close($track_conn);