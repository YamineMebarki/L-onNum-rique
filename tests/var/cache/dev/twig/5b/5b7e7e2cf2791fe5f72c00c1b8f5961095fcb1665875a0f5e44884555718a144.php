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

/* vendor/symfony/twig-bridge/Tests/Command/DebugCommandTest.php */
class __TwigTemplate_5b0c0decf134f079ff648c5d1eaeda5dd4fd95b19c988a0e5554a5402184faa2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Command/DebugCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Command/DebugCommandTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Command\\DebugCommand;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Twig\\Environment;
use Twig\\Loader\\ChainLoader;
use Twig\\Loader\\FilesystemLoader;

class DebugCommandTest extends TestCase
{
    public function testDebugCommand()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute([], ['decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('Functions', trim(\$tester->getDisplay()));
    }

    public function testFilterAndJsonFormatOptions()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['--filter' => 'abs', '--format' => 'json'], ['decorated' => false]);

        \$expected = [
            'filters' => ['abs' => []],
        ];

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertEquals(\$expected, json_decode(\$tester->getDisplay(true), true));
    }

    public function testWarningsWrongBundleOverriding()
    {
        \$bundleMetadata = [
            'TwigBundle' => 'vendor/twig-bundle/',
            'WebProfilerBundle' => 'vendor/web-profiler-bundle/',
        ];
        \$defaultPath = \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'Fixtures'.\\DIRECTORY_SEPARATOR.'templates';

        \$tester = \$this->createCommandTester([], \$bundleMetadata, \$defaultPath);
        \$ret = \$tester->execute(['--filter' => 'unknown', '--format' => 'json'], ['decorated' => false]);

        \$expected = ['warnings' => [
            'Path \"templates/bundles/UnknownBundle\" not matching any bundle found',
            'Path \"templates/bundles/WebProfileBundle\" not matching any bundle found, did you mean \"WebProfilerBundle\"?',
        ]];

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertEquals(\$expected, json_decode(\$tester->getDisplay(true), true));
    }

    /**
     * @group legacy
     * @expectedDeprecation Loading Twig templates from the \"%sResources/BarBundle/views\" directory is deprecated since Symfony 4.2, use \"%stemplates/bundles/BarBundle\" instead.
     */
    public function testDeprecationForWrongBundleOverridingInLegacyPath()
    {
        \$bundleMetadata = [
            'TwigBundle' => 'vendor/twig-bundle/',
            'WebProfilerBundle' => 'vendor/web-profiler-bundle/',
        ];
        \$defaultPath = \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'Fixtures'.\\DIRECTORY_SEPARATOR.'templates';
        \$rootDir = \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'Fixtures';

        \$tester = \$this->createCommandTester([], \$bundleMetadata, \$defaultPath, \$rootDir);
        \$ret = \$tester->execute(['--filter' => 'unknown', '--format' => 'json'], ['decorated' => false]);

        \$expected = ['warnings' => [
            'Path \"Resources/BarBundle\" not matching any bundle found',
            'Path \"templates/bundles/UnknownBundle\" not matching any bundle found',
            'Path \"templates/bundles/WebProfileBundle\" not matching any bundle found, did you mean \"WebProfilerBundle\"?',
        ]];

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertEquals(\$expected, json_decode(\$tester->getDisplay(true), true));
    }

    public function testMalformedTemplateName()
    {
        \$this->expectException('Symfony\\Component\\Console\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Malformed namespaced template name \"@foo\" (expecting \"@namespace/template_name\").');
        \$this->createCommandTester()->execute(['name' => '@foo']);
    }

    /**
     * @dataProvider getDebugTemplateNameTestData
     */
    public function testDebugTemplateName(array \$input, string \$output, array \$paths)
    {
        \$tester = \$this->createCommandTester(\$paths);
        \$ret = \$tester->execute(\$input, ['decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringMatchesFormat(\$output, \$tester->getDisplay(true));
    }

    public function getDebugTemplateNameTestData()
    {
        \$defaultPaths = [
            'templates/' => null,
            'templates/bundles/TwigBundle/' => 'Twig',
            'vendors/twig-bundle/Resources/views/' => 'Twig',
        ];

        yield 'no template paths configured for your application' => [
            'input' => ['name' => 'base.html.twig'],
            'output' => <<<TXT

Matched File
------------

 Template name \"base.html.twig\" not found%A

Configured Paths
----------------

 No template paths configured for your application%s

 ----------- -------------------------------------%A
  Namespace   Paths%A
 ----------- -------------------------------------%A
  @Twig       vendors/twig-bundle/Resources/views%e%A
 ----------- -------------------------------------%A


TXT
            ,
            'paths' => ['vendors/twig-bundle/Resources/views/' => 'Twig'],
        ];

        yield 'no matched template' => [
            'input' => ['name' => '@App/foo.html.twig'],
            'output' => <<<TXT

Matched File
------------

 Template name \"@App/foo.html.twig\" not found%A

Configured Paths
----------------

 No template paths configured for \"@App\" namespace%A

 ----------- -------------------------------------%A
  Namespace   Paths%A
 ----------- -------------------------------------%A
  (None)      templates%e%A
  %A
  @Twig       templates/bundles/TwigBundle%e%A
              vendors/twig-bundle/Resources/views%e%A 
 ----------- -------------------------------------%A


TXT
            ,
            'paths' => \$defaultPaths,
        ];

        yield 'matched file' => [
            'input' => ['name' => 'base.html.twig'],
            'output' => <<<TXT

Matched File
------------

 [OK] templates%ebase.html.twig%A

Configured Paths
----------------

 ----------- ------------%A
  Namespace   Paths%A
 ----------- ------------%A
  (None)      templates%e%A
 ----------- ------------%A


TXT
            ,
            'paths' => \$defaultPaths,
        ];

        yield 'overridden files' => [
            'input' => ['name' => '@Twig/error.html.twig'],
            'output' => <<<TXT

Matched File
------------

 [OK] templates%ebundles%eTwigBundle%eerror.html.twig%A

Overridden Files
----------------

 * vendors%etwig-bundle%eResources%eviews%eerror.html.twig

Configured Paths
----------------

 ----------- -------------------------------------- 
  Namespace   Paths%A
 ----------- -------------------------------------- 
  @Twig       templates/bundles/TwigBundle%e%A
              vendors/twig-bundle/Resources/views%e%A
 ----------- -------------------------------------- 


TXT
            ,
            'paths' => \$defaultPaths,
        ];

        yield 'template namespace alternative' => [
            'input' => ['name' => '@Twg/error.html.twig'],
            'output' => <<<TXT

Matched File
------------

 Template name \"@Twg/error.html.twig\" not found%A

Configured Paths
----------------

 No template paths configured for \"@Twg\" namespace%A
%A
%wDid you mean this?%A
%w@Twig%A


TXT
            ,
            'paths' => \$defaultPaths,
        ];

        yield 'template name alternative' => [
            'input' => ['name' => '@Twig/eror.html.twig'],
            'output' => <<<TXT

Matched File
------------

 Template name \"@Twig/eror.html.twig\" not found%A
%A
%wDid you mean one of these?%A
%w@Twig/base.html.twig%A
%w@Twig/error.html.twig%A

Configured Paths
----------------

 ----------- -------------------------------------- 
  Namespace   Paths                                 
 ----------- -------------------------------------- 
  @Twig       templates/bundles/TwigBundle%e%A
              vendors/twig-bundle/Resources/views%e%A
 ----------- -------------------------------------- 


TXT
            ,
            'paths' => \$defaultPaths,
        ];
    }

    public function testDebugTemplateNameWithChainLoader()
    {
        \$tester = \$this->createCommandTester(['templates/' => null], [], null, null, true);
        \$ret = \$tester->execute(['name' => 'base.html.twig'], ['decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('[OK]', \$tester->getDisplay());
    }

    public function testWithGlobals()
    {
        \$message = '<error>foo</error>';
        \$tester = \$this->createCommandTester([], [], null, null, false, ['message' => \$message]);
        \$tester->execute([], ['decorated' => true]);
        \$display = \$tester->getDisplay();
        \$this->assertStringContainsString(json_encode(\$message), \$display);
    }

    public function testWithGlobalsJson()
    {
        \$globals = ['message' => '<error>foo</error>'];
        \$tester = \$this->createCommandTester([], [], null, null, false, \$globals);
        \$tester->execute(['--format' => 'json'], ['decorated' => true]);
        \$display = \$tester->getDisplay();
        \$display = json_decode(\$display, true);
        \$this->assertSame(\$globals, \$display['globals']);
    }

    public function testWithFilter()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['--format' => 'json'], ['decorated' => false]);
        \$display = \$tester->getDisplay();
        \$display1 = json_decode(\$display, true);
        \$tester->execute(['--filter' => 'date', '--format' => 'json'], ['decorated' => false]);
        \$display = \$tester->getDisplay();
        \$display2 = json_decode(\$display, true);
        \$this->assertNotSame(\$display1, \$display2);
    }

    private function createCommandTester(array \$paths = [], array \$bundleMetadata = [], string \$defaultPath = null, string \$rootDir = null, bool \$useChainLoader = false, array \$globals = []): CommandTester
    {
        \$projectDir = \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'Fixtures';
        \$loader = new FilesystemLoader([], \$projectDir);
        foreach (\$paths as \$path => \$namespace) {
            if (null === \$namespace) {
                \$loader->addPath(\$path);
            } else {
                \$loader->addPath(\$path, \$namespace);
            }
        }

        if (\$useChainLoader) {
            \$loader = new ChainLoader([\$loader]);
        }

        \$environment = new Environment(\$loader);
        foreach (\$globals as \$name => \$value) {
            \$environment->addGlobal(\$name, \$value);
        }

        \$application = new Application();
        \$application->add(new DebugCommand(\$environment, \$projectDir, \$bundleMetadata, \$defaultPath, \$rootDir));
        \$command = \$application->find('debug:twig');

        return new CommandTester(\$command);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Command/DebugCommandTest.php";
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

namespace Symfony\\Bridge\\Twig\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Command\\DebugCommand;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Twig\\Environment;
use Twig\\Loader\\ChainLoader;
use Twig\\Loader\\FilesystemLoader;

class DebugCommandTest extends TestCase
{
    public function testDebugCommand()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute([], ['decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('Functions', trim(\$tester->getDisplay()));
    }

    public function testFilterAndJsonFormatOptions()
    {
        \$tester = \$this->createCommandTester();
        \$ret = \$tester->execute(['--filter' => 'abs', '--format' => 'json'], ['decorated' => false]);

        \$expected = [
            'filters' => ['abs' => []],
        ];

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertEquals(\$expected, json_decode(\$tester->getDisplay(true), true));
    }

    public function testWarningsWrongBundleOverriding()
    {
        \$bundleMetadata = [
            'TwigBundle' => 'vendor/twig-bundle/',
            'WebProfilerBundle' => 'vendor/web-profiler-bundle/',
        ];
        \$defaultPath = \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'Fixtures'.\\DIRECTORY_SEPARATOR.'templates';

        \$tester = \$this->createCommandTester([], \$bundleMetadata, \$defaultPath);
        \$ret = \$tester->execute(['--filter' => 'unknown', '--format' => 'json'], ['decorated' => false]);

        \$expected = ['warnings' => [
            'Path \"templates/bundles/UnknownBundle\" not matching any bundle found',
            'Path \"templates/bundles/WebProfileBundle\" not matching any bundle found, did you mean \"WebProfilerBundle\"?',
        ]];

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertEquals(\$expected, json_decode(\$tester->getDisplay(true), true));
    }

    /**
     * @group legacy
     * @expectedDeprecation Loading Twig templates from the \"%sResources/BarBundle/views\" directory is deprecated since Symfony 4.2, use \"%stemplates/bundles/BarBundle\" instead.
     */
    public function testDeprecationForWrongBundleOverridingInLegacyPath()
    {
        \$bundleMetadata = [
            'TwigBundle' => 'vendor/twig-bundle/',
            'WebProfilerBundle' => 'vendor/web-profiler-bundle/',
        ];
        \$defaultPath = \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'Fixtures'.\\DIRECTORY_SEPARATOR.'templates';
        \$rootDir = \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'Fixtures';

        \$tester = \$this->createCommandTester([], \$bundleMetadata, \$defaultPath, \$rootDir);
        \$ret = \$tester->execute(['--filter' => 'unknown', '--format' => 'json'], ['decorated' => false]);

        \$expected = ['warnings' => [
            'Path \"Resources/BarBundle\" not matching any bundle found',
            'Path \"templates/bundles/UnknownBundle\" not matching any bundle found',
            'Path \"templates/bundles/WebProfileBundle\" not matching any bundle found, did you mean \"WebProfilerBundle\"?',
        ]];

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertEquals(\$expected, json_decode(\$tester->getDisplay(true), true));
    }

    public function testMalformedTemplateName()
    {
        \$this->expectException('Symfony\\Component\\Console\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Malformed namespaced template name \"@foo\" (expecting \"@namespace/template_name\").');
        \$this->createCommandTester()->execute(['name' => '@foo']);
    }

    /**
     * @dataProvider getDebugTemplateNameTestData
     */
    public function testDebugTemplateName(array \$input, string \$output, array \$paths)
    {
        \$tester = \$this->createCommandTester(\$paths);
        \$ret = \$tester->execute(\$input, ['decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringMatchesFormat(\$output, \$tester->getDisplay(true));
    }

    public function getDebugTemplateNameTestData()
    {
        \$defaultPaths = [
            'templates/' => null,
            'templates/bundles/TwigBundle/' => 'Twig',
            'vendors/twig-bundle/Resources/views/' => 'Twig',
        ];

        yield 'no template paths configured for your application' => [
            'input' => ['name' => 'base.html.twig'],
            'output' => <<<TXT

Matched File
------------

 Template name \"base.html.twig\" not found%A

Configured Paths
----------------

 No template paths configured for your application%s

 ----------- -------------------------------------%A
  Namespace   Paths%A
 ----------- -------------------------------------%A
  @Twig       vendors/twig-bundle/Resources/views%e%A
 ----------- -------------------------------------%A


TXT
            ,
            'paths' => ['vendors/twig-bundle/Resources/views/' => 'Twig'],
        ];

        yield 'no matched template' => [
            'input' => ['name' => '@App/foo.html.twig'],
            'output' => <<<TXT

Matched File
------------

 Template name \"@App/foo.html.twig\" not found%A

Configured Paths
----------------

 No template paths configured for \"@App\" namespace%A

 ----------- -------------------------------------%A
  Namespace   Paths%A
 ----------- -------------------------------------%A
  (None)      templates%e%A
  %A
  @Twig       templates/bundles/TwigBundle%e%A
              vendors/twig-bundle/Resources/views%e%A 
 ----------- -------------------------------------%A


TXT
            ,
            'paths' => \$defaultPaths,
        ];

        yield 'matched file' => [
            'input' => ['name' => 'base.html.twig'],
            'output' => <<<TXT

Matched File
------------

 [OK] templates%ebase.html.twig%A

Configured Paths
----------------

 ----------- ------------%A
  Namespace   Paths%A
 ----------- ------------%A
  (None)      templates%e%A
 ----------- ------------%A


TXT
            ,
            'paths' => \$defaultPaths,
        ];

        yield 'overridden files' => [
            'input' => ['name' => '@Twig/error.html.twig'],
            'output' => <<<TXT

Matched File
------------

 [OK] templates%ebundles%eTwigBundle%eerror.html.twig%A

Overridden Files
----------------

 * vendors%etwig-bundle%eResources%eviews%eerror.html.twig

Configured Paths
----------------

 ----------- -------------------------------------- 
  Namespace   Paths%A
 ----------- -------------------------------------- 
  @Twig       templates/bundles/TwigBundle%e%A
              vendors/twig-bundle/Resources/views%e%A
 ----------- -------------------------------------- 


TXT
            ,
            'paths' => \$defaultPaths,
        ];

        yield 'template namespace alternative' => [
            'input' => ['name' => '@Twg/error.html.twig'],
            'output' => <<<TXT

Matched File
------------

 Template name \"@Twg/error.html.twig\" not found%A

Configured Paths
----------------

 No template paths configured for \"@Twg\" namespace%A
%A
%wDid you mean this?%A
%w@Twig%A


TXT
            ,
            'paths' => \$defaultPaths,
        ];

        yield 'template name alternative' => [
            'input' => ['name' => '@Twig/eror.html.twig'],
            'output' => <<<TXT

Matched File
------------

 Template name \"@Twig/eror.html.twig\" not found%A
%A
%wDid you mean one of these?%A
%w@Twig/base.html.twig%A
%w@Twig/error.html.twig%A

Configured Paths
----------------

 ----------- -------------------------------------- 
  Namespace   Paths                                 
 ----------- -------------------------------------- 
  @Twig       templates/bundles/TwigBundle%e%A
              vendors/twig-bundle/Resources/views%e%A
 ----------- -------------------------------------- 


TXT
            ,
            'paths' => \$defaultPaths,
        ];
    }

    public function testDebugTemplateNameWithChainLoader()
    {
        \$tester = \$this->createCommandTester(['templates/' => null], [], null, null, true);
        \$ret = \$tester->execute(['name' => 'base.html.twig'], ['decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertStringContainsString('[OK]', \$tester->getDisplay());
    }

    public function testWithGlobals()
    {
        \$message = '<error>foo</error>';
        \$tester = \$this->createCommandTester([], [], null, null, false, ['message' => \$message]);
        \$tester->execute([], ['decorated' => true]);
        \$display = \$tester->getDisplay();
        \$this->assertStringContainsString(json_encode(\$message), \$display);
    }

    public function testWithGlobalsJson()
    {
        \$globals = ['message' => '<error>foo</error>'];
        \$tester = \$this->createCommandTester([], [], null, null, false, \$globals);
        \$tester->execute(['--format' => 'json'], ['decorated' => true]);
        \$display = \$tester->getDisplay();
        \$display = json_decode(\$display, true);
        \$this->assertSame(\$globals, \$display['globals']);
    }

    public function testWithFilter()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['--format' => 'json'], ['decorated' => false]);
        \$display = \$tester->getDisplay();
        \$display1 = json_decode(\$display, true);
        \$tester->execute(['--filter' => 'date', '--format' => 'json'], ['decorated' => false]);
        \$display = \$tester->getDisplay();
        \$display2 = json_decode(\$display, true);
        \$this->assertNotSame(\$display1, \$display2);
    }

    private function createCommandTester(array \$paths = [], array \$bundleMetadata = [], string \$defaultPath = null, string \$rootDir = null, bool \$useChainLoader = false, array \$globals = []): CommandTester
    {
        \$projectDir = \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'Fixtures';
        \$loader = new FilesystemLoader([], \$projectDir);
        foreach (\$paths as \$path => \$namespace) {
            if (null === \$namespace) {
                \$loader->addPath(\$path);
            } else {
                \$loader->addPath(\$path, \$namespace);
            }
        }

        if (\$useChainLoader) {
            \$loader = new ChainLoader([\$loader]);
        }

        \$environment = new Environment(\$loader);
        foreach (\$globals as \$name => \$value) {
            \$environment->addGlobal(\$name, \$value);
        }

        \$application = new Application();
        \$application->add(new DebugCommand(\$environment, \$projectDir, \$bundleMetadata, \$defaultPath, \$rootDir));
        \$command = \$application->find('debug:twig');

        return new CommandTester(\$command);
    }
}
", "vendor/symfony/twig-bridge/Tests/Command/DebugCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Command/DebugCommandTest.php");
    }
}
