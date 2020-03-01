# ToDoアプリの開発


composer create-project --prefer-dist laravel/laravel .

https://qiita.com/sano1202/items/6021856b70e4f8d3dc3d


php artisan make:auth

https://qiita.com/ucan-lab/items/bd0d6f6449602072cb87

https://github.com/YaCpotato/parepro

https://qiita.com/kanatatsu64/items/3f04d0116e22392efaca#%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%BF

# 作るやつ
TODOアプリ作ってslackと連携

- ログイン機能
- モデルの作成
    - ToDo
        - id(primary) autoincrement
        - state(0 or 1 or 2) 
        - title 
        - discription 
        - timestamp()
- seedデータの作成

$table->bigIncrements('id');	符号なしBIGINTを使用した自動増分ID（主キー）
$table->bigInteger('votes');	BIGINTカラム
$table->binary('data');	BLOBカラム
$table->boolean('confirmed');	BOOLEANカラム
////$table->char('name', 100);	オプションの文字長を指定するCHARカラム
$table->date('created_at');	DATEカラム
$table->dateTime('created_at');	DATETIMEカラム
$table->dateTimeTz('created_at');	タイムゾーン付きDATETIMEカラム
$table->decimal('amount', 8, 2);	有効（全体桁数）／小数点以下桁数指定のDECIMALカラム
$table->double('amount', 8, 2);	有効（全体桁数）／小数点以下桁数指定のDOUBLEカラム
$table->enum('level', ['easy', 'hard']);	ENUMカラム
$table->float('amount', 8, 2);	有効（全体桁数）／小数点以下桁数指定のFLOATカラム
$table->geometry('positions');	GEOMETRYカラム
$table->geometryCollection('positions');	GEOMETRYCOLLECTIONカラム
$table->increments('id');	符号なしINTを使用した自動増分ID（主キー）
$table->integer('votes');	INTEGERカラム
$table->ipAddress('visitor');	IPアドレスカラム
$table->json('options');	JSONフィールド
$table->jsonb('options');	JSONBフィールド
$table->lineString('positions');	LINESTRINGカラム
$table->longText('description');	LONGTEXTカラム
$table->macAddress('device');	MACアドレスカラム
$table->mediumIncrements('id');	符号なしMEDIUMINTを使用した自動増分ID（主キー）
$table->mediumInteger('votes');	MEDIUMINTカラム
$table->mediumText('description');	MEDIUMTEXTカラム
$table->morphs('taggable');	符号なしINTERGERのtaggable_idと文字列のtaggable_typeを追加
$table->multiLineString('positions');	MULTILINESTRINGカラム
$table->multiPoint('positions');	MULTIPOINTカラム
$table->multiPolygon('positions');	MULTIPOLYGONカラム
$table->nullableMorphs('taggable');	NULL値可能なmorphs()カラム
$table->nullableTimestamps();	timestamps()メソッドの別名
$table->point('position');	POINTカラム
$table->polygon('positions');	POLYGONカラム
$table->rememberToken();	VARCHAR(100)でNULL値可能なremember_tokenを追加
$table->smallIncrements('id');	符号なしSMALLINTを使用した自動増分ID（主キー）
$table->smallInteger('votes');	SMALLINTカラム
$table->softDeletes();	ソフトデリートのためにNULL値可能なdeleted_at TIMESTAMPカラム追加
$table->softDeletesTz();	ソフトデリートのためにNULL値可能なdeleted_atタイムゾーン付きTIMESTAMPカラム追加
$table->string('name', 100);	オプションの文字長を指定したVARCHARカラム
$table->text('description');	TEXTカラム
$table->time('sunrise');	TIMEカラム
$table->timeTz('sunrise');	タイムゾーン付きTIMEカラム
$table->timestamp('added_on');	TIMESTAMPカラム
$table->timestampTz('added_on');	タイムゾーン付きTIMESTAMPカラム
//////$table->timestamps();	NULL値可能なcreated_atとupdated_atカラム追加
$table->timestampsTz();	タイムゾーン付きのNULL値可能なcreated_atとupdated_atカラム追加
$table->tinyIncrements('id');	符号なしTINYINTを使用した自動増分ID（主キー）
$table->tinyInteger('votes');	TINYINTカラム
$table->unsignedBigInteger('votes');	符号なしBIGINTカラム
$table->unsignedDecimal('amount', 8, 2);	有効（全体桁数）／小数点以下桁数指定の符号なしDECIMALカラム
$table->unsignedInteger('votes');	符号なしINTカラム
$table->unsignedMediumInteger('votes');	符号なしMEDIUMINTカラム
$table->unsignedSmallInteger('votes');	符号なしSMALLINTカラム
$table->unsignedTinyInteger('votes');	符号なしTINYINTカラム
$table->uuid('id');	UUIDカラム
$table->year('birth_year');	YEARカラム
