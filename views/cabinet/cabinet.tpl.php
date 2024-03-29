<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <base href="/cabinet/contracts/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../vendor/sweetalert-master/src/sweetalert.css">
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class=" sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon  ">
                <img src="/img/logo.svg" style="width: 200%;"  alt="" id="profile-img">
                </div>
                <div class="sidebar-brand-text mx-3 pl-4"> <sup>МДПД</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/cabinet/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Доска информации</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Действия
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-file fa-cog"></i>
                    <span>Контракты</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Действия:</h6>
                        <a class="collapse-item" href="buttons.html">Добавить</a>
                        <a class="collapse-item" href="/cabinet/contracts">Просмотреть</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Настройки</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">






            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Центр уведомлений
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">21 января 2021</div>
                                        <span class="font-weight-bold">Документ в контракте #6565 успешно
                                            загружен!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-cat text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">21 января 2021</div>
                                        Сессия началась 21.01.2021 в 13:00:15
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">21 января 2021</div>
                                        Критическое уведомление: Сегодня истекает срок контракта #11123
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block">
                            
                        </div>

                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i
                                        class="fas fa-building"></i> <?php echo $pageData['nameBD'];?></span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Профиль
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Настройки
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Журнал действий
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Выйти
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
               
                <!-- Begin Page Content -->
                <div class="container-fluid" data-ng-app="contracts" data-ng-controller="contractsController">
                   
   


                <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Отлично сработано!</h4>
  <p>О да, Вы успешно прочитали это важное предупреждающее сообщение. Этот пример текста будет длиться немного дольше, чтобы Вы могли увидеть, как интервалы в предупреждении работают с этим типом контента.</p>
  <hr>
  <p class="mb-0">Когда Вам нужно, обязательно используйте маржинальные утилиты, чтобы все было в порядке и порядке.</p>
