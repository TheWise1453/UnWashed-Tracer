<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m -
     \033[01;31m(_)\033[01;33m    UnWashed Team


   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m-------------- \033[01;32mIP Konumunu tara\033[01;31m --------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;
}

function About() {
  logo();
  echo <<<EOL

         \033[01;33mYapımcı \033[01;37m:- \033[01;36mTheWise
         \033[01;33mTeam \033[01;37m:- \033[01;36mUnWashed Team
         \033[01;33mGithub \033[01;37m:- \033[01;36mTheWise1453

 \033[01;33mIP-Tracer\033[01;32m is use \033[01;36mip-api \033[01;32mto retrive any ip address information. Our system will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
  $getact = readline('  IP-Tracer >> ');
  menu();
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating IP-Tracer.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/TheWise1453/UnWashed-Tracer.git");
  system("cd ~/ && sudo git clone https://github.com/TheWise1453/UnWashed-Tracer.git");
  system("cd ~/UnWashed-Tracer && sh install");
  logo();
  echo "\n\033[01;32m              Tracer güncellendi !!!\033[01;37m\n";
  sleep(1);
  menu();
}

function menu() {
  logo();
  echo "   \033[01;32m[ \033[01;37m1 \033[01;32m] \033[01;33mHedef IP Adresini tarama.\n";
  echo "   \033[01;32m[ \033[01;37m2 \033[01;32m] \033[01;33mKendi IP Adresinizi tarayın.\n";
  echo "   \033[01;32m[ \033[01;37m5 \033[01;32m] \033[01;33mToolu güncelle.\n";
  echo "   \033[01;32m[ \033[01;37mx \033[01;32m] \033[01;33mÇık \n\n\033[00m";
  $inp = readline('  IP-Tracer >> ');
  if ($inp=="x" || $inp=="exit") {
    echo "\n\033[01;31m  Kapatılıyor .......\033[00m\n";
    sleep(1);
    echo "\033[01;32m  TheWise iyi kullanımlar diler ....... :)\n\n\033[00m";
    exit();
  } else if ($inp=="1") {
    trac();
  } else if ($inp=="2") {
    tracm();
  } else if ($inp=="3") {
    About();
  } else if ($inp=="4") {
    help();
  } else if ($inp=="5") {
    upd();
  } else {
    echo "\n  \033[01;31mErr : Geçersiz Komut \033[01;32m'$inp'\033[00m";
    sleep(1);
    menu();
  }
}
menu();
?>
