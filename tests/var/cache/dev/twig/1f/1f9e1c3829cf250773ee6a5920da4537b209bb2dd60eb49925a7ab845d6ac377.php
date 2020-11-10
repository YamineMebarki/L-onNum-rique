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

/* vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap3HorizontalLayoutTest.php */
class __TwigTemplate_30e1f6b27aedaff75d7888e3bce47630a063a912a1ae48f2396d7ee9681bd4f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap3HorizontalLayoutTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap3HorizontalLayoutTest.php"));

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

abstract class AbstractBootstrap3HorizontalLayoutTest extends AbstractBootstrap3LayoutTest
{
    public function testLabelOnForm()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType');
        \$view = \$form->createView();
        \$this->renderWidget(\$view, ['label' => 'foo']);
        \$html = \$this->renderLabel(\$view);

        \$this->assertMatchesXpath(\$html,
'/label
    [@class=\"col-sm-2 control-label required\"]
    [.=\"[trans]Name[/trans]\"]
'
        );
    }

    public function testLabelDoesNotRenderFieldAttributes()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
        \$html = \$this->renderLabel(\$form->createView(), null, [
            'attr' => [
                'class' => 'my&class',
            ],
        ]);

        \$this->assertMatchesXpath(\$html,
'/label
    [@for=\"name\"]
    [@class=\"col-sm-2 control-label required\"]
'
        );
    }

    public function testLabelWithCustomAttributesPassedDirectly()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
        \$html = \$this->renderLabel(\$form->createView(), null, [
            'label_attr' => [
                'class' => 'my&class',
            ],
        ]);

        \$this->assertMatchesXpath(\$html,
'/label
    [@for=\"name\"]
    [@class=\"my&class col-sm-2 control-label required\"]
'
        );
    }

    public function testLabelWithCustomTextAndCustomAttributesPassedDirectly()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
        \$html = \$this->renderLabel(\$form->createView(), 'Custom label', [
            'label_attr' => [
                'class' => 'my&class',
            ],
        ]);

        \$this->assertMatchesXpath(\$html,
'/label
    [@for=\"name\"]
    [@class=\"my&class col-sm-2 control-label required\"]
    [.=\"[trans]Custom label[/trans]\"]
'
        );
    }

    public function testLabelWithCustomTextAsOptionAndCustomAttributesPassedDirectly()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', null, [
            'label' => 'Custom label',
        ]);
        \$html = \$this->renderLabel(\$form->createView(), null, [
            'label_attr' => [
                'class' => 'my&class',
            ],
        ]);

        \$this->assertMatchesXpath(\$html,
'/label
    [@for=\"name\"]
    [@class=\"my&class col-sm-2 control-label required\"]
    [.=\"[trans]Custom label[/trans]\"]
'
        );
    }

    public function testStartTag()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'get',
            'action' => 'http://example.com/directory',
        ]);

        \$html = \$this->renderStart(\$form->createView());

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" class=\"form-horizontal\">', \$html);
    }

    public function testStartTagWithOverriddenVars()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'put',
            'action' => 'http://example.com/directory',
        ]);

        \$html = \$this->renderStart(\$form->createView(), [
            'method' => 'post',
            'action' => 'http://foo.com/directory',
        ]);

        \$this->assertSame('<form name=\"form\" method=\"post\" action=\"http://foo.com/directory\" class=\"form-horizontal\">', \$html);
    }

    public function testStartTagForMultipartForm()
    {
        \$form = \$this->factory->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'method' => 'get',
                'action' => 'http://example.com/directory',
            ])
            ->add('file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType')
            ->getForm();

        \$html = \$this->renderStart(\$form->createView());

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" class=\"form-horizontal\" enctype=\"multipart/form-data\">', \$html);
    }

    public function testStartTagWithExtraAttributes()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'get',
            'action' => 'http://example.com/directory',
        ]);

        \$html = \$this->renderStart(\$form->createView(), [
            'attr' => ['class' => 'foobar'],
        ]);

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" class=\"foobar form-horizontal\">', \$html);
    }

    public function testCheckboxRow()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType');
        \$view = \$form->createView();
        \$html = \$this->renderRow(\$view, ['label' => 'foo']);

        \$this->assertMatchesXpath(\$html, '/div[@class=\"form-group\"]/div[@class=\"col-sm-2\" or @class=\"col-sm-10\"]', 2);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap3HorizontalLayoutTest.php";
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

