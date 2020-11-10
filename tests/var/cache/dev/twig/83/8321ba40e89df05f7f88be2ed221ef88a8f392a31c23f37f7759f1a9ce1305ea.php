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

/* vendor/twig/twig/src/Extension/StagingExtension.php */
class __TwigTemplate_9fcd5e09b6e795001f8a5018926b65e06b1285c78e0c22b692184ac8cb4e0899 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Extension/StagingExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Extension/StagingExtension.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extension;

use Twig\\NodeVisitor\\NodeVisitorInterface;
use Twig\\TokenParser\\TokenParserInterface;
use Twig\\TwigFilter;
use Twig\\TwigFunction;
use Twig\\TwigTest;

/**
 * Used by \\Twig\\Environment as a staging area.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
final class StagingExtension extends AbstractExtension
{
    private \$functions = [];
    private \$filters = [];
    private \$visitors = [];
    private \$tokenParsers = [];
    private \$tests = [];

    public function addFunction(TwigFunction \$function)
    {
        if (isset(\$this->functions[\$function->getName()])) {
            throw new \\LogicException(sprintf('Function \"%s\" is already registered.', \$function->getName()));
        }

        \$this->functions[\$function->getName()] = \$function;
    }

    public function getFunctions()
    {
        return \$this->functions;
    }

    public function addFilter(TwigFilter \$filter)
    {
        if (isset(\$this->filters[\$filter->getName()])) {
            throw new \\LogicException(sprintf('Filter \"%s\" is already registered.', \$filter->getName()));
        }

        \$this->filters[\$filter->getName()] = \$filter;
    }

    public function getFilters()
    {
        return \$this->filters;
    }

    public function addNodeVisitor(NodeVisitorInterface \$visitor)
    {
        \$this->visitors[] = \$visitor;
    }

    public function getNodeVisitors()
    {
        return \$this->visitors;
    }

    public function addTokenParser(TokenParserInterface \$parser)
    {
        if (isset(\$this->tokenParsers[\$parser->getTag()])) {
            throw new \\LogicException(sprintf('Tag \"%s\" is already registered.', \$parser->getTag()));
        }

        \$this->tokenParsers[\$parser->getTag()] = \$parser;
    }

    public function getTokenParsers()
    {
        return \$this->tokenParsers;
    }

    public function addTest(TwigTest \$test)
    {
        if (isset(\$this->tests[\$test->getName()])) {
            throw new \\LogicException(sprintf('DevLaon \"%s\" is already registered.', \$test->getName()));
        }

        \$this->tests[\$test->getName()] = \$test;
    }

    public function getTests()
    {
        return \$this->tests;
    }
}

class_alias('Twig\\Extension\\StagingExtension', 'Twig_Extension_Staging');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Extension/StagingExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extension;

use Twig\\NodeVisitor\\NodeVisitorInterface;
use Twig\\TokenParser\\TokenParserInterface;
use Twig\\TwigFilter;
use Twig\\TwigFunction;
use Twig\\TwigTest;

/**
 * Used by \\Twig\\Environment as a staging area.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
final class StagingExtension extends AbstractExtension
{
    private \$functions = [];
    private \$filters = [];
    private \$visitors = [];
    private \$tokenParsers = [];
    private \$tests = [];

    public function addFunction(TwigFunction \$function)
    {
        if (isset(\$this->functions[\$function->getName()])) {
            throw new \\LogicException(sprintf('Function \"%s\" is already registered.', \$function->getName()));
        }

        \$this->functions[\$function->getName()] = \$function;
    }

    public function getFunctions()
    {
        return \$this->functions;
    }

    public function addFilter(TwigFilter \$filter)
    {
        if (isset(\$this->filters[\$filter->getName()])) {
            throw new \\LogicException(sprintf('Filter \"%s\" is already registered.', \$filter->getName()));
        }

        \$this->filters[\$filter->getName()] = \$filter;
    }

    public function getFilters()
    {
        return \$this->filters;
    }

    public function addNodeVisitor(NodeVisitorInterface \$visitor)
    {
        \$this->visitors[] = \$visitor;
    }

    public function getNodeVisitors()
    {
        return \$this->visitors;
    }

    public function addTokenParser(TokenParserInterface \$parser)
    {
        if (isset(\$this->tokenParsers[\$parser->getTag()])) {
            throw new \\LogicException(sprintf('Tag \"%s\" is already registered.', \$parser->getTag()));
        }

        \$this->tokenParsers[\$parser->getTag()] = \$parser;
    }

    public function getTokenParsers()
    {
        return \$this->tokenParsers;
    }

    public function addTest(TwigTest \$test)
    {
        if (isset(\$this->tests[\$test->getName()])) {
            throw new \\LogicException(sprintf('DevLaon \"%s\" is already registered.', \$test->getName()));
        }

        \$this->tests[\$test->getName()] = \$test;
    }

    public function getTests()
    {
        return \$this->tests;
    }
}

class_alias('Twig\\Extension\\StagingExtension', 'Twig_Extension_Staging');
", "vendor/twig/twig/src/Extension/StagingExtension.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Extension/StagingExtension.php");
    }
}
