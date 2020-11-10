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

/* vendor/symfony/var-dumper/Caster/PgSqlCaster.php */
class __TwigTemplate_7446a703f7bf5bbfe74d5ace50fcfddc58de98abb7e35c69a0fec3ab947df163 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/PgSqlCaster.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/PgSqlCaster.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts pqsql resources to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class PgSqlCaster
{
    private static \$paramCodes = [
        'server_encoding',
        'client_encoding',
        'is_superuser',
        'session_authorization',
        'DateStyle',
        'TimeZone',
        'IntervalStyle',
        'integer_datetimes',
        'application_name',
        'standard_conforming_strings',
    ];

    private static \$transactionStatus = [
        PGSQL_TRANSACTION_IDLE => 'PGSQL_TRANSACTION_IDLE',
        PGSQL_TRANSACTION_ACTIVE => 'PGSQL_TRANSACTION_ACTIVE',
        PGSQL_TRANSACTION_INTRANS => 'PGSQL_TRANSACTION_INTRANS',
        PGSQL_TRANSACTION_INERROR => 'PGSQL_TRANSACTION_INERROR',
        PGSQL_TRANSACTION_UNKNOWN => 'PGSQL_TRANSACTION_UNKNOWN',
    ];

    private static \$resultStatus = [
        PGSQL_EMPTY_QUERY => 'PGSQL_EMPTY_QUERY',
        PGSQL_COMMAND_OK => 'PGSQL_COMMAND_OK',
        PGSQL_TUPLES_OK => 'PGSQL_TUPLES_OK',
        PGSQL_COPY_OUT => 'PGSQL_COPY_OUT',
        PGSQL_COPY_IN => 'PGSQL_COPY_IN',
        PGSQL_BAD_RESPONSE => 'PGSQL_BAD_RESPONSE',
        PGSQL_NONFATAL_ERROR => 'PGSQL_NONFATAL_ERROR',
        PGSQL_FATAL_ERROR => 'PGSQL_FATAL_ERROR',
    ];

    private static \$diagCodes = [
        'severity' => PGSQL_DIAG_SEVERITY,
        'sqlstate' => PGSQL_DIAG_SQLSTATE,
        'message' => PGSQL_DIAG_MESSAGE_PRIMARY,
        'detail' => PGSQL_DIAG_MESSAGE_DETAIL,
        'hint' => PGSQL_DIAG_MESSAGE_HINT,
        'statement position' => PGSQL_DIAG_STATEMENT_POSITION,
        'internal position' => PGSQL_DIAG_INTERNAL_POSITION,
        'internal query' => PGSQL_DIAG_INTERNAL_QUERY,
        'context' => PGSQL_DIAG_CONTEXT,
        'file' => PGSQL_DIAG_SOURCE_FILE,
        'line' => PGSQL_DIAG_SOURCE_LINE,
        'function' => PGSQL_DIAG_SOURCE_FUNCTION,
    ];

    public static function castLargeObject(\$lo, array \$a, Stub \$stub, \$isNested)
    {
        \$a['seek position'] = pg_lo_tell(\$lo);

        return \$a;
    }

    public static function castLink(\$link, array \$a, Stub \$stub, \$isNested)
    {
        \$a['status'] = pg_connection_status(\$link);
        \$a['status'] = new ConstStub(PGSQL_CONNECTION_OK === \$a['status'] ? 'PGSQL_CONNECTION_OK' : 'PGSQL_CONNECTION_BAD', \$a['status']);
        \$a['busy'] = pg_connection_busy(\$link);

        \$a['transaction'] = pg_transaction_status(\$link);
        if (isset(self::\$transactionStatus[\$a['transaction']])) {
            \$a['transaction'] = new ConstStub(self::\$transactionStatus[\$a['transaction']], \$a['transaction']);
        }

        \$a['pid'] = pg_get_pid(\$link);
        \$a['last error'] = pg_last_error(\$link);
        \$a['last notice'] = pg_last_notice(\$link);
        \$a['host'] = pg_host(\$link);
        \$a['port'] = pg_port(\$link);
        \$a['dbname'] = pg_dbname(\$link);
        \$a['options'] = pg_options(\$link);
        \$a['version'] = pg_version(\$link);

        foreach (self::\$paramCodes as \$v) {
            if (false !== \$s = pg_parameter_status(\$link, \$v)) {
                \$a['param'][\$v] = \$s;
            }
        }

        \$a['param']['client_encoding'] = pg_client_encoding(\$link);
        \$a['param'] = new EnumStub(\$a['param']);

        return \$a;
    }

