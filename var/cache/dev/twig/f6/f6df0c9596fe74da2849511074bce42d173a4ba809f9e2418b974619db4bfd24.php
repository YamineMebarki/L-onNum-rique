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

/* vendor/symfony/flex/tests/Configurator/CopyFromRecipeConfiguratorTest.php */
class __TwigTemplate_c94f314f023bcb9518e110084306e0e9ee0e9d66c684fd7282205764eba65e44 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/CopyFromRecipeConfiguratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/Configurator/CopyFromRecipeConfiguratorTest.php"));

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
use Composer\\IO\\IOInterface;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Configurator\\CopyFromRecipeConfigurator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class CopyFromRecipeConfiguratorTest extends TestCase
{
    private \$sourceFile;
    private \$sourceFileRelativePath;
    private \$sourceDirectory;
    private \$targetFile;
    private \$targetFileRelativePath;
    private \$targetDirectory;
    private \$io;
    private \$recipe;

    public function testNoFilesCopied()
    {
        if (!file_exists(\$this->targetDirectory)) {
            mkdir(\$this->targetDirectory);
        }
        file_put_contents(\$this->targetFile, '');
        \$this->io->expects(\$this->exactly(1))->method('writeError')->with(['    Setting configuration and copying files']);
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->configure(\$this->recipe, [\$this->sourceFileRelativePath => \$this->targetFileRelativePath], \$lock);
    }

    public function testConfigureLocksFiles()
    {
        \$this->recipe->method('getName')->willReturn('test-recipe');
        \$lock = new Lock(\$this->targetDirectory.'/symfony.lock');

        \$this->createConfigurator()->configure(
            \$this->recipe,
            [\$this->sourceFileRelativePath => \$this->targetFileRelativePath],
            \$lock
        );
        \$lockedRecipe = \$lock->get('test-recipe');

        \$this->assertArrayHasKey('files', \$lockedRecipe);
        \$this->assertSame(\$this->targetFileRelativePath, \$lockedRecipe['files'][0]);
    }

    public function testConfigureAndOverwriteFiles()
    {
        if (!file_exists(\$this->targetDirectory)) {
            mkdir(\$this->targetDirectory);
        }
        file_put_contents(\$this->targetFile, '-');
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();

        \$this->io->expects(\$this->at(0))->method('writeError')->with(['    Setting configuration and copying files']);
        \$this->io->expects(\$this->at(2))->method('writeError')->with(['    Created <fg=green>\"./config/file\"</>']);
        \$this->io->method('askConfirmation')->with('File \"build/config/file\" has uncommitted changes, overwrite? [y/N] ')->willReturn(true);

        \$this->assertFileExists(\$this->targetFile);
        \$this->createConfigurator()->configure(
            \$this->recipe,
            [\$this->sourceFileRelativePath => \$this->targetFileRelativePath],
            \$lock,
            ['force' => true]
        );
        \$this->assertFileExists(\$this->targetFile);
        \$this->assertSame('somecontent', file_get_contents(\$this->targetFile));
    }

    public function testConfigure()
    {
        \$this->io->expects(\$this->at(0))->method('writeError')->with(['    Setting configuration and copying files']);
        \$this->io->expects(\$this->at(1))->method('writeError')->with(['    Created <fg=green>\"./config/file\"</>']);

        \$this->assertFileNotExists(\$this->targetFile);
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->configure(
            \$this->recipe,
            [\$this->sourceFileRelativePath => \$this->targetFileRelativePath],
            \$lock
        );
        \$this->assertFileExists(\$this->targetFile);
    }

    public function testUnconfigureKeepsLockedFiles()
    {
        if (!file_exists(\$this->sourceDirectory)) {
            mkdir(\$this->sourceDirectory);
        }
        file_put_contents(\$this->sourceFile, '-');
        \$this->assertFileExists(\$this->sourceFile);

        \$lock = new Lock(FLEX_TEST_DIR.'/test.lock');
        \$lock->set('other-recipe', ['files' => [\$this->targetFileRelativePath]]);

        \$this->createConfigurator()->unconfigure(\$this->recipe, [\$this->targetFileRelativePath], \$lock);

        \$this->assertFileExists(\$this->sourceFile);
    }

    public function testUnconfigure()
    {
        \$this->io->expects(\$this->at(0))->method('writeError')->with(['    Removing configuration and files']);
        \$this->io->expects(\$this->at(1))->method('writeError')->with(['    Removed <fg=green>\"./config/file\"</>']);

        if (!file_exists(\$this->targetDirectory)) {
            mkdir(\$this->targetDirectory);
        }
        file_put_contents(\$this->targetFile, '');
        \$this->assertFileExists(\$this->targetFile);
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->unconfigure(\$this->recipe, [\$this->targetFileRelativePath], \$lock);
        \$this->assertFileNotExists(\$this->targetFile);
    }

    public function testNoFilesRemoved()
    {
        \$this->assertFileNotExists(\$this->targetFile);
        \$this->io->expects(\$this->exactly(1))->method('writeError')->with(['    Removing configuration and files']);
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->unconfigure(\$this->recipe, [\$this->sourceFileRelativePath => \$this->targetFileRelativePath], \$lock);
    }

    protected function setUp()
    {
        parent::setUp();

        \$this->sourceDirectory = FLEX_TEST_DIR.'/source';
        \$this->sourceFileRelativePath = 'source/file';
        \$this->sourceFile = \$this->sourceDirectory.'/file';

        \$this->targetDirectory = FLEX_TEST_DIR.'/config';
        \$this->targetFileRelativePath = 'config/file';
        \$this->targetFile = \$this->targetDirectory.'/file';

        \$this->io = \$this->getMockBuilder(IOInterface::class)->getMock();
        \$this->recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$this->recipe->expects(\$this->any())->method('getFiles')->willReturn([
            \$this->sourceFileRelativePath => [
                'contents' => 'somecontent',
                'executable' => false,
            ],
        ]);

        \$this->cleanUpTargetFiles();
    }

    protected function tearDown()
    {
        parent::tearDown();

        \$this->cleanUpTargetFiles();
    }

    private function createConfigurator(): CopyFromRecipeConfigurator
    {
        return new CopyFromRecipeConfigurator(\$this->getMockBuilder(Composer::class)->getMock(), \$this->io, new Options(['root-dir' => FLEX_TEST_DIR], \$this->io));
    }

    private function cleanUpTargetFiles()
    {
        @unlink(\$this->targetFile);
        @rmdir(\$this->targetDirectory);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/tests/Configurator/CopyFromRecipeConfiguratorTest.php";
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
use Composer\\IO\\IOInterface;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\Configurator\\CopyFromRecipeConfigurator;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Options;
use Symfony\\Flex\\Recipe;

class CopyFromRecipeConfiguratorTest extends TestCase
{
    private \$sourceFile;
    private \$sourceFileRelativePath;
    private \$sourceDirectory;
    private \$targetFile;
    private \$targetFileRelativePath;
    private \$targetDirectory;
    private \$io;
    private \$recipe;

    public function testNoFilesCopied()
    {
        if (!file_exists(\$this->targetDirectory)) {
            mkdir(\$this->targetDirectory);
        }
        file_put_contents(\$this->targetFile, '');
        \$this->io->expects(\$this->exactly(1))->method('writeError')->with(['    Setting configuration and copying files']);
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->configure(\$this->recipe, [\$this->sourceFileRelativePath => \$this->targetFileRelativePath], \$lock);
    }

    public function testConfigureLocksFiles()
    {
        \$this->recipe->method('getName')->willReturn('test-recipe');
        \$lock = new Lock(\$this->targetDirectory.'/symfony.lock');

        \$this->createConfigurator()->configure(
            \$this->recipe,
            [\$this->sourceFileRelativePath => \$this->targetFileRelativePath],
            \$lock
        );
        \$lockedRecipe = \$lock->get('test-recipe');

        \$this->assertArrayHasKey('files', \$lockedRecipe);
        \$this->assertSame(\$this->targetFileRelativePath, \$lockedRecipe['files'][0]);
    }

    public function testConfigureAndOverwriteFiles()
    {
        if (!file_exists(\$this->targetDirectory)) {
            mkdir(\$this->targetDirectory);
        }
        file_put_contents(\$this->targetFile, '-');
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();

        \$this->io->expects(\$this->at(0))->method('writeError')->with(['    Setting configuration and copying files']);
        \$this->io->expects(\$this->at(2))->method('writeError')->with(['    Created <fg=green>\"./config/file\"</>']);
        \$this->io->method('askConfirmation')->with('File \"build/config/file\" has uncommitted changes, overwrite? [y/N] ')->willReturn(true);

        \$this->assertFileExists(\$this->targetFile);
        \$this->createConfigurator()->configure(
            \$this->recipe,
            [\$this->sourceFileRelativePath => \$this->targetFileRelativePath],
            \$lock,
            ['force' => true]
        );
        \$this->assertFileExists(\$this->targetFile);
        \$this->assertSame('somecontent', file_get_contents(\$this->targetFile));
    }

    public function testConfigure()
    {
        \$this->io->expects(\$this->at(0))->method('writeError')->with(['    Setting configuration and copying files']);
        \$this->io->expects(\$this->at(1))->method('writeError')->with(['    Created <fg=green>\"./config/file\"</>']);

        \$this->assertFileNotExists(\$this->targetFile);
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->configure(
            \$this->recipe,
            [\$this->sourceFileRelativePath => \$this->targetFileRelativePath],
            \$lock
        );
        \$this->assertFileExists(\$this->targetFile);
    }

    public function testUnconfigureKeepsLockedFiles()
    {
        if (!file_exists(\$this->sourceDirectory)) {
            mkdir(\$this->sourceDirectory);
        }
        file_put_contents(\$this->sourceFile, '-');
        \$this->assertFileExists(\$this->sourceFile);

        \$lock = new Lock(FLEX_TEST_DIR.'/test.lock');
        \$lock->set('other-recipe', ['files' => [\$this->targetFileRelativePath]]);

        \$this->createConfigurator()->unconfigure(\$this->recipe, [\$this->targetFileRelativePath], \$lock);

        \$this->assertFileExists(\$this->sourceFile);
    }

    public function testUnconfigure()
    {
        \$this->io->expects(\$this->at(0))->method('writeError')->with(['    Removing configuration and files']);
        \$this->io->expects(\$this->at(1))->method('writeError')->with(['    Removed <fg=green>\"./config/file\"</>']);

        if (!file_exists(\$this->targetDirectory)) {
            mkdir(\$this->targetDirectory);
        }
        file_put_contents(\$this->targetFile, '');
        \$this->assertFileExists(\$this->targetFile);
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->unconfigure(\$this->recipe, [\$this->targetFileRelativePath], \$lock);
        \$this->assertFileNotExists(\$this->targetFile);
    }

    public function testNoFilesRemoved()
    {
        \$this->assertFileNotExists(\$this->targetFile);
        \$this->io->expects(\$this->exactly(1))->method('writeError')->with(['    Removing configuration and files']);
        \$lock = \$this->getMockBuilder(Lock::class)->disableOriginalConstructor()->getMock();
        \$this->createConfigurator()->unconfigure(\$this->recipe, [\$this->sourceFileRelativePath => \$this->targetFileRelativePath], \$lock);
    }

    protected function setUp()
    {
        parent::setUp();

        \$this->sourceDirectory = FLEX_TEST_DIR.'/source';
        \$this->sourceFileRelativePath = 'source/file';
        \$this->sourceFile = \$this->sourceDirectory.'/file';

        \$this->targetDirectory = FLEX_TEST_DIR.'/config';
        \$this->targetFileRelativePath = 'config/file';
        \$this->targetFile = \$this->targetDirectory.'/file';

        \$this->io = \$this->getMockBuilder(IOInterface::class)->getMock();
        \$this->recipe = \$this->getMockBuilder(Recipe::class)->disableOriginalConstructor()->getMock();
        \$this->recipe->expects(\$this->any())->method('getFiles')->willReturn([
            \$this->sourceFileRelativePath => [
                'contents' => 'somecontent',
                'executable' => false,
            ],
        ]);

        \$this->cleanUpTargetFiles();
    }

    protected function tearDown()
    {
        parent::tearDown();

        \$this->cleanUpTargetFiles();
    }

    private function createConfigurator(): CopyFromRecipeConfigurator
    {
        return new CopyFromRecipeConfigurator(\$this->getMockBuilder(Composer::class)->getMock(), \$this->io, new Options(['root-dir' => FLEX_TEST_DIR], \$this->io));
    }

    private function cleanUpTargetFiles()
    {
        @unlink(\$this->targetFile);
        @rmdir(\$this->targetDirectory);
    }
}
", "vendor/symfony/flex/tests/Configurator/CopyFromRecipeConfiguratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/tests/Configurator/CopyFromRecipeConfiguratorTest.php");
    }
}
