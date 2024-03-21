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

## parte 2

Aggiungiamo un seeder per la classe Train usando FakerPHP.

### BONUS 1

Implementare il seeder tramite un file csv.

### BONUS 2

Implementare la paginazione dei risultati.
Per formattare correttamente i links:

-   importare la classe Paginator con use Illuminate\Pagination\Paginator; nel file app\Providers\AppServiceProvider.php
-   aggiungere la riga Paginator::useBootstrap(); nel metodo boot()

<hr>

### IL giro da fare:

#### Migration

-   Creare il DB su phpMyAdmin
-   Creare con Laravel la **migration** per strutturare la tabella (colonne) e il tipo di dato
-   Effettuare la migration (metodo **up**)
-   Creare il Model Relativo alla tabella creata
-   Impostare il controller per recuperare e passare i dati da stampare in pagina

#### Seeders

-   creare il file tramite il comando `php artisan make:seeder TrainSeeder`
-   istanziare l'oggetto nel metodo `run()` relativo al modello
    -   passare le caratteristiche definite nel database
-   per lanciare `php artisan db:seed --class=TrainSeed`
    //utilizzo la funzione run per semplificare il seed
-   nel file `DatabaseSeeder.php` ultilizzo il metodo _run()_ per semplificare il seed
