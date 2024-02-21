<?php
require 'include/db.php';
$houses = getAreaHomeOnlyForAdminka();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заполнение габаритов домов</title>
    <meta name="robots" content="noindex, nofollow">
    <style>
        table {
            border: 1px solid #eee;
            table-layout: fixed;
            width: 100%;
            margin-bottom: 20px;
        }

        table th {
            font-weight: bold;
            padding: 5px;
            background: #efefef;
            border: 1px solid #dddddd;
        }

        table td {
            padding: 5px 10px;
            border: 1px solid #eee;
            text-align: left;
        }

        table tbody tr:nth-child(odd) {
            background: #fff;
        }

        table tbody tr:nth-child(even) {
            background: #F7F7F7;
        }

        table tbody tr:first-child th:first-child {
            border-radius: 20px 0 0 0;
        }

        table tbody tr:first-child th:last-child {
            border-radius: 0 20px 0 0;
        }

        th {
            position: -webkit-sticky;
            /* Для поддержки веб-браузерами на основе WebKit */
            position: sticky;
            top: 0;
            /* background-color: #ffffff; */
            /* Цвет фона шапки таблицы */
        }

        .input_tag {
            width: 100%;
            border-radius: 10px;
            border: 1px solid #c9c9c9;
            height: 30px;
        }

        .save {
            width: 50%;
            height: 30px;
            border-radius: 10px;
            border: 1px solid #c9c9c9;
            cursor: pointer;
            margin: 0 auto;
            display: block;
        }

        a {
            color: black;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>


<body>
    <table>
        <tr style="position:sticky">
            <th>№</th>
            <th>Кадастровый номер</th>
            <th>Тип</th>
            <th>Кол-во этажей</th>
            <th>Кол-во спалень</th>
            <th>Кол-во санузлов</th>
            <th>Площадь дома (м²)</th>
            <th>Площадь участка (сотки)</th>
            <th>Материал</th>
            <th>Цена</th>
            <th>Статус</th>
            <th>Сохранение</th>
        </tr>
        <?php
        foreach ($houses as $house) {
            echo ' 
            <tr>
                <td style="text-align: center; width:20px">' . $house['id'] . '</td>
                <td ><input name="cadastr_number_area" type="text" class="input_tag" value="' . $house['cadastr_number_area'] . '"></td>
                <td ><select name="type" class="input_tag">
                    <option value="home"';
            if ($house['type'] === 'home')
                echo 'selected';
            echo '>Готовый дом</option>
                    <option value="land"';
            if ($house['type'] === 'land')
                echo 'selected';
            echo '>Участок</option>
                </select>
                </td>
                <td ><input name="floor" type="text"  class="input_tag"value="' . $house['floor'] . '"></td>
                <td ><input name="rooms" type="text" class="input_tag" value="' . $house['rooms'] . '"></td>
                <td ><input name="bathroom" type="text" class="input_tag" value="' . $house['bathroom'] . '"></td>
                <td ><input name="sq" type="text" class="input_tag" value="' . $house['sq'] . '"></td>
                <td ><input name="sq_area" type="text"  class="input_tag"value="' . $house['sq_area'] . '"></td>
                <td ><input name="material" type="text" class="input_tag" value="' . $house['material'] . '"></td>
                <td ><input name="price" type="text"  class="input_tag" value="' . $house['price'] . '"></td>
                <td ><select name="status" class="input_tag">
                    <option value="sell"';
            if ($house['status'] === 'sell')
                echo 'selected';
            echo '>Продаёться</option>
                    <option value="sold"';
            if ($house['status'] === 'sold')
                echo 'selected';
            echo '>Продан</option>
                    <option value="reservation"';
            if ($house['status'] === 'reservation')
                echo 'selected';
            echo '>В брони</option>
                </select>
                </td>
                <td><button class="save" data-id="' . $house['id'] . '" >Сохранить</button></td>
            </tr>';
        }
        ?>
    </table>
</body>

<script src="script.js"></script>

</html>