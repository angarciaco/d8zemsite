# d8zemsite

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://angelgarciaco.com)

d8zemsite it's an complete Drupal site that contains the angelzemm module included.

## Dependencies!

  - From Drupal: None.. just Drupal Core. 
  - It was developed under PHP 7.1.32 (This is for site Drupal 8).
  - It's required Composer

### Installation

  - This module has been created under recommended project Drupal 8 (Drupal Version 8.8.6 - May 29 2020) with security update.
  - This Drupal version was installed with help of Composer.
  - This Site code was generated by drupal console.

#### Installing Drupal Site d8zemsite.com

  - This code constains the required files for installing the site, on this branch (master), after you clone it.
  - Branch "complete" contains all code, so you would need change credentials for connecting to database, just in case.. and restore SQL on database "d8zemsite" created prevously.

Starting:
```sh
$ git clone git@github.com:angarciaco/d8zemsite.git
$ mv d8zemsite d8zemsite.com
```
After that, it's required that you set right credentials for connecting with your database server (MySQL).. so, you need to modify user and password in array variable for database connection in this file:
```sh
sudo nano d8zemsite.com/web/sites/default/settings.php
```
On this case, user and password credentials in this file is "root":
```sh
$databases['default']['default'] = array (
  'database' => 'd8zemsite',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
```
Restore the database backup on database d8zemsite, created previously in MySQL:
```sh
$ cd d8zemsite.com/SQL
$ tar -zxvf d8zemsite.sql.tar.gz
$ mysql -u root -p d8zemsite < d8zemsite.sql
$ cd ../../
```
Finally, continue with installation:
```sh
$ chmod -Rf 755 d8zemsite.com/web/sites/default  ==> (Instruction recursive is for Mac)
$ cd d8zemsite.com
$ composer install
```
Thtat's all. Site it's installed! You can install and uninstall angelzemm module there.

Credentials, user and password to enter ( d8zemsite.com/user ):
  - User: admin
  - Password: admin


### Links

  - Public path for step by step form ( d8zemsite.com/angelzemm/multistep-one )
  - Page help ( d8zemsite.com/admin/help/angelzemm )
  - List of saved records ( d8zemsite.com/admin/structure/enangelzemm )

### Notes

  - Module includes a help page that contains links fot watching data saved.
  - Content Entity was generated with Drupal console and it is not required create it as Content Type inside Drupal.
  - Module creates this tables for the Content Entity:
  -- enangelzemm
  -- enangelzemm_field_data

### Host

May be you need to do this:

```sh
$ sudo nano /etc/hosts
127.0.0.1 d8zemsite.com
```

### Virtual Host

Drupal site was installed with MAMP and the settings used next:

```sh
<VirtualHost *:80>
    ServerAdmin webmaster@d8zemsite.com

    DocumentRoot "/Applications/MAMP/htdocs/d8zemsite.com/web"
    ServerName d8test.com

    DirectoryIndex index.php

    RewriteEngine On
    RewriteOptions inherit

    ErrorLog "/Applications/MAMP/logs/d8zemsite.com-error_log"
    CustomLog "/Applications/MAMP/logs/d8zemsite.com-access_log" common

    <Directory /Applications/MAMP/htdocs/d8zemsite.com/web/>
      Options Indexes FollowSymLinks Includes ExecCGI
      AllowOverride All
      Order deny,allow
      Allow from all
    </Directory>

</VirtualHost>
```

Finally, you need restart the web server (Apache in this case).


| Account | Link |
| ------ | ------ |
| Facebook | https://www.facebook.com/angelgarciacol |
| Twitter | https://twitter.com/AngelGarciaCO |
| LinkedIn | https://www.linkedin.com/in/angelgarciaco |
| Instagram | https://www.instagram.com/angelgarciaco |
| YouTube | https://www.youtube.com/channel/UCUUZM2FRvFOiP7j2b-psJug |
| WebSite | https://angelgarciaco.com |


By @angarciaco


