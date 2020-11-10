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

/* vendor/symfony/framework-bundle/Tests/Command/TranslationDebugCommandTest.php */
class __TwigTemplate_acac7d8806e8eae329de3e85796ead6c8b4d2c1c6878c29cb11603d7319afe25 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/TranslationDebugCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/TranslationDebugCommandTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel;

class TranslationDebugCommandTest extends TestCase
{
    private \$fs;
    private \$translationDir;

    public function testDebugMissingMessages()
    {
        \$tester = \$this->createCommandTester(['foo' => 'foo']);
        \$tester->execute(['locale' => 'en', 'bundle' => 'foo']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
    }

    public function testDebugUnusedMessages()
    {
        \$tester = \$this->createCommandTester([], ['foo' => 'foo']);
        \$tester->execute(['locale' => 'en', 'bundle' => 'foo']);

        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    public function testDebugFallbackMessages()
    {
        \$tester = \$this->createCommandTester([], ['foo' => 'foo']);
        \$tester->execute(['locale' => 'fr', 'bundle' => 'foo']);

        \$this->assertRegExp('/fallback/', \$tester->getDisplay());
    }

    public function testNoDefinedMessages()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['locale' => 'fr', 'bundle' => 'test']);

        \$this->assertRegExp('/No defined or extracted messages for locale \"fr\"/', \$tester->getDisplay());
    }

