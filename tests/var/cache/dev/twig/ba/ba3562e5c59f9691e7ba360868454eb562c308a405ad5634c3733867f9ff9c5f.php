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

/* vendor/symfony/serializer/Tests/Normalizer/Features/ObjectInner.php */
class __TwigTemplate_555ae19cf84caf3251bf6aabf9cecfdca3e92fe03ad6309a7bbdc0814da757b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectInner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectInner.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

class ObjectInner
{
    public \$foo;
    public \$bar;

    public function getBar()
    {
        return \$this->bar;
    }

    public function setBar(\$bar): void
    {
        \$this->bar = \$bar;
    }

    public function getFoo()
    {
        return \$this->foo;
    }

    public function setFoo(\$foo): void
    {
        \$this->foo = \$foo;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectInner.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

class ObjectInner
{
    public \$foo;
    public \$bar;

    public function getBar()
    {
        return \$this->bar;
    }

    public function setBar(\$bar): void
    {
        \$this->bar = \$bar;
    }

    public function getFoo()
    {
        return \$this->foo;
    }

    public function setFoo(\$foo): void
    {
        \$this->foo = \$foo;
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectInner.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/ObjectInner.php");
    }
}
