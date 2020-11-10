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

/* vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedMethodFatalErrorHandlerTest.php */
class __TwigTemplate_1450e7e8e5fbeab416fda361e61d95577460733aee8cd7256d68f739c150b220 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedMethodFatalErrorHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedMethodFatalErrorHandlerTest.php"));

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

namespace Symfony\\Component\\Debug\\Tests\\FatalErrorHandler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Debug\\Exception\\FatalErrorException;
use Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedMethodFatalErrorHandler;

class UndefinedMethodFatalErrorHandlerTest extends TestCase
{
    /**
     * @dataProvider provideUndefinedMethodData
     */
    public function testUndefinedMethod(\$error, \$translatedMessage)
    {
        \$handler = new UndefinedMethodFatalErrorHandler();
        \$exception = \$handler->handleError(\$error, new FatalErrorException('', 0, \$error['type'], \$error['file'], \$error['line']));

        \$this->assertInstanceOf('Symfony\\Component\\Debug\\Exception\\UndefinedMethodException', \$exception);
        \$this->assertSame(\$translatedMessage, \$exception->getMessage());
        \$this->assertSame(\$error['type'], \$exception->getSeverity());
        \$this->assertSame(\$error['file'], \$exception->getFile());
        \$this->assertSame(\$error['line'], \$exception->getLine());
    }

    public function provideUndefinedMethodData()
    {
        return [
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined method SplObjectStorage::what()',
                ],
                'Attempted to call an undefined method named \"what\" of class \"SplObjectStorage\".',
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined method SplObjectStorage::walid()',
                ],
                \"Attempted to call an undefined method named \\\"walid\\\" of class \\\"SplObjectStorage\\\".\\nDid you mean to call \\\"valid\\\"?\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined method SplObjectStorage::offsetFet()',
                ],
                \"Attempted to call an undefined method named \\\"offsetFet\\\" of class \\\"SplObjectStorage\\\".\\nDid you mean to call e.g. \\\"offsetGet\\\", \\\"offsetSet\\\" or \\\"offsetUnset\\\"?\",
            ],
            [
                [
                    'type' => 1,
                    'message' => 'Call to undefined method class@anonymous::test()',
                    'file' => '/home/possum/work/symfony/test.php',
                    'line' => 11,
                ],
                'Attempted to call an undefined method named \"test\" of class \"class@anonymous\".',
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedMethodFatalErrorHandlerTest.php";
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

namespace Symfony\\Component\\Debug\\Tests\\FatalErrorHandler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Debug\\Exception\\FatalErrorException;
use Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedMethodFatalErrorHandler;

class UndefinedMethodFatalErrorHandlerTest extends TestCase
{
    /**
     * @dataProvider provideUndefinedMethodData
     */
    public function testUndefinedMethod(\$error, \$translatedMessage)
    {
        \$handler = new UndefinedMethodFatalErrorHandler();
        \$exception = \$handler->handleError(\$error, new FatalErrorException('', 0, \$error['type'], \$error['file'], \$error['line']));

        \$this->assertInstanceOf('Symfony\\Component\\Debug\\Exception\\UndefinedMethodException', \$exception);
        \$this->assertSame(\$translatedMessage, \$exception->getMessage());
        \$this->assertSame(\$error['type'], \$exception->getSeverity());
        \$this->assertSame(\$error['file'], \$exception->getFile());
        \$this->assertSame(\$error['line'], \$exception->getLine());
    }

    public function provideUndefinedMethodData()
    {
        return [
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined method SplObjectStorage::what()',
                ],
                'Attempted to call an undefined method named \"what\" of class \"SplObjectStorage\".',
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined method SplObjectStorage::walid()',
                ],
                \"Attempted to call an undefined method named \\\"walid\\\" of class \\\"SplObjectStorage\\\".\\nDid you mean to call \\\"valid\\\"?\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined method SplObjectStorage::offsetFet()',
                ],
                \"Attempted to call an undefined method named \\\"offsetFet\\\" of class \\\"SplObjectStorage\\\".\\nDid you mean to call e.g. \\\"offsetGet\\\", \\\"offsetSet\\\" or \\\"offsetUnset\\\"?\",
            ],
            [
                [
                    'type' => 1,
                    'message' => 'Call to undefined method class@anonymous::test()',
                    'file' => '/home/possum/work/symfony/test.php',
                    'line' => 11,
                ],
                'Attempted to call an undefined method named \"test\" of class \"class@anonymous\".',
            ],
        ];
    }
}
", "vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedMethodFatalErrorHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedMethodFatalErrorHandlerTest.php");
    }
}
