<?php 
// sử dụng đệ quy
function calSalary($salary , $n){
    if($n==1) return $salary ;
    return calSalary($salary,$n-1) + calSalary($salary,$n-1)*0.1;
}
print(calSalary(100,3));
// không sử dụng đệ quy
function calSalary1($salary,$n)
{
    for($i=1;$i<=$n;$i++)
    {
        $salary += $salary*0.1;
    }
    return $salary;
}
print(calSalary1(100,3));

?>
