<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themas')->insert([
            ['thema' => 'チームのメンバー全員が楽しめる遊びは？',
            ],
            ['thema' => 'ドライブでみんなが盛り上がれる曲を考えてください',
            ],
            ['thema' => 'このメンバーで夏休みの自由研究をするなら何をする？',
            ],
            ['thema' => 'このメンバーで、洞窟で一週間生き延びるには？',
            ],
            ['thema' => 'このメンバーで一番青春できる夏の過ごし方は？',
            ],
            ['thema' => '一年で１００万円を１０００万円にするには？',
            ],
            ['thema' => 'けんさんを絶対に落とせるデートプラン',
            ],
            ['thema' => '大金持ちになるために、30 歳になるまでに今からしておいたほうがいいこと',
            ],
            ['thema' => 'ハリウッドにお店を出すとしたら、何屋さんをだす？',
            ],
            ['thema' => '船が転覆しそう！確実に生き延びるために、避難ボートに３つ載せるものは？',
            ],
            ['thema' => '１年間の鬼退治に、動物を一匹連れていくとしたら？',
            ],
            ['thema' => 'このメンバーの中から、１人火星に送るとしたら？',
            ],
            ['thema' => '日本で次に世界遺産に登録できそうなところは？',
            ],
            ['thema' => 'チーム全員がどちらかになります。巨人と小人どっちがよい？',
            ],
            ['thema' => '全員で引っ越すとしたらどの国に住む？',
            ],
            ['thema' => '空を飛べる能力があったらできる斬新なことを考えてください',
            ],
            ['thema' => 'トイレに欲しい新機能は？',
            ],
            ['thema' => '新型冷蔵庫の新機能とは？',
            ],
            ['thema' => 'チーム全員が楽しめるような、１日だけ与えられた最高の贅沢は？',
            ],
            ['thema' => 'チームメンバー全員が、雪国で遭難！どうやって生き延びる？',
            ]
        
        ]);
        
        DB::table('roles')->insert([
            ['role' => 'ナビゲーター',
            'rule1' => 'あなたは議長です！議論を前に進めるのがあなたの役割です。',
            'rule2' => '①全員の発言機会が最低でも一回以上になるように、均等に発言機会を割り振ろう。',
            'rule3' => '②制限時間以内に議論をまとめてチームの答えを出す。',
            'fig_name' => '/media/tereope.png'
            ],
            ['role' => '黒ずくめ',
            'rule1' => 'あなたは影で支えるキーパーソンです！議論を仕切っている人を全力でサポートしましょう！',
            'rule2' => 'ほかの人と比べて意見を言えていない1人を見つけ出し、話を振りましょう。',
            'rule3' => '',
            'fig_name' => '/media/serch.png'
            
            ],
            ['role' => 'フカホリさん',
            'rule1' => 'あなたは深堀り隊長です！クリティカルな質問をして、論理的な議論に導きましょう！',
            'rule2' => 'テーマの定義や目的を確認できる問いかけを2回以上する。',
            'rule3' => '',
            'fig_name' => '/media/dig.png'
            ],
            ['role' => 'ポメラニアン',
            'rule1' => 'あなたは褒める人です。他者の意見に賛同し、積極的に褒める役割です。',
            'rule2' => '大きな相槌3回以上、意見への賛同やポジティブなコメント3回以上実行する',
            'rule3' => '',
            'fig_name' => '/media/pomeranianicon.png'
            ],
            ['role' => 'タイムマネージャー',
            'rule1' => 'あなたは議論の進捗を管理します。制限時間内に答えを出せるように管理する役割です。',
            'rule2' => '①時間をマネジメントし、議論を効率化しましょう。（携帯使用可）',
            'rule3' => '②残り時間1分でリマインドをして、議論をまとめに導きましょう。',
            'fig_name' => '/media/clock.png'
            ],
            ['role' => 'リポーター',
            'rule1' => 'あなたは意見の集約者です。特に議論の後半で、議論の内容を整理し、適宜伝える役割です。',
            'rule2' => '①簡潔にメモを取り、全員が議論の内容を共有できるようにする。（ホワイトボード使用可）',
            'rule3' => '②残り時間1分程度で整理した議論の内容をチームに伝え、議論のまとめをサポートする。',
            'fig_name' => '/media/hane.png'
            ],
            
            
        ]);
    }
}
