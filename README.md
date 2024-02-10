# Custom WordPress Solutions by Алексей

## Описание
Этот репозиторий содержит пользовательские решения для WordPress, включая:
1. Custom Menu Walker - для создания навигационного меню с разметкой `<div><a></a></div>`.
2. Custom Post Type - для регистрации нового типа записи с публичным URL и таксономиями.

## Установка
1. Скопируйте файлы в папку вашей темы WordPress.
2. Добавьте `require get_template_directory() . '/custom-menu-walker.php';` и `require get_template_directory() . '/custom-post-type.php';` в файл `functions.php` вашей темы.

## Использование
- Для меню: Используйте класс `Custom_Div_Walker` при выводе `wp_nav_menu()`.
- Для нового типа записи и таксономии: Они будут автоматически зарегистрированы и доступны в админ-панели.

## Автор
Автор: Алексей, контакт для связи: https://t.me/kopaev
