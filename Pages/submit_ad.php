<?php
require_once("../includes/functions.php");
if(isset($_POST['submit'])){
    extract($_POST);
    $table = "car_ad";
    $columns = "car_brand,car_model,car_purchase_year,car_fuel,car_cng,car_km_driven,car_insurance,car_number,car_description,ad_state,ad_city";
    $values = "'$car_brand','$car_model','$car_purchase_year','$car_fuel','$car_cng','$car_km_driven','$car_insurance','$car_number','$car_description','$ad_state','$ad_city'";
    insert($table,$columns,$values);
}
?>
<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <form action="" method="POST" role="form">
            <legend>Car Ad</legend>

            <div class="form-group">
                <label for="">Enter Brand</label>
                <input type="" class="form-control" id="car_brand" name="car_brand" placeholder="Enter">
            </div>

            <div class="form-group">
                <label for="">Enter Model</label>
                <input type="" class="form-control" id="car_model" name="car_model" placeholder="Enter">
            </div>

            <div class="form-group">
                <label for="">Enter Purchase year</label>
                <input type="" class="form-control" id="" name="car_purchase_year" placeholder="Enter">
            </div>
            <div class="form-group">
                <label for="">Enter Fuel</label>
                <select name="car_fuel" id="">
                   <option selected disabled>Select Fuel</option>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                </select>
            </div>
             <div class="form-group">
                <label for="">Is It CNG?</label>
                <input type="radio" class="form-control" id="" name="car_cng" value="1">
                <label>YES</label>
                <input type="radio" class="form-control" name="car_cng" value="0">
                <label>NO</label>
            </div>

            <div class="form-group">
                <label for="">Enter Km Driven</label>
                <input type="" class="form-control" id="" name="car_km_driven" placeholder="Enter KMS">
            </div>
            <div class="form-group">
                <label for="">Enter Insurance</label>
                <input type="radio" class="form-control" id="" name="car_insurance" value="1">
                <label>YES</label>
                <input type="radio" class="form-control" name="car_insurance" value="0">
                <label>NO</label>
            </div>
            
            <div class="form-group">
                <label for="">Enter Car Number</label>
                <input type="" class="form-control" id="" name="car_number" placeholder="Enter">
            </div>
            
            <div class="form-group">
                <label for="">Enter Car Description</label>
                <input type="" class="form-control" id="" name="car_description" placeholder="Enter">
            </div>
            
            <div class="form-group">
                <label for="">Enter State</label>
                <input type="" class="form-control" id="" name="ad_state" placeholder="Enter">
            </div>
            
            <div class="form-group">
                <label for="">Enter State</label>
                <input type="" class="form-control" id="" name="ad_city" placeholder="Enter">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit Ad</button>
        </form>

    </div>
    <script src="../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js" rel="stylesheet" type="text/javascript"></script>
</body>
