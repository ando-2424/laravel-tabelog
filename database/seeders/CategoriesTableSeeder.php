<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            '居酒屋',
            'イタリアン',
            '海鮮',
            '日本料理',
            'ダイニングバー',
            'カフェ',
            'ワインバー',
            '日本酒バー',
            '焼き鳥',
            'バー',
            'ビストロ',
            '魚介料理・海鮮料理',
            'フレンチ',
            '創作料理',
            'パスタ',
            'バル・バール',
            '寿司',
            'そば',
            'ラーメン',
            '焼肉',
            'ステーキ',
            'ピザ',
            '中華料理',
            '割烹・小料理',
            '洋食',
            '焼鳥',
            '鳥料理',
            '和食（その他）',
            '食堂',
            '天ぷら',
            'スペイン料理',
            'もつ鍋',
            'ホルモン',
            '鉄板焼き',
            'うどん',
            'ビアバー',
            '焼酎バー',
            'カレー',
            'おでん',
            'しゃぶしゃぶ',
            'お好み焼き',
            '鍋',
            '韓国料理',
            'うなぎ',
            'ハンバーグ',
            '立ち飲み',
            'ヨーロッパ料理',
            'ハンバーガー',
            'パン',
            'つけ麺',
            'ろばた焼き',
            'レストラン',
            '餃子',
            'とんかつ',
            'からあげ',
            '惣菜・デリ',
            '居酒屋・ダイニングバー（その他）',
            'イノベーティブ',
            '串焼き',
            '野菜料理',
            '肉料理',
            '喫茶店',
            '牛料理',
            '串揚げ',
            'オイスターバー',
            'アジア・エスニック',
            'もんじゃ焼き',
            '海鮮丼',
            'すき焼き',
            '馬肉料理',
            'スイーツ',
            'タイ料理',
            'インド料理',
            'ベトナム料理',
            'ふぐ',
            '沖縄料理',
            'カフェ・喫茶（その他）',
            'その他',
            '串揚げ・串かつ',
            '炭火焼き',
            '釜飯',
            'バイキング',
            'ちゃんこ鍋',
            'ラウンジ',
            'シーフード',
            'アメリカ料理',
            'すっぽん',
            '台湾料理',
            'そば・うどん・麺類（その他）',
            'ドイツ料理',
            'ハワイ料理',
            'かき',
            'オムライス',
            'ジンギスカン',
            'ジビエ料理',
            '立ち飲み居酒屋・バー',
            '豆腐料理',
            'メキシコ料理',
            '地中海料理',
            'スープカレー',
            '冷麺',
            '和菓子',
            'ネパール料理',
            'ポルトガル料理',
            'タコス',
            'ビアホール・ビアレストラン',
            'アフリカ料理',
            '麺類',
            'チーズ料理',
            'トルコ料理',
            '手羽先',
            'ファミレス',
            'アサイーボウル',
            'にんにく料理',
            'スリランカ料理',
            'アジア・エスニック料理',
            'カリフォルニア料理',
            '北京料理',
            '南アジア料理',
            'ロシア料理',
            'ギリシャ料理'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert(['category_name' => $category]);
        }
    }
}
