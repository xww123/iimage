<?php
namespace Xww123\IImage;

class IImage
{

    protected $config = [];

    public function __construct()
    {
        $this->initConfig();
    }

    public function initConfig()
    {
        $configs = config('IImage', []);
    }

    public function surpriseMe($name){
        echo $name, ", u're awesome.";
    }
}