</div>



          
                <?php if (  $_SESSION['user']== '71') { ?>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Информация</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus-square fa-sm text-white-50"></i> Добавить контракт</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Контрактов (Всего)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $pageData['contractCount'];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-invoice-dollar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Истекает срок (Завтра)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $pageData['contractTomorrow'];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Истекает срок (сегодня)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $pageData['contractToday'];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Просрочены</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $pageData['contractsBad'];?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-xl-12">
                    <ng-include src="templatePath"></ng-include>
                    <ng-include src="templatePathStage"></ng-include>
                    <a href="#some_point"></a>

                    </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <h6 class="m-0 font-weight-bold text-primary p-1">Список <span class="badge bg-success text-light blink">текущих</span> контрактов </h6>
                            <div class="table-area bg-white card p-3 shadow">
                                <table id="table_id" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>№ контракта</th>
                                            <th>Дата заключения</th>
                                            <th>Предмет контракта</th>
                                            <th>Отделение</th>
                                            <th>Крайняя дата</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 


                                

                                        if(isset($pageData['contracts'])){
    
                                        foreach($pageData['contracts'] as $key =>$value) {
                                            $classTR = "";
                                            $dn = date("Y-m-d");
                                            $tomorrow = date('Y-m-d', strtotime($dn) + 86400);
                                            $dateConclusion = $value['dateConclusion'];
                                            $dateConclusion = date("d.m.Y", strtotime($dateConclusion));
                                            $dateEnd = $value['dtSt_end'];
                                            $dateEnd = date("d.m.Y", strtotime($dateEnd));
                                           
                                            if (strtotime($dn)>strtotime($value['dtSt_end']) ) {
                                                $classTR = "bg-dark text-light";
                                            }  if (strtotime($dn) == strtotime($value['dtSt_end']) ) {
                                                $classTR = "bg-warning text-dark";

                                            }if  (strtotime($tomorrow) == strtotime($value['dtSt_end']) ) {
                                                $classTR = "bg-danger text-light";

                                            }
                                            ?>
                                        <tr class="<?php echo $classTR;?>">
                                        
                                            <td> <?php echo $value['idContract']; ?></td>
                                            <td><a data-ng-click="getInfoByContractID(<?php echo $value['idContract'];?>)" href="<?php echo $value['numberContract'];?>" class="numberContract"><?php echo $value['numberContract']; ?></a></td>
                                            <td><?php echo $dateConclusion; ?></td>
                                            <td>
                                            <?php echo $value['nameContract']; ?> 
                                            <span class="badge badge-secondary">Этап # <?php echo $value['number_stage']; ?></span>
                                            </td>
                                            <td><?php echo $value['departmentName']; ?></td>
                                            <td><?php echo $dateEnd; ?></td>
                                        
            
                                        </tr>
                                        <?php } }?>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                            <th>#</th>
                                            <th>№ контракта</th>
                                            <th>Дата заключения</th>
                                            <th>Предмет контракта</th>
                                            <th>Управление</th>
                                            <th>Крайняя дата</th>
                                            

                                        </tr>
        </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- /.container-fluid -->

                    <?php } else {  ?>






                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Информация</h1>
                    
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Контрактов (Всего)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $pageData['contractCountCurrent'];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-invoice-dollar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Истекает срок (Завтра)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $pageData['contractTomorrowCurrent'];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Истекает срок (сегодня)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $pageData['contractTodayCurrent'];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Просрочены</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $pageData['contractsBadCurrent'];?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-xl-12" >
                  
                    <a href="#some_point"></a>

                    </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <h6 class="m-0 font-weight-bold text-primary p-1">Список <span class="badge bg-success text-light">текущих</span> контрактов </h6>
                            <div class="table-area bg-white card p-3 shadow">
                                <table id="table_id" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>№ контракта</th>
                                            <th>Дата заключения</th>
                                            <th>Предмет контракта</th>
                                            <th>Отделение</th>
                                            <th>Крайняя дата</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 


                                

                                        if(isset($pageData['contractsCurrent'])){
    
                                        foreach($pageData['contractsCurrent'] as $key =>$value) {
                                            $classTR = "";
                                            $dn = date("Y-m-d");
                                            $tomorrow = date('Y-m-d', strtotime($dn) + 86400);
                                            $dateConclusion = $value['dateConclusion'];
                                            $dateConclusion = date("d.m.Y", strtotime($dateConclusion));
                                            $dateEnd = $value['dtSt_end'];
                                            $dateEnd = date("d.m.Y", strtotime($dateEnd));
                                           
                                            if (strtotime($dn)>strtotime($value['dtSt_end']) ) {
                                                $classTR = "bg-dark text-light";
                                            }  if (strtotime($dn) == strtotime($value['dtSt_end']) ) {
                                                $classTR = "bg-warning text-dark";

                                            }if  (strtotime($tomorrow) == strtotime($value['dtSt_end']) ) {
                                                $classTR = "bg-danger text-light";

                                            }
                                            ?>
                                        <tr class="<?php echo $classTR;?>">
                                        
                                            <td> <?php echo $value['idContract']; ?></td>
                                            <td><a data-ng-click="getInfoByContractID(<?php echo $value['idContract'];?>)" href="<?php echo $value['numberContract'];?>" class="numberContract"><?php echo $value['numberContract']; ?></a></td>
                                            <td><?php echo $dateConclusion; ?></td>0
                                            <td>
                                            <?php echo $value['nameContract']; ?> 
                                            <span class="badge badge-secondary">Этап # <?php echo $value['number_stage']; ?></span>
                                            </td>
                                            <td><?php echo $value['departmentName']; ?></td>
                                            <td><?php echo $dateEnd; ?></td>
                                        
            
                                        </tr>
                                        <?php } }?>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                            <th>#</th>
                                            <th>№ контракта</th>
                                            <th>Дата заключения</th>
                                            <th>Предмет контракта</th>
                                            <th>Управление</th>
                                            <th>Крайняя дата</th>
                                            

                                        </tr>
        </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>




                        
                    <?php }?>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Version: alpha 1</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Готовы выйти?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Нажмите на кнопку "Выход", если вы готовы завершить текущий сеанс.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Отмена</button>
                        <a class="btn btn-primary" href="../cabinet/logout">Выход</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
        

        <!-- Custom scripts for all pages-->
        <script src="../../js/sb-admin-2.min.js"></script>

        
        <script src="../../vendor/angular/angular.min.js"></script>     
        <script src="../../vendor/angular/angular-route.js"></script>

        <script src="../../vendor/angular/app.js"></script>



        <!-- Page level custom scripts -->

        <script type="text/javascript" src="../../js/datatables.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
    $('#table_id').DataTable( {
        dom: 'lBfrtip',
   
"buttons": [
            {
                extend: 'collection',
                text: 'Экспортировать в:',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ],

        "language":

{
   
  "processing": "Подождите...",
  "search": "Поиск:",
  "lengthMenu": "Показать _MENU_ записей",
  "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
  "infoEmpty": "Записи с 0 до 0 из 0 записей",
  "infoFiltered": "(отфильтровано из _MAX_ записей)",
  "loadingRecords": "Загрузка записей...",
  "zeroRecords": "Записи отсутствуют.",
  "emptyTable": "В таблице отсутствуют данные",
  "paginate": {
    "first": "Первая",
    "previous": "Предыдущая",
    "next": "Следующая",
    "last": "Последняя"
  },
  "aria": {
    "sortAscending": ": активировать для сортировки столбца по возрастанию",
    "sortDescending": ": активировать для сортировки столбца по убыванию"
  },
  "select": {
    "rows": {
      "_": "Выбрано записей: %d",
      "0": "Кликните по записи для выбора",
      "1": "Выбрана одна запись"
    }
  }
},
        initComplete: function () {
            this.api().columns([4,5]).every( function () {
                var column = this;
                var select = $('<select class="form-control" ><option value=""></option></select>')
                    .appendTo( $(column.header()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    var val = $('<div/>').html(d).text();
select.append( '<option value="' + val + '">' +  val +   ' </option>' );
                } );
            } );
        }
    } );
} );


        </script>

</body>

</html>