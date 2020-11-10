<?php

namespace App\Entity;

class ArticleSearch
{
    /**
     * @var string/null
     */
    private $articleSearch;

    /**
     * @return string/null
     */
    public function getArticleSearch(): ?string
    {
        return $this->articleSearch;
    }

    /**
     * @param string/null $articleSearch
     * @return ArticleSearch
     */
    public function setArticleSearch(string $articleSearch): ArticleSearch
    {
        $this->articleSearch = $articleSearch;
        return $this;
    }
}
