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

## Jamie References <br>
For this project, we utilised seeding to provide default data in the database so that we could test constantly thorughout development. I used Johan van den Broek's(2024) seeding article to learn how to create seeders that can be run after migrating the tables. As we had a date field in our studios table I had to use Carbon to create a date in the seeder. I used Chris Sev's(2021) article on how to use Carbon properly. As we were creating our authentication for admin and for users I found a informative tutorial on youtube by Career Development Lab(2022) on how to create proper authentication using middleware to design our tasks for both admin and user. To make the authentication easier I read Laravel's(No date) documentation on the default attribute and assigned a 0 to users whenever they register so that the middleware can make the distinction between user and admin. I also read up on Stackoverflow(2023) on how to delete a studio while avoiding a foreign key constraint. I also found out about the date input type as well.
```
Johan van den Broek. (2024) Seeding After Migrating in Laravel: Two Methods Compared [online]. Available at: https://laracoding.com/seeding-after-migrating-in-laravel/ [accessed 14 April 2024].

Chris Sev. (2021) How To Manage DateTime with Carbon in Laravel and PHP [online]. Available at:  https://www.digitalocean.com/community/tutorials/easier-datetime-in-laravel-and-php-with-carbon [14 April 2024]

Career Development Lab. (2022) Laravel Multi Role Authentication [video online]. Available from: https://www.youtube.com/playlist?list=PLDc9bt_00KcJvM4-KJF8OPadbOod_G7Wf [accessed 2 May 2024].

Laravel (No Date) Database: Migrations [online]. Available at: https://laravel.com/docs/11.x/migrations#main-content [accessed 2 May 2024].

Stackoverflow (2023) Inserting Date Value into Date Field using Laravel [online]. Available at: https://stackoverflow.com/questions/50312332/inserting-date-value-into-date-field-using-laravel [accessed 8 May 2024].

Stackoverflow (2023) How to delete a foreign key constraint in Laravel? [online]. Available at: https://stackoverflow.com/questions/55677896/how-to-delete-a-foreign-key-constraint-in-laravel [accessed 9 May 2024].
```

## Caitlin References <br>
Styling:
I created our own stylesheet called "MainStyles.css", I also used tailwind for css. I switched between both our custom stylesheet and tailwind css as I found tailwind easier to use at times in the project. Created my own custom colours for tailwind by following the tailwind website https://tailwindcss.com/docs/text-decoration-color, the colours are in the tailwind.config.js, I did this as not all colours were available to use via tailwind. 

Sparkle button css: https://uiverse.io/JkHuger/fat-bat-0 
Icon images are from: https://www.flaticon.com/free-icon/add_12937056?term=create&page=1&position=78&origin=search&related_id=12937056
Disney Font is from: https://www.fontspace.com/category/disney 

Websites I used for form validation and data sanitisation:
https://laravel.com/docs/11.x/validation#preparing-input-for-validation 
https://medium.com/@aiman.asfia/a-guide-to-understanding-and-utilizing-prepareforvalidation-in-laravel-926f156650d5

Form Validation: 
I included error messages to display below the input where the error has occured, I done this for the create and edit characters pages and also the edit studios page. 
The login and register pages are also validated, for the login and register page the inputted email address will be checked to ensure the email does or does not already exist in the database. I have styled the error messages on the login and register pages also. 