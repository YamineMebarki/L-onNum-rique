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

/* vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedFunctionFatalErrorHandlerTest.php */
class __TwigTemplate_21ff72031585a8d4a30d00913608b4b96e3f5aa1d11059e704faf72cd25e5679 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedFunctionFatalErrorHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedFunctionFatalErrorHandlerTest.php"));

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
use Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedFunctionFatalErrorHandler;

class UndefinedFunctionFatalErrorHandlerTest extends TestCase
{
    /**
     * @dataProvider provideUndefinedFunctionData
     */
    public function testUndefinedFunction(\$error, \$translatedMessage)
    {
        \$handler = new UndefinedFunctionFatalErrorHandler();
        \$exception = \$handler->handleError(\$error, new FatalErrorException('', 0, \$error['type'], \$error['file'], \$error['line']));

        \$this->assertInstanceOf('Symfony\\Component\\Debug\\Exception\\UndefinedFunctionException', \$exception);
        // class names are case insensitive and PHP do not return the same
        \$this->assertSame(strtolower(\$translatedMessage), strtolower(\$exception->getMessage()));
        \$this->assertSame(\$error['type'], \$exception->getSeverity());
        \$this->assertSame(\$error['file'], \$exception->getFile());
        \$this->assertSame(\$error['line'], \$exception->getLine());
    }

    public function provideUndefinedFunctionData()
    {
        return [
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined function test_namespaced_function()',
                ],
                \"Attempted to call function \\\"test_namespaced_function\\\" from the global namespace.\\nDid you mean to call \\\"\\\\symfony\\\\component\\\\debug\\\\tests\\\\fatalerrorhandler\\\\test_namespaced_function\\\"?\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined function Foo\\\\Bar\\\\Baz\\\\test_namespaced_function()',
                ],
                \"Attempted to call function \\\"test_namespaced_function\\\" from namespace \\\"Foo\\\\Bar\\\\Baz\\\".\\nDid you mean to call \\\"\\\\symfony\\\\component\\\\debug\\\\tests\\\\fatalerrorhandler\\\\test_namespaced_function\\\"?\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined function foo()',
                ],
                'Attempted to call function \"foo\" from the global namespace.',
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined function Foo\\\\Bar\\\\Baz\\\\foo()',
                ],
                'Attempted to call function \"foo\" from namespace \"Foo\\Bar\\Baz\".',
            ],
        ];
    }
}

function test_namespaced_function()
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedFunctionFatalErrorHandlerTest.php";
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
use Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedFunctionFatalErrorHandler;

class UndefinedFunctionFatalErrorHandlerTest extends TestCase
{
    /**
     * @dataProvider provideUndefinedFunctionData
     */
    public function testUndefinedFunction(\$error, \$translatedMessage)
    {
        \$handler = new UndefinedFunctionFatalErrorHandler();
        \$exception = \$handler->handleError(\$error, new FatalErrorException('', 0, \$error['type'], \$error['file'], \$error['line']));

        \$this->assertInstanceOf('Symfony\\Component\\Debug\\Exception\\UndefinedFunctionException', \$exception);
        // class names are case insensitive and PHP do not return the same
        \$this->assertSame(strtolower(\$translatedMessage), strtolower(\$exception->getMessage()));
        \$this->assertSame(\$error['type'], \$exception->getSeverity());
        \$this->assertSame(\$error['file'], \$exception->getFile());
        \$this->assertSame(\$error['line'], \$exception->getLine());
    }

    public function provideUndefinedFunctionData()
    {
        return [
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined function test_namespaced_function()',
                ],
                \"Attempted to call function \\\"test_namespaced_function\\\" from the global namespace.\\nDid you mean to call \\\"\\\\symfony\\\\component\\\\debug\\\\tests\\\\fatalerrorhandler\\\\test_namespaced_function\\\"?\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined function Foo\\\\Bar\\\\Baz\\\\test_namespaced_function()',
                ],
                \"Attempted to call function \\\"test_namespaced_function\\\" from namespace \\\"Foo\\\\Bar\\\\Baz\\\".\\nDid you mean to call \\\"\\\\symfony\\\\component\\\\debug\\\\tests\\\\fatalerrorhandler\\\\test_namespaced_function\\\"?\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined function foo()',
                ],
                'Attempted to call function \"foo\" from the global namespace.',
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Call to undefined function Foo\\\\Bar\\\\Baz\\\\foo()',
                ],
                'Attempted to call function \"foo\" from namespace \"Foo\\Bar\\Baz\".',
            ],
        ];
    }
}

function test_namespaced_function()
{
}
", "vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedFunctionFatalErrorHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/FatalErrorHandler/UndefinedFunctionFatalErrorHandlerTest.php");
    }
}
