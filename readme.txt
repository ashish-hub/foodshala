first run data.sql to setup database and insert some queries
run main.php on your server

You can modify api/config.php if required ( it includes database connection with php i.e, hostname etc.)


You register as a new Customer or Owner on homepage(opened by running main.php)
or can login by some existing user
customer  example :-  username = kunal@gmail.com password =  kunal
owner example :- username = ashish@gmail.com passsowrd = ashish


I tried my best to name the file and variables according to their usage, I apologise for any inconvinience in reading my code

Basic Featues:-
Only Customer gets the option to order an item (order option is at bottom of homepage)

Only Owner gets the option to add or remove a product. Owner can add/remove a product of his/her resturant only. He/She can see all of resturants item by clicking on removing an item and can remove any item from the form provided at bottom of that page if required.

Different section for veg and nonveg items. Although all items of diffent resturants are  shown collectively but for owner there's a option to see only his/her resturant's product for ease of removal.

Customer can see previous orders done by that username

Owner can see all the orders of that resturant.

If noone has logged in than none of the above features can be accessed except the list of veg and non veg items seperatly.

Most of the pages of webapp are responsive/flexible (work on both mobile and Pc and different browser size) 