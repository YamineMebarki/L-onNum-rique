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

/* vendor/symfony/routing/Matcher/Dumper/PhpMatcherDumper.php */
class __TwigTemplate_6b9a46b429e949cb50478fa279a1a32e3b755c073000c4545c77cb92c25811da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/Dumper/PhpMatcherDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/Dumper/PhpMatcherDumper.php"));

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

namespace Symfony\\Component\\Routing\\Matcher\\Dumper;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"CompiledUrlMatcherDumper\" instead.', PhpMatcherDumper::class), E_USER_DEPRECATED);

/**
 * PhpMatcherDumper creates a PHP class able to match URLs for a given set of routes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 * @author Arnaud Le Blanc <arnaud.lb@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @deprecated since Symfony 4.3, use CompiledUrlMatcherDumper instead.
 */
class PhpMatcherDumper extends CompiledUrlMatcherDumper
{
    /**
     * Dumps a set of routes to a PHP class.
     *
     * Available options:
     *
     *  * class:      The class name
     *  * base_class: The base class name
     *
     * @param array \$options An array of options
     *
     * @return string A PHP class representing the matcher class
     */
    public function dump(array \$options = [])
    {
        \$options = array_replace([
            'class' => 'ProjectUrlMatcher',
            'base_class' => 'Symfony\\\\Component\\\\Routing\\\\Matcher\\\\UrlMatcher',
        ], \$options);

        \$code = parent::dump();
        \$code = preg_replace('#\\n    ([^ ].*?) // \\\$(\\w++)\$#m', \"\\n    \\\$this->\$2 = \$1\", \$code);
        \$code = str_replace(\",\\n    \$\", \";\\n    \$\", \$code);
        \$code = substr(\$code, strpos(\$code, '\$this') - 4, -5).\";\\n\";
        \$code = preg_replace('/^    \\\$this->\\w++ = (?:null|false|\\[\\n    \\]);\\n/m', '', \$code);
        \$code = str_replace(\"\\n    \", \"\\n        \", \"\\n\".\$code);

        return <<<EOF
<?php

use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherTrait;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class {\$options['class']} extends {\$options['base_class']}
{
    use CompiledUrlMatcherTrait;

    public function __construct(RequestContext \\\$context)
    {
        \\\$this->context = \\\$context;{\$code}    }
}

EOF;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Matcher/Dumper/PhpMatcherDumper.php";
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

namespace Symfony\\Component\\Routing\\Matcher\\Dumper;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"CompiledUrlMatcherDumper\" instead.', PhpMatcherDumper::class), E_USER_DEPRECATED);

/**
 * PhpMatcherDumper creates a PHP class able to match URLs for a given set of routes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 * @author Arnaud Le Blanc <arnaud.lb@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @deprecated since Symfony 4.3, use CompiledUrlMatcherDumper instead.
 */
class PhpMatcherDumper extends CompiledUrlMatcherDumper
{
    /**
     * Dumps a set of routes to a PHP class.
     *
     * Available options:
     *
     *  * class:      The class name
     *  * base_class: The base class name
     *
     * @param array \$options An array of options
     *
     * @return string A PHP class representing the matcher class
     */
    public function dump(array \$options = [])
    {
        \$options = array_replace([
            'class' => 'ProjectUrlMatcher',
            'base_class' => 'Symfony\\\\Component\\\\Routing\\\\Matcher\\\\UrlMatcher',
        ], \$options);

        \$code = parent::dump();
        \$code = preg_replace('#\\n    ([^ ].*?) // \\\$(\\w++)\$#m', \"\\n    \\\$this->\$2 = \$1\", \$code);
        \$code = str_replace(\",\\n    \$\", \";\\n    \$\", \$code);
        \$code = substr(\$code, strpos(\$code, '\$this') - 4, -5).\";\\n\";
        \$code = preg_replace('/^    \\\$this->\\w++ = (?:null|false|\\[\\n    \\]);\\n/m', '', \$code);
        \$code = str_replace(\"\\n    \", \"\\n        \", \"\\n\".\$code);

        return <<<EOF
<?php

use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherTrait;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class {\$options['class']} extends {\$options['base_class']}
{
    use CompiledUrlMatcherTrait;

    public function __construct(RequestContext \\\$context)
    {
        \\\$this->context = \\\$context;{\$code}    }
}

EOF;
    }
}
", "vendor/symfony/routing/Matcher/Dumper/PhpMatcherDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Matcher/Dumper/PhpMatcherDumper.php");
    }
}
