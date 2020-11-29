<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/etisalat/templates/views-view-grid--service_block.html.twig */
class __TwigTemplate_70560c0de5c5fc427da3097f35d87b1086cb6ac01bf6f35ca209c0df44fd4024 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 28, "if" => 35, "for" => 78];
        $filters = ["escape" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        $context["classes"] = [0 => "views-view-grid", 1 => $this->getAttribute(        // line 30
($context["options"] ?? null), "alignment", []), 2 => ("cols-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 31
($context["options"] ?? null), "columns", []))), 3 => "clearfix"];
        // line 35
        if ($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) {
            // line 37
            $context["row_classes"] = [0 => "views-row", 1 => ((($this->getAttribute(            // line 39
($context["options"] ?? null), "alignment", []) == "horizontal")) ? ("clearfix") : (""))];
        }
        // line 43
        if ($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) {
            // line 45
            $context["col_classes"] = [0 => "views-col", 1 => ((($this->getAttribute(            // line 47
($context["options"] ?? null), "alignment", []) == "vertical")) ? ("clearfix") : (""))];
        }
        // line 51
        if (($context["title"] ?? null)) {
            // line 52
            echo "<h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 54
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"promo-container\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-6 col-lg-6 promo-software-developers-container p-right-0\">
        <div class=\"promo-white-bg\">
          <div class=\"promo-content-container\">
            <div class=\"promo-main-icon\">
              <img src=\"";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/software-dev-icon.svg\" alt=\"Software Developers\">
            </div>
            <div class=\"promo-content\">
              <h3 class=\"promo-content-title\">
                Software developers
              </h3>
              <p class=\"promo-content-detail\">
                Launch party pitch technology user experience innovator buzz stealth MVP business model.
              </p>
            </div>
          </div>
        </div>
        ";
        // line 73
        $context["column"] = $this->getAttribute(($context["items"] ?? null), 0, [], "array");
        // line 74
        echo "        <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["column"] ?? null), "attributes", []), "addClass", [0 => ($context["col_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) ? (("col-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["loop"] ?? null), "index", [])))) : (""))], "method")), "html", null, true);
        echo ">

          <div class=\"promo-list-container\">
            <ul class=\"promo-list\">
              ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["column"] ?? null), "content", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 79
            echo "              <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) ? (("row-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
            echo ">
                <li class=\"promo-item\">";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            // line 82
            echo "</div>
              </li>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            </ul>
          </div>
        </div>
      </div>

      <div class=\"col-sm-12 col-md-6 col-lg-6 promo-companies-container\">
        <div class=\"promo-content-container\">
          <div class=\"promo-main-icon\">
            <img src=\"";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/companies-icon.svg\" alt=\"Companies\">
          </div>
          <div class=\"promo-content\">
            <h3 class=\"promo-content-title\">
              Companies
            </h3>
            <p class=\"promo-content-detail\">
              Launch party pitch technology user experience innovator buzz stealth MVP business model.
            </p>
          </div>
        </div>
        <div class=\"promo-list-container\">
          <ul class=\"promo-list\">
            <li class=\"promo-item\">
              ";
        // line 107
        $context["column"] = $this->getAttribute(($context["items"] ?? null), 1, [], "array");
        // line 108
        echo "              <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["column"] ?? null), "attributes", []), "addClass", [0 => ($context["col_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "col_class_default", [])) ? (("col-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["loop"] ?? null), "index", [])))) : (""))], "method")), "html", null, true);
        echo ">
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["column"] ?? null), "content", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 110
            echo "                <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null), 1 => (($this->getAttribute(($context["options"] ?? null), "row_class_default", [])) ? (("row-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])))) : (""))], "method")), "html", null, true);
            echo ">";
            // line 111
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            // line 112
            echo "</div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "              </div>
        </div>
        </li>
        </ul>
      </div>

    </div>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/etisalat/templates/views-view-grid--service_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 114,  212 => 112,  210 => 111,  206 => 110,  189 => 109,  184 => 108,  182 => 107,  165 => 93,  155 => 85,  139 => 82,  137 => 81,  132 => 79,  115 => 78,  107 => 74,  105 => 73,  90 => 61,  79 => 54,  73 => 52,  71 => 51,  68 => 47,  67 => 45,  65 => 43,  62 => 39,  61 => 37,  59 => 35,  57 => 31,  56 => 30,  55 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override for views to display rows in a grid.
