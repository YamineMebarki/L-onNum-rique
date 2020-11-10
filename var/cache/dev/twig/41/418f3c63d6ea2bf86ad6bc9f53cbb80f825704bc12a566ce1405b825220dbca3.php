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

/* vendor/symfony/validator/Tests/Constraints/FileValidatorTest.php */
class __TwigTemplate_784eaa5413ca99f785ea4c2014183c6681acd6a2272778c992de26861079578c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/FileValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/FileValidatorTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\Validator\\Constraints\\File;
use Symfony\\Component\\Validator\\Constraints\\FileValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

abstract class FileValidatorTest extends ConstraintValidatorTestCase
{
    protected \$path;

    protected \$file;

    protected function createValidator()
    {
        return new FileValidator();
    }

    protected function setUp(): void
    {
        parent::setUp();

        \$this->path = sys_get_temp_dir().\\DIRECTORY_SEPARATOR.'FileValidatorTest';
        \$this->file = fopen(\$this->path, 'w');
        fwrite(\$this->file, ' ', 1);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        if (\\is_resource(\$this->file)) {
            fclose(\$this->file);
        }

        if (file_exists(\$this->path)) {
            unlink(\$this->path);
        }

        \$this->path = null;
        \$this->file = null;
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new File());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new File());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleTypeOrFile()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new File());
    }

    public function testValidFile()
    {
        \$this->validator->validate(\$this->path, new File());

        \$this->assertNoViolation();
    }

    public function testValidUploadedfile()
    {
        file_put_contents(\$this->path, '1');
        \$file = new UploadedFile(\$this->path, 'originalName', null, null, true);
        \$this->validator->validate(\$file, new File());

        \$this->assertNoViolation();
    }

    public function provideMaxSizeExceededTests()
    {
        // We have various interesting limit - size combinations to test.
        // Assume a limit of 1000 bytes (1 kB). Then the following table
        // lists the violation messages for different file sizes:
        // -----------+--------------------------------------------------------
        // Size       | Violation Message
        // -----------+--------------------------------------------------------
        // 1000 bytes | No violation
        // 1001 bytes | \"Size of 1001 bytes exceeded limit of 1000 bytes\"
        // 1004 bytes | \"Size of 1004 bytes exceeded limit of 1000 bytes\"
        //            | NOT: \"Size of 1 kB exceeded limit of 1 kB\"
        // 1005 bytes | \"Size of 1.01 kB exceeded limit of 1 kB\"
        // -----------+--------------------------------------------------------

        // As you see, we have two interesting borders:

        // 1000/1001 - The border as of which a violation occurs
        // 1004/1005 - The border as of which the message can be rounded to kB

        // Analogous for kB/MB.

        // Prior to Symfony 2.5, violation messages are always displayed in the
        // same unit used to specify the limit.

        // As of Symfony 2.5, the above logic is implemented.
        return [
            // limit in bytes
            [1001, 1000, '1001', '1000', 'bytes'],
            [1004, 1000, '1004', '1000', 'bytes'],
            [1005, 1000, '1.01', '1', 'kB'],

            [1000001, 1000000, '1000001', '1000000', 'bytes'],
            [1004999, 1000000, '1005', '1000', 'kB'],
            [1005000, 1000000, '1.01', '1', 'MB'],

            // limit in kB
            [1001, '1k', '1001', '1000', 'bytes'],
            [1004, '1k', '1004', '1000', 'bytes'],
            [1005, '1k', '1.01', '1', 'kB'],

            [1000001, '1000k', '1000001', '1000000', 'bytes'],
            [1004999, '1000k', '1005', '1000', 'kB'],
            [1005000, '1000k', '1.01', '1', 'MB'],

            // limit in MB
            [1000001, '1M', '1000001', '1000000', 'bytes'],
            [1004999, '1M', '1005', '1000', 'kB'],
            [1005000, '1M', '1.01', '1', 'MB'],

            // limit in KiB
            [1025, '1Ki', '1025', '1024', 'bytes'],
            [1029, '1Ki', '1029', '1024', 'bytes'],
            [1030, '1Ki', '1.01', '1', 'KiB'],

            [1048577, '1024Ki', '1048577', '1048576', 'bytes'],
            [1053818, '1024Ki', '1029.12', '1024', 'KiB'],
            [1053819, '1024Ki', '1.01', '1', 'MiB'],

            // limit in MiB
            [1048577, '1Mi', '1048577', '1048576', 'bytes'],
            [1053818, '1Mi', '1029.12', '1024', 'KiB'],
            [1053819, '1Mi', '1.01', '1', 'MiB'],
        ];
    }

    /**
     * @dataProvider provideMaxSizeExceededTests
     */
    public function testMaxSizeExceeded(\$bytesWritten, \$limit, \$sizeAsString, \$limitAsString, \$suffix)
    {
        fseek(\$this->file, \$bytesWritten - 1, SEEK_SET);
        fwrite(\$this->file, '0');
        fclose(\$this->file);

        \$constraint = new File([
            'maxSize' => \$limit,
            'maxSizeMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->getFile(\$this->path), \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "', \$limitAsString)
            ->setParameter('";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "', \$sizeAsString)
            ->setParameter('";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 176, $this->source); })()), "html", null, true);
        echo "', \$suffix)
            ->setParameter('";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 177, $this->source); })()), "html", null, true);
        echo "', '\"'.\$this->path.'\"')
            ->setParameter('";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 178, $this->source); })()), "html", null, true);
        echo "', '\"'.basename(\$this->path).'\"')
            ->setCode(File::TOO_LARGE_ERROR)
            ->assertRaised();
    }

    public function provideMaxSizeNotExceededTests()
    {
        return [
            // limit in bytes
            [1000, 1000],
            [1000000, 1000000],

            // limit in kB
            [1000, '1k'],
            [1000000, '1000k'],

            // limit in MB
            [1000000, '1M'],

            // limit in KiB
            [1024, '1Ki'],
            [1048576, '1024Ki'],

            // limit in MiB
            [1048576, '1Mi'],
        ];
    }

    /**
     * @dataProvider provideMaxSizeNotExceededTests
     */
    public function testMaxSizeNotExceeded(\$bytesWritten, \$limit)
    {
        fseek(\$this->file, \$bytesWritten - 1, SEEK_SET);
        fwrite(\$this->file, '0');
        fclose(\$this->file);

        \$constraint = new File([
            'maxSize' => \$limit,
            'maxSizeMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->getFile(\$this->path), \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidMaxSize()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new File([
            'maxSize' => '1abc',
        ]);

        \$this->validator->validate(\$this->path, \$constraint);
    }

    public function provideBinaryFormatTests()
    {
        return [
            [11, 10, null, '11', '10', 'bytes'],
            [11, 10, true, '11', '10', 'bytes'],
            [11, 10, false, '11', '10', 'bytes'],

            // round(size) == 1.01kB, limit == 1kB
            [ceil(1000 * 1.01), 1000, null, '1.01', '1', 'kB'],
            [ceil(1000 * 1.01), '1k', null, '1.01', '1', 'kB'],
            [ceil(1024 * 1.01), '1Ki', null, '1.01', '1', 'KiB'],

            [ceil(1024 * 1.01), 1024, true, '1.01', '1', 'KiB'],
            [ceil(1024 * 1.01 * 1000), '1024k', true, '1010', '1000', 'KiB'],
            [ceil(1024 * 1.01), '1Ki', true, '1.01', '1', 'KiB'],

            [ceil(1000 * 1.01), 1000, false, '1.01', '1', 'kB'],
            [ceil(1000 * 1.01), '1k', false, '1.01', '1', 'kB'],
            [ceil(1024 * 1.01 * 10), '10Ki', false, '10.34', '10.24', 'kB'],
        ];
    }

    /**
     * @dataProvider provideBinaryFormatTests
     */
    public function testBinaryFormat(\$bytesWritten, \$limit, \$binaryFormat, \$sizeAsString, \$limitAsString, \$suffix)
    {
        fseek(\$this->file, \$bytesWritten - 1, SEEK_SET);
        fwrite(\$this->file, '0');
        fclose(\$this->file);

        \$constraint = new File([
            'maxSize' => \$limit,
            'binaryFormat' => \$binaryFormat,
            'maxSizeMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->getFile(\$this->path), \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 275, $this->source); })()), "html", null, true);
        echo "', \$limitAsString)
            ->setParameter('";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 276, $this->source); })()), "html", null, true);
        echo "', \$sizeAsString)
            ->setParameter('";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 277, $this->source); })()), "html", null, true);
        echo "', \$suffix)
            ->setParameter('";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 278, $this->source); })()), "html", null, true);
        echo "', '\"'.\$this->path.'\"')
            ->setParameter('";
        // line 279
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 279, $this->source); })()), "html", null, true);
        echo "', '\"'.basename(\$this->path).'\"')
            ->setCode(File::TOO_LARGE_ERROR)
            ->assertRaised();
    }

    public function testValidMimeType()
    {
        \$file = \$this
            ->getMockBuilder('Symfony\\Component\\HttpFoundation\\File\\File')
            ->setConstructorArgs([__DIR__.'/Fixtures/foo'])
            ->getMock();
        \$file
            ->expects(\$this->once())
            ->method('getPathname')
            ->willReturn(\$this->path);
        \$file
            ->expects(\$this->once())
            ->method('getMimeType')
            ->willReturn('image/jpg');

        \$constraint = new File([
            'mimeTypes' => ['image/png', 'image/jpg'],
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidWildcardMimeType()
    {
        \$file = \$this
            ->getMockBuilder('Symfony\\Component\\HttpFoundation\\File\\File')
            ->setConstructorArgs([__DIR__.'/Fixtures/foo'])
            ->getMock();
        \$file
            ->expects(\$this->once())
            ->method('getPathname')
            ->willReturn(\$this->path);
        \$file
            ->expects(\$this->once())
            ->method('getMimeType')
            ->willReturn('image/jpg');

        \$constraint = new File([
            'mimeTypes' => ['image/*'],
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidMimeType()
    {
        \$file = \$this
            ->getMockBuilder('Symfony\\Component\\HttpFoundation\\File\\File')
            ->setConstructorArgs([__DIR__.'/Fixtures/foo'])
            ->getMock();
        \$file
            ->expects(\$this->once())
            ->method('getPathname')
            ->willReturn(\$this->path);
        \$file
            ->expects(\$this->once())
            ->method('getMimeType')
            ->willReturn('application/pdf');

        \$constraint = new File([
            'mimeTypes' => ['image/png', 'image/jpg'],
            'mimeTypesMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 355
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 355, $this->source); })()), "html", null, true);
        echo "', '\"application/pdf\"')
            ->setParameter('";
        // line 356
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 356, $this->source); })()), "html", null, true);
        echo "', '\"image/png\", \"image/jpg\"')
            ->setParameter('";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 357, $this->source); })()), "html", null, true);
        echo "', '\"'.\$this->path.'\"')
            ->setParameter('";
        // line 358
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 358, $this->source); })()), "html", null, true);
        echo "', '\"'.basename(\$this->path).'\"')
            ->setCode(File::INVALID_MIME_TYPE_ERROR)
            ->assertRaised();
    }

    public function testInvalidWildcardMimeType()
    {
        \$file = \$this
            ->getMockBuilder('Symfony\\Component\\HttpFoundation\\File\\File')
            ->setConstructorArgs([__DIR__.'/Fixtures/foo'])
            ->getMock();
        \$file
            ->expects(\$this->once())
            ->method('getPathname')
            ->willReturn(\$this->path);
        \$file
            ->expects(\$this->once())
            ->method('getMimeType')
            ->willReturn('application/pdf');

        \$constraint = new File([
            'mimeTypes' => ['image/*', 'image/jpg'],
            'mimeTypesMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 386
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 386, $this->source); })()), "html", null, true);
        echo "', '\"application/pdf\"')
            ->setParameter('";
        // line 387
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 387, $this->source); })()), "html", null, true);
        echo "', '\"image/*\", \"image/jpg\"')
            ->setParameter('";
        // line 388
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 388, $this->source); })()), "html", null, true);
        echo "', '\"'.\$this->path.'\"')
            ->setParameter('";
        // line 389
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 389, $this->source); })()), "html", null, true);
        echo "', '\"'.basename(\$this->path).'\"')
            ->setCode(File::INVALID_MIME_TYPE_ERROR)
            ->assertRaised();
    }

    public function testDisallowEmpty()
    {
        ftruncate(\$this->file, 0);

        \$constraint = new File([
            'disallowEmptyMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->getFile(\$this->path), \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 405
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 405, $this->source); })()), "html", null, true);
        echo "', '\"'.\$this->path.'\"')
            ->setParameter('";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 406, $this->source); })()), "html", null, true);
        echo "', '\"'.basename(\$this->path).'\"')
            ->setCode(File::EMPTY_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider uploadedFileErrorProvider
     */
    public function testUploadedFileError(\$error, \$message, array \$params = [], \$maxSize = null)
    {
        \$file = new UploadedFile(tempnam(sys_get_temp_dir(), 'file-validator-test-'), 'originalName', 'mime', \$error);

        \$constraint = new File([
            \$message => 'myMessage',
            'maxSize' => \$maxSize,
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameters(\$params)
            ->setCode(\$error)
            ->assertRaised();
    }

    public function uploadedFileErrorProvider()
    {
        \$tests = [
            [UPLOAD_ERR_FORM_SIZE, 'uploadFormSizeErrorMessage'],
            [UPLOAD_ERR_PARTIAL, 'uploadPartialErrorMessage'],
            [UPLOAD_ERR_NO_FILE, 'uploadNoFileErrorMessage'],
            [UPLOAD_ERR_NO_TMP_DIR, 'uploadNoTmpDirErrorMessage'],
            [UPLOAD_ERR_CANT_WRITE, 'uploadCantWriteErrorMessage'],
            [UPLOAD_ERR_EXTENSION, 'uploadExtensionErrorMessage'],
        ];

        if (class_exists('Symfony\\Component\\HttpFoundation\\File\\UploadedFile')) {
            // when no maxSize is specified on constraint, it should use the ini value
            \$tests[] = [UPLOAD_ERR_INI_SIZE, 'uploadIniSizeErrorMessage', [
                '";
        // line 445
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 445, $this->source); })()), "html", null, true);
        echo "' => UploadedFile::getMaxFilesize() / 1048576,
                '";
        // line 446
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 446, $this->source); })()), "html", null, true);
        echo "' => 'MiB',
            ]];

            // it should use the smaller limitation (maxSize option in this case)
            \$tests[] = [UPLOAD_ERR_INI_SIZE, 'uploadIniSizeErrorMessage', [
                '";
        // line 451
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 451, $this->source); })()), "html", null, true);
        echo "' => 1,
                '";
        // line 452
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 452, $this->source); })()), "html", null, true);
        echo "' => 'bytes',
            ], '1'];

            // access FileValidator::factorizeSizes() private method to format max file size
            \$reflection = new \\ReflectionClass(\\get_class(new FileValidator()));
            \$method = \$reflection->getMethod('factorizeSizes');
            \$method->setAccessible(true);
            list(\$sizeAsString, \$limit, \$suffix) = \$method->invokeArgs(new FileValidator(), [0, UploadedFile::getMaxFilesize(), false]);

            // it correctly parses the maxSize option and not only uses simple string comparison
            // 1000M should be bigger than the ini value
            \$tests[] = [UPLOAD_ERR_INI_SIZE, 'uploadIniSizeErrorMessage', [
                '";
        // line 464
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 464, $this->source); })()), "html", null, true);
        echo "' => \$limit,
                '";
        // line 465
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 465, $this->source); })()), "html", null, true);
        echo "' => \$suffix,
            ], '1000M'];

            // it correctly parses the maxSize option and not only uses simple string comparison
            // 1000M should be bigger than the ini value
            \$tests[] = [UPLOAD_ERR_INI_SIZE, 'uploadIniSizeErrorMessage', [
                '";
        // line 471
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 471, $this->source); })()), "html", null, true);
        echo "' => '0.1',
                '";
        // line 472
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 472, $this->source); })()), "html", null, true);
        echo "' => 'MB',
            ], '100K'];
        }

        return \$tests;
    }

    abstract protected function getFile(\$filename);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/FileValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 472,  593 => 471,  584 => 465,  580 => 464,  565 => 452,  561 => 451,  553 => 446,  549 => 445,  507 => 406,  503 => 405,  484 => 389,  480 => 388,  476 => 387,  472 => 386,  441 => 358,  437 => 357,  433 => 356,  429 => 355,  350 => 279,  346 => 278,  342 => 277,  338 => 276,  334 => 275,  234 => 178,  230 => 177,  226 => 176,  222 => 175,  218 => 174,  43 => 1,);
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\Validator\\Constraints\\File;
use Symfony\\Component\\Validator\\Constraints\\FileValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

