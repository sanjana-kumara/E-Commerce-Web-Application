# 🌐 Ecommerce Web Site

The Halgahawaththa Hardware Shop Ecommerce System is a PHP-based web application designed to digitalize the operations of a local hardware store. It offers core eCommerce functionalities such as product listing, shopping cart, wishlist, and secure admin-side product management. This lightweight system provides a simple and functional platform for both customers and administrators, helping streamline product handling, order preparation, and user interaction with the shop.

---

### 🔑 Fully Implemented Key Features

#### 👤 Customer Side

1. **Sign / SignUp**

    * User Login and Registration.

   <img width="1813" height="913" alt="image" src="https://github.com/user-attachments/assets/5c60fc63-f14c-49b1-a66c-a9c8c0186902" />
   <img width="1834" height="918" alt="image" src="https://github.com/user-attachments/assets/e9f555db-31ac-4287-b22c-b7ea6cfdce02" />

3. **Browse Products**

   * Customers can view available products with details like name, price, and category.

  <img width="1901" height="900" alt="image" src="https://github.com/user-attachments/assets/a4148385-37dd-4e45-8b44-7692148f6e04" />
  <img width="1876" height="906" alt="image" src="https://github.com/user-attachments/assets/4cec74a5-cd08-4b2f-8112-fb237474f06d" />
  <img width="1908" height="902" alt="image" src="https://github.com/user-attachments/assets/29578ce1-6518-4c2c-a03d-f28100b0648e" />

4. **Add to Cart**

   * Customers can add items to their shopping cart from product listings.

    <img width="1904" height="902" alt="image" src="https://github.com/user-attachments/assets/30e8db48-db77-4957-9a18-aa0a60fde78f" />
     
5. **User Profile**

   * Edit Your Profile Detailes.

  <img width="1904" height="914" alt="image" src="https://github.com/user-attachments/assets/6d373487-e92c-45ec-be52-a83d754ea0f4" />

6. **Order History**

   * Displays list of order products.
  
   <img width="1892" height="899" alt="image" src="https://github.com/user-attachments/assets/b8a05dfd-0fa1-4ea3-92de-1a345a00f145" />

7. **Add to Wishlist**

   * Option to save items for future reference using the wishlist feature.
  
  <img width="1895" height="918" alt="image" src="https://github.com/user-attachments/assets/4dd1fed3-344b-40dc-96ec-c801f92ebc89" />

8. **Single Product view**

   * See Product Description , Price , Review , etc....

  <img width="1904" height="906" alt="image" src="https://github.com/user-attachments/assets/52ebae6a-4f3a-4de6-9622-32236b1fdd9a" />

---

#### 🧑‍💼 Admin Side

1. **Admin Login System**

   * Secure login page for admin access.
  
    <img width="1894" height="915" alt="image" src="https://github.com/user-attachments/assets/27a5d89c-9811-4ea0-ac76-b16aa73cc44c" />

    * Email Verification.

    <img width="920" height="274" alt="image" src="https://github.com/user-attachments/assets/6ff73666-a3d9-420d-8bc8-82fa6a65398c" />

2. **Admin Dashboard**

   * Overview panel after login displaying key management options.

  <img width="1907" height="914" alt="image" src="https://github.com/user-attachments/assets/4475baa8-e640-4190-8e5a-d73f4867f436" />
  <img width="1903" height="920" alt="image" src="https://github.com/user-attachments/assets/0c3899e0-071c-4043-bb38-494247e036dc" />
  <img width="1899" height="914" alt="image" src="https://github.com/user-attachments/assets/25f70550-7431-4e4e-8896-ca75e6248a6e" />

3. **Product Management**

   * Upload and save new product details into the system and Create new product categories for better classification.
  
  <img width="1902" height="690" alt="image" src="https://github.com/user-attachments/assets/c3aaf99c-01f2-4235-883a-69e1edba61b1" />
  <img width="1901" height="916" alt="image" src="https://github.com/user-attachments/assets/1ec60520-59bb-4279-8ce0-eb7e5affba1a" />

4. **User management**

   * Active, Deactive Users with User management.

  <img width="1907" height="919" alt="image" src="https://github.com/user-attachments/assets/c7696621-b952-4ba3-91e0-4c650a87f683" />

5. **Stock Management**

   * Add Exsiting Product Active , Deactive , edit , etc... .
  
  <img width="1903" height="917" alt="image" src="https://github.com/user-attachments/assets/e1b703a5-e872-4b5a-a526-3ab23f1c620a" />

6. **Report Management**

   * Report Dashboard.

  <img width="1900" height="779" alt="image" src="https://github.com/user-attachments/assets/16fbe3a7-2289-4f4d-ab02-68ca315efbd6" />

7. **Stock Report**

   * All Stock Report.
  
  <img width="1903" height="914" alt="image" src="https://github.com/user-attachments/assets/3611c756-60ec-4753-b47c-d0c781283808" />


8. **Product Report**

   * All Product Report.
  
   <img width="1889" height="913" alt="image" src="https://github.com/user-attachments/assets/72432bf9-aa2f-4b58-93b0-498a804974f8" />

9. **user Report**

   * All Users Report.
  
  <img width="1916" height="771" alt="image" src="https://github.com/user-attachments/assets/d483c75f-d9b5-46d3-8170-5ec3c4db5ac8" />


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
- **Frontend:** HTML/ CSS/ bootstrap
- **Database:** MySQL / Hedisql
- **Environment:** XAMPP / LAMP / WAMP
- **Payment Gatway:** Payhere

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
   - Access Admin Login `http://localhost/halgahawatta/adminLogin.php`.
       * Create App Password in Your Google Account and Update `adminVerificationProcess.php` file.)

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
  


