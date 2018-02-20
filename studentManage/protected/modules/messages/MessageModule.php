<?php
/**
-------------------------
GNU GPL COPYRIGHT NOTICES
-------------------------
This file is part of Open-School.

Open-School is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Open-School is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Open-School.  If not, see <http://www.gnu.org/licenses/>.*/

/**
 * $Id$
 *
 * @author Open-School team <contact@Open-School.org>
 * @link http://www.Open-School.org/
 * @copyright Copyright &copy; 2009-2012 wiwo inc.
 * @Matthew George,@Rajith Ramachandran,@Arun Kumar,
 * @Anupama,@Laijesh V Kumar.
 * @license http://www.Open-School.org/
 */

class MessageModule extends CWebModule
{
	public $defaultController = 'inbox';

	public $userModel = 'User';
	public $userModelRelation = null;
	public $getNameMethod;
	public $getSuggestMethod;

	public $senderRelation;
	public $receiverRelation;

	public $dateFormat = 'Y-m-d H:i:s';

	public $inboxUrl = array("/message/inbox");

	public $viewPath = '/message/default';

	public function init()
	{
		if (!class_exists($this->userModel)) {
		    throw new Exception(MessageModule::t("Class {userModel} not defined", array('{userModel}' => $this->userModel)));
		}

		foreach (array('getNameMethod', 'getSuggestMethod') as $methodName) {
			if (!$this->$methodName) {
				throw new Exception(MessageModule::t("Property MessageModule::{methodName} not defined", array('{methodName}' => $methodName)));
			}

			if (!method_exists($this->userModel, $this->$methodName)) {
				throw new Exception(MessageModule::t("Method {userModel}::{methodName} not defined", array('{userModel}' => $this->userModel, '{methodName}' => $this->$methodName)));
			}
		}

		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'message.models.*',
			'message.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		
		if (Yii::app()->user->isGuest) {
			if (Yii::app()->user->loginUrl) {
				$controller->redirect($controller->createUrl(reset(Yii::app()->user->loginUrl)));
			} else {
				$controller->redirect($controller->createUrl('/'));
			}
		} else if (parent::beforeControllerAction($controller, $action)) {
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		} else {
			return false;
		}
	}

	public static function t($str='',$params=array(),$dic='message') {
		return Yii::t("MessageModule.".$dic, $str, $params);
	}

	public function getCountUnreadedMessages($userId) {
		return Message::model()->getCountUnreaded($userId);
	}

}
