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

/* vendor/symfony/dependency-injection/Tests/Compiler/AutoAliasServicePassTest.php */
class __TwigTemplate_57e6c7c8e7ef08abc80a1554c6c18d408b3d73585d30772462dc6d3e22e89ae3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/AutoAliasServicePassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/AutoAliasServicePassTest.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\AutoAliasServicePass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class AutoAliasServicePassTest extends TestCase
{
    public function testProcessWithMissingParameter()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException');
        \$container = new ContainerBuilder();

        \$container->register('example')
            ->addTag('auto_alias', ['format' => '%non_existing%.example']);

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);
    }

    public function testProcessWithMissingFormat()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$container = new ContainerBuilder();

        \$container->register('example')
            ->addTag('auto_alias', []);
        \$container->setParameter('existing', 'mysql');

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);
    }

    public function testProcessWithNonExistingAlias()
    {
        \$container = new ContainerBuilder();

        \$container->register('example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassDefault')
            ->addTag('auto_alias', ['format' => '%existing%.example']);
        \$container->setParameter('existing', 'mysql');

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);

        \$this->assertEquals('Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassDefault', \$container->getDefinition('example')->getClass());
    }

    public function testProcessWithExistingAlias()
    {
        \$container = new ContainerBuilder();

        \$container->register('example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassDefault')
            ->addTag('auto_alias', ['format' => '%existing%.example']);

        \$container->register('mysql.example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMysql');
        \$container->setParameter('existing', 'mysql');

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);

        \$this->assertTrue(\$container->hasAlias('example'));
        \$this->assertEquals('mysql.example', \$container->getAlias('example'));
        \$this->assertSame('Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMysql', \$container->getDefinition('mysql.example')->getClass());
    }

    public function testProcessWithManualAlias()
    {
        \$container = new ContainerBuilder();

        \$container->register('example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassDefault')
            ->addTag('auto_alias', ['format' => '%existing%.example']);

        \$container->register('mysql.example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMysql');
        \$container->register('mariadb.example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMariaDb');
        \$container->setAlias('example', 'mariadb.example');
        \$container->setParameter('existing', 'mysql');

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);

        \$this->assertTrue(\$container->hasAlias('example'));
        \$this->assertEquals('mariadb.example', \$container->getAlias('example'));
        \$this->assertSame('Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMariaDb', \$container->getDefinition('mariadb.example')->getClass());
    }
}

class ServiceClassDefault
{
}

class ServiceClassMysql extends ServiceClassDefault
{
}

class ServiceClassMariaDb extends ServiceClassMysql
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/AutoAliasServicePassTest.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\AutoAliasServicePass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class AutoAliasServicePassTest extends TestCase
{
    public function testProcessWithMissingParameter()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException');
        \$container = new ContainerBuilder();

        \$container->register('example')
            ->addTag('auto_alias', ['format' => '%non_existing%.example']);

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);
    }

    public function testProcessWithMissingFormat()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException');
        \$container = new ContainerBuilder();

        \$container->register('example')
            ->addTag('auto_alias', []);
        \$container->setParameter('existing', 'mysql');

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);
    }

    public function testProcessWithNonExistingAlias()
    {
        \$container = new ContainerBuilder();

        \$container->register('example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassDefault')
            ->addTag('auto_alias', ['format' => '%existing%.example']);
        \$container->setParameter('existing', 'mysql');

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);

        \$this->assertEquals('Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassDefault', \$container->getDefinition('example')->getClass());
    }

    public function testProcessWithExistingAlias()
    {
        \$container = new ContainerBuilder();

        \$container->register('example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassDefault')
            ->addTag('auto_alias', ['format' => '%existing%.example']);

        \$container->register('mysql.example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMysql');
        \$container->setParameter('existing', 'mysql');

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);

        \$this->assertTrue(\$container->hasAlias('example'));
        \$this->assertEquals('mysql.example', \$container->getAlias('example'));
        \$this->assertSame('Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMysql', \$container->getDefinition('mysql.example')->getClass());
    }

    public function testProcessWithManualAlias()
    {
        \$container = new ContainerBuilder();

        \$container->register('example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassDefault')
            ->addTag('auto_alias', ['format' => '%existing%.example']);

        \$container->register('mysql.example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMysql');
        \$container->register('mariadb.example', 'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMariaDb');
        \$container->setAlias('example', 'mariadb.example');
        \$container->setParameter('existing', 'mysql');

        \$pass = new AutoAliasServicePass();
        \$pass->process(\$container);

        \$this->assertTrue(\$container->hasAlias('example'));
        \$this->assertEquals('mariadb.example', \$container->getAlias('example'));
        \$this->assertSame('Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\ServiceClassMariaDb', \$container->getDefinition('mariadb.example')->getClass());
    }
}

class ServiceClassDefault
{
}

class ServiceClassMysql extends ServiceClassDefault
{
}

class ServiceClassMariaDb extends ServiceClassMysql
{
}
", "vendor/symfony/dependency-injection/Tests/Compiler/AutoAliasServicePassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/AutoAliasServicePassTest.php");
    }
}
