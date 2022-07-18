var btn = document.querySelector('#calculate-btn');
var baseCurrencyInput = document.getElementById('currency-1');
var secondCurrencyInput = document.getElementById('currency-2');
var amountInput = document.getElementById('amount');

var toShowAmount = document.querySelector('.given-amount');
var toShowBase = document.querySelector('.base-currency');
var toShowSecond = document.querySelector('.second-currency');
var toShowResult = document.querySelector('.final-result');

function convertCurrency(event) {
    event.preventDefault();
    let amount = amountInput.value;
    let from = baseCurrencyInput.value;
    let to = secondCurrencyInput.value;
    let result = 0;

    try {
        if (from == to) {
            result = amount;
        } else {
            result =  ((1 / crrncy[from].value) / (1 / crrncy[to].value) * amount);
        }
    }
    catch (err) {
        result = amount * (1 / crrncy[to].value);
    }

    toShowAmount.innerHTML = amount;
    toShowBase.textContent = from;
    toShowSecond.textContent = to;
    toShowResult.textContent = result;
}

btn.addEventListener('click', convertCurrency);

