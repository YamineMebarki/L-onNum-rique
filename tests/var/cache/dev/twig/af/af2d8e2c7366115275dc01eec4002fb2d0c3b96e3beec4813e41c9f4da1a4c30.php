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

/* vendor/symfony/framework-bundle/Tests/Templating/Helper/AssetsHelperTest.php */
class __TwigTemplate_2d374165416ab7f102b38aea12cd7bb866193f0434cacd2716335c05b42b28bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/AssetsHelperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/AssetsHelperTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper;
use Symfony\\Component\\Asset\\Package;
use Symfony\\Component\\Asset\\Packages;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

/**
 * @group legacy
 */
class AssetsHelperTest extends TestCase
{
    private \$helper;

    protected function setUp(): void
    {
        \$fooPackage = new Package(new StaticVersionStrategy('42', '%s?v=%s'));
        \$barPackage = new Package(new StaticVersionStrategy('22', '%s?%s'));

        \$packages = new Packages(\$fooPackage, ['bar' => \$barPackage]);

        \$this->helper = new AssetsHelper(\$packages);
    }

    public function testGetUrl()
    {
        \$this->assertEquals('me.png?v=42', \$this->helper->getUrl('me.png'));
        \$this->assertEquals('me.png?22', \$this->helper->getUrl('me.png', 'bar'));
    }

    public function testGetVersion()
    {
        \$this->assertEquals('42', \$this->helper->getVersion('/'));
        \$this->assertEquals('22', \$this->helper->getVersion('/', 'bar'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/Helper/AssetsHelperTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper;
use Symfony\\Component\\Asset\\Package;
use Symfony\\Component\\Asset\\Packages;
use Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy;

/**
 * @group legacy
 */
class AssetsHelperTest extends TestCase
{
    private \$helper;

    protected function setUp(): void
    {
        \$fooPackage = new Package(new StaticVersionStrategy('42', '%s?v=%s'));
        \$barPackage = new Package(new StaticVersionStrategy('22', '%s?%s'));

        \$packages = new Packages(\$fooPackage, ['bar' => \$barPackage]);

        \$this->helper = new AssetsHelper(\$packages);
    }

    public function testGetUrl()
    {
        \$this->assertEquals('me.png?v=42', \$this->helper->getUrl('me.png'));
        \$this->assertEquals('me.png?22', \$this->helper->getUrl('me.png', 'bar'));
    }

    public function testGetVersion()
    {
        \$this->assertEquals('42', \$this->helper->getVersion('/'));
        \$this->assertEquals('22', \$this->helper->getVersion('/', 'bar'));
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/Helper/AssetsHelperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/Helper/AssetsHelperTest.php");
    }
}
