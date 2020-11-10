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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Message.php */
class __TwigTemplate_f5189b442648a3b671eaf5aa65eaa9fb9f5426723988068e2a5e436ba943a4b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Message.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Message.php"));

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
 * The Message class for building emails.
 *
 * @author Chris Corbyn
 */
class Swift_Message extends Swift_Mime_SimpleMessage
{
    /**
     * @var Swift_Signers_HeaderSigner[]
     */
    private \$headerSigners = [];

    /**
     * @var Swift_Signers_BodySigner[]
     */
    private \$bodySigners = [];

    /**
     * @var array
     */
    private \$savedMessage = [];

    /**
     * Create a new Message.
     *
     * Details may be optionally passed into the constructor.
     *
     * @param string \$subject
     * @param string \$body
     * @param string \$contentType
     * @param string \$charset
     */
    public function __construct(\$subject = null, \$body = null, \$contentType = null, \$charset = null)
    {
        call_user_func_array(
            [\$this, 'Swift_Mime_SimpleMessage::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.message')
            );

        if (!isset(\$charset)) {
            \$charset = Swift_DependencyContainer::getInstance()
                ->lookup('properties.charset');
        }
        \$this->setSubject(\$subject);
        \$this->setBody(\$body);
        \$this->setCharset(\$charset);
        if (\$contentType) {
            \$this->setContentType(\$contentType);
        }
    }

    /**
     * Add a MimePart to this Message.
     *
     * @param string|Swift_OutputByteStream \$body
     * @param string                        \$contentType
     * @param string                        \$charset
     *
     * @return \$this
     */
    public function addPart(\$body, \$contentType = null, \$charset = null)
    {
        return \$this->attach((new Swift_MimePart(\$body, \$contentType, \$charset))->setEncoder(\$this->getEncoder()));
    }

    /**
     * Attach a new signature handler to the message.
     *
     * @return \$this
     */
    public function attachSigner(Swift_Signer \$signer)
    {
        if (\$signer instanceof Swift_Signers_HeaderSigner) {
            \$this->headerSigners[] = \$signer;
        } elseif (\$signer instanceof Swift_Signers_BodySigner) {
            \$this->bodySigners[] = \$signer;
        }

        return \$this;
    }

    /**
     * Detach a signature handler from a message.
     *
     * @return \$this
     */
    public function detachSigner(Swift_Signer \$signer)
    {
        if (\$signer instanceof Swift_Signers_HeaderSigner) {
            foreach (\$this->headerSigners as \$k => \$headerSigner) {
                if (\$headerSigner === \$signer) {
                    unset(\$this->headerSigners[\$k]);

                    return \$this;
                }
            }
        } elseif (\$signer instanceof Swift_Signers_BodySigner) {
            foreach (\$this->bodySigners as \$k => \$bodySigner) {
                if (\$bodySigner === \$signer) {
                    unset(\$this->bodySigners[\$k]);

                    return \$this;
                }
            }
        }

        return \$this;
    }

    /**
     * Clear all signature handlers attached to the message.
     *
     * @return \$this
     */
    public function clearSigners()
    {
        \$this->headerSigners = [];
        \$this->bodySigners = [];

        return \$this;
    }

    /**
     * Get this message as a complete string.
     *
     * @return string
     */
    public function toString()
    {
        if (empty(\$this->headerSigners) && empty(\$this->bodySigners)) {
            return parent::toString();
        }

        \$this->saveMessage();

        \$this->doSign();

        \$string = parent::toString();

        \$this->restoreMessage();

        return \$string;
    }

    /**
     * Write this message to a {@link Swift_InputByteStream}.
     */
    public function toByteStream(Swift_InputByteStream \$is)
    {
        if (empty(\$this->headerSigners) && empty(\$this->bodySigners)) {
            parent::toByteStream(\$is);

            return;
        }

        \$this->saveMessage();

        \$this->doSign();

        parent::toByteStream(\$is);

        \$this->restoreMessage();
    }

    public function __wakeup()
    {
        Swift_DependencyContainer::getInstance()->createDependenciesFor('mime.message');
    }

    /**
     * loops through signers and apply the signatures.
     */
    protected function doSign()
    {
        foreach (\$this->bodySigners as \$signer) {
            \$altered = \$signer->getAlteredHeaders();
            \$this->saveHeaders(\$altered);
            \$signer->signMessage(\$this);
        }

        foreach (\$this->headerSigners as \$signer) {
            \$altered = \$signer->getAlteredHeaders();
            \$this->saveHeaders(\$altered);
            \$signer->reset();

            \$signer->setHeaders(\$this->getHeaders());

            \$signer->startBody();
            \$this->bodyToByteStream(\$signer);
            \$signer->endBody();

            \$signer->addSignature(\$this->getHeaders());
        }
    }

