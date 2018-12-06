<?php 

//Hàm strlen() là Hàm trả về độ dài của một chuổi




$name="Pham Quang Nam";


echo strlen($name);

echo "<br>";

//Hàm str_word_count() sẽ lấy thông tin về các từ có trong chuỗi, bao gồm số từ, vị trí xuất hiện .v.v.

print_r( str_word_count($name,1));


echo "<br>";
//Hàm strrev() sẽ đảo ngược chuỗi được truyền vào.



echo strrev($name);

echo "<br>";



//Hàm strpos() sẽ tìm kiếm vị trí đầu tiên của kí tự hoặc chuỗi con xuất hiện trong chuỗi nguồn. Hàm trả về số nguyên là vị trí đầu tiên xuất hiện của kí tự hoặc chuỗi con trong chuỗi nguồn, lưu ý là chuỗi sẽ bắt đầu từ vị trí 0, không phải 1.


echo strpos($name,"P");

print_r(strpos($name,"N",0));

echo "<br>";


/*
Cú pháp: str_replace($search, $replace, $subject);

Trong đó:

$search là kí tự, chuỗi kí tự hoặc mảng các chuỗi ký tự cần tìm kiếm để thay thế.
$replace là kí tự, chuỗi kí tự hoặc mảng các chuỗi ký để thay thế cho kí tự, chuỗi kí tự hoặc mảng các chuỗi ký $sreach.
$subject là chuỗi ký tự hoặc mảng các chuỗi ký tự gốc cần được chỉnh sửa.
    Hàm str_replace() sẽ thay thế tất cả các ký tự $strSearch nằm trong $subject bằng ký tự $strReplace.

Mô tả
Nếu $search và $replace là các mảng , str_replace() sẽ lấy từng phần tử của mảng để tìm kiếm và thay thế chúng trong chuỗi $subject.
Nếu $replace có ít phần tử hơn $search thì những chuỗi rỗng sẽ được sử dụng như là giá trị thay thế.
Nếu $search là 1 mảng và $replace là 1 chuỗi thì giá trị chuỗi $replace sẽ được thay thế cho mọi phần tử trong array $search.
Nếu $search và $replace là các mảng các phần tử sẽ được xử lý từ đầu đến cuối.

*/ 

echo str_replace("Quang","nhung1","Pham Quang Nam");



$x = array(1,8,9);  
$y = array(5,6,7);  

print_r($x + $y);


$a=8;
$b=9;
function sum(){
	global $a,$b, $c;
	$c= $a +$b; 
}
sum();
echo $c;
?>