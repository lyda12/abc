<?php
interface Engine
{
    public function run();
}
class Diesel implements Engine
{
    public function run()
    {
        echo "Broom! Broom!\n";
    }
}
class Petrol implements Engine
{
    public function run()
    {
        echo "Wroom! Wroom!\n";
    }
}

class EngineBridge
{
    public $engine;
    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }
    public function set(Engine $engine)
    {
        $this->engine = $engine;
    }
}

$diesel = new Diesel();
$petrol = new Petrol();
$bridge = new EngineBridge($diesel);
$bridge->engine->run();
$bridge->set($petrol);
$bridge->engine->run();
