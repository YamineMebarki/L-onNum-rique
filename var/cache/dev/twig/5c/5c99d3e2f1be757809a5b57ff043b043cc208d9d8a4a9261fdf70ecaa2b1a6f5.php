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

/* vendor/symfony/http-foundation/Tests/File/FileTest.php */
class __TwigTemplate_38e3455c6ab62014669e4b8201830672e8f2b7de4a98b7ca9d9ee76d7a799e62 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/File/FileTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/File/FileTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\File;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\File\\File;

/**
 * @requires extension fileinfo
 */
class FileTest extends TestCase
{
    protected \$file;

    public function testGetMimeTypeUsesMimeTypeGuessers()
    {
        \$file = new File(__DIR__.'/Fixtures/test.gif');
        \$this->assertEquals('image/gif', \$file->getMimeType());
    }

    public function testGuessExtensionWithoutGuesser()
    {
        \$file = new File(__DIR__.'/Fixtures/directory/.empty');
        \$this->assertNull(\$file->guessExtension());
    }

    public function testGuessExtensionIsBasedOnMimeType()
    {
        \$file = new File(__DIR__.'/Fixtures/test');
        \$this->assertEquals('gif', \$file->guessExtension());
    }

    public function testConstructWhenFileNotExists()
    {
        \$this->expectException('Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException');

        new File(__DIR__.'/Fixtures/not_here');
    }

    public function testMove()
    {
        \$path = __DIR__.'/Fixtures/test.copy.gif';
        \$targetDir = __DIR__.'/Fixtures/directory';
        \$targetPath = \$targetDir.'/test.copy.gif';
        @unlink(\$path);
        @unlink(\$targetPath);
        copy(__DIR__.'/Fixtures/test.gif', \$path);

        \$file = new File(\$path);
        \$movedFile = \$file->move(\$targetDir);
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\File\\File', \$movedFile);

        \$this->assertFileExists(\$targetPath);
        \$this->assertFileNotExists(\$path);
        \$this->assertEquals(realpath(\$targetPath), \$movedFile->getRealPath());

        @unlink(\$targetPath);
    }

    public function testMoveWithNewName()
    {
        \$path = __DIR__.'/Fixtures/test.copy.gif';
        \$targetDir = __DIR__.'/Fixtures/directory';
        \$targetPath = \$targetDir.'/test.newname.gif';
        @unlink(\$path);
        @unlink(\$targetPath);
        copy(__DIR__.'/Fixtures/test.gif', \$path);

        \$file = new File(\$path);
        \$movedFile = \$file->move(\$targetDir, 'test.newname.gif');

        \$this->assertFileExists(\$targetPath);
        \$this->assertFileNotExists(\$path);
        \$this->assertEquals(realpath(\$targetPath), \$movedFile->getRealPath());

        @unlink(\$targetPath);
    }

    public function getFilenameFixtures()
    {
        return [
            ['original.gif', 'original.gif'],
            ['..\\\\..\\\\original.gif', 'original.gif'],
            ['../../original.gif', 'original.gif'],
            ['файлfile.gif', 'файлfile.gif'],
            ['..\\\\..\\\\файлfile.gif', 'файлfile.gif'],
            ['../../файлfile.gif', 'файлfile.gif'],
        ];
    }

    /**
     * @dataProvider getFilenameFixtures
     */
    public function testMoveWithNonLatinName(\$filename, \$sanitizedFilename)
    {
        \$path = __DIR__.'/Fixtures/'.\$sanitizedFilename;
        \$targetDir = __DIR__.'/Fixtures/directory/';
        \$targetPath = \$targetDir.\$sanitizedFilename;
        @unlink(\$path);
        @unlink(\$targetPath);
        copy(__DIR__.'/Fixtures/test.gif', \$path);

        \$file = new File(\$path);
        \$movedFile = \$file->move(\$targetDir, \$filename);
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\File\\File', \$movedFile);

        \$this->assertFileExists(\$targetPath);
        \$this->assertFileNotExists(\$path);
        \$this->assertEquals(realpath(\$targetPath), \$movedFile->getRealPath());

        @unlink(\$targetPath);
    }

