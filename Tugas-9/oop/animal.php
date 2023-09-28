<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Animal {
    protected $name;
    protected $legs;
    protected $cold_blooded;

    public function __construct($name) {
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = 'no';
    }

    public function getName() {
        return $this->name;
    }

    public function getLegs() {
        return $this->legs;
    }

    public function getColdBlooded() {
        return $this->cold_blooded;
    }
}
?>
</body>
</html>