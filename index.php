<?php require('./back/local.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin2.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/icon-saude.png"/>
    <?php echo "<script> var cont = 0 </script>"; ?>
    <style>
        * {
            box-sizing: border-box;
        }
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #5A5757;
            background:#fff;
        }   

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color:  #4BC77B;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #169b6b;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color:  #4BC77B;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color:  #4BC77B;
        }

        a .img-profile {
            height: 3rem;
            width: 3rem;
        }
        .lift {
      box-shadow: 0 .15rem 1.75rem 0 rgba(33, 40, 50, .15);
      transition: transform .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .lift:hover {
      transform: translateY(-.3333333333rem);
      box-shadow: 0 .5rem 2rem 0 rgba(33, 40, 50, .25)
    }

    .lift:active {
      transform: none;
      box-shadow: 0 .15rem 1.75rem 0 rgba(33, 40, 50, .15)
    }

    .card.lift {
      text-decoration: none;
      color: inherit
    }

    .o-hidden {
      overflow: hidden !important
    }

    </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Logo e cabeçalho -->
            <div id="content">
                <div style="width: 100%; height: 180px;background-color: #4BC77B;">
                    <img src="./img/tutisaude.png" alt="" style=" height: 80px; margin:20px;"> 
                    <a class=" float-right" style="margin-top: 10px; margin-right: 10px;" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white small ">Admin</span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>
                            Sair
                        </a>
                    </div>
                    <div class="contorno" style="width:100%;height: 60px;background-color: #F8F9FC; border-top-left-radius: 100px;
  border-top-right-radius: 100px;"></div>
                </div>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-2">
                        <img src="./img/source.gif" style="width:200px;" alt="">
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
                    </div>



                    <!-- Select Unidade -->
                    <div class="input-group float-left" style="width: 300px; margin-left: 20px; height: 30px;">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Especialidade:</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Todos...</option>

                        </select>
                    </div>


                    <!--Testandooooooooooooo-->
                    <div id="regForm">

                        <div class="tab">
                            <h3 style="text-align: center;width: 100%; margin-top: 40px;font-weight:bold;">Agendamentos de Hoje</h3>
                            <div class="row" id="root-1">
                            </div>
                        </div>
                        <div class="tab">
                            <h3 style="text-align: center;width: 100%; margin-top: 40px;font-weight:bold;">Agendamentos de Amanhã</h3>
                            <div class="row" id="root-2">
                            </div>
                        </div>
                        <div class="tab">
                            <h3 style="text-align: center;width: 100%; margin-top: 40px;font-weight:bold;">Agendamentos Próximo Dia</h3>
                            <div class="row" id="root-3">
                            </div>
                        </div>



                        <!-- Fim -->


                        <div style="overflow:auto;">
                            <div style="float:right; margin-right: 4%">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Voltar</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Próximo</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:20px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </div>

                    <!--FIM Testandooooooooooooo-->


                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Tutilabs Soluction 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded-circle" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja sair do Dashboard de consultas?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-success" href="http://185.209.179.96/tutisaude/">Sair</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="./back/tratamentodedados.js"></script>


            <script>
                var currentTab = 0; // Current tab is set to be the first tab (0)
                showTab(currentTab); // Display the current tab

                function showTab(n) {
                    // This function will display the specified tab of the form...
                    var x = document.getElementsByClassName("tab");
                    x[n].style.display = "block";
                    //... and fix the Previous/Next buttons:
                    if (n == 0) {
                        document.getElementById("prevBtn").style.display = "none";
                    } else {
                        document.getElementById("prevBtn").style.display = "inline";
                    }
                    if (n == (x.length - 1)) {
                        document.getElementById("nextBtn").style.display = "none";
                    } else {
                        document.getElementById("nextBtn").style.display = "inline";
                    }
                    //... and run a function that will display the correct step indicator:
                    fixStepIndicator(n)
                }

                function nextPrev(n) {
                    // This function will figure out which tab to display
                    var x = document.getElementsByClassName("tab");

                    // Exit the function if any field in the current tab is invalid:
                    if (n == 1 && !validateForm()) return false;
                    // Hide the current tab:
                    x[currentTab].style.display = "none";

                    // Increase or decrease the current tab by 1:
                    currentTab += n;

                    // if you have reached the end of the form...
                    if (currentTab >= x.length) {
                        // ... the form gets submitted:
                        document.getElementById("regForm").submit();
                        return false;
                    }
                    // Otherwise, display the correct tab:
                    showTab(currentTab);
                }

                function validateForm() {
                    // This function deals with validation of the form fields
                    var x, y, i, valid = true;
                    x = document.getElementsByClassName("tab");
                    y = x[currentTab].getElementsByTagName("input");
                    // A loop that checks every input field in the current tab:
                    for (i = 0; i < y.length; i++) {
                        // If a field is empty...
                        if (y[i].value == "") {
                            // add an "invalid" class to the field:
                            y[i].className += " invalid";
                            // and set the current valid status to false
                            valid = false;
                        }
                    }
                    // If the valid status is true, mark the step as finished and valid:
                    if (valid) {
                        document.getElementsByClassName("step")[currentTab].className += " finish";
                    }
                    return valid; // return the valid status
                }

                function fixStepIndicator(n) {
                    // This function removes the "active" class of all steps...
                    var i, x = document.getElementsByClassName("step");

                    for (i = 0; i < x.length; i++) {
                        x[i].className = x[i].className.replace(" active", "");
                    }
                    //... and adds the "active" class on the current step:
                    x[n].className += " active";
                }
            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <?php $datahj = '<script>var datahj ="'.date("y-m-d") .'"</script>'; echo $datahj; //Futuro Trabalhar com Hora do servidor?>  
            <script>
                ListEspecialidades(dadosespecialidade)
                ConsultasdeHoje(consultas, dadosdata, dadosespecialidade, dadoshora, dadosmedico, 0);

                let select_uni = document.getElementById("inputGroupSelect01");
                    select_uni.addEventListener("change", () => {
                    let unidade

                    if (select_uni.value === "Todos...") unidade = 0;
                    else unidade = select_uni.value;

                    //////////////////////////////
                    document.getElementById("root-1").innerHTML = "";
                    document.getElementById("root-2").innerHTML = "";
                    document.getElementById("root-3").innerHTML = "";
                    ConsultasdeHoje(consultas, dadosdata, dadosespecialidade, dadoshora, dadosmedico, unidade);
                    ////////////////
                });
                ///////////////////
            </script>


</body>

</html>
