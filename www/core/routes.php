<?php
return array(
    '@Application=CMS(&|&amp;)Module=Articles(&|&amp;)Sector=showArticle(&|&amp;)ArticleID=([\d]+)@' => 'CMS/Articles/$4'
);
