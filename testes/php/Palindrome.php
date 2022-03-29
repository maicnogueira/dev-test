<?php

/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Um palíndromo é uma palavra que pode ser lida  da mesma maneira da esquerda para direita, como ao contrário.
Exemplo: ASA.

Faça uma função que ao receber um input de uma palavra, string, verifica se é um palíndromo retornando verdadeiro ou falso.
O fato de um caracter ser maiúsculo ou mínusculo não deverá influenciar no resultado da função.

Exemplo: isPalindrome("Asa") deve retonar true.
*/


class Palindrome
{
    public static function isPalindrome($word)
    {
        $wordReverse = array_reverse(str_split($word));
        $normalWord = str_split($word);
        $isPalindrome = true;

        foreach ($normalWord as $index => $char) {
            if (mb_strtolower($char) !== mb_strtolower($wordReverse[$index])){
                $isPalindrome = false;
                break;
            }
        }
        return $isPalindrome;
    }
}

var_dump(Palindrome::isPalindrome('Deleveled'));