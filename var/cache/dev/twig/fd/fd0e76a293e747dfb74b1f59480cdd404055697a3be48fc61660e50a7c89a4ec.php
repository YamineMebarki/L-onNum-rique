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

/* vendor/symfony/mime/Tests/MessageConverterTest.php */
class __TwigTemplate_0c44223ce4f3ce6fca2a1a11e08a9955b571e3150effd5f6c2dc2dd6560b4453 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/MessageConverterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/MessageConverterTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Email;
use Symfony\\Component\\Mime\\Message;
use Symfony\\Component\\Mime\\MessageConverter;

class MessageConverterTest extends TestCase
{
    public function testToEmail()
    {
        \$file = file_get_contents(__DIR__.'/Fixtures/mimetypes/test.gif');
        \$email = (new Email())->from('fabien@symfony.com');
        \$this->assertSame(\$email, MessageConverter::toEmail(\$email));

        \$this->assertConversion((clone \$email)->text('text content'));
        \$this->assertConversion((clone \$email)->html('HTML content <images src=\"cid:test.jpg\" />'));
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->html('HTML content <images src=\"cid:test.jpg\" />')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->embed(\$file, 'test.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->attach(\$file, 'test_attached.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->embed(\$file, 'test.jpg', 'image/gif')
            ->attach(\$file, 'test_attached.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->attach(\$file, 'test_attached.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->attach(\$file, 'test_attached.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->embed(\$file, 'test.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->embed(\$file, 'test_attached.jpg', 'image/gif')
        );
    }

    private function assertConversion(Email \$expected)
    {
        \$r = new \\ReflectionMethod(\$expected, 'generateBody');
        \$r->setAccessible(true);

        \$message = new Message(\$expected->getHeaders(), \$r->invoke(\$expected));
        \$converted = MessageConverter::toEmail(\$message);
        if (\$expected->getHtmlBody()) {
            \$this->assertStringMatchesFormat(str_replace('cid:test.jpg', 'cid:%s', \$expected->getHtmlBody()), \$converted->getHtmlBody());
            \$expected->html('HTML content');
            \$converted->html('HTML content');
        }
        \$this->assertEquals(\$expected, \$converted);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/MessageConverterTest.php";
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

namespace Symfony\\Component\\Mime\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Email;
use Symfony\\Component\\Mime\\Message;
use Symfony\\Component\\Mime\\MessageConverter;

class MessageConverterTest extends TestCase
{
    public function testToEmail()
    {
        \$file = file_get_contents(__DIR__.'/Fixtures/mimetypes/test.gif');
        \$email = (new Email())->from('fabien@symfony.com');
        \$this->assertSame(\$email, MessageConverter::toEmail(\$email));

        \$this->assertConversion((clone \$email)->text('text content'));
        \$this->assertConversion((clone \$email)->html('HTML content <images src=\"cid:test.jpg\" />'));
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->html('HTML content <images src=\"cid:test.jpg\" />')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->embed(\$file, 'test.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->attach(\$file, 'test_attached.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->embed(\$file, 'test.jpg', 'image/gif')
            ->attach(\$file, 'test_attached.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->attach(\$file, 'test_attached.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->attach(\$file, 'test_attached.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->html('HTML content <images src=\"cid:test.jpg\" />')
            ->embed(\$file, 'test.jpg', 'image/gif')
        );
        \$this->assertConversion((clone \$email)
            ->text('text content')
            ->embed(\$file, 'test_attached.jpg', 'image/gif')
        );
    }

    private function assertConversion(Email \$expected)
    {
        \$r = new \\ReflectionMethod(\$expected, 'generateBody');
        \$r->setAccessible(true);

        \$message = new Message(\$expected->getHeaders(), \$r->invoke(\$expected));
        \$converted = MessageConverter::toEmail(\$message);
        if (\$expected->getHtmlBody()) {
            \$this->assertStringMatchesFormat(str_replace('cid:test.jpg', 'cid:%s', \$expected->getHtmlBody()), \$converted->getHtmlBody());
            \$expected->html('HTML content');
            \$converted->html('HTML content');
        }
        \$this->assertEquals(\$expected, \$converted);
    }
}
", "vendor/symfony/mime/Tests/MessageConverterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/MessageConverterTest.php");
    }
}
