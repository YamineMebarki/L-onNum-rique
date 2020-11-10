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

/* vendor/symfony/mime/Tests/Part/MessagePartTest.php */
class __TwigTemplate_90cba1a7f2b567acbd376b6e37da49a53838fecd80cdf94d1b575378dfebb483 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/MessagePartTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/MessagePartTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests\\Part;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Email;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Header\\ParameterizedHeader;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;
use Symfony\\Component\\Mime\\Part\\MessagePart;

class MessagePartTest extends TestCase
{
    public function testConstructor()
    {
        \$p = new MessagePart((new Email())->from('fabien@symfony.com')->text('content'));
        \$this->assertStringContainsString('content', \$p->getBody());
        \$this->assertStringContainsString('content', \$p->bodyToString());
        \$this->assertStringContainsString('content', implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('message', \$p->getMediaType());
        \$this->assertEquals('rfc822', \$p->getMediaSubType());
    }

    public function testHeaders()
    {
        \$p = new MessagePart((new Email())->from('fabien@symfony.com')->text('content')->subject('Subject'));
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'message/rfc822', ['name' => 'Subject.eml']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'Subject.eml', 'filename' => 'Subject.eml'])
        ), \$p->getPreparedHeaders());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Part/MessagePartTest.php";
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

namespace Symfony\\Component\\Mime\\Tests\\Part;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Email;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Header\\ParameterizedHeader;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;
use Symfony\\Component\\Mime\\Part\\MessagePart;

class MessagePartTest extends TestCase
{
    public function testConstructor()
    {
        \$p = new MessagePart((new Email())->from('fabien@symfony.com')->text('content'));
        \$this->assertStringContainsString('content', \$p->getBody());
        \$this->assertStringContainsString('content', \$p->bodyToString());
        \$this->assertStringContainsString('content', implode('', iterator_to_array(\$p->bodyToIterable())));
        \$this->assertEquals('message', \$p->getMediaType());
        \$this->assertEquals('rfc822', \$p->getMediaSubType());
    }

    public function testHeaders()
    {
        \$p = new MessagePart((new Email())->from('fabien@symfony.com')->text('content')->subject('Subject'));
        \$this->assertEquals(new Headers(
            new ParameterizedHeader('Content-Type', 'message/rfc822', ['name' => 'Subject.eml']),
            new UnstructuredHeader('Content-Transfer-Encoding', 'base64'),
            new ParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'Subject.eml', 'filename' => 'Subject.eml'])
        ), \$p->getPreparedHeaders());
    }
}
", "vendor/symfony/mime/Tests/Part/MessagePartTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Part/MessagePartTest.php");
    }
}
