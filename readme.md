# 🌾 AgroBids – B2B Agri-Tech Auction Platform

AgroBids is a **B2B Agri-Tech platform** designed to empower farmers by providing a direct, transparent, and efficient auction-based marketplace for selling agricultural products in bulk.

> 🧑‍🌾 Built for Farmers • 🏢 Open to All Buyers • 💰 Powered by Auctions

---

## 🚀 Features

- 🔄 Auction System – Farmers list products in lots and buyers place bids in real-time  
- 🧑‍🌾 Farmer Dashboard – Create, manage, and monitor auctions  
- 🛒 Buyer Dashboard – Browse and bid on available lots  
- ⭐ Review System – Buyers can rate products post-purchase  
- 🔒 Role-Based Access – Separate flows for Farmers and Buyers  
- 📦 Bulk Trading – Designed specifically for high-volume, B2B transactions  

---

## 🎯 Vision

AgroBids aims to **revolutionize agricultural marketing** by eliminating middlemen, ensuring **fair pricing** for farmers, and providing **efficient sourcing** for organizations, distributors, kitchens, and individuals.

---

## 📸 Screenshots
![Screenshot 2025-06-27 231438](https://github.com/user-attachments/assets/a9dadf70-2124-46cb-ad39-9bc768691a28)

![Screenshot 2025-06-27 231459](https://github.com/user-attachments/assets/89f95bbe-bda0-4ef7-8c64-83c97b2b7af0)

![Screenshot 2025-06-27 231522](https://github.com/user-attachments/assets/e2bcbc46-2646-4bdf-b98a-e233535c17f9)

![Screenshot 2025-06-27 231543](https://github.com/user-attachments/assets/fb168202-68e4-4d41-af94-168233e23847)

![Screenshot 2025-06-27 231611](https://github.com/user-attachments/assets/189f8c78-4cc1-4924-bd2b-c2e1d94749f3)

![Screenshot 2025-07-03 233806](https://github.com/user-attachments/assets/3b9025d2-ce9b-4928-b8e5-657dfdb6e8b0)

---
## 🛠 Tech Stack


- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP (CodeIgniter)  
- **Database:** MySQL  
- **Hosting:** XAMPP / Localhost (Dev)  

---

## 🧪 How to Run Locally

### 1. Clone the Repository

```bash
git clone https://github.com/bhavyapatel15/Agro-Bids.git
cd Agro-Bids
```

### 2. Set Up the Backend

- Install XAMPP: [https://www.apachefriends.org](https://www.apachefriends.org)
- Move the Agro-Bids folder to `C:/xampp/htdocs/`
- Start Apache and MySQL using the XAMPP Control Panel
- Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
- Create a new database named `agrobids`
- Import the `maindb.sql` file into the database

### 3. Update Database Config

In `application/config/database.php`:

```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'maindb',
    'dbdriver' => 'mysqli',
);
```

### 4. (Optional) Set Base URL

In `application/config/config.php`:

```php
$config['base_url'] = 'http://localhost/Agro-Bids/';
```

### 5. Access the App

Open your browser and go to:
```
http://localhost/Agro-Bids/
```

---

## 👤 User Roles

- 👨‍🌾 **Farmer** – Create product lots for auction, manage bids, finalize sales  
- 🛍 **Buyer** – Place bids, view auction results, review sellers  

---

## 📂 Project Structure

```
Agro-Bids/
├── application/
│   ├── controllers/
│   ├── models/
│   └── views/
├── assets/
├── database/
│   └── maindb.sql
├── index.php
└── .gitignore

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).

---

## 📧 Contact

Made with ❤️ by [Bhavya Patel](https://github.com/bhavyapatel15)  
For questions, suggestions, or collaboration, feel free to reach out!
