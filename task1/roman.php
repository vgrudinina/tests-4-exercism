<?php
/**
 * Древний рим.
 *
 * На часах, при обозначении кварталов года и много где ещё используются римские цифры.
 * Нужно написать функцию, которая будет переводить арабские числа в римские.
 * Примеров такого кода в интернете множество, но даже если вы возьмёте код оттуда,
 * постарайтесь разобраться как он работает.
 *
 * Немного про римский счёт:
 * I = 1
 * V = 5
 * X = 10
 * L = 50
 * C = 100
 * D = 500
 * M = 1000
 *
 * Римская система счисления не является позиционной и имеет одно важное правило:
 * подряд не могут следовать 3 одинаковых литерала
 * Например:
 *  45 != XXXXV
 *  45 == XLV
 * То есть, литерал, обозначающий меньшее число, который стоит слева от литерала, обозначающего большее будет вычитаться.
 * На примере того же числа 45:
 * X L V - буквально обозначает: вычасть 10 из 50 и прибавить 5
 *
 * Гарантируется что при проверке не будуи использоваты числа по модулю больше 1000.
 *
 * Пример ввода и вывода:
 *
 * Ввод:
 * > 15
 *
 * Вывод:
 * > XV
 *
 * Ввод:
 * > 49
 *
 * Вывод:
 * > XLIX
 */

/**
 * @param int $number
 * @return string
 */
function toRoman($number) {
    // todo ваш код здесь
}

$handle = fopen('php://stdin', 'r');

do {
    echo 'Enter a number', PHP_EOL;
    fscanf($handle, '%d', $n);
} while (!is_int($n) || $n <= 0);

echo toRoman($n);