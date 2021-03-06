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

/* vendor/symfony/http-foundation/Tests/RequestStackTest.php */
class __TwigTemplate_c28152e930ca56a399dae669e1df380c682a7e8cef54a99f39682717ae4e89b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/RequestStackTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/RequestStackTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class RequestStackTest extends TestCase
{
    public function testGetCurrentRequest()
    {
        \$requestStack = new RequestStack();
        \$this->assertNull(\$requestStack->getCurrentRequest());

        \$request = Request::create('/foo');

        \$requestStack->push(\$request);
        \$this->assertSame(\$request, \$requestStack->getCurrentRequest());

        \$this->assertSame(\$request, \$requestStack->pop());
        \$this->assertNull(\$requestStack->getCurrentRequest());

        \$this->assertNull(\$requestStack->pop());
    }

    public function testGetMasterRequest()
    {
        \$requestStack = new RequestStack();
        \$this->assertNull(\$requestStack->getMasterRequest());

        \$masterRequest = Request::create('/foo');
        \$subRequest = Request::create('/bar');

        \$requestStack->push(\$masterRequest);
        \$requestStack->push(\$subRequest);

        \$this->assertSame(\$masterRequest, \$requestStack->getMasterRequest());
    }

    public function testGetParentRequest()
    {
        \$requestStack = new RequestStack();
        \$this->assertNull(\$requestStack->getParentRequest());

        \$masterRequest = Request::create('/foo');

        \$requestStack->push(\$masterRequest);
        \$this->assertNull(\$requestStack->getParentRequest());

        \$firstSubRequest = Request::create('/bar');

        \$requestStack->push(\$firstSubRequest);
        \$this->assertSame(\$masterRequest, \$requestStack->getParentRequest());

        \$secondSubRequest = Request::create('/baz');

        \$requestStack->push(\$secondSubRequest);
        \$this->assertSame(\$firstSubRequest, \$requestStack->getParentRequest());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/RequestStackTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class RequestStackTest extends TestCase
{
    public function testGetCurrentRequest()
    {
        \$requestStack = new RequestStack();
        \$this->assertNull(\$requestStack->getCurrentRequest());

        \$request = Request::create('/foo');

        \$requestStack->push(\$request);
        \$this->assertSame(\$request, \$requestStack->getCurrentRequest());

        \$this->assertSame(\$request, \$requestStack->pop());
        \$this->assertNull(\$requestStack->getCurrentRequest());

        \$this->assertNull(\$requestStack->pop());
    }

    public function testGetMasterRequest()
    {
        \$requestStack = new RequestStack();
        \$this->assertNull(\$requestStack->getMasterRequest());

        \$masterRequest = Request::create('/foo');
        \$subRequest = Request::create('/bar');

        \$requestStack->push(\$masterRequest);
        \$requestStack->push(\$subRequest);

        \$this->assertSame(\$masterRequest, \$requestStack->getMasterRequest());
    }

    public function testGetParentRequest()
    {
        \$requestStack = new RequestStack();
        \$this->assertNull(\$requestStack->getParentRequest());

        \$masterRequest = Request::create('/foo');

        \$requestStack->push(\$masterRequest);
        \$this->assertNull(\$requestStack->getParentRequest());

        \$firstSubRequest = Request::create('/bar');

        \$requestStack->push(\$firstSubRequest);
        \$this->assertSame(\$masterRequest, \$requestStack->getParentRequest());

        \$secondSubRequest = Request::create('/baz');

        \$requestStack->push(\$secondSubRequest);
        \$this->assertSame(\$firstSubRequest, \$requestStack->getParentRequest());
    }
}
", "vendor/symfony/http-foundation/Tests/RequestStackTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/RequestStackTest.php");
    }
}
