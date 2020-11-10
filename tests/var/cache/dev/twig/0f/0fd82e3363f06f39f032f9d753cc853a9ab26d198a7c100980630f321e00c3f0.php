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

/* vendor/twig/twig/src/Test/IntegrationTestCase.php */
class __TwigTemplate_7aae90f2310c392918548bb62a7aa8a19967351b57ed64011efb283d2f643096 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Test/IntegrationTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Test/IntegrationTestCase.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Test;

use PHPUnit\\Framework\\TestCase;
use Twig\\Environment;
use Twig\\Error\\Error;
use Twig\\Extension\\ExtensionInterface;
use Twig\\Loader\\ArrayLoader;
use Twig\\RuntimeLoader\\RuntimeLoaderInterface;
use Twig\\TwigFilter;
use Twig\\TwigFunction;
use Twig\\TwigTest;

/**
 * Integration test helper.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Karma Dordrak <drak@zikula.org>
 */
abstract class IntegrationTestCase extends TestCase
{
    /**
     * @return string
     */
    abstract protected function getFixturesDir();

    /**
     * @return RuntimeLoaderInterface[]
     */
    protected function getRuntimeLoaders()
    {
        return [];
    }

    /**
     * @return ExtensionInterface[]
     */
    protected function getExtensions()
    {
        return [];
    }

    /**
     * @return TwigFilter[]
     */
    protected function getTwigFilters()
    {
        return [];
    }

    /**
     * @return TwigFunction[]
     */
    protected function getTwigFunctions()
    {
        return [];
    }

    /**
     * @return TwigTest[]
     */
    protected function getTwigTests()
    {
        return [];
    }

    /**
     * @dataProvider getTests
     */
    public function testIntegration(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation = '')
    {
        \$this->doIntegrationTest(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation);
    }

    /**
     * @dataProvider getLegacyTests
     * @group legacy
     */
    public function testLegacyIntegration(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation = '')
    {
        \$this->doIntegrationTest(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation);
    }

