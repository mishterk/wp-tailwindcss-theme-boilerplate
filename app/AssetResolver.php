<?php


namespace WPLMixTheme;


/**
 * Class AssetResolver
 *
 * This utility class resolves URIs to built assets in the /build directory of our theme. Built assets have a version
 * hash within their file name – each time the file changes, this hash will change which changes the file name.
 *
 * This class provides the functionality to resolve the file name using the generated manifest at
 * /build/mix-manifest.json without having to specify the version hash.
 *
 * @package WPLMixTheme
 */
class AssetResolver {


	/**
	 * @var array
	 */
	private static $manifest = [];


	/**
	 * @param $path
	 *
	 * @return string
	 */
	public static function resolve( $path ) {
		if ( $map = self::get_manifest() ) {

			$path = self::leading_slash_it( $path );

			if ( isset( $map[ $path ] ) ) {
				return get_stylesheet_directory_uri() . '/build' . self::leading_slash_it( $map[ $path ] );
			}
		}

		return '';
	}


	/**
	 * @return array|mixed|object
	 */
	private static function get_manifest() {
		if ( ! self::$manifest ) {
			$manifest = get_stylesheet_directory() . '/build/mix-manifest.json';

			if (
				$map = file_get_contents( $manifest ) and
				is_array( $map = json_decode( $map, true ) )
			) {
				self::$manifest = $map;
			}
		}

		return self::$manifest;
	}


	/**
	 * @param $string
	 *
	 * @return string
	 */
	private static function leading_slash_it( $string ) {
		return '/' . ltrim( $string, '/\\' );
	}


}