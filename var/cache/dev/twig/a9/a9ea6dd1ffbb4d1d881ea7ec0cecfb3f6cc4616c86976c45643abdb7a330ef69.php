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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php */
class __TwigTemplate_b4fc353584aa5a132ad90b7a78295f2eb07fc65a52f0875540013399d234b782 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class ClassConst extends Node\\Stmt
{
    /** @var int Modifiers */
    public \$flags;
    /** @var Node\\Const_[] Constant declarations */
    public \$consts;

    /**
     * Constructs a class const list node.
     *
     * @param Node\\Const_[] \$consts     Constant declarations
     * @param int           \$flags      Modifiers
     * @param array         \$attributes Additional attributes
     */
    public function __construct(array \$consts, int \$flags = 0, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->flags = \$flags;
        \$this->consts = \$consts;
    }

    public function getSubNodeNames() : array {
        return ['flags', 'consts'];
    }

    /**
     * Whether constant is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether constant is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether constant is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }
    
    public function getType() : string {
        return 'Stmt_ClassConst';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php";
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

class ClassConst extends Node\\Stmt
{
    /** @var int Modifiers */
    public \$flags;
    /** @var Node\\Const_[] Constant declarations */
    public \$consts;

    /**
     * Constructs a class const list node.
     *
     * @param Node\\Const_[] \$consts     Constant declarations
     * @param int           \$flags      Modifiers
     * @param array         \$attributes Additional attributes
     */
    public function __construct(array \$consts, int \$flags = 0, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->flags = \$flags;
        \$this->consts = \$consts;
    }

    public function getSubNodeNames() : array {
        return ['flags', 'consts'];
    }

    /**
     * Whether constant is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether constant is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether constant is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }
    
    public function getType() : string {
        return 'Stmt_ClassConst';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php");
    }
}
