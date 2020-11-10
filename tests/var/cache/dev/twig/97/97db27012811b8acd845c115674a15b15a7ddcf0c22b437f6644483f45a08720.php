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

/* vendor/symfony/dependency-injection/Tests/ParameterBag/ContainerBagTest.php */
class __TwigTemplate_f48685747ef2af0b598628dd3114a3be32af58e13ad9d8bee2c9114bed6c6c35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/ParameterBag/ContainerBagTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/ParameterBag/ContainerBagTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\ParameterBag;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;

class ContainerBagTest extends TestCase
{
    /** @var ParameterBag */
    private \$parameterBag;
    /** @var ContainerBag */
    private \$containerBag;

    protected function setUp(): void
    {
        \$this->parameterBag = new ParameterBag(['foo' => 'value']);
        \$this->containerBag = new ContainerBag(new Container(\$this->parameterBag));
    }

    public function testGetAllParameters()
    {
        \$this->assertSame(['foo' => 'value'], \$this->containerBag->all());
    }

    public function testHasAParameter()
    {
        \$this->assertTrue(\$this->containerBag->has('foo'));
        \$this->assertFalse(\$this->containerBag->has('bar'));
    }

    public function testGetParameter()
    {
        \$this->assertSame('value', \$this->containerBag->get('foo'));
    }

    public function testGetParameterNotFound()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->containerBag->get('bar');
    }

    public function testInstanceOf()
    {
        \$this->assertInstanceOf(FrozenParameterBag::class, \$this->containerBag);
        \$this->assertInstanceOf(ContainerBagInterface::class, \$this->containerBag);
        \$this->assertInstanceOf(ContainerInterface::class, \$this->containerBag);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/ParameterBag/ContainerBagTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\ParameterBag;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;

class ContainerBagTest extends TestCase
{
    /** @var ParameterBag */
    private \$parameterBag;
    /** @var ContainerBag */
    private \$containerBag;

    protected function setUp(): void
    {
        \$this->parameterBag = new ParameterBag(['foo' => 'value']);
        \$this->containerBag = new ContainerBag(new Container(\$this->parameterBag));
    }

    public function testGetAllParameters()
    {
        \$this->assertSame(['foo' => 'value'], \$this->containerBag->all());
    }

    public function testHasAParameter()
    {
        \$this->assertTrue(\$this->containerBag->has('foo'));
        \$this->assertFalse(\$this->containerBag->has('bar'));
    }

    public function testGetParameter()
    {
        \$this->assertSame('value', \$this->containerBag->get('foo'));
    }

    public function testGetParameterNotFound()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$this->containerBag->get('bar');
    }

    public function testInstanceOf()
    {
        \$this->assertInstanceOf(FrozenParameterBag::class, \$this->containerBag);
        \$this->assertInstanceOf(ContainerBagInterface::class, \$this->containerBag);
        \$this->assertInstanceOf(ContainerInterface::class, \$this->containerBag);
    }
}
", "vendor/symfony/dependency-injection/Tests/ParameterBag/ContainerBagTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/ParameterBag/ContainerBagTest.php");
    }
}
