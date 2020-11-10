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

/* vendor/symfony/flex/src/ComposerRepository.php */
class __TwigTemplate_7dd0248cba8764efe0867cf483467c6228537473d53fb7bf0e930eded4af2dc9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/ComposerRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/ComposerRepository.php"));

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

use Composer\\Repository\\ComposerRepository as BaseComposerRepository;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ComposerRepository extends BaseComposerRepository
{
    private \$providerFiles;

    protected function loadProviderListings(\$data)
    {
        if (null !== \$this->providerFiles) {
            parent::loadProviderListings(\$data);

            return;
        }

        \$data = [\$data];

        while (\$data) {
            \$this->providerFiles = [];
            foreach (\$data as \$data) {
                \$this->loadProviderListings(\$data);
            }

            \$loadingFiles = \$this->providerFiles;
            \$this->providerFiles = null;
            \$data = [];
            \$this->rfs->download(\$loadingFiles, function (...\$args) use (&\$data) {
                \$data[] = \$this->fetchFile(...\$args);
            });
        }
    }

    protected function fetchFile(\$filename, \$cacheKey = null, \$sha256 = null, \$storeLastModifiedTime = false)
    {
        if (null !== \$this->providerFiles) {
            \$this->providerFiles[] = [\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime];

            return [];
        }

        return parent::fetchFile(\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/ComposerRepository.php";
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

use Composer\\Repository\\ComposerRepository as BaseComposerRepository;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ComposerRepository extends BaseComposerRepository
{
    private \$providerFiles;

    protected function loadProviderListings(\$data)
    {
        if (null !== \$this->providerFiles) {
            parent::loadProviderListings(\$data);

            return;
        }

        \$data = [\$data];

        while (\$data) {
            \$this->providerFiles = [];
            foreach (\$data as \$data) {
                \$this->loadProviderListings(\$data);
            }

            \$loadingFiles = \$this->providerFiles;
            \$this->providerFiles = null;
            \$data = [];
            \$this->rfs->download(\$loadingFiles, function (...\$args) use (&\$data) {
                \$data[] = \$this->fetchFile(...\$args);
            });
        }
    }

    protected function fetchFile(\$filename, \$cacheKey = null, \$sha256 = null, \$storeLastModifiedTime = false)
    {
        if (null !== \$this->providerFiles) {
            \$this->providerFiles[] = [\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime];

            return [];
        }

        return parent::fetchFile(\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime);
    }
}
", "vendor/symfony/flex/src/ComposerRepository.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/ComposerRepository.php");
    }
}
