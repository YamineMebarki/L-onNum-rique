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

/* vendor/symfony/http-client/Internal/NativeClientState.php */
class __TwigTemplate_5c26708980bb64755935addb62ac215f8b882f145474e939eef44c103a084f7e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Internal/NativeClientState.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Internal/NativeClientState.php"));

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

namespace Symfony\\Component\\HttpClient\\Internal;

use Symfony\\Component\\HttpClient\\Response\\NativeResponse;

/**
 * Internal representation of the native client's state.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 *
 * @internal
 */
final class NativeClientState extends ClientState
{
    /** @var int */
    public \$id;
    /** @var NativeResponse[] */
    public \$pendingResponses = [];
    /** @var int */
    public \$maxHostConnections = PHP_INT_MAX;
    /** @var int */
    public \$responseCount = 0;
    /** @var string[] */
    public \$dnsCache = [];
    /** @var resource[] */
    public \$handles = [];
    /** @var bool */
    public \$sleep = false;

    public function __construct()
    {
        \$this->id = random_int(PHP_INT_MIN, PHP_INT_MAX);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Internal/NativeClientState.php";
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

namespace Symfony\\Component\\HttpClient\\Internal;

use Symfony\\Component\\HttpClient\\Response\\NativeResponse;

/**
 * Internal representation of the native client's state.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 *
 * @internal
 */
final class NativeClientState extends ClientState
{
    /** @var int */
    public \$id;
    /** @var NativeResponse[] */
    public \$pendingResponses = [];
    /** @var int */
    public \$maxHostConnections = PHP_INT_MAX;
    /** @var int */
    public \$responseCount = 0;
    /** @var string[] */
    public \$dnsCache = [];
    /** @var resource[] */
    public \$handles = [];
    /** @var bool */
    public \$sleep = false;

    public function __construct()
    {
        \$this->id = random_int(PHP_INT_MIN, PHP_INT_MAX);
    }
}
", "vendor/symfony/http-client/Internal/NativeClientState.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Internal/NativeClientState.php");
    }
}
