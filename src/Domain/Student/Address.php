<?php

namespace Alura\Calisthenics\Domain\Student;

class Address
{
    public string $number;
    public string $country;
    public string $province;
    public string $city;
    public string $street;
    public string $state;

    public function __construct(
        string $street,
        string $number,
        string $province,
        string $city,
        string $state,
        string $country
    ) {
        $this->number = $number;
        $this->country = $country;
        $this->province = $province;
        $this->city = $city;
        $this->street = $street;
        $this->state = $state;
    }
}