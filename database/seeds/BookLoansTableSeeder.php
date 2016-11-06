<?php

use Illuminate\Database\Seeder;

class BookLoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Book loans table seeder
        DB::table('book_loans')->insert([
            ['book_id' => '3', 'user_id' => '19', 'date_barrowed' => '2016-11-02', 'date_expiry' => '2016-11-16'],
            ['book_id' => '8', 'user_id' => '20', 'date_barrowed' => '2016-10-31', 'date_expiry' => '2016-11-14'],
            ['book_id' => '8', 'user_id' => '3', 'date_barrowed' => '2016-11-04', 'date_expiry' => '2016-11-18'],
            ['book_id' => '3', 'user_id' => '19', 'date_barrowed' => '2016-10-31', 'date_expiry' => '2016-11-14'],
            ['book_id' => '8', 'user_id' => '5', 'date_barrowed' => '2016-11-04', 'date_expiry' => '2016-11-18'],
            ['book_id' => '4', 'user_id' => '20', 'date_barrowed' => '2016-10-30', 'date_expiry' => '2016-11-13'],
            ['book_id' => '5', 'user_id' => '11', 'date_barrowed' => '2016-11-02', 'date_expiry' => '2016-11-16'],
            ['book_id' => '5', 'user_id' => '17', 'date_barrowed' => '2016-11-04', 'date_expiry' => '2016-11-18'],
            ['book_id' => '10', 'user_id' => '17', 'date_barrowed' => '2016-11-03', 'date_expiry' => '2016-11-17'],
            ['book_id' => '2', 'user_id' => '19', 'date_barrowed' => '2016-11-01', 'date_expiry' => '2016-11-15'],
            ['book_id' => '8', 'user_id' => '18', 'date_barrowed' => '2016-11-02', 'date_expiry' => '2016-11-16'],
            ['book_id' => '4', 'user_id' => '12', 'date_barrowed' => '2016-11-04', 'date_expiry' => '2016-11-18'],
            ['book_id' => '1', 'user_id' => '14', 'date_barrowed' => '2016-10-31', 'date_expiry' => '2016-11-14'],
            ['book_id' => '4', 'user_id' => '18', 'date_barrowed' => '2016-11-04', 'date_expiry' => '2016-11-18'],
            ['book_id' => '3', 'user_id' => '8', 'date_barrowed' => '2016-11-03', 'date_expiry' => '2016-11-17'],
            ['book_id' => '3', 'user_id' => '2', 'date_barrowed' => '2016-11-03', 'date_expiry' => '2016-11-17'],
            ['book_id' => '5', 'user_id' => '11', 'date_barrowed' => '2016-10-31', 'date_expiry' => '2016-11-14'],
            ['book_id' => '2', 'user_id' => '17', 'date_barrowed' => '2016-11-01', 'date_expiry' => '2016-11-15'],
            ['book_id' => '1', 'user_id' => '7', 'date_barrowed' => '2016-10-31', 'date_expiry' => '2016-11-14'],
            ['book_id' => '8', 'user_id' => '1', 'date_barrowed' => '2016-10-30', 'date_expiry' => '2016-11-13']

        ]);
    }
}
