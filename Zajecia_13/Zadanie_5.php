
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
interface Animal {
    public function makeSound();
    public function eat();
}
class Dog implements Animal
{

    public function makeSound()
    {
        return "Woof";
    }

    public function eat()
    {
        return "The dog is eating";
    }
}
?>
