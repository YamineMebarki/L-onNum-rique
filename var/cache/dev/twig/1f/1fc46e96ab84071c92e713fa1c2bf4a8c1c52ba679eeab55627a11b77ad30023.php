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

/* vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap4HorizontalLayoutTest.php */
class __TwigTemplate_c3e48886912f10c715399a35a32b32063b6aee1469dd7597f4cacd887f13eb15 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap4HorizontalLayoutTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap4HorizontalLayoutTest.php"));

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

/**
 * Class providing test cases for the Bootstrap 4 Twig form theme.
 *
 * @author Hidde Wieringa <hidde@hiddewieringa.nl>
 */
class FormExtensionBootstrap4HorizontalLayoutTest extends AbstractBootstrap4HorizontalLayoutTest
{
    use RuntimeLoaderProvider;

    protected \$testableFeatures = [
        'choice_attr',
    ];

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
            'bootstrap_4_horizontal_layout.html.twig',
            'custom_widgets.html.twig',
        ], \$environment);
        \$this->renderer = new FormRenderer(\$rendererEngine, \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface')->getMock());
        \$this->registerTwigRuntimeLoader(\$environment, \$this->renderer);
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
        return "vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap4HorizontalLayoutTest.php";
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

/**
 * Class providing test cases for the Bootstrap 4 Twig form theme.
 *
 * @author Hidde Wieringa <hidde@hiddewieringa.nl>
 */
class FormExtensionBootstrap4HorizontalLayoutTest extends AbstractBootstrap4HorizontalLayoutTest
{
    use RuntimeLoaderProvider;

    protected \$testableFeatures = [
        'choice_attr',
    ];

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
            'bootstrap_4_horizontal_layout.html.twig',
            'custom_widgets.html.twig',
        ], \$environment);
        \$this->renderer = new FormRenderer(\$rendererEngine, \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface')->getMock());
        \$this->registerTwigRuntimeLoader(\$environment, \$this->renderer);
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
", "vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap4HorizontalLayoutTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/FormExtensionBootstrap4HorizontalLayoutTest.php");
    }
}
