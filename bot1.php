<?php

date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$H="\033[0;30m";
$AB2="\033[1;30m";
$P="\033[0;37m";
$P2="\033[1;37m";
$M="\033[0;31m";
$M2="\033[1;31m";
$HJ="\033[0;32m";
$HJ2="\033[1;32m";
$K="\033[0;33m";
$K2="\033[1;33m";
$B="\033[0;34m";
$B2="\033[1;34m";
$U="\033[0;35m";
$U2="\033[1;35m";
$BL="\033[0;36m";
$BL2="\033[1;36m";
/* END COLOR */

function fetch_value($str,$find_start) {
        $start = @strpos($str,$find_start);
        if ($start === false) {
                return "";
        }
        $length = strlen($find_start);
        $end = strpos(substr($str,$start +$length));
        return trim(substr($str,$start +$length));
}


function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi 8A Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

$res = url("http://controlc.com/948db76b");
//echo $res."\n";
$link1 = explode('Link Password: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Pass: ',$res);
$pw = explode(' ',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system('clear');
echo $baner = "
\033[1;31mWELLCOME TO MY SCRIPT
\033[1;32m
==========================================     
             THANH NGUYEN SG
 https://youtube.com/c/thanhnguyen
==========================================
 \033[1;31m\n";                                                
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";

if ($pass == 'no'){
      echo $M2." ◼ Script Sudah Di Off Kan\n";
      exit;                                                       }else{
if($read == $pass){
      echo $HJ2." ▶ Proses Upload Password \n";
      sleep(5);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;31m ◼$P2 Link Password: https://link1s.com/68I28I7$HJ2 $link[0]\n";
echo $M2." ◼ \033[1;37m NHẬP PASSWORD : ".$M2;
$p = trim(fgets(STDIN));

if($pass == $p){
        fwrite($save, $p);
        echo $HJ2."\n ◼ LOGIN Thành Công\n";
        fclose($save);
        sleep(2);
        echo " ◼ ĐỪNG QUÊN CÀ PHÊ..!! THƯỞNG THỨC CÔNG VIỆC CỦA BẠN\n";
        sleep(3);
        }else{
        echo $M2." ◼ LOGIN THẤT BẠI, HÃY KIỂM TRA LẠI MẬT KHẨU\n";
        exit;
        }
        }
}
sleep(3);


include("cfg.php");
function pisit($url, $ua){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function TipePost($url, $ua, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}
echo"\n\n Bất đầu chạy tool Xem quản cáo\n";
echo$yellow2."....\n==============================\n\n";

while(true){
  
  // LITECOIN
$url = "https://adltc.cc/surf";
$ua = ["user-agent: ".$useragent,
"cookie: __cfduid=dd7f170dc97ab1102b41d10292bda64271606529684",
"cookie: HstCfa4211943=1606529686287",
"cookie: HstCmu4211943=1606529686287",
"cookie: __dtsu=6D001606524693D25EE02E64988610ED",
"cookie: FreMe=ZmF0aGFuY2FoeWFkaQ%3D%3D",
"cookie: FreMeP=YTdmMTczYTkzNDBhMjE3YmM1ZTRkOTk2NWZkZGM0MzY%3D",
"cookie: SAreD=SAreDV",
"cookie: dom3ic8zudi28v8lr6fgphwffqoz0j6c=78ce498e-dc8b-49d9-a969-cb7b760026d5%3A3%3A1",
"cookie: 494668b4c0ef4d25bda4e75c27de2817=78ce498e-dc8b-49d9-a969-cb7b760026d5:3:1",
"cookie: _data_html=30-1_77-1",
"cookie: popcashpu=1",
"cookie: a=FSQoyQzH2QA7zbZGHMT68SiR17MSdpED",
"cookie: ".$ssid_ltc,
"cookie: HstCnv4211943=13",
"cookie: HstCns4211943=16",
"cookie: SAsurf=SAsurfVal",
"cookie: HstCla4211943=1606715050951",
"cookie: HstPn4211943=8",
"cookie: HstPt4211943=96",
"cookie: MarketGidStorage=%7B%220%22%3A%7B%7D%2C%22C359710%22%3A%7B%22page%22%3A3%2C%22time%22%3A1606715053715%7D%7D",
"cookie: token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BAYAX8SGrgFfxIaugAGBAsAAIEzPSVxIOwjPP-keZSW5IoQ226LJ1ZDoP9cSIUb9AzHjwQBHMEUCIA0SDjDxpQrkraK-WgF_Fxp-0cY89qBgwMYX5s8BZX2YAiEA5wfJBkCDtqN85I3C8VAaYf2d96gAhRrlansQs60TquY",
"cookie: _popprepop=1"];



$cfg = pisit($url, $ua);

$one = explode("Account Balance<br><b>", $cfg);
$two = explode("</b>", $one[1]);
$Bal = "$two[0]";


$one = explode('<input type="hidden" id="adsid" value="', $cfg);
$two = explode('">', $one[1]);
$id = "$two[0]";

$one = explode("Duration : <b>", $cfg);
$two = explode("</b>", $one[1]);
$time = "$two[0]";





$link = "https://adltc.cc/earndata.php";
$data = "adsids=$id";

$cfg = TipePost($link, $ua, $data);

echo $lblue2."  [LTC]  Success Total Balance: {$green2}$Bal\n";

for($x=0; $x<$time; $x++){
	echo "\r                                             \r";
		      sleep(1);
		      echo $lblue2."Wait ".$x." 40 Seconds";
	echo "\r                                             \r";
	
}






// DIGIBYTE
$url = "https://adsdgb.com/surf";
$ua = ["user-agent: ".$useragent,
"cookie: __cfduid=dddbe17796643151e0c555769c50460171606543878",
"cookie: HstCfa4461429=1606543879539",
"cookie: HstCmu4461429=1606543879539",
"cookie: c_ref_4461429=https%3A%2F%2Fadltc.cc%2F",
"cookie: __dtsu=6D001606524693D25EE02E64988610ED",
"cookie: ".$ssid_dgb,
"cookie: HstCnv4461429=3",
"cookie: HstCns4461429=3",
"cookie: SAregister=SAregister_existed",
"cookie: FreMe=ZmF0aGFuY2FoeWFkaQ%3D%3D",
"cookie: FreMeP=YTdmMTczYTkzNDBhMjE3YmM1ZTRkOTk2NWZkZGM0MzY%3D",
"cookie: SAreD=SAreDV",
"cookie: ppu_main_eda849d2b2d7c08ce08dd74b8ca961e7=1",
"cookie: dom3ic8zudi28v8lr6fgphwffqoz0j6c=78ce498e-dc8b-49d9-a969-cb7b760026d5%3A3%3A1",
"cookie: 494668b4c0ef4d25bda4e75c27de2817=78ce498e-dc8b-49d9-a969-cb7b760026d5:3:1",
"cookie: ppu_sub_eda849d2b2d7c08ce08dd74b8ca961e7=1",
"cookie: SAsurf=SAsurfVal",
"cookie: HstCla4461429=1606715434120",
"cookie: HstPn4461429=12",
"cookie: HstPt4461429=14"];

$cfg = pisit($url, $ua);

$one = explode("Account Balance<br><b>", $cfg);
$two = explode("</b>", $one[1]);
$Bal = "$two[0]";

echo $lblue2."  [DGB]  Success Total Balance: {$green2}$Bal\n";

$one = explode('<input type="hidden" id="adsid" value="', $cfg);
$two = explode('">', $one[1]);
$id = "$two[0]";

$one = explode("Duration : <b>", $cfg);
$two = explode("</b>", $one[1]);
$time = "$two[0]";





$url = "https://adsdgb.com/earndata.php";
$data = "adsids=$id";

$cfg = TipePost($url, $ua, $data);

for($x=0; $x<$time; $x++){
	echo "\r                                             \r";
			sleep(1);
	              echo "{$green2}Wait {$putih2}[{$red2}$x{$putih2}]";
	echo "\r                                             \r";
	
}




// TRX
$PHPSESSID = "h6hggbsjds6s9heleoeqhaeje7";
$url = "https://surf-trx.com/surf";
$ua = ["user-agent: ".$useragent,
"cookie: __cfduid=d7da2acbf2decdc5394e2837f57575b971606524686",
"cookie: HstCfa4448235=1606524690053",
"cookie: HstCmu4448235=1606524690053",
"cookie: __dtsu=6D001606524693D25EE02E64988610ED",
"cookie: FreMe=ZmF0aGFuY2FoeWFkaQ%3D%3D",
"cookie: FreMeP=YTdmMTczYTkzNDBhMjE3YmM1ZTRkOTk2NWZkZGM0MzY%3D",
"cookie: SAreD=SAreDV",
"cookie: 494668b4c0ef4d25bda4e75c27de2817=78ce498e-dc8b-49d9-a969-cb7b760026d5:3:1",
"cookie: dom3ic8zudi28v8lr6fgphwffqoz0j6c=78ce498e-dc8b-49d9-a969-cb7b760026d5%3A3%3A1",
"cookie: c_ref_4448235=https%3A%2F%2Fadltc.cc%2F",
"cookie: a=Fk82KrUrXeXNKlr18on7OGnoNRToaddJ",
"cookie: popcashpu=1",
"cookie: 6US=1",
"cookie: ".$ssid_trx,
"cookie: HstCnv4448235=8",
"cookie: HstCns4448235=10",
"cookie: token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BAYAX8SEZAFfxIRkgAGBAsAAIJfMO5yIIuNQRYnlRFHSEKn02uHTVUQmvmrhTGbt1t5WwQBGMEQCIEJIeQKScdzCD8nq8AAyTRiOUIZvXbQ9wxCtEbrHBJVZAiAWYuqbzW9FKNiQxPZ4ovD1XT_GYFeqJ9vDd9-63c5N_w",
"cookie: pop_delay_651=1",
"cookie: SAsurf=SAsurfVal",
"cookie: HstCla4448235=1606714521276",
"cookie: HstPn4448235=5",
"cookie: HstPt4448235=50"];

$cfg = pisit($url, $ua);

$one = explode("Account Balance<br><b>", $cfg);
$two = explode("</b>", $one[1]);
$Bal = "$two[0]";


echo $lblue2."  [TRX]  Success Total Balance: {$green2}$Bal\n";

$one = explode('<input type="hidden" id="adsid" value="', $cfg);
$two = explode('">', $one[1]);
$id = "$two[0]";

$one = explode("Duration : <b>", $cfg);
$two = explode("</b>", $one[1]);
$time = "$two[0]";

#SURF
$url = "https://surf-trx.com/earndata.php";
$data = "adsids=$id";

$cfg = TipePost($url, $ua, $data);

for($x=0; $x<$time; $x++){
	echo "\r                                             \r";
	sleep(1);
        echo $lblue2."Wait ".$x." Seconds";
	echo "\r                                             \r";

}

$url = "https://addoge.cc/surf";
$ua = ["user-agent: ".$useragent,
"cookie: __cfduid=d4c8f35d88e9a483b3bcdc2a52229c7001606717370",
"cookie: HstCfa4198386=1606717380041",
"cookie: HstCmu4198386=1606717380041",
"cookie: c_ref_4198386=https%3A%2F%2Fwww.google.com%2F",
"cookie: __dtsu=6D001606524693D25EE02E64988610ED",
"cookie: SAregister=SAregister_existed",
"cookie: FreMe=ZmF0aGFuY2FoeWFkaQ%3D%3D",
"cookie: FreMeP=YTdmMTczYTkzNDBhMjE3YmM1ZTRkOTk2NWZkZGM0MzY%3D",
"cookie: SAreD=SAreDV",
"cookie: ".$ssid_doge,
"cookie: HstCnv4198386=4",
"cookie: HstCns4198386=5",
"cookie: a=dTpQ0vym3OVNsQT4yhoLwv0wx1qyri2r",
"cookie: 6US=1",
"cookie: token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BAYAX8V1fAFfxXV_gAGBAsAAII_d2tYnAf0TS9YcPyd7yf4PB7OROghAaSIgscERCwFawQBGMEQCIEOyO4Fc25likbJ8v_QHnAMcaerv3bblk_7p1C8o9u9kAiAgu-gDqHRpL2ERrU5-CdGhqWNUFBZyuwFyC5Az8fyCRQ",
"cookie: _popprepop=1",
"cookie: SAsurf=SAsurfVal",
"cookie: HstCla4198386=1606776230015",
"cookie: HstPn4198386=5",
"cookie: HstPt4198386=17",
"cookie: MarketGidStorage=%7B%220%22%3A%7B%22svspr%22%3A%22https%3A%2F%2Faddoge.cc%2Flogin%22%2C%22svsds%22%3A1%2C%22TejndEEDj%22%3A%225MC7KaV7%2B%22%7D%2C%22C337415%22%3A%7B%22page%22%3A2%2C%22time%22%3A1606776230738%7D%7D"];



$cfg = pisit($url, $ua);

$one = explode("Account Balance<br><b>", $cfg);
$two = explode("</b>", $one[1]);
$Bal = "$two[0]";


$one = explode('<input type="hidden" id="adsid" value="', $cfg);
$two = explode('">', $one[1]);
$id = "$two[0]";

$one = explode("Duration : <b>", $cfg);
$two = explode("</b>", $one[1]);
$time = "$two[0]";


$link = "https://addoge.cc/earndata.php";
$data = "adsids=$id";

$cfg = TipePost($link, $ua, $data);

echo $lblue2."  [DOGE] Success Total Balance: {$green2}$Bal\n";

for($x=0; $x<$time; $x++){
        echo "\r                                             \r";
                      sleep(1);
                      echo $lblue2."Wait ".$x." Seconds";
        echo "\r                                             \r";

}


$url = "https://surfingbtc.cc/surf";
$ua = ["user-agent: ".$useragent,
"cookie: __cfduid=d4c8f35d88e9a483b3bcdc2a52229c7001606717370",
"cookie: HstCfa4198386=1606717380041",
"cookie: HstCmu4198386=1606717380041",
"cookie: c_ref_4198386=https%3A%2F%2Fwww.google.com%2F",
"cookie: __dtsu=6D001606524693D25EE02E64988610ED",
"cookie: SAregister=SAregister_existed",
"cookie: FreMe=ZmF0aGFuY2FoeWFkaQ%3D%3D",
"cookie: FreMeP=YTdmMTczYTkzNDBhMjE3YmM1ZTRkOTk2NWZkZGM0MzY%3D",
"cookie: SAreD=SAreDV",
"cookie: ".$ssid_btc,
"cookie: HstCnv4198386=4",
"cookie: HstCns4198386=5",
"cookie: a=dTpQ0vym3OVNsQT4yhoLwv0wx1qyri2r",
"cookie: 6US=1",
"cookie: token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BAYAX8YFeAFfxgV4gAGBAsAAICbph5bWiApnGrRFGqjSnWO4S0BOrIiYa6oU3MuIys3jwQBGMEQCIDuCQe96n3SBSRQmu5g-NxRw0-UqCjoW8vP13Ra9yBeOAiAor7sc0G6ey8eVKdhRq3KWK4V65QqCdbvKpg39n-fp8A",
"cookie: _popprepop=1",
"cookie: SAsurf=SAsurfVal",
"cookie: HstCla4198386=1606776230015",
"cookie: HstPn4198386=5",
"cookie: HstPt4198386=17",
"cookie: MarketGidStorage=%7B%220%22%3A%7B%7D%2C%22C383944%22%3A%7B%22page%22%3A2%2C%22time%22%3A1606813106496%7D%7D"];


$cfg = pisit($url, $ua);

$one = explode("Account Balance<br><b>", $cfg);
$two = explode("</b>", $one[1]);
$Bal = "$two[0]";


$one = explode('<input type="hidden" id="adsid" value="', $cfg);
$two = explode('">', $one[1]);
$id = "$two[0]";

$one = explode("Duration : <b>", $cfg);
$two = explode("</b>", $one[1]);
$time = "$two[0]";


$link = "https://surfingbtc.cc/earndata.php";
$data = "adsids=$id";

$cfg = TipePost($link, $ua, $data);

echo $lblue2."  [BTC]  Success Total Balance: {$green2}$Bal\n";

for($x=0; $x<$time; $x++){
        echo "\r                                             \r";
                      sleep(1);
                      echo $lblue2."Wait ".$x." Seconds";
        echo "\r                                             \r";

}

}
