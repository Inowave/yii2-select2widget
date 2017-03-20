<?php
    namespace inowave\select2widget;
	
	use yii\base\Widget;
	use yii\helpers\Inflector;
	use yii\base\InvalidConfigException;

    class select2 extends Widget {
    	public function init() {
    		parent::init();
			$this->view = $this->getView();
    	}
    	
		public function run() {
			select2Asset::register($this->view);
		}
    } 
?>