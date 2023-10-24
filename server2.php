function server(){
  $r =  str_repeat("\033[0;36m=", 53)."\n";
  pil:
    print "\033[1;37m1. Dogepick    \033[1;36m[apikey] \033[1;32mLink web -> \033[1;33mhttps://tinyurl.com/dogpick\n";
    print "\033[1;37m2. Topadcoin   \033[1;36m[apikey] \033[1;32mLink web -> \033[1;33mhttps://tinyurl.com/topadcoin\n";
    print "\033[1;37m3. CryptoPla   \033[1;36m[apikey] \033[1;32mLink web -> \033[1;33mhttps://tinyurl.com/cryptoplanet\n";
    print "\033[1;37m4. Getbitcoins \033[1;36m         \033[1;32mLink web -> \033[1;33mhttps://tinyurl.com/4m44adk2\n";
    print "\033[1;37m5. \033[1;31mExit \n";
    $pil["pilih"]=readline($putih."Input Your Number : \033[1;92m");
    print"\033[1;95m$r";
    if($pil["pilih"]==1){
      eval(file_get_contents('https://raw.githubusercontent.com/Gunjuneunjabaibnida/SERVER/main/Dogepick'));
    }elseif($pil["pilih"]==2){
      eval(file_get_contents('https://raw.githubusercontent.com/Gunjuneunjabaibnida/SERVER/main/Topadcoin'));
    }elseif($pil["pilih"]==3){
      eval(file_get_contents('https://raw.githubusercontent.com/Gunjuneunjabaibnida/SERVER/main/CryptoPla'));
    }elseif($pil["pilih"]==4){
      eval(file_get_contents('https://raw.githubusercontent.com/Gunjuneunjabaibnida/SERVER/main/Getbitcoins'));
    }elseif($pil["pilih"]==5){
      exit;
    }else{
      print slow("\033[1;91mmasukan pilihan yang benar\n");
      sleep (3);
      goto pil;
    }
}
