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

/* vendor/symfony/asset/Tests/PackagesTest.php */
class __TwigTemplate_ce9b4842c1e40f8dcf05ed3f298e5ec41da75e3ab618e8d1f99fc76ec0dcb735 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/PackagesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/PackagesTest.php"));

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

namespace Symfony\\Component\\Asset\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\Package;
use Symfony\\Component\\Asset\\Packages;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class PackagesTest extends TestCase
{
    public function testGetterSetters()
    {
        \$packages = new Packages();
        \$packages->setDefaultPackage(\$default = \$this->getMockBuilder('Symfony\\Component\\Asset\\PackageInterface')->getMock());
        \$packages->addPackage('a', \$a = \$this->getMockBuilder('Symfony\\Component\\Asset\\PackageInterface')->getMock());

        \$this->assertEquals(\$default, \$packages->getPackage());
        \$this->assertEquals(\$a, \$packages->getPackage('a'));

        \$packages = new Packages(\$default, ['a' => \$a]);

        \$this->assertEquals(\$default, \$packages->getPackage());
        \$this->assertEquals(\$a, \$packages->getPackage('a'));
    }

    public function testGetVersion()
    {
        \$packages = new Packages(
            new Package(new StaticVersionStrategy('default')),
            ['a' => new Package(new StaticVersionStrategy('a'))]
        );

        \$this->assertEquals('default', \$packages->getVersion('/foo'));
        \$this->assertEquals('a', \$packages->getVersion('/foo', 'a'));
    }

    public function testGetUrl()
    {
        \$packages = new Packages(
            new Package(new StaticVersionStrategy('default')),
            ['a' => new Package(new StaticVersionStrategy('a'))]
        );

        \$this->assertEquals('/foo?default', \$packages->getUrl('/foo'));
        \$this->assertEquals('/foo?a', \$packages->getUrl('/foo', 'a'));
    }

    public function testNoDefaultPackage()
    {
        \$this->expectException('Symfony\\Component\\Asset\\Exception\\LogicException');
        \$packages = new Packages();
        \$packages->getPackage();
    }

    public function testUndefinedPackage()
    {
        \$this->expectException('Symfony\\Component\\Asset\\Exception\\InvalidArgumentException');
        \$packages = new Packages();
        \$packages->getPackage('a');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/Tests/PackagesTest.php";
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

namespace Symfony\\Component\\Asset\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\Package;
use Symfony\\Component\\Asset\\Packages;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class PackagesTest extends TestCase
{
    public function testGetterSetters()
    {
        \$packages = new Packages();
        \$packages->setDefaultPackage(\$default = \$this->getMockBuilder('Symfony\\Component\\Asset\\PackageInterface')->getMock());
        \$packages->addPackage('a', \$a = \$this->getMockBuilder('Symfony\\Component\\Asset\\PackageInterface')->getMock());

        \$this->assertEquals(\$default, \$packages->getPackage());
        \$this->assertEquals(\$a, \$packages->getPackage('a'));

        \$packages = new Packages(\$default, ['a' => \$a]);

        \$this->assertEquals(\$default, \$packages->getPackage());
        \$this->assertEquals(\$a, \$packages->getPackage('a'));
    }

    public function testGetVersion()
    {
        \$packages = new Packages(
            new Package(new StaticVersionStrategy('default')),
            ['a' => new Package(new StaticVersionStrategy('a'))]
        );

        \$this->assertEquals('default', \$packages->getVersion('/foo'));
        \$this->assertEquals('a', \$packages->getVersion('/foo', 'a'));
    }

    public function testGetUrl()
    {
        \$packages = new Packages(
            new Package(new StaticVersionStrategy('default')),
            ['a' => new Package(new StaticVersionStrategy('a'))]
        );

        \$this->assertEquals('/foo?default', \$packages->getUrl('/foo'));
        \$this->assertEquals('/foo?a', \$packages->getUrl('/foo', 'a'));
    }

    public function testNoDefaultPackage()
    {
        \$this->expectException('Symfony\\Component\\Asset\\Exception\\LogicException');
        \$packages = new Packages();
        \$packages->getPackage();
    }

    public function testUndefinedPackage()
    {
        \$this->expectException('Symfony\\Component\\Asset\\Exception\\InvalidArgumentException');
        \$packages = new Packages();
        \$packages->getPackage('a');
    }
}
", "vendor/symfony/asset/Tests/PackagesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/Tests/PackagesTest.php");
    }
}
