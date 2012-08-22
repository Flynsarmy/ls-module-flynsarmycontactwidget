<?

	class FlynsarmyContactWidget_SimpleContactWidget extends Core_Configuration_Model
	{
		protected function build_form()
		{
			$this->add_field('show_phone', 'Show Phone field?', 'full', db_bool);
			$this->add_field('success_message', 'Success Message', 'full', db_varchar)->comment("A message to display on successful submit.");
			$this->add_field('redirect_url', 'Redirection URL', 'full', db_varchar)->comment("Redirect to given URL on submit. eg http://yoursite.com/contact/success")->validation()->required();
		}
	}