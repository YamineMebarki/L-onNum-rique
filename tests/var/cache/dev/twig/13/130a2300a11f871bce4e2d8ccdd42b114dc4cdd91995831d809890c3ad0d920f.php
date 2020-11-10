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

/* vendor/symfony/maker-bundle/src/Test/MakerTestCase.php */
class __TwigTemplate_44f8e19193d8733862e625c3affd329dbfb806c82b80fe6fa6e428d3ff1e8f8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Test/MakerTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Test/MakerTestCase.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Test;

use PHPUnit\\Framework\\TestCase;

class MakerTestCase extends TestCase
{
    protected function executeMakerCommand(MakerTestDetails \$testDetails)
    {
        if (!\$testDetails->isSupportedByCurrentPhpVersion()) {
            \$this->markTestSkipped();
        }

        \$testEnv = MakerTestEnvironment::create(\$testDetails);

        // prepare environment to test
        \$testEnv->prepare();

        // run tests
        \$makerTestProcess = \$testEnv->runMaker();
        \$files = \$testEnv->getGeneratedFilesFromOutputText();

        foreach (\$files as \$file) {
            \$this->assertTrue(\$testEnv->fileExists(\$file));

            if ('.php' === substr(\$file, -4)) {
                \$csProcess = \$testEnv->runPhpCSFixer(\$file);

                \$this->assertTrue(\$csProcess->isSuccessful(), sprintf(
                    \"File '%s' has a php-cs problem: %s\\n\",
                    \$file,
                    \$csProcess->getErrorOutput().\"\\n\".\$csProcess->getOutput()
                ));
            }

            if ('.twig' === substr(\$file, -5)) {
                \$csProcess = \$testEnv->runTwigCSLint(\$file);

                \$this->assertTrue(\$csProcess->isSuccessful(), sprintf('File \"%s\" has a twig-cs problem: %s', \$file, \$csProcess->getErrorOutput().\"\\n\".\$csProcess->getOutput()));
            }
        }

        // run internal tests
        \$internalTestProcess = \$testEnv->runInternalTests();
        if (null !== \$internalTestProcess) {
            \$this->assertTrue(\$internalTestProcess->isSuccessful(), sprintf(\"Error while running the PHPUnit tests *in* the project: \\n\\n %s \\n\\n Command Output: %s\", \$internalTestProcess->getErrorOutput().\"\\n\".\$internalTestProcess->getOutput(), \$makerTestProcess->getErrorOutput().\"\\n\".\$makerTestProcess->getOutput()));
        }

        // checkout user asserts
        if (null === \$testDetails->getAssert()) {
            \$this->assertStringContainsString('Success', \$makerTestProcess->getOutput(), \$makerTestProcess->getErrorOutput());
        } else {
            (\$testDetails->getAssert())(\$makerTestProcess->getOutput(), \$testEnv->getPath());
        }
    }

    protected function assertContainsCount(string \$needle, string \$haystack, int \$count)
    {
        \$this->assertEquals(1, substr_count(\$haystack, \$needle), sprintf('Found more than %d occurrences of \"%s\" in \"%s\"', \$count, \$needle, \$haystack));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Test/MakerTestCase.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Test;

use PHPUnit\\Framework\\TestCase;

class MakerTestCase extends TestCase
{
    protected function executeMakerCommand(MakerTestDetails \$testDetails)
    {
        if (!\$testDetails->isSupportedByCurrentPhpVersion()) {
            \$this->markTestSkipped();
        }

        \$testEnv = MakerTestEnvironment::create(\$testDetails);

        // prepare environment to test
        \$testEnv->prepare();

        // run tests
        \$makerTestProcess = \$testEnv->runMaker();
        \$files = \$testEnv->getGeneratedFilesFromOutputText();

        foreach (\$files as \$file) {
            \$this->assertTrue(\$testEnv->fileExists(\$file));

            if ('.php' === substr(\$file, -4)) {
                \$csProcess = \$testEnv->runPhpCSFixer(\$file);

                \$this->assertTrue(\$csProcess->isSuccessful(), sprintf(
                    \"File '%s' has a php-cs problem: %s\\n\",
                    \$file,
                    \$csProcess->getErrorOutput().\"\\n\".\$csProcess->getOutput()
                ));
            }

            if ('.twig' === substr(\$file, -5)) {
                \$csProcess = \$testEnv->runTwigCSLint(\$file);

                \$this->assertTrue(\$csProcess->isSuccessful(), sprintf('File \"%s\" has a twig-cs problem: %s', \$file, \$csProcess->getErrorOutput().\"\\n\".\$csProcess->getOutput()));
            }
        }

        // run internal tests
        \$internalTestProcess = \$testEnv->runInternalTests();
        if (null !== \$internalTestProcess) {
            \$this->assertTrue(\$internalTestProcess->isSuccessful(), sprintf(\"Error while running the PHPUnit tests *in* the project: \\n\\n %s \\n\\n Command Output: %s\", \$internalTestProcess->getErrorOutput().\"\\n\".\$internalTestProcess->getOutput(), \$makerTestProcess->getErrorOutput().\"\\n\".\$makerTestProcess->getOutput()));
        }

        // checkout user asserts
        if (null === \$testDetails->getAssert()) {
            \$this->assertStringContainsString('Success', \$makerTestProcess->getOutput(), \$makerTestProcess->getErrorOutput());
        } else {
            (\$testDetails->getAssert())(\$makerTestProcess->getOutput(), \$testEnv->getPath());
        }
    }

    protected function assertContainsCount(string \$needle, string \$haystack, int \$count)
    {
        \$this->assertEquals(1, substr_count(\$haystack, \$needle), sprintf('Found more than %d occurrences of \"%s\" in \"%s\"', \$count, \$needle, \$haystack));
    }
}
", "vendor/symfony/maker-bundle/src/Test/MakerTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Test/MakerTestCase.php");
    }
}
