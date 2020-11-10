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

/* vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php */
class __TwigTemplate_d18241681fa4b8383cb82ff3c5146b6dc949ff9b669b4f9fa1281c7f56a89286 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\Builder;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class Use_ implements Builder
{
    protected \$name;
    protected \$type;
    protected \$alias = null;

    /**
     * Creates a name use (alias) builder.
     *
     * @param Node\\Name|string \$name Name of the entity (namespace, class, function, constant) to alias
     * @param int              \$type One of the Stmt\\Use_::TYPE_* constants
     */
    public function __construct(\$name, int \$type) {
        \$this->name = BuilderHelpers::normalizeName(\$name);
        \$this->type = \$type;
    }

    /**
     * Sets alias for used name.
     *
     * @param string \$alias Alias to use (last component of full name by default)
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function as(string \$alias) {
        \$this->alias = \$alias;
        return \$this;
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        return new Stmt\\Use_([
            new Stmt\\UseUse(\$this->name, \$this->alias)
        ], \$this->type);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\Builder;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class Use_ implements Builder
{
    protected \$name;
    protected \$type;
    protected \$alias = null;

    /**
     * Creates a name use (alias) builder.
     *
     * @param Node\\Name|string \$name Name of the entity (namespace, class, function, constant) to alias
     * @param int              \$type One of the Stmt\\Use_::TYPE_* constants
     */
    public function __construct(\$name, int \$type) {
        \$this->name = BuilderHelpers::normalizeName(\$name);
        \$this->type = \$type;
    }

    /**
     * Sets alias for used name.
     *
     * @param string \$alias Alias to use (last component of full name by default)
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function as(string \$alias) {
        \$this->alias = \$alias;
        return \$this;
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        return new Stmt\\Use_([
            new Stmt\\UseUse(\$this->name, \$this->alias)
        ], \$this->type);
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php");
    }
}
