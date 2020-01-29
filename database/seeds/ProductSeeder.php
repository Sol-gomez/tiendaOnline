<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Remera 1',
                'slug' => 'remera-1',
                'description'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                'extract'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'price'=> 200.00,
                'image'=>'https://cdn.pixabay.com/photo/2019/07/21/05/21/fashion-4351954_960_720.jpg',
                'visible'=>1,
                //'create_at'=> new DateTime,
                //'update_at'=>new DateTime,
                'category_id'=>1
            ],
            [
                'name' => 'Remera 2',
                'slug' => 'remera-2',
                'description'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                'extract'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'price'=> 250.00,
                'image'=>'https://cdn.pixabay.com/photo/2018/01/01/19/23/woman-3054810_960_720.jpg',
                'visible'=>1,
                //'create_at'=> new DateTime,
                //'update_at'=>new DateTime,
                'category_id'=> 1

            ],
            [
                'name' => 'Remera 3',
                'slug' => 'remera-3',
                'description'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.',
                'extract'=>'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'price'=> 400.00,
                'image'=>'https://cdn.pixabay.com/photo/2018/01/01/15/31/woman-3054364_640.jpg',
                'visible'=>1,
                //'create_at'=> new DateTime,
                //'update_at'=>new DateTime,
                'category_id'=> 1
            ],
            [
                'name' => 'Remera 4',
                'slug' => 'remera-4',
                'description'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.',
                'extract'=>'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'price'=> 378.00,
                'image'=>'https://cdn.pixabay.com/photo/2016/08/26/20/44/elan-1623088_960_720.jpg',
                'visible'=>1,
                //'create_at'=> new DateTime,
                //'update_at'=>new DateTime,
                'category_id'=> 1
            ],
            [
                'name' => 'Remera 5',
                'slug' => 'remera-5',
                'description'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'extract'=>'Omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'price'=> 458.00,
                'image'=>'https://cdn.pixabay.com/photo/2016/08/26/20/44/elan-1623085__340.jpg',
                'visible'=>1,
                //'create_at'=> new DateTime,
                //'update_at'=>new DateTime,
                'category_id'=> 1
            ],
            [
                'name' => 'Remera 6',
                'slug' => 'remera-6',
                'description'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'extract'=>'Omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
                'price'=> 480.00,
                'image'=>'https://cdn.pixabay.com/photo/2016/08/26/20/44/elan-1623086_640.jpg',
                'visible'=>1,
               // 'create_at'=> new DateTime,
                //'update_at'=>new DateTime,
                'category_id'=> 1
            ],
            [
                'name' => 'Remera 7',
                'slug' => 'remera-7',
                'description'=>'Sed ut perspiciatis unde voluptatem accusantium doloremque laudantium.',
                'extract'=>'Omnis iste natus error sit voluptatem.',
                'price'=> 330.00,
                'image'=>'https://cdn.pixabay.com/photo/2016/08/26/20/44/elan-1623087_640.jpg',
                'visible'=>1,
                //'create_at'=> new DateTime,
                //'update_at'=>new DateTime,
                'category_id'=> 1
            ],
            [
                'name' => 'Remera 8',
                'slug' => 'remera-',
                'description'=>'Sed ut perspiciatis unde voluptatem accusantium doloremque laudantium.',
                'extract'=>'Omnis iste natus error sit voluptatem.',
                'price'=> 330.00,
                'image'=>'https://cdn.pixabay.com/photo/2016/08/26/20/44/elan-1623084_960_720.jpg',
                'visible'=>1,
                //'create_at'=> new DateTime,
                //'update_at'=>new DateTime,
                'category_id'=> 1
            ],


        );
        Product::insert($data);
    }
}
