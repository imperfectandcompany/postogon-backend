# postogon-backend
THIS IS PRIVATE. OWNERSHIP OF THESE FILES BELONG TO DAIYAAN IJAZ AND NOBODY ELSE. CODE IS ORIGINAL AND ALL PATTERNS ARE DESIGNED BY DAIYAAN IJAZ. THIS IS NOT OPEN SOURCE
Daiyaan 

Friday, March 19th 

Backend Updates 

Database 

Created Class::DatabaseConnector 

Private function connect() 

Creates $pdo object with database details. 

Sets errmode for query errors. 

Returns object; 

Public function query($query, $params = array()) 

Calls connect function, prepares the query with parameters given in the array, and then executes the statements. 

If the query starts with ‘SELECT’ then we fetchAll from the statement and return the data. 

Created Database Table Users 

ID 

PRIMARY KEY  

INT (11) 

UNSIGNED 

AUTO_INCREMENT 

NOT NULL 

DEFAULT NONE 

Username 

VARCHAR (32) 

NULL 

DEFAULT NULL 

Email 

TEXT 

NULL 

DEFAULT NULL 

Password 

VARCHAR (60) 

STORE BCRYPT HASH 

NULL 

DEFAULT NULL 

createdAt 

TIMESTAMP 

ON UPDATE CURRENT_TIMESTAMP 

NOT NULL 

DEFAULT CURRENT_TIMESTAMP 

updatedAt 

DATETIME 

NULL 

DEFAULT NULL 

Created Database Table login_tokens 

ID 

PRIMARY KEY 

INT (11) 

UNSIGNED 

AUTO_INCREMENT 

NOT NULL 

DEFAULT NONE 

Token 

INDEX 

CHAR (64) 

STORE TOKEN IN HASH 

NULL 

DEFAULT NULL 

User_id (RELATIONSHIP WITH users TABLE, REFERENCES ID) 

Index 

INT (11) 

UNSIGNED 

NULL 

DEFAULT NULL 

Created Registration system (username is initially setup on first log-in after onboarding). 

Form 

Email 

Password 

Captcha 

Submit 

Security 

Password is stored through php bcrypt() function on query insert. 

Validation 

If email is already in the database. 

If email is valid. 

If the password is between 6-30 characters. 

If google reCAPTCHA v2 is submitted. 

Implemented Error Handling System from Matthew 

Future plans to extend handling for warnings and success messages. 

Created login system 

Form 

Email. 

Password. 

Submit. 

Validation 

If email exists. 

If user input password matches with database password using password_verify(); 

Set cookies 

POSTOGONID 

Valid for 7 days 

POSTOGONID_ 

Valid for 3 days 

Created to force the first cookie (POSTOGONID) to expire without logging the user out, this way the user won’t even know they’ve been given a new login token. 

If the user is active after 3-7 days, the first cookie will be reset so that the expire date is increased, this way the user will be logged out when they are inactive. 


Monday, March 22th 

Backend Updates 

Created Profile Page 

Get parameter to check if user exists, if user exists in DB—show profile 

New followers table: 

CREATE TABLE followers( id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, user_id INT(11) UNSIGNED, follower_id int(11) UNSIGNED) 

Follow button 

Log out of all devices feature 

Saturday, March 20th 

Backend Updates 

Created Cookies class 

Public function isLoggedIn() 

If cookie is stored and also matches the token in the database. 

Return user_id value for the following token in the variable, $userid. 

Else, return false; 

Create logout system /logout 

Enable to log out of specific devices or all of devices at once. 

Created settings page 

Change / Add Username feature 

Change Password feature 

Logout Feature 

Log out of all devices feature 

Added ability to log-in through username or e-mail 

Create new database to store reset password token 

Similar to login_tokens, password_tokens 

Id (int 11 unsigned primary key auto increment) 

Token (char 64 allow null unique) 

User_id (int 11 unsigned) 

Created reset password page and redeem password page for account recovery 

Token is stored in db and can be redeemed to reset user account through GET url including token. 

In the future tie it to php mail server for designated user email 

