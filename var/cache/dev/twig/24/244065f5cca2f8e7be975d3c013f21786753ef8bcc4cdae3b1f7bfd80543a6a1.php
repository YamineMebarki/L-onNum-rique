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

/* vendor/symfony/http-kernel/Tests/DependencyInjection/AddAnnotatedClassesToCachePassTest.php */
class __TwigTemplate_e72a309c2f0858b3a627f64bf6ddefbddb5160f29cc3f6176750060ad99a6f04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/AddAnnotatedClassesToCachePassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DependencyInjection/AddAnnotatedClassesToCachePassTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass;

class AddAnnotatedClassesToCachePassTest extends TestCase
{
    public function testExpandClasses()
    {
        \$r = new \\ReflectionClass(AddAnnotatedClassesToCachePass::class);
        \$pass = \$r->newInstanceWithoutConstructor();
        \$r = new \\ReflectionMethod(AddAnnotatedClassesToCachePass::class, 'expandClasses');
        \$r->setAccessible(true);
        \$expand = \$r->getClosure(\$pass);

        \$this->assertSame('Foo', \$expand(['Foo'], [])[0]);
        \$this->assertSame('Foo', \$expand(['\\\\Foo'], [])[0]);
        \$this->assertSame('Foo', \$expand(['Foo'], ['\\\\Foo'])[0]);
        \$this->assertSame('Foo', \$expand(['Foo'], ['Foo'])[0]);
        \$this->assertSame('Foo', \$expand(['\\\\Foo'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertSame('Foo', \$expand(['Foo'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertSame('Foo', \$expand(['\\\\Foo'], ['\\\\Foo\\\\Bar\\\\Acme'])[0]);

        \$this->assertSame('Foo\\\\Bar', \$expand(['Foo\\\\'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertSame('Foo\\\\Bar\\\\Acme', \$expand(['Foo\\\\'], ['\\\\Foo\\\\Bar\\\\Acme'])[0]);
        \$this->assertEmpty(\$expand(['Foo\\\\'], ['\\\\Foo']));

        \$this->assertSame('Acme\\\\Foo\\\\Bar', \$expand(['**\\\\Foo\\\\'], ['\\\\Acme\\\\Foo\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['**\\\\Foo\\\\'], ['\\\\Foo\\\\Bar']));
        \$this->assertEmpty(\$expand(['**\\\\Foo\\\\'], ['\\\\Acme\\\\Foo']));
        \$this->assertEmpty(\$expand(['**\\\\Foo\\\\'], ['\\\\Foo']));

        \$this->assertSame('Acme\\\\Foo', \$expand(['**\\\\Foo'], ['\\\\Acme\\\\Foo'])[0]);
        \$this->assertEmpty(\$expand(['**\\\\Foo'], ['\\\\Acme\\\\Foo\\\\AcmeBundle']));
        \$this->assertEmpty(\$expand(['**\\\\Foo'], ['\\\\Acme\\\\FooBar\\\\AcmeBundle']));

        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['Foo\\\\*\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['Foo\\\\*\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bundle\\\\Bar']));

        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['Foo\\\\**\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);
        \$this->assertSame('Foo\\\\Acme\\\\Bundle\\\\Bar', \$expand(['Foo\\\\**\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bundle\\\\Bar'])[0]);

        \$this->assertSame('Acme\\\\Bar', \$expand(['*\\\\Bar'], ['\\\\Acme\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['*\\\\Bar'], ['\\\\Bar']));
        \$this->assertEmpty(\$expand(['*\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bar']));

        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['**\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);
        \$this->assertSame('Foo\\\\Acme\\\\Bundle\\\\Bar', \$expand(['**\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bundle\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['**\\\\Bar'], ['\\\\Bar']));

        \$this->assertSame('Foo\\\\Bar', \$expand(['Foo\\\\*'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['Foo\\\\*'], ['\\\\Foo\\\\Acme\\\\Bar']));

        \$this->assertSame('Foo\\\\Bar', \$expand(['Foo\\\\**'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['Foo\\\\**'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);

        \$this->assertSame(['Foo\\\\Bar'], \$expand(['Foo\\\\*'], ['Foo\\\\Bar', 'Foo\\\\BarTest']));
        \$this->assertSame(['Foo\\\\Bar', 'Foo\\\\BarTest'], \$expand(['Foo\\\\*', 'Foo\\\\*DevLaon'], ['Foo\\\\Bar', 'Foo\\\\BarTest']));

        \$this->assertSame(
            'Acme\\\\FooBundle\\\\Controller\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\Acme\\\\FooBundle\\\\Controller\\\\DefaultController'])[0]
        );

        \$this->assertSame(
            'FooBundle\\\\Controller\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\FooBundle\\\\Controller\\\\DefaultController'])[0]
        );

        \$this->assertSame(
            'Acme\\\\FooBundle\\\\Controller\\\\Bar\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\Acme\\\\FooBundle\\\\Controller\\\\Bar\\\\DefaultController'])[0]
        );

        \$this->assertSame(
            'Bundle\\\\Controller\\\\Bar\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\Bundle\\\\Controller\\\\Bar\\\\DefaultController'])[0]
        );

        \$this->assertSame(
            'Acme\\\\Bundle\\\\Controller\\\\Bar\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\Acme\\\\Bundle\\\\Controller\\\\Bar\\\\DefaultController'])[0]
        );

        \$this->assertSame('Foo\\\\Bar', \$expand(['Foo\\\\Bar'], [])[0]);
        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['Foo\\\\**'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DependencyInjection/AddAnnotatedClassesToCachePassTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\AddAnnotatedClassesToCachePass;

class AddAnnotatedClassesToCachePassTest extends TestCase
{
    public function testExpandClasses()
    {
        \$r = new \\ReflectionClass(AddAnnotatedClassesToCachePass::class);
        \$pass = \$r->newInstanceWithoutConstructor();
        \$r = new \\ReflectionMethod(AddAnnotatedClassesToCachePass::class, 'expandClasses');
        \$r->setAccessible(true);
        \$expand = \$r->getClosure(\$pass);

        \$this->assertSame('Foo', \$expand(['Foo'], [])[0]);
        \$this->assertSame('Foo', \$expand(['\\\\Foo'], [])[0]);
        \$this->assertSame('Foo', \$expand(['Foo'], ['\\\\Foo'])[0]);
        \$this->assertSame('Foo', \$expand(['Foo'], ['Foo'])[0]);
        \$this->assertSame('Foo', \$expand(['\\\\Foo'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertSame('Foo', \$expand(['Foo'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertSame('Foo', \$expand(['\\\\Foo'], ['\\\\Foo\\\\Bar\\\\Acme'])[0]);

        \$this->assertSame('Foo\\\\Bar', \$expand(['Foo\\\\'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertSame('Foo\\\\Bar\\\\Acme', \$expand(['Foo\\\\'], ['\\\\Foo\\\\Bar\\\\Acme'])[0]);
        \$this->assertEmpty(\$expand(['Foo\\\\'], ['\\\\Foo']));

        \$this->assertSame('Acme\\\\Foo\\\\Bar', \$expand(['**\\\\Foo\\\\'], ['\\\\Acme\\\\Foo\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['**\\\\Foo\\\\'], ['\\\\Foo\\\\Bar']));
        \$this->assertEmpty(\$expand(['**\\\\Foo\\\\'], ['\\\\Acme\\\\Foo']));
        \$this->assertEmpty(\$expand(['**\\\\Foo\\\\'], ['\\\\Foo']));

        \$this->assertSame('Acme\\\\Foo', \$expand(['**\\\\Foo'], ['\\\\Acme\\\\Foo'])[0]);
        \$this->assertEmpty(\$expand(['**\\\\Foo'], ['\\\\Acme\\\\Foo\\\\AcmeBundle']));
        \$this->assertEmpty(\$expand(['**\\\\Foo'], ['\\\\Acme\\\\FooBar\\\\AcmeBundle']));

        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['Foo\\\\*\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['Foo\\\\*\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bundle\\\\Bar']));

        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['Foo\\\\**\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);
        \$this->assertSame('Foo\\\\Acme\\\\Bundle\\\\Bar', \$expand(['Foo\\\\**\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bundle\\\\Bar'])[0]);

        \$this->assertSame('Acme\\\\Bar', \$expand(['*\\\\Bar'], ['\\\\Acme\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['*\\\\Bar'], ['\\\\Bar']));
        \$this->assertEmpty(\$expand(['*\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bar']));

        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['**\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);
        \$this->assertSame('Foo\\\\Acme\\\\Bundle\\\\Bar', \$expand(['**\\\\Bar'], ['\\\\Foo\\\\Acme\\\\Bundle\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['**\\\\Bar'], ['\\\\Bar']));

        \$this->assertSame('Foo\\\\Bar', \$expand(['Foo\\\\*'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertEmpty(\$expand(['Foo\\\\*'], ['\\\\Foo\\\\Acme\\\\Bar']));

        \$this->assertSame('Foo\\\\Bar', \$expand(['Foo\\\\**'], ['\\\\Foo\\\\Bar'])[0]);
        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['Foo\\\\**'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);

        \$this->assertSame(['Foo\\\\Bar'], \$expand(['Foo\\\\*'], ['Foo\\\\Bar', 'Foo\\\\BarTest']));
        \$this->assertSame(['Foo\\\\Bar', 'Foo\\\\BarTest'], \$expand(['Foo\\\\*', 'Foo\\\\*DevLaon'], ['Foo\\\\Bar', 'Foo\\\\BarTest']));

        \$this->assertSame(
            'Acme\\\\FooBundle\\\\Controller\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\Acme\\\\FooBundle\\\\Controller\\\\DefaultController'])[0]
        );

        \$this->assertSame(
            'FooBundle\\\\Controller\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\FooBundle\\\\Controller\\\\DefaultController'])[0]
        );

        \$this->assertSame(
            'Acme\\\\FooBundle\\\\Controller\\\\Bar\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\Acme\\\\FooBundle\\\\Controller\\\\Bar\\\\DefaultController'])[0]
        );

        \$this->assertSame(
            'Bundle\\\\Controller\\\\Bar\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\Bundle\\\\Controller\\\\Bar\\\\DefaultController'])[0]
        );

        \$this->assertSame(
            'Acme\\\\Bundle\\\\Controller\\\\Bar\\\\DefaultController',
            \$expand(['**Bundle\\\\Controller\\\\'], ['\\\\Acme\\\\Bundle\\\\Controller\\\\Bar\\\\DefaultController'])[0]
        );

        \$this->assertSame('Foo\\\\Bar', \$expand(['Foo\\\\Bar'], [])[0]);
        \$this->assertSame('Foo\\\\Acme\\\\Bar', \$expand(['Foo\\\\**'], ['\\\\Foo\\\\Acme\\\\Bar'])[0]);
    }
}
", "vendor/symfony/http-kernel/Tests/DependencyInjection/AddAnnotatedClassesToCachePassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DependencyInjection/AddAnnotatedClassesToCachePassTest.php");
    }
}
