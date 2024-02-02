<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <title>Car Inventory System</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Car Inventory System</h1>
            <p class="lead">Manage your car inventory with ease.</p>
        </div>
    </div>

    <div class="container">
        <h2>Add New Car</h2>
        <form id="carForm">
            <div class="form-group">
                <label for="car_name">Car Name:</label>
                <input type="text" class="form-control" id="car_name" name="car_name" required>
            </div>
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>
            <div class="form-group">
                <label for="type">Car Type:</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="gas">Gas</option>
                    <option value="electric">Electric</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="addCar()">Add Car</button>
        </form>
    </div>

    <div class="container mt-4">
        <h2>Car List</h2>
        <table id="carTable" class="table">
            <!-- DataTable will be populated here -->
        </table>
    </div>

    <script src="script.js"></script>
</body>
</html>