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
                 <tr>
                    <td>1</td>
                    <td><a href="./show.php">Ноутбук</a></td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>
                        <img src="https://picsum.photos/100" alt="">
                    </td>
                    <td>
                        <a href="./edit.php" class="btn btn-warning">Изменить</a>
                        <a href="#" class="btn btn-danger" onclick="return confirm('Вы уверены?')">Удалить</a>
                    </td>
                 </tr>

                 <tr>
                    <td>2</td>
                    <td><a href="./show.php">Ноутбук</a></td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>
                        <img src="https://picsum.photos/100" alt="">
                    </td>
                    <td>
                        <a href="#" class="btn btn-warning">Изменить</a>
                        <a href="#" class="btn btn-danger">Удалить</a>
                    </td>
                 </tr>

                 <tr>
                    <td>3</td>
                    <td><a href="./show.php">Ноутбук</a></td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>
                        <img src="https://picsum.photos/100" alt="">
                    </td>
                    <td>
                        <a href="#" class="btn btn-warning">Изменить</a>
                        <a href="#" class="btn btn-danger">Удалить</a>
                    </td>
                 </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
    

</html>