# ServerSideDevelopment_CA3
We chose Disney as our topic for this Laravel MVC Site. We chose disney studios and disney characters as our tables 1 Studio to many characters is our relation for this database.

# Before starting 
Create a database <br>
```
mysql
create database disney;
exit;
```
Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=disney
DB_USERNAME=YOUR_USERNAME_HERE (root is always a safe option as it is included on all systems)
DB_PASSWORD=YOUR_PASSWORD_HERE (if your creditentials does not have a password assigned to it then leave this field blank with "".)
```
Migrate the tables
```
php artisan migrate
```
Seed the tables one at a time
```
php artisan db:seed --class=disneyStudiosSeeder
php artisan db:seed --class=disneyCharactersSeeder
php artisan db:seed --class=usersSeeder
```
Password for administrator and user in database
```
123!"£QWEqwe
```

## References <br>
```
Johan van den Broek. (2024) Seeding After Migrating in Laravel: Two Methods Compared [online]. Available at: https://laracoding.com/seeding-after-migrating-in-laravel/ [accessed 14 April 2024].

Chris Sev. (2021) How To Manage DateTime with Carbon in Laravel and PHP [online]. Available at:  https://www.digitalocean.com/community/tutorials/easier-datetime-in-laravel-and-php-with-carbon [14 April 2024]

Career Development Lab. (2022) Laravel Multi Role Authentication [video online]. Available from: https://www.youtube.com/playlist?list=PLDc9bt_00KcJvM4-KJF8OPadbOod_G7Wf [accessed 2 May 2024].

Laravel (No Date) Database: Migrations [online]. Available at: https://laravel.com/docs/11.x/migrations#main-content [accessed 2 May 2024].

Stackoverflow (2023) Inserting Date Value into Date Field using Laravel [online]. Available at: https://stackoverflow.com/questions/50312332/inserting-date-value-into-date-field-using-laravel [accessed 8 May 2024].

Stackoverflow (2023) How to delete a foreign key constraint in Laravel? [online]. Available at: https://stackoverflow.com/questions/55677896/how-to-delete-a-foreign-key-constraint-in-laravel [accessed 9 May 2024].
```

Seeding: https://laracoding.com/seeding-after-migrating-in-laravel/ Date: 20 Jan 2024 Author: Johan van den Broek 

How to use carbon: https://www.digitalocean.com/community/tutorials/easier-datetime-in-laravel-and-php-with-carbon Date: 7th may 2021 Author: Chris Sev

3 pages: Home Page, Studio Page and character page, split them into sections and have a create character in character page.


Created our own style sheet called "MainStyles.css"
Also using tailwind for css. 

npm run watch for tailwind
Creating my own tailwind colours by following the tailwind website: https://tailwindcss.com/docs/text-decoration-color 
Colours are created in the tailwind.config.js file

Authentication: https://www.youtube.com/playlist?list=PLDc9bt_00KcJvM4-KJF8OPadbOod_G7Wf 2/5
Default: https://laravel.com/docs/11.x/migrations#main-content 2/5
Date Input: https://stackoverflow.com/questions/50312332/inserting-date-value-into-date-field-using-laravel 8/5

Sparkle button css: https://uiverse.io/JkHuger/fat-bat-0 
Cascade: https://stackoverflow.com/questions/55677896/how-to-delete-a-foreign-key-constraint-in-laravel 9/5
Icon images are from: https://www.flaticon.com/free-icon/add_12937056?term=create&page=1&position=78&origin=search&related_id=12937056
Disney Font is from: https://www.fontspace.com/category/disney 