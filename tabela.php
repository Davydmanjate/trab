

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Trabalho PHP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
            <!-- Recent Sales Start -->
        <div id="content-page" class="content-page">
            <div class="container-fluid pt-4 px-4">
                
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Editable Table</h4>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-editable">
                    <span class="table-add float-right mb-3 mr-2">
                              <button class="btn btn-sm iq-bg-success"><i
                                 class="ri-add-fill"><span class="pl-1">Add New</span></i>
                              </button>
                    </span>
                              <table class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Sort</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                       <td contenteditable="true">Gio Metric</td>
                                       <td contenteditable="true">25</td>
                                       <td contenteditable="true">Deepends</td>
                                       <td contenteditable="true">Spain</td>
                                       <td contenteditable="true">Madrid</td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                          <span class="table-remove"><button type="button"
                                             class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                       </td>
                                    </tr>
                                    <tr>
                                <tr>
                                <td contenteditable="true">Manny Petty</td>
                                       <td contenteditable="true">45</td>
                                       <td contenteditable="true">Insectus</td>
                                       <td contenteditable="true">France</td>
                                       <td contenteditable="true">San Francisco</td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                          <span class="table-remove"><button type="button"
                                             class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td contenteditable="true">Lucy Tania</td>
                                       <td contenteditable="true">26</td>
                                       <td contenteditable="true">Isotronic</td>
                                       <td contenteditable="true">Germany</td>
                                       <td contenteditable="true">Frankfurt am Main</td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                          <span class="table-remove"><button type="button"
                                             class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                       </td>
                                    </tr>
                                    <tr class="hide">
                                       <td contenteditable="true">Anna Mull</td>
                                       <td contenteditable="true">35</td>
                                       <td contenteditable="true">Portica</td>
                                       <td contenteditable="true">USA</td>
                                       <td contenteditable="true">Oregon</td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                          <span class="table-remove"><button type="button"
                                             class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                       </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <!-- Recent Sales End -->

            <?php include_once ("footer.php"); ?>

<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="jss/jquery.min.js"></script>
      <script src="jss/popper.min.js"></script>
      <script src="jss/bootstrap.min.js"></script>
      <script src="jss/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="jss/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="jss/waypoints.min.js"></script>
      <script src="jss/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="jss/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="jss/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="jss/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="jss/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="jss/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="jss/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="jss/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="jss/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="jss/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="jss/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="jss/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="jss/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="jss/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="jss/worldLow.js"></script>
      <!-- Style Customizer -->
      <script src="jss/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="jss/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="jss/custom.js"></script>
      <!-- Appear JavaScript -->

        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>