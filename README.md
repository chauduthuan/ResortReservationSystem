SDSU CS532 Software Engineering
Team: Resort Reservation System (RRS) 
Members: Michael Yee, Tony La, Thuan Chau, Steven Duong, Ching Yi Lui, Alexander Giang, Shawn Chua

PPT: https://docs.google.com/presentation/d/1-JWPMKZ7i7O6CivBwpi8uqav-121emF8c5t5RFZXqRE/edit?usp=sharing

Borrego Springs Resort Installation Steps

1. Download XAMPP (Version in use: XAMPP for Windows 7.1.11/PHP7.1.11)
	https://www.apachefriends.org/download.html
   You can download MySQL thru the XAMPP app.

2. Make sure to enable "short_open_tag=On" in your ~/xampp/php/php.ini file.

3. Copy the unzipped project folders to ~/xampp/htdocs/ location 

	OR
	
	clone the repository into the ~/xampp/htdocs/ location using: 
	git init
	git clone https://github.com/chauduthuan/ResortReservationSystem .

4. For the project URL, make sure the base_url name in ~/app/config.php file of both folders are:
	
	In the hotel/ folder: 
		$config['base_url'] = 'http://localhost/hotel';
	In the hotel_employee/ folder:
		$config['base_url'] = 'http://localhost/hotel_employee';

5. Next, we need to create a database:
	- To do this, START the Apache and MySQL Modules in the XAMPP Control Panel.
	- Then, click on Admin for MySQL, which should redirect you to phpMyAdmin on your browser.

	- Create a database with name 'hotel' on the left-hand side.
	- Import the first part of database by opening hotel_employee/Database/ folder and dragging 
	the 'hotel.sql' file to your with phpMyAdmin open on your browser.
	- Import the next part by opening hotel/Database/ folder and doing the same steps.
	- Make sure you import the files in this order because there are some table constraints in 
	the hotel/ database that require the hotel_employee/ tables first.
	
4. Now, you can open your browser with the the following URLs:
	Visitor/Customer: localhost/hotel
	Employee: localhost/hotel_employee
	
For employee, you can login with the following credentials:

	username - ganesh
	password - ganesh

	- Here, Employees can look at Customer information and make any changes accordingly.

For Visitor, you can view a mock-up of what a landing page could be:
	- Visitors can view the Rooms, Room Types, Restaraunt Info, and Hikes and Rental Info. 
	- Visitors cannot make reservations. Only Customers with an account can.
	- Visitors can register for an account using the shortcut on the Home Page.

For Customers, it looks the same as the landing page, except there is a Customer Dashboard tab.
	- Here, customers can view their Reservations made.
	- Customers can also view their food orders, hike rentals, and stuff. 
		- This feature is not implemented and has hard-coded information

Happy Coding!
