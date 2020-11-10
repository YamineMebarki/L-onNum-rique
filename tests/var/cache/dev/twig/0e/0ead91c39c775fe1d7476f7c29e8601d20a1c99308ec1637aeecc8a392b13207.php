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

/* vendor/symfony/intl/Tests/Collator/AbstractCollatorTest.php */
class __TwigTemplate_bcf2c06ec2454ea6b113044da6f7b0d3d3f12c74bc1c59f63c53a7674d6ec533 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Collator/AbstractCollatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Collator/AbstractCollatorTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Collator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Collator\\Collator;

/**
 * DevLaon case for Collator implementations.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractCollatorTest extends TestCase
{
    /**
     * @dataProvider asortProvider
     */
    public function testAsort(\$array, \$sortFlag, \$expected)
    {
        \$collator = \$this->getCollator('en');
        \$collator->asort(\$array, \$sortFlag);
        \$this->assertSame(\$expected, \$array);
    }

    public function asortProvider()
    {
        return [
            /* array, sortFlag, expected */
            [
                ['a', 'b', 'c'],
                Collator::SORT_REGULAR,
                ['a', 'b', 'c'],
            ],
            [
                ['c', 'b', 'a'],
                Collator::SORT_REGULAR,
                [2 => 'a', 1 => 'b',  0 => 'c'],
            ],
            [
                ['b', 'c', 'a'],
                Collator::SORT_REGULAR,
                [2 => 'a', 0 => 'b', 1 => 'c'],
            ],
        ];
    }

    /**
     * @param string \$locale
     *
     * @return \\Collator
     */
    abstract protected function getCollator(\$locale);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Collator/AbstractCollatorTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Collator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Collator\\Collator;

/**
 * DevLaon case for Collator implementations.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractCollatorTest extends TestCase
{
    /**
     * @dataProvider asortProvider
     */
    public function testAsort(\$array, \$sortFlag, \$expected)
    {
        \$collator = \$this->getCollator('en');
        \$collator->asort(\$array, \$sortFlag);
        \$this->assertSame(\$expected, \$array);
    }

    public function asortProvider()
    {
        return [
            /* array, sortFlag, expected */
            [
                ['a', 'b', 'c'],
                Collator::SORT_REGULAR,
                ['a', 'b', 'c'],
            ],
            [
                ['c', 'b', 'a'],
                Collator::SORT_REGULAR,
                [2 => 'a', 1 => 'b',  0 => 'c'],
            ],
            [
                ['b', 'c', 'a'],
                Collator::SORT_REGULAR,
                [2 => 'a', 0 => 'b', 1 => 'c'],
            ],
        ];
    }

    /**
     * @param string \$locale
     *
     * @return \\Collator
     */
    abstract protected function getCollator(\$locale);
}
", "vendor/symfony/intl/Tests/Collator/AbstractCollatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Collator/AbstractCollatorTest.php");
    }
}
