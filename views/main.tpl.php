

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $pageData['title']; ?></title>
    <meta name="vieport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="bg-light">

    <div class="container table-block">
        <div class="row table-cell-block">
            <div class="col-md-8 offset-md-2">

                <h1 class="text-center"></h1>

                <div class="card text-center">
                    <div class="card-header">
                        Система мониторинга движения первичных документов
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Выберите нужное отделение</h5>
                        <img src="/img/police-station.png" style="width: 20%;" class="pb-2" alt="" id="profile-img">
                        <form method="post" id="form-signin">
                            
                        <?php if(!empty($pageData['error'])) :?>
                            <div class="alert alert-danger alert-dismissible fade show text-left" role="alert">
                                <strong>Ошибка!</strong> Введён неверный пароль.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <?php endif;?>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Отделение:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="department" name="department">
                                        <?php
                                   
                                   foreach($pageData["listDepartment"] as $key => $value) { ?>
                                        <option value="<?php  echo $value["idDepartment"];?>">
                                            <?php  echo $value["idDepartment"]." - ".$value["departmentName"];?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Пароль:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-group row pl-0">
                                <div class="col-sm-12 ml-0 pl-0">
                                    <button type="submit" class="btn btn-primary">Войти</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="/js/jquery-3.5.1.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/angular.min.js"></script>
    <script src="/js/script.js"></script>


</body>

</html>