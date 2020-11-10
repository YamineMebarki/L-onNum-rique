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

/* vendor/symfony/intl/ResourceBundle/RegionBundleInterface.php */
class __TwigTemplate_71dab93bb7abe03df6eabc1600acd8e1745a88b3879e68dff2573f43c7ddf85a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle/RegionBundleInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/ResourceBundle/RegionBundleInterface.php"));

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
 * Gives access to region-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, to be removed in 5.0.
 */
interface RegionBundleInterface extends ResourceBundleInterface
{
    /**
     * Returns the name of a country.
     *
     * @param string \$country       A country code (e.g. \"US\")
     * @param string \$displayLocale Optional. The locale to return the name in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The name of the country or NULL if not found
     */
    public function getCountryName(\$country, \$displayLocale = null);

    /**
     * Returns the names of all known countries.
     *
     * @param string \$displayLocale Optional. The locale to return the names in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string[] A list of country names indexed by country codes
     */
    public function getCountryNames(\$displayLocale = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/ResourceBundle/RegionBundleInterface.php";
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
 * Gives access to region-related ICU data.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, to be removed in 5.0.
 */
interface RegionBundleInterface extends ResourceBundleInterface
{
    /**
     * Returns the name of a country.
     *
     * @param string \$country       A country code (e.g. \"US\")
     * @param string \$displayLocale Optional. The locale to return the name in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string|null The name of the country or NULL if not found
     */
    public function getCountryName(\$country, \$displayLocale = null);

    /**
     * Returns the names of all known countries.
     *
     * @param string \$displayLocale Optional. The locale to return the names in
     *                              Defaults to {@link \\Locale::getDefault()}.
     *
     * @return string[] A list of country names indexed by country codes
     */
    public function getCountryNames(\$displayLocale = null);
}
", "vendor/symfony/intl/ResourceBundle/RegionBundleInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/ResourceBundle/RegionBundleInterface.php");
    }
}
