<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="http://localhost/crud/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/crud/public/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php include('sidebar.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php include('topbar.php') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Atualizar informações do carro</h1>
                    <form action="" method="post">
                        <h1>Atualizar dados do carro</h1>
                        <?php
                            for($c=0;$c<count($carros);$c++){
                                $carro = $carros[ $c ];
                        ?>    
                            
                        ID veiculo a ser atualizado
                        <input type="text" name="id" value="<?=$carro['id_carro']?>" >
                        Infos
                        <input type="text" name="modelo" placeholder="modelo"  value="<?=$carro['modelo']?>">
                        <input type="text" name="cor" placeholder="cor"  value="<?=$carro['cor']?>">
                        <input type="text" name="marca" placeholder="marca"  value="<?=$carro['marca']?>">
                        <input type="number" name="ano" placeholder="ano"  value="<?=$carro['ano']?>">
                        <input type="submit" value="Alterar" class="btn">
                        <?php } ?>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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

   

    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/crud/public/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/crud/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/crud/public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/crud/public/js/sb-admin-2.min.js"></script>

</body>

</html>