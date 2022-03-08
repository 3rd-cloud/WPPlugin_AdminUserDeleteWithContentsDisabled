<?php
/*
Plugin Name: Admin User Delete With Contents Disabled
Plugin URI: https://github.com/3rd-cloud/WPPlugin_AdminUserDeleteWithContentsDisabled
Description: ユーザー削除時に「すべてのコンテンツを消去します。」を選択できなくすることで、誤って記事やメディアライブラリのファイルをまとめて削除する事故を防ぎます。
Author: Yuji Mikumo
Author URI: https://github.com/3rd-cloud/
Version: 1.0
License: GPL2
*/
/*
Admin User Delete With Contents Disabled is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Admin User Delete With Contents Disabled is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Admin User Delete With Contents Disabled. If not, see https://github.com/3rd-cloud/WPPlugin_AdminUserDeleteWithContentsDisabled/blob/main/LICENSE.
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
