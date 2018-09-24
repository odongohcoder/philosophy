<?php
/**
 * Epsilon Dashboard Translations
 *
 * @package Epsilon Framework
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

class Epsilon_Dashboard_Translations {
	/**
	 * Returns an array of strings
	 *
	 * @return array
	 */
	public static function get_usual_strings() {
		return array(
			'select'                 => esc_html__( 'Select', 'philosophy' ),
			'import'                 => esc_html__( 'Import', 'philosophy' ),
			'cancel'                 => esc_html__( 'Cancel', 'philosophy' ),
			'selectImport'           => esc_html__( 'Select what you want to install', 'philosophy' ),
			'waitImport'             => esc_html__( 'Please wait while we’re installing!', 'philosophy' ),
			'contentImported'        => esc_html__( 'Content imported!', 'philosophy' ),
			'waiting'                => esc_html__( 'Waiting', 'philosophy' ),
			'installing'             => esc_html__( 'Installing', 'philosophy' ),
			'activating'             => esc_html__( 'Activating', 'philosophy' ),
			'skipping'               => esc_html__( 'Skipping', 'philosophy' ),
			'completePlugin'         => esc_html__( 'Installed and Activated', 'philosophy' ),
			'pluginsFinished'        => esc_html__( 'Plugins installed', 'philosophy' ),
			'noActionsLeft'          => esc_html__( 'Hooray! There are no required actions for you right now.', 'philosophy' ),
			'skipAction'             => esc_html__( 'Skip Action', 'philosophy' ),
			'activateOnly'           => esc_html__( 'Activate', 'philosophy' ),
			'installAndActivate'     => esc_html__( 'Install and Activate', 'philosophy' ),
			'recommended'            => esc_html__( 'Recommended', 'philosophy' ),
			'integration'            => esc_html__( 'Integration', 'philosophy' ),
			'version'                => esc_html__( 'Version: ', 'philosophy' ),
			'licenseKey'             => esc_html__( 'License Key', 'philosophy' ),
			'checkLicense'           => esc_html__( 'Check License', 'philosophy' ),
			'activateLicense'        => esc_html__( 'Activate License', 'philosophy' ),
			'deactivateLicense'      => esc_html__( 'Deactivate License', 'philosophy' ),
			'saveLicense'            => esc_html__( 'Save', 'philosophy' ),
			'changeLicense'          => esc_html__( 'Change License', 'philosophy' ),
			'expires'                => esc_html__( 'Expires: ', 'philosophy' ),
			'status'                 => esc_html__( 'License Status: ', 'philosophy' ),
			'installPlugins'         => esc_html__( 'Install Plugins', 'philosophy' ),
			'notNow'                 => esc_html__( 'Not right now!', 'philosophy' ),
			/**
			 * Uninstall feedback
			 */
			'sendData'               => esc_html__( 'Send data', 'philosophy' ),
			'closeModal'             => esc_html__( 'Close modal', 'philosophy' ),
			'uninstallFeedbackTitle' => esc_html__( 'Uninstall Feedback', 'philosophy' ),
		);
	}

	/**
	 * Returns an array of strings
	 *
	 * @return array
	 */
	public static function get_theme_array( $theme = array() ) {
		$arr = array(
			'logo'   => esc_url( get_template_directory_uri() . '/inc/philosophy-framework/epsilon-theme-dashboard/assets/images/colorlib-themes-logo.png' ),
			/* Translators: Dashboard Header Title. */
			'header' => sprintf( esc_html__( 'Welcome to %1$s - v', 'philosophy' ), esc_html( $theme['theme-name'] ) ) . esc_html( $theme['theme-version'] ),
			/* Translators: Dashboard Header Intro. */
			'intro'  => sprintf( esc_html__( '%1$s is now installed and ready to use! Get ready to build something beautiful. We hope you enjoy it! We want to make sure you have the best experience using %1$s and that is why we gathered here all the necessary information for you. We hope you will enjoy using %1$s, as much as we enjoy creating great products.', 'philosophy' ), esc_html( $theme['theme-name'] ) ),
		);

		$arr = apply_filters(
			'epsilon-dashboard-theme',
			wp_parse_args( $arr, $theme )
		);

		return $arr;
	}
}
