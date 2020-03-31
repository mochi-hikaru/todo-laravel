<?php

use Illuminate\Database\Seeder;

class TodoSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'task' => 'テスト'
        ];

        DB::table('tasks')->insert($param);

        $param = [
            'task' => 'テスト'
        ];

        DB::table('tasks')->insert($param);

        $param = [
            'task' => 'テスト'
        ];

        DB::table('tasks')->insert($param);

        $param = [
            'task' => 'テスト'
        ];

        DB::table('tasks')->insert($param);

        $param = [
            'task' => 'テスト'
        ];

        DB::table('tasks')->insert($param);
    }
}
