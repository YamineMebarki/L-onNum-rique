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

/* vendor/symfony/framework-bundle/Tests/Templating/Helper/RequestHelperTest.php */
class __TwigTemplate_83ba281acb5aa470625373e15437e2c270655eb0d93796b2975ecc61cda1d13d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/RequestHelperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/RequestHelperTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @group legacy
 */
class RequestHelperTest extends TestCase
{
    protected \$requestStack;

    protected function setUp(): void
    {
        \$this->requestStack = new RequestStack();
        \$request = new Request();
        \$request->initialize(['foobar' => 'bar']);
        \$this->requestStack->push(\$request);
    }

    public function testGetParameter()
    {
        \$helper = new RequestHelper(\$this->requestStack);

        \$this->assertEquals('bar', \$helper->getParameter('foobar'));
        \$this->assertEquals('foo', \$helper->getParameter('bar', 'foo'));

        \$this->assertNull(\$helper->getParameter('foo'));
    }

    public function testGetLocale()
    {
        \$helper = new RequestHelper(\$this->requestStack);

        \$this->assertEquals('en', \$helper->getLocale());
    }

    public function testGetName()
    {
        \$helper = new RequestHelper(\$this->requestStack);

        \$this->assertEquals('request', \$helper->getName());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/Helper/RequestHelperTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @group legacy
 */
class RequestHelperTest extends TestCase
{
    protected \$requestStack;

    protected function setUp(): void
    {
        \$this->requestStack = new RequestStack();
        \$request = new Request();
        \$request->initialize(['foobar' => 'bar']);
        \$this->requestStack->push(\$request);
    }

    public function testGetParameter()
    {
        \$helper = new RequestHelper(\$this->requestStack);

        \$this->assertEquals('bar', \$helper->getParameter('foobar'));
        \$this->assertEquals('foo', \$helper->getParameter('bar', 'foo'));

        \$this->assertNull(\$helper->getParameter('foo'));
    }

    public function testGetLocale()
    {
        \$helper = new RequestHelper(\$this->requestStack);

        \$this->assertEquals('en', \$helper->getLocale());
    }

    public function testGetName()
    {
        \$helper = new RequestHelper(\$this->requestStack);

        \$this->assertEquals('request', \$helper->getName());
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/Helper/RequestHelperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/Helper/RequestHelperTest.php");
    }
}
