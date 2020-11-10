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

/* vendor/symfony/cache/Tests/Fixtures/ArrayCache.php */
class __TwigTemplate_5565abafcd0fd977db81954907fecaed8ef1275a1b7271224bc01c6e660dba3e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Fixtures/ArrayCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Fixtures/ArrayCache.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Cache\\Tests\\Fixtures;

use Doctrine\\Common\\Cache\\CacheProvider;

class ArrayCache extends CacheProvider
{
    private \$data = [];

    protected function doFetch(\$id)
    {
        return \$this->doContains(\$id) ? \$this->data[\$id][0] : false;
    }

    protected function doContains(\$id)
    {
        if (!isset(\$this->data[\$id])) {
            return false;
        }

        \$expiry = \$this->data[\$id][1];

        return !\$expiry || microtime(true) < \$expiry || !\$this->doDelete(\$id);
    }

    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$this->data[\$id] = [\$data, \$lifeTime ? microtime(true) + \$lifeTime : false];

        return true;
    }

    protected function doDelete(\$id)
    {
        unset(\$this->data[\$id]);

        return true;
    }

    protected function doFlush()
    {
        \$this->data = [];

        return true;
    }

    protected function doGetStats()
    {
        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Fixtures/ArrayCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Cache\\Tests\\Fixtures;

use Doctrine\\Common\\Cache\\CacheProvider;

class ArrayCache extends CacheProvider
{
    private \$data = [];

    protected function doFetch(\$id)
    {
        return \$this->doContains(\$id) ? \$this->data[\$id][0] : false;
    }

    protected function doContains(\$id)
    {
        if (!isset(\$this->data[\$id])) {
            return false;
        }

        \$expiry = \$this->data[\$id][1];

        return !\$expiry || microtime(true) < \$expiry || !\$this->doDelete(\$id);
    }

    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$this->data[\$id] = [\$data, \$lifeTime ? microtime(true) + \$lifeTime : false];

        return true;
    }

    protected function doDelete(\$id)
    {
        unset(\$this->data[\$id]);

        return true;
    }

    protected function doFlush()
    {
        \$this->data = [];

        return true;
    }

    protected function doGetStats()
    {
        return null;
    }
}
", "vendor/symfony/cache/Tests/Fixtures/ArrayCache.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Fixtures/ArrayCache.php");
    }
}
