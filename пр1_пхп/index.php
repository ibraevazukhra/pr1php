<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sm1</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Задание №1</h1>
    <div class="block">
        <?php
        $s = 0;
        $studeArray = ["Волков", "Петров", "Сидоров", "Никитин", "Арбузов", "Панфилова"];
        echo '<p class="sm1_1">Всего в группе: ' . count($studeArray) . ' студента<br></p>';
        foreach ($studeArray as $key) {
            echo '<p class="sm1_2"> - ' . $key . '<br></p>';
        }
        if (in_array("Сидоров", $studeArray)) {
            echo  '<p class="sm1_2">В группе есть студент с фамилией Сидоров</p>';
        }
        $expelled = array_pop($studeArray);
        echo '<p class="sm1_2">Студент $expelled: ' . $expelled . '<br></p>';
        //  print_r($studeArray);
        ?>
    </div>
    
    <br><br><br>
    <hr>
    <br>
    <h1>Задание №2</h1>
    <br>

    <div class="block">
        <?php
        $studeSchool = [
            "Спортивный" => "Сидоров", 
            "Художественный" => "Емелина", 
            "Музыкальный" => "Иванова", 
            "Литературный" => "Петров", 
            "Биологический" => "Антонова"
        ];
            asort($studeSchool);
           
        ?>
     
        <div class="school">
            <?
                foreach($studeSchool as $key => $value){?>
                <div class="block_2">
                    <div class="school_name"><?echo $key?></div>
                    <div class="stude_name"><?echo $value?></div>
                </div>
                    
                <?}
            ?>
            
        </div>
    </div>

    <br><br><br>
    <hr>
    <br>
    <h1>Задание №3</h1>
    <br>
    <?php
    $student = [
        'name' => 'Ибраева',
        'surname'=>'Зухра',
        'group' => '424 ВЕБ',
        'hobbi' => 'просмотр сериалов',
        'socium' => 'instagram, nickname "IbraevaZ"'
    ]
    ?>
    <div class="block">
        <?
        echo 'Я, '.$student['surname']. ' '. $student['name'].', студентка  4 курса группы '. $student['group'].' . В свободное время я занимаюсь - '.$student['hobbi'].'.<br>'.$student['socium'];
        ?>
    </div>

</body>

</html>