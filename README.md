# SovTech

> Wordpress Test

## Dev enviroment Setup

1. Copy over the root directory to your server, for example [Apache](https://www.apachefriends.org/download.html)
2. In the root folder, a folder named ```Supporting files``` containers the database.
3. Import the database file named ```sovtech_db.sql``` in phpmyadmin(Use the database name ```sovthech```).
4. Once the database import is complete, in a new tab, open ``` http://localhost/sovtech/wp-admin ```.(Username: sovtech Password: Test123#)
5. In the left side menu, go to Custom Fields > Tools. In the Tools section, under ```Import Field Groups``` click on choose file and select ```acf-export-2022-09-21.json``` from the Supporting-files folder. 


## Plugins used
1. Advanced Custom Fields
2. Wordpress Class Editor
3. Yoast

## Disclaimers

This project is meant for testing purposes only. In normal real world situations, database names or passwords should be kept out of version control.

For wordpress, only the ```sovtech_tino``` theme folder should be version controlled. 
