<?php
namespace App;

class Hello
{
    public $name;
    public $email;
    public $age;

    /**
     * Hello constructor.
     * @param $name
     * @param $email
     * @param $age
     */
    public function __construct(string $name = 'Empty', string $email='example@test.com',int $age = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }


}