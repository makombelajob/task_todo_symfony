![Home Screen](./app/public/images/screenshots.png)
# 📝 Symfony Task Manager - Mini Project

This project is a simple task management web app built with **Symfony**. It allows users to **create**, **list**, **edit**, and **delete** tasks. It uses **Doctrine ORM** for database management and **Twig** for templating, styled with **Bootstrap 5**.

---

## 📂 Project Structure

### Main Entity
- `App\Entity\Tasks` with the following fields:
    - `id` – Task ID (primary key)
    - `name` – Task title
    - `description` – Task details
    - `createdAt` – Creation date
    - `state` – Task status (`Pending`, `In Progress`, `Completed`)

---

## 🔁 Features

### ✅ Home Page
- **Route**: `/`
- Displays a list of all tasks
- Shows task states with color indicators (Bootstrap)
- If no tasks are available, a message is shown

### ➕ Add Task
- **Route**: `/add`
- Form to add a new task with fields:
    - `name`, `description`, `state`
- The `state` field has a default pre-selected value

### ✏️ Edit Task
- **Route**: `/edit/{id}`
- Loads existing task data into a form for editing

### 🗑 Delete Task
- **Route**: `/delete/{id}`
- Deletes the selected task and redirects to the home page

---

## 🛠 Technologies Used

- **Symfony 6+**
- **PHP 8+**
- **Doctrine ORM**
- **Twig Templating Engine**
- **Bootstrap 5**

---

## ⚙️ Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/makombelajob/task_todo_symfony.git
   cd task_todo_symfony
   docker compose build
   docker compose up
   👉 http://127.0.0.1:8080
