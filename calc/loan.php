<head>
   

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/jquery/ui/jquery-ui.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="css/custom.css" rel="stylesheet"> -->

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <style> 
    .cta {
        background: green;
        padding: 10px 30px; 
        margin: 10% 30px;
        border-radius: 1; 
        opacity: 0.9;
.hide{
    visibility: hidden;
}
    }.cta a{
        color: white;
    }
    /* .cta:hover{
        border-radius: 8px;
        transition: 0.5s;
        padding: 11px 32px;
        opacity: 0.5;
    } */
    .cta a:hover{
        /* text-decoration: none; */
        /* color: green; */
        /* opacity: 1; */

    }
    .loan-calculator{
        padding-top: 50px;
    }
    </style>
</head>

<body>

    <!--  LOAN Calculator  -->
    <section id="calculator" class="loan-calculator">
        <div class="container">
            <div class="row  text-center">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="section-heading">Loan Calculator</h2>
                    <p class="text-muted">Calculate the Live Interest Rates of your loan amount Simply select the amount you want to borrow along with the number of months you want intend to payback</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 loan-details-box">
                    <div class="single-loan-slider">
                        <h4>Amount <span class="mm-amount">(Minimum ₦5000)</span></h4>
                        <div id="amount-slide"></div>
                        <div>
                            <h5><span>₦</span> <span id="amount"></span></h5>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Duration of Months</h4>
                        <div id="duration-slide"></div>
                        <div>
                            <h5><span id="duration"></span> <span>Months</span></h5>                            
                        </div>
                    </div>
                    <div class="single-loan-slider hide">
                        <h4>Rate of Interest</h4>
                        <div id="intrest-slide"></div>
                        <div>
                            <h5><span id="intrest"></span> <span>%</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center loan-emi-box">
                    <div class="total-calculation">
                        <div class="single-total">
                            <h5>Loan Amount</h5>
                            <h2 class="emi-price" id="emi">0</h2>
                        </div>
                        <!-- <div class="single-total">
                            <h5>Total Interest</h5>
                            <h2 id="tbl_emi">0</h2>
                        </div> -->
                        <div class="single-total">
                            <h5>Payable Amount</h5>
                            <h2 id="tbl_la">0</h2>
                        </div>
                        <div class="single-total hide">
                            <h5>Payable Monthly Amount</h5>
                            <h2 id="tbl_ma">0</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 w3layouts_getin "> -->
				<button class =' btn cta'> <a href="login.php">Apply Now</a></button>
			<!-- </div> -->
        </div>
        
    </section>

    <br> 
    <br> 
    
    <!-- End Section EMI Calculator -->

  
    <!-- jQuery -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/jquery/ui/jquery-ui.js"></script>
    <script src="js/emi-calculator.js"></script>
    
    