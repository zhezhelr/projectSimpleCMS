<?php 

$products = [
    ['id' => 1,
    'title' => 'Ноутбук',
    'description' => 'Lorem ipsum dolor sit amet1111111111111',
    'image' => 'https://picsum.photos/100'
    ],

    ['id' => 2,
    'title' => 'Телефон',
    'description' => 'Lorem ipsum dolor sit amet2222222222222',
    'image' => 'https://picsum.photos/100'
    ],

    ['id' => 3,
    'title' => 'Телевизор',
    'description' => 'Lorem ipsum dolor sit amet3333333333333',
    'image' => 'https://picsum.photos/100'
    ],
];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои продукты</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10">
        <h1>Мои продукты</h1>
        <a href="./create.php" class="btn btn-success">Добавить</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Картинка</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($products as $product) :?>
                 <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><a href="./show.php"><?php echo $product['title']; ?></a></td>
                    <td><?php echo $product['description']; ?></td>
                    <td>
                        <img src="<?php echo $product['image']; ?>" alt="">
                    </td>
                    <td>
                        <a href="./edit.php" class="btn btn-warning">Изменить</a>
                        <a href="#" class="btn btn-danger" onclick="return confirm('Вы уверены?')">Удалить</a>
                    </td>
                 </tr>
            <?php endforeach; ?>    
            </tbody>
        </table>
        </div>
    </div>
</div>
    

</html>