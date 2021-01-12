<?php 
// không đệ quy
function calMonth($money, $rate)
    {
        $month = 0;
        $moneyIncrease = $money;
        while ($moneyIncrease < $money * 2)
        {
            $moneyIncrease += ($rate / 100) * $moneyIncrease;
            $month++;
        }
        return $month;
    }
print(calMonth(10000,5));
print('---');


// đệ quy
function calMoney($money, $rate,$month)
{
    if($month < 1 ) return $money;
    return calMoney($money, $rate, $month - 1) + calMoney($money, $rate, $month - 1) * ($rate/100);

}
function calMonth1($money, $rate)
{
    $month = 0;
    while (calMoney($money, $rate, $month) < $money * 2)
    {
        $month++;
    }
    return $month;
}
print(calMonth1(10000,5));

?>