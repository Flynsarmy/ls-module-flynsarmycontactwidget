<?php
	class FlynsarmyContactWidget_Widget_SimpleContact extends FlynsarmyWidgets_WidgetBase
	{
		/*
		 * The settings array isn't required, but it can be used for default settings for options
		 */
		public $settings = array(
			'show_phone' => false,
			'redirect_url' => '',
			'success_message' => 'Thank you! We will get back to you shortly.',
		);

		/*
		 * Move any fields I want to save into $this->settings. Also a good place to do validation
		 */
		public function update( $context = null )
		{
			if ( !post_array_item('FlynsarmyContactWidget_SimpleContactWidget', 'redirect_url') )
				throw new Phpr_ApplicationException('You must enter a redirect URL.');

			$this->settings = array_merge(
				$this->settings,
				post('FlynsarmyContactWidget_SimpleContactWidget')
			);
		}

		public function render_backend()
		{
			echo '<div class="form600">';
			$model = new FlynsarmyContactWidget_SimpleContactWidget();
			$model->define_form_fields();
			$model->fill_external($this->settings);
			FlynsarmyWidgets_ModelHelper::render_model( $model );
			echo '</div>';
		}

		public function render_frontend($options = array())
		{
			FlynsarmyWidgets_RenderHelper::render_file(
				dirname(__FILE__).'/../partials/widgets/frontend/simplecontact.php',
				$this->settings
			);
		}
	}
?>