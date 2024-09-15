<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="style/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form</title>
</head>
<body>
    
    
    <form>
        <div class="container-fluid"><h1 class="heading">Book your appointment  </h1> </div>
        <div class="col-md-6 offset-3 ">
        <div class="form-control">
            <label>Enter your name</label>
            <input type="text" placeholder="Enter your name" name=""required class="name">
        </div>
        <div class="form-control">
            <label> Patient's age</label>
            <input type="number" placeholder="Enter patient's age"name=""required class="age">
        </div>
        <div class="form-control">
            <label>Select the doctor-</label>
            <select class="form-select1">
                <option>Select</option>
                <option>Radhe Shayam Gupta</option>
                <option>Vijaya Jain</option>
                <option>Anuj Purohit</option>
                <option>Deepshikha Khandelwal</option>
                <option>Nikhil Rajawat</option>
                <option>Preeti Sharma </option>
                <option>Amita Bhardwaj</option>
                <option>Shikha Saini</option>
              </select>
        </div>
<div class="form-control">
    <label>Enter the time of appointment</label>
    <input type="time" name=""required value="12:00" class="app">
</div>
<div class="form-control">
    <label>Select the city-</label>
    <select class="form-select2">
        <option>Select</option>
        <option>Jaipur</option>
        <option>Jodhpur</option>
        <option>Udaipur</option>
        <option>Alwar</option>
        <option>Ajmer</option>
        <option>Dosa</option>
        <option>Jaisalmer</option>
        <option>Pushkar</option>
      </select>
</div>
<div class="form-control">
    <label>Enter your Address</label>
    <input type="text" placeholder="Enter your address" name="" required class="add">
</div>
<div class="form-control">
    <label> Enter mobile number</label>
    <input type="text" placeholder="Enter contact number"name=""required class="mob">
</div>
<div class="d-grid">
    <button type="button" class="btn btn-primary btn-block">Make Appointment</button>
    <br>
    <br>
  </div>
</div>
    </form>
    
</body>
</html> 