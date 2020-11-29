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

/* themes/etisalat/templates/views-view-list--how.html.twig */
class __TwigTemplate_10811dc11234e90499095ed5efc9c524fdbbf98a7327fb4736e50ce0853d516f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 23];
        $filters = ["escape" => 25];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        echo "<section class=\"howto-steps-main-container\">
  <span class=\"top-left-dotted\"></span>
  <span class=\"bottom-right-dotted\"></span>
  <div class=\"container\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "    <div class=\"row howto-steps-item\">";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            // line 26
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/etisalat/templates/views-view-list--how.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  69 => 26,  67 => 25,  65 => 24,  61 => 23,  55 => 19,);
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
* - attributes: The row's HTML attributes.
* - content: The row's contents.
* - title: The title of this group of rows. May be empty.
* - list: @todo.
* - type: Starting tag will be either a ul or ol.
* - attributes: HTML attributes for the list element.
*
* @see template_preprocess_views_view_list()
*/
#}
<section class=\"howto-steps-main-container\">
  <span class=\"top-left-dotted\"></span>
  <span class=\"bottom-right-dotted\"></span>
  <div class=\"container\">
    {% for row in rows %}
    <div class=\"row howto-steps-item\">
      {{- row.content -}}
    </div>
    {% endfor %}
  </div>
</section>", "themes/etisalat/templates/views-view-list--how.html.twig", "C:\\xampp\\htdocs\\drupal\\theming-etisalat\\themes\\etisalat\\templates\\views-view-list--how.html.twig");
    }
}
