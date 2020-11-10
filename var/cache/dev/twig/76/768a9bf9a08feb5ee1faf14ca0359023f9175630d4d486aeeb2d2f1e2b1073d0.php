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

/* vendor/symfony/http-kernel/Tests/CacheClearer/Psr6CacheClearerTest.php */
class __TwigTemplate_a0b6428cf877c7acc327d97081077d57a82ec31a9fd406baf174fc3b5d93142d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/CacheClearer/Psr6CacheClearerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/CacheClearer/Psr6CacheClearerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\CacheClearer;

use PHPUnit\\Framework\\TestCase;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

class Psr6CacheClearerTest extends TestCase
{
    public function testClearPoolsInjectedInConstructor()
    {
        \$pool = \$this->getMockBuilder(CacheItemPoolInterface::class)->getMock();
        \$pool
            ->expects(\$this->once())
            ->method('clear');

        (new Psr6CacheClearer(['pool' => \$pool]))->clear('');
    }

    public function testClearPool()
    {
        \$pool = \$this->getMockBuilder(CacheItemPoolInterface::class)->getMock();
        \$pool
            ->expects(\$this->once())
            ->method('clear');

        (new Psr6CacheClearer(['pool' => \$pool]))->clearPool('pool');
    }

    public function testClearPoolThrowsExceptionOnUnreferencedPool()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Cache pool not found: unknown');
        (new Psr6CacheClearer())->clearPool('unknown');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/CacheClearer/Psr6CacheClearerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\CacheClearer;

use PHPUnit\\Framework\\TestCase;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

class Psr6CacheClearerTest extends TestCase
{
    public function testClearPoolsInjectedInConstructor()
    {
        \$pool = \$this->getMockBuilder(CacheItemPoolInterface::class)->getMock();
        \$pool
            ->expects(\$this->once())
            ->method('clear');

        (new Psr6CacheClearer(['pool' => \$pool]))->clear('');
    }

    public function testClearPool()
    {
        \$pool = \$this->getMockBuilder(CacheItemPoolInterface::class)->getMock();
        \$pool
            ->expects(\$this->once())
            ->method('clear');

        (new Psr6CacheClearer(['pool' => \$pool]))->clearPool('pool');
    }

    public function testClearPoolThrowsExceptionOnUnreferencedPool()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Cache pool not found: unknown');
        (new Psr6CacheClearer())->clearPool('unknown');
    }
}
", "vendor/symfony/http-kernel/Tests/CacheClearer/Psr6CacheClearerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/CacheClearer/Psr6CacheClearerTest.php");
    }
}
