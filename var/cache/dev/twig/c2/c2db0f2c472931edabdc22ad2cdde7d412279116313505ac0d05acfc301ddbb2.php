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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php */
class __TwigTemplate_1e234910f0c15a7474c48059cffa7e6a1a36eeff1f9bdd91a2f10209dd38a04e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class DeclareDeclare extends Node\\Stmt
{
    /** @var Node\\Identifier Key */
    public \$key;
    /** @var Node\\Expr Value */
    public \$value;

    /**
     * Constructs a declare key=>value pair node.
     *
     * @param string|Node\\Identifier \$key        Key
     * @param Node\\Expr              \$value      Value
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$key, Node\\Expr \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->key = \\is_string(\$key) ? new Node\\Identifier(\$key) : \$key;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value'];
    }
    
    public function getType() : string {
        return 'Stmt_DeclareDeclare';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php";
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

class DeclareDeclare extends Node\\Stmt
{
    /** @var Node\\Identifier Key */
    public \$key;
    /** @var Node\\Expr Value */
    public \$value;

    /**
     * Constructs a declare key=>value pair node.
     *
     * @param string|Node\\Identifier \$key        Key
     * @param Node\\Expr              \$value      Value
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$key, Node\\Expr \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->key = \\is_string(\$key) ? new Node\\Identifier(\$key) : \$key;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value'];
    }
    
    public function getType() : string {
        return 'Stmt_DeclareDeclare';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php");
    }
}
