<?php
// 運賃計算テーブル

// 駅名テーブル
$stations = [
    'S01' => ['name' => '新静岡', 'en_name' => 'Shin-Shizuoka'],
    'S02' => ['name' => '日吉町', 'en_name' => 'Hiyoshicho'],
    'S03' => ['name' => '音羽町', 'en_name' => 'Otowacho'],
    'S04' => ['name' => '春日町', 'en_name' => 'Kasugacho'],
    'S05' => ['name' => '柚木', 'en_name' => 'Yunoki'],
    'S06' => ['name' => '長沼', 'en_name' => 'Naganuma'],
    'S07' => ['name' => '古庄', 'en_name' => 'Furusho'],
    'S08' => ['name' => '県総合運動場', 'en_name' => 'Pref. Sports Park'],
    'S09' => ['name' => '県立美術館前', 'en_name' => 'Pref. Art Museum'],
    'S10' => ['name' => '草薙', 'en_name' => 'Kusanagi'],
    'S11' => ['name' => '御門台', 'en_name' => 'Mikadodai'],
    'S12' => ['name' => '狐ケ崎', 'en_name' => 'Kitsunegasaki'],
    'S13' => ['name' => '桜橋', 'en_name' => 'Sakurabashi'],
    'S14' => ['name' => '入江岡', 'en_name' => 'Irieoka'],
    'S15' => ['name' => '新清水', 'en_name' => 'Shin-Shimizu'],
];

// 普通旅客の運賃テーブル
$normal_fare = [
    'S01' => [  // 新静岡
        'S01' => 0,
        'S02' => 160,
        'S03' => 160,
        'S04' => 160,
        'S05' => 160,
        'S06' => 170,
        'S07' => 170,
        'S08' => 190,
        'S09' => 220,
        'S10' => 240,
        'S11' => 270,
        'S12' => 300,
        'S13' => 330,
        'S14' => 350,
        'S15' => 350,
    ],
    'S02' => [  // 日吉町
        'S02' => 0,
        'S03' => 160,
        'S04' => 160,
        'S05' => 160,
        'S06' => 170,
        'S07' => 170,
        'S08' => 190,
        'S09' => 220,
        'S10' => 220,
        'S11' => 240,
        'S12' => 270,
        'S13' => 330,
        'S14' => 330,
        'S15' => 350,
    ],
    'S03' => [  // 音羽町
        'S03' => 0,
        'S04' => 160,
        'S05' => 160,
        'S06' => 170,
        'S07' => 170,
        'S08' => 170,
        'S09' => 190,
        'S10' => 220,
        'S11' => 240,
        'S12' => 270,
        'S13' => 300,
        'S14' => 330,
        'S15' => 330,
    ],
    'S04' => [  // 春日町
        'S04' => 0,
        'S05' => 160,
        'S06' => 160,
        'S07' => 170,
        'S08' => 170,
        'S09' => 190,
        'S10' => 190,
        'S11' => 220,
        'S12' => 240,
        'S13' => 300,
        'S14' => 300,
        'S15' => 330,
    ],
    'S05' => [  // 柚木
        'S05' => 0,
        'S06' => 160,
        'S07' => 160,
        'S08' => 170,
        'S09' => 170,
        'S10' => 190,
        'S11' => 220,
        'S12' => 240,
        'S13' => 270,
        'S14' => 300,
        'S15' => 300,
    ],
    'S06' => [  // 長沼
        'S06' => 0,
        'S07' => 160,
        'S08' => 160,
        'S09' => 170,
        'S10' => 170,
        'S11' => 190,
        'S12' => 220,
        'S13' => 240,
        'S14' => 270,
        'S15' => 270,
    ],
    'S07' => [  // 古庄
        'S07' => 0,
        'S08' => 160,
        'S09' => 160,
        'S10' => 170,
        'S11' => 170,
        'S12' => 190,
        'S13' => 240,
        'S14' => 240,
        'S15' => 270,
    ],
    'S08' => [  // 県総合運動場
        'S08' => 0,
        'S09' => 160,
        'S10' => 160,
        'S11' => 170,
        'S12' => 170,
        'S13' => 220,
        'S14' => 220,
        'S15' => 240,
    ],
    'S09' => [  // 県立美術館前
        'S09' => 0,
        'S10' => 160,
        'S11' => 160,
        'S12' => 170,
        'S13' => 190,
        'S14' => 190,
        'S15' => 220,
    ],
    'S10' => [  // 草薙
        'S10' => 0,
        'S11' => 160,
        'S12' => 160,
        'S13' => 170,
        'S14' => 170,
        'S15' => 190,
    ],
    'S11' => [  // 御門台
        'S11' => 0,
        'S12' => 160,
        'S13' => 170,
        'S14' => 170,
        'S15' => 170,
    ],
    'S12' => [  // 狐ケ崎
        'S12' => 0,
        'S13' => 160,
        'S14' => 160,
        'S15' => 170,
    ],
    'S13' => [  // 桜橋
        'S13' => 0,
        'S14' => 160,
        'S15' => 160,
    ],
    'S14' => [  // 入江岡
        'S14' => 0,
        'S15' => 160,
    ],
    'S15' => [  // 新清水
        'S15' => 0,
    ],
];

