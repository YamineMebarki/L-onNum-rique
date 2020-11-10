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

/* vendor/twig/twig/src/Node/IfNode.php */
class __TwigTemplate_9becd83ef8173e2cb33de023974c442a79bb8da675e60a7d8247a866827f1d90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/IfNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/IfNode.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;

/**
 * Represents an if node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IfNode extends Node
{
    public function __construct(Node \$tests, Node \$else = null, int \$lineno, string \$tag = null)
    {
        \$nodes = ['tests' => \$tests];
        if (null !== \$else) {
            \$nodes['else'] = \$else;
        }

        parent::__construct(\$nodes, [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);
        for (\$i = 0, \$count = \\count(\$this->getNode('tests')); \$i < \$count; \$i += 2) {
            if (\$i > 0) {
                \$compiler
                    ->outdent()
                    ->write('} elseif (')
                ;
            } else {
                \$compiler
                    ->write('if (')
                ;
            }

            \$compiler
                ->subcompile(\$this->getNode('tests')->getNode(\$i))
                ->raw(\") {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('tests')->getNode(\$i + 1))
            ;
        }

        if (\$this->hasNode('else')) {
            \$compiler
                ->outdent()
                ->write(\"} else {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('else'))
            ;
        }

        \$compiler
            ->outdent()
            ->write(\"}\\n\");
    }
}

class_alias('Twig\\Node\\IfNode', 'Twig_Node_If');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/IfNode.php";
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
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;

/**
 * Represents an if node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IfNode extends Node
{
    public function __construct(Node \$tests, Node \$else = null, int \$lineno, string \$tag = null)
    {
        \$nodes = ['tests' => \$tests];
        if (null !== \$else) {
            \$nodes['else'] = \$else;
        }

        parent::__construct(\$nodes, [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);
        for (\$i = 0, \$count = \\count(\$this->getNode('tests')); \$i < \$count; \$i += 2) {
            if (\$i > 0) {
                \$compiler
                    ->outdent()
                    ->write('} elseif (')
                ;
            } else {
                \$compiler
                    ->write('if (')
                ;
            }

            \$compiler
                ->subcompile(\$this->getNode('tests')->getNode(\$i))
                ->raw(\") {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('tests')->getNode(\$i + 1))
            ;
        }

        if (\$this->hasNode('else')) {
            \$compiler
                ->outdent()
                ->write(\"} else {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('else'))
            ;
        }

        \$compiler
            ->outdent()
            ->write(\"}\\n\");
    }
}

class_alias('Twig\\Node\\IfNode', 'Twig_Node_If');
", "vendor/twig/twig/src/Node/IfNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/IfNode.php");
    }
}