    /**
     * save the message before any signature is applied.
     */
    protected function saveMessage()
    {
        \$this->savedMessage = ['headers' => []];
        \$this->savedMessage['body'] = \$this->getBody();
        \$this->savedMessage['children'] = \$this->getChildren();
        if (count(\$this->savedMessage['children']) > 0 && '' != \$this->getBody()) {
            \$this->setChildren(array_merge([\$this->becomeMimePart()], \$this->savedMessage['children']));
            \$this->setBody('');
        }
    }

    /**
     * save the original headers.
     */
    protected function saveHeaders(array \$altered)
    {
        foreach (\$altered as \$head) {
            \$lc = strtolower(\$head);

            if (!isset(\$this->savedMessage['headers'][\$lc])) {
                \$this->savedMessage['headers'][\$lc] = \$this->getHeaders()->getAll(\$head);
            }
        }
    }

    /**
     * Remove or restore altered headers.
     */
    protected function restoreHeaders()
    {
        foreach (\$this->savedMessage['headers'] as \$name => \$savedValue) {
            \$headers = \$this->getHeaders()->getAll(\$name);

            foreach (\$headers as \$key => \$value) {
                if (!isset(\$savedValue[\$key])) {
                    \$this->getHeaders()->remove(\$name, \$key);
                }
            }
        }
    }

    /**
     * Restore message body.
     */
    protected function restoreMessage()
    {
        \$this->setBody(\$this->savedMessage['body']);
        \$this->setChildren(\$this->savedMessage['children']);

        \$this->restoreHeaders();
        \$this->savedMessage = [];
    }