// 通勤定期(1ヶ月)の運賃テーブル
$commuter1_fare = [
    'S01' => [  // 新静岡
        'S02' => 5760,
        'S03' => 5760,
        'S04' => 5760,
        'S05' => 5760,
        'S06' => 6120,
        'S07' => 6120,
        'S08' => 7980,
        'S09' => 9240,
        'S10' => 9660,
        'S11' => 11340,
        'S12' => 12600,
        'S13' => 13860,
        'S14' => 14700,
        'S15' => 14700,
    ],
    'S02' => [  // 日吉町
        'S03' => 5760,
        'S04' => 5760,
        'S05' => 5760,
        'S06' => 6120,
        'S07' => 6120,
        'S08' => 7980,
        'S09' => 9240,
        'S10' => 9240,
        'S11' => 10080,
        'S12' => 11340,
        'S13' => 13860,
        'S14' => 13860,
        'S15' => 14700,
    ],
    'S03' => [  // 音羽町
        'S04' => 5760,
        'S05' => 5760,
        'S06' => 6120,
        'S07' => 6120,
        'S08' => 6120,
        'S09' => 7980,
        'S10' => 9240,
        'S11' => 10080,
        'S12' => 11340,
        'S13' => 12600,
        'S14' => 13860,
        'S15' => 13860,
    ],
    'S04' => [  // 春日町
        'S05' => 5760,
        'S06' => 5760,
        'S07' => 6120,
        'S08' => 6120,
        'S09' => 7980,
        'S10' => 7980,
        'S11' => 9240,
        'S12' => 10080,
        'S13' => 12600,
        'S14' => 12600,
        'S15' => 13860,
    ],
    'S05' => [  // 柚木
        'S06' => 5760,
        'S07' => 5760,
        'S08' => 6120,
        'S09' => 6120,
        'S10' => 7980,
        'S11' => 9240,
        'S12' => 10080,
        'S13' => 11340,
        'S14' => 12600,
        'S15' => 12600,
    ],
    'S06' => [  // 長沼
        'S07' => 5760,
        'S08' => 5760,
        'S09' => 6120,
        'S10' => 6120,
        'S11' => 7980,
        'S12' => 9240,
        'S13' => 10080,
        'S14' => 11340,
        'S15' => 11340,
    ],
    'S07' => [  // 古庄
        'S08' => 5760,
        'S09' => 5760,
        'S10' => 6120,
        'S11' => 6120,
        'S12' => 7980,
        'S13' => 10080,
        'S14' => 10080,
        'S15' => 11340,
    ],
    'S08' => [  // 県総合運動場
        'S09' => 5760,
        'S10' => 5760,
        'S11' => 6120,
        'S12' => 6120,
        'S13' => 9240,
        'S14' => 9240,
        'S15' => 10080,
    ],
    'S09' => [  // 県立美術館前
        'S10' => 5760,
        'S11' => 5760,
        'S12' => 6120,
        'S13' => 7980,
        'S14' => 7980,
        'S15' => 9240,
    ],
    'S10' => [  // 草薙
        'S11' => 5760,
        'S12' => 5760,
        'S13' => 6120,
        'S14' => 6120,
        'S15' => 7980,
    ],
    'S11' => [  // 御門台
        'S12' => 5760,
        'S13' => 6120,
        'S14' => 6120,
        'S15' => 6120,
    ],
    'S12' => [  // 狐ケ崎
        'S13' => 5760,
        'S14' => 5760,
        'S15' => 6120,
    ],
    'S13' => [  // 桜橋
        'S14' => 5760,
        'S15' => 5760,
    ],
    'S14' => [  // 入江岡
        'S15' => 5760,
    ],
    'S15' => [  // 新清水
    ],
];

