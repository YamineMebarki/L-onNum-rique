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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/SmtpTransport.php */
class __TwigTemplate_ce5259399387b313ce84957bcc23cfb01feda20de9b98947b3b367f1a1ffaa3e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/SmtpTransport.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/SmtpTransport.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Sends Messages over SMTP with ESMTP support.
 *
 * @author     Chris Corbyn
 *
 * @method Swift_SmtpTransport setUsername(string \$username) Set the username to authenticate with.
 * @method string              getUsername()                 Get the username to authenticate with.
 * @method Swift_SmtpTransport setPassword(string \$password) Set the password to authenticate with.
 * @method string              getPassword()                 Get the password to authenticate with.
 * @method Swift_SmtpTransport setAuthMode(string \$mode)     Set the auth mode to use to authenticate.
 * @method string              getAuthMode()                 Get the auth mode to use to authenticate.
 */
class Swift_SmtpTransport extends Swift_Transport_EsmtpTransport
{
    /**
     * @param string \$host
     * @param int    \$port
     * @param string \$encryption
     */
    public function __construct(\$host = 'localhost', \$port = 25, \$encryption = null)
    {
        call_user_func_array(
            [\$this, 'Swift_Transport_EsmtpTransport::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('transport.smtp')
            );

        \$this->setHost(\$host);
        \$this->setPort(\$port);
        \$this->setEncryption(\$encryption);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/SmtpTransport.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Sends Messages over SMTP with ESMTP support.
 *
 * @author     Chris Corbyn
 *
 * @method Swift_SmtpTransport setUsername(string \$username) Set the username to authenticate with.
 * @method string              getUsername()                 Get the username to authenticate with.
 * @method Swift_SmtpTransport setPassword(string \$password) Set the password to authenticate with.
 * @method string              getPassword()                 Get the password to authenticate with.
 * @method Swift_SmtpTransport setAuthMode(string \$mode)     Set the auth mode to use to authenticate.
 * @method string              getAuthMode()                 Get the auth mode to use to authenticate.
 */
class Swift_SmtpTransport extends Swift_Transport_EsmtpTransport
{
    /**
     * @param string \$host
     * @param int    \$port
     * @param string \$encryption
     */
    public function __construct(\$host = 'localhost', \$port = 25, \$encryption = null)
    {
        call_user_func_array(
            [\$this, 'Swift_Transport_EsmtpTransport::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('transport.smtp')
            );

        \$this->setHost(\$host);
        \$this->setPort(\$port);
        \$this->setEncryption(\$encryption);
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/SmtpTransport.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/SmtpTransport.php");
    }
}
