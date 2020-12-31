
BAHAN BAHAN BAHAN BAHAN

<?php

// PARSHING

function fetch_value($str,$find_start,$find_end) {
$start = @strpos($str,$find_start);
if ($start === false) {
return "";
}
$length = strlen($find_start);
$end = strpos(substr($str,$start +$length),$find_end);
return trim(substr($str,$start +$length,$end));
}

//JSON PARSE

function json($namaakhir, $namatampil){
$json = json_decode($namaakhir);
$hasil = $json->$namatampil;
return $hasil;
}

// PERUBAH WARNA TEXT

/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$merah="\033[0;31m";
$merah2="\033[1;31m";
$hijau="\033[0;32m";
$hijau2="\033[1;32m";
$kuning="\033[0;33m";
$kuning2="\033[1;33m";
$biru="\033[0;34m";
$biru2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

//  KARAKTER KOTAK
$seru=$putih2." [".$kuning2."?".$putih2."] ";
$plus=$putih2." [".$kuning2."+".$putih2."] ";
$cek=$putih2." [".$kuning2."✓".$putih2."] ";

•••••••••••••••••••••••••••••••
        FOR WEBSOCKET
•••••••••••••••••••••••••••••••

// SECURE TOKEN WEBSHOCKET

function token($key,$data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://securetoken.googleapis.com/v1/token?key='.$key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=refresh_token&refresh_token='.$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
curl_close ($ch);
return $result;
}

// DASBOAR WEBSHOCKET

$uid = "";
$ch = curl_init();
$url = 'https://loaded-93189.firebaseio.com/users/'.$uid.'/.json?print=pretty&auth='.$cred;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$ua = array(
"Host: loaded-93189.firebaseio.com",
"User-Agent: Firebase/5/19.2.1/24/Android"
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
$result = curl_exec($ch);
curl_close ($ch);

•••••••••••••••••••••••••••••••••••••••••

// FUNCTION CURL GET

function http_get($url, $header){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

// FUNCTION CURL POST
function http_post($url, $header, $data){
     $header=array(

);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
    }


// CURL POST

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");

$result = curl_exec($ch);

// CRUL GET

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");

$result = curl_exec($ch);



// BAHAN UNTUK PARSING DATA JSON

function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}


// LOADING WAKTU DETIK

for ($×=60;$×>0;$×--){
echo "\r   \r";
echo "\r    Menungu  => " .$×. "detik ";
sleep(1);
}

// RANDOM GMAIL

function nama()
        {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersup>
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $ex = curl_exec($ch);
        // $rand = json_decode($rnd_get, true);
        preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
        return $name[2][mt_rand(0, 14) ];
        }
$gmail = str_replace(" ","",nama())."@gmail.com";


// FUNCTION GET DATA NULL
function curl($url, $ua, $data = null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        return $result;
}

// FUNCTION CLAIM

function claim(){
  $url="domain";
  return get($url);
}
// READ DESC
system("clear");
while(true):
$dolar=claim();
preg_match('#----#is',$dolar,$hasil);
echo $hasil[1].$hasil[2].$hasil[3]."\n";
}
endwhile;

// EXPLODE script RESPHON

$a = explode( ' <h2 class="total gh">' , $result);
$b = explode( ' </h2> ' , $a[1]);
echo "¤  " .$b[0]. "\n\n";
sleep(1);

// EXPLODE READ CSS TO  JSON_DECODE

$result = curl_exec($ch);
$json = json_decode($result);
$responbonus = $json->desc;
$json = json_decode($result);
$detik = $json->seconds_to_bonus;
echo "\r[¤] $responbonus";

// FUNCTION CALIM °°°°°°°°°°°°°°°
function claim(){
  $url="";
  return get($url);
}

while (True){
  $res = curl("http://dutchybig.ovh/faucet.php?address=EC-UserId-64621&currency=DOGE&key=8b4abb71b2456b53bf39ce505088621f", $ua);
  $one = explode('<div class="alert alert-success">', $res);
  $two = explode('<a style=', $one[1]);
  if ($two[0] != null){
    echo $two[0]."your account at Expresscrypto.io\n";
  }else{
    continue;
  }
}

// END \\// END \\// END \\// END \\// END \\
