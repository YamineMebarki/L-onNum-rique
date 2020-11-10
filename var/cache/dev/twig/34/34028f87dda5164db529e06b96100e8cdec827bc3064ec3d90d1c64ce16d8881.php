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

/* vendor/symfony/form/Tests/FormFactoryBuilderTest.php */
class __TwigTemplate_9cd51729ba758f7feef0df0f046f911e5133f378ca01baef827c15493ee1451e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/FormFactoryBuilderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/FormFactoryBuilderTest.php"));

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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooType;

class FormFactoryBuilderTest extends TestCase
{
    private \$registry;
    private \$guesser;
    private \$type;

    protected function setUp(): void
    {
        \$factory = new \\ReflectionClass('Symfony\\Component\\Form\\FormFactory');
        \$this->registry = \$factory->getProperty('registry');
        \$this->registry->setAccessible(true);

        \$this->guesser = \$this->getMockBuilder('Symfony\\Component\\Form\\FormTypeGuesserInterface')->getMock();
        \$this->type = new FooType();
    }

    public function testAddType()
    {
        \$factoryBuilder = new FormFactoryBuilder();
        \$factoryBuilder->addType(\$this->type);

        \$factory = \$factoryBuilder->getFormFactory();
        \$registry = \$this->registry->getValue(\$factory);
        \$extensions = \$registry->getExtensions();

        \$this->assertCount(1, \$extensions);
        \$this->assertTrue(\$extensions[0]->hasType(\\get_class(\$this->type)));
        \$this->assertNull(\$extensions[0]->getTypeGuesser());
    }

    public function testAddTypeGuesser()
    {
        \$factoryBuilder = new FormFactoryBuilder();
        \$factoryBuilder->addTypeGuesser(\$this->guesser);

        \$factory = \$factoryBuilder->getFormFactory();
        \$registry = \$this->registry->getValue(\$factory);
        \$extensions = \$registry->getExtensions();

        \$this->assertCount(1, \$extensions);
        \$this->assertNotNull(\$extensions[0]->getTypeGuesser());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/FormFactoryBuilderTest.php";
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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\Form\\Tests\\Fixtures\\FooType;

class FormFactoryBuilderTest extends TestCase
{
    private \$registry;
    private \$guesser;
    private \$type;

    protected function setUp(): void
    {
        \$factory = new \\ReflectionClass('Symfony\\Component\\Form\\FormFactory');
        \$this->registry = \$factory->getProperty('registry');
        \$this->registry->setAccessible(true);

        \$this->guesser = \$this->getMockBuilder('Symfony\\Component\\Form\\FormTypeGuesserInterface')->getMock();
        \$this->type = new FooType();
    }

    public function testAddType()
    {
        \$factoryBuilder = new FormFactoryBuilder();
        \$factoryBuilder->addType(\$this->type);

        \$factory = \$factoryBuilder->getFormFactory();
        \$registry = \$this->registry->getValue(\$factory);
        \$extensions = \$registry->getExtensions();

        \$this->assertCount(1, \$extensions);
        \$this->assertTrue(\$extensions[0]->hasType(\\get_class(\$this->type)));
        \$this->assertNull(\$extensions[0]->getTypeGuesser());
    }

    public function testAddTypeGuesser()
    {
        \$factoryBuilder = new FormFactoryBuilder();
        \$factoryBuilder->addTypeGuesser(\$this->guesser);

        \$factory = \$factoryBuilder->getFormFactory();
        \$registry = \$this->registry->getValue(\$factory);
        \$extensions = \$registry->getExtensions();

        \$this->assertCount(1, \$extensions);
        \$this->assertNotNull(\$extensions[0]->getTypeGuesser());
    }
}
", "vendor/symfony/form/Tests/FormFactoryBuilderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/FormFactoryBuilderTest.php");
    }
}
