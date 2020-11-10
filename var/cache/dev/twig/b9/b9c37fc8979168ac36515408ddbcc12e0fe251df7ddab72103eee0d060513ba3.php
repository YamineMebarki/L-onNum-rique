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

/* vendor/symfony/config/Resource/FileExistenceResource.php */
class __TwigTemplate_1e92ad61874511de966cce59210b117dea476984b861eeb41c5b17f4f1ce4d53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Resource/FileExistenceResource.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Resource/FileExistenceResource.php"));

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

namespace Symfony\\Component\\Config\\Resource;

/**
 * FileExistenceResource represents a resource stored on the filesystem.
 * Freshness is only evaluated against resource creation or deletion.
 *
 * The resource can be a file or a directory.
 *
 * @author Charles-Henri Bruyand <charleshenri.bruyand@gmail.com>
 *
 * @final since Symfony 4.3
 */
class FileExistenceResource implements SelfCheckingResourceInterface
{
    private \$resource;

    private \$exists;

    /**
     * @param string \$resource The file path to the resource
     */
    public function __construct(string \$resource)
    {
        \$this->resource = \$resource;
        \$this->exists = file_exists(\$resource);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return \$this->resource;
    }

    /**
     * @return string The file path to the resource
     */
    public function getResource()
    {
        return \$this->resource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(\$timestamp)
    {
        return file_exists(\$this->resource) === \$this->exists;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Resource/FileExistenceResource.php";
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

namespace Symfony\\Component\\Config\\Resource;

/**
 * FileExistenceResource represents a resource stored on the filesystem.
 * Freshness is only evaluated against resource creation or deletion.
 *
 * The resource can be a file or a directory.
 *
 * @author Charles-Henri Bruyand <charleshenri.bruyand@gmail.com>
 *
 * @final since Symfony 4.3
 */
class FileExistenceResource implements SelfCheckingResourceInterface
{
    private \$resource;

    private \$exists;

    /**
     * @param string \$resource The file path to the resource
     */
    public function __construct(string \$resource)
    {
        \$this->resource = \$resource;
        \$this->exists = file_exists(\$resource);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return \$this->resource;
    }

    /**
     * @return string The file path to the resource
     */
    public function getResource()
    {
        return \$this->resource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(\$timestamp)
    {
        return file_exists(\$this->resource) === \$this->exists;
    }
}
", "vendor/symfony/config/Resource/FileExistenceResource.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Resource/FileExistenceResource.php");
    }
}
