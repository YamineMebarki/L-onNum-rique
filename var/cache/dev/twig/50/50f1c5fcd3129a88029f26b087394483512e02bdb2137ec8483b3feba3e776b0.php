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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Case_.php */
class __TwigTemplate_e109383856ef8ad96b1aa159cc407eaaee6e9640cc1b251e06936e11eab8641b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Case_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Case_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Case_ extends Node\\Stmt
{
    /** @var null|Node\\Expr Condition (null for default) */
    public \$cond;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a case node.
     *
     * @param null|Node\\Expr \$cond       Condition (null for default)
     * @param Node\\Stmt[]    \$stmts      Statements
     * @param array          \$attributes Additional attributes
     */
    public function __construct(\$cond, array \$stmts = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->cond = \$cond;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['cond', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Case';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Case_.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Case_ extends Node\\Stmt
{
    /** @var null|Node\\Expr Condition (null for default) */
    public \$cond;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a case node.
     *
     * @param null|Node\\Expr \$cond       Condition (null for default)
     * @param Node\\Stmt[]    \$stmts      Statements
     * @param array          \$attributes Additional attributes
     */
    public function __construct(\$cond, array \$stmts = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->cond = \$cond;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['cond', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Case';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Case_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Case_.php");
    }
}
