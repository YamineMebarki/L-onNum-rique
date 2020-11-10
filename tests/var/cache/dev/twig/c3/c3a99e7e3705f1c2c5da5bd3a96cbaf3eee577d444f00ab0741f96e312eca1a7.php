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

/* vendor/symfony/flex/tests/Configurator/BundlesConfiguratorTest.php */
class __TwigTemplate_848b68c500ebb971ddffd52d01e8f4948a460d827fc7d0564c82ccd3dae8f7ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/BundlesConfiguratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/BundlesConfiguratorTest.php"));

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

namespace Symfony\\Flex\\Tests\\Configurator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Configurator\\BundlesConfigurator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class BundlesConfiguratorTest extends TestCase
{
    public function testConfigure()
    {
        \$config = FLEX_TEST_DIR.'/config/bundles.php';

        \$configurator = new BundlesConfigurator(
            \$this->getMockBuilder('Composer\\Composer')->getMock(),
            \$this->getMockBuilder('Composer\\IO\\IOInterface')->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );

        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();

        @unlink(\$config);
        \$configurator->configure(\$recipe, [
            'FooBundle' => ['dev', 'test'],
            'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle' => ['all'],
        ], \$lock);
        \$this->assertEquals(<<<EOF
<?php

return [
    Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle::class => ['all' => true],
    FooBundle::class => ['dev' => true, 'test' => true],
];

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWhenBundlesAlreayExists()
    {
        \$config = FLEX_TEST_DIR.'/config/bundles.php';
        file_put_contents(\$config, <<<EOF
<?php

return [
    BarBundle::class => ['prod' => false, 'all' => true],
];
EOF
        );

        \$configurator = new BundlesConfigurator(
            \$this->getMockBuilder('Composer\\Composer')->getMock(),
            \$this->getMockBuilder('Composer\\IO\\IOInterface')->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );

        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();

        \$configurator->configure(\$recipe, [
            'FooBundle' => ['dev', 'test'],
            'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle' => ['all'],
        ], \$lock);
        \$this->assertEquals(<<<EOF
<?php

return [
    BarBundle::class => ['prod' => false, 'all' => true],
    Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle::class => ['all' => true],
    FooBundle::class => ['dev' => true, 'test' => true],
];

EOF
        , file_get_contents(\$config));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/tests/Configurator/BundlesConfiguratorTest.php";
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

namespace Symfony\\Flex\\Tests\\Configurator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Configurator\\BundlesConfigurator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class BundlesConfiguratorTest extends TestCase
{
    public function testConfigure()
    {
        \$config = FLEX_TEST_DIR.'/config/bundles.php';

        \$configurator = new BundlesConfigurator(
            \$this->getMockBuilder('Composer\\Composer')->getMock(),
            \$this->getMockBuilder('Composer\\IO\\IOInterface')->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );

        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();

        @unlink(\$config);
        \$configurator->configure(\$recipe, [
            'FooBundle' => ['dev', 'test'],
            'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle' => ['all'],
        ], \$lock);
        \$this->assertEquals(<<<EOF
<?php

return [
    Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle::class => ['all' => true],
    FooBundle::class => ['dev' => true, 'test' => true],
];

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWhenBundlesAlreayExists()
    {
        \$config = FLEX_TEST_DIR.'/config/bundles.php';
        file_put_contents(\$config, <<<EOF
<?php

return [
    BarBundle::class => ['prod' => false, 'all' => true],
];
EOF
        );

        \$configurator = new BundlesConfigurator(
            \$this->getMockBuilder('Composer\\Composer')->getMock(),
            \$this->getMockBuilder('Composer\\IO\\IOInterface')->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );

        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();

        \$configurator->configure(\$recipe, [
            'FooBundle' => ['dev', 'test'],
            'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle' => ['all'],
        ], \$lock);
        \$this->assertEquals(<<<EOF
<?php

return [
    BarBundle::class => ['prod' => false, 'all' => true],
    Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle::class => ['all' => true],
    FooBundle::class => ['dev' => true, 'test' => true],
];

EOF
        , file_get_contents(\$config));
    }
}
", "vendor/symfony/flex/tests/Configurator/BundlesConfiguratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/tests/Configurator/BundlesConfiguratorTest.php");
    }
}
