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

/* vendor/symfony/mime/Tests/MimeTypesTest.php */
class __TwigTemplate_4937fbc388a4a044ef7823b2a27bbafedb83eaeacf0c768bc8474575efa950dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/MimeTypesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/MimeTypesTest.php"));

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

use Symfony\\Component\\Mime\\Exception\\RuntimeException;
use Symfony\\Component\\Mime\\MimeTypeGuesserInterface;
use Symfony\\Component\\Mime\\MimeTypes;

/**
 * @requires extension fileinfo
 */
class MimeTypesTest extends AbstractMimeTypeGuesserTest
{
    protected function getGuesser(): MimeTypeGuesserInterface
    {
        return new MimeTypes();
    }

    public function testUnsupportedGuesser()
    {
        \$guesser = \$this->getGuesser();
        \$guesser->registerGuesser(new class() implements MimeTypeGuesserInterface {
            public function isGuesserSupported(): bool
            {
                return false;
            }

            public function guessMimeType(string \$mimeType): ?string
            {
                throw new RuntimeException('Should never be called.');
            }
        });
        \$this->assertEquals('image/gif', \$guesser->guessMimeType(__DIR__.'/Fixtures/mimetypes/test'));
    }

    public function testGetExtensions()
    {
        \$mt = new MimeTypes();
        \$this->assertSame(['mbox'], \$mt->getExtensions('application/mbox'));
        \$this->assertSame(['ai', 'eps', 'ps'], \$mt->getExtensions('application/postscript'));
        \$this->assertSame([], \$mt->getExtensions('application/whatever-symfony'));
    }

    public function testGetMimeTypes()
    {
        \$mt = new MimeTypes();
        \$this->assertSame(['application/mbox'], \$mt->getMimeTypes('mbox'));
        \$this->assertContains('application/postscript', \$mt->getMimeTypes('ai'));
        \$this->assertContains('application/postscript', \$mt->getMimeTypes('ps'));
        \$this->assertSame([], \$mt->getMimeTypes('symfony'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/MimeTypesTest.php";
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

use Symfony\\Component\\Mime\\Exception\\RuntimeException;
use Symfony\\Component\\Mime\\MimeTypeGuesserInterface;
use Symfony\\Component\\Mime\\MimeTypes;

/**
 * @requires extension fileinfo
 */
class MimeTypesTest extends AbstractMimeTypeGuesserTest
{
    protected function getGuesser(): MimeTypeGuesserInterface
    {
        return new MimeTypes();
    }

    public function testUnsupportedGuesser()
    {
        \$guesser = \$this->getGuesser();
        \$guesser->registerGuesser(new class() implements MimeTypeGuesserInterface {
            public function isGuesserSupported(): bool
            {
                return false;
            }

            public function guessMimeType(string \$mimeType): ?string
            {
                throw new RuntimeException('Should never be called.');
            }
        });
        \$this->assertEquals('image/gif', \$guesser->guessMimeType(__DIR__.'/Fixtures/mimetypes/test'));
    }

    public function testGetExtensions()
    {
        \$mt = new MimeTypes();
        \$this->assertSame(['mbox'], \$mt->getExtensions('application/mbox'));
        \$this->assertSame(['ai', 'eps', 'ps'], \$mt->getExtensions('application/postscript'));
        \$this->assertSame([], \$mt->getExtensions('application/whatever-symfony'));
    }

    public function testGetMimeTypes()
    {
        \$mt = new MimeTypes();
        \$this->assertSame(['application/mbox'], \$mt->getMimeTypes('mbox'));
        \$this->assertContains('application/postscript', \$mt->getMimeTypes('ai'));
        \$this->assertContains('application/postscript', \$mt->getMimeTypes('ps'));
        \$this->assertSame([], \$mt->getMimeTypes('symfony'));
    }
}
", "vendor/symfony/mime/Tests/MimeTypesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/MimeTypesTest.php");
    }
}
