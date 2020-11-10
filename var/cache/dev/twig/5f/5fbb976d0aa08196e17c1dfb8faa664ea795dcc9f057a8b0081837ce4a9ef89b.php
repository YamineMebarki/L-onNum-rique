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

/* vendor/symfony/security-http/Tests/Util/TargetPathTraitTest.php */
class __TwigTemplate_b011157519d647d81dfabb83a21cded9a301e469a4f5e87d7d6444fe622977a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Util/TargetPathTraitTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Util/TargetPathTraitTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Security\\Http\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Security\\Http\\Util\\TargetPathTrait;

class TargetPathTraitTest extends TestCase
{
    public function testSetTargetPath()
    {
        \$obj = new TestClassWithTargetPathTrait();

        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')
                    ->getMock();

        \$session->expects(\$this->once())
            ->method('set')
            ->with('_security.firewall_name.target_path', '/foo');

        \$obj->doSetTargetPath(\$session, 'firewall_name', '/foo');
    }

    public function testGetTargetPath()
    {
        \$obj = new TestClassWithTargetPathTrait();

        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')
                    ->getMock();

        \$session->expects(\$this->once())
            ->method('get')
            ->with('_security.cool_firewall.target_path')
            ->willReturn('/bar');

        \$actualUri = \$obj->doGetTargetPath(\$session, 'cool_firewall');
        \$this->assertEquals(
            '/bar',
            \$actualUri
        );
    }

    public function testRemoveTargetPath()
    {
        \$obj = new TestClassWithTargetPathTrait();

        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')
                    ->getMock();

        \$session->expects(\$this->once())
            ->method('remove')
            ->with('_security.best_firewall.target_path');

        \$obj->doRemoveTargetPath(\$session, 'best_firewall');
    }
}

class TestClassWithTargetPathTrait
{
    use TargetPathTrait;

    public function doSetTargetPath(SessionInterface \$session, \$providerKey, \$uri)
    {
        \$this->saveTargetPath(\$session, \$providerKey, \$uri);
    }

    public function doGetTargetPath(SessionInterface \$session, \$providerKey)
    {
        return \$this->getTargetPath(\$session, \$providerKey);
    }

    public function doRemoveTargetPath(SessionInterface \$session, \$providerKey)
    {
        \$this->removeTargetPath(\$session, \$providerKey);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Util/TargetPathTraitTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Security\\Http\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Security\\Http\\Util\\TargetPathTrait;

class TargetPathTraitTest extends TestCase
{
    public function testSetTargetPath()
    {
        \$obj = new TestClassWithTargetPathTrait();

        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')
                    ->getMock();

        \$session->expects(\$this->once())
            ->method('set')
            ->with('_security.firewall_name.target_path', '/foo');

        \$obj->doSetTargetPath(\$session, 'firewall_name', '/foo');
    }

    public function testGetTargetPath()
    {
        \$obj = new TestClassWithTargetPathTrait();

        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')
                    ->getMock();

        \$session->expects(\$this->once())
            ->method('get')
            ->with('_security.cool_firewall.target_path')
            ->willReturn('/bar');

        \$actualUri = \$obj->doGetTargetPath(\$session, 'cool_firewall');
        \$this->assertEquals(
            '/bar',
            \$actualUri
        );
    }

    public function testRemoveTargetPath()
    {
        \$obj = new TestClassWithTargetPathTrait();

        \$session = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')
                    ->getMock();

        \$session->expects(\$this->once())
            ->method('remove')
            ->with('_security.best_firewall.target_path');

        \$obj->doRemoveTargetPath(\$session, 'best_firewall');
    }
}

class TestClassWithTargetPathTrait
{
    use TargetPathTrait;

    public function doSetTargetPath(SessionInterface \$session, \$providerKey, \$uri)
    {
        \$this->saveTargetPath(\$session, \$providerKey, \$uri);
    }

    public function doGetTargetPath(SessionInterface \$session, \$providerKey)
    {
        return \$this->getTargetPath(\$session, \$providerKey);
    }

    public function doRemoveTargetPath(SessionInterface \$session, \$providerKey)
    {
        \$this->removeTargetPath(\$session, \$providerKey);
    }
}
", "vendor/symfony/security-http/Tests/Util/TargetPathTraitTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Util/TargetPathTraitTest.php");
    }
}
