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

/* vendor/symfony/asset/Tests/PackageTest.php */
class __TwigTemplate_4564e6bbc1de1f85b97a2b7c6b04a154af70040f32b3ce2c64149a13b9600836 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/PackageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/PackageTest.php"));

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
use Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class PackageTest extends TestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testGetUrl(\$version, \$format, \$path, \$expected)
    {
        \$package = new Package(\$version ? new StaticVersionStrategy(\$version, \$format) : new EmptyVersionStrategy());
        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getConfigs()
    {
        return [
            ['v1', '', 'http://example.com/foo', 'http://example.com/foo'],
            ['v1', '', 'https://example.com/foo', 'https://example.com/foo'],
            ['v1', '', '//example.com/foo', '//example.com/foo'],

            ['v1', '', '/foo', '/foo?v1'],
            ['v1', '', 'foo', 'foo?v1'],

            [null, '', '/foo', '/foo'],
            [null, '', 'foo', 'foo'],

            ['v1', 'version-%2\$s/%1\$s', '/foo', '/version-v1/foo'],
            ['v1', 'version-%2\$s/%1\$s', 'foo', 'version-v1/foo'],
            ['v1', 'version-%2\$s/%1\$s', 'foo/', 'version-v1/foo/'],
            ['v1', 'version-%2\$s/%1\$s', '/foo/', '/version-v1/foo/'],
        ];
    }

    public function testGetVersion()
    {
        \$package = new Package(new StaticVersionStrategy('v1'));
        \$this->assertEquals('v1', \$package->getVersion('/foo'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/Tests/PackageTest.php";
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
use Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

class PackageTest extends TestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testGetUrl(\$version, \$format, \$path, \$expected)
    {
        \$package = new Package(\$version ? new StaticVersionStrategy(\$version, \$format) : new EmptyVersionStrategy());
        \$this->assertEquals(\$expected, \$package->getUrl(\$path));
    }

    public function getConfigs()
    {
        return [
            ['v1', '', 'http://example.com/foo', 'http://example.com/foo'],
            ['v1', '', 'https://example.com/foo', 'https://example.com/foo'],
            ['v1', '', '//example.com/foo', '//example.com/foo'],

            ['v1', '', '/foo', '/foo?v1'],
            ['v1', '', 'foo', 'foo?v1'],

            [null, '', '/foo', '/foo'],
            [null, '', 'foo', 'foo'],

            ['v1', 'version-%2\$s/%1\$s', '/foo', '/version-v1/foo'],
            ['v1', 'version-%2\$s/%1\$s', 'foo', 'version-v1/foo'],
            ['v1', 'version-%2\$s/%1\$s', 'foo/', 'version-v1/foo/'],
            ['v1', 'version-%2\$s/%1\$s', '/foo/', '/version-v1/foo/'],
        ];
    }

    public function testGetVersion()
    {
        \$package = new Package(new StaticVersionStrategy('v1'));
        \$this->assertEquals('v1', \$package->getVersion('/foo'));
    }
}
", "vendor/symfony/asset/Tests/PackageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/Tests/PackageTest.php");
    }
}
