<?php

namespace Database\Factories;
use app\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       // $sex = $this->faker->randomElement(['M', 'W']);
        //$nationalite = $this->faker->randomElement(['Morrocan', 'Egyptian',' Belgian',' Brazilian',' Canadian','Indian','Ukranian']);
        $ville = $this->faker->city;
        $pays = $this->faker->country;
        return [
            // 'nom' => $this->faker->lastName,
            // 'prenom' => $this->faker->firstName,
            // 'sex' => $this->faker->firstName,//$sex,
            // 'dateNaissance' => $this->faker->dateTimeBetween('1990-01-01', '2004-12-31')->format('d/m/Y'), // outputs something like 17/09/2001
            // 'lieuNaissance'=>$this->faker->citySuffix(),
            // 'nationalite' =>$this->faker->firstName,   //$nationalite,
            // 'ville'=>$this->faker->citySuffix(),
            // 'pays'=>$this->faker->citySuffix(),
            // 'adresse'=>$this->faker->address(),
            // 'telephone1'=>$this->faker->phoneNumber(),
            // 'telephone2'=>$this->faker->phoneNumber(),
            // 'pieceIdentite'=>$this->faker-> creditCardDetails(),
            // 'noPieceIdentite'=>$this->faker->creditCardNumber()
            "nom" => $this->faker->lastName,
            "prenom" => $this->faker->firstName,
            "sex" => array_rand(["F","H"],1),
            "dateNaissance" => $this->faker->dateTimeBetween('1990-01-01', '2004-12-31'),
            "lieuNaissance" => "$pays, $ville",
            "nationalite" => $this->faker->country,
            "ville" => $ville,
            "pays" => $pays,
            "adresse" => $this->faker->address,
            "telephone1" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "pieceIdentite" => array_rand(["CNI","PASSPORT","Permis de conduite", 1]),
            "noPieceIdentite" =>$this->faker->creditCardNumber,











        ];
    }
}
