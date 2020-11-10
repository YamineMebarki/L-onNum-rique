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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Declare_.php */
class __TwigTemplate_f112a916da46ac73cc1e9dd663ed9d5f5e6f09ac8841d7a50e3f7a09661cfa86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Declare_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Declare_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Declare_ extends Node\\Stmt
{
    /** @var DeclareDeclare[] List of declares */
    public \$declares;
    /** @var Node\\Stmt[]|null Statements */
    public \$stmts;

    /**
     * Constructs a declare node.
     *
     * @param DeclareDeclare[] \$declares   List of declares
     * @param Node\\Stmt[]|null \$stmts      Statements
     * @param array            \$attributes Additional attributes
     */
    public function __construct(array \$declares, array \$stmts = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->declares = \$declares;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['declares', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Declare';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Declare_.php";
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

class Declare_ extends Node\\Stmt
{
    /** @var DeclareDeclare[] List of declares */
    public \$declares;
    /** @var Node\\Stmt[]|null Statements */
    public \$stmts;

    /**
     * Constructs a declare node.
     *
     * @param DeclareDeclare[] \$declares   List of declares
     * @param Node\\Stmt[]|null \$stmts      Statements
     * @param array            \$attributes Additional attributes
     */
    public function __construct(array \$declares, array \$stmts = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->declares = \$declares;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['declares', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Declare';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Declare_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Declare_.php");
    }
}
