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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php */
class __TwigTemplate_4253824a491cd7be8124c7f2524963d345ed3dfd94c970626a6de98131a1149a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;

class New_ extends Expr
{
    /** @var Node\\Name|Expr|Node\\Stmt\\Class_ Class name */
    public \$class;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Node\\Name|Expr|Node\\Stmt\\Class_ \$class      Class name (or class node for anonymous classes)
     * @param Node\\Arg[]                      \$args       Arguments
     * @param array                           \$attributes Additional attributes
     */
    public function __construct(\$class, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_New';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;

class New_ extends Expr
{
    /** @var Node\\Name|Expr|Node\\Stmt\\Class_ Class name */
    public \$class;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Node\\Name|Expr|Node\\Stmt\\Class_ \$class      Class name (or class node for anonymous classes)
     * @param Node\\Arg[]                      \$args       Arguments
     * @param array                           \$attributes Additional attributes
     */
    public function __construct(\$class, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_New';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php");
    }
}
