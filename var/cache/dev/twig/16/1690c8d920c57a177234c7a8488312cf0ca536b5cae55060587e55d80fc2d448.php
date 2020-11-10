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

/* vendor/symfony/yaml/Tests/Fixtures/sfCompact.yml */
class __TwigTemplate_de651b7d643bc614b47372f144f38b9e9aad36a5fd5f24d6c65137f55605f0b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfCompact.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfCompact.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Compact notation
brief: |
    Compact notation for sets of mappings with single element
yaml: |
  ---
  # products purchased
  - item    : Super Hoop
  - item    : Basketball
    quantity: 1
  - item:
      name: Big Shoes
      nick: Biggies
    quantity: 1
php: |
  [
    [
      'item' => 'Super Hoop',
    ],
    [
      'item' => 'Basketball',
      'quantity' => 1,
    ],
    [
      'item' => [
        'name' => 'Big Shoes',
        'nick' => 'Biggies'
      ],
      'quantity' => 1
    ]
  ]
---
test: Compact notation combined with inline notation
brief: |
    Combinations of compact and inline notation are allowed
yaml: |
  ---
  items:
    - { item: Super Hoop, quantity: 1 }
    - [ Basketball, Big Shoes ]
php: |
  [
    'items' => [
      [
        'item' => 'Super Hoop',
        'quantity' => 1,
      ],
      [
        'Basketball',
        'Big Shoes'
      ]
      ]
    ]
--- %YAML:1.0
test: Compact notation
brief: |
    Compact notation for sets of mappings with single element
yaml: |
  ---
  # products purchased
  - item    : Super Hoop
  - item    : Basketball
    quantity: 1
  - item:
      name: Big Shoes
      nick: Biggies
    quantity: 1
php: |
  [
    [
      'item' => 'Super Hoop',
    ],
    [
      'item' => 'Basketball',
      'quantity' => 1,
    ],
    [
      'item' => [
        'name' => 'Big Shoes',
        'nick' => 'Biggies'
      ],
      'quantity' => 1
    ]
  ]
---
test: Compact notation combined with inline notation
brief: |
    Combinations of compact and inline notation are allowed
yaml: |
  ---
  items:
    - { item: Super Hoop, quantity: 1 }
    - [ Basketball, Big Shoes ]
php: |
  [
    'items' => [
      [
        'item' => 'Super Hoop',
        'quantity' => 1,
      ],
      [
        'Basketball',
        'Big Shoes'
      ]
    ]
  ]
--- %YAML:1.0
test: Compact notation
brief: |
    Compact notation for sets of mappings with single element
yaml: |
  ---
  # products purchased
  - item    : Super Hoop
  - item    : Basketball
    quantity: 1
  - item:
      name: Big Shoes
      nick: Biggies
    quantity: 1
php: |
  [
    [
      'item' => 'Super Hoop',
    ],
    [
      'item' => 'Basketball',
      'quantity' => 1,
    ],
    [
      'item' => [
        'name' => 'Big Shoes',
        'nick' => 'Biggies'
      ],
      'quantity' => 1
    ]
  ]
---
test: Compact notation combined with inline notation
brief: |
    Combinations of compact and inline notation are allowed
yaml: |
  ---
  items:
    - { item: Super Hoop, quantity: 1 }
    - [ Basketball, Big Shoes ]
php: |
  [
    'items' => [
      [
        'item' => 'Super Hoop',
        'quantity' => 1,
      ],
      [
        'Basketball',
        'Big Shoes'
      ]
    ]
  ]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/sfCompact.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Compact notation
brief: |
    Compact notation for sets of mappings with single element
yaml: |
  ---
  # products purchased
  - item    : Super Hoop
  - item    : Basketball
    quantity: 1
  - item:
      name: Big Shoes
      nick: Biggies
    quantity: 1
php: |
  [
    [
      'item' => 'Super Hoop',
    ],
    [
      'item' => 'Basketball',
      'quantity' => 1,
    ],
    [
      'item' => [
        'name' => 'Big Shoes',
        'nick' => 'Biggies'
      ],
      'quantity' => 1
    ]
  ]
---
test: Compact notation combined with inline notation
brief: |
    Combinations of compact and inline notation are allowed
yaml: |
  ---
  items:
    - { item: Super Hoop, quantity: 1 }
    - [ Basketball, Big Shoes ]
php: |
  [
    'items' => [
      [
        'item' => 'Super Hoop',
        'quantity' => 1,
      ],
      [
        'Basketball',
        'Big Shoes'
      ]
      ]
    ]
--- %YAML:1.0
test: Compact notation
brief: |
    Compact notation for sets of mappings with single element
yaml: |
  ---
  # products purchased
  - item    : Super Hoop
  - item    : Basketball
    quantity: 1
  - item:
      name: Big Shoes
      nick: Biggies
    quantity: 1
php: |
  [
    [
      'item' => 'Super Hoop',
    ],
    [
      'item' => 'Basketball',
      'quantity' => 1,
    ],
    [
      'item' => [
        'name' => 'Big Shoes',
        'nick' => 'Biggies'
      ],
      'quantity' => 1
    ]
  ]
---
test: Compact notation combined with inline notation
brief: |
    Combinations of compact and inline notation are allowed
yaml: |
  ---
  items:
    - { item: Super Hoop, quantity: 1 }
    - [ Basketball, Big Shoes ]
php: |
  [
    'items' => [
      [
        'item' => 'Super Hoop',
        'quantity' => 1,
      ],
      [
        'Basketball',
        'Big Shoes'
      ]
    ]
  ]
--- %YAML:1.0
test: Compact notation
brief: |
    Compact notation for sets of mappings with single element
yaml: |
  ---
  # products purchased
  - item    : Super Hoop
  - item    : Basketball
    quantity: 1
  - item:
      name: Big Shoes
      nick: Biggies
    quantity: 1
php: |
  [
    [
      'item' => 'Super Hoop',
    ],
    [
      'item' => 'Basketball',
      'quantity' => 1,
    ],
    [
      'item' => [
        'name' => 'Big Shoes',
        'nick' => 'Biggies'
      ],
      'quantity' => 1
    ]
  ]
---
test: Compact notation combined with inline notation
brief: |
    Combinations of compact and inline notation are allowed
yaml: |
  ---
  items:
    - { item: Super Hoop, quantity: 1 }
    - [ Basketball, Big Shoes ]
php: |
  [
    'items' => [
      [
        'item' => 'Super Hoop',
        'quantity' => 1,
      ],
      [
        'Basketball',
        'Big Shoes'
      ]
    ]
  ]
", "vendor/symfony/yaml/Tests/Fixtures/sfCompact.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/sfCompact.yml");
    }
}
