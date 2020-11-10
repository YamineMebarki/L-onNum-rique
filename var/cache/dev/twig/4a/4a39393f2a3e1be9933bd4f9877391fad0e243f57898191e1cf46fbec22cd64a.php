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

/* vendor/zendframework/zend-code/src/Scanner/TokenArrayScanner.php */
class __TwigTemplate_02ce5aab2b7d6dbdcffb0399d5f613d56e0c4876dc8ed84db66d4d359c07c562 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/TokenArrayScanner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/TokenArrayScanner.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Exception;
use Zend\\Code\\NameInformation;

use function array_shift;
use function array_slice;
use function in_array;
use function is_array;
use function is_int;
use function is_string;

class TokenArrayScanner implements ScannerInterface
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @var array
     */
    protected \$tokens = [];

    /**
     * @var null
     */
    protected \$docComment;

    /**
     * @var NameInformation
     */
    protected \$nameInformation;

    /**
     * @var array
     */
    protected \$infos = [];

    /**
     * @var AnnotationManager
     */
    protected \$annotationManager;

    /**
     * @param null|array \$tokens
     * @param null|AnnotationManager \$annotationManager
     */
    public function __construct(\$tokens, AnnotationManager \$annotationManager = null)
    {
        \$this->tokens            = \$tokens;
        \$this->annotationManager = \$annotationManager;
    }

    /**
     * @return AnnotationManager
     */
    public function getAnnotationManager()
    {
        return \$this->annotationManager;
    }

    /**
     * Get doc comment
     *
     * @todo Assignment of \$this->docComment should probably be done in scan()
     *       and then \$this->getDocComment() just retrieves it.
     *
     * @return string|null
     */
    public function getDocComment()
    {
        foreach (\$this->tokens as \$token) {
            \$type    = \$token[0];
            \$value   = \$token[1];
            if ((\$type == T_OPEN_TAG) || (\$type == T_WHITESPACE)) {
                continue;
            } elseif (\$type == T_DOC_COMMENT) {
                \$this->docComment = \$value;

                return \$this->docComment;
            } else {
                // Only whitespace is allowed before file docblocks
                return;
            }
        }
    }

    /**
     * @return array
     */
    public function getNamespaces()
    {
        \$this->scan();

        \$namespaces = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] == 'namespace') {
                \$namespaces[] = \$info['namespace'];
            }
        }

        return \$namespaces;
    }

    /**
     * @param  null|string \$namespace
     * @return array|null
     */
    public function getUses(\$namespace = null)
    {
        \$this->scan();

        return \$this->getUsesNoScan(\$namespace);
    }

    /**
     * @return void
     */
    public function getIncludes()
    {
        \$this->scan();
        // @todo Implement getIncludes() in TokenArrayScanner
    }

    /**
     * @return array
     */
    public function getClassNames()
    {
        \$this->scan();

        \$return = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] != 'class') {
                continue;
            }

            \$return[] = \$info['name'];
        }

        return \$return;
    }

    /**
     * @return ClassScanner[]
     */
    public function getClasses()
    {
        \$this->scan();

        \$return = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] != 'class') {
                continue;
            }

            \$return[] = \$this->getClass(\$info['name']);
        }

        return \$return;
    }

    /**
     * Return the class object from this scanner
     *
     * @param  string|int \$name
     * @throws Exception\\InvalidArgumentException
     * @return ClassScanner|false
     */
    public function getClass(\$name)
    {
        \$this->scan();

        if (is_int(\$name)) {
            \$info = \$this->infos[\$name];
            if (\$info['type'] != 'class') {
                throw new Exception\\InvalidArgumentException('Index of info offset is not about a class');
            }
        } elseif (is_string(\$name)) {
            \$classFound = false;
            foreach (\$this->infos as \$info) {
                if (\$info['type'] === 'class' && \$info['name'] === \$name) {
                    \$classFound = true;
                    break;
                }
            }

            if (! \$classFound) {
                return false;
            }
        }

        return new ClassScanner(
            array_slice(
                \$this->tokens,
                \$info['tokenStart'],
                \$info['tokenEnd'] - \$info['tokenStart'] + 1
            ), // zero indexed array
            new NameInformation(\$info['namespace'], \$info['uses'])
        );
    }

    /**
     * @param  string \$className
     * @return bool|null|NameInformation
     */
    public function getClassNameInformation(\$className)
    {
        \$this->scan();

        \$classFound = false;
        foreach (\$this->infos as \$info) {
            if (\$info['type'] === 'class' && \$info['name'] === \$className) {
                \$classFound = true;
                break;
            }
        }

        if (! \$classFound) {
            return false;
        }

        if (! isset(\$info)) {
            return;
        }

        return new NameInformation(\$info['namespace'], \$info['uses']);
    }

    /**
     * @return array
     */
    public function getFunctionNames()
    {
        \$this->scan();
        \$functionNames = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] == 'function') {
                \$functionNames[] = \$info['name'];
            }
        }

        return \$functionNames;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        \$this->scan();

        \$functions = [];
