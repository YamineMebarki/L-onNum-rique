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

/* vendor/symfony/intl/Timezones.php */
class __TwigTemplate_caf04904d88c5bed90f40cba01a132a40421eedd660860211b9e3efdefca652c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Timezones.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Timezones.php"));

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
use Symfony\\Component\\Intl\\Exception\\RuntimeException;

/**
 * Gives access to timezone-related ICU data.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Timezones extends ResourceBundle
{
    /**
     * @return string[]
     */
    public static function getIds(): array
    {
        return self::readEntry(['Zones'], 'meta');
    }

    public static function exists(string \$timezone): bool
    {
        try {
            self::readEntry(['Names', \$timezone]);

            return true;
        } catch (MissingResourceException \$e) {
            try {
                new \\DateTimeZone(\$timezone);

                return true;
            } catch (\\Exception \$e) {
                return false;
            }
        }
    }

    /**
     * @throws MissingResourceException if the timezone identifier does not exist or is an alias
     */
    public static function getName(string \$timezone, string \$displayLocale = null): string
    {
        return self::readEntry(['Names', \$timezone], \$displayLocale);
    }

    /**
     * @return string[]
     */
    public static function getNames(string \$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    /**
     * @throws \\Exception       if the timezone identifier does not exist
     * @throws RuntimeException if there's no timezone DST transition information available
     */
    public static function getRawOffset(string \$timezone, int \$timestamp = null): int
    {
        if (null === \$timestamp) {
            \$timestamp = time();
        }

        \$transitions = (new \\DateTimeZone(\$timezone))->getTransitions(\$timestamp, \$timestamp);

        if (!isset(\$transitions[0]['offset'])) {
            throw new RuntimeException('No timezone transitions available.');
        }

        return \$transitions[0]['offset'];
    }

    public static function getGmtOffset(string \$timezone, int \$timestamp = null, string \$displayLocale = null): string
    {
        \$offset = self::getRawOffset(\$timezone, \$timestamp);
        \$abs = abs(\$offset);

        return sprintf(self::readEntry(['Meta', 'GmtFormat'], \$displayLocale), sprintf(self::readEntry(['Meta', 'HourFormat'.(0 <= \$offset ? 'Pos' : 'Neg')], \$displayLocale), \$abs / 3600, \$abs / 60 % 60));
    }

    /**
     * @throws MissingResourceException if the timezone identifier has no associated country code
     */
    public static function getCountryCode(string \$timezone): string
    {
        return self::readEntry(['ZoneToCountry', \$timezone], 'meta');
    }

    /**
     * @throws MissingResourceException if the country code does not exist
     */
    public static function forCountryCode(string \$country): array
    {
        try {
            return self::readEntry(['CountryToZone', \$country], 'meta');
        } catch (MissingResourceException \$e) {
            if (Countries::exists(\$country)) {
                return [];
            }

            if (Countries::exists(strtoupper(\$country))) {
                throw new MissingResourceException(sprintf('Country codes must be in uppercase, but \"%s\" was passed. Try with \"%s\" country code instead.', \$country, strtoupper(\$country)));
            }

            throw \$e;
        }
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::TIMEZONE_DIR;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Timezones.php";
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
use Symfony\\Component\\Intl\\Exception\\RuntimeException;

/**
 * Gives access to timezone-related ICU data.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Timezones extends ResourceBundle
{
    /**
     * @return string[]
     */
    public static function getIds(): array
    {
        return self::readEntry(['Zones'], 'meta');
    }

    public static function exists(string \$timezone): bool
    {
        try {
            self::readEntry(['Names', \$timezone]);

            return true;
        } catch (MissingResourceException \$e) {
            try {
                new \\DateTimeZone(\$timezone);

                return true;
            } catch (\\Exception \$e) {
                return false;
            }
        }
    }

    /**
     * @throws MissingResourceException if the timezone identifier does not exist or is an alias
     */
    public static function getName(string \$timezone, string \$displayLocale = null): string
    {
        return self::readEntry(['Names', \$timezone], \$displayLocale);
    }

    /**
     * @return string[]
     */
    public static function getNames(string \$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    /**
     * @throws \\Exception       if the timezone identifier does not exist
     * @throws RuntimeException if there's no timezone DST transition information available
     */
    public static function getRawOffset(string \$timezone, int \$timestamp = null): int
    {
        if (null === \$timestamp) {
            \$timestamp = time();
        }

        \$transitions = (new \\DateTimeZone(\$timezone))->getTransitions(\$timestamp, \$timestamp);

        if (!isset(\$transitions[0]['offset'])) {
            throw new RuntimeException('No timezone transitions available.');
        }

        return \$transitions[0]['offset'];
    }

    public static function getGmtOffset(string \$timezone, int \$timestamp = null, string \$displayLocale = null): string
    {
        \$offset = self::getRawOffset(\$timezone, \$timestamp);
        \$abs = abs(\$offset);

        return sprintf(self::readEntry(['Meta', 'GmtFormat'], \$displayLocale), sprintf(self::readEntry(['Meta', 'HourFormat'.(0 <= \$offset ? 'Pos' : 'Neg')], \$displayLocale), \$abs / 3600, \$abs / 60 % 60));
    }

    /**
     * @throws MissingResourceException if the timezone identifier has no associated country code
     */
    public static function getCountryCode(string \$timezone): string
    {
        return self::readEntry(['ZoneToCountry', \$timezone], 'meta');
    }

    /**
     * @throws MissingResourceException if the country code does not exist
     */
    public static function forCountryCode(string \$country): array
    {
        try {
            return self::readEntry(['CountryToZone', \$country], 'meta');
        } catch (MissingResourceException \$e) {
            if (Countries::exists(\$country)) {
                return [];
            }

            if (Countries::exists(strtoupper(\$country))) {
                throw new MissingResourceException(sprintf('Country codes must be in uppercase, but \"%s\" was passed. Try with \"%s\" country code instead.', \$country, strtoupper(\$country)));
            }

            throw \$e;
        }
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::TIMEZONE_DIR;
    }
}
", "vendor/symfony/intl/Timezones.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Timezones.php");
    }
}
