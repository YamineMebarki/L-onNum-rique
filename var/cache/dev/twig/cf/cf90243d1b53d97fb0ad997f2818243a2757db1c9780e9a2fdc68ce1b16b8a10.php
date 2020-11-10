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

/* vendor/symfony/intl/Languages.php */
class __TwigTemplate_ec6b7a70e5beca634ea65cb5ce877869babb5833aea18aba605e132a3ec83f35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Languages.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Languages.php"));

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
 * Gives access to language-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Languages extends ResourceBundle
{
    /**
     * Returns all available languages as two-letter codes.
     *
     * Languages are returned as lowercase ISO 639-1 two-letter language codes.
     * For languages that don't have a two-letter code, the ISO 639-2
     * three-letter code is used instead.
     *
     * A full table of ISO 639 language codes can be found here:
     * http://www-01.sil.org/iso639-3/codes.asp
     *
     * @return string[] an array of canonical ISO 639-1 language codes
     */
    public static function getLanguageCodes(): array
    {
        return self::readEntry(['Languages'], 'meta');
    }

    public static function exists(string \$language): bool
    {
        try {
            self::readEntry(['Names', \$language]);

            return true;
        } catch (MissingResourceException \$e) {
            return false;
        }
    }

    /**
     * Gets the language name from alpha2 code.
     *
     * @throws MissingResourceException if the language code does not exists
     */
    public static function getName(string \$language, string \$displayLocale = null): string
    {
        return self::readEntry(['Names', \$language], \$displayLocale);
    }

    /**
     * Gets the list of language names indexed with alpha2 codes as keys.
     *
     * @return string[]
     */
    public static function getNames(string \$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    /**
     * Returns the ISO 639-2 three-letter code of a language, given a two-letter code.
     *
     * @throws MissingResourceException if the language has no corresponding three-letter code
     */
    public static function getAlpha3Code(string \$language): string
    {
        return self::readEntry(['Alpha2ToAlpha3', \$language], 'meta');
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::LANGUAGE_DIR;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Languages.php";
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
 * Gives access to language-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class Languages extends ResourceBundle
{
    /**
     * Returns all available languages as two-letter codes.
     *
     * Languages are returned as lowercase ISO 639-1 two-letter language codes.
     * For languages that don't have a two-letter code, the ISO 639-2
     * three-letter code is used instead.
     *
     * A full table of ISO 639 language codes can be found here:
     * http://www-01.sil.org/iso639-3/codes.asp
     *
     * @return string[] an array of canonical ISO 639-1 language codes
     */
    public static function getLanguageCodes(): array
    {
        return self::readEntry(['Languages'], 'meta');
    }

    public static function exists(string \$language): bool
    {
        try {
            self::readEntry(['Names', \$language]);

            return true;
        } catch (MissingResourceException \$e) {
            return false;
        }
    }

    /**
     * Gets the language name from alpha2 code.
     *
     * @throws MissingResourceException if the language code does not exists
     */
    public static function getName(string \$language, string \$displayLocale = null): string
    {
        return self::readEntry(['Names', \$language], \$displayLocale);
    }

    /**
     * Gets the list of language names indexed with alpha2 codes as keys.
     *
     * @return string[]
     */
    public static function getNames(string \$displayLocale = null): array
    {
        return self::asort(self::readEntry(['Names'], \$displayLocale), \$displayLocale);
    }

    /**
     * Returns the ISO 639-2 three-letter code of a language, given a two-letter code.
     *
     * @throws MissingResourceException if the language has no corresponding three-letter code
     */
    public static function getAlpha3Code(string \$language): string
    {
        return self::readEntry(['Alpha2ToAlpha3', \$language], 'meta');
    }

    protected static function getPath(): string
    {
        return Intl::getDataDirectory().'/'.Intl::LANGUAGE_DIR;
    }
}
", "vendor/symfony/intl/Languages.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Languages.php");
    }
}
