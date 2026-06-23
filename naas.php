<?php

defined('appstart') or die();

$naas = new naas;

class naas {

    public static $numbers = array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9');
    public static $numbers_next = array('0' => '1', '1' => '2', '2' => '3', '3' => '4', '4' => '5', '5' => '6', '6' => '7', '7' => '8', '8' => '9', '9' => '0');
    public static $numbers_compare = array(
        '0' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'),
        '1' => array('2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'),
        '2' => array('3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'),
        '3' => array('4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'),
        '4' => array('5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'),
        '5' => array('6' => '6', '7' => '7', '8' => '8', '9' => '9'),
        '6' => array('7' => '7', '8' => '8', '9' => '9'),
        '7' => array('8' => '8', '9' => '9'),
        '8' => array('9' => '9'),
        '9' => array()
    );
    public static $addision_table = array(
        '0' => array(
            '+' => array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '0', '8' => '0', '9' => '0')
        ),
        '1' => array(
            '+' => array('0' => '1', '1' => '2', '2' => '3', '3' => '4', '4' => '5', '5' => '6', '6' => '7', '7' => '8', '8' => '9', '9' => '0'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '0', '8' => '0', '9' => '1')
        ),
        '2' => array(
            '+' => array('0' => '2', '1' => '3', '2' => '4', '3' => '5', '4' => '6', '5' => '7', '6' => '8', '7' => '9', '8' => '0', '9' => '1'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '0', '8' => '1', '9' => '1')
        ),
        '3' => array(
            '+' => array('0' => '3', '1' => '4', '2' => '5', '3' => '6', '4' => '7', '5' => '8', '6' => '9', '7' => '0', '8' => '1', '9' => '2'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '1', '8' => '1', '9' => '1')
        ),
        '4' => array(
            '+' => array('0' => '4', '1' => '5', '2' => '6', '3' => '7', '4' => '8', '5' => '9', '6' => '0', '7' => '1', '8' => '2', '9' => '3'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '5' => array(
            '+' => array('0' => '5', '1' => '6', '2' => '7', '3' => '8', '4' => '9', '5' => '0', '6' => '1', '7' => '2', '8' => '3', '9' => '4'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '6' => array(
            '+' => array('0' => '6', '1' => '7', '2' => '8', '3' => '9', '4' => '0', '5' => '1', '6' => '2', '7' => '3', '8' => '4', '9' => '5'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '7' => array(
            '+' => array('0' => '7', '1' => '8', '2' => '9', '3' => '0', '4' => '1', '5' => '2', '6' => '3', '7' => '4', '8' => '5', '9' => '6'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '1', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '8' => array(
            '+' => array('0' => '8', '1' => '9', '2' => '0', '3' => '1', '4' => '2', '5' => '3', '6' => '4', '7' => '5', '8' => '6', '9' => '7'),
            'r' => array('0' => '0', '1' => '0', '2' => '1', '3' => '1', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '9' => array(
            '+' => array('0' => '9', '1' => '0', '2' => '1', '3' => '2', '4' => '3', '5' => '4', '6' => '5', '7' => '6', '8' => '7', '9' => '8'),
            'r' => array('0' => '0', '1' => '1', '2' => '1', '3' => '1', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        )
    );
    public static $subtraction_table = array(
        '0' => array(
            '-' => array('0' => '0', '1' => '9', '2' => '8', '3' => '7', '4' => '6', '5' => '5', '6' => '4', '7' => '3', '8' => '2', '9' => '1'),
            'r' => array('0' => '0', '1' => '1', '2' => '1', '3' => '1', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '1' => array(
            '-' => array('0' => '1', '1' => '0', '2' => '9', '3' => '8', '4' => '7', '5' => '6', '6' => '5', '7' => '4', '8' => '3', '9' => '2'),
            'r' => array('0' => '0', '1' => '0', '2' => '1', '3' => '1', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '2' => array(
            '-' => array('0' => '2', '1' => '1', '2' => '0', '3' => '9', '4' => '8', '5' => '7', '6' => '6', '7' => '5', '8' => '4', '9' => '3'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '1', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '3' => array(
            '-' => array('0' => '3', '1' => '2', '2' => '1', '3' => '0', '4' => '9', '5' => '8', '6' => '7', '7' => '6', '8' => '5', '9' => '4'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '4' => array(
            '-' => array('0' => '4', '1' => '3', '2' => '2', '3' => '1', '4' => '0', '5' => '9', '6' => '8', '7' => '7', '8' => '6', '9' => '5'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '5' => array(
            '-' => array('0' => '5', '1' => '4', '2' => '3', '3' => '2', '4' => '1', '5' => '0', '6' => '9', '7' => '8', '8' => '7', '9' => '6'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '6' => array(
            '-' => array('0' => '6', '1' => '5', '2' => '4', '3' => '3', '4' => '2', '5' => '1', '6' => '0', '7' => '9', '8' => '8', '9' => '7'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '1', '8' => '1', '9' => '1')
        ),
        '7' => array(
            '-' => array('0' => '7', '1' => '6', '2' => '5', '3' => '4', '4' => '3', '5' => '2', '6' => '1', '7' => '0', '8' => '9', '9' => '8'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '0', '8' => '1', '9' => '1')
        ),
        '8' => array(
            '-' => array('0' => '8', '1' => '7', '2' => '6', '3' => '5', '4' => '4', '5' => '3', '6' => '2', '7' => '1', '8' => '0', '9' => '9'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '0', '8' => '0', '9' => '1')
        ),
        '9' => array(
            '-' => array('0' => '9', '1' => '8', '2' => '7', '3' => '6', '4' => '5', '5' => '4', '6' => '3', '7' => '2', '8' => '1', '9' => '0'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '0', '8' => '0', '9' => '0')
        )
    );
    public static $multiplication_table = array(
        '0' => array(
            '*' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '0', '8' => '0', '9' => '0'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '0', '8' => '0', '9' => '0')
        ),
        '1' => array(
            '*' => array('0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '0', '6' => '0', '7' => '0', '8' => '0', '9' => '0')
        ),
        '2' => array(
            '*' => array('0' => '0', '1' => '2', '2' => '4', '3' => '6', '4' => '8', '5' => '0', '6' => '2', '7' => '4', '8' => '6', '9' => '8'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '0', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1')
        ),
        '3' => array(
            '*' => array('0' => '0', '1' => '3', '2' => '6', '3' => '9', '4' => '2', '5' => '5', '6' => '8', '7' => '1', '8' => '4', '9' => '7'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '0', '4' => '1', '5' => '1', '6' => '1', '7' => '2', '8' => '2', '9' => '2')
        ),
        '4' => array(
            '*' => array('0' => '0', '1' => '4', '2' => '8', '3' => '2', '4' => '6', '5' => '0', '6' => '4', '7' => '8', '8' => '2', '9' => '6'),
            'r' => array('0' => '0', '1' => '0', '2' => '0', '3' => '1', '4' => '1', '5' => '2', '6' => '2', '7' => '2', '8' => '3', '9' => '3')
        ),
        '5' => array(
            '*' => array('0' => '0', '1' => '5', '2' => '0', '3' => '5', '4' => '0', '5' => '5', '6' => '0', '7' => '5', '8' => '0', '9' => '5'),
            'r' => array('0' => '0', '1' => '0', '2' => '1', '3' => '1', '4' => '2', '5' => '2', '6' => '3', '7' => '3', '8' => '4', '9' => '4')
        ),
        '6' => array(
            '*' => array('0' => '0', '1' => '6', '2' => '2', '3' => '8', '4' => '4', '5' => '0', '6' => '6', '7' => '2', '8' => '8', '9' => '4'),
            'r' => array('0' => '0', '1' => '0', '2' => '1', '3' => '1', '4' => '2', '5' => '3', '6' => '3', '7' => '4', '8' => '4', '9' => '5')
        ),
        '7' => array(
            '*' => array('0' => '0', '1' => '7', '2' => '4', '3' => '1', '4' => '8', '5' => '5', '6' => '2', '7' => '9', '8' => '6', '9' => '3'),
            'r' => array('0' => '0', '1' => '0', '2' => '1', '3' => '2', '4' => '2', '5' => '3', '6' => '4', '7' => '4', '8' => '5', '9' => '6')
        ),
        '8' => array(
            '*' => array('0' => '0', '1' => '8', '2' => '6', '3' => '4', '4' => '2', '5' => '0', '6' => '8', '7' => '6', '8' => '4', '9' => '2'),
            'r' => array('0' => '0', '1' => '0', '2' => '1', '3' => '2', '4' => '3', '5' => '4', '6' => '4', '7' => '5', '8' => '6', '9' => '7')
        ),
        '9' => array(
            '*' => array('0' => '0', '1' => '9', '2' => '8', '3' => '7', '4' => '6', '5' => '5', '6' => '4', '7' => '3', '8' => '2', '9' => '1'),
            'r' => array('0' => '0', '1' => '0', '2' => '1', '3' => '2', '4' => '3', '5' => '4', '6' => '5', '7' => '6', '8' => '7', '9' => '8')
        )
    );
    public static $division_table = array(
        '1' => array(
            '/c' => array('1' => '0'),
            '/c0' => array('1' => '5', '2' => '3', '3' => '2', '4' => '2', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '1'),
        ),
        '2' => array(
            '/c' => array('1' => '1', '2' => '0'),
            '/c0' => array('2' => '6', '3' => '5', '4' => '4', '5' => '3', '6' => '2', '7' => '2', '8' => '2', '9' => '2'),
        ),
        '3' => array(
            '/c' => array('1' => '1', '2' => '1', '3' => '0'),
            '/c0' => array('3' => '7', '4' => '6', '5' => '5', '6' => '4', '7' => '3', '8' => '3', '9' => '3'),
        ),
        '4' => array(
            '/c' => array('1' => '2', '2' => '1', '3' => '1', '4' => '0'),
            '/c0' => array('4' => '8', '5' => '6', '6' => '5', '7' => '5', '8' => '4', '9' => '4'),
        ),
        '5' => array(
            '/c' => array('1' => '2', '2' => '1', '3' => '1', '4' => '1', '5' => '0'),
            '/c0' => array('5' => '8', '6' => '7', '7' => '6', '8' => '5', '9' => '5'),
        ),
        '6' => array(
            '/c' => array('1' => '3', '2' => '2', '3' => '1', '4' => '1', '5' => '1', '6' => '0'),
            '/c0' => array('6' => '8', '7' => '7', '8' => '6', '9' => '6'),
        ),
        '7' => array(
            '/c' => array('1' => '3', '2' => '2', '3' => '1', '4' => '1', '5' => '1', '6' => '1', '7' => '0'),
            '/c0' => array('7' => '8', '8' => '7', '9' => '7'),
        ),
        '8' => array(
            '/c' => array('1' => '4', '2' => '2', '3' => '2', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '0'),
            '/c0' => array('8' => '8', '9' => '8'),
        ),
        '9' => array(
            '/c' => array('1' => '4', '2' => '3', '3' => '2', '4' => '1', '5' => '1', '6' => '1', '7' => '1', '8' => '1', '9' => '0'),
            '/c0' => array('9' => '9'),
        )
    );
    public static $first = array();
    public static $second = array();
    public static $greatest;
    public static $result;
    public static $array_result = array();
    public static $ds = '.';
    public static $max_lenght = '40';

    function __construct() {
        self::$result = array('sign' => '', 'integer_part' => array(), 'fractional_part' => array(), 'decimal_number' => '', 'unsigned_integer' => array(), 'not_numbers' => '', 'decimal separator_position' => '');
        self::$greatest = '=';
        self::$array_result = array();
    }

    function __destruct() {

    }

    public static function reset_result() {
        if (isset(self::$result)) {
            self::$array_result[] = self::$result;
        }
        self::$result = array('sign' => '', 'integer_part' => array(), 'fractional_part' => array(), 'decimal_number' => '', 'unsigned_integer' => array(), 'not_numbers' => '', 'decimal separator_position' => '');
    }

    public static function make_equal_size_after(&$a, &$b) {

        reset($a);
        reset($b);

        $a_value = current($a);
        $b_value = current($b);

        do {

            if ($a_value === false) {
                $a[] = '0';
            }
            if ($b_value === false) {
                $b[] = '0';
            }

            $a_value = next($a);
            $b_value = next($b);
        } while ($a_value !== false || $b_value !== false);
    }

    public static function make_equal_size_before(&$a, &$b) {

        end($a);
        end($b);

        $a_value = current($a);
        $b_value = current($b);

        do {

            if ($a_value === false) {
                array_unshift($a, '0');
            }
            if ($b_value === false) {
                array_unshift($b, '0');
            }

            $a_value = prev($a);
            $b_value = prev($b);
        } while ($a_value !== false || $b_value !== false);
    }

    public static function greatest($a, $b) {

        $greatest = '=';

        if (!empty($a['fractional_part']) && !empty($b['fractional_part'])) {
            reset($a['fractional_part']);
            reset($b['fractional_part']);
            $a_value = current($a['fractional_part']);
            $b_value = current($b['fractional_part']);
            do {
                if (isset(self::$numbers_compare[$a_value][$b_value])) {
                    $greatest = 'second';
                    break;
                } elseif ($a_value != $b_value) {
                    $greatest = 'first';
                    break;
                }
                $a_value = next($a['fractional_part']);
                $b_value = next($b['fractional_part']);
            } while ($a_value !== false || $b_value !== false);
        }

        end($a['integer_part']);
        end($b['integer_part']);
        $a_value = current($a['integer_part']);
        $b_value = current($b['integer_part']);

        do {
            if ($a_value === false) {
                $a_value = '0';
            }
            if ($b_value === false) {
                $b_value = '0';
            }
            if (isset(self::$numbers_compare[$a_value][$b_value])) {
                $greatest = 'second';
            } elseif ($a_value != $b_value) {
                $greatest = 'first';
            }

            $a_value = prev($a['integer_part']);
            $b_value = prev($b['integer_part']);
        } while ($a_value !== false || $b_value !== false);

        return $greatest;
    }

    public static function calc_addision($a, $b, $mode = '0') {

        $remember = '0';
        $result = [];
        if (!empty($a['fractional_part']) || !empty($b['fractional_part'])) {
            self::make_equal_size_after($a['fractional_part'], $b['fractional_part']);
            end($a['fractional_part']);
            end($b['fractional_part']);
            $a_value = current($a['fractional_part']);
            $b_value = current($b['fractional_part']);
            $result_add = [];
            do {

                $calc_acn = self::$addision_table[$a_value]['+'][$b_value];
                $result_add[] = self::$addision_table[$calc_acn]['+'][$remember];
                $remember = self::$addision_table[self::$addision_table[$a_value]['r'][$b_value]]['+'][self::$addision_table[$calc_acn]['r'][$remember]];

                $a_value = prev($a['fractional_part']);
                $b_value = prev($b['fractional_part']);
            } while ($a_value !== FALSE);

            $result['fractional_part'] = array_reverse($result_add);
        } else {
            self::$result['fractional_part'] = '';
        }

        self::make_equal_size_before($a['integer_part'], $b['integer_part']);
        end($a['integer_part']);
        end($b['integer_part']);
        $result_add = [];
        $a_value = current($a['integer_part']);
        $b_value = current($b['integer_part']);
        do {
            $calc_acn = self::$addision_table[$a_value]['+'][$b_value];
            $result_add[] = self::$addision_table[$calc_acn]['+'][$remember];
            $remember = self::$addision_table[self::$addision_table[$a_value]['r'][$b_value]]['+'][self::$addision_table[$calc_acn]['r'][$remember]];
            $a_value = prev($a['integer_part']);
            $b_value = prev($b['integer_part']);
        } while ($a_value !== FALSE);
        if ($remember != '0') {
            $result_add[] = $remember;
        }
        $result['integer_part'] = array_reverse($result_add);
        reset($result['integer_part']);
        $current = current($result['integer_part']);
        while ($current == '0' && $current !== FALSE) {
            array_shift($result['integer_part']);
            reset($result['integer_part']);
            $current = current($result['integer_part']);
        };
        if ($current === FALSE) {
            $result['integer_part'] = ['0'];
            $result['decimal separator_position'] = '1';
        } else {
            end($result['integer_part']);
            $result['decimal separator_position'] = key($result['integer_part']);
        }

        if ($mode == '0') {
            self::$result = $result;
            return true;
        } else {
            return $result;
        }
    }

    public static function calc_subtraction($a, $b, $mode = '0') {
        $remember = '0';
        $result = [];
        if (!empty($a['fractional_part']) || !empty($b['fractional_part'])) {
            self::make_equal_size_after($a['fractional_part'], $b['fractional_part']);
            end($a['fractional_part']);
            end($b['fractional_part']);
            $a_value = current($a['fractional_part']);
            $b_value = current($b['fractional_part']);
            $result_sub = [];
            do {
                $calc_acn = self::$subtraction_table[$a_value]['-'][$b_value];
                $result_sub[] = self::$subtraction_table[$calc_acn]['-'][$remember];
                $remember = self::$addision_table[self::$subtraction_table[$a_value]['r'][$b_value]]['+'][self::$subtraction_table[$calc_acn]['r'][$remember]];
                $a_value = prev($a['fractional_part']);
                $b_value = prev($b['fractional_part']);
            } while ($a_value !== FALSE);
            $result['fractional_part'] = array_reverse($result_sub);
        }
        self::make_equal_size_before($a['integer_part'], $b['integer_part']);
        end($a['integer_part']);
        end($b['integer_part']);
        $result_sub = [];
        $a_value = current($a['integer_part']);
        $b_value = current($b['integer_part']);
        do {
            $calc_acn = self::$subtraction_table[$a_value]['-'][$b_value];
            $result_sub[] = self::$subtraction_table[$calc_acn]['-'][$remember];
            $remember = self::$addision_table[self::$subtraction_table[$a_value]['r'][$b_value]]['+'][self::$subtraction_table[$calc_acn]['r'][$remember]];
            $a_value = prev($a['integer_part']);
            $b_value = prev($b['integer_part']);
        } while ($a_value !== FALSE);
        $result['integer_part'] = array_reverse($result_sub);
        reset($result['integer_part']);
        $current = current($result['integer_part']);
        while ($current == '0' && $current !== FALSE) {
            array_shift($result['integer_part']);
            reset($result['integer_part']);
            $current = current($result['integer_part']);
        }
        if ($current === FALSE) {
            $result['integer_part'] = ['0'];
            $result['decimal separator_position'] = '1';
        } else {
            end($result['integer_part']);
            $result['decimal separator_position'] = key($result['integer_part']);
        }

        if ($mode == '0') {
            self::$result = $result;
            return true;
        } else {
            return $result;
        }
    }

    public static function calc_multiplication($a, $b, $mode = '0') {

        $ab = array_merge($a['unsigned_integer'], $b['unsigned_integer']);
        $result = [];
        foreach ($ab as $key => $value) {
            $ab[$key] = '0';
        }

        $first = array_reverse($a['unsigned_integer']);
        $second = array_reverse($b['unsigned_integer']);

        foreach ($first as $first_value) {
            $result_key = key($ab);

            foreach ($second as $second_value) {
                $key_current_multi = key($ab);

                $current_multi = current($ab);
                $ab[$key_current_multi] = self::$addision_table[$current_multi]['+'][self::$multiplication_table[$first_value]['*'][$second_value]];
                $remember_addision = self::$addision_table[$current_multi]['r'][self::$multiplication_table[$first_value]['*'][$second_value]];
                $remember = self::$addision_table[self::$multiplication_table[$first_value]['r'][$second_value]]['+'][$remember_addision];

                while ($remember != '0') {
                    next($ab);
                    $current_multi = current($ab);
                    $ab[key($ab)] = self::$addision_table[$current_multi]['+'][$remember];
                    $remember = self::$addision_table[$current_multi]['r'][$remember];
                }

                reset($ab);
                while (key($ab) != $key_current_multi) {
                    next($ab);
                }
                next($ab);
            }

            reset($ab);
            while (key($ab) != $result_key) {
                next($ab);
            }

            next($ab);
        }

        $result['unsigned_integer'] = array_reverse($ab);

        if ($mode == '0') {
            $array = $ab;
            $dsp_ab = array_merge($a['fractional_part'], $b['fractional_part']);

            reset($dsp_ab);
            $parts = ['fractional_part', 'integer_part'];
            reset($parts);
            $arr_rev = [];
            foreach ($array as $value) {
                if (current($dsp_ab) === false && current($parts) == 'fractional_part') {
                    next($parts);
                }
                $arr_rev[current($parts)][] = $value;
                next($dsp_ab);
            }
            isset($arr_rev['fractional_part']) ? $result['fractional_part'] = array_reverse($arr_rev['fractional_part']) : '';
            isset($arr_rev['integer_part']) ? $result['integer_part'] = array_reverse($arr_rev['integer_part']) : '';
            self::$result = $result;
            return TRUE;
        } elseif ($mode == '1') {
            $array = $ab;
            $dsp_ab = array_merge($a['fractional_part'], $b['fractional_part']);

            reset($dsp_ab);
            $parts = ['fractional_part', 'integer_part'];
            reset($parts);
            $arr_rev = [];
            foreach ($array as $value) {
                if (current($dsp_ab) === false && current($parts) == 'fractional_part') {
                    next($parts);
                }
                $arr_rev[current($parts)][] = $value;
                next($dsp_ab);
            }
            isset($arr_rev['fractional_part']) ? $result['fractional_part'] = array_reverse($arr_rev['fractional_part']) : '';
            isset($arr_rev['integer_part']) ? $result['integer_part'] = array_reverse($arr_rev['integer_part']) : '';
            return $result;
        } else {
            return $result;
        }
    }


    public static function prepare($a) {

        $number = array('sign' => '', 'integer_part' => array(), 'fractional_part' => array(), 'decimal_number' => '', 'unsigned_integer' => array(), 'not_numbers' => '', 'decimal_separator_position' => '');

        $modifier = 'integer_part';

        $split_string = str_split($a);

        reset($split_string);
        $current = current($split_string);

        if ($current === '-') {
            $number['sign'] = '-';
            $number['decimal_number'] .= $current;
            array_shift($split_string);
        } elseif ($current === '+') {
            $number['sign'] = '+';
            $number['decimal_number'] .= $current;
            array_shift($split_string);
        } else {
            $number['sign'] = '+';
        }

        reset($split_string);
        $current = current($split_string);
        $first = '1';
        do {
            if (isset(self::$numbers[$current])) {
                if ($current == '0' && $first == '1') {
                    array_shift($split_string);
                } else {
                    $first = '0';
                }
            }
            $current = next($split_string);
        } while ($current !== false);

        end($split_string);
        $current = current($split_string);
        $first = '1';
        do {
            if (isset(self::$numbers[$current])) {
                if ($current == '0' && $first == '1') {
                    $split_string = array_slice($split_string, 0, -1);
                } else {
                    $first = '0';
                }
            }
            $current = prev($split_string);
        } while ($current !== false);

        reset($split_string);
        $current = (current($split_string) !== false ? current($split_string) : '0');
        do {
            if (isset(self::$numbers[$current])) {
                $number[$modifier][] = $current;
                $number['decimal_number'] .= $current;
                $number['unsigned_integer'][] = $current;
            } elseif ($current == '.') {
                $modifier = 'fractional_part';
                $number['decimal_number'] .= $current;
                $number['decimal_separator_position'] = key($split_string);
            } else {
                $number['not_numbers'] .= $current;
            }
            $current = next($split_string);
        } while ($current !== FALSE);

        if (empty($number['integer_part'])) {
            if (empty($number['fractional_part'])) {
                $number['decimal_number'] = '0';
                $number['unsigned_integer'][] = '0';
            }
            $number['integer_part'][] = '0';
        }

        return $number;
    }

    public function calc($array_of_numbers, $operator) {

        reset($array_of_numbers);
        $f = current($array_of_numbers);

        $first = self::prepare($f);

        while (($s = next($array_of_numbers)) !== FALSE) {

            $second = self::prepare($s);
            self::reset_result();

            $greatest = self::greatest($first, $second);

            switch ($operator) {

                case '+':
                    if ($first['sign'] != $second['sign'] && $greatest == ' = ') {

                        self::$result['sign'] = '';
                        self::$result['integer_part'] = array('0');
                    } elseif ($first['sign'] == '-' && $second['sign'] == '-') {

                        self::calc_addision($first, $second);
                        self::$result['sign'] = '-';
                    } elseif ($first['sign'] == '+' && $second['sign'] == '-') {

                        if ($greatest == 'second') {

                            self::calc_subtraction($second, $first);
                            self::$result['sign'] = '-';
                        } else {

                            self::calc_subtraction(self::$first, self::$second);
                        }
                    } elseif ($first == '-' && $second['sign'] == '+') {

                        if ($greatest == 'second') {

                            self::calc_subtraction($second, $first);
                        } else {

                            self::calc_subtraction($first, $second);
                            self::$result['sign'] = '-';
                        }
                    } else {

                        self::calc_addision($first, $second);
                    }

                    break;

                case '-':

                    if ($first['sign'] == $second['sign'] && $greatest == ' = ') {

                        self::$result['sign'] = '';
                        self::$result['integer_part'] = array('0');
                    } elseif ($first['sign'] == '-' && $second['sign'] == '-') {

                        if ($greatest == 'second') {
                            self::calc_subtraction($second, $first);
                        } else {
                            self::calc_subtraction($first, $second);
                            self::$result['sign'] = '-';
                        }
                    } elseif ($first['sign'] == '+' && $second['sign'] == '-') {
                        self::calc_addision($first, $second);
                    } elseif ($first['sign'] == '-' && $second['sign'] == '+') {
                        self::calc_addision($first, $second);
                        self::$result['sign'] = '-';
                    } else {

                        if ($greatest == 'second') {
                            self::calc_subtraction($second, $first);
                            self::$result['sign'] = '-';
                        } else {

                            self::calc_subtraction($first, $second);
                        }
                    }

                    break;

                case '*':

                    if ($first['sign'] != $second['sign']) {
                        self::$result['sign'] = '-';
                    }
                    self::calc_multiplication($first, $second);
                    break;

            }

            $first = self::$result;
        }


        if (empty(self::$result['fractional_part'])) {
            self::$result['decimal_number'] = self::$result['sign'] . implode('', self::$result['integer_part']);
        } else {
            self::$result['decimal_number'] = self::$result['sign'] . implode('', self::$result['integer_part']) . self::$ds . implode('', self::$result['fractional_part']);
        }

        return self::$result;
    }
}
