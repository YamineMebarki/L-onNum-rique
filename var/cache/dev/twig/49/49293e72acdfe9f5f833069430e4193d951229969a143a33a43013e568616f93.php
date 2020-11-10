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

/* vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php */
class __TwigTemplate_28b3eef164cbf82d31a23b5bff03b495c8f458d51c74c5af4bafc83b88bd7e33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

/**
 * Represents a non-namespaced name. Namespaced names are represented using Name nodes.
 */
class Identifier extends NodeAbstract
{
    /** @var string Identifier as string */
    public \$name;

    private static \$specialClassNames = [
        'self'   => true,
        'parent' => true,
        'static' => true,
    ];

    /**
     * Constructs an identifier node.
     *
     * @param string \$name       Identifier as string
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \$name;
    }

    public function getSubNodeNames() : array {
        return ['name'];
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string.
     */
    public function toString() : string {
        return \$this->name;
    }

    /**
     * Get lowercased identifier as string.
     *
     * @return string Lowercased identifier as string
     */
    public function toLowerString() : string {
        return strtolower(\$this->name);
    }

    /**
     * Checks whether the identifier is a special class name (self, parent or static).
     *
     * @return bool Whether identifier is a special class name
     */
    public function isSpecialClassName() : bool {
        return isset(self::\$specialClassNames[strtolower(\$this->name)]);
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string
     */
    public function __toString() : string {
        return \$this->name;
    }
    
    public function getType() : string {
        return 'Identifier';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

/**
 * Represents a non-namespaced name. Namespaced names are represented using Name nodes.
 */
class Identifier extends NodeAbstract
{
    /** @var string Identifier as string */
    public \$name;

    private static \$specialClassNames = [
        'self'   => true,
        'parent' => true,
        'static' => true,
    ];

    /**
     * Constructs an identifier node.
     *
     * @param string \$name       Identifier as string
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \$name;
    }

    public function getSubNodeNames() : array {
        return ['name'];
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string.
     */
    public function toString() : string {
        return \$this->name;
    }

    /**
     * Get lowercased identifier as string.
     *
     * @return string Lowercased identifier as string
     */
    public function toLowerString() : string {
        return strtolower(\$this->name);
    }

    /**
     * Checks whether the identifier is a special class name (self, parent or static).
     *
     * @return bool Whether identifier is a special class name
     */
    public function isSpecialClassName() : bool {
        return isset(self::\$specialClassNames[strtolower(\$this->name)]);
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string
     */
    public function __toString() : string {
        return \$this->name;
    }
    
    public function getType() : string {
        return 'Identifier';
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php");
    }
}
