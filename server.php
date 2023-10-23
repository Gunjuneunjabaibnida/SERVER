function server(){
  $r =  str_repeat($lblue."=", 53)."\n";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[92m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
  pil:
    print $putih2."1. Earnbitmoon ".$lblue2."         Link web -> ".$yellow2."https://tinyurl.com/3jr7ss2f\n";
    print $putih2."2. Faucetpayz  ".$lblue2."[apikey] Link web -> ".$yellow2."https://tinyurl.com/5fsu3sv5 \n";
    print $putih2."3. Advies      ".$lblue2."[apikey] Link web -> ".$yellow2."https://tinyurl.com/y2svh9fh\n";
    print $putih2."4. Solpick     ".$lblue2."[apikey] Link web -> ".$yellow2."https://tinyurl.com/59h4w63u\n";
    print $putih2."5. Tronpick    ".$lblue2."[apikey] Link web -> ".$yellow2."https://tinyurl.com/tronpick\n";
    print $putih2."6. Dogepick    ".$lblue2."[apikey] Link web -> ".$yellow2."https://tinyurl.com/dogpick\n";
    print $putih2."7. Topadcoin   ".$lblue2."[apikey] Link web -> ".$yellow2."https://tinyurl.com/topadcoin\n";
    print $putih2."8. CryptoPla   ".$lblue2."[apikey] Link web -> ".$yellow2."https://tinyurl.com/cryptoplanet\n";
    print $putih2."9. Getbitcoins ".$lblue2."         Link web -> ".$yellow2."https://tinyurl.com/4m44adk2\n";
    print $putih2."10. Exit \n";
    $pil["pilih"]=readline($putih."Input Your Number : \033[1;92m");
    print"\033[1;95m$r";
    if($pil["pilih"]==1){
      eval(file_get_contents('https://github.com/Gunjuneunjabaibnida/SERVER/blob/main/Earnbitmoon'));
    }elseif($pil["pilih"]==2){
      eval(file_get_contents('Coming son'));
    }elseif($pil["pilih"]==3){
      eval(file_get_contents('Coming son'));
    }elseif($pil["pilih"]==4){
      eval(file_get_contents('Coming son'));
    }elseif($pil["pilih"]==5){
      eval(file_get_contents('Coming son'));
    }elseif($pil["pilih"]==6){
      eval(file_get_contents('Coming son'));
    }elseif($pil["pilih"]==7){
      eval(file_get_contents('Coming son'));
    }elseif($pil["pilih"]==8){
      eval(file_get_contents('Coming son'));
    }elseif($pil["pilih"]==9){
      eval(file_get_contents('Coming son'));
    }elseif($pil["pilih"]==10){
      exit;
    }else{
      print slow("\033[1;91mmasukan pilihan yang benar\n");
      sleep (3);
      goto pil;
    }
}
