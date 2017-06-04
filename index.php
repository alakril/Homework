<?php $array1 = array(
    );
?>
<html>
<head>
    <title>Егоров: Домашняя работа №1</title>
</head>
<style>
    table {
        width: 100%;
    }
    li {
        list-style-type: none;
    }
    td {
        width: 50%;
        text-align: center;
    }
</style>
<body>
<table>
    <tr>
        <?php for($i = 1; $i < 26; $i++)
        {
            ${"letter".$i} = chr(64+$i);
            array_push($array1, ${"letter".$i});
        }
        ?>
        <td>
            <ul>
                <li>Нечетные буквы</li>
                <?php foreach ($array1 as $key => $item)
                    if($key % 2 != 0){
                        echo "<li> <b style=\"color: crimson;\">".$key."</b>: ".$item."</li>";
                    } ?>
            </ul>
        </td>
        <td>
            <ul>
                <li>Четные буквы</li>
                <?php foreach ($array1 as $key => $item)
                    if($key % 2 == 0){
                        echo "<li> <b style=\"color: goldenrod;\">".$key."</b>: ".$item."</li>";
                    } ?>
            </ul>
        </td>
    </tr>
</table>
</body>
</html>
