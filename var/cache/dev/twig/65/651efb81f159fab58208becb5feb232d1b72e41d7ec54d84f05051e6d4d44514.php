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

/* vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap4HorizontalLayoutTest.php */
class __TwigTemplate_fea834ee542b41a667050c2843da94914a7ebb1214a7ae4dad0c8a4095c93d1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap4HorizontalLayoutTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap4HorizontalLayoutTest.php"));

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

use Symfony\\Component\\Form\\FormError;

/**
 * Abstract class providing test cases for the Bootstrap 4 horizontal Twig form theme.
 *
 * @author Hidde Wieringa <hidde@hiddewieringa.nl>
 */
abstract class AbstractBootstrap4HorizontalLayoutTest extends AbstractBootstrap4LayoutTest
{
    public function testRow()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
        \$form->addError(new FormError('[trans]Error![/trans]'));
        \$view = \$form->createView();
        \$html = \$this->renderRow(\$view);

        \$this->assertMatchesXpath(\$html,
            '/div
    [
        ./label[@for=\"name\"]
        [
            ./span[@class=\"alert alert-danger d-block\"]
                [./span[@class=\"d-block\"]
                    [./span[.=\"[trans]Error[/trans]\"]]
                    [./span[.=\"[trans]Error![/trans]\"]]
                ]
                [count(./span)=1]
        ]
        /following-sibling::div[./input[@id=\"name\"]]
    ]
'
        );
    }

    public function testLabelOnForm()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType');
        \$view = \$form->createView();
        \$this->renderWidget(\$view, ['label' => 'foo']);
        \$html = \$this->renderLabel(\$view);

        \$this->assertMatchesXpath(\$html,
'/legend
    [@class=\"col-form-label col-sm-2 col-form-label required\"]
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
    [@class=\"col-form-label col-sm-2 required\"]
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
    [@class=\"my&class col-form-label col-sm-2 required\"]
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
    [@class=\"my&class col-form-label col-sm-2 required\"]
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
    [@class=\"my&class col-form-label col-sm-2 required\"]
    [.=\"[trans]Custom label[/trans]\"]
'
        );
    }

    public function testLegendOnExpandedType()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', null, [
            'label' => 'Custom label',
            'expanded' => true,
            'choices' => ['Choice&A' => '&a', 'Choice&B' => '&b'],
        ]);
        \$view = \$form->createView();
        \$this->renderWidget(\$view);
        \$html = \$this->renderLabel(\$view);

        \$this->assertMatchesXpath(\$html,
'/legend
    [@class=\"col-sm-2 col-form-label required\"]
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

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\">', \$html);
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

        \$this->assertSame('<form name=\"form\" method=\"post\" action=\"http://foo.com/directory\">', \$html);
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

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" enctype=\"multipart/form-data\">', \$html);
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

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" class=\"foobar\">', \$html);
    }

    public function testCheckboxRow()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType');
        \$view = \$form->createView();
        \$html = \$this->renderRow(\$view, ['label' => 'foo']);

        \$this->assertMatchesXpath(\$html, '/div[@class=\"form-group row\"]/div[@class=\"col-sm-2\" or @class=\"col-sm-10\"]', 2);
    }

    public function testCheckboxRowWithHelp()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType');
        \$view = \$form->createView();
        \$html = \$this->renderRow(\$view, ['label' => 'foo', 'help' => 'really helpful text']);

        \$this->assertMatchesXpath(\$html,
'/div
    [@class=\"form-group row\"]
    [
        ./div[@class=\"col-sm-2\" or @class=\"col-sm-10\"]
        /following-sibling::div[@class=\"col-sm-2\" or @class=\"col-sm-10\"]
        [
            ./small[text() = \"[trans]really helpful text[/trans]\"]
        ]
    ]
'
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap4HorizontalLayoutTest.php";
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

use Symfony\\Component\\Form\\FormError;

/**
 * Abstract class providing test cases for the Bootstrap 4 horizontal Twig form theme.
 *
 * @author Hidde Wieringa <hidde@hiddewieringa.nl>
 */
abstract class AbstractBootstrap4HorizontalLayoutTest extends AbstractBootstrap4LayoutTest
{
    public function testRow()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
        \$form->addError(new FormError('[trans]Error![/trans]'));
        \$view = \$form->createView();
        \$html = \$this->renderRow(\$view);

        \$this->assertMatchesXpath(\$html,
            '/div
    [
        ./label[@for=\"name\"]
        [
            ./span[@class=\"alert alert-danger d-block\"]
                [./span[@class=\"d-block\"]
                    [./span[.=\"[trans]Error[/trans]\"]]
                    [./span[.=\"[trans]Error![/trans]\"]]
                ]
                [count(./span)=1]
        ]
        /following-sibling::div[./input[@id=\"name\"]]
    ]
'
        );
    }

    public function testLabelOnForm()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType');
        \$view = \$form->createView();
        \$this->renderWidget(\$view, ['label' => 'foo']);
        \$html = \$this->renderLabel(\$view);

        \$this->assertMatchesXpath(\$html,
'/legend
    [@class=\"col-form-label col-sm-2 col-form-label required\"]
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
    [@class=\"col-form-label col-sm-2 required\"]
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
    [@class=\"my&class col-form-label col-sm-2 required\"]
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
    [@class=\"my&class col-form-label col-sm-2 required\"]
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
    [@class=\"my&class col-form-label col-sm-2 required\"]
    [.=\"[trans]Custom label[/trans]\"]
'
        );
    }

    public function testLegendOnExpandedType()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', null, [
            'label' => 'Custom label',
            'expanded' => true,
            'choices' => ['Choice&A' => '&a', 'Choice&B' => '&b'],
        ]);
        \$view = \$form->createView();
        \$this->renderWidget(\$view);
        \$html = \$this->renderLabel(\$view);

        \$this->assertMatchesXpath(\$html,
'/legend
    [@class=\"col-sm-2 col-form-label required\"]
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

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\">', \$html);
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

        \$this->assertSame('<form name=\"form\" method=\"post\" action=\"http://foo.com/directory\">', \$html);
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

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" enctype=\"multipart/form-data\">', \$html);
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

        \$this->assertSame('<form name=\"form\" method=\"get\" action=\"http://example.com/directory\" class=\"foobar\">', \$html);
    }

    public function testCheckboxRow()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType');
        \$view = \$form->createView();
        \$html = \$this->renderRow(\$view, ['label' => 'foo']);

        \$this->assertMatchesXpath(\$html, '/div[@class=\"form-group row\"]/div[@class=\"col-sm-2\" or @class=\"col-sm-10\"]', 2);
    }

    public function testCheckboxRowWithHelp()
    {
        \$form = \$this->factory->createNamed('name', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType');
        \$view = \$form->createView();
        \$html = \$this->renderRow(\$view, ['label' => 'foo', 'help' => 'really helpful text']);

        \$this->assertMatchesXpath(\$html,
'/div
    [@class=\"form-group row\"]
    [
        ./div[@class=\"col-sm-2\" or @class=\"col-sm-10\"]
        /following-sibling::div[@class=\"col-sm-2\" or @class=\"col-sm-10\"]
        [
            ./small[text() = \"[trans]really helpful text[/trans]\"]
        ]
    ]
'
        );
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap4HorizontalLayoutTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/AbstractBootstrap4HorizontalLayoutTest.php");
    }
}
