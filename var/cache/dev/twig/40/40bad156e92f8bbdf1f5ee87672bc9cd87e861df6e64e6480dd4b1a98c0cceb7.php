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

/* vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php */
class __TwigTemplate_4d1a15de307da1ea99607b72fba587396f7d823b5e456b4bdabaa1f89b0537ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php"));

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

namespace Symfony\\Component\\HttpKernel\\Profiler;

/**
 * ProfilerStorageInterface.
 *
 * This interface exists for historical reasons. The only supported
 * implementation is FileProfilerStorage.
 *
 * As the profiler must only be used on non-production servers, the file storage
 * is more than enough and no other implementations will ever be supported.
 *
 * @internal since 4.2
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ProfilerStorageInterface
{
    /**
     * Finds profiler tokens for the given criteria.
     *
     * @param string   \$ip     The IP
     * @param string   \$url    The URL
     * @param string   \$limit  The maximum number of tokens to return
     * @param string   \$method The request method
     * @param int|null \$start  The start date to search from
     * @param int|null \$end    The end date to search to
     *
     * @return array An array of tokens
     */
    public function find(\$ip, \$url, \$limit, \$method, \$start = null, \$end = null);

    /**
     * Reads data associated with the given token.
     *
     * The method returns false if the token does not exist in the storage.
     *
     * @param string \$token A token
     *
     * @return Profile|null The profile associated with token
     */
    public function read(\$token);

    /**
     * Saves a Profile.
     *
     * @return bool Write operation successful
     */
    public function write(Profile \$profile);

    /**
     * Purges all data from the database.
     */
    public function purge();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php";
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

namespace Symfony\\Component\\HttpKernel\\Profiler;

/**
 * ProfilerStorageInterface.
 *
 * This interface exists for historical reasons. The only supported
 * implementation is FileProfilerStorage.
 *
 * As the profiler must only be used on non-production servers, the file storage
 * is more than enough and no other implementations will ever be supported.
 *
 * @internal since 4.2
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ProfilerStorageInterface
{
    /**
     * Finds profiler tokens for the given criteria.
     *
     * @param string   \$ip     The IP
     * @param string   \$url    The URL
     * @param string   \$limit  The maximum number of tokens to return
     * @param string   \$method The request method
     * @param int|null \$start  The start date to search from
     * @param int|null \$end    The end date to search to
     *
     * @return array An array of tokens
     */
    public function find(\$ip, \$url, \$limit, \$method, \$start = null, \$end = null);

    /**
     * Reads data associated with the given token.
     *
     * The method returns false if the token does not exist in the storage.
     *
     * @param string \$token A token
     *
     * @return Profile|null The profile associated with token
     */
    public function read(\$token);

    /**
     * Saves a Profile.
     *
     * @return bool Write operation successful
     */
    public function write(Profile \$profile);

    /**
     * Purges all data from the database.
     */
    public function purge();
}
", "vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php");
    }
}
