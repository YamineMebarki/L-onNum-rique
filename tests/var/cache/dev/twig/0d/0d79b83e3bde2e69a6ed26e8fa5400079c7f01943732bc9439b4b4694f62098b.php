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

/* vendor/symfony/twig-bridge/Node/RenderBlockNode.php */
class __TwigTemplate_6a889fb06aa044bab5ee4bfdc0f8f464eeb95981dbace34a7ec84e1b3a1c7593 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/RenderBlockNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/RenderBlockNode.php"));

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

namespace Symfony\\Bridge\\Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\FunctionExpression;

/**
 * Compiles a call to {@link \\Symfony\\Component\\Form\\FormRendererInterface::renderBlock()}.
 *
 * The function name is used as block name. For example, if the function name
 * is \"foo\", the block \"foo\" will be rendered.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RenderBlockNode extends FunctionExpression
{
    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);
        \$arguments = iterator_to_array(\$this->getNode('arguments'));
        \$compiler->write('\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->renderBlock(');

        if (isset(\$arguments[0])) {
            \$compiler->subcompile(\$arguments[0]);
            \$compiler->raw(', \\''.\$this->getAttribute('name').'\\'');

            if (isset(\$arguments[1])) {
                \$compiler->raw(', ');
                \$compiler->subcompile(\$arguments[1]);
            }
        }

        \$compiler->raw(')');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Node/RenderBlockNode.php";
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

namespace Symfony\\Bridge\\Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\FunctionExpression;

/**
 * Compiles a call to {@link \\Symfony\\Component\\Form\\FormRendererInterface::renderBlock()}.
 *
 * The function name is used as block name. For example, if the function name
 * is \"foo\", the block \"foo\" will be rendered.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RenderBlockNode extends FunctionExpression
{
    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);
        \$arguments = iterator_to_array(\$this->getNode('arguments'));
        \$compiler->write('\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->renderBlock(');

        if (isset(\$arguments[0])) {
            \$compiler->subcompile(\$arguments[0]);
            \$compiler->raw(', \\''.\$this->getAttribute('name').'\\'');

            if (isset(\$arguments[1])) {
                \$compiler->raw(', ');
                \$compiler->subcompile(\$arguments[1]);
            }
        }

        \$compiler->raw(')');
    }
}
", "vendor/symfony/twig-bridge/Node/RenderBlockNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Node/RenderBlockNode.php");
    }
}
