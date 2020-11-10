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

/* vendor/symfony/translation/PluralizationRules.php */
class __TwigTemplate_16857742fde73ec61812ac7ca93364071d065eba7876b5f515110eedb06a57f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/PluralizationRules.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/PluralizationRules.php"));

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

namespace Symfony\\Component\\Translation;

/**
 * Returns the plural rules for a given locale.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.2, use IdentityTranslator instead
 */
class PluralizationRules
{
    private static \$rules = [];

    /**
     * Returns the plural position to use for the given locale and number.
     *
     * @param int    \$number The number
     * @param string \$locale The locale
     *
     * @return int The plural position
     */
    public static function get(\$number, \$locale/*, bool \$triggerDeprecation = true*/)
    {
        if (3 > \\func_num_args() || func_get_arg(2)) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);
        }

        if ('pt_BR' === \$locale) {
            // temporary set a locale for brazilian
            \$locale = 'xbr';
        }

        if (\\strlen(\$locale) > 3) {
            \$locale = substr(\$locale, 0, -\\strlen(strrchr(\$locale, '_')));
        }

        if (isset(self::\$rules[\$locale])) {
            \$return = self::\$rules[\$locale](\$number);

            if (!\\is_int(\$return) || \$return < 0) {
                return 0;
            }

            return \$return;
        }

        /*
         * The plural rules are derived from code of the Zend Framework (2010-09-25),
         * which is subject to the new BSD license (http://framework.zend.com/license/new-bsd).
         * Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
         */
        switch (\$locale) {
            case 'az':
            case 'bo':
            case 'dz':
            case 'id':
            case 'ja':
            case 'jv':
            case 'ka':
            case 'km':
            case 'kn':
            case 'ko':
            case 'ms':
            case 'th':
            case 'tr':
            case 'vi':
            case 'zh':
                return 0;

            case 'af':
            case 'bn':
            case 'bg':
            case 'ca':
            case 'da':
            case 'de':
            case 'el':
            case 'en':
            case 'eo':
            case 'es':
            case 'et':
            case 'eu':
            case 'fa':
            case 'fi':
            case 'fo':
            case 'fur':
            case 'fy':
            case 'gl':
            case 'gu':
            case 'ha':
            case 'he':
            case 'hu':
            case 'is':
            case 'it':
            case 'ku':
            case 'lb':
            case 'ml':
            case 'mn':
            case 'mr':
            case 'nah':
            case 'nb':
            case 'ne':
            case 'nl':
            case 'nn':
            case 'no':
            case 'oc':
            case 'om':
            case 'or':
            case 'pa':
            case 'pap':
            case 'ps':
            case 'pt':
            case 'so':
            case 'sq':
            case 'sv':
            case 'sw':
            case 'ta':
            case 'te':
            case 'tk':
            case 'ur':
            case 'zu':
                return (1 == \$number) ? 0 : 1;

            case 'am':
            case 'bh':
            case 'fil':
            case 'fr':
            case 'gun':
            case 'hi':
            case 'hy':
            case 'ln':
            case 'mg':
            case 'nso':
            case 'xbr':
            case 'ti':
            case 'wa':
                return ((0 == \$number) || (1 == \$number)) ? 0 : 1;

            case 'be':
            case 'bs':
            case 'hr':
            case 'ru':
            case 'sh':
            case 'sr':
            case 'uk':
                return ((1 == \$number % 10) && (11 != \$number % 100)) ? 0 : (((\$number % 10 >= 2) && (\$number % 10 <= 4) && ((\$number % 100 < 10) || (\$number % 100 >= 20))) ? 1 : 2);

            case 'cs':
            case 'sk':
                return (1 == \$number) ? 0 : (((\$number >= 2) && (\$number <= 4)) ? 1 : 2);

            case 'ga':
                return (1 == \$number) ? 0 : ((2 == \$number) ? 1 : 2);

            case 'lt':
                return ((1 == \$number % 10) && (11 != \$number % 100)) ? 0 : (((\$number % 10 >= 2) && ((\$number % 100 < 10) || (\$number % 100 >= 20))) ? 1 : 2);

            case 'sl':
                return (1 == \$number % 100) ? 0 : ((2 == \$number % 100) ? 1 : (((3 == \$number % 100) || (4 == \$number % 100)) ? 2 : 3));

            case 'mk':
                return (1 == \$number % 10) ? 0 : 1;

            case 'mt':
                return (1 == \$number) ? 0 : (((0 == \$number) || ((\$number % 100 > 1) && (\$number % 100 < 11))) ? 1 : (((\$number % 100 > 10) && (\$number % 100 < 20)) ? 2 : 3));

            case 'lv':
                return (0 == \$number) ? 0 : (((1 == \$number % 10) && (11 != \$number % 100)) ? 1 : 2);

            case 'pl':
                return (1 == \$number) ? 0 : (((\$number % 10 >= 2) && (\$number % 10 <= 4) && ((\$number % 100 < 12) || (\$number % 100 > 14))) ? 1 : 2);

            case 'cy':
                return (1 == \$number) ? 0 : ((2 == \$number) ? 1 : (((8 == \$number) || (11 == \$number)) ? 2 : 3));

            case 'ro':
                return (1 == \$number) ? 0 : (((0 == \$number) || ((\$number % 100 > 0) && (\$number % 100 < 20))) ? 1 : 2);

            case 'ar':
                return (0 == \$number) ? 0 : ((1 == \$number) ? 1 : ((2 == \$number) ? 2 : (((\$number % 100 >= 3) && (\$number % 100 <= 10)) ? 3 : (((\$number % 100 >= 11) && (\$number % 100 <= 99)) ? 4 : 5))));

            default:
                return 0;
        }
    }

    /**
     * Overrides the default plural rule for a given locale.
     *
     * @param callable \$rule   A PHP callable
     * @param string   \$locale The locale
     */
    public static function set(callable \$rule, \$locale)
    {
        @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);

        if ('pt_BR' === \$locale) {
            // temporary set a locale for brazilian
            \$locale = 'xbr';
        }

        if (\\strlen(\$locale) > 3) {
            \$locale = substr(\$locale, 0, -\\strlen(strrchr(\$locale, '_')));
        }

        self::\$rules[\$locale] = \$rule;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/PluralizationRules.php";
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

namespace Symfony\\Component\\Translation;

/**
 * Returns the plural rules for a given locale.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.2, use IdentityTranslator instead
 */
class PluralizationRules
{
    private static \$rules = [];

    /**
     * Returns the plural position to use for the given locale and number.
     *
     * @param int    \$number The number
     * @param string \$locale The locale
     *
     * @return int The plural position
     */
    public static function get(\$number, \$locale/*, bool \$triggerDeprecation = true*/)
    {
        if (3 > \\func_num_args() || func_get_arg(2)) {
            @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);
        }

        if ('pt_BR' === \$locale) {
            // temporary set a locale for brazilian
            \$locale = 'xbr';
        }

        if (\\strlen(\$locale) > 3) {
            \$locale = substr(\$locale, 0, -\\strlen(strrchr(\$locale, '_')));
        }

        if (isset(self::\$rules[\$locale])) {
            \$return = self::\$rules[\$locale](\$number);

            if (!\\is_int(\$return) || \$return < 0) {
                return 0;
            }

            return \$return;
        }

        /*
         * The plural rules are derived from code of the Zend Framework (2010-09-25),
         * which is subject to the new BSD license (http://framework.zend.com/license/new-bsd).
         * Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
         */
        switch (\$locale) {
            case 'az':
            case 'bo':
            case 'dz':
            case 'id':
            case 'ja':
            case 'jv':
            case 'ka':
            case 'km':
            case 'kn':
            case 'ko':
            case 'ms':
            case 'th':
            case 'tr':
            case 'vi':
            case 'zh':
                return 0;

            case 'af':
            case 'bn':
            case 'bg':
            case 'ca':
            case 'da':
            case 'de':
            case 'el':
            case 'en':
            case 'eo':
            case 'es':
            case 'et':
            case 'eu':
            case 'fa':
            case 'fi':
            case 'fo':
            case 'fur':
            case 'fy':
            case 'gl':
            case 'gu':
            case 'ha':
            case 'he':
            case 'hu':
            case 'is':
            case 'it':
            case 'ku':
            case 'lb':
            case 'ml':
            case 'mn':
            case 'mr':
            case 'nah':
            case 'nb':
            case 'ne':
            case 'nl':
            case 'nn':
            case 'no':
            case 'oc':
            case 'om':
            case 'or':
            case 'pa':
            case 'pap':
            case 'ps':
            case 'pt':
            case 'so':
            case 'sq':
            case 'sv':
            case 'sw':
            case 'ta':
            case 'te':
            case 'tk':
            case 'ur':
            case 'zu':
                return (1 == \$number) ? 0 : 1;

            case 'am':
            case 'bh':
            case 'fil':
            case 'fr':
            case 'gun':
            case 'hi':
            case 'hy':
            case 'ln':
            case 'mg':
            case 'nso':
            case 'xbr':
            case 'ti':
            case 'wa':
                return ((0 == \$number) || (1 == \$number)) ? 0 : 1;

            case 'be':
            case 'bs':
            case 'hr':
            case 'ru':
            case 'sh':
            case 'sr':
            case 'uk':
                return ((1 == \$number % 10) && (11 != \$number % 100)) ? 0 : (((\$number % 10 >= 2) && (\$number % 10 <= 4) && ((\$number % 100 < 10) || (\$number % 100 >= 20))) ? 1 : 2);

            case 'cs':
            case 'sk':
                return (1 == \$number) ? 0 : (((\$number >= 2) && (\$number <= 4)) ? 1 : 2);

            case 'ga':
                return (1 == \$number) ? 0 : ((2 == \$number) ? 1 : 2);

            case 'lt':
                return ((1 == \$number % 10) && (11 != \$number % 100)) ? 0 : (((\$number % 10 >= 2) && ((\$number % 100 < 10) || (\$number % 100 >= 20))) ? 1 : 2);

            case 'sl':
                return (1 == \$number % 100) ? 0 : ((2 == \$number % 100) ? 1 : (((3 == \$number % 100) || (4 == \$number % 100)) ? 2 : 3));

            case 'mk':
                return (1 == \$number % 10) ? 0 : 1;

            case 'mt':
                return (1 == \$number) ? 0 : (((0 == \$number) || ((\$number % 100 > 1) && (\$number % 100 < 11))) ? 1 : (((\$number % 100 > 10) && (\$number % 100 < 20)) ? 2 : 3));

            case 'lv':
                return (0 == \$number) ? 0 : (((1 == \$number % 10) && (11 != \$number % 100)) ? 1 : 2);

            case 'pl':
                return (1 == \$number) ? 0 : (((\$number % 10 >= 2) && (\$number % 10 <= 4) && ((\$number % 100 < 12) || (\$number % 100 > 14))) ? 1 : 2);

            case 'cy':
                return (1 == \$number) ? 0 : ((2 == \$number) ? 1 : (((8 == \$number) || (11 == \$number)) ? 2 : 3));

            case 'ro':
                return (1 == \$number) ? 0 : (((0 == \$number) || ((\$number % 100 > 0) && (\$number % 100 < 20))) ? 1 : 2);

            case 'ar':
                return (0 == \$number) ? 0 : ((1 == \$number) ? 1 : ((2 == \$number) ? 2 : (((\$number % 100 >= 3) && (\$number % 100 <= 10)) ? 3 : (((\$number % 100 >= 11) && (\$number % 100 <= 99)) ? 4 : 5))));

            default:
                return 0;
        }
    }

    /**
     * Overrides the default plural rule for a given locale.
     *
     * @param callable \$rule   A PHP callable
     * @param string   \$locale The locale
     */
    public static function set(callable \$rule, \$locale)
    {
        @trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);

        if ('pt_BR' === \$locale) {
            // temporary set a locale for brazilian
            \$locale = 'xbr';
        }

        if (\\strlen(\$locale) > 3) {
            \$locale = substr(\$locale, 0, -\\strlen(strrchr(\$locale, '_')));
        }

        self::\$rules[\$locale] = \$rule;
    }
}
", "vendor/symfony/translation/PluralizationRules.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/PluralizationRules.php");
    }
}
