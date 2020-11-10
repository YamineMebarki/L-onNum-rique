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

/* vendor/symfony/form/Tests/Extension/Validator/Util/ServerParamsTest.php */
class __TwigTemplate_5eb26ce87e3150ff23c736b6cc938d9c333a0710e67199f941bfa1dfb1c04a41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Util/ServerParamsTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Util/ServerParamsTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Validator\\Util\\ServerParams;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class ServerParamsTest extends TestCase
{
    public function testGetContentLengthFromSuperglobals()
    {
        \$serverParams = new ServerParams();
        \$this->assertNull(\$serverParams->getContentLength());

        \$_SERVER['CONTENT_LENGTH'] = 1024;

        \$this->assertEquals(1024, \$serverParams->getContentLength());

        unset(\$_SERVER['CONTENT_LENGTH']);
    }

    public function testGetContentLengthFromRequest()
    {
        \$request = Request::create('http://foo', 'GET', [], [], [], ['CONTENT_LENGTH' => 1024]);
        \$requestStack = new RequestStack();
        \$requestStack->push(\$request);
        \$serverParams = new ServerParams(\$requestStack);

        \$this->assertEquals(1024, \$serverParams->getContentLength());
    }

    /** @dataProvider getGetPostMaxSizeTestData */
    public function testGetPostMaxSize(\$size, \$bytes)
    {
        \$serverParams = new DummyServerParams(\$size);

        \$this->assertEquals(\$bytes, \$serverParams->getPostMaxSize());
    }

    public function getGetPostMaxSizeTestData()
    {
        return [
            ['2k', 2048],
            ['2 k', 2048],
            ['8m', 8 * 1024 * 1024],
            ['+2 k', 2048],
            ['+2???k', 2048],
            ['0x10', 16],
            ['0xf', 15],
            ['010', 8],
            ['+0x10 k', 16 * 1024],
            ['1g', 1024 * 1024 * 1024],
            ['-1', -1],
            ['0', 0],
            ['2mk', 2048], // the unit must be the last char, so in this case 'k', not 'm'
        ];
    }
}

class DummyServerParams extends ServerParams
{
    private \$size;

    public function __construct(\$size)
    {
        parent::__construct();

        \$this->size = \$size;
    }

    public function getNormalizedIniPostMaxSize()
    {
        return \$this->size;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Validator/Util/ServerParamsTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Validator\\Util\\ServerParams;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class ServerParamsTest extends TestCase
{
    public function testGetContentLengthFromSuperglobals()
    {
        \$serverParams = new ServerParams();
        \$this->assertNull(\$serverParams->getContentLength());

        \$_SERVER['CONTENT_LENGTH'] = 1024;

        \$this->assertEquals(1024, \$serverParams->getContentLength());

        unset(\$_SERVER['CONTENT_LENGTH']);
    }

    public function testGetContentLengthFromRequest()
    {
        \$request = Request::create('http://foo', 'GET', [], [], [], ['CONTENT_LENGTH' => 1024]);
        \$requestStack = new RequestStack();
        \$requestStack->push(\$request);
        \$serverParams = new ServerParams(\$requestStack);

        \$this->assertEquals(1024, \$serverParams->getContentLength());
    }

    /** @dataProvider getGetPostMaxSizeTestData */
    public function testGetPostMaxSize(\$size, \$bytes)
    {
        \$serverParams = new DummyServerParams(\$size);

        \$this->assertEquals(\$bytes, \$serverParams->getPostMaxSize());
    }

    public function getGetPostMaxSizeTestData()
    {
        return [
            ['2k', 2048],
            ['2 k', 2048],
            ['8m', 8 * 1024 * 1024],
            ['+2 k', 2048],
            ['+2???k', 2048],
            ['0x10', 16],
            ['0xf', 15],
            ['010', 8],
            ['+0x10 k', 16 * 1024],
            ['1g', 1024 * 1024 * 1024],
            ['-1', -1],
            ['0', 0],
            ['2mk', 2048], // the unit must be the last char, so in this case 'k', not 'm'
        ];
    }
}

class DummyServerParams extends ServerParams
{
    private \$size;

    public function __construct(\$size)
    {
        parent::__construct();

        \$this->size = \$size;
    }

    public function getNormalizedIniPostMaxSize()
    {
        return \$this->size;
    }
}
", "vendor/symfony/form/Tests/Extension/Validator/Util/ServerParamsTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Validator/Util/ServerParamsTest.php");
    }
}
