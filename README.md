# PHP + MySQL Blog Management System

This is a simple blog management system built with **PHP**, **MySQL**, **HTML**, and **CSS**. It demonstrates core CRUD (Create, Read, Update, Delete) functionality with a simple database-driven structure.

---

## 🚀 Features
- Admin Login (username: `admin`, password: `admin@123`)
- Create, Edit, Delete Blog Posts
- View all posts on the frontend
- Basic responsive styling with CSS

---

## 🛠️ Technologies Used
- PHP (Core)
- MySQL (Database)
- HTML & CSS (Frontend)

---
## 🔧 How It Works

1️⃣ Admin logs into the dashboard using:
   - **Username:** `admin`
   - **Password:** `admin@123`

2️⃣ Admin can:
   - **Add** new blog posts via the dashboard.
   - **Edit** existing posts.
   - **Delete** posts.

3️⃣ All published posts are automatically displayed on the **Home Page (index.php)**.

---

**Example Pages:**
- `index.php` — Public Blog Display
- `dashboard.php` — Admin Panel
- `add-post.php` / `edit-post.php` — Manage Posts
- `db.php` — MySQL connection
## 🛠️ How to Setup Locally (Step-by-Step)
### Prerequisites:
- PHP Installed (XAMPP / WAMP)
- MySQL Installed
- phpMyAdmin Access

### Steps:
1️⃣ Import the provided `posts.sql` into your MySQL database via phpMyAdmin.
   - Database Name: `blogdb`

2️⃣ Open the `db.php` file and verify credentials:
```php
$conn = new mysqli('localhost', 'root', '', 'blogdb');


