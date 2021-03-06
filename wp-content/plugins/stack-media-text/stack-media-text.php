<?php
/**
 * Plugin Name:       重ね合わせ(画像/説明)
 * Description:       画像と背景付き説明が重なったスタイルを表示します。
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       stack-media-text
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/writing-your-first-block-type/
 */
function create_block_stack_media_text_block_init() {
	register_block_type( __DIR__ );
}
add_action( 'init', 'create_block_stack_media_text_block_init' );
