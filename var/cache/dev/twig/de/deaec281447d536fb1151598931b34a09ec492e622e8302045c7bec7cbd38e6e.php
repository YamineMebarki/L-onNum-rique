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

/* vendor/symfony/doctrine-bridge/Security/RememberMe/DoctrineTokenProvider.php */
class __TwigTemplate_f5e7b70be81e77b49057f1e9286488233d42566c04884d103eb4c0de92b7ffb7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Security/RememberMe/DoctrineTokenProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Security/RememberMe/DoctrineTokenProvider.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Security\\RememberMe;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Types\\Type as DoctrineType;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentToken;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentTokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface;
use Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException;

/**
 * This class provides storage for the tokens that is set in \"remember me\"
 * cookies. This way no password secrets will be stored in the cookies on
 * the client machine, and thus the security is improved.
 *
 * This depends only on doctrine in order to get a database connection
 * and to do the conversion of the datetime column.
 *
 * In order to use this class, you need the following table in your database:
 *
 *     CREATE TABLE `rememberme_token` (
 *         `series`   char(88)     UNIQUE PRIMARY KEY NOT NULL,
 *         `value`    char(88)     NOT NULL,
 *         `lastUsed` datetime     NOT NULL,
 *         `class`    varchar(100) NOT NULL,
 *         `username` varchar(200) NOT NULL
 *     );
 */
class DoctrineTokenProvider implements TokenProviderInterface
{
    private \$conn;

    public function __construct(Connection \$conn)
    {
        \$this->conn = \$conn;
    }

