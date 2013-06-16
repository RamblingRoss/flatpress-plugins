<h2>{$plang.head}</h2>
<p>{$plang.description}</p>

{include file=shared:errorlist.tpl}

{html_form class=option-set}

<h2>{$plang.searchbox_settings}</h2>

<dl class="option-list">
  <dt>
    <label for="googlesearchbox-bigbox">{$plang.bigbox}</label>
  </dt>
  <dd>
    <p>
      <input type="checkbox" name="googlesearchbox-bigbox" id="googlesearchbox-bigbox" {if $googlesearchboxchecked[0]}checked="checked"{/if} />
    </p>
  </dd>

  <dt>
    <label for="googlesearchbox-bigbox">{$plang.searchType}</label>
  </dt>
  <dd>
    {html_radios name='googlesearchbox-searchtyperadio' options=$googlesearchboxcheckedstype_radios
    selected=$googlesearchboxcheckedstype separator='<br />'}
  </dd>

</dl>

<h2>{$plang.google_settings}</h2>

<dl class="option-list">
  <dt>
    <label for="googlesearchbox-destn">{$plang.destn}</label>
  </dt>
  <dd>
    <p>
      <input id="googlesearchbox-destn" type="text" name="googlesearchbox-destn" value="{$googlesearchboxconf.destn}" />
      {$plang.destn_long}
    </p>
  </dd>
  <dt>
    <label for="googlesearchbox-cx">{$plang.cx}</label>
  </dt>
  <dd>
    <p>
      <input id="googlesearchbox-cx" type="text" name="googlesearchbox-cx" value="{$googlesearchboxconf.cx}" />
      {$plang.cx_long}
    </p>
  </dd>
  <dt>
    <label for="googlesearchbox-cof">{$plang.cof}</label>
  </dt>
  <dd>
    <p>
      <input id="googlesearchbox-cof" type="text" name="googlesearchbox-cof" value="{$googlesearchboxconf.cof}" />
      {$plang.cof_long}
    </p>
  </dd>
  <dt>
    <label for="googlesearchbox-ie">{$plang.ie}</label>
  </dt>
  <dd>
    <p>
      <input id="googlesearchbox-ie" type="text" name="googlesearchbox-ie" value="{$googlesearchboxconf.ie}" />
      {$plang.ie_long}
    </p>
  </dd>
</dl>





  

  <input type="submit" name="googlesearchbox-conf" value="{$plang.submit}"/>
			
{/html_form}

