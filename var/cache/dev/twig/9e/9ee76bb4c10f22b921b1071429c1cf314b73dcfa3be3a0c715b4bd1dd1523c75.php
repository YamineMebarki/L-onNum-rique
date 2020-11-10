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

/* vendor/symfony/security-core/Exception/CustomUserMessageAuthenticationException.php */
class __TwigTemplate_6470ef4b0a6163070df8bcdbc7c496623d76660bb2cdfdc60aff2e446eaa605f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Exception/CustomUserMessageAuthenticationException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Exception/CustomUserMessageAuthenticationException.php"));

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

namespace Symfony\\Component\\Security\\Core\\Exception;

/**
 * An authentication exception where you can control the message shown to the user.
 *
 * Be sure that the message passed to this exception is something that
 * can be shown safely to your user. In other words, avoid catching
 * other exceptions and passing their message directly to this class.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class CustomUserMessageAuthenticationException extends AuthenticationException
{
    private \$messageKey;

    private \$messageData = [];

    public function __construct(string \$message = '', array \$messageData = [], int \$code = 0, \\Exception \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);

        \$this->setSafeMessage(\$message, \$messageData);
    }

    /**
     * Set a message that will be shown to the user.
     *
     * @param string \$messageKey  The message or message key
     * @param array  \$messageData Data to be passed into the translator
     */
    public function setSafeMessage(\$messageKey, array \$messageData = [])
    {
        \$this->messageKey = \$messageKey;
        \$this->messageData = \$messageData;
    }

    public function getMessageKey()
    {
        return \$this->messageKey;
    }

    public function getMessageData()
    {
        return \$this->messageData;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [parent::__serialize(), \$this->messageKey, \$this->messageData];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$parentData, \$this->messageKey, \$this->messageData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Exception/CustomUserMessageAuthenticationException.php";
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

namespace Symfony\\Component\\Security\\Core\\Exception;

/**
 * An authentication exception where you can control the message shown to the user.
 *
 * Be sure that the message passed to this exception is something that
 * can be shown safely to your user. In other words, avoid catching
 * other exceptions and passing their message directly to this class.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class CustomUserMessageAuthenticationException extends AuthenticationException
{
    private \$messageKey;

    private \$messageData = [];

    public function __construct(string \$message = '', array \$messageData = [], int \$code = 0, \\Exception \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);

        \$this->setSafeMessage(\$message, \$messageData);
    }

    /**
     * Set a message that will be shown to the user.
     *
     * @param string \$messageKey  The message or message key
     * @param array  \$messageData Data to be passed into the translator
     */
    public function setSafeMessage(\$messageKey, array \$messageData = [])
    {
        \$this->messageKey = \$messageKey;
        \$this->messageData = \$messageData;
    }

    public function getMessageKey()
    {
        return \$this->messageKey;
    }

    public function getMessageData()
    {
        return \$this->messageData;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [parent::__serialize(), \$this->messageKey, \$this->messageData];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$parentData, \$this->messageKey, \$this->messageData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
", "vendor/symfony/security-core/Exception/CustomUserMessageAuthenticationException.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Exception/CustomUserMessageAuthenticationException.php");
    }
}
