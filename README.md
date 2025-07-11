# 🌐 Ecommerce Web Site


The Halgahawaththa Hardware Shop Ecommerce System is a PHP-based web application designed to digitalize the operations of a local hardware store. It offers core eCommerce functionalities such as product listing, shopping cart, wishlist, and secure admin-side product management. This lightweight system provides a simple and functional platform for both customers and administrators, helping streamline product handling, order preparation, and user interaction with the shop.

---

### 🔑 Fully Implemented Key Features

#### 👤 Customer Side

1. **Browse Products**

   * Customers can view available products with details like name, price, and category.

2. **Add to Cart**

   * Customers can add items to their shopping cart from product listings.

3. **Remove from Cart**

   * Items can be removed from the cart when not needed.

4. **Cart Management**

   * Displays list of selected products with quantity and total amount.

5. **Add to Wishlist**

   * Option to save items for future reference using the wishlist feature.

6. **Session-based Cart**

   * Cart items persist during the session for a smooth shopping experience.

7. **Error/Status Messages**

   * Displays success or failure messages when adding/removing items.

---

#### 🧑‍💼 Admin Side

1. **Admin Login System**

   * Secure login page for admin access.

2. **Admin Dashboard**

   * Overview panel after login displaying key management options.

3. **Add New Product**

   * Upload and save new product details into the system.

4. **Manage Existing Products**

   * Edit or update product name, price, category, or availability.

5. **Add Product Categories**

   * Create new product categories for better classification.

6. **Search Products**

   * Find products quickly using the admin search functionality.

7. **Admin Navigation Panel**

   * Quick access to all admin functionalities from a central navbar.

8. **Session Management**

   * Admin session is maintained after login for secure access.

## 📁 Main Files Overview

| File Name                     | Description                                      |
|------------------------------|--------------------------------------------------|
| `addCategoryNameProcess.php` | Add new product categories                       |
| `addProductProcess.php`      | Insert new products to the database              |
| `addTocart.php`              | Add selected products to the shopping cart       |
| `addtoCartProcess.php`       | Process cart additions via user actions          |
| `addToWatchlistProcess.php`  | Add items to a user's watchlist                  |
| `adminLogin.php`             | Admin login interface                            |
| `admindashBoard.php`         | Admin dashboard with overview features           |
| `admin_SearchProductProcess.php` | Search for products in the admin panel     |
| `adminNaveBar.php`           | Navigation bar for the admin panel               |
| `admimProductManagement.php` | Manage existing product details (admin)          |

## 🗃️ Database: `halgahawatta`
<img width="1005" height="868" alt="image" src="https://github.com/user-attachments/assets/0e77288e-1067-48f3-a5d1-82972003eafe" />

## 🧰 Technology Stack

- **Backend:** PHP (Procedural)
- **Frontend:** HTML, CSS, bootstrap
- **Database:** MySQL 
- **Environment:** XAMPP / LAMP / WAMP

## 🚀 Getting Started

1. **Set Up Your Environment:**
   - Install XAMPP or an equivalent local PHP environment.
   - Start Apache and MySQL services.

2. **Database Setup:**
   - Create a new MySQL database (e.g., `halgahawatta`).
   - Import necessary tables (you’ll need to create them based on the form fields in the PHP files).

3. **Project Deployment:**
   - Copy all extracted files into `htdocs/halgahawatta`.
   - Access via `http://localhost/halgahawatta/home.php`.

4. **Configuration:**
   - Update database connection details inside PHP files (typically using `mysqli_connect()`).

## 📌 Suggestions for Enhancement

- Add full user authentication and registration.
- Implement validation and error handling on forms.
- Move to MVC architecture using a framework like Laravel.
- Improve the UI with Bootstrap or React.
- Add logging and audit trails for admin actions.

## 📄 License

This project is for educational and demonstration purposes for Halgahawaththa Hardware Shop.

---

💡 *Ideal for small retail businesses aiming to digitize their inventory and order management with a simple PHP-based system.*
  


