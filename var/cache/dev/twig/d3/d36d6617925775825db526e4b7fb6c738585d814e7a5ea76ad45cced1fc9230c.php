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

/* vendor/symfony/flex/tests/Configurator/CopyDirectoryFromPackageConfiguratorTest.php */
class __TwigTemplate_a367e12b29d8a2730759885c8b3814deab8994c401ddddef17176f6e24e94162 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/CopyDirectoryFromPackageConfiguratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/CopyDirectoryFromPackageConfiguratorTest.php"));

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

namespace Symfony\\Flex\\Tests\\Configurator;

use Composer\\Composer;
use Composer\\Installer\\InstallationManager;
use Composer\\IO\\IOInterface;
use Composer\\Package\\PackageInterface;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Configurator\\CopyFromPackageConfigurator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class CopyDirectoryFromPackageConfiguratorTest extends TestCase
{
    private \$sourceFiles = [];
    private \$sourceDirectory;
    private \$sourceFileRelativePath;
    private \$targetFiles = [];
    private \$targetFileRelativePath;
    private \$targetDirectory;
    private \$io;
    private \$recipe;

    public function testConfigureDirectory()
    {
        if (!is_dir(\$this->sourceDirectory)) {
            mkdir(\$this->sourceDirectory, 0777, true);
        }
        foreach (\$this->sourceFiles as \$sourceFile) {
            if (!file_exists(\$sourceFile)) {
                file_put_contents(\$sourceFile, '');
            }
        }

        foreach (\$this->targetFiles as \$targetFile) {
            \$this->assertFileNotExists(\$targetFile);
        }
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->configure(\$this->recipe, [
            \$this->sourceFileRelativePath => \$this->targetFileRelativePath,
        ], \$lock);
        foreach (\$this->targetFiles as \$targetFile) {
            \$this->assertFileExists(\$targetFile);
        }
    }

    protected function setUp()
    {
        parent::setUp();

        \$this->sourceDirectory = FLEX_TEST_DIR.'/package/files';
        \$this->sourceFileRelativePath = 'package/files/';
        \$this->sourceFiles = [
            \$this->sourceDirectory.'/file1',
            \$this->sourceDirectory.'/file2',
        ];

        \$this->targetDirectory = FLEX_TEST_DIR.'/public/files';
        \$this->targetFileRelativePath = 'public/files/';
        \$this->targetFiles = [
            \$this->targetDirectory.'/file1',
            \$this->targetDirectory.'/file2',
        ];

        \$this->io = \$this->getMockBuilder(IOInterface::class)->getMock();

        \$package = \$this->getMockBuilder(PackageInterface::class)->getMock();
        \$this->recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$this->recipe->expects(\$this->exactly(1))->method('getPackage')->willReturn(\$package);

        \$installationManager = \$this->getMockBuilder(InstallationManager::class)->getMock();
        \$installationManager->expects(\$this->exactly(1))
            ->method('getInstallPath')
            ->with(\$package)
            ->willReturn(FLEX_TEST_DIR)
        ;
        \$this->composer = \$this->getMockBuilder(Composer::class)->getMock();
        \$this->composer->expects(\$this->exactly(1))
            ->method('getInstallationManager')
            ->willReturn(\$installationManager)
        ;

        \$this->cleanUpTargetFiles();
    }

    protected function tearDown()
    {
        parent::tearDown();

        foreach (\$this->sourceFiles as \$sourceFile) {
            @unlink(\$sourceFile);
        }
        \$this->cleanUpTargetFiles();
    }

    private function createConfigurator(): CopyFromPackageConfigurator
    {
        return new CopyFromPackageConfigurator(\$this->composer, \$this->io, new Options(['root-dir' => FLEX_TEST_DIR]));
    }

    private function cleanUpTargetFiles()
    {
        \$this->rrmdir(FLEX_TEST_DIR.'/package');
        \$this->rrmdir(FLEX_TEST_DIR.'/public');
    }

    /**
     * Courtesy of http://php.net/manual/en/function.rmdir.php#98622.
     */
    private function rrmdir(\$dir)
    {
        if (is_dir(\$dir)) {
            \$objects = scandir(\$dir);
            foreach (\$objects as \$object) {
                if ('.' !== \$object && '..' !== \$object) {
                    if ('dir' == filetype(\$dir.'/'.\$object)) {
                        \$this->rrmdir(\$dir.'/'.\$object);
                    } else {
                        unlink(\$dir.'/'.\$object);
                    }
                }
            }
            reset(\$objects);
            rmdir(\$dir);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/tests/Configurator/CopyDirectoryFromPackageConfiguratorTest.php";
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

namespace Symfony\\Flex\\Tests\\Configurator;

use Composer\\Composer;
use Composer\\Installer\\InstallationManager;
use Composer\\IO\\IOInterface;
use Composer\\Package\\PackageInterface;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Configurator\\CopyFromPackageConfigurator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class CopyDirectoryFromPackageConfiguratorTest extends TestCase
{
    private \$sourceFiles = [];
    private \$sourceDirectory;
    private \$sourceFileRelativePath;
    private \$targetFiles = [];
    private \$targetFileRelativePath;
    private \$targetDirectory;
    private \$io;
    private \$recipe;

    public function testConfigureDirectory()
    {
        if (!is_dir(\$this->sourceDirectory)) {
            mkdir(\$this->sourceDirectory, 0777, true);
        }
        foreach (\$this->sourceFiles as \$sourceFile) {
            if (!file_exists(\$sourceFile)) {
                file_put_contents(\$sourceFile, '');
            }
        }

        foreach (\$this->targetFiles as \$targetFile) {
            \$this->assertFileNotExists(\$targetFile);
        }
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->configure(\$this->recipe, [
            \$this->sourceFileRelativePath => \$this->targetFileRelativePath,
        ], \$lock);
        foreach (\$this->targetFiles as \$targetFile) {
            \$this->assertFileExists(\$targetFile);
        }
    }

    protected function setUp()
    {
        parent::setUp();

        \$this->sourceDirectory = FLEX_TEST_DIR.'/package/files';
        \$this->sourceFileRelativePath = 'package/files/';
        \$this->sourceFiles = [
            \$this->sourceDirectory.'/file1',
            \$this->sourceDirectory.'/file2',
        ];

        \$this->targetDirectory = FLEX_TEST_DIR.'/public/files';
        \$this->targetFileRelativePath = 'public/files/';
        \$this->targetFiles = [
            \$this->targetDirectory.'/file1',
            \$this->targetDirectory.'/file2',
        ];

        \$this->io = \$this->getMockBuilder(IOInterface::class)->getMock();

        \$package = \$this->getMockBuilder(PackageInterface::class)->getMock();
        \$this->recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$this->recipe->expects(\$this->exactly(1))->method('getPackage')->willReturn(\$package);

        \$installationManager = \$this->getMockBuilder(InstallationManager::class)->getMock();
        \$installationManager->expects(\$this->exactly(1))
            ->method('getInstallPath')
            ->with(\$package)
            ->willReturn(FLEX_TEST_DIR)
        ;
        \$this->composer = \$this->getMockBuilder(Composer::class)->getMock();
        \$this->composer->expects(\$this->exactly(1))
            ->method('getInstallationManager')
            ->willReturn(\$installationManager)
        ;

        \$this->cleanUpTargetFiles();
    }

    protected function tearDown()
    {
        parent::tearDown();

        foreach (\$this->sourceFiles as \$sourceFile) {
            @unlink(\$sourceFile);
        }
        \$this->cleanUpTargetFiles();
    }

    private function createConfigurator(): CopyFromPackageConfigurator
    {
        return new CopyFromPackageConfigurator(\$this->composer, \$this->io, new Options(['root-dir' => FLEX_TEST_DIR]));
    }

    private function cleanUpTargetFiles()
    {
        \$this->rrmdir(FLEX_TEST_DIR.'/package');
        \$this->rrmdir(FLEX_TEST_DIR.'/public');
    }

    /**
     * Courtesy of http://php.net/manual/en/function.rmdir.php#98622.
     */
    private function rrmdir(\$dir)
    {
        if (is_dir(\$dir)) {
            \$objects = scandir(\$dir);
            foreach (\$objects as \$object) {
                if ('.' !== \$object && '..' !== \$object) {
                    if ('dir' == filetype(\$dir.'/'.\$object)) {
                        \$this->rrmdir(\$dir.'/'.\$object);
                    } else {
                        unlink(\$dir.'/'.\$object);
                    }
                }
            }
            reset(\$objects);
            rmdir(\$dir);
        }
    }
}
", "vendor/symfony/flex/tests/Configurator/CopyDirectoryFromPackageConfiguratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/tests/Configurator/CopyDirectoryFromPackageConfiguratorTest.php");
    }
}
