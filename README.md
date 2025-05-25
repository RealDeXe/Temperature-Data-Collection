README - Temperature Data Collection and Visualization Project
This project consists of several PHP and HTML web files that allow you to collect, store, and display temperature and pressure data.

Main Files
1. send_data.html (Form)
A web page for users to manually submit temperature and pressure data.

Sends the data via POST request to receive_temp.php.

2. receive_temp.php (API Backend)
Receives temperature and pressure data via POST.

Saves the data into the MySQL database named api.

Returns a confirmation message.

3. get_data.php (Dashboard)
Fetches the stored data from the database.

Displays a dynamic chart (using Chart.js) showing the recorded temperature and pressure.

Allows real-time visualization of sensor data.

Special File
auto_save_temp.php
Script that automatically reads the CPU temperature of the machine using Open Hardware Monitor.

Periodically saves the CPU temperature into the database.

Runs without manual input to continuously monitor the machine temperature.

Workflow Summary
kotlin
Copier
Modifier
send_data.html (form)
          ↓ POST data
receive_temp.php (API backend)
          ↓ Saves data to DB
get_data.php (dashboard)
          ↓ Displays data chart
auto_save_temp.php runs independently to auto-save the machine’s CPU temperature.

How to Run the Project
Install and run XAMPP

Download and install XAMPP from https://www.apachefriends.org.

Start Apache and MySQL services using the XAMPP control panel.

Set up the database

Create a MySQL database named api.

Run the provided SQL table creation commands to create the necessary tables.

Place project files

Put all PHP and HTML files inside the XAMPP web root directory, typically:

makefile
Copier
Modifier
C:\xampp\htdocs\iot\
Access pages via browser at:

arduino
Copier
Modifier
http://localhost/iot/send_data.html
http://localhost/iot/get_data.php
Install and run Open Hardware Monitor (for auto_save_temp.php)

Download Open Hardware Monitor from https://openhardwaremonitor.org/.

Run Open Hardware Monitor on the Windows machine where you want to monitor CPU temperature.

Make sure Open Hardware Monitor is running before running auto_save_temp.php as it reads temperature data from it.

Run the auto_save_temp.php script

You can run this PHP script manually in CLI or set it up as a scheduled task (Windows Task Scheduler) to run automatically every few minutes.

It will read the CPU temperature from Open Hardware Monitor and save it to the database.
