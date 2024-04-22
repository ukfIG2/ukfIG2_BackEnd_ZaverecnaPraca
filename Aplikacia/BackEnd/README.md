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