    /**
     * {@inheritdoc}
     */
    public function loadTokenBySeries(\$series)
    {
        // the alias for lastUsed works around case insensitivity in PostgreSQL
        \$sql = 'SELECT class, username, value, lastUsed AS last_used'
            .' FROM rememberme_token WHERE series=:series';
        \$paramValues = ['series' => \$series];
        \$paramTypes = ['series' => \\PDO::PARAM_STR];
        \$stmt = \$this->conn->executeQuery(\$sql, \$paramValues, \$paramTypes);
        \$row = \$stmt->fetch(\\PDO::FETCH_ASSOC);

        if (\$row) {
            return new PersistentToken(\$row['class'], \$row['username'], \$series, \$row['value'], new \\DateTime(\$row['last_used']));
        }

        throw new TokenNotFoundException('No token found.');
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTokenBySeries(\$series)
    {
        \$sql = 'DELETE FROM rememberme_token WHERE series=:series';
        \$paramValues = ['series' => \$series];
        \$paramTypes = ['series' => \\PDO::PARAM_STR];
        \$this->conn->executeUpdate(\$sql, \$paramValues, \$paramTypes);
    }

    /**
     * {@inheritdoc}
     */
    public function updateToken(\$series, \$tokenValue, \\DateTime \$lastUsed)
    {
        \$sql = 'UPDATE rememberme_token SET value=:value, lastUsed=:lastUsed'
            .' WHERE series=:series';
        \$paramValues = [
            'value' => \$tokenValue,
            'lastUsed' => \$lastUsed,
            'series' => \$series,
        ];
        \$paramTypes = [
            'value' => \\PDO::PARAM_STR,
            'lastUsed' => DoctrineType::DATETIME,
            'series' => \\PDO::PARAM_STR,
        ];
        \$updated = \$this->conn->executeUpdate(\$sql, \$paramValues, \$paramTypes);
        if (\$updated < 1) {
            throw new TokenNotFoundException('No token found.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createNewToken(PersistentTokenInterface \$token)
    {
        \$sql = 'INSERT INTO rememberme_token'
            .' (class, username, series, value, lastUsed)'
            .' VALUES (:class, :username, :series, :value, :lastUsed)';
        \$paramValues = [
            'class' => \$token->getClass(),
            'username' => \$token->getUsername(),
            'series' => \$token->getSeries(),
            'value' => \$token->getTokenValue(),
            'lastUsed' => \$token->getLastUsed(),
        ];
        \$paramTypes = [
            'class' => \\PDO::PARAM_STR,
            'username' => \\PDO::PARAM_STR,
            'series' => \\PDO::PARAM_STR,
            'value' => \\PDO::PARAM_STR,
            'lastUsed' => DoctrineType::DATETIME,
        ];
        \$this->conn->executeUpdate(\$sql, \$paramValues, \$paramTypes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Security/RememberMe/DoctrineTokenProvider.php";
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

namespace Symfony\\Bridge\\Doctrine\\Security\\RememberMe;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Types\\Type as DoctrineType;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentToken;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentTokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface;
use Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException;

/**
 * This class provides storage for the tokens that is set in \"remember me\"
 * cookies. This way no password secrets will be stored in the cookies on
 * the client machine, and thus the security is improved.
 *
 * This depends only on doctrine in order to get a database connection
 * and to do the conversion of the datetime column.
 *
 * In order to use this class, you need the following table in your database:
 *
 *     CREATE TABLE `rememberme_token` (
 *         `series`   char(88)     UNIQUE PRIMARY KEY NOT NULL,
 *         `value`    char(88)     NOT NULL,
 *         `lastUsed` datetime     NOT NULL,
 *         `class`    varchar(100) NOT NULL,
 *         `username` varchar(200) NOT NULL
 *     );
 */
class DoctrineTokenProvider implements TokenProviderInterface
{
    private \$conn;

    public function __construct(Connection \$conn)
    {
        \$this->conn = \$conn;
    }

    /**
     * {@inheritdoc}
     */
    public function loadTokenBySeries(\$series)
    {
        // the alias for lastUsed works around case insensitivity in PostgreSQL
        \$sql = 'SELECT class, username, value, lastUsed AS last_used'
            .' FROM rememberme_token WHERE series=:series';
        \$paramValues = ['series' => \$series];
        \$paramTypes = ['series' => \\PDO::PARAM_STR];
        \$stmt = \$this->conn->executeQuery(\$sql, \$paramValues, \$paramTypes);
        \$row = \$stmt->fetch(\\PDO::FETCH_ASSOC);

        if (\$row) {
            return new PersistentToken(\$row['class'], \$row['username'], \$series, \$row['value'], new \\DateTime(\$row['last_used']));
        }

        throw new TokenNotFoundException('No token found.');
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTokenBySeries(\$series)
    {
        \$sql = 'DELETE FROM rememberme_token WHERE series=:series';
        \$paramValues = ['series' => \$series];
        \$paramTypes = ['series' => \\PDO::PARAM_STR];
        \$this->conn->executeUpdate(\$sql, \$paramValues, \$paramTypes);
    }

    /**
     * {@inheritdoc}
     */
    public function updateToken(\$series, \$tokenValue, \\DateTime \$lastUsed)
    {
        \$sql = 'UPDATE rememberme_token SET value=:value, lastUsed=:lastUsed'
            .' WHERE series=:series';
        \$paramValues = [
            'value' => \$tokenValue,
            'lastUsed' => \$lastUsed,
            'series' => \$series,
        ];
        \$paramTypes = [
            'value' => \\PDO::PARAM_STR,
            'lastUsed' => DoctrineType::DATETIME,
            'series' => \\PDO::PARAM_STR,
        ];
        \$updated = \$this->conn->executeUpdate(\$sql, \$paramValues, \$paramTypes);
        if (\$updated < 1) {
            throw new TokenNotFoundException('No token found.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createNewToken(PersistentTokenInterface \$token)
    {
        \$sql = 'INSERT INTO rememberme_token'
            .' (class, username, series, value, lastUsed)'
            .' VALUES (:class, :username, :series, :value, :lastUsed)';
        \$paramValues = [
            'class' => \$token->getClass(),
            'username' => \$token->getUsername(),
            'series' => \$token->getSeries(),
            'value' => \$token->getTokenValue(),
            'lastUsed' => \$token->getLastUsed(),
        ];
        \$paramTypes = [
            'class' => \\PDO::PARAM_STR,
            'username' => \\PDO::PARAM_STR,
            'series' => \\PDO::PARAM_STR,
            'value' => \\PDO::PARAM_STR,
            'lastUsed' => DoctrineType::DATETIME,
        ];
        \$this->conn->executeUpdate(\$sql, \$paramValues, \$paramTypes);
    }
}
", "vendor/symfony/doctrine-bridge/Security/RememberMe/DoctrineTokenProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Security/RememberMe/DoctrineTokenProvider.php");
    }
}