//        foreach (\$this->infos as \$info) {
//            if (\$info['type'] == 'function') {
//                // @todo \$functions[] = new FunctionScanner(\$info['name']);
//            }
//        }

        return \$functions;
    }

    /**
     * Export
     *
     * @param mixed \$tokens
     */
    public static function export(\$tokens)
    {
        // @todo
    }

    public function __toString()
    {
        // @todo
    }

    /**
     * Scan
     *
     * @todo: \$this->docComment should be assigned for valid docblock during
     *        the scan instead of \$this->getDocComment() (starting with
     *        T_DOC_COMMENT case)
     *
     * @throws Exception\\RuntimeException
     */
    protected function scan()
    {
        if (\$this->isScanned) {
            return;
        }

        if (! \$this->tokens) {
            throw new Exception\\RuntimeException('No tokens were provided');
        }

        /**
         * Variables & Setup
         */
        \$tokens          = &\$this->tokens; // localize
        \$infos           = &\$this->infos; // localize
        \$tokenIndex      = null;
        \$token           = null;
        \$tokenType       = null;
        \$tokenContent    = null;
        \$tokenLine       = null;
        \$namespace       = null;
        \$docCommentIndex = false;
        \$infoIndex       = 0;

        /*
         * MACRO creation
         */
        \$MACRO_TOKEN_ADVANCE = function () use (
            &\$tokens,
            &\$tokenIndex,
            &\$token,
            &\$tokenType,
            &\$tokenContent,
            &\$tokenLine
        ) {
            \$tokenIndex = \$tokenIndex === null ? 0 : \$tokenIndex + 1;
            if (! isset(\$tokens[\$tokenIndex])) {
                \$token        = false;
                \$tokenContent = false;
                \$tokenType    = false;
                \$tokenLine    = false;

                return false;
            }
            if (is_string(\$tokens[\$tokenIndex]) && \$tokens[\$tokenIndex] === '\"') {
                do {
                    \$tokenIndex++;
                } while (! (is_string(\$tokens[\$tokenIndex]) && \$tokens[\$tokenIndex] === '\"'));
            }
            \$token = \$tokens[\$tokenIndex];
            if (is_array(\$token)) {
                list(\$tokenType, \$tokenContent, \$tokenLine) = \$token;
            } else {
                \$tokenType    = null;
                \$tokenContent = \$token;
            }

            return \$tokenIndex;
        };
        \$MACRO_TOKEN_LOGICAL_START_INDEX = function () use (&\$tokenIndex, &\$docCommentIndex) {
            return \$docCommentIndex === false ? \$tokenIndex : \$docCommentIndex;
        };
        \$MACRO_DOC_COMMENT_START = function () use (&\$tokenIndex, &\$docCommentIndex) {
            \$docCommentIndex = \$tokenIndex;

            return \$docCommentIndex;
        };
        \$MACRO_DOC_COMMENT_VALIDATE = function () use (&\$tokenType, &\$docCommentIndex) {
            static \$validTrailingTokens = null;
            if (\$validTrailingTokens === null) {
                \$validTrailingTokens = [T_WHITESPACE, T_FINAL, T_ABSTRACT, T_INTERFACE, T_CLASS, T_FUNCTION];
            }
            if (\$docCommentIndex !== false && ! in_array(\$tokenType, \$validTrailingTokens)) {
                \$docCommentIndex = false;
            }

            return \$docCommentIndex;
        };
        \$MACRO_INFO_ADVANCE = function () use (&\$infoIndex, &\$infos, &\$tokenIndex, &\$tokenLine) {
            \$infos[\$infoIndex]['tokenEnd'] = \$tokenIndex;
            \$infos[\$infoIndex]['lineEnd']  = \$tokenLine;
            \$infoIndex++;

            return \$infoIndex;
        };

        /**
         * START FINITE STATE MACHINE FOR SCANNING TOKENS
         */
        // Initialize token
        \$MACRO_TOKEN_ADVANCE();

        SCANNER_TOP:

        if (\$token === false) {
            goto SCANNER_END;
        }

        // Validate current doc comment index
        \$MACRO_DOC_COMMENT_VALIDATE();

        switch (\$tokenType) {
            case T_DOC_COMMENT:
                \$MACRO_DOC_COMMENT_START();
                goto SCANNER_CONTINUE;
                // goto no break needed

            case T_NAMESPACE:
                \$infos[\$infoIndex] = [
                    'type'       => 'namespace',
                    'tokenStart' => \$MACRO_TOKEN_LOGICAL_START_INDEX(),
                    'tokenEnd'   => null,
                    'lineStart'  => \$token[2],
                    'lineEnd'    => null,
                    'namespace'  => null,
                ];

                // start processing with next token
                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }

                SCANNER_NAMESPACE_TOP:

                if ((\$tokenType === null && \$tokenContent === ';') || \$tokenContent === '{') {
                    goto SCANNER_NAMESPACE_END;
                }

                if (\$tokenType === T_WHITESPACE) {
                    goto SCANNER_NAMESPACE_CONTINUE;
                }

                if (\$tokenType === T_NS_SEPARATOR || \$tokenType === T_STRING) {
                    \$infos[\$infoIndex]['namespace'] .= \$tokenContent;
                }

                SCANNER_NAMESPACE_CONTINUE:

                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }
                goto SCANNER_NAMESPACE_TOP;

                SCANNER_NAMESPACE_END:

                \$namespace = \$infos[\$infoIndex]['namespace'];

                \$MACRO_INFO_ADVANCE();
                goto SCANNER_CONTINUE;
                // goto no break needed

            case T_USE:
                \$infos[\$infoIndex] = [
                    'type'       => 'use',
                    'tokenStart' => \$MACRO_TOKEN_LOGICAL_START_INDEX(),
                    'tokenEnd'   => null,
                    'lineStart'  => \$tokens[\$tokenIndex][2],
                    'lineEnd'    => null,
                    'namespace'  => \$namespace,
                    'statements' => [
                        0 => [
                            'use' => null,
                            'as'  => null,
                        ],
                    ],
                ];

                \$useStatementIndex = 0;
                \$useAsContext      = false;

                // start processing with next token
                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }

                SCANNER_USE_TOP:

                if (\$tokenType === null) {
                    if (\$tokenContent === ';') {
                        goto SCANNER_USE_END;
                    } elseif (\$tokenContent === ',') {
                        \$useAsContext = false;
                        \$useStatementIndex++;
                        \$infos[\$infoIndex]['statements'][\$useStatementIndex] = [
                            'use' => null,
                            'as'  => null,
                        ];
                    }
                }

                // ANALYZE
                if (\$tokenType !== null) {
                    if (\$tokenType == T_AS) {
                        \$useAsContext = true;
                        goto SCANNER_USE_CONTINUE;
                    }

                    if (\$tokenType == T_NS_SEPARATOR || \$tokenType == T_STRING) {
                        if (\$useAsContext == false) {
                            \$infos[\$infoIndex]['statements'][\$useStatementIndex]['use'] .= \$tokenContent;
                        } else {
                            \$infos[\$infoIndex]['statements'][\$useStatementIndex]['as'] = \$tokenContent;
                        }
                    }
                }

                SCANNER_USE_CONTINUE:

                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }
                goto SCANNER_USE_TOP;

                SCANNER_USE_END:

                \$MACRO_INFO_ADVANCE();
                goto SCANNER_CONTINUE;
                // goto no break needed

            case T_INCLUDE:
            case T_INCLUDE_ONCE:
            case T_REQUIRE:
            case T_REQUIRE_ONCE:
                // Static for performance
                static \$includeTypes = [
                    T_INCLUDE      => 'include',
                    T_INCLUDE_ONCE => 'include_once',
                    T_REQUIRE      => 'require',
                    T_REQUIRE_ONCE => 'require_once',
                ];

                \$infos[\$infoIndex] = [
                    'type'        => 'include',
                    'tokenStart'  => \$MACRO_TOKEN_LOGICAL_START_INDEX(),
                    'tokenEnd'    => null,
                    'lineStart'   => \$tokens[\$tokenIndex][2],
                    'lineEnd'     => null,
                    'includeType' => \$includeTypes[\$tokens[\$tokenIndex][0]],
                    'path'        => '',
                ];

                // start processing with next token
                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }

                SCANNER_INCLUDE_TOP:

                if (\$tokenType === null && \$tokenContent === ';') {
                    goto SCANNER_INCLUDE_END;
                }

                \$infos[\$infoIndex]['path'] .= \$tokenContent;

                SCANNER_INCLUDE_CONTINUE:

                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }
                goto SCANNER_INCLUDE_TOP;

                SCANNER_INCLUDE_END:

                \$MACRO_INFO_ADVANCE();
                goto SCANNER_CONTINUE;
                // goto no break needed

            case T_FUNCTION:
            case T_FINAL:
            case T_ABSTRACT:
            case T_CLASS:
            case T_INTERFACE:
            case T_TRAIT:
                \$infos[\$infoIndex] = [
                    'type'        => \$tokenType === T_FUNCTION ? 'function' : 'class',
                    'tokenStart'  => \$MACRO_TOKEN_LOGICAL_START_INDEX(),
                    'tokenEnd'    => null,
                    'lineStart'   => \$tokens[\$tokenIndex][2],
                    'lineEnd'     => null,
                    'namespace'   => \$namespace,
                    'uses'        => \$this->getUsesNoScan(\$namespace),
                    'name'        => null,
                    'shortName'   => null,
                ];

                \$classBraceCount = 0;

                // start processing with current token

                SCANNER_CLASS_TOP:

                // process the name
                if (\$infos[\$infoIndex]['shortName'] == ''
                    && ((\$tokenType === T_CLASS
                            || \$tokenType === T_INTERFACE
                            || \$tokenType === T_TRAIT)
                        && \$infos[\$infoIndex]['type'] === 'class'
                        || (\$tokenType === T_FUNCTION && \$infos[\$infoIndex]['type'] === 'function'))
                ) {
                    \$infos[\$infoIndex]['shortName'] = is_array(\$tokens[\$tokenIndex + 2])
                        ? \$tokens[\$tokenIndex + 2][1]
                        : \$tokens[\$tokenIndex + 2];
                    \$infos[\$infoIndex]['name']      = (\$namespace !== null
                        ? \$namespace . '\\\\'
                        : '') . \$infos[\$infoIndex]['shortName'];
                }

                if (\$tokenType === null) {
                    if (\$tokenContent == '{') {
                        \$classBraceCount++;
                    }
                    if (\$tokenContent == '}') {
                        \$classBraceCount--;
                        if (\$classBraceCount === 0) {
                            goto SCANNER_CLASS_END;
                        }
                    }
                }

                SCANNER_CLASS_CONTINUE:

                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }
                goto SCANNER_CLASS_TOP;

                SCANNER_CLASS_END:

                \$MACRO_INFO_ADVANCE();
                goto SCANNER_CONTINUE;
                // goto no break needed
        }

        SCANNER_CONTINUE:

        if (\$MACRO_TOKEN_ADVANCE() === false) {
            goto SCANNER_END;
        }
        goto SCANNER_TOP;

        SCANNER_END:

        /**
         * END FINITE STATE MACHINE FOR SCANNING TOKENS
         */
        \$this->isScanned = true;
    }

    /**
     * Check for namespace
     *
     * @param string \$namespace
     * @return bool
     */
    public function hasNamespace(\$namespace)
    {
        \$this->scan();

        foreach (\$this->infos as \$info) {
            if (\$info['type'] == 'namespace' && \$info['namespace'] == \$namespace) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param  string \$namespace
     * @return null|array
     * @throws Exception\\InvalidArgumentException
     */
    protected function getUsesNoScan(\$namespace)
    {
        \$namespaces = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] == 'namespace') {
                \$namespaces[] = \$info['namespace'];
            }
        }

        if (\$namespace === null) {
            \$namespace = array_shift(\$namespaces);
        } elseif (! is_string(\$namespace)) {
            throw new Exception\\InvalidArgumentException('Invalid namespace provided');
        } elseif (! in_array(\$namespace, \$namespaces)) {
            return;
        }

        \$uses = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] !== 'use') {
                continue;
            }
            foreach (\$info['statements'] as \$statement) {
                if (\$info['namespace'] == \$namespace) {
                    \$uses[] = \$statement;
                }
            }
        }

        return \$uses;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Scanner/TokenArrayScanner.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Exception;
