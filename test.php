<?php
// Jawaban test no 1
$int = 4;
$factorial = 1;
for ($x = $int; $x >= 1; $x--) {
    $factorial = $factorial * $x;
}
echo "Apabila terdapat int = $int maka outputnya $factorial ";

$int = 8;
$factorial = 1;
for ($x = $int; $x >= 1; $x--) {
    $factorial = $factorial * $x;
}
echo "Apabila terdapat int = $int maka outputnya $factorial";

// Jawaban test no 2
$pesan = "abcde";
echo strrev($pesan) . "<br>";

// Jawaban test no 3

echo printDigitValue('9.86-A5.321');

function printDigitValue($value)
{
    $n = strlen($value);
    $result = "";

    for ($i = 0; $i <= $n; $i++) {
        if (!is_numeric($value[$i])) {
            continue;
        }
        $result .= $value[$i];
    }

    echo $result . "\n";

    $n = strlen($result);

    for ($i = 0; $i <= $n; $i++) {
        echo str_pad($result[$i], $n - $i, '0', STR_PAD_RIGHT) . "\n";
    }
}
// Jawaban test no 4
$a = 3;
$b = 7;

echo "a awal = $a <br/>";
echo "b awal = $b <br/><br/>";

// coding
// gimana caranya supaya nilai b jadi nilai a
// dan nilai a jadi nilai b
// tanpa menambah variable

$a -= $b;
$b += $a;
$a = $b - $a;

echo "a final = $a <br/>";
echo "b final = $b ";

// Jawaban test no 5
$nilai = 4;
echo terbilang($nilai);

function terbilang($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = terbilang($nilai - 10) . " belas";
    } else if ($nilai < 100) {
        $temp = terbilang($nilai / 10) . " puluh" . terbilang($nilai % 10);
    } else {
        echo "silahkan masukkan bilangan 1-100";
    }

    return $temp;
}

// Jawaban test no 6
$array = [1, 4, 7, 9, 12];
$low = 2;
$high = 15;

$result = [];

foreach ($array as $key => $value) {
    if ($value >= $low && $value <= $high) {
        $result[] = $value;
    }
}

print_r($result);

// Jawaban test no 7
$array = [1, 4, 7, 9, 12];
$low = 2;
$high = 15;

$result = [];

foreach ($array as $key => $value) {
    if ($value >= $low && $value <= $high) {
        $result[] = $value;
    }
}

echo "Hasil Output " . count($result);

// Jawaban test no 8
foreach (range(1, 15) as $nilai) {
    if (
        $nilai % 3 != 0 && $nilai % 5 != 0
    ) {
        echo $nilai . '<br>';
        continue;
    }
    if ($nilai % 3 == 0) echo 'edu';
    if ($nilai % 5 == 0) echo 'work';
    echo '<br>';
}

// Jawaban test no 9
$array = [4, 2, 6, 88, 3, 11];
$low = $array[0];
$high = $array[0];
$p = count($array);

for ($i = 0; $i < $p; $i++) {
    if ($high < $array[$i]) {
        $high = $array[$i];
    }

    if ($low > $array[$i]) {
        $low = $array[$i];
    }
}

echo ("Output nya " . "low : $low, high : $high");

// Jawaban test no 10
$input = 2021;

if ($input % 4 == 0) {
    echo "$input adalah tahun kabisat";
} else if ($input % 4 != 0) {
    echo "$input bukan tahun kabisat";
}

echo "<br/>";

$input = 2024;

if ($input % 4 == 0) {
    echo "$input adalah tahun kabisat";
} else if ($input % 4 != 0) {
    echo "$input bukan tahun kabisat";
}