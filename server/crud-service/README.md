# MCQ
 1. [Process](#Process)
 2. [Setup](#Setup) 
## Setup
1. [Debian](#Debian)
2. [Windows](#Windows)
### Debian 
#### Installing the LAMP stack [reference](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mariadb-php-lamp-stack-debian9)
1. Install Apache using Debian's package manager, apt:  
`sudo apt update`  
`sudo apt install apache2`  
2. Allow incoming traffic on your Apache server   
`sudo ufw allow in "Apache Full"`   
3. Check the Apache installation by starting the service   
`sudo service apache2 start` and visiting `http://localhost`  
4. Install MariaDB  
`sudo apt install mariadb-server`  
`sudo mysql_secure_installation`   
Press `Enter` asked for password, Type `N`when asked for deleting phantom accounts , Press `Y` for rest of the prompts   
5. Create a user to access MAriaDB  
`sudo mariadb`  
`GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;`   
`FLUSH PRIVILEGES;`   
`exit`   
Next time you want to access your database, use   
`mariadb -u admin -p`  
6. Install PHP 7.1 [reference](https://websiteforstudents.com/downgrade-php-7-2-to-php-7-1-with-apache2-http-server-on-ubuntu-16-04-17-10-18-04/)       
`sudo add-apt-repository ppa:ondrej/php`  
`sudo apt-get update`   
`sudo apt install php7.1`   
`sudo apt install php7.1-cli php7.1-common php7.1-json php7.1-opcache php7.1-mysql php7.1-mbstring php7.1-mcrypt php7.1-zip`      
If you have PHP 7.2 Installed, disable it using    
`sudo a2dismod php7.2`     
And enable PHP 7.1 using         
`sudo a2enmod php7.1`      
Restart Apache2      
`sudo servie apache2 restart`        
7. Testing PHP       
Create a file 
`sudo nano /var/www/html/info.php`          
Add the following code               
`<?php     
phpinfo();       
?>`      
Save and close the file      
Visit `http://localhost/info.php` to see the PHP version 7.1         
You can remove the file using       
`sudo rm /var/www/html/info.php`
#### Instaling Composer 1.7.2 
1. Goto [Downloads](https://getcomposer.org/download/) and Download `1.7.2 Composer.phar` from Manual Download Section     
2. Copy the downloaded file into simplex-dashboard folder
#### Project initialization 
1. Run `php composer.phar install`       
If you get error,    
Run `sudo apt-get install php-xml` and execute previous command again.    
2. Start the server using `laravel artisan serve` and visit `http://localhost:8000`       
==================TODO Database setup ===============================
### Windows
#### Install XAMPP
Use installer for PHP 7.1.x from xampp website [Link](https://www.apachefriends.org/download.html)
#### Install Composer
1. Goto [Downloads](https://getcomposer.org/download/) and Download 'Composer-Setup.exe'
2. During installation point it to php.exe in xampp installation folder
#### Install Dependencies
1. run 'composer install' command in your project folder 
#### env file
1. Copy .env-example file
2. Make changes in database name,username and password according your local config
#### Migration
1. Create a database in mysql with same name which you put in env file
2. run command 'php artisan migrate'
#### Encryption Keys
1. run command 'php artisan key:generate'
2. run command 'php artisan config:cache'


## Addons
1. [TINYMCE](https://www.tiny.cloud/) - For editor.
2. [MarvinJS](https://chemaxon.com/products/marvin-js) - Addon for TinyMCE to add Chemistry equations
3. [FMath](https://ckeditor.com/cke4/addon/FMathEditor) - Addon for TinyMCE to add Math Equations