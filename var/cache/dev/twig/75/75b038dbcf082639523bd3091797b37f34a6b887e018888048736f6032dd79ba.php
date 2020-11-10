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

/* vendor/symfony/http-foundation/Tests/FileBagTest.php */
class __TwigTemplate_bda15c5c78ef52ac43989d2ed78fd6e176dcb51f91510805785dbd9d71dc033a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/FileBagTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/FileBagTest.php"));

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
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\FileBag;

/**
 * FileBagTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */
class FileBagTest extends TestCase
{
    public function testFileMustBeAnArrayOrUploadedFile()
    {
        \$this->expectException('InvalidArgumentException');
        new FileBag(['file' => 'foo']);
    }

    public function testShouldConvertsUploadedFiles()
    {
        \$tmpFile = \$this->createTempFile();
        \$file = new UploadedFile(\$tmpFile, basename(\$tmpFile), 'text/plain');

        \$bag = new FileBag(['file' => [
            'name' => basename(\$tmpFile),
            'type' => 'text/plain',
            'tmp_name' => \$tmpFile,
            'error' => 0,
            'size' => null,
        ]]);

        \$this->assertEquals(\$file, \$bag->get('file'));
    }

    public function testShouldSetEmptyUploadedFilesToNull()
    {
        \$bag = new FileBag(['file' => [
            'name' => '',
            'type' => '',
            'tmp_name' => '',
            'error' => UPLOAD_ERR_NO_FILE,
            'size' => 0,
        ]]);

        \$this->assertNull(\$bag->get('file'));
    }

    public function testShouldRemoveEmptyUploadedFilesForMultiUpload()
    {
        \$bag = new FileBag(['files' => [
            'name' => [''],
            'type' => [''],
            'tmp_name' => [''],
            'error' => [UPLOAD_ERR_NO_FILE],
            'size' => [0],
        ]]);

        \$this->assertSame([], \$bag->get('files'));
    }

    public function testShouldNotRemoveEmptyUploadedFilesForAssociativeArray()
    {
        \$bag = new FileBag(['files' => [
            'name' => ['file1' => ''],
            'type' => ['file1' => ''],
            'tmp_name' => ['file1' => ''],
            'error' => ['file1' => UPLOAD_ERR_NO_FILE],
            'size' => ['file1' => 0],
        ]]);

        \$this->assertSame(['file1' => null], \$bag->get('files'));
    }

    public function testShouldConvertUploadedFilesWithPhpBug()
    {
        \$tmpFile = \$this->createTempFile();
        \$file = new UploadedFile(\$tmpFile, basename(\$tmpFile), 'text/plain');

        \$bag = new FileBag([
            'child' => [
                'name' => [
                    'file' => basename(\$tmpFile),
                ],
                'type' => [
                    'file' => 'text/plain',
                ],
                'tmp_name' => [
                    'file' => \$tmpFile,
                ],
                'error' => [
                    'file' => 0,
                ],
                'size' => [
                    'file' => null,
                ],
            ],
        ]);

        \$files = \$bag->all();
        \$this->assertEquals(\$file, \$files['child']['file']);
    }

    public function testShouldConvertNestedUploadedFilesWithPhpBug()
    {
        \$tmpFile = \$this->createTempFile();
        \$file = new UploadedFile(\$tmpFile, basename(\$tmpFile), 'text/plain');

        \$bag = new FileBag([
            'child' => [
                'name' => [
                    'sub' => ['file' => basename(\$tmpFile)],
                ],
                'type' => [
                    'sub' => ['file' => 'text/plain'],
                ],
                'tmp_name' => [
                    'sub' => ['file' => \$tmpFile],
                ],
                'error' => [
                    'sub' => ['file' => 0],
                ],
                'size' => [
                    'sub' => ['file' => null],
                ],
            ],
        ]);

        \$files = \$bag->all();
        \$this->assertEquals(\$file, \$files['child']['sub']['file']);
    }

    public function testShouldNotConvertNestedUploadedFiles()
    {
        \$tmpFile = \$this->createTempFile();
        \$file = new UploadedFile(\$tmpFile, basename(\$tmpFile), 'text/plain');
        \$bag = new FileBag(['image' => ['file' => \$file]]);

        \$files = \$bag->all();
        \$this->assertEquals(\$file, \$files['image']['file']);
    }

    protected function createTempFile()
    {
        \$tempFile = tempnam(sys_get_temp_dir().'/form_test', 'FormTest');
        file_put_contents(\$tempFile, '1');

        return \$tempFile;
    }

    protected function setUp(): void
    {
        mkdir(sys_get_temp_dir().'/form_test', 0777, true);
    }

