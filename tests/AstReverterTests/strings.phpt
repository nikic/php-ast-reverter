Strings Test
<=======>
<?php

'a';
'1';
'\n';
'"';
'\'';
'$a';
"a";
"1";
"\n";
"'";
"\"";
"$a";
"{$this->{$a->b()}}";
<=======>
"a";
"1";
"\n";
""";
"'";
"$a";
"a";
"1";
"
";
"'";
""";
"$a";
"{$this->{$a->b()}}";