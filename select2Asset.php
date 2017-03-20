<?php
    namespace inowave\select2widget;
	
	use yii\web\AssetBundle;
	use yii\base\InvalidConfigException;

    class select2Asset extends AssetBundle {
		//public $sourcePath = '@vendor/inowave/select2widget/assets';
		public $sourcePath = __DIR__ . '/assets';
		
    	public $css = [
    		'css/select2.css'
    	];
    	
    	public $js = [
        	'js/select2.min.js',
        	'js/lang/select2_locale_ru.js'
    	];

		public $depends = [
			'yii\web\YiiAsset'
		];

    }
 ?>