    public function getTests(\$name, \$legacyTests = false)
    {
        \$fixturesDir = realpath(\$this->getFixturesDir());
        \$tests = [];

        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$fixturesDir), \\RecursiveIteratorIterator::LEAVES_ONLY) as \$file) {
            if (!preg_match('/\\.test\$/', \$file)) {
                continue;
            }

            if (\$legacyTests xor false !== strpos(\$file->getRealpath(), '.legacy.test')) {
                continue;
            }

            \$test = file_get_contents(\$file->getRealpath());

            if (preg_match('/--TEST--\\s*(.*?)\\s*(?:--CONDITION--\\s*(.*))?\\s*(?:--DEPRECATION--\\s*(.*?))?\\s*((?:--TEMPLATE(?:\\(.*?\\))?--(?:.*?))+)\\s*(?:--DATA--\\s*(.*))?\\s*--EXCEPTION--\\s*(.*)/sx', \$test, \$match)) {
                \$message = \$match[1];
                \$condition = \$match[2];
                \$deprecation = \$match[3];
                \$templates = self::parseTemplates(\$match[4]);
                \$exception = \$match[6];
                \$outputs = [[null, \$match[5], null, '']];
            } elseif (preg_match('/--TEST--\\s*(.*?)\\s*(?:--CONDITION--\\s*(.*))?\\s*(?:--DEPRECATION--\\s*(.*?))?\\s*((?:--TEMPLATE(?:\\(.*?\\))?--(?:.*?))+)--DATA--.*?--EXPECT--.*/s', \$test, \$match)) {
                \$message = \$match[1];
                \$condition = \$match[2];
                \$deprecation = \$match[3];
                \$templates = self::parseTemplates(\$match[4]);
                \$exception = false;
                preg_match_all('/--DATA--(.*?)(?:--CONFIG--(.*?))?--EXPECT--(.*?)(?=\\-\\-DATA\\-\\-|\$)/s', \$test, \$outputs, PREG_SET_ORDER);
            } else {
                throw new \\InvalidArgumentException(sprintf('DevLaon \"%s\" is not valid.', str_replace(\$fixturesDir.'/', '', \$file)));
            }

            \$tests[] = [str_replace(\$fixturesDir.'/', '', \$file), \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation];
        }

        if (\$legacyTests && empty(\$tests)) {
            // add a dummy test to avoid a PHPUnit message
            return [['not', '-', '', [], '', []]];
        }

        return \$tests;
    }

    public function getLegacyTests()
    {
        return \$this->getTests('testLegacyIntegration', true);
    }

    protected function doIntegrationTest(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation = '')
    {
        if (!\$outputs) {
            \$this->markTestSkipped('no tests to run');
        }

        if (\$condition) {
            eval('\$ret = '.\$condition.';');
            if (!\$ret) {
                \$this->markTestSkipped(\$condition);
            }
        }

        \$loader = new ArrayLoader(\$templates);

        foreach (\$outputs as \$i => \$match) {
            \$config = array_merge([
                'cache' => false,
                'strict_variables' => true,
            ], \$match[2] ? eval(\$match[2].';') : []);
            \$twig = new Environment(\$loader, \$config);
            \$twig->addGlobal('global', 'global');
            foreach (\$this->getRuntimeLoaders() as \$runtimeLoader) {
                \$twig->addRuntimeLoader(\$runtimeLoader);
            }

            foreach (\$this->getExtensions() as \$extension) {
                \$twig->addExtension(\$extension);
            }

            foreach (\$this->getTwigFilters() as \$filter) {
                \$twig->addFilter(\$filter);
            }

            foreach (\$this->getTwigTests() as \$test) {
                \$twig->addTest(\$test);
            }

            foreach (\$this->getTwigFunctions() as \$function) {
                \$twig->addFunction(\$function);
            }

            // avoid using the same PHP class name for different cases
            \$p = new \\ReflectionProperty(\$twig, 'templateClassPrefix');
            \$p->setAccessible(true);
            \$p->setValue(\$twig, '__TwigTemplate_'.hash('sha256', uniqid(mt_rand(), true), false).'_');

            \$deprecations = [];
            try {
                \$prevHandler = set_error_handler(function (\$type, \$msg, \$file, \$line, \$context = []) use (&\$deprecations, &\$prevHandler) {
                    if (E_USER_DEPRECATED === \$type) {
                        \$deprecations[] = \$msg;

                        return true;
                    }

                    return \$prevHandler ? \$prevHandler(\$type, \$msg, \$file, \$line, \$context) : false;
                });

                \$template = \$twig->load('index.twig');
            } catch (\\Exception \$e) {
                if (false !== \$exception) {
                    \$message = \$e->getMessage();
                    \$this->assertSame(trim(\$exception), trim(sprintf('%s: %s', \\get_class(\$e), \$message)));
                    \$last = substr(\$message, \\strlen(\$message) - 1);
                    \$this->assertTrue('.' === \$last || '?' === \$last, 'Exception message must end with a dot or a question mark.');

                    return;
                }

                throw new Error(sprintf('%s: %s', \\get_class(\$e), \$e->getMessage()), -1, null, \$e);
            } finally {
                restore_error_handler();
            }

            \$this->assertSame(\$deprecation, implode(\"\\n\", \$deprecations));

            try {
                \$output = trim(\$template->render(eval(\$match[1].';')), \"\\n \");
            } catch (\\Exception \$e) {
                if (false !== \$exception) {
                    \$this->assertSame(trim(\$exception), trim(sprintf('%s: %s', \\get_class(\$e), \$e->getMessage())));

                    return;
                }

                \$e = new Error(sprintf('%s: %s', \\get_class(\$e), \$e->getMessage()), -1, null, \$e);

                \$output = trim(sprintf('%s: %s', \\get_class(\$e), \$e->getMessage()));
            }

            if (false !== \$exception) {
                list(\$class) = explode(':', \$exception);
                \$constraintClass = class_exists('PHPUnit\\Framework\\Constraint\\Exception') ? 'PHPUnit\\Framework\\Constraint\\Exception' : 'PHPUnit_Framework_Constraint_Exception';
                \$this->assertThat(null, new \$constraintClass(\$class));
            }

            \$expected = trim(\$match[3], \"\\n \");

            if (\$expected !== \$output) {
                printf(\"Compiled templates that failed on case %d:\\n\", \$i + 1);

                foreach (array_keys(\$templates) as \$name) {
                    echo \"Template: \$name\\n\";
                    echo \$twig->compile(\$twig->parse(\$twig->tokenize(\$twig->getLoader()->getSourceContext(\$name))));
                }
            }
            \$this->assertEquals(\$expected, \$output, \$message.' (in '.\$file.')');
        }
    }

    protected static function parseTemplates(\$test)
    {
        \$templates = [];
        preg_match_all('/--TEMPLATE(?:\\((.*?)\\))?--(.*?)(?=\\-\\-TEMPLATE|\$)/s', \$test, \$matches, PREG_SET_ORDER);
        foreach (\$matches as \$match) {
            \$templates[(\$match[1] ? \$match[1] : 'index.twig')] = \$match[2];
        }

        return \$templates;
    }
}

class_alias('Twig\\Test\\IntegrationTestCase', 'Twig_Test_IntegrationTestCase');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Test/IntegrationTestCase.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Test;

use PHPUnit\\Framework\\TestCase;
use Twig\\Environment;
use Twig\\Error\\Error;
use Twig\\Extension\\ExtensionInterface;
use Twig\\Loader\\ArrayLoader;
use Twig\\RuntimeLoader\\RuntimeLoaderInterface;
use Twig\\TwigFilter;
use Twig\\TwigFunction;
use Twig\\TwigTest;

/**
 * Integration test helper.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Karma Dordrak <drak@zikula.org>
 */
abstract class IntegrationTestCase extends TestCase
{
    /**
     * @return string
     */
    abstract protected function getFixturesDir();

    /**
     * @return RuntimeLoaderInterface[]
     */
    protected function getRuntimeLoaders()
    {
        return [];
    }

    /**
     * @return ExtensionInterface[]
     */
    protected function getExtensions()
    {
        return [];
    }

    /**
     * @return TwigFilter[]
     */
    protected function getTwigFilters()
    {
        return [];
    }

    /**
     * @return TwigFunction[]
     */
    protected function getTwigFunctions()
    {
        return [];
    }

    /**
     * @return TwigTest[]
     */
    protected function getTwigTests()
    {
        return [];
    }

    /**
     * @dataProvider getTests
     */
    public function testIntegration(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation = '')
    {
        \$this->doIntegrationTest(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation);
    }

    /**
     * @dataProvider getLegacyTests
     * @group legacy
     */
    public function testLegacyIntegration(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation = '')
    {
        \$this->doIntegrationTest(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation);
    }

    public function getTests(\$name, \$legacyTests = false)
    {
        \$fixturesDir = realpath(\$this->getFixturesDir());
        \$tests = [];

        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$fixturesDir), \\RecursiveIteratorIterator::LEAVES_ONLY) as \$file) {
            if (!preg_match('/\\.test\$/', \$file)) {
                continue;
            }

            if (\$legacyTests xor false !== strpos(\$file->getRealpath(), '.legacy.test')) {
                continue;
            }

            \$test = file_get_contents(\$file->getRealpath());

            if (preg_match('/--TEST--\\s*(.*?)\\s*(?:--CONDITION--\\s*(.*))?\\s*(?:--DEPRECATION--\\s*(.*?))?\\s*((?:--TEMPLATE(?:\\(.*?\\))?--(?:.*?))+)\\s*(?:--DATA--\\s*(.*))?\\s*--EXCEPTION--\\s*(.*)/sx', \$test, \$match)) {
                \$message = \$match[1];
                \$condition = \$match[2];
                \$deprecation = \$match[3];
                \$templates = self::parseTemplates(\$match[4]);
                \$exception = \$match[6];
                \$outputs = [[null, \$match[5], null, '']];
            } elseif (preg_match('/--TEST--\\s*(.*?)\\s*(?:--CONDITION--\\s*(.*))?\\s*(?:--DEPRECATION--\\s*(.*?))?\\s*((?:--TEMPLATE(?:\\(.*?\\))?--(?:.*?))+)--DATA--.*?--EXPECT--.*/s', \$test, \$match)) {
                \$message = \$match[1];
                \$condition = \$match[2];
                \$deprecation = \$match[3];
                \$templates = self::parseTemplates(\$match[4]);
                \$exception = false;
                preg_match_all('/--DATA--(.*?)(?:--CONFIG--(.*?))?--EXPECT--(.*?)(?=\\-\\-DATA\\-\\-|\$)/s', \$test, \$outputs, PREG_SET_ORDER);
            } else {
                throw new \\InvalidArgumentException(sprintf('DevLaon \"%s\" is not valid.', str_replace(\$fixturesDir.'/', '', \$file)));
            }

            \$tests[] = [str_replace(\$fixturesDir.'/', '', \$file), \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation];
        }

        if (\$legacyTests && empty(\$tests)) {
            // add a dummy test to avoid a PHPUnit message
            return [['not', '-', '', [], '', []]];
        }

        return \$tests;
    }

    public function getLegacyTests()
    {
        return \$this->getTests('testLegacyIntegration', true);
    }

    protected function doIntegrationTest(\$file, \$message, \$condition, \$templates, \$exception, \$outputs, \$deprecation = '')
    {
        if (!\$outputs) {
            \$this->markTestSkipped('no tests to run');
        }

        if (\$condition) {
            eval('\$ret = '.\$condition.';');
            if (!\$ret) {
                \$this->markTestSkipped(\$condition);
            }
        }

        \$loader = new ArrayLoader(\$templates);

        foreach (\$outputs as \$i => \$match) {
            \$config = array_merge([
                'cache' => false,
                'strict_variables' => true,
            ], \$match[2] ? eval(\$match[2].';') : []);
            \$twig = new Environment(\$loader, \$config);
            \$twig->addGlobal('global', 'global');
            foreach (\$this->getRuntimeLoaders() as \$runtimeLoader) {
                \$twig->addRuntimeLoader(\$runtimeLoader);
            }

            foreach (\$this->getExtensions() as \$extension) {
                \$twig->addExtension(\$extension);
            }

            foreach (\$this->getTwigFilters() as \$filter) {
                \$twig->addFilter(\$filter);
            }

            foreach (\$this->getTwigTests() as \$test) {
                \$twig->addTest(\$test);
            }

            foreach (\$this->getTwigFunctions() as \$function) {
                \$twig->addFunction(\$function);
            }

            // avoid using the same PHP class name for different cases
            \$p = new \\ReflectionProperty(\$twig, 'templateClassPrefix');
            \$p->setAccessible(true);
            \$p->setValue(\$twig, '__TwigTemplate_'.hash('sha256', uniqid(mt_rand(), true), false).'_');

            \$deprecations = [];
            try {
                \$prevHandler = set_error_handler(function (\$type, \$msg, \$file, \$line, \$context = []) use (&\$deprecations, &\$prevHandler) {
                    if (E_USER_DEPRECATED === \$type) {
                        \$deprecations[] = \$msg;

                        return true;
                    }

                    return \$prevHandler ? \$prevHandler(\$type, \$msg, \$file, \$line, \$context) : false;
                });

                \$template = \$twig->load('index.twig');
            } catch (\\Exception \$e) {
                if (false !== \$exception) {
                    \$message = \$e->getMessage();
                    \$this->assertSame(trim(\$exception), trim(sprintf('%s: %s', \\get_class(\$e), \$message)));
                    \$last = substr(\$message, \\strlen(\$message) - 1);
                    \$this->assertTrue('.' === \$last || '?' === \$last, 'Exception message must end with a dot or a question mark.');

                    return;
                }

                throw new Error(sprintf('%s: %s', \\get_class(\$e), \$e->getMessage()), -1, null, \$e);
            } finally {
                restore_error_handler();
            }

            \$this->assertSame(\$deprecation, implode(\"\\n\", \$deprecations));

            try {
                \$output = trim(\$template->render(eval(\$match[1].';')), \"\\n \");
            } catch (\\Exception \$e) {
                if (false !== \$exception) {
                    \$this->assertSame(trim(\$exception), trim(sprintf('%s: %s', \\get_class(\$e), \$e->getMessage())));

                    return;
                }

                \$e = new Error(sprintf('%s: %s', \\get_class(\$e), \$e->getMessage()), -1, null, \$e);

                \$output = trim(sprintf('%s: %s', \\get_class(\$e), \$e->getMessage()));
            }

            if (false !== \$exception) {
                list(\$class) = explode(':', \$exception);
                \$constraintClass = class_exists('PHPUnit\\Framework\\Constraint\\Exception') ? 'PHPUnit\\Framework\\Constraint\\Exception' : 'PHPUnit_Framework_Constraint_Exception';
                \$this->assertThat(null, new \$constraintClass(\$class));
            }

            \$expected = trim(\$match[3], \"\\n \");

            if (\$expected !== \$output) {
                printf(\"Compiled templates that failed on case %d:\\n\", \$i + 1);

                foreach (array_keys(\$templates) as \$name) {
                    echo \"Template: \$name\\n\";
                    echo \$twig->compile(\$twig->parse(\$twig->tokenize(\$twig->getLoader()->getSourceContext(\$name))));
                }
            }
            \$this->assertEquals(\$expected, \$output, \$message.' (in '.\$file.')');
        }
    }

    protected static function parseTemplates(\$test)
    {
        \$templates = [];
        preg_match_all('/--TEMPLATE(?:\\((.*?)\\))?--(.*?)(?=\\-\\-TEMPLATE|\$)/s', \$test, \$matches, PREG_SET_ORDER);
        foreach (\$matches as \$match) {
            \$templates[(\$match[1] ? \$match[1] : 'index.twig')] = \$match[2];
        }

        return \$templates;
    }
}

class_alias('Twig\\Test\\IntegrationTestCase', 'Twig_Test_IntegrationTestCase');
", "vendor/twig/twig/src/Test/IntegrationTestCase.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Test/IntegrationTestCase.php");
    }
}
