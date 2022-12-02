<?php

use App\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create(['user_id' => 1, 'name' => 'bebet', 'description' => '"身につける人の個性を照らし 長く使えるタイムレス・シーズンレスな ジュエリー"をコンセプトに
        極限まで無駄を省きながらも確かな個性が光る、そんなジュエリーを提案します。
        bebet HANDCRAFTED IN JAPAN']);
        Shop::create(['user_id' => 1, 'name' => 'SOMEYA AMI', 'description' => 'ソメヤアミはオーガニックコットンの生地を草木染めした布製品の制作・販売をしています。']);
        Shop::create(['user_id' => 2, 'name' => '旅の終わりのビール', 'description' => '『クラフトビールを片手に、これまでの旅の話をしよう。』']);
        Shop::create(['user_id' => 2, 'name' => 'SENBEI SISTERS', 'description' => '「花製菓」の煎餅ブランド「センベイシスターズ」。せんべいを、おいしく、かわいく。 をコンセプトに、東京で煎餅を作っている姉妹です。創業半世紀の家業の味に、私たち姉妹の挑戦を盛り込んだ、温故知新に溢れる煎餅を作っています。20種を超えるバラエティに富んだ煎餅は、子供からご年配の方、オヤツから酒のツマミまで幅広くお楽しみ頂けます。']);
        Shop::create(['user_id' => 3, 'name' => 'Jabarai_lab', 'description' => '東京生まれの本格和リキュール。無香料、無着色。天然素材を贅沢に使用した、こだわりの本格リキュール。“邪払い”をメインに販売。こちらで販売している商品はお酒です。20歳未満の飲酒は法律により禁じられております。※当店では20歳未満のお客様への酒類の販売は致しておりません。']);
        Shop::create(['user_id' => 3, 'name' => 'ぶどうのジャグチ', 'description' => 'これまでになかった大人のゼリー。ぶどうのジャグチは、山梨県のぶどうを100％使用したこれまでなかった本格的な大人のゼリーです。 皮を剥いだ果実をていねいにスロージューサーにかけることで、渋みが抑えられ、スッキリテイスト・たっぷり果汁のゼリー飲料が出来上がりました。']);
    }
}
