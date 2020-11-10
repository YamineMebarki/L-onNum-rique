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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php */
class __TwigTemplate_6bf6a9badfa123de75695296718c2c3de3d21c6c104bf46bacb32dfd4c563180 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class Include_ extends Expr
{
    const TYPE_INCLUDE      = 1;
    const TYPE_INCLUDE_ONCE = 2;
    const TYPE_REQUIRE      = 3;
    const TYPE_REQUIRE_ONCE = 4;

    /** @var Expr Expression */
    public \$expr;
    /** @var int Type of include */
    public \$type;

    /**
     * Constructs an include node.
     *
     * @param Expr  \$expr       Expression
     * @param int   \$type       Type of include
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$expr, int \$type, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
        \$this->type = \$type;
    }

    public function getSubNodeNames() : array {
        return ['expr', 'type'];
    }
    
    public function getType() : string {
        return 'Expr_Include';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class Include_ extends Expr
{
    const TYPE_INCLUDE      = 1;
    const TYPE_INCLUDE_ONCE = 2;
    const TYPE_REQUIRE      = 3;
    const TYPE_REQUIRE_ONCE = 4;

    /** @var Expr Expression */
    public \$expr;
    /** @var int Type of include */
    public \$type;

    /**
     * Constructs an include node.
     *
     * @param Expr  \$expr       Expression
     * @param int   \$type       Type of include
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$expr, int \$type, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
        \$this->type = \$type;
    }

    public function getSubNodeNames() : array {
        return ['expr', 'type'];
    }
    
    public function getType() : string {
        return 'Expr_Include';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php");
    }
}
