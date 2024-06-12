<?php    
// Loop to take values from given range 
// and display the range elements 
foreach( range('A', 'Z') as $elements) { 
      
    // Display all alphabetic elements 
    // one after another 
    echo $elements . ", "; 
};
//scrivo funzione per generare array alfabeto e numeri 
function f_caratteri($inizio,$fine,$array){
    foreach(range ($inizio ,$fine) as $elements){
        array_push($array,$elements); 
    };

} 
$alfabeto=f_caratteri("A","Z",$alfabeto);
?>
  
?> 

