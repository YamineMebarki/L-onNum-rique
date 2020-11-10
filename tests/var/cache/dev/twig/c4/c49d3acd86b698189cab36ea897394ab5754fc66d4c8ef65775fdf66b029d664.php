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

/* vendor/symfony/security-core/Authentication/RememberMe/PersistentToken.php */
class __TwigTemplate_58526b7eb0febd48f45808d4228915fefba4f7bfc6ba427ef520d332a67598f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/RememberMe/PersistentToken.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/RememberMe/PersistentToken.php"));

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

/**
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @internal
 */
final class PersistentToken implements PersistentTokenInterface
{
    private \$class;
    private \$username;
    private \$series;
    private \$tokenValue;
    private \$lastUsed;

    public function __construct(string \$class, string \$username, string \$series, string \$tokenValue, \\DateTime \$lastUsed)
    {
        if (empty(\$class)) {
            throw new \\InvalidArgumentException('\$class must not be empty.');
        }
        if ('' === \$username) {
            throw new \\InvalidArgumentException('\$username must not be empty.');
        }
        if (empty(\$series)) {
            throw new \\InvalidArgumentException('\$series must not be empty.');
        }
        if (empty(\$tokenValue)) {
            throw new \\InvalidArgumentException('\$tokenValue must not be empty.');
        }

        \$this->class = \$class;
        \$this->username = \$username;
        \$this->series = \$series;
        \$this->tokenValue = \$tokenValue;
        \$this->lastUsed = \$lastUsed;
    }

    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        return \$this->class;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return \$this->username;
    }

    /**
     * {@inheritdoc}
     */
    public function getSeries()
    {
        return \$this->series;
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenValue()
    {
        return \$this->tokenValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastUsed()
    {
        return \$this->lastUsed;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/RememberMe/PersistentToken.php";
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

/**
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @internal
 */
final class PersistentToken implements PersistentTokenInterface
{
    private \$class;
    private \$username;
    private \$series;
    private \$tokenValue;
    private \$lastUsed;

    public function __construct(string \$class, string \$username, string \$series, string \$tokenValue, \\DateTime \$lastUsed)
    {
        if (empty(\$class)) {
            throw new \\InvalidArgumentException('\$class must not be empty.');
        }
        if ('' === \$username) {
            throw new \\InvalidArgumentException('\$username must not be empty.');
        }
        if (empty(\$series)) {
            throw new \\InvalidArgumentException('\$series must not be empty.');
        }
        if (empty(\$tokenValue)) {
            throw new \\InvalidArgumentException('\$tokenValue must not be empty.');
        }

        \$this->class = \$class;
        \$this->username = \$username;
        \$this->series = \$series;
        \$this->tokenValue = \$tokenValue;
        \$this->lastUsed = \$lastUsed;
    }

    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        return \$this->class;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return \$this->username;
    }

    /**
     * {@inheritdoc}
     */
    public function getSeries()
    {
        return \$this->series;
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenValue()
    {
        return \$this->tokenValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastUsed()
    {
        return \$this->lastUsed;
    }
}
", "vendor/symfony/security-core/Authentication/RememberMe/PersistentToken.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/RememberMe/PersistentToken.php");
    }
}
