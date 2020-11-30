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

/* themes/etisalat/templates/get-started/views-view-list--get_started.html.twig */
class __TwigTemplate_368921183aa4165e449b37d6e21376e89bfbec3dce769c5bf8e6df8b463cc7f5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 19, "set" => 29, "for" => 30];
        $filters = ["escape" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
        // line 19
        if (($context["attributes"] ?? null)) {
        }
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "    <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        echo "
<section class=\"api-inner-page get-started-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <ul class=\"steps-list\">
                ";
        // line 29
        $context["item_no"] = 1;
        // line 30
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 31
            echo "                        <li class=\"steps-list-item\">
                            <div class=\"steps-list-container\">";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            // line 34
            echo "</div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
                </ul>

            </div>
        </div>
    </div>
</section>
</main>";
    }

    public function getTemplateName()
    {
        return "themes/etisalat/templates/get-started/views-view-list--get_started.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 37,  86 => 34,  84 => 33,  81 => 31,  76 => 30,  74 => 29,  66 => 23,  60 => 21,  58 => 20,  55 => 19,);
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
 * Theme override for a view template to display a list of rows.
 *
 * Available variables:
 * - attributes: HTML attributes for the container.
 * - rows: A list of rows for this list.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's contents.
 * - title: The title of this group of rows. May be empty.
 * - list: @todo.
 *   - type: Starting tag will be either a ul or ol.
 *   - attributes: HTML attributes for the list element.
 *
 * @see template_preprocess_views_view_list()
 */
#}
{% if attributes -%}{% endif %}
{% if title %}
    <h3>{{ title }}</h3>
{% endif %}

<section class=\"api-inner-page get-started-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <ul class=\"steps-list\">
                {% set item_no = 1 %}
                    {% for row in rows %}
                        <li class=\"steps-list-item\">
                            <div class=\"steps-list-container\">
                                {{- row.content -}}
                            </div>
                        </li>
                    {% endfor %}

                </ul>

            </div>
        </div>
    </div>
</section>
</main>", "themes/etisalat/templates/get-started/views-view-list--get_started.html.twig", "C:\\xampp\\htdocs\\drupal\\theming-etisalat\\themes\\etisalat\\templates\\get-started\\views-view-list--get_started.html.twig");
    }
}
