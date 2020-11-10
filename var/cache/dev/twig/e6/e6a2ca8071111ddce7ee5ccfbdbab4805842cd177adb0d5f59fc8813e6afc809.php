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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/DecoratorPlugin.php */
class __TwigTemplate_44b9dc44ccc9df15f4d95c3c40f3d0d6a1af9d8cd193c3230c9b027b6f8043df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/DecoratorPlugin.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/DecoratorPlugin.php"));

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
 * Allows customization of Messages on-the-fly.
 *
 * @author Chris Corbyn
 * @author Fabien Potencier
 */
class Swift_Plugins_DecoratorPlugin implements Swift_Events_SendListener, Swift_Plugins_Decorator_Replacements
{
    /** The replacement map */
    private \$replacements;

    /** The body as it was before replacements */
    private \$originalBody;

    /** The original headers of the message, before replacements */
    private \$originalHeaders = [];

    /** Bodies of children before they are replaced */
    private \$originalChildBodies = [];

    /** The Message that was last replaced */
    private \$lastMessage;

    /**
     * Create a new DecoratorPlugin with \$replacements.
     *
     * The \$replacements can either be an associative array, or an implementation
     * of {@link Swift_Plugins_Decorator_Replacements}.
     *
     * When using an array, it should be of the form:
     * <code>
     * \$replacements = array(
     *  \"address1@domain.tld\" => array(\"{a}\" => \"b\", \"{c}\" => \"d\"),
     *  \"address2@domain.tld\" => array(\"{a}\" => \"x\", \"{c}\" => \"y\")
     * )
     * </code>
     *
     * When using an instance of {@link Swift_Plugins_Decorator_Replacements},
     * the object should return just the array of replacements for the address
     * given to {@link Swift_Plugins_Decorator_Replacements::getReplacementsFor()}.
     *
     * @param mixed \$replacements Array or Swift_Plugins_Decorator_Replacements
     */
    public function __construct(\$replacements)
    {
        \$this->setReplacements(\$replacements);
    }

    /**
     * Sets replacements.
     *
     * @param mixed \$replacements Array or Swift_Plugins_Decorator_Replacements
     *
     * @see __construct()
     */
    public function setReplacements(\$replacements)
    {
        if (!(\$replacements instanceof Swift_Plugins_Decorator_Replacements)) {
            \$this->replacements = (array) \$replacements;
        } else {
            \$this->replacements = \$replacements;
        }
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();
        \$this->restoreMessage(\$message);
        \$to = array_keys(\$message->getTo());
        \$address = array_shift(\$to);
        if (\$replacements = \$this->getReplacementsFor(\$address)) {
            \$body = \$message->getBody();
            \$search = array_keys(\$replacements);
            \$replace = array_values(\$replacements);
            \$bodyReplaced = str_replace(
                \$search, \$replace, \$body
                );
            if (\$body != \$bodyReplaced) {
                \$this->originalBody = \$body;
                \$message->setBody(\$bodyReplaced);
            }

            foreach (\$message->getHeaders()->getAll() as \$header) {
                \$body = \$header->getFieldBodyModel();
                \$count = 0;
                if (is_array(\$body)) {
                    \$bodyReplaced = [];
                    foreach (\$body as \$key => \$value) {
                        \$count1 = 0;
                        \$count2 = 0;
                        \$key = is_string(\$key) ? str_replace(\$search, \$replace, \$key, \$count1) : \$key;
                        \$value = is_string(\$value) ? str_replace(\$search, \$replace, \$value, \$count2) : \$value;
                        \$bodyReplaced[\$key] = \$value;

                        if (!\$count && (\$count1 || \$count2)) {
                            \$count = 1;
                        }
                    }
                } elseif (is_string(\$body)) {
                    \$bodyReplaced = str_replace(\$search, \$replace, \$body, \$count);
                }

                if (\$count) {
                    \$this->originalHeaders[\$header->getFieldName()] = \$body;
                    \$header->setFieldBodyModel(\$bodyReplaced);
                }
            }

            \$children = (array) \$message->getChildren();
            foreach (\$children as \$child) {
                list(\$type) = sscanf(\$child->getContentType(), '%[^/]/%s');
                if ('text' == \$type) {
                    \$body = \$child->getBody();
                    \$bodyReplaced = str_replace(
                        \$search, \$replace, \$body
                        );
                    if (\$body != \$bodyReplaced) {
                        \$child->setBody(\$bodyReplaced);
                        \$this->originalChildBodies[\$child->getId()] = \$body;
                    }
                }
            }
            \$this->lastMessage = \$message;
        }
    }

