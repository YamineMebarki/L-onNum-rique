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

/* vendor/symfony/intl/Util/IcuVersion.php */
class __TwigTemplate_73993b222f968cbeef3edff25cb350d2a2392704a5ba867ba03a19f288f2ba1d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Util/IcuVersion.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Util/IcuVersion.php"));

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

namespace Symfony\\Component\\Intl\\Util;

/**
 * Facilitates the comparison of ICU version strings.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IcuVersion
{
    /**
     * Compares two ICU versions with an operator.
     *
     * This method is identical to {@link version_compare()}, except that you
     * can pass the number of regarded version components in the last argument
     * \$precision.
     *
     * Also, a single digit release version and a single digit major version
     * are contracted to a two digit release version. If no major version
     * is given, it is substituted by zero.
     *
     * Examples:
     *
     *     IcuVersion::compare('1.2.3', '1.2.4', '==')
     *     // => false
     *
     *     IcuVersion::compare('1.2.3', '1.2.4', '==', 2)
     *     // => true
     *
     *     IcuVersion::compare('1.2.3', '12.3', '==')
     *     // => true
     *
     *     IcuVersion::compare('1', '10', '==')
     *     // => true
     *
     * @param string   \$version1  A version string
     * @param string   \$version2  A version string to compare
     * @param string   \$operator  The comparison operator
     * @param int|null \$precision The number of components to compare. Pass
     *                            NULL to compare the versions unchanged.
     *
     * @return bool Whether the comparison succeeded
     *
     * @see normalize()
     */
    public static function compare(\$version1, \$version2, \$operator, \$precision = null)
    {
        \$version1 = self::normalize(\$version1, \$precision);
        \$version2 = self::normalize(\$version2, \$precision);

        return version_compare(\$version1, \$version2, \$operator);
    }

    /**
     * Normalizes a version string to the number of components given in the
     * parameter \$precision.
     *
     * A single digit release version and a single digit major version are
     * contracted to a two digit release version. If no major version is given,
     * it is substituted by zero.
     *
     * Examples:
     *
     *     IcuVersion::normalize('1.2.3.4');
     *     // => '12.3.4'
     *
     *     IcuVersion::normalize('1.2.3.4', 1);
     *     // => '12'
     *
     *     IcuVersion::normalize('1.2.3.4', 2);
     *     // => '12.3'
     *
     * @param string   \$version   An ICU version string
     * @param int|null \$precision The number of components to include. Pass
     *                            NULL to return the version unchanged.
     *
     * @return string|null the normalized ICU version or NULL if it couldn't be
     *                     normalized
     */
    public static function normalize(\$version, \$precision)
    {
        \$version = preg_replace('/^(\\d)\\.(\\d)/', '\$1\$2', \$version);

        if (1 === \\strlen(\$version)) {
            \$version .= '0';
        }

        return Version::normalize(\$version, \$precision);
    }

    /**
     * Must not be instantiated.
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
        return "vendor/symfony/intl/Util/IcuVersion.php";
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

namespace Symfony\\Component\\Intl\\Util;

/**
 * Facilitates the comparison of ICU version strings.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IcuVersion
{
    /**
     * Compares two ICU versions with an operator.
     *
     * This method is identical to {@link version_compare()}, except that you
     * can pass the number of regarded version components in the last argument
     * \$precision.
     *
     * Also, a single digit release version and a single digit major version
     * are contracted to a two digit release version. If no major version
     * is given, it is substituted by zero.
     *
     * Examples:
     *
     *     IcuVersion::compare('1.2.3', '1.2.4', '==')
     *     // => false
     *
     *     IcuVersion::compare('1.2.3', '1.2.4', '==', 2)
     *     // => true
     *
     *     IcuVersion::compare('1.2.3', '12.3', '==')
     *     // => true
     *
     *     IcuVersion::compare('1', '10', '==')
     *     // => true
     *
     * @param string   \$version1  A version string
     * @param string   \$version2  A version string to compare
     * @param string   \$operator  The comparison operator
     * @param int|null \$precision The number of components to compare. Pass
     *                            NULL to compare the versions unchanged.
     *
     * @return bool Whether the comparison succeeded
     *
     * @see normalize()
     */
    public static function compare(\$version1, \$version2, \$operator, \$precision = null)
    {
        \$version1 = self::normalize(\$version1, \$precision);
        \$version2 = self::normalize(\$version2, \$precision);

        return version_compare(\$version1, \$version2, \$operator);
    }

    /**
     * Normalizes a version string to the number of components given in the
     * parameter \$precision.
     *
     * A single digit release version and a single digit major version are
     * contracted to a two digit release version. If no major version is given,
     * it is substituted by zero.
     *
     * Examples:
     *
     *     IcuVersion::normalize('1.2.3.4');
     *     // => '12.3.4'
     *
     *     IcuVersion::normalize('1.2.3.4', 1);
     *     // => '12'
     *
     *     IcuVersion::normalize('1.2.3.4', 2);
     *     // => '12.3'
     *
     * @param string   \$version   An ICU version string
     * @param int|null \$precision The number of components to include. Pass
     *                            NULL to return the version unchanged.
     *
     * @return string|null the normalized ICU version or NULL if it couldn't be
     *                     normalized
     */
    public static function normalize(\$version, \$precision)
    {
        \$version = preg_replace('/^(\\d)\\.(\\d)/', '\$1\$2', \$version);

        if (1 === \\strlen(\$version)) {
            \$version .= '0';
        }

        return Version::normalize(\$version, \$precision);
    }

    /**
     * Must not be instantiated.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/intl/Util/IcuVersion.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Util/IcuVersion.php");
    }
}
