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

/* vendor/symfony/form/Tests/Extension/Csrf/EventListener/CsrfValidationListenerTest.php */
class __TwigTemplate_118be87b2100de7b1e499f3b91da8c73da07b488442d707174ff842b450491f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Csrf/EventListener/CsrfValidationListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Csrf/EventListener/CsrfValidationListenerTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Csrf\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Csrf\\EventListener\\CsrfValidationListener;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManager;

class CsrfValidationListenerTest extends TestCase
{
    protected \$dispatcher;
    protected \$factory;
    protected \$tokenManager;
    protected \$form;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = (new FormFactoryBuilder())->getFormFactory();
        \$this->tokenManager = new CsrfTokenManager();
        \$this->form = \$this->getBuilder()
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
    }

    protected function tearDown(): void
    {
        \$this->dispatcher = null;
        \$this->factory = null;
        \$this->tokenManager = null;
        \$this->form = null;
    }

    protected function getBuilder()
    {
        return new FormBuilder('post', null, \$this->dispatcher, \$this->factory, ['compound' => true]);
    }

    // https://github.com/symfony/symfony/pull/5838
    public function testStringFormData()
    {
        \$data = 'XP4HUzmHPi';
        \$event = new FormEvent(\$this->form, \$data);

        \$validation = new CsrfValidationListener('csrf', \$this->tokenManager, 'unknown', 'Invalid.');
        \$validation->preSubmit(\$event);

        // Validate accordingly
        \$this->assertSame(\$data, \$event->getData());
    }

    public function testArrayCsrfToken()
    {
        \$event = new FormEvent(\$this->form, ['csrf' => []]);

        \$validation = new CsrfValidationListener('csrf', \$this->tokenManager, 'unknown', 'Invalid.');
        \$validation->preSubmit(\$event);

        \$this->assertNotEmpty(\$this->form->getErrors());
    }

    public function testMaxPostSizeExceeded()
    {
        \$serverParams = \$this
            ->getMockBuilder('\\Symfony\\Component\\Form\\Util\\ServerParams')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        \$serverParams
            ->expects(\$this->once())
            ->method('hasPostMaxSizeBeenExceeded')
            ->willReturn(true)
        ;

        \$event = new FormEvent(\$this->form, ['csrf' => 'token']);
        \$validation = new CsrfValidationListener('csrf', \$this->tokenManager, 'unknown', 'Error message', null, null, \$serverParams);

        \$validation->preSubmit(\$event);
        \$this->assertEmpty(\$this->form->getErrors());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Csrf/EventListener/CsrfValidationListenerTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Csrf\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Csrf\\EventListener\\CsrfValidationListener;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManager;

class CsrfValidationListenerTest extends TestCase
{
    protected \$dispatcher;
    protected \$factory;
    protected \$tokenManager;
    protected \$form;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = (new FormFactoryBuilder())->getFormFactory();
        \$this->tokenManager = new CsrfTokenManager();
        \$this->form = \$this->getBuilder()
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
    }

    protected function tearDown(): void
    {
        \$this->dispatcher = null;
        \$this->factory = null;
        \$this->tokenManager = null;
        \$this->form = null;
    }

    protected function getBuilder()
    {
        return new FormBuilder('post', null, \$this->dispatcher, \$this->factory, ['compound' => true]);
    }

    // https://github.com/symfony/symfony/pull/5838
    public function testStringFormData()
    {
        \$data = 'XP4HUzmHPi';
        \$event = new FormEvent(\$this->form, \$data);

        \$validation = new CsrfValidationListener('csrf', \$this->tokenManager, 'unknown', 'Invalid.');
        \$validation->preSubmit(\$event);

        // Validate accordingly
        \$this->assertSame(\$data, \$event->getData());
    }

    public function testArrayCsrfToken()
    {
        \$event = new FormEvent(\$this->form, ['csrf' => []]);

        \$validation = new CsrfValidationListener('csrf', \$this->tokenManager, 'unknown', 'Invalid.');
        \$validation->preSubmit(\$event);

        \$this->assertNotEmpty(\$this->form->getErrors());
    }

    public function testMaxPostSizeExceeded()
    {
        \$serverParams = \$this
            ->getMockBuilder('\\Symfony\\Component\\Form\\Util\\ServerParams')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        \$serverParams
            ->expects(\$this->once())
            ->method('hasPostMaxSizeBeenExceeded')
            ->willReturn(true)
        ;

        \$event = new FormEvent(\$this->form, ['csrf' => 'token']);
        \$validation = new CsrfValidationListener('csrf', \$this->tokenManager, 'unknown', 'Error message', null, null, \$serverParams);

        \$validation->preSubmit(\$event);
        \$this->assertEmpty(\$this->form->getErrors());
    }
}
", "vendor/symfony/form/Tests/Extension/Csrf/EventListener/CsrfValidationListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Csrf/EventListener/CsrfValidationListenerTest.php");
    }
}
