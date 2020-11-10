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

/* vendor/nikic/php-parser/lib/PhpParser/Builder/Method.php */
class __TwigTemplate_09240e9b08a4f77ac2aefbcc0f82fa78f585f53e1ec07520ca01fd97d94f8f8e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Method.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Method.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class Method extends FunctionLike
{
    protected \$name;
    protected \$flags = 0;

    /** @var array|null */
    protected \$stmts = [];

    /**
     * Creates a method builder.
     *
     * @param string \$name Name of the method
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Makes the method public.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePublic() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PUBLIC);

        return \$this;
    }

    /**
     * Makes the method protected.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeProtected() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PROTECTED);

        return \$this;
    }

    /**
     * Makes the method private.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePrivate() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PRIVATE);

        return \$this;
    }

    /**
     * Makes the method static.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeStatic() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_STATIC);

        return \$this;
    }

    /**
     * Makes the method abstract.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeAbstract() {
        if (!empty(\$this->stmts)) {
            throw new \\LogicException('Cannot make method with statements abstract');
        }

        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_ABSTRACT);
        \$this->stmts = null; // abstract methods don't have statements

        return \$this;
    }

    /**
     * Makes the method final.
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
     * @param Node|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        if (null === \$this->stmts) {
            throw new \\LogicException('Cannot add statements to an abstract method');
        }

        \$this->stmts[] = BuilderHelpers::normalizeStmt(\$stmt);

        return \$this;
    }

    /**
     * Returns the built method node.
     *
     * @return Stmt\\ClassMethod The built method node
     */
    public function getNode() : Node {
        return new Stmt\\ClassMethod(\$this->name, [
            'flags'      => \$this->flags,
            'byRef'      => \$this->returnByRef,
            'params'     => \$this->params,
            'returnType' => \$this->returnType,
            'stmts'      => \$this->stmts,
        ], \$this->attributes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Builder/Method.php";
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

class Method extends FunctionLike
{
    protected \$name;
    protected \$flags = 0;

    /** @var array|null */
    protected \$stmts = [];

    /**
     * Creates a method builder.
     *
     * @param string \$name Name of the method
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Makes the method public.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePublic() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PUBLIC);

        return \$this;
    }

    /**
     * Makes the method protected.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeProtected() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PROTECTED);

        return \$this;
    }

    /**
     * Makes the method private.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePrivate() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PRIVATE);

        return \$this;
    }

    /**
     * Makes the method static.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeStatic() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_STATIC);

        return \$this;
    }

    /**
     * Makes the method abstract.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeAbstract() {
        if (!empty(\$this->stmts)) {
            throw new \\LogicException('Cannot make method with statements abstract');
        }

        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_ABSTRACT);
        \$this->stmts = null; // abstract methods don't have statements

        return \$this;
    }

    /**
     * Makes the method final.
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
     * @param Node|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        if (null === \$this->stmts) {
            throw new \\LogicException('Cannot add statements to an abstract method');
        }

        \$this->stmts[] = BuilderHelpers::normalizeStmt(\$stmt);

        return \$this;
    }

    /**
     * Returns the built method node.
     *
     * @return Stmt\\ClassMethod The built method node
     */
    public function getNode() : Node {
        return new Stmt\\ClassMethod(\$this->name, [
            'flags'      => \$this->flags,
            'byRef'      => \$this->returnByRef,
            'params'     => \$this->params,
            'returnType' => \$this->returnType,
            'stmts'      => \$this->stmts,
        ], \$this->attributes);
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Builder/Method.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Builder/Method.php");
    }
}
