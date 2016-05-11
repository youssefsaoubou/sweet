<?php

/* :default:panier.html.twig */
class __TwigTemplate_e3915dbfa2f20fb334bd0cb71e648ffcb1ac42804e9e4fbbf421954050992e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:panier.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36aa60887fb165259e143e13552253cd3f635f13ec43c56b64c8c0a77938fb8c = $this->env->getExtension("native_profiler");
        $__internal_36aa60887fb165259e143e13552253cd3f635f13ec43c56b64c8c0a77938fb8c->enter($__internal_36aa60887fb165259e143e13552253cd3f635f13ec43c56b64c8c0a77938fb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36aa60887fb165259e143e13552253cd3f635f13ec43c56b64c8c0a77938fb8c->leave($__internal_36aa60887fb165259e143e13552253cd3f635f13ec43c56b64c8c0a77938fb8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf083c40e98e5b29b1b75ea112856e671d519c1ec5307c19c827052d2a7e71d9 = $this->env->getExtension("native_profiler");
        $__internal_bf083c40e98e5b29b1b75ea112856e671d519c1ec5307c19c827052d2a7e71d9->enter($__internal_bf083c40e98e5b29b1b75ea112856e671d519c1ec5307c19c827052d2a7e71d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Breadcrumbs-->
\t\t<section class=\"breadcrumbs\">
\t\t<div class=\"container\">
\t\t\t<a href=\"index.html\">home</a><span class=\"divider\">&nbsp;</span><span>SHOPPING CART</span>
\t\t</div>
\t\t</section>
\t\t<!-- //end Breadcrumbs -->
\t\t<!--Page Content-->
\t\t<section class=\"content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"subtitle\">
\t\t\t\t<div>
\t\t\t\t\t<span>SHOPPING CART</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"rect-nohover\">
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<table class=\"table-shop\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"product-image\">&nbsp;
\t\t\t\t\t\t\t
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"product-name\">
\t\t\t\t\t\t\tProduct Name
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"text-center\">&nbsp;
\t\t\t\t\t\t\t
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\tUnit Price
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\tQuantity
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t\t\tSubtotal
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"text-center\">&nbsp;
\t\t\t\t\t\t\t
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"notitle\">
\t\t\t\t\t\t\t<img src=\"images/products/product-01.jpg\" alt=\"\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"th_title visible-xs\">
\t\t\t\t\t\t\t\tProduct Name:
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#\">Product Example</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center notitle\">
\t\t\t\t\t\t\t<a href=\"#\">EDIT</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<div class=\"th_title visible-xs\">
\t\t\t\t\t\t\t\tUnit Price:
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t \$214.99
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<div class=\"th_title visible-xs input-label\">
\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-quantity\" value=\"1\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<div class=\"th_title visible-xs\">
\t\t\t\t\t\t\t\tSubtotal:
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t \$214.99
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center notitle\">
\t\t\t\t\t\t\t<a class=\"icon icon-sm flaticon-recycle59 remove-from-cart\" href=\"#\"></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"wrapper clearfix\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn-cool btn-md-sm pull-left\">CONTINUE SHOPPING</a><span class=\"pull-left btn-space\">&nbsp;</span><a href=\"#\" class=\"btn-cool btn-md-sm pull-left\">CLEAR SHOPPING CART</a>
\t\t\t\t\t\t<div class=\"divider divider-sm visible-xs\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"btn-cool btn-md-sm pull-right\">UPDATE CART</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"divider divider-sm\">
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"rect-nohover\">
\t\t\t\t\t\t<h3>ESTIMATE SHIPPING AND TAX</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tEnter your destination to get a shipping estimate.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"light\">Country<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t<select name=\"select2\" class=\"selectpicker\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t<option value=\"United States\">United States</option>
\t\t\t\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t\t\t\t<option value=\"Afghanistan\">Afghanistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Albania\">Albania</option>
\t\t\t\t\t\t\t\t\t<option value=\"Algeria\">Algeria</option>
\t\t\t\t\t\t\t\t\t<option value=\"American Samoa\">American Samoa</option>
\t\t\t\t\t\t\t\t\t<option value=\"Andorra\">Andorra</option>
\t\t\t\t\t\t\t\t\t<option value=\"Angola\">Angola</option>
\t\t\t\t\t\t\t\t\t<option value=\"Anguilla\">Anguilla</option>
\t\t\t\t\t\t\t\t\t<option value=\"Antarctica\">Antarctica</option>
\t\t\t\t\t\t\t\t\t<option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>
\t\t\t\t\t\t\t\t\t<option value=\"Argentina\">Argentina</option>
\t\t\t\t\t\t\t\t\t<option value=\"Armenia\">Armenia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Aruba\">Aruba</option>
\t\t\t\t\t\t\t\t\t<option value=\"Australia\">Australia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Austria\">Austria</option>
\t\t\t\t\t\t\t\t\t<option value=\"Azerbaijan\">Azerbaijan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bahamas\">Bahamas</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bahrain\">Bahrain</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bangladesh\">Bangladesh</option>
\t\t\t\t\t\t\t\t\t<option value=\"Barbados\">Barbados</option>
\t\t\t\t\t\t\t\t\t<option value=\"Belarus\">Belarus</option>
\t\t\t\t\t\t\t\t\t<option value=\"Belgium\">Belgium</option>
\t\t\t\t\t\t\t\t\t<option value=\"Belize\">Belize</option>
\t\t\t\t\t\t\t\t\t<option value=\"Benin\">Benin</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bermuda\">Bermuda</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bhutan\">Bhutan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bolivia\">Bolivia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bosnia and Herzegovina\">Bosnia and Herzegovina</option>
\t\t\t\t\t\t\t\t\t<option value=\"Botswana\">Botswana</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bouvet Island\">Bouvet Island</option>
\t\t\t\t\t\t\t\t\t<option value=\"Brazil\">Brazil</option>
\t\t\t\t\t\t\t\t\t<option value=\"British Indian Ocean Territory\">British Indian Ocean Territory</option>
\t\t\t\t\t\t\t\t\t<option value=\"Brunei Darussalam\">Brunei Darussalam</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bulgaria\">Bulgaria</option>
\t\t\t\t\t\t\t\t\t<option value=\"Burkina Faso\">Burkina Faso</option>
\t\t\t\t\t\t\t\t\t<option value=\"Burundi\">Burundi</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cambodia\">Cambodia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cameroon\">Cameroon</option>
\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cape Verde\">Cape Verde</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cayman Islands\">Cayman Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Central African Republic\">Central African Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Chad\">Chad</option>
\t\t\t\t\t\t\t\t\t<option value=\"Chile\">Chile</option>
\t\t\t\t\t\t\t\t\t<option value=\"China\">China</option>
\t\t\t\t\t\t\t\t\t<option value=\"Christmas Island\">Christmas Island</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cocos (Keeling) Islands\">Cocos (Keeling) Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Colombia\">Colombia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Comoros\">Comoros</option>
\t\t\t\t\t\t\t\t\t<option value=\"Congo\">Congo</option>
\t\t\t\t\t\t\t\t\t<option value=\"Congo, The Democratic Republic of The\">Congo, The Democratic Republic of The</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cook Islands\">Cook Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Costa Rica\">Costa Rica</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cote D'ivoire\">Cote D'ivoire</option>
\t\t\t\t\t\t\t\t\t<option value=\"Croatia\">Croatia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cuba\">Cuba</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cyprus\">Cyprus</option>
\t\t\t\t\t\t\t\t\t<option value=\"Czech Republic\">Czech Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Denmark\">Denmark</option>
\t\t\t\t\t\t\t\t\t<option value=\"Djibouti\">Djibouti</option>
\t\t\t\t\t\t\t\t\t<option value=\"Dominica\">Dominica</option>
\t\t\t\t\t\t\t\t\t<option value=\"Dominican Republic\">Dominican Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ecuador\">Ecuador</option>
\t\t\t\t\t\t\t\t\t<option value=\"Egypt\">Egypt</option>
\t\t\t\t\t\t\t\t\t<option value=\"El Salvador\">El Salvador</option>
\t\t\t\t\t\t\t\t\t<option value=\"Equatorial Guinea\">Equatorial Guinea</option>
\t\t\t\t\t\t\t\t\t<option value=\"Eritrea\">Eritrea</option>
\t\t\t\t\t\t\t\t\t<option value=\"Estonia\">Estonia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ethiopia\">Ethiopia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Falkland Islands (Malvinas)\">Falkland Islands (Malvinas)</option>
\t\t\t\t\t\t\t\t\t<option value=\"Faroe Islands\">Faroe Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Fiji\">Fiji</option>
\t\t\t\t\t\t\t\t\t<option value=\"Finland\">Finland</option>
\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t<option value=\"French Guiana\">French Guiana</option>
\t\t\t\t\t\t\t\t\t<option value=\"French Polynesia\">French Polynesia</option>
\t\t\t\t\t\t\t\t\t<option value=\"French Southern Territories\">French Southern Territories</option>
\t\t\t\t\t\t\t\t\t<option value=\"Gabon\">Gabon</option>
\t\t\t\t\t\t\t\t\t<option value=\"Gambia\">Gambia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Georgia\">Georgia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Germany\">Germany</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ghana\">Ghana</option>
\t\t\t\t\t\t\t\t\t<option value=\"Gibraltar\">Gibraltar</option>
\t\t\t\t\t\t\t\t\t<option value=\"Greece\">Greece</option>
\t\t\t\t\t\t\t\t\t<option value=\"Greenland\">Greenland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Grenada\">Grenada</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guadeloupe\">Guadeloupe</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guam\">Guam</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guatemala\">Guatemala</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guinea\">Guinea</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guinea-bissau\">Guinea-bissau</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guyana\">Guyana</option>
\t\t\t\t\t\t\t\t\t<option value=\"Haiti\">Haiti</option>
\t\t\t\t\t\t\t\t\t<option value=\"Heard Island and Mcdonald Islands\">Heard Island and Mcdonald Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Holy See (Vatican City State)\">Holy See (Vatican City State)</option>
\t\t\t\t\t\t\t\t\t<option value=\"Honduras\">Honduras</option>
\t\t\t\t\t\t\t\t\t<option value=\"Hong Kong\">Hong Kong</option>
\t\t\t\t\t\t\t\t\t<option value=\"Hungary\">Hungary</option>
\t\t\t\t\t\t\t\t\t<option value=\"Iceland\">Iceland</option>
\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t<option value=\"Indonesia\">Indonesia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Iran, Islamic Republic of\">Iran, Islamic Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Iraq\">Iraq</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ireland\">Ireland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Israel\">Israel</option>
\t\t\t\t\t\t\t\t\t<option value=\"Italy\">Italy</option>
\t\t\t\t\t\t\t\t\t<option value=\"Jamaica\">Jamaica</option>
\t\t\t\t\t\t\t\t\t<option value=\"Japan\">Japan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Jordan\">Jordan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kazakhstan\">Kazakhstan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kenya\">Kenya</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kiribati\">Kiribati</option>
\t\t\t\t\t\t\t\t\t<option value=\"Korea, Democratic People's Republic of\">Korea, Democratic People's Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Korea, Republic of\">Korea, Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kuwait\">Kuwait</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kyrgyzstan\">Kyrgyzstan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lao People's Democratic Republic\">Lao People's Democratic Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Latvia\">Latvia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lebanon\">Lebanon</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lesotho\">Lesotho</option>
\t\t\t\t\t\t\t\t\t<option value=\"Liberia\">Liberia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Libyan Arab Jamahiriya\">Libyan Arab Jamahiriya</option>
\t\t\t\t\t\t\t\t\t<option value=\"Liechtenstein\">Liechtenstein</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lithuania\">Lithuania</option>
\t\t\t\t\t\t\t\t\t<option value=\"Luxembourg\">Luxembourg</option>
\t\t\t\t\t\t\t\t\t<option value=\"Macao\">Macao</option>
\t\t\t\t\t\t\t\t\t<option value=\"Macedonia, The Former Yugoslav Republic of\">Macedonia, The Former Yugoslav Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Madagascar\">Madagascar</option>
\t\t\t\t\t\t\t\t\t<option value=\"Malawi\">Malawi</option>
\t\t\t\t\t\t\t\t\t<option value=\"Malaysia\">Malaysia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Maldives\">Maldives</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mali\">Mali</option>
\t\t\t\t\t\t\t\t\t<option value=\"Malta\">Malta</option>
\t\t\t\t\t\t\t\t\t<option value=\"Marshall Islands\">Marshall Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Martinique\">Martinique</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mauritania\">Mauritania</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mauritius\">Mauritius</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mayotte\">Mayotte</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mexico\">Mexico</option>
\t\t\t\t\t\t\t\t\t<option value=\"Micronesia, Federated States of\">Micronesia, Federated States of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Moldova, Republic of\">Moldova, Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Monaco\">Monaco</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mongolia\">Mongolia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Montserrat\">Montserrat</option>
\t\t\t\t\t\t\t\t\t<option value=\"Morocco\">Morocco</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mozambique\">Mozambique</option>
\t\t\t\t\t\t\t\t\t<option value=\"Myanmar\">Myanmar</option>
\t\t\t\t\t\t\t\t\t<option value=\"Namibia\">Namibia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Nauru\">Nauru</option>
\t\t\t\t\t\t\t\t\t<option value=\"Nepal\">Nepal</option>
\t\t\t\t\t\t\t\t\t<option value=\"Netherlands\">Netherlands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Netherlands Antilles\">Netherlands Antilles</option>
\t\t\t\t\t\t\t\t\t<option value=\"New Caledonia\">New Caledonia</option>
\t\t\t\t\t\t\t\t\t<option value=\"New Zealand\">New Zealand</option>
\t\t\t\t\t\t\t\t\t<option value=\"Nicaragua\">Nicaragua</option>
\t\t\t\t\t\t\t\t\t<option value=\"Niger\">Niger</option>
\t\t\t\t\t\t\t\t\t<option value=\"Nigeria\">Nigeria</option>
\t\t\t\t\t\t\t\t\t<option value=\"Niue\">Niue</option>
\t\t\t\t\t\t\t\t\t<option value=\"Norfolk Island\">Norfolk Island</option>
\t\t\t\t\t\t\t\t\t<option value=\"Northern Mariana Islands\">Northern Mariana Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Norway\">Norway</option>
\t\t\t\t\t\t\t\t\t<option value=\"Oman\">Oman</option>
\t\t\t\t\t\t\t\t\t<option value=\"Pakistan\">Pakistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Palau\">Palau</option>
\t\t\t\t\t\t\t\t\t<option value=\"Palestinian Territory, Occupied\">Palestinian Territory, Occupied</option>
\t\t\t\t\t\t\t\t\t<option value=\"Panama\">Panama</option>
\t\t\t\t\t\t\t\t\t<option value=\"Papua New Guinea\">Papua New Guinea</option>
\t\t\t\t\t\t\t\t\t<option value=\"Paraguay\">Paraguay</option>
\t\t\t\t\t\t\t\t\t<option value=\"Peru\">Peru</option>
\t\t\t\t\t\t\t\t\t<option value=\"Philippines\">Philippines</option>
\t\t\t\t\t\t\t\t\t<option value=\"Pitcairn\">Pitcairn</option>
\t\t\t\t\t\t\t\t\t<option value=\"Poland\">Poland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Portugal\">Portugal</option>
\t\t\t\t\t\t\t\t\t<option value=\"Puerto Rico\">Puerto Rico</option>
\t\t\t\t\t\t\t\t\t<option value=\"Qatar\">Qatar</option>
\t\t\t\t\t\t\t\t\t<option value=\"Reunion\">Reunion</option>
\t\t\t\t\t\t\t\t\t<option value=\"Romania\">Romania</option>
\t\t\t\t\t\t\t\t\t<option value=\"Russian Federation\">Russian Federation</option>
\t\t\t\t\t\t\t\t\t<option value=\"Rwanda\">Rwanda</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Helena\">Saint Helena</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Kitts and Nevis\">Saint Kitts and Nevis</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Lucia\">Saint Lucia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Pierre and Miquelon\">Saint Pierre and Miquelon</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Vincent and The Grenadines\">Saint Vincent and The Grenadines</option>
\t\t\t\t\t\t\t\t\t<option value=\"Samoa\">Samoa</option>
\t\t\t\t\t\t\t\t\t<option value=\"San Marino\">San Marino</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sao Tome and Principe\">Sao Tome and Principe</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saudi Arabia\">Saudi Arabia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Senegal\">Senegal</option>
\t\t\t\t\t\t\t\t\t<option value=\"Serbia and Montenegro\">Serbia and Montenegro</option>
\t\t\t\t\t\t\t\t\t<option value=\"Seychelles\">Seychelles</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sierra Leone\">Sierra Leone</option>
\t\t\t\t\t\t\t\t\t<option value=\"Singapore\">Singapore</option>
\t\t\t\t\t\t\t\t\t<option value=\"Slovakia\">Slovakia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Slovenia\">Slovenia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Solomon Islands\">Solomon Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Somalia\">Somalia</option>
\t\t\t\t\t\t\t\t\t<option value=\"South Africa\">South Africa</option>
\t\t\t\t\t\t\t\t\t<option value=\"South Georgia and The South Sandwich Islands\">South Georgia and The South Sandwich Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Spain\">Spain</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sri Lanka\">Sri Lanka</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sudan\">Sudan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Suriname\">Suriname</option>
\t\t\t\t\t\t\t\t\t<option value=\"Svalbard and Jan Mayen\">Svalbard and Jan Mayen</option>
\t\t\t\t\t\t\t\t\t<option value=\"Swaziland\">Swaziland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sweden\">Sweden</option>
\t\t\t\t\t\t\t\t\t<option value=\"Switzerland\">Switzerland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Syrian Arab Republic\">Syrian Arab Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Taiwan, Province of China\">Taiwan, Province of China</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tajikistan\">Tajikistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tanzania, United Republic of\">Tanzania, United Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Thailand\">Thailand</option>
\t\t\t\t\t\t\t\t\t<option value=\"Timor-leste\">Timor-leste</option>
\t\t\t\t\t\t\t\t\t<option value=\"Togo\">Togo</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tokelau\">Tokelau</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tonga\">Tonga</option>
\t\t\t\t\t\t\t\t\t<option value=\"Trinidad and Tobago\">Trinidad and Tobago</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tunisia\">Tunisia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Turkey\">Turkey</option>
\t\t\t\t\t\t\t\t\t<option value=\"Turkmenistan\">Turkmenistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Turks and Caicos Islands\">Turks and Caicos Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tuvalu\">Tuvalu</option>
\t\t\t\t\t\t\t\t\t<option value=\"Uganda\">Uganda</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ukraine\">Ukraine</option>
\t\t\t\t\t\t\t\t\t<option value=\"United Arab Emirates\">United Arab Emirates</option>
\t\t\t\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t\t\t\t<option value=\"United States\">United States</option>
\t\t\t\t\t\t\t\t\t<option value=\"United States Minor Outlying Islands\">United States Minor Outlying Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Uruguay\">Uruguay</option>
\t\t\t\t\t\t\t\t\t<option value=\"Uzbekistan\">Uzbekistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Vanuatu\">Vanuatu</option>
\t\t\t\t\t\t\t\t\t<option value=\"Venezuela\">Venezuela</option>
\t\t\t\t\t\t\t\t\t<option value=\"Viet Nam\">Viet Nam</option>
\t\t\t\t\t\t\t\t\t<option value=\"Virgin Islands, British\">Virgin Islands, British</option>
\t\t\t\t\t\t\t\t\t<option value=\"Virgin Islands, U.S.\">Virgin Islands, U.S.</option>
\t\t\t\t\t\t\t\t\t<option value=\"Wallis and Futuna\">Wallis and Futuna</option>
\t\t\t\t\t\t\t\t\t<option value=\"Western Sahara\">Western Sahara</option>
\t\t\t\t\t\t\t\t\t<option value=\"Yemen\">Yemen</option>
\t\t\t\t\t\t\t\t\t<option value=\"Zambia\">Zambia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Zimbabwe\">Zimbabwe</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"light\">State/Province<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t<select name=\"select\" class=\"selectpicker\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t<option value=\"Select region\">Select region, state or province</option>
\t\t\t\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t\t\t\t<option value=\"Afghanistan\">Afghanistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Albania\">Albania</option>
\t\t\t\t\t\t\t\t\t<option value=\"Algeria\">Algeria</option>
\t\t\t\t\t\t\t\t\t<option value=\"American Samoa\">American Samoa</option>
\t\t\t\t\t\t\t\t\t<option value=\"Andorra\">Andorra</option>
\t\t\t\t\t\t\t\t\t<option value=\"Angola\">Angola</option>
\t\t\t\t\t\t\t\t\t<option value=\"Anguilla\">Anguilla</option>
\t\t\t\t\t\t\t\t\t<option value=\"Antarctica\">Antarctica</option>
\t\t\t\t\t\t\t\t\t<option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>
\t\t\t\t\t\t\t\t\t<option value=\"Argentina\">Argentina</option>
\t\t\t\t\t\t\t\t\t<option value=\"Armenia\">Armenia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Aruba\">Aruba</option>
\t\t\t\t\t\t\t\t\t<option value=\"Australia\">Australia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Austria\">Austria</option>
\t\t\t\t\t\t\t\t\t<option value=\"Azerbaijan\">Azerbaijan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bahamas\">Bahamas</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bahrain\">Bahrain</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bangladesh\">Bangladesh</option>
\t\t\t\t\t\t\t\t\t<option value=\"Barbados\">Barbados</option>
\t\t\t\t\t\t\t\t\t<option value=\"Belarus\">Belarus</option>
\t\t\t\t\t\t\t\t\t<option value=\"Belgium\">Belgium</option>
\t\t\t\t\t\t\t\t\t<option value=\"Belize\">Belize</option>
\t\t\t\t\t\t\t\t\t<option value=\"Benin\">Benin</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bermuda\">Bermuda</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bhutan\">Bhutan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bolivia\">Bolivia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bosnia and Herzegovina\">Bosnia and Herzegovina</option>
\t\t\t\t\t\t\t\t\t<option value=\"Botswana\">Botswana</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bouvet Island\">Bouvet Island</option>
\t\t\t\t\t\t\t\t\t<option value=\"Brazil\">Brazil</option>
\t\t\t\t\t\t\t\t\t<option value=\"British Indian Ocean Territory\">British Indian Ocean Territory</option>
\t\t\t\t\t\t\t\t\t<option value=\"Brunei Darussalam\">Brunei Darussalam</option>
\t\t\t\t\t\t\t\t\t<option value=\"Bulgaria\">Bulgaria</option>
\t\t\t\t\t\t\t\t\t<option value=\"Burkina Faso\">Burkina Faso</option>
\t\t\t\t\t\t\t\t\t<option value=\"Burundi\">Burundi</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cambodia\">Cambodia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cameroon\">Cameroon</option>
\t\t\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cape Verde\">Cape Verde</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cayman Islands\">Cayman Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Central African Republic\">Central African Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Chad\">Chad</option>
\t\t\t\t\t\t\t\t\t<option value=\"Chile\">Chile</option>
\t\t\t\t\t\t\t\t\t<option value=\"China\">China</option>
\t\t\t\t\t\t\t\t\t<option value=\"Christmas Island\">Christmas Island</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cocos (Keeling) Islands\">Cocos (Keeling) Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Colombia\">Colombia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Comoros\">Comoros</option>
\t\t\t\t\t\t\t\t\t<option value=\"Congo\">Congo</option>
\t\t\t\t\t\t\t\t\t<option value=\"Congo, The Democratic Republic of The\">Congo, The Democratic Republic of The</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cook Islands\">Cook Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Costa Rica\">Costa Rica</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cote D'ivoire\">Cote D'ivoire</option>
\t\t\t\t\t\t\t\t\t<option value=\"Croatia\">Croatia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cuba\">Cuba</option>
\t\t\t\t\t\t\t\t\t<option value=\"Cyprus\">Cyprus</option>
\t\t\t\t\t\t\t\t\t<option value=\"Czech Republic\">Czech Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Denmark\">Denmark</option>
\t\t\t\t\t\t\t\t\t<option value=\"Djibouti\">Djibouti</option>
\t\t\t\t\t\t\t\t\t<option value=\"Dominica\">Dominica</option>
\t\t\t\t\t\t\t\t\t<option value=\"Dominican Republic\">Dominican Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ecuador\">Ecuador</option>
\t\t\t\t\t\t\t\t\t<option value=\"Egypt\">Egypt</option>
\t\t\t\t\t\t\t\t\t<option value=\"El Salvador\">El Salvador</option>
\t\t\t\t\t\t\t\t\t<option value=\"Equatorial Guinea\">Equatorial Guinea</option>
\t\t\t\t\t\t\t\t\t<option value=\"Eritrea\">Eritrea</option>
\t\t\t\t\t\t\t\t\t<option value=\"Estonia\">Estonia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ethiopia\">Ethiopia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Falkland Islands (Malvinas)\">Falkland Islands (Malvinas)</option>
\t\t\t\t\t\t\t\t\t<option value=\"Faroe Islands\">Faroe Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Fiji\">Fiji</option>
\t\t\t\t\t\t\t\t\t<option value=\"Finland\">Finland</option>
\t\t\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t\t\t<option value=\"French Guiana\">French Guiana</option>
\t\t\t\t\t\t\t\t\t<option value=\"French Polynesia\">French Polynesia</option>
\t\t\t\t\t\t\t\t\t<option value=\"French Southern Territories\">French Southern Territories</option>
\t\t\t\t\t\t\t\t\t<option value=\"Gabon\">Gabon</option>
\t\t\t\t\t\t\t\t\t<option value=\"Gambia\">Gambia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Georgia\">Georgia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Germany\">Germany</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ghana\">Ghana</option>
\t\t\t\t\t\t\t\t\t<option value=\"Gibraltar\">Gibraltar</option>
\t\t\t\t\t\t\t\t\t<option value=\"Greece\">Greece</option>
\t\t\t\t\t\t\t\t\t<option value=\"Greenland\">Greenland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Grenada\">Grenada</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guadeloupe\">Guadeloupe</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guam\">Guam</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guatemala\">Guatemala</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guinea\">Guinea</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guinea-bissau\">Guinea-bissau</option>
\t\t\t\t\t\t\t\t\t<option value=\"Guyana\">Guyana</option>
\t\t\t\t\t\t\t\t\t<option value=\"Haiti\">Haiti</option>
\t\t\t\t\t\t\t\t\t<option value=\"Heard Island and Mcdonald Islands\">Heard Island and Mcdonald Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Holy See (Vatican City State)\">Holy See (Vatican City State)</option>
\t\t\t\t\t\t\t\t\t<option value=\"Honduras\">Honduras</option>
\t\t\t\t\t\t\t\t\t<option value=\"Hong Kong\">Hong Kong</option>
\t\t\t\t\t\t\t\t\t<option value=\"Hungary\">Hungary</option>
\t\t\t\t\t\t\t\t\t<option value=\"Iceland\">Iceland</option>
\t\t\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t\t\t<option value=\"Indonesia\">Indonesia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Iran, Islamic Republic of\">Iran, Islamic Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Iraq\">Iraq</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ireland\">Ireland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Israel\">Israel</option>
\t\t\t\t\t\t\t\t\t<option value=\"Italy\">Italy</option>
\t\t\t\t\t\t\t\t\t<option value=\"Jamaica\">Jamaica</option>
\t\t\t\t\t\t\t\t\t<option value=\"Japan\">Japan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Jordan\">Jordan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kazakhstan\">Kazakhstan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kenya\">Kenya</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kiribati\">Kiribati</option>
\t\t\t\t\t\t\t\t\t<option value=\"Korea, Democratic People's Republic of\">Korea, Democratic People's Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Korea, Republic of\">Korea, Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kuwait\">Kuwait</option>
\t\t\t\t\t\t\t\t\t<option value=\"Kyrgyzstan\">Kyrgyzstan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lao People's Democratic Republic\">Lao People's Democratic Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Latvia\">Latvia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lebanon\">Lebanon</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lesotho\">Lesotho</option>
\t\t\t\t\t\t\t\t\t<option value=\"Liberia\">Liberia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Libyan Arab Jamahiriya\">Libyan Arab Jamahiriya</option>
\t\t\t\t\t\t\t\t\t<option value=\"Liechtenstein\">Liechtenstein</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lithuania\">Lithuania</option>
\t\t\t\t\t\t\t\t\t<option value=\"Luxembourg\">Luxembourg</option>
\t\t\t\t\t\t\t\t\t<option value=\"Macao\">Macao</option>
\t\t\t\t\t\t\t\t\t<option value=\"Macedonia, The Former Yugoslav Republic of\">Macedonia, The Former Yugoslav Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Madagascar\">Madagascar</option>
\t\t\t\t\t\t\t\t\t<option value=\"Malawi\">Malawi</option>
\t\t\t\t\t\t\t\t\t<option value=\"Malaysia\">Malaysia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Maldives\">Maldives</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mali\">Mali</option>
\t\t\t\t\t\t\t\t\t<option value=\"Malta\">Malta</option>
\t\t\t\t\t\t\t\t\t<option value=\"Marshall Islands\">Marshall Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Martinique\">Martinique</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mauritania\">Mauritania</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mauritius\">Mauritius</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mayotte\">Mayotte</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mexico\">Mexico</option>
\t\t\t\t\t\t\t\t\t<option value=\"Micronesia, Federated States of\">Micronesia, Federated States of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Moldova, Republic of\">Moldova, Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Monaco\">Monaco</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mongolia\">Mongolia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Montserrat\">Montserrat</option>
\t\t\t\t\t\t\t\t\t<option value=\"Morocco\">Morocco</option>
\t\t\t\t\t\t\t\t\t<option value=\"Mozambique\">Mozambique</option>
\t\t\t\t\t\t\t\t\t<option value=\"Myanmar\">Myanmar</option>
\t\t\t\t\t\t\t\t\t<option value=\"Namibia\">Namibia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Nauru\">Nauru</option>
\t\t\t\t\t\t\t\t\t<option value=\"Nepal\">Nepal</option>
\t\t\t\t\t\t\t\t\t<option value=\"Netherlands\">Netherlands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Netherlands Antilles\">Netherlands Antilles</option>
\t\t\t\t\t\t\t\t\t<option value=\"New Caledonia\">New Caledonia</option>
\t\t\t\t\t\t\t\t\t<option value=\"New Zealand\">New Zealand</option>
\t\t\t\t\t\t\t\t\t<option value=\"Nicaragua\">Nicaragua</option>
\t\t\t\t\t\t\t\t\t<option value=\"Niger\">Niger</option>
\t\t\t\t\t\t\t\t\t<option value=\"Nigeria\">Nigeria</option>
\t\t\t\t\t\t\t\t\t<option value=\"Niue\">Niue</option>
\t\t\t\t\t\t\t\t\t<option value=\"Norfolk Island\">Norfolk Island</option>
\t\t\t\t\t\t\t\t\t<option value=\"Northern Mariana Islands\">Northern Mariana Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Norway\">Norway</option>
\t\t\t\t\t\t\t\t\t<option value=\"Oman\">Oman</option>
\t\t\t\t\t\t\t\t\t<option value=\"Pakistan\">Pakistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Palau\">Palau</option>
\t\t\t\t\t\t\t\t\t<option value=\"Palestinian Territory, Occupied\">Palestinian Territory, Occupied</option>
\t\t\t\t\t\t\t\t\t<option value=\"Panama\">Panama</option>
\t\t\t\t\t\t\t\t\t<option value=\"Papua New Guinea\">Papua New Guinea</option>
\t\t\t\t\t\t\t\t\t<option value=\"Paraguay\">Paraguay</option>
\t\t\t\t\t\t\t\t\t<option value=\"Peru\">Peru</option>
\t\t\t\t\t\t\t\t\t<option value=\"Philippines\">Philippines</option>
\t\t\t\t\t\t\t\t\t<option value=\"Pitcairn\">Pitcairn</option>
\t\t\t\t\t\t\t\t\t<option value=\"Poland\">Poland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Portugal\">Portugal</option>
\t\t\t\t\t\t\t\t\t<option value=\"Puerto Rico\">Puerto Rico</option>
\t\t\t\t\t\t\t\t\t<option value=\"Qatar\">Qatar</option>
\t\t\t\t\t\t\t\t\t<option value=\"Reunion\">Reunion</option>
\t\t\t\t\t\t\t\t\t<option value=\"Romania\">Romania</option>
\t\t\t\t\t\t\t\t\t<option value=\"Russian Federation\">Russian Federation</option>
\t\t\t\t\t\t\t\t\t<option value=\"Rwanda\">Rwanda</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Helena\">Saint Helena</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Kitts and Nevis\">Saint Kitts and Nevis</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Lucia\">Saint Lucia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Pierre and Miquelon\">Saint Pierre and Miquelon</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saint Vincent and The Grenadines\">Saint Vincent and The Grenadines</option>
\t\t\t\t\t\t\t\t\t<option value=\"Samoa\">Samoa</option>
\t\t\t\t\t\t\t\t\t<option value=\"San Marino\">San Marino</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sao Tome and Principe\">Sao Tome and Principe</option>
\t\t\t\t\t\t\t\t\t<option value=\"Saudi Arabia\">Saudi Arabia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Senegal\">Senegal</option>
\t\t\t\t\t\t\t\t\t<option value=\"Serbia and Montenegro\">Serbia and Montenegro</option>
\t\t\t\t\t\t\t\t\t<option value=\"Seychelles\">Seychelles</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sierra Leone\">Sierra Leone</option>
\t\t\t\t\t\t\t\t\t<option value=\"Singapore\">Singapore</option>
\t\t\t\t\t\t\t\t\t<option value=\"Slovakia\">Slovakia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Slovenia\">Slovenia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Solomon Islands\">Solomon Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Somalia\">Somalia</option>
\t\t\t\t\t\t\t\t\t<option value=\"South Africa\">South Africa</option>
\t\t\t\t\t\t\t\t\t<option value=\"South Georgia and The South Sandwich Islands\">South Georgia and The South Sandwich Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Spain\">Spain</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sri Lanka\">Sri Lanka</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sudan\">Sudan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Suriname\">Suriname</option>
\t\t\t\t\t\t\t\t\t<option value=\"Svalbard and Jan Mayen\">Svalbard and Jan Mayen</option>
\t\t\t\t\t\t\t\t\t<option value=\"Swaziland\">Swaziland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sweden\">Sweden</option>
\t\t\t\t\t\t\t\t\t<option value=\"Switzerland\">Switzerland</option>
\t\t\t\t\t\t\t\t\t<option value=\"Syrian Arab Republic\">Syrian Arab Republic</option>
\t\t\t\t\t\t\t\t\t<option value=\"Taiwan, Province of China\">Taiwan, Province of China</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tajikistan\">Tajikistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tanzania, United Republic of\">Tanzania, United Republic of</option>
\t\t\t\t\t\t\t\t\t<option value=\"Thailand\">Thailand</option>
\t\t\t\t\t\t\t\t\t<option value=\"Timor-leste\">Timor-leste</option>
\t\t\t\t\t\t\t\t\t<option value=\"Togo\">Togo</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tokelau\">Tokelau</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tonga\">Tonga</option>
\t\t\t\t\t\t\t\t\t<option value=\"Trinidad and Tobago\">Trinidad and Tobago</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tunisia\">Tunisia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Turkey\">Turkey</option>
\t\t\t\t\t\t\t\t\t<option value=\"Turkmenistan\">Turkmenistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Turks and Caicos Islands\">Turks and Caicos Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Tuvalu\">Tuvalu</option>
\t\t\t\t\t\t\t\t\t<option value=\"Uganda\">Uganda</option>
\t\t\t\t\t\t\t\t\t<option value=\"Ukraine\">Ukraine</option>
\t\t\t\t\t\t\t\t\t<option value=\"United Arab Emirates\">United Arab Emirates</option>
\t\t\t\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t\t\t\t<option value=\"United States\">United States</option>
\t\t\t\t\t\t\t\t\t<option value=\"United States Minor Outlying Islands\">United States Minor Outlying Islands</option>
\t\t\t\t\t\t\t\t\t<option value=\"Uruguay\">Uruguay</option>
\t\t\t\t\t\t\t\t\t<option value=\"Uzbekistan\">Uzbekistan</option>
\t\t\t\t\t\t\t\t\t<option value=\"Vanuatu\">Vanuatu</option>
\t\t\t\t\t\t\t\t\t<option value=\"Venezuela\">Venezuela</option>
\t\t\t\t\t\t\t\t\t<option value=\"Viet Nam\">Viet Nam</option>
\t\t\t\t\t\t\t\t\t<option value=\"Virgin Islands, British\">Virgin Islands, British</option>
\t\t\t\t\t\t\t\t\t<option value=\"Virgin Islands, U.S.\">Virgin Islands, U.S.</option>
\t\t\t\t\t\t\t\t\t<option value=\"Wallis and Futuna\">Wallis and Futuna</option>
\t\t\t\t\t\t\t\t\t<option value=\"Western Sahara\">Western Sahara</option>
\t\t\t\t\t\t\t\t\t<option value=\"Yemen\">Yemen</option>
\t\t\t\t\t\t\t\t\t<option value=\"Zambia\">Zambia</option>
\t\t\t\t\t\t\t\t\t<option value=\"Zimbabwe\">Zimbabwe</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"light\">Zip/Postal Code</label>
\t\t\t\t\t\t\t\t<input name=\"zip-code\" type=\"text\" class=\"form-control\" id=\"zip-code\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"btn btn-cool btn-md-sm\" type=\"submit\">GET A QUOTE</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4 \">
\t\t\t\t\t<div class=\"rect-nohover\">
\t\t\t\t\t\t<h3>DISCOUNT CODES</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tEnter your coupon code if you have one
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input name=\"coupon-code\" type=\"text\" class=\"form-control\" id=\"coupon-code\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"btn btn-cool btn-md-sm\" type=\"submit\">APPLY COUPON</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"divider divider-sm visible-sm\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4 \">
\t\t\t\t\t<div class=\"rect-nohover\">
\t\t\t\t\t\t<table class=\"table table-total\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-right\">
\t\t\t\t\t\t\t\tSubtotal
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th class=\"td-divider\">
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t \$295.00
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t<h2>GRAND TOTAL</h2>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<th class=\"td-divider\">
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h2>\$295.00</h2>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<button class=\"btn btn-cool btn-md invert-color\" type=\"submit\">PROCEED TO CHECKOUT</button>
\t\t\t\t\t\t\t<div class=\"divider divider-sm\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"upper\">
\t\t\t\t\t\t\t\t<a href=\"#\"> Checkout with Multiple Addresses </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</section>
\t\t<!-- //end Page Content -->
\t\t
";
        
        $__internal_bf083c40e98e5b29b1b75ea112856e671d519c1ec5307c19c827052d2a7e71d9->leave($__internal_bf083c40e98e5b29b1b75ea112856e671d519c1ec5307c19c827052d2a7e71d9_prof);

    }

    // line 659
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_396ea4b25398dcdbde370d7e2187c7738aa21ada3f0c8b0a55edede122168411 = $this->env->getExtension("native_profiler");
        $__internal_396ea4b25398dcdbde370d7e2187c7738aa21ada3f0c8b0a55edede122168411->enter($__internal_396ea4b25398dcdbde370d7e2187c7738aa21ada3f0c8b0a55edede122168411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 660
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr.custom.02163.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.finger.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/doubletaptogo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.inview.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.liMarquee.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.plugin.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/cloudzoom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/coolbaby.js"), "html", null, true);
        echo "\"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type=\"text/javascript\" src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/js/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/js/jquery.themepunch.ini.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_396ea4b25398dcdbde370d7e2187c7738aa21ada3f0c8b0a55edede122168411->leave($__internal_396ea4b25398dcdbde370d7e2187c7738aa21ada3f0c8b0a55edede122168411_prof);

    }

    public function getTemplateName()
    {
        return ":default:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 680,  782 => 679,  778 => 678,  773 => 676,  769 => 675,  765 => 674,  761 => 673,  757 => 672,  753 => 671,  749 => 670,  745 => 669,  741 => 668,  737 => 667,  733 => 666,  729 => 665,  725 => 664,  721 => 663,  717 => 662,  713 => 661,  708 => 660,  702 => 659,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <!-- Breadcrumbs-->*/
/* 		<section class="breadcrumbs">*/
/* 		<div class="container">*/
/* 			<a href="index.html">home</a><span class="divider">&nbsp;</span><span>SHOPPING CART</span>*/
/* 		</div>*/
/* 		</section>*/
/* 		<!-- //end Breadcrumbs -->*/
/* 		<!--Page Content-->*/
/* 		<section class="content">*/
/* 		<div class="container">*/
/* 			<div class="subtitle">*/
/* 				<div>*/
/* 					<span>SHOPPING CART</span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="rect-nohover">*/
/* 				<div class="inside">*/
/* 					<table class="table-shop">*/
/* 					<thead>*/
/* 					<tr>*/
/* 						<th class="product-image">&nbsp;*/
/* 							*/
/* 						</th>*/
/* 						<th class="product-name">*/
/* 							Product Name*/
/* 						</th>*/
/* 						<th class="text-center">&nbsp;*/
/* 							*/
/* 						</th>*/
/* 						<th class="text-center">*/
/* 							Unit Price*/
/* 						</th>*/
/* 						<th class="text-center">*/
/* 							Quantity*/
/* 						</th>*/
/* 						<th class="text-center">*/
/* 							Subtotal*/
/* 						</th>*/
/* 						<th class="text-center">&nbsp;*/
/* 							*/
/* 						</th>*/
/* 					</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 					<tr>*/
/* 						<td class="notitle">*/
/* 							<img src="images/products/product-01.jpg" alt="">*/
/* 						</td>*/
/* 						<td>*/
/* 							<div class="th_title visible-xs">*/
/* 								Product Name:*/
/* 							</div>*/
/* 							<a href="#">Product Example</a>*/
/* 						</td>*/
/* 						<td class="text-center notitle">*/
/* 							<a href="#">EDIT</a>*/
/* 						</td>*/
/* 						<td class="text-center">*/
/* 							<div class="th_title visible-xs">*/
/* 								Unit Price:*/
/* 							</div>*/
/* 							 $214.99*/
/* 						</td>*/
/* 						<td class="text-center">*/
/* 							<div class="th_title visible-xs input-label">*/
/* 								Quantity:*/
/* 							</div>*/
/* 							<input type="text" class="form-control input-quantity" value="1">*/
/* 						</td>*/
/* 						<td class="text-center">*/
/* 							<div class="th_title visible-xs">*/
/* 								Subtotal:*/
/* 							</div>*/
/* 							 $214.99*/
/* 						</td>*/
/* 						<td class="text-center notitle">*/
/* 							<a class="icon icon-sm flaticon-recycle59 remove-from-cart" href="#"></a>*/
/* 						</td>*/
/* 					</tr>*/
/* 					</tbody>*/
/* 					</table>*/
/* 					<div class="wrapper clearfix">*/
/* 						<a href="#" class="btn-cool btn-md-sm pull-left">CONTINUE SHOPPING</a><span class="pull-left btn-space">&nbsp;</span><a href="#" class="btn-cool btn-md-sm pull-left">CLEAR SHOPPING CART</a>*/
/* 						<div class="divider divider-sm visible-xs">*/
/* 						</div>*/
/* 						<a href="#" class="btn-cool btn-md-sm pull-right">UPDATE CART</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="divider divider-sm">*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-sm-6 col-md-4">*/
/* 					<div class="rect-nohover">*/
/* 						<h3>ESTIMATE SHIPPING AND TAX</h3>*/
/* 						<p>*/
/* 							Enter your destination to get a shipping estimate.*/
/* 						</p>*/
/* 						<form action="#">*/
/* 							<div class="form-group">*/
/* 								<label class="light">Country<span class="required">*</span></label>*/
/* 								<select name="select2" class="selectpicker" data-width="100%">*/
/* 									<option value="United States">United States</option>*/
/* 									<option value="United Kingdom">United Kingdom</option>*/
/* 									<option value="Afghanistan">Afghanistan</option>*/
/* 									<option value="Albania">Albania</option>*/
/* 									<option value="Algeria">Algeria</option>*/
/* 									<option value="American Samoa">American Samoa</option>*/
/* 									<option value="Andorra">Andorra</option>*/
/* 									<option value="Angola">Angola</option>*/
/* 									<option value="Anguilla">Anguilla</option>*/
/* 									<option value="Antarctica">Antarctica</option>*/
/* 									<option value="Antigua and Barbuda">Antigua and Barbuda</option>*/
/* 									<option value="Argentina">Argentina</option>*/
/* 									<option value="Armenia">Armenia</option>*/
/* 									<option value="Aruba">Aruba</option>*/
/* 									<option value="Australia">Australia</option>*/
/* 									<option value="Austria">Austria</option>*/
/* 									<option value="Azerbaijan">Azerbaijan</option>*/
/* 									<option value="Bahamas">Bahamas</option>*/
/* 									<option value="Bahrain">Bahrain</option>*/
/* 									<option value="Bangladesh">Bangladesh</option>*/
/* 									<option value="Barbados">Barbados</option>*/
/* 									<option value="Belarus">Belarus</option>*/
/* 									<option value="Belgium">Belgium</option>*/
/* 									<option value="Belize">Belize</option>*/
/* 									<option value="Benin">Benin</option>*/
/* 									<option value="Bermuda">Bermuda</option>*/
/* 									<option value="Bhutan">Bhutan</option>*/
/* 									<option value="Bolivia">Bolivia</option>*/
/* 									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>*/
/* 									<option value="Botswana">Botswana</option>*/
/* 									<option value="Bouvet Island">Bouvet Island</option>*/
/* 									<option value="Brazil">Brazil</option>*/
/* 									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>*/
/* 									<option value="Brunei Darussalam">Brunei Darussalam</option>*/
/* 									<option value="Bulgaria">Bulgaria</option>*/
/* 									<option value="Burkina Faso">Burkina Faso</option>*/
/* 									<option value="Burundi">Burundi</option>*/
/* 									<option value="Cambodia">Cambodia</option>*/
/* 									<option value="Cameroon">Cameroon</option>*/
/* 									<option value="Canada">Canada</option>*/
/* 									<option value="Cape Verde">Cape Verde</option>*/
/* 									<option value="Cayman Islands">Cayman Islands</option>*/
/* 									<option value="Central African Republic">Central African Republic</option>*/
/* 									<option value="Chad">Chad</option>*/
/* 									<option value="Chile">Chile</option>*/
/* 									<option value="China">China</option>*/
/* 									<option value="Christmas Island">Christmas Island</option>*/
/* 									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>*/
/* 									<option value="Colombia">Colombia</option>*/
/* 									<option value="Comoros">Comoros</option>*/
/* 									<option value="Congo">Congo</option>*/
/* 									<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>*/
/* 									<option value="Cook Islands">Cook Islands</option>*/
/* 									<option value="Costa Rica">Costa Rica</option>*/
/* 									<option value="Cote D'ivoire">Cote D'ivoire</option>*/
/* 									<option value="Croatia">Croatia</option>*/
/* 									<option value="Cuba">Cuba</option>*/
/* 									<option value="Cyprus">Cyprus</option>*/
/* 									<option value="Czech Republic">Czech Republic</option>*/
/* 									<option value="Denmark">Denmark</option>*/
/* 									<option value="Djibouti">Djibouti</option>*/
/* 									<option value="Dominica">Dominica</option>*/
/* 									<option value="Dominican Republic">Dominican Republic</option>*/
/* 									<option value="Ecuador">Ecuador</option>*/
/* 									<option value="Egypt">Egypt</option>*/
/* 									<option value="El Salvador">El Salvador</option>*/
/* 									<option value="Equatorial Guinea">Equatorial Guinea</option>*/
/* 									<option value="Eritrea">Eritrea</option>*/
/* 									<option value="Estonia">Estonia</option>*/
/* 									<option value="Ethiopia">Ethiopia</option>*/
/* 									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>*/
/* 									<option value="Faroe Islands">Faroe Islands</option>*/
/* 									<option value="Fiji">Fiji</option>*/
/* 									<option value="Finland">Finland</option>*/
/* 									<option value="France">France</option>*/
/* 									<option value="French Guiana">French Guiana</option>*/
/* 									<option value="French Polynesia">French Polynesia</option>*/
/* 									<option value="French Southern Territories">French Southern Territories</option>*/
/* 									<option value="Gabon">Gabon</option>*/
/* 									<option value="Gambia">Gambia</option>*/
/* 									<option value="Georgia">Georgia</option>*/
/* 									<option value="Germany">Germany</option>*/
/* 									<option value="Ghana">Ghana</option>*/
/* 									<option value="Gibraltar">Gibraltar</option>*/
/* 									<option value="Greece">Greece</option>*/
/* 									<option value="Greenland">Greenland</option>*/
/* 									<option value="Grenada">Grenada</option>*/
/* 									<option value="Guadeloupe">Guadeloupe</option>*/
/* 									<option value="Guam">Guam</option>*/
/* 									<option value="Guatemala">Guatemala</option>*/
/* 									<option value="Guinea">Guinea</option>*/
/* 									<option value="Guinea-bissau">Guinea-bissau</option>*/
/* 									<option value="Guyana">Guyana</option>*/
/* 									<option value="Haiti">Haiti</option>*/
/* 									<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>*/
/* 									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>*/
/* 									<option value="Honduras">Honduras</option>*/
/* 									<option value="Hong Kong">Hong Kong</option>*/
/* 									<option value="Hungary">Hungary</option>*/
/* 									<option value="Iceland">Iceland</option>*/
/* 									<option value="India">India</option>*/
/* 									<option value="Indonesia">Indonesia</option>*/
/* 									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>*/
/* 									<option value="Iraq">Iraq</option>*/
/* 									<option value="Ireland">Ireland</option>*/
/* 									<option value="Israel">Israel</option>*/
/* 									<option value="Italy">Italy</option>*/
/* 									<option value="Jamaica">Jamaica</option>*/
/* 									<option value="Japan">Japan</option>*/
/* 									<option value="Jordan">Jordan</option>*/
/* 									<option value="Kazakhstan">Kazakhstan</option>*/
/* 									<option value="Kenya">Kenya</option>*/
/* 									<option value="Kiribati">Kiribati</option>*/
/* 									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>*/
/* 									<option value="Korea, Republic of">Korea, Republic of</option>*/
/* 									<option value="Kuwait">Kuwait</option>*/
/* 									<option value="Kyrgyzstan">Kyrgyzstan</option>*/
/* 									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>*/
/* 									<option value="Latvia">Latvia</option>*/
/* 									<option value="Lebanon">Lebanon</option>*/
/* 									<option value="Lesotho">Lesotho</option>*/
/* 									<option value="Liberia">Liberia</option>*/
/* 									<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>*/
/* 									<option value="Liechtenstein">Liechtenstein</option>*/
/* 									<option value="Lithuania">Lithuania</option>*/
/* 									<option value="Luxembourg">Luxembourg</option>*/
/* 									<option value="Macao">Macao</option>*/
/* 									<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>*/
/* 									<option value="Madagascar">Madagascar</option>*/
/* 									<option value="Malawi">Malawi</option>*/
/* 									<option value="Malaysia">Malaysia</option>*/
/* 									<option value="Maldives">Maldives</option>*/
/* 									<option value="Mali">Mali</option>*/
/* 									<option value="Malta">Malta</option>*/
/* 									<option value="Marshall Islands">Marshall Islands</option>*/
/* 									<option value="Martinique">Martinique</option>*/
/* 									<option value="Mauritania">Mauritania</option>*/
/* 									<option value="Mauritius">Mauritius</option>*/
/* 									<option value="Mayotte">Mayotte</option>*/
/* 									<option value="Mexico">Mexico</option>*/
/* 									<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>*/
/* 									<option value="Moldova, Republic of">Moldova, Republic of</option>*/
/* 									<option value="Monaco">Monaco</option>*/
/* 									<option value="Mongolia">Mongolia</option>*/
/* 									<option value="Montserrat">Montserrat</option>*/
/* 									<option value="Morocco">Morocco</option>*/
/* 									<option value="Mozambique">Mozambique</option>*/
/* 									<option value="Myanmar">Myanmar</option>*/
/* 									<option value="Namibia">Namibia</option>*/
/* 									<option value="Nauru">Nauru</option>*/
/* 									<option value="Nepal">Nepal</option>*/
/* 									<option value="Netherlands">Netherlands</option>*/
/* 									<option value="Netherlands Antilles">Netherlands Antilles</option>*/
/* 									<option value="New Caledonia">New Caledonia</option>*/
/* 									<option value="New Zealand">New Zealand</option>*/
/* 									<option value="Nicaragua">Nicaragua</option>*/
/* 									<option value="Niger">Niger</option>*/
/* 									<option value="Nigeria">Nigeria</option>*/
/* 									<option value="Niue">Niue</option>*/
/* 									<option value="Norfolk Island">Norfolk Island</option>*/
/* 									<option value="Northern Mariana Islands">Northern Mariana Islands</option>*/
/* 									<option value="Norway">Norway</option>*/
/* 									<option value="Oman">Oman</option>*/
/* 									<option value="Pakistan">Pakistan</option>*/
/* 									<option value="Palau">Palau</option>*/
/* 									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>*/
/* 									<option value="Panama">Panama</option>*/
/* 									<option value="Papua New Guinea">Papua New Guinea</option>*/
/* 									<option value="Paraguay">Paraguay</option>*/
/* 									<option value="Peru">Peru</option>*/
/* 									<option value="Philippines">Philippines</option>*/
/* 									<option value="Pitcairn">Pitcairn</option>*/
/* 									<option value="Poland">Poland</option>*/
/* 									<option value="Portugal">Portugal</option>*/
/* 									<option value="Puerto Rico">Puerto Rico</option>*/
/* 									<option value="Qatar">Qatar</option>*/
/* 									<option value="Reunion">Reunion</option>*/
/* 									<option value="Romania">Romania</option>*/
/* 									<option value="Russian Federation">Russian Federation</option>*/
/* 									<option value="Rwanda">Rwanda</option>*/
/* 									<option value="Saint Helena">Saint Helena</option>*/
/* 									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>*/
/* 									<option value="Saint Lucia">Saint Lucia</option>*/
/* 									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>*/
/* 									<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>*/
/* 									<option value="Samoa">Samoa</option>*/
/* 									<option value="San Marino">San Marino</option>*/
/* 									<option value="Sao Tome and Principe">Sao Tome and Principe</option>*/
/* 									<option value="Saudi Arabia">Saudi Arabia</option>*/
/* 									<option value="Senegal">Senegal</option>*/
/* 									<option value="Serbia and Montenegro">Serbia and Montenegro</option>*/
/* 									<option value="Seychelles">Seychelles</option>*/
/* 									<option value="Sierra Leone">Sierra Leone</option>*/
/* 									<option value="Singapore">Singapore</option>*/
/* 									<option value="Slovakia">Slovakia</option>*/
/* 									<option value="Slovenia">Slovenia</option>*/
/* 									<option value="Solomon Islands">Solomon Islands</option>*/
/* 									<option value="Somalia">Somalia</option>*/
/* 									<option value="South Africa">South Africa</option>*/
/* 									<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>*/
/* 									<option value="Spain">Spain</option>*/
/* 									<option value="Sri Lanka">Sri Lanka</option>*/
/* 									<option value="Sudan">Sudan</option>*/
/* 									<option value="Suriname">Suriname</option>*/
/* 									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>*/
/* 									<option value="Swaziland">Swaziland</option>*/
/* 									<option value="Sweden">Sweden</option>*/
/* 									<option value="Switzerland">Switzerland</option>*/
/* 									<option value="Syrian Arab Republic">Syrian Arab Republic</option>*/
/* 									<option value="Taiwan, Province of China">Taiwan, Province of China</option>*/
/* 									<option value="Tajikistan">Tajikistan</option>*/
/* 									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>*/
/* 									<option value="Thailand">Thailand</option>*/
/* 									<option value="Timor-leste">Timor-leste</option>*/
/* 									<option value="Togo">Togo</option>*/
/* 									<option value="Tokelau">Tokelau</option>*/
/* 									<option value="Tonga">Tonga</option>*/
/* 									<option value="Trinidad and Tobago">Trinidad and Tobago</option>*/
/* 									<option value="Tunisia">Tunisia</option>*/
/* 									<option value="Turkey">Turkey</option>*/
/* 									<option value="Turkmenistan">Turkmenistan</option>*/
/* 									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>*/
/* 									<option value="Tuvalu">Tuvalu</option>*/
/* 									<option value="Uganda">Uganda</option>*/
/* 									<option value="Ukraine">Ukraine</option>*/
/* 									<option value="United Arab Emirates">United Arab Emirates</option>*/
/* 									<option value="United Kingdom">United Kingdom</option>*/
/* 									<option value="United States">United States</option>*/
/* 									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>*/
/* 									<option value="Uruguay">Uruguay</option>*/
/* 									<option value="Uzbekistan">Uzbekistan</option>*/
/* 									<option value="Vanuatu">Vanuatu</option>*/
/* 									<option value="Venezuela">Venezuela</option>*/
/* 									<option value="Viet Nam">Viet Nam</option>*/
/* 									<option value="Virgin Islands, British">Virgin Islands, British</option>*/
/* 									<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>*/
/* 									<option value="Wallis and Futuna">Wallis and Futuna</option>*/
/* 									<option value="Western Sahara">Western Sahara</option>*/
/* 									<option value="Yemen">Yemen</option>*/
/* 									<option value="Zambia">Zambia</option>*/
/* 									<option value="Zimbabwe">Zimbabwe</option>*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="light">State/Province<span class="required">*</span></label>*/
/* 								<select name="select" class="selectpicker" data-width="100%">*/
/* 									<option value="Select region">Select region, state or province</option>*/
/* 									<option value="United Kingdom">United Kingdom</option>*/
/* 									<option value="Afghanistan">Afghanistan</option>*/
/* 									<option value="Albania">Albania</option>*/
/* 									<option value="Algeria">Algeria</option>*/
/* 									<option value="American Samoa">American Samoa</option>*/
/* 									<option value="Andorra">Andorra</option>*/
/* 									<option value="Angola">Angola</option>*/
/* 									<option value="Anguilla">Anguilla</option>*/
/* 									<option value="Antarctica">Antarctica</option>*/
/* 									<option value="Antigua and Barbuda">Antigua and Barbuda</option>*/
/* 									<option value="Argentina">Argentina</option>*/
/* 									<option value="Armenia">Armenia</option>*/
/* 									<option value="Aruba">Aruba</option>*/
/* 									<option value="Australia">Australia</option>*/
/* 									<option value="Austria">Austria</option>*/
/* 									<option value="Azerbaijan">Azerbaijan</option>*/
/* 									<option value="Bahamas">Bahamas</option>*/
/* 									<option value="Bahrain">Bahrain</option>*/
/* 									<option value="Bangladesh">Bangladesh</option>*/
/* 									<option value="Barbados">Barbados</option>*/
/* 									<option value="Belarus">Belarus</option>*/
/* 									<option value="Belgium">Belgium</option>*/
/* 									<option value="Belize">Belize</option>*/
/* 									<option value="Benin">Benin</option>*/
/* 									<option value="Bermuda">Bermuda</option>*/
/* 									<option value="Bhutan">Bhutan</option>*/
/* 									<option value="Bolivia">Bolivia</option>*/
/* 									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>*/
/* 									<option value="Botswana">Botswana</option>*/
/* 									<option value="Bouvet Island">Bouvet Island</option>*/
/* 									<option value="Brazil">Brazil</option>*/
/* 									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>*/
/* 									<option value="Brunei Darussalam">Brunei Darussalam</option>*/
/* 									<option value="Bulgaria">Bulgaria</option>*/
/* 									<option value="Burkina Faso">Burkina Faso</option>*/
/* 									<option value="Burundi">Burundi</option>*/
/* 									<option value="Cambodia">Cambodia</option>*/
/* 									<option value="Cameroon">Cameroon</option>*/
/* 									<option value="Canada">Canada</option>*/
/* 									<option value="Cape Verde">Cape Verde</option>*/
/* 									<option value="Cayman Islands">Cayman Islands</option>*/
/* 									<option value="Central African Republic">Central African Republic</option>*/
/* 									<option value="Chad">Chad</option>*/
/* 									<option value="Chile">Chile</option>*/
/* 									<option value="China">China</option>*/
/* 									<option value="Christmas Island">Christmas Island</option>*/
/* 									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>*/
/* 									<option value="Colombia">Colombia</option>*/
/* 									<option value="Comoros">Comoros</option>*/
/* 									<option value="Congo">Congo</option>*/
/* 									<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>*/
/* 									<option value="Cook Islands">Cook Islands</option>*/
/* 									<option value="Costa Rica">Costa Rica</option>*/
/* 									<option value="Cote D'ivoire">Cote D'ivoire</option>*/
/* 									<option value="Croatia">Croatia</option>*/
/* 									<option value="Cuba">Cuba</option>*/
/* 									<option value="Cyprus">Cyprus</option>*/
/* 									<option value="Czech Republic">Czech Republic</option>*/
/* 									<option value="Denmark">Denmark</option>*/
/* 									<option value="Djibouti">Djibouti</option>*/
/* 									<option value="Dominica">Dominica</option>*/
/* 									<option value="Dominican Republic">Dominican Republic</option>*/
/* 									<option value="Ecuador">Ecuador</option>*/
/* 									<option value="Egypt">Egypt</option>*/
/* 									<option value="El Salvador">El Salvador</option>*/
/* 									<option value="Equatorial Guinea">Equatorial Guinea</option>*/
/* 									<option value="Eritrea">Eritrea</option>*/
/* 									<option value="Estonia">Estonia</option>*/
/* 									<option value="Ethiopia">Ethiopia</option>*/
/* 									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>*/
/* 									<option value="Faroe Islands">Faroe Islands</option>*/
/* 									<option value="Fiji">Fiji</option>*/
/* 									<option value="Finland">Finland</option>*/
/* 									<option value="France">France</option>*/
/* 									<option value="French Guiana">French Guiana</option>*/
/* 									<option value="French Polynesia">French Polynesia</option>*/
/* 									<option value="French Southern Territories">French Southern Territories</option>*/
/* 									<option value="Gabon">Gabon</option>*/
/* 									<option value="Gambia">Gambia</option>*/
/* 									<option value="Georgia">Georgia</option>*/
/* 									<option value="Germany">Germany</option>*/
/* 									<option value="Ghana">Ghana</option>*/
/* 									<option value="Gibraltar">Gibraltar</option>*/
/* 									<option value="Greece">Greece</option>*/
/* 									<option value="Greenland">Greenland</option>*/
/* 									<option value="Grenada">Grenada</option>*/
/* 									<option value="Guadeloupe">Guadeloupe</option>*/
/* 									<option value="Guam">Guam</option>*/
/* 									<option value="Guatemala">Guatemala</option>*/
/* 									<option value="Guinea">Guinea</option>*/
/* 									<option value="Guinea-bissau">Guinea-bissau</option>*/
/* 									<option value="Guyana">Guyana</option>*/
/* 									<option value="Haiti">Haiti</option>*/
/* 									<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>*/
/* 									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>*/
/* 									<option value="Honduras">Honduras</option>*/
/* 									<option value="Hong Kong">Hong Kong</option>*/
/* 									<option value="Hungary">Hungary</option>*/
/* 									<option value="Iceland">Iceland</option>*/
/* 									<option value="India">India</option>*/
/* 									<option value="Indonesia">Indonesia</option>*/
/* 									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>*/
/* 									<option value="Iraq">Iraq</option>*/
/* 									<option value="Ireland">Ireland</option>*/
/* 									<option value="Israel">Israel</option>*/
/* 									<option value="Italy">Italy</option>*/
/* 									<option value="Jamaica">Jamaica</option>*/
/* 									<option value="Japan">Japan</option>*/
/* 									<option value="Jordan">Jordan</option>*/
/* 									<option value="Kazakhstan">Kazakhstan</option>*/
/* 									<option value="Kenya">Kenya</option>*/
/* 									<option value="Kiribati">Kiribati</option>*/
/* 									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>*/
/* 									<option value="Korea, Republic of">Korea, Republic of</option>*/
/* 									<option value="Kuwait">Kuwait</option>*/
/* 									<option value="Kyrgyzstan">Kyrgyzstan</option>*/
/* 									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>*/
/* 									<option value="Latvia">Latvia</option>*/
/* 									<option value="Lebanon">Lebanon</option>*/
/* 									<option value="Lesotho">Lesotho</option>*/
/* 									<option value="Liberia">Liberia</option>*/
/* 									<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>*/
/* 									<option value="Liechtenstein">Liechtenstein</option>*/
/* 									<option value="Lithuania">Lithuania</option>*/
/* 									<option value="Luxembourg">Luxembourg</option>*/
/* 									<option value="Macao">Macao</option>*/
/* 									<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>*/
/* 									<option value="Madagascar">Madagascar</option>*/
/* 									<option value="Malawi">Malawi</option>*/
/* 									<option value="Malaysia">Malaysia</option>*/
/* 									<option value="Maldives">Maldives</option>*/
/* 									<option value="Mali">Mali</option>*/
/* 									<option value="Malta">Malta</option>*/
/* 									<option value="Marshall Islands">Marshall Islands</option>*/
/* 									<option value="Martinique">Martinique</option>*/
/* 									<option value="Mauritania">Mauritania</option>*/
/* 									<option value="Mauritius">Mauritius</option>*/
/* 									<option value="Mayotte">Mayotte</option>*/
/* 									<option value="Mexico">Mexico</option>*/
/* 									<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>*/
/* 									<option value="Moldova, Republic of">Moldova, Republic of</option>*/
/* 									<option value="Monaco">Monaco</option>*/
/* 									<option value="Mongolia">Mongolia</option>*/
/* 									<option value="Montserrat">Montserrat</option>*/
/* 									<option value="Morocco">Morocco</option>*/
/* 									<option value="Mozambique">Mozambique</option>*/
/* 									<option value="Myanmar">Myanmar</option>*/
/* 									<option value="Namibia">Namibia</option>*/
/* 									<option value="Nauru">Nauru</option>*/
/* 									<option value="Nepal">Nepal</option>*/
/* 									<option value="Netherlands">Netherlands</option>*/
/* 									<option value="Netherlands Antilles">Netherlands Antilles</option>*/
/* 									<option value="New Caledonia">New Caledonia</option>*/
/* 									<option value="New Zealand">New Zealand</option>*/
/* 									<option value="Nicaragua">Nicaragua</option>*/
/* 									<option value="Niger">Niger</option>*/
/* 									<option value="Nigeria">Nigeria</option>*/
/* 									<option value="Niue">Niue</option>*/
/* 									<option value="Norfolk Island">Norfolk Island</option>*/
/* 									<option value="Northern Mariana Islands">Northern Mariana Islands</option>*/
/* 									<option value="Norway">Norway</option>*/
/* 									<option value="Oman">Oman</option>*/
/* 									<option value="Pakistan">Pakistan</option>*/
/* 									<option value="Palau">Palau</option>*/
/* 									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>*/
/* 									<option value="Panama">Panama</option>*/
/* 									<option value="Papua New Guinea">Papua New Guinea</option>*/
/* 									<option value="Paraguay">Paraguay</option>*/
/* 									<option value="Peru">Peru</option>*/
/* 									<option value="Philippines">Philippines</option>*/
/* 									<option value="Pitcairn">Pitcairn</option>*/
/* 									<option value="Poland">Poland</option>*/
/* 									<option value="Portugal">Portugal</option>*/
/* 									<option value="Puerto Rico">Puerto Rico</option>*/
/* 									<option value="Qatar">Qatar</option>*/
/* 									<option value="Reunion">Reunion</option>*/
/* 									<option value="Romania">Romania</option>*/
/* 									<option value="Russian Federation">Russian Federation</option>*/
/* 									<option value="Rwanda">Rwanda</option>*/
/* 									<option value="Saint Helena">Saint Helena</option>*/
/* 									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>*/
/* 									<option value="Saint Lucia">Saint Lucia</option>*/
/* 									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>*/
/* 									<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>*/
/* 									<option value="Samoa">Samoa</option>*/
/* 									<option value="San Marino">San Marino</option>*/
/* 									<option value="Sao Tome and Principe">Sao Tome and Principe</option>*/
/* 									<option value="Saudi Arabia">Saudi Arabia</option>*/
/* 									<option value="Senegal">Senegal</option>*/
/* 									<option value="Serbia and Montenegro">Serbia and Montenegro</option>*/
/* 									<option value="Seychelles">Seychelles</option>*/
/* 									<option value="Sierra Leone">Sierra Leone</option>*/
/* 									<option value="Singapore">Singapore</option>*/
/* 									<option value="Slovakia">Slovakia</option>*/
/* 									<option value="Slovenia">Slovenia</option>*/
/* 									<option value="Solomon Islands">Solomon Islands</option>*/
/* 									<option value="Somalia">Somalia</option>*/
/* 									<option value="South Africa">South Africa</option>*/
/* 									<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>*/
/* 									<option value="Spain">Spain</option>*/
/* 									<option value="Sri Lanka">Sri Lanka</option>*/
/* 									<option value="Sudan">Sudan</option>*/
/* 									<option value="Suriname">Suriname</option>*/
/* 									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>*/
/* 									<option value="Swaziland">Swaziland</option>*/
/* 									<option value="Sweden">Sweden</option>*/
/* 									<option value="Switzerland">Switzerland</option>*/
/* 									<option value="Syrian Arab Republic">Syrian Arab Republic</option>*/
/* 									<option value="Taiwan, Province of China">Taiwan, Province of China</option>*/
/* 									<option value="Tajikistan">Tajikistan</option>*/
/* 									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>*/
/* 									<option value="Thailand">Thailand</option>*/
/* 									<option value="Timor-leste">Timor-leste</option>*/
/* 									<option value="Togo">Togo</option>*/
/* 									<option value="Tokelau">Tokelau</option>*/
/* 									<option value="Tonga">Tonga</option>*/
/* 									<option value="Trinidad and Tobago">Trinidad and Tobago</option>*/
/* 									<option value="Tunisia">Tunisia</option>*/
/* 									<option value="Turkey">Turkey</option>*/
/* 									<option value="Turkmenistan">Turkmenistan</option>*/
/* 									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>*/
/* 									<option value="Tuvalu">Tuvalu</option>*/
/* 									<option value="Uganda">Uganda</option>*/
/* 									<option value="Ukraine">Ukraine</option>*/
/* 									<option value="United Arab Emirates">United Arab Emirates</option>*/
/* 									<option value="United Kingdom">United Kingdom</option>*/
/* 									<option value="United States">United States</option>*/
/* 									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>*/
/* 									<option value="Uruguay">Uruguay</option>*/
/* 									<option value="Uzbekistan">Uzbekistan</option>*/
/* 									<option value="Vanuatu">Vanuatu</option>*/
/* 									<option value="Venezuela">Venezuela</option>*/
/* 									<option value="Viet Nam">Viet Nam</option>*/
/* 									<option value="Virgin Islands, British">Virgin Islands, British</option>*/
/* 									<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>*/
/* 									<option value="Wallis and Futuna">Wallis and Futuna</option>*/
/* 									<option value="Western Sahara">Western Sahara</option>*/
/* 									<option value="Yemen">Yemen</option>*/
/* 									<option value="Zambia">Zambia</option>*/
/* 									<option value="Zimbabwe">Zimbabwe</option>*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="light">Zip/Postal Code</label>*/
/* 								<input name="zip-code" type="text" class="form-control" id="zip-code">*/
/* 							</div>*/
/* 							<button class="btn btn-cool btn-md-sm" type="submit">GET A QUOTE</button>*/
/* 						</form>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-6 col-md-4 ">*/
/* 					<div class="rect-nohover">*/
/* 						<h3>DISCOUNT CODES</h3>*/
/* 						<p>*/
/* 							Enter your coupon code if you have one*/
/* 						</p>*/
/* 						<form action="#">*/
/* 							<div class="form-group">*/
/* 								<input name="coupon-code" type="text" class="form-control" id="coupon-code">*/
/* 							</div>*/
/* 							<button class="btn btn-cool btn-md-sm" type="submit">APPLY COUPON</button>*/
/* 						</form>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="divider divider-sm visible-sm">*/
/* 				</div>*/
/* 				<div class="col-sm-12 col-md-4 ">*/
/* 					<div class="rect-nohover">*/
/* 						<table class="table table-total">*/
/* 						<tr>*/
/* 							<th class="text-right">*/
/* 								Subtotal*/
/* 							</th>*/
/* 							<th class="td-divider">*/
/* 							</th>*/
/* 							<th>*/
/* 								 $295.00*/
/* 							</th>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td class="text-right">*/
/* 								<h2>GRAND TOTAL</h2>*/
/* 							</td>*/
/* 							<th class="td-divider">*/
/* 							</th>*/
/* 							<td>*/
/* 								<h2>$295.00</h2>*/
/* 							</td>*/
/* 						</tr>*/
/* 						</table>*/
/* 						<div class="text-center">*/
/* 							<button class="btn btn-cool btn-md invert-color" type="submit">PROCEED TO CHECKOUT</button>*/
/* 							<div class="divider divider-sm">*/
/* 							</div>*/
/* 							<div class="upper">*/
/* 								<a href="#"> Checkout with Multiple Addresses </a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		</section>*/
/* 		<!-- //end Page Content -->*/
/* 		*/
/* {% endblock %}*/
/* {% block javascript %}*/
/* <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>*/
/* <script src="{{asset('js/modernizr.custom.02163.js')}}"></script>*/
/* <script src="{{asset('js/jquery.finger.min.js')}}"></script>*/
/* <script src="{{asset('js/doubletaptogo.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>*/
/* <script src="{{asset('js/slick.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.parallax.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.inview.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.liMarquee.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.colorbox-min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.isotope.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.plugin.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery.countdown.min.js')}}"></script>*/
/* <script src="{{asset('js/cloudzoom.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap-select.js')}}"></script>*/
/* <script src="{{asset('js/coolbaby.js')}}"></script>*/
/* <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->*/
/* <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.ini.js')}}"></script>*/
/* {% endblock %}*/