    /**
     * Clone Message Signers.
     *
     * @see Swift_Mime_SimpleMimeEntity::__clone()
     */
    public function __clone()
    {
        parent::__clone();
        foreach (\$this->bodySigners as \$key => \$bodySigner) {
            \$this->bodySigners[\$key] = clone \$bodySigner;
        }

        foreach (\$this->headerSigners as \$key => \$headerSigner) {
            \$this->headerSigners[\$key] = clone \$headerSigner;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Message.php";
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
 * The Message class for building emails.
 *
 * @author Chris Corbyn
 */
class Swift_Message extends Swift_Mime_SimpleMessage
{
    /**
     * @var Swift_Signers_HeaderSigner[]
     */
    private \$headerSigners = [];

    /**
     * @var Swift_Signers_BodySigner[]
     */
    private \$bodySigners = [];

    /**
     * @var array
     */
    private \$savedMessage = [];

    /**
     * Create a new Message.
     *
     * Details may be optionally passed into the constructor.
     *
     * @param string \$subject
     * @param string \$body
     * @param string \$contentType
     * @param string \$charset
     */
    public function __construct(\$subject = null, \$body = null, \$contentType = null, \$charset = null)
    {
        call_user_func_array(
            [\$this, 'Swift_Mime_SimpleMessage::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.message')
            );

        if (!isset(\$charset)) {
            \$charset = Swift_DependencyContainer::getInstance()
                ->lookup('properties.charset');
        }
        \$this->setSubject(\$subject);
        \$this->setBody(\$body);
        \$this->setCharset(\$charset);
        if (\$contentType) {
            \$this->setContentType(\$contentType);
        }
    }

    /**
     * Add a MimePart to this Message.
     *
     * @param string|Swift_OutputByteStream \$body
     * @param string                        \$contentType
     * @param string                        \$charset
     *
     * @return \$this
     */
    public function addPart(\$body, \$contentType = null, \$charset = null)
    {
        return \$this->attach((new Swift_MimePart(\$body, \$contentType, \$charset))->setEncoder(\$this->getEncoder()));
    }

    /**
     * Attach a new signature handler to the message.
     *
     * @return \$this
     */
    public function attachSigner(Swift_Signer \$signer)
    {
        if (\$signer instanceof Swift_Signers_HeaderSigner) {
            \$this->headerSigners[] = \$signer;
        } elseif (\$signer instanceof Swift_Signers_BodySigner) {
            \$this->bodySigners[] = \$signer;
        }

        return \$this;
    }

    /**
     * Detach a signature handler from a message.
     *
     * @return \$this
     */
    public function detachSigner(Swift_Signer \$signer)
    {
        if (\$signer instanceof Swift_Signers_HeaderSigner) {
            foreach (\$this->headerSigners as \$k => \$headerSigner) {
                if (\$headerSigner === \$signer) {
                    unset(\$this->headerSigners[\$k]);

                    return \$this;
                }
            }
        } elseif (\$signer instanceof Swift_Signers_BodySigner) {
            foreach (\$this->bodySigners as \$k => \$bodySigner) {
                if (\$bodySigner === \$signer) {
                    unset(\$this->bodySigners[\$k]);

                    return \$this;
                }
            }
        }

        return \$this;
    }

    /**
     * Clear all signature handlers attached to the message.
     *
     * @return \$this
     */
    public function clearSigners()
    {
        \$this->headerSigners = [];
        \$this->bodySigners = [];

        return \$this;
    }

    /**
     * Get this message as a complete string.
     *
     * @return string
     */
    public function toString()
    {
        if (empty(\$this->headerSigners) && empty(\$this->bodySigners)) {
            return parent::toString();
        }

        \$this->saveMessage();

        \$this->doSign();

        \$string = parent::toString();

        \$this->restoreMessage();

        return \$string;
    }

    /**
     * Write this message to a {@link Swift_InputByteStream}.
     */
    public function toByteStream(Swift_InputByteStream \$is)
    {
        if (empty(\$this->headerSigners) && empty(\$this->bodySigners)) {
            parent::toByteStream(\$is);

            return;
        }

        \$this->saveMessage();

        \$this->doSign();

        parent::toByteStream(\$is);

        \$this->restoreMessage();
    }

    public function __wakeup()
    {
        Swift_DependencyContainer::getInstance()->createDependenciesFor('mime.message');
    }

    /**
     * loops through signers and apply the signatures.
     */
    protected function doSign()
    {
        foreach (\$this->bodySigners as \$signer) {
            \$altered = \$signer->getAlteredHeaders();
            \$this->saveHeaders(\$altered);
            \$signer->signMessage(\$this);
        }

        foreach (\$this->headerSigners as \$signer) {
            \$altered = \$signer->getAlteredHeaders();
            \$this->saveHeaders(\$altered);
            \$signer->reset();

            \$signer->setHeaders(\$this->getHeaders());

            \$signer->startBody();
            \$this->bodyToByteStream(\$signer);
            \$signer->endBody();

            \$signer->addSignature(\$this->getHeaders());
        }
    }

    /**
     * save the message before any signature is applied.
     */
    protected function saveMessage()
    {
        \$this->savedMessage = ['headers' => []];
        \$this->savedMessage['body'] = \$this->getBody();
        \$this->savedMessage['children'] = \$this->getChildren();
        if (count(\$this->savedMessage['children']) > 0 && '' != \$this->getBody()) {
            \$this->setChildren(array_merge([\$this->becomeMimePart()], \$this->savedMessage['children']));
            \$this->setBody('');
        }
    }

    /**
     * save the original headers.
     */
    protected function saveHeaders(array \$altered)
    {
        foreach (\$altered as \$head) {
            \$lc = strtolower(\$head);

            if (!isset(\$this->savedMessage['headers'][\$lc])) {
                \$this->savedMessage['headers'][\$lc] = \$this->getHeaders()->getAll(\$head);
            }
        }
    }

    /**
     * Remove or restore altered headers.
     */
    protected function restoreHeaders()
    {
        foreach (\$this->savedMessage['headers'] as \$name => \$savedValue) {
            \$headers = \$this->getHeaders()->getAll(\$name);

            foreach (\$headers as \$key => \$value) {
                if (!isset(\$savedValue[\$key])) {
                    \$this->getHeaders()->remove(\$name, \$key);
                }
            }
        }
    }

    /**
     * Restore message body.
     */
    protected function restoreMessage()
    {
        \$this->setBody(\$this->savedMessage['body']);
        \$this->setChildren(\$this->savedMessage['children']);

        \$this->restoreHeaders();
        \$this->savedMessage = [];
    }

    /**
     * Clone Message Signers.
     *
     * @see Swift_Mime_SimpleMimeEntity::__clone()
     */
    public function __clone()
    {
        parent::__clone();
        foreach (\$this->bodySigners as \$key => \$bodySigner) {
            \$this->bodySigners[\$key] = clone \$bodySigner;
        }

        foreach (\$this->headerSigners as \$key => \$headerSigner) {
            \$this->headerSigners[\$key] = clone \$headerSigner;
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Message.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Message.php");
    }
}
