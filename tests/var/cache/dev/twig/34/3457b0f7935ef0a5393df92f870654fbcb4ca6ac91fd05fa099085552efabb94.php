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

/* vendor/symfony/twig-bridge/Tests/Translation/TwigExtractorTest.php */
class __TwigTemplate_4fd0226193a6ac9aad3be5ad0bfa04ceab1bc7574b14dc3e8fa367faec6eb7be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Translation/TwigExtractorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Translation/TwigExtractorTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Translation;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\TranslationExtension;
use Symfony\\Bridge\\Twig\\Translation\\TwigExtractor;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Twig\\Environment;
use Twig\\Error\\Error;
use Twig\\Loader\\ArrayLoader;

class TwigExtractorTest extends TestCase
{
    /**
     * @dataProvider getExtractData
     */
    public function testExtract(\$template, \$messages)
    {
        \$loader = \$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock();
        \$twig = new Environment(\$loader, [
            'strict_variables' => true,
            'debug' => true,
            'cache' => false,
            'autoescape' => false,
        ]);
        \$twig->addExtension(new TranslationExtension(\$this->getMockBuilder(TranslatorInterface::class)->getMock()));

        \$extractor = new TwigExtractor(\$twig);
        \$extractor->setPrefix('prefix');
        \$catalogue = new MessageCatalogue('en');

        \$m = new \\ReflectionMethod(\$extractor, 'extractTemplate');
        \$m->setAccessible(true);
        \$m->invoke(\$extractor, \$template, \$catalogue);

        foreach (\$messages as \$key => \$domain) {
            \$this->assertTrue(\$catalogue->has(\$key, \$domain));
            \$this->assertEquals('prefix'.\$key, \$catalogue->get(\$key, \$domain));
        }
    }

    /**
     * @group legacy
     * @dataProvider getLegacyExtractData
     */
    public function testLegacyExtract(\$template, \$messages)
    {
        \$this->testExtract(\$template, \$messages);
    }

