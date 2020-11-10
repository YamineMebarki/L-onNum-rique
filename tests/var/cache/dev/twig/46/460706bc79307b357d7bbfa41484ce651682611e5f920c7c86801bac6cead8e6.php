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

/* vendor/symfony/framework-bundle/Tests/Templating/Helper/FormHelperTableLayoutTest.php */
class __TwigTemplate_a2cc76f624fc84823023b08567445bb3404c8495d629c71a0646bcaf282d1a69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/FormHelperTableLayoutTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/FormHelperTableLayoutTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper\\Fixtures\\StubTemplateNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper\\Fixtures\\StubTranslator;
use Symfony\\Component\\Form\\Extension\\Templating\\TemplatingExtension;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\Tests\\AbstractTableLayoutTest;
use Symfony\\Component\\Templating\\Loader\\FilesystemLoader;
use Symfony\\Component\\Templating\\PhpEngine;

/**
 * @group legacy
 */
class FormHelperTableLayoutTest extends AbstractTableLayoutTest
{
    /**
     * @var PhpEngine
     */
    protected \$engine;

    protected static \$supportedFeatureSetVersion = 403;

    public function testStartTagHasNoActionAttributeWhenActionIsEmpty()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'get',
            'action' => '',
        ]);

        \$html = \$this->renderStart(\$form->createView());

        \$this->assertSame('<form name=\"form\" method=\"get\">', \$html);
    }

    public function testStartTagHasActionAttributeWhenActionIsZero()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'get',
            'action' => '0',
        ]);

        \$html = \$this->renderStart(\$form->createView());

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"0\">', \$html);
    }

    public function testHelpAttr()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', null, [
            'help' => 'Help text test!',
            'help_attr' => [
                'class' => 'class-test',
            ],
        ]);
        \$view = \$form->createView();
        \$html = \$this->renderHelp(\$view);

        \$this->assertMatchesXpath(\$html,
            '/p
    [@id=\"name_help\"]
    [@class=\"class-test help-text\"]
    [.=\"[trans]Help text test![/trans]\"]
'
        );
    }

    protected function getExtensions()
    {
        // should be moved to the Form component once absolute file paths are supported
        // by the default name parser in the Templating component
        \$reflClass = new \\ReflectionClass('Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle');
        \$root = realpath(\\dirname(\$reflClass->getFileName()).'/Resources/views');
        \$rootTheme = realpath(__DIR__.'/Resources');
        \$templateNameParser = new StubTemplateNameParser(\$root, \$rootTheme);
        \$loader = new FilesystemLoader([]);

        \$this->engine = new PhpEngine(\$templateNameParser, \$loader);
        \$this->engine->addGlobal('global', '');
        \$this->engine->setHelpers([
            new TranslatorHelper(new StubTranslator()),
        ]);

        return array_merge(parent::getExtensions(), [
            new TemplatingExtension(\$this->engine, \$this->csrfTokenManager, [
                'FrameworkBundle:Form',
                'FrameworkBundle:FormTable',
            ]),
        ]);
    }

    protected function tearDown(): void
    {
        \$this->engine = null;

        parent::tearDown();
    }

    protected function renderForm(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->form(\$view, \$vars);
    }

    protected function renderLabel(FormView \$view, \$label = null, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->label(\$view, \$label, \$vars);
    }

    protected function renderHelp(FormView \$view)
    {
        return (string) \$this->engine->get('form')->help(\$view);
    }

    protected function renderErrors(FormView \$view)
    {
        return (string) \$this->engine->get('form')->errors(\$view);
    }

    protected function renderWidget(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->widget(\$view, \$vars);
    }

    protected function renderRow(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->row(\$view, \$vars);
    }

    protected function renderRest(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->rest(\$view, \$vars);
    }

    protected function renderStart(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->start(\$view, \$vars);
    }

    protected function renderEnd(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->end(\$view, \$vars);
    }

    protected function setTheme(FormView \$view, array \$themes, \$useDefaultThemes = true)
    {
        \$this->engine->get('form')->setTheme(\$view, \$themes, \$useDefaultThemes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/Helper/FormHelperTableLayoutTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper\\Fixtures\\StubTemplateNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper\\Fixtures\\StubTranslator;
use Symfony\\Component\\Form\\Extension\\Templating\\TemplatingExtension;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\Tests\\AbstractTableLayoutTest;
use Symfony\\Component\\Templating\\Loader\\FilesystemLoader;
use Symfony\\Component\\Templating\\PhpEngine;

/**
 * @group legacy
 */
class FormHelperTableLayoutTest extends AbstractTableLayoutTest
{
    /**
     * @var PhpEngine
     */
    protected \$engine;

    protected static \$supportedFeatureSetVersion = 403;

    public function testStartTagHasNoActionAttributeWhenActionIsEmpty()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'get',
            'action' => '',
        ]);

        \$html = \$this->renderStart(\$form->createView());

        \$this->assertSame('<form name=\"form\" method=\"get\">', \$html);
    }

    public function testStartTagHasActionAttributeWhenActionIsZero()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'get',
            'action' => '0',
        ]);

        \$html = \$this->renderStart(\$form->createView());

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"0\">', \$html);
    }

    public function testHelpAttr()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', null, [
            'help' => 'Help text test!',
            'help_attr' => [
                'class' => 'class-test',
            ],
        ]);
        \$view = \$form->createView();
        \$html = \$this->renderHelp(\$view);

        \$this->assertMatchesXpath(\$html,
            '/p
    [@id=\"name_help\"]
    [@class=\"class-test help-text\"]
    [.=\"[trans]Help text test![/trans]\"]
'
        );
    }

    protected function getExtensions()
    {
        // should be moved to the Form component once absolute file paths are supported
        // by the default name parser in the Templating component
        \$reflClass = new \\ReflectionClass('Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle');
        \$root = realpath(\\dirname(\$reflClass->getFileName()).'/Resources/views');
        \$rootTheme = realpath(__DIR__.'/Resources');
        \$templateNameParser = new StubTemplateNameParser(\$root, \$rootTheme);
        \$loader = new FilesystemLoader([]);

        \$this->engine = new PhpEngine(\$templateNameParser, \$loader);
        \$this->engine->addGlobal('global', '');
        \$this->engine->setHelpers([
            new TranslatorHelper(new StubTranslator()),
        ]);

        return array_merge(parent::getExtensions(), [
            new TemplatingExtension(\$this->engine, \$this->csrfTokenManager, [
                'FrameworkBundle:Form',
                'FrameworkBundle:FormTable',
            ]),
        ]);
    }

    protected function tearDown(): void
    {
        \$this->engine = null;

        parent::tearDown();
    }

    protected function renderForm(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->form(\$view, \$vars);
    }

    protected function renderLabel(FormView \$view, \$label = null, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->label(\$view, \$label, \$vars);
    }

    protected function renderHelp(FormView \$view)
    {
        return (string) \$this->engine->get('form')->help(\$view);
    }

    protected function renderErrors(FormView \$view)
    {
        return (string) \$this->engine->get('form')->errors(\$view);
    }

    protected function renderWidget(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->widget(\$view, \$vars);
    }

    protected function renderRow(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->row(\$view, \$vars);
    }

    protected function renderRest(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->rest(\$view, \$vars);
    }

    protected function renderStart(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->start(\$view, \$vars);
    }

    protected function renderEnd(FormView \$view, array \$vars = [])
    {
        return (string) \$this->engine->get('form')->end(\$view, \$vars);
    }

    protected function setTheme(FormView \$view, array \$themes, \$useDefaultThemes = true)
    {
        \$this->engine->get('form')->setTheme(\$view, \$themes, \$useDefaultThemes);
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/Helper/FormHelperTableLayoutTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/Helper/FormHelperTableLayoutTest.php");
    }
}
