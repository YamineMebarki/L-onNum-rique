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

/* vendor/symfony/form/Tests/CompoundFormPerformanceTest.php */
class __TwigTemplate_525f9428ce186b13a98c1f4313067f9d001964a514272143dfa8a69d9c1e5495 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/CompoundFormPerformanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/CompoundFormPerformanceTest.php"));

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

namespace Symfony\\Component\\Form\\Tests;

use Symfony\\Component\\Form\\Test\\FormPerformanceTestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CompoundFormPerformanceTest extends FormPerformanceTestCase
{
    /**
     * Create a compound form multiple times, as happens in a collection form.
     *
     * @group benchmark
     */
    public function testArrayBasedForm()
    {
        \$this->setMaxRunningTime(1);

        for (\$i = 0; \$i < 40; ++\$i) {
            \$form = \$this->factory->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType')
                ->add('firstName', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
                ->add('lastName', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
                ->add('color', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', [
                    'choices' => ['red' => 'Red', 'blue' => 'Blue'],
                    'required' => false,
                ])
                ->add('age', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType')
                ->add('birthDate', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType')
                ->add('city', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', [
                    // simulate 300 different cities
                    'choices' => range(1, 300),
                ])
                ->getForm();

            // load the form into a view
            \$form->createView();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/CompoundFormPerformanceTest.php";
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

namespace Symfony\\Component\\Form\\Tests;

use Symfony\\Component\\Form\\Test\\FormPerformanceTestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CompoundFormPerformanceTest extends FormPerformanceTestCase
{
    /**
     * Create a compound form multiple times, as happens in a collection form.
     *
     * @group benchmark
     */
    public function testArrayBasedForm()
    {
        \$this->setMaxRunningTime(1);

        for (\$i = 0; \$i < 40; ++\$i) {
            \$form = \$this->factory->createBuilder('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType')
                ->add('firstName', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
                ->add('lastName', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
                ->add('color', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', [
                    'choices' => ['red' => 'Red', 'blue' => 'Blue'],
                    'required' => false,
                ])
                ->add('age', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType')
                ->add('birthDate', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType')
                ->add('city', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', [
                    // simulate 300 different cities
                    'choices' => range(1, 300),
                ])
                ->getForm();

            // load the form into a view
            \$form->createView();
        }
    }
}
", "vendor/symfony/form/Tests/CompoundFormPerformanceTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/CompoundFormPerformanceTest.php");
    }
}
