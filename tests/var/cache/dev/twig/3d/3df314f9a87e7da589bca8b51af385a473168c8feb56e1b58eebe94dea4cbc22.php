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

/* vendor/symfony/dependency-injection/Tests/Compiler/ResolvePrivatesPassTest.php */
class __TwigTemplate_91edb2256e4b0023e34a8f36980c1a74df631b081715d6704c3fdd9b8a29a3c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolvePrivatesPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/ResolvePrivatesPassTest.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolvePrivatesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class ResolvePrivatesPassTest extends TestCase
{
    public function testPrivateHasHigherPrecedenceThanPublic()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', 'stdClass')
            ->setPublic(true)
            ->setPrivate(true)
        ;

        \$container->setAlias('bar', 'foo')
            ->setPublic(false)
            ->setPrivate(false)
        ;

        (new ResolvePrivatesPass())->process(\$container);

        \$this->assertFalse(\$container->getDefinition('foo')->isPublic());
        \$this->assertFalse(\$container->getAlias('bar')->isPublic());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/ResolvePrivatesPassTest.php";
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

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Compiler\\ResolvePrivatesPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class ResolvePrivatesPassTest extends TestCase
{
    public function testPrivateHasHigherPrecedenceThanPublic()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', 'stdClass')
            ->setPublic(true)
            ->setPrivate(true)
        ;

        \$container->setAlias('bar', 'foo')
            ->setPublic(false)
            ->setPrivate(false)
        ;

        (new ResolvePrivatesPass())->process(\$container);

        \$this->assertFalse(\$container->getDefinition('foo')->isPublic());
        \$this->assertFalse(\$container->getAlias('bar')->isPublic());
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/ResolvePrivatesPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/ResolvePrivatesPassTest.php");
    }
}
