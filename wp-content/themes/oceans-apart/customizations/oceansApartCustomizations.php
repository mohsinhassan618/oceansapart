<?php declare(strict_types=1); //@PSR2 standards,
namespace OceansApart;

class oceansApartCustomizations
{
    /**
     * The unique instance of the Class.
     * @var singleton object
     */
    private static $classInstance;


    /**
     * Gets an instance of our Class.
     * @return object
     */
    public static function instance():object
    {
        if (null === self::$classInstance) {
            self::$classInstance = new self();
        }
        return self::$classInstance;
    }

    /**
     * Constructor
     */
    private function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'oceansApartCustomScripts'], 12);
        add_filter('acf/settings/save_json', [$this, 'acfJsonSavePoint']);
        add_filter('acf/settings/load_json', [$this, 'acfJsonLoadPoint']);
    }

    public function oceansApartCustomScripts()
    {

        wp_register_script('foundation_script', get_stylesheet_directory_uri() . '/assets//build/app.min.js');
        wp_register_style('foundation_style', get_stylesheet_directory_uri() . '/assets//build/app.min.css');
        wp_enqueue_style('foundation_style');
        wp_enqueue_script('foundation_script');
    }



    public function acfJsonSavePoint($path)
    {
        // update path
        $path = get_stylesheet_directory() . '/customizations/acf_files';
        // return
        return $path;
    }


    public function acfJsonLoadPoint($path)
    {
        // remove original path (optional)
        unset($path[0]);
        // append path
        $paths[] = get_stylesheet_directory() . '/customizations/acf_files';
        // return
        return $paths;
    }
}

