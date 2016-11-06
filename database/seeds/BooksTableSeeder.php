<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Books table seeder
        DB::table('books')->insert([
            ['title' => 'Double Down (Diary of a Wimpy Kid #11)', 'author' => 'Jeff Kinney', 'isbn' => '978-1419723445', 'quantities' => '10', 'shelf_location' => 'A1'],
            ['title' => 'First 100 Words', 'author' => 'Roger Priddy', 'isbn' => '978-0312510787', 'quantities' => '10', 'shelf_location' => 'A1'],
            ['title' => 'The Magnolia Story', 'author' => 'Chip Gaines', 'isbn' => '978-0718079185', 'quantities' => '10', 'shelf_location' => 'B2'],
            ['title' => 'A Man Called Ove: A Novel', 'author' => 'Fredrik Backman', 'isbn' => '978-1476738024', 'quantities' => '10', 'shelf_location' => 'B2'],
            ['title' => 'Cooking for Jeffrey: A Barefoot Contessa Cookbook', 'author' => 'Ina Garten', 'isbn' => '978-0307464897', 'quantities' => '10', 'shelf_location' => 'C1'],
            ['title' => 'The Whistler', 'author' => 'John Grisham', 'isbn' => '978-0385541190', 'quantities' => '10', 'shelf_location' => 'C1'],
            ['title' => 'Killing the Rising Sun: How America Vanquished World War II Japan', 'author' => 'Bill O\'Reilly', 'isbn' => '978-1627790628', 'quantities' => '10', 'shelf_location' => 'C3'],
            ['title' => 'Appetites: A Cookbook', 'author' => 'Anthony Bourdain', 'isbn' => '978-0062409959', 'quantities' => '10', 'shelf_location' => 'C3'],
            ['title' => 'The Girl on the Train', 'author' => 'Paula Hawkins', 'isbn' => '978-1594634024', 'quantities' => '10', 'shelf_location' => 'D4'],
            ['title' => 'Harry Potter and the Cursed Child, Parts 1 & 2, Special Rehearsal Edition Script', 'author' => 'J.K. Rowling', 'isbn' => '978-1338099133', 'quantities' => '10', 'shelf_location' => 'D5']

        ]);
    }
}
