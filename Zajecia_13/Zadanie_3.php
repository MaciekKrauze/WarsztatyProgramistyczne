
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
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}
trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class test {
    use A, B{
        A::smallTalk insteadof B;
        B::bigTalk insteadof A;
    }

}
?>