    public function getExtractData()
    {
        return [
            ['";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new key"), "html", null, true);
        echo "', ['new key' => 'messages']],
            ['";
        // line 66
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new key")), "html", null, true);
        echo "', ['new key' => 'messages']],
            ['";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new key", [], "domain"), "html", null, true);
        echo "', ['new key' => 'domain']],
            ['";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new key", [], "messages");
        echo "', ['new key' => 'messages']],
            ['";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new key", [], "messages");
        echo "', ['new key' => 'messages']],
            ['";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new key", [], "domain");
        echo "', ['new key' => 'domain']],
            ['";
        // line 71
        $context["foo"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new key");
        echo "', ['new key' => 'messages']],
            ['";
        // line 72
        echo twig_escape_filter($this->env, ((1) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new key")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("another key"))), "html", null, true);
        echo "', ['new key' => 'messages', 'another key' => 'messages']],

            // make sure 'trans_default_domain' tag is supported
            ['";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new key", [], "domain"), "html", null, true);
        echo "', ['new key' => 'domain']],
            ['";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new key", [], "domain");
        echo "', ['new key' => 'domain']],

            // make sure this works with twig's named arguments
            ['";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new key", array(), "domain"), "html", null, true);
        echo "', ['new key' => 'domain']],
        ];
    }

    /**
     * @group legacy
     */
    public function getLegacyExtractData()
    {
        return [
            ['";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("new key", 1, [], "domain"), "html", null, true);
        echo "', ['new key' => 'messages']],
            ['";
        // line 90
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("new key", 1, [], "domain")), "html", null, true);
        echo "', ['new key' => 'messages']],
            ['";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("new key", 1, [], "domain"), "html", null, true);
        echo "', ['new key' => 'domain']],

            // make sure 'trans_default_domain' tag is supported
            ['";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("new key", [], "domain"), "html", null, true);
        echo "', ['new key' => 'domain']],

            // make sure this works with twig's named arguments
            ['";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("new key", 1, array(), "domain"), "html", null, true);
        echo "', ['new key' => 'domain']],
        ];
    }

    /**
     * @dataProvider resourcesWithSyntaxErrorsProvider
     */
    public function testExtractSyntaxError(\$resources)
    {
        \$this->expectException('Twig\\Error\\Error');
        \$twig = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$twig->addExtension(new TranslationExtension(\$this->getMockBuilder(TranslatorInterface::class)->getMock()));

        \$extractor = new TwigExtractor(\$twig);

        try {
            \$extractor->extract(\$resources, new MessageCatalogue('en'));
        } catch (Error \$e) {
            \$this->assertSame(\\dirname(__DIR__).strtr('/Fixtures/extractor/syntax_error.twig', '/', \\DIRECTORY_SEPARATOR), \$e->getFile());
            \$this->assertSame(1, \$e->getLine());
            \$this->assertSame('Unclosed \"block\".', \$e->getMessage());

            throw \$e;
        }
    }

    /**
     * @return array
     */
    public function resourcesWithSyntaxErrorsProvider()
    {
        return [
            [__DIR__.'/../Fixtures'],
            [__DIR__.'/../Fixtures/extractor/syntax_error.twig'],
            [new \\SplFileInfo(__DIR__.'/../Fixtures/extractor/syntax_error.twig')],
        ];
    }

    /**
     * @dataProvider resourceProvider
     */
    public function testExtractWithFiles(\$resource)
    {
        \$loader = new ArrayLoader([]);
        \$twig = new Environment(\$loader, [
            'strict_variables' => true,
            'debug' => true,
            'cache' => false,
            'autoescape' => false,
        ]);
        \$twig->addExtension(new TranslationExtension(\$this->getMockBuilder(TranslatorInterface::class)->getMock()));

        \$extractor = new TwigExtractor(\$twig);
        \$catalogue = new MessageCatalogue('en');
        \$extractor->extract(\$resource, \$catalogue);

        \$this->assertTrue(\$catalogue->has('Hi!', 'messages'));
        \$this->assertEquals('Hi!', \$catalogue->get('Hi!', 'messages'));
    }

    /**
     * @return array
     */
    public function resourceProvider()
    {
        \$directory = __DIR__.'/../Fixtures/extractor/';

        return [
            [\$directory.'with_translations.html.twig'],
            [[\$directory.'with_translations.html.twig']],
            [[new \\SplFileInfo(\$directory.'with_translations.html.twig')]],
            [new \\ArrayObject([\$directory.'with_translations.html.twig'])],
            [new \\ArrayObject([new \\SplFileInfo(\$directory.'with_translations.html.twig')])],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Translation/TwigExtractorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 97,  180 => 94,  174 => 91,  170 => 90,  166 => 89,  153 => 79,  147 => 76,  143 => 75,  137 => 72,  133 => 71,  129 => 70,  125 => 69,  121 => 68,  117 => 67,  113 => 66,  109 => 65,  43 => 1,);
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

namespace Symfony\\Bridge\\Twig\\Tests\\Translation;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\TranslationExtension;
use Symfony\\Bridge\\Twig\\Translation\\TwigExtractor;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Twig\\Environment;
use Twig\\Error\\Error;
use Twig\\Loader\\ArrayLoader;

class TwigExtractorTest extends TestCase
{
    /**
     * @dataProvider getExtractData
     */
    public function testExtract(\$template, \$messages)
    {
        \$loader = \$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock();
        \$twig = new Environment(\$loader, [
            'strict_variables' => true,
            'debug' => true,
            'cache' => false,
            'autoescape' => false,
        ]);
        \$twig->addExtension(new TranslationExtension(\$this->getMockBuilder(TranslatorInterface::class)->getMock()));

        \$extractor = new TwigExtractor(\$twig);
        \$extractor->setPrefix('prefix');
        \$catalogue = new MessageCatalogue('en');

        \$m = new \\ReflectionMethod(\$extractor, 'extractTemplate');
        \$m->setAccessible(true);
        \$m->invoke(\$extractor, \$template, \$catalogue);

        foreach (\$messages as \$key => \$domain) {
            \$this->assertTrue(\$catalogue->has(\$key, \$domain));
            \$this->assertEquals('prefix'.\$key, \$catalogue->get(\$key, \$domain));
        }
    }

    /**
     * @group legacy
     * @dataProvider getLegacyExtractData
     */
    public function testLegacyExtract(\$template, \$messages)
    {
        \$this->testExtract(\$template, \$messages);
    }

    public function getExtractData()
    {
        return [
            ['{{ \"new key\" | trans() }}', ['new key' => 'messages']],
            ['{{ \"new key\" | trans() | upper }}', ['new key' => 'messages']],
            ['{{ \"new key\" | trans({}, \"domain\") }}', ['new key' => 'domain']],
            ['{% trans %}new key{% endtrans %}', ['new key' => 'messages']],
            ['{% trans %}  new key  {% endtrans %}', ['new key' => 'messages']],
            ['{% trans from \"domain\" %}new key{% endtrans %}', ['new key' => 'domain']],
            ['{% set foo = \"new key\" | trans %}', ['new key' => 'messages']],
            ['{{ 1 ? \"new key\" | trans : \"another key\" | trans }}', ['new key' => 'messages', 'another key' => 'messages']],

            // make sure 'trans_default_domain' tag is supported
            ['{% trans_default_domain \"domain\" %}{{ \"new key\"|trans }}', ['new key' => 'domain']],
            ['{% trans_default_domain \"domain\" %}{% trans %}new key{% endtrans %}', ['new key' => 'domain']],

            // make sure this works with twig's named arguments
            ['{{ \"new key\" | trans(domain=\"domain\") }}', ['new key' => 'domain']],
        ];
    }

    /**
     * @group legacy
     */
    public function getLegacyExtractData()
    {
        return [
            ['{{ \"new key\" | transchoice(1) }}', ['new key' => 'messages']],
            ['{{ \"new key\" | transchoice(1) | upper }}', ['new key' => 'messages']],
            ['{{ \"new key\" | transchoice(1, {}, \"domain\") }}', ['new key' => 'domain']],

            // make sure 'trans_default_domain' tag is supported
            ['{% trans_default_domain \"domain\" %}{{ \"new key\"|transchoice }}', ['new key' => 'domain']],

            // make sure this works with twig's named arguments
            ['{{ \"new key\" | transchoice(domain=\"domain\", count=1) }}', ['new key' => 'domain']],
        ];
    }

    /**
     * @dataProvider resourcesWithSyntaxErrorsProvider
     */
    public function testExtractSyntaxError(\$resources)
    {
        \$this->expectException('Twig\\Error\\Error');
        \$twig = new Environment(\$this->getMockBuilder('Twig\\Loader\\LoaderInterface')->getMock());
        \$twig->addExtension(new TranslationExtension(\$this->getMockBuilder(TranslatorInterface::class)->getMock()));

        \$extractor = new TwigExtractor(\$twig);

        try {
            \$extractor->extract(\$resources, new MessageCatalogue('en'));
        } catch (Error \$e) {
            \$this->assertSame(\\dirname(__DIR__).strtr('/Fixtures/extractor/syntax_error.twig', '/', \\DIRECTORY_SEPARATOR), \$e->getFile());
            \$this->assertSame(1, \$e->getLine());
            \$this->assertSame('Unclosed \"block\".', \$e->getMessage());

            throw \$e;
        }
    }

    /**
     * @return array
     */
    public function resourcesWithSyntaxErrorsProvider()
    {
        return [
            [__DIR__.'/../Fixtures'],
            [__DIR__.'/../Fixtures/extractor/syntax_error.twig'],
            [new \\SplFileInfo(__DIR__.'/../Fixtures/extractor/syntax_error.twig')],
        ];
    }

    /**
     * @dataProvider resourceProvider
     */
    public function testExtractWithFiles(\$resource)
    {
        \$loader = new ArrayLoader([]);
        \$twig = new Environment(\$loader, [
            'strict_variables' => true,
            'debug' => true,
            'cache' => false,
            'autoescape' => false,
        ]);
        \$twig->addExtension(new TranslationExtension(\$this->getMockBuilder(TranslatorInterface::class)->getMock()));

        \$extractor = new TwigExtractor(\$twig);
        \$catalogue = new MessageCatalogue('en');
        \$extractor->extract(\$resource, \$catalogue);

        \$this->assertTrue(\$catalogue->has('Hi!', 'messages'));
        \$this->assertEquals('Hi!', \$catalogue->get('Hi!', 'messages'));
    }

    /**
     * @return array
     */
    public function resourceProvider()
    {
        \$directory = __DIR__.'/../Fixtures/extractor/';

        return [
            [\$directory.'with_translations.html.twig'],
            [[\$directory.'with_translations.html.twig']],
            [[new \\SplFileInfo(\$directory.'with_translations.html.twig')]],
            [new \\ArrayObject([\$directory.'with_translations.html.twig'])],
            [new \\ArrayObject([new \\SplFileInfo(\$directory.'with_translations.html.twig')])],
        ];
    }
}
", "vendor/symfony/twig-bridge/Tests/Translation/TwigExtractorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Translation/TwigExtractorTest.php");
    }
}
