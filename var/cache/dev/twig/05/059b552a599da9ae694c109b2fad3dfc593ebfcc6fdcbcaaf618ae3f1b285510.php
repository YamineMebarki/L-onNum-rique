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

/* vendor/twig/twig/src/Node/SandboxNode.php */
class __TwigTemplate_0db97d9b0bf460a8a60734729781afbf49d4052e23b9534ed9a812691eb9d1fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/SandboxNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/SandboxNode.php"));

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
 * Represents a sandbox node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SandboxNode extends Node
{
    public function __construct(Node \$body, int \$lineno, string \$tag = null)
    {
        parent::__construct(['body' => \$body], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write(\"if (!\\\$alreadySandboxed = \\\$this->sandbox->isSandboxed()) {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->enableSandbox();\\n\")
            ->outdent()
            ->write(\"}\\n\")
            ->subcompile(\$this->getNode('body'))
            ->write(\"if (!\\\$alreadySandboxed) {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->disableSandbox();\\n\")
            ->outdent()
            ->write(\"}\\n\")
        ;
    }
}

class_alias('Twig\\Node\\SandboxNode', 'Twig_Node_Sandbox');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/SandboxNode.php";
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
 * Represents a sandbox node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SandboxNode extends Node
{
    public function __construct(Node \$body, int \$lineno, string \$tag = null)
    {
        parent::__construct(['body' => \$body], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write(\"if (!\\\$alreadySandboxed = \\\$this->sandbox->isSandboxed()) {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->enableSandbox();\\n\")
            ->outdent()
            ->write(\"}\\n\")
            ->subcompile(\$this->getNode('body'))
            ->write(\"if (!\\\$alreadySandboxed) {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->disableSandbox();\\n\")
            ->outdent()
            ->write(\"}\\n\")
        ;
    }
}

class_alias('Twig\\Node\\SandboxNode', 'Twig_Node_Sandbox');
", "vendor/twig/twig/src/Node/SandboxNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/SandboxNode.php");
    }
}
