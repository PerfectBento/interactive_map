<?php
function conncect()
{
    $host = 'localhost';
    $db = 'admin_kpnasledie';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    // $pdo = new PDO($dsn, $user, $pass, $opt);

    try {
        return $dbh = new PDO($dsn, $user, $pass);
        // echo "Успех";
    } catch (PDOException $e) {
        die('Подключение не удалось: ' . $e->getMessage());
    }
}

function getAllAreaHome()
{
    $dbh = conncect();
    $area_homes = $dbh->prepare("SELECT * FROM `area_home` order by id");
    $area_homes->execute();
    return $area_homes->fetchAll(PDO::FETCH_ASSOC);
}
function getInfoAreaHome($id)
{
    $dbh = conncect();
    $area_homes = $dbh->prepare("SELECT * FROM `area_home` where id = $id");
    $area_homes->execute();
    return $area_homes->fetchAll(PDO::FETCH_ASSOC);
}
?>