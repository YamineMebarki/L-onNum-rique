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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer/ArrayRecipientIterator.php */
class __TwigTemplate_bcb80d1082046ca2b7dd525ac859fed9c891ccc4c967ed50514c39f825ff23c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer/ArrayRecipientIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer/ArrayRecipientIterator.php"));

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
 * Wraps a standard PHP array in an iterator.
 *
 * @author Chris Corbyn
 */
class Swift_Mailer_ArrayRecipientIterator implements Swift_Mailer_RecipientIterator
{
    /**
     * The list of recipients.
     *
     * @var array
     */
    private \$recipients = [];

    /**
     * Create a new ArrayRecipientIterator from \$recipients.
     */
    public function __construct(array \$recipients)
    {
        \$this->recipients = \$recipients;
    }

    /**
     * Returns true only if there are more recipients to send to.
     *
     * @return bool
     */
    public function hasNext()
    {
        return !empty(\$this->recipients);
    }

    /**
     * Returns an array where the keys are the addresses of recipients and the
     * values are the names. e.g. ('foo@bar' => 'Foo') or ('foo@bar' => NULL).
     *
     * @return array
     */
    public function nextRecipient()
    {
        return array_splice(\$this->recipients, 0, 1);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer/ArrayRecipientIterator.php";
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
 * Wraps a standard PHP array in an iterator.
 *
 * @author Chris Corbyn
 */
class Swift_Mailer_ArrayRecipientIterator implements Swift_Mailer_RecipientIterator
{
    /**
     * The list of recipients.
     *
     * @var array
     */
    private \$recipients = [];

    /**
     * Create a new ArrayRecipientIterator from \$recipients.
     */
    public function __construct(array \$recipients)
    {
        \$this->recipients = \$recipients;
    }

    /**
     * Returns true only if there are more recipients to send to.
     *
     * @return bool
     */
    public function hasNext()
    {
        return !empty(\$this->recipients);
    }

    /**
     * Returns an array where the keys are the addresses of recipients and the
     * values are the names. e.g. ('foo@bar' => 'Foo') or ('foo@bar' => NULL).
     *
     * @return array
     */
    public function nextRecipient()
    {
        return array_splice(\$this->recipients, 0, 1);
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer/ArrayRecipientIterator.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer/ArrayRecipientIterator.php");
    }
}
