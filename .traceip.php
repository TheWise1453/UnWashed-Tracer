<?php
function trac($ip) {

$data = @unserialize(file_get_contents("http://ip-api.com/php/".$ip));
$FCL="\033[01;33m";
$MCL="\033[01;37m>\033[01;32m";
$NCL="\033[00m";
date_default_timezone_set($data['timezone']);
system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m _
     \033[01;31m(_)\033[01;33m  UnWashed Tracer


   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m--------------- \033[01;32mIP Bilgileri\033[01;31m ---------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;

if(!empty($data['status']) && $data['status'] == 'success') {
echo "\n ".$FCL."IP Addresi    ".$MCL."   ".$data['query'];
echo "\n ".$FCL."Ülke kodu  ".$MCL."   ".$data['countryCode'];
echo "\n ".$FCL."Ülke       ".$MCL."   ".$data['country'];
echo "\n ".$FCL."Tarih ve Zaman   ".$MCL."   ".date("F j, Y, g:i a");
echo "\n ".$FCL."Bölge kodu   ".$MCL."   ".$data['region'];
echo "\n ".$FCL."Bölge        ".$MCL."   ".$data['regionName'];
echo "\n ".$FCL."City          ".$MCL."   ".$data['city'];
echo "\n ".$FCL."Posta Kodu      ".$MCL."   ".$data['zip'];
echo "\n ".$FCL."Zaman Dilimi     ".$MCL."   ".$data['timezone'];
echo "\n ".$FCL."ISP           ".$MCL."   ".$data['isp'];
echo "\n ".$FCL."Organizasyon  ".$MCL."   ".$data['org'];
echo "\n ".$FCL."ASN           ".$MCL."   ".$data['as'];
echo "\n ".$FCL."Enlem      ".$MCL."   ".$data['lat'];
echo "\n ".$FCL."Boylam    ".$MCL."   ".$data['lon'];
echo "\n ".$FCL."Konum      ".$MCL."   ".$data['lat'].",".$data['lon'];
echo "\n\n$NCL";
} else {
  echo "\n\033[01;31m Sorry unable to track your\033[01;33m IP Address\033[01;31m !!!\033[00m\n";
  echo "\033[01;31m Check your \033[01;33mNetwork connection\033[01;31m !!\033[00m\n";
  echo "\033[01;31m If you are \033[01;33mOnline\033[01;31m then check your \033[01;33mIP Address\033[01;31m !!\033[00m\n\n";
}
}
trac($argv[1]);
?>
