<?php 
/*Hằng số là một định danh (tên) cho một giá trị đơn giản. Không thể thay đổi giá trị trong tập lệnh.

Tên hằng số hợp lệ bắt đầu bằng một chữ cái hoặc dấu gạch dưới (không có ký hiệu $ trước tên hằng số).

Lưu ý: Không giống như các biến, hằng số được tự động toàn cục trên toàn bộ tập lệnh.*/




//Phân biệt chữ hoa chữ thường
define("NAME", "Pham Quang Nam");

echo NAME;



echo "<br>";

//Không phân biệt chữ hoa chữ thường


define("NAME", "Pham Quang Nung",true);

echo name;



echo "<br>";


/*
Hằng số là Biến Toàn cục
Các hằng số được tự động toàn cầu và có thể được sử dụng trên toàn bộ tập lệnh.*/ 

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
 
myTest();


echo "<br>";






?>