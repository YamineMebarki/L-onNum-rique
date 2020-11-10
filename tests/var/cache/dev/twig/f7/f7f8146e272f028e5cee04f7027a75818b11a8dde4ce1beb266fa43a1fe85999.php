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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassMethod.php */
class __TwigTemplate_84f613a4a72ff758d3750af3cc7f37ea4d97478bc39d11274f05b03372d9a1ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassMethod.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassMethod.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;
use PhpParser\\Node\\FunctionLike;

class ClassMethod extends Node\\Stmt implements FunctionLike
{
    /** @var int Flags */
    public \$flags;
    /** @var bool Whether to return by reference */
    public \$byRef;
    /** @var Node\\Identifier Name */
    public \$name;
    /** @var Node\\Param[] Parameters */
    public \$params;
    /** @var null|Node\\Identifier|Node\\Name|Node\\NullableType Return type */
    public \$returnType;
    /** @var Node\\Stmt[]|null Statements */
    public \$stmts;

    private static \$magicNames = [
        '__construct'  => true,
        '__destruct'   => true,
        '__call'       => true,
        '__callstatic' => true,
        '__get'        => true,
        '__set'        => true,
        '__isset'      => true,
        '__unset'      => true,
        '__sleep'      => true,
        '__wakeup'     => true,
        '__tostring'   => true,
        '__set_state'  => true,
        '__clone'      => true,
        '__invoke'     => true,
        '__debuginfo'  => true,
    ];

    /**
     * Constructs a class method node.
     *
     * @param string|Node\\Identifier \$name Name
     * @param array \$subNodes   Array of the following optional subnodes:
     *                          'flags       => MODIFIER_PUBLIC: Flags
     *                          'byRef'      => false          : Whether to return by reference
     *                          'params'     => array()        : Parameters
     *                          'returnType' => null           : Return type
     *                          'stmts'      => array()        : Statements
     * @param array \$attributes Additional attributes
     */
    public function __construct(\$name, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->flags = \$subNodes['flags'] ?? \$subNodes['type'] ?? 0;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->name = \\is_string(\$name) ? new Node\\Identifier(\$name) : \$name;
        \$this->params = \$subNodes['params'] ?? [];
        \$returnType = \$subNodes['returnType'] ?? null;
        \$this->returnType = \\is_string(\$returnType) ? new Node\\Identifier(\$returnType) : \$returnType;
        \$this->stmts = array_key_exists('stmts', \$subNodes) ? \$subNodes['stmts'] : [];
    }

    public function getSubNodeNames() : array {
        return ['flags', 'byRef', 'name', 'params', 'returnType', 'stmts'];
    }

    public function returnsByRef() : bool {
        return \$this->byRef;
    }

    public function getParams() : array {
        return \$this->params;
    }

    public function getReturnType() {
        return \$this->returnType;
    }

    public function getStmts() {
        return \$this->stmts;
    }

    /**
     * Whether the method is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether the method is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether the method is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }

    /**
     * Whether the method is abstract.
     *
     * @return bool
     */
    public function isAbstract() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_ABSTRACT);
    }

    /**
     * Whether the method is final.
     * 
     * @return bool
     */
    public function isFinal() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_FINAL);
    }

    /**
     * Whether the method is static.
     *
     * @return bool
     */
    public function isStatic() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_STATIC);
    }

    /**
     * Whether the method is magic.
     *
     * @return bool
     */
    public function isMagic() : bool {
        return isset(self::\$magicNames[\$this->name->toLowerString()]);
    }
    
    public function getType() : string {
        return 'Stmt_ClassMethod';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassMethod.php";
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
use PhpParser\\Node\\FunctionLike;

class ClassMethod extends Node\\Stmt implements FunctionLike
{
    /** @var int Flags */
    public \$flags;
    /** @var bool Whether to return by reference */
    public \$byRef;
    /** @var Node\\Identifier Name */
    public \$name;
    /** @var Node\\Param[] Parameters */
    public \$params;
    /** @var null|Node\\Identifier|Node\\Name|Node\\NullableType Return type */
    public \$returnType;
    /** @var Node\\Stmt[]|null Statements */
    public \$stmts;

    private static \$magicNames = [
        '__construct'  => true,
        '__destruct'   => true,
        '__call'       => true,
        '__callstatic' => true,
        '__get'        => true,
        '__set'        => true,
        '__isset'      => true,
        '__unset'      => true,
        '__sleep'      => true,
        '__wakeup'     => true,
        '__tostring'   => true,
        '__set_state'  => true,
        '__clone'      => true,
        '__invoke'     => true,
        '__debuginfo'  => true,
    ];

    /**
     * Constructs a class method node.
     *
     * @param string|Node\\Identifier \$name Name
     * @param array \$subNodes   Array of the following optional subnodes:
     *                          'flags       => MODIFIER_PUBLIC: Flags
     *                          'byRef'      => false          : Whether to return by reference
     *                          'params'     => array()        : Parameters
     *                          'returnType' => null           : Return type
     *                          'stmts'      => array()        : Statements
     * @param array \$attributes Additional attributes
     */
    public function __construct(\$name, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->flags = \$subNodes['flags'] ?? \$subNodes['type'] ?? 0;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->name = \\is_string(\$name) ? new Node\\Identifier(\$name) : \$name;
        \$this->params = \$subNodes['params'] ?? [];
        \$returnType = \$subNodes['returnType'] ?? null;
        \$this->returnType = \\is_string(\$returnType) ? new Node\\Identifier(\$returnType) : \$returnType;
        \$this->stmts = array_key_exists('stmts', \$subNodes) ? \$subNodes['stmts'] : [];
    }

    public function getSubNodeNames() : array {
        return ['flags', 'byRef', 'name', 'params', 'returnType', 'stmts'];
    }

    public function returnsByRef() : bool {
        return \$this->byRef;
    }

    public function getParams() : array {
        return \$this->params;
    }

    public function getReturnType() {
        return \$this->returnType;
    }

    public function getStmts() {
        return \$this->stmts;
    }

    /**
     * Whether the method is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether the method is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether the method is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }

    /**
     * Whether the method is abstract.
     *
     * @return bool
     */
    public function isAbstract() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_ABSTRACT);
    }

    /**
     * Whether the method is final.
     * 
     * @return bool
     */
    public function isFinal() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_FINAL);
    }

    /**
     * Whether the method is static.
     *
     * @return bool
     */
    public function isStatic() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_STATIC);
    }

    /**
     * Whether the method is magic.
     *
     * @return bool
     */
    public function isMagic() : bool {
        return isset(self::\$magicNames[\$this->name->toLowerString()]);
    }
    
    public function getType() : string {
        return 'Stmt_ClassMethod';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassMethod.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassMethod.php");
    }
}
