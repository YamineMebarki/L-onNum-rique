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

/* vendor/symfony/http-kernel/Tests/Config/FileLocatorTest.php */
class __TwigTemplate_2debd36b0854261794002529def427aaaf9be966c26b190588203ac61a4ed184 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Config/FileLocatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Config/FileLocatorTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpKernel\\Tests\\Config;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\Config\\FileLocator;

class FileLocatorTest extends TestCase
{
    public function testLocate()
    {
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel
            ->expects(\$this->atLeastOnce())
            ->method('locateResource')
            ->with('@BundleName/some/path', null, true)
            ->willReturn('/bundle-name/some/path');
        \$locator = new FileLocator(\$kernel);
        \$this->assertEquals('/bundle-name/some/path', \$locator->locate('@BundleName/some/path'));

        \$kernel
            ->expects(\$this->never())
            ->method('locateResource');
        \$this->expectException('LogicException');
        \$locator->locate('/some/path');
    }

    public function testLocateWithGlobalResourcePath()
    {
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel
            ->expects(\$this->atLeastOnce())
            ->method('locateResource')
            ->with('@BundleName/some/path', '/global/resource/path', false);

        \$locator = new FileLocator(\$kernel, '/global/resource/path');
        \$locator->locate('@BundleName/some/path', null, false);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Config/FileLocatorTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpKernel\\Tests\\Config;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\Config\\FileLocator;

class FileLocatorTest extends TestCase
{
    public function testLocate()
    {
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel
            ->expects(\$this->atLeastOnce())
            ->method('locateResource')
            ->with('@BundleName/some/path', null, true)
            ->willReturn('/bundle-name/some/path');
        \$locator = new FileLocator(\$kernel);
        \$this->assertEquals('/bundle-name/some/path', \$locator->locate('@BundleName/some/path'));

        \$kernel
            ->expects(\$this->never())
            ->method('locateResource');
        \$this->expectException('LogicException');
        \$locator->locate('/some/path');
    }

    public function testLocateWithGlobalResourcePath()
    {
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel
            ->expects(\$this->atLeastOnce())
            ->method('locateResource')
            ->with('@BundleName/some/path', '/global/resource/path', false);

        \$locator = new FileLocator(\$kernel, '/global/resource/path');
        \$locator->locate('@BundleName/some/path', null, false);
    }
}
", "vendor/symfony/http-kernel/Tests/Config/FileLocatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Config/FileLocatorTest.php");
    }
}
