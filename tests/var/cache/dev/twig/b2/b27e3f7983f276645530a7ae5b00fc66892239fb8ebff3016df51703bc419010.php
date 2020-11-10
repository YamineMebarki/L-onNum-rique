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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php */
class __TwigTemplate_3533dd6570637cc0d40eccb4a4eb89e254cc3d37b297d0abb113de7ea9fcee14 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class ArrayDimFetch extends Expr
{
    /** @var Expr Variable */
    public \$var;
    /** @var null|Expr Array index / dim */
    public \$dim;

    /**
     * Constructs an array index fetch node.
     *
     * @param Expr      \$var        Variable
     * @param null|Expr \$dim        Array index / dim
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$var, Expr \$dim = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->dim = \$dim;
    }

    public function getSubNodeNames() : array {
        return ['var', 'dim'];
    }
    
    public function getType() : string {
        return 'Expr_ArrayDimFetch';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php";
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

class ArrayDimFetch extends Expr
{
    /** @var Expr Variable */
    public \$var;
    /** @var null|Expr Array index / dim */
    public \$dim;

    /**
     * Constructs an array index fetch node.
     *
     * @param Expr      \$var        Variable
     * @param null|Expr \$dim        Array index / dim
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$var, Expr \$dim = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->dim = \$dim;
    }

    public function getSubNodeNames() : array {
        return ['var', 'dim'];
    }
    
    public function getType() : string {
        return 'Expr_ArrayDimFetch';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php");
    }
}
