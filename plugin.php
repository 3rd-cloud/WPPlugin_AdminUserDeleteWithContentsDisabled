<?php
/*
Plugin Name: ユーザー削除の制限
Description: ユーザー削除時に「すべてのコンテンツを消去します。」を選択できなくすることで、誤って記事やメディアライブラリのファイルをまとめて削除する事故を防ぎます。
Author: Yuji Mikumo
Version: 1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'WPAdmin_User_Delete_Disabled' ) ) {
    class WPAdmin_User_Delete_Disabled {

        public function __construct() {
            global $pagenow;

            if ( is_admin() && 'users.php' === $pagenow && strpos( $_SERVER["REQUEST_URI"], 'action=delete' ) ) {
                add_action( 'after_setup_theme', array( $this, 'action_after_setup_theme' ), 10000 );
                add_action( 'shutdown', array( $this, 'action_shutdown' ), 10000 );
                add_action( 'admin_notices', array( $this, 'action_admin_notices' ), 10000 );
            }
        }

        public function action_after_setup_theme() {
            ob_start( function ( $buffer_html ) {
                $target_tag  = 'input type="radio" id="delete_option0" name="delete_option" value="delete"';
                $replace_tag = 'input type="radio" id="delete_option0" name="delete_option" value="delete_disabled" disabled';
                $buffer_html = str_replace( $target_tag, $replace_tag, $buffer_html );
                return $buffer_html;
            });
        }

        public function action_shutdown() {
            if ( ob_get_length() ) {
                ob_end_flush();
            }
        }

        public function action_admin_notices() {
            echo '<div class="updated"><p>プラグイン : ユーザー削除の制限 有効<br />「すべてのコンテンツを消去します。」 は選択できない設定に変更されています。</p></div>';
        }
    }
}

new WPAdmin_User_Delete_Disabled();
