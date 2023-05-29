<?php 
require '../../action/config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM fornecedor");

if($sql->rowCount() ){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDV | Fornecedores</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">


                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index.html" class="brand-link">
                <img src="../../dist/img/Masterlogo2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">PDV</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Cadastros
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="empresa.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Empresa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="validation.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Usuários</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="clientes.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Clientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="produto.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Produtos</p>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="fornecedor.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fornecedores</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Operações
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Entrada de mercadoria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Venda de produtos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Despesas</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="../trocas/trocasgarantias.html" class="nav-link">
                                <i class="nav-icon fas fa-3x fa-sync-alt"></i>
                                <p>
                                    Trocas e Garantias
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Relatórios
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Entrada de mercadoria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Venda de produtos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Despesas</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Caixa
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Fornecedores</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../index.html">Inicio</a></li>
                                <li class="breadcrumb-item active">Fornecedores</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Cadastre um novo fornecedor</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="../../action/adicionarF.php" method="post">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <imput>
                                                    <div class="form-group">
                                                        <label for="inputEstimatedBudget">Razao</label>
                                                        <input type="text" name="razao" id="inputEstimatedBudget"
                                                            class="form-control">
                                                    </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">Fantasia</label>
                                                    <input type="text" name="fantasia" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">CNPJ</label>
                                                    <input type="text" name="cnpj" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">Inscrição estadual</label>
                                                    <input type="text" name="ie" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">Contato</label>
                                                    <input type="text" name="tel" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">Email</label>
                                                    <input type="text" name="email" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">CEP</label>
                                                    <input type="text" name="cep" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">UF</label>
                                                    <input type="text" name="uf" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">Cidade</label>
                                                    <input type="text" name="cidade" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">Bairro</label>
                                                    <input type="text" name="bairro" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">Endereço</label>
                                                    <input type="text" name="endereco" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-group">
                                                    <label for="inputEstimatedBudget">Numero</label>
                                                    <input type="text" name="numero" id="inputEstimatedBudget"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Salvar"
                                                        class="btn btn-success float-right m-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                            <!-- Main content -->
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Fornecedores cadastrados</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <table id="example2" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Código</th>
                                                                <th>Razão Social</th>
                                                                <th>Fantasia</th>
                                                                <th>CNPJ</th>
                                                                <th>IE</th>
                                                                <th>Contato</th>
                                                                <th>E-mail</th>
                                                                <th>CEP</th>
                                                                <th>UF</th>
                                                                <th>Cidade</th>
                                                                <th>Bairro</th>
                                                                <th>Endereço</th>
                                                                <th>Número</th>                                                              
                                                            </tr>
                                                        </thead>
                                                        <?php foreach($lista as $fornecedor): ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><?= $fornecedor['codfornecedor']; ?></td>
                                                                <td><?= $fornecedor['razao']; ?></td>
                                                                <td><?= $fornecedor['fantasia']; ?></td>
                                                                <td><?= $fornecedor['cnpj']; ?></td>
                                                                <td><?= $fornecedor['ie']; ?></td>
                                                                <td><?= $fornecedor['tel']; ?></td>
                                                                <td><?= $fornecedor['email']; ?></td>
                                                                <td><?= $fornecedor['cep']; ?></td>
                                                                <td><?= $fornecedor['uf']; ?></td>
                                                                <td><?= $fornecedor['cidade']; ?></td>
                                                                <td><?= $fornecedor['bairro']; ?></td>
                                                                <td><?= $fornecedor['endereco']; ?></td>
                                                                <td><?= $fornecedor['numero']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                        <?php endforeach; ?>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!--/.col (left) -->
                                        <!-- right column -->
                                        <div class="col-md-6">

                                        </div>
                                        <!--/.col (right) -->
                                    </div>
                                    <!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </section>
                            <!-- /.content -->
                        </div>
                        <!-- /.content-wrapper -->
                        <footer class="main-footer">
                            <div class="float-right d-none d-sm-block">

                            </div>
                            <strong>Copyright &copy; 2023 <a href="#">PDV</a>.</strong> Todos os direitos reservados
                        </footer>

                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                            <!-- Control sidebar content goes here -->
                        </aside>
                        <!-- /.control-sidebar -->
                    </div>
                    <!-- ./wrapper -->

                    <!-- jQuery -->
                    <script src="../../plugins/jquery/jquery.min.js"></script>
                    <!-- Bootstrap 4 -->
                    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- jquery-validation -->
                    <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
                    <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="../../dist/js/adminlte.min.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <script src="../../dist/js/demo.js"></script>
                    <!-- Page specific script -->
                    <script>
                    $(function() {
                        $.validator.setDefaults({
                            submitHandler: function() {
                                alert("Form successful submitted!");
                            }
                        });
                        $('#quickForm').validate({
                            rules: {
                                email: {
                                    required: true,
                                    email: true,
                                },
                                password: {
                                    required: true,
                                    minlength: 5
                                },
                                terms: {
                                    required: true
                                },
                            },
                            messages: {
                                email: {
                                    required: "Please enter a email address",
                                    email: "Please enter a valid email address"
                                },
                                password: {
                                    required: "Please provide a password",
                                    minlength: "Your password must be at least 5 characters long"
                                },
                                terms: "Please accept our terms"
                            },
                            errorElement: 'span',
                            errorPlacement: function(error, element) {
                                error.addClass('invalid-feedback');
                                element.closest('.form-group').append(error);
                            },
                            highlight: function(element, errorClass, validClass) {
                                $(element).addClass('is-invalid');
                            },
                            unhighlight: function(element, errorClass, validClass) {
                                $(element).removeClass('is-invalid');
                            }
                        });
                    });
                    </script>
</body>

</html>