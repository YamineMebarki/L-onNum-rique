<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/composer/autoload_real.php */
class __TwigTemplate_f8b0d31aca55b6dd7baa535f45425d48adf8468dfd8a9e2569b472a44edd5c62 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/composer/autoload_real.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/composer/autoload_real.php"));

        // line 1
        echo "<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit460f8f9b5891a8de58ad6975b7876ade
{
    private static \$loader;

    public static function loadClassLoader(\$class)
    {
        if ('Composer\\Autoload\\ClassLoader' === \$class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::\$loader) {
            return self::\$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit460f8f9b5891a8de58ad6975b7876ade', 'loadClassLoader'), true, true);
        self::\$loader = \$loader = new \\Composer\\Autoload\\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit460f8f9b5891a8de58ad6975b7876ade', 'loadClassLoader'));

        \$useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if (\$useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(\\Composer\\Autoload\\ComposerStaticInit460f8f9b5891a8de58ad6975b7876ade::getInitializer(\$loader));
        } else {
            \$map = require __DIR__ . '/autoload_namespaces.php';
            foreach (\$map as \$namespace => \$path) {
                \$loader->set(\$namespace, \$path);
            }

            \$map = require __DIR__ . '/autoload_psr4.php';
            foreach (\$map as \$namespace => \$path) {
                \$loader->setPsr4(\$namespace, \$path);
            }

            \$classMap = require __DIR__ . '/autoload_classmap.php';
            if (\$classMap) {
                \$loader->addClassMap(\$classMap);
            }
        }

        \$loader->register(true);

        if (\$useStaticLoader) {
            \$includeFiles = Composer\\Autoload\\ComposerStaticInit460f8f9b5891a8de58ad6975b7876ade::\$files;
        } else {
            \$includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach (\$includeFiles as \$fileIdentifier => \$file) {
            composerRequire460f8f9b5891a8de58ad6975b7876ade(\$fileIdentifier, \$file);
        }

        return \$loader;
    }
}

function composerRequire460f8f9b5891a8de58ad6975b7876ade(\$fileIdentifier, \$file)
{
    if (empty(\$GLOBALS['__composer_autoload_files'][\$fileIdentifier])) {
        require \$file;

        \$GLOBALS['__composer_autoload_files'][\$fileIdentifier] = true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/composer/autoload_real.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit460f8f9b5891a8de58ad6975b7876ade
{
    private static \$loader;

    public static function loadClassLoader(\$class)
    {
        if ('Composer\\Autoload\\ClassLoader' === \$class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::\$loader) {
            return self::\$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit460f8f9b5891a8de58ad6975b7876ade', 'loadClassLoader'), true, true);
        self::\$loader = \$loader = new \\Composer\\Autoload\\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit460f8f9b5891a8de58ad6975b7876ade', 'loadClassLoader'));

        \$useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if (\$useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(\\Composer\\Autoload\\ComposerStaticInit460f8f9b5891a8de58ad6975b7876ade::getInitializer(\$loader));
        } else {
            \$map = require __DIR__ . '/autoload_namespaces.php';
            foreach (\$map as \$namespace => \$path) {
                \$loader->set(\$namespace, \$path);
            }

            \$map = require __DIR__ . '/autoload_psr4.php';
            foreach (\$map as \$namespace => \$path) {
                \$loader->setPsr4(\$namespace, \$path);
            }

            \$classMap = require __DIR__ . '/autoload_classmap.php';
            if (\$classMap) {
                \$loader->addClassMap(\$classMap);
            }
        }

        \$loader->register(true);

        if (\$useStaticLoader) {
            \$includeFiles = Composer\\Autoload\\ComposerStaticInit460f8f9b5891a8de58ad6975b7876ade::\$files;
        } else {
            \$includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach (\$includeFiles as \$fileIdentifier => \$file) {
            composerRequire460f8f9b5891a8de58ad6975b7876ade(\$fileIdentifier, \$file);
        }

        return \$loader;
    }
}

function composerRequire460f8f9b5891a8de58ad6975b7876ade(\$fileIdentifier, \$file)
{
    if (empty(\$GLOBALS['__composer_autoload_files'][\$fileIdentifier])) {
        require \$file;

        \$GLOBALS['__composer_autoload_files'][\$fileIdentifier] = true;
    }
}
", "vendor/composer/autoload_real.php", "/var/www/public/DevLaon/templates/vendor/composer/autoload_real.php");
    }
}