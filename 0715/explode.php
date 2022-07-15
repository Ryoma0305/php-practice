<pre>
<?php
$data = 'リオ、ニンザブロウ、ナミとリンリン';
print_r(explode('、', $data));
print_r(explode('、', $data, -2));
