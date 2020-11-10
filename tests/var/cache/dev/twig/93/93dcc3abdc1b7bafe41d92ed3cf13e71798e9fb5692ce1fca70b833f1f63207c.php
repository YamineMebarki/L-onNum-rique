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

/* vendor/symfony/framework-bundle/Tests/Command/TranslationUpdateCommandTest.php */
class __TwigTemplate_5d4f8ea4590a793f1e7d94cc816395b932434a465472284a76f12a671403ac8f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/TranslationUpdateCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Command/TranslationUpdateCommandTest.php"));

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
use Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel;

class TranslationUpdateCommandTest extends TestCase
{
    private \$fs;
    private \$translationDir;

    public function testDumpMessagesAndClean()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--dump-messages' => true, '--clean' => true]);
        \$this->assertRegExp('/foo/', \$tester->getDisplay());
        \$this->assertRegExp('/1 message was successfully extracted/', \$tester->getDisplay());
    }

    public function testDumpMessagesAndCleanInRootDirectory()
    {
        \$this->fs->remove(\$this->translationDir);
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/translations');
        \$this->fs->mkdir(\$this->translationDir.'/templates');

        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']], [], null, [\$this->translationDir.'/trans'], [\$this->translationDir.'/views']);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', '--dump-messages' => true, '--clean' => true]);
        \$this->assertRegExp('/foo/', \$tester->getDisplay());
        \$this->assertRegExp('/1 message was successfully extracted/', \$tester->getDisplay());
    }

    public function testDumpTwoMessagesAndClean()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo', 'bar' => 'bar']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--dump-messages' => true, '--clean' => true]);
        \$this->assertRegExp('/foo/', \$tester->getDisplay());
        \$this->assertRegExp('/bar/', \$tester->getDisplay());
        \$this->assertRegExp('/2 messages were successfully extracted/', \$tester->getDisplay());
    }

    public function testDumpMessagesForSpecificDomain()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo'], 'mydomain' => ['bar' => 'bar']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--dump-messages' => true, '--clean' => true, '--domain' => 'mydomain']);
        \$this->assertRegExp('/bar/', \$tester->getDisplay());
        \$this->assertRegExp('/1 message was successfully extracted/', \$tester->getDisplay());
    }

    public function testWriteMessages()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--force' => true]);
        \$this->assertRegExp('/Translation files were successfully updated./', \$tester->getDisplay());
    }

    public function testWriteMessagesInRootDirectory()
    {
        \$this->fs->remove(\$this->translationDir);
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/translations');
        \$this->fs->mkdir(\$this->translationDir.'/templates');

        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', '--force' => true]);
        \$this->assertRegExp('/Translation files were successfully updated./', \$tester->getDisplay());
    }

    /**
     * @group legacy
     * @expectedDeprecation Storing translations in the \"%ssf_translation%s/Resources/translations\" directory is deprecated since Symfony 4.2, use the \"%ssf_translation%s/translations\" directory instead.
     * @expectedDeprecation Storing templates in the \"%ssf_translation%s/Resources/views\" directory is deprecated since Symfony 4.2, use the \"%ssf_translation%s/templates\" directory instead.
     */
    public function testWriteMessagesInLegacyRootDirectory()
    {
        \$this->fs->remove(\$this->translationDir);
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/Resources/translations');
        \$this->fs->mkdir(\$this->translationDir.'/Resources/views');

        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', '--force' => true]);
        \$this->assertRegExp('/Translation files were successfully updated./', \$tester->getDisplay());
    }

    public function testWriteMessagesForSpecificDomain()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo'], 'mydomain' => ['bar' => 'bar']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--force' => true, '--domain' => 'mydomain']);
        \$this->assertRegExp('/Translation files were successfully updated./', \$tester->getDisplay());
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
    private function createCommandTester(\$extractedMessages = [], \$loadedMessages = [], HttpKernel\\KernelInterface \$kernel = null, array \$transPaths = [], array \$viewsPaths = [])
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
                    foreach (\$extractedMessages as \$domain => \$messages) {
                        \$catalogue->add(\$messages, \$domain);
                    }
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

        \$writer = \$this->getMockBuilder('Symfony\\Component\\Translation\\Writer\\TranslationWriter')->getMock();
        \$writer
            ->expects(\$this->any())
            ->method('getFormats')
            ->willReturn(
                ['xlf', 'yml', 'yaml']
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
            ->method('getRootDir')
            ->willReturn(\$this->translationDir);

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

        \$command = new TranslationUpdateCommand(\$writer, \$loader, \$extractor, 'en', \$this->translationDir.'/translations', \$this->translationDir.'/templates', \$transPaths, \$viewsPaths);

        \$application = new Application(\$kernel);
        \$application->add(\$command);

        return new CommandTester(\$application->find('translation:update'));
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
        return "vendor/symfony/framework-bundle/Tests/Command/TranslationUpdateCommandTest.php";
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
use Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel;

class TranslationUpdateCommandTest extends TestCase
{
    private \$fs;
    private \$translationDir;

    public function testDumpMessagesAndClean()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--dump-messages' => true, '--clean' => true]);
        \$this->assertRegExp('/foo/', \$tester->getDisplay());
        \$this->assertRegExp('/1 message was successfully extracted/', \$tester->getDisplay());
    }

    public function testDumpMessagesAndCleanInRootDirectory()
    {
        \$this->fs->remove(\$this->translationDir);
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/translations');
        \$this->fs->mkdir(\$this->translationDir.'/templates');

        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']], [], null, [\$this->translationDir.'/trans'], [\$this->translationDir.'/views']);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', '--dump-messages' => true, '--clean' => true]);
        \$this->assertRegExp('/foo/', \$tester->getDisplay());
        \$this->assertRegExp('/1 message was successfully extracted/', \$tester->getDisplay());
    }

    public function testDumpTwoMessagesAndClean()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo', 'bar' => 'bar']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--dump-messages' => true, '--clean' => true]);
        \$this->assertRegExp('/foo/', \$tester->getDisplay());
        \$this->assertRegExp('/bar/', \$tester->getDisplay());
        \$this->assertRegExp('/2 messages were successfully extracted/', \$tester->getDisplay());
    }

    public function testDumpMessagesForSpecificDomain()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo'], 'mydomain' => ['bar' => 'bar']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--dump-messages' => true, '--clean' => true, '--domain' => 'mydomain']);
        \$this->assertRegExp('/bar/', \$tester->getDisplay());
        \$this->assertRegExp('/1 message was successfully extracted/', \$tester->getDisplay());
    }

    public function testWriteMessages()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--force' => true]);
        \$this->assertRegExp('/Translation files were successfully updated./', \$tester->getDisplay());
    }

    public function testWriteMessagesInRootDirectory()
    {
        \$this->fs->remove(\$this->translationDir);
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/translations');
        \$this->fs->mkdir(\$this->translationDir.'/templates');

        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', '--force' => true]);
        \$this->assertRegExp('/Translation files were successfully updated./', \$tester->getDisplay());
    }

    /**
     * @group legacy
     * @expectedDeprecation Storing translations in the \"%ssf_translation%s/Resources/translations\" directory is deprecated since Symfony 4.2, use the \"%ssf_translation%s/translations\" directory instead.
     * @expectedDeprecation Storing templates in the \"%ssf_translation%s/Resources/views\" directory is deprecated since Symfony 4.2, use the \"%ssf_translation%s/templates\" directory instead.
     */
    public function testWriteMessagesInLegacyRootDirectory()
    {
        \$this->fs->remove(\$this->translationDir);
        \$this->translationDir = sys_get_temp_dir().'/'.uniqid('sf_translation', true);
        \$this->fs->mkdir(\$this->translationDir.'/Resources/translations');
        \$this->fs->mkdir(\$this->translationDir.'/Resources/views');

        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', '--force' => true]);
        \$this->assertRegExp('/Translation files were successfully updated./', \$tester->getDisplay());
    }

    public function testWriteMessagesForSpecificDomain()
    {
        \$tester = \$this->createCommandTester(['messages' => ['foo' => 'foo'], 'mydomain' => ['bar' => 'bar']]);
        \$tester->execute(['command' => 'translation:update', 'locale' => 'en', 'bundle' => 'foo', '--force' => true, '--domain' => 'mydomain']);
        \$this->assertRegExp('/Translation files were successfully updated./', \$tester->getDisplay());
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
    private function createCommandTester(\$extractedMessages = [], \$loadedMessages = [], HttpKernel\\KernelInterface \$kernel = null, array \$transPaths = [], array \$viewsPaths = [])
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
                    foreach (\$extractedMessages as \$domain => \$messages) {
                        \$catalogue->add(\$messages, \$domain);
                    }
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

        \$writer = \$this->getMockBuilder('Symfony\\Component\\Translation\\Writer\\TranslationWriter')->getMock();
        \$writer
            ->expects(\$this->any())
            ->method('getFormats')
            ->willReturn(
                ['xlf', 'yml', 'yaml']
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
            ->method('getRootDir')
            ->willReturn(\$this->translationDir);

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

        \$command = new TranslationUpdateCommand(\$writer, \$loader, \$extractor, 'en', \$this->translationDir.'/translations', \$this->translationDir.'/templates', \$transPaths, \$viewsPaths);

        \$application = new Application(\$kernel);
        \$application->add(\$command);

        return new CommandTester(\$application->find('translation:update'));
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
", "vendor/symfony/framework-bundle/Tests/Command/TranslationUpdateCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Command/TranslationUpdateCommandTest.php");
    }
}