    protected function tearDown(): void
    {
        foreach (glob(sys_get_temp_dir().'/form_test/*') as \$file) {
            unlink(\$file);
        }

        rmdir(sys_get_temp_dir().'/form_test');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/FileBagTest.php";
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
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\FileBag;

/**
 * FileBagTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */
class FileBagTest extends TestCase
{
    public function testFileMustBeAnArrayOrUploadedFile()
    {
        \$this->expectException('InvalidArgumentException');
        new FileBag(['file' => 'foo']);
    }

    public function testShouldConvertsUploadedFiles()
    {
        \$tmpFile = \$this->createTempFile();
        \$file = new UploadedFile(\$tmpFile, basename(\$tmpFile), 'text/plain');

        \$bag = new FileBag(['file' => [
            'name' => basename(\$tmpFile),
            'type' => 'text/plain',
            'tmp_name' => \$tmpFile,
            'error' => 0,
            'size' => null,
        ]]);

        \$this->assertEquals(\$file, \$bag->get('file'));
    }

    public function testShouldSetEmptyUploadedFilesToNull()
    {
        \$bag = new FileBag(['file' => [
            'name' => '',
            'type' => '',
            'tmp_name' => '',
            'error' => UPLOAD_ERR_NO_FILE,
            'size' => 0,
        ]]);

        \$this->assertNull(\$bag->get('file'));
    }

    public function testShouldRemoveEmptyUploadedFilesForMultiUpload()
    {
        \$bag = new FileBag(['files' => [
            'name' => [''],
            'type' => [''],
            'tmp_name' => [''],
            'error' => [UPLOAD_ERR_NO_FILE],
            'size' => [0],
        ]]);

        \$this->assertSame([], \$bag->get('files'));
    }

    public function testShouldNotRemoveEmptyUploadedFilesForAssociativeArray()
    {
        \$bag = new FileBag(['files' => [
            'name' => ['file1' => ''],
            'type' => ['file1' => ''],
            'tmp_name' => ['file1' => ''],
            'error' => ['file1' => UPLOAD_ERR_NO_FILE],
            'size' => ['file1' => 0],
        ]]);

        \$this->assertSame(['file1' => null], \$bag->get('files'));
    }

    public function testShouldConvertUploadedFilesWithPhpBug()
    {
        \$tmpFile = \$this->createTempFile();
        \$file = new UploadedFile(\$tmpFile, basename(\$tmpFile), 'text/plain');

        \$bag = new FileBag([
            'child' => [
                'name' => [
                    'file' => basename(\$tmpFile),
                ],
                'type' => [
                    'file' => 'text/plain',
                ],
                'tmp_name' => [
                    'file' => \$tmpFile,
                ],
                'error' => [
                    'file' => 0,
                ],
                'size' => [
                    'file' => null,
                ],
            ],
        ]);

        \$files = \$bag->all();
        \$this->assertEquals(\$file, \$files['child']['file']);
    }

    public function testShouldConvertNestedUploadedFilesWithPhpBug()
    {
        \$tmpFile = \$this->createTempFile();
        \$file = new UploadedFile(\$tmpFile, basename(\$tmpFile), 'text/plain');

        \$bag = new FileBag([
            'child' => [
                'name' => [
                    'sub' => ['file' => basename(\$tmpFile)],
                ],
                'type' => [
                    'sub' => ['file' => 'text/plain'],
                ],
                'tmp_name' => [
                    'sub' => ['file' => \$tmpFile],
                ],
                'error' => [
                    'sub' => ['file' => 0],
                ],
                'size' => [
                    'sub' => ['file' => null],
                ],
            ],
        ]);

        \$files = \$bag->all();
        \$this->assertEquals(\$file, \$files['child']['sub']['file']);
    }

    public function testShouldNotConvertNestedUploadedFiles()
    {
        \$tmpFile = \$this->createTempFile();
        \$file = new UploadedFile(\$tmpFile, basename(\$tmpFile), 'text/plain');
        \$bag = new FileBag(['image' => ['file' => \$file]]);

        \$files = \$bag->all();
        \$this->assertEquals(\$file, \$files['image']['file']);
    }

    protected function createTempFile()
    {
        \$tempFile = tempnam(sys_get_temp_dir().'/form_test', 'FormTest');
        file_put_contents(\$tempFile, '1');

        return \$tempFile;
    }

    protected function setUp(): void
    {
        mkdir(sys_get_temp_dir().'/form_test', 0777, true);
    }

    protected function tearDown(): void
    {
        foreach (glob(sys_get_temp_dir().'/form_test/*') as \$file) {
            unlink(\$file);
        }

        rmdir(sys_get_temp_dir().'/form_test');
    }
}
", "vendor/symfony/http-foundation/Tests/FileBagTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/FileBagTest.php");
    }
}
