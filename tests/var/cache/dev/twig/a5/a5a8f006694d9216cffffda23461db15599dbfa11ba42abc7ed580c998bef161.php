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

/* vendor/symfony/monolog-bundle/SwiftMailer/MessageFactory.php */
class __TwigTemplate_807fdd6d3730bddb3a450d12d626fb6c2ca9a52df672cc2cc59df09d8a6f3d19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/SwiftMailer/MessageFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/SwiftMailer/MessageFactory.php"));

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

namespace Symfony\\Bundle\\MonologBundle\\SwiftMailer;

/**
 * Helps create Swift_Message objects, lazily
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class MessageFactory
{
    private \$mailer;

    private \$fromEmail;

    private \$toEmail;

    private \$subject;

    private \$contentType;

    public function __construct(\\Swift_Mailer \$mailer, \$fromEmail, \$toEmail, \$subject, \$contentType = null)
    {
        \$this->mailer = \$mailer;
        \$this->fromEmail = \$fromEmail;
        \$this->toEmail = \$toEmail;
        \$this->subject = \$subject;
        \$this->contentType = \$contentType;
    }

    /**
     * Creates a Swift_Message template that will be used to send the log message
     *
     * @param string \$content formatted email body to be sent
     * @param array  \$records Log records that formed the content
     * @return \\Swift_Message
     */
    public function createMessage(\$content, array \$records)
    {
        /** @var \\Swift_Message \$message */
        \$message = \$this->mailer->createMessage();
        \$message->setTo(\$this->toEmail);
        \$message->setFrom(\$this->fromEmail);
        \$message->setSubject(\$this->subject);

        if (\$this->contentType) {
            \$message->setContentType(\$this->contentType);
        }

        return \$message;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/SwiftMailer/MessageFactory.php";
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

namespace Symfony\\Bundle\\MonologBundle\\SwiftMailer;

/**
 * Helps create Swift_Message objects, lazily
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class MessageFactory
{
    private \$mailer;

    private \$fromEmail;

    private \$toEmail;

    private \$subject;

    private \$contentType;

    public function __construct(\\Swift_Mailer \$mailer, \$fromEmail, \$toEmail, \$subject, \$contentType = null)
    {
        \$this->mailer = \$mailer;
        \$this->fromEmail = \$fromEmail;
        \$this->toEmail = \$toEmail;
        \$this->subject = \$subject;
        \$this->contentType = \$contentType;
    }

    /**
     * Creates a Swift_Message template that will be used to send the log message
     *
     * @param string \$content formatted email body to be sent
     * @param array  \$records Log records that formed the content
     * @return \\Swift_Message
     */
    public function createMessage(\$content, array \$records)
    {
        /** @var \\Swift_Message \$message */
        \$message = \$this->mailer->createMessage();
        \$message->setTo(\$this->toEmail);
        \$message->setFrom(\$this->fromEmail);
        \$message->setSubject(\$this->subject);

        if (\$this->contentType) {
            \$message->setContentType(\$this->contentType);
        }

        return \$message;
    }
}
", "vendor/symfony/monolog-bundle/SwiftMailer/MessageFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/SwiftMailer/MessageFactory.php");
    }
}
