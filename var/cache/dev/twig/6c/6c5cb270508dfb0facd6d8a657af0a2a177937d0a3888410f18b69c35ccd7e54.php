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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php */
class __TwigTemplate_43b330d036cc4a64693215c014450f0a1fd9ad549dd6f1a4dec73690c0b8b2f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node\\Stmt;

class Use_ extends Stmt
{
    /**
     * Unknown type. Both Stmt\\Use_ / Stmt\\GroupUse and Stmt\\UseUse have a \$type property, one of them will always be
     * TYPE_UNKNOWN while the other has one of the three other possible types. For normal use statements the type on the
     * Stmt\\UseUse is unknown. It's only the other way around for mixed group use declarations.
     */
    const TYPE_UNKNOWN = 0;
    /** Class or namespace import */
    const TYPE_NORMAL = 1;
    /** Function import */
    const TYPE_FUNCTION = 2;
    /** Constant import */
    const TYPE_CONSTANT = 3;

    /** @var int Type of alias */
    public \$type;
    /** @var UseUse[] Aliases */
    public \$uses;

    /**
     * Constructs an alias (use) list node.
     *
     * @param UseUse[] \$uses       Aliases
     * @param int      \$type       Type of alias
     * @param array    \$attributes Additional attributes
     */
    public function __construct(array \$uses, int \$type = self::TYPE_NORMAL, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \$type;
        \$this->uses = \$uses;
    }

    public function getSubNodeNames() : array {
        return ['type', 'uses'];
    }
    
    public function getType() : string {
        return 'Stmt_Use';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node\\Stmt;

class Use_ extends Stmt
{
    /**
     * Unknown type. Both Stmt\\Use_ / Stmt\\GroupUse and Stmt\\UseUse have a \$type property, one of them will always be
     * TYPE_UNKNOWN while the other has one of the three other possible types. For normal use statements the type on the
     * Stmt\\UseUse is unknown. It's only the other way around for mixed group use declarations.
     */
    const TYPE_UNKNOWN = 0;
    /** Class or namespace import */
    const TYPE_NORMAL = 1;
    /** Function import */
    const TYPE_FUNCTION = 2;
    /** Constant import */
    const TYPE_CONSTANT = 3;

    /** @var int Type of alias */
    public \$type;
    /** @var UseUse[] Aliases */
    public \$uses;

    /**
     * Constructs an alias (use) list node.
     *
     * @param UseUse[] \$uses       Aliases
     * @param int      \$type       Type of alias
     * @param array    \$attributes Additional attributes
     */
    public function __construct(array \$uses, int \$type = self::TYPE_NORMAL, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \$type;
        \$this->uses = \$uses;
    }

    public function getSubNodeNames() : array {
        return ['type', 'uses'];
    }
    
    public function getType() : string {
        return 'Stmt_Use';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php");
    }
}
