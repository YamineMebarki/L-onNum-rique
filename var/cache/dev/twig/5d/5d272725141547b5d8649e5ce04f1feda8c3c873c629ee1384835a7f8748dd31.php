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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php */
class __TwigTemplate_8008f8d0f42176d6b183fa0a1cd5e49172fe6a5b724b5dbe3f8f36c9945bc9e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\NullableType;

class Property extends Node\\Stmt
{
    /** @var int Modifiers */
    public \$flags;
    /** @var PropertyProperty[] Properties */
    public \$props;
    /** @var null|Identifier|Name|NullableType Type declaration */
    public \$type;

    /**
     * Constructs a class property list node.
     *
     * @param int                                      \$flags      Modifiers
     * @param PropertyProperty[]                       \$props      Properties
     * @param array                                    \$attributes Additional attributes
     * @param null|string|Identifier|Name|NullableType \$type       Type declaration
     */
    public function __construct(int \$flags, array \$props, array \$attributes = [], \$type = null) {
        \$this->attributes = \$attributes;
        \$this->flags = \$flags;
        \$this->props = \$props;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
    }

    public function getSubNodeNames() : array {
        return ['flags', 'type', 'props'];
    }

    /**
     * Whether the property is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether the property is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether the property is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }

    /**
     * Whether the property is static.
     *
     * @return bool
     */
    public function isStatic() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_STATIC);
    }

    public function getType() : string {
        return 'Stmt_Property';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php";
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
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\NullableType;

class Property extends Node\\Stmt
{
    /** @var int Modifiers */
    public \$flags;
    /** @var PropertyProperty[] Properties */
    public \$props;
    /** @var null|Identifier|Name|NullableType Type declaration */
    public \$type;

    /**
     * Constructs a class property list node.
     *
     * @param int                                      \$flags      Modifiers
     * @param PropertyProperty[]                       \$props      Properties
     * @param array                                    \$attributes Additional attributes
     * @param null|string|Identifier|Name|NullableType \$type       Type declaration
     */
    public function __construct(int \$flags, array \$props, array \$attributes = [], \$type = null) {
        \$this->attributes = \$attributes;
        \$this->flags = \$flags;
        \$this->props = \$props;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
    }

    public function getSubNodeNames() : array {
        return ['flags', 'type', 'props'];
    }

    /**
     * Whether the property is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether the property is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether the property is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }

    /**
     * Whether the property is static.
     *
     * @return bool
     */
    public function isStatic() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_STATIC);
    }

    public function getType() : string {
        return 'Stmt_Property';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php");
    }
}
