# 🌡️ Temperature Data Collection and Visualization Project

This project allows you to collect, save, and visualize temperature and pressure data via a simple web interface and backend API.

---

## 📂 Project Files

api/
├── send_data.html ← Web form to send temperature and pressure data manually
├── receive_temp.php ← API backend to receive and save data in database
├── get_data.php ← Dashboard showing data charts with Chart.js
└── auto_save_temp.php ← Script to auto-save the machine's CPU temperature

---

## ⚙️ Prerequisites

✅ Windows PC with XAMPP installed (Apache + MySQL)  
✅ MySQL database named `api` with the required table  
✅ Open Hardware Monitor installed and running (for CPU temp auto-save)  
✅ PC and device on the same local network for browser access  

---

## 🚀 Installation and Usage

### 1. Install XAMPP  
- Download XAMPP from [https://www.apachefriends.org](https://www.apachefriends.org)  
- Install with default options  
- Open XAMPP Control Panel  
- Start **Apache** and **MySQL** services

### 2. Setup MySQL Database  
- Create a database named `api`  
- Run the SQL command to create the data table:
```sql
CREATE TABLE data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    temperature FLOAT,
    pressure FLOAT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);
3. Place Project Files
Copy all project files into your XAMPP web root folder, e.g.:
C:\xampp\htdocs\api\

4. Open Hardware Monitor
Download from https://openhardwaremonitor.org/

Launch it and keep it running in the background on the PC

5. Access Web Interface
Find your PC’s local IP with ipconfig

From your phone or any device on the same network, open in browser:
http://<PC_IP>/api/send_data.html to send manual data
http://<PC_IP>/api/get_data.php to view data charts

6. Run auto_save_temp.php
Run manually via CLI or set up a scheduled task (Windows Task Scheduler)

This script reads CPU temperature from Open Hardware Monitor and saves it automatically

⚠️ Notes
Make sure Windows Firewall allows Apache through

Keep Open Hardware Monitor running for auto_save_temp.php to work

For real deployment, consider adding authentication/security to API endpoints