*
* Available variables:
* - attributes: HTML attributes for the wrapping element.
* - title: The title of this group of rows.
* - view: The view object.
* - rows: The rendered view results.
* - options: The view plugin style options.
* - row_class_default: A flag indicating whether default classes should be
* used on rows.
* - col_class_default: A flag indicating whether default classes should be
* used on columns.
* - items: A list of grid items. Each item contains a list of rows or columns.
* The order in what comes first (row or column) depends on which alignment
* type is chosen (horizontal or vertical).
* - attributes: HTML attributes for each row or column.
* - content: A list of columns or rows. Each row or column contains:
* - attributes: HTML attributes for each row or column.
* - content: The row or column contents.
*
* @see template_preprocess_views_view_grid()
*/
#}
{%
set classes = [
'views-view-grid',
options.alignment,
'cols-' ~ options.columns,
'clearfix',
]
%}
{% if options.row_class_default %}
{%
set row_classes = [
'views-row',
options.alignment == 'horizontal' ? 'clearfix',
]
%}
{% endif %}
{% if options.col_class_default %}
{%
set col_classes = [
'views-col',
options.alignment == 'vertical' ? 'clearfix',
]
%}
{% endif %}
{% if title %}
<h3>{{ title }}</h3>
{% endif %}
<div {{ attributes.addClass(classes) }}>
  <div class=\"promo-container\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-6 col-lg-6 promo-software-developers-container p-right-0\">
        <div class=\"promo-white-bg\">
          <div class=\"promo-content-container\">
            <div class=\"promo-main-icon\">
              <img src=\"{{ directory }}/images/software-dev-icon.svg\" alt=\"Software Developers\">
            </div>
            <div class=\"promo-content\">
              <h3 class=\"promo-content-title\">
                Software developers
              </h3>
              <p class=\"promo-content-detail\">
                Launch party pitch technology user experience innovator buzz stealth MVP business model.
              </p>
            </div>
          </div>
        </div>
        {% set column = items[0] %}
        <div {{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>

          <div class=\"promo-list-container\">
            <ul class=\"promo-list\">
              {% for row in column.content %}
              <div {{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>
                <li class=\"promo-item\">
                  {{- row.content -}}
              </div>
              </li>
              {% endfor %}
            </ul>
          </div>
        </div>
      </div>

      <div class=\"col-sm-12 col-md-6 col-lg-6 promo-companies-container\">
        <div class=\"promo-content-container\">
          <div class=\"promo-main-icon\">
            <img src=\"{{ directory }}/images/companies-icon.svg\" alt=\"Companies\">
          </div>
          <div class=\"promo-content\">
            <h3 class=\"promo-content-title\">
              Companies
            </h3>
            <p class=\"promo-content-detail\">
              Launch party pitch technology user experience innovator buzz stealth MVP business model.
            </p>
          </div>
        </div>
        <div class=\"promo-list-container\">
          <ul class=\"promo-list\">
            <li class=\"promo-item\">
              {% set column = items[1] %}
              <div {{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>
                {% for row in column.content %}
                <div {{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>
                  {{- row.content -}}
                </div>
                {% endfor %}
              </div>
        </div>
        </li>
        </ul>
      </div>

    </div>
  </div>
</div>
</div>", "themes/etisalat/templates/views-view-grid--service_block.html.twig", "C:\\xampp\\htdocs\\drupal\\theming-etisalat\\themes\\etisalat\\templates\\views-view-grid--service_block.html.twig");
    }
}
