<pre>
<?php
$data = 'リオとニンザブロウとナミとリンリンとルンルン';
print_r(explode('と', $data));
print_r(explode('や', $data));
print_r(explode('と', $data, 3));
print_r(explode('と', $data, -2));
