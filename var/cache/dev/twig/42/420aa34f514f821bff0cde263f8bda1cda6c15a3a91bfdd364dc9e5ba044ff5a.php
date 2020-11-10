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

/* vendor/nikic/php-parser/lib/PhpParser/Builder/Class_.php */
class __TwigTemplate_fd4d36579005d70a7cb255cb6ea2e68d7bd20929a98130f2681a519968242138 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Class_.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Class_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\Stmt;

class Class_ extends Declaration
{
    protected \$name;

    protected \$extends = null;
    protected \$implements = [];
    protected \$flags = 0;

    protected \$uses = [];
    protected \$constants = [];
    protected \$properties = [];
    protected \$methods = [];

    /**
     * Creates a class builder.
     *
     * @param string \$name Name of the class
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Extends a class.
     *
     * @param Name|string \$class Name of class to extend
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function extend(\$class) {
        \$this->extends = BuilderHelpers::normalizeName(\$class);

        return \$this;
    }

    /**
     * Implements one or more interfaces.
     *
     * @param Name|string ...\$interfaces Names of interfaces to implement
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function implement(...\$interfaces) {
        foreach (\$interfaces as \$interface) {
            \$this->implements[] = BuilderHelpers::normalizeName(\$interface);
        }

        return \$this;
    }

    /**
     * Makes the class abstract.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeAbstract() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_ABSTRACT);

        return \$this;
    }

    /**
     * Makes the class final.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeFinal() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_FINAL);

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

        \$targets = [
            Stmt\\TraitUse::class    => &\$this->uses,
            Stmt\\ClassConst::class  => &\$this->constants,
            Stmt\\Property::class    => &\$this->properties,
            Stmt\\ClassMethod::class => &\$this->methods,
        ];

        \$class = \\get_class(\$stmt);
        if (!isset(\$targets[\$class])) {
            throw new \\LogicException(sprintf('Unexpected node of type \"%s\"', \$stmt->getType()));
        }

        \$targets[\$class][] = \$stmt;

        return \$this;
    }

    /**
     * Returns the built class node.
     *
     * @return Stmt\\Class_ The built class node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Class_(\$this->name, [
            'flags' => \$this->flags,
            'extends' => \$this->extends,
            'implements' => \$this->implements,
            'stmts' => array_merge(\$this->uses, \$this->constants, \$this->properties, \$this->methods),
        ], \$this->attributes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Builder/Class_.php";
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

class Class_ extends Declaration
{
    protected \$name;

    protected \$extends = null;
    protected \$implements = [];
    protected \$flags = 0;

    protected \$uses = [];
    protected \$constants = [];
    protected \$properties = [];
    protected \$methods = [];

    /**
     * Creates a class builder.
     *
     * @param string \$name Name of the class
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Extends a class.
     *
     * @param Name|string \$class Name of class to extend
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function extend(\$class) {
        \$this->extends = BuilderHelpers::normalizeName(\$class);

        return \$this;
    }

    /**
     * Implements one or more interfaces.
     *
     * @param Name|string ...\$interfaces Names of interfaces to implement
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function implement(...\$interfaces) {
        foreach (\$interfaces as \$interface) {
            \$this->implements[] = BuilderHelpers::normalizeName(\$interface);
        }

        return \$this;
    }

    /**
     * Makes the class abstract.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeAbstract() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_ABSTRACT);

        return \$this;
    }

    /**
     * Makes the class final.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeFinal() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_FINAL);

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

        \$targets = [
            Stmt\\TraitUse::class    => &\$this->uses,
            Stmt\\ClassConst::class  => &\$this->constants,
            Stmt\\Property::class    => &\$this->properties,
            Stmt\\ClassMethod::class => &\$this->methods,
        ];

        \$class = \\get_class(\$stmt);
        if (!isset(\$targets[\$class])) {
            throw new \\LogicException(sprintf('Unexpected node of type \"%s\"', \$stmt->getType()));
        }

        \$targets[\$class][] = \$stmt;

        return \$this;
    }

    /**
     * Returns the built class node.
     *
     * @return Stmt\\Class_ The built class node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Class_(\$this->name, [
            'flags' => \$this->flags,
            'extends' => \$this->extends,
            'implements' => \$this->implements,
            'stmts' => array_merge(\$this->uses, \$this->constants, \$this->properties, \$this->methods),
        ], \$this->attributes);
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Builder/Class_.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Builder/Class_.php");
    }
}
