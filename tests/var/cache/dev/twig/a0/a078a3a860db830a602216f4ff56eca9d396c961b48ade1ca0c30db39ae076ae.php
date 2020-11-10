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

/* vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php */
class __TwigTemplate_ebbd71cd0b5bd58a25fe9e3e59600b8768ef2bf69efcdeda796fc3bcccc2c9bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\Builder;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class TraitUseAdaptation implements Builder
{
    const TYPE_UNDEFINED  = 0;
    const TYPE_ALIAS      = 1;
    const TYPE_PRECEDENCE = 2;

    /** @var int Type of building adaptation */
    protected \$type;

    protected \$trait;
    protected \$method;

    protected \$modifier = null;
    protected \$alias = null;

    protected \$insteadof = [];

    /**
     * Creates a trait use adaptation builder.
     *
     * @param Node\\Name|string|null  \$trait  Name of adaptated trait
     * @param Node\\Identifier|string \$method Name of adaptated method
     */
    public function __construct(\$trait, \$method) {
        \$this->type = self::TYPE_UNDEFINED;

        \$this->trait = is_null(\$trait)? null: BuilderHelpers::normalizeName(\$trait);
        \$this->method = BuilderHelpers::normalizeIdentifier(\$method);
    }

    /**
     * Sets alias of method.
     *
     * @param Node\\Identifier|string \$alias Alias for adaptated method
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function as(\$alias) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            \$this->type = self::TYPE_ALIAS;
        }

        if (\$this->type !== self::TYPE_ALIAS) {
            throw new \\LogicException('Cannot set alias for not alias adaptation buider');
        }

        \$this->alias = \$alias;
        return \$this;
    }

    /**
     * Sets adaptated method public.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePublic() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PUBLIC);
        return \$this;
    }

    /**
     * Sets adaptated method protected.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeProtected() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PROTECTED);
        return \$this;
    }

    /**
     * Sets adaptated method private.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePrivate() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PRIVATE);
        return \$this;
    }

    /**
     * Adds overwritten traits.
     *
     * @param Node\\Name|string ...\$traits Traits for overwrite
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function insteadof(...\$traits) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            if (is_null(\$this->trait)) {
                throw new \\LogicException('Precedence adaptation must have trait');
            }

            \$this->type = self::TYPE_PRECEDENCE;
        }

        if (\$this->type !== self::TYPE_PRECEDENCE) {
            throw new \\LogicException('Cannot add overwritten traits for not precedence adaptation buider');
        }

        foreach (\$traits as \$trait) {
            \$this->insteadof[] = BuilderHelpers::normalizeName(\$trait);
        }

        return \$this;
    }

    protected function setModifier(int \$modifier) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            \$this->type = self::TYPE_ALIAS;
        }

        if (\$this->type !== self::TYPE_ALIAS) {
            throw new \\LogicException('Cannot set access modifier for not alias adaptation buider');
        }

        if (is_null(\$this->modifier)) {
            \$this->modifier = \$modifier;
        } else {
            throw new \\LogicException('Multiple access type modifiers are not allowed');
        }
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        switch (\$this->type) {
            case self::TYPE_ALIAS:
                return new Stmt\\TraitUseAdaptation\\Alias(\$this->trait, \$this->method, \$this->modifier, \$this->alias);
            case self::TYPE_PRECEDENCE:
                return new Stmt\\TraitUseAdaptation\\Precedence(\$this->trait, \$this->method, \$this->insteadof);
            default:
                throw new \\LogicException('Type of adaptation is not defined');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php";
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

class TraitUseAdaptation implements Builder
{
    const TYPE_UNDEFINED  = 0;
    const TYPE_ALIAS      = 1;
    const TYPE_PRECEDENCE = 2;

    /** @var int Type of building adaptation */
    protected \$type;

    protected \$trait;
    protected \$method;

    protected \$modifier = null;
    protected \$alias = null;

    protected \$insteadof = [];

    /**
     * Creates a trait use adaptation builder.
     *
     * @param Node\\Name|string|null  \$trait  Name of adaptated trait
     * @param Node\\Identifier|string \$method Name of adaptated method
     */
    public function __construct(\$trait, \$method) {
        \$this->type = self::TYPE_UNDEFINED;

        \$this->trait = is_null(\$trait)? null: BuilderHelpers::normalizeName(\$trait);
        \$this->method = BuilderHelpers::normalizeIdentifier(\$method);
    }

    /**
     * Sets alias of method.
     *
     * @param Node\\Identifier|string \$alias Alias for adaptated method
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function as(\$alias) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            \$this->type = self::TYPE_ALIAS;
        }

        if (\$this->type !== self::TYPE_ALIAS) {
            throw new \\LogicException('Cannot set alias for not alias adaptation buider');
        }

        \$this->alias = \$alias;
        return \$this;
    }

    /**
     * Sets adaptated method public.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePublic() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PUBLIC);
        return \$this;
    }

    /**
     * Sets adaptated method protected.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeProtected() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PROTECTED);
        return \$this;
    }

    /**
     * Sets adaptated method private.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePrivate() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PRIVATE);
        return \$this;
    }

    /**
     * Adds overwritten traits.
     *
     * @param Node\\Name|string ...\$traits Traits for overwrite
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function insteadof(...\$traits) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            if (is_null(\$this->trait)) {
                throw new \\LogicException('Precedence adaptation must have trait');
            }

            \$this->type = self::TYPE_PRECEDENCE;
        }

        if (\$this->type !== self::TYPE_PRECEDENCE) {
            throw new \\LogicException('Cannot add overwritten traits for not precedence adaptation buider');
        }

        foreach (\$traits as \$trait) {
            \$this->insteadof[] = BuilderHelpers::normalizeName(\$trait);
        }

        return \$this;
    }

    protected function setModifier(int \$modifier) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            \$this->type = self::TYPE_ALIAS;
        }

        if (\$this->type !== self::TYPE_ALIAS) {
            throw new \\LogicException('Cannot set access modifier for not alias adaptation buider');
        }

        if (is_null(\$this->modifier)) {
            \$this->modifier = \$modifier;
        } else {
            throw new \\LogicException('Multiple access type modifiers are not allowed');
        }
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        switch (\$this->type) {
            case self::TYPE_ALIAS:
                return new Stmt\\TraitUseAdaptation\\Alias(\$this->trait, \$this->method, \$this->modifier, \$this->alias);
            case self::TYPE_PRECEDENCE:
                return new Stmt\\TraitUseAdaptation\\Precedence(\$this->trait, \$this->method, \$this->insteadof);
            default:
                throw new \\LogicException('Type of adaptation is not defined');
        }
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php");
    }
}
