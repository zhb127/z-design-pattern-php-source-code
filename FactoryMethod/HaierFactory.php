<?php

namespace FactoryMethod;

class HaierFactory implements IFactory
{
    public function produceTV()
    {
        echo '海尔工厂生产海尔电视机。', PHP_EOL;
        return new HaierTV();
    }
}