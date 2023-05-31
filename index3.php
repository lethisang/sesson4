<?php
//cau3. Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkEvenOrOddYear() {
    $currentYear = date('Y');

    if ($currentYear % 2 == 0) {
        return "năm chẵn";
    } else {
        return "năm lẻ";
    }
}

// Kiểm tra năm hiện tại là năm chẵn hay năm lẻ
$result = checkEvenOrOddYear();
echo "Năm hiện tại là $result.";
?>
</br>
<?php
//cau4. Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function printNumbers() {
    for ($i = 1; $i <= 100; $i++) {
        echo $i . " ";
    }
}

// Gọi hàm để in ra các số từ 1 đến 100
printNumbers();
?>
</br>
<!DOCTYPE html>
<html>
<head>
    <style>
        .even {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    /*câu 5. Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.
    Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.*/
    function printNumbers() {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0) {
                echo "<span class='even'>$i </span>";
            } else {
                echo "$i ";
            }
        }
    }

    // Gọi hàm để in ra dãy số từ 1 đến 100
    printNumbers();
    ?>
</body>
</html>
<?php
/* câu 6. Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);*/
function printYears($array) {
    foreach ($array as $year) {
        echo $year . " ";
    }
}

$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

echo "Các năm trong mảng: ";
printYears($nam);
?>