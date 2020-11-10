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

/* vendor/symfony/intl/Util/Version.php */
class __TwigTemplate_72ee85021b6169ef097dd3c18bd35a27b7980d6b62972605c966e56906d143b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Util/Version.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Util/Version.php"));

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
 * Facilitates the comparison of version strings.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Version
{
    /**
     * Compares two versions with an operator.
     *
     * This method is identical to {@link version_compare()}, except that you
     * can pass the number of regarded version components in the last argument
     * \$precision.
     *
     * Examples:
     *
     *     Version::compare('1.2.3', '1.2.4', '==')
     *     // => false
     *
     *     Version::compare('1.2.3', '1.2.4', '==', 2)
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
     * Examples:
     *
     *     Version::normalize('1.2.3', 1);
     *     // => '1'
     *
     *     Version::normalize('1.2.3', 2);
     *     // => '1.2'
     *
     * @param string   \$version   A version string
     * @param int|null \$precision The number of components to include. Pass
     *                            NULL to return the version unchanged.
     *
     * @return string|null the normalized version or NULL if it couldn't be
     *                     normalized
     */
    public static function normalize(\$version, \$precision)
    {
        if (null === \$precision) {
            return \$version;
        }

        \$pattern = '[^\\.]+';

        for (\$i = 2; \$i <= \$precision; ++\$i) {
            \$pattern = sprintf('[^\\.]+(\\.%s)?', \$pattern);
        }

        if (!preg_match('/^'.\$pattern.'/', \$version, \$matches)) {
            return null;
        }

        return \$matches[0];
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
        return "vendor/symfony/intl/Util/Version.php";
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
 * Facilitates the comparison of version strings.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Version
{
    /**
     * Compares two versions with an operator.
     *
     * This method is identical to {@link version_compare()}, except that you
     * can pass the number of regarded version components in the last argument
     * \$precision.
     *
     * Examples:
     *
     *     Version::compare('1.2.3', '1.2.4', '==')
     *     // => false
     *
     *     Version::compare('1.2.3', '1.2.4', '==', 2)
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
     * Examples:
     *
     *     Version::normalize('1.2.3', 1);
     *     // => '1'
     *
     *     Version::normalize('1.2.3', 2);
     *     // => '1.2'
     *
     * @param string   \$version   A version string
     * @param int|null \$precision The number of components to include. Pass
     *                            NULL to return the version unchanged.
     *
     * @return string|null the normalized version or NULL if it couldn't be
     *                     normalized
     */
    public static function normalize(\$version, \$precision)
    {
        if (null === \$precision) {
            return \$version;
        }

        \$pattern = '[^\\.]+';

        for (\$i = 2; \$i <= \$precision; ++\$i) {
            \$pattern = sprintf('[^\\.]+(\\.%s)?', \$pattern);
        }

        if (!preg_match('/^'.\$pattern.'/', \$version, \$matches)) {
            return null;
        }

        return \$matches[0];
    }

    /**
     * Must not be instantiated.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/intl/Util/Version.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Util/Version.php");
    }
}
