<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();

        Category::create([
            'name' => 'GOSPODARSTVO',
        ]);

        Category::create([
            'name' => 'INFRASTRUKTURA',
        ]);

        Category::create([
            'name' => 'IZOBRAŽEVANJE',
        ]);

        Category::create([
            'name' => 'KMETIJSTVO IN GOZDARSTVO',
        ]);

        Category::create([
            'name' => 'KULTURA',
        ]);

        Category::create([
            'name' => 'LOKALNA SAMOUPRAVA',
        ]);

        Category::create([
            'name' => 'MINISTRSTVO',
        ]);

        Category::create([
            'name' => 'PRAVOSODJE',
        ]);

        Category::create([
            'name' => 'PROMET',
        ]);

        Category::create([
            'name' => 'RAZVOJ IN TEHNOLOGIJA',
        ]);

        Category::create([
            'name' => 'RS',
        ]);

        Category::create([
            'name' => 'SOCIALNE ZADEVE',
        ]);

        Category::create([
            'name' => 'ŠPORT',
        ]);

        Category::create([
            'name' => 'TURIZEM',
        ]);

        Category::create([
            'name' => 'VLADA',
        ]);

        Category::create([
            'name' => 'ZAŠČITA IN VAROVANJE',
        ]);

        Category::create([
            'name' => 'ZDRAVSTVO',
        ]);
    }
}
