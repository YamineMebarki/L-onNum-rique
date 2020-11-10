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

/* vendor/twig/twig/src/Source.php */
class __TwigTemplate_f704a0fc82c2c057933f9aab3031e7e7e3c8535fe57bc948b12b29a78d92c8d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Source.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Source.php"));

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

namespace Twig;

/**
 * Holds information about a non-compiled Twig template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Source
{
    private \$code;
    private \$name;
    private \$path;

    /**
     * @param string \$code The template source code
     * @param string \$name The template logical name
     * @param string \$path The filesystem path of the template if any
     */
    public function __construct(string \$code, string \$name, string \$path = '')
    {
        \$this->code = \$code;
        \$this->name = \$name;
        \$this->path = \$path;
    }

    public function getCode(): string
    {
        return \$this->code;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function getPath(): string
    {
        return \$this->path;
    }
}

class_alias('Twig\\Source', 'Twig_Source');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Source.php";
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

namespace Twig;

/**
 * Holds information about a non-compiled Twig template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Source
{
    private \$code;
    private \$name;
    private \$path;

    /**
     * @param string \$code The template source code
     * @param string \$name The template logical name
     * @param string \$path The filesystem path of the template if any
     */
    public function __construct(string \$code, string \$name, string \$path = '')
    {
        \$this->code = \$code;
        \$this->name = \$name;
        \$this->path = \$path;
    }

    public function getCode(): string
    {
        return \$this->code;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function getPath(): string
    {
        return \$this->path;
    }
}

class_alias('Twig\\Source', 'Twig_Source');
", "vendor/twig/twig/src/Source.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Source.php");
    }
}
