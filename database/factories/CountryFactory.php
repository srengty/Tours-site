<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Rinvex\Country\Country as RinvexCountry;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $code = fake()->countryCode();
        $country = country($code);
        $capitalCity = $country->getCapital();
        $city = City::create(['city'=>$capitalCity]);
        return [
            'country_code'=>$country->getCallingCode(),
            'country'=>$country->getName(),
            'currency'=>$country->getCurrency()['iso_4217_code'],
            'city_id'=>$city->id
        ];
    }
}
