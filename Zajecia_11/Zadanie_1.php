
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>
    <link rel="stylesheet" href="">
</head>
<body>
<header>

</header>
<main>

</main>
<footer>

</footer>
</body>
<?php

$a = new NoweAuto("audi", 1000, 2.4);
echo $a->ObliczCene();
$b = new Ubezpieczenie("audi", 1000, 2.4);

class NoweAuto{
    protected $model;
    protected $cena;
    protected $kurs;

    /**
     * @param $model
     * @param $cena
     * @param $kurs
     */
    public function __construct($model, $cena, $kurs)
    {
        $this->model = $model;
        $this->cena = $cena;
        $this->kurs = $kurs;
    }

    public function ObliczCene()
    {
        return $this->cena * $this->kurs;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * @param mixed $cena
     */
    public function setCena($cena)
    {
        $this->cena = $cena;
    }

    /**
     * @return mixed
     */
    public function getKurs()
    {
        return $this->kurs;
    }

    /**
     * @param mixed $kurs
     */
    public function setKurs($kurs)
    {
        $this->kurs = $kurs;
    }

}
class AutoZDodatkami extends NoweAuto {
    public $alarm;
    public $radio;
    public $klima;

    function ObliczCene()
    {
        return ($this->cena + $this->klima + $this->radio + $this->alarm)* $this->kurs;
    }
}
class Ubezpieczenie extends AutoZDodatkami {
    protected $wartoscProcentowa;
    protected $liczbaLat;

    /**
     * @return mixed
     */
    public function getWartoscProcentowa()
    {
        return $this->wartoscProcentowa;
    }

    /**
     * @param mixed $wartoscProcentowa
     */
    public function setWartoscProcentowa($wartoscProcentowa)
    {
        $this->wartoscProcentowa = $wartoscProcentowa;
    }

    /**
     * @return mixed
     */
    public function getLiczbaLat()
    {
        return $this->liczbaLat;
    }

    /**
     * @param mixed $liczbaLat
     */
    public function setLiczbaLat($liczbaLat)
    {
        $this->liczbaLat = $liczbaLat;
    }

    /**
     * @param $wartoscProcentowa
     * @param $liczbaLat
     */

    function ObliczCene()
    {
        return ($this->wartoscProcentowa * (($this->cena + $this->klima + $this->radio + $this->alarm)* $this->kurs))-
            ((100-$this->liczbaLat) / 100);
    }
}

?>
