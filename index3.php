<?php 
// Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
	$number = 2;
	if ($number % 2 == 0) {
		echo "1. Kết quả: $number là số chẵn.";
	} else {
		echo "1. Kết quả: $number là số lẻ.";	
	}
?>

<?php 
// Bài 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm thi giữa kỳ, điểm thi cuối kỳ.
	$diemGiuaKy = 7.5;
	$diemCuoiKy = 8;
	$DiemTB = ($diemGiuaKy * 0.3) + ($diemCuoiKy * 0.7);

	echo "<br> <br> 2. Kết quả: ";
	if ($DiemTB >= 9.0) {
		echo "Xuất sắc.";
	} elseif ($DiemTB >= 7.0 && $DiemTB < 9.0) {
		echo "Giỏi.";
	} elseif ($DiemTB >= 5.0 && $DiemTB < 7.0) {
		echo "Khá.";
	} elseif ($DiemTB < 5.0) {
		echo "Yếu.";
	}
?>

<?php
// Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình chẵn hay lẻ.
	$curentYear = date("Y");

	echo "<br> <br> 3. Kết quả: ";
	if ($curentYear % 2 == 0) {
		echo "Năm nay là năm chẵn.";
	} else {
		echo "Năm nay là năm lẻ.";
	}
?>

<?php 
// Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100
	echo "<br> <br> 4.Kết quả: ";
	for ($i = 1; $i <= 100; $i++) { 
		echo $i . " ";
	}
?>

<?php 
// Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.
	echo "<br> <br> 5.Kết quả: ";
	for ($i = 1; $i <= 100; $i++) { 
		if ($i % 2 == 0) {
			echo "<b>$i</b> ";
		} else {
			echo "$i ";
		}
	}
?>

<?php 
// Bài 6: Viết chương trình PHP, sử dụng vòng lăpj For each in ra các năm trong mảng có sẵn dưới đây: $nam = array(1990, 1991, 1992, 1993, 1994, 1995)
	echo "<br> <br> 6.Kết quả: ";
	$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

	foreach($nam as $value) {
		echo "$value ";
	}
?>