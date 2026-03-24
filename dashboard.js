fetch("../backend/dashboard_data.php").then(res=>res.json()).then(data=>{
    income.innerText=data.income;
    expense.innerText=data.expense;
    balance.innerText=data.balance;
});