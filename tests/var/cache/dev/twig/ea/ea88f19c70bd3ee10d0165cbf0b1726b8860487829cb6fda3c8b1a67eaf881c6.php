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

/* vendor/symfony/intl/Locale.php */
class __TwigTemplate_c8c46fd7d6972a3b8a1f9fa344c6b3d112a138d09abe9c224d6ea0ba98d14418 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Locale.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Locale.php"));

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

/**
 * Provides access to locale-related data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
final class Locale extends \\Locale
{
    /**
     * @var string|null
     */
    private static \$defaultFallback = 'en';

    /**
     * Sets the default fallback locale.
     *
     * The default fallback locale is used as fallback for locales that have no
     * fallback otherwise.
     *
     * @param string|null \$locale The default fallback locale
     *
     * @see getFallback()
     */
    public static function setDefaultFallback(?string \$locale)
    {
        self::\$defaultFallback = \$locale;
    }

    /**
     * Returns the default fallback locale.
     *
     * @return string|null The default fallback locale
     *
     * @see setDefaultFallback()
     * @see getFallback()
     */
    public static function getDefaultFallback(): ?string
    {
        return self::\$defaultFallback;
    }

    /**
     * Returns the fallback locale for a given locale.
     *
     * For example, the fallback of \"fr_FR\" is \"fr\". The fallback of \"fr\" is
     * the default fallback locale configured with {@link setDefaultFallback()}.
     * The default fallback locale has no fallback.
     *
     * @param string \$locale The ICU locale code to find the fallback for
     *
     * @return string|null The ICU locale code of the fallback locale, or null
     *                     if no fallback exists
     */
    public static function getFallback(\$locale): ?string
    {
        if (\\function_exists('locale_parse')) {
            \$localeSubTags = locale_parse(\$locale);
            if (1 === \\count(\$localeSubTags)) {
                if ('root' !== self::\$defaultFallback && self::\$defaultFallback === \$localeSubTags['language']) {
                    return 'root';
                }

                // Don't return default fallback for \"root\", \"meta\" or others
                // Normal locales have two or three letters
                if (\\strlen(\$locale) < 4) {
                    return self::\$defaultFallback;
                }

                return null;
            }

            array_pop(\$localeSubTags);

            \$fallback = locale_compose(\$localeSubTags);

            return false !== \$fallback ? \$fallback : null;
        }

        if (false !== \$pos = strrpos(\$locale, '_')) {
            return substr(\$locale, 0, \$pos);
        }

        if (false !== \$pos = strrpos(\$locale, '-')) {
            return substr(\$locale, 0, \$pos);
        }

        if ('root' !== self::\$defaultFallback && self::\$defaultFallback === \$locale) {
            return 'root';
        }

        // Don't return default fallback for \"root\", \"meta\" or others
        // Normal locales have two or three letters
        return \\strlen(\$locale) < 4 ? self::\$defaultFallback : null;
    }

    /**
     * This class must not be instantiated.
     */
    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Locale.php";
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

/**
 * Provides access to locale-related data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
final class Locale extends \\Locale
{
    /**
     * @var string|null
     */
    private static \$defaultFallback = 'en';

    /**
     * Sets the default fallback locale.
     *
     * The default fallback locale is used as fallback for locales that have no
     * fallback otherwise.
     *
     * @param string|null \$locale The default fallback locale
     *
     * @see getFallback()
     */
    public static function setDefaultFallback(?string \$locale)
    {
        self::\$defaultFallback = \$locale;
    }

    /**
     * Returns the default fallback locale.
     *
     * @return string|null The default fallback locale
     *
     * @see setDefaultFallback()
     * @see getFallback()
     */
    public static function getDefaultFallback(): ?string
    {
        return self::\$defaultFallback;
    }

    /**
     * Returns the fallback locale for a given locale.
     *
     * For example, the fallback of \"fr_FR\" is \"fr\". The fallback of \"fr\" is
     * the default fallback locale configured with {@link setDefaultFallback()}.
     * The default fallback locale has no fallback.
     *
     * @param string \$locale The ICU locale code to find the fallback for
     *
     * @return string|null The ICU locale code of the fallback locale, or null
     *                     if no fallback exists
     */
    public static function getFallback(\$locale): ?string
    {
        if (\\function_exists('locale_parse')) {
            \$localeSubTags = locale_parse(\$locale);
            if (1 === \\count(\$localeSubTags)) {
                if ('root' !== self::\$defaultFallback && self::\$defaultFallback === \$localeSubTags['language']) {
                    return 'root';
                }

                // Don't return default fallback for \"root\", \"meta\" or others
                // Normal locales have two or three letters
                if (\\strlen(\$locale) < 4) {
                    return self::\$defaultFallback;
                }

                return null;
            }

            array_pop(\$localeSubTags);

            \$fallback = locale_compose(\$localeSubTags);

            return false !== \$fallback ? \$fallback : null;
        }

        if (false !== \$pos = strrpos(\$locale, '_')) {
            return substr(\$locale, 0, \$pos);
        }

        if (false !== \$pos = strrpos(\$locale, '-')) {
            return substr(\$locale, 0, \$pos);
        }

        if ('root' !== self::\$defaultFallback && self::\$defaultFallback === \$locale) {
            return 'root';
        }

        // Don't return default fallback for \"root\", \"meta\" or others
        // Normal locales have two or three letters
        return \\strlen(\$locale) < 4 ? self::\$defaultFallback : null;
    }

    /**
     * This class must not be instantiated.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/intl/Locale.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Locale.php");
    }
}
