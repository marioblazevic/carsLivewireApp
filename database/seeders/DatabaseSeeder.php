<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Comment;
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
        Car::create(['title'=>'BMW 1', 'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint beatae enim nihil. Dicta iste cum sit tempora qui aliquid ex ullam explicabo eligendi officiis aspernatur saepe, architecto neque quia laboriosam nulla omnis cupiditate, sed quo dolorem ipsam amet! Nesciunt ad porro ipsum laboriosam fuga tenetur laudantium voluptatibus modi fugit autem, tempora odit repellendus, fugiat labore ullam, maiores veritatis. Mollitia odit laborum magnam veniam ea tenetur dolor eligendi magni excepturi cupiditate.']);
        Car::create(['title'=>'BMW 2', 'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint beatae enim nihil. Dicta iste cum sit tempora qui aliquid ex ullam explicabo eligendi officiis aspernatur saepe, architecto neque quia laboriosam nulla omnis cupiditate, sed quo dolorem ipsam amet! Nesciunt ad porro ipsum laboriosam fuga tenetur laudantium voluptatibus modi fugit autem, tempora odit repellendus, fugiat labore ullam, maiores veritatis. Mollitia odit laborum magnam veniam ea tenetur dolor eligendi magni excepturi cupiditate.']);
        Car::create(['title'=>'BMW 3', 'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint beatae enim nihil. Dicta iste cum sit tempora qui aliquid ex ullam explicabo eligendi officiis aspernatur saepe, architecto neque quia laboriosam nulla omnis cupiditate, sed quo dolorem ipsam amet! Nesciunt ad porro ipsum laboriosam fuga tenetur laudantium voluptatibus modi fugit autem, tempora odit repellendus, fugiat labore ullam, maiores veritatis. Mollitia odit laborum magnam veniam ea tenetur dolor eligendi magni excepturi cupiditate.']);
        Car::create(['title'=>'Audi A3', 'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint beatae enim nihil. Dicta iste cum sit tempora qui aliquid ex ullam explicabo eligendi officiis aspernatur saepe, architecto neque quia laboriosam nulla omnis cupiditate, sed quo dolorem ipsam amet! Nesciunt ad porro ipsum laboriosam fuga tenetur laudantium voluptatibus modi fugit autem, tempora odit repellendus, fugiat labore ullam, maiores veritatis. Mollitia odit laborum magnam veniam ea tenetur dolor eligendi magni excepturi cupiditate.']);
        Car::create(['title'=>'Audi A4', 'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint beatae enim nihil. Dicta iste cum sit tempora qui aliquid ex ullam explicabo eligendi officiis aspernatur saepe, architecto neque quia laboriosam nulla omnis cupiditate, sed quo dolorem ipsam amet! Nesciunt ad porro ipsum laboriosam fuga tenetur laudantium voluptatibus modi fugit autem, tempora odit repellendus, fugiat labore ullam, maiores veritatis. Mollitia odit laborum magnam veniam ea tenetur dolor eligendi magni excepturi cupiditate.']);
        Car::create(['title'=>'Audi A6', 'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint beatae enim nihil. Dicta iste cum sit tempora qui aliquid ex ullam explicabo eligendi officiis aspernatur saepe, architecto neque quia laboriosam nulla omnis cupiditate, sed quo dolorem ipsam amet! Nesciunt ad porro ipsum laboriosam fuga tenetur laudantium voluptatibus modi fugit autem, tempora odit repellendus, fugiat labore ullam, maiores veritatis. Mollitia odit laborum magnam veniam ea tenetur dolor eligendi magni excepturi cupiditate.']);
        Car::create(['title'=>'Skoda Fabia', 'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint beatae enim nihil. Dicta iste cum sit tempora qui aliquid ex ullam explicabo eligendi officiis aspernatur saepe, architecto neque quia laboriosam nulla omnis cupiditate, sed quo dolorem ipsam amet! Nesciunt ad porro ipsum laboriosam fuga tenetur laudantium voluptatibus modi fugit autem, tempora odit repellendus, fugiat labore ullam, maiores veritatis. Mollitia odit laborum magnam veniam ea tenetur dolor eligendi magni excepturi cupiditate.']);
        Car::create(['title'=>'Skoda Superb', 'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint beatae enim nihil. Dicta iste cum sit tempora qui aliquid ex ullam explicabo eligendi officiis aspernatur saepe, architecto neque quia laboriosam nulla omnis cupiditate, sed quo dolorem ipsam amet! Nesciunt ad porro ipsum laboriosam fuga tenetur laudantium voluptatibus modi fugit autem, tempora odit repellendus, fugiat labore ullam, maiores veritatis. Mollitia odit laborum magnam veniam ea tenetur dolor eligendi magni excepturi cupiditate.']);
        Car::create(['title'=>'Skoda Octavia', 'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint beatae enim nihil. Dicta iste cum sit tempora qui aliquid ex ullam explicabo eligendi officiis aspernatur saepe, architecto neque quia laboriosam nulla omnis cupiditate, sed quo dolorem ipsam amet! Nesciunt ad porro ipsum laboriosam fuga tenetur laudantium voluptatibus modi fugit autem, tempora odit repellendus, fugiat labore ullam, maiores veritatis. Mollitia odit laborum magnam veniam ea tenetur dolor eligendi magni excepturi cupiditate.']);

        Comment::create(['car_id'=>1,'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','username'=>'mare12']);
        Comment::create(['car_id'=>1,'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','username'=>'coa1']);
        Comment::create(['car_id'=>1,'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','username'=>'sava6']);
        Comment::create(['car_id'=>2,'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','username'=>'pera4']);
        Comment::create(['car_id'=>2,'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','username'=>'aca11']);
        Comment::create(['car_id'=>3,'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','username'=>'mrki']);
        Comment::create(['car_id'=>4,'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','username'=>'vaske65']);
        Comment::create(['car_id'=>4,'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','username'=>'luka1']);
        Comment::create(['car_id'=>5,'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','username'=>'dule4']);
    }
}
