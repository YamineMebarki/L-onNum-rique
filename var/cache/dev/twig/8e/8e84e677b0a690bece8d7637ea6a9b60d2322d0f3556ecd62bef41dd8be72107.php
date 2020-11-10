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

/* vendor/symfony/doctrine-bridge/Tests/Logger/DbalLoggerTest.php */
class __TwigTemplate_60676910e25a7f1437b3553afe6fb645b51cdfc47d98b838265e89297fc44f4c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Logger/DbalLoggerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Logger/DbalLoggerTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Logger;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger;

class DbalLoggerTest extends TestCase
{
    /**
     * @dataProvider getLogFixtures
     */
    public function testLog(\$sql, \$params, \$logParams)
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with(\$sql, \$logParams)
        ;

        \$dbalLogger->startQuery(\$sql, \$params);
    }

    public function getLogFixtures()
    {
        return [
            ['SQL', null, []],
            ['SQL', [], []],
            ['SQL', ['foo' => 'bar'], ['foo' => 'bar']],
            ['SQL', ['foo' => \"\\x7F\\xFF\"], ['foo' => DbalLogger::BINARY_DATA_VALUE]],
            ['SQL', ['foo' => \"bar\\x7F\\xFF\"], ['foo' => DbalLogger::BINARY_DATA_VALUE]],
            ['SQL', ['foo' => ''], ['foo' => '']],
        ];
    }

    public function testLogNonUtf8()
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with('SQL', ['utf8' => 'foo', 'nonutf8' => DbalLogger::BINARY_DATA_VALUE])
        ;

        \$dbalLogger->startQuery('SQL', [
            'utf8' => 'foo',
            'nonutf8' => \"\\x7F\\xFF\",
        ]);
    }

    public function testLogNonUtf8Array()
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with('SQL', [
                    'utf8' => 'foo',
                    [
                        'nonutf8' => DbalLogger::BINARY_DATA_VALUE,
                    ],
                ]
            )
        ;

        \$dbalLogger->startQuery('SQL', [
            'utf8' => 'foo',
            [
                'nonutf8' => \"\\x7F\\xFF\",
            ],
        ]);
    }

    public function testLogLongString()
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$testString = 'abc';

        \$shortString = str_pad('', DbalLogger::MAX_STRING_LENGTH, \$testString);
        \$longString = str_pad('', DbalLogger::MAX_STRING_LENGTH + 1, \$testString);

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with('SQL', ['short' => \$shortString, 'long' => substr(\$longString, 0, DbalLogger::MAX_STRING_LENGTH - 6).' [...]'])
        ;

        \$dbalLogger->startQuery('SQL', [
            'short' => \$shortString,
            'long' => \$longString,
        ]);
    }

    public function testLogUTF8LongString()
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$testStringArray = ['é', 'á', 'ű', 'ő', 'ú', 'ö', 'ü', 'ó', 'í'];
        \$testStringCount = \\count(\$testStringArray);

        \$shortString = '';
        \$longString = '';
        for (\$i = 1; \$i <= DbalLogger::MAX_STRING_LENGTH; ++\$i) {
            \$shortString .= \$testStringArray[\$i % \$testStringCount];
            \$longString .= \$testStringArray[\$i % \$testStringCount];
        }
        \$longString .= \$testStringArray[\$i % \$testStringCount];

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with('SQL', ['short' => \$shortString, 'long' => mb_substr(\$longString, 0, DbalLogger::MAX_STRING_LENGTH - 6, 'UTF-8').' [...]'])
        ;

        \$dbalLogger->startQuery('SQL', [
                'short' => \$shortString,
                'long' => \$longString,
            ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Logger/DbalLoggerTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Logger;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger;

class DbalLoggerTest extends TestCase
{
    /**
     * @dataProvider getLogFixtures
     */
    public function testLog(\$sql, \$params, \$logParams)
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with(\$sql, \$logParams)
        ;

        \$dbalLogger->startQuery(\$sql, \$params);
    }

    public function getLogFixtures()
    {
        return [
            ['SQL', null, []],
            ['SQL', [], []],
            ['SQL', ['foo' => 'bar'], ['foo' => 'bar']],
            ['SQL', ['foo' => \"\\x7F\\xFF\"], ['foo' => DbalLogger::BINARY_DATA_VALUE]],
            ['SQL', ['foo' => \"bar\\x7F\\xFF\"], ['foo' => DbalLogger::BINARY_DATA_VALUE]],
            ['SQL', ['foo' => ''], ['foo' => '']],
        ];
    }

    public function testLogNonUtf8()
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with('SQL', ['utf8' => 'foo', 'nonutf8' => DbalLogger::BINARY_DATA_VALUE])
        ;

        \$dbalLogger->startQuery('SQL', [
            'utf8' => 'foo',
            'nonutf8' => \"\\x7F\\xFF\",
        ]);
    }

    public function testLogNonUtf8Array()
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with('SQL', [
                    'utf8' => 'foo',
                    [
                        'nonutf8' => DbalLogger::BINARY_DATA_VALUE,
                    ],
                ]
            )
        ;

        \$dbalLogger->startQuery('SQL', [
            'utf8' => 'foo',
            [
                'nonutf8' => \"\\x7F\\xFF\",
            ],
        ]);
    }

    public function testLogLongString()
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$testString = 'abc';

        \$shortString = str_pad('', DbalLogger::MAX_STRING_LENGTH, \$testString);
        \$longString = str_pad('', DbalLogger::MAX_STRING_LENGTH + 1, \$testString);

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with('SQL', ['short' => \$shortString, 'long' => substr(\$longString, 0, DbalLogger::MAX_STRING_LENGTH - 6).' [...]'])
        ;

        \$dbalLogger->startQuery('SQL', [
            'short' => \$shortString,
            'long' => \$longString,
        ]);
    }

    public function testLogUTF8LongString()
    {
        \$logger = \$this->getMockBuilder('Psr\\\\Log\\\\LoggerInterface')->getMock();

        \$dbalLogger = \$this
            ->getMockBuilder('Symfony\\\\Bridge\\\\Doctrine\\\\Logger\\\\DbalLogger')
            ->setConstructorArgs([\$logger, null])
            ->setMethods(['log'])
            ->getMock()
        ;

        \$testStringArray = ['é', 'á', 'ű', 'ő', 'ú', 'ö', 'ü', 'ó', 'í'];
        \$testStringCount = \\count(\$testStringArray);

        \$shortString = '';
        \$longString = '';
        for (\$i = 1; \$i <= DbalLogger::MAX_STRING_LENGTH; ++\$i) {
            \$shortString .= \$testStringArray[\$i % \$testStringCount];
            \$longString .= \$testStringArray[\$i % \$testStringCount];
        }
        \$longString .= \$testStringArray[\$i % \$testStringCount];

        \$dbalLogger
            ->expects(\$this->once())
            ->method('log')
            ->with('SQL', ['short' => \$shortString, 'long' => mb_substr(\$longString, 0, DbalLogger::MAX_STRING_LENGTH - 6, 'UTF-8').' [...]'])
        ;

        \$dbalLogger->startQuery('SQL', [
                'short' => \$shortString,
                'long' => \$longString,
            ]);
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Logger/DbalLoggerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Logger/DbalLoggerTest.php");
    }
}
