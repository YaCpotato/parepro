<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('books')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $books = [
                ['state' => 1,
                'tile' => 'ペアプロをやる',
                'description' => 'やっしーさんと初めてのphpやる'],
                ['state' => 0,
                'tile' => 'ペルソナクリアする',
                'description' => 'ペルソナ5スクランブル、あともう少しでクリアなので頑張る'],
                ['state' => 2,
                'tile' => 'お昼寝',
                'description' => '1日1回のお昼寝'],
                ];

        // 登録
        foreach($books as $book) {
        \App\Todo::create($book);
        }
    }
}
