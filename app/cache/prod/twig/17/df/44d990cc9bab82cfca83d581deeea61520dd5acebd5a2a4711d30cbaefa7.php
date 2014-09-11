<?php

/* BusinessAnnuaireBundle:Annuaire:listpromotions.html.twig */
class __TwigTemplate_17df44d990cc9bab82cfca83d581deeea61520dd5acebd5a2a4711d30cbaefa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BusinessAnnuaireBundle::layout.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BusinessAnnuaireBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        echo "<!--Form Validator-->

";
        // line 5
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "


";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"grid_1\"> 

<div class=\"box-stand\">
<h4>Dernières Promotions</h4>
<table style=\"width:100%;\" class=\"tabsoc\">


  ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listpromotions"]) ? $context["listpromotions"] : $this->getContext($context, "listpromotions")));
        foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
            // line 20
            echo "  <tr><td style=\"width: 10%;\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_fichepromotion", array("id" => $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "id"))), "html", null, true);
            echo "\" title=\"\">
           ";
            // line 21
            if (($this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "path") == "")) {
                echo " 
              <img itemprop=\"image\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>
          ";
            } else {
                // line 25
                echo "              <img itemprop=\"image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/promotions/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "path"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>      
                 ";
            }
            // line 27
            echo " 
              </td><td style=\"width: 60%;\">
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_fichepromotion", array("id" => $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "id"))), "html", null, true);
            echo "\" title=\"\"><strong itemprop=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "titre"), "html", null, true);
            echo "</strong></a>
                <br>publier le : ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "datepublication"), "d/m/Y"), "html", null, true);
            echo "
                <br>Par : ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "promoteur"), "nomsociete"), "html", null, true);
            echo "              </td>   
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    
    </table>
</div>
</fieldset>
</form>
</div>  <!--Annonce en Avant-->

 <!--Annonce en Avant-->

<div class=\"clear\"></div> <!--Clear-->
     


<!--Listes Annonces-->
    
     

</div> <!--End include left-->

<!--include right-->
<div class=\"grid_2\">
    

<!--Pub right Annonceurs-->
<div class=\"box-stand\">

    <div class=\"clear\"></div>
</div> <!--Annonceurs-->

<div class=\"box-pub\">
\t\t\t\t<!-- // end of photoslider-mini -->
\t<div class=\"clear\"></div>
</div> <!--Bloc pub Carée-->
<div class=\"box-pub2\">
</div> <!--FB like blocs-->
<div class=\"box-pub2\">
<!-- Place this tag where you want the widget to render. -->
<div class=\"g-page\" data-width=\"250\" data-href=\"https://plus.google.com/105367995533699353729\" data-showtagline=\"false\" data-rel=\"publisher\"></div>

<!-- Place this tag after the last widget tag. -->
<script type=\"text/javascript\">
  window.___gcfg = {lang: 'fr'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = '../apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div> <!--FB like blocs-->
<div class=\"box-pub2\">
\t\t\t\t<!-- Start photoslider-mini -->
\t\t\t\t<div class=\"sliderkit photoslider-maxi\" style=\"width:252px;height:600px;\">
\t\t\t\t\t<div class=\"sliderkit-panels\">
\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"sliderkit-panel\">
\t\t\t\t\t\t
                                                </div>
\t\t\t\t\t\t<div class=\"sliderkit-panel\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- // end of photoslider-mini -->
\t<div class=\"clear\"></div>
</div> <!--Bloc pub Large-->
</div> <!--End include right-->

<div class=\"clear\"></div> <!--Clear-->

</div>
</section>
       
<div class=\"line-2\"></div>\t<!--line-->
<div class=\"container_12\">

<div class=\"box-actualite fleft\">

</div> <!--Dérniers Promotions-->

<div class=\"box-actualite fright\">
</div> <!--Dérniers annonces-->

<div class=\"clear\"></div>

</div>

";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Annuaire:listpromotions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  98 => 31,  94 => 30,  88 => 29,  84 => 27,  76 => 25,  70 => 22,  66 => 21,  61 => 20,  57 => 19,  47 => 11,  44 => 10,  36 => 5,  32 => 3,  29 => 2,);
    }
}
