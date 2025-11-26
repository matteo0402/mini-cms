# Mini CMS (Laravel)

Et lille CMS bygget i Laravel, hvor man kan oprette, redigere og slette artikler, som tilhører en kategori.  
Projektet inkluderer både en simpel admin-del og en offentlig del.

---

## Opsætning

### 1. Clone projektet

```bash
git clone https://github.com/matteo0402/mini-cms
cd mini-cms
```

### Installer dependencies
```bash
composer install
npm install
```

### Opsæt .env
Kopier .env.example og opret .env

#### Rediger .env til SQLite:
```bash
DB_CONNECTION=sqlite
DB_DATABASE=/database/database.sqlite
```

### Opret en app key
```bash
php artisan key:generate
```

### Kør migrations og seed databasen
```bash 
php artisan migrate:fresh --seed
```

Dette opretter tabeller og tilføjer testdata:

5 kategorier

20 artikler

### start serveren
```bash
php artisan serve
```

Standard URL: http://127.0.0.1:8000

## Ruter:
Offentlig del: http://localhost:8000

Admin: http://localhost:8000/admin/articles

API: http://localhost:8000/api/articles

## Fokusområder
Der er sat fokus på at benytte laravels økosystem, såsom migrations, factories, seeding, form requests.

## Næste skridt
Da søgningen ikke virker... endnu. Vil næste skridt vil være at opsætte søgningen på både titel og artikel tekst, men også filtrering efter kategori. Derudover også opsætning af login, som laravel som standard allerede har sat det mest op. 