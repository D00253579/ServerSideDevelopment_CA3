# ServerSideDevelopment_CA3

studios
Walt Disney Animation studios
Pixar
Marvel Studios
20th Century Studios
Lucasfilms
Searchlight pictures


Seeding: https://laracoding.com/seeding-after-migrating-in-laravel/ Date: 20 Jan 2024 Author: Johan van den Broek 

How to use carbon: https://www.digitalocean.com/community/tutorials/easier-datetime-in-laravel-and-php-with-carbon Date: 7th may 2021 Author: Chris Sev

3 pages: Home Page, Studio Page and character page, split them into sections and have a create character in character page.

Intialise database
php artisan migrate
php artisan db:seed --class=disneyStudiosSeeder
php artisan db:seed --class=disneyCharactersSeeder