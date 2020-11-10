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

/* vendor/symfony/twig-bridge/Tests/Mime/RendererTest.php */
class __TwigTemplate_cc9cce767580be1f492aa41b15ef07a1e092130b52cddbb00345d2d0bf1b547c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Mime/RendererTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Mime/RendererTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Mime;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Mime\\BodyRenderer;
use Symfony\\Bridge\\Twig\\Mime\\TemplatedEmail;
use Symfony\\Component\\Mime\\Part\\Multipart\\AlternativePart;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class RendererTest extends TestCase
{
    public function testRenderTextOnly(): void
    {
        \$email = \$this->prepareEmail('Text', null);
        \$this->assertEquals('Text', \$email->getBody()->bodyToString());
    }

    public function testRenderHtmlOnly(): void
    {
        \$email = \$this->prepareEmail(null, '<b>HTML</b>');
        \$body = \$email->getBody();
        \$this->assertInstanceOf(AlternativePart::class, \$body);
        \$this->assertEquals('HTML', \$body->getParts()[0]->bodyToString());
        \$this->assertEquals('<b>HTML</b>', \$body->getParts()[1]->bodyToString());
    }

    public function testRenderHtmlOnlyWithTextSet(): void
    {
        \$email = \$this->prepareEmail(null, '<b>HTML</b>');
        \$email->text('Text');
        \$body = \$email->getBody();
        \$this->assertInstanceOf(AlternativePart::class, \$body);
        \$this->assertEquals('Text', \$body->getParts()[0]->bodyToString());
        \$this->assertEquals('<b>HTML</b>', \$body->getParts()[1]->bodyToString());
    }

    public function testRenderTextAndHtml(): void
    {
        \$email = \$this->prepareEmail('Text', '<b>HTML</b>');
        \$body = \$email->getBody();
        \$this->assertInstanceOf(AlternativePart::class, \$body);
        \$this->assertEquals('Text', \$body->getParts()[0]->bodyToString());
        \$this->assertEquals('<b>HTML</b>', \$body->getParts()[1]->bodyToString());
    }

    private function prepareEmail(?string \$text, ?string \$html): TemplatedEmail
    {
        \$twig = new Environment(new ArrayLoader([
            'text' => \$text,
            'html' => \$html,
            'document.txt' => 'Some text document...',
            'image.jpg' => 'Some image data',
        ]));
        \$renderer = new BodyRenderer(\$twig);
        \$email = (new TemplatedEmail())->to('fabien@symfony.com')->from('helene@symfony.com');
        if (null !== \$text) {
            \$email->textTemplate('text');
        }
        if (null !== \$html) {
            \$email->htmlTemplate('html');
        }
        \$renderer->render(\$email);

        return \$email;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Mime/RendererTest.php";
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

namespace Symfony\\Bridge\\Twig\\Tests\\Mime;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Mime\\BodyRenderer;
use Symfony\\Bridge\\Twig\\Mime\\TemplatedEmail;
use Symfony\\Component\\Mime\\Part\\Multipart\\AlternativePart;
use Twig\\Environment;
use Twig\\Loader\\ArrayLoader;

class RendererTest extends TestCase
{
    public function testRenderTextOnly(): void
    {
        \$email = \$this->prepareEmail('Text', null);
        \$this->assertEquals('Text', \$email->getBody()->bodyToString());
    }

    public function testRenderHtmlOnly(): void
    {
        \$email = \$this->prepareEmail(null, '<b>HTML</b>');
        \$body = \$email->getBody();
        \$this->assertInstanceOf(AlternativePart::class, \$body);
        \$this->assertEquals('HTML', \$body->getParts()[0]->bodyToString());
        \$this->assertEquals('<b>HTML</b>', \$body->getParts()[1]->bodyToString());
    }

    public function testRenderHtmlOnlyWithTextSet(): void
    {
        \$email = \$this->prepareEmail(null, '<b>HTML</b>');
        \$email->text('Text');
        \$body = \$email->getBody();
        \$this->assertInstanceOf(AlternativePart::class, \$body);
        \$this->assertEquals('Text', \$body->getParts()[0]->bodyToString());
        \$this->assertEquals('<b>HTML</b>', \$body->getParts()[1]->bodyToString());
    }

    public function testRenderTextAndHtml(): void
    {
        \$email = \$this->prepareEmail('Text', '<b>HTML</b>');
        \$body = \$email->getBody();
        \$this->assertInstanceOf(AlternativePart::class, \$body);
        \$this->assertEquals('Text', \$body->getParts()[0]->bodyToString());
        \$this->assertEquals('<b>HTML</b>', \$body->getParts()[1]->bodyToString());
    }

    private function prepareEmail(?string \$text, ?string \$html): TemplatedEmail
    {
        \$twig = new Environment(new ArrayLoader([
            'text' => \$text,
            'html' => \$html,
            'document.txt' => 'Some text document...',
            'image.jpg' => 'Some image data',
        ]));
        \$renderer = new BodyRenderer(\$twig);
        \$email = (new TemplatedEmail())->to('fabien@symfony.com')->from('helene@symfony.com');
        if (null !== \$text) {
            \$email->textTemplate('text');
        }
        if (null !== \$html) {
            \$email->htmlTemplate('html');
        }
        \$renderer->render(\$email);

        return \$email;
    }
}
", "vendor/symfony/twig-bridge/Tests/Mime/RendererTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Mime/RendererTest.php");
    }
}
