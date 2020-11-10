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

/* vendor/symfony/console/Tests/Question/ConfirmationQuestionTest.php */
class __TwigTemplate_5883255af01715602517dd5a06b7138ff904352ce8d22532ae96ddfe54d7b0ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Question/ConfirmationQuestionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Question/ConfirmationQuestionTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Question;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;

class ConfirmationQuestionTest extends TestCase
{
    /**
     * @dataProvider normalizerUsecases
     */
    public function testDefaultRegexUsecases(\$default, \$answers, \$expected, \$message)
    {
        \$sut = new ConfirmationQuestion('A question', \$default);

        foreach (\$answers as \$answer) {
            \$normalizer = \$sut->getNormalizer();
            \$actual = \$normalizer(\$answer);
            \$this->assertEquals(\$expected, \$actual, sprintf(\$message, \$answer));
        }
    }

    public function normalizerUsecases()
    {
        return [
            [
                true,
                ['y', 'Y', 'yes', 'YES', 'yEs', ''],
                true,
                'When default is true, the normalizer must return true for \"%s\"',
            ],
            [
                true,
                ['n', 'N', 'no', 'NO', 'nO', 'foo', '1', '0'],
                false,
                'When default is true, the normalizer must return false for \"%s\"',
            ],
            [
                false,
                ['y', 'Y', 'yes', 'YES', 'yEs'],
                true,
                'When default is false, the normalizer must return true for \"%s\"',
            ],
            [
                false,
                ['n', 'N', 'no', 'NO', 'nO', 'foo', '1', '0', ''],
                false,
                'When default is false, the normalizer must return false for \"%s\"',
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Question/ConfirmationQuestionTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Question;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;

class ConfirmationQuestionTest extends TestCase
{
    /**
     * @dataProvider normalizerUsecases
     */
    public function testDefaultRegexUsecases(\$default, \$answers, \$expected, \$message)
    {
        \$sut = new ConfirmationQuestion('A question', \$default);

        foreach (\$answers as \$answer) {
            \$normalizer = \$sut->getNormalizer();
            \$actual = \$normalizer(\$answer);
            \$this->assertEquals(\$expected, \$actual, sprintf(\$message, \$answer));
        }
    }

    public function normalizerUsecases()
    {
        return [
            [
                true,
                ['y', 'Y', 'yes', 'YES', 'yEs', ''],
                true,
                'When default is true, the normalizer must return true for \"%s\"',
            ],
            [
                true,
                ['n', 'N', 'no', 'NO', 'nO', 'foo', '1', '0'],
                false,
                'When default is true, the normalizer must return false for \"%s\"',
            ],
            [
                false,
                ['y', 'Y', 'yes', 'YES', 'yEs'],
                true,
                'When default is false, the normalizer must return true for \"%s\"',
            ],
            [
                false,
                ['n', 'N', 'no', 'NO', 'nO', 'foo', '1', '0', ''],
                false,
                'When default is false, the normalizer must return false for \"%s\"',
            ],
        ];
    }
}
", "vendor/symfony/console/Tests/Question/ConfirmationQuestionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Question/ConfirmationQuestionTest.php");
    }
}
