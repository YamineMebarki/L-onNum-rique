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

/* vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/AutowiredServices.php */
class __TwigTemplate_98efc5be83741638081d321b0266b738922f6f086affd3b8d49b09b7c072aa81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/AutowiredServices.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/AutowiredServices.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\AutowiringTypes;

use Doctrine\\Common\\Annotations\\Reader;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class AutowiredServices
{
    private \$annotationReader;
    private \$dispatcher;
    private \$cachePool;

    public function __construct(Reader \$annotationReader = null, EventDispatcherInterface \$dispatcher, CacheItemPoolInterface \$cachePool)
    {
        \$this->annotationReader = \$annotationReader;
        \$this->dispatcher = \$dispatcher;
        \$this->cachePool = \$cachePool;
    }

    public function getAnnotationReader()
    {
        return \$this->annotationReader;
    }

    public function getDispatcher()
    {
        return \$this->dispatcher;
    }

    public function getCachePool()
    {
        return \$this->cachePool;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/AutowiredServices.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\AutowiringTypes;

use Doctrine\\Common\\Annotations\\Reader;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class AutowiredServices
{
    private \$annotationReader;
    private \$dispatcher;
    private \$cachePool;

    public function __construct(Reader \$annotationReader = null, EventDispatcherInterface \$dispatcher, CacheItemPoolInterface \$cachePool)
    {
        \$this->annotationReader = \$annotationReader;
        \$this->dispatcher = \$dispatcher;
        \$this->cachePool = \$cachePool;
    }

    public function getAnnotationReader()
    {
        return \$this->annotationReader;
    }

    public function getDispatcher()
    {
        return \$this->dispatcher;
    }

    public function getCachePool()
    {
        return \$this->cachePool;
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/AutowiredServices.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/AutowiredServices.php");
    }
}
