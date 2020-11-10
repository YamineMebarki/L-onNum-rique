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

/* vendor/symfony/yaml/Tests/Command/LintCommandTest.php */
class __TwigTemplate_2211b26ebe0f8297f344137f8251bce488a5aae183586ba95d9d6a6ab539e3a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Command/LintCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Command/LintCommandTest.php"));

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

namespace Symfony\\Component\\Yaml\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\Yaml\\Command\\LintCommand;

/**
 * Tests the YamlLintCommand.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class LintCommandTest extends TestCase
{
    private \$files;

    public function testLintCorrectFile()
    {
        \$tester = \$this->createCommandTester();
        \$filename = \$this->createFile('foo: bar');

        \$ret = \$tester->execute(['filename' => \$filename], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertRegExp('/^\\/\\/ OK in /', trim(\$tester->getDisplay()));
    }

    public function testLintCorrectFiles()
    {
        \$tester = \$this->createCommandTester();
        \$filename1 = \$this->createFile('foo: bar');
        \$filename2 = \$this->createFile('bar: baz');

        \$ret = \$tester->execute(['filename' => [\$filename1, \$filename2]], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertRegExp('/^\\/\\/ OK in /', trim(\$tester->getDisplay()));
    }

    public function testLintIncorrectFile()
    {
        \$incorrectContent = '
foo:
bar';
        \$tester = \$this->createCommandTester();
        \$filename = \$this->createFile(\$incorrectContent);

        \$ret = \$tester->execute(['filename' => \$filename], ['decorated' => false]);

        \$this->assertEquals(1, \$ret, 'Returns 1 in case of error');
        \$this->assertStringContainsString('Unable to parse at line 3 (near \"bar\").', trim(\$tester->getDisplay()));
    }

    public function testConstantAsKey()
    {
        \$yaml = <<<YAML
!php/const 'Symfony\\Component\\Yaml\\Tests\\Command\\Foo::TEST': bar
YAML;
        \$ret = \$this->createCommandTester()->execute(['filename' => \$this->createFile(\$yaml)], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);
        \$this->assertSame(0, \$ret, 'lint:yaml exits with code 0 in case of success');
    }

    public function testCustomTags()
    {
        \$yaml = <<<YAML
foo: !my_tag {foo: bar}
YAML;
        \$ret = \$this->createCommandTester()->execute(['filename' => \$this->createFile(\$yaml), '--parse-tags' => true], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);
        \$this->assertSame(0, \$ret, 'lint:yaml exits with code 0 in case of success');
    }

    public function testCustomTagsError()
    {
        \$yaml = <<<YAML
foo: !my_tag {foo: bar}
YAML;
        \$ret = \$this->createCommandTester()->execute(['filename' => \$this->createFile(\$yaml)], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);
        \$this->assertSame(1, \$ret, 'lint:yaml exits with code 1 in case of error');
    }

    public function testLintFileNotReadable()
    {
        \$this->expectException('RuntimeException');
        \$tester = \$this->createCommandTester();
        \$filename = \$this->createFile('');
        unlink(\$filename);

        \$ret = \$tester->execute(['filename' => \$filename], ['decorated' => false]);
    }

    /**
     * @return string Path to the new file
     */
    private function createFile(\$content)
    {
        \$filename = tempnam(sys_get_temp_dir().'/framework-yml-lint-test', 'sf-');
        file_put_contents(\$filename, \$content);

        \$this->files[] = \$filename;

        return \$filename;
    }

    /**
     * @return CommandTester
     */
    protected function createCommandTester()
    {
        \$application = new Application();
        \$application->add(new LintCommand());
        \$command = \$application->find('lint:yaml');

        return new CommandTester(\$command);
    }

    protected function setUp(): void
    {
        \$this->files = [];
        @mkdir(sys_get_temp_dir().'/framework-yml-lint-test');
    }

    protected function tearDown(): void
    {
        foreach (\$this->files as \$file) {
            if (file_exists(\$file)) {
                unlink(\$file);
            }
        }

        rmdir(sys_get_temp_dir().'/framework-yml-lint-test');
    }
}

