# Laravel 入門 第3版 正誤表

## 1. Laravel を準備する

### 1-1 PHP フレームワークと Laravel

- p.6 PHP を用意する

  http://laravel.com/docs/12.x/installation の日本語訳サイトはこちら https://readouble.com/laravel/12.x/ja/installation.html

## 2. ルートとコントローラー

コードは https://github.com/shibamirai/laravelapp の各コミットを参照。

### 2-2 コントローラーの利用

- p.48 リスト 2-11

  **誤**：
  ```css
  h1 {
    font-size: 100pt;
    tex t-align: right;      <- 誤
    color: #eee;
    margin: -40px 0px -50px 0px;
  }
  </style>
  EOF;
  $body = '</head><body>';
  $end = '</body></head>';   <- 誤
  ```  
  **正**：
  ```css
  h1 {
    font-size: 100pt;
    text-align: right;       <- 正
    color: #eee;
    margin: -40px 0px -50px 0px;
  }
  </style>
  EOF;
  $body = '</head><body>';
  $end = '</body></html>';   <- 正
  ``

## 3. ビューとテンプレート

### 3-3 レイアウトの作成

- p.89 リスト 3-24

  **誤**：
  ```css
  .msg_title {
    margin: 10px 20px;
    text-color: #999;      <- 誤
    font-size: 16px;
    font-weight: bold;
  }
  ```  
  **正**：
  ```css
  .msg_title {
    margin: 10px 20px;
    color: #999;           <- 正
    font-size: 16px;
    font-weight: bold;
  }
  ```

## 4. 動的フロントエンドの作成

### 4-1 Livewire によるフロントエンド

ここからのコードは https://github.com/shibamirai/livewireapp を参照。

- p.99 Livewire コンポーネントのテンプレート

  コンポーネントに割り当てたパス /hello-component をブラウザで表示するとエラーとなるので、ブラウザから直接表示させない。
  
  > 新規でLivewireプロジェクトを作成するとユーザ認証機能が追加される。この状態でコンポーネントに割り当てたパス (/hello-component) をブラウザから直接指定すると、プロジェクトにあらかじめ用意されているレイアウトを使用して表示しようとする。ところがこのレイアウトはユーザがログインしている前提になっているため、ログインユーザ情報が取得できずにエラーとなる。

  > 既存のプロジェクトに Livewire をインストールした場合はコンポーネント用のレイアウトが用意されないため、レイアウトが見つからないというエラーとなる。

- p.99 Livewire コンポーネントを組み込む

  Livewire プロジェクトとして作成した livewireapp にはスターターキットを使っていない laravelapp より多数のファイルがインストールされているため、livewireapp ではなく  **laravelapp を利用する場合** に従って組み込むほうがシンプルで分かりやすい。

### 4-3 React の利用

ここからのコードは https://github.com/shibamirai/reactapp を参照。

- p.137 リスト4-36

  inputValue が number 型なのに string 型の e.target.value を渡しているため、setInputValue(e.target.value) が VSCode 上でエラーとなる。  
  `parseInt(e.target.value)` もしくは `+e.target.value` と明示的に型変換を行うよう修正する。

  **誤**：
  ```html
  <input
    type="number"
    value={ inputValue }
    onChange={ (e) => setInputValue(e.target.value) }      <- 誤
    placeholder="新しいメッセージを入力"
    style={{
      padding: '8px', fontSize: '16px', width: '300px'
    }}
  />
  ```
  **正**：
  ```html
  <input
    type="number"
    value={ inputValue }
    onChange={ (e) => setInputValue(+e.target.value) }     <- 正
    placeholder="新しいメッセージを入力"
    style={{
      padding: '8px', fontSize: '16px', width: '300px'
    }}
  />
  ```

## 5. アプリ全体の機能強化

ここからのコードは https://github.com/shibamirai/laravelapp を参照。

### 5-1 サービスの利用

- p.142

  **誤**： booメソッドtは、アプリケーションサービスへの・・・。  
  **正**： bootメソッドは、アプリケーションサービスへの・・・。

### 5-2 コンポーネントの利用

- p.157 リスト 5-16

  **誤**：
  ```html
  <x-package-message id={{ $id }}>
  ```
  **正**：
  ```html
  <x-package-message id="{{ $id }}">
  ```

### 5-5 バリデーションのカスタマイズ

- p.190 リスト 5-36

  リスト 5-36 は helloapp.blade.php ではなく index.blade.php。

- p.191 リスト 5-39

  **誤**：
  ```html
  <p style="font-size: 10pt;">{{ $message }}</span>
  ```  
  **正**：
  ```html
  <p style="font-size: 10pt;">{{ $message }}</p>
  ```

## 6. データベースの利用

### 6-1 データベースを準備する

- p.196 Adminer の画面

  Adminer を起動すると画面に下記エラーメッセージが表示される。

  > Deprecated: Min_DB::rootQuery(): Implicitly marking parameter $Cb as nullable is deprecated, the explicit nullable type must be used instead in C:\Program Files\Herd\resources\app.asar.unpacked\resources\valet\adminer\adminer.php on line 1086

  > Deprecated: Min_DB::query(): Implicitly marking parameter $Cb as nullable is deprecated, the explicit nullable type must be used instead in C:\Program Files\Herd\resources\app.asar.unpacked\resources\valet\adminer\adminer.php on line 1090

  このメッセージは画面を再読み込みすれば消える。  
  Adminer のバグなので公式の修正を待つか、メッセージ内で示されている adminer.php ファイルの `array$Cb=null` を自分で `array|null$Cb` に書き換えるとメッセージは出なくなる。

### 6-2 DB クラスの利用

- p.209 リスト 6-5

  **誤**：
  ```css
  th { background-color: #999; color: fff; padding: 5px 10px; }
  ```
  **正**：
  ```css
  th { background-color: #999; color: #fff; padding: 5px 10px; }
  ```

- p.213 リスト 6-7

  リスト 6-8 で button のスタイルを追加しているので、send ボタンは input ではなく button タグにするつもりだったと思われる。

  **誤**：
  ```html
  <div><input type="submit" value="send"></div>
  ```
  **正**：
  ```html
  <div><button type="submit">send</button></div>
  ```

- p.213 リスト 6-9

  リスト 6-9 に書かれている index と post の中身は間違っているので、ここに書かれているコードは無視して元のコードをそのまま残す。

## 7. Eloquent ORM

### 7-2 検索とスコープ

- p.265 ScopePerson クラスを作る

  ここでは手動で app/Scopes/ScopePerson.php を作ることになっているが、Scope クラスは artisan make:scope コマンドで作成することができる。

  ```
  > php artisan make:scope ScopePerson
  ```

  これを実行すると app/Models/Scopes フォルダが作成され、そこに ScopePerson.php が配置される。

  *※ namespace が App\Models\Scopes となるため、他のクラスで利用する場合は `use App\Models\Scopes\ScopePerson;` と追記すること*

### 7-4 モデルのリレーション

- p.282 マイグレーションの実行

  `php artisan migrate` を実行すると xxxx_create_people_table でエラーが発生する。

  これは、`6-4 マイグレーション` で作成したマイグレーションファイル (xxxx_create_people_table) を実行していないことが原因。（people テーブルは Adminer から直接作成していたため）

  xxxx_create_boards_table のマイグレーションを行うには、下記のいずれかを実行する。

  - `php artisan migrate --path /database/migrations/xxxx_create_boards_table.php`

    → boards テーブルのマイグレーションだけを実行する。この本を進めるにあたってはこれで十分だが、`php artisan migrate` でエラーが発生する状況は変わらない。

  - `php artisan migrate:fresh`
  
    → これまでのマイグレーション情報をリセットしてすべてのマイグレーションをやり直す。`php artisan migrate` でエラーは発生しなくなるが、people テーブルのデータもリセットされ、これまでに作ったユーザがなくなるので注意。

- p.295 Board モデルの修正

  修正後にアクセスするのは /person ではなく /board。図7-28 は /board にアクセスしたときの画面。

## 8. 本格開発のための機能

ここからのコードは https://github.com/shibamirai/laravelapp を参照。

### 8-2 ページネーション

- p.314 リスト 8-7

  **誤**：
  ```php
  /* DB利用の場合
  $items = DB::table('people')->simplePaginate(5)->orderBy($sort, 'asc');
  */
  ```
  **正**：
  ```php
  /* DB利用の場合
  $items = DB::table('people')->orderBy($sort, 'asc')->simplePaginate(5);
  */
  ```

### 8-3 ユーザー認証

ここからのコードは https://github.com/shibamirai/livewireapp を参照。

- p.324 ログイン／ログアウトのリンク

  p.99 `Livewire コンポーネントを組み込む` で 「**laravelapp を利用する場合**」 を選択した場合は、livewireapp に /hello のサンプルページは存在しないので views/hello/index.blade.php および HelloController は自分で追加する。

- p.335 ユーザーと管理者の権限を作る

  users テーブルにはすでにレコードが入っているので、本の通りに is_admin フィールドを追加すると既存レコードの is_admin には値が設定されないためエラーとなる。is_admin フィールドの NULL 欄にチェックをいれてから追加すること。

### 8-4 ユニットテスト

ここからのコードは https://github.com/shibamirai/laravelapp を参照。

## Appendix A. Laravel Cloud

※ Laravel Cloud のフリープランはアカウントが無料で作れるだけの従量課金制なので、無料でアプリを公開することはできない。アプリを起動するだけで料金が発生するので注意！

### A-1 Laravel Cloud と GitHub の基本

- p.362 Laravel アプリの公開

  **誤**：・.env に環境変数などが…(略)…いるか。デーtベース関連や公開 URL が正しく設定されているか、など。
  **正**：・.env に環境変数などが…(略)…いるか。データベース関連や公開 URL が正しく設定されているか、など。

- p.363 Laravel アプリの公開

  http://laravel.com/docs/12.x/deployment の日本語訳サイトはこちら https://readouble.com/laravel/12.x/ja/deployment.html

