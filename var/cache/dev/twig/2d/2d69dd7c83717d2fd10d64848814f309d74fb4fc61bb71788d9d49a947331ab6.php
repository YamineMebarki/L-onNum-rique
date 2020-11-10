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

/* vendor/symfony/http-foundation/Session/SessionInterface.php */
class __TwigTemplate_4ad97769f22909e5c6b7cc1f6b13eaab93878e34a302896561ae10fe3491e488 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/SessionInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/SessionInterface.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session;

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag;

/**
 * Interface for the session.
 *
 * @author Drak <drak@zikula.org>
 */
interface SessionInterface
{
    /**
     * Starts the session storage.
     *
     * @return bool True if session started
     *
     * @throws \\RuntimeException if session fails to start
     */
    public function start();

    /**
     * Returns the session ID.
     *
     * @return string The session ID
     */
    public function getId();

    /**
     * Sets the session ID.
     *
     * @param string \$id
     */
    public function setId(\$id);

    /**
     * Returns the session name.
     *
     * @return mixed The session name
     */
    public function getName();

    /**
     * Sets the session name.
     *
     * @param string \$name
     */
    public function setName(\$name);

    /**
     * Invalidates the current session.
     *
     * Clears all session attributes and flashes and regenerates the
     * session and deletes the old session from persistence.
     *
     * @param int \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     *
     * @return bool True if session invalidated, false if error
     */
    public function invalidate(\$lifetime = null);

    /**
     * Migrates the current session to a new session id while maintaining all
     * session attributes.
     *
     * @param bool \$destroy  Whether to delete the old session or leave it to garbage collection
     * @param int  \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                       will leave the system settings unchanged, 0 sets the cookie
     *                       to expire with browser session. Time is in seconds, and is
     *                       not a Unix timestamp.
     *
     * @return bool True if session migrated, false if error
     */
    public function migrate(\$destroy = false, \$lifetime = null);

    /**
     * Force the session to be saved and closed.
     *
     * This method is generally not required for real sessions as
     * the session will be automatically saved at the end of
     * code execution.
     */
    public function save();

    /**
     * Checks if an attribute is defined.
     *
     * @param string \$name The attribute name
     *
     * @return bool true if the attribute is defined, false otherwise
     */
    public function has(\$name);

    /**
     * Returns an attribute.
     *
     * @param string \$name    The attribute name
     * @param mixed  \$default The default value if not found
     *
     * @return mixed
     */
    public function get(\$name, \$default = null);

    /**
     * Sets an attribute.
     *
     * @param string \$name
     * @param mixed  \$value
     */
    public function set(\$name, \$value);

    /**
     * Returns attributes.
     *
     * @return array Attributes
     */
    public function all();

    /**
     * Sets attributes.
     *
     * @param array \$attributes Attributes
     */
    public function replace(array \$attributes);

    /**
     * Removes an attribute.
     *
     * @param string \$name
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove(\$name);

    /**
     * Clears all attributes.
     */
    public function clear();

    /**
     * Checks if the session was started.
     *
     * @return bool
     */
    public function isStarted();

    /**
     * Registers a SessionBagInterface with the session.
     */
    public function registerBag(SessionBagInterface \$bag);

    /**
     * Gets a bag instance by name.
     *
     * @param string \$name
     *
     * @return SessionBagInterface
     */
    public function getBag(\$name);

    /**
     * Gets session meta.
     *
     * @return MetadataBag
     */
    public function getMetadataBag();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/SessionInterface.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session;

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag;

/**
 * Interface for the session.
 *
 * @author Drak <drak@zikula.org>
 */
interface SessionInterface
{
    /**
     * Starts the session storage.
     *
     * @return bool True if session started
     *
     * @throws \\RuntimeException if session fails to start
     */
    public function start();

    /**
     * Returns the session ID.
     *
     * @return string The session ID
     */
    public function getId();

    /**
     * Sets the session ID.
     *
     * @param string \$id
     */
    public function setId(\$id);

    /**
     * Returns the session name.
     *
     * @return mixed The session name
     */
    public function getName();

    /**
     * Sets the session name.
     *
     * @param string \$name
     */
    public function setName(\$name);

    /**
     * Invalidates the current session.
     *
     * Clears all session attributes and flashes and regenerates the
     * session and deletes the old session from persistence.
     *
     * @param int \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     *
     * @return bool True if session invalidated, false if error
     */
    public function invalidate(\$lifetime = null);

    /**
     * Migrates the current session to a new session id while maintaining all
     * session attributes.
     *
     * @param bool \$destroy  Whether to delete the old session or leave it to garbage collection
     * @param int  \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                       will leave the system settings unchanged, 0 sets the cookie
     *                       to expire with browser session. Time is in seconds, and is
     *                       not a Unix timestamp.
     *
     * @return bool True if session migrated, false if error
     */
    public function migrate(\$destroy = false, \$lifetime = null);

    /**
     * Force the session to be saved and closed.
     *
     * This method is generally not required for real sessions as
     * the session will be automatically saved at the end of
     * code execution.
     */
    public function save();

    /**
     * Checks if an attribute is defined.
     *
     * @param string \$name The attribute name
     *
     * @return bool true if the attribute is defined, false otherwise
     */
    public function has(\$name);

    /**
     * Returns an attribute.
     *
     * @param string \$name    The attribute name
     * @param mixed  \$default The default value if not found
     *
     * @return mixed
     */
    public function get(\$name, \$default = null);

    /**
     * Sets an attribute.
     *
     * @param string \$name
     * @param mixed  \$value
     */
    public function set(\$name, \$value);

    /**
     * Returns attributes.
     *
     * @return array Attributes
     */
    public function all();

    /**
     * Sets attributes.
     *
     * @param array \$attributes Attributes
     */
    public function replace(array \$attributes);

    /**
     * Removes an attribute.
     *
     * @param string \$name
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove(\$name);

    /**
     * Clears all attributes.
     */
    public function clear();

    /**
     * Checks if the session was started.
     *
     * @return bool
     */
    public function isStarted();

    /**
     * Registers a SessionBagInterface with the session.
     */
    public function registerBag(SessionBagInterface \$bag);

    /**
     * Gets a bag instance by name.
     *
     * @param string \$name
     *
     * @return SessionBagInterface
     */
    public function getBag(\$name);

    /**
     * Gets session meta.
     *
     * @return MetadataBag
     */
    public function getMetadataBag();
}
", "vendor/symfony/http-foundation/Session/SessionInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/SessionInterface.php");
    }
}