use Zend\\Code\\NameInformation;

use function array_shift;
use function array_slice;
use function in_array;
use function is_array;
use function is_int;
use function is_string;

class TokenArrayScanner implements ScannerInterface
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @var array
     */
    protected \$tokens = [];

    /**
     * @var null
     */
    protected \$docComment;

    /**
     * @var NameInformation
     */
    protected \$nameInformation;

    /**
     * @var array
     */
    protected \$infos = [];

    /**
     * @var AnnotationManager
     */
    protected \$annotationManager;

    /**
     * @param null|array \$tokens
     * @param null|AnnotationManager \$annotationManager
     */
    public function __construct(\$tokens, AnnotationManager \$annotationManager = null)
    {
        \$this->tokens            = \$tokens;
        \$this->annotationManager = \$annotationManager;
    }

    /**
     * @return AnnotationManager
     */
    public function getAnnotationManager()
    {
        return \$this->annotationManager;
    }

    /**
     * Get doc comment
     *
     * @todo Assignment of \$this->docComment should probably be done in scan()
     *       and then \$this->getDocComment() just retrieves it.
     *
     * @return string|null
     */
    public function getDocComment()
    {
        foreach (\$this->tokens as \$token) {
            \$type    = \$token[0];
            \$value   = \$token[1];
            if ((\$type == T_OPEN_TAG) || (\$type == T_WHITESPACE)) {
                continue;
            } elseif (\$type == T_DOC_COMMENT) {
                \$this->docComment = \$value;

                return \$this->docComment;
            } else {
                // Only whitespace is allowed before file docblocks
                return;
            }
        }
    }

    /**
     * @return array
     */
    public function getNamespaces()
    {
        \$this->scan();

        \$namespaces = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] == 'namespace') {
                \$namespaces[] = \$info['namespace'];
            }
        }

        return \$namespaces;
    }

    /**
     * @param  null|string \$namespace
     * @return array|null
     */
    public function getUses(\$namespace = null)
    {
        \$this->scan();

        return \$this->getUsesNoScan(\$namespace);
    }

    /**
     * @return void
     */
    public function getIncludes()
    {
        \$this->scan();
        // @todo Implement getIncludes() in TokenArrayScanner
    }

    /**
     * @return array
     */
    public function getClassNames()
    {
        \$this->scan();

        \$return = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] != 'class') {
                continue;
            }

            \$return[] = \$info['name'];
        }

        return \$return;
    }

    /**
     * @return ClassScanner[]
     */
    public function getClasses()
    {
        \$this->scan();

        \$return = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] != 'class') {
                continue;
            }

            \$return[] = \$this->getClass(\$info['name']);
        }

        return \$return;
    }

    /**
     * Return the class object from this scanner
     *
     * @param  string|int \$name
     * @throws Exception\\InvalidArgumentException
     * @return ClassScanner|false
     */
    public function getClass(\$name)
    {
        \$this->scan();

        if (is_int(\$name)) {
            \$info = \$this->infos[\$name];
            if (\$info['type'] != 'class') {
                throw new Exception\\InvalidArgumentException('Index of info offset is not about a class');
            }
        } elseif (is_string(\$name)) {
            \$classFound = false;
            foreach (\$this->infos as \$info) {
                if (\$info['type'] === 'class' && \$info['name'] === \$name) {
                    \$classFound = true;
                    break;
                }
            }

            if (! \$classFound) {
                return false;
            }
        }

        return new ClassScanner(
            array_slice(
                \$this->tokens,
                \$info['tokenStart'],
                \$info['tokenEnd'] - \$info['tokenStart'] + 1
            ), // zero indexed array
            new NameInformation(\$info['namespace'], \$info['uses'])
        );
    }

    /**
     * @param  string \$className
     * @return bool|null|NameInformation
     */
    public function getClassNameInformation(\$className)
    {
        \$this->scan();

        \$classFound = false;
        foreach (\$this->infos as \$info) {
            if (\$info['type'] === 'class' && \$info['name'] === \$className) {
                \$classFound = true;
                break;
            }
        }

        if (! \$classFound) {
            return false;
        }

        if (! isset(\$info)) {
            return;
        }

        return new NameInformation(\$info['namespace'], \$info['uses']);
    }

    /**
     * @return array
     */
    public function getFunctionNames()
    {
        \$this->scan();
        \$functionNames = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] == 'function') {
                \$functionNames[] = \$info['name'];
            }
        }

        return \$functionNames;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        \$this->scan();

        \$functions = [];