// 通勤定期(3ヶ月)の運賃テーブル
$commuter3_fare = [
    'S01' => [  // 新静岡
        'S02' => 16420,
        'S03' => 16420,
        'S04' => 16420,
        'S05' => 16420,
        'S06' => 17450,
        'S07' => 17450,
        'S08' => 22750,
        'S09' => 26340,
        'S10' => 27540,
        'S11' => 32320,
        'S12' => 35910,
        'S13' => 39510,
        'S14' => 41900,
        'S15' => 41900,
    ],
    'S02' => [  // 日吉町
        'S03' => 16420,
        'S04' => 16420,
        'S05' => 16420,
        'S06' => 17450,
        'S07' => 17450,
        'S08' => 22750,
        'S09' => 26340,
        'S10' => 26340,
        'S11' => 28730,
        'S12' => 32320,
        'S13' => 39510,
        'S14' => 39510,
        'S15' => 41900,
    ],
    'S03' => [  // 音羽町
        'S04' => 16420,
        'S05' => 16420,
        'S06' => 17450,
        'S07' => 17450,
        'S08' => 17450,
        'S09' => 22750,
        'S10' => 26340,
        'S11' => 28730,
        'S12' => 32320,
        'S13' => 35910,
        'S14' => 39510,
        'S15' => 39510,
    ],
    'S04' => [  // 春日町
        'S05' => 16420,
        'S06' => 16420,
        'S07' => 17450,
        'S08' => 17450,
        'S09' => 22750,
        'S10' => 22750,
        'S11' => 26340,
        'S12' => 28730,
        'S13' => 35910,
        'S14' => 35910,
        'S15' => 39510,
    ],
    'S05' => [  // 柚木
        'S06' => 16420,
        'S07' => 16420,
        'S08' => 17450,
        'S09' => 17450,
        'S10' => 22750,
        'S11' => 26340,
        'S12' => 28730,
        'S13' => 32320,
        'S14' => 35910,
        'S15' => 35910,
    ],
    'S06' => [  // 長沼
        'S07' => 16420,
        'S08' => 16420,
        'S09' => 17450,
        'S10' => 17450,
        'S11' => 22750,
        'S12' => 26340,
        'S13' => 28730,
        'S14' => 32320,
        'S15' => 32320,
    ],
    'S07' => [  // 古庄
        'S08' => 16420,
        'S09' => 16420,
        'S10' => 17450,
        'S11' => 17450,
        'S12' => 22750,
        'S13' => 28730,
        'S14' => 28730,
        'S15' => 32320,
    ],
    'S08' => [  // 県総合運動場
        'S09' => 16420,
        'S10' => 16420,
        'S11' => 17450,
        'S12' => 17450,
        'S13' => 26340,
        'S14' => 26340,
        'S15' => 28730,
    ],
    'S09' => [  // 県立美術館前
        'S10' => 16420,
        'S11' => 16420,
        'S12' => 17450,
        'S13' => 22750,
        'S14' => 22750,
        'S15' => 26340,
    ],
    'S10' => [  // 草薙
        'S11' => 16420,
        'S12' => 16420,
        'S13' => 17450,
        'S14' => 17450,
        'S15' => 22750,
    ],
    'S11' => [  // 御門台
        'S12' => 16420,
        'S13' => 17450,
        'S14' => 17450,
        'S15' => 17450,
    ],
    'S12' => [  // 狐ケ崎
        'S13' => 16420,
        'S14' => 16420,
        'S15' => 17450,
    ],
    'S13' => [  // 桜橋
        'S14' => 16420,
        'S15' => 16420,
    ],
    'S14' => [  // 入江岡
        'S15' => 16420,
    ],
    'S15' => [  // 新清水
    ],
];

