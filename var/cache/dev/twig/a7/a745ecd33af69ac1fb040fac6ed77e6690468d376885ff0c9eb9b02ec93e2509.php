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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php */
class __TwigTemplate_df776d8fbe08cf33683341133215a84c211e6d57ec89b9a229c5bb67e89db869 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\VarLikeIdentifier;

class StaticPropertyFetch extends Expr
{
    /** @var Name|Expr Class name */
    public \$class;
    /** @var VarLikeIdentifier|Expr Property name */
    public \$name;

    /**
     * Constructs a static property fetch node.
     *
     * @param Name|Expr                     \$class      Class name
     * @param string|VarLikeIdentifier|Expr \$name       Property name
     * @param array                         \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new VarLikeIdentifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_StaticPropertyFetch';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php";
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
use PhpParser\\Node\\Name;
use PhpParser\\Node\\VarLikeIdentifier;

class StaticPropertyFetch extends Expr
{
    /** @var Name|Expr Class name */
    public \$class;
    /** @var VarLikeIdentifier|Expr Property name */
    public \$name;

    /**
     * Constructs a static property fetch node.
     *
     * @param Name|Expr                     \$class      Class name
     * @param string|VarLikeIdentifier|Expr \$name       Property name
     * @param array                         \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new VarLikeIdentifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_StaticPropertyFetch';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php");
    }
}
