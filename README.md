## TASK 2
# Login & Signup System using PHP & MySQL

A secure and user-friendly full stack authentication system built with PHP, MySQL, HTML, and CSS.

---

## 📌 Objective

To develop a secure **login and signup system** that allows users to register and log in using their email or username. The system includes validation, password hashing, session handling, and responsive design.

---

## 🚀 Features

- ✅ User **Registration** with username, email, and password
- ✅ User **Login** using email or username
- ✅ **Password Hashing** for secure storage
- ✅ **Session Management** to protect user pages
- ✅ **Input Validation** and meaningful error messages
- ✅ **Responsive UI** using modern HTML/CSS

---

## 🛠️ Tech Stack

| Layer     | Technology     |
|-----------|----------------|
| Frontend  | HTML, CSS      |
| Backend   | PHP            |
| Database  | MySQL          |

---

## 🗃️ Database Schema

**Database Name:** `user_auth`  
**Table Name:** `users`

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);
