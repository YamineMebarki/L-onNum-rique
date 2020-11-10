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

/* vendor/symfony/framework-bundle/Tests/Translation/TranslatorTest.php */
class __TwigTemplate_d84822ee9e68883e99aae206994fb321bda23ac33173996255af06d83606bb71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Translation/TranslatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Translation/TranslatorTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Translation;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator;
use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Config\\Resource\\FileExistenceResource;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Translation\\Formatter\\MessageFormatter;
use Symfony\\Component\\Translation\\MessageCatalogue;

class TranslatorTest extends TestCase
{
    protected \$tmpDir;

    protected function setUp(): void
    {
        \$this->tmpDir = sys_get_temp_dir().'/sf_translation';
        \$this->deleteTmpDir();
    }

    protected function tearDown(): void
    {
        \$this->deleteTmpDir();
    }

    protected function deleteTmpDir()
    {
        if (!file_exists(\$dir = \$this->tmpDir)) {
            return;
        }

        \$fs = new Filesystem();
        \$fs->remove(\$dir);
    }

    public function testTransWithoutCaching()
    {
        \$translator = \$this->getTranslator(\$this->getLoader());
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('foo (FR)', \$translator->trans('foo'));
        \$this->assertEquals('bar (EN)', \$translator->trans('bar'));
        \$this->assertEquals('foobar (ES)', \$translator->trans('foobar'));
        \$this->assertEquals('choice 0 (EN)', \$translator->trans('choice', ['%count%' => 0]));
        \$this->assertEquals('no translation', \$translator->trans('no translation'));
        \$this->assertEquals('foobarfoo (PT-PT)', \$translator->trans('foobarfoo'));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->trans('other choice', ['%count%' => 1]));
        \$this->assertEquals('foobarbaz (fr.UTF-8)', \$translator->trans('foobarbaz'));
        \$this->assertEquals('foobarbax (sr@latin)', \$translator->trans('foobarbax'));
    }

    /**
     * @group legacy
     */
    public function testTransChoiceWithoutCaching()
    {
        \$translator = \$this->getTranslator(\$this->getLoader());
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('choice 0 (EN)', \$translator->transChoice('choice', 0));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->transChoice('other choice', 1));
    }

    public function testTransWithCaching()
    {
        // prime the cache
        \$translator = \$this->getTranslator(\$this->getLoader(), ['cache_dir' => \$this->tmpDir]);
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('foo (FR)', \$translator->trans('foo'));
        \$this->assertEquals('bar (EN)', \$translator->trans('bar'));
        \$this->assertEquals('foobar (ES)', \$translator->trans('foobar'));
        \$this->assertEquals('choice 0 (EN)', \$translator->trans('choice', ['%count%' => 0]));
        \$this->assertEquals('no translation', \$translator->trans('no translation'));
        \$this->assertEquals('foobarfoo (PT-PT)', \$translator->trans('foobarfoo'));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->trans('other choice', ['%count%' => 1]));
        \$this->assertEquals('foobarbaz (fr.UTF-8)', \$translator->trans('foobarbaz'));
        \$this->assertEquals('foobarbax (sr@latin)', \$translator->trans('foobarbax'));

        // do it another time as the cache is primed now
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$loader->expects(\$this->never())->method('load');

        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir]);
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('foo (FR)', \$translator->trans('foo'));
        \$this->assertEquals('bar (EN)', \$translator->trans('bar'));
        \$this->assertEquals('foobar (ES)', \$translator->trans('foobar'));
        \$this->assertEquals('no translation', \$translator->trans('no translation'));
        \$this->assertEquals('foobarfoo (PT-PT)', \$translator->trans('foobarfoo'));
        \$this->assertEquals('foobarbaz (fr.UTF-8)', \$translator->trans('foobarbaz'));
        \$this->assertEquals('foobarbax (sr@latin)', \$translator->trans('foobarbax'));
    }

    /**
     * @group legacy
     */
    public function testTransChoiceWithCaching()
    {
        // prime the cache
        \$translator = \$this->getTranslator(\$this->getLoader(), ['cache_dir' => \$this->tmpDir]);
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('choice 0 (EN)', \$translator->transChoice('choice', 0));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->transChoice('other choice', 1));

        // do it another time as the cache is primed now
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$loader->expects(\$this->never())->method('load');

        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir]);
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('choice 0 (EN)', \$translator->transChoice('choice', 0));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->transChoice('other choice', 1));
    }

    public function testTransWithCachingWithInvalidLocale()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid \"invalid locale\" locale.');
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir], 'loader', '\\Symfony\\Bundle\\FrameworkBundle\\Tests\\Translation\\TranslatorWithInvalidLocale');

        \$translator->trans('foo');
    }

    public function testLoadResourcesWithoutCaching()
    {
        \$loader = new \\Symfony\\Component\\Translation\\Loader\\YamlFileLoader();
        \$resourceFiles = [
            'fr' => [
                __DIR__.'/../Fixtures/Resources/translations/messages.fr.yml',
            ],
        ];

        \$translator = \$this->getTranslator(\$loader, ['resource_files' => \$resourceFiles], 'yml');
        \$translator->setLocale('fr');

        \$this->assertEquals('répertoire', \$translator->trans('folder'));
    }

    public function testGetDefaultLocale()
    {
        \$container = \$this->getMockBuilder(ContainerInterface::class)->getMock();
        \$translator = new Translator(\$container, new MessageFormatter(), 'en');

        \$this->assertSame('en', \$translator->getLocale());
    }

    public function testInvalidOptions()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The Translator does not support the following options: \\'foo\\'');
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();

        (new Translator(\$container, new MessageFormatter(), 'en', [], ['foo' => 'bar']));
    }

    /** @dataProvider getDebugModeAndCacheDirCombinations */
    public function testResourceFilesOptionLoadsBeforeOtherAddedResources(\$debug, \$enableCache)
    {
        \$someCatalogue = \$this->getCatalogue('some_locale', []);

        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();

        \$loader->expects(\$this->at(0))
            ->method('load')
            /* The \"messages.some_locale.loader\" is passed via the resource_file option and shall be loaded first */
            ->with('messages.some_locale.loader', 'some_locale', 'messages')
            ->willReturn(\$someCatalogue);

        \$loader->expects(\$this->at(1))
            ->method('load')
            /* This resource is added by an addResource() call and shall be loaded after the resource_files */
            ->with('second_resource.some_locale.loader', 'some_locale', 'messages')
            ->willReturn(\$someCatalogue);

        \$options = [
            'resource_files' => ['some_locale' => ['messages.some_locale.loader']],
            'debug' => \$debug,
        ];

        if (\$enableCache) {
            \$options['cache_dir'] = \$this->tmpDir;
        }

        /** @var Translator \$translator */
        \$translator = \$this->createTranslator(\$loader, \$options);
        \$translator->addResource('loader', 'second_resource.some_locale.loader', 'some_locale', 'messages');

        \$translator->trans('some_message', [], null, 'some_locale');
    }

    public function getDebugModeAndCacheDirCombinations()
    {
        return [
            [false, false],
            [true, false],
            [false, true],
            [true, true],
        ];
    }

    public function testCatalogResourcesAreAddedForScannedDirectories()
    {
        \$loader = new \\Symfony\\Component\\Translation\\Loader\\YamlFileLoader();
        \$resourceFiles = [
            'fr' => [
                __DIR__.'/../Fixtures/Resources/translations/messages.fr.yml',
            ],
        ];

        /** @var Translator \$translator */
        \$translator = \$this->getTranslator(\$loader, [
            'resource_files' => \$resourceFiles,
            'scanned_directories' => [__DIR__, '/tmp/I/sure/hope/this/does/not/exist'],
        ], 'yml');

        \$catalogue = \$translator->getCatalogue('fr');

        \$resources = \$catalogue->getResources();

        \$this->assertEquals(new DirectoryResource(__DIR__), \$resources[1]);
        \$this->assertEquals(new FileExistenceResource('/tmp/I/sure/hope/this/does/not/exist'), \$resources[2]);
    }

    protected function getCatalogue(\$locale, \$messages, \$resources = [])
    {
        \$catalogue = new MessageCatalogue(\$locale);
        foreach (\$messages as \$key => \$translation) {
            \$catalogue->set(\$key, \$translation);
        }
        foreach (\$resources as \$resource) {
            \$catalogue->addResource(\$resource);
        }

        return \$catalogue;
    }

    protected function getLoader()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$loader
            ->expects(\$this->at(0))
            ->method('load')
            ->willReturn(\$this->getCatalogue('fr', [
                'foo' => 'foo (FR)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(1))
            ->method('load')
            ->willReturn(\$this->getCatalogue('en', [
                'foo' => 'foo (EN)',
                'bar' => 'bar (EN)',
                'choice' => '{0} choice 0 (EN)|{1} choice 1 (EN)|]1,Inf] choice inf (EN)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(2))
            ->method('load')
            ->willReturn(\$this->getCatalogue('es', [
                'foobar' => 'foobar (ES)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(3))
            ->method('load')
            ->willReturn(\$this->getCatalogue('pt-PT', [
                'foobarfoo' => 'foobarfoo (PT-PT)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(4))
            ->method('load')
            ->willReturn(\$this->getCatalogue('pt_BR', [
                'other choice' => '{0} other choice 0 (PT-BR)|{1} other choice 1 (PT-BR)|]1,Inf] other choice inf (PT-BR)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(5))
            ->method('load')
            ->willReturn(\$this->getCatalogue('fr.UTF-8', [
                'foobarbaz' => 'foobarbaz (fr.UTF-8)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(6))
            ->method('load')
            ->willReturn(\$this->getCatalogue('sr@latin', [
                'foobarbax' => 'foobarbax (sr@latin)',
            ]))
        ;

        return \$loader;
    }

    protected function getContainer(\$loader)
    {
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();
        \$container
            ->expects(\$this->any())
            ->method('get')
            ->willReturn(\$loader)
        ;

        return \$container;
    }

    public function getTranslator(\$loader, \$options = [], \$loaderFomat = 'loader', \$translatorClass = '\\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator', \$defaultLocale = 'en')
    {
        \$translator = \$this->createTranslator(\$loader, \$options, \$translatorClass, \$loaderFomat, \$defaultLocale);

        if ('loader' === \$loaderFomat) {
            \$translator->addResource('loader', 'foo', 'fr');
            \$translator->addResource('loader', 'foo', 'en');
            \$translator->addResource('loader', 'foo', 'es');
            \$translator->addResource('loader', 'foo', 'pt-PT'); // European Portuguese
            \$translator->addResource('loader', 'foo', 'pt_BR'); // Brazilian Portuguese
            \$translator->addResource('loader', 'foo', 'fr.UTF-8');
            \$translator->addResource('loader', 'foo', 'sr@latin'); // Latin Serbian
        }

        return \$translator;
    }

    public function testWarmup()
    {
        \$loader = new \\Symfony\\Component\\Translation\\Loader\\YamlFileLoader();
        \$resourceFiles = [
            'fr' => [
                __DIR__.'/../Fixtures/Resources/translations/messages.fr.yml',
            ],
        ];

        // prime the cache
        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir, 'resource_files' => \$resourceFiles], 'yml');
        \$translator->setFallbackLocales(['fr']);
        \$translator->warmup(\$this->tmpDir);

        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$loader
            ->expects(\$this->never())
            ->method('load');

        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir, 'resource_files' => \$resourceFiles], 'yml');
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['fr']);
        \$this->assertEquals('répertoire', \$translator->trans('folder'));
    }

    private function createTranslator(\$loader, \$options, \$translatorClass = '\\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator', \$loaderFomat = 'loader', \$defaultLocale = 'en')
    {
        if (null === \$defaultLocale) {
            return new \$translatorClass(
                \$this->getContainer(\$loader),
                new MessageFormatter(),
                [\$loaderFomat => [\$loaderFomat]],
                \$options
            );
        }

        return new \$translatorClass(
            \$this->getContainer(\$loader),
            new MessageFormatter(),
            \$defaultLocale,
            [\$loaderFomat => [\$loaderFomat]],
            \$options
        );
    }
}

class TranslatorWithInvalidLocale extends Translator
{
    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
        return 'invalid locale';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Translation/TranslatorTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Translation;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator;
use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Config\\Resource\\FileExistenceResource;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Translation\\Formatter\\MessageFormatter;
use Symfony\\Component\\Translation\\MessageCatalogue;

class TranslatorTest extends TestCase
{
    protected \$tmpDir;

    protected function setUp(): void
    {
        \$this->tmpDir = sys_get_temp_dir().'/sf_translation';
        \$this->deleteTmpDir();
    }

    protected function tearDown(): void
    {
        \$this->deleteTmpDir();
    }

    protected function deleteTmpDir()
    {
        if (!file_exists(\$dir = \$this->tmpDir)) {
            return;
        }

        \$fs = new Filesystem();
        \$fs->remove(\$dir);
    }

    public function testTransWithoutCaching()
    {
        \$translator = \$this->getTranslator(\$this->getLoader());
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('foo (FR)', \$translator->trans('foo'));
        \$this->assertEquals('bar (EN)', \$translator->trans('bar'));
        \$this->assertEquals('foobar (ES)', \$translator->trans('foobar'));
        \$this->assertEquals('choice 0 (EN)', \$translator->trans('choice', ['%count%' => 0]));
        \$this->assertEquals('no translation', \$translator->trans('no translation'));
        \$this->assertEquals('foobarfoo (PT-PT)', \$translator->trans('foobarfoo'));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->trans('other choice', ['%count%' => 1]));
        \$this->assertEquals('foobarbaz (fr.UTF-8)', \$translator->trans('foobarbaz'));
        \$this->assertEquals('foobarbax (sr@latin)', \$translator->trans('foobarbax'));
    }

    /**
     * @group legacy
     */
    public function testTransChoiceWithoutCaching()
    {
        \$translator = \$this->getTranslator(\$this->getLoader());
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('choice 0 (EN)', \$translator->transChoice('choice', 0));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->transChoice('other choice', 1));
    }

    public function testTransWithCaching()
    {
        // prime the cache
        \$translator = \$this->getTranslator(\$this->getLoader(), ['cache_dir' => \$this->tmpDir]);
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('foo (FR)', \$translator->trans('foo'));
        \$this->assertEquals('bar (EN)', \$translator->trans('bar'));
        \$this->assertEquals('foobar (ES)', \$translator->trans('foobar'));
        \$this->assertEquals('choice 0 (EN)', \$translator->trans('choice', ['%count%' => 0]));
        \$this->assertEquals('no translation', \$translator->trans('no translation'));
        \$this->assertEquals('foobarfoo (PT-PT)', \$translator->trans('foobarfoo'));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->trans('other choice', ['%count%' => 1]));
        \$this->assertEquals('foobarbaz (fr.UTF-8)', \$translator->trans('foobarbaz'));
        \$this->assertEquals('foobarbax (sr@latin)', \$translator->trans('foobarbax'));

        // do it another time as the cache is primed now
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$loader->expects(\$this->never())->method('load');

        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir]);
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('foo (FR)', \$translator->trans('foo'));
        \$this->assertEquals('bar (EN)', \$translator->trans('bar'));
        \$this->assertEquals('foobar (ES)', \$translator->trans('foobar'));
        \$this->assertEquals('no translation', \$translator->trans('no translation'));
        \$this->assertEquals('foobarfoo (PT-PT)', \$translator->trans('foobarfoo'));
        \$this->assertEquals('foobarbaz (fr.UTF-8)', \$translator->trans('foobarbaz'));
        \$this->assertEquals('foobarbax (sr@latin)', \$translator->trans('foobarbax'));
    }

    /**
     * @group legacy
     */
    public function testTransChoiceWithCaching()
    {
        // prime the cache
        \$translator = \$this->getTranslator(\$this->getLoader(), ['cache_dir' => \$this->tmpDir]);
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('choice 0 (EN)', \$translator->transChoice('choice', 0));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->transChoice('other choice', 1));

        // do it another time as the cache is primed now
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$loader->expects(\$this->never())->method('load');

        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir]);
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['en', 'es', 'pt-PT', 'pt_BR', 'fr.UTF-8', 'sr@latin']);

        \$this->assertEquals('choice 0 (EN)', \$translator->transChoice('choice', 0));
        \$this->assertEquals('other choice 1 (PT-BR)', \$translator->transChoice('other choice', 1));
    }

    public function testTransWithCachingWithInvalidLocale()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid \"invalid locale\" locale.');
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir], 'loader', '\\Symfony\\Bundle\\FrameworkBundle\\Tests\\Translation\\TranslatorWithInvalidLocale');

        \$translator->trans('foo');
    }

    public function testLoadResourcesWithoutCaching()
    {
        \$loader = new \\Symfony\\Component\\Translation\\Loader\\YamlFileLoader();
        \$resourceFiles = [
            'fr' => [
                __DIR__.'/../Fixtures/Resources/translations/messages.fr.yml',
            ],
        ];

        \$translator = \$this->getTranslator(\$loader, ['resource_files' => \$resourceFiles], 'yml');
        \$translator->setLocale('fr');

        \$this->assertEquals('répertoire', \$translator->trans('folder'));
    }

    public function testGetDefaultLocale()
    {
        \$container = \$this->getMockBuilder(ContainerInterface::class)->getMock();
        \$translator = new Translator(\$container, new MessageFormatter(), 'en');

        \$this->assertSame('en', \$translator->getLocale());
    }

    public function testInvalidOptions()
    {
        \$this->expectException('Symfony\\Component\\Translation\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The Translator does not support the following options: \\'foo\\'');
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();

        (new Translator(\$container, new MessageFormatter(), 'en', [], ['foo' => 'bar']));
    }

    /** @dataProvider getDebugModeAndCacheDirCombinations */
    public function testResourceFilesOptionLoadsBeforeOtherAddedResources(\$debug, \$enableCache)
    {
        \$someCatalogue = \$this->getCatalogue('some_locale', []);

        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();

        \$loader->expects(\$this->at(0))
            ->method('load')
            /* The \"messages.some_locale.loader\" is passed via the resource_file option and shall be loaded first */
            ->with('messages.some_locale.loader', 'some_locale', 'messages')
            ->willReturn(\$someCatalogue);

        \$loader->expects(\$this->at(1))
            ->method('load')
            /* This resource is added by an addResource() call and shall be loaded after the resource_files */
            ->with('second_resource.some_locale.loader', 'some_locale', 'messages')
            ->willReturn(\$someCatalogue);

        \$options = [
            'resource_files' => ['some_locale' => ['messages.some_locale.loader']],
            'debug' => \$debug,
        ];

        if (\$enableCache) {
            \$options['cache_dir'] = \$this->tmpDir;
        }

        /** @var Translator \$translator */
        \$translator = \$this->createTranslator(\$loader, \$options);
        \$translator->addResource('loader', 'second_resource.some_locale.loader', 'some_locale', 'messages');

        \$translator->trans('some_message', [], null, 'some_locale');
    }

    public function getDebugModeAndCacheDirCombinations()
    {
        return [
            [false, false],
            [true, false],
            [false, true],
            [true, true],
        ];
    }

    public function testCatalogResourcesAreAddedForScannedDirectories()
    {
        \$loader = new \\Symfony\\Component\\Translation\\Loader\\YamlFileLoader();
        \$resourceFiles = [
            'fr' => [
                __DIR__.'/../Fixtures/Resources/translations/messages.fr.yml',
            ],
        ];

        /** @var Translator \$translator */
        \$translator = \$this->getTranslator(\$loader, [
            'resource_files' => \$resourceFiles,
            'scanned_directories' => [__DIR__, '/tmp/I/sure/hope/this/does/not/exist'],
        ], 'yml');

        \$catalogue = \$translator->getCatalogue('fr');

        \$resources = \$catalogue->getResources();

        \$this->assertEquals(new DirectoryResource(__DIR__), \$resources[1]);
        \$this->assertEquals(new FileExistenceResource('/tmp/I/sure/hope/this/does/not/exist'), \$resources[2]);
    }

    protected function getCatalogue(\$locale, \$messages, \$resources = [])
    {
        \$catalogue = new MessageCatalogue(\$locale);
        foreach (\$messages as \$key => \$translation) {
            \$catalogue->set(\$key, \$translation);
        }
        foreach (\$resources as \$resource) {
            \$catalogue->addResource(\$resource);
        }

        return \$catalogue;
    }

    protected function getLoader()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$loader
            ->expects(\$this->at(0))
            ->method('load')
            ->willReturn(\$this->getCatalogue('fr', [
                'foo' => 'foo (FR)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(1))
            ->method('load')
            ->willReturn(\$this->getCatalogue('en', [
                'foo' => 'foo (EN)',
                'bar' => 'bar (EN)',
                'choice' => '{0} choice 0 (EN)|{1} choice 1 (EN)|]1,Inf] choice inf (EN)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(2))
            ->method('load')
            ->willReturn(\$this->getCatalogue('es', [
                'foobar' => 'foobar (ES)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(3))
            ->method('load')
            ->willReturn(\$this->getCatalogue('pt-PT', [
                'foobarfoo' => 'foobarfoo (PT-PT)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(4))
            ->method('load')
            ->willReturn(\$this->getCatalogue('pt_BR', [
                'other choice' => '{0} other choice 0 (PT-BR)|{1} other choice 1 (PT-BR)|]1,Inf] other choice inf (PT-BR)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(5))
            ->method('load')
            ->willReturn(\$this->getCatalogue('fr.UTF-8', [
                'foobarbaz' => 'foobarbaz (fr.UTF-8)',
            ]))
        ;
        \$loader
            ->expects(\$this->at(6))
            ->method('load')
            ->willReturn(\$this->getCatalogue('sr@latin', [
                'foobarbax' => 'foobarbax (sr@latin)',
            ]))
        ;

        return \$loader;
    }

    protected function getContainer(\$loader)
    {
        \$container = \$this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerInterface')->getMock();
        \$container
            ->expects(\$this->any())
            ->method('get')
            ->willReturn(\$loader)
        ;

        return \$container;
    }

    public function getTranslator(\$loader, \$options = [], \$loaderFomat = 'loader', \$translatorClass = '\\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator', \$defaultLocale = 'en')
    {
        \$translator = \$this->createTranslator(\$loader, \$options, \$translatorClass, \$loaderFomat, \$defaultLocale);

        if ('loader' === \$loaderFomat) {
            \$translator->addResource('loader', 'foo', 'fr');
            \$translator->addResource('loader', 'foo', 'en');
            \$translator->addResource('loader', 'foo', 'es');
            \$translator->addResource('loader', 'foo', 'pt-PT'); // European Portuguese
            \$translator->addResource('loader', 'foo', 'pt_BR'); // Brazilian Portuguese
            \$translator->addResource('loader', 'foo', 'fr.UTF-8');
            \$translator->addResource('loader', 'foo', 'sr@latin'); // Latin Serbian
        }

        return \$translator;
    }

    public function testWarmup()
    {
        \$loader = new \\Symfony\\Component\\Translation\\Loader\\YamlFileLoader();
        \$resourceFiles = [
            'fr' => [
                __DIR__.'/../Fixtures/Resources/translations/messages.fr.yml',
            ],
        ];

        // prime the cache
        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir, 'resource_files' => \$resourceFiles], 'yml');
        \$translator->setFallbackLocales(['fr']);
        \$translator->warmup(\$this->tmpDir);

        \$loader = \$this->getMockBuilder('Symfony\\Component\\Translation\\Loader\\LoaderInterface')->getMock();
        \$loader
            ->expects(\$this->never())
            ->method('load');

        \$translator = \$this->getTranslator(\$loader, ['cache_dir' => \$this->tmpDir, 'resource_files' => \$resourceFiles], 'yml');
        \$translator->setLocale('fr');
        \$translator->setFallbackLocales(['fr']);
        \$this->assertEquals('répertoire', \$translator->trans('folder'));
    }

    private function createTranslator(\$loader, \$options, \$translatorClass = '\\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator', \$loaderFomat = 'loader', \$defaultLocale = 'en')
    {
        if (null === \$defaultLocale) {
            return new \$translatorClass(
                \$this->getContainer(\$loader),
                new MessageFormatter(),
                [\$loaderFomat => [\$loaderFomat]],
                \$options
            );
        }

        return new \$translatorClass(
            \$this->getContainer(\$loader),
            new MessageFormatter(),
            \$defaultLocale,
            [\$loaderFomat => [\$loaderFomat]],
            \$options
        );
    }
}

class TranslatorWithInvalidLocale extends Translator
{
    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
        return 'invalid locale';
    }
}
", "vendor/symfony/framework-bundle/Tests/Translation/TranslatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Translation/TranslatorTest.php");
    }
}