abstract class FileValidatorTest extends ConstraintValidatorTestCase
{
    protected \$path;

    protected \$file;

    protected function createValidator()
    {
        return new FileValidator();
    }

    protected function setUp(): void
    {
        parent::setUp();

        \$this->path = sys_get_temp_dir().\\DIRECTORY_SEPARATOR.'FileValidatorTest';
        \$this->file = fopen(\$this->path, 'w');
        fwrite(\$this->file, ' ', 1);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        if (\\is_resource(\$this->file)) {
            fclose(\$this->file);
        }

        if (file_exists(\$this->path)) {
            unlink(\$this->path);
        }

        \$this->path = null;
        \$this->file = null;
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new File());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new File());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleTypeOrFile()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new File());
    }

    public function testValidFile()
    {
        \$this->validator->validate(\$this->path, new File());

        \$this->assertNoViolation();
    }

    public function testValidUploadedfile()
    {
        file_put_contents(\$this->path, '1');
        \$file = new UploadedFile(\$this->path, 'originalName', null, null, true);
        \$this->validator->validate(\$file, new File());

        \$this->assertNoViolation();
    }

    public function provideMaxSizeExceededTests()
    {
        // We have various interesting limit - size combinations to test.
        // Assume a limit of 1000 bytes (1 kB). Then the following table
        // lists the violation messages for different file sizes:
        // -----------+--------------------------------------------------------
        // Size       | Violation Message
        // -----------+--------------------------------------------------------
        // 1000 bytes | No violation
        // 1001 bytes | \"Size of 1001 bytes exceeded limit of 1000 bytes\"
        // 1004 bytes | \"Size of 1004 bytes exceeded limit of 1000 bytes\"
        //            | NOT: \"Size of 1 kB exceeded limit of 1 kB\"
        // 1005 bytes | \"Size of 1.01 kB exceeded limit of 1 kB\"
        // -----------+--------------------------------------------------------

        // As you see, we have two interesting borders:

        // 1000/1001 - The border as of which a violation occurs
        // 1004/1005 - The border as of which the message can be rounded to kB

        // Analogous for kB/MB.

        // Prior to Symfony 2.5, violation messages are always displayed in the
        // same unit used to specify the limit.

        // As of Symfony 2.5, the above logic is implemented.
        return [
            // limit in bytes
            [1001, 1000, '1001', '1000', 'bytes'],
            [1004, 1000, '1004', '1000', 'bytes'],
            [1005, 1000, '1.01', '1', 'kB'],

            [1000001, 1000000, '1000001', '1000000', 'bytes'],
            [1004999, 1000000, '1005', '1000', 'kB'],
            [1005000, 1000000, '1.01', '1', 'MB'],

            // limit in kB
            [1001, '1k', '1001', '1000', 'bytes'],
            [1004, '1k', '1004', '1000', 'bytes'],
            [1005, '1k', '1.01', '1', 'kB'],

            [1000001, '1000k', '1000001', '1000000', 'bytes'],
            [1004999, '1000k', '1005', '1000', 'kB'],
            [1005000, '1000k', '1.01', '1', 'MB'],

            // limit in MB
            [1000001, '1M', '1000001', '1000000', 'bytes'],
            [1004999, '1M', '1005', '1000', 'kB'],
            [1005000, '1M', '1.01', '1', 'MB'],

            // limit in KiB
            [1025, '1Ki', '1025', '1024', 'bytes'],
            [1029, '1Ki', '1029', '1024', 'bytes'],
            [1030, '1Ki', '1.01', '1', 'KiB'],

            [1048577, '1024Ki', '1048577', '1048576', 'bytes'],
            [1053818, '1024Ki', '1029.12', '1024', 'KiB'],
            [1053819, '1024Ki', '1.01', '1', 'MiB'],

            // limit in MiB
            [1048577, '1Mi', '1048577', '1048576', 'bytes'],
            [1053818, '1Mi', '1029.12', '1024', 'KiB'],
            [1053819, '1Mi', '1.01', '1', 'MiB'],
        ];
    }

    /**
     * @dataProvider provideMaxSizeExceededTests
     */
    public function testMaxSizeExceeded(\$bytesWritten, \$limit, \$sizeAsString, \$limitAsString, \$suffix)
    {
        fseek(\$this->file, \$bytesWritten - 1, SEEK_SET);
        fwrite(\$this->file, '0');
        fclose(\$this->file);

        \$constraint = new File([
            'maxSize' => \$limit,
            'maxSizeMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->getFile(\$this->path), \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ limit }}', \$limitAsString)
            ->setParameter('{{ size }}', \$sizeAsString)
            ->setParameter('{{ suffix }}', \$suffix)
            ->setParameter('{{ file }}', '\"'.\$this->path.'\"')
            ->setParameter('{{ name }}', '\"'.basename(\$this->path).'\"')
            ->setCode(File::TOO_LARGE_ERROR)
            ->assertRaised();
    }

    public function provideMaxSizeNotExceededTests()
    {
        return [
            // limit in bytes
            [1000, 1000],
            [1000000, 1000000],

            // limit in kB
            [1000, '1k'],
            [1000000, '1000k'],

            // limit in MB
            [1000000, '1M'],

            // limit in KiB
            [1024, '1Ki'],
            [1048576, '1024Ki'],

            // limit in MiB
            [1048576, '1Mi'],
        ];
    }

    /**
     * @dataProvider provideMaxSizeNotExceededTests
     */
    public function testMaxSizeNotExceeded(\$bytesWritten, \$limit)
    {
        fseek(\$this->file, \$bytesWritten - 1, SEEK_SET);
        fwrite(\$this->file, '0');
        fclose(\$this->file);

        \$constraint = new File([
            'maxSize' => \$limit,
            'maxSizeMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->getFile(\$this->path), \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidMaxSize()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new File([
            'maxSize' => '1abc',
        ]);

        \$this->validator->validate(\$this->path, \$constraint);
    }

    public function provideBinaryFormatTests()
    {
        return [
            [11, 10, null, '11', '10', 'bytes'],
            [11, 10, true, '11', '10', 'bytes'],
            [11, 10, false, '11', '10', 'bytes'],

            // round(size) == 1.01kB, limit == 1kB
            [ceil(1000 * 1.01), 1000, null, '1.01', '1', 'kB'],
            [ceil(1000 * 1.01), '1k', null, '1.01', '1', 'kB'],
            [ceil(1024 * 1.01), '1Ki', null, '1.01', '1', 'KiB'],

            [ceil(1024 * 1.01), 1024, true, '1.01', '1', 'KiB'],
            [ceil(1024 * 1.01 * 1000), '1024k', true, '1010', '1000', 'KiB'],
            [ceil(1024 * 1.01), '1Ki', true, '1.01', '1', 'KiB'],

            [ceil(1000 * 1.01), 1000, false, '1.01', '1', 'kB'],
            [ceil(1000 * 1.01), '1k', false, '1.01', '1', 'kB'],
            [ceil(1024 * 1.01 * 10), '10Ki', false, '10.34', '10.24', 'kB'],
        ];
    }

    /**
     * @dataProvider provideBinaryFormatTests
     */
    public function testBinaryFormat(\$bytesWritten, \$limit, \$binaryFormat, \$sizeAsString, \$limitAsString, \$suffix)
    {
        fseek(\$this->file, \$bytesWritten - 1, SEEK_SET);
        fwrite(\$this->file, '0');
        fclose(\$this->file);

        \$constraint = new File([
            'maxSize' => \$limit,
            'binaryFormat' => \$binaryFormat,
            'maxSizeMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->getFile(\$this->path), \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ limit }}', \$limitAsString)
            ->setParameter('{{ size }}', \$sizeAsString)
            ->setParameter('{{ suffix }}', \$suffix)
            ->setParameter('{{ file }}', '\"'.\$this->path.'\"')
            ->setParameter('{{ name }}', '\"'.basename(\$this->path).'\"')
            ->setCode(File::TOO_LARGE_ERROR)
            ->assertRaised();
    }

    public function testValidMimeType()
    {
        \$file = \$this
            ->getMockBuilder('Symfony\\Component\\HttpFoundation\\File\\File')
            ->setConstructorArgs([__DIR__.'/Fixtures/foo'])
            ->getMock();
        \$file
            ->expects(\$this->once())
            ->method('getPathname')
            ->willReturn(\$this->path);
        \$file
            ->expects(\$this->once())
            ->method('getMimeType')
            ->willReturn('image/jpg');

        \$constraint = new File([
            'mimeTypes' => ['image/png', 'image/jpg'],
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidWildcardMimeType()
    {
        \$file = \$this
            ->getMockBuilder('Symfony\\Component\\HttpFoundation\\File\\File')
            ->setConstructorArgs([__DIR__.'/Fixtures/foo'])
            ->getMock();
        \$file
            ->expects(\$this->once())
            ->method('getPathname')
            ->willReturn(\$this->path);
        \$file
            ->expects(\$this->once())
            ->method('getMimeType')
            ->willReturn('image/jpg');

        \$constraint = new File([
            'mimeTypes' => ['image/*'],
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidMimeType()
    {
        \$file = \$this
            ->getMockBuilder('Symfony\\Component\\HttpFoundation\\File\\File')
            ->setConstructorArgs([__DIR__.'/Fixtures/foo'])
            ->getMock();
        \$file
            ->expects(\$this->once())
            ->method('getPathname')
            ->willReturn(\$this->path);
        \$file
            ->expects(\$this->once())
            ->method('getMimeType')
            ->willReturn('application/pdf');

        \$constraint = new File([
            'mimeTypes' => ['image/png', 'image/jpg'],
            'mimeTypesMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ type }}', '\"application/pdf\"')
            ->setParameter('{{ types }}', '\"image/png\", \"image/jpg\"')
            ->setParameter('{{ file }}', '\"'.\$this->path.'\"')
            ->setParameter('{{ name }}', '\"'.basename(\$this->path).'\"')
            ->setCode(File::INVALID_MIME_TYPE_ERROR)
            ->assertRaised();
    }

    public function testInvalidWildcardMimeType()
    {
        \$file = \$this
            ->getMockBuilder('Symfony\\Component\\HttpFoundation\\File\\File')
            ->setConstructorArgs([__DIR__.'/Fixtures/foo'])
            ->getMock();
        \$file
            ->expects(\$this->once())
            ->method('getPathname')
            ->willReturn(\$this->path);
        \$file
            ->expects(\$this->once())
            ->method('getMimeType')
            ->willReturn('application/pdf');

        \$constraint = new File([
            'mimeTypes' => ['image/*', 'image/jpg'],
            'mimeTypesMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ type }}', '\"application/pdf\"')
            ->setParameter('{{ types }}', '\"image/*\", \"image/jpg\"')
            ->setParameter('{{ file }}', '\"'.\$this->path.'\"')
            ->setParameter('{{ name }}', '\"'.basename(\$this->path).'\"')
            ->setCode(File::INVALID_MIME_TYPE_ERROR)
            ->assertRaised();
    }

    public function testDisallowEmpty()
    {
        ftruncate(\$this->file, 0);

        \$constraint = new File([
            'disallowEmptyMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->getFile(\$this->path), \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ file }}', '\"'.\$this->path.'\"')
            ->setParameter('{{ name }}', '\"'.basename(\$this->path).'\"')
            ->setCode(File::EMPTY_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider uploadedFileErrorProvider
     */
    public function testUploadedFileError(\$error, \$message, array \$params = [], \$maxSize = null)
    {
        \$file = new UploadedFile(tempnam(sys_get_temp_dir(), 'file-validator-test-'), 'originalName', 'mime', \$error);

        \$constraint = new File([
            \$message => 'myMessage',
            'maxSize' => \$maxSize,
        ]);

        \$this->validator->validate(\$file, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameters(\$params)
            ->setCode(\$error)
            ->assertRaised();
    }

    public function uploadedFileErrorProvider()
    {
        \$tests = [
            [UPLOAD_ERR_FORM_SIZE, 'uploadFormSizeErrorMessage'],
            [UPLOAD_ERR_PARTIAL, 'uploadPartialErrorMessage'],
            [UPLOAD_ERR_NO_FILE, 'uploadNoFileErrorMessage'],
            [UPLOAD_ERR_NO_TMP_DIR, 'uploadNoTmpDirErrorMessage'],
            [UPLOAD_ERR_CANT_WRITE, 'uploadCantWriteErrorMessage'],
            [UPLOAD_ERR_EXTENSION, 'uploadExtensionErrorMessage'],
        ];

        if (class_exists('Symfony\\Component\\HttpFoundation\\File\\UploadedFile')) {
            // when no maxSize is specified on constraint, it should use the ini value
            \$tests[] = [UPLOAD_ERR_INI_SIZE, 'uploadIniSizeErrorMessage', [
                '{{ limit }}' => UploadedFile::getMaxFilesize() / 1048576,
                '{{ suffix }}' => 'MiB',
            ]];

            // it should use the smaller limitation (maxSize option in this case)
            \$tests[] = [UPLOAD_ERR_INI_SIZE, 'uploadIniSizeErrorMessage', [
                '{{ limit }}' => 1,
                '{{ suffix }}' => 'bytes',
            ], '1'];

            // access FileValidator::factorizeSizes() private method to format max file size
            \$reflection = new \\ReflectionClass(\\get_class(new FileValidator()));
            \$method = \$reflection->getMethod('factorizeSizes');
            \$method->setAccessible(true);
            list(\$sizeAsString, \$limit, \$suffix) = \$method->invokeArgs(new FileValidator(), [0, UploadedFile::getMaxFilesize(), false]);

            // it correctly parses the maxSize option and not only uses simple string comparison
            // 1000M should be bigger than the ini value
            \$tests[] = [UPLOAD_ERR_INI_SIZE, 'uploadIniSizeErrorMessage', [
                '{{ limit }}' => \$limit,
                '{{ suffix }}' => \$suffix,
            ], '1000M'];

            // it correctly parses the maxSize option and not only uses simple string comparison
            // 1000M should be bigger than the ini value
            \$tests[] = [UPLOAD_ERR_INI_SIZE, 'uploadIniSizeErrorMessage', [
                '{{ limit }}' => '0.1',
                '{{ suffix }}' => 'MB',
            ], '100K'];
        }

        return \$tests;
    }

    abstract protected function getFile(\$filename);
}
", "vendor/symfony/validator/Tests/Constraints/FileValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/FileValidatorTest.php");
    }
}
