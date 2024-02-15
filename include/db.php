<?php
function conncect()
{
    $host = 'localhost';
    $db = 'admin_default';
    $user = 'admin_default';
    $pass = 'qIyD95NkzU';
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

function getAllTegs()
{
    $dbh = conncect();
    $tags = $dbh->prepare("SELECT * FROM `tag_table_for_seo` where active_on_seo_admin = 1 ORDER BY `sortirovka` ASC");
    $tags->execute();
    return $tags->fetchAll(PDO::FETCH_ASSOC);
}
?>