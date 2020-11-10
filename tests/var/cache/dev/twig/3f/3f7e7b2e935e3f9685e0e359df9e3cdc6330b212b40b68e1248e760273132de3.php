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

/* vendor/symfony/translation/Tests/DependencyInjection/TranslationExtractorPassTest.php */
class __TwigTemplate_407f8d277e11e8badfc89cfdac976c20a679e667f6bbcb0b39ab2b8459ea65b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DependencyInjection/TranslationExtractorPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DependencyInjection/TranslationExtractorPassTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslationExtractorPass;

class TranslationExtractorPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$extractorDefinition = \$container->register('translation.extractor');
        \$container->register('foo.id')
            ->addTag('translation.extractor', ['alias' => 'bar.alias']);

        \$translationDumperPass = new TranslationExtractorPass();
        \$translationDumperPass->process(\$container);

        \$this->assertEquals([['addExtractor', ['bar.alias', new Reference('foo.id')]]], \$extractorDefinition->getMethodCalls());
    }

    public function testProcessNoDefinitionFound()
    {
        \$container = new ContainerBuilder();

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$translationDumperPass = new TranslationExtractorPass();
        \$translationDumperPass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }

    public function testProcessMissingAlias()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The alias for the tag \"translation.extractor\" of service \"foo.id\" must be set.');
        \$container = new ContainerBuilder();
        \$container->register('translation.extractor');
        \$container->register('foo.id')
            ->addTag('translation.extractor', []);

        \$translationDumperPass = new TranslationExtractorPass();
        \$translationDumperPass->process(\$container);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/DependencyInjection/TranslationExtractorPassTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslationExtractorPass;

class TranslationExtractorPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$extractorDefinition = \$container->register('translation.extractor');
        \$container->register('foo.id')
            ->addTag('translation.extractor', ['alias' => 'bar.alias']);

        \$translationDumperPass = new TranslationExtractorPass();
        \$translationDumperPass->process(\$container);

        \$this->assertEquals([['addExtractor', ['bar.alias', new Reference('foo.id')]]], \$extractorDefinition->getMethodCalls());
    }

    public function testProcessNoDefinitionFound()
    {
        \$container = new ContainerBuilder();

        \$definitionsBefore = \\count(\$container->getDefinitions());
        \$aliasesBefore = \\count(\$container->getAliases());

        \$translationDumperPass = new TranslationExtractorPass();
        \$translationDumperPass->process(\$container);

        // the container is untouched (i.e. no new definitions or aliases)
        \$this->assertCount(\$definitionsBefore, \$container->getDefinitions());
        \$this->assertCount(\$aliasesBefore, \$container->getAliases());
    }

    public function testProcessMissingAlias()
    {
        \$this->expectException('Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException');
        \$this->expectExceptionMessage('The alias for the tag \"translation.extractor\" of service \"foo.id\" must be set.');
        \$container = new ContainerBuilder();
        \$container->register('translation.extractor');
        \$container->register('foo.id')
            ->addTag('translation.extractor', []);

        \$translationDumperPass = new TranslationExtractorPass();
        \$translationDumperPass->process(\$container);
    }
}
", "vendor/symfony/translation/Tests/DependencyInjection/TranslationExtractorPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/DependencyInjection/TranslationExtractorPassTest.php");
    }
}
