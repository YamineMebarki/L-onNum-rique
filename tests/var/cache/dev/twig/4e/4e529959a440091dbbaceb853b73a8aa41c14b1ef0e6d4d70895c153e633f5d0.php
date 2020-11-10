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

/* vendor/symfony/translation/Tests/LoggingTranslatorTest.php */
class __TwigTemplate_256dc7f02ba6e6eca3311dc583cbd6ec394a07ef81358370ea98474a3459dab2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/LoggingTranslatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/LoggingTranslatorTest.php"));

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
use Symfony\\Component\\Translation\\Loader\\ArrayLoader;
use Symfony\\Component\\Translation\\LoggingTranslator;
use Symfony\\Component\\Translation\\Translator;

class LoggingTranslatorTest extends TestCase
{
    public function testTransWithNoTranslationIsLogged()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->exactly(1))
            ->method('warning')
            ->with('Translation not found.')
        ;

        \$translator = new Translator('ar');
        \$loggableTranslator = new LoggingTranslator(\$translator, \$logger);
        \$loggableTranslator->trans('bar');
    }

    /**
     * @group legacy
     */
    public function testTransChoiceFallbackIsLogged()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->once())
            ->method('debug')
            ->with('Translation use fallback catalogue.')
        ;

        \$translator = new Translator('ar');
        \$translator->setFallbackLocales(['en']);
        \$translator->addLoader('array', new ArrayLoader());
        \$translator->addResource('array', ['some_message2' => 'one thing|%count% things'], 'en');
        \$loggableTranslator = new LoggingTranslator(\$translator, \$logger);
        \$loggableTranslator->transChoice('some_message2', 10, ['%count%' => 10]);
    }

    /**
     * @group legacy
     */
    public function testTransChoiceWithNoTranslationIsLogged()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->exactly(1))
            ->method('warning')
            ->with('Translation not found.')
        ;

        \$translator = new Translator('ar');
        \$loggableTranslator = new LoggingTranslator(\$translator, \$logger);
        \$loggableTranslator->transChoice('some_message2', 10, ['%count%' => 10]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/LoggingTranslatorTest.php";
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
use Symfony\\Component\\Translation\\Loader\\ArrayLoader;
use Symfony\\Component\\Translation\\LoggingTranslator;
use Symfony\\Component\\Translation\\Translator;

class LoggingTranslatorTest extends TestCase
{
    public function testTransWithNoTranslationIsLogged()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->exactly(1))
            ->method('warning')
            ->with('Translation not found.')
        ;

        \$translator = new Translator('ar');
        \$loggableTranslator = new LoggingTranslator(\$translator, \$logger);
        \$loggableTranslator->trans('bar');
    }

    /**
     * @group legacy
     */
    public function testTransChoiceFallbackIsLogged()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->once())
            ->method('debug')
            ->with('Translation use fallback catalogue.')
        ;

        \$translator = new Translator('ar');
        \$translator->setFallbackLocales(['en']);
        \$translator->addLoader('array', new ArrayLoader());
        \$translator->addResource('array', ['some_message2' => 'one thing|%count% things'], 'en');
        \$loggableTranslator = new LoggingTranslator(\$translator, \$logger);
        \$loggableTranslator->transChoice('some_message2', 10, ['%count%' => 10]);
    }

    /**
     * @group legacy
     */
    public function testTransChoiceWithNoTranslationIsLogged()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->exactly(1))
            ->method('warning')
            ->with('Translation not found.')
        ;

        \$translator = new Translator('ar');
        \$loggableTranslator = new LoggingTranslator(\$translator, \$logger);
        \$loggableTranslator->transChoice('some_message2', 10, ['%count%' => 10]);
    }
}
", "vendor/symfony/translation/Tests/LoggingTranslatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/LoggingTranslatorTest.php");
    }
}