abstract class AbstractBootstrap3HorizontalLayoutTest extends AbstractBootstrap3LayoutTest
{
    public function testLabelOnForm()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType');
        \$view = \$form->createView();
        \$this->renderWidget(\$view, ['label' => 'foo']);
        \$html = \$this->renderLabel(\$view);

        \$this->assertMatchesXpath(\$html,
'/label
    [@class=\"col-sm-2 control-label required\"]
    [.=\"[trans]Name[/trans]\"]
'
        );
    }

    public function testLabelDoesNotRenderFieldAttributes()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
        \$html = \$this->renderLabel(\$form->createView(), null, [
            'attr' => [
                'class' => 'my&class',
            ],
        ]);

        \$this->assertMatchesXpath(\$html,
'/label
    [@for=\"name\"]
    [@class=\"col-sm-2 control-label required\"]
'
        );
    }

    public function testLabelWithCustomAttributesPassedDirectly()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
        \$html = \$this->renderLabel(\$form->createView(), null, [
            'label_attr' => [
                'class' => 'my&class',
            ],
        ]);

        \$this->assertMatchesXpath(\$html,
'/label
    [@for=\"name\"]
    [@class=\"my&class col-sm-2 control-label required\"]
'
        );
    }

    public function testLabelWithCustomTextAndCustomAttributesPassedDirectly()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
        \$html = \$this->renderLabel(\$form->createView(), 'Custom label', [
            'label_attr' => [
                'class' => 'my&class',
            ],
        ]);

        \$this->assertMatchesXpath(\$html,
'/label
    [@for=\"name\"]
    [@class=\"my&class col-sm-2 control-label required\"]
    [.=\"[trans]Custom label[/trans]\"]
'
        );
    }

    public function testLabelWithCustomTextAsOptionAndCustomAttributesPassedDirectly()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', null, [
            'label' => 'Custom label',
        ]);
        \$html = \$this->renderLabel(\$form->createView(), null, [
            'label_attr' => [
                'class' => 'my&class',
            ],
        ]);

        \$this->assertMatchesXpath(\$html,
'/label
    [@for=\"name\"]
    [@class=\"my&class col-sm-2 control-label required\"]
    [.=\"[trans]Custom label[/trans]\"]
'
        );
    }

    public function testStartTag()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'get',
            'action' => 'http://example.com/directory',
        ]);

        \$html = \$this->renderStart(\$form->createView());

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" class=\"form-horizontal\">', \$html);
    }

    public function testStartTagWithOverriddenVars()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'put',
            'action' => 'http://example.com/directory',
        ]);

        \$html = \$this->renderStart(\$form->createView(), [
            'method' => 'post',
            'action' => 'http://foo.com/directory',
        ]);

        \$this->assertSame('<form name=\"form\" method=\"post\" action=\"http://foo.com/directory\" class=\"form-horizontal\">', \$html);
    }

    public function testStartTagForMultipartForm()
    {
        \$form = \$this->factory->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
                'method' => 'get',
                'action' => 'http://example.com/directory',
            ])
            ->add('file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType')
            ->getForm();

        \$html = \$this->renderStart(\$form->createView());

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" class=\"form-horizontal\" enctype=\"multipart/form-data\">', \$html);
    }

    public function testStartTagWithExtraAttributes()
    {
        \$form = \$this->factory->create('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', null, [
            'method' => 'get',
            'action' => 'http://example.com/directory',
        ]);

        \$html = \$this->renderStart(\$form->createView(), [
            'attr' => ['class' => 'foobar'],
        ]);

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" class=\"foobar form-horizontal\">', \$html);
    }

    public function testCheckboxRow()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType');
        \$view = \$form->createView();
        \$html = \$this->renderRow(\$view, ['label' => 'foo']);

        \$this->assertMatchesXpath(\$html, '/div[@class=\"form-group\"]/div[@class=\"col-sm-2\" or @class=\"col-sm-10\"]', 2);
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap3HorizontalLayoutTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap3HorizontalLayoutTest.php");
    }
}
