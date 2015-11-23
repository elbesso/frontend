<?php
$subj = 'Request from web';
$unlckmsgtxt = 'test';
$MailHeader = 'From: support@oxygen-forensic.com'. "\r\n".
    'Subject: Request from web'."\r\n".
    'X-Mailer: oxygen-forensic.com web form';
mail("hellomylittleboy@gmail.com", $subj, $unlckmsgtxt, $MailHeader, "/usr/sbin/sendmail -t -i -f''test@forensicsuite.com''");