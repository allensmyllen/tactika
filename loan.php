<?php require_once("header2.php");?>
	<!-- Products -->
	<section class="services py-5">
		<div class="container py-md-4 mt-md-3"> 
			<h2 class="heading-agileinfo">LOANS CURATED FOR ALL <span>Quick, Lowest InterestsTactika employs industry-standard Low Interest Loan rates with an intuitive workflow designed to get you up and runnning faster.</span></h2>
			<span class="w3-line black"></span>
			<div class="row inner_w3l_agile_grids-1 mt-md-5 pt-4">
				<div class="col-md-4 w3layouts_news_left_grid1">
					<div class="new_top">
						<font color="green"><i class="fas fa-home"></font></i>			
						<h3 class="mb-3 mt-3">Personal Loan </h3>
						<p align="justify kill">Get a personal loan today to meet your daily needs, we have clear processes which helps you estimate your loan &nbsp amount,interest rate and possible repayment plan .</p> <a href=' loan.php'> <button class="btn btn-sm btn-success hide col-md-12">APPLY NOW</button> </a>
					</div>
				</div>
				<div class="col-md-4 w3layouts_news_left_grid2">
					<div class="new_top">
						<i class="fas fa-building"></i>
						<h3 class="mb-3 mt-3">Business Loan </h3>
						<p align="justify">Thinking of getting that business off the ground or you want more capital to expand your business, Tactika Business Loan is designed to take the stress off you.</p> <a href=' loan.php'> <button class=' btn-sm btn-warning col-md-12 hide'>APPLY NOW</button> </a>
					</div>
				</div>
				<div class="col-md-4 w3layouts_news_left_grid3">
					<div class="new_top">
						<i class="fas fa-credit-card"></i>
						<h3 class="mb-3 mt-3">Investment</h3>
						<p align="justify">Invest your money today and earn solid returns on investment Earn as high as 15% - 20% per annum as Tactika makes your money work for you</p> <a href=' investment.php'> <button class="btn btn-sm btn-danger col-md-12">INVEST NOW</button> </a>
					</div>
				</div>
			</div>
			
	</div>   
</section>
<!-- //Products -->
	</section>
	 <?php require_once("calc/loan.php");?> 
	 <div class="col-lg-3 w3layouts_getin spaced">
				<!--a href="contact.html spaced">Contact Us</a-->
			</div>
<!-- <section class = 'calc'>
<form> 
    <label for="Amount" name ='amount'> Amount </label>
    <input type="number" name="Amount" id="amount" value ='10000'>
    <label for="Month"> Month </label>
    <input type="number" name="month" id="month" value = '1'> 

    <button id='btn' class ='btn green'> Calculate</button>

    <div id="result">
        <p>Result: </p>  <div id='final'> Please input a value </div>

    </div>
</form>

<script> 

btn.addEventListener("click", function(event){
    event.preventDefault();
var amount = parseInt(document.getElementById('amount').value);
var month = parseInt(document.getElementById('month').value);
var rate = 0.05;
var btn = document.getElementById('btn');
 result= ((amount * rate)  *month) +amount;
   
    
    
    var final = document.getElementById('final');
    if(typeof(result)==='NaN'){
alert('error');

    }
    final.innerHTML = result;

});
document.getElementById('amount').addEventListener("change", function(event){
    event.preventDefault();
var amount = parseInt(document.getElementById('amount').value);
var month = parseInt(document.getElementById('month').value);
var rate = 0.05;
var btn = document.getElementById('btn');
if(amount.length < 0)
{
    alert("empty");
}
else{
    alert('Fill');
}
 result= ((amount * rate)  *month) +amount;



    
    
    var final = document.getElementById('final');
    if(typeof(result)==='NaN'){
alert('error');

    }
    final.innerHTML = result;

});

document.getElementById('month').addEventListener("change", function(event){
    event.preventDefault();
var amount = parseInt(document.getElementById('amount').value);
// if(amount.length == 0)
// {
//     alert("empty");
// }
// else{
//     document.getElementById('final').innerHTML 'You have incorrect input';
// }
var month = parseInt(document.getElementById('month').value);
var rate = 0.05;
var btn = document.getElementById('btn');
 result= ((amount * rate)  *month) +amount;
   
    
    
    var final = document.getElementById('final');
    if(typeof(result)==='NaN'){
alert('error');

    }
    final.innerHTML = result;

});

document.getElementById('amount').addEventListener("keyup", function(event){
    event.preventDefault();
var amount = parseInt(document.getElementById('amount').value);
var month = parseInt(document.getElementById('month').value);
var rate = 0.05;
var btn = document.getElementById('btn');
 result= ((amount * rate)  *month) +amount;
   
    
    
    var final = document.getElementById('final');
    if(typeof(result)==='NaN'){
alert('error');

    }
    final.innerHTML = result;

});
document.getElementById('month').addEventListener("keyup", function(event){
    event.preventDefault();
var amount = parseInt(document.getElementById('amount').value);
var month = parseInt(document.getElementById('month').value);
var rate = 0.05;
var btn = document.getElementById('btn');
 result= ((amount * rate)  *month) +amount;
   
    
    
    var final = document.getElementById('final');
    if(typeof(result)==='NaN'){
alert('error');

    }
    final.innerHTML = result;
if (result === 'NaN'){
	final.innerHTML = 'Please inout a value';
}
});
</script>
</section> -->
	
<?php require_once("footer.php");?>