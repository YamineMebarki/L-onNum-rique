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

/* vendor/symfony/translation/Tests/DataCollectorTranslatorTest.php */
class __TwigTemplate_8ef3b5b22ca03b69b152afb4962f63b43c86fc93c852bba55dedfe7ab076c22a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DataCollectorTranslatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DataCollectorTranslatorTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\DataCollectorTranslator;
use Symfony\\Component\\Translation\\Loader\\ArrayLoader;
use Symfony\\Component\\Translation\\Translator;

class DataCollectorTranslatorTest extends TestCase
{
    public function testCollectMessages()
    {
        \$collector = \$this->createCollector();
        \$collector->setFallbackLocales(['fr', 'ru']);

        \$collector->trans('foo');
        \$collector->trans('bar');
        \$collector->trans('choice', ['%count%' => 0]);
        \$collector->trans('bar_ru');
        \$collector->trans('bar_ru', ['foo' => 'bar']);

        \$expectedMessages = [];
        \$expectedMessages[] = [
            'id' => 'foo',
            'translation' => 'foo (en)',
            'locale' => 'en',
            'fallbackLocale' => null,
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_DEFINED,
            'parameters' => [],
            'transChoiceNumber' => null,
        ];
        \$expectedMessages[] = [
            'id' => 'bar',
            'translation' => 'bar (fr)',
            'locale' => 'en',
            'fallbackLocale' => 'fr',
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
            'parameters' => [],
            'transChoiceNumber' => null,
        ];
        \$expectedMessages[] = [
            'id' => 'choice',
            'translation' => 'choice',
            'locale' => 'en',
            'fallbackLocale' => null,
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_MISSING,
            'parameters' => ['%count%' => 0],
            'transChoiceNumber' => 0,
        ];
        \$expectedMessages[] = [
            'id' => 'bar_ru',
            'translation' => 'bar (ru)',
            'locale' => 'en',
            'fallbackLocale' => 'ru',
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
            'parameters' => [],
            'transChoiceNumber' => null,
        ];
        \$expectedMessages[] = [
            'id' => 'bar_ru',
            'translation' => 'bar (ru)',
            'locale' => 'en',
            'fallbackLocale' => 'ru',
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
            'parameters' => ['foo' => 'bar'],
            'transChoiceNumber' => null,
        ];

        \$this->assertEquals(\$expectedMessages, \$collector->getCollectedMessages());
    }

    /**
     * @group legacy
     */
    public function testCollectMessagesTransChoice()
    {
        \$collector = \$this->createCollector();
        \$collector->setFallbackLocales(['fr', 'ru']);
        \$collector->transChoice('choice', 0);

        \$expectedMessages = [];

        \$expectedMessages[] = [
              'id' => 'choice',
              'translation' => 'choice',
              'locale' => 'en',
              'fallbackLocale' => null,
              'domain' => 'messages',
              'state' => DataCollectorTranslator::MESSAGE_MISSING,
              'parameters' => ['%count%' => 0],
              'transChoiceNumber' => 0,
        ];

        \$this->assertEquals(\$expectedMessages, \$collector->getCollectedMessages());
    }

    private function createCollector()
    {
        \$translator = new Translator('en');
        \$translator->addLoader('array', new ArrayLoader());
        \$translator->addResource('array', ['foo' => 'foo (en)'], 'en');
        \$translator->addResource('array', ['bar' => 'bar (fr)'], 'fr');
        \$translator->addResource('array', ['bar_ru' => 'bar (ru)'], 'ru');

        return new DataCollectorTranslator(\$translator);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/DataCollectorTranslatorTest.php";
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

namespace Symfony\\Component\\Translation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\DataCollectorTranslator;
use Symfony\\Component\\Translation\\Loader\\ArrayLoader;
use Symfony\\Component\\Translation\\Translator;

class DataCollectorTranslatorTest extends TestCase
{
    public function testCollectMessages()
    {
        \$collector = \$this->createCollector();
        \$collector->setFallbackLocales(['fr', 'ru']);

        \$collector->trans('foo');
        \$collector->trans('bar');
        \$collector->trans('choice', ['%count%' => 0]);
        \$collector->trans('bar_ru');
        \$collector->trans('bar_ru', ['foo' => 'bar']);

        \$expectedMessages = [];
        \$expectedMessages[] = [
            'id' => 'foo',
            'translation' => 'foo (en)',
            'locale' => 'en',
            'fallbackLocale' => null,
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_DEFINED,
            'parameters' => [],
            'transChoiceNumber' => null,
        ];
        \$expectedMessages[] = [
            'id' => 'bar',
            'translation' => 'bar (fr)',
            'locale' => 'en',
            'fallbackLocale' => 'fr',
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
            'parameters' => [],
            'transChoiceNumber' => null,
        ];
        \$expectedMessages[] = [
            'id' => 'choice',
            'translation' => 'choice',
            'locale' => 'en',
            'fallbackLocale' => null,
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_MISSING,
            'parameters' => ['%count%' => 0],
            'transChoiceNumber' => 0,
        ];
        \$expectedMessages[] = [
            'id' => 'bar_ru',
            'translation' => 'bar (ru)',
            'locale' => 'en',
            'fallbackLocale' => 'ru',
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
            'parameters' => [],
            'transChoiceNumber' => null,
        ];
        \$expectedMessages[] = [
            'id' => 'bar_ru',
            'translation' => 'bar (ru)',
            'locale' => 'en',
            'fallbackLocale' => 'ru',
            'domain' => 'messages',
            'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
            'parameters' => ['foo' => 'bar'],
            'transChoiceNumber' => null,
        ];

        \$this->assertEquals(\$expectedMessages, \$collector->getCollectedMessages());
    }

    /**
     * @group legacy
     */
    public function testCollectMessagesTransChoice()
    {
        \$collector = \$this->createCollector();
        \$collector->setFallbackLocales(['fr', 'ru']);
        \$collector->transChoice('choice', 0);

        \$expectedMessages = [];

        \$expectedMessages[] = [
              'id' => 'choice',
              'translation' => 'choice',
              'locale' => 'en',
              'fallbackLocale' => null,
              'domain' => 'messages',
              'state' => DataCollectorTranslator::MESSAGE_MISSING,
              'parameters' => ['%count%' => 0],
              'transChoiceNumber' => 0,
        ];

        \$this->assertEquals(\$expectedMessages, \$collector->getCollectedMessages());
    }

    private function createCollector()
    {
        \$translator = new Translator('en');
        \$translator->addLoader('array', new ArrayLoader());
        \$translator->addResource('array', ['foo' => 'foo (en)'], 'en');
        \$translator->addResource('array', ['bar' => 'bar (fr)'], 'fr');
        \$translator->addResource('array', ['bar_ru' => 'bar (ru)'], 'ru');

        return new DataCollectorTranslator(\$translator);
    }
}
", "vendor/symfony/translation/Tests/DataCollectorTranslatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/DataCollectorTranslatorTest.php");
    }
}
