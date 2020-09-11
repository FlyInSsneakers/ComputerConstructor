<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ComputerConstructor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reg.css">

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
        <form method="POST" action="">
            <div class="form-group row">
                <div class="col-md-8">
                    <h2>Регистрация</h2>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8">
                    <input id="name" type="text" class="form-control" placeholder="Имя" name="name">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-8">
                    <input id="email" type="email" class="form-control" placeholder="Email" name="email">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-8">
                    <input id="password" type="password" class="form-control" placeholder="Пароль" name="password">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-8">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Подтвердите пароль" name="password_confirmation">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8">
                    <button type="submit" class="btn nonactive green">
                        Зарегистрироваться
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>