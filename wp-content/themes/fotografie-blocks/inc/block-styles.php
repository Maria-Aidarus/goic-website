<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Fotografie_Blocks
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function fotografie_blocks_register_block_styles() {

		//Wp Block Group Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'padding-0',
				'label' => esc_html__( 'No Padding', 'fotografie-blocks' ),
			)
		);

		//Wp Block Columns Gap Zero
		register_block_style(
			'core/columns',
			array(
				'name'  => 'have-gap-0',
				'label' => esc_html__( 'Gap Zero', 'fotografie-blocks' ),
			)
		);
	}
	add_action( 'init', 'fotografie_blocks_register_block_styles' );
}
