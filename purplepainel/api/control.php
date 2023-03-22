<?php

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM DNS");
$row3 = $rows3->fetchArray();


$status	=             $row3['status'];
$portal1	=           $row3['portal1'];
$portal2	=           $row3['portal2'];
$portal3		=         $row3['portal3'];
$portal4		=         $row3['portal4'];
$portal5		=         $row3['portal5'];
$portal6		=         $row3['portal6'];
$portal7		=         $row3['portal7'];
$portal8		=         $row3['portal8'];
$portal9		=         $row3['portal9'];
$portal10		=         $row3['portal10'];

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM images");
$row3 = $rows3->fetchArray();


$status	=             $row3['status'];
$image1	=           $row3['image1'];
$image2	=           $row3['image2'];
$image3		=         $row3['image3'];
$image4		=         $row3['image4'];
$image5		=         $row3['image5'];
$image6		=         $row3['image6'];
$image7		=         $row3['image7'];
$image8		=         $row3['image8'];
$image9		=         $row3['image9'];
$image10		=         $row3['image10'];

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM contact");
$row3 = $rows3->fetchArray();


$status	=             $row3['status'];
$whatsapp	=           $row3['whatsapp'];
$email	=           $row3['email'];
$skype		=         $row3['skype'];
$telegram		=         $row3['telegram'];
$website		=         $row3['website'];
$privacy		=         $row3['privacy'];

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM apps1");
$row3 = $rows3->fetchArray();


$status	=             $row3['status'];
$appname1	=           $row3['appname1'];
$appimg1	=           $row3['appimg1'];
$appurl1		=         $row3['appurl1'];
$appname2		=         $row3['appname2'];
$appimg2		=         $row3['appimg2'];
$appurl2		=         $row3['appurl2'];
$appname3		=         $row3['appname3'];
$appimg3	=         $row3['appimg3'];
$appurl3		=         $row3['appurl3'];

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM apps2");
$row3 = $rows3->fetchArray();


$status	=             $row3['status'];
$appname4	=           $row3['appname4'];
$appimg4	=           $row3['appimg4'];
$appurl4		=         $row3['appurl4'];
$appname5		=         $row3['appname5'];
$appimg5		=         $row3['appimg5'];
$appurl5		=         $row3['appurl5'];
$appname6		=         $row3['appname6'];
$appimg6	=         $row3['appimg6'];
$appurl6		=         $row3['appurl6'];

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM apps3");
$row3 = $rows3->fetchArray();


$status	=             $row3['status'];
$appname7	=           $row3['appname7'];
$appimg7	=           $row3['appimg7'];
$appurl7		=         $row3['appurl7'];
$appname8		=         $row3['appname8'];
$appimg8		=         $row3['appimg8'];
$appurl8		=         $row3['appurl8'];
$appname9		=         $row3['appname9'];
$appimg9	=         $row3['appimg9'];
$appurl9		=         $row3['appurl9'];

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM apps4");
$row3 = $rows3->fetchArray();


$status	=             $row3['status'];
$appname10	=           $row3['appname10'];
$appimg10	=           $row3['appimg10'];
$appurl10		=         $row3['appurl10'];
$appname11		=         $row3['appname11'];
$appimg11		=         $row3['appimg11'];
$appurl11		=         $row3['appurl11'];
$appname12		=         $row3['appname12'];
$appimg12	=         $row3['appimg12'];
$appurl12		=         $row3['appurl12'];

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM apps5");
$row3 = $rows3->fetchArray();


$status     	=         $row3['status'];
$appname13  	=         $row3['appname13'];
$appimg13   	=         $row3['appimg13'];
$appurl13		=         $row3['appurl13'];
$appname14		=         $row3['appname14'];
$appimg14		=         $row3['appimg14'];
$appurl14		=         $row3['appurl14'];
$appname15		=         $row3['appname15'];
$appimg15   	=         $row3['appimg15'];
$appurl15		=         $row3['appurl15'];

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM apps6");
$row3 = $rows3->fetchArray();


$status     	=         $row3['status'];
$appname16  	=         $row3['appname16'];
$appimg16   	=         $row3['appimg16'];
$appurl16		=         $row3['appurl16'];
$appname17		=         $row3['appname17'];
$appimg17		=         $row3['appimg17'];
$appurl17		=         $row3['appurl17'];
$appname18		=         $row3['appname18'];
$appimg18   	=         $row3['appimg18'];
$appurl18		=         $row3['appurl18'];

$db = new SQLite3('./api/.db.db');
$rows3 = $db->query("SELECT * FROM settings");
$row3 = $rows3->fetchArray();


