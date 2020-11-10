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

/* vendor/symfony/console/Tests/Question/ChoiceQuestionTest.php */
class __TwigTemplate_6359abe9be05a88c9a1f997bb8d156c2d91a5011d62214f9abf20304ec1ef5bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Question/ChoiceQuestionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Question/ChoiceQuestionTest.php"));

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
use Symfony\\Component\\Console\\Question\\ChoiceQuestion;

class ChoiceQuestionTest extends TestCase
{
    /**
     * @dataProvider selectUseCases
     */
    public function testSelectUseCases(\$multiSelect, \$answers, \$expected, \$message)
    {
        \$question = new ChoiceQuestion('A question', [
            'First response',
            'Second response',
            'Third response',
            'Fourth response',
        ]);

        \$question->setMultiselect(\$multiSelect);

        foreach (\$answers as \$answer) {
            \$validator = \$question->getValidator();
            \$actual = \$validator(\$answer);

            \$this->assertEquals(\$actual, \$expected, \$message);
        }
    }

    public function selectUseCases()
    {
        return [
            [
                false,
                ['First response', 'First response ', ' First response', ' First response '],
                'First response',
                'When passed single answer on singleSelect, the defaultValidator must return this answer as a string',
            ],
            [
                true,
                ['First response', 'First response ', ' First response', ' First response '],
                ['First response'],
                'When passed single answer on MultiSelect, the defaultValidator must return this answer as an array',
            ],
            [
                true,
                ['First response,Second response', ' First response , Second response '],
                ['First response', 'Second response'],
                'When passed multiple answers on MultiSelect, the defaultValidator must return these answers as an array',
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
        return "vendor/symfony/console/Tests/Question/ChoiceQuestionTest.php";
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
use Symfony\\Component\\Console\\Question\\ChoiceQuestion;

class ChoiceQuestionTest extends TestCase
{
    /**
     * @dataProvider selectUseCases
     */
    public function testSelectUseCases(\$multiSelect, \$answers, \$expected, \$message)
    {
        \$question = new ChoiceQuestion('A question', [
            'First response',
            'Second response',
            'Third response',
            'Fourth response',
        ]);

        \$question->setMultiselect(\$multiSelect);

        foreach (\$answers as \$answer) {
            \$validator = \$question->getValidator();
            \$actual = \$validator(\$answer);

            \$this->assertEquals(\$actual, \$expected, \$message);
        }
    }

    public function selectUseCases()
    {
        return [
            [
                false,
                ['First response', 'First response ', ' First response', ' First response '],
                'First response',
                'When passed single answer on singleSelect, the defaultValidator must return this answer as a string',
            ],
            [
                true,
                ['First response', 'First response ', ' First response', ' First response '],
                ['First response'],
                'When passed single answer on MultiSelect, the defaultValidator must return this answer as an array',
            ],
            [
                true,
                ['First response,Second response', ' First response , Second response '],
                ['First response', 'Second response'],
                'When passed multiple answers on MultiSelect, the defaultValidator must return these answers as an array',
            ],
        ];
    }
}
", "vendor/symfony/console/Tests/Question/ChoiceQuestionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Question/ChoiceQuestionTest.php");
    }
}
