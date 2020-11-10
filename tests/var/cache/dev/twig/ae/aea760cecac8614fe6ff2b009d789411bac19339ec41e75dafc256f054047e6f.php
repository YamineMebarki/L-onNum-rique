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

/* vendor/symfony/serializer/Encoder/CsvEncoder.php */
class __TwigTemplate_08ed444cf2926c9101e60b515cff6d7a31af9faa69d010fcc504d69a9b662fda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/CsvEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/CsvEncoder.php"));

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

namespace Symfony\\Component\\Serializer\\Encoder;

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;

/**
 * Encodes CSV data.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Oliver Hoff <oliver@hofff.com>
 */
class CsvEncoder implements EncoderInterface, DecoderInterface
{
    const FORMAT = 'csv';
    const DELIMITER_KEY = 'csv_delimiter';
    const ENCLOSURE_KEY = 'csv_enclosure';
    const ESCAPE_CHAR_KEY = 'csv_escape_char';
    const KEY_SEPARATOR_KEY = 'csv_key_separator';
    const HEADERS_KEY = 'csv_headers';
    const ESCAPE_FORMULAS_KEY = 'csv_escape_formulas';
    const AS_COLLECTION_KEY = 'as_collection';
    const NO_HEADERS_KEY = 'no_headers';

    private \$formulasStartCharacters = ['=', '-', '+', '@'];
    private \$defaultContext = [
        self::DELIMITER_KEY => ',',
        self::ENCLOSURE_KEY => '\"',
        self::ESCAPE_CHAR_KEY => '',
        self::ESCAPE_FORMULAS_KEY => false,
        self::HEADERS_KEY => [],
        self::KEY_SEPARATOR_KEY => '.',
        self::NO_HEADERS_KEY => false,
    ];

