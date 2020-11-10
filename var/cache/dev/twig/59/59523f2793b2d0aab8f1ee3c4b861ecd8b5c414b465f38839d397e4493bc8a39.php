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

/* vendor/symfony/form/Tests/FormErrorIteratorTest.php */
class __TwigTemplate_8605248fe1be0794fddfd63882b24d8d99e42a3d144b3234b0b1902c02770c92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/FormErrorIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/FormErrorIteratorTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormErrorIterator;
use Symfony\\Component\\Validator\\ConstraintViolation;

class FormErrorIteratorTest extends TestCase
{
    /**
     * @dataProvider findByCodesProvider
     */
    public function testFindByCodes(\$code, \$violationsCount)
    {
        if (!class_exists(ConstraintViolation::class)) {
            \$this->markTestSkipped('Validator component required.');
        }

        \$formBuilder = new FormBuilder(
            'form',
            null,
            new EventDispatcher(),
            \$this->getMockBuilder('Symfony\\Component\\Form\\FormFactoryInterface')->getMock(),
            []
        );

        \$form = \$formBuilder->getForm();

        \$cause = new ConstraintViolation('Error 1!', null, [], null, '', null, null, 'code1');
        \$form->addError(new FormError('Error 1!', null, [], null, \$cause));
        \$cause = new ConstraintViolation('Error 2!', null, [], null, '', null, null, 'code1');
        \$form->addError(new FormError('Error 2!', null, [], null, \$cause));
        \$cause = new ConstraintViolation('Error 3!', null, [], null, '', null, null, 'code2');
        \$form->addError(new FormError('Error 3!', null, [], null, \$cause));
        \$formErrors = \$form->getErrors();

        \$specificFormErrors = \$formErrors->findByCodes(\$code);
        \$this->assertInstanceOf(FormErrorIterator::class, \$specificFormErrors);
        \$this->assertCount(\$violationsCount, \$specificFormErrors);
    }

    public function findByCodesProvider()
    {
        return [
            ['code1', 2],
            [['code1', 'code2'], 3],
            ['code3', 0],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/FormErrorIteratorTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormErrorIterator;
use Symfony\\Component\\Validator\\ConstraintViolation;

class FormErrorIteratorTest extends TestCase
{
    /**
     * @dataProvider findByCodesProvider
     */
    public function testFindByCodes(\$code, \$violationsCount)
    {
        if (!class_exists(ConstraintViolation::class)) {
            \$this->markTestSkipped('Validator component required.');
        }

        \$formBuilder = new FormBuilder(
            'form',
            null,
            new EventDispatcher(),
            \$this->getMockBuilder('Symfony\\Component\\Form\\FormFactoryInterface')->getMock(),
            []
        );

        \$form = \$formBuilder->getForm();

        \$cause = new ConstraintViolation('Error 1!', null, [], null, '', null, null, 'code1');
        \$form->addError(new FormError('Error 1!', null, [], null, \$cause));
        \$cause = new ConstraintViolation('Error 2!', null, [], null, '', null, null, 'code1');
        \$form->addError(new FormError('Error 2!', null, [], null, \$cause));
        \$cause = new ConstraintViolation('Error 3!', null, [], null, '', null, null, 'code2');
        \$form->addError(new FormError('Error 3!', null, [], null, \$cause));
        \$formErrors = \$form->getErrors();

        \$specificFormErrors = \$formErrors->findByCodes(\$code);
        \$this->assertInstanceOf(FormErrorIterator::class, \$specificFormErrors);
        \$this->assertCount(\$violationsCount, \$specificFormErrors);
    }

    public function findByCodesProvider()
    {
        return [
            ['code1', 2],
            [['code1', 'code2'], 3],
            ['code3', 0],
        ];
    }
}
", "vendor/symfony/form/Tests/FormErrorIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/FormErrorIteratorTest.php");
    }
}
