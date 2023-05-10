<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/img/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/img/favicon.png">
    
    <title>Расчёт тахеометрического журнала</title>
</head>

<body>
    <!-- меню -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- логотип -->
            
            <a class="navbar-brand" href="/index.php"><img class="logo" src="/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        
                        <a class="nav-link active" aria-current="page" href="/index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/AboutUs.php">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/calculations/calculation.php">Расчёт</a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- выпадающий список -->
                        <a class="nav-link dropdown-toggle" href="pages/catalog.html" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Теоретическое обоснование для теодолита 2Т30П
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/pages/TheoreticalJustification/ReconnaissanceMove.php">Рекогносцировка хода</a></li>
                            <li><a class="dropdown-item" href="/pages/TheoreticalJustification/LayingTheTacheometricTraverse.php">Проложение тахеометрического хода</a></li>
                            <li><a class="dropdown-item" href="/pages/TheoreticalJustification/OrderOfMeasurementsAtTheTraversePoint.php">Порядок измерений на пункте хода</a></li>
                            <li><a class="dropdown-item" href="/pages/TheoreticalJustification/OfficeProcessingMeasurementResults.php">Камеральная обработка результатов измерений</a></li>
                            <li><a class="dropdown-item" href="/pages/TheoreticalJustification/SheetForCalculatingTheCoordinatesTraversePoints.php">Ведомость вычисления координат точек хода</a></li>
                            <li><a class="dropdown-item" href="/pages/TheoreticalJustification/SheetForCalculatingTheHeightsTheTotalStation.php">Ведомость вычисления высот тахеометрического хода</a></li>
                            <li><a class="dropdown-item" href="/pages/TheoreticalJustification/TacheometricSurvey.php">Тахеометрическая съемка</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- правая часть меню -->
                <div class="d-flex">
                    <?
                    if($_SESSION['userArr']){?>
                        <div class=" dropdown">
                        <a class="nav-link dropdown-toggle fa-2x" href="#" id="navbarUser" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="user" style="float: left; margin-right:10px;"><?=$_SESSION['userArr'][0][1]?></p>
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarUser">
                            <li><a class="dropdown-item" href="/pages/LK.php" >Личный кабинет</a></li>
                            <li><a class="dropdown-item" href="/php/vx.php" >Выйти</a></li>
                        </ul>
                    </div>
                        <?
                    }else{
                        ?>
                        <div class=" dropdown">
                        <a class="nav-link dropdown-toggle fa-2x" href="#" id="navbarUser" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarUser">
                            <li><a class="dropdown-item" href="#" aria-hidden="true" data-bs-toggle="modal"
                                data-bs-target="#exampleModalRegistr">Регистрация</a></li>
                            <li><a class="dropdown-item" href="#" aria-hidden="true" data-bs-toggle="modal"
                                data-bs-target="#exampleModalAutor">Авторизация</a></li>
                        </ul>
                    </div>
                        <?
                    }
                    ?>
                    
                    <!-- модальное окно авторизации-->
                    <div class="modal fade" id="exampleModalAutor" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- форма авторизации -->
                                    <form action="/php/autReg/authorization.php" method="POST" class="autForm d-flex flex-column bd-highlight mb-3">
                                        <input type="email" name="email" placeholder="email" required>
                                        <input type="password" name="password" placeholder="Пароль" required>
                                        <input type="submit" class="btn btn-primary" value="Войти" required>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- модальное окно регистрации-->
                    <div class="modal fade" id="exampleModalRegistr" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- форма регистрации -->
                                    <form action="/php/autReg/registration.php" method="POST" class="regForm d-flex flex-column bd-highlight mb-3">
                                        <input type="text" name="login" placeholder="Логин" required>
                                        <input type="email" name="email" placeholder="email" required>
                                        <input type="password" name="password" placeholder="Пароль" required>
                                        <input type="password" name="passwordToo" placeholder="Повтарите пароль" required>
                                        <input type="submit" class="btn btn-primary" value="Зарегестрироваться">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- иконка поиска из навбара -->
                   
                    
                </div>
            </div>
        </div>
    </nav>
    <?=$_SESSION['error']?><?unset($_SESSION['error']);?>