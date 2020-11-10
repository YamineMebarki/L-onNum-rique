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

/* vendor/symfony/monolog-bridge/Tests/Handler/FingersCrossed/NotFoundActivationStrategyTest.php */
class __TwigTemplate_5b9c0b9e4ba43f35d6ddff643d2de3e68afb93fe03c147dcfc52f32beae2c05f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Handler/FingersCrossed/NotFoundActivationStrategyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Handler/FingersCrossed/NotFoundActivationStrategyTest.php"));

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

namespace Symfony\\Bridge\\Monolog\\Tests\\Handler\\FingersCrossed;

use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\NotFoundActivationStrategy;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;

class NotFoundActivationStrategyTest extends TestCase
{
    /**
     * @dataProvider isActivatedProvider
     */
    public function testIsActivated(\$url, \$record, \$expected)
    {
        \$requestStack = new RequestStack();
        \$requestStack->push(Request::create(\$url));

        \$strategy = new NotFoundActivationStrategy(\$requestStack, ['^/foo', 'bar'], Logger::WARNING);

        \$this->assertEquals(\$expected, \$strategy->isHandlerActivated(\$record));
    }

    public function isActivatedProvider()
    {
        return [
            ['/test',      ['level' => Logger::DEBUG], false],
            ['/foo',       ['level' => Logger::DEBUG, 'context' => \$this->getContextException(404)], false],
            ['/baz/bar',   ['level' => Logger::ERROR, 'context' => \$this->getContextException(404)], false],
            ['/foo',       ['level' => Logger::ERROR, 'context' => \$this->getContextException(404)], false],
            ['/foo',       ['level' => Logger::ERROR, 'context' => \$this->getContextException(500)], true],

            ['/test',      ['level' => Logger::ERROR], true],
            ['/baz',       ['level' => Logger::ERROR, 'context' => \$this->getContextException(404)], true],
            ['/baz',       ['level' => Logger::ERROR, 'context' => \$this->getContextException(500)], true],
        ];
    }

    protected function getContextException(\$code)
    {
        return ['exception' => new HttpException(\$code)];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Tests/Handler/FingersCrossed/NotFoundActivationStrategyTest.php";
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

namespace Symfony\\Bridge\\Monolog\\Tests\\Handler\\FingersCrossed;

use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\NotFoundActivationStrategy;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;

class NotFoundActivationStrategyTest extends TestCase
{
    /**
     * @dataProvider isActivatedProvider
     */
    public function testIsActivated(\$url, \$record, \$expected)
    {
        \$requestStack = new RequestStack();
        \$requestStack->push(Request::create(\$url));

        \$strategy = new NotFoundActivationStrategy(\$requestStack, ['^/foo', 'bar'], Logger::WARNING);

        \$this->assertEquals(\$expected, \$strategy->isHandlerActivated(\$record));
    }

    public function isActivatedProvider()
    {
        return [
            ['/test',      ['level' => Logger::DEBUG], false],
            ['/foo',       ['level' => Logger::DEBUG, 'context' => \$this->getContextException(404)], false],
            ['/baz/bar',   ['level' => Logger::ERROR, 'context' => \$this->getContextException(404)], false],
            ['/foo',       ['level' => Logger::ERROR, 'context' => \$this->getContextException(404)], false],
            ['/foo',       ['level' => Logger::ERROR, 'context' => \$this->getContextException(500)], true],

            ['/test',      ['level' => Logger::ERROR], true],
            ['/baz',       ['level' => Logger::ERROR, 'context' => \$this->getContextException(404)], true],
            ['/baz',       ['level' => Logger::ERROR, 'context' => \$this->getContextException(500)], true],
        ];
    }

    protected function getContextException(\$code)
    {
        return ['exception' => new HttpException(\$code)];
    }
}
", "vendor/symfony/monolog-bridge/Tests/Handler/FingersCrossed/NotFoundActivationStrategyTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Tests/Handler/FingersCrossed/NotFoundActivationStrategyTest.php");
    }
}
