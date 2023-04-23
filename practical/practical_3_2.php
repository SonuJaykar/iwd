<?php
$basic_salary = $_POST['basic_salary'];

$da = $basic_salary * 0.5;
$hra = $basic_salary * 0.1;
$medical = $basic_salary * 0.04;
$gross_salary = $basic_salary + $da + $hra + $medical;

$insurance = $gross_salary * 0.07;
$pf = $gross_salary * 0.05;
$deduction = $insurance + $pf;
$net_salary = $gross_salary - $deduction;

echo "<h3>Employee Salary Details:</h3>";
echo "Basic Salary: " . $basic_salary . "<br>";
echo "Gross Salary: " . $gross_salary . "<br>";
echo "Deduction: " . $deduction . "<br>";
echo "Net Salary: " . $net_salary;
?>
