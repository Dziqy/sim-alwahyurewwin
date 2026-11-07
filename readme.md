<div align="center">

# 🕌 MIS Al-Wahyu Rewwin

### *The digital home of YLPI Al Wahyu — connecting the foundation, TK, SD, and the community.*

![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3-EF4223?logo=codeigniter&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-D22128?logo=apache&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)

</div>

---

## 📖 About

A web-based information platform developed for Yayasan Lembaga Pendidikan Islam Al Wahyu (YLPI Al Wahyu). Designed to provide accessible information about the foundation, its educational institutions, organizational profile, articles, announcements, and community feedback through a centralized website.

---

## ✨ Core Features

**SIM Al Wahyu** provides several information sections to support **institutional communication and public engagement**.

### 🏠 Homepage & Institutional Introduction

| Feature | Description |
|---|---|
| 🌐 **Homepage** | Overview of YLPI Al Wahyu |
| 🖼️ **Visual Banner** | Institutional images and introductory content |
| 🧭 **Main Navigation** | Access to the website's important sections |
| 🏫 **Institutional Links** | Navigation for the foundation, kindergarten (TK), and elementary school (SD) |

### 🕌 Foundation Profile

| Feature | Description |
|---|---|
| ℹ️ **Foundation Information** | General information about YLPI Al Wahyu |
| 🎯 **Vision & Mission** | The foundation's vision and mission |
| 👥 **Organizational Management** | The foundation's management and organizational structure |

### 📰 Articles & Information

| Feature | Description |
|---|---|
| 📝 **Article Section** | Access to published articles |
| 📚 **Educational Information** | A channel for educational content |
| 🔗 **Content Navigation** | Visitors reach the article section through the main menu |

### 📢 Announcements

| Feature | Description |
|---|---|
| 📣 **Announcement Section** | A dedicated area for institutional announcements |
| 🗞️ **Public Information** | Helps visitors find important information from the foundation |

### 💬 Community Feedback

| Feature | Description |
|---|---|
| 📮 **Suggestion Box** | A dedicated interface for community feedback |
| 🤝 **Communication Channel** | Supports communication between website visitors and the institution |

### 📱 Responsive Website Interface

- 🌍 **Web-Based Access** – Works in modern web browsers
- 🗂️ **Navigation Structure** – Information organized into clear website sections
- 🎨 **Bootstrap Integration** – Bootstrap-based styling for responsive interface components

---

## 🚀 Getting Started

### Prerequisites

- **PHP** 5.6 – 7.4 recommended *(CodeIgniter 3 does not fully support PHP 8.1+)*
- **MySQL** 5.7+ or **MariaDB**
- **Apache** with `mod_rewrite` enabled, or an all-in-one stack such as:
  - [XAMPP](https://www.apachefriends.org/) (Windows / Linux / macOS)
  - [Laragon](https://laragon.org/) (Windows)
- **[Git](https://git-scm.com/)**
- *(Optional)* **[Composer](https://getcomposer.org/)** for dev tools

### Installation

**1. Clone the repository into your web root**

```bash
# XAMPP:   C:\xampp\htdocs\   |   Laragon: C:\laragon\www\
cd /path/to/your/web/root
git clone https://github.com/Dziqy/sim-alwahyurewwin.git
cd sim-alwahyurewwin
```

**2. Create the database**

Open **phpMyAdmin** (or the MySQL CLI) and create an empty database:

```sql
CREATE DATABASE sim_alwahyurewwin CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
```

Then import the SQL dump, if the project includes one:

```bash
mysql -u root -p sim_alwahyurewwin < path/to/database.sql
```

<!-- TODO: Add your .sql file to the repo (e.g. database/sim_alwahyurewwin.sql) and update the path above. -->

**3. Configure the base URL**

Edit `application/config/config.php`:

```php
$config['base_url'] = 'http://localhost/sim-alwahyurewwin/';
```

**4. Configure the database connection**

Edit `application/config/database.php`:

```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'sim_alwahyurewwin',
    'dbdriver' => 'mysqli',
    // ...
);
```

**5. Set an encryption key** *(required if the app uses sessions or the encryption library)*

In `application/config/config.php`:

```php
$config['encryption_key'] = 'your-random-32-character-secret-key';
```

**6. Make writable folders accessible** *(Linux / macOS)*

```bash
chmod -R 775 application/cache application/logs
```

### Running Locally

1. Start **Apache** and **MySQL** from XAMPP / Laragon.
2. Open **http://localhost/sim-alwahyurewwin/** in your browser.

**Alternative – PHP built-in server** (no Apache needed):

```bash
php -S localhost:8080
```

Then visit **http://localhost:8080/index.php**. Because `.htaccess` rewrites don't apply here, keep `index.php` in URLs, or set `$config['index_page'] = 'index.php';`.

### Running Tests *(optional)*

```bash
composer install
./vendor/bin/phpunit
```
