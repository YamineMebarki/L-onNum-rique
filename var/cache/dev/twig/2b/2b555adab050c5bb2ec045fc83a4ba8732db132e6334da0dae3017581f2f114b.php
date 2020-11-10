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

/* vendor/symfony/http-kernel/Tests/EventListener/DumpListenerTest.php */
class __TwigTemplate_402a2b01c84214ae5a48060f2cda8e029bab45dae10c5d6e5c91316c3f510c2b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/DumpListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/DumpListenerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\HttpKernel\\EventListener\\DumpListener;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface;
use Symfony\\Component\\VarDumper\\VarDumper;

/**
 * DumpListenerTest.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpListenerTest extends TestCase
{
    public function testSubscribedEvents()
    {
        \$this->assertSame(
            [ConsoleEvents::COMMAND => ['configure', 1024]],
            DumpListener::getSubscribedEvents()
        );
    }

    public function testConfigure()
    {
        \$prevDumper = VarDumper::setHandler('var_dump');
        VarDumper::setHandler(\$prevDumper);

        \$cloner = new MockCloner();
        \$dumper = new MockDumper();

        ob_start();
        \$exception = null;
        \$listener = new DumpListener(\$cloner, \$dumper);

        try {
            \$listener->configure();

            VarDumper::dump('foo');
            VarDumper::dump('bar');

            \$this->assertSame('+foo-+bar-', ob_get_clean());
        } catch (\\Exception \$exception) {
        }

        VarDumper::setHandler(\$prevDumper);

        if (null !== \$exception) {
            throw \$exception;
        }
    }
}

class MockCloner implements ClonerInterface
{
    public function cloneVar(\$var)
    {
        return new Data([[\$var.'-']]);
    }
}

class MockDumper implements DataDumperInterface
{
    public function dump(Data \$data)
    {
        echo '+'.\$data->getValue();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/DumpListenerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\HttpKernel\\EventListener\\DumpListener;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface;
use Symfony\\Component\\VarDumper\\VarDumper;

/**
 * DumpListenerTest.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpListenerTest extends TestCase
{
    public function testSubscribedEvents()
    {
        \$this->assertSame(
            [ConsoleEvents::COMMAND => ['configure', 1024]],
            DumpListener::getSubscribedEvents()
        );
    }

    public function testConfigure()
    {
        \$prevDumper = VarDumper::setHandler('var_dump');
        VarDumper::setHandler(\$prevDumper);

        \$cloner = new MockCloner();
        \$dumper = new MockDumper();

        ob_start();
        \$exception = null;
        \$listener = new DumpListener(\$cloner, \$dumper);

        try {
            \$listener->configure();

            VarDumper::dump('foo');
            VarDumper::dump('bar');

            \$this->assertSame('+foo-+bar-', ob_get_clean());
        } catch (\\Exception \$exception) {
        }

        VarDumper::setHandler(\$prevDumper);

        if (null !== \$exception) {
            throw \$exception;
        }
    }
}

class MockCloner implements ClonerInterface
{
    public function cloneVar(\$var)
    {
        return new Data([[\$var.'-']]);
    }
}

class MockDumper implements DataDumperInterface
{
    public function dump(Data \$data)
    {
        echo '+'.\$data->getValue();
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/DumpListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/DumpListenerTest.php");
    }
}
