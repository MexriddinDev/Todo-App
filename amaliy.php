<?php
echo "1-topshiriq";
echo "</br>";


?>
<form method="POST">
    <input type="text" name="number" placeholder="Raqam kiriting">
    <button type="submit" name="task" value="2">Tekshirish</button>
</form>
<?php
if (isset($_POST['task']) && $_POST['task'] == "2" && isset($_POST['number'])) {
    $number = $_POST['number'];

    if ($number%2==0) {
        echo "Juft";

    } else {
        echo "toq ";
    }
}

echo "<br>";
echo "2-topshiriq";
echo "<br>";
?>
<form method="POST">
    <input type="number" name="son" placeholder="Son kiriting">
    <button type="submit" name="task" value="7">Faktorialni hisoblash</button>
</form>
<?php
if (isset($_POST['task']) && $_POST['task'] == "7" && isset($_POST['son'])) {
    $son = $_POST['son'];
    $faktorial = 1;

    for ($i = 1; $i <= $son; $i++) {
        $faktorial *= $i;
    }

    echo "$son! = $faktorial";
}

echo "<br>";
echo "3-topshiriq";
echo "</br>";


?>
<form method="POST">
    <input type="text" name="number" placeholder="Raqam kiriting">
    <button type="submit" name="task" value="2">Tekshirish</button>
</form>
<?php
if (isset($_POST['task']) && $_POST['task'] == "2" && isset($_POST['number'])) {
    $number = $_POST['number'];

    if ($number>0) {
        echo "musbat";

    }
    elseif($number<0) {
        echo "manfiy";
    }
    else {
        echo "0 ga teng ";
    }
}
echo "<br>";

echo "4-topshiriq";
echo "<br>";
?>

<?php
$numbers=['12','13','43','44', '4543'];
$max=$numbers[0];
foreach ($numbers as $number) {
    if ($number>$max) {
        $max=$numbers;

    }
echo $max;
}


echo "<br>";
echo "5-topshiriq";
echo "<br>";
?>
<form method="POST">
    <input type="text" name="string" placeholder="Matn kiriting">
    <button type="submit" name="task" value="5">So'zlarni sanash</button>
</form>
<?php
if (isset($_POST['task']) && $_POST['task'] == "5" && isset($_POST['string'])) {
    $matn = $_POST['string'];
    $sozlarSoni = str_word_count($matn);
    echo "So'zlar soni: $sozlarSoni";
}

echo "<br>";
echo "6-topshiriq";
echo "<br>";
?>
<form method="POST">
    <input type="text" name="string" placeholder="Matn kiriting">
    <button type="submit" name="task" value="6">Bosh harfga aylantirish</button>
</form>
<?php
if (isset($_POST['task']) && $_POST['task'] == "6" && isset($_POST['string'])) {
    $matn = $_POST['string'];
    $boshHarf = strtoupper($matn);
    echo "Bosh harfli matn: $boshHarf";
}

echo "<br>";
echo "7-topshiriq";
echo "<br>";
?>
<form method="POST">
    <input type="number" name="son" placeholder="Son kiriting">
    <button type="submit" name="task" value="7">Faktorialni hisoblash</button>
</form>
<?php
if (isset($_POST['task']) && $_POST['task'] == "7" && isset($_POST['son'])) {
    $son = $_POST['son'];
    $faktorial = 1;

    for ($i = 1; $i <= $son; $i++) {
        $faktorial *= $i;
    }

    echo "$son! = $faktorial";
}

echo "<br>";
echo "8-topshiriq";
echo "<br>";
?>
<form method="POST">
    <input type="text" name="numbers" placeholder="Misol: 1,2,3,4,5">
    <button type="submit" name="task" value="8">Yig'indini hisoblash</button>
</form>
<?php
if (isset($_POST['task']) && $_POST['task'] == "8" && isset($_POST['numbers'])) {
    $numbers = $_POST['numbers'];
    $numbersArray = explode(',', $numbers);
    $sum = array_sum($numbersArray);

    echo "Kiritilgan sonlar yig'indisi: $sum";
}
?>


