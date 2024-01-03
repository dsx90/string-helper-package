<?php

declare(strict_types=1);

namespace Dsx90\StringHelperPackage;

class StringHelper
{
    /**
     * Обрезает строку до нужного количества символов
     *
     * @param string $string Входящая строка
     * @param int $length Количество символов до которого нужно обрезать
     * @param bool $whole Завершать слово
     * @param string $end Набор символов которыми завершить строку
     * @return string Возвращаемая строка
     */
    public static function trim(string $string, int $length, bool $whole = true, string $end = '...') :string
    {
        $str = mb_substr($string, 0, $length);
        if($whole){
            $pos = strripos($str, ' ');
            $str = mb_substr($str, 0, $pos);
        }

        if ($end != ''){
            $str .= " $end";
        }

        return $str;
    }
}