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

/* vendor/symfony/http-kernel/Tests/Debug/FileLinkFormatterTest.php */
class __TwigTemplate_e27fb8a62a0d004586525aee2473f78f22a8655bc40c991d14ed90bafe33ac5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Debug/FileLinkFormatterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Debug/FileLinkFormatterTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

class FileLinkFormatterTest extends TestCase
{
    public function testWhenNoFileLinkFormatAndNoRequest()
    {
        \$sut = new FileLinkFormatter();

        \$this->assertFalse(\$sut->format('/kernel/root/src/my/very/best/file.php', 3));
    }

    public function testWhenFileLinkFormatAndNoRequest()
    {
        \$file = __DIR__.\\DIRECTORY_SEPARATOR.'file.php';

        \$sut = new FileLinkFormatter('debug://open?url=file://%f&line=%l', new RequestStack());

        \$this->assertSame(\"debug://open?url=file://\$file&line=3\", \$sut->format(\$file, 3));
    }

    public function testWhenNoFileLinkFormatAndRequest()
    {
        \$file = __DIR__.\\DIRECTORY_SEPARATOR.'file.php';
        \$requestStack = new RequestStack();
        \$request = new Request();
        \$requestStack->push(\$request);

        \$request->server->set('SERVER_NAME', 'www.example.org');
        \$request->server->set('SERVER_PORT', 80);
        \$request->server->set('SCRIPT_NAME', '/index.php');
        \$request->server->set('SCRIPT_FILENAME', '/public/index.php');
        \$request->server->set('REQUEST_URI', '/index.php/example');

        \$sut = new FileLinkFormatter(null, \$requestStack, __DIR__, '/_profiler/open?file=%f&line=%l#line%l');

        \$this->assertSame('http://www.example.org/_profiler/open?file=file.php&line=3#line3', \$sut->format(\$file, 3));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Debug/FileLinkFormatterTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

class FileLinkFormatterTest extends TestCase
{
    public function testWhenNoFileLinkFormatAndNoRequest()
    {
        \$sut = new FileLinkFormatter();

        \$this->assertFalse(\$sut->format('/kernel/root/src/my/very/best/file.php', 3));
    }

    public function testWhenFileLinkFormatAndNoRequest()
    {
        \$file = __DIR__.\\DIRECTORY_SEPARATOR.'file.php';

        \$sut = new FileLinkFormatter('debug://open?url=file://%f&line=%l', new RequestStack());

        \$this->assertSame(\"debug://open?url=file://\$file&line=3\", \$sut->format(\$file, 3));
    }

    public function testWhenNoFileLinkFormatAndRequest()
    {
        \$file = __DIR__.\\DIRECTORY_SEPARATOR.'file.php';
        \$requestStack = new RequestStack();
        \$request = new Request();
        \$requestStack->push(\$request);

        \$request->server->set('SERVER_NAME', 'www.example.org');
        \$request->server->set('SERVER_PORT', 80);
        \$request->server->set('SCRIPT_NAME', '/index.php');
        \$request->server->set('SCRIPT_FILENAME', '/public/index.php');
        \$request->server->set('REQUEST_URI', '/index.php/example');

        \$sut = new FileLinkFormatter(null, \$requestStack, __DIR__, '/_profiler/open?file=%f&line=%l#line%l');

        \$this->assertSame('http://www.example.org/_profiler/open?file=file.php&line=3#line3', \$sut->format(\$file, 3));
    }
}
", "vendor/symfony/http-kernel/Tests/Debug/FileLinkFormatterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Debug/FileLinkFormatterTest.php");
    }
}
