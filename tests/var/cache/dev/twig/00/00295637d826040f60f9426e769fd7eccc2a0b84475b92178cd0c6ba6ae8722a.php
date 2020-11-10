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

/* vendor/symfony/routing/Tests/Matcher/DumpedUrlMatcherTest.php */
class __TwigTemplate_66d6931b61eac3f4a7c8780d249594dd8256eccabf08765ee9c87e405100addd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/DumpedUrlMatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/DumpedUrlMatcherTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests\\Matcher;

use Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @group legacy
 */
class DumpedUrlMatcherTest extends UrlMatcherTest
{
    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        static \$i = 0;

        \$class = 'DumpedUrlMatcher'.++\$i;
        \$dumper = new PhpMatcherDumper(\$routes);
        eval('?>'.\$dumper->dump(['class' => \$class]));

        return new \$class(\$context ?: new RequestContext());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Matcher/DumpedUrlMatcherTest.php";
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

namespace Symfony\\Component\\Routing\\Tests\\Matcher;

use Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @group legacy
 */
class DumpedUrlMatcherTest extends UrlMatcherTest
{
    protected function getUrlMatcher(RouteCollection \$routes, RequestContext \$context = null)
    {
        static \$i = 0;

        \$class = 'DumpedUrlMatcher'.++\$i;
        \$dumper = new PhpMatcherDumper(\$routes);
        eval('?>'.\$dumper->dump(['class' => \$class]));

        return new \$class(\$context ?: new RequestContext());
    }
}
", "vendor/symfony/routing/Tests/Matcher/DumpedUrlMatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Matcher/DumpedUrlMatcherTest.php");
    }
}
