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

/* vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/fake_vendor/acme/lib/deprecation_riddled.php */
class __TwigTemplate_bd5a6d8ad9b3bc544fb58e77c4f77e1f1ca88ab1a7d114a4931e41fef860d0df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/fake_vendor/acme/lib/deprecation_riddled.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/fake_vendor/acme/lib/deprecation_riddled.php"));

        // line 1
        echo "<?php

eval(<<<'EOPHP'
namespace PHPUnit\\Util;

class DevLaon
{
    public static function getGroups()
    {
        return array();
    }
}
EOPHP
);

@trigger_error('root deprecation', E_USER_DEPRECATED);

class FooTestCase
{
    public function testLegacyFoo()
    {
        @trigger_error('silenced foo deprecation', E_USER_DEPRECATED);
        trigger_error('unsilenced foo deprecation', E_USER_DEPRECATED);
        @trigger_error('silenced foo deprecation', E_USER_DEPRECATED);
        trigger_error('unsilenced foo deprecation', E_USER_DEPRECATED);
    }

    public function testNonLegacyBar()
    {
        @trigger_error('silenced bar deprecation', E_USER_DEPRECATED);
        trigger_error('unsilenced bar deprecation', E_USER_DEPRECATED);
    }
}

\$foo = new FooTestCase();
\$foo->testLegacyFoo();
\$foo->testNonLegacyBar();
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/fake_vendor/acme/lib/deprecation_riddled.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

eval(<<<'EOPHP'
namespace PHPUnit\\Util;

class DevLaon
{
    public static function getGroups()
    {
        return array();
    }
}
EOPHP
);

@trigger_error('root deprecation', E_USER_DEPRECATED);

class FooTestCase
{
    public function testLegacyFoo()
    {
        @trigger_error('silenced foo deprecation', E_USER_DEPRECATED);
        trigger_error('unsilenced foo deprecation', E_USER_DEPRECATED);
        @trigger_error('silenced foo deprecation', E_USER_DEPRECATED);
        trigger_error('unsilenced foo deprecation', E_USER_DEPRECATED);
    }

    public function testNonLegacyBar()
    {
        @trigger_error('silenced bar deprecation', E_USER_DEPRECATED);
        trigger_error('unsilenced bar deprecation', E_USER_DEPRECATED);
    }
}

\$foo = new FooTestCase();
\$foo->testLegacyFoo();
\$foo->testNonLegacyBar();
", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/fake_vendor/acme/lib/deprecation_riddled.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/fake_vendor/acme/lib/deprecation_riddled.php");
    }
}
