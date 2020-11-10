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

/* vendor/symfony/translation/Tests/Formatter/MessageFormatterTest.php */
class __TwigTemplate_4c5666fb27effec930e14362a6bddf29d6c5e44bac37790078981c9348cf4f99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Formatter/MessageFormatterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Formatter/MessageFormatterTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\Formatter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Formatter\\MessageFormatter;

class MessageFormatterTest extends TestCase
{
    /**
     * @dataProvider getTransMessages
     */
    public function testFormat(\$expected, \$message, \$parameters = [])
    {
        \$this->assertEquals(\$expected, \$this->getMessageFormatter()->format(\$message, 'en', \$parameters));
    }

    /**
     * @dataProvider getTransChoiceMessages
     * @group legacy
     */
    public function testFormatPlural(\$expected, \$message, \$number, \$parameters)
    {
        \$this->assertEquals(\$expected, \$this->getMessageFormatter()->choiceFormat(\$message, \$number, 'fr', \$parameters));
    }

    public function getTransMessages()
    {
        return [
            [
                'There is one apple',
                'There is one apple',
            ],
            [
                'There are 5 apples',
                'There are %count% apples',
                ['%count%' => 5],
            ],
            [
                'There are 5 apples',
                'There are ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " apples',
                ['";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "' => 5],
            ],
        ];
    }

    public function getTransChoiceMessages()
    {
        return [
            ['Il y a 0 pomme', '[0,1] Il y a %count% pomme|]1,Inf] Il y a %count% pommes', 0, ['%count%' => 0]],
            ['Il y a 1 pomme', '[0,1] Il y a %count% pomme|]1,Inf] Il y a %count% pommes', 1, ['%count%' => 1]],
            ['Il y a 10 pommes', '[0,1] Il y a %count% pomme|]1,Inf] Il y a %count% pommes', 10, ['%count%' => 10]],

            ['Il y a 0 pomme', 'Il y a %count% pomme|Il y a %count% pommes', 0, ['%count%' => 0]],
            ['Il y a 1 pomme', 'Il y a %count% pomme|Il y a %count% pommes', 1, ['%count%' => 1]],
            ['Il y a 10 pommes', 'Il y a %count% pomme|Il y a %count% pommes', 10, ['%count%' => 10]],

            ['Il y a 0 pomme', 'one: Il y a %count% pomme|more: Il y a %count% pommes', 0, ['%count%' => 0]],
            ['Il y a 1 pomme', 'one: Il y a %count% pomme|more: Il y a %count% pommes', 1, ['%count%' => 1]],
            ['Il y a 10 pommes', 'one: Il y a %count% pomme|more: Il y a %count% pommes', 10, ['%count%' => 10]],

            ['Il n\\'y a aucune pomme', '{0} Il n\\'y a aucune pomme|one: Il y a %count% pomme|more: Il y a %count% pommes', 0, ['%count%' => 0]],
            ['Il y a 1 pomme', '{0} Il n\\'y a aucune pomme|one: Il y a %count% pomme|more: Il y a %count% pommes', 1, ['%count%' => 1]],
            ['Il y a 10 pommes', '{0} Il n\\'y a aucune pomme|one: Il y a %count% pomme|more: Il y a %count% pommes', 10, ['%count%' => 10]],

            ['Il y a 0 pomme', '[0,1] Il y a %count% pomme|]1,Inf] Il y a %count% pommes', 0, ['%count%' => 0]],
        ];
    }

    private function getMessageFormatter()
    {
        return new MessageFormatter();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Formatter/MessageFormatterTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 51,  94 => 50,  43 => 1,);
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

namespace Symfony\\Component\\Translation\\Tests\\Formatter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Formatter\\MessageFormatter;

class MessageFormatterTest extends TestCase
{
    /**
     * @dataProvider getTransMessages
     */
    public function testFormat(\$expected, \$message, \$parameters = [])
    {
        \$this->assertEquals(\$expected, \$this->getMessageFormatter()->format(\$message, 'en', \$parameters));
    }

    /**
     * @dataProvider getTransChoiceMessages
     * @group legacy
     */
    public function testFormatPlural(\$expected, \$message, \$number, \$parameters)
    {
        \$this->assertEquals(\$expected, \$this->getMessageFormatter()->choiceFormat(\$message, \$number, 'fr', \$parameters));
    }

    public function getTransMessages()
    {
        return [
            [
                'There is one apple',
                'There is one apple',
            ],
            [
                'There are 5 apples',
                'There are %count% apples',
                ['%count%' => 5],
            ],
            [
                'There are 5 apples',
                'There are {{count}} apples',
                ['{{count}}' => 5],
            ],
        ];
    }

    public function getTransChoiceMessages()
    {
        return [
            ['Il y a 0 pomme', '[0,1] Il y a %count% pomme|]1,Inf] Il y a %count% pommes', 0, ['%count%' => 0]],
            ['Il y a 1 pomme', '[0,1] Il y a %count% pomme|]1,Inf] Il y a %count% pommes', 1, ['%count%' => 1]],
            ['Il y a 10 pommes', '[0,1] Il y a %count% pomme|]1,Inf] Il y a %count% pommes', 10, ['%count%' => 10]],

            ['Il y a 0 pomme', 'Il y a %count% pomme|Il y a %count% pommes', 0, ['%count%' => 0]],
            ['Il y a 1 pomme', 'Il y a %count% pomme|Il y a %count% pommes', 1, ['%count%' => 1]],
            ['Il y a 10 pommes', 'Il y a %count% pomme|Il y a %count% pommes', 10, ['%count%' => 10]],

            ['Il y a 0 pomme', 'one: Il y a %count% pomme|more: Il y a %count% pommes', 0, ['%count%' => 0]],
            ['Il y a 1 pomme', 'one: Il y a %count% pomme|more: Il y a %count% pommes', 1, ['%count%' => 1]],
            ['Il y a 10 pommes', 'one: Il y a %count% pomme|more: Il y a %count% pommes', 10, ['%count%' => 10]],

            ['Il n\\'y a aucune pomme', '{0} Il n\\'y a aucune pomme|one: Il y a %count% pomme|more: Il y a %count% pommes', 0, ['%count%' => 0]],
            ['Il y a 1 pomme', '{0} Il n\\'y a aucune pomme|one: Il y a %count% pomme|more: Il y a %count% pommes', 1, ['%count%' => 1]],
            ['Il y a 10 pommes', '{0} Il n\\'y a aucune pomme|one: Il y a %count% pomme|more: Il y a %count% pommes', 10, ['%count%' => 10]],

            ['Il y a 0 pomme', '[0,1] Il y a %count% pomme|]1,Inf] Il y a %count% pommes', 0, ['%count%' => 0]],
        ];
    }

    private function getMessageFormatter()
    {
        return new MessageFormatter();
    }
}
", "vendor/symfony/translation/Tests/Formatter/MessageFormatterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Formatter/MessageFormatterTest.php");
    }
}
