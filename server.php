function server(){
  $r =  str_repeat("\033[1;95m~", 53)."\n";
  pil:
    print "\033[1;92m1. Earnbitmoon      => \n";
    print "\033[1;92m2. Faucetpayz       => https://tinyurl.com/5fsu3sv5 \n";
    print "\033[1;92m3. Advies           => \n";
    print "\033[1;92m4. Solpick          => \n";
    print "\033[1;92m5. Tronpick         => \n";
    print "\033[1;92m6. Dogepick         => \n";
    print "\033[1;92m7. Topadcoin        => \n";
    print "\033[1;92m8. Crypto Planet    => \n";
    print "\033[1;92m9. Tronpick         => \n";
    print "\033[1;92m10. Tronpick        => \n";
    print "\033[1;92m11. Exit \n";
    $pil["pilih"]=readline("\033[1;97mInput Your Number : \033[1;92m");
    print"\033[1;95m$r";
    if($pil["pilih"]==1){
      eval(file_get_contents('https://github.com/Gunjuneunjabaibnida/SERVER/blob/main/Earnbitmoon'));
    }elseif($pil["pilih"]==2){
      eval(file_get_contents('https://raw.githubusercontent.com/DavillScript/Server/main/Claimfreecoins'));
    }elseif($pil["pilih"]==3){
      eval(file_get_contents('https://raw.githubusercontent.com/DavillScript/Server/main/Faucetpk'));
    }elseif($pil["pilih"]==4){
      eval(file_get_contents('https://raw.githubusercontent.com/DavillScript/Server/main/Balkanofaucet'));
    }elseif($pil["pilih"]==5){
      eval(file_get_contents('https://raw.githubusercontent.com/DavillScript/Server/main/Auto'));
    }elseif($pil["pilih"]==6){
      exit;
    }else{
      print slow("\033[1;91mwrong choice\n");
      sleep (3);
      goto pil;
    }
}
