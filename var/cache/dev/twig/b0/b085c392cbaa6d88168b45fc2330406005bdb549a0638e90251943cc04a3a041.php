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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php */
class __TwigTemplate_c5b138e4b6d31574bff99bacea1668d8d4019f03d9ee64e6647e8c9df4b052f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\FunctionLike;

class Closure extends Expr implements FunctionLike
{
    /** @var bool Whether the closure is static */
    public \$static;
    /** @var bool Whether to return by reference */
    public \$byRef;
    /** @var Node\\Param[] Parameters */
    public \$params;
    /** @var ClosureUse[] use()s */
    public \$uses;
    /** @var null|Node\\Identifier|Node\\Name|Node\\NullableType Return type */
    public \$returnType;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a lambda function node.
     *
     * @param array \$subNodes   Array of the following optional subnodes:
     *                          'static'     => false  : Whether the closure is static
     *                          'byRef'      => false  : Whether to return by reference
     *                          'params'     => array(): Parameters
     *                          'uses'       => array(): use()s
     *                          'returnType' => null   : Return type
     *                          'stmts'      => array(): Statements
     * @param array \$attributes Additional attributes
     */
    public function __construct(array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->static = \$subNodes['static'] ?? false;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->params = \$subNodes['params'] ?? [];
        \$this->uses = \$subNodes['uses'] ?? [];
        \$returnType = \$subNodes['returnType'] ?? null;
        \$this->returnType = \\is_string(\$returnType) ? new Node\\Identifier(\$returnType) : \$returnType;
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['static', 'byRef', 'params', 'uses', 'returnType', 'stmts'];
    }

    public function returnsByRef() : bool {
        return \$this->byRef;
    }

    public function getParams() : array {
        return \$this->params;
    }

    public function getReturnType() {
        return \$this->returnType;
    }

    /** @return Node\\Stmt[] */
    public function getStmts() : array {
        return \$this->stmts;
    }
    
    public function getType() : string {
        return 'Expr_Closure';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php";
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
use PhpParser\\Node\\FunctionLike;

class Closure extends Expr implements FunctionLike
{
    /** @var bool Whether the closure is static */
    public \$static;
    /** @var bool Whether to return by reference */
    public \$byRef;
    /** @var Node\\Param[] Parameters */
    public \$params;
    /** @var ClosureUse[] use()s */
    public \$uses;
    /** @var null|Node\\Identifier|Node\\Name|Node\\NullableType Return type */
    public \$returnType;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a lambda function node.
     *
     * @param array \$subNodes   Array of the following optional subnodes:
     *                          'static'     => false  : Whether the closure is static
     *                          'byRef'      => false  : Whether to return by reference
     *                          'params'     => array(): Parameters
     *                          'uses'       => array(): use()s
     *                          'returnType' => null   : Return type
     *                          'stmts'      => array(): Statements
     * @param array \$attributes Additional attributes
     */
    public function __construct(array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->static = \$subNodes['static'] ?? false;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->params = \$subNodes['params'] ?? [];
        \$this->uses = \$subNodes['uses'] ?? [];
        \$returnType = \$subNodes['returnType'] ?? null;
        \$this->returnType = \\is_string(\$returnType) ? new Node\\Identifier(\$returnType) : \$returnType;
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['static', 'byRef', 'params', 'uses', 'returnType', 'stmts'];
    }

    public function returnsByRef() : bool {
        return \$this->byRef;
    }

    public function getParams() : array {
        return \$this->params;
    }

    public function getReturnType() {
        return \$this->returnType;
    }

    /** @return Node\\Stmt[] */
    public function getStmts() : array {
        return \$this->stmts;
    }
    
    public function getType() : string {
        return 'Expr_Closure';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php");
    }
}
