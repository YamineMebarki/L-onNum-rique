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

/* vendor/symfony/var-dumper/Tests/Command/Descriptor/CliDescriptorTest.php */
class __TwigTemplate_9e5524b7e4e2dbe4b6a0a3ac225d862ef308c6acc7708917c71839d1fdd650a9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Command/Descriptor/CliDescriptorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Command/Descriptor/CliDescriptorTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Command\\Descriptor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

class CliDescriptorTest extends TestCase
{
    private static \$timezone;
    private static \$prevTerminalEmulator;

    public static function setUpBeforeClass(): void
    {
        self::\$timezone = date_default_timezone_get();
        date_default_timezone_set('UTC');

        self::\$prevTerminalEmulator = getenv('TERMINAL_EMULATOR');
        putenv('TERMINAL_EMULATOR');
    }

    public static function tearDownAfterClass(): void
    {
        date_default_timezone_set(self::\$timezone);
        putenv('TERMINAL_EMULATOR'.(self::\$prevTerminalEmulator ? '='.self::\$prevTerminalEmulator : ''));
    }

    /**
     * @dataProvider provideContext
     */
    public function testDescribe(array \$context, string \$expectedOutput, bool \$decorated = false)
    {
        \$output = new BufferedOutput();
        \$output->setDecorated(\$decorated);
        \$descriptor = new CliDescriptor(new CliDumper(function (\$s) {
            return \$s;
        }));

        \$descriptor->describe(\$output, new Data([[123]]), \$context + ['timestamp' => 1544804268.3668], 1);

        \$this->assertStringMatchesFormat(trim(\$expectedOutput), str_replace(PHP_EOL, \"\\n\", trim(\$output->fetch())));
    }

    public function provideContext()
    {
        yield 'source' => [
            [
                'source' => [
                    'name' => 'CliDescriptorTest.php',
                    'line' => 30,
                    'file' => '/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php',
                ],
            ],
            <<<TXT
Received from client #1
-----------------------

 -------- --------------------------------------------------------------------------------------------------- 
  date     Fri, 14 Dec 2018 16:17:48 +0000                                                                    
  source   CliDescriptorTest.php on line 30                                                                   
  file     /Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php  
 -------- ---------------------------------------------------------------------------------------------------
TXT
        ];

        yield 'source full' => [
            [
                'source' => [
                    'name' => 'CliDescriptorTest.php',
                    'line' => 30,
                    'file_relative' => 'src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php',
                    'file' => '/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php',
                    'file_link' => 'phpstorm://open?file=/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php&line=30',
                ],
            ],
            method_exists(OutputFormatterStyle::class, 'setHref') ?
                <<<TXT
Received from client #1
-----------------------

 -------- -------------------------------------------------------------------------------- 
  date     Fri, 14 Dec 2018 16:17:48 +0000                                                 
  source   CliDescriptorTest.php on line 30                                                
  file     src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php  
 -------- -------------------------------------------------------------------------------- 

TXT
                :
                <<<TXT
Received from client #1
-----------------------

 -------- -------------------------------------------------------------------------------- 
  date     Fri, 14 Dec 2018 16:17:48 +0000                                                 
  source   CliDescriptorTest.php on line 30                                                
  file     src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php  
 -------- -------------------------------------------------------------------------------- 

Open source in your IDE/browser:
phpstorm://open?file=/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php&line=30
TXT
        ];

        if (method_exists(OutputFormatterStyle::class, 'setHref')) {
            yield 'source with hyperlink' => [
                [
                    'source' => [
                        'name' => 'CliDescriptorTest.php',
                        'line' => 30,
                        'file_relative' => 'src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php',
                        'file_link' => 'phpstorm://open?file=/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php&line=30',
                    ],
                ],
                <<<TXT
%A
  source   \\033]8;;phpstorm://open?file=/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php&line=30\\033\\CliDescriptorTest.php on line 30\\033]8;;\\033%A
%A
TXT
                , true,
            ];
        }

        yield 'cli' => [
            [
                'cli' => [
                    'identifier' => 'd8bece1c',
                    'command_line' => 'bin/phpunit',
                ],
            ],
            <<<TXT
\$ bin/phpunit
-------------

 ------ --------------------------------- 
  date   Fri, 14 Dec 2018 16:17:48 +0000  
 ------ ---------------------------------
TXT
        ];

        yield 'request' => [
            [
                'request' => [
                    'identifier' => 'd8bece1c',
                    'controller' => new Data([['FooController.php']]),
                    'method' => 'GET',
                    'uri' => 'http://localhost/foo',
                ],
            ],
            <<<TXT
GET http://localhost/foo
------------------------

 ------------ --------------------------------- 
  date         Fri, 14 Dec 2018 16:17:48 +0000  
  controller   \"FooController.php\"              
 ------------ --------------------------------- 
TXT
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Command/Descriptor/CliDescriptorTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Command\\Descriptor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

class CliDescriptorTest extends TestCase
{
    private static \$timezone;
    private static \$prevTerminalEmulator;

    public static function setUpBeforeClass(): void
    {
        self::\$timezone = date_default_timezone_get();
        date_default_timezone_set('UTC');

        self::\$prevTerminalEmulator = getenv('TERMINAL_EMULATOR');
        putenv('TERMINAL_EMULATOR');
    }

    public static function tearDownAfterClass(): void
    {
        date_default_timezone_set(self::\$timezone);
        putenv('TERMINAL_EMULATOR'.(self::\$prevTerminalEmulator ? '='.self::\$prevTerminalEmulator : ''));
    }

    /**
     * @dataProvider provideContext
     */
    public function testDescribe(array \$context, string \$expectedOutput, bool \$decorated = false)
    {
        \$output = new BufferedOutput();
        \$output->setDecorated(\$decorated);
        \$descriptor = new CliDescriptor(new CliDumper(function (\$s) {
            return \$s;
        }));

        \$descriptor->describe(\$output, new Data([[123]]), \$context + ['timestamp' => 1544804268.3668], 1);

        \$this->assertStringMatchesFormat(trim(\$expectedOutput), str_replace(PHP_EOL, \"\\n\", trim(\$output->fetch())));
    }

    public function provideContext()
    {
        yield 'source' => [
            [
                'source' => [
                    'name' => 'CliDescriptorTest.php',
                    'line' => 30,
                    'file' => '/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php',
                ],
            ],
            <<<TXT
Received from client #1
-----------------------

 -------- --------------------------------------------------------------------------------------------------- 
  date     Fri, 14 Dec 2018 16:17:48 +0000                                                                    
  source   CliDescriptorTest.php on line 30                                                                   
  file     /Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php  
 -------- ---------------------------------------------------------------------------------------------------
TXT
        ];

        yield 'source full' => [
            [
                'source' => [
                    'name' => 'CliDescriptorTest.php',
                    'line' => 30,
                    'file_relative' => 'src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php',
                    'file' => '/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php',
                    'file_link' => 'phpstorm://open?file=/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php&line=30',
                ],
            ],
            method_exists(OutputFormatterStyle::class, 'setHref') ?
                <<<TXT
Received from client #1
-----------------------

 -------- -------------------------------------------------------------------------------- 
  date     Fri, 14 Dec 2018 16:17:48 +0000                                                 
  source   CliDescriptorTest.php on line 30                                                
  file     src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php  
 -------- -------------------------------------------------------------------------------- 

TXT
                :
                <<<TXT
Received from client #1
-----------------------

 -------- -------------------------------------------------------------------------------- 
  date     Fri, 14 Dec 2018 16:17:48 +0000                                                 
  source   CliDescriptorTest.php on line 30                                                
  file     src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php  
 -------- -------------------------------------------------------------------------------- 

Open source in your IDE/browser:
phpstorm://open?file=/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php&line=30
TXT
        ];

        if (method_exists(OutputFormatterStyle::class, 'setHref')) {
            yield 'source with hyperlink' => [
                [
                    'source' => [
                        'name' => 'CliDescriptorTest.php',
                        'line' => 30,
                        'file_relative' => 'src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php',
                        'file_link' => 'phpstorm://open?file=/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php&line=30',
                    ],
                ],
                <<<TXT
%A
  source   \\033]8;;phpstorm://open?file=/Users/ogi/symfony/src/Symfony/Component/VarDumper/Tests/Command/Descriptor/CliDescriptorTest.php&line=30\\033\\CliDescriptorTest.php on line 30\\033]8;;\\033%A
%A
TXT
                , true,
            ];
        }

        yield 'cli' => [
            [
                'cli' => [
                    'identifier' => 'd8bece1c',
                    'command_line' => 'bin/phpunit',
                ],
            ],
            <<<TXT
\$ bin/phpunit
-------------

 ------ --------------------------------- 
  date   Fri, 14 Dec 2018 16:17:48 +0000  
 ------ ---------------------------------
TXT
        ];

        yield 'request' => [
            [
                'request' => [
                    'identifier' => 'd8bece1c',
                    'controller' => new Data([['FooController.php']]),
                    'method' => 'GET',
                    'uri' => 'http://localhost/foo',
                ],
            ],
            <<<TXT
GET http://localhost/foo
------------------------

 ------------ --------------------------------- 
  date         Fri, 14 Dec 2018 16:17:48 +0000  
  controller   \"FooController.php\"              
 ------------ --------------------------------- 
TXT
        ];
    }
}
", "vendor/symfony/var-dumper/Tests/Command/Descriptor/CliDescriptorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Command/Descriptor/CliDescriptorTest.php");
    }
}
