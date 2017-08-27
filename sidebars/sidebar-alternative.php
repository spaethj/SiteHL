<?php
// register alternative sidebar for specific pages.
function alt_sidebar() {
	register_sidebar( array(
		'name' => esc_html( 'Sidebar "Groupes de travail"' ),
		'id' => 'sidebar-alternative',
		'description' => esc_html__( 'Use this widget area to display widgets sidebar of pages under "Groupes de Travail" element.' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
	));
}
