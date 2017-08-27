<?php
// register sidebar for header of the pages.
function header_sidebar() {
	register_sidebar( array(
		'name' => esc_html( 'Sidebar Header' ),
		'id' => 'sidebar-header',
		'description' => esc_html__( 'Use this widget area to display widgets sidebar at the right side of the logo.' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
	));
}
