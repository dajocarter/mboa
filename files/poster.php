<?php
// We'll be outputting a PDF
header('Content-Type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="AAA-2015-Flipped-Class-Poster.pdf"');

// The PDF source is in original.pdf
readfile('AAA-2015-Flipped-Class-Poster.pdf');
?>