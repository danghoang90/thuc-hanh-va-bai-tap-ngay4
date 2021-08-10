<?php
class Application
{
    private $name;
    public static $count =0;
    public function __construct($name) {
        $this->name = $name;
        self::$count++;
    }
    public function __toString() {
        return"Application name: " .$this->name;
    }
};
echo "Total objects count: ". Application::$count."<br>";
$aap1 = new Application("App One");
echo "Total objects count: ". Application::$count."<br>";
$aap2 = new Application("App Two");
echo "Total objects count: ". Application::$count."<br>";
echo $aap1."<br>";
echo $aap2."<br>";