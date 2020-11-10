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

/* vendor/symfony/expression-language/Node/BinaryNode.php */
class __TwigTemplate_14e66c6f33cad9d8d68c6bc632019eb89f93119e379b8f20a5873ce8fcba7ec9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/BinaryNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/BinaryNode.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Node;

use Symfony\\Component\\ExpressionLanguage\\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class BinaryNode extends Node
{
    private static \$operators = [
        '~' => '.',
        'and' => '&&',
        'or' => '||',
    ];

    private static \$functions = [
        '**' => 'pow',
        '..' => 'range',
        'in' => 'in_array',
        'not in' => '!in_array',
    ];

    public function __construct(string \$operator, Node \$left, Node \$right)
    {
        parent::__construct(
            ['left' => \$left, 'right' => \$right],
            ['operator' => \$operator]
        );
    }

    public function compile(Compiler \$compiler)
    {
        \$operator = \$this->attributes['operator'];

        if ('matches' == \$operator) {
            \$compiler
                ->raw('preg_match(')
                ->compile(\$this->nodes['right'])
                ->raw(', ')
                ->compile(\$this->nodes['left'])
                ->raw(')')
            ;

            return;
        }

        if (isset(self::\$functions[\$operator])) {
            \$compiler
                ->raw(sprintf('%s(', self::\$functions[\$operator]))
                ->compile(\$this->nodes['left'])
                ->raw(', ')
                ->compile(\$this->nodes['right'])
                ->raw(')')
            ;

            return;
        }

        if (isset(self::\$operators[\$operator])) {
            \$operator = self::\$operators[\$operator];
        }

        \$compiler
            ->raw('(')
            ->compile(\$this->nodes['left'])
            ->raw(' ')
            ->raw(\$operator)
            ->raw(' ')
            ->compile(\$this->nodes['right'])
            ->raw(')')
        ;
    }

    public function evaluate(\$functions, \$values)
    {
        \$operator = \$this->attributes['operator'];
        \$left = \$this->nodes['left']->evaluate(\$functions, \$values);

        if (isset(self::\$functions[\$operator])) {
            \$right = \$this->nodes['right']->evaluate(\$functions, \$values);

            if ('not in' === \$operator) {
                return !\\in_array(\$left, \$right);
            }
            \$f = self::\$functions[\$operator];

            return \$f(\$left, \$right);
        }

        switch (\$operator) {
            case 'or':
            case '||':
                return \$left || \$this->nodes['right']->evaluate(\$functions, \$values);
            case 'and':
            case '&&':
                return \$left && \$this->nodes['right']->evaluate(\$functions, \$values);
        }

        \$right = \$this->nodes['right']->evaluate(\$functions, \$values);

        switch (\$operator) {
            case '|':
                return \$left | \$right;
            case '^':
                return \$left ^ \$right;
            case '&':
                return \$left & \$right;
            case '==':
                return \$left == \$right;
            case '===':
                return \$left === \$right;
            case '!=':
                return \$left != \$right;
            case '!==':
                return \$left !== \$right;
            case '<':
                return \$left < \$right;
            case '>':
                return \$left > \$right;
            case '>=':
                return \$left >= \$right;
            case '<=':
                return \$left <= \$right;
            case 'not in':
                return !\\in_array(\$left, \$right);
            case 'in':
                return \\in_array(\$left, \$right);
            case '+':
                return \$left + \$right;
            case '-':
                return \$left - \$right;
            case '~':
                return \$left.\$right;
            case '*':
                return \$left * \$right;
            case '/':
                return \$left / \$right;
            case '%':
                return \$left % \$right;
            case 'matches':
                return preg_match(\$right, \$left);
        }
    }

    public function toArray()
    {
        return ['(', \$this->nodes['left'], ' '.\$this->attributes['operator'].' ', \$this->nodes['right'], ')'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Node/BinaryNode.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Node;

use Symfony\\Component\\ExpressionLanguage\\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class BinaryNode extends Node
{
    private static \$operators = [
        '~' => '.',
        'and' => '&&',
        'or' => '||',
    ];

    private static \$functions = [
        '**' => 'pow',
        '..' => 'range',
        'in' => 'in_array',
        'not in' => '!in_array',
    ];

    public function __construct(string \$operator, Node \$left, Node \$right)
    {
        parent::__construct(
            ['left' => \$left, 'right' => \$right],
            ['operator' => \$operator]
        );
    }

    public function compile(Compiler \$compiler)
    {
        \$operator = \$this->attributes['operator'];

        if ('matches' == \$operator) {
            \$compiler
                ->raw('preg_match(')
                ->compile(\$this->nodes['right'])
                ->raw(', ')
                ->compile(\$this->nodes['left'])
                ->raw(')')
            ;

            return;
        }

        if (isset(self::\$functions[\$operator])) {
            \$compiler
                ->raw(sprintf('%s(', self::\$functions[\$operator]))
                ->compile(\$this->nodes['left'])
                ->raw(', ')
                ->compile(\$this->nodes['right'])
                ->raw(')')
            ;

            return;
        }

        if (isset(self::\$operators[\$operator])) {
            \$operator = self::\$operators[\$operator];
        }

        \$compiler
            ->raw('(')
            ->compile(\$this->nodes['left'])
            ->raw(' ')
            ->raw(\$operator)
            ->raw(' ')
            ->compile(\$this->nodes['right'])
            ->raw(')')
        ;
    }

    public function evaluate(\$functions, \$values)
    {
        \$operator = \$this->attributes['operator'];
        \$left = \$this->nodes['left']->evaluate(\$functions, \$values);

        if (isset(self::\$functions[\$operator])) {
            \$right = \$this->nodes['right']->evaluate(\$functions, \$values);

            if ('not in' === \$operator) {
                return !\\in_array(\$left, \$right);
            }
            \$f = self::\$functions[\$operator];

            return \$f(\$left, \$right);
        }

        switch (\$operator) {
            case 'or':
            case '||':
                return \$left || \$this->nodes['right']->evaluate(\$functions, \$values);
            case 'and':
            case '&&':
                return \$left && \$this->nodes['right']->evaluate(\$functions, \$values);
        }

        \$right = \$this->nodes['right']->evaluate(\$functions, \$values);

        switch (\$operator) {
            case '|':
                return \$left | \$right;
            case '^':
                return \$left ^ \$right;
            case '&':
                return \$left & \$right;
            case '==':
                return \$left == \$right;
            case '===':
                return \$left === \$right;
            case '!=':
                return \$left != \$right;
            case '!==':
                return \$left !== \$right;
            case '<':
                return \$left < \$right;
            case '>':
                return \$left > \$right;
            case '>=':
                return \$left >= \$right;
            case '<=':
                return \$left <= \$right;
            case 'not in':
                return !\\in_array(\$left, \$right);
            case 'in':
                return \\in_array(\$left, \$right);
            case '+':
                return \$left + \$right;
            case '-':
                return \$left - \$right;
            case '~':
                return \$left.\$right;
            case '*':
                return \$left * \$right;
            case '/':
                return \$left / \$right;
            case '%':
                return \$left % \$right;
            case 'matches':
                return preg_match(\$right, \$left);
        }
    }

    public function toArray()
    {
        return ['(', \$this->nodes['left'], ' '.\$this->attributes['operator'].' ', \$this->nodes['right'], ')'];
    }
}
", "vendor/symfony/expression-language/Node/BinaryNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Node/BinaryNode.php");
    }
}
