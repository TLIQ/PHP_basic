<?php

/**
 * @return false|mysqli
 */
function getConnect()
{
    static $link;
    if (empty($link)) {
        $link = mysqli_connect('localhost', 'user1', '123', 'gbphp');
    }
    return $link;
}

/**
 * @param $str
 * @return string
 */
function clearStr($str)
{
    $str = trim($str);
    $str = strip_tags($str);
    $str = mysqli_real_escape_string(getConnect(), $str);

    return $str;
}