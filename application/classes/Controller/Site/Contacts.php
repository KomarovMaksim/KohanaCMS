<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 09.04.13
 * Time: 13:17
  */
class Controller_Site_Contacts extends Controller_Site {
	public $template = 'site/contacts';

	public function action_index(){
		if (isset($_POST['message'])){
			$data = Arr::extract($_POST, array('name', 'email', 'company', 'dolj', 'phone' , 'pochta', 'sub', 'message'));

			$feedback = ORM::factory('Feedback');
			$feedback->values($data);
			try{
				$feedback->save();
				// add send mail here
					$message = 'Имя '.$feedback->name.'. Телефон для связи '.$feedback->phone.'. E-mail: '.$feedback->email.'. Компания '.$feedback->company.'. Должность: '.$feedback->dolj.'. Адрес почтовый: '.$feedback->pochta.'. Тема письма: '.$feedback->sub.'. Текстовая форма: '.$feedback->message. ". \n";
				$headers = 'MIME-Version: 1.0' . "\r\n" .
			'Content-Type: text/plain; charset=UTF8; format=flowed' . "\r\n" .
			'Content-Transfer-Encoding: 8bit' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			$option = ORM::factory('Settings')->where('key', '=', 'reminder.email')->find();
     	$reminder = $option->loaded() ? $option->value : '';
				      		mail($reminder,'Обратная связь №'.$feedback->id, $message, $headers);

				$this->redirect('contacts/success');
			} catch (Kohana_ORM_Validation_Exception $e){
				$this->template->errors = $e->errors('validation');
			}
			$this->template->data = $data;
		}
		$this->template->article = ORM::factory('Page')->where('url', '=', 'contacts')->find();
	}

	public function action_success(){
		$this->template->set_filename('site/article');

		$this->template->article = array(
			'title' => 'Спасибо!',
			'text' => '<p>Ваше сообщение отправлено! Если оно требует ответа - мы свяжемся с Вами в ближайшее время.</p>'
		);
	}
}
