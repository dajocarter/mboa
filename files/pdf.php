<?php
// We'll be outputting a PDF
header('Content-Type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="HAPS-2015-Flipped-Histo-Workshop.pdf"');

// The PDF source is in original.pdf
readfile('HAPS-2015-Flipped-Histo-Workshop.pdf');
?>