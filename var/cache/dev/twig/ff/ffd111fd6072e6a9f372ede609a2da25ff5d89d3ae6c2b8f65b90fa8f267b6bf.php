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

/* vendor/symfony/twig-bridge/Node/FormThemeNode.php */
class __TwigTemplate_6a7ac1016d465d3aa6ecdc2c4d2833ca2e695a20d09a52096fe2f75a493fa71c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/FormThemeNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/FormThemeNode.php"));

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

use Symfony\\Component\\Form\\FormRenderer;
use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormThemeNode extends Node
{
    public function __construct(Node \$form, Node \$resources, int \$lineno, string \$tag = null, bool \$only = false)
    {
        parent::__construct(['form' => \$form, 'resources' => \$resources], ['only' => \$only], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('\$this->env->getRuntime(')
            ->string(FormRenderer::class)
            ->raw(')->setTheme(')
            ->subcompile(\$this->getNode('form'))
            ->raw(', ')
            ->subcompile(\$this->getNode('resources'))
            ->raw(', ')
            ->raw(false === \$this->getAttribute('only') ? 'true' : 'false')
            ->raw(\");\\n\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Node/FormThemeNode.php";
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

use Symfony\\Component\\Form\\FormRenderer;
use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormThemeNode extends Node
{
    public function __construct(Node \$form, Node \$resources, int \$lineno, string \$tag = null, bool \$only = false)
    {
        parent::__construct(['form' => \$form, 'resources' => \$resources], ['only' => \$only], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('\$this->env->getRuntime(')
            ->string(FormRenderer::class)
            ->raw(')->setTheme(')
            ->subcompile(\$this->getNode('form'))
            ->raw(', ')
            ->subcompile(\$this->getNode('resources'))
            ->raw(', ')
            ->raw(false === \$this->getAttribute('only') ? 'true' : 'false')
            ->raw(\");\\n\");
    }
}
", "vendor/symfony/twig-bridge/Node/FormThemeNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Node/FormThemeNode.php");
    }
}
