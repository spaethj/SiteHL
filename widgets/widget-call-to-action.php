<?php
/**
 * Adds Foo_Widget widget.
 */
class Call_To_Action extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'cta',
			esc_html__( 'Call to action button', 'text_domain' ),
			array( 'description' => esc_html__( 'Generate red button with link', 'text_domain' ), )
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if (!empty( $instance['cta_title']) && !empty($instance['cta_link']) ) {
			echo $args['before_title'];
			echo '<a href="' . esc_html($instance['cta_link']) . '" title="' . $instance['cta_title'] . '">';
			echo apply_filters( 'widget_title', $instance['cta_title'] );
			echo '</a>';
			echo $args['after_title'];
		}
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['cta_title'] ) ? $instance['cta_title'] : esc_html__( '', 'text_domain' );
		$link = ! empty( $instance['cta_link'] ) ? $instance['cta_link'] : esc_html__( '', 'text_domain' );

		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'cta_title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cta_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cta_title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'cta_link' ) ); ?>"><?php esc_attr_e( 'Link:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cta_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cta_link' ) ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['cta_title'] = ( ! empty( $new_instance['cta_title'] ) ) ? strip_tags( $new_instance['cta_title'] ) : '';
		$instance['cta_link'] = ( ! empty( $new_instance['cta_link'] ) ) ? strip_tags( $new_instance['cta_link'] ) : '';

		return $instance;
	}

} // class Foo_Widget
