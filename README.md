# Grocery-Inventory-Management
This project implements a simple grocery inventory management system with two endpoints - one for adding grocery items and another for retrieving all items in the inventory.

## Prerequisites

- HTML,CSS,PHP,Javascript
- MySql

## Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/grocery-inventory.git
Navigate to the project directory:

bash
Copy code
cd grocery-inventory
Set up your database and update dbcon.php with your database credentials.

Run the project:

bash
Copy code
# Depending on your setup

Endpoints
1. Add Grocery Item
Endpoint: POST /add_item.php
Request:
Method: POST
URL: http://localhost:8000/add_item.php
Body: JSON or form data with item name and quantity
Response:
JSON response indicating success or error
2. Get Inventory
Endpoint: GET /get_items.php
Request:
Method: GET
URL: http://localhost:8000/get_items.php
Response:
JSON response containing the list of items in the inventory
