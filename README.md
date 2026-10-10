# PHP Project Deployment on AWS EC2

## Project Overview
This project demonstrates the deployment of a PHP-based web application on an AWS EC2 Linux server using GitHub, Nginx, PHP and MariaDB.

## Technologies Used
- AWS EC2 (Amazon Linux)
- Git and GitHub
- Nginx Web Server
- PHP
- MariaDB / MySQL

## Deployment Steps

### 1. Update the Server
```bash
sudo yum update -y
```

### 2. Install Required Packages
```bash
sudo yum install nginx mariadb105-server php git -y
```

### 3. Start and Enable Services
```bash
sudo systemctl start nginx mariadb php-fpm
sudo systemctl enable nginx mariadb php-fpm
```

### 4. Clone the GitHub Repository
```bash
cd /usr/share/nginx/html
sudo git clone https://github.com/USERNAME/REPOSITORY.git
```

Replace `USERNAME` and `REPOSITORY` with your actual GitHub details.

### 5. Verify Services
```bash
sudo systemctl status nginx
sudo systemctl status mariadb
sudo systemctl status php-fpm
```

### 6. Configure the Database
Create the application database and required tables in MariaDB according to the project's PHP code.

### 7. Test the Application
Open the EC2 public IP address in a browser and navigate to the project page.

Example:
```text
http://YOUR_EC2_PUBLIC_IP/REPOSITORY/
```

### 8. Verify Registration
Submit the registration form and check whether the submitted record is stored in the database.

## Learning Outcomes
- Learned basic Git and GitHub workflow.
- Practiced installing and managing Linux services.
- Deployed a PHP project on AWS EC2.
- Practiced web server and database configuration.
- Tested frontend, backend and database connectivity.

## Note
PHP-FPM and Nginx must be configured to process PHP files correctly. Configure database credentials securely and never commit passwords or secret keys to GitHub.
