<?php
/**
 * В днанном задании необходимо прочитать из стандратного ввода список студентов
 * и вывести на экран таблицу студентов.
 *
 * При выводе, ячейки таблицы должны быть разделены символом " | ",
 * имя и группа должны быть выравнены в ячейках по левому краю, а средний бал - по правому,
 * ширина колонки с именем 10 символов + пробел перед разделителем,
 * ширина колонки с номером группы 1 символ + 2 пробела после и перед разделителями,
 * ширина кололки со среднем балом 4 символа + пробел после разделителя
 * (одна цифра для целой части, десятичная точки и 2 цифры после точки)
 *
 * Вход:
 * N
 * Name1 Group1 Avg1
 * Name2 Group2 Avg2
 * ...
 * NameN GroupN AvgN
 *
 * Name# - имя студента, состоящее из одного слова без пробелов и знаков припенания не длинее 10 букв
 * Group# - название группы, состоящее из одного числа
 * Avg# - средний бал
 *
 * Пример:
 * > 4
 * > Vasya 1 4.512
 * > July 1 4.72
 * > Mike 2 3.92
 * > Olya 2 5.0
 *
 * Вывод:
 * >      Vasya | 1 | 4.51
 * >       July | 1 | 4.72
 * >       Mike | 2 | 3.92
 * >       Olya | 2 | 5.00
 */

$handle = fopen('php://stdin', 'r');
fwrite(STDOUT, "(Enter the count of students:)" . PHP_EOL);
fscanf($handle,'%d', $n);

/*----------------Мое решение----------------------*/
/*
$student = [];
$students = [];

for ($i = 0; $i < $n; ++$i) {
    list($name, $group, $avg) = explode(' ', fgets($handle));
    $group = intval($group);
    $avg = floatval($avg);
    $student[$i] = [$name, $group, $avg];
    $students[$i] = [$student[$i]];  
}

foreach ($student as $value) {
    list($name, $group, $avg) = $value;
    printf(" %-' 10s |  %-' 1d  | %' 1.2f \n", $name, $group, $avg);
}

fclose($handle);
*/

/*---------------------Более правильное решение-------------------------*/
$handle = fopen('php://stdin', 'r');
fwrite(STDOUT, "(Enter the count of students:)" . PHP_EOL);
fscanf($handle,'%d', $n);

$students = [];

for ($i = 0; $i < $n; ++$i) {
    list($name, $group, $avg) = explode(' ', fgets($handle));
    
    $students[$i] = [
    'name' => $name,
    'group' => (int)$group,
    'avg' => (float)$avg
    ];  
}

foreach ($students as $student) {
    printf(" %-' 10s |  %-' 1d  | %' 1.2f \n", $student['name'], $student['group'], $student['avg']);
}

fclose($handle);