    /**
     * Find a map of replacements for the address.
     *
     * If this plugin was provided with a delegate instance of
     * {@link Swift_Plugins_Decorator_Replacements} then the call will be
     * delegated to it.  Otherwise, it will attempt to find the replacements
     * from the array provided in the constructor.
     *
     * If no replacements can be found, an empty value (NULL) is returned.
     *
     * @param string \$address
     *
     * @return array
     */
    public function getReplacementsFor(\$address)
    {
        if (\$this->replacements instanceof Swift_Plugins_Decorator_Replacements) {
            return \$this->replacements->getReplacementsFor(\$address);
        }

        return \$this->replacements[\$address] ?? null;
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$this->restoreMessage(\$evt->getMessage());
    }

    /** Restore a changed message back to its original state */
    private function restoreMessage(Swift_Mime_SimpleMessage \$message)
    {
        if (\$this->lastMessage === \$message) {
            if (isset(\$this->originalBody)) {
                \$message->setBody(\$this->originalBody);
                \$this->originalBody = null;
            }
            if (!empty(\$this->originalHeaders)) {
                foreach (\$message->getHeaders()->getAll() as \$header) {
                    if (array_key_exists(\$header->getFieldName(), \$this->originalHeaders)) {
                        \$header->setFieldBodyModel(\$this->originalHeaders[\$header->getFieldName()]);
                    }
                }
                \$this->originalHeaders = [];
            }
            if (!empty(\$this->originalChildBodies)) {
                \$children = (array) \$message->getChildren();
                foreach (\$children as \$child) {
                    \$id = \$child->getId();
                    if (array_key_exists(\$id, \$this->originalChildBodies)) {
                        \$child->setBody(\$this->originalChildBodies[\$id]);
                    }
                }
                \$this->originalChildBodies = [];
            }
            \$this->lastMessage = null;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/DecoratorPlugin.php";
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
 * Allows customization of Messages on-the-fly.
 *
 * @author Chris Corbyn
 * @author Fabien Potencier
 */
class Swift_Plugins_DecoratorPlugin implements Swift_Events_SendListener, Swift_Plugins_Decorator_Replacements
{
    /** The replacement map */
    private \$replacements;

    /** The body as it was before replacements */
    private \$originalBody;

    /** The original headers of the message, before replacements */
    private \$originalHeaders = [];

    /** Bodies of children before they are replaced */
    private \$originalChildBodies = [];

    /** The Message that was last replaced */
    private \$lastMessage;

    /**
     * Create a new DecoratorPlugin with \$replacements.
     *
     * The \$replacements can either be an associative array, or an implementation
     * of {@link Swift_Plugins_Decorator_Replacements}.
     *
     * When using an array, it should be of the form:
     * <code>
     * \$replacements = array(
     *  \"address1@domain.tld\" => array(\"{a}\" => \"b\", \"{c}\" => \"d\"),
     *  \"address2@domain.tld\" => array(\"{a}\" => \"x\", \"{c}\" => \"y\")
     * )
     * </code>
     *
     * When using an instance of {@link Swift_Plugins_Decorator_Replacements},
     * the object should return just the array of replacements for the address
     * given to {@link Swift_Plugins_Decorator_Replacements::getReplacementsFor()}.
     *
     * @param mixed \$replacements Array or Swift_Plugins_Decorator_Replacements
     */
    public function __construct(\$replacements)
    {
        \$this->setReplacements(\$replacements);
    }

    /**
     * Sets replacements.
     *
     * @param mixed \$replacements Array or Swift_Plugins_Decorator_Replacements
     *
     * @see __construct()
     */
    public function setReplacements(\$replacements)
    {
        if (!(\$replacements instanceof Swift_Plugins_Decorator_Replacements)) {
            \$this->replacements = (array) \$replacements;
        } else {
            \$this->replacements = \$replacements;
        }
    }

    /**
     * Invoked immediately before the Message is sent.
     */
    public function beforeSendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$message = \$evt->getMessage();
        \$this->restoreMessage(\$message);
        \$to = array_keys(\$message->getTo());
        \$address = array_shift(\$to);
        if (\$replacements = \$this->getReplacementsFor(\$address)) {
            \$body = \$message->getBody();
            \$search = array_keys(\$replacements);
            \$replace = array_values(\$replacements);
            \$bodyReplaced = str_replace(
                \$search, \$replace, \$body
                );
            if (\$body != \$bodyReplaced) {
                \$this->originalBody = \$body;
                \$message->setBody(\$bodyReplaced);
            }

            foreach (\$message->getHeaders()->getAll() as \$header) {
                \$body = \$header->getFieldBodyModel();
                \$count = 0;
                if (is_array(\$body)) {
                    \$bodyReplaced = [];
                    foreach (\$body as \$key => \$value) {
                        \$count1 = 0;
                        \$count2 = 0;
                        \$key = is_string(\$key) ? str_replace(\$search, \$replace, \$key, \$count1) : \$key;
                        \$value = is_string(\$value) ? str_replace(\$search, \$replace, \$value, \$count2) : \$value;
                        \$bodyReplaced[\$key] = \$value;

                        if (!\$count && (\$count1 || \$count2)) {
                            \$count = 1;
                        }
                    }
                } elseif (is_string(\$body)) {
                    \$bodyReplaced = str_replace(\$search, \$replace, \$body, \$count);
                }

                if (\$count) {
                    \$this->originalHeaders[\$header->getFieldName()] = \$body;
                    \$header->setFieldBodyModel(\$bodyReplaced);
                }
            }

            \$children = (array) \$message->getChildren();
            foreach (\$children as \$child) {
                list(\$type) = sscanf(\$child->getContentType(), '%[^/]/%s');
                if ('text' == \$type) {
                    \$body = \$child->getBody();
                    \$bodyReplaced = str_replace(
                        \$search, \$replace, \$body
                        );
                    if (\$body != \$bodyReplaced) {
                        \$child->setBody(\$bodyReplaced);
                        \$this->originalChildBodies[\$child->getId()] = \$body;
                    }
                }
            }
            \$this->lastMessage = \$message;
        }
    }

    /**
     * Find a map of replacements for the address.
     *
     * If this plugin was provided with a delegate instance of
     * {@link Swift_Plugins_Decorator_Replacements} then the call will be
     * delegated to it.  Otherwise, it will attempt to find the replacements
     * from the array provided in the constructor.
     *
     * If no replacements can be found, an empty value (NULL) is returned.
     *
     * @param string \$address
     *
     * @return array
     */
    public function getReplacementsFor(\$address)
    {
        if (\$this->replacements instanceof Swift_Plugins_Decorator_Replacements) {
            return \$this->replacements->getReplacementsFor(\$address);
        }

        return \$this->replacements[\$address] ?? null;
    }

    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
        \$this->restoreMessage(\$evt->getMessage());
    }

    /** Restore a changed message back to its original state */
    private function restoreMessage(Swift_Mime_SimpleMessage \$message)
    {
        if (\$this->lastMessage === \$message) {
            if (isset(\$this->originalBody)) {
                \$message->setBody(\$this->originalBody);
                \$this->originalBody = null;
            }
            if (!empty(\$this->originalHeaders)) {
                foreach (\$message->getHeaders()->getAll() as \$header) {
                    if (array_key_exists(\$header->getFieldName(), \$this->originalHeaders)) {
                        \$header->setFieldBodyModel(\$this->originalHeaders[\$header->getFieldName()]);
                    }
                }
                \$this->originalHeaders = [];
            }
            if (!empty(\$this->originalChildBodies)) {
                \$children = (array) \$message->getChildren();
                foreach (\$children as \$child) {
                    \$id = \$child->getId();
                    if (array_key_exists(\$id, \$this->originalChildBodies)) {
                        \$child->setBody(\$this->originalChildBodies[\$id]);
                    }
                }
                \$this->originalChildBodies = [];
            }
            \$this->lastMessage = null;
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/DecoratorPlugin.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/DecoratorPlugin.php");
    }
}
