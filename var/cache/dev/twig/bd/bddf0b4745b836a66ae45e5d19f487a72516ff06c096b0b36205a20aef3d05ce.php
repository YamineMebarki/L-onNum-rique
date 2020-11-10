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

/* vendor/symfony/flex/src/TruncatedComposerRepository.php */
class __TwigTemplate_6cfcb69c2993b7778eb2d7c07f9eb332af76ccb9e987473b425d77ca9ae94b1e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/TruncatedComposerRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/TruncatedComposerRepository.php"));

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

namespace Symfony\\Flex;

use Composer\\Config;
use Composer\\EventDispatcher\\EventDispatcher;
use Composer\\IO\\IOInterface;
use Composer\\Repository\\ComposerRepository as BaseComposerRepository;
use Composer\\Util\\RemoteFilesystem;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TruncatedComposerRepository extends BaseComposerRepository
{
    public function __construct(array \$repoConfig, IOInterface \$io, Config \$config, EventDispatcher \$eventDispatcher = null, RemoteFilesystem \$rfs = null)
    {
        parent::__construct(\$repoConfig, \$io, \$config, \$eventDispatcher, \$rfs);

        \$this->cache = new Cache(\$io, \$config->get('cache-repo-dir').'/'.preg_replace('{[^a-z0-9.]}i', '-', \$this->url), 'a-z0-9.\$');
    }

    public function setSymfonyRequire(string \$symfonyRequire, Downloader \$downloader, IOInterface \$io)
    {
        \$this->cache->setSymfonyRequire(\$symfonyRequire, \$downloader, \$io);
    }

    protected function fetchFile(\$filename, \$cacheKey = null, \$sha256 = null, \$storeLastModifiedTime = false)
    {
        \$data = parent::fetchFile(\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime);

        return \\is_array(\$data) ? \$this->cache->removeLegacyTags(\$data) : \$data;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/TruncatedComposerRepository.php";
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

namespace Symfony\\Flex;

use Composer\\Config;
use Composer\\EventDispatcher\\EventDispatcher;
use Composer\\IO\\IOInterface;
use Composer\\Repository\\ComposerRepository as BaseComposerRepository;
use Composer\\Util\\RemoteFilesystem;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TruncatedComposerRepository extends BaseComposerRepository
{
    public function __construct(array \$repoConfig, IOInterface \$io, Config \$config, EventDispatcher \$eventDispatcher = null, RemoteFilesystem \$rfs = null)
    {
        parent::__construct(\$repoConfig, \$io, \$config, \$eventDispatcher, \$rfs);

        \$this->cache = new Cache(\$io, \$config->get('cache-repo-dir').'/'.preg_replace('{[^a-z0-9.]}i', '-', \$this->url), 'a-z0-9.\$');
    }

    public function setSymfonyRequire(string \$symfonyRequire, Downloader \$downloader, IOInterface \$io)
    {
        \$this->cache->setSymfonyRequire(\$symfonyRequire, \$downloader, \$io);
    }

    protected function fetchFile(\$filename, \$cacheKey = null, \$sha256 = null, \$storeLastModifiedTime = false)
    {
        \$data = parent::fetchFile(\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime);

        return \\is_array(\$data) ? \$this->cache->removeLegacyTags(\$data) : \$data;
    }
}
", "vendor/symfony/flex/src/TruncatedComposerRepository.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/TruncatedComposerRepository.php");
    }
}
