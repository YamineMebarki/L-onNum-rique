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

/* vendor/twig/twig/src/Node/ForLoopNode.php */
class __TwigTemplate_a3f5c6b19a23aebc4a51e9bbfb4a0eca180095785f8b8e5e8dce2d80f1898217 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/ForLoopNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/ForLoopNode.php"));

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

namespace Twig\\Node;

use Twig\\Compiler;

/**
 * Internal node used by the for node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ForLoopNode extends Node
{
    public function __construct(int \$lineno, string \$tag = null)
    {
        parent::__construct([], ['with_loop' => false, 'ifexpr' => false, 'else' => false], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        if (\$this->getAttribute('else')) {
            \$compiler->write(\"\\\$context['_iterated'] = true;\\n\");
        }

        if (\$this->getAttribute('with_loop')) {
            \$compiler
                ->write(\"++\\\$context['loop']['index0'];\\n\")
                ->write(\"++\\\$context['loop']['index'];\\n\")
                ->write(\"\\\$context['loop']['first'] = false;\\n\")
            ;

            if (!\$this->getAttribute('ifexpr')) {
                \$compiler
                    ->write(\"if (isset(\\\$context['loop']['length'])) {\\n\")
                    ->indent()
                    ->write(\"--\\\$context['loop']['revindex0'];\\n\")
                    ->write(\"--\\\$context['loop']['revindex'];\\n\")
                    ->write(\"\\\$context['loop']['last'] = 0 === \\\$context['loop']['revindex0'];\\n\")
                    ->outdent()
                    ->write(\"}\\n\")
                ;
            }
        }
    }
}

class_alias('Twig\\Node\\ForLoopNode', 'Twig_Node_ForLoop');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/ForLoopNode.php";
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

namespace Twig\\Node;

use Twig\\Compiler;

/**
 * Internal node used by the for node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ForLoopNode extends Node
{
    public function __construct(int \$lineno, string \$tag = null)
    {
        parent::__construct([], ['with_loop' => false, 'ifexpr' => false, 'else' => false], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        if (\$this->getAttribute('else')) {
            \$compiler->write(\"\\\$context['_iterated'] = true;\\n\");
        }

        if (\$this->getAttribute('with_loop')) {
            \$compiler
                ->write(\"++\\\$context['loop']['index0'];\\n\")
                ->write(\"++\\\$context['loop']['index'];\\n\")
                ->write(\"\\\$context['loop']['first'] = false;\\n\")
            ;

            if (!\$this->getAttribute('ifexpr')) {
                \$compiler
                    ->write(\"if (isset(\\\$context['loop']['length'])) {\\n\")
                    ->indent()
                    ->write(\"--\\\$context['loop']['revindex0'];\\n\")
                    ->write(\"--\\\$context['loop']['revindex'];\\n\")
                    ->write(\"\\\$context['loop']['last'] = 0 === \\\$context['loop']['revindex0'];\\n\")
                    ->outdent()
                    ->write(\"}\\n\")
                ;
            }
        }
    }
}

class_alias('Twig\\Node\\ForLoopNode', 'Twig_Node_ForLoop');
", "vendor/twig/twig/src/Node/ForLoopNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/ForLoopNode.php");
    }
}
