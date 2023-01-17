# Achilles WordPress Block Theme

## General Notes

### Templates versus Template Parts

Templates basically replace the files like index.php, single.php, single-news.php, etc. Templates that show posts and content.

Template parts are reusable pieces of content used in one or more templates, like Header, Footer or a CTA banner.

### Theme.json

Settings is used to declare all settings, including some general settings for your styles (which makes it somewhat confusing). For example, you specify the available fonts in settings, but you apply those fonts in the Global Style editor or in styles in theme.json. Same for colors, you define the pallettes in settings, and apply colors in styles or the Global Style tab (only available in the Site Editor).

### Workflow

The best flow is starting with your theme.json file, adding all the settings and global styles, and then building your templates and template parts.

### Layouts

The most important blocks for building layouts are the core blocks Group, Row and Column. These are important to learn. Reference: https://developer.wordpress.org/block-editor/reference-guides/core-blocks/

### Global Styles vs theme.json

When you edit Global Styles the changes are saved to a custom post with post type wp_global_styles. This will save a JSON object with all updated values. If you change something in theme.json, but there's also a changed value in Global Styles, that will be used. You can reset your Global Styles from the menu in the Site Editor.

## Some references I have to read later

- https://css-tricks.com/fluid-typography-wordpress-block-theme
