<?php


class PostHighlightsWidget extends WP_Widget {
	function PostHighlightsWidget() {
		$widget_ops = array( 'classname' => 'PostHighlights', 'description' => __( 'Adds Post Highlights to the sidebar', 'ph' ) );
		parent::WP_Widget( 'posthighlights', 'PostHighlights', $widget_ops );

	}

	function widget( $args, $instance ) {
		$this->postHighlights = new postHighlights();
		extract( $args );

		echo $before_widget;

		if ( $instance['title'] ) echo $before_title, $instance['title'], $after_title;

		$this->postHighlights->loadTheme( $instance['theme'] );
		$this->postHighlights->insert();

		echo $after_widget;

	}


	function form( $instance ) {
		$this->postHighlights = new postHighlights();
		$title = esc_attr( $instance['title'] );
		$this->postHighlights->loadTheme( $instance['theme'] );


?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                    <?php _e( 'Title:', 'ph' ); ?>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
                </label>

                <label for="<?php echo $this->get_field_id( 'theme' ); ?>">
                    <?php _e( 'Theme:', 'ph' ); ?>
                    <select class="widefat" id="<?php echo $this->get_field_id( 'theme' ); ?>" name="<?php echo $this->get_field_name( 'theme' ); ?>">
                        <?php
		$dir_handle = @opendir( $this->postHighlights->basepath . 'themes' );
		while ( $theme = readdir( $dir_handle ) ) {
			if ( substr( $theme, 0, 1 ) != '.' ) {
				echo "<option value='$theme'";
				if ( $theme == $this->postHighlights->theme ) echo ' selected';
				echo ">$theme</option>";
			}
		}
		closedir( $dir_handle );
?>

                    </select>
                </label>
            </p>

        <?php

	}

	function update( $new_instance, $old_instance ) {

		return $new_instance;
	}



}


function registerPostHighlightsWidget() {
	register_widget( "PostHighlightsWidget" );
}

add_action( 'widgets_init', 'registerPostHighlightsWidget' );
