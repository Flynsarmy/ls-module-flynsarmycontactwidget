<?php
	if ( class_exists('FlynsarmyWidgets') )
		FlynsarmyWidgets::register_widget(array(
			'name' => 'Simple Contact Form',
			'description' => "Provides a simple contact form. Requires LemonStands 'Contact' module",
			'class' => 'FlynsarmyContactWidget_Widget_SimpleContact',
		));
?>