// 通勤定期(6ヶ月)の運賃テーブル
$commuter6_fare = [
    'S01' => [  // 新静岡
        'S02' => 31110,
        'S03' => 31110,
        'S04' => 31110,
        'S05' => 31110,
        'S06' => 33050,
        'S07' => 33050,
        'S08' => 43100,
        'S09' => 49900,
        'S10' => 52170,
        'S11' => 61240,
        'S12' => 68040,
        'S13' => 74850,
        'S14' => 79380,
        'S15' => 79380,
    ],
    'S02' => [  // 日吉町
        'S03' => 31110,
        'S04' => 31110,
        'S05' => 31110,
        'S06' => 33050,
        'S07' => 33050,
        'S08' => 43100,
        'S09' => 49900,
        'S10' => 49900,
        'S11' => 54440,
        'S12' => 61240,
        'S13' => 74850,
        'S14' => 74850,
        'S15' => 79380,
    ],
    'S03' => [  // 音羽町
        'S04' => 31110,
        'S05' => 31110,
        'S06' => 33050,
        'S07' => 33050,
        'S08' => 33050,
        'S09' => 43100,
        'S10' => 49900,
        'S11' => 54440,
        'S12' => 61240,
        'S13' => 68040,
        'S14' => 74850,
        'S15' => 74850,
    ],
    'S04' => [  // 春日町
        'S05' => 31110,
        'S06' => 31110,
        'S07' => 33050,
        'S08' => 33050,
        'S09' => 43100,
        'S10' => 43100,
        'S11' => 49900,
        'S12' => 54440,
        'S13' => 68040,
        'S14' => 68040,
        'S15' => 74850,
    ],
    'S05' => [  // 柚木
        'S06' => 31110,
        'S07' => 31110,
        'S08' => 33050,
        'S09' => 33050,
        'S10' => 43100,
        'S11' => 49900,
        'S12' => 54440,
        'S13' => 61240,
        'S14' => 68040,
        'S15' => 68040,
    ],
    'S06' => [  // 長沼
        'S07' => 31110,
        'S08' => 31110,
        'S09' => 33050,
        'S10' => 33050,
        'S11' => 43100,
        'S12' => 49900,
        'S13' => 54440,
        'S14' => 61240,
        'S15' => 61240,
    ],
    'S07' => [  // 古庄
        'S08' => 31110,
        'S09' => 31110,
        'S10' => 33050,
        'S11' => 33050,
        'S12' => 43100,
        'S13' => 54440,
        'S14' => 54440,
        'S15' => 61240,
    ],
    'S08' => [  // 県総合運動場
        'S09' => 31110,
        'S10' => 31110,
        'S11' => 33050,
        'S12' => 33050,
        'S13' => 49900,
        'S14' => 49900,
        'S15' => 54440,
    ],
    'S09' => [  // 県立美術館前
        'S10' => 31110,
        'S11' => 31110,
        'S12' => 33050,
        'S13' => 43100,
        'S14' => 43100,
        'S15' => 49900,
    ],
    'S10' => [  // 草薙
        'S11' => 31110,
        'S12' => 31110,
        'S13' => 33050,
        'S14' => 33050,
        'S15' => 43100,
    ],
    'S11' => [  // 御門台
        'S12' => 31110,
        'S13' => 33050,
        'S14' => 33050,
        'S15' => 33050,
    ],
    'S12' => [  // 狐ケ崎
        'S13' => 31110,
        'S14' => 31110,
        'S15' => 33050,
    ],
    'S13' => [  // 桜橋
        'S14' => 31110,
        'S15' => 31110,
    ],
    'S14' => [  // 入江岡
        'S15' => 31110,
    ],
    'S15' => [  // 新清水
    ],
];

