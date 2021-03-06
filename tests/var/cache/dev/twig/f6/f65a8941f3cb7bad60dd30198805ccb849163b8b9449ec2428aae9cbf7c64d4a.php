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

/* vendor/symfony/http-kernel/Tests/Bundle/BundleTest.php */
class __TwigTemplate_3f4ca1a1ead2cff565cb93e511fc7c665f1e4cfa135e3c382ccb3e58b36753b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Bundle/BundleTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Bundle/BundleTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\Bundle;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ExtensionNotValidBundle\\ExtensionNotValidBundle;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ExtensionPresentBundle\\ExtensionPresentBundle;

class BundleTest extends TestCase
{
    public function testGetContainerExtension()
    {
        \$bundle = new ExtensionPresentBundle();

        \$this->assertInstanceOf(
            'Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ExtensionPresentBundle\\DependencyInjection\\ExtensionPresentExtension',
            \$bundle->getContainerExtension()
        );
    }

    /**
     * @group legacy
     */
    public function testGetContainerExtensionWithInvalidClass()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('must implement Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface');
        \$bundle = new ExtensionNotValidBundle();
        \$bundle->getContainerExtension();
    }

    public function testBundleNameIsGuessedFromClass()
    {
        \$bundle = new GuessedNameBundle();

        \$this->assertSame('Symfony\\Component\\HttpKernel\\Tests\\Bundle', \$bundle->getNamespace());
        \$this->assertSame('GuessedNameBundle', \$bundle->getName());
    }

    public function testBundleNameCanBeExplicitlyProvided()
    {
        \$bundle = new NamedBundle();

        \$this->assertSame('ExplicitlyNamedBundle', \$bundle->getName());
        \$this->assertSame('Symfony\\Component\\HttpKernel\\Tests\\Bundle', \$bundle->getNamespace());
        \$this->assertSame('ExplicitlyNamedBundle', \$bundle->getName());
    }
}

class NamedBundle extends Bundle
{
    public function __construct()
    {
        \$this->name = 'ExplicitlyNamedBundle';
    }
}

class GuessedNameBundle extends Bundle
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Bundle/BundleTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\Bundle;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ExtensionNotValidBundle\\ExtensionNotValidBundle;
use Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ExtensionPresentBundle\\ExtensionPresentBundle;

class BundleTest extends TestCase
{
    public function testGetContainerExtension()
    {
        \$bundle = new ExtensionPresentBundle();

        \$this->assertInstanceOf(
            'Symfony\\Component\\HttpKernel\\Tests\\Fixtures\\ExtensionPresentBundle\\DependencyInjection\\ExtensionPresentExtension',
            \$bundle->getContainerExtension()
        );
    }

    /**
     * @group legacy
     */
    public function testGetContainerExtensionWithInvalidClass()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('must implement Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface');
        \$bundle = new ExtensionNotValidBundle();
        \$bundle->getContainerExtension();
    }

    public function testBundleNameIsGuessedFromClass()
    {
        \$bundle = new GuessedNameBundle();

        \$this->assertSame('Symfony\\Component\\HttpKernel\\Tests\\Bundle', \$bundle->getNamespace());
        \$this->assertSame('GuessedNameBundle', \$bundle->getName());
    }

    public function testBundleNameCanBeExplicitlyProvided()
    {
        \$bundle = new NamedBundle();

        \$this->assertSame('ExplicitlyNamedBundle', \$bundle->getName());
        \$this->assertSame('Symfony\\Component\\HttpKernel\\Tests\\Bundle', \$bundle->getNamespace());
        \$this->assertSame('ExplicitlyNamedBundle', \$bundle->getName());
    }
}

class NamedBundle extends Bundle
{
    public function __construct()
    {
        \$this->name = 'ExplicitlyNamedBundle';
    }
}

class GuessedNameBundle extends Bundle
{
}
", "vendor/symfony/http-kernel/Tests/Bundle/BundleTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Bundle/BundleTest.php");
    }
}
