
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



interface Volume {
    public function increaseVolume();
    public function decreaseVolume();
}
interface Playable {
    public function play();
    public function stop();
}
class MusicPlayer implements Volume, Playable {

    protected $volume;
    protected $isPlaying;

    /**
     * @param $volume
     * @param $isPlaying
     */
    public function __construct($volume, $isPlaying)
    {
        $this->volume = $volume;
        $this->isPlaying = $isPlaying;
    }


    public function increaseVolume()
    {
        $this->volume ++;
    }

    public function decreaseVolume()
    {
        $this->volume --;
    }

    public function play()
    {
        $this->isPlaying = true;
    }

    public function stop()
    {
        $this->isPlaying = false;
    }

    public function __toString()
    {
        return "$this->volume $this->isPlaying";
    }


}

$a = new MusicPlayer(5, false);
echo $a->__toString();
$a->decreaseVolume();
echo $a->__toString();
$a->increaseVolume();
$a->play();
echo $a->__toString();

?>