<?php
/**
 * Settings configuration.
 *
 * @package HivePress\Configs
 */

use HivePress\Helpers as hp;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'integrations' => [
		'sections' => [
			'alokhin_dev' => [
				'title'  => esc_html__( 'alokhinDev Store', 'ad-hp-updates' ),
				'_order' => 2000,

				'fields' => [
					'alokhin_dev_license_key' => [
						'label'       => esc_html__( 'License Keys', 'ad-hp-updates' ),
						/* translators: %s: terms URL. */
						'description' => sprintf( hp\sanitize_html( __( 'Please enter the license keys for purchased products, each key on a new line. All license keys associated with the <a href="%s" target="_blank">alokhinDev store</a> start with `AD_`.', 'ad-hp-updates' ) ), 'https://alokhin.dev/hivepress-products/' ),
						'type'        => 'textarea',
						'max_length'  => 2048,
						'_order'      => 10,
					],
				],
			],
		],
	],
];
