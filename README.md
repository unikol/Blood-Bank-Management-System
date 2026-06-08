# Blood Bank Management System — Azure Deployment Practice

This repository contains a PHP/MySQL Blood Bank Management System application that I used for DevOps cloud deployment practice.

The original project is a web application for communication between hospitals/clinics and donors/receivers. My practical task was focused on deploying and configuring this application in a cloud-based Linux environment.

---

## My DevOps Deployment Work

As part of this task, I practiced deploying a PHP/MySQL application on Azure infrastructure.

Main work completed:

- created an Azure Linux Virtual Machine;
- configured SSH access to the VM;
- installed and configured Apache;
- installed and configured PHP;
- opened HTTP access through Azure Network Security Group rules;
- created and configured Azure Database for MySQL Flexible Server;
- configured firewall access between the VM and MySQL server;
- imported the `bloodbank` database;
- updated application database connection settings;
- verified the application in browser;
- tested user registration and application pages.

---

## Application Overview

The application is a Blood Bank Management System.

It supports two main user groups:

- Donors / Receivers
- Hospitals / Clinics

Main application features:

- donor and receiver registration;
- hospital/clinic user functionality;
- blood sample management;
- blood request creation;
- request status tracking;
- profile update functionality.

---

## Technologies Used

Application stack:

- PHP
- MySQL
- HTML
- CSS
- Bootstrap
- JavaScript

DevOps / Cloud practice:

- Azure Virtual Machine
- Azure Database for MySQL Flexible Server
- Apache
- Linux
- SSH
- Firewall / NSG rules
- Database import
- Application configuration

---

## Original Local Requirements

The original application was designed for local XAMPP-based usage:

- Apache
- MySQL
- PHP
- phpMyAdmin
- `bloodbank` database

For cloud deployment, I adapted the same application logic to a Linux VM and Azure MySQL environment.

---

## Deployment Summary

The cloud deployment flow was:

1. Create Azure VM.
2. Connect to VM through SSH.
3. Install Apache and PHP.
4. Copy application files to the web server directory.
5. Create Azure MySQL Flexible Server.
6. Configure MySQL firewall rules.
7. Import application SQL database.
8. Update PHP database connection configuration.
9. Open HTTP access in Azure NSG.
10. Verify the application from browser.

---

## Database

The application uses a MySQL database named:

```text
bloodbank
```

The SQL dump is stored in the `sql` directory of the project.

During deployment, the database was imported into Azure Database for MySQL.

---

## Verification

The application was verified through browser access after deployment.

Checked functionality:

- website opens successfully;
- PHP pages are served by Apache;
- database connection works;
- user registration works;
- application pages load correctly;
- main navigation sections are available.

---

## What I Practiced

- Deploying PHP application on Linux VM
- Configuring Apache and PHP
- Working with Azure VM
- Working with Azure MySQL Flexible Server
- Importing MySQL database
- Updating application connection settings
- Troubleshooting database import issues
- Configuring cloud firewall and NSG rules
- Verifying web application deployment

---

## Result

The final result was a working PHP/MySQL Blood Bank Management System deployed in Azure.

This repository demonstrates my practical cloud deployment experience with Linux, Apache, PHP, MySQL and Azure infrastructure.

---

<details>
<summary>Original project README</summary>

# :drop_of_blood: Blood-Bank-Management-System 

This website acts like a medium/an intermediate between hospitals/clinics and donors/receivers.

## Basic functionalities:

This project is created for two users: Donors/Receivers and Hospitals/Clinics(Doctors), where a Hospital user can add blood sample to their blood bank, request for blood, check status of their request, update their details, etc. The donor/receiver can also do the same.
  
## :information_source: Languages/technologies used:

1. Frontend: HTML, CSS, Bootstrap, JavaScript.
2. Backend: Database-MySQL.
3. Frontend-Backend connection: PHP.

## :exclamation: Requirements

1. Xampp Software
2. Sublime text/Visual studio code software or any software supporting php, html, css
3. Java Jdk

## :question: How to start?

1. Download this code as a zip file.
2. Place this entire folder in htdocs, in xampp(xampp path, installed as per your installation). 
3. Open Xampp server, start Apache, MySQL.
4. In the MySQL row, select Admin.
5. Create a database with name "bloodbank" in phpmyadmin. Import the sql file from sql folder.
6. Open main.php in Sublime text/Visual studio code, on right click copy file path.
7. Paste it on any web browser and clear everything before folder name, type "localhost".
8. Ready to go!
  
## :information_source: The file named:

1. 'css' contains the files for the front end pages style.
2. 'file' contains the files for the backend connections.
3. 'image' and 'jastimage' contains images used in the front end.
4. 'sql' contains the database file that has to be imported.

## :family_man_woman_boy_boy: Team:

- Chandana G V - [Chandana](https://github.com/Chandana047)
- Rithish Reddy - [Rithish](https://github.com/Rithish7007)
- Balaji Subash - [Subash](https://github.com/gbsubash)
- SriHarsha - [Harsha](https://github.com/Sriharshajasti123)

## ✉️ Have an issues or a bug? Would like to contact?

Report [here](https://github.com/Chandana047/Blood-Bank-Management-System/issues)

## If you liked the project and found it helpful

Give a start 😄:star:

</details>
