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

/* vendor/symfony/framework-bundle/Tests/Templating/Helper/Fixtures/StubTemplateNameParser.php */
class __TwigTemplate_3a54e039286011121b687aa9382b5469e63fc9857bb8c5554ab3a5e902e03d80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/Fixtures/StubTemplateNameParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/Helper/Fixtures/StubTemplateNameParser.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper\\Fixtures;

use Symfony\\Component\\Templating\\TemplateNameParserInterface;
use Symfony\\Component\\Templating\\TemplateReference;

class StubTemplateNameParser implements TemplateNameParserInterface
{
    private \$root;

    private \$rootTheme;

    public function __construct(\$root, \$rootTheme)
    {
        \$this->root = \$root;
        \$this->rootTheme = \$rootTheme;
    }

    public function parse(\$name)
    {
        list(\$bundle, \$controller, \$template) = explode(':', \$name, 3);

        if ('_' == \$template[0]) {
            \$path = \$this->rootTheme.'/Custom/'.\$template;
        } elseif ('TestBundle' === \$bundle) {
            \$path = \$this->rootTheme.'/'.\$controller.'/'.\$template;
        } else {
            \$path = \$this->root.'/'.\$controller.'/'.\$template;
        }

        return new TemplateReference(\$path, 'php');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/Helper/Fixtures/StubTemplateNameParser.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating\\Helper\\Fixtures;

use Symfony\\Component\\Templating\\TemplateNameParserInterface;
use Symfony\\Component\\Templating\\TemplateReference;

class StubTemplateNameParser implements TemplateNameParserInterface
{
    private \$root;

    private \$rootTheme;

    public function __construct(\$root, \$rootTheme)
    {
        \$this->root = \$root;
        \$this->rootTheme = \$rootTheme;
    }

    public function parse(\$name)
    {
        list(\$bundle, \$controller, \$template) = explode(':', \$name, 3);

        if ('_' == \$template[0]) {
            \$path = \$this->rootTheme.'/Custom/'.\$template;
        } elseif ('TestBundle' === \$bundle) {
            \$path = \$this->rootTheme.'/'.\$controller.'/'.\$template;
        } else {
            \$path = \$this->root.'/'.\$controller.'/'.\$template;
        }

        return new TemplateReference(\$path, 'php');
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/Helper/Fixtures/StubTemplateNameParser.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/Helper/Fixtures/StubTemplateNameParser.php");
    }
}
