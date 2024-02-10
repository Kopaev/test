<?php
/**
 * Custom Post Type Registration
 * Регистрирует новый тип записи с публичным URL и возможностью создания таксономий.
 * Также ограничивает поля в админке только заголовком и контентом.
 * Автор: Алексей, контакт для связи: https://t.me/kopaev
 */

function register_custom_post_type() {
	register_post_type('custom_type', array(
		'labels' => array(
			'name' => 'Custom Types',
			'singular_name' => 'Custom Type'
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor'),
		'rewrite' => array('slug' => 'custom-types'),
	));

	// Регистрация таксономии для custom_type
	register_taxonomy('custom_taxonomy', 'custom_type', array(
		'label' => 'Custom Taxonomy',
		'hierarchical' => true,
	));
}

add_action('init', 'register_custom_post_type');