//        foreach (\$this->infos as \$info) {
//            if (\$info['type'] == 'function') {
//                // @todo \$functions[] = new FunctionScanner(\$info['name']);
//            }
//        }

        return \$functions;
    }

    /**
     * Export
     *
     * @param mixed \$tokens
     */
    public static function export(\$tokens)
    {
        // @todo
    }

    public function __toString()
    {
        // @todo
    }

    /**
     * Scan
     *
     * @todo: \$this->docComment should be assigned for valid docblock during
     *        the scan instead of \$this->getDocComment() (starting with
     *        T_DOC_COMMENT case)
     *
     * @throws Exception\\RuntimeException
     */
    protected function scan()
    {
        if (\$this->isScanned) {
            return;
        }

        if (! \$this->tokens) {
            throw new Exception\\RuntimeException('No tokens were provided');
        }

        /**
         * Variables & Setup
         */
        \$tokens          = &\$this->tokens; // localize
        \$infos           = &\$this->infos; // localize
        \$tokenIndex      = null;
        \$token           = null;
        \$tokenType       = null;
        \$tokenContent    = null;
        \$tokenLine       = null;
        \$namespace       = null;
        \$docCommentIndex = false;
        \$infoIndex       = 0;

        /*
         * MACRO creation
         */
        \$MACRO_TOKEN_ADVANCE = function () use (
            &\$tokens,
            &\$tokenIndex,
            &\$token,
            &\$tokenType,
            &\$tokenContent,
            &\$tokenLine
        ) {
            \$tokenIndex = \$tokenIndex === null ? 0 : \$tokenIndex + 1;
            if (! isset(\$tokens[\$tokenIndex])) {
                \$token        = false;
                \$tokenContent = false;
                \$tokenType    = false;
                \$tokenLine    = false;

                return false;
            }
            if (is_string(\$tokens[\$tokenIndex]) && \$tokens[\$tokenIndex] === '\"') {
                do {
                    \$tokenIndex++;
                } while (! (is_string(\$tokens[\$tokenIndex]) && \$tokens[\$tokenIndex] === '\"'));
            }
            \$token = \$tokens[\$tokenIndex];
            if (is_array(\$token)) {
                list(\$tokenType, \$tokenContent, \$tokenLine) = \$token;
            } else {
                \$tokenType    = null;
                \$tokenContent = \$token;
            }

            return \$tokenIndex;
        };
        \$MACRO_TOKEN_LOGICAL_START_INDEX = function () use (&\$tokenIndex, &\$docCommentIndex) {
            return \$docCommentIndex === false ? \$tokenIndex : \$docCommentIndex;
        };
        \$MACRO_DOC_COMMENT_START = function () use (&\$tokenIndex, &\$docCommentIndex) {
            \$docCommentIndex = \$tokenIndex;

            return \$docCommentIndex;
        };
        \$MACRO_DOC_COMMENT_VALIDATE = function () use (&\$tokenType, &\$docCommentIndex) {
            static \$validTrailingTokens = null;
            if (\$validTrailingTokens === null) {
                \$validTrailingTokens = [T_WHITESPACE, T_FINAL, T_ABSTRACT, T_INTERFACE, T_CLASS, T_FUNCTION];
            }
            if (\$docCommentIndex !== false && ! in_array(\$tokenType, \$validTrailingTokens)) {
                \$docCommentIndex = false;
            }

            return \$docCommentIndex;
        };
        \$MACRO_INFO_ADVANCE = function () use (&\$infoIndex, &\$infos, &\$tokenIndex, &\$tokenLine) {
            \$infos[\$infoIndex]['tokenEnd'] = \$tokenIndex;
            \$infos[\$infoIndex]['lineEnd']  = \$tokenLine;
            \$infoIndex++;

            return \$infoIndex;
        };

        /**
         * START FINITE STATE MACHINE FOR SCANNING TOKENS
         */
        // Initialize token
        \$MACRO_TOKEN_ADVANCE();

        SCANNER_TOP:

        if (\$token === false) {
            goto SCANNER_END;
        }

        // Validate current doc comment index
        \$MACRO_DOC_COMMENT_VALIDATE();

        switch (\$tokenType) {
            case T_DOC_COMMENT:
                \$MACRO_DOC_COMMENT_START();
                goto SCANNER_CONTINUE;
                // goto no break needed

            case T_NAMESPACE:
                \$infos[\$infoIndex] = [
                    'type'       => 'namespace',
                    'tokenStart' => \$MACRO_TOKEN_LOGICAL_START_INDEX(),
                    'tokenEnd'   => null,
                    'lineStart'  => \$token[2],
                    'lineEnd'    => null,
                    'namespace'  => null,
                ];

                // start processing with next token
                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }

                SCANNER_NAMESPACE_TOP:

                if ((\$tokenType === null && \$tokenContent === ';') || \$tokenContent === '{') {
                    goto SCANNER_NAMESPACE_END;
                }

                if (\$tokenType === T_WHITESPACE) {
                    goto SCANNER_NAMESPACE_CONTINUE;
                }

                if (\$tokenType === T_NS_SEPARATOR || \$tokenType === T_STRING) {
                    \$infos[\$infoIndex]['namespace'] .= \$tokenContent;
                }

                SCANNER_NAMESPACE_CONTINUE:

                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }
                goto SCANNER_NAMESPACE_TOP;

                SCANNER_NAMESPACE_END:

                \$namespace = \$infos[\$infoIndex]['namespace'];

                \$MACRO_INFO_ADVANCE();
                goto SCANNER_CONTINUE;
                // goto no break needed

            case T_USE:
                \$infos[\$infoIndex] = [
                    'type'       => 'use',
                    'tokenStart' => \$MACRO_TOKEN_LOGICAL_START_INDEX(),
                    'tokenEnd'   => null,
                    'lineStart'  => \$tokens[\$tokenIndex][2],
                    'lineEnd'    => null,
                    'namespace'  => \$namespace,
                    'statements' => [
                        0 => [
                            'use' => null,
                            'as'  => null,
                        ],
                    ],
                ];

                \$useStatementIndex = 0;
                \$useAsContext      = false;

                // start processing with next token
                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }

                SCANNER_USE_TOP:

                if (\$tokenType === null) {
                    if (\$tokenContent === ';') {
                        goto SCANNER_USE_END;
                    } elseif (\$tokenContent === ',') {
                        \$useAsContext = false;
                        \$useStatementIndex++;
                        \$infos[\$infoIndex]['statements'][\$useStatementIndex] = [
                            'use' => null,
                            'as'  => null,
                        ];
                    }
                }

                // ANALYZE
                if (\$tokenType !== null) {
                    if (\$tokenType == T_AS) {
                        \$useAsContext = true;
                        goto SCANNER_USE_CONTINUE;
                    }

                    if (\$tokenType == T_NS_SEPARATOR || \$tokenType == T_STRING) {
                        if (\$useAsContext == false) {
                            \$infos[\$infoIndex]['statements'][\$useStatementIndex]['use'] .= \$tokenContent;
                        } else {
                            \$infos[\$infoIndex]['statements'][\$useStatementIndex]['as'] = \$tokenContent;
                        }
                    }
                }

                SCANNER_USE_CONTINUE:

                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }
                goto SCANNER_USE_TOP;

                SCANNER_USE_END:

                \$MACRO_INFO_ADVANCE();
                goto SCANNER_CONTINUE;
                // goto no break needed

            case T_INCLUDE:
            case T_INCLUDE_ONCE:
            case T_REQUIRE:
            case T_REQUIRE_ONCE:
                // Static for performance
                static \$includeTypes = [
                    T_INCLUDE      => 'include',
                    T_INCLUDE_ONCE => 'include_once',
                    T_REQUIRE      => 'require',
                    T_REQUIRE_ONCE => 'require_once',
                ];

                \$infos[\$infoIndex] = [
                    'type'        => 'include',
                    'tokenStart'  => \$MACRO_TOKEN_LOGICAL_START_INDEX(),
                    'tokenEnd'    => null,
                    'lineStart'   => \$tokens[\$tokenIndex][2],
                    'lineEnd'     => null,
                    'includeType' => \$includeTypes[\$tokens[\$tokenIndex][0]],
                    'path'        => '',
                ];

                // start processing with next token
                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }

                SCANNER_INCLUDE_TOP:

                if (\$tokenType === null && \$tokenContent === ';') {
                    goto SCANNER_INCLUDE_END;
                }

                \$infos[\$infoIndex]['path'] .= \$tokenContent;

                SCANNER_INCLUDE_CONTINUE:

                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }
                goto SCANNER_INCLUDE_TOP;

                SCANNER_INCLUDE_END:

                \$MACRO_INFO_ADVANCE();
                goto SCANNER_CONTINUE;
                // goto no break needed

            case T_FUNCTION:
            case T_FINAL:
            case T_ABSTRACT:
            case T_CLASS:
            case T_INTERFACE:
            case T_TRAIT:
                \$infos[\$infoIndex] = [
                    'type'        => \$tokenType === T_FUNCTION ? 'function' : 'class',
                    'tokenStart'  => \$MACRO_TOKEN_LOGICAL_START_INDEX(),
                    'tokenEnd'    => null,
                    'lineStart'   => \$tokens[\$tokenIndex][2],
                    'lineEnd'     => null,
                    'namespace'   => \$namespace,
                    'uses'        => \$this->getUsesNoScan(\$namespace),
                    'name'        => null,
                    'shortName'   => null,
                ];

                \$classBraceCount = 0;

                // start processing with current token

                SCANNER_CLASS_TOP:

                // process the name
                if (\$infos[\$infoIndex]['shortName'] == ''
                    && ((\$tokenType === T_CLASS
                            || \$tokenType === T_INTERFACE
                            || \$tokenType === T_TRAIT)
                        && \$infos[\$infoIndex]['type'] === 'class'
                        || (\$tokenType === T_FUNCTION && \$infos[\$infoIndex]['type'] === 'function'))
                ) {
                    \$infos[\$infoIndex]['shortName'] = is_array(\$tokens[\$tokenIndex + 2])
                        ? \$tokens[\$tokenIndex + 2][1]
                        : \$tokens[\$tokenIndex + 2];
                    \$infos[\$infoIndex]['name']      = (\$namespace !== null
                        ? \$namespace . '\\\\'
                        : '') . \$infos[\$infoIndex]['shortName'];
                }

                if (\$tokenType === null) {
                    if (\$tokenContent == '{') {
                        \$classBraceCount++;
                    }
                    if (\$tokenContent == '}') {
                        \$classBraceCount--;
                        if (\$classBraceCount === 0) {
                            goto SCANNER_CLASS_END;
                        }
                    }
                }

                SCANNER_CLASS_CONTINUE:

                if (\$MACRO_TOKEN_ADVANCE() === false) {
                    goto SCANNER_END;
                }
                goto SCANNER_CLASS_TOP;

                SCANNER_CLASS_END:

                \$MACRO_INFO_ADVANCE();
                goto SCANNER_CONTINUE;
                // goto no break needed
        }

        SCANNER_CONTINUE:

        if (\$MACRO_TOKEN_ADVANCE() === false) {
            goto SCANNER_END;
        }
        goto SCANNER_TOP;

        SCANNER_END:

        /**
         * END FINITE STATE MACHINE FOR SCANNING TOKENS
         */
        \$this->isScanned = true;
    }

    /**
     * Check for namespace
     *
     * @param string \$namespace
     * @return bool
     */
    public function hasNamespace(\$namespace)
    {
        \$this->scan();

        foreach (\$this->infos as \$info) {
            if (\$info['type'] == 'namespace' && \$info['namespace'] == \$namespace) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param  string \$namespace
     * @return null|array
     * @throws Exception\\InvalidArgumentException
     */
    protected function getUsesNoScan(\$namespace)
    {
        \$namespaces = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] == 'namespace') {
                \$namespaces[] = \$info['namespace'];
            }
        }

        if (\$namespace === null) {
            \$namespace = array_shift(\$namespaces);
        } elseif (! is_string(\$namespace)) {
            throw new Exception\\InvalidArgumentException('Invalid namespace provided');
        } elseif (! in_array(\$namespace, \$namespaces)) {
            return;
        }

        \$uses = [];
        foreach (\$this->infos as \$info) {
            if (\$info['type'] !== 'use') {
                continue;
            }
            foreach (\$info['statements'] as \$statement) {
                if (\$info['namespace'] == \$namespace) {
                    \$uses[] = \$statement;
                }
            }
        }

        return \$uses;
    }
}
", "vendor/zendframework/zend-code/src/Scanner/TokenArrayScanner.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Scanner/TokenArrayScanner.php");
    }
}
