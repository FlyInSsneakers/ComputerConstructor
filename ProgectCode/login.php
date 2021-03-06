<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ComputerConstructor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reg.css">

    <script src="js/entry.js"></script>

</head>
<body>
    <div class="container">
        <div class=" back row">
            <div class="col-md-8">
                <form action="index.php">
                    <button type="submit" class="btn nonactive grey">
                        Назад
                    </button>
                </form>
            </div>
        </div>
        <div class="reg">
            <form id="#form">
                <div class="form-group row">
                    <div class="col-md-8">
                        <h2>Авторизация</h2>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="email" type="text" class="form-control" placeholder="Логин" name="login">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control" placeholder="Пароль" name="password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-1">
                        <button id="in" type="submit" class="btn nonactive green">
                            Войти
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-link">
                            Забыл пароль
                        </button>
                    </div>
                    <div class="col-md-1">
                        <a href="registration.php" class="btn nonactive green rit" style="margin-left: 85px;">Зарегистрироваться</a>
                    </div>
                </div>
                <div id="rezult">

                </div>
            </form>
        </div>
    </div>
</body>
</html>