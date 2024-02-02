class Car {
    constructor(car_name, model) {
        this.car_name = car_name;
        this.model = model;
    }
}

// Define the GasCar class extending from the Car class
class GasCar extends Car {
    constructor(car_name, model) {
        super(car_name, model);
    }
}

// Define the ElectricCar class extending from the Car class
class ElectricCar extends Car {
    constructor(car_name, model) {
        super(car_name, model);
    }
}


function addCar() {
    // Fetch form data
    const car_name = document.getElementById('car_name').value;
    const model = document.getElementById('model').value;
    const type = document.getElementById('type').value;

    // Create a new Car instance based on the type
    let car;
    if (type === 'electric') {
        car = new ElectricCar(car_name, model);
    } else {
        car = new GasCar(car_name, model);
    }

    // AJAX request to send data to the backend
    $.ajax({
        type: 'POST',
        url: 'backend.php',
        data: {
            car_name: car.car_name,
            model: car.model,
            type: type
        },
        success: function (response) {
            console.log(response); // Log the response from the server

            // Optionally update the DataTable
            $('#carTable').DataTable().ajax.reload();

            // Optionally show a success message
            alert('Car added successfully!');
        },
        error: function (error) {
            console.error('Error:', error);

            // Handle errors, show error messages, etc.
            alert('Error adding car. Please try again.');
        }
    });

    // Clear the form
    document.getElementById('carForm').reset();
}


$(document).ready(function () {
    $('#carTable').DataTable({
        ajax: {
            url: 'datatable.php',
            dataSrc: ''
        },
        columns: [
            { data: 'car_name' },
            { data: 'model' },
            { data: 'type' }
        ]
    });
});

