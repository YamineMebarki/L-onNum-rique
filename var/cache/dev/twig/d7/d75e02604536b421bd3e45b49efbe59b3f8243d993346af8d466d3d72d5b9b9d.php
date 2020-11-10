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

/* vendor/nikic/php-parser/lib/PhpParser/Builder/Namespace_.php */
class __TwigTemplate_cc376f4e860707218d31205c47386f2257f8458aaadeb2bb6a81bb745806cc27 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Namespace_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Namespace_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class Namespace_ extends Declaration
{
    private \$name;
    private \$stmts = [];

    /**
     * Creates a namespace builder.
     *
     * @param Node\\Name|string|null \$name Name of the namespace
     */
    public function __construct(\$name) {
        \$this->name = null !== \$name ? BuilderHelpers::normalizeName(\$name) : null;
    }

    /**
     * Adds a statement.
     *
     * @param Node|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        \$this->stmts[] = BuilderHelpers::normalizeStmt(\$stmt);

        return \$this;
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        return new Stmt\\Namespace_(\$this->name, \$this->stmts, \$this->attributes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Builder/Namespace_.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class Namespace_ extends Declaration
{
    private \$name;
    private \$stmts = [];

    /**
     * Creates a namespace builder.
     *
     * @param Node\\Name|string|null \$name Name of the namespace
     */
    public function __construct(\$name) {
        \$this->name = null !== \$name ? BuilderHelpers::normalizeName(\$name) : null;
    }

    /**
     * Adds a statement.
     *
     * @param Node|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        \$this->stmts[] = BuilderHelpers::normalizeStmt(\$stmt);

        return \$this;
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        return new Stmt\\Namespace_(\$this->name, \$this->stmts, \$this->attributes);
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Builder/Namespace_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Builder/Namespace_.php");
    }
}
