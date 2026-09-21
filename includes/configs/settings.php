<?php
/**
 * Settings configuration.
 *
 * @package HivePress\Configs
 */

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
						'description' => esc_html__( 'Please enter the license keys for purchased themes and extensions, each key on a new line.', 'ad-hp-updates' ),
						'type'        => 'textarea',
						'max_length'  => 2048,
						'_order'      => 10,
					],
				],
			],
		],
	],
];
