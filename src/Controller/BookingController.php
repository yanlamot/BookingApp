<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class BookingController extends AppController
{
	function index(){
		$this->viewBuilder()->setLayout('booking');
	}
}
