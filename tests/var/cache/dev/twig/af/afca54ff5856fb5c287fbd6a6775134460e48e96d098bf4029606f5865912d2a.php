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

/* vendor/symfony/monolog-bridge/Tests/Formatter/ConsoleFormatterTest.php */
class __TwigTemplate_81ce4e464673860c2a434df6f943401910ceeecae9e646b1336b661a949bd604 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Formatter/ConsoleFormatterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Formatter/ConsoleFormatterTest.php"));

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

namespace Symfony\\Bridge\\Monolog\\Tests\\Formatter;

use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Formatter\\ConsoleFormatter;

class ConsoleFormatterTest extends TestCase
{
    /**
     * @dataProvider providerFormatTests
     */
    public function testFormat(array \$record, \$expectedMessage)
    {
        \$formatter = new ConsoleFormatter();
        self::assertSame(\$expectedMessage, \$formatter->format(\$record));
    }

    /**
     * @return array
     */
    public function providerFormatTests()
    {
        \$currentDateTime = new \\DateTime();

        return [
            'record with DateTime object in datetime field' => [
                'record' => [
                    'message' => 'test',
                    'context' => [],
                    'level' => Logger::WARNING,
                    'level_name' => Logger::getLevelName(Logger::WARNING),
                    'channel' => 'test',
                    'datetime' => \$currentDateTime,
                    'extra' => [],
                ],
                'expectedMessage' => sprintf(
                    \"%s <fg=cyan>WARNING  </> <comment>[test]</> test\\n\",
                    \$currentDateTime->format(ConsoleFormatter::SIMPLE_DATE)
                ),
            ],
            'record with string in datetime field' => [
                'record' => [
                    'message' => 'test',
                    'context' => [],
                    'level' => Logger::WARNING,
                    'level_name' => Logger::getLevelName(Logger::WARNING),
                    'channel' => 'test',
                    'datetime' => '2019-01-01T00:42:00+00:00',
                    'extra' => [],
                ],
                'expectedMessage' => \"2019-01-01T00:42:00+00:00 <fg=cyan>WARNING  </> <comment>[test]</> test\\n\",
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
        return "vendor/symfony/monolog-bridge/Tests/Formatter/ConsoleFormatterTest.php";
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

namespace Symfony\\Bridge\\Monolog\\Tests\\Formatter;

use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Formatter\\ConsoleFormatter;

class ConsoleFormatterTest extends TestCase
{
    /**
     * @dataProvider providerFormatTests
     */
    public function testFormat(array \$record, \$expectedMessage)
    {
        \$formatter = new ConsoleFormatter();
        self::assertSame(\$expectedMessage, \$formatter->format(\$record));
    }

    /**
     * @return array
     */
    public function providerFormatTests()
    {
        \$currentDateTime = new \\DateTime();

        return [
            'record with DateTime object in datetime field' => [
                'record' => [
                    'message' => 'test',
                    'context' => [],
                    'level' => Logger::WARNING,
                    'level_name' => Logger::getLevelName(Logger::WARNING),
                    'channel' => 'test',
                    'datetime' => \$currentDateTime,
                    'extra' => [],
                ],
                'expectedMessage' => sprintf(
                    \"%s <fg=cyan>WARNING  </> <comment>[test]</> test\\n\",
                    \$currentDateTime->format(ConsoleFormatter::SIMPLE_DATE)
                ),
            ],
            'record with string in datetime field' => [
                'record' => [
                    'message' => 'test',
                    'context' => [],
                    'level' => Logger::WARNING,
                    'level_name' => Logger::getLevelName(Logger::WARNING),
                    'channel' => 'test',
                    'datetime' => '2019-01-01T00:42:00+00:00',
                    'extra' => [],
                ],
                'expectedMessage' => \"2019-01-01T00:42:00+00:00 <fg=cyan>WARNING  </> <comment>[test]</> test\\n\",
            ],
        ];
    }
}
", "vendor/symfony/monolog-bridge/Tests/Formatter/ConsoleFormatterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Tests/Formatter/ConsoleFormatterTest.php");
    }
}
