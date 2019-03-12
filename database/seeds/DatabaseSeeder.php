<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //def some roles
        DB::table('roles')->insert(array(
            array(
                'name' => 'Administrator',
            ),
            array(
                'name' => 'Author',
            ),
            array(
                'name' => 'Tester',
            ),
        ));

        //def some users
        DB::table('users')->insert(array(
            array(//id-pw: admin-admin
                'role_id' => '1',
                'is_active' => '1',
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$1j.F7USKBShno1bL4U12euZvoFxjZNZamKuZ1MLJLZscTcaESOEWW',
            ),

            array(//id-pw: author-author
                'role_id' => '2',
                'is_active' => '1',
                'name' => 'author',
                'email' => 'author@author.com',
                'password' => '$2y$10$pYtufFJ7g59BWlhK.DnsBeVspRQB/rPkLIhG6Weo6XVlyRQQ8uN/y',
            ),
        ));

        //def some posts
        DB::table('posts')->insert(array(
            array(//Hello world
                'user_id' => '1',
                'category_id' => '5',
                'title' => 'Hello World!',
                'body' => ' <p><strong>m dolor sit amet, consectetur adipiscing elit. Aliquam nisi tortor, ultricies pulvinar ex at, condimentum rutrum nulla. Vivamus erat lectus, tempus vitae pulvinar et, scelerisque sed lorem. Proin sapien nisi, cursus non viverra ornare, posuere ut diam. Nullam nec dui neque. In pretium sodales elementum. Duis auctor est a varius semper. Ut euismod, velit imperdiet lacinia ultricies, metus
 dui tincidunt tellus, tempus facilisis massa nulla sed augue. Interdum et malesuada</strong></p>fames ac ante ipsum primis in faucibus. Donec eleifend lectus urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent
  venenatis felis non ex auctor vestibulum. Aliquam erat volutpat. Etiam accumsan tincidunt ligula, a imperdiet dolor.',
            ),

            array(//Bitfenix
                'user_id' => '2',
                'category_id' => '1',
                'title' => 'Review: Bitfenix Enso Mesh',
                'body' => '<p><strong>We review the Bitfenix Enso Mesh.</strong></p> This is, in effect, a meshed up version of their excellent looking but much maligned Enso. It had good looks, and some might even say it was,uh... hot? Sadly, hot in a bad way. Bitfenix took the case back, drilled holes in the front,and what we have now is a far more airflow orientated chassis. Read more: Guru3D.com',
            ),

            array(//asus
                'user_id' => '2',
                'category_id' => '6',
                'title' => 'ASUS launches ProArt PA34VC Professional Curved Monitor',
                'body' => "<p><strong>Meet the ASUS</strong> <em>ROG XG49VQ</em>, <s>this one</s> as</p><ol><li>well</li><li>has</li><li>Low</li><li>Blue</li></ol><ul><li>Light</li><li>and</li><li>Flicker</li></ul><h3>-free tech.</h3>",
            ),

            array(//tb
                'user_id' => '1',
                'category_id' => '3',
                'title' => 'Thunderbolt (interface)',
                'body' => "Thunderbolt is the brand name of a hardware interface developed by Intel (in collaboration with Apple) that allows the connection of external peripherals to a computer. Thunderbolt 1 and 2 use the same connector as Mini DisplayPort (MDP), whereas Thunderbolt 3 re-uses the Type-C connector from USB. It was initially developed and marketed under the name Light Peak, and f"
            ),

            array(//copper
                'user_id' => '1',
                'category_id' => '3',
                'title' => 'Copper',
                'body' => "Copper is a chemical element with symbol Cu (from Latin: cuprum) and atomic nand electrical condu freshly exposed surface of pure copper has a pinkish-orange color. Copper is used as a conductor of heat and electricity, as a building material, and as a constitue. Thunderbolt 1 and 2 use the same connector as Mini DisplayPort (MDP), whereas Thunderbolt 3 re-uses the Type-C connector from USB. It was initially developed and marketed under the name Light Peak, and f"
            ),

            array(//copper
                'user_id' => '1',
                'category_id' => '5',
                'title' => 'Standard atomic weight',
                'body' => "The standard atomic weight (Ar, standard, a relative atomic mass) is the atomic weight (Ar) of a chemical element, as appearing and met in the earthly environment. It reflects the variance of natural isotopes (and so weight differences) of an element. Values are defined by (restricted to) the IUPAC (CIAAW) definition of natural, stable, terrestrial sources. It is the most common and practical atomic weight used, for example to determine molar mass.",
            ),


        ));

        //def some categories
        DB::table('categories')->insert(array(
            array(
                'name' => 'Technology',
            ),
            array(
                'name' => 'News',
            ),
            array(
                'name' => 'Government',
            ),
            array(
                'name' => 'Weather',
            ),
            array(
                'name' => 'Blog',
            ),
            array(
                'name' => 'Gaming',
            ),
        ));

    }
}
