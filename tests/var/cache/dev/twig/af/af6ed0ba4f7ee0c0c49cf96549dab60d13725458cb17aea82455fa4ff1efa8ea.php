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

/* vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php */
class __TwigTemplate_558b9bb609a92613c9bbfeed7643de6cf0711495eff1263007220e807c4de593 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage;

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * StorageInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Drak <drak@zikula.org>
 */
interface SessionStorageInterface
{
    /**
     * Starts the session.
     *
     * @return bool True if started
     *
     * @throws \\RuntimeException if something goes wrong starting the session
     */
    public function start();

    /**
     * Checks if the session is started.
     *
     * @return bool True if started, false otherwise
     */
    public function isStarted();

    /**
     * Returns the session ID.
     *
     * @return string The session ID or empty
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
     * Regenerates id that represents this storage.
     *
     * This method must invoke session_regenerate_id(\$destroy) unless
     * this interface is used for a storage object designed for unit
     * or functional testing where a real PHP session would interfere
     * with testing.
     *
     * Note regenerate+destroy should not clear the session data in memory
     * only delete the session data from persistent storage.
     *
     * Care: When regenerating the session ID no locking is involved in PHP's
     * session design. See https://bugs.php.net/61470 for a discussion.
     * So you must make sure the regenerated session is saved BEFORE sending the
     * headers with the new ID. Symfony's HttpKernel offers a listener for this.
     * See Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener.
     * Otherwise session data could get lost again for concurrent requests with the
     * new ID. One result could be that you get logged out after just logging in.
     *
     * @param bool \$destroy  Destroy session when regenerating?
     * @param int  \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                       will leave the system settings unchanged, 0 sets the cookie
     *                       to expire with browser session. Time is in seconds, and is
     *                       not a Unix timestamp.
     *
     * @return bool True if session regenerated, false if error
     *
     * @throws \\RuntimeException If an error occurs while regenerating this storage
     */
    public function regenerate(\$destroy = false, \$lifetime = null);

    /**
     * Force the session to be saved and closed.
     *
     * This method must invoke session_write_close() unless this interface is
     * used for a storage object design for unit or functional testing where
     * a real PHP session would interfere with testing, in which case
     * it should actually persist the session data if required.
     *
     * @throws \\RuntimeException if the session is saved without being started, or if the session
     *                           is already closed
     */
    public function save();

    /**
     * Clear all session data in memory.
     */
    public function clear();

    /**
     * Gets a SessionBagInterface by name.
     *
     * @param string \$name
     *
     * @return SessionBagInterface
     *
     * @throws \\InvalidArgumentException If the bag does not exist
     */
    public function getBag(\$name);

    /**
     * Registers a SessionBagInterface for use.
     */
    public function registerBag(SessionBagInterface \$bag);

    /**
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
        return "vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage;

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * StorageInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Drak <drak@zikula.org>
 */
interface SessionStorageInterface
{
    /**
     * Starts the session.
     *
     * @return bool True if started
     *
     * @throws \\RuntimeException if something goes wrong starting the session
     */
    public function start();

    /**
     * Checks if the session is started.
     *
     * @return bool True if started, false otherwise
     */
    public function isStarted();

    /**
     * Returns the session ID.
     *
     * @return string The session ID or empty
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
     * Regenerates id that represents this storage.
     *
     * This method must invoke session_regenerate_id(\$destroy) unless
     * this interface is used for a storage object designed for unit
     * or functional testing where a real PHP session would interfere
     * with testing.
     *
     * Note regenerate+destroy should not clear the session data in memory
     * only delete the session data from persistent storage.
     *
     * Care: When regenerating the session ID no locking is involved in PHP's
     * session design. See https://bugs.php.net/61470 for a discussion.
     * So you must make sure the regenerated session is saved BEFORE sending the
     * headers with the new ID. Symfony's HttpKernel offers a listener for this.
     * See Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener.
     * Otherwise session data could get lost again for concurrent requests with the
     * new ID. One result could be that you get logged out after just logging in.
     *
     * @param bool \$destroy  Destroy session when regenerating?
     * @param int  \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                       will leave the system settings unchanged, 0 sets the cookie
     *                       to expire with browser session. Time is in seconds, and is
     *                       not a Unix timestamp.
     *
     * @return bool True if session regenerated, false if error
     *
     * @throws \\RuntimeException If an error occurs while regenerating this storage
     */
    public function regenerate(\$destroy = false, \$lifetime = null);

    /**
     * Force the session to be saved and closed.
     *
     * This method must invoke session_write_close() unless this interface is
     * used for a storage object design for unit or functional testing where
     * a real PHP session would interfere with testing, in which case
     * it should actually persist the session data if required.
     *
     * @throws \\RuntimeException if the session is saved without being started, or if the session
     *                           is already closed
     */
    public function save();

    /**
     * Clear all session data in memory.
     */
    public function clear();

    /**
     * Gets a SessionBagInterface by name.
     *
     * @param string \$name
     *
     * @return SessionBagInterface
     *
     * @throws \\InvalidArgumentException If the bag does not exist
     */
    public function getBag(\$name);

    /**
     * Registers a SessionBagInterface for use.
     */
    public function registerBag(SessionBagInterface \$bag);

    /**
     * @return MetadataBag
     */
    public function getMetadataBag();
}
", "vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php");
    }
}
