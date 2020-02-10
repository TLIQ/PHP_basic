<?php
function indexAction()
{

    $html ="<h1>Корзина</h1>";
    if (empty($_SESSION['goods'])){
        $html .= '<p>Корзина пустая</p>';
        return $html;
    }
    foreach ($_SESSION['goods'] as $idGood => $goodData){
        $html .= <<<php
        <h2>{$goodData['name']}</h2>
         <p>
            Количество: <a href="?p=basket&a=add&id={$idGood}">+</a>
            {$goodData['count']}
            <a href="?p=basket&a=del&id={$idGood}">-</a>
            </p>
            <hr>
php;

    }

    return $html;
}
function delAction(){
    if (empty($_GET['id'])){
        header('Location: ?p=basket');
    }
    $id = (int)$_GET['id'];

    if (!empty($_SESSION['goods'][$id])){
        $_SESSION['goods'][$id]['count'] -=1;
        if ($_SESSION['goods'][$id]['count'] < 1){
            unset($_SESSION['goods'][$id]);
        }
    }
    header('Location: ?p=basket');
    exit;

}
function addAction()
{
    if (empty($_GET['id'])){
        header('Location: ?p=basket');
    }
    $id = (int)$_GET['id'];
    $sql = "SELECT id, name, info, price FROM goods WHERE id = $id";
    $res = mysqli_query(getConnect(), $sql);
    $good = mysqli_fetch_assoc($res);
    if (empty($good)){
        header('Location: ?p=basket');
    }
    if (empty($_SESSION['goods'][$id])){
        $_SESSION['goods'][$id] = [
            'count' => 1,
            'name' => $good['name'],
            'price' => $good['price']
        ];
    } else{
        $_SESSION['goods'][$id]['count'] +=1;
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;

}