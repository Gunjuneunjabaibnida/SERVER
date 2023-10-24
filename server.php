function server(){
  $r =  str_repeat("\033[0;36m=", 53)."\n";
  pil:
    print "\033[1;37m1. Earnbitmoon \033[1;36m         \033[1;32mLink web -> \033[1;33mhttps://tinyurl.com/3jr7ss2f\n";
    print "\033[1;37m2. Faucetpayz  \033[1;36m[apikey] \033[1;32mLink web -> \033[1;33mhttps://tinyurl.com/5fsu3sv5 \n";
    print "\033[1;37m3. Advies      \033[1;36m[apikey] \033[1;32mLink web -> \033[1;33mhttps://tinyurl.com/y2svh9fh\n";
    print "\033[1;37m4. Solpick     \033[1;36m[apikey] \033[1;32mLink web -> \033[1;33mhttps://tinyurl.com/59h4w63u\n";
    print "\033[1;37m5. Tronpick    \033[1;36m[apikey] \033[1;32mLink web -> \033[1;33mhttps://tinyurl.com/tronpick\n";
    print "\033[1;37m6. \033[1;31mExit \n";
    $pil["pilih"]=readline($putih."Input Your Number : \033[1;92m");
    print"\033[1;95m$r";
    if($pil["pilih"]==1){
      eval(file_get_contents('https://raw.githubusercontent.com/Gunjuneunjabaibnida/SERVER/main/Earnbitmoon'));
    }elseif($pil["pilih"]==2){
      eval(file_get_contents('https://raw.githubusercontent.com/Gunjuneunjabaibnida/SERVER/main/Faucetpayz'));
    }elseif($pil["pilih"]==3){
      eval(file_get_contents('https://raw.githubusercontent.com/Gunjuneunjabaibnida/SERVER/main/Advies'));
    }elseif($pil["pilih"]==4){
      eval(file_get_contents('https://raw.githubusercontent.com/Gunjuneunjabaibnida/SERVER/main/Solpick'));
    }elseif($pil["pilih"]==5){
    }elseif($pil["pilih"]==6){
      exit;
    }else{
      print slow("\033[1;91mmasukan pilihan yang benar\n");
      sleep (3);
      goto pil;
    }
}