    public function testMoveToAnUnexistentDirectory()
    {
        \$sourcePath = __DIR__.'/Fixtures/test.copy.gif';
        \$targetDir = __DIR__.'/Fixtures/directory/sub';
        \$targetPath = \$targetDir.'/test.copy.gif';
        @unlink(\$sourcePath);
        @unlink(\$targetPath);
        @rmdir(\$targetDir);
        copy(__DIR__.'/Fixtures/test.gif', \$sourcePath);

        \$file = new File(\$sourcePath);
        \$movedFile = \$file->move(\$targetDir);

        \$this->assertFileExists(\$targetPath);
        \$this->assertFileNotExists(\$sourcePath);
        \$this->assertEquals(realpath(\$targetPath), \$movedFile->getRealPath());

        @unlink(\$sourcePath);
        @unlink(\$targetPath);
        @rmdir(\$targetDir);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/File/FileTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\File;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\File\\File;

/**
 * @requires extension fileinfo
 */
class FileTest extends TestCase
{
    protected \$file;

    public function testGetMimeTypeUsesMimeTypeGuessers()
    {
        \$file = new File(__DIR__.'/Fixtures/test.gif');
        \$this->assertEquals('image/gif', \$file->getMimeType());
    }

    public function testGuessExtensionWithoutGuesser()
    {
        \$file = new File(__DIR__.'/Fixtures/directory/.empty');
        \$this->assertNull(\$file->guessExtension());
    }

    public function testGuessExtensionIsBasedOnMimeType()
    {
        \$file = new File(__DIR__.'/Fixtures/test');
        \$this->assertEquals('gif', \$file->guessExtension());
    }

    public function testConstructWhenFileNotExists()
    {
        \$this->expectException('Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException');

        new File(__DIR__.'/Fixtures/not_here');
    }

    public function testMove()
    {
        \$path = __DIR__.'/Fixtures/test.copy.gif';
        \$targetDir = __DIR__.'/Fixtures/directory';
        \$targetPath = \$targetDir.'/test.copy.gif';
        @unlink(\$path);
        @unlink(\$targetPath);
        copy(__DIR__.'/Fixtures/test.gif', \$path);

        \$file = new File(\$path);
        \$movedFile = \$file->move(\$targetDir);
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\File\\File', \$movedFile);

        \$this->assertFileExists(\$targetPath);
        \$this->assertFileNotExists(\$path);
        \$this->assertEquals(realpath(\$targetPath), \$movedFile->getRealPath());

        @unlink(\$targetPath);
    }

    public function testMoveWithNewName()
    {
        \$path = __DIR__.'/Fixtures/test.copy.gif';
        \$targetDir = __DIR__.'/Fixtures/directory';
        \$targetPath = \$targetDir.'/test.newname.gif';
        @unlink(\$path);
        @unlink(\$targetPath);
        copy(__DIR__.'/Fixtures/test.gif', \$path);

        \$file = new File(\$path);
        \$movedFile = \$file->move(\$targetDir, 'test.newname.gif');

        \$this->assertFileExists(\$targetPath);
        \$this->assertFileNotExists(\$path);
        \$this->assertEquals(realpath(\$targetPath), \$movedFile->getRealPath());

        @unlink(\$targetPath);
    }

    public function getFilenameFixtures()
    {
        return [
            ['original.gif', 'original.gif'],
            ['..\\\\..\\\\original.gif', 'original.gif'],
            ['../../original.gif', 'original.gif'],
            ['файлfile.gif', 'файлfile.gif'],
            ['..\\\\..\\\\файлfile.gif', 'файлfile.gif'],
            ['../../файлfile.gif', 'файлfile.gif'],
        ];
    }

    /**
     * @dataProvider getFilenameFixtures
     */
    public function testMoveWithNonLatinName(\$filename, \$sanitizedFilename)
    {
        \$path = __DIR__.'/Fixtures/'.\$sanitizedFilename;
        \$targetDir = __DIR__.'/Fixtures/directory/';
        \$targetPath = \$targetDir.\$sanitizedFilename;
        @unlink(\$path);
        @unlink(\$targetPath);
        copy(__DIR__.'/Fixtures/test.gif', \$path);

        \$file = new File(\$path);
        \$movedFile = \$file->move(\$targetDir, \$filename);
        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\File\\File', \$movedFile);

        \$this->assertFileExists(\$targetPath);
        \$this->assertFileNotExists(\$path);
        \$this->assertEquals(realpath(\$targetPath), \$movedFile->getRealPath());

        @unlink(\$targetPath);
    }

    public function testMoveToAnUnexistentDirectory()
    {
        \$sourcePath = __DIR__.'/Fixtures/test.copy.gif';
        \$targetDir = __DIR__.'/Fixtures/directory/sub';
        \$targetPath = \$targetDir.'/test.copy.gif';
        @unlink(\$sourcePath);
        @unlink(\$targetPath);
        @rmdir(\$targetDir);
        copy(__DIR__.'/Fixtures/test.gif', \$sourcePath);

        \$file = new File(\$sourcePath);
        \$movedFile = \$file->move(\$targetDir);

        \$this->assertFileExists(\$targetPath);
        \$this->assertFileNotExists(\$sourcePath);
        \$this->assertEquals(realpath(\$targetPath), \$movedFile->getRealPath());

        @unlink(\$sourcePath);
        @unlink(\$targetPath);
        @rmdir(\$targetDir);
    }
}
", "vendor/symfony/http-foundation/Tests/File/FileTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/File/FileTest.php");
    }
}
