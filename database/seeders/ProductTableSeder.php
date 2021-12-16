<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert( array (
            0 => 
                array(
                    'name' => 'book1',
                    'image' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'price'=>10,
                    'description' => 'Technical Interview',
                ),
            1 =>
                array(
                    'name' => 'book2',
                    'image' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'price'=>10,
                    'description' => 'Technical Interview',
                ),
            2 =>
            array(
                'name' => 'book3',
                'image' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'price'=>10,
                'description' => 'Technical Interview',
            ),
            3 =>
            array(
                'name' => 'book4',
                'image' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'price'=>10,
                'description' => 'Technical Interview',
            ),
            4 =>
                array(
                    'name' => 'book5',
                    'image' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    'price'=>10,
                    'description' => 'Technical Interview',
                ),
            5 =>
            array(
                'name' => 'book6',
                'image' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'price'=>10,
                'description' => 'Technical Interview',
            ),
        )
    );
    }
}