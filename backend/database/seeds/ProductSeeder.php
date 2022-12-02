<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['shop_id' => 1, 'name' => 'mask chain', 'description' => 'all silver
        silver / silver 925 | サイズ / free : 50cm', 'price' => 7700, 'stock' => 5]);
        Product::create(['shop_id' => 1, 'name' => '2 finger line ring silver', 'description' => '素材 : silver 925 | サイズ / S : 9-11号  M : 13-15号 / 優しく力を加えていただきますと多少のサイズ調整可能です', 'price' => 19800, 'stock' => 3]);
        Product::create(['shop_id' => 1, 'name' => 'original tiny chain bracelet', 'description' => '素材 : silver 925 | サイズ / S : 18.5cm  M : 20cm  L : 21.5cm / その他サイズオーダーはコンタクトよりお気軽にお問い合わせください', 'price' => 35200, 'stock' => 4]);
        Product::create(['shop_id' => 2, 'name' => 'アームカバー', 'description' => '肌触りの良いコットンのアームカバーは、寒さや乾燥を防いでくれるだけでなく、紫外線対策にも重宝します。車の運転時には欠かせないアイテムです。シンプルなデザインなので、男性にもおすすめ。ちょっとした贈り物にも喜ばれます。《サイズ》FREE（幅 約13cm 長さ 約54cm）《素材》綿（オーガニックコットン） 94%  ポリウレタン 6%', 'price' => 3300, 'stock' => 10]);
        Product::create(['shop_id' => 2, 'name' => 'ストール', 'description' => 'オーガニックコットンのローン生地で作ったボリュームたっぷりの大判ストール。軽いのに空気を含んで暖かく、持ち運びにも便利です。《サイズ》FREE（幅112cm 長さ192cm）《素材》綿（オーガニックコットン） 100%', 'price' => 16480, 'stock' => 10]);
        Product::create(['shop_id' => 2, 'name' => 'エプロン', 'description' => 'まるでワンピースのような、カシュクールタイプの特別なエプロンです。《サイズ》FREE（着丈112-118cm [ 3段階ボタン調節 ] ）《素材》綿（オーガニックコットン）100%', 'price' => 15890, 'stock' => 10]);
        Product::create(['shop_id' => 3, 'name' => '1ケース「旅の終わりのビール」(2本入り特別ギフトセット)', 'description' => '「旅の終わりのビール」ボトル（330ml）2本にオリジナルコースター2枚が付いた特別ギフトセット1ケース。', 'price' => 1500, 'stock' => 10]);
        Product::create(['shop_id' => 3, 'name' => '3ケース「旅の終わりのビール」(2本入り特別ギフトセット)', 'description' => '「旅の終わりのビール」ボトル（330ml）2本にオリジナルコースター2枚が付いた特別ギフトセットを3ケースでまとめ買い。', 'price' => 4500, 'stock' => 10]);
        Product::create(['shop_id' => 3, 'name' => 'オリジナルコースター（24枚セット）', 'description' => 'ご購入いただいた旅のはじまりのビールと一緒に。あるいは他のドリンクと合わせてテーブルに華やぎを作るのにご活用いただけます。', 'price' => 500, 'stock' => 10]);
        Product::create(['shop_id' => 4, 'name' => 'センベイフェスティバル', 'description' => '白ゴマ、黒ゴマ、甘辛七味、ザラメ、4種のお煎餅がボトルに入ったアソート商品。軽くて頑丈なペットボトル素材のボトルの為、色んなシーンでお楽しみいただけます。', 'price' => 972, 'stock' => 10]);
        Product::create(['shop_id' => 4, 'name' => '甘辛七味', 'description' => '砂糖醤油をコッテリ二度漬けし、七味唐辛子をまぶし、一晩寝かせて仕上げた煎餅。舌を包みこむ甘みと、ピリッと刺激する七味の辛み、鼻にぬける山椒の風味が癖になる味わい。', 'price' => 648, 'stock' => 10]);
        Product::create(['shop_id' => 4, 'name' => 'センベイセレクション 6種小袋セット', 'description' => '6種の煎餅が小箱に入ったセット商品になります。
        小箱はディスプレイボックスとしてもお楽しみ頂けます。', 'price' => 1000, 'stock' => 10]);
        Product::create(['shop_id' => 5, 'name' => '邪払い ゆず 720ml', 'description' => '国産ゆず果汁使用。フレッシュな果汁感、キュンと酸っぱく爽やかな後味の和リキュール。リキュール 720ml アルコール分8% ※こちらはお酒です。20歳未満の販売は致しません。', 'price' => 1430, 'stock' => 10]);
        Product::create(['shop_id' => 5, 'name' => '邪払い 茶 720ml', 'description' => '温暖な気候が育てた静岡県産緑茶使用。茶葉から抽出した天然の美しい緑色緑茶特有の爽やかな芳香と、コク深くほろ苦さが感じられる和リキュール。リキュール 720ml × 12本 1ケース単位 アルコール分8% ※こちらはお酒です。20歳未満の販売は致しません。', 'price' => 1430, 'stock' => 10]);
        Product::create(['shop_id' => 5, 'name' => '邪払い はるみかん', 'description' => '静岡県産 「はるみ（みかん）」・「温州みかん」果汁使用。甘くとろける飲み心地、とろりと濃厚な和リキュール。「はるみ」と「温州みかん」の果汁をまるごとぎゅっと絞りました。はるみの爽やかな風味と、温州みかんの甘味を生かした贅沢なお酒ができました。リキュール 720ml × 12本 ケース単位 アルコール分6% ※こちらはお酒です。20歳未満の販売は致しません。', 'price' => 1430, 'stock' => 10]);
        Product::create(['shop_id' => 6, 'name' => 'ぶどうゼリー', 'description' => 'ゼリータイプで飲みやすいので、子どもやご家族、お年寄りにもおすすめ。ネーミングやパッケージかわいいので、ちょっとしたプレゼントにも。愛媛と言えばみかん。愛媛・八幡浜のお土産としてどうぞ。ビタミンCがたっぷり含まれているので美容・健康が気になる方にも', 'price' => 450, 'stock' => 10]);
    }
}
