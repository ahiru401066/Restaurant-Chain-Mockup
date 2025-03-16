# Restaurant-Chain-Mockup
2025.03 オブジェクト指向プログラミングでの構築

ファイル構成

#restaurant-chain-system
##asset
###css
###js
##Models

`
/restaurant-chain-system
├── /assets
│   ├── /css
│   │   └── style.css            
│   └── /js
│       └── script.js            
├── /Models
│   ├── Employee.php             
│   ├── Company.php              
│   ├── RestaurantLocation.php   
│   ├── RestaurantChain.php      
│   └── User.php                 
├── /helpers
│   └── RandomGenerator.php      # 偽データ生成用のRandomGeneratorクラス
├── /templates
│   └── layout.php               # ページ全体のレイアウト（ヘッダー、フッター、共通部分）
├── /public
│   └── index.php                # アプリケーションのエントリーポイント
└── /vendor
    └── /autoload.php            # Composerの自動読み込み設定ファイル（composer install後に生成される）
`