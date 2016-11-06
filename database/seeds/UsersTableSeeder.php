<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users table seeder
        DB::table('users')->insert([
            ['email' => 'Jenette@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Blake', 'first_name' => 'Jenette', 'birthday' => '1987-04-24', 'user_type' => 'MEMBER', 'address' => 'Ap #190-7026 Dui. Rd.', 'maximum_books_can_loan' => '6'],
            ['email' => 'Clare@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Dodson', 'first_name' => 'Clare', 'birthday' => '1993-01-24', 'user_type' => 'MEMBER', 'address' => '894-9890 Amet, Road', 'maximum_books_can_loan' => '6'],
            ['email' => 'Thor@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Rowe', 'first_name' => 'Thor', 'birthday' => '1986-10-06', 'user_type' => 'MEMBER', 'address' => '834-5383 Sed Street', 'maximum_books_can_loan' => '6'],
            ['email' => 'Vivien@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Tanner', 'first_name' => 'Vivien', 'birthday' => '1991-06-04', 'user_type' => 'MEMBER', 'address' => '1100 Non, Street', 'maximum_books_can_loan' => '6'],
            ['email' => 'Marcia@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Newton', 'first_name' => 'Marcia', 'birthday' => '1998-09-03', 'user_type' => 'MEMBER', 'address' => 'P.O. Box 507, 4599 Sit Rd.', 'maximum_books_can_loan' => '6'],
            ['email' => 'Karyn@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Humphrey', 'first_name' => 'Karyn', 'birthday' => '1986-12-22', 'user_type' => 'MEMBER', 'address' => 'Ap #529-9166 Mollis Avenue', 'maximum_books_can_loan' => '6'],
            ['email' => 'Remedios@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Reid', 'first_name' => 'Remedios', 'birthday' => '1989-10-28', 'user_type' => 'MEMBER', 'address' => 'Ap #978-2632 Quisque Rd.', 'maximum_books_can_loan' => '6'],
            ['email' => 'Gabriel@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Wise', 'first_name' => 'Gabriel', 'birthday' => '2001-10-03', 'user_type' => 'MEMBER', 'address' => 'P.O. Box 797, 4332 Nunc St.', 'maximum_books_can_loan' => '6'],
            ['email' => 'Ulric@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Phillips', 'first_name' => 'Ulric', 'birthday' => '1997-12-21', 'user_type' => 'MEMBER', 'address' => '8198 Mattis Street', 'maximum_books_can_loan' => '6'],
            ['email' => 'Allistair@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Acosta', 'first_name' => 'Allistair', 'birthday' => '1981-02-17', 'user_type' => 'MEMBER', 'address' => '6349 In St.', 'maximum_books_can_loan' => '6'],
            ['email' => 'Melinda@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Townsend', 'first_name' => 'Melinda', 'birthday' => '2007-12-01', 'user_type' => 'JUNIOR_MEMBER', 'address' => '511 Ut Av.', 'maximum_books_can_loan' => '3'],
            ['email' => 'Meredith@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Merritt', 'first_name' => 'Meredith', 'birthday' => '2006-10-31', 'user_type' => 'JUNIOR_MEMBER', 'address' => 'Ap #856-5144 Parturient St.', 'maximum_books_can_loan' => '3'],
            ['email' => 'Bianca@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Gardner', 'first_name' => 'Bianca', 'birthday' => '2004-01-15', 'user_type' => 'JUNIOR_MEMBER', 'address' => 'Ap #964-2728 Arcu Road', 'maximum_books_can_loan' => '3'],
            ['email' => 'Roary@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Franklin', 'first_name' => 'Roary', 'birthday' => '2013-06-25', 'user_type' => 'JUNIOR_MEMBER', 'address' => '5834 Venenatis Av.', 'maximum_books_can_loan' => '3'],
            ['email' => 'Whoopi@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Valenzuela', 'first_name' => 'Whoopi', 'birthday' => '2007-11-29', 'user_type' => 'JUNIOR_MEMBER', 'address' => 'Ap #498-4052 Id, St.', 'maximum_books_can_loan' => '3'],
            ['email' => 'Melanie@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Anthony', 'first_name' => 'Melanie', 'birthday' => '2013-05-05', 'user_type' => 'JUNIOR_MEMBER', 'address' => 'P.O. Box 745, 1677 Porttitor Ave', 'maximum_books_can_loan' => '3'],
            ['email' => 'Tallulah@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Bean', 'first_name' => 'Tallulah', 'birthday' => '2007-03-09', 'user_type' => 'JUNIOR_MEMBER', 'address' => 'P.O. Box 405, 9685 Ligula. Rd.', 'maximum_books_can_loan' => '3'],
            ['email' => 'Rae@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Sampson', 'first_name' => 'Rae', 'birthday' => '2010-12-12', 'user_type' => 'JUNIOR_MEMBER', 'address' => 'Ap #231-420 Ornare, Road', 'maximum_books_can_loan' => '3'],
            ['email' => 'Nolan@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Collier', 'first_name' => 'Nolan', 'birthday' => '2012-05-28', 'user_type' => 'JUNIOR_MEMBER', 'address' => 'Ap #378-6495 Volutpat Av.', 'maximum_books_can_loan' => '3'],
            ['email' => 'Sheila@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Wilcox', 'first_name' => 'Sheila', 'birthday' => '2012-06-08', 'user_type' => 'JUNIOR_MEMBER', 'address' => 'Ap #370-8689 Nunc, Ave', 'maximum_books_can_loan' => '3'],
            ['email' => 'admin@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Hendrix', 'first_name' => 'Chadwick', 'birthday' => '1986-12-17', 'user_type' => 'ADMIN', 'address' => '2699 Accumsan Rd.', 'maximum_books_can_loan' => '0'],
            ['email' => 'Hector@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Hines', 'first_name' => 'Hector', 'birthday' => '1993-01-27', 'user_type' => 'ADMIN', 'address' => '1521 Ut Avenue', 'maximum_books_can_loan' => '0'],
            ['email' => 'Kai@mail.com', 'password' => bcrypt('secret'), 'last_name' => 'Blake', 'first_name' => 'Kai', 'birthday' => '1990-09-01', 'user_type' => 'ADMIN', 'address' => 'P.O. Box 650, 6210 Ullamcorper, Rd.', 'maximum_books_can_loan' => '0']

        ]);
    }
}
