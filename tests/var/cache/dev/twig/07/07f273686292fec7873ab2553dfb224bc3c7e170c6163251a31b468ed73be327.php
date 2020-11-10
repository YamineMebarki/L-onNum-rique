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

/* vendor/nikic/php-parser/lib/PhpParser/Builder/Property.php */
class __TwigTemplate_55eca7299537b5df9c9809790b7f0cc38b45833d6310438cfa4bac2159e54bdf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Property.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Property.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\NullableType;
use PhpParser\\Node\\Stmt;

class Property implements PhpParser\\Builder
{
    protected \$name;

    protected \$flags = 0;
    protected \$default = null;
    protected \$attributes = [];

    /** @var null|Identifier|Name|NullableType */
    protected \$type;

    /**
     * Creates a property builder.
     *
     * @param string \$name Name of the property
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Makes the property public.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePublic() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PUBLIC);

        return \$this;
    }

    /**
     * Makes the property protected.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeProtected() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PROTECTED);

        return \$this;
    }

    /**
     * Makes the property private.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePrivate() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PRIVATE);

        return \$this;
    }

    /**
     * Makes the property static.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeStatic() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_STATIC);

        return \$this;
    }

    /**
     * Sets default value for the property.
     *
     * @param mixed \$value Default value to use
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setDefault(\$value) {
        \$this->default = BuilderHelpers::normalizeValue(\$value);

        return \$this;
    }

    /**
     * Sets doc comment for the property.
     *
     * @param PhpParser\\Comment\\Doc|string \$docComment Doc comment to set
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setDocComment(\$docComment) {
        \$this->attributes = [
            'comments' => [BuilderHelpers::normalizeDocComment(\$docComment)]
        ];

        return \$this;
    }

    /**
     * Sets the property type for PHP 7.4+.
     *
     * @param string|Name|NullableType|Identifier \$type
     *
     * @return \$this
     */
    public function setType(\$type) {
        \$this->type = BuilderHelpers::normalizeType(\$type);

        return \$this;
    }

    /**
     * Returns the built class node.
     *
     * @return Stmt\\Property The built property node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Property(
            \$this->flags !== 0 ? \$this->flags : Stmt\\Class_::MODIFIER_PUBLIC,
            [
                new Stmt\\PropertyProperty(\$this->name, \$this->default)
            ],
            \$this->attributes,
            \$this->type
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Builder/Property.php";
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
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\NullableType;
use PhpParser\\Node\\Stmt;

class Property implements PhpParser\\Builder
{
    protected \$name;

    protected \$flags = 0;
    protected \$default = null;
    protected \$attributes = [];

    /** @var null|Identifier|Name|NullableType */
    protected \$type;

    /**
     * Creates a property builder.
     *
     * @param string \$name Name of the property
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Makes the property public.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePublic() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PUBLIC);

        return \$this;
    }

    /**
     * Makes the property protected.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeProtected() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PROTECTED);

        return \$this;
    }

    /**
     * Makes the property private.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePrivate() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_PRIVATE);

        return \$this;
    }

    /**
     * Makes the property static.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeStatic() {
        \$this->flags = BuilderHelpers::addModifier(\$this->flags, Stmt\\Class_::MODIFIER_STATIC);

        return \$this;
    }

    /**
     * Sets default value for the property.
     *
     * @param mixed \$value Default value to use
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setDefault(\$value) {
        \$this->default = BuilderHelpers::normalizeValue(\$value);

        return \$this;
    }

    /**
     * Sets doc comment for the property.
     *
     * @param PhpParser\\Comment\\Doc|string \$docComment Doc comment to set
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setDocComment(\$docComment) {
        \$this->attributes = [
            'comments' => [BuilderHelpers::normalizeDocComment(\$docComment)]
        ];

        return \$this;
    }

    /**
     * Sets the property type for PHP 7.4+.
     *
     * @param string|Name|NullableType|Identifier \$type
     *
     * @return \$this
     */
    public function setType(\$type) {
        \$this->type = BuilderHelpers::normalizeType(\$type);

        return \$this;
    }

    /**
     * Returns the built class node.
     *
     * @return Stmt\\Property The built property node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Property(
            \$this->flags !== 0 ? \$this->flags : Stmt\\Class_::MODIFIER_PUBLIC,
            [
                new Stmt\\PropertyProperty(\$this->name, \$this->default)
            ],
            \$this->attributes,
            \$this->type
        );
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Builder/Property.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Builder/Property.php");
    }
}
