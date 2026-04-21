# Personal Basic Website #

A basic full-stack website built as part of my software engineering studies. It includes a multi-page layout and a working contact form that stores submissions in a MySQL database.

## Tech Stack 

- <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&amp;logo=html5&amp;logoColor=white" alt="HTML5">
- <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&amp;logo=css3&amp;logoColor=white" alt="CSS3">
- <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&amp;logo=javascript&amp;logoColor=black" alt="JavaScript">
- <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&amp;logo=php&amp;logoColor=white" alt="PHP">
- <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&amp;logo=mysql&amp;logoColor=white" alt="MySQL">
- <img src="https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&amp;logo=xampp&amp;logoColor=white" alt="XAMPP">
- <img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&amp;logo=github&amp;logoColor=white" alt="GitHub">

## Features 

- Multi-page site: Home, About, Contact
- Contact form with client-side and server-side validation
- Parameterised SQL queries to prevent SQL injection
- Form submission feedback (success/error messages)
- Responsive layout for mobile and desktop

# How to Run Locally #

## Prerequisites 
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL)

## Steps 

1. Clone this repository into your XAMPP `htdocs` folder:
   ```bash
   git clone https://github.com/musandebele/personal-basic-website-php.git C:/xampp/htdocs/WebSite
   ```
2. Start Apache and MySQL in the XAMPP Control Panel.
3. Open phpMyAdmin and create a database called website_db.
4. Run this SQL in phpMyadmin
    ```sql
    CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```
5. Visit http://localhost/WebSite/index.html in your browser.

## Project Status ##
In progress - I built this as a learning project to practice full-stack web development fundamentals including PHP, MySQL, form handling and responsive CSS.