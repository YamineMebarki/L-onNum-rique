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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php */
class __TwigTemplate_82f4b9f32e1c5bbe787c6dbb2a44989091a090b225027d6805ea83c8883db904 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Arg;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;

class MethodCall extends Expr
{
    /** @var Expr Variable holding object */
    public \$var;
    /** @var Identifier|Expr Method name */
    public \$name;
    /** @var Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Expr                   \$var        Variable holding object
     * @param string|Identifier|Expr \$name       Method name
     * @param Arg[]                  \$args       Arguments
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(Expr \$var, \$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['var', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_MethodCall';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Arg;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;

class MethodCall extends Expr
{
    /** @var Expr Variable holding object */
    public \$var;
    /** @var Identifier|Expr Method name */
    public \$name;
    /** @var Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Expr                   \$var        Variable holding object
     * @param string|Identifier|Expr \$name       Method name
     * @param Arg[]                  \$args       Arguments
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(Expr \$var, \$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['var', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_MethodCall';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php");
    }
}
