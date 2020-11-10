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

/* vendor/symfony/debug/Tests/FatalErrorHandler/ClassNotFoundFatalErrorHandlerTest.php */
class __TwigTemplate_f2ecfb5fcafacc2e287b21fe72893ce22e23d425fc021ffe6626382233af9281 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/FatalErrorHandler/ClassNotFoundFatalErrorHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/FatalErrorHandler/ClassNotFoundFatalErrorHandlerTest.php"));

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

use Composer\\Autoload\\ClassLoader as ComposerClassLoader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Debug\\DebugClassLoader;
use Symfony\\Component\\Debug\\Exception\\FatalErrorException;
use Symfony\\Component\\Debug\\FatalErrorHandler\\ClassNotFoundFatalErrorHandler;

class ClassNotFoundFatalErrorHandlerTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        foreach (spl_autoload_functions() as \$function) {
            if (!\\is_array(\$function)) {
                continue;
            }

            // get class loaders wrapped by DebugClassLoader
            if (\$function[0] instanceof DebugClassLoader) {
                \$function = \$function[0]->getClassLoader();
            }

            if (\$function[0] instanceof ComposerClassLoader) {
                \$function[0]->add('Symfony_Component_Debug_Tests_Fixtures', \\dirname(__DIR__, 5));
                break;
            }
        }
    }

    /**
     * @dataProvider provideClassNotFoundData
     */
    public function testHandleClassNotFound(\$error, \$translatedMessage, \$autoloader = null)
    {
        if (\$autoloader) {
            // Unregister all autoloaders to ensure the custom provided
            // autoloader is the only one to be used during the test run.
            \$autoloaders = spl_autoload_functions();
            array_map('spl_autoload_unregister', \$autoloaders);
            spl_autoload_register(\$autoloader);
        }

        \$handler = new ClassNotFoundFatalErrorHandler();

        \$exception = \$handler->handleError(\$error, new FatalErrorException('', 0, \$error['type'], \$error['file'], \$error['line']));

        if (\$autoloader) {
            spl_autoload_unregister(\$autoloader);
            array_map('spl_autoload_register', \$autoloaders);
        }

        \$this->assertInstanceOf('Symfony\\Component\\Debug\\Exception\\ClassNotFoundException', \$exception);
        \$this->assertRegExp(\$translatedMessage, \$exception->getMessage());
        \$this->assertSame(\$error['type'], \$exception->getSeverity());
        \$this->assertSame(\$error['file'], \$exception->getFile());
        \$this->assertSame(\$error['line'], \$exception->getLine());
    }

    public function provideClassNotFoundData()
    {
        \$autoloader = new ComposerClassLoader();
        \$autoloader->add('Symfony\\Component\\Debug\\Exception\\\\', realpath(__DIR__.'/../../Exception'));
        \$autoloader->add('Symfony_Component_Debug_Tests_Fixtures', realpath(__DIR__.'/../../Tests/Fixtures'));

        \$debugClassLoader = new DebugClassLoader([\$autoloader, 'loadClass']);

        return [
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'WhizBangFactory\\' not found',
                ],
                \"/^Attempted to load class \\\"WhizBangFactory\\\" from the global namespace.\\nDid you forget a \\\"use\\\" statement\\?\$/\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\WhizBangFactory\\' not found',
                ],
                \"/^Attempted to load class \\\"WhizBangFactory\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for another namespace\\?\$/\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from the global namespace.\\nDid you forget a \\\"use\\\" statement for .*\\\"Symfony\\\\\\\\Component\\\\\\\\Debug\\\\\\\\Exception\\\\\\\\UndefinedFunctionException\\\"\\?\$/\",
                [\$debugClassLoader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'PEARClass\\' not found',
                ],
                \"/^Attempted to load class \\\"PEARClass\\\" from the global namespace.\\nDid you forget a \\\"use\\\" statement for \\\"Symfony_Component_Debug_Tests_Fixtures_PEARClass\\\"\\?\$/\",
                [\$debugClassLoader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for .*\\\"Symfony\\\\\\\\Component\\\\\\\\Debug\\\\\\\\Exception\\\\\\\\UndefinedFunctionException\\\"\\?\$/\",
                [\$debugClassLoader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for \\\"Symfony\\\\\\\\Component\\\\\\\\Debug\\\\\\\\Exception\\\\\\\\UndefinedFunctionException\\\"\\?\$/\",
                [\$autoloader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for \\\"Symfony\\\\\\\\Component\\\\\\\\Debug\\\\\\\\Exception\\\\\\\\UndefinedFunctionException\\\"\\?/\",
                [\$debugClassLoader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for another namespace\\?\$/\",
                function (\$className) { /* do nothing here */ },
            ],
        ];
    }

    public function testCannotRedeclareClass()
    {
        if (!file_exists(__DIR__.'/../FIXTURES2/REQUIREDTWICE.PHP')) {
            \$this->markTestSkipped('Can only be run on case insensitive filesystems');
        }

        require_once __DIR__.'/../FIXTURES2/REQUIREDTWICE.PHP';

        \$error = [
            'type' => 1,
            'line' => 12,
            'file' => 'foo.php',
            'message' => 'Class \\'Foo\\\\Bar\\\\RequiredTwice\\' not found',
        ];

        \$handler = new ClassNotFoundFatalErrorHandler();
        \$exception = \$handler->handleError(\$error, new FatalErrorException('', 0, \$error['type'], \$error['file'], \$error['line']));

        \$this->assertInstanceOf('Symfony\\Component\\Debug\\Exception\\ClassNotFoundException', \$exception);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/FatalErrorHandler/ClassNotFoundFatalErrorHandlerTest.php";
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

use Composer\\Autoload\\ClassLoader as ComposerClassLoader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Debug\\DebugClassLoader;
use Symfony\\Component\\Debug\\Exception\\FatalErrorException;
use Symfony\\Component\\Debug\\FatalErrorHandler\\ClassNotFoundFatalErrorHandler;

class ClassNotFoundFatalErrorHandlerTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        foreach (spl_autoload_functions() as \$function) {
            if (!\\is_array(\$function)) {
                continue;
            }

            // get class loaders wrapped by DebugClassLoader
            if (\$function[0] instanceof DebugClassLoader) {
                \$function = \$function[0]->getClassLoader();
            }

            if (\$function[0] instanceof ComposerClassLoader) {
                \$function[0]->add('Symfony_Component_Debug_Tests_Fixtures', \\dirname(__DIR__, 5));
                break;
            }
        }
    }

    /**
     * @dataProvider provideClassNotFoundData
     */
    public function testHandleClassNotFound(\$error, \$translatedMessage, \$autoloader = null)
    {
        if (\$autoloader) {
            // Unregister all autoloaders to ensure the custom provided
            // autoloader is the only one to be used during the test run.
            \$autoloaders = spl_autoload_functions();
            array_map('spl_autoload_unregister', \$autoloaders);
            spl_autoload_register(\$autoloader);
        }

        \$handler = new ClassNotFoundFatalErrorHandler();

        \$exception = \$handler->handleError(\$error, new FatalErrorException('', 0, \$error['type'], \$error['file'], \$error['line']));

        if (\$autoloader) {
            spl_autoload_unregister(\$autoloader);
            array_map('spl_autoload_register', \$autoloaders);
        }

        \$this->assertInstanceOf('Symfony\\Component\\Debug\\Exception\\ClassNotFoundException', \$exception);
        \$this->assertRegExp(\$translatedMessage, \$exception->getMessage());
        \$this->assertSame(\$error['type'], \$exception->getSeverity());
        \$this->assertSame(\$error['file'], \$exception->getFile());
        \$this->assertSame(\$error['line'], \$exception->getLine());
    }

    public function provideClassNotFoundData()
    {
        \$autoloader = new ComposerClassLoader();
        \$autoloader->add('Symfony\\Component\\Debug\\Exception\\\\', realpath(__DIR__.'/../../Exception'));
        \$autoloader->add('Symfony_Component_Debug_Tests_Fixtures', realpath(__DIR__.'/../../Tests/Fixtures'));

        \$debugClassLoader = new DebugClassLoader([\$autoloader, 'loadClass']);

        return [
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'WhizBangFactory\\' not found',
                ],
                \"/^Attempted to load class \\\"WhizBangFactory\\\" from the global namespace.\\nDid you forget a \\\"use\\\" statement\\?\$/\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\WhizBangFactory\\' not found',
                ],
                \"/^Attempted to load class \\\"WhizBangFactory\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for another namespace\\?\$/\",
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from the global namespace.\\nDid you forget a \\\"use\\\" statement for .*\\\"Symfony\\\\\\\\Component\\\\\\\\Debug\\\\\\\\Exception\\\\\\\\UndefinedFunctionException\\\"\\?\$/\",
                [\$debugClassLoader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'PEARClass\\' not found',
                ],
                \"/^Attempted to load class \\\"PEARClass\\\" from the global namespace.\\nDid you forget a \\\"use\\\" statement for \\\"Symfony_Component_Debug_Tests_Fixtures_PEARClass\\\"\\?\$/\",
                [\$debugClassLoader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for .*\\\"Symfony\\\\\\\\Component\\\\\\\\Debug\\\\\\\\Exception\\\\\\\\UndefinedFunctionException\\\"\\?\$/\",
                [\$debugClassLoader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for \\\"Symfony\\\\\\\\Component\\\\\\\\Debug\\\\\\\\Exception\\\\\\\\UndefinedFunctionException\\\"\\?\$/\",
                [\$autoloader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for \\\"Symfony\\\\\\\\Component\\\\\\\\Debug\\\\\\\\Exception\\\\\\\\UndefinedFunctionException\\\"\\?/\",
                [\$debugClassLoader, 'loadClass'],
            ],
            [
                [
                    'type' => 1,
                    'line' => 12,
                    'file' => 'foo.php',
                    'message' => 'Class \\'Foo\\\\Bar\\\\UndefinedFunctionException\\' not found',
                ],
                \"/^Attempted to load class \\\"UndefinedFunctionException\\\" from namespace \\\"Foo\\\\\\\\Bar\\\".\\nDid you forget a \\\"use\\\" statement for another namespace\\?\$/\",
                function (\$className) { /* do nothing here */ },
            ],
        ];
    }

    public function testCannotRedeclareClass()
    {
        if (!file_exists(__DIR__.'/../FIXTURES2/REQUIREDTWICE.PHP')) {
            \$this->markTestSkipped('Can only be run on case insensitive filesystems');
        }

        require_once __DIR__.'/../FIXTURES2/REQUIREDTWICE.PHP';

        \$error = [
            'type' => 1,
            'line' => 12,
            'file' => 'foo.php',
            'message' => 'Class \\'Foo\\\\Bar\\\\RequiredTwice\\' not found',
        ];

        \$handler = new ClassNotFoundFatalErrorHandler();
        \$exception = \$handler->handleError(\$error, new FatalErrorException('', 0, \$error['type'], \$error['file'], \$error['line']));

        \$this->assertInstanceOf('Symfony\\Component\\Debug\\Exception\\ClassNotFoundException', \$exception);
    }
}
", "vendor/symfony/debug/Tests/FatalErrorHandler/ClassNotFoundFatalErrorHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/FatalErrorHandler/ClassNotFoundFatalErrorHandlerTest.php");
    }
}
