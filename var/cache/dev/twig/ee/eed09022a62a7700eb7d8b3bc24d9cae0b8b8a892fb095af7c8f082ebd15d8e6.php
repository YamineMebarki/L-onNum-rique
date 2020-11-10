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

/* vendor/nikic/php-parser/lib/PhpParser/Builder/Declaration.php */
class __TwigTemplate_ab8f3bc4dfb9d8f894c3da19ba24e09528067306a6c168d2018f4fb7686b9bc7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Declaration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Builder/Declaration.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;

abstract class Declaration implements PhpParser\\Builder
{
    protected \$attributes = [];

    abstract public function addStmt(\$stmt);

    /**
     * Adds multiple statements.
     *
     * @param array \$stmts The statements to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmts(array \$stmts) {
        foreach (\$stmts as \$stmt) {
            \$this->addStmt(\$stmt);
        }

        return \$this;
    }

    /**
     * Sets doc comment for the declaration.
     *
     * @param PhpParser\\Comment\\Doc|string \$docComment Doc comment to set
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setDocComment(\$docComment) {
        \$this->attributes['comments'] = [
            BuilderHelpers::normalizeDocComment(\$docComment)
        ];

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Builder/Declaration.php";
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

abstract class Declaration implements PhpParser\\Builder
{
    protected \$attributes = [];

    abstract public function addStmt(\$stmt);

    /**
     * Adds multiple statements.
     *
     * @param array \$stmts The statements to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmts(array \$stmts) {
        foreach (\$stmts as \$stmt) {
            \$this->addStmt(\$stmt);
        }

        return \$this;
    }

    /**
     * Sets doc comment for the declaration.
     *
     * @param PhpParser\\Comment\\Doc|string \$docComment Doc comment to set
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setDocComment(\$docComment) {
        \$this->attributes['comments'] = [
            BuilderHelpers::normalizeDocComment(\$docComment)
        ];

        return \$this;
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/Builder/Declaration.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Builder/Declaration.php");
    }
}
