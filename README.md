# WordPress Plugin : Admin User Delete With Contents Disabled

WordPress Plugin: ユーザー削除の制限

このプラグインを有効にすると、ユーザー削除時に「すべてのコンテンツを消去します。」を選択できなくなります。  
削除されるユーザー所有の記事やコンテンツを必ず別のユーザーに紐づけ直すことを強制させ、コンテンツ消失事故を未然に防ぎます。

WordPress 管理画面でユーザー削除時に「すべてのコンテンツを消去します。」を選択すると、削除されるユーザー所有のコンテンツ（投稿や固定ページ、メディアライブラリなど）も一緒に削除されます。  
この操作を知らないユーザーが誤った操作を管理画面から行い、記事やメディアライブラリの添付ファイルをまとめて削除されることが想定されます。  
特にメディアライブラリの添付ファイルは、完全に消失し復旧できなくなる可能性が非常に高いです。  
WordPress の初期設定ではメディアライブラリのゴミ箱機能が OFF であり、削除と同時に管理レコードも添付ファイルも物理的に削除されてしまうためです。  
また、メディアライブラリのゴミ箱機能を ON にすると、記事のような別の大きな問題が発生してしまうためオススメいたしません。

WordPress メディアライブラリのゴミ箱機能には大きな罠がある  
https://qiita.com/mainy/items/2a525e9b184967e20264

上記は私の記事です。

## WordPress.org 公式プラグインディレクトリ

Admin User Delete With Contents Disabled  
https://wordpress.org/plugins/admin-user-delete-with-contents-disabled/

無料で公開中です。