    public static function castResult(\$result, array \$a, Stub \$stub, \$isNested)
    {
        \$a['num rows'] = pg_num_rows(\$result);
        \$a['status'] = pg_result_status(\$result);
        if (isset(self::\$resultStatus[\$a['status']])) {
            \$a['status'] = new ConstStub(self::\$resultStatus[\$a['status']], \$a['status']);
        }
        \$a['command-completion tag'] = pg_result_status(\$result, PGSQL_STATUS_STRING);

        if (-1 === \$a['num rows']) {
            foreach (self::\$diagCodes as \$k => \$v) {
                \$a['error'][\$k] = pg_result_error_field(\$result, \$v);
            }
        }

        \$a['affected rows'] = pg_affected_rows(\$result);
        \$a['last OID'] = pg_last_oid(\$result);

        \$fields = pg_num_fields(\$result);

        for (\$i = 0; \$i < \$fields; ++\$i) {
            \$field = [
                'name' => pg_field_name(\$result, \$i),
                'table' => sprintf('%s (OID: %s)', pg_field_table(\$result, \$i), pg_field_table(\$result, \$i, true)),
                'type' => sprintf('%s (OID: %s)', pg_field_type(\$result, \$i), pg_field_type_oid(\$result, \$i)),
                'nullable' => (bool) pg_field_is_null(\$result, \$i),
                'storage' => pg_field_size(\$result, \$i).' bytes',
                'display' => pg_field_prtlen(\$result, \$i).' chars',
            ];
            if (' (OID: )' === \$field['table']) {
                \$field['table'] = null;
            }
            if ('-1 bytes' === \$field['storage']) {
                \$field['storage'] = 'variable size';
            } elseif ('1 bytes' === \$field['storage']) {
                \$field['storage'] = '1 byte';
            }
            if ('1 chars' === \$field['display']) {
                \$field['display'] = '1 char';
            }
            \$a['fields'][] = new EnumStub(\$field);
        }

        return \$a;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Caster/PgSqlCaster.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts pqsql resources to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class PgSqlCaster
{
    private static \$paramCodes = [
        'server_encoding',
        'client_encoding',
        'is_superuser',
        'session_authorization',
        'DateStyle',
        'TimeZone',
        'IntervalStyle',
        'integer_datetimes',
        'application_name',
        'standard_conforming_strings',
    ];

    private static \$transactionStatus = [
        PGSQL_TRANSACTION_IDLE => 'PGSQL_TRANSACTION_IDLE',
        PGSQL_TRANSACTION_ACTIVE => 'PGSQL_TRANSACTION_ACTIVE',
        PGSQL_TRANSACTION_INTRANS => 'PGSQL_TRANSACTION_INTRANS',
        PGSQL_TRANSACTION_INERROR => 'PGSQL_TRANSACTION_INERROR',
        PGSQL_TRANSACTION_UNKNOWN => 'PGSQL_TRANSACTION_UNKNOWN',
    ];

    private static \$resultStatus = [
        PGSQL_EMPTY_QUERY => 'PGSQL_EMPTY_QUERY',
        PGSQL_COMMAND_OK => 'PGSQL_COMMAND_OK',
        PGSQL_TUPLES_OK => 'PGSQL_TUPLES_OK',
        PGSQL_COPY_OUT => 'PGSQL_COPY_OUT',
        PGSQL_COPY_IN => 'PGSQL_COPY_IN',
        PGSQL_BAD_RESPONSE => 'PGSQL_BAD_RESPONSE',
        PGSQL_NONFATAL_ERROR => 'PGSQL_NONFATAL_ERROR',
        PGSQL_FATAL_ERROR => 'PGSQL_FATAL_ERROR',
    ];

    private static \$diagCodes = [
        'severity' => PGSQL_DIAG_SEVERITY,
        'sqlstate' => PGSQL_DIAG_SQLSTATE,
        'message' => PGSQL_DIAG_MESSAGE_PRIMARY,
        'detail' => PGSQL_DIAG_MESSAGE_DETAIL,
        'hint' => PGSQL_DIAG_MESSAGE_HINT,
        'statement position' => PGSQL_DIAG_STATEMENT_POSITION,
        'internal position' => PGSQL_DIAG_INTERNAL_POSITION,
        'internal query' => PGSQL_DIAG_INTERNAL_QUERY,
        'context' => PGSQL_DIAG_CONTEXT,
        'file' => PGSQL_DIAG_SOURCE_FILE,
        'line' => PGSQL_DIAG_SOURCE_LINE,
        'function' => PGSQL_DIAG_SOURCE_FUNCTION,
    ];

    public static function castLargeObject(\$lo, array \$a, Stub \$stub, \$isNested)
    {
        \$a['seek position'] = pg_lo_tell(\$lo);

        return \$a;
    }

    public static function castLink(\$link, array \$a, Stub \$stub, \$isNested)
    {
        \$a['status'] = pg_connection_status(\$link);
        \$a['status'] = new ConstStub(PGSQL_CONNECTION_OK === \$a['status'] ? 'PGSQL_CONNECTION_OK' : 'PGSQL_CONNECTION_BAD', \$a['status']);
        \$a['busy'] = pg_connection_busy(\$link);

        \$a['transaction'] = pg_transaction_status(\$link);
        if (isset(self::\$transactionStatus[\$a['transaction']])) {
            \$a['transaction'] = new ConstStub(self::\$transactionStatus[\$a['transaction']], \$a['transaction']);
        }

        \$a['pid'] = pg_get_pid(\$link);
        \$a['last error'] = pg_last_error(\$link);
        \$a['last notice'] = pg_last_notice(\$link);
        \$a['host'] = pg_host(\$link);
        \$a['port'] = pg_port(\$link);
        \$a['dbname'] = pg_dbname(\$link);
        \$a['options'] = pg_options(\$link);
        \$a['version'] = pg_version(\$link);

        foreach (self::\$paramCodes as \$v) {
            if (false !== \$s = pg_parameter_status(\$link, \$v)) {
                \$a['param'][\$v] = \$s;
            }
        }

        \$a['param']['client_encoding'] = pg_client_encoding(\$link);
        \$a['param'] = new EnumStub(\$a['param']);

        return \$a;
    }

    public static function castResult(\$result, array \$a, Stub \$stub, \$isNested)
    {
        \$a['num rows'] = pg_num_rows(\$result);
        \$a['status'] = pg_result_status(\$result);
        if (isset(self::\$resultStatus[\$a['status']])) {
            \$a['status'] = new ConstStub(self::\$resultStatus[\$a['status']], \$a['status']);
        }
        \$a['command-completion tag'] = pg_result_status(\$result, PGSQL_STATUS_STRING);

        if (-1 === \$a['num rows']) {
            foreach (self::\$diagCodes as \$k => \$v) {
                \$a['error'][\$k] = pg_result_error_field(\$result, \$v);
            }
        }

        \$a['affected rows'] = pg_affected_rows(\$result);
        \$a['last OID'] = pg_last_oid(\$result);

        \$fields = pg_num_fields(\$result);

        for (\$i = 0; \$i < \$fields; ++\$i) {
            \$field = [
                'name' => pg_field_name(\$result, \$i),
                'table' => sprintf('%s (OID: %s)', pg_field_table(\$result, \$i), pg_field_table(\$result, \$i, true)),
                'type' => sprintf('%s (OID: %s)', pg_field_type(\$result, \$i), pg_field_type_oid(\$result, \$i)),
                'nullable' => (bool) pg_field_is_null(\$result, \$i),
                'storage' => pg_field_size(\$result, \$i).' bytes',
                'display' => pg_field_prtlen(\$result, \$i).' chars',
            ];
            if (' (OID: )' === \$field['table']) {
                \$field['table'] = null;
            }
            if ('-1 bytes' === \$field['storage']) {
                \$field['storage'] = 'variable size';
            } elseif ('1 bytes' === \$field['storage']) {
                \$field['storage'] = '1 byte';
            }
            if ('1 chars' === \$field['display']) {
                \$field['display'] = '1 char';
            }
            \$a['fields'][] = new EnumStub(\$field);
        }

        return \$a;
    }
}
", "vendor/symfony/var-dumper/Caster/PgSqlCaster.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Caster/PgSqlCaster.php");
    }
}
