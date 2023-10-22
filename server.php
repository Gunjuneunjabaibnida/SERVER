function server(){
  $r =  str_repeat("\033[1;95m~", 53)."\n";
  pil:
    print "\033[1;92m1. Earnbitmoon                   Link web -> https://tinyurl.com/3jr7ss2f\n";
    print "\033[1;92m2. Faucetpayz  [only apikey]     Link web -> https://tinyurl.com/5fsu3sv5 \n";
    print "\033[1;92m3. Advies      [only apikey]     Link web -> https://tinyurl.com/y2svh9fh\n";
    print "\033[1;92m4. Solpick     [only apikey]     Link web -> https://tinyurl.com/59h4w63u\n";
    print "\033[1;92m5. Tronpick    [only apikey]     Link web -> https://tinyurl.com/tronpick\n";
    print "\033[1;92m6. Dogepick    [only apikey]     Link web -> https://tinyurl.com/dogpick\n";
    print "\033[1;92m7. Topadcoin   [only apikey]     Link web -> https://tinyurl.com/topadcoin\n";
    print "\033[1;92m8. CryptoPlanet [only apikey]    Link web -> https://tinyurl.com/cryptoplanet\n";
    print "\033[1;92m9. Getbitcoins                   Link web -> https://tinyurl.com/4m44adk2\n";
    print "\033[1;92m10. Exit \n";
    $pil["pilih"]=readline("\033[1;97mInput Your Number : \033[1;92m");
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
      print slow("\033[1;91mmasukan pilihan dengan yang benar\n");
      sleep (3);
      goto pil;
    }
}
