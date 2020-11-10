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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php */
class __TwigTemplate_61f8689a9b1b230885abe9046464584964e5e8d558c3e22d73ce4b35df4d8929 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;

class StaticCall extends Expr
{
    /** @var Node\\Name|Expr Class name */
    public \$class;
    /** @var Identifier|Expr Method name */
    public \$name;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a static method call node.
     *
     * @param Node\\Name|Expr         \$class      Class name
     * @param string|Identifier|Expr \$name       Method name
     * @param Node\\Arg[]             \$args       Arguments
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_StaticCall';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php";
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
use PhpParser\\Node\\Identifier;

class StaticCall extends Expr
{
    /** @var Node\\Name|Expr Class name */
    public \$class;
    /** @var Identifier|Expr Method name */
    public \$name;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a static method call node.
     *
     * @param Node\\Name|Expr         \$class      Class name
     * @param string|Identifier|Expr \$name       Method name
     * @param Node\\Arg[]             \$args       Arguments
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_StaticCall';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php");
    }
}
