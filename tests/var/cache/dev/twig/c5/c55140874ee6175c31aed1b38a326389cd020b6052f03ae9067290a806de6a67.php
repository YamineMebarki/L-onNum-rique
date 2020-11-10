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

/* vendor/symfony/expression-language/Node/UnaryNode.php */
class __TwigTemplate_546a2f58a0ebde8723c470275a7857f81616133d2319d7032c95a3354068644f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/UnaryNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/UnaryNode.php"));

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
class UnaryNode extends Node
{
    private static \$operators = [
        '!' => '!',
        'not' => '!',
        '+' => '+',
        '-' => '-',
    ];

    public function __construct(string \$operator, Node \$node)
    {
        parent::__construct(
            ['node' => \$node],
            ['operator' => \$operator]
        );
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->raw('(')
            ->raw(self::\$operators[\$this->attributes['operator']])
            ->compile(\$this->nodes['node'])
            ->raw(')')
        ;
    }

    public function evaluate(\$functions, \$values)
    {
        \$value = \$this->nodes['node']->evaluate(\$functions, \$values);
        switch (\$this->attributes['operator']) {
            case 'not':
            case '!':
                return !\$value;
            case '-':
                return -\$value;
        }

        return \$value;
    }

    public function toArray(): array
    {
        return ['(', \$this->attributes['operator'].' ', \$this->nodes['node'], ')'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Node/UnaryNode.php";
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
class UnaryNode extends Node
{
    private static \$operators = [
        '!' => '!',
        'not' => '!',
        '+' => '+',
        '-' => '-',
    ];

    public function __construct(string \$operator, Node \$node)
    {
        parent::__construct(
            ['node' => \$node],
            ['operator' => \$operator]
        );
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->raw('(')
            ->raw(self::\$operators[\$this->attributes['operator']])
            ->compile(\$this->nodes['node'])
            ->raw(')')
        ;
    }

    public function evaluate(\$functions, \$values)
    {
        \$value = \$this->nodes['node']->evaluate(\$functions, \$values);
        switch (\$this->attributes['operator']) {
            case 'not':
            case '!':
                return !\$value;
            case '-':
                return -\$value;
        }

        return \$value;
    }

    public function toArray(): array
    {
        return ['(', \$this->attributes['operator'].' ', \$this->nodes['node'], ')'];
    }
}
", "vendor/symfony/expression-language/Node/UnaryNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Node/UnaryNode.php");
    }
}
