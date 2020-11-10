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

/* vendor/symfony/security-core/Authentication/RememberMe/InMemoryTokenProvider.php */
class __TwigTemplate_8257d62df6505e5911c1239d20e0d2984840c92cb02ad845ad0027735000478a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/RememberMe/InMemoryTokenProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/RememberMe/InMemoryTokenProvider.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authentication\\RememberMe;

use Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException;

/**
 * This class is used for testing purposes, and is not really suited for production.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class InMemoryTokenProvider implements TokenProviderInterface
{
    private \$tokens = [];

    /**
     * {@inheritdoc}
     */
    public function loadTokenBySeries(\$series)
    {
        if (!isset(\$this->tokens[\$series])) {
            throw new TokenNotFoundException('No token found.');
        }

        return \$this->tokens[\$series];
    }

    /**
     * {@inheritdoc}
     */
    public function updateToken(\$series, \$tokenValue, \\DateTime \$lastUsed)
    {
        if (!isset(\$this->tokens[\$series])) {
            throw new TokenNotFoundException('No token found.');
        }

        \$token = new PersistentToken(
            \$this->tokens[\$series]->getClass(),
            \$this->tokens[\$series]->getUsername(),
            \$series,
            \$tokenValue,
            \$lastUsed
        );
        \$this->tokens[\$series] = \$token;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTokenBySeries(\$series)
    {
        unset(\$this->tokens[\$series]);
    }

    /**
     * {@inheritdoc}
     */
    public function createNewToken(PersistentTokenInterface \$token)
    {
        \$this->tokens[\$token->getSeries()] = \$token;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/RememberMe/InMemoryTokenProvider.php";
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

namespace Symfony\\Component\\Security\\Core\\Authentication\\RememberMe;

use Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException;

/**
 * This class is used for testing purposes, and is not really suited for production.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class InMemoryTokenProvider implements TokenProviderInterface
{
    private \$tokens = [];

    /**
     * {@inheritdoc}
     */
    public function loadTokenBySeries(\$series)
    {
        if (!isset(\$this->tokens[\$series])) {
            throw new TokenNotFoundException('No token found.');
        }

        return \$this->tokens[\$series];
    }

    /**
     * {@inheritdoc}
     */
    public function updateToken(\$series, \$tokenValue, \\DateTime \$lastUsed)
    {
        if (!isset(\$this->tokens[\$series])) {
            throw new TokenNotFoundException('No token found.');
        }

        \$token = new PersistentToken(
            \$this->tokens[\$series]->getClass(),
            \$this->tokens[\$series]->getUsername(),
            \$series,
            \$tokenValue,
            \$lastUsed
        );
        \$this->tokens[\$series] = \$token;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTokenBySeries(\$series)
    {
        unset(\$this->tokens[\$series]);
    }

    /**
     * {@inheritdoc}
     */
    public function createNewToken(PersistentTokenInterface \$token)
    {
        \$this->tokens[\$token->getSeries()] = \$token;
    }
}
", "vendor/symfony/security-core/Authentication/RememberMe/InMemoryTokenProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/RememberMe/InMemoryTokenProvider.php");
    }
}
