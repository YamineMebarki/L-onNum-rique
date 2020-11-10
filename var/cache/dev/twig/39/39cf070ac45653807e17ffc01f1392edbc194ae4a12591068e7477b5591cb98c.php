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

/* vendor/symfony/validator/Util/PropertyPath.php */
class __TwigTemplate_931e668115a822ea7780e0b7c436598244fe562baee3ffebd4b8efe083fe69ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Util/PropertyPath.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Util/PropertyPath.php"));

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

namespace Symfony\\Component\\Validator\\Util;

/**
 * Contains utility methods for dealing with property paths.
 *
 * For more extensive functionality, use Symfony's PropertyAccess component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyPath
{
    /**
     * Appends a path to a given property path.
     *
     * If the base path is empty, the appended path will be returned unchanged.
     * If the base path is not empty, and the appended path starts with a
     * squared opening bracket (\"[\"), the concatenation of the two paths is
     * returned. Otherwise, the concatenation of the two paths is returned,
     * separated by a dot (\".\").
     *
     * @param string \$basePath The base path
     * @param string \$subPath  The path to append
     *
     * @return string The concatenation of the two property paths
     */
    public static function append(\$basePath, \$subPath)
    {
        if ('' !== (string) \$subPath) {
            if ('[' === \$subPath[0]) {
                return \$basePath.\$subPath;
            }

            return '' !== (string) \$basePath ? \$basePath.'.'.\$subPath : \$subPath;
        }

        return \$basePath;
    }

    /**
     * Not instantiable.
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
        return "vendor/symfony/validator/Util/PropertyPath.php";
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

namespace Symfony\\Component\\Validator\\Util;

/**
 * Contains utility methods for dealing with property paths.
 *
 * For more extensive functionality, use Symfony's PropertyAccess component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyPath
{
    /**
     * Appends a path to a given property path.
     *
     * If the base path is empty, the appended path will be returned unchanged.
     * If the base path is not empty, and the appended path starts with a
     * squared opening bracket (\"[\"), the concatenation of the two paths is
     * returned. Otherwise, the concatenation of the two paths is returned,
     * separated by a dot (\".\").
     *
     * @param string \$basePath The base path
     * @param string \$subPath  The path to append
     *
     * @return string The concatenation of the two property paths
     */
    public static function append(\$basePath, \$subPath)
    {
        if ('' !== (string) \$subPath) {
            if ('[' === \$subPath[0]) {
                return \$basePath.\$subPath;
            }

            return '' !== (string) \$basePath ? \$basePath.'.'.\$subPath : \$subPath;
        }

        return \$basePath;
    }

    /**
     * Not instantiable.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/validator/Util/PropertyPath.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Util/PropertyPath.php");
    }
}
