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

/* vendor/symfony/browser-kit/Tests/HistoryTest.php */
class __TwigTemplate_8a804d394828a922d4f6db6f8b7a03681f5a6c87857e4af4b881ef31573a274f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/HistoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/HistoryTest.php"));

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

namespace Symfony\\Component\\BrowserKit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\BrowserKit\\Request;

class HistoryTest extends TestCase
{
    public function testAdd()
    {
        \$history = new History();
        \$history->add(new Request('http://www.example1.com/', 'get'));
        \$this->assertSame('http://www.example1.com/', \$history->current()->getUri(), '->add() adds a request to the history');

        \$history->add(new Request('http://www.example2.com/', 'get'));
        \$this->assertSame('http://www.example2.com/', \$history->current()->getUri(), '->add() adds a request to the history');

        \$history->add(new Request('http://www.example3.com/', 'get'));
        \$history->back();
        \$history->add(new Request('http://www.example4.com/', 'get'));
        \$this->assertSame('http://www.example4.com/', \$history->current()->getUri(), '->add() adds a request to the history');

        \$history->back();
        \$this->assertSame('http://www.example2.com/', \$history->current()->getUri(), '->add() adds a request to the history');
    }

    public function testClearIsEmpty()
    {
        \$history = new History();
        \$history->add(new Request('http://www.example.com/', 'get'));

        \$this->assertFalse(\$history->isEmpty(), '->isEmpty() returns false if the history is not empty');

        \$history->clear();

        \$this->assertTrue(\$history->isEmpty(), '->isEmpty() true if the history is empty');
    }

    public function testCurrent()
    {
        \$history = new History();

        try {
            \$history->current();
            \$this->fail('->current() throws a \\LogicException if the history is empty');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('LogicException', \$e, '->current() throws a \\LogicException if the history is empty');
        }

        \$history->add(new Request('http://www.example.com/', 'get'));

        \$this->assertSame('http://www.example.com/', \$history->current()->getUri(), '->current() returns the current request in the history');
    }

    public function testBack()
    {
        \$history = new History();
        \$history->add(new Request('http://www.example.com/', 'get'));

        try {
            \$history->back();
            \$this->fail('->back() throws a \\LogicException if the history is already on the first page');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('LogicException', \$e, '->current() throws a \\LogicException if the history is already on the first page');
        }

        \$history->add(new Request('http://www.example1.com/', 'get'));
        \$history->back();

        \$this->assertSame('http://www.example.com/', \$history->current()->getUri(), '->back() returns the previous request in the history');
    }

    public function testForward()
    {
        \$history = new History();
        \$history->add(new Request('http://www.example.com/', 'get'));
        \$history->add(new Request('http://www.example1.com/', 'get'));

        try {
            \$history->forward();
            \$this->fail('->forward() throws a \\LogicException if the history is already on the last page');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('LogicException', \$e, '->forward() throws a \\LogicException if the history is already on the last page');
        }

        \$history->back();
        \$history->forward();

        \$this->assertSame('http://www.example1.com/', \$history->current()->getUri(), '->forward() returns the next request in the history');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Tests/HistoryTest.php";
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

namespace Symfony\\Component\\BrowserKit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\BrowserKit\\Request;

class HistoryTest extends TestCase
{
    public function testAdd()
    {
        \$history = new History();
        \$history->add(new Request('http://www.example1.com/', 'get'));
        \$this->assertSame('http://www.example1.com/', \$history->current()->getUri(), '->add() adds a request to the history');

        \$history->add(new Request('http://www.example2.com/', 'get'));
        \$this->assertSame('http://www.example2.com/', \$history->current()->getUri(), '->add() adds a request to the history');

        \$history->add(new Request('http://www.example3.com/', 'get'));
        \$history->back();
        \$history->add(new Request('http://www.example4.com/', 'get'));
        \$this->assertSame('http://www.example4.com/', \$history->current()->getUri(), '->add() adds a request to the history');

        \$history->back();
        \$this->assertSame('http://www.example2.com/', \$history->current()->getUri(), '->add() adds a request to the history');
    }

    public function testClearIsEmpty()
    {
        \$history = new History();
        \$history->add(new Request('http://www.example.com/', 'get'));

        \$this->assertFalse(\$history->isEmpty(), '->isEmpty() returns false if the history is not empty');

        \$history->clear();

        \$this->assertTrue(\$history->isEmpty(), '->isEmpty() true if the history is empty');
    }

    public function testCurrent()
    {
        \$history = new History();

        try {
            \$history->current();
            \$this->fail('->current() throws a \\LogicException if the history is empty');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('LogicException', \$e, '->current() throws a \\LogicException if the history is empty');
        }

        \$history->add(new Request('http://www.example.com/', 'get'));

        \$this->assertSame('http://www.example.com/', \$history->current()->getUri(), '->current() returns the current request in the history');
    }

    public function testBack()
    {
        \$history = new History();
        \$history->add(new Request('http://www.example.com/', 'get'));

        try {
            \$history->back();
            \$this->fail('->back() throws a \\LogicException if the history is already on the first page');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('LogicException', \$e, '->current() throws a \\LogicException if the history is already on the first page');
        }

        \$history->add(new Request('http://www.example1.com/', 'get'));
        \$history->back();

        \$this->assertSame('http://www.example.com/', \$history->current()->getUri(), '->back() returns the previous request in the history');
    }

    public function testForward()
    {
        \$history = new History();
        \$history->add(new Request('http://www.example.com/', 'get'));
        \$history->add(new Request('http://www.example1.com/', 'get'));

        try {
            \$history->forward();
            \$this->fail('->forward() throws a \\LogicException if the history is already on the last page');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('LogicException', \$e, '->forward() throws a \\LogicException if the history is already on the last page');
        }

        \$history->back();
        \$history->forward();

        \$this->assertSame('http://www.example1.com/', \$history->current()->getUri(), '->forward() returns the next request in the history');
    }
}
", "vendor/symfony/browser-kit/Tests/HistoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Tests/HistoryTest.php");
    }
}
