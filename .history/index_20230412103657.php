<?php
echo "xxxxxxxxxxxxxxxxxxxxxxx"
?>
<!--aaaaaaa-->
<br>
<?php
$txt = "PHP";
echo "I love " . $txt;
?>
<br>
<?php
$x = 5;
$y = 4;
echo $x + $y;
?>

<!--global and local scopes-->
<br>
<?php
$c = 6;
function myTest(){
    echo "Variable x inside function is: ";
}
myTest();
echo "Variable x outside function is: ".$c;

//global keyword: truy cap 1 bien toan cuc ben trong 1 ham
$x = 5;
$y = 10;
function myTest1() {
  global $x, $y;
  $y = $x + $y;
}
echo "<br>";
myTest1();
echo $y;
//$GLOBALS[index]
function myTest2() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest2();
echo "<br>";
echo $y;
//static: Muon mot bien cuc bo khi thuc thi xong mot ham ma khong muon xoa bien do
function myTest3() {
    static $x = 0;
    echo $x;
    $x++;
}
echo "<br>";
myTest3();
myTest3();
myTest3();
?>

<!--Data type: String,Integer, Float, Boolean, Array, Object, Null, Resource-->
<?php 
$cars = array("Volvo","BMW");
var_dump($cars);
echo "<br>";
//Class
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
    }
    public function message(){
        return "My car is a " . $this->color . " " . $this->model;
    }
}
$myCar = new Car("black", "volvo");
echo $myCar->message() ;
//PHP Strings
echo "<br>";
$name = "tran nghia";
echo strlen($name);
echo str_word_count($name);
echo strrev($name);
echo strpos($name, "nghia") ;
?>
<!--is_int(), is_float(), is_infinite(), is_NaN(), is_numberic(): kiem tra kieu cua mot bien
Truyen chuoi va so float sang int:  int_cast() = (int)$x-->

<!--Hang so: constant: la mot dinh danh cho mot gia tri don gian, khong thay doi dc, toan bo tap lenh-->
<?php 
define("GREETING", "Welcome to W3schools.com!");
echo GREETING;
function myTest5() {
    echo GREETING;
}
//String operations, conditional assignment operations
$txt1 = "hello";
$txt2 = "world";
echo $txt1 . " " . $txt2;
//if status = false thi tra ve logged in 
$user = "nghia";
echo $status = (empty($user)) ? "anomyouse" : "logged in";
//if color khong ton tai thi tra ve red ma ton tai thi color = color
echo $color = $color ?? "red";
?>

<!--LOOP-->
<?php 
$t = date("H");
if($t < "10"){
    echo "Have a good morning!";
}else if($t < "20"){
    echo "Have a good day!";
}else{
    echo "Have a good night!";
}

$favcolor = "red";
switch ($favcolor){
    case "green":
        echo "Green";
        break;
    case "red":
        echo "Red";
        break;
    default:
        echo "Unknown color";
}
/*
while- lặp qua một khối mã miễn là điều kiện được chỉ định là đúng
do...while- lặp qua một khối mã một lần, sau đó lặp lại vòng lặp miễn là điều kiện đã chỉ định là đúng
for- lặp qua một khối mã một số lần xác định
foreach- lặp qua một khối mã cho từng phần tử trong một mảng
*/
$x = 1;
while ($x <= 5){
    echo "The number is: $x <br>";
    $x++;
}
$y = 6;
do{
    echo "The number is: $y <br>";
    $x++;
}while($x <= 5);
for($x = 0; $x < 10; $x++){
    echo "The number is: $x <br>";
}
$colors = array("red", "green", "blue");
foreach ($colors as $value){
    echo "$value <br>";
}
//break: nhay ra khoi vong lap, continue: ngat mot vong lap
for($i = 0; $i < 10; $i++){
    if($i == 4){
        break;
    }
    if($i == 2){
        continue;
    }
    echo "The number is: $i <br>";
}

?>
<!--Ham la mot khoi cac cau lenh duoc su dung lap di lap lai trong chuong trinh va khong tu dong thuc thi-->
<?php 
//Tên hàm phải bắt đầu bằng một chữ cái hoặc dấu gạch dưới. Tên hàm KHÔNG phân biệt chữ hoa chữ thường.
//Them kai bao strict dua ra loi neu loai du lieu khong khop
//declare(strict_types=1);
function addNumber(float $a, float $b): int{
    return (int)($a + $b);
}
echo addNumber(5.5, 5.2);

//Passing Arguments by Reference: cac thay doi doi voi doi so cung lam thay doi bien dc truyen vao
function add_five(&$value){
    $value += 5;
}
$num = 2;
add_five($num);
echo $num;

//Array
$cars = array("Volvo", "BMW", "Toyota");
$length =  count($cars);
for($i = 0; $i<$length; $i++) {
    echo $cars[$i];
    echo "<br>";
}
//associative array: mang ket hop
$age = array("Perter"=>"35","Ben"=>"37");
echo "Peter is " . $age['Perter'] . " years old.";
echo asort($age);
foreach($age as $x => $x_value){
    echo "Key=" . $x . ", Value=" .$x_value;
    echo "<br>";
}
//Multidimensional arrays
$carss = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo $carss[0][0]. ": In stock: " . $carss[0][1]. ", sold: " . $carss[0][2];
for($row = 0; $row < 4; $row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for($col = 0; $col < 3; $col++){
            echo "<li>".$carss[$row][$col]."</li>";
    }
    echo "</ul>";
    echo "nghia";

}
?>