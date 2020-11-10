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

/* vendor/symfony/intl/Countries.php */
class __TwigTemplate_08df38ca106c7fc41c6c24ac6dd399de658027ca5309c7f93e534ec5cda310df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Countries.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Countries.php"));

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
 * Gives access to region-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Countries extends ResourceBundle
{
    /**
     * Returns all available countries.
     *
     * Countries are returned as uppercase ISO 3166 two-letter country codes.
     *
     * A full table of ISO 3166 country codes can be found here:
     * https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes
     *
     * This list only contains \"officially assigned ISO 3166-1 alpha-2\" country codes.
     *
     * @return string[] an array of canonical ISO 3166 alpha-2 country codes
     */
    public static function getCountryCodes(): array
    {
        return self::readEntry(['Regions'], 'meta');
    }

    /**
     * @param string \$country Alpha2 country code
     */
    public static function exists(string \$country): bool
    {
        try {
            self::readEntry(['Names', \$country]);

            return true;
        } catch (MissingResourceException \$e) {
            return false;
        }
    }

    /**
     * Gets the country name from alpha2 code.
     *
     * @throws MissingResourceException if the country code does not exists
     */
    public static function getName(string \$country, string \$displayLocale = null): string
    {
        return self::readEntry(['Names', \$country], \$displayLocale);
    }

    /**
     * Gets the list of country names indexed with alpha2 codes as keys.
     *
     * @return string[]
     */
    public static function getNames(\$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::REGION_DIR;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Countries.php";
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
 * Gives access to region-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Countries extends ResourceBundle
{
    /**
     * Returns all available countries.
     *
     * Countries are returned as uppercase ISO 3166 two-letter country codes.
     *
     * A full table of ISO 3166 country codes can be found here:
     * https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes
     *
     * This list only contains \"officially assigned ISO 3166-1 alpha-2\" country codes.
     *
     * @return string[] an array of canonical ISO 3166 alpha-2 country codes
     */
    public static function getCountryCodes(): array
    {
        return self::readEntry(['Regions'], 'meta');
    }

    /**
     * @param string \$country Alpha2 country code
     */
    public static function exists(string \$country): bool
    {
        try {
            self::readEntry(['Names', \$country]);

            return true;
        } catch (MissingResourceException \$e) {
            return false;
        }
    }

    /**
     * Gets the country name from alpha2 code.
     *
     * @throws MissingResourceException if the country code does not exists
     */
    public static function getName(string \$country, string \$displayLocale = null): string
    {
        return self::readEntry(['Names', \$country], \$displayLocale);
    }

    /**
     * Gets the list of country names indexed with alpha2 codes as keys.
     *
     * @return string[]
     */
    public static function getNames(\$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::REGION_DIR;
    }
}
", "vendor/symfony/intl/Countries.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Countries.php");
    }
}
