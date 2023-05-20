<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            max-width: 1100px;
            background-color: aliceblue;
        }
        *{
            font-family: Arial;
            margin: 0 auto;
        }
        .user{
            /*display: table-cell;*/
            vertical-align: top;
            background:palegreen;
            color:red;
            margin: 20px;
            padding: 10px;
            border-radius: 5px;

        }
        .name{
            max-width: 250px;
            width: 25%;
            display: inline-block;
            vertical-align: top;


        }
        .secondName{
            max-width: 250px;
            width: 25%;
            display: inline-block;
            vertical-align: top;

        }
        .age{
            width: 15%;
            max-width: 150px;
            display: inline-block;
            vertical-align: top;

        }
        .nick{
            max-width: 250px;
            width: 25%;
            display: inline-block;
            font-weight: bold;
            text-align: right;
            vertical-align: top;
            font-size: large;
        }
        .image{
            display: inline-block;
            width: 5%;
            border-radius: 10px;
        }
        .buttonDel{
            padding: 10px;
            margin: 5px;
            vertical-align: top;
            border: 10px;

        }
    </style>
</head>
<body>
    <h1>Hello</h1>
    <?php
     echo "<h2>hello</h2>";

     session_start(["use_strict_mode" => true]);
        try {
            $conn = new PDO("mysql:host=localhost;dbname=forumDataBase;charset=utf8mb4", 'root', '');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Ошибка подключения к БД: " . $e->getMessage(), $e->getCode();
            die();
        }
        $result = $conn->query("SELECT * FROM users");
        var_dump($conn);
        while ($row = $result->fetch()){
?>
            <div class="user">
                <img class="image" src="images\image.jpg" ></img>
                <div class="name">
                    <?= $row['firstName']?>
                </div>
                <div class="secondName">
                    <?= $row['secondName']?>
                </div>
                <div class="age">
                    <?= $row['age']?>
                </div>
                <div class="nick">
                    <?= $row['nick']?>
                </div>
                <input type="button" clsss="buttonDel" value="удалить">
            </div>
    <?php
            //var_dump($row);
            //echo ('<p>');
        }
    ?>
</body>
</html>
