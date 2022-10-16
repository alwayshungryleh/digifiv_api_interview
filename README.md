# digifiv_api_interview

For the interview assessment usage of digifiv

To Setup:
-unpack this in your wamp server
-Open .env file setup database connection 
Example: 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=digifiv
DB_USERNAME=root
DB_PASSWORD=

-Open your command line and run
-php artisan migrate (If there are existing table, run php artisan migrate:fresh)(this setups the tables in the database)
-php artisan db:seed (This will insert some example data that is now in the database)
-Current data saves 5 product with 10 items each.

-Install and open Postman. This will help to test the api that is sitting in laravel
-Import the laravel file interview_details/digifiv.postman_collection.json

-Run postman remove3randominventory
-It should remove 3 random item and then return a json containing the balance of each items.