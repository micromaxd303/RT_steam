<?php


use Phinx\Seed\AbstractSeed;

class TaxGameSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'game_id' => 1,
                'tax' => 30,
                'end_of_discount' => date('Y-m-d', strtotime('+1 year')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'game_id' => 2,
                'tax' => 20,
                'end_of_discount' => date('Y-m-d', strtotime('+1 year')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'game_id' => 3,
                'tax' => 20,
                'end_of_discount' => date('Y-m-d', strtotime('+1 year')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'game_id' => 4,
                'tax' => 20,
                'end_of_discount' => date('Y-m-d', strtotime('+1 year')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'game_id' => 5,
                'tax' => 20,
                'end_of_discount' => date('Y-m-d', strtotime('+1 year')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'game_id' => 6,
                'tax' => 20,
                'end_of_discount' => date('Y-m-d', strtotime('+1 year')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        $game = $this->table('taxes_game');
        $game->insert($data)->save();
    }
}
