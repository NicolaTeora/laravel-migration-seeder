# laravel-migration-seeder

Creiamo una tabella trains tramite la relativa Migration
Ogni treno dovrà avere:

-   Azienda
-   Stazione di partenza
-   Stazione di arrivo
-   Orario di partenza
-   Orario di arrivo
-   Codice Treno
-   Numero Carrozze
-   In orario
-   Cancellato
    È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto ;)

Inserite inizialmente i dati tramite PhpMyAdmin.
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

### Bonus

Create una seconda migration per aggiungere/modificare una colonna della tabella

<hr>

#### IL giro da fare:

-   Creare il DB su phpMyAdmin
-   Creare con Laravel la **migration** per strutturare la tabella (colonne) e il tipo di dato
-   Effettuare la migration (metodo **up**)
-   Creare il Model Relativo alla tabella creata
-   Impostare il controller per recuperare e passare i dati da stampare in pagina