class Foo
{
    const TEST = 'foo';
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Command/LintCommandTest.php";
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

namespace Symfony\\Component\\Yaml\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\Yaml\\Command\\LintCommand;

/**
 * Tests the YamlLintCommand.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class LintCommandTest extends TestCase
{
    private \$files;

    public function testLintCorrectFile()
    {
        \$tester = \$this->createCommandTester();
        \$filename = \$this->createFile('foo: bar');

        \$ret = \$tester->execute(['filename' => \$filename], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertRegExp('/^\\/\\/ OK in /', trim(\$tester->getDisplay()));
    }

    public function testLintCorrectFiles()
    {
        \$tester = \$this->createCommandTester();
        \$filename1 = \$this->createFile('foo: bar');
        \$filename2 = \$this->createFile('bar: baz');

        \$ret = \$tester->execute(['filename' => [\$filename1, \$filename2]], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);

        \$this->assertEquals(0, \$ret, 'Returns 0 in case of success');
        \$this->assertRegExp('/^\\/\\/ OK in /', trim(\$tester->getDisplay()));
    }

    public function testLintIncorrectFile()
    {
        \$incorrectContent = '
foo:
bar';
        \$tester = \$this->createCommandTester();
        \$filename = \$this->createFile(\$incorrectContent);

        \$ret = \$tester->execute(['filename' => \$filename], ['decorated' => false]);

        \$this->assertEquals(1, \$ret, 'Returns 1 in case of error');
        \$this->assertStringContainsString('Unable to parse at line 3 (near \"bar\").', trim(\$tester->getDisplay()));
    }

    public function testConstantAsKey()
    {
        \$yaml = <<<YAML
!php/const 'Symfony\\Component\\Yaml\\Tests\\Command\\Foo::TEST': bar
YAML;
        \$ret = \$this->createCommandTester()->execute(['filename' => \$this->createFile(\$yaml)], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);
        \$this->assertSame(0, \$ret, 'lint:yaml exits with code 0 in case of success');
    }

    public function testCustomTags()
    {
        \$yaml = <<<YAML
foo: !my_tag {foo: bar}
YAML;
        \$ret = \$this->createCommandTester()->execute(['filename' => \$this->createFile(\$yaml), '--parse-tags' => true], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);
        \$this->assertSame(0, \$ret, 'lint:yaml exits with code 0 in case of success');
    }

    public function testCustomTagsError()
    {
        \$yaml = <<<YAML
foo: !my_tag {foo: bar}
YAML;
        \$ret = \$this->createCommandTester()->execute(['filename' => \$this->createFile(\$yaml)], ['verbosity' => OutputInterface::VERBOSITY_VERBOSE, 'decorated' => false]);
        \$this->assertSame(1, \$ret, 'lint:yaml exits with code 1 in case of error');
    }

    public function testLintFileNotReadable()
    {
        \$this->expectException('RuntimeException');
        \$tester = \$this->createCommandTester();
        \$filename = \$this->createFile('');
        unlink(\$filename);

        \$ret = \$tester->execute(['filename' => \$filename], ['decorated' => false]);
    }

    /**
     * @return string Path to the new file
     */
    private function createFile(\$content)
    {
        \$filename = tempnam(sys_get_temp_dir().'/framework-yml-lint-test', 'sf-');
        file_put_contents(\$filename, \$content);

        \$this->files[] = \$filename;

        return \$filename;
    }

    /**
     * @return CommandTester
     */
    protected function createCommandTester()
    {
        \$application = new Application();
        \$application->add(new LintCommand());
        \$command = \$application->find('lint:yaml');

        return new CommandTester(\$command);
    }

    protected function setUp(): void
    {
        \$this->files = [];
        @mkdir(sys_get_temp_dir().'/framework-yml-lint-test');
    }

    protected function tearDown(): void
    {
        foreach (\$this->files as \$file) {
            if (file_exists(\$file)) {
                unlink(\$file);
            }
        }

        rmdir(sys_get_temp_dir().'/framework-yml-lint-test');
    }
}

class Foo
{
    const TEST = 'foo';
}
", "vendor/symfony/yaml/Tests/Command/LintCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Command/LintCommandTest.php");
    }
}
