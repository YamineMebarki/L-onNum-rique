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

/* vendor/symfony/dependency-injection/Tests/LazyProxy/Instantiator/RealServiceInstantiatorTest.php */
class __TwigTemplate_cd6328117b8d417820cce713ed5053a3a809a8c8b0ff20f170fe47ae035709b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/LazyProxy/Instantiator/RealServiceInstantiatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/LazyProxy/Instantiator/RealServiceInstantiatorTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\LazyProxy\\Instantiator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator;

/**
 * Tests for {@see \\Symfony\\Component\\DependencyInjection\\Instantiator\\RealServiceInstantiator}.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class RealServiceInstantiatorTest extends TestCase
{
    public function testInstantiateProxy()
    {
        \$instantiator = new RealServiceInstantiator();
        \$instance = new \\stdClass();
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();
        \$callback = function () use (\$instance) {
            return \$instance;
        };

        \$this->assertSame(\$instance, \$instantiator->instantiateProxy(\$container, new Definition(), 'foo', \$callback));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/LazyProxy/Instantiator/RealServiceInstantiatorTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\LazyProxy\\Instantiator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator;

/**
 * Tests for {@see \\Symfony\\Component\\DependencyInjection\\Instantiator\\RealServiceInstantiator}.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class RealServiceInstantiatorTest extends TestCase
{
    public function testInstantiateProxy()
    {
        \$instantiator = new RealServiceInstantiator();
        \$instance = new \\stdClass();
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();
        \$callback = function () use (\$instance) {
            return \$instance;
        };

        \$this->assertSame(\$instance, \$instantiator->instantiateProxy(\$container, new Definition(), 'foo', \$callback));
    }
}
", "vendor/symfony/dependency-injection/Tests/LazyProxy/Instantiator/RealServiceInstantiatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/LazyProxy/Instantiator/RealServiceInstantiatorTest.php");
    }
}
