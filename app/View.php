<?php


namespace WPLMixTheme;


class View {


	public static $view_dir = '';


	/**
	 * Render View Template With Data
	 *
	 * Locates a view template and includes it within the same scope as a data object/array. This makes it possible to
	 * access raw data in the template.
	 *
	 * Note: Any data passed into this function will be casted as an array and then as an object. The final data available
	 * within a template is in the form of an object with the variable name $data.
	 *
	 * e.g.
	 *
	 *      array('name' => 'Bob', 'age' => 42)
	 *
	 * Will be converted to an object to be used as;
	 *
	 *      $data->name
	 *      $data->age
	 *
	 * @param string|null $name A named variation for the template. This is in the form {$name}.php. Can include directories, where necessary.
	 * @param object|array $data An associative array or object to use inside the template.
	 * @param string $suffix The file suffix.
	 *
	 * @return  string
	 */
	public static function prepare( $name, $data = [], $suffix = '.php' ) {

		$markup = '';
		$path = self::get_full_path( $name . $suffix );

		if ( $t = self::view_template_exists( $path ) ) {
			$data = self::prepare_data( $data );
			ob_start();
			include $path;
			$markup = ob_get_clean();
		}

		return $markup;
	}


	/**
	 * Use this to echo out templates
	 *
	 * @param $name
	 * @param array $data
	 * @param string $suffix
	 */
	public static function render( $name, $data = [], $suffix = '.php' ) {
		echo self::prepare( $name, $data, $suffix );
	}


	/**
	 * Casts data to an object for use int the template
	 *
	 * @param $data
	 *
	 * @return object
	 */
	private static function prepare_data( $data ) {

		// if data is not already an object, cast as object
		if ( ! is_object( $data ) ) {
			$data = (object) (array) $data;
		}

		return $data;
	}


	/**
	 * Making sure the template exists
	 *
	 * @param $name
	 *
	 * @return bool
	 */
	private static function view_template_exists( $name ) {
		return file_exists( $name );
	}


	/**
	 * Pieces together the full path to the file
	 *
	 * @param $name
	 *
	 * @return string
	 */
	private static function get_full_path( $name ) {
		return trailingslashit( self::$view_dir ) . ltrim( $name, '/' );
	}


}