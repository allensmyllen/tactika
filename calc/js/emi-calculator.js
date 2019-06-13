(function($) {

    $("#amount-slide").slider({
        range: "min",
        min: 5000,      // set minimun amount
        max: 2000000,   // set maximum amount
        value: 5000,   // set default amount value
        step: 1000,     // set amount step
        slide: function(event, ui) {
            $("#amount").text(ui.value);
            emicalculate();
        }
    });
    $("#amount").text($("#amount-slide").slider("value"));

    $("#duration-slide").slider({
        range: "min",
        min: 1,    // set minimun month
        max: 12,   // set maximum month
        step: 1,    // set month step
        value: 1,  // set default month value
        slide: function(event, ui) {
            $("#duration").text(ui.value);
            emicalculate();
        }
    });
    $("#duration").text($("#duration-slide").slider("value"));

    $("#intrest-slide").slider({
        range: "min",
        min: 5.0,      // set minimun rate of interest
        max: 5.0,     // set maximum rate of interest
        step: 0,     // set rate of interest step
        value: 5.0,      // set default rate of interest
        slide: function(event, ui) {
            $("#intrest").text(ui.value);
            emicalculate();
        }
    });
    $("#intrest").text($("#intrest-slide").slider("value"));

    emicalculate();
})(jQuery);

function emicalculate()
{
    var amount =$("#amount").text();
    var month =$("#duration").text();
    var rate= 0.05;
    // var monthlyInterestRatio = (rateOfInterest/100);
    // var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
    // var bottom = top -1;
    // var sp = top / bottom;
    // var emi = ((loanAmount * monthlyInterestRatio) * sp);
    // var full = numberOfMonths * emi;
    // var interest = full - loanAmount;
    // var int_pge =  (interest / full) * 100;
    var result= ((rate * amount)* month) ;
var payable = ((rate * amount)* month) + (parseInt(amount));
var mam = (payable/12).toFixed(0);
    // ((amount * rate)  *month) +amount;
    // console.log(result);
    // var emi_str = emi.toFixed(0).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var amount_str = amount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    // var per_str = (result/12).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var result_str = result.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var payable_str = payable.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var per_str = mam.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    // var int_str = interest.toFixed(0).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");


    //  result= ((amount * rate)  *month) +amount;
    // SET 

    $("#emi").html(amount_str);
    $("#tbl_emi").html(result_str);
    $("#tbl_la").html(payable_str);
    $("#tbl_ma").html(per_str);
}
