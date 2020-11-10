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

/* vendor/symfony/debug/Tests/Fixtures/FinalClasses.php */
class __TwigTemplate_cd4789bb17dbc464e0519ba81ee4d535af3b96e3829e81812fc8bb1bfeaa969b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/FinalClasses.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/FinalClasses.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

/**
 * @final since version 3.3.
 */
class FinalClass1
{
    // simple comment
}

/**
 * @final
 */
class FinalClass2
{
    // no comment
}

/**
 * @final comment with @@@ and ***
 *
 * @author John Doe
 */
class FinalClass3
{
    // with comment and a tag after
}

/**
 * @final
 *
 * @author John Doe
 */
class FinalClass4
{
    // without comment and a tag after
}

/**
 * @author John Doe
 *
 *
 * @final multiline
 * comment
 */
class FinalClass5
{
    // with comment and a tag before
}

/**
 * @author John Doe
 *
 * @final
 */
class FinalClass6
{
    // without comment and a tag before
}

/**
 * @author John Doe
 *
 * @final another
 *        multiline comment...
 *
 * @return string
 */
class FinalClass7
{
    // with comment and a tag before and after
}

/**
 * @author John Doe
 * @final
 *
 * @return string
 */
class FinalClass8
{
    // without comment and a tag before and after
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/Fixtures/FinalClasses.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

/**
 * @final since version 3.3.
 */
class FinalClass1
{
    // simple comment
}

/**
 * @final
 */
class FinalClass2
{
    // no comment
}

/**
 * @final comment with @@@ and ***
 *
 * @author John Doe
 */
class FinalClass3
{
    // with comment and a tag after
}

/**
 * @final
 *
 * @author John Doe
 */
class FinalClass4
{
    // without comment and a tag after
}

/**
 * @author John Doe
 *
 *
 * @final multiline
 * comment
 */
class FinalClass5
{
    // with comment and a tag before
}

/**
 * @author John Doe
 *
 * @final
 */
class FinalClass6
{
    // without comment and a tag before
}

/**
 * @author John Doe
 *
 * @final another
 *        multiline comment...
 *
 * @return string
 */
class FinalClass7
{
    // with comment and a tag before and after
}

/**
 * @author John Doe
 * @final
 *
 * @return string
 */
class FinalClass8
{
    // without comment and a tag before and after
}
", "vendor/symfony/debug/Tests/Fixtures/FinalClasses.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/Fixtures/FinalClasses.php");
    }
}
