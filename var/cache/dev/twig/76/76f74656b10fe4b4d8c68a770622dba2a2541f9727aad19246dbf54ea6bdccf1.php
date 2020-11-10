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

/* vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php */
class __TwigTemplate_8078208412e54c22690c7930271709fecf64b5ec3f7edd57de50b97cffea1f2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\Stmt;

class Interface_ extends Declaration
{
    protected \$name;
    protected \$extends = [];
    protected \$constants = [];
    protected \$methods = [];

    /**
     * Creates an interface builder.
     *
     * @param string \$name Name of the interface
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Extends one or more interfaces.
     *
     * @param Name|string ...\$interfaces Names of interfaces to extend
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function extend(...\$interfaces) {
        foreach (\$interfaces as \$interface) {
            \$this->extends[] = BuilderHelpers::normalizeName(\$interface);
        }

        return \$this;
    }

    /**
     * Adds a statement.
     *
     * @param Stmt|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        \$stmt = BuilderHelpers::normalizeNode(\$stmt);

        if (\$stmt instanceof Stmt\\ClassConst) {
            \$this->constants[] = \$stmt;
        } elseif (\$stmt instanceof Stmt\\ClassMethod) {
            // we erase all statements in the body of an interface method
            \$stmt->stmts = null;
            \$this->methods[] = \$stmt;
        } else {
            throw new \\LogicException(sprintf('Unexpected node of type \"%s\"', \$stmt->getType()));
        }

        return \$this;
    }

    /**
     * Returns the built interface node.
     *
     * @return Stmt\\Interface_ The built interface node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Interface_(\$this->name, [
            'extends' => \$this->extends,
            'stmts' => array_merge(\$this->constants, \$this->methods),
        ], \$this->attributes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php";
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
use PhpParser\\Node\\Name;
use PhpParser\\Node\\Stmt;

class Interface_ extends Declaration
{
    protected \$name;
    protected \$extends = [];
    protected \$constants = [];
    protected \$methods = [];

    /**
     * Creates an interface builder.
     *
     * @param string \$name Name of the interface
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Extends one or more interfaces.
     *
     * @param Name|string ...\$interfaces Names of interfaces to extend
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function extend(...\$interfaces) {
        foreach (\$interfaces as \$interface) {
            \$this->extends[] = BuilderHelpers::normalizeName(\$interface);
        }

        return \$this;
    }

    /**
     * Adds a statement.
     *
     * @param Stmt|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        \$stmt = BuilderHelpers::normalizeNode(\$stmt);

        if (\$stmt instanceof Stmt\\ClassConst) {
            \$this->constants[] = \$stmt;
        } elseif (\$stmt instanceof Stmt\\ClassMethod) {
            // we erase all statements in the body of an interface method
            \$stmt->stmts = null;
            \$this->methods[] = \$stmt;
        } else {
            throw new \\LogicException(sprintf('Unexpected node of type \"%s\"', \$stmt->getType()));
        }

        return \$this;
    }

    /**
     * Returns the built interface node.
     *
     * @return Stmt\\Interface_ The built interface node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Interface_(\$this->name, [
            'extends' => \$this->extends,
            'stmts' => array_merge(\$this->constants, \$this->methods),
        ], \$this->attributes);
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php");
    }
}