$sett1     	=         $row3['sett1'];
$sett2  	=         $row3['sett2'];
$sett3   	=         $row3['sett3'];
$sett4		=         $row3['sett4'];
$sett5		=         $row3['sett5'];






 $result = '{"app_mode":"Xstream","app_mode_universal":"http:\/\/my.purplesmarttv.com\/api.php?code=","in_app_purchase":{"in_app_purchase_id":"","lic_key":"","in_app_status":"false"},"ads":{"ads_app_id":"1","ads_banner":"","ads_intrestial":"","ads_rewarded":"","ads_native":"false","ads_status":"false"},"app_conf":{"allow_4k":"true","content_4k":"","domain_url":"","login_url":"","package_name":"com.ank.tvuhd","privacy_policy":"","private_access":"'.$sett3.'","private_video_url":"http://5.189.169.242/VOD/6Days.2017.avi","startup_msg":"Thank You for Using our app","vpn":"true","allow_cast":"true","remote_support":"true","setting_option":"true","wifi_option":"true","app_list_status":"true","private_menu":"'.$sett3.'","startup_auto_boot":"false","startup_device_select":"true","manual_device_select":"true","default_device_select":{"detect":"false","device":"TV"}},"app_dns":[{"url":"'.$portal1.'"},{"url":"'.$portal2.'"},{"url":"'.$portal3.'"},{"url":"'.$portal4.'"},{"url":"'.$portal5.'"},{"url":"'.$portal6.'"},{"url":"'.$portal7.'"},{"url":"'.$portal8.'"},{"url":"'.$portal9.'"},{"url":"'.$portal10.'"},{"url":""}],"app_image":{"app_img":"true","app_logo":"'.$image1.'","app_mobile_icon":"'.$image1.'","app_tv_banner":"'.$image1.'","splash_image":"'.$image2.'","back_image":"'.$image3.'"},"about":{"description":"Welcome To Xtremity Tv","developed":"Xtremity Tv","name":"Xtremity Tv","skype":"'.$skype.'","telegram":"'.$telegram.'","whatsapp":"'.$whatsapp.'"},"support":{"email":"'.$email.'","web":"'.$website.'","skype":"'.$skype.'","telegram":"'.$telegram.'","whatsapp":"'.$whatsapp.'"},"version":{"version_check":"false","version_code":"20","version_name":"1.0.0.495","version_download_url":"","version_download_url_apk":"","version_force_update":"false","version_update_msg":"Update...."},"api_key":{"imdb_api":"https:\/\/omdbapi.b-cdn.net\/?t=%s&apikey=f608cd74","g_api_key":"AIzaSyCXTlsFcriBtNmakgbCoP7XGfRGcB_Mc0c","image_imdb":"https:\/\/images.metahub.space\/poster\/large\/%s\/img","trakt_api_key":"9f2897b7a0dac4606e3074622cf6c52581f8dc208bc1520381b18bd90b74e257","vpn_url":"https://xvpn.b-cdn.net/test.php","vpn_username":"tLe7XxPXgnnb7fj6Egt68LnM","vpn_password":"ZB6pZk6dv6uFp6SZGqZ99HZA"},"background":{"background_auto_change":"'.$sett2.'","background_mannual_change":"false","background_orverlay_color_code":"'.$sett5.'","background_url":[{"url":"'.$image4.'"},{"url":"'.$image5.'"},{"url":"'.$image6.'"},{"url":"'.$image7.'"},{"url":"'.$image8.'"},{"url":"'.$image9.'"},{"url":"'.$image10.'"}]},"language":{"defult_language":"EN","firstime_select_language":"'.$sett4.'"},"themes":{"theme_defult_layout":"'.$sett1.'","theme_color_1":"true","theme_color_2":"","theme_color_3":"","theme_change":"true"},"private_menu":[{"addtion_app_icon":"'.$appimg1.'","addtion_app_name":"'.$appname1.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl1.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg2.'","addtion_app_name":"'.$appname2.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl2.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg3.'","addtion_app_name":"'.$appname3.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl3.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg4.'","addtion_app_name":"'.$appname4.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl4.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg5.'","addtion_app_name":"'.$appname5.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl5.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg6.'","addtion_app_name":"'.$appname6.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl6.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg7.'","addtion_app_name":"'.$appname7.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl7.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg8.'","addtion_app_name":"'.$appname8.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl8.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg9.'","addtion_app_name":"'.$appname9.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl9.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg10.'","addtion_app_name":"'.$appname10.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl10.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg11.'","addtion_app_name":"'.$appname11.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl11.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg12.'","addtion_app_name":"'.$appname12.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl12.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg13.'","addtion_app_name":"'.$appname13.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl13.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg14.'","addtion_app_name":"'.$appname14.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl14.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg15.'","addtion_app_name":"'.$appname15.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl15.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg16.'","addtion_app_name":"'.$appname16.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl16.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg17.'","addtion_app_name":"'.$appname17.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl17.'","addtion_app_status":""},{"addtion_app_icon":"'.$appimg18.'","addtion_app_name":"'.$appname18.'","addtion_app_pkg":"","addtion_app_url":"'.$appurl18.'","addtion_app_status":""}]}';
 
?>
