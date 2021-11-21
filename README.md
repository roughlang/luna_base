# luna base

Laravel8にwordpressとvue.jsを組み込んだ基本構造のリポジトリになります。ブログ機能的なものをLaravelでいちから作るのは面倒くさいのでwordpressを入れています。LaravelもをwordpressもREST APIの機能実装が可能なので、フロント側のエンジンはvue.jsを入れます。Larabelもwordpressも既存のテンプレート（larabalはtwig、wordpressはwordpressテンプレート）も使えるようにしておきます。

- sailでdocker環境を作成する

## sailでdocker環境を作成する

```
$ app
$ ./vendor/bin/sail up -d
```
以降は`docker-compose up -d`でも同様に起動できます。
[http://localhost:6700](http://localhost:6700)にアクセスしてください。


## phpmyadmin



