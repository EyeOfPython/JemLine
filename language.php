<?php
if(isset($_GET['change-lang']))
	echo '<p>Language not supported.</p>';
?>
Choose: 
<form>
<input type="hidden" name="page" value="language" />
<select id="lang-chooser" class="lang-chooser" name="lang">
  <option value="af"
                 >
  ‪Afrikaans‬
  </option>
  <option value="az"
                 >
  ‪azərbaycan‬
  </option>
  <option value="in"
                 >
  ‪Bahasa Indonesia‬
  </option>
  <option value="ms"
                 >
  ‪Bahasa Melayu‬
  </option>
  <option value="ca"
                 >
  ‪català‬
  </option>
  <option value="cs"
                 >
  ‪čeština‬
  </option>
  <option value="da"
                 >
  ‪dansk‬
  </option>
  <option value="de"
                 >
  ‪Deutsch‬
  </option>
  <option value="et"
                 >
  ‪eesti‬
  </option>
  <option value="en-GB"
  selected="selected"
                 >
  ‪English (United Kingdom)‬
  </option>
  <option value="en"
                 >
  ‪English (United States)‬
  </option>
  <option value="es"
                 >
  ‪español (España)‬
  </option>
  <option value="es-419"
                 >
  ‪español (Latinoamérica)‬
  </option>
  <option value="eu"
                 >
  ‪euskara‬
  </option>
  <option value="fil"
                 >
  ‪Filipino‬
  </option>
  <option value="fr-CA"
                 >
  ‪français (Canada)‬
  </option>
  <option value="fr"
                 >
  ‪français (France)‬
  </option>
  <option value="gl"
                 >
  ‪galego‬
  </option>
  <option value="hr"
                 >
  ‪hrvatski‬
  </option>
  <option value="zu"
                 >
  ‪isiZulu‬
  </option>
  <option value="is"
                 >
  ‪íslenska‬
  </option>
  <option value="it"
                 >
  ‪italiano‬
  </option>
  <option value="sw"
                 >
  ‪Kiswahili‬
  </option>
  <option value="lv"
                 >
  ‪latviešu‬
  </option>
  <option value="lt"
                 >
  ‪lietuvių‬
  </option>
  <option value="hu"
                 >
  ‪magyar‬
  </option>
  <option value="nl"
                 >
  ‪Nederlands‬
  </option>
  <option value="no"
                 >
  ‪norsk‬
  </option>
  <option value="pl"
                 >
  ‪polski‬
  </option>
  <option value="pt"
                 >
  ‪português‬
  </option>
  <option value="pt-BR"
                 >
  ‪português (Brasil)‬
  </option>
  <option value="pt-PT"
                 >
  ‪português (Portugal)‬
  </option>
  <option value="ro"
                 >
  ‪română‬
  </option>
  <option value="sk"
                 >
  ‪slovenčina‬
  </option>
  <option value="sl"
                 >
  ‪slovenščina‬
  </option>
  <option value="fi"
                 >
  ‪suomi‬
  </option>
  <option value="sv"
                 >
  ‪svenska‬
  </option>
  </select> 
  <input type="submit" name="change-lang" value="Change language" />
 </form>