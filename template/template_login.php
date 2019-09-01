<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Duckinder</title>
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/css/mdb.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn btn peach-gradient" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab"
                        aria-controls="pills-signup" aria-selected="true">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab"
                        aria-controls="pills-signin" aria-selected="false">Login</a>
                </li>
            </ul>

        </div>
        <?php signup_alert_message()?>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Cadastrar</h2>
                        <form method="POST" class="register-form" action="script/signup-form.php" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Digite seu nome" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa fa-user"></i></label>
                                <input type="text" name="username" id="username " placeholder="Digite seu Usuario" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Digite sua senha" />
                            </div>
                            <div class="form-group">
                                <label for="repass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="repass" id="repass" placeholder="Confirme Sua Senha" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span> Eu aceito vender minha alma para o <a href="#" class="term-service">termo de serviços</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <h2>Duckinder</h2>
                        <figure><img src="images/pato.png" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">

                <div class="signin-content">
                    <div class="signin-image">
                            <h2>Duckinder</h2>
                        <figure><img src="images/pato.png" alt="sing up image"></figure>

                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register" id="script/signin-form.php">
                            <div class="form-group">
                                <label for="your_username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_username" id="your_username" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Senha" />
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="lib/js/jquery-3.4.1.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/popper.min.js"></script>
    <script src="lib/js/mdb.min.js"></script>
    <script src="js/main.js"></script>
</body>


</html>
