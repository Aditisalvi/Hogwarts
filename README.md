# Hogwarts - Exam Management System

## Website
#### URL - https://hogwarts-result.000webhostapp.com/
The website is deployed using apache from ubuntu server.

This website is about exam management system which can be used by students and operated by the professors and admin.
The website consists of a login page, result login page, result page, and a page for editing the result managed by professors and admin.

### Pages
* `Login Page`  
Professors, admin and students can login and will be redirected to specific pages.

* `Result Login Page`   
This page will be diplayed to the student who has loged in asking for his UID and year.

* `Result Page`   
After the student has entered his/her details, the result of that student will be displayed on this page.

* `Professor`   
This page is for the professors to edit marks of students for the subject which is taught by the professor.

* `Admin`  
This page if for admin to add a new result, delete and modify an existing result.

## Steps followed for deployment

### Step 1 — Installing Apache
* Updating the local package index to reflect the latest upstream changes
```
sudo apt update
```

* Installing apache web server
```
sudo apt install apache2
```

### Step 2 — Adjusting the Firewall
* Before testing Apache, it’s necessary to modify the firewall settings to allow outside access to the default web ports. First, list the ufw application profiles -
```
sudo ufw app list
```

* Enable Apache
```
sudo ufw allow 'Apache'
```

* Verify the change
```
sudo ufw status
```

### Step 3 — Checking your Web Server
* The web server should be up and running.
Check with the systemd init system to make sure the service is running.
```
sudo systemctl status apache2
```

* Access the default Apache landing page to confirm that the software is running properly through your IP address.
```
hostname -I
```

* When you have your server’s IP address, enter it into your browser’s address bar -
```
http://your_server_ip
```

### Step 4 — Setting Up Virtual Hosts
* When using the Apache web server, you can use virtual hosts (similar to server blocks in Nginx) to encapsulate configuration details and host more than one domain from a single server. 
Create the directory for your_domain(your website name) -
```
sudo mkdir /var/www/your_domain
```

* Assign ownership of the directory with the $USER environment variable -
```
sudo chown -R $USER:$USER /var/www/your_domain
```

* The permissions of your web roots should be correct if you haven’t modified your umask value, which sets default file permissions. To ensure that type - 
```
sudo chmod -R 755 /var/www/your_domain
```

* Create a sample index.html page using nano - 
```
sudo nano /var/www/your_domain/index.html
```

* Add the following sample HTML
```
<html>
    <head>
        <title>Welcome to Your_domain!</title>
    </head>
    <body>
        <h1>Success!  The your_domain virtual host is working!</h1>
    </body>
</html>
```

* In order for Apache to serve this content, it’s necessary to create a virtual host file at /etc/apache2/sites-available/your_domain.conf:
```
sudo nano /etc/apache2/sites-available/your_domain.conf
```

* Paste in the following configuration block -
```
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName your_domain
    ServerAlias www.your_domain
    DocumentRoot /var/www/your_domain
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

* Enable the file with the a2ensite tool
```
sudo a2ensite your_domain.conf
```

* Disable the default site defined in 000-default.conf -
```
sudo a2dissite 000-default.conf
```

* Next, test for configuration errors -
```
sudo apache2ctl configtest
```

* Restart Apache to implement your changes - 
```
sudo systemctl restart apache2
```

