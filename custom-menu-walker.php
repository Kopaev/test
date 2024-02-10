<?php
/**
 * Custom Menu Walker
 * Создает пользовательскую разметку для навигационного меню WordPress.
 * Разметка состоит из <div> контейнера и <a> элементов для каждого пункта меню.
 * Автор: Алексей, контакт для связи: https://t.me/kopaev
 */

class Custom_Div_Walker extends Walker_Nav_Menu {
	// Начало уровня меню. Открываем <div> вместо <ul>.
	function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<div class=\"menu\">\n";
	}

	// Конец уровня меню. Закрываем <div>.
	function end_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</div>\n";
	}

	// Начало элемента меню. Выводим <a> без <li>.
	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$url = esc_attr( $item->url );
		$title = esc_html( $item->title );
		$output .= "$indent<a href='$url'>$title</a>\n";
	}

	// Конец элемента меню. Здесь ничего не делаем, т.к. <a> самозакрывающийся.
	function end_el( &$output, $item, $depth = 0, $args = null ) {
		// Пустая функция, т.к. закрывать <a> не нужно.
	}
}
