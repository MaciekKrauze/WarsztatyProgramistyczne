
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
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
trait Speed {
    public $speed;
    public function increaseSpeed($value) {
        $this->speed += $value;
    }
    public function decreaseSpeed($value) {
        $this->speed -= $value;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

}
class Car {
    use Speed;
    public function start() {
        $this->speed = 0;
        $this->increaseSpeed(10);
    }
    public function getCurrentSpeed() {
        return $this->getSpeed();
    }
}
?>