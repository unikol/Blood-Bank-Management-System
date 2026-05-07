# Azure Deployment Notes

## Project

Blood-Bank-Management-System was deployed to Microsoft Azure as part of the Cloud Computing / IaaS practical task.

## Infrastructure

- Application server: Azure Linux VM `nik-vm-01`
- Operating system: Ubuntu 24.04
- VM size: B2ts/B2s was used because the default B1s size was unavailable
- Web server: Apache2
- Runtime: PHP
- Database: Azure Database for MySQL Flexible Server
- MySQL endpoint: `nik-bloodbank-mysql.mysql.database.azure.com`
- Application database: `bloodbank`

## Installed packages

- apache2
- php
- libapache2-mod-php
- php-mysql
- git
- unzip
- mysql-client

## Azure networking

The VM Network Security Group was configured with:

- SSH port 22 for remote access
- HTTP port 80 for browser access

The Azure MySQL firewall was configured to allow access from the VM public IP only.

## Database

The `bloodbank` database was created on Azure MySQL and the SQL dump from `sql/bloodbank.sql` was imported.

After import, Azure MySQL created invisible `my_row_id` primary keys for several tables. The original ID columns used by the PHP application were not configured as `AUTO_INCREMENT`, which caused HTTP 500 errors during registration.

The fix is stored in:

`sql/fixes/azure-mysql-auto-increment-fix.sql`

## Verification

The application was verified from the browser using the VM public IP.

Checked functionality:

- Main page opens successfully
- User registration works
- User dashboard opens
- Blood Info page opens
- Blood Available page opens
- Status of Request page opens
- Database tables contain records

## Important note

The real production `connection.php` file contains database credentials and must not be committed to GitHub.

Use `file/connection.azure.example.php` as a safe example file.
