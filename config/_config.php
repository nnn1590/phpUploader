<?php

/* 重要 ※必ずお読み下さい

このconfigフォルダ及び「データベースディレクトリ」のフォルダは
.htaccessなどを用いて必ず外部からのアクセスを遮断して下さい

*/

//config.php には実際のパスワードを使ったから代替
class config {
  function index() {
    return array(
      // 管理者用キー
      // DLキーとDELキーで使用するマスターキーです。
      'master'              => 'passw0rd!',

      // 各キーの暗号化用ハッシュ
      // ランダムな英数字の羅列を設定してください。
      'key'                 => 'xQsxHwu5AJ7wtjCWSQgzfbmZFdUViLGPnQKWKgP6JFsbCuthgrRXjQsrnmZhFh2D',

      // タイトル
      'title'               => 'アップローダー',

      // 保存ファイル数
      'save_max_files'      => 1000,

      // コメントの最大文字数
      'max_comment'         => 5000,

      // 1件あたりの最大ファイルサイズ(単位 : MByte)
      // php.iniのmemory_limit, post_max_size, upload_max_filesizeの値以下になるようにして下さい。
      // nginxを使用している場合はサーバー設定にclient_max_body_sizeをこの値で設定してください。
      'max_file_size'       => 5000,

      // アップロードできる拡張子
      'extension'           => array('config','conf','json','php','htm','html','hta','js','css','vbs','run','tar','gz','apk','7z','sh','bat','cmd','dll','exe','txt','zip','rar','lzh'),

      // データベースディレクトリ
      'db_directory'        => './db',

      // アップロードしたファイルを置くディレクトリ
      'data_directory'      => './data',

      // アップロードされたファイル名をハッシュ化して管理する (trueまたはfalse デフォルト: false)
      // サーバー内ではIDで格納されているファイル名をハッシュされた文字列で格納します。
      // ハッシュに使用するsaltは「key」で指定した値を使用します。
      // セキュリティを向上したいときにお使いください。
      'encrypt_filename'    => false
    );
  }
}