    /**
     * @param array \$defaultContext
     */
    public function __construct(\$defaultContext = [], string \$enclosure = '\"', string \$escapeChar = '', string \$keySeparator = '.', bool \$escapeFormulas = false)
    {
        if (!\\is_array(\$defaultContext)) {
            @trigger_error('Passing configuration options directly to the constructor is deprecated since Symfony 4.2, use the default context instead.', E_USER_DEPRECATED);

            \$defaultContext = [
                self::DELIMITER_KEY => (string) \$defaultContext,
                self::ENCLOSURE_KEY => \$enclosure,
                self::ESCAPE_CHAR_KEY => \$escapeChar,
                self::KEY_SEPARATOR_KEY => \$keySeparator,
                self::ESCAPE_FORMULAS_KEY => \$escapeFormulas,
            ];
        }

        \$this->defaultContext = array_merge(\$this->defaultContext, \$defaultContext);

        if (\\PHP_VERSION_ID < 70400 && '' === \$this->defaultContext[self::ESCAPE_CHAR_KEY]) {
            \$this->defaultContext[self::ESCAPE_CHAR_KEY] = '\\\\';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function encode(\$data, \$format, array \$context = [])
    {
        \$handle = fopen('php://temp,', 'w+');

        if (!\\is_array(\$data)) {
            \$data = [[\$data]];
        } elseif (empty(\$data)) {
            \$data = [[]];
        } else {
            // Sequential arrays of arrays are considered as collections
            \$i = 0;
            foreach (\$data as \$key => \$value) {
                if (\$i !== \$key || !\\is_array(\$value)) {
                    \$data = [\$data];
                    break;
                }

                ++\$i;
            }
        }

        list(\$delimiter, \$enclosure, \$escapeChar, \$keySeparator, \$headers, \$escapeFormulas) = \$this->getCsvOptions(\$context);

        foreach (\$data as &\$value) {
            \$flattened = [];
            \$this->flatten(\$value, \$flattened, \$keySeparator, '', \$escapeFormulas);
            \$value = \$flattened;
        }
        unset(\$value);

        \$headers = array_merge(array_values(\$headers), array_diff(\$this->extractHeaders(\$data), \$headers));

        if (!(\$context[self::NO_HEADERS_KEY] ?? false)) {
            fputcsv(\$handle, \$headers, \$delimiter, \$enclosure, \$escapeChar);
        }

        \$headers = array_fill_keys(\$headers, '');
        foreach (\$data as \$row) {
            fputcsv(\$handle, array_replace(\$headers, \$row), \$delimiter, \$enclosure, \$escapeChar);
        }

        rewind(\$handle);
        \$value = stream_get_contents(\$handle);
        fclose(\$handle);

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format)
    {
        return self::FORMAT === \$format;
    }

    /**
     * {@inheritdoc}
     */
    public function decode(\$data, \$format, array \$context = [])
    {
        \$handle = fopen('php://temp', 'r+');
        fwrite(\$handle, \$data);
        rewind(\$handle);

        \$headers = null;
        \$nbHeaders = 0;
        \$headerCount = [];
        \$result = [];

        list(\$delimiter, \$enclosure, \$escapeChar, \$keySeparator) = \$this->getCsvOptions(\$context);

        while (false !== (\$cols = fgetcsv(\$handle, 0, \$delimiter, \$enclosure, \$escapeChar))) {
            \$nbCols = \\count(\$cols);

            if (null === \$headers) {
                \$nbHeaders = \$nbCols;

                if (\$context[self::NO_HEADERS_KEY] ?? false) {
                    for (\$i = 0; \$i < \$nbCols; ++\$i) {
                        \$headers[] = [\$i];
                    }
                    \$headerCount = array_fill(0, \$nbCols, 1);
                } else {
                    foreach (\$cols as \$col) {
                        \$header = explode(\$keySeparator, \$col);
                        \$headers[] = \$header;
                        \$headerCount[] = \\count(\$header);
                    }

                    continue;
                }
            }

            \$item = [];
            for (\$i = 0; (\$i < \$nbCols) && (\$i < \$nbHeaders); ++\$i) {
                \$depth = \$headerCount[\$i];
                \$arr = &\$item;
                for (\$j = 0; \$j < \$depth; ++\$j) {
                    // Handle nested arrays
                    if (\$j === (\$depth - 1)) {
                        \$arr[\$headers[\$i][\$j]] = \$cols[\$i];

                        continue;
                    }

                    if (!isset(\$arr[\$headers[\$i][\$j]])) {
                        \$arr[\$headers[\$i][\$j]] = [];
                    }

                    \$arr = &\$arr[\$headers[\$i][\$j]];
                }
            }

            \$result[] = \$item;
        }
        fclose(\$handle);

        if (\$context[self::AS_COLLECTION_KEY] ?? false) {
            return \$result;
        }

        if (empty(\$result) || isset(\$result[1])) {
            return \$result;
        }

        if (!isset(\$context['as_collection'])) {
            @trigger_error('Relying on the default value (false) of the \"as_collection\" option is deprecated since 4.2. You should set it to false explicitly instead as true will be the default value in 5.0.', E_USER_DEPRECATED);
        }

        // If there is only one data line in the document, return it (the line), the result is not considered as a collection
        return \$result[0];
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding(\$format)
    {
        return self::FORMAT === \$format;
    }

    /**
     * Flattens an array and generates keys including the path.
     */
    private function flatten(array \$array, array &\$result, string \$keySeparator, string \$parentKey = '', bool \$escapeFormulas = false)
    {
        foreach (\$array as \$key => \$value) {
            if (\\is_array(\$value)) {
                \$this->flatten(\$value, \$result, \$keySeparator, \$parentKey.\$key.\$keySeparator, \$escapeFormulas);
            } else {
                if (\$escapeFormulas && \\in_array(substr((string) \$value, 0, 1), \$this->formulasStartCharacters, true)) {
                    \$result[\$parentKey.\$key] = \"\\t\".\$value;
                } else {
                    // Ensures an actual value is used when dealing with true and false
                    \$result[\$parentKey.\$key] = false === \$value ? 0 : (true === \$value ? 1 : \$value);
                }
            }
        }
    }

    private function getCsvOptions(array \$context): array
    {
        \$delimiter = \$context[self::DELIMITER_KEY] ?? \$this->defaultContext[self::DELIMITER_KEY];
        \$enclosure = \$context[self::ENCLOSURE_KEY] ?? \$this->defaultContext[self::ENCLOSURE_KEY];
        \$escapeChar = \$context[self::ESCAPE_CHAR_KEY] ?? \$this->defaultContext[self::ESCAPE_CHAR_KEY];
        \$keySeparator = \$context[self::KEY_SEPARATOR_KEY] ?? \$this->defaultContext[self::KEY_SEPARATOR_KEY];
        \$headers = \$context[self::HEADERS_KEY] ?? \$this->defaultContext[self::HEADERS_KEY];
        \$escapeFormulas = \$context[self::ESCAPE_FORMULAS_KEY] ?? \$this->defaultContext[self::ESCAPE_FORMULAS_KEY];

        if (!\\is_array(\$headers)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" context variable must be an array or null, given \"%s\".', self::HEADERS_KEY, \\gettype(\$headers)));
        }

        return [\$delimiter, \$enclosure, \$escapeChar, \$keySeparator, \$headers, \$escapeFormulas];
    }

    /**
     * @return string[]
     */
    private function extractHeaders(array \$data)
    {
        \$headers = [];
        \$flippedHeaders = [];

        foreach (\$data as \$row) {
            \$previousHeader = null;

            foreach (\$row as \$header => \$_) {
                if (isset(\$flippedHeaders[\$header])) {
                    \$previousHeader = \$header;
                    continue;
                }

                if (null === \$previousHeader) {
                    \$n = \\count(\$headers);
                } else {
                    \$n = \$flippedHeaders[\$previousHeader] + 1;

                    for (\$j = \\count(\$headers); \$j > \$n; --\$j) {
                        ++\$flippedHeaders[\$headers[\$j] = \$headers[\$j - 1]];
                    }
                }

                \$headers[\$n] = \$header;
                \$flippedHeaders[\$header] = \$n;
                \$previousHeader = \$header;
            }
        }

        return \$headers;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Encoder/CsvEncoder.php";
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

namespace Symfony\\Component\\Serializer\\Encoder;

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;

/**
 * Encodes CSV data.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Oliver Hoff <oliver@hofff.com>
 */
class CsvEncoder implements EncoderInterface, DecoderInterface
{
    const FORMAT = 'csv';
    const DELIMITER_KEY = 'csv_delimiter';
    const ENCLOSURE_KEY = 'csv_enclosure';
    const ESCAPE_CHAR_KEY = 'csv_escape_char';
    const KEY_SEPARATOR_KEY = 'csv_key_separator';
    const HEADERS_KEY = 'csv_headers';
    const ESCAPE_FORMULAS_KEY = 'csv_escape_formulas';
    const AS_COLLECTION_KEY = 'as_collection';
    const NO_HEADERS_KEY = 'no_headers';

    private \$formulasStartCharacters = ['=', '-', '+', '@'];
    private \$defaultContext = [
        self::DELIMITER_KEY => ',',
        self::ENCLOSURE_KEY => '\"',
        self::ESCAPE_CHAR_KEY => '',
        self::ESCAPE_FORMULAS_KEY => false,
        self::HEADERS_KEY => [],
        self::KEY_SEPARATOR_KEY => '.',
        self::NO_HEADERS_KEY => false,
    ];

    /**
     * @param array \$defaultContext
     */
    public function __construct(\$defaultContext = [], string \$enclosure = '\"', string \$escapeChar = '', string \$keySeparator = '.', bool \$escapeFormulas = false)
    {
        if (!\\is_array(\$defaultContext)) {
            @trigger_error('Passing configuration options directly to the constructor is deprecated since Symfony 4.2, use the default context instead.', E_USER_DEPRECATED);

            \$defaultContext = [
                self::DELIMITER_KEY => (string) \$defaultContext,
                self::ENCLOSURE_KEY => \$enclosure,
                self::ESCAPE_CHAR_KEY => \$escapeChar,
                self::KEY_SEPARATOR_KEY => \$keySeparator,
                self::ESCAPE_FORMULAS_KEY => \$escapeFormulas,
            ];
        }

        \$this->defaultContext = array_merge(\$this->defaultContext, \$defaultContext);

        if (\\PHP_VERSION_ID < 70400 && '' === \$this->defaultContext[self::ESCAPE_CHAR_KEY]) {
            \$this->defaultContext[self::ESCAPE_CHAR_KEY] = '\\\\';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function encode(\$data, \$format, array \$context = [])
    {
        \$handle = fopen('php://temp,', 'w+');

        if (!\\is_array(\$data)) {
            \$data = [[\$data]];
        } elseif (empty(\$data)) {
            \$data = [[]];
        } else {
            // Sequential arrays of arrays are considered as collections
            \$i = 0;
            foreach (\$data as \$key => \$value) {
                if (\$i !== \$key || !\\is_array(\$value)) {
                    \$data = [\$data];
                    break;
                }

                ++\$i;
            }
        }

        list(\$delimiter, \$enclosure, \$escapeChar, \$keySeparator, \$headers, \$escapeFormulas) = \$this->getCsvOptions(\$context);

        foreach (\$data as &\$value) {
            \$flattened = [];
            \$this->flatten(\$value, \$flattened, \$keySeparator, '', \$escapeFormulas);
            \$value = \$flattened;
        }
        unset(\$value);

        \$headers = array_merge(array_values(\$headers), array_diff(\$this->extractHeaders(\$data), \$headers));

        if (!(\$context[self::NO_HEADERS_KEY] ?? false)) {
            fputcsv(\$handle, \$headers, \$delimiter, \$enclosure, \$escapeChar);
        }

        \$headers = array_fill_keys(\$headers, '');
        foreach (\$data as \$row) {
            fputcsv(\$handle, array_replace(\$headers, \$row), \$delimiter, \$enclosure, \$escapeChar);
        }

        rewind(\$handle);
        \$value = stream_get_contents(\$handle);
        fclose(\$handle);

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format)
    {
        return self::FORMAT === \$format;
    }

    /**
     * {@inheritdoc}
     */
    public function decode(\$data, \$format, array \$context = [])
    {
        \$handle = fopen('php://temp', 'r+');
        fwrite(\$handle, \$data);
        rewind(\$handle);

        \$headers = null;
        \$nbHeaders = 0;
        \$headerCount = [];
        \$result = [];

        list(\$delimiter, \$enclosure, \$escapeChar, \$keySeparator) = \$this->getCsvOptions(\$context);

        while (false !== (\$cols = fgetcsv(\$handle, 0, \$delimiter, \$enclosure, \$escapeChar))) {
            \$nbCols = \\count(\$cols);

            if (null === \$headers) {
                \$nbHeaders = \$nbCols;

                if (\$context[self::NO_HEADERS_KEY] ?? false) {
                    for (\$i = 0; \$i < \$nbCols; ++\$i) {
                        \$headers[] = [\$i];
                    }
                    \$headerCount = array_fill(0, \$nbCols, 1);
                } else {
                    foreach (\$cols as \$col) {
                        \$header = explode(\$keySeparator, \$col);
                        \$headers[] = \$header;
                        \$headerCount[] = \\count(\$header);
                    }

                    continue;
                }
            }

            \$item = [];
            for (\$i = 0; (\$i < \$nbCols) && (\$i < \$nbHeaders); ++\$i) {
                \$depth = \$headerCount[\$i];
                \$arr = &\$item;
                for (\$j = 0; \$j < \$depth; ++\$j) {
                    // Handle nested arrays
                    if (\$j === (\$depth - 1)) {
                        \$arr[\$headers[\$i][\$j]] = \$cols[\$i];

                        continue;
                    }

                    if (!isset(\$arr[\$headers[\$i][\$j]])) {
                        \$arr[\$headers[\$i][\$j]] = [];
                    }

                    \$arr = &\$arr[\$headers[\$i][\$j]];
                }
            }

            \$result[] = \$item;
        }
        fclose(\$handle);

        if (\$context[self::AS_COLLECTION_KEY] ?? false) {
            return \$result;
        }

        if (empty(\$result) || isset(\$result[1])) {
            return \$result;
        }

        if (!isset(\$context['as_collection'])) {
            @trigger_error('Relying on the default value (false) of the \"as_collection\" option is deprecated since 4.2. You should set it to false explicitly instead as true will be the default value in 5.0.', E_USER_DEPRECATED);
        }

        // If there is only one data line in the document, return it (the line), the result is not considered as a collection
        return \$result[0];
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding(\$format)
    {
        return self::FORMAT === \$format;
    }

    /**
     * Flattens an array and generates keys including the path.
     */
    private function flatten(array \$array, array &\$result, string \$keySeparator, string \$parentKey = '', bool \$escapeFormulas = false)
    {
        foreach (\$array as \$key => \$value) {
            if (\\is_array(\$value)) {
                \$this->flatten(\$value, \$result, \$keySeparator, \$parentKey.\$key.\$keySeparator, \$escapeFormulas);
            } else {
                if (\$escapeFormulas && \\in_array(substr((string) \$value, 0, 1), \$this->formulasStartCharacters, true)) {
                    \$result[\$parentKey.\$key] = \"\\t\".\$value;
                } else {
                    // Ensures an actual value is used when dealing with true and false
                    \$result[\$parentKey.\$key] = false === \$value ? 0 : (true === \$value ? 1 : \$value);
                }
            }
        }
    }

    private function getCsvOptions(array \$context): array
    {
        \$delimiter = \$context[self::DELIMITER_KEY] ?? \$this->defaultContext[self::DELIMITER_KEY];
        \$enclosure = \$context[self::ENCLOSURE_KEY] ?? \$this->defaultContext[self::ENCLOSURE_KEY];
        \$escapeChar = \$context[self::ESCAPE_CHAR_KEY] ?? \$this->defaultContext[self::ESCAPE_CHAR_KEY];
        \$keySeparator = \$context[self::KEY_SEPARATOR_KEY] ?? \$this->defaultContext[self::KEY_SEPARATOR_KEY];
        \$headers = \$context[self::HEADERS_KEY] ?? \$this->defaultContext[self::HEADERS_KEY];
        \$escapeFormulas = \$context[self::ESCAPE_FORMULAS_KEY] ?? \$this->defaultContext[self::ESCAPE_FORMULAS_KEY];

        if (!\\is_array(\$headers)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" context variable must be an array or null, given \"%s\".', self::HEADERS_KEY, \\gettype(\$headers)));
        }

        return [\$delimiter, \$enclosure, \$escapeChar, \$keySeparator, \$headers, \$escapeFormulas];
    }

    /**
     * @return string[]
     */
    private function extractHeaders(array \$data)
    {
        \$headers = [];
        \$flippedHeaders = [];

        foreach (\$data as \$row) {
            \$previousHeader = null;

            foreach (\$row as \$header => \$_) {
                if (isset(\$flippedHeaders[\$header])) {
                    \$previousHeader = \$header;
                    continue;
                }

                if (null === \$previousHeader) {
                    \$n = \\count(\$headers);
                } else {
                    \$n = \$flippedHeaders[\$previousHeader] + 1;

                    for (\$j = \\count(\$headers); \$j > \$n; --\$j) {
                        ++\$flippedHeaders[\$headers[\$j] = \$headers[\$j - 1]];
                    }
                }

                \$headers[\$n] = \$header;
                \$flippedHeaders[\$header] = \$n;
                \$previousHeader = \$header;
            }
        }

        return \$headers;
    }
}
", "vendor/symfony/serializer/Encoder/CsvEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Encoder/CsvEncoder.php");
    }
}
