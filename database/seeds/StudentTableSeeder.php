<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $s1 = new Student;

        // //mg mg
        // $s1->name="Kyaw";
        // $s1->email="kyaw@gmail.com";
        // $s1->address="Bahan";
        // $s1->save();

        //  $s2 = new Student;

        //  //susu
        // $s2->name="Mue";
        // $s2->email="mue@gmail.com";
        // $s2->address="Mayangone";
        // $s2->save();
        factory(App\Student::class,10)->create();
    }
}
