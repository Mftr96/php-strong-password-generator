Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

sMILESTONE 1
Creare una pagina con un form. In questo form l'utente userà un input per selezionare la lunghezza della password da generare.
Il form redirezionerà su una nuova pagina, che in base alla lunghezza scelta stamperà N volte il carattere "X".
Fatelo con un ciclo che compone una stringa aggiungendo una X per volta e solo poi, alla fine, stampate l'intera stringa.

Obiettivo: generiamo tante X quante ne richiede l'utente.
 
MILESTONE 2
Sempre nella seconda pagina create una serie di caratteri consentiti (come stringa? come array?)  dove scriverete tutti i caratteri concessi: lettere maiuscole, minuscole, numeri, simboli... tutto insieme!
Ora nel ciclo che aggiungeva una "X" alla nostra password, aggiungete invece un carattere casuale preso dalla nostra lista dei caratteri consetiti.
Come? Ad ogni iterazione estraggo un numero casuale (tra 0 e....?) che uso come indice per pescare il carattere casuale. Questo lo aggiungo alla mia password.
obiettivo: generare una password casuale in base alla lunghezza scelta dall'utente.


MILESTONE 3
Fate un pò di refactoring:
Unite form e visualizzazione della password in un'unica pagina php: vi basta controllate se nel $_GET abbiamo le selezioni dell'utente oppure no e in base a questo saprete cosa fare.

-Spostate la logica che crea la password in una funzione che in base agli argomenti passati restituisce una password

-Spostate la function in un file esterno da includere

Obiettivo: leggibilità, manutenibilità e accumulare maggiore pratica con form e funzioni.


BONUS
Nel form dare all'utente la possibilità di scegliere quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
Questo vuol dire che il "dizionario" dei caratteri consentiti andrà popolato in base alle scelte dell'utente.
Obiettivo: divertirvi e sperimentare.
---

esecuzione:
MILESTONE 1:creazione form con input (probabile type number) che seleziona il numero di lettere per comporre la password
al submit del form si andrà sulla seconda pagina che stamperà un singolo carattere tante volte quanto è il valore impostato prima.
cosa serve :
-due pagine php(una form, l'altra risultati)
-un form con input e button 

-creo il form(contenente attributo action con valore il percorso del secondo file e attributo method uguale a GET) con input e button 
-creo seconda pagina
-eseguo ciclo per generare tante x quant'è il valore dato dall'input 
----
milestone 2: generare psw casuale con lunghezza scelta dall'utente.
cosa serve:
-array caratteri consentiti(alfabeto e numeri)

creare array nella pagina risultati 

milestone 3
