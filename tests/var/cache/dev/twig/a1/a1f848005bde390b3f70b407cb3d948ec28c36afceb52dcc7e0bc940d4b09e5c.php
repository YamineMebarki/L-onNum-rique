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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php */
class __TwigTemplate_7f538eb510a0d381acd948bfb2f9c02043c7fc333c57f2396ca643fa53b12ec0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;

class ClassConstFetch extends Expr
{
    /** @var Name|Expr Class name */
    public \$class;
    /** @var Identifier|Error Constant name */
    public \$name;

    /**
     * Constructs a class const fetch node.
     *
     * @param Name|Expr               \$class      Class name
     * @param string|Identifier|Error \$name       Constant name
     * @param array                   \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_ClassConstFetch';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php";
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
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;

class ClassConstFetch extends Expr
{
    /** @var Name|Expr Class name */
    public \$class;
    /** @var Identifier|Error Constant name */
    public \$name;

    /**
     * Constructs a class const fetch node.
     *
     * @param Name|Expr               \$class      Class name
     * @param string|Identifier|Error \$name       Constant name
     * @param array                   \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_ClassConstFetch';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php");
    }
}
