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

/* vendor/twig/twig/src/Node/SpacelessNode.php */
class __TwigTemplate_127faf2de017d6f017f77c65ba9171556ab946a7034efac73216e1fb21aee73e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/SpacelessNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/SpacelessNode.php"));

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
 * Represents a spaceless node.
 *
 * It removes spaces between HTML tags.
 *
 * @deprecated since Twig 2.7, to be removed in 3.0
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SpacelessNode extends Node implements NodeOutputInterface
{
    public function __construct(Node \$body, int \$lineno, string \$tag = 'spaceless')
    {
        parent::__construct(['body' => \$body], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
        ;
        if (\$compiler->getEnvironment()->isDebug()) {
            \$compiler->write(\"ob_start();\\n\");
        } else {
            \$compiler->write(\"ob_start(function () { return ''; });\\n\");
        }
        \$compiler
            ->subcompile(\$this->getNode('body'))
            ->write(\"echo trim(preg_replace('/>\\s+</', '><', ob_get_clean()));\\n\")
        ;
    }
}

class_alias('Twig\\Node\\SpacelessNode', 'Twig_Node_Spaceless');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/SpacelessNode.php";
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
 * Represents a spaceless node.
 *
 * It removes spaces between HTML tags.
 *
 * @deprecated since Twig 2.7, to be removed in 3.0
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SpacelessNode extends Node implements NodeOutputInterface
{
    public function __construct(Node \$body, int \$lineno, string \$tag = 'spaceless')
    {
        parent::__construct(['body' => \$body], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
        ;
        if (\$compiler->getEnvironment()->isDebug()) {
            \$compiler->write(\"ob_start();\\n\");
        } else {
            \$compiler->write(\"ob_start(function () { return ''; });\\n\");
        }
        \$compiler
            ->subcompile(\$this->getNode('body'))
            ->write(\"echo trim(preg_replace('/>\\s+</', '><', ob_get_clean()));\\n\")
        ;
    }
}

class_alias('Twig\\Node\\SpacelessNode', 'Twig_Node_Spaceless');
", "vendor/twig/twig/src/Node/SpacelessNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/SpacelessNode.php");
    }
}
