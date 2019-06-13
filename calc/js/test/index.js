
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
if(amount.length >= 0)
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

});
