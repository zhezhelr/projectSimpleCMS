<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h1>Добавление продукта</h1>
                <form action="">
                    <div class="form-group">
                        <label for="">Название</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Описание</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Категория</label>
                        <select name="" id="">
                            <option value="">Ноутбуки</option>
                            <option value="">Телефоны</option>
                            <option value="">Новая категория</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Картинка</label>
                        <input type="file">
                    </div>

                    <div class="form-group">
                        <label for="">Показывать</label>
                        <input type="checkbox">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>