// 通学定期(1ヶ月)の運賃テーブル
$student1_fare = [
    'S01' => [  // 新静岡
        'S02' => 2660,
        'S03' => 2660,
        'S04' => 2660,
        'S05' => 2660,
        'S06' => 3600,
        'S07' => 3600,
        'S08' => 4350,
        'S09' => 4970,
        'S10' => 5340,
        'S11' => 6520,
        'S12' => 7460,
        'S13' => 8070,
        'S14' => 8500,
        'S15' => 8500,
    ],
    'S02' => [  // 日吉町
        'S03' => 2660,
        'S04' => 2660,
        'S05' => 2660,
        'S06' => 2720,
        'S07' => 3600,
        'S08' => 4350,
        'S09' => 4970,
        'S10' => 4970,
        'S11' => 5580,
        'S12' => 6520,
        'S13' => 8070,
        'S14' => 8070,
        'S15' => 8500,
    ],
    'S03' => [  // 音羽町
        'S04' => 2660,
        'S05' => 2660,
        'S06' => 2720,
        'S07' => 2720,
        'S08' => 3600,
        'S09' => 4350,
        'S10' => 4970,
        'S11' => 5580,
        'S12' => 6520,
        'S13' => 7460,
        'S14' => 8070,
        'S15' => 8070,
    ],
    'S04' => [  // 春日町
        'S05' => 2660,
        'S06' => 2660,
        'S07' => 2720,
        'S08' => 3600,
        'S09' => 4350,
        'S10' => 4350,
        'S11' => 4970,
        'S12' => 5580,
        'S13' => 7460,
        'S14' => 7460,
        'S15' => 8070,
    ],
    'S05' => [  // 柚木
        'S06' => 2660,
        'S07' => 2660,
        'S08' => 2720,
        'S09' => 3600,
        'S10' => 4350,
        'S11' => 4970,
        'S12' => 5580,
        'S13' => 6520,
        'S14' => 7460,
        'S15' => 7460,
    ],
    'S06' => [  // 長沼
        'S07' => 2660,
        'S08' => 2660,
        'S09' => 2720,
        'S10' => 3600,
        'S11' => 4350,
        'S12' => 4970,
        'S13' => 5580,
        'S14' => 6520,
        'S15' => 6520,
    ],
    'S07' => [  // 古庄
        'S08' => 2660,
        'S09' => 2660,
        'S10' => 2720,
        'S11' => 3600,
        'S12' => 4350,
        'S13' => 5580,
        'S14' => 5580,
        'S15' => 6520,
    ],
    'S08' => [  // 県総合運動場
        'S09' => 2660,
        'S10' => 2660,
        'S11' => 2720,
        'S12' => 3600,
        'S13' => 4970,
        'S14' => 4970,
        'S15' => 5580,
    ],
    'S09' => [  // 県立美術館前
        'S10' => 2660,
        'S11' => 2660,
        'S12' => 2720,
        'S13' => 4350,
        'S14' => 4350,
        'S15' => 4970,
    ],
    'S10' => [  // 草薙
        'S11' => 2660,
        'S12' => 2660,
        'S13' => 3600,
        'S14' => 3600,
        'S15' => 4350,
    ],
    'S11' => [  // 御門台
        'S12' => 2660,
        'S13' => 2720,
        'S14' => 2720,
        'S15' => 3600,
    ],
    'S12' => [  // 狐ケ崎
        'S13' => 2660,
        'S14' => 2660,
        'S15' => 2720,
    ],
    'S13' => [  // 桜橋
        'S14' => 2660,
        'S15' => 2660,
    ],
    'S14' => [  // 入江岡
        'S15' => 2660,
    ],
    'S15' => [  // 新清水
    ],
];

// 通学定期(3ヶ月)の運賃テーブル
$student3_fare = [
    'S01' => [  // 新静岡
        'S02' => 7590,
        'S03' => 7590,
        'S04' => 7590,
        'S05' => 7590,
        'S06' => 10260,
        'S07' => 10260,
        'S08' => 12400,
        'S09' => 14170,
        'S10' => 15220,
        'S11' => 18590,
        'S12' => 21270,
        'S13' => 23000,
        'S14' => 24230,
        'S15' => 24230,
    ],
    'S02' => [  // 日吉町
        'S03' => 7590,
        'S04' => 7590,
        'S05' => 7590,
        'S06' => 7760,
        'S07' => 10260,
        'S08' => 12400,
        'S09' => 14170,
        'S10' => 14170,
        'S11' => 15910,
        'S12' => 18590,
        'S13' => 23000,
        'S14' => 23000,
        'S15' => 24230,
    ],
    'S03' => [  // 音羽町
        'S04' => 7590,
        'S05' => 7590,
        'S06' => 7760,
        'S07' => 7760,
        'S08' => 10260,
        'S09' => 12400,
        'S10' => 14170,
        'S11' => 15910,
        'S12' => 18590,
        'S13' => 21270,
        'S14' => 23000,
        'S15' => 23000,
    ],
    'S04' => [  // 春日町
        'S05' => 7590,
        'S06' => 7590,
        'S07' => 7760,
        'S08' => 10260,
        'S09' => 12400,
        'S10' => 12400,
        'S11' => 14170,
        'S12' => 15910,
        'S13' => 21270,
        'S14' => 21270,
        'S15' => 23000,
    ],
    'S05' => [  // 柚木
        'S06' => 7590,
        'S07' => 7590,
        'S08' => 7760,
        'S09' => 10260,
        'S10' => 12400,
        'S11' => 14170,
        'S12' => 15910,
        'S13' => 18590,
        'S14' => 21270,
        'S15' => 21270,
    ],
    'S06' => [  // 長沼
        'S07' => 7590,
        'S08' => 7590,
        'S09' => 7760,
        'S10' => 10260,
        'S11' => 12400,
        'S12' => 14170,
        'S13' => 15910,
        'S14' => 18590,
        'S15' => 18590,
    ],
    'S07' => [  // 古庄
        'S08' => 7590,
        'S09' => 7590,
        'S10' => 7760,
        'S11' => 10260,
        'S12' => 12400,
        'S13' => 15910,
        'S14' => 15910,
        'S15' => 18590,
    ],
    'S08' => [  // 県総合運動場
        'S09' => 7590,
        'S10' => 7590,
        'S11' => 7760,
        'S12' => 10260,
        'S13' => 14170,
        'S14' => 14170,
        'S15' => 15910,
    ],
    'S09' => [  // 県立美術館前
        'S10' => 7590,
        'S11' => 7590,
        'S12' => 7760,
        'S13' => 12400,
        'S14' => 12400,
        'S15' => 14170,
    ],
    'S10' => [  // 草薙
        'S11' => 7590,
        'S12' => 7590,
        'S13' => 10260,
        'S14' => 10260,
        'S15' => 12400,
    ],
    'S11' => [  // 御門台
        'S12' => 7590,
        'S13' => 7760,
        'S14' => 7760,
        'S15' => 10260,
    ],
    'S12' => [  // 狐ケ崎
        'S13' => 7590,
        'S14' => 7590,
        'S15' => 7760,
    ],
    'S13' => [  // 桜橋
        'S14' => 7590,
        'S15' => 7590,
    ],
    'S14' => [  // 入江岡
        'S15' => 7590,
    ],
    'S15' => [  // 新清水
    ],
];

