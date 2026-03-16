# SimpleLoginAndSignupForm

## Technologies used:
+ HTML
+ CSS
+ PHP
+ MySQL
+ XAMPP

## Main functionalities:
+ data validation
+ saving the data in a database
+ logging in and logging out
+ changing the user name or the password

## Built-in functions used:
+ session_start()
+ session_unset()
+ session_destroy()
+ empty()
+ header()
+ mysqli()
+ htmlspecialchars()
+ isset()
+ password_hash()
+ password_verify()
+ exit()

## Purpose of every file:
+ authentication_guard.php - prevents unauthorized users from accessing the home page and the pages for changing the user name and the password.
+ change_password.php - the page where the user can change their password.
+ change_username.php - the page where the user can change their user name.
+ connect.php - establishes a connection with the database.
+ database_setup.sql - creates a database and a table for the users.
+ homepage.php - the page which users are redirected to after logging in.
+ login.php - the page where users may log in.
+ logout.php - clears the user session and redirects them to the log in page.
+ request.php - processes the requests a user makes when they sign up, log in, change their name or password.
+ signup.php - the page where users may sign up.
+ style.css - contains the styling for every page.
