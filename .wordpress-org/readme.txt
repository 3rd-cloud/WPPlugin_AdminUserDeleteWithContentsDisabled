=== Admin User Delete With Contents Disabled ===
Contributors: mikumo
Donate link:
Tags: admin, user
Requires at least: 5.0
Tested up to: 5.9.1
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Requires PHP: 5.6

ユーザー削除時に「すべてのコンテンツを消去します。」を選択できなくします。

== Description ==

このプラグインを有効にすると、ユーザー削除時に「すべてのコンテンツを消去します。」を選択できなくなります。
削除されるユーザー所有の記事やコンテンツを必ず別のユーザーに紐づけ直すことを強制させ、コンテンツ消失事故を未然に防ぎます。

WordPress 管理画面でユーザー削除時に「すべてのコンテンツを消去します。」を選択すると、削除されるユーザー所有のコンテンツ（投稿や固定ページ、メディアライブラリなど）も一緒に削除されます。
この仕様を知らないユーザーが誤った操作を管理画面から行い、意図せずに記事やメディアライブラリの添付ファイルをまとめて削除してしまうミスが想定されます。
特にメディアライブラリの添付ファイルは、メディアライブラリのゴミ箱機能が OFF である関係もあり、完全に消失し復旧できなくなる可能性が非常に高いです。

== Installation ==

1. From the WP admin panel, click “Plugins” -> “Add new”.
2. In the browser input box, type “Admin User Delete With Contents Disabled”.
3. Select the “Admin User Delete With Contents Disabled” plugin and click “Install”.
4. Activate the plugin.

OR…

1. Download the plugin from this page.
2. Save the .zip file to a location on your computer.
3. Open the WP admin panel, and click “Plugins” -> “Add new”.
4. Click “upload”.. then browse to the .zip file downloaded from this page.
5. Click “Install”.. and then “Activate plugin”.

== Frequently asked questions ==

Q. オプション設定はありますか?

A. ありません。プラグインを有効にするだけでOKです。

Q. WordPress のメディアライブラリのゴミ箱機能を ON にする方法ではなぜダメなんですか？

A. メディアライブラリのゴミ箱機能を ON にすると、記事のような別の大きなリスクが発生してしまうためオススメいたしません。
https://qiita.com/mainy/items/2a525e9b184967e20264

Q. ユーザー削除時に「すべてのコンテンツを消去します。」を一時的に選択したい場合はどうすればよいですか？

A. 一時的にプラグインを無効にしてください。作業後はプラグインを再度有効化することを忘れないでください。

== Screenshots ==

1. プラグイン有効時のユーザー削除画面
2. "Delete Users" page when plugin is enabled

== Changelog ==

1.1
Language support for English and Japanese.

1.0
Initial working version.

== Upgrade Notice ==

ありません。
