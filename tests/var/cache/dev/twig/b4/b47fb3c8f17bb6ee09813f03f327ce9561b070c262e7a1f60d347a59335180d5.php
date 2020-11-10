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

/* vendor/symfony/mime/Tests/AbstractMimeTypeGuesserTest.php */
class __TwigTemplate_cfdd83f1a691a16fe934df7e4afde41560d7c228864516b97fc29a2113b0c55f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/AbstractMimeTypeGuesserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/AbstractMimeTypeGuesserTest.php"));

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
use Symfony\\Component\\Mime\\MimeTypeGuesserInterface;

abstract class AbstractMimeTypeGuesserTest extends TestCase
{
    public static function tearDownAfterClass(): void
    {
        \$path = __DIR__.'/Fixtures/mimetypes/to_delete';
        if (file_exists(\$path)) {
            @chmod(\$path, 0666);
            @unlink(\$path);
        }
    }

    abstract protected function getGuesser(): MimeTypeGuesserInterface;

    public function testGuessImageWithoutExtension()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->assertEquals('image/gif', \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/test'));
    }

    public function testGuessImageWithDirectory()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->expectException('\\InvalidArgumentException');
        \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/directory');
    }

    public function testGuessImageWithKnownExtension()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->assertEquals('image/gif', \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/test.gif'));
    }

    public function testGuessFileWithUnknownExtension()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->assertEquals('application/octet-stream', \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/.unknownextension'));
    }

    public function testGuessWithIncorrectPath()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->expectException('\\InvalidArgumentException');
        \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/not_here');
    }

    public function testGuessWithNonReadablePath()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Can not verify chmod operations on Windows');
        }

        if (!getenv('USER') || 'root' === getenv('USER')) {
            \$this->markTestSkipped('This test will fail if run under superuser');
        }

        \$path = __DIR__.'/Fixtures/mimetypes/to_delete';
        touch(\$path);
        @chmod(\$path, 0333);

        if ('0333' == substr(sprintf('%o', fileperms(\$path)), -4)) {
            \$this->expectException('\\InvalidArgumentException');
            \$this->getGuesser()->guessMimeType(\$path);
        } else {
            \$this->markTestSkipped('Can not verify chmod operations, change of file permissions failed');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/AbstractMimeTypeGuesserTest.php";
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
use Symfony\\Component\\Mime\\MimeTypeGuesserInterface;

abstract class AbstractMimeTypeGuesserTest extends TestCase
{
    public static function tearDownAfterClass(): void
    {
        \$path = __DIR__.'/Fixtures/mimetypes/to_delete';
        if (file_exists(\$path)) {
            @chmod(\$path, 0666);
            @unlink(\$path);
        }
    }

    abstract protected function getGuesser(): MimeTypeGuesserInterface;

    public function testGuessImageWithoutExtension()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->assertEquals('image/gif', \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/test'));
    }

    public function testGuessImageWithDirectory()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->expectException('\\InvalidArgumentException');
        \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/directory');
    }

    public function testGuessImageWithKnownExtension()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->assertEquals('image/gif', \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/test.gif'));
    }

    public function testGuessFileWithUnknownExtension()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->assertEquals('application/octet-stream', \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/.unknownextension'));
    }

    public function testGuessWithIncorrectPath()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        \$this->expectException('\\InvalidArgumentException');
        \$this->getGuesser()->guessMimeType(__DIR__.'/Fixtures/mimetypes/not_here');
    }

    public function testGuessWithNonReadablePath()
    {
        if (!\$this->getGuesser()->isGuesserSupported()) {
            \$this->markTestSkipped('Guesser is not supported');
        }

        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Can not verify chmod operations on Windows');
        }

        if (!getenv('USER') || 'root' === getenv('USER')) {
            \$this->markTestSkipped('This test will fail if run under superuser');
        }

        \$path = __DIR__.'/Fixtures/mimetypes/to_delete';
        touch(\$path);
        @chmod(\$path, 0333);

        if ('0333' == substr(sprintf('%o', fileperms(\$path)), -4)) {
            \$this->expectException('\\InvalidArgumentException');
            \$this->getGuesser()->guessMimeType(\$path);
        } else {
            \$this->markTestSkipped('Can not verify chmod operations, change of file permissions failed');
        }
    }
}
", "vendor/symfony/mime/Tests/AbstractMimeTypeGuesserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/AbstractMimeTypeGuesserTest.php");
    }
}
