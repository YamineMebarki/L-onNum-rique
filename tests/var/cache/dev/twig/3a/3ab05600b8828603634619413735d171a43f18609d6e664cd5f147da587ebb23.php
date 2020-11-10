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

/* vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap3LayoutTest.php */
class __TwigTemplate_af185946c6a895f6c93c437e83ce51b0380170e088c087ff825f8ee812afae5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap3LayoutTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap3LayoutTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use Symfony\\Bridge\\Twig\\Extension\\FormExtension;
use Symfony\\Bridge\\Twig\\Extension\\TranslationExtension;
use Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine;
use Symfony\\Bridge\\Twig\\Tests\\Extension\\Fixtures\\StubFilesystemLoader;
use Symfony\\Bridge\\Twig\\Tests\\Extension\\Fixtures\\StubTranslator;
use Symfony\\Component\\Form\\FormRenderer;
use Symfony\\Component\\Form\\FormView;
use Twig\\Environment;

class FormExtensionBootstrap3LayoutTest extends AbstractBootstrap3LayoutTest
{
    use RuntimeLoaderProvider;

    /**
     * @var FormRenderer
     */
    private \$renderer;

    protected function setUp(): void
    {
        parent::setUp();

        \$loader = new StubFilesystemLoader([
            __DIR__.'/../../Resources/views/Form',
            __DIR__.'/Fixtures/templates/form',
        ]);

        \$environment = new Environment(\$loader, ['strict_variables' => true]);
        \$environment->addExtension(new TranslationExtension(new StubTranslator()));
        \$environment->addExtension(new FormExtension());

        \$rendererEngine = new TwigRendererEngine([
            'bootstrap_3_layout.html.twig',
            'custom_widgets.html.twig',
        ], \$environment);
        \$this->renderer = new FormRenderer(\$rendererEngine, \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface')->getMock());
        \$this->registerTwigRuntimeLoader(\$environment, \$this->renderer);
    }

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

    public function testMoneyWidgetInIso()
    {
        \$environment = new Environment(new StubFilesystemLoader([
            __DIR__.'/../../Resources/views/Form',
            __DIR__.'/Fixtures/templates/form',
        ]), ['strict_variables' => true]);
        \$environment->addExtension(new TranslationExtension(new StubTranslator()));
        \$environment->addExtension(new FormExtension());
        \$environment->setCharset('ISO-8859-1');

        \$rendererEngine = new TwigRendererEngine([
            'bootstrap_3_layout.html.twig',
            'custom_widgets.html.twig',
        ], \$environment);
        \$this->renderer = new FormRenderer(\$rendererEngine, \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface')->getMock());
        \$this->registerTwigRuntimeLoader(\$environment, \$this->renderer);

        \$view = \$this->factory
            ->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType')
            ->createView()
        ;

        \$this->assertSame(<<<'HTML'
<div class=\"input-group\">
                            <span class=\"input-group-addon\">&euro; </span>
            <input type=\"text\" id=\"name\" name=\"name\" required=\"required\" class=\"form-control\" />        </div>
HTML
        , trim(\$this->renderWidget(\$view)));
    }

    protected function renderForm(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->renderBlock(\$view, 'form', \$vars);
    }

    protected function renderLabel(FormView \$view, \$label = null, array \$vars = [])
    {
        if (null !== \$label) {
            \$vars += ['label' => \$label];
        }

        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'label', \$vars);
    }

    protected function renderHelp(FormView \$view)
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'help');
    }

    protected function renderErrors(FormView \$view)
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'errors');
    }

    protected function renderWidget(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'widget', \$vars);
    }

    protected function renderRow(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'row', \$vars);
    }

    protected function renderRest(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'rest', \$vars);
    }

    protected function renderStart(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->renderBlock(\$view, 'form_start', \$vars);
    }

    protected function renderEnd(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->renderBlock(\$view, 'form_end', \$vars);
    }

    protected function setTheme(FormView \$view, array \$themes, \$useDefaultThemes = true)
    {
        \$this->renderer->setTheme(\$view, \$themes, \$useDefaultThemes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap3LayoutTest.php";
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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use Symfony\\Bridge\\Twig\\Extension\\FormExtension;
use Symfony\\Bridge\\Twig\\Extension\\TranslationExtension;
use Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine;
use Symfony\\Bridge\\Twig\\Tests\\Extension\\Fixtures\\StubFilesystemLoader;
use Symfony\\Bridge\\Twig\\Tests\\Extension\\Fixtures\\StubTranslator;
use Symfony\\Component\\Form\\FormRenderer;
use Symfony\\Component\\Form\\FormView;
use Twig\\Environment;

class FormExtensionBootstrap3LayoutTest extends AbstractBootstrap3LayoutTest
{
    use RuntimeLoaderProvider;

    /**
     * @var FormRenderer
     */
    private \$renderer;

    protected function setUp(): void
    {
        parent::setUp();

        \$loader = new StubFilesystemLoader([
            __DIR__.'/../../Resources/views/Form',
            __DIR__.'/Fixtures/templates/form',
        ]);

        \$environment = new Environment(\$loader, ['strict_variables' => true]);
        \$environment->addExtension(new TranslationExtension(new StubTranslator()));
        \$environment->addExtension(new FormExtension());

        \$rendererEngine = new TwigRendererEngine([
            'bootstrap_3_layout.html.twig',
            'custom_widgets.html.twig',
        ], \$environment);
        \$this->renderer = new FormRenderer(\$rendererEngine, \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface')->getMock());
        \$this->registerTwigRuntimeLoader(\$environment, \$this->renderer);
    }

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

    public function testMoneyWidgetInIso()
    {
        \$environment = new Environment(new StubFilesystemLoader([
            __DIR__.'/../../Resources/views/Form',
            __DIR__.'/Fixtures/templates/form',
        ]), ['strict_variables' => true]);
        \$environment->addExtension(new TranslationExtension(new StubTranslator()));
        \$environment->addExtension(new FormExtension());
        \$environment->setCharset('ISO-8859-1');

        \$rendererEngine = new TwigRendererEngine([
            'bootstrap_3_layout.html.twig',
            'custom_widgets.html.twig',
        ], \$environment);
        \$this->renderer = new FormRenderer(\$rendererEngine, \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface')->getMock());
        \$this->registerTwigRuntimeLoader(\$environment, \$this->renderer);

        \$view = \$this->factory
            ->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType')
            ->createView()
        ;

        \$this->assertSame(<<<'HTML'
<div class=\"input-group\">
                            <span class=\"input-group-addon\">&euro; </span>
            <input type=\"text\" id=\"name\" name=\"name\" required=\"required\" class=\"form-control\" />        </div>
HTML
        , trim(\$this->renderWidget(\$view)));
    }

    protected function renderForm(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->renderBlock(\$view, 'form', \$vars);
    }

    protected function renderLabel(FormView \$view, \$label = null, array \$vars = [])
    {
        if (null !== \$label) {
            \$vars += ['label' => \$label];
        }

        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'label', \$vars);
    }

    protected function renderHelp(FormView \$view)
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'help');
    }

    protected function renderErrors(FormView \$view)
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'errors');
    }

    protected function renderWidget(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'widget', \$vars);
    }

    protected function renderRow(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'row', \$vars);
    }

    protected function renderRest(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->searchAndRenderBlock(\$view, 'rest', \$vars);
    }

    protected function renderStart(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->renderBlock(\$view, 'form_start', \$vars);
    }

    protected function renderEnd(FormView \$view, array \$vars = [])
    {
        return (string) \$this->renderer->renderBlock(\$view, 'form_end', \$vars);
    }

    protected function setTheme(FormView \$view, array \$themes, \$useDefaultThemes = true)
    {
        \$this->renderer->setTheme(\$view, \$themes, \$useDefaultThemes);
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap3LayoutTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap3LayoutTest.php");
    }
}
