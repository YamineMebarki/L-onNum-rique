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

/* vendor/symfony/flex/tests/Configurator/ContainerConfiguratorTest.php */
class __TwigTemplate_2adb581786b1ff78236551ec4ecd3bd020bed595937a4ac3fbe3ab688cf9363e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/ContainerConfiguratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/ContainerConfiguratorTest.php"));

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

use Composer\\Composer;
use Composer\\IO\\IOInterface;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Configurator\\ContainerConfigurator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class ContainerConfiguratorTest extends TestCase
{
    public function testConfigure()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
# comment
parameters:

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
# comment
parameters:
    locale: 'en'

services:

EOF
        , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
# comment
parameters:

services:

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWithoutParametersKey()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    locale: 'en'

services:

EOF
        , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:

services:

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWithoutDuplicated()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
parameters:
    locale: es

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    locale: es

services:

EOF
        , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:

services:

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWithComplexContent()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
parameters:
    # comment 1
    locale: es

    # comment 2
    foo: bar

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en', 'foobar' => 'baz'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    # comment 1
    locale: es

    # comment 2
    foo: bar
    foobar: 'baz'

services:

EOF
        , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en', 'foobar' => 'baz'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    # comment 1

    # comment 2
    foo: bar

services:

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWithComplexContent2()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
parameters:
    # comment 1
    locale: es

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en', 'foobar' => 'baz', 'array' => ['key1' => 'value', 'key2' => \"Escape ' one quote\"], 'key1' => 'Keep It'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    # comment 1
    locale: es
    foobar: 'baz'
    array:
        key1: 'value'
        key2: 'Escape '' one quote'
    key1: 'Keep It'

services:

EOF
            , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en', 'array' => ['key1' => 'value', 'key2' => \"Escape ' one quote\"]], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    # comment 1
    foobar: 'baz'
    key1: 'Keep It'

services:

EOF
            , file_get_contents(\$config));
    }

    public function testConfigureWithEnvVariable()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
# comment
parameters:
    env(APP_ENV): ''

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['env(APP_ENV)' => ''], \$lock);
        \$this->assertEquals(<<<EOF
# comment
parameters:
    env(APP_ENV): ''

services:

EOF
            , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['env(APP_ENV)' => ''], \$lock);
        \$this->assertEquals(<<<EOF
# comment
parameters:

services:

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
        return "vendor/symfony/flex/tests/Configurator/ContainerConfiguratorTest.php";
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

use Composer\\Composer;
use Composer\\IO\\IOInterface;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Configurator\\ContainerConfigurator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class ContainerConfiguratorTest extends TestCase
{
    public function testConfigure()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
# comment
parameters:

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
# comment
parameters:
    locale: 'en'

services:

EOF
        , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
# comment
parameters:

services:

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWithoutParametersKey()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    locale: 'en'

services:

EOF
        , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:

services:

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWithoutDuplicated()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
parameters:
    locale: es

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    locale: es

services:

EOF
        , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:

services:

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWithComplexContent()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
parameters:
    # comment 1
    locale: es

    # comment 2
    foo: bar

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en', 'foobar' => 'baz'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    # comment 1
    locale: es

    # comment 2
    foo: bar
    foobar: 'baz'

services:

EOF
        , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en', 'foobar' => 'baz'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    # comment 1

    # comment 2
    foo: bar

services:

EOF
        , file_get_contents(\$config));
    }

    public function testConfigureWithComplexContent2()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
parameters:
    # comment 1
    locale: es

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['locale' => 'en', 'foobar' => 'baz', 'array' => ['key1' => 'value', 'key2' => \"Escape ' one quote\"], 'key1' => 'Keep It'], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    # comment 1
    locale: es
    foobar: 'baz'
    array:
        key1: 'value'
        key2: 'Escape '' one quote'
    key1: 'Keep It'

services:

EOF
            , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['locale' => 'en', 'array' => ['key1' => 'value', 'key2' => \"Escape ' one quote\"]], \$lock);
        \$this->assertEquals(<<<EOF
parameters:
    # comment 1
    foobar: 'baz'
    key1: 'Keep It'

services:

EOF
            , file_get_contents(\$config));
    }

    public function testConfigureWithEnvVariable()
    {
        \$recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$config = FLEX_TEST_DIR.'/config/services.yaml';
        file_put_contents(
            \$config,
            <<<EOF
# comment
parameters:
    env(APP_ENV): ''

services:

EOF
        );
        \$configurator = new ContainerConfigurator(
            \$this->getMockBuilder(Composer::class)->getMock(),
            \$this->getMockBuilder(IOInterface::class)->getMock(),
            new Options(['config-dir' => 'config', 'root-dir' => FLEX_TEST_DIR])
        );
        \$configurator->configure(\$recipe, ['env(APP_ENV)' => ''], \$lock);
        \$this->assertEquals(<<<EOF
# comment
parameters:
    env(APP_ENV): ''

services:

EOF
            , file_get_contents(\$config));

        \$configurator->unconfigure(\$recipe, ['env(APP_ENV)' => ''], \$lock);
        \$this->assertEquals(<<<EOF
# comment
parameters:

services:

EOF
            , file_get_contents(\$config));
    }
}
", "vendor/symfony/flex/tests/Configurator/ContainerConfiguratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/tests/Configurator/ContainerConfiguratorTest.php");
    }
}
