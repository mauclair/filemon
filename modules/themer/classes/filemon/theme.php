<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Themer jest rozszerzeniem klasy View frameworka Kohana.
 *
 * @package    Filemon/Themer
 * @category   Base
 * @author     RIUNET
 * @copyright  (c) 2011 RIUNET
 * @license    http://kohanaframework.org/license
 */
class Filemon_Theme extends View {

	protected $_theme;

	/**
	 * Ustanawia plik widoku. Widok jest tworzony przy pomocy [Theme::factory].
	 * 
	 *     $view = new Theme($file);
	 *
	 * @param   string  view filename
	 * @param   array   array of values
	 * @return  void
	 * @uses    Theme::set_filename
	 */

	public function __construct($file = NULL, array $data = NULL)
	{

        $dirs = explode('.', $file);
        $count = count($dirs);

        if($count === 1){

            	$file = $file;	
            	$this->_theme = Session::instance()->get('theme');

		if(empty($this->_theme)){
		
		$this->_theme = Kohana::$config->load('kirocms')->theme;
		Session::instance()->set('theme',$this->_theme);

		}

        }
        else{
            list($theme, $file) = $dirs;
	            if (is_dir(MEDIAPATH.'themes'.DIRECTORY_SEPARATOR.$theme))
	            {
		            $this->_theme = $theme;
	            }
	            else{
		           $this->_file = MEDIAPATH.'themes'.DIRECTORY_SEPARATOR.'emptytheme'.EXT;
	            }
        }

		if ($file !== NULL)
		{
			$this->set_filename($file);
		}

		if ( $data !== NULL)
		{

			$this->_data = $data + $this->_data;

		}

	}

	/**
	 * Zwraca nowy obiekt widoku. .
	 *
	 *     $view = Theme::factory($file);
	 *
	 * @param   string  view filename
	 * @param   array   array of values
	 * @return  Theme
	 */

	public static function factory($file = NULL, array $data = NULL)
	{
		return new Theme($file, $data);
	}

	/**
	 * Znajduje i pobiera plik widoku.
	 *
	 *     $view->set_filename($file);
	 *
	 * @param   string  view filename
	 * @return  Theme

	 */

	public function set_filename($file)
	{

	if (is_file(MEDIAPATH.'themes'.DIRECTORY_SEPARATOR.$this->_theme.DIRECTORY_SEPARATOR.$file.EXT))
	{
		$found = MEDIAPATH.'themes'.DIRECTORY_SEPARATOR.$this->_theme.DIRECTORY_SEPARATOR.$file.EXT;
	}
	else{
		$found = MEDIAPATH.'themes'.DIRECTORY_SEPARATOR.'emptyview'.EXT;
	}

        if(empty($this->_file)){ $this->_file = $found; }

		return $this;
	}
}

