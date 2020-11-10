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

/* vendor/symfony/intl/ResourceBundle/CurrencyBundleInterface.php */
class __TwigTemplate_f1ec76f14af871bfe4c0d0f748a28ad7c8214a6102fa8e9a27c823357ba329e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle/CurrencyBundleInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle/CurrencyBundleInterface.php"));

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

namespace Symfony\\Component\\Intl\\ResourceBundle;

/**
 * Gives access to currency-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, to be removed in 5.0.
 */
interface CurrencyBundleInterface extends ResourceBundleInterface
{
    /**
     * Returns the symbol used for a currency.
     *
     * @param string \$currency      A currency code (e.g. \"EUR\")
     * @param string \$displayLocale Optional. The locale to return the result in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The currency symbol or NULL if not found
     */
    public function getCurrencySymbol(\$currency, \$displayLocale = null);

    /**
     * Returns the name of a currency.
     *
     * @param string \$currency      A currency code (e.g. \"EUR\")
     * @param string \$displayLocale Optional. The locale to return the name in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The name of the currency or NULL if not found
     */
    public function getCurrencyName(\$currency, \$displayLocale = null);

    /**
     * Returns the names of all known currencies.
     *
     * @param string \$displayLocale Optional. The locale to return the names in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string[] A list of currency names indexed by currency codes
     */
    public function getCurrencyNames(\$displayLocale = null);

    /**
     * Returns the number of digits after the comma of a currency.
     *
     * @param string \$currency A currency code (e.g. \"EUR\")
     *
     * @return int|null The number of digits after the comma or NULL if not found
     */
    public function getFractionDigits(\$currency);

    /**
     * Returns the rounding increment of a currency.
     *
     * The rounding increment indicates to which number a currency is rounded.
     * For example, 1230 rounded to the nearest 50 is 1250. 1.234 rounded to the
     * nearest 0.65 is 1.3.
     *
     * @param string \$currency A currency code (e.g. \"EUR\")
     *
     * @return float|int|null The rounding increment or NULL if not found
     */
    public function getRoundingIncrement(\$currency);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/ResourceBundle/CurrencyBundleInterface.php";
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

namespace Symfony\\Component\\Intl\\ResourceBundle;

/**
 * Gives access to currency-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, to be removed in 5.0.
 */
interface CurrencyBundleInterface extends ResourceBundleInterface
{
    /**
     * Returns the symbol used for a currency.
     *
     * @param string \$currency      A currency code (e.g. \"EUR\")
     * @param string \$displayLocale Optional. The locale to return the result in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The currency symbol or NULL if not found
     */
    public function getCurrencySymbol(\$currency, \$displayLocale = null);

    /**
     * Returns the name of a currency.
     *
     * @param string \$currency      A currency code (e.g. \"EUR\")
     * @param string \$displayLocale Optional. The locale to return the name in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The name of the currency or NULL if not found
     */
    public function getCurrencyName(\$currency, \$displayLocale = null);

    /**
     * Returns the names of all known currencies.
     *
     * @param string \$displayLocale Optional. The locale to return the names in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string[] A list of currency names indexed by currency codes
     */
    public function getCurrencyNames(\$displayLocale = null);

    /**
     * Returns the number of digits after the comma of a currency.
     *
     * @param string \$currency A currency code (e.g. \"EUR\")
     *
     * @return int|null The number of digits after the comma or NULL if not found
     */
    public function getFractionDigits(\$currency);

    /**
     * Returns the rounding increment of a currency.
     *
     * The rounding increment indicates to which number a currency is rounded.
     * For example, 1230 rounded to the nearest 50 is 1250. 1.234 rounded to the
     * nearest 0.65 is 1.3.
     *
     * @param string \$currency A currency code (e.g. \"EUR\")
     *
     * @return float|int|null The rounding increment or NULL if not found
     */
    public function getRoundingIncrement(\$currency);
}
", "vendor/symfony/intl/ResourceBundle/CurrencyBundleInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/ResourceBundle/CurrencyBundleInterface.php");
    }
}
