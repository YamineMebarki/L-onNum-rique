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

/* vendor/symfony/debug/Tests/Fixtures/VirtualInterface.php */
class __TwigTemplate_4346cf9d7e6a799035180a567bf604f9927e9873f10b920bc53aa771c4f56a11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/VirtualInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/VirtualInterface.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

/**
 * @method string interfaceMethod()
 * @method        sameLineInterfaceMethod(\$arg)
 * @method sameLineInterfaceMethodNoBraces
 *
 * Ignored
 * @method
 * @method
 *
 * Not ignored
 * @method newLineInterfaceMethod() Some description!
 * @method \\stdClass newLineInterfaceMethodNoBraces Description
 *
 * Invalid
 * @method unknownType invalidInterfaceMethod()
 * @method unknownType|string invalidInterfaceMethodNoBraces
 *
 * Complex
 * @method              complexInterfaceMethod(\$arg, ...\$args)
 * @method string[]|int complexInterfaceMethodTyped(\$arg, int ...\$args) Description ...
 *
 * Static
 * @method static Foo&Bar staticMethod()
 * @method static staticMethodNoBraces
 * @method static \\stdClass staticMethodTyped(int \$arg) Description
 * @method static \\stdClass[] staticMethodTypedNoBraces
 */
interface VirtualInterface
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/Fixtures/VirtualInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

/**
 * @method string interfaceMethod()
 * @method        sameLineInterfaceMethod(\$arg)
 * @method sameLineInterfaceMethodNoBraces
 *
 * Ignored
 * @method
 * @method
 *
 * Not ignored
 * @method newLineInterfaceMethod() Some description!
 * @method \\stdClass newLineInterfaceMethodNoBraces Description
 *
 * Invalid
 * @method unknownType invalidInterfaceMethod()
 * @method unknownType|string invalidInterfaceMethodNoBraces
 *
 * Complex
 * @method              complexInterfaceMethod(\$arg, ...\$args)
 * @method string[]|int complexInterfaceMethodTyped(\$arg, int ...\$args) Description ...
 *
 * Static
 * @method static Foo&Bar staticMethod()
 * @method static staticMethodNoBraces
 * @method static \\stdClass staticMethodTyped(int \$arg) Description
 * @method static \\stdClass[] staticMethodTypedNoBraces
 */
interface VirtualInterface
{
}
", "vendor/symfony/debug/Tests/Fixtures/VirtualInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/Fixtures/VirtualInterface.php");
    }
}
