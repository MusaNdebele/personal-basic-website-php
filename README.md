# Personal Basic Website #

A basic full-stack website built as part of my software engineering studies. It includes a multi-page layout and a working contact form that stores submissions in a MySQL database.

## Tech Stack ##

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP 8
- **Database:** MySQL (via XAMPP / phpMyAdmin)

## Features ##

- Multi-page site: Home, About, Contact
- Contact form with client-side and server-side validation
- Parameterised SQL queries to prevent SQL injection
- Form submission feedback (success/error messages)
- Responsive layout for mobile and desktop

# How to Run Locally #

## Prerequisites ##
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL)

## Steps ##

1. Clone this repository into your XAMPP `htdocs` folder:
   ```bash
   git clone https://github.com/your-username/your-repo-name.git C:/xampp/htdocs/WebSite
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