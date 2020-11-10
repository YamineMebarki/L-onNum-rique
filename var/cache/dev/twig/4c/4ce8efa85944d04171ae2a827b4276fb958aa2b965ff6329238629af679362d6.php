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

/* vendor/symfony/form/Util/ServerParams.php */
class __TwigTemplate_4369eece2c887dbb8b57381441868f3a517869d15a65aadcde7ca146d046f46a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/ServerParams.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/ServerParams.php"));

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

namespace Symfony\\Component\\Form\\Util;

use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ServerParams
{
    private \$requestStack;

    public function __construct(RequestStack \$requestStack = null)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * Returns true if the POST max size has been exceeded in the request.
     *
     * @return bool
     */
    public function hasPostMaxSizeBeenExceeded()
    {
        \$contentLength = \$this->getContentLength();
        \$maxContentLength = \$this->getPostMaxSize();

        return \$maxContentLength && \$contentLength > \$maxContentLength;
    }

    /**
     * Returns maximum post size in bytes.
     *
     * @return int|null The maximum post size in bytes
     */
    public function getPostMaxSize()
    {
        \$iniMax = strtolower(\$this->getNormalizedIniPostMaxSize());

        if ('' === \$iniMax) {
            return null;
        }

        \$max = ltrim(\$iniMax, '+');
        if (0 === strpos(\$max, '0x')) {
            \$max = \\intval(\$max, 16);
        } elseif (0 === strpos(\$max, '0')) {
            \$max = \\intval(\$max, 8);
        } else {
            \$max = (int) \$max;
        }

        switch (substr(\$iniMax, -1)) {
            case 't': \$max *= 1024;
            // no break
            case 'g': \$max *= 1024;
            // no break
            case 'm': \$max *= 1024;
            // no break
            case 'k': \$max *= 1024;
        }

        return \$max;
    }

    /**
     * Returns the normalized \"post_max_size\" ini setting.
     *
     * @return string
     */
    public function getNormalizedIniPostMaxSize()
    {
        return strtoupper(trim(ini_get('post_max_size')));
    }

    /**
     * Returns the content length of the request.
     *
     * @return mixed The request content length
     */
    public function getContentLength()
    {
        if (null !== \$this->requestStack && null !== \$request = \$this->requestStack->getCurrentRequest()) {
            return \$request->server->get('CONTENT_LENGTH');
        }

        return isset(\$_SERVER['CONTENT_LENGTH'])
            ? (int) \$_SERVER['CONTENT_LENGTH']
            : null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Util/ServerParams.php";
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

namespace Symfony\\Component\\Form\\Util;

use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ServerParams
{
    private \$requestStack;

    public function __construct(RequestStack \$requestStack = null)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * Returns true if the POST max size has been exceeded in the request.
     *
     * @return bool
     */
    public function hasPostMaxSizeBeenExceeded()
    {
        \$contentLength = \$this->getContentLength();
        \$maxContentLength = \$this->getPostMaxSize();

        return \$maxContentLength && \$contentLength > \$maxContentLength;
    }

    /**
     * Returns maximum post size in bytes.
     *
     * @return int|null The maximum post size in bytes
     */
    public function getPostMaxSize()
    {
        \$iniMax = strtolower(\$this->getNormalizedIniPostMaxSize());

        if ('' === \$iniMax) {
            return null;
        }

        \$max = ltrim(\$iniMax, '+');
        if (0 === strpos(\$max, '0x')) {
            \$max = \\intval(\$max, 16);
        } elseif (0 === strpos(\$max, '0')) {
            \$max = \\intval(\$max, 8);
        } else {
            \$max = (int) \$max;
        }

        switch (substr(\$iniMax, -1)) {
            case 't': \$max *= 1024;
            // no break
            case 'g': \$max *= 1024;
            // no break
            case 'm': \$max *= 1024;
            // no break
            case 'k': \$max *= 1024;
        }

        return \$max;
    }

    /**
     * Returns the normalized \"post_max_size\" ini setting.
     *
     * @return string
     */
    public function getNormalizedIniPostMaxSize()
    {
        return strtoupper(trim(ini_get('post_max_size')));
    }

    /**
     * Returns the content length of the request.
     *
     * @return mixed The request content length
     */
    public function getContentLength()
    {
        if (null !== \$this->requestStack && null !== \$request = \$this->requestStack->getCurrentRequest()) {
            return \$request->server->get('CONTENT_LENGTH');
        }

        return isset(\$_SERVER['CONTENT_LENGTH'])
            ? (int) \$_SERVER['CONTENT_LENGTH']
            : null;
    }
}
", "vendor/symfony/form/Util/ServerParams.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Util/ServerParams.php");
    }
}
