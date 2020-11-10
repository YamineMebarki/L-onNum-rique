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

/* vendor/symfony/phpunit-bridge/Legacy/CoverageListenerTrait.php */
class __TwigTemplate_35d6bad6c147699ea68f025fc5d64a14fa6215a60c16f5ac63e29deb1e6cb6b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Legacy/CoverageListenerTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Legacy/CoverageListenerTrait.php"));

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

namespace Symfony\\Bridge\\PhpUnit\\Legacy;

use PHPUnit\\Framework\\TestCase;
use PHPUnit\\Framework\\Warning;

/**
 * PHP 5.3 compatible trait-like shared implementation.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @internal
 */
class CoverageListenerTrait
{
    private \$sutFqcnResolver;
    private \$warningOnSutNotFound;
    private \$warnings;

    public function __construct(callable \$sutFqcnResolver = null, \$warningOnSutNotFound = false)
    {
        \$this->sutFqcnResolver = \$sutFqcnResolver;
        \$this->warningOnSutNotFound = \$warningOnSutNotFound;
        \$this->warnings = array();
    }

    public function startTest(\$test)
    {
        if (!\$test instanceof TestCase) {
            return;
        }

        \$annotations = \$test->getAnnotations();

        \$ignoredAnnotations = array('covers', 'coversDefaultClass', 'coversNothing');

        foreach (\$ignoredAnnotations as \$annotation) {
            if (isset(\$annotations['class'][\$annotation]) || isset(\$annotations['method'][\$annotation])) {
                return;
            }
        }

        \$sutFqcn = \$this->findSutFqcn(\$test);
        if (!\$sutFqcn) {
            if (\$this->warningOnSutNotFound) {
                \$message = 'Could not find the tested class.';
                // addWarning does not exist on old PHPUnit version
                if (method_exists(\$test->getTestResultObject(), 'addWarning') && class_exists(Warning::class)) {
                    \$test->getTestResultObject()->addWarning(\$test, new Warning(\$message), 0);
                } else {
                    \$this->warnings[] = sprintf(\"%s::%s\\n%s\", \\get_class(\$test), \$test->getName(), \$message);
                }
            }

            return;
        }

        \$testClass = \\PHPUnit\\Util\\Test::class;
        if (!class_exists(\$testClass, false)) {
            \$testClass = \\PHPUnit_Util_Test::class;
        }

        \$r = new \\ReflectionProperty(\$testClass, 'annotationCache');
        \$r->setAccessible(true);

        \$cache = \$r->getValue();
        \$cache = array_replace_recursive(\$cache, array(
            \\get_class(\$test) => array(
                'covers' => \\is_array(\$sutFqcn) ? \$sutFqcn : array(\$sutFqcn),
            ),
        ));
        \$r->setValue(\$testClass, \$cache);
    }

    private function findSutFqcn(\$test)
    {
        if (\$this->sutFqcnResolver) {
            \$resolver = \$this->sutFqcnResolver;

            return \$resolver(\$test);
        }

        \$class = \\get_class(\$test);

        \$sutFqcn = str_replace('\\\\Tests\\\\', '\\\\', \$class);
        \$sutFqcn = preg_replace('{DevLaon\$}', '', \$sutFqcn);

        return class_exists(\$sutFqcn) ? \$sutFqcn : null;
    }

    public function __sleep()
    {
        throw new \\BadMethodCallException('Cannot serialize '.__CLASS__);
    }

    public function __wakeup()
    {
        throw new \\BadMethodCallException('Cannot unserialize '.__CLASS__);
    }

    public function __destruct()
    {
        if (!\$this->warnings) {
            return;
        }

        echo \"\\n\";

        foreach (\$this->warnings as \$key => \$warning) {
            echo sprintf(\"%d) %s\\n\", ++\$key, \$warning);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Legacy/CoverageListenerTrait.php";
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

namespace Symfony\\Bridge\\PhpUnit\\Legacy;

use PHPUnit\\Framework\\TestCase;
use PHPUnit\\Framework\\Warning;

/**
 * PHP 5.3 compatible trait-like shared implementation.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @internal
 */
class CoverageListenerTrait
{
    private \$sutFqcnResolver;
    private \$warningOnSutNotFound;
    private \$warnings;

    public function __construct(callable \$sutFqcnResolver = null, \$warningOnSutNotFound = false)
    {
        \$this->sutFqcnResolver = \$sutFqcnResolver;
        \$this->warningOnSutNotFound = \$warningOnSutNotFound;
        \$this->warnings = array();
    }

    public function startTest(\$test)
    {
        if (!\$test instanceof TestCase) {
            return;
        }

        \$annotations = \$test->getAnnotations();

        \$ignoredAnnotations = array('covers', 'coversDefaultClass', 'coversNothing');

        foreach (\$ignoredAnnotations as \$annotation) {
            if (isset(\$annotations['class'][\$annotation]) || isset(\$annotations['method'][\$annotation])) {
                return;
            }
        }

        \$sutFqcn = \$this->findSutFqcn(\$test);
        if (!\$sutFqcn) {
            if (\$this->warningOnSutNotFound) {
                \$message = 'Could not find the tested class.';
                // addWarning does not exist on old PHPUnit version
                if (method_exists(\$test->getTestResultObject(), 'addWarning') && class_exists(Warning::class)) {
                    \$test->getTestResultObject()->addWarning(\$test, new Warning(\$message), 0);
                } else {
                    \$this->warnings[] = sprintf(\"%s::%s\\n%s\", \\get_class(\$test), \$test->getName(), \$message);
                }
            }

            return;
        }

        \$testClass = \\PHPUnit\\Util\\Test::class;
        if (!class_exists(\$testClass, false)) {
            \$testClass = \\PHPUnit_Util_Test::class;
        }

        \$r = new \\ReflectionProperty(\$testClass, 'annotationCache');
        \$r->setAccessible(true);

        \$cache = \$r->getValue();
        \$cache = array_replace_recursive(\$cache, array(
            \\get_class(\$test) => array(
                'covers' => \\is_array(\$sutFqcn) ? \$sutFqcn : array(\$sutFqcn),
            ),
        ));
        \$r->setValue(\$testClass, \$cache);
    }

    private function findSutFqcn(\$test)
    {
        if (\$this->sutFqcnResolver) {
            \$resolver = \$this->sutFqcnResolver;

            return \$resolver(\$test);
        }

        \$class = \\get_class(\$test);

        \$sutFqcn = str_replace('\\\\Tests\\\\', '\\\\', \$class);
        \$sutFqcn = preg_replace('{DevLaon\$}', '', \$sutFqcn);

        return class_exists(\$sutFqcn) ? \$sutFqcn : null;
    }

    public function __sleep()
    {
        throw new \\BadMethodCallException('Cannot serialize '.__CLASS__);
    }

    public function __wakeup()
    {
        throw new \\BadMethodCallException('Cannot unserialize '.__CLASS__);
    }

    public function __destruct()
    {
        if (!\$this->warnings) {
            return;
        }

        echo \"\\n\";

        foreach (\$this->warnings as \$key => \$warning) {
            echo sprintf(\"%d) %s\\n\", ++\$key, \$warning);
        }
    }
}
", "vendor/symfony/phpunit-bridge/Legacy/CoverageListenerTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Legacy/CoverageListenerTrait.php");
    }
}
