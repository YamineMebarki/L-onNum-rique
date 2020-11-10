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

/* vendor/symfony/form/Util/StringUtil.php */
class __TwigTemplate_7a23c931cc5e1786d1e6bf5c3bc524db84c475d254f391c6858342144d22a817 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/StringUtil.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/StringUtil.php"));

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

namespace Symfony\\Component\\Form\\Util;

/**
 * @author Issei Murasawa <issei.m7@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class StringUtil
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Returns the trimmed data.
     *
     * @param string \$string
     *
     * @return string
     */
    public static function trim(\$string)
    {
        if (null !== \$result = @preg_replace('/^[\\pZ\\p{Cc}]+|[\\pZ\\p{Cc}]+\$/u', '', \$string)) {
            return \$result;
        }

        return trim(\$string);
    }

    /**
     * Converts a fully-qualified class name to a block prefix.
     *
     * @param string \$fqcn The fully-qualified class name
     *
     * @return string|null The block prefix or null if not a valid FQCN
     */
    public static function fqcnToBlockPrefix(\$fqcn)
    {
        // Non-greedy (\"+?\") to match \"type\" suffix, if present
        if (preg_match('~([^\\\\\\\\]+?)(type)?\$~i', \$fqcn, \$matches)) {
            return strtolower(preg_replace(['/([A-Z]+)([A-Z][a-z])/', '/([a-z\\d])([A-Z])/'], ['\\\\1_\\\\2', '\\\\1_\\\\2'], \$matches[1]));
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Util/StringUtil.php";
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

namespace Symfony\\Component\\Form\\Util;

/**
 * @author Issei Murasawa <issei.m7@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class StringUtil
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Returns the trimmed data.
     *
     * @param string \$string
     *
     * @return string
     */
    public static function trim(\$string)
    {
        if (null !== \$result = @preg_replace('/^[\\pZ\\p{Cc}]+|[\\pZ\\p{Cc}]+\$/u', '', \$string)) {
            return \$result;
        }

        return trim(\$string);
    }

    /**
     * Converts a fully-qualified class name to a block prefix.
     *
     * @param string \$fqcn The fully-qualified class name
     *
     * @return string|null The block prefix or null if not a valid FQCN
     */
    public static function fqcnToBlockPrefix(\$fqcn)
    {
        // Non-greedy (\"+?\") to match \"type\" suffix, if present
        if (preg_match('~([^\\\\\\\\]+?)(type)?\$~i', \$fqcn, \$matches)) {
            return strtolower(preg_replace(['/([A-Z]+)([A-Z][a-z])/', '/([a-z\\d])([A-Z])/'], ['\\\\1_\\\\2', '\\\\1_\\\\2'], \$matches[1]));
        }

        return null;
    }
}
", "vendor/symfony/form/Util/StringUtil.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Util/StringUtil.php");
    }
}
