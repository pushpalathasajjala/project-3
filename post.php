<?php 

$count=0;
$nam = $_POST['capital'];
echo "1.answer selected is $nam\n\n";
if($nam =='kabul')
{
	$count++;

"congrats!your answer is correct\n\n";
}
else
{
	"1.correct answer is kabul\n\n";
}


$nam = $_POST['capital1'];
"2.answer selected is $nam\n\n";
if($nam =='tirana')
{
	$count++;

"congrats!your answer is correct\n\n";
}
else
{
echo "2.correct answer is tirana\n\n";
}
 $nam = $_POST['capital2'];
echo "3.answer selected is $nam\n\n";
if($nam =='algiers')
{
	$count++;

echo "congrats!your answer is correct\n\n";
}
else
{
echo "3.correct answer is algiers\n\n";
}

$nam = $_POST['capital3'];
echo "4.answer selected is $nam\n\n";
if($nam =='luanda')
{
	$count++;

echo "congrats!your answer is correct\n\n";
}
else
{
echo "4.correct answer is luanda\n\n";
}

$nam = $_POST['capital4'];
echo nl2br("5.answer selected is $nam\n\n");
if($nam =='the valley')
{
	$count++;

echo "congrats!your answer is correct\n\n";
}
else
{
echo "5.correct answer is the valley\n\n";
}

$nam = $_POST['capital5'];
echo "6.answer selected is $nam\n\n";
if($nam =='havana')
{
	$count++;

echo nl2br("congrats!your answer is correct\n\n");
}
else
{
echo nl2br("6.correct answer is havana\n\n");
}

$nam = $_POST['capital6'];
echo nl2br("7.answer selected is $nam\n\n");
if($nam =='nicosia')
{
	$count++;

echo "congrats!your answer is correct\n\n";
}
else
{
echo "7.correct answer is nicosia\n\n";
}

$nam = $_POST['capital7'];
echo "8.answer selected is $nam\n\n";
if($nam =='copenhagen')
{
	$count++;

echo "congrats!your answer is correct\n\n";
}
else
{
echo "8.correct answer is copenhagen\n\n";
}

$nam = $_POST['capital8'];
echo "9.answer selected is $nam\n\n";
if($nam =='quito')
{
	$count++;

echo "congrats!your answer is correct\n\n";
}
else
{
echo "9.correct answer is quito\n\n";
}
$nam = $_POST['capital9'];
echo "10.answer selected is $nam\n\n";

if($nam =='cairo')
{
	$count++;

echo "congrats!your answer is cairo\n\n";
}
else{
	echo("10.correct answer is cairo\n\n");
}


$nam =$_POST['num'];
echo "11.selected answer is $nam\n\n";

if($nam =='1')
{
	$count++;
echo nl2br("congrats!your answer is 1\n\n");
}
else{
	echo "11.correct answer is 1\n\n";
}

$nam =$_POST['num1'];
echo "12.selected answer is $nam\n\n";

if($nam =='1')
{
	$count++;
echo nl2br("congrats!your answer is 1\n\n");
}
else{
	echo "12.correct answer is 1\n\n";
}
$nam =$_POST['num2'];
echo "13.selected answer is $nam\n\n";

if($nam =='2')
{
	$count++;
}
else{
	echo "13.correct answer is 2\n\n";

}
$nam =$_POST['num3'];
echo "14.selected answer is $nam\n\n";

if($nam =='6')
{
	$count++;
echo "14.congrats!your answer is 6\n\n";
}
else{
	echo "14.correct answer is 6\n\n";
}
$nam =$_POST['num4'];
echo "15.selected answer is $nam\n\n";

if($nam =='24')
{
	$count++;
echo "congrats!your answer is 24\n\n";
}
else{
	echo "15.correct answer is 24\n\n";
}
$nam =$_POST['num5'];
echo "16.selected answer is $nam\n\n";

if($nam =='120')
{
	$count++;
echo nl2br("congrats!your answer is 120\n\n");
}
else{
	echo "16.correct answer is 120\n\n";
}
$nam =$_POST['num6'];
echo "17.selected answer is $nam\n\n";

if($nam =='720')
{
	$count++;
echo "congrats!your answer is 720\n\n";
}
else{
	echo "17.correct answer is 720\n\n";
}
$nam =$_POST['num7'];
echo "18.selected answer is $nam\n\n";

if($nam =='5040')
{
	$count++;
echo "congrats!your answer is 5040\n\n";
}
else{
	echo "18.correct answer is 5040\n\n";
}
$nam =$_POST['num8'];
echo "19.selected answer is $nam\n\n";

if($nam =='4020')
{
	$count++;
echo nl2br("congrats!your answer is 4020\n\n");
}
else{
	echo "19.correct answer is 4020\n\n";
}
$nam =$_POST['num9'];
echo "20.selected answer is $nam\n\n";

if($nam =='362880')
{
	$count++;
echo "congrats!your answer is 362880\n\n";
}
else{
	echo "20.correct answer is 3628800\n\n";
}
$nam =$_POST['t1'];
echo "21.selected answer is $nam\n\n";

if($nam =='mahatma gandhi')
{
	$count++;
echo "21.congrats!your answer is mahatma gandhi\n\n";
}
else{
	echo "21.correct answer is mahatma gandhi\n\n";
}
$nam =$_POST['t2'];
echo "22.selected answer is $nam\n\n";

if($nam =='janaganamana')
{
	$count++;
echo "22.congrats!your answer is janaganamana\n\n";
}
else{
	echo "22.correct answer is janaganamana\n\n";
}
$nam =$_POST['t3'];
echo "23.selected answer is $nam\n\n";

if($nam =='1947')
{
	$count++;
echo nl2br("23.congrats!your answer is 197\n\n");
}
else{
	echo "23.correct answer is 1947\n\n";
}
$nam =$_POST['t4'];
echo "24.selected answer is $nam\n\n";

if($nam =='1945')
{
	$count++;
echo nl2br("24.congrats!your answer is 1945\n\n");
}
else{
	echo "24.correct answer is 1945\n\n";
}









echo"your score is :";
echo nl2br($count);






 ?>
