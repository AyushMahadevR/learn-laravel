# learn-laravel
simple CRUD laravel webpage 


Important commands 
------------------
npm install -> to install all the dependencies 

npm run dev -> to compile the sass to css (single time)

npm run watch -> to have active compliation of resources (instead of run dev) 

creating controller 
--------------------
php artisan make:controller PostsController

creating model
--------------
php artisan make:model Post -m

-m (for creating migration for the database to add tables) 

migrate database 
----------------
php artisan migrate 

tinker
------
php artisan tinker 
Access the model name --> App\Post::count() [to count the posts]
## new data requires new instances ##
Creating new instance --> $post = new App\Post();
inserting data 
 $post->title = "Post one ";
 $post->body = "This is a body";
 $post->save();   (creates the entry in the database)
quite to escape 

--------------
