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

/* vendor/symfony/monolog-bridge/Processor/TokenProcessor.php */
class __TwigTemplate_5e04df2f31f5695c193e586885b4bcfd07ac63a6ad35319b8a1c7655725cd956 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/TokenProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/TokenProcessor.php"));

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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;

/**
 * Adds the current security token to the log entry.
 *
 * @author Dany Maillard <danymaillard93b@gmail.com>
 */
class TokenProcessor
{
    private \$tokenStorage;

    public function __construct(TokenStorageInterface \$tokenStorage)
    {
        \$this->tokenStorage = \$tokenStorage;
    }

    public function __invoke(array \$records)
    {
        \$records['extra']['token'] = null;
        if (null !== \$token = \$this->tokenStorage->getToken()) {
            if (method_exists(\$token, 'getRoleNames')) {
                \$roles = \$token->getRoleNames();
            } else {
                \$roles = array_map(function (\$role) { return \$role->getRole(); }, \$token->getRoles(false));
            }

            \$records['extra']['token'] = [
                'username' => \$token->getUsername(),
                'authenticated' => \$token->isAuthenticated(),
                'roles' => \$roles,
            ];
        }

        return \$records;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Processor/TokenProcessor.php";
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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;

/**
 * Adds the current security token to the log entry.
 *
 * @author Dany Maillard <danymaillard93b@gmail.com>
 */
class TokenProcessor
{
    private \$tokenStorage;

    public function __construct(TokenStorageInterface \$tokenStorage)
    {
        \$this->tokenStorage = \$tokenStorage;
    }

    public function __invoke(array \$records)
    {
        \$records['extra']['token'] = null;
        if (null !== \$token = \$this->tokenStorage->getToken()) {
            if (method_exists(\$token, 'getRoleNames')) {
                \$roles = \$token->getRoleNames();
            } else {
                \$roles = array_map(function (\$role) { return \$role->getRole(); }, \$token->getRoles(false));
            }

            \$records['extra']['token'] = [
                'username' => \$token->getUsername(),
                'authenticated' => \$token->isAuthenticated(),
                'roles' => \$roles,
            ];
        }

        return \$records;
    }
}
", "vendor/symfony/monolog-bridge/Processor/TokenProcessor.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Processor/TokenProcessor.php");
    }
}
