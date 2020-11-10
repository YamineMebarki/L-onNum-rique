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

/* vendor/symfony/translation/Tests/DataCollector/TranslationDataCollectorTest.php */
class __TwigTemplate_032260d6997e218a1c401f0a9c5e464c38881a36e0c688bc01742d7725f8b5b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DataCollector/TranslationDataCollectorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DataCollector/TranslationDataCollectorTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector;
use Symfony\\Component\\Translation\\DataCollectorTranslator;

class TranslationDataCollectorTest extends TestCase
{
    protected function setUp(): void
    {
        if (!class_exists('Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector')) {
            \$this->markTestSkipped('The \"DataCollector\" is not available');
        }
    }

    public function testCollectEmptyMessages()
    {
        \$translator = \$this->getTranslator();
        \$translator->expects(\$this->any())->method('getCollectedMessages')->willReturn([]);

        \$dataCollector = new TranslationDataCollector(\$translator);
        \$dataCollector->lateCollect();

        \$this->assertEquals(0, \$dataCollector->getCountMissings());
        \$this->assertEquals(0, \$dataCollector->getCountFallbacks());
        \$this->assertEquals(0, \$dataCollector->getCountDefines());
        \$this->assertEquals([], \$dataCollector->getMessages()->getValue());
    }

    public function testCollect()
    {
        \$collectedMessages = [
            [
                'id' => 'foo',
                'translation' => 'foo (en)',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_DEFINED,
                'parameters' => [],
                'transChoiceNumber' => null,
            ],
            [
                'id' => 'bar',
                'translation' => 'bar (fr)',
                'locale' => 'fr',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
                'parameters' => [],
                'transChoiceNumber' => null,
            ],
            [
                'id' => 'choice',
                'translation' => 'choice',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_MISSING,
                'parameters' => ['%count%' => 3],
                'transChoiceNumber' => 3,
            ],
            [
                'id' => 'choice',
                'translation' => 'choice',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_MISSING,
                'parameters' => ['%count%' => 3],
                'transChoiceNumber' => 3,
            ],
            [
                'id' => 'choice',
                'translation' => 'choice',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_MISSING,
                'parameters' => ['%count%' => 4, '%foo%' => 'bar'],
                'transChoiceNumber' => 4,
            ],
        ];
        \$expectedMessages = [
            [
                'id' => 'foo',
                'translation' => 'foo (en)',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_DEFINED,
                'count' => 1,
                'parameters' => [],
                'transChoiceNumber' => null,
            ],
            [
                'id' => 'bar',
                'translation' => 'bar (fr)',
                'locale' => 'fr',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
                'count' => 1,
                'parameters' => [],
                'transChoiceNumber' => null,
            ],
            [
                'id' => 'choice',
                'translation' => 'choice',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_MISSING,
                'count' => 3,
                'parameters' => [
                    ['%count%' => 3],
                    ['%count%' => 3],
                    ['%count%' => 4, '%foo%' => 'bar'],
                ],
                'transChoiceNumber' => 3,
            ],
        ];

        \$translator = \$this->getTranslator();
        \$translator->expects(\$this->any())->method('getCollectedMessages')->willReturn(\$collectedMessages);

        \$dataCollector = new TranslationDataCollector(\$translator);
        \$dataCollector->lateCollect();

        \$this->assertEquals(1, \$dataCollector->getCountMissings());
        \$this->assertEquals(1, \$dataCollector->getCountFallbacks());
        \$this->assertEquals(1, \$dataCollector->getCountDefines());

        \$this->assertEquals(\$expectedMessages, array_values(\$dataCollector->getMessages()->getValue(true)));
    }

    private function getTranslator()
    {
        \$translator = \$this
            ->getMockBuilder('Symfony\\Component\\Translation\\DataCollectorTranslator')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        return \$translator;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/DataCollector/TranslationDataCollectorTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector;
use Symfony\\Component\\Translation\\DataCollectorTranslator;

class TranslationDataCollectorTest extends TestCase
{
    protected function setUp(): void
    {
        if (!class_exists('Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector')) {
            \$this->markTestSkipped('The \"DataCollector\" is not available');
        }
    }

    public function testCollectEmptyMessages()
    {
        \$translator = \$this->getTranslator();
        \$translator->expects(\$this->any())->method('getCollectedMessages')->willReturn([]);

        \$dataCollector = new TranslationDataCollector(\$translator);
        \$dataCollector->lateCollect();

        \$this->assertEquals(0, \$dataCollector->getCountMissings());
        \$this->assertEquals(0, \$dataCollector->getCountFallbacks());
        \$this->assertEquals(0, \$dataCollector->getCountDefines());
        \$this->assertEquals([], \$dataCollector->getMessages()->getValue());
    }

    public function testCollect()
    {
        \$collectedMessages = [
            [
                'id' => 'foo',
                'translation' => 'foo (en)',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_DEFINED,
                'parameters' => [],
                'transChoiceNumber' => null,
            ],
            [
                'id' => 'bar',
                'translation' => 'bar (fr)',
                'locale' => 'fr',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
                'parameters' => [],
                'transChoiceNumber' => null,
            ],
            [
                'id' => 'choice',
                'translation' => 'choice',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_MISSING,
                'parameters' => ['%count%' => 3],
                'transChoiceNumber' => 3,
            ],
            [
                'id' => 'choice',
                'translation' => 'choice',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_MISSING,
                'parameters' => ['%count%' => 3],
                'transChoiceNumber' => 3,
            ],
            [
                'id' => 'choice',
                'translation' => 'choice',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_MISSING,
                'parameters' => ['%count%' => 4, '%foo%' => 'bar'],
                'transChoiceNumber' => 4,
            ],
        ];
        \$expectedMessages = [
            [
                'id' => 'foo',
                'translation' => 'foo (en)',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_DEFINED,
                'count' => 1,
                'parameters' => [],
                'transChoiceNumber' => null,
            ],
            [
                'id' => 'bar',
                'translation' => 'bar (fr)',
                'locale' => 'fr',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK,
                'count' => 1,
                'parameters' => [],
                'transChoiceNumber' => null,
            ],
            [
                'id' => 'choice',
                'translation' => 'choice',
                'locale' => 'en',
                'domain' => 'messages',
                'state' => DataCollectorTranslator::MESSAGE_MISSING,
                'count' => 3,
                'parameters' => [
                    ['%count%' => 3],
                    ['%count%' => 3],
                    ['%count%' => 4, '%foo%' => 'bar'],
                ],
                'transChoiceNumber' => 3,
            ],
        ];

        \$translator = \$this->getTranslator();
        \$translator->expects(\$this->any())->method('getCollectedMessages')->willReturn(\$collectedMessages);

        \$dataCollector = new TranslationDataCollector(\$translator);
        \$dataCollector->lateCollect();

        \$this->assertEquals(1, \$dataCollector->getCountMissings());
        \$this->assertEquals(1, \$dataCollector->getCountFallbacks());
        \$this->assertEquals(1, \$dataCollector->getCountDefines());

        \$this->assertEquals(\$expectedMessages, array_values(\$dataCollector->getMessages()->getValue(true)));
    }

    private function getTranslator()
    {
        \$translator = \$this
            ->getMockBuilder('Symfony\\Component\\Translation\\DataCollectorTranslator')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        return \$translator;
    }
}
", "vendor/symfony/translation/Tests/DataCollector/TranslationDataCollectorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/DataCollector/TranslationDataCollectorTest.php");
    }
}
