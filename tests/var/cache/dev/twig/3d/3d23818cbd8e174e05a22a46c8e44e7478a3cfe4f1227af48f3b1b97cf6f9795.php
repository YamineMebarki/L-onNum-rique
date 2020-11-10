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

/* vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Value.php */
class __TwigTemplate_2b1ed49b96ff4a8087b36cbdd87a6e7bad3883b108b60912c7501ba28d3d433d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Value.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Value.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections\\Expr;

class Value implements Expression
{
    /** @var mixed */
    private \$value;

    /**
     * @param mixed \$value
     */
    public function __construct(\$value)
    {
        \$this->value = \$value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function visit(ExpressionVisitor \$visitor)
    {
        return \$visitor->walkValue(\$this);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Value.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections\\Expr;

class Value implements Expression
{
    /** @var mixed */
    private \$value;

    /**
     * @param mixed \$value
     */
    public function __construct(\$value)
    {
        \$this->value = \$value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function visit(ExpressionVisitor \$visitor)
    {
        return \$visitor->walkValue(\$this);
    }
}
", "vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Value.php", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Value.php");
    }
}
