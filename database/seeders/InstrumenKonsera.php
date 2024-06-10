<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Instrumen;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstrumenKonsera extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inst = Instrumen::create([
            "title" => "INSTRUMEN KESEHATAN REMAJA",
            "description" => fake()->sentence(),
            "isPublished" => true,
        ]);

        $inst->criteria()->createMany(
          [
            [
                "description" => fake()->sentence(),
                "text" => "PRIBADI SEHAT",
                "point_min" => 11,
                "point_max" => 20,
            ],
            [
                "description" => fake()->sentence(),
                "text" => "PRIBADI TIDAK SEHAT",
                "point_min" => 0,
                "point_max" => 10,
            ],
            [
                "description" => fake()->sentence(),
                "text" => "DILUAR KATEGORI",
                "point_min" => 41,
                "point_max" => 1000000,
            ]
          ]
        );
        

        $inst->sub_criterias()->createMany(
            [
                [
                    "text" => "SUB KRITERIA A",
                    "description"=> fake()->sentence(2),
                ],
                [
                    "text" => "SUB KRITERIA B",
                    "description"=> fake()->sentence(2),
                ],
                [
                    "text" => "SUB KRITERIA C",
                    "description"=> fake()->sentence(2),
                ],
                [
                    "text" => "SUB KRITERIA D",
                    "description"=> fake()->sentence(2),
                ],
            ]
        );

        $inst->statements()->createMany(
            [[
                "sub_kriteria_id" => fake()->randomElement($inst->sub_criterias->pluck('id')->toArray()),
                "text" => fake()->sentence(1),
                "favorable" => fake()->randomElement(['fav','unfav']),
            ],
            [
                "sub_kriteria_id" => fake()->randomElement($inst->sub_criterias->pluck('id')->toArray()),
                "text" => fake()->sentence(1),
                "favorable" => fake()->randomElement(['fav','unfav']),
            ],
            [
                "sub_kriteria_id" => fake()->randomElement($inst->sub_criterias->pluck('id')->toArray()),
                "text" => fake()->sentence(1),
                "favorable" => fake()->randomElement(['fav','unfav']),
            ],
            [
                "sub_kriteria_id" => fake()->randomElement($inst->sub_criterias->pluck('id')->toArray()),
                "text" => fake()->sentence(1),
                "favorable" => fake()->randomElement(['fav','unfav']),
            ],
            [
                "sub_kriteria_id" => fake()->randomElement($inst->sub_criterias->pluck('id')->toArray()),
                "text" => fake()->sentence(1),
                "favorable" => fake()->randomElement(['fav','unfav']),
            ],]
        );

        $inst->answer()->createMany([
            [
                "text"=> "Sangat Setuju",
                "point_fav" => 4,
                "point_unfav" => 1,
            ],
            [
                "text"=> "Setuju",
                "point_fav" => 3,
                "point_unfav" => 2,
            ],
            [
                "text"=> "Tidak Setuju",
                "point_fav" => 2,
                "point_unfav" => 3,
            ],
            [
                "text"=> "Sangat Tidak Setuju",
                "point_fav" => 1,
                "point_unfav" => 4,
            ],
        ]);

        $gp = Group::create([
            "name" => "XI RPL 1",
            "description" => fake()->sentence(2),
            "code" => "PASTIBISA"
        ]);

        $gp->instrumens()->sync($inst->id);

        User::where("email","user@gmail.com")->first()->groups()->sync($gp->id);

    }
}
