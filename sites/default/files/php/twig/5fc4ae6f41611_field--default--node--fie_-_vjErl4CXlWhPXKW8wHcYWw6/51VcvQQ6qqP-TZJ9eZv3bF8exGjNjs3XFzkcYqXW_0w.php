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

/* themes/etisalat/templates/home/field--default--node--field-title--service.html.twig */
class __TwigTemplate_1e1a1fd5ae835d6a601fc901b5d84f95456cc44e0f632cee839d03838ea0f504 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "if" => 55, "for" => 58];
        $filters = ["clean_class" => 43, "escape" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape'],
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
        // line 41
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["field_name"] ?? null)))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_type"] ?? null)))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["label_display"] ?? null))), 4 => (((        // line 46
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 50
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 55
        if (($context["label_hidden"] ?? null)) {
            // line 56
            if (($context["multiple"] ?? null)) {
                // line 57
                echo "<div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method")), "html", null, true);
                echo ">
  ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 59
                    echo "  <div ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "field__item"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "</div>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "</div>
";
            } else {
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 64
                    echo "<h5 class=\"promo-item-title field__item\">
  ";
                    // line 65
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "
</h5>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        } else {
            // line 70
            echo "<div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  <div ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
  ";
            // line 72
            if (($context["multiple"] ?? null)) {
                // line 73
                echo "  <div class=\"field__items\">
    ";
            }
            // line 75
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 76
                echo "    <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "field__item"], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 79
                echo "  </div>
  ";
            }
            // line 81
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/etisalat/templates/home/field--default--node--field-title--service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 81,  146 => 79,  143 => 78,  132 => 76,  127 => 75,  123 => 73,  121 => 72,  115 => 71,  110 => 70,  99 => 65,  96 => 64,  92 => 63,  88 => 61,  77 => 59,  73 => 58,  68 => 57,  66 => 56,  64 => 55,  62 => 52,  61 => 50,  59 => 46,  58 => 45,  57 => 44,  56 => 43,  55 => 41,);
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
* Theme override for a field.
*
* To override output, copy the \"field.html.twig\" from the templates directory
* to your theme's directory and customize it, just like customizing other
* Drupal templates such as page.html.twig or node.html.twig.
*
* Instead of overriding the theming for all fields, you can also just override
* theming for a subset of fields using
* @link themeable Theme hook suggestions. @endlink For example,
* here are some theme hook suggestions that can be used for a field_foo field
* on an article node type:
* - field--node--field-foo--article.html.twig
* - field--node--field-foo.html.twig
* - field--node--article.html.twig
* - field--field-foo.html.twig
* - field--text-with-summary.html.twig
* - field.html.twig
*
* Available variables:
* - attributes: HTML attributes for the containing element.
* - label_hidden: Whether to show the field label or not.
* - title_attributes: HTML attributes for the title.
* - label: The label for the field.
* - multiple: TRUE if a field can contain multiple items.
* - items: List of all the field items. Each item contains:
* - attributes: List of HTML attributes for each item.
* - content: The field item's content.
* - entity_type: The entity type to which the field belongs.
* - field_name: The name of the field.
* - field_type: The type of the field.
* - label_display: The display settings for the label.
*
*
* @see template_preprocess_field()
*/
#}
{%
set classes = [
'field',
'field--name-' ~ field_name|clean_class,
'field--type-' ~ field_type|clean_class,
'field--label-' ~ label_display,
label_display == 'inline' ? 'clearfix',
]
%}
{%
set title_classes = [
'field__label',
label_display == 'visually_hidden' ? 'visually-hidden',
]
%}
{% if label_hidden %}
{% if multiple %}
<div {{ attributes.addClass(classes, 'field__items') }}>
  {% for item in items %}
  <div {{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
  {% endfor %}
</div>
{% else %}
{% for item in items %}
<h5 class=\"promo-item-title field__item\">
  {{ item.content }}
</h5>
{% endfor %}
{% endif %}
{% else %}
<div {{ attributes.addClass(classes) }}>
  <div {{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
  {% if multiple %}
  <div class=\"field__items\">
    {% endif %}
    {% for item in items %}
    <div {{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
    {% endfor %}
    {% if multiple %}
  </div>
  {% endif %}
</div>
{% endif %}", "themes/etisalat/templates/home/field--default--node--field-title--service.html.twig", "C:\\xampp\\htdocs\\drupal\\theming-etisalat\\themes\\etisalat\\templates\\home\\field--default--node--field-title--service.html.twig");
    }
}
