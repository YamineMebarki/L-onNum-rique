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

/* vendor/symfony/serializer/Tests/Normalizer/Features/ObjectDummy.php */
class __TwigTemplate_83a7c0a495771c157d8ee8c80c247448a93a788fc6d7a0f0c75ce5d2bed514dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectDummy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectDummy.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

class ObjectDummy
{
    protected \$foo;
    public \$bar;
    private \$baz;
    protected \$camelCase;
    protected \$object;

    public function getFoo()
    {
        return \$this->foo;
    }

    public function setFoo(\$foo)
    {
        \$this->foo = \$foo;
    }

    public function isBaz()
    {
        return \$this->baz;
    }

    public function setBaz(\$baz)
    {
        \$this->baz = \$baz;
    }

    public function getFooBar()
    {
        return \$this->foo.\$this->bar;
    }

    public function getCamelCase()
    {
        return \$this->camelCase;
    }

    public function setCamelCase(\$camelCase)
    {
        \$this->camelCase = \$camelCase;
    }

    public function otherMethod()
    {
        throw new \\RuntimeException('Dummy::otherMethod() should not be called');
    }

    public function setObject(\$object)
    {
        \$this->object = \$object;
    }

    public function getObject()
    {
        return \$this->object;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectDummy.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

class ObjectDummy
{
    protected \$foo;
    public \$bar;
    private \$baz;
    protected \$camelCase;
    protected \$object;

    public function getFoo()
    {
        return \$this->foo;
    }

    public function setFoo(\$foo)
    {
        \$this->foo = \$foo;
    }

    public function isBaz()
    {
        return \$this->baz;
    }

    public function setBaz(\$baz)
    {
        \$this->baz = \$baz;
    }

    public function getFooBar()
    {
        return \$this->foo.\$this->bar;
    }

    public function getCamelCase()
    {
        return \$this->camelCase;
    }

    public function setCamelCase(\$camelCase)
    {
        \$this->camelCase = \$camelCase;
    }

    public function otherMethod()
    {
        throw new \\RuntimeException('Dummy::otherMethod() should not be called');
    }

    public function setObject(\$object)
    {
        \$this->object = \$object;
    }

    public function getObject()
    {
        return \$this->object;
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectDummy.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/ObjectDummy.php");
    }
}
