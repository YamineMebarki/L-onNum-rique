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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift.php */
class __TwigTemplate_28f369434ba6fa83ee056471030aa61fe4ff79b92ecf94bd175177bb8b699ded extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * General utility class in Swift Mailer, not to be instantiated.
 *
 * @author Chris Corbyn
 */
abstract class Swift
{
    const VERSION = '6.2.1';

    public static \$initialized = false;
    public static \$inits = [];

    /**
     * Registers an initializer callable that will be called the first time
     * a SwiftMailer class is autoloaded.
     *
     * This enables you to tweak the default configuration in a lazy way.
     *
     * @param mixed \$callable A valid PHP callable that will be called when autoloading the first Swift class
     */
    public static function init(\$callable)
    {
        self::\$inits[] = \$callable;
    }

    /**
     * Internal autoloader for spl_autoload_register().
     *
     * @param string \$class
     */
    public static function autoload(\$class)
    {
        // Don't interfere with other autoloaders
        if (0 !== strpos(\$class, 'Swift_')) {
            return;
        }

        \$path = __DIR__.'/'.str_replace('_', '/', \$class).'.php';

        if (!file_exists(\$path)) {
            return;
        }

        require \$path;

        if (self::\$inits && !self::\$initialized) {
            self::\$initialized = true;
            foreach (self::\$inits as \$init) {
                call_user_func(\$init);
            }
        }
    }

    /**
     * Configure autoloading using Swift Mailer.
     *
     * This is designed to play nicely with other autoloaders.
     *
     * @param mixed \$callable A valid PHP callable that will be called when autoloading the first Swift class
     */
    public static function registerAutoload(\$callable = null)
    {
        if (null !== \$callable) {
            self::\$inits[] = \$callable;
        }
        spl_autoload_register(['Swift', 'autoload']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * General utility class in Swift Mailer, not to be instantiated.
 *
 * @author Chris Corbyn
 */
abstract class Swift
{
    const VERSION = '6.2.1';

    public static \$initialized = false;
    public static \$inits = [];

    /**
     * Registers an initializer callable that will be called the first time
     * a SwiftMailer class is autoloaded.
     *
     * This enables you to tweak the default configuration in a lazy way.
     *
     * @param mixed \$callable A valid PHP callable that will be called when autoloading the first Swift class
     */
    public static function init(\$callable)
    {
        self::\$inits[] = \$callable;
    }

    /**
     * Internal autoloader for spl_autoload_register().
     *
     * @param string \$class
     */
    public static function autoload(\$class)
    {
        // Don't interfere with other autoloaders
        if (0 !== strpos(\$class, 'Swift_')) {
            return;
        }

        \$path = __DIR__.'/'.str_replace('_', '/', \$class).'.php';

        if (!file_exists(\$path)) {
            return;
        }

        require \$path;

        if (self::\$inits && !self::\$initialized) {
            self::\$initialized = true;
            foreach (self::\$inits as \$init) {
                call_user_func(\$init);
            }
        }
    }

    /**
     * Configure autoloading using Swift Mailer.
     *
     * This is designed to play nicely with other autoloaders.
     *
     * @param mixed \$callable A valid PHP callable that will be called when autoloading the first Swift class
     */
    public static function registerAutoload(\$callable = null)
    {
        if (null !== \$callable) {
            self::\$inits[] = \$callable;
        }
        spl_autoload_register(['Swift', 'autoload']);
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift.php");
    }
}
