<?php
//funzione che stampa una psw casuale 
function f_psw($consentiti,$psw_length){
    
for ($i = 0; $i < $psw_length; $i++) {
    $carattere = $consentiti[rand(0, strlen($consentiti) - 1)];
          echo $carattere;
      };
};
?>