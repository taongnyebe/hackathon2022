<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/popup.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <?php 
        include_once "./templates/cdjn.php";
        include_once "./templates/functions.php";
    ?>
</head>
    <body class="sb-nav-fixed">
        <?php require './templates/popup_toda.php' ?>
            <?php require './templates/admin_nav.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <?php require './templates/table_tabs.php' ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                TODA database &emsp;
                                <button onclick="toggleForm()" class="btn btn-primary">ADD</button>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>TODA</th>
                                            <th>ROUTE 1</th>
                                            <th>ROUTE 2</th>
                                            <th>MEMBERS</th>
                                            <th>FEE</th>
                                            <th>ACTIONS</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        if ($toda->checkTableEmpty())
                                        {
                                            foreach ($toda->getDashboardData() as $todas) :
                                    ?>
                                    <tr>
                                        <td><?php echo $todas['toda_name'] ?></td>
                                        <td><?php echo $todas['route_1'] ?></td>
                                        <td><?php echo $todas['route_2'] ?></td>
                                        <td><?php echo $todas['count'] ?></td>
                                        <td><?php echo $todas['fee'] ?></td>
                                        <td>
                                            <a href="" class="btn btn-secondary">Update</a>
                                        </td>
                                    </tr>
                                    <?php
                                            endforeach;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/overlay.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
