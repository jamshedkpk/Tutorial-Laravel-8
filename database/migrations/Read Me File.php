/*
Migrations: Migrations are php files in laravel which
are used to create table in database without opening
Mysql server. Through migration we can create, update and delete different tables.
To create a new migration
php artisan make:migration nameoftable --create=nameoftable
To run a migration..... it calls up method of migration
php artisan migrate
To add a new column in a table
php artisan make:migration nameof column  --table=nameoftable
To step back a database or reverse your migration .... it calls down method of migration
php artisan migrate:rollback
it is used to back step by step your migrations
To refresh a migration or database
php artisan migrate:refresh
To fresh a migration
php artisan migrate:fresh
difference b/w fresh and refresh is in refresh first rollback occur and then migration is created
while in fresh all data is creared in table and then it is created again fresh state...
Note: up method of migration is called when we run a migration while down method of migration is 
called when we rollback a migration

*/
