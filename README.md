# EduFun

EduFun is a Laravel-based educational content platform prototype built for PT EduFun, a fictional company that provides free IT-related learning materials to students. This implementation focuses on the **Data Science** and **Network Security** categories, developed as a midterm exam practice for the COMP6821001 – Web Development course.

## Table of Contents

- [Overview](#overview)
- [Project Structure](#project-structure)
- [Tech Stack](#tech-stack)
- [Laravel Components](#laravel-components)
- [Database Schema](#database-schema)
- [Features](#features)
- [Getting Started](#getting-started)
- [Author](#author)
- [Notes](#notes)

## Overview

EduFun centralizes learning content across specific IT fields. This implementation covers two categories, **Data Science** and **Network Security**. The platform is user-facing only, with no admin panel, focusing on making educational articles easy to browse, read, and attribute to their writers.

## Project Structure

```
EduFun/
├── app/
│   ├── Http/Controllers/
│   │   ├── ArticleController.php
│   │   └── WriterController.php
│   └── Models/
│       ├── Article.php
│       ├── Category.php
│       └── Writer.php
├── database/
│   ├── migrations/
│   │   ├── xxxx_create_writers_table.php
│   │   ├── xxxx_create_categories_table.php
│   │   └── xxxx_create_articles_table.php
│   └── seeders/
│       ├── WriterSeeder.php
│       ├── CategorySeeder.php
│       └── ArticleSeeder.php
├── resources/views/
│   ├── layout/
│   ├── home/
│   ├── article/
│   ├── category/
│   ├── writer/
│   ├── about/
│   └── popular/
├── routes/
│   └── web.php
├── docs/
│   ├── COMP6821001-WebDev_LatihanUTS.pdf
│   └── EduFun.pdf
├── .env.example
├── .gitignore
└── README.md
```

## Tech Stack

| Layer | Technology |
|---|---|
| Backend Framework | Laravel |
| Frontend Styling | Bootstrap |
| Database | MySQL (via phpMyAdmin) |
| Language | PHP |

## Laravel Components

The application follows Laravel's MVC architecture:

- **Routes**: `ArticleController` handles routing to the Home Page, Article Detail Page, Category Pages, and Popular Page. `WriterController` handles routing to the Writers Page and Profile Page. The About Us Page is routed directly without a controller.
- **Controllers**:
  - `ArticleController` retrieves data from the `Article`, `Writer`, and `Category` models and returns it to the Home, Detail, Category, and Popular views.
  - `WriterController` retrieves data from the `Writer` and `Article` models and returns it to the Writers and Profile views.
- **Models**: `Writer` and `Article` have a one-to-many relationship; `Category` and `Article` also have a one-to-many relationship.
- **Views (Blade)**: organized by feature folder — `layout` (Bootstrap CSS/JS, header, footer, master page), `home`, `article`, `category`, `writer`, `about`, and `popular`.
- **Migrations**: create the `writers`, `categories`, and `articles` tables.
- **Seeders**: `WriterSeeder`, `CategorySeeder`, and `ArticleSeeder` populate the database with test data.

## Database Schema

| Table | Key Columns |
|---|---|
| `writers` | `id`, `image_url`, `name`, `specialization` (enum: Data Science Specialist / Network Security Specialist), timestamps |
| `categories` | `id`, `name`, timestamps |
| `articles` | `id`, `category_id` (FK), `title`, `image_url`, `posted_at`, `writer_id` (FK), `short_info`, timestamps |

## Features

### Main Features
- **Home Page** - displays navigation (Home, Category, Writers, About Us) along with a preview of the latest articles, including title, short description, posting date, and author.
- **Category Page** - lists available categories: **Data Science** and **Network Security**.
- **Detail Page** - shows full article content per category:
  - *Data Science*: Machine Learning, Deep Learning, Natural Language Processing
  - *Network Security*: Software Security, Network Administration, Popular Network Technology
- **Writers Page** - lists all content writers.
- **Profile Page** - shows a writer's specialization and the articles they have authored.
- **About Us Page** - a short description of the EduFun platform.

### Optional (Challenge) Features
- **Popular Page** - displays currently popular articles across 2 paginated pages (3 articles per page), with clickable page numbers.

## Getting Started

### Prerequisites

- PHP 8.1+
- Composer
- MySQL / phpMyAdmin

### Installation

```bash
git clone https://github.com/<username>/EduFun.git
cd EduFun
composer install
cp .env.example .env
php artisan key:generate
```

Configure your database credentials in `.env`, then run:

```bash
php artisan migrate --seed
php artisan serve
```

Visit `http://localhost:8000` to view the application.

## Author

**Jonathan Alvindo Fernandi**  
Computer Science, School of Computer Science, Bina Nusantara University  
Course: COMP6821001 – Web Development

## Notes

Full specification and implementation report are available in the `docs/` folder.
