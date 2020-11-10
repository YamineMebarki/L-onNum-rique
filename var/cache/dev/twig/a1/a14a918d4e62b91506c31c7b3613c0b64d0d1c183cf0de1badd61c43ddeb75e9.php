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

/* vendor/symfony/intl/Scripts.php */
class __TwigTemplate_1950f2f22b667834c429a9e4de1e70d72e599237e5267c25cf8478e3dd2400a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Scripts.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Scripts.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Intl;

use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Gives access to script-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Scripts extends ResourceBundle
{
    /**
     * @return string[]
     */
    public static function getScriptCodes(): array
    {
        return self::readEntry(['Scripts'], 'meta');
    }

    public static function exists(string \$script): bool
    {
        try {
            self::readEntry(['Names', \$script]);

            return true;
        } catch (MissingResourceException \$e) {
            return false;
        }
    }

    /**
     * @throws MissingResourceException if the script code does not exists
     */
    public static function getName(string \$script, string \$displayLocale = null): string
    {
        return self::readEntry(['Names', \$script], \$displayLocale);
    }

    /**
     * @return string[]
     */
    public static function getNames(\$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::SCRIPT_DIR;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Scripts.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Intl;

use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * Gives access to script-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Scripts extends ResourceBundle
{
    /**
     * @return string[]
     */
    public static function getScriptCodes(): array
    {
        return self::readEntry(['Scripts'], 'meta');
    }

    public static function exists(string \$script): bool
    {
        try {
            self::readEntry(['Names', \$script]);

            return true;
        } catch (MissingResourceException \$e) {
            return false;
        }
    }

    /**
     * @throws MissingResourceException if the script code does not exists
     */
    public static function getName(string \$script, string \$displayLocale = null): string
    {
        return self::readEntry(['Names', \$script], \$displayLocale);
    }

    /**
     * @return string[]
     */
    public static function getNames(\$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::SCRIPT_DIR;
    }
}
", "vendor/symfony/intl/Scripts.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Scripts.php");
    }
}