    public function testDebugDefaultDirectory()
    {
        \$tester = \$this->createCommandTester(['foo' => 'foo'], ['bar' => 'bar']);
        \$tester->execute(['locale' => 'en']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    /**
     * @group legacy
     * @expectedDeprecation Storing translations in the \"%ssf_translation%s/Resources/translations\" directory is deprecated since Symfony 4.2, use the \"%ssf_translation%s/translations\" directory instead.
     * @expectedDeprecation Loading Twig templates from the \"%ssf_translation%s/Resources/views\" directory is deprecated since Symfony 4.2, use the \"%ssf_translation%s/templates\" directory instead.
     */
    public function testDebugLegacyDefaultDirectory()
    {
        \$this->fs->mkdir(\$this->translationDir.'/Resources/translations');
        \$this->fs->mkdir(\$this->translationDir.'/Resources/views');

        \$tester = \$this->createCommandTester(['foo' => 'foo'], ['bar' => 'bar']);
        \$tester->execute(['locale' => 'en']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    public function testDebugDefaultRootDirectory()
    {
        \$this->fs->remove(\$this->translationDir);
        \$this->fs = new Filesystem();
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/translations');
        \$this->fs->mkdir(\$this->translationDir.'/templates');

        \$tester = \$this->createCommandTester(['foo' => 'foo'], ['bar' => 'bar'], null, [\$this->translationDir.'/trans'], [\$this->translationDir.'/views']);
        \$tester->execute(['locale' => 'en']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    public function testDebugCustomDirectory()
    {
        \$this->fs->mkdir(\$this->translationDir.'/customDir/translations');
        \$this->fs->mkdir(\$this->translationDir.'/customDir/templates');
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel->expects(\$this->once())
            ->method('getBundle')
            ->with(\$this->equalTo(\$this->translationDir.'/customDir'))
            ->willThrowException(new \\InvalidArgumentException());

        \$tester = \$this->createCommandTester(['foo' => 'foo'], ['bar' => 'bar'], \$kernel);
        \$tester->execute(['locale' => 'en', 'bundle' => \$this->translationDir.'/customDir']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    public function testDebugInvalidDirectory()
    {
        \$this->expectException('InvalidArgumentException');
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel->expects(\$this->once())
            ->method('getBundle')
            ->with(\$this->equalTo('dir'))
            ->willThrowException(new \\InvalidArgumentException());

        \$tester = \$this->createCommandTester([], [], \$kernel);
        \$tester->execute(['locale' => 'en', 'bundle' => 'dir']);
    }

    protected function setUp(): void
    {
        \$this->fs = new Filesystem();
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/translations');
        \$this->fs->mkdir(\$this->translationDir.'/templates');
    }

    protected function tearDown(): void
    {
        \$this->fs->remove(\$this->translationDir);
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester(\$extractedMessages = [], \$loadedMessages = [], \$kernel = null, array \$transPaths = [], array \$viewsPaths = [])
    {
        \$translator = \$this->getMockBuilder('Symfony\\Component\\Translation\\Translator')
            ->disableOriginalConstructor()
            ->getMock();

        \$translator
            ->expects(\$this->any())
            ->method('getFallbackLocales')
            ->willReturn(['en']);

        \$extractor = \$this->getMockBuilder('Symfony\\Component\\Translation\\Extractor\\ExtractorInterface')->getMock();
        \$extractor
            ->expects(\$this->any())
            ->method('extract')
            ->willReturnCallback(
                function (\$path, \$catalogue) use (\$extractedMessages) {
                    \$catalogue->add(\$extractedMessages);
                }
            );

        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Reader\\TranslationReader')->getMock();
        \$loader
            ->expects(\$this->any())
            ->method('read')
            ->willReturnCallback(
                function (\$path, \$catalogue) use (\$loadedMessages) {
                    \$catalogue->add(\$loadedMessages);
                }
            );

        if (null === \$kernel) {
            \$returnValues = [
                ['foo', \$this->getBundle(\$this->translationDir)],
                ['test', \$this->getBundle('test')],
            ];
            if (HttpKernel\\Kernel::VERSION_ID < 40000) {
                \$returnValues = [
                    ['foo', true, \$this->getBundle(\$this->translationDir)],
                    ['test', true, \$this->getBundle('test')],
                ];
            }
            \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
            \$kernel
                ->expects(\$this->any())
                ->method('getBundle')
                ->willReturnMap(\$returnValues);
        }

        \$kernel
            ->expects(\$this->any())
            ->method('getBundles')
            ->willReturn([]);

        \$container = new Container();
        \$container->setParameter('kernel.root_dir', \$this->translationDir);

        \$kernel
            ->expects(\$this->any())
            ->method('getContainer')
            ->willReturn(\$container);

        \$command = new TranslationDebugCommand(\$translator, \$loader, \$extractor, \$this->translationDir.'/translations', \$this->translationDir.'/templates', \$transPaths, \$viewsPaths);

        \$application = new Application(\$kernel);
        \$application->add(\$command);

        return new CommandTester(\$application->find('debug:translation'));
    }

    private function getBundle(\$path)
    {
        \$bundle = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface')->getMock();
        \$bundle
            ->expects(\$this->any())
            ->method('getPath')
            ->willReturn(\$path)
        ;

        return \$bundle;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Command/TranslationDebugCommandTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel;

class TranslationDebugCommandTest extends TestCase
{
    private \$fs;
    private \$translationDir;

    public function testDebugMissingMessages()
    {
        \$tester = \$this->createCommandTester(['foo' => 'foo']);
        \$tester->execute(['locale' => 'en', 'bundle' => 'foo']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
    }

    public function testDebugUnusedMessages()
    {
        \$tester = \$this->createCommandTester([], ['foo' => 'foo']);
        \$tester->execute(['locale' => 'en', 'bundle' => 'foo']);

        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    public function testDebugFallbackMessages()
    {
        \$tester = \$this->createCommandTester([], ['foo' => 'foo']);
        \$tester->execute(['locale' => 'fr', 'bundle' => 'foo']);

        \$this->assertRegExp('/fallback/', \$tester->getDisplay());
    }

    public function testNoDefinedMessages()
    {
        \$tester = \$this->createCommandTester();
        \$tester->execute(['locale' => 'fr', 'bundle' => 'test']);

        \$this->assertRegExp('/No defined or extracted messages for locale \"fr\"/', \$tester->getDisplay());
    }

    public function testDebugDefaultDirectory()
    {
        \$tester = \$this->createCommandTester(['foo' => 'foo'], ['bar' => 'bar']);
        \$tester->execute(['locale' => 'en']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    /**
     * @group legacy
     * @expectedDeprecation Storing translations in the \"%ssf_translation%s/Resources/translations\" directory is deprecated since Symfony 4.2, use the \"%ssf_translation%s/translations\" directory instead.
     * @expectedDeprecation Loading Twig templates from the \"%ssf_translation%s/Resources/views\" directory is deprecated since Symfony 4.2, use the \"%ssf_translation%s/templates\" directory instead.
     */
    public function testDebugLegacyDefaultDirectory()
    {
        \$this->fs->mkdir(\$this->translationDir.'/Resources/translations');
        \$this->fs->mkdir(\$this->translationDir.'/Resources/views');

        \$tester = \$this->createCommandTester(['foo' => 'foo'], ['bar' => 'bar']);
        \$tester->execute(['locale' => 'en']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    public function testDebugDefaultRootDirectory()
    {
        \$this->fs->remove(\$this->translationDir);
        \$this->fs = new Filesystem();
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/translations');
        \$this->fs->mkdir(\$this->translationDir.'/templates');

        \$tester = \$this->createCommandTester(['foo' => 'foo'], ['bar' => 'bar'], null, [\$this->translationDir.'/trans'], [\$this->translationDir.'/views']);
        \$tester->execute(['locale' => 'en']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    public function testDebugCustomDirectory()
    {
        \$this->fs->mkdir(\$this->translationDir.'/customDir/translations');
        \$this->fs->mkdir(\$this->translationDir.'/customDir/templates');
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel->expects(\$this->once())
            ->method('getBundle')
            ->with(\$this->equalTo(\$this->translationDir.'/customDir'))
            ->willThrowException(new \\InvalidArgumentException());

        \$tester = \$this->createCommandTester(['foo' => 'foo'], ['bar' => 'bar'], \$kernel);
        \$tester->execute(['locale' => 'en', 'bundle' => \$this->translationDir.'/customDir']);

        \$this->assertRegExp('/missing/', \$tester->getDisplay());
        \$this->assertRegExp('/unused/', \$tester->getDisplay());
    }

    public function testDebugInvalidDirectory()
    {
        \$this->expectException('InvalidArgumentException');
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel->expects(\$this->once())
            ->method('getBundle')
            ->with(\$this->equalTo('dir'))
            ->willThrowException(new \\InvalidArgumentException());

        \$tester = \$this->createCommandTester([], [], \$kernel);
        \$tester->execute(['locale' => 'en', 'bundle' => 'dir']);
    }

    protected function setUp(): void
    {
        \$this->fs = new Filesystem();
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/translations');
        \$this->fs->mkdir(\$this->translationDir.'/templates');
    }

    protected function tearDown(): void
    {
        \$this->fs->remove(\$this->translationDir);
    }

    /**
     * @return CommandTester
     */
    private function createCommandTester(\$extractedMessages = [], \$loadedMessages = [], \$kernel = null, array \$transPaths = [], array \$viewsPaths = [])
    {
        \$translator = \$this->getMockBuilder('Symfony\\Component\\Translation\\Translator')
            ->disableOriginalConstructor()
            ->getMock();

        \$translator
            ->expects(\$this->any())
            ->method('getFallbackLocales')
            ->willReturn(['en']);

        \$extractor = \$this->getMockBuilder('Symfony\\Component\\Translation\\Extractor\\ExtractorInterface')->getMock();
        \$extractor
            ->expects(\$this->any())
            ->method('extract')
            ->willReturnCallback(
                function (\$path, \$catalogue) use (\$extractedMessages) {
                    \$catalogue->add(\$extractedMessages);
                }
            );

        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Reader\\TranslationReader')->getMock();
        \$loader
            ->expects(\$this->any())
            ->method('read')
            ->willReturnCallback(
                function (\$path, \$catalogue) use (\$loadedMessages) {
                    \$catalogue->add(\$loadedMessages);
                }
            );

        if (null === \$kernel) {
            \$returnValues = [
                ['foo', \$this->getBundle(\$this->translationDir)],
                ['test', \$this->getBundle('test')],
            ];
            if (HttpKernel\\Kernel::VERSION_ID < 40000) {
                \$returnValues = [
                    ['foo', true, \$this->getBundle(\$this->translationDir)],
                    ['test', true, \$this->getBundle('test')],
                ];
            }
            \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
            \$kernel
                ->expects(\$this->any())
                ->method('getBundle')
                ->willReturnMap(\$returnValues);
        }

        \$kernel
            ->expects(\$this->any())
            ->method('getBundles')
            ->willReturn([]);

        \$container = new Container();
        \$container->setParameter('kernel.root_dir', \$this->translationDir);

        \$kernel
            ->expects(\$this->any())
            ->method('getContainer')
            ->willReturn(\$container);

        \$command = new TranslationDebugCommand(\$translator, \$loader, \$extractor, \$this->translationDir.'/translations', \$this->translationDir.'/templates', \$transPaths, \$viewsPaths);

        \$application = new Application(\$kernel);
        \$application->add(\$command);

        return new CommandTester(\$application->find('debug:translation'));
    }

    private function getBundle(\$path)
    {
        \$bundle = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface')->getMock();
        \$bundle
            ->expects(\$this->any())
            ->method('getPath')
            ->willReturn(\$path)
        ;

        return \$bundle;
    }
}
", "vendor/symfony/framework-bundle/Tests/Command/TranslationDebugCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Command/TranslationDebugCommandTest.php");
    }
}