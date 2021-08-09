<?php

Class A
{
    protected  $year;
    protected  $salary;

    public function getYear()
    {
        return $this->year;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}
$objA = new A();
$objA->setYear(2020);
echo $objA->getYear() . ' ' . 'year' . '<br>';

$objA->setSalary(2000);
echo $objA->getSalary() . ' ' . 'salary' . '<br>';

class B extends A
{
    protected $old;

    public function sum()
    {
        return $this->old + $this->year;
    }
    public function getOld()
    {
        return $this->old;
    }
    public function setOld($old)
    {
        $this->old = $old;
    }

}

$objB = new B();
$objB->setOld(30);
$objB->setYear(2020);
echo $objB->sum() . ' ' . 'sum' . '<br>';

abstract class D extends A{

    abstract public function exponentiation();
}


class C extends D
{
    public $birth;

    public function exponentiation()
    {
        return pow($this->birth, 2);
    }
    public function getBirth()
    {
        return $this->birth;
    }
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }

}
$objC = new C();
$objC->setbirth(1990);
echo $objC->exponentiation() . ' ' . 'Возведение в степень' . '<br>';


final class E extends B
{
     protected $experience;

    public function sum1()
    {
        return $this->experience + $this->old;

    public function getExperience()
    {
        return $this->experience;
    }
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

}
$objE = new E();
$objE->setExperience(4);
$objE->setOld(2020);
echo $objB->sum1() . ' ' . 'sum1' . '<br>';

/*class B extends A
{
    protected $old;

    public function sum()
    {
        return $this->old + $this->year;
    }
    public function getOld()
    {
        return $this->old;
    }
    public function setOld($old)
    {
        $this->old = $old;
    }

}

$objB = new B();
$objB->setOld(30);
$objB->setYear(2020);
echo $objB->sum() . ' ' . 'sum' . '<br>';*/
