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

/* vendor/symfony/dotenv/Exception/FormatExceptionContext.php */
class __TwigTemplate_91c409e04088dd5664ea4bdad1ffbfefe9db9a587f33590be14ab381603375ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dotenv/Exception/FormatExceptionContext.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dotenv/Exception/FormatExceptionContext.php"));

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

namespace Symfony\\Component\\Dotenv\\Exception;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class FormatExceptionContext
{
    private \$data;
    private \$path;
    private \$lineno;
    private \$cursor;

    public function __construct(string \$data, string \$path, int \$lineno, int \$cursor)
    {
        \$this->data = \$data;
        \$this->path = \$path;
        \$this->lineno = \$lineno;
        \$this->cursor = \$cursor;
    }

    public function getPath()
    {
        return \$this->path;
    }

    public function getLineno()
    {
        return \$this->lineno;
    }

    public function getDetails()
    {
        \$before = str_replace(\"\\n\", '\\n', substr(\$this->data, max(0, \$this->cursor - 20), min(20, \$this->cursor)));
        \$after = str_replace(\"\\n\", '\\n', substr(\$this->data, \$this->cursor, 20));

        return '...'.\$before.\$after.\"...\\n\".str_repeat(' ', \\strlen(\$before) + 2).'^ line '.\$this->lineno.' offset '.\$this->cursor;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dotenv/Exception/FormatExceptionContext.php";
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

namespace Symfony\\Component\\Dotenv\\Exception;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class FormatExceptionContext
{
    private \$data;
    private \$path;
    private \$lineno;
    private \$cursor;

    public function __construct(string \$data, string \$path, int \$lineno, int \$cursor)
    {
        \$this->data = \$data;
        \$this->path = \$path;
        \$this->lineno = \$lineno;
        \$this->cursor = \$cursor;
    }

    public function getPath()
    {
        return \$this->path;
    }

    public function getLineno()
    {
        return \$this->lineno;
    }

    public function getDetails()
    {
        \$before = str_replace(\"\\n\", '\\n', substr(\$this->data, max(0, \$this->cursor - 20), min(20, \$this->cursor)));
        \$after = str_replace(\"\\n\", '\\n', substr(\$this->data, \$this->cursor, 20));

        return '...'.\$before.\$after.\"...\\n\".str_repeat(' ', \\strlen(\$before) + 2).'^ line '.\$this->lineno.' offset '.\$this->cursor;
    }
}
", "vendor/symfony/dotenv/Exception/FormatExceptionContext.php", "/var/www/public/DevLaon/templates/vendor/symfony/dotenv/Exception/FormatExceptionContext.php");
    }
}
