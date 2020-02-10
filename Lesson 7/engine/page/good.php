<?php


function indexAction()
{
    return allAction();
}

function oneAction()
{
    return 'Пользователь ';
}

function allAction()
{
    $sql = "SELECT id, name, info, price FROM goods";
    $res = mysqli_query(getConnect(), $sql);

    $html = '';
    while ($row = mysqli_fetch_assoc($res)) {
        $html .= <<<php
        <h2>{$row['name']}</h2>
        <p>Информация о товаре: {$row['info']}</p>
        <p>Цена: {$row['price']}</p>
        <a href="?p=basket&a=add&id={$row['id']}">Добавить в корзину</a><br>
        <hr>
php;



    }

    return $html;
}