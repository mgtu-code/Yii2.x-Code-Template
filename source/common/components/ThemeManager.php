<?php
namespace source\common\components;

use \yii\base\Component;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\base\Theme;

/**
 * Class ThemeManager
 * manager the view theme
 *
 * @property string $currentTheme
 * @property array $themeList
 */
class ThemeManager extends Component{

    /**
     * @var array the config of themes, keys is the theme name,values is the theme config(see \yii\base\Theme)
     */
    public $config = [];

    /**
     * @var string base theme class
     */
    public $themeClass = '\yii\base\Theme';

    /**
     * @var string default theme
     */
    public $defaultTheme = 'default';

    /**
     * @var string current theme name
     */
    private $_currentTheme = '';
    
    /**
     * init
     */
    public function init(){
        parent::init();
        if(!class_exists($this->themeClass) || !is_a(new $this->themeClass(), Theme::className())){
            throw new InvalidConfigException('themeClass must extends \yii\base\Theme');
        }
        if(!is_array($this->config)){
            throw new InvalidConfigException('config must be array');
        }
    }

    /**
     * @return array themeList
     */
    public function getThemeList(){
        return array_keys(is_array($this->config)?$this->config:[]);
    }

    /**
     * @param $themeName
     * @return bool
     */
    public function setCurrentTheme($themeName){
        if($this->_currentTheme == $themeName){
            return true;
        }
        if(isset($this->config[$themeName])) {
            $this->_currentTheme = $themeName;
            \Yii::$app->view->theme = new $this->themeClass($this->config[$themeName]);
            return true;
        }else if(isset($this->_themesList[$this->defaultTheme])){
            \Yii::$app->view->theme = new $this->themeClass($this->config[$this->defaultTheme]);
            return false;
        }
        return false;
    }

    /**
     * @return null|string
     */
    public function getCurrentTheme(){
        if(isset($this->_themesList[$this->_currentTheme])){
            return $this->_currentTheme;
        }else if(isset($this->_themesList[$this->defaultTheme])){
            return $this->defaultTheme;
        }
        return null;
    }
}