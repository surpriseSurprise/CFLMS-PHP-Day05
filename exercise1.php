<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
class Vehicles{
    public $name = "";
    public $model = "";
    public $makeYear = "";
    public $color = "";
    public $fuelType = "";

    function __construct($name, $model, $makeYear, $color, $fuelType) {
    $this->name  =$name; 
    $this->model  =$model; 
    $this->makeYear  =$makeYear; 
    $this->color  =$color; 
    $this->fuelType  =$fuelType; 
    }

    public function displayVehicles() {
        return "$this->name $this->model" ;
    // echo $this->name;
    // echo $this->model;
    // echo $this->makeYear;
    // echo $this->color;
    // echo $this->fuelType;
    }

}


$val = new Vehicles('Ford', 'Fiesta', '2005', 'red', 'normal');
echo $val->displayVehicles();
// echo "<br> $val->name $val->model";

$val = new Vehicles('Mercedes', 'S', '2012', 'white', 'normal');
echo "<br> $val->name $val->model";

$val = new Vehicles('Fiat', 'Tipo', '2015', 'black', 'normal');

echo "<br> $val->name $val->model<br>";

class Ships extends Vehicles{
    public $speed = "";

function __construct($name, $model, $makeYear, $color, $fuelType, $speed) {
        $this->name  =$name; 
        $this->model  =$model; 
        $this->makeYear  =$makeYear; 
        $this->color  =$color; 
        $this->fuelType  =$fuelType; 
        $this->speed  =$speed; 
        }

public function displayShips() {
            return parent::displayVehicles() . ", " . $this->speed;
            }
}

$vals = new Ships('Yacht', 'A', '2015', 'blue', 'Diesel', 'fast');
echo "<br> $vals->name $vals->model, $vals->speed";

$vals = new Ships('Yacht', 'B', '2010', 'white', 'Diesel', 'fast');
echo "<br> $vals->name $vals->model, $vals->speed<br>";

$vals = new Ships('Steamboat', 'Ye Olde', '1888', 'grey', 'steam', 'slow');
// echo "<br> $vals->name $vals->model, $vals->speed<br><br>";
echo $vals->displayShips();

?>
</body>
</html>

<!-- Create a simple Class called Vehicles. This Class should have the properties: name, model, makeYear, color, fuelType. Use a constructor. Create a method which will return the name and the model of this vehicle. 

Instantiate 3 new objects from this Class. 

Once you have done creating these objects, create a new Class called Ships. This Class will extend the Vehicles Class. Add new properties and methods to this Class. -->
<!-- 
Instantiate 3 new objects from this Class.  -->