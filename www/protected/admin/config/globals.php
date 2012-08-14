<?php

/**
 * This is the shortcut to DIRECTORY_SEPARATOR
 */
defined('DS') or define('DS', DIRECTORY_SEPARATOR);

/**
 * This is the shortcut to Yii::app()
 */
function app()
{
	return Yii::app();
}

/**
 * This is the shortcut to Yii::app()->clientScript
 */
function cs()
{
	// You could also call the client script instance via Yii::app()->clientScript
	// But this is faster
	return Yii::app()->getClientScript();
}

/**
 * The shortcut to add css file
 * @param type $css string or array()
 */
function add_css($files)
{
	$files = (array) $files;
	foreach ($files as $f)
	{
		cs()->registerCssFile($f);
	}
}

/**
 * The shortcut to add JavaScript file
 * @param type $ string or array()
 */
function add_js($files)
{
	$files = (array) $files;
	foreach ($files as $f)
	{
		cs()->registerScriptFile($f);
	}
}

function add_js_block($id, $code, $position)
{
	cs()->registerScript($id, $code, $position);
}

/**
 * This is the shortcut to Yii::app()->user.
 */
function user()
{
	return Yii::app()->getUser();
}

function isLogin()
{
	return user()->data()->id;
}

function redirect($url)
{
	CController::redirect(url($url));
}



/**
 * This is the shortcut to Yii::app()->createUrl()
 */
function url($route, $params=array(), $ampersand='&')
{
	return Yii::app()->createUrl($route, $params, $ampersand);
}

/**
 * This is the shortcut to CHtml::encode
 */
function h($text)
{
	return htmlspecialchars($text, ENT_QUOTES, Yii::app()->charset);
}

/**
 * This is the shortcut to CHtml::link()
 */
function l($text, $url = '#', $htmlOptions = array())
{
	if(!strpos($url, '.php')) {
		$url = 'index.php?r='.$url;
	}
	return CHtml::link($text, $url, $htmlOptions);
}

/**
 * This is the shortcut to Yii::t() with default category = 'stay'
 */
function t($message, $category = 'stay', $params = array(), $source = null, $language = null)
{
	return Yii::t($category, $message, $params, $source, $language);
}

/**
 * This is the shortcut to Yii::app()->request->baseUrl
 * If the parameter is given, it will be returned and prefixed with the app baseUrl.
 */
function bu($url=null)
{
	static $baseUrl;
	if ($baseUrl === null)
		$baseUrl = Yii::app()->getRequest()->getBaseUrl();
	$return = $url === null ? $baseUrl : $baseUrl . '/' . ltrim($url, '/');
	if($return == '') {
		$return = '/';
	}
	return $return;
}

/**
 * Returns the named application parameter.
 * This is the shortcut to Yii::app()->params[$name].
 */
function param($name)
{
	return Yii::app()->params[$name];
}

function sess($key = null, $value = null)
{
	if (!empty($key) && !empty($value))
	{
		return Yii::app()->session[$key] = $value;
	} elseif (!empty($key))
	{
		return Yii::app()->session[$key];
	} else
	{
		return Yii::app()->session;
	}
}

function getSessArr()
{
	return sess()->toArray();
}

function getSessId()
{
	return sess()->sessionID;
}

function regenSessId()
{
	return sess()->regenerateId();
}

function printSess()
{
	echo '<pre>';
	foreach (getSessArr() as $key => $value)
	{
		echo '  ' . $key . ' -> ' . $value . '<br/>';
	}
	echo '</pre>';
}

function removeSess($key)
{
	return sess()->remove($key);
}

function destroySess()
{
	return sess()->destroy();
}

/**
 * dump variable
 * @param type $target
 * @return type 
 */
function dump($target, $hide = false)
{
	if (!$hide)
		return CVarDumper::dump($target, 10, true);
	return '<!-- ' . CVarDumper::dump($target, 10, true) . ' -->';
}

function dump_exit($target)
{
	dump($target);
	exit;
}

/**
 * shortcut of the CHtml::image($src);
 * @param type $src
 * @return type 
 */
function img($src, $alt=null, $args=array())
{
	if (strpos($src, 'http://') === false)
	{
		if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $src) || is_dir($_SERVER['DOCUMENT_ROOT'] . $src))
		{
			return;
		}
	}
	return CHtml::image($src, $alt, $args);
}

if (!function_exists('social_button'))
{

	/**
	 * Get social buttons
	 */
	function social_button($type)
	{
		$output = '';
		switch ($type)
		{
			case 'sina_like':
				$output = '<iframe width="136" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" scrolling="no" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&width=136&height=24&uid=1680691397&style=2&btn=red&dpc=1"></iframe>';
				break;
			case 'qq_like':
				$output = '<iframe src="http://follow.v.t.qq.com/index.php?c=follow&a=quick&name=fuyinshibao&style=5&t=1334715176023&f=0" marginwidth="0" marginheight="0" allowtransparency="true" scrolling="auto" width="60" frameborder="0" height="24"></iframe>';
			default:
				break;
		}
		return $output;
	}

}