<?php
class Voiture
{
    private $reserved, $model, $country, $used, $age, $num, $date, $marque, $color, $weight;
    public $km;

    public function __construct($num, $date, $km, $model, $marque, $color, $weight, $img)
    {
        $this->num = $num;
        $this->date = $date;
        $this->km = $km;
        $this->marque = $marque;
        $this->color = $color;
        $this->weight = $weight;
        $this->img = $img;
        $this->checkReserved($marque);
        $this->checkWeight($weight);
        $this->checkCountry($num);
        $this->checkUse($km);
        $this->checkAge($date);
    }

    //method

    public function checkReserved($marque)
    {
        return $marque == "audi" ? $this->reserved = "reserved" : $this->reserved = "free";
    }

    public function checkWeight($weight)
    {
        return $weight > 3500 ? $this->model = "utilitaire" : $this->model = "commerciale";
    }

    public function checkCountry($num)
    {
        switch (substr($num, 0, 2)) {
            case "BE":
                $this->country = "Belgique";
                break;
            case "FR":
                $this->country = "France";
                break;
            case "DE":
                $this->country = "Allemagne";
                break;
            default:
                $this->country = "Autre";
        }
        return;
    }

    public function checkUse($km)
    {
        intval($km) < 100000 ? $this->used = "low" : intval($km) < 200000 ? $this->used = "middle" : $this->used = "high";
    }

    public function checkAge($date)
    {
        $this->age = date("Y") - intval(explode("/", $date)[2]);
    }

    public function display()
    {
        echo "<tr>
        <td>$this->reserved</td>
        <td>$this->model</td>
        <td>$this->country</td>
        <td>$this->used</td>
        <td>$this->age</td>
        <td>$this->num</td>
        <td>$this->date</td>
        <td>$this->marque</td>
        <td>$this->color</td>
        <td>$this->weight</td>
        <td>$this->km</td>
        <td><img src='$this->img' alt='vroomvroom'></td>
        </tr>";
    }

    private function rouler()
    {
        $this->km += 100000;
        $this->used = "high";
    }
    //setter

    public function setKm($km)
    {
        $this->km = $km;
        $this->checkUse($km);
    }
}
