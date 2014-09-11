<?php

/* BusinessAnnuaireBundle:Annuaire:search.html.twig */
class __TwigTemplate_d0ec7323b25df25da4c2ecc202d80b6cec3b36fbf4fc6ae00a7edfd0122f47b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BusinessAnnuaireBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"grid_1\">
<div class=\"box-stand\">
";
        // line 8
        if (((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")) == "")) {
            // line 9
            echo "        <h4>Recherche ";
            echo twig_escape_filter($this->env, (isset($context["motcle"]) ? $context["motcle"] : $this->getContext($context, "motcle")), "html", null, true);
            echo " </h4>
        ";
        } else {
            // line 11
            echo "        
    <h4>Recherche ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["motcle"]) ? $context["motcle"] : $this->getContext($context, "motcle")), "html", null, true);
            echo " En  ";
            echo twig_escape_filter($this->env, (isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "html", null, true);
            echo " </h4>
";
        }
        // line 14
        echo "    <table style=\"width:100%;\" class=\"tabsoc\">
  ";
        // line 15
        if (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == 0)) {
            // line 16
            echo "     <tr>
<td colspan=\"2\" style=\"background-color: rgb(252, 233, 233); background-position: initial initial; background-repeat: initial initial;\">
<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/error.png"), "html", null, true);
            echo "\" alt=\"error\"/>
Aucun résultat correspond à votre recherche !
</td>
</tr>   
    ";
        } else {
            // line 23
            echo "    <tr>
    <td>Soci&eacute;t&eacute;</td>
    <td>Adresse</td>
    <td>Domaine d'activit&eacute;</td>
  </tr>

  ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listsocietes"]) ? $context["listsocietes"] : $this->getContext($context, "listsocietes")));
            foreach ($context['_seq'] as $context["_key"] => $context["soc"]) {
                // line 30
                echo "  <tr><td style=\"width: 10%;\"> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_fichesociete", array("id" => $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "id"))), "html", null, true);
                echo "\" title=\"\">
            <img itemprop=\"image\" src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a></td><td style=\"width: 60%;\">
            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_fichesociete", array("id" => $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "id"))), "html", null, true);
                echo "\" title=\"\"><strong itemprop=\"name\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "nomsociete"), "html", null, true);
                echo "</strong>
                <br>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "adresse"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "codepostal"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "ville"), "html", null, true);
                echo "<br>T&eacute;l&eacute;phone : </a></td>   
<td style=\"width: 30%;\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "specialite"), "html", null, true);
                echo "</td>
 </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['soc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo " ";
        }
        echo "    
    </table>
</div>
    </div>

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
        return "BusinessAnnuaireBundle:Annuaire:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  106 => 35,  98 => 34,  92 => 33,  87 => 31,  82 => 30,  78 => 29,  70 => 23,  62 => 18,  58 => 16,  56 => 15,  53 => 14,  46 => 12,  43 => 11,  37 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
