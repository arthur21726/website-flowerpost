<?php add_theme_support('post-thumbnail');

add_theme_support('menus');

 add_theme_support( 'post-thumbnails' );

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

// Add support for Block Styles.
add_theme_support( 'wp-block-styles' );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );

// Add support for editor styles.
add_theme_support( 'editor-styles' );

// Enqueue editor styles.
add_editor_style( 'style-editor.css' );

//テーマのセットアップ
// titleタグをhead内に生成する
add_theme_support( 'title-tag' );
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );



function create_post_type() {
    $Supports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
        'title',  // 記事タイトル
        'editor',  // 記事本文
        'thumbnail',  // アイキャッチ画像
        'revisions'  // リビジョン
      ];
        register_post_type( ‘news’, // 投稿タイプ名の定義
            array(
                'label' => 'news',
                'public' => true,  // 投稿タイプをパブリックにするか否か
                'has_archive' => true,  // アーカイブを有効にするか否か
                'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
                'supports' => Supports  // 投稿画面でどのmoduleを使うか的な設定
            )
            );
            register_post_type( ‘products’, // 投稿タイプ名の定義
            array(
                'label' => 'products',
                'public' => true,  // 投稿タイプをパブリックにするか否か
                'has_archive' => true,  // アーカイブを有効にするか否か
                'menu_position' => 6,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
                'supports' => Supports  // 投稿画面でどのmoduleを使うか的な設定
            )
            );


}

// カスタム投稿タイプの追加（news）
add_action( ‘init’, ‘create_post_type’ );

function get_thumb_img($size = 'full') {
  
    $thumb_id = get_post_thumbnail_id();                         // アイキャッチ画像のIDを取得
    
    $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得
    
    $thumb_src = $thumb_img[0];    // 画像のurlだけ取得
    
    $thumb_alt = get_the_title();  //alt属性に入れるもの（記事のタイトルにしています）
  
    return '<img src="'.$thumb_src.'" alt="'.$thumb_alt.'">';
  }