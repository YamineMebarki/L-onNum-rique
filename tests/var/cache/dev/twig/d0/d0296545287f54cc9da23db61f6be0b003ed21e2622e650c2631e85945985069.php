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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php */
class __TwigTemplate_03ee438e05b6a0049f438caea05f2d6902d813294f60d268b9b4b1eb24bb67cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class ArrayItem extends Expr
{
    /** @var null|Expr Key */
    public \$key;
    /** @var Expr Value */
    public \$value;
    /** @var bool Whether to assign by reference */
    public \$byRef;
    /** @var bool Whether to unpack the argument */
    public \$unpack;

    /**
     * Constructs an array item node.
     *
     * @param Expr      \$value      Value
     * @param null|Expr \$key        Key
     * @param bool      \$byRef      Whether to assign by reference
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$value, Expr \$key = null, bool \$byRef = false, array \$attributes = [], bool \$unpack = false) {
        \$this->attributes = \$attributes;
        \$this->key = \$key;
        \$this->value = \$value;
        \$this->byRef = \$byRef;
        \$this->unpack = \$unpack;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value', 'byRef', 'unpack'];
    }

    public function getType() : string {
        return 'Expr_ArrayItem';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php";
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

class ArrayItem extends Expr
{
    /** @var null|Expr Key */
    public \$key;
    /** @var Expr Value */
    public \$value;
    /** @var bool Whether to assign by reference */
    public \$byRef;
    /** @var bool Whether to unpack the argument */
    public \$unpack;

    /**
     * Constructs an array item node.
     *
     * @param Expr      \$value      Value
     * @param null|Expr \$key        Key
     * @param bool      \$byRef      Whether to assign by reference
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$value, Expr \$key = null, bool \$byRef = false, array \$attributes = [], bool \$unpack = false) {
        \$this->attributes = \$attributes;
        \$this->key = \$key;
        \$this->value = \$value;
        \$this->byRef = \$byRef;
        \$this->unpack = \$unpack;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value', 'byRef', 'unpack'];
    }

    public function getType() : string {
        return 'Expr_ArrayItem';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php");
    }
}