// 通学定期(6ヶ月)の運賃テーブル
$student6_fare = [
    'S01' => [  // 新静岡
        'S02' => 14370,
        'S03' => 14370,
        'S04' => 14370,
        'S05' => 14370,
        'S06' => 19440,
        'S07' => 19440,
        'S08' => 23490,
        'S09' => 26840,
        'S10' => 28840,
        'S11' => 35210,
        'S12' => 40290,
        'S13' => 43580,
        'S14' => 45900,
        'S15' => 45900,
    ],
    'S02' => [  // 日吉町
        'S03' => 14370,
        'S04' => 14370,
        'S05' => 14370,
        'S06' => 14690,
        'S07' => 19440,
        'S08' => 23490,
        'S09' => 26840,
        'S10' => 26840,
        'S11' => 30140,
        'S12' => 35210,
        'S13' => 43580,
        'S14' => 43580,
        'S15' => 45900,
    ],
    'S03' => [  // 音羽町
        'S04' => 14370,
        'S05' => 14370,
        'S06' => 14690,
        'S07' => 14690,
        'S08' => 19440,
        'S09' => 23490,
        'S10' => 26840,
        'S11' => 30140,
        'S12' => 35210,
        'S13' => 40290,
        'S14' => 43580,
        'S15' => 43580,
    ],
    'S04' => [  // 春日町
        'S05' => 14370,
        'S06' => 14370,
        'S07' => 14690,
        'S08' => 19440,
        'S09' => 23490,
        'S10' => 23490,
        'S11' => 26840,
        'S12' => 30140,
        'S13' => 40290,
        'S14' => 40290,
        'S15' => 43580,
    ],
    'S05' => [  // 柚木
        'S06' => 14370,
        'S07' => 14370,
        'S08' => 14690,
        'S09' => 19440,
        'S10' => 23490,
        'S11' => 26840,
        'S12' => 30140,
        'S13' => 35210,
        'S14' => 40290,
        'S15' => 40290,
    ],
    'S06' => [  // 長沼
        'S07' => 14370,
        'S08' => 14370,
        'S09' => 14690,
        'S10' => 19440,
        'S11' => 23490,
        'S12' => 26840,
        'S13' => 30140,
        'S14' => 35210,
        'S15' => 35210,
    ],
    'S07' => [  // 古庄
        'S08' => 14370,
        'S09' => 14370,
        'S10' => 14690,
        'S11' => 19440,
        'S12' => 23490,
        'S13' => 30140,
        'S14' => 30140,
        'S15' => 35210,
    ],
    'S08' => [  // 県総合運動場
        'S09' => 14370,
        'S10' => 14370,
        'S11' => 14690,
        'S12' => 19440,
        'S13' => 26840,
        'S14' => 26840,
        'S15' => 30140,
    ],
    'S09' => [  // 県立美術館前
        'S10' => 14370,
        'S11' => 14370,
        'S12' => 14690,
        'S13' => 23490,
        'S14' => 23490,
        'S15' => 26840,
    ],
    'S10' => [  // 草薙
        'S11' => 14370,
        'S12' => 14370,
        'S13' => 19440,
        'S14' => 19440,
        'S15' => 23490,
    ],
    'S11' => [  // 御門台
        'S12' => 14370,
        'S13' => 14690,
        'S14' => 14690,
        'S15' => 19440,
    ],
    'S12' => [  // 狐ケ崎
        'S13' => 14370,
        'S14' => 14370,
        'S15' => 14690,
    ],
    'S13' => [  // 桜橋
        'S14' => 14370,
        'S15' => 14370,
    ],
    'S14' => [  // 入江岡
        'S15' => 14370,
    ],
    'S15' => [  // 新清水
    ],
];

