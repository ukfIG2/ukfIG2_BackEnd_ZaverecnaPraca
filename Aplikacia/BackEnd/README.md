# Zmena názvu databázy
/BackEnd/.env

# Vytvorit migráciu
php artisan make:migration migration_name

# Vytvoriť migáciu s boiler platom create table
php artisan make:migration create_time_windows_table --create=t

# Vytvoriť migráciu edit tabuľky 
php artisan make:migration add_email_to_users --table=users

# Spustí migráciu
php artisan migrate

# Obnovy migraciu so zmenami
php aritsan migrate:fresh

# Status migracie
php artisan migrate:status

# Vytvoriť model
php artisan make:model Conference

# Vytvoriť seeder
php artisan make:seeder FullOneConference

# Vytvoriť factory
 php artisan make:factory MiddleNameFactory --model=Middle_name

# Sprevádzkovať backEnd
## Vytvoriť databázu
php artisan migrate

## Naplniť databázu
php artisan db:seed --class=FullOneConferenceSeeder

# Ukázať štruktúru modelu
php artisan model:show First_name

# Vytvoriť Controller pre model
php artisan make:controller ConferenceController --resource --model=Conference
