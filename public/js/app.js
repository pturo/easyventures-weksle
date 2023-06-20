var creditVal = document.getElementById('credit-val');
var rateVal = document.getElementById('rate-val');
var creditText = document.getElementById('credit-text');
var rateText = document.getElementById('rate-text');

creditText.value = creditVal.value;
rateText.value = rateVal.value;

creditVal.oninput = function() {
    creditText.value = this.value;
}

rateVal.oninput = function() {
    rateText.value = this.value;
}


