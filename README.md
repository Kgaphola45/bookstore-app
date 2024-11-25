# Bookstore App  

Welcome to the Bookstore App! This project is an online store built with PHP and MySQL, designed to allow users to browse, search, and purchase books. It includes a user-friendly interface, secure user authentication, and a dynamic catalog of books.

## Features  

1. **User Authentication**  
   - User registration with email verification.  
   - Secure login and session management.  

2. **Book Catalog**  
   - Browse and search books by title, author, or genre.  
   - View detailed information for each book (e.g., description, price, stock).  
   - Pagination and filtering for easy navigation.  

3. **Shopping Cart**  
   - Add books to the shopping cart.  
   - View cart contents with the ability to update or remove items.  
   - Calculate total price dynamically as items are added.  

4. **Order Management**  
   - Users can place orders after reviewing the cart.  
   - Order confirmation and tracking.  

5. **Admin Panel**  
   - Admin can add, edit, or remove books from the catalog.  
   - Admin can manage orders and users.  

6. **Database Integration**  
   - MySQL for storing user data, book details, and order information.  
   - Structured database with normalized tables for scalability and performance.  

---

## Prerequisites  

### Tools Required  
- **PHP**: Version 7 or higher.  
- **MySQL**: Version 5.7 or higher.  
- **Apache**: With mod_rewrite enabled (or use XAMPP/WAMP for local testing).  

### Dependencies  
- PHP extensions: `mysqli`, `session`, `mbstring`.  
- Composer (optional for managing dependencies).  

---

## Installation  

### Clone the Repository  
```bash
git clone https://github.com/kgaphola45/bookstore-app.git
cd